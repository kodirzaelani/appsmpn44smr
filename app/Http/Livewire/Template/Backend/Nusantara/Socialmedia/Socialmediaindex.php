<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Socialmedia;

use App\Models\Mediasocial;
use Livewire\Component;
use Livewire\WithPagination;

class Socialmediaindex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;
    public $sortDirection = 'asc';
    public $sortColumn    = 'title';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $title;
    public $icon;


    protected $listeners = [
        'mediasocialStored',
        'mediasocialUpdated',
    ];

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'title' => 'Title',
            'icon'  => 'Icon',
            'class'  => 'Class',
        ];
    }

    public function sortBy($column)
    {
        $this->sortColumn = $column;

        $this->sortDirection = $this->reverseSort();
    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
            ? 'desc'
            :  'asc';
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
        $this->headersTable = $this->headerConfig();
    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getMediasocialQueryProperty()
    {
        return Mediasocial::orderBy($this->sortColumn, $this->sortDirection)
            ->search(trim($this->search));  //search menggunakan scopeSearch di model
    }

    public function getMediasocialProperty()
    {
        return $this->mediasocialQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->mediasocial->pluck('icon')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function updatedChecked()
    {
        $this->selectPage = false;
    }

    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked   = $this->mediasocialQuery->pluck('icon')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function mediasocialStored($mediasocial)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title'             => 'Success!',
            'timer'             => 5000,
            'icon'              => 'success',
            'text'              => 'Mediasocial ' . $mediasocial['title'] . ' was Stored',
            'toast'             => true,                                          // Jika mau menggunakan toas
            'position'          => 'top-right',                                   // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function mediasocialUpdated($mediasocial)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Success!',
            'timer' => 5000,
            'icon'  => 'success',
            'text'  => 'Mediasocial ' . $mediasocial['title'] . ' was Updated',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);
        $this->statusUpdate = false;
    }

    public function selectItem($itemId, $action)
    {
        $this->statusUpdate = false;
        $this->selectedItem = $itemId;
        if ($action == 'delete') {
            // This will show the modal in the frontend
            $this->dispatchBrowserEvent('openDeleteModal');
        } elseif ($action == 'show') {
            $this->emit('getModelId', $this->selectedItem);
            // This will show the openShowModal in the frontend
            $this->dispatchBrowserEvent('openShowModal');
        } elseif ($action == 'edit') {
            $this->statusUpdate = true;
            $this->emit('getModelId', $this->selectedItem);
        }
    }

    public function deleteRecords()
    {
        Mediasocial::whereKey($this->checked)->delete();

        $this->checked    = [];
        $this->selectAll  = false;
        $this->selectPage = false;
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Selected Records were deleted Successfully',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeDeleteModalAll');
    }

    // Delete Single Record
    public function delete()
    {
        Mediasocial::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Mediasocial was deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);


        $this->emit('refreshParent');
        // This will hide the modal in the frontend
        $this->dispatchBrowserEvent('closeDeleteModal');
    }


    public function render()
    {
        return view('livewire.template.backend.nusantara.socialmedia.socialmediaindex', [
            'datamediasocial' => $this->mediasocial,
            'title'      => 'Mediasocial',
        ]);
    }
}
