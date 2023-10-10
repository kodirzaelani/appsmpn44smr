<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Album;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;

class Albumall extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    /**
     * public variable
     */
    public $currentPage   = 1;
    public $paginate      = 3;
    public $search        = '';

    protected $queryString = [
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getalbumallQueryProperty()
    {
        return Album::with('author')
            ->latest()
            ->published()
            ->search(trim($this->search));
    }

    public function getalbumallProperty()
    {
        return $this->albumallQuery->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.album.albumall', [
            'albums' => $this->albumall,
        ]);
    }
}
