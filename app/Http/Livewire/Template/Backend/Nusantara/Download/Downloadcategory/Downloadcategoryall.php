<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Download\Downloadcategory;

use Livewire\Component;
use App\Models\Download;
use Livewire\WithPagination;
use App\Models\Downloadcategory;

class Downloadcategoryall extends Component
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
    public $uploadPath = 'uploads/images/downloadcategory';

    public $author_id;
    public $title;
    public $slug;
    public $statusView;


    protected $listeners = [
        'downloadcategoryStored',
        'downloadcategoryUpdated',
    ];

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            // 'image'           => 'Image',
            'title' => 'Title',
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

    public function getDownloadcategoryallQueryProperty()
    {
        return Downloadcategory::orderBy($this->sortColumn, $this->sortDirection)
            ->search(trim($this->search));  //search menggunakan scopeSearch di model
    }

    public function getDownloadcategoryallProperty()
    {
        return $this->downloadcategoryallQuery->paginate($this->paginate);
    }

    public function updatedSelectDownloadcategory($value)
    {
        if ($value) {
            $this->checked = $this->downloadcategoryall->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked   = $this->downloadcategoryallQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function downloadcategoryStored($downloadcategory)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title'             => 'Success!',
            'timer'             => 5000,
            'type'              => 'success',
            'text'              => 'Download Category ' . $downloadcategory['title'] . ' was Stored',
            'toast'             => true,                                                                // Jika mau menggunakan toas
            'position'          => 'top-right',                                                         // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
        $this->statusView = false;
    }

    public function downloadcategoryUpdated($downloadcategory)
    {
        // Sweet alert
        $this->dispatchBrowserEvent('swal:modal', [
            'title' => 'Success!',
            'timer' => 5000,
            'type'  => 'success',
            'text'  => 'Download Category ' . $downloadcategory['title'] . ' was Updated',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);
        $this->statusView = false;
        $this->statusUpdate = false;
    }

    public function selectItemview($action)
    {
        $this->statusView = false;

        if ($action == 'create') {
            $this->statusView   = true;
            $this->statusUpdate = false;
        } elseif ($action == 'cancel') {
            $this->statusView = false;
        }
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
        } else {
            $this->emit('getModelId', $this->selectedItem);
            // This will show the openUpdateModal in the frontend
            $this->dispatchBrowserEvent('openEditModal');
        }
    }

    public function changeDraft()
    {
        $data             = [];
        $data             = array_merge($data, ['status' => 0]);
        $downloadcategory = Downloadcategory::find($this->selectedItem);

        $downloadcategory->update($data);
        session()->flash('success', 'Downloadcategory Change to Draft was successfully');
        return redirect()->to('backend/downloadcategories');
    }

    public function changePublish()
    {
        $data             = [];
        $data             = array_merge($data, ['status' => 1]);
        $downloadcategory = Downloadcategory::find($this->selectedItem);

        $downloadcategory->update($data);
        session()->flash('success', 'Downloadcategory Change to Publish was successfully');
        return redirect()->to('backend/downloadcategories');
    }

    public function deleteRecords()
    {
        Downloadcategory::whereKey($this->checked)->delete();

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
        $masterdownloadcategory = Downloadcategory::where('masterstatus', 1)->first();

        $downloadcategory = Downloadcategory::find($this->selectedItem);

        if ($downloadcategory->masterstatus == config('cms.default_masterdownloadcategory')) {
            $this->dispatchBrowserEvent('swal:modaldelete', [
                'title' => 'Importan!',
                'timer' => 4000,
                'type'  => 'warning',
                'text'  => 'Download Category cannot deleted',
                // 'toast'=>true, // Jika mau menggunakan toas
                // 'position'=>'top-right', // Jika mau menggunakan toas
                'showConfirmButton' => true,
                'showCancelButton'  => false,
            ]);
            $this->emit('refreshParent');
            $this->dispatchBrowserEvent('closeDeleteModal');
        } else {

            // Update downloads yang downloadcategory_id dihapus ke downloadcategory_id master
            Download::where('downloadcategory_id', $downloadcategory->id)->update(['downloadcategory_id' => $masterdownloadcategory->id]);

            Downloadcategory::destroy($this->selectedItem);

            if ($downloadcategory->image) {
                $this->removeImage($downloadcategory->image);
            }
            // Sweet alert
            $this->dispatchBrowserEvent('swal:modal', [
                'title' => 'Deleted Success!',
                'timer' => 4000,
                'type'  => 'success',
                'text'  => 'Download Category was deleted',
                // 'toast'=>true, // Jika mau menggunakan toas
                // 'position'=>'top-right', // Jika mau menggunakan toas
                'showConfirmButton' => true,
                'showCancelButton'  => false,
            ]);

            $this->emit('refreshParent');
            // This will hide the modal in the frontend
            $this->dispatchBrowserEvent('closeDeleteModal');
        }
    }

    public function render()
    {
        return view('livewire.template.backend.nusantara.download.downloadcategory.downloadcategoryall', [
            'datadownloadcategoryall' => $this->downloadcategoryall,
        ]);
    }
}
