<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Program;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;

class Programall extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;
    public $sortDirection = 'desc';
    public $sortColumn    = 'created_at';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $title;
    public $image;
    public $status;
    public $created_at;

    public $statusView = 0;


    protected $listeners = [
        'programStored',
        'programUpdated',
        'programeditCancel',
    ];

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'image'      => 'Image',
            'title'      => 'Title',
            'typeprogram'      => 'Program',
            'status'     => 'Status',
            // 'created_at' => 'Created',
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
            : 'asc';
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

    public function getProgramQueryProperty()
    {

        return Program::orderBy($this->sortColumn, $this->sortDirection)
            ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getProgramProperty()
    {
        return $this->programQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->program->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->programQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function programStored($program)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Success!',
            'timer' => 5000,
            'icon' => 'success',
            'text' => 'Program ' . $program['title'] . ' was Stored',
            'toast' => true, // Jika mau menggunakan toas
            'position' => 'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton' => false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
        $this->statusUpdate = false;
        $this->statusView = 0;
    }

    public function programUpdated($program)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Success!',
            'timer' => 5000,
            'icon' => 'success',
            'text' => 'Program ' . $program['title'] . ' was Updated',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton' => false,
        ]);
        $this->emit('refreshParent');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->statusUpdate = false;
        $this->statusView = 0;
    }

    public function selectItemview($action)
    {
        $this->statusView = false;

        if ($action == 'create') {
            $this->statusView = 1;
            $this->statusUpdate = false;
        } elseif ($action == 'cancel') {
            $this->statusView = 0;
            $this->statusUpdate = false;
        }
    }

    public function selectItem($itemId, $action)
    {
        $this->statusUpdate = false;

        $this->selectedItem = $itemId;
        if ($action == 'delete') {
            // This will show the modal in the frontend
            $this->dispatchBrowserEvent('openDeleteModal');
        } elseif ($action == 'edit') {
            $this->statusUpdate = true;
            $this->emit('getModelId', $this->selectedItem);
        } elseif ($action == 'add') {
            $this->statusUpdate = false;
        } elseif ($action == 'draft') {
            $this->changeDraft();
        } elseif ($action == 'publish') {
            $this->changePublish();
        }
    }

    public function programeditCancel()
    {
        $this->statusUpdate = false;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function changeDraft()
    {
        $data = [];
        $data = array_merge($data, ['status' => 0]);
        $post = Program::find($this->selectedItem);

        $post->update($data);
        session()->flash('success', 'Program Change to Draft was successfully');
        return redirect()->to('backend/programs');
    }

    public function changePublish()
    {
        $data = [];
        $data = array_merge($data, ['status' => 1]);
        $post = Program::find($this->selectedItem);

        $post->update($data);
        session()->flash('success', 'Program Change to Publish was successfully');
        return redirect()->to('backend/programs');
    }

    public function deleteRecords()
    {
        Program::whereKey($this->checked)->delete();

        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon' => 'success',
            'text' => 'Selected Records were deleted Successfully',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton' => false,
        ]);
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeDeleteModalAll');
    }

    // Delete Single Record
    public function delete()
    {
        Program::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Program was deleted',
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
        return view('livewire.template.backend.nusantara.program.programall', [
            'dataprogramall' => $this->program,
        ]);
    }
}
