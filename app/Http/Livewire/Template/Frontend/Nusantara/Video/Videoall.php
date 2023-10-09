<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Video;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class Videoall extends Component
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

    public function getvideoallQueryProperty()
    {
        return Video::with('author', 'videocategory')
            ->latest()
            ->published()
            ->search(trim($this->search));
    }

    public function getvideoallProperty()
    {
        return $this->videoallQuery->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.video.videoall', [
            'videos' => $this->videoall,
        ]);
    }
}
