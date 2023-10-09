<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Postall extends Component
{
    use WithPagination;
    //view pagination menggunakan bootstrap
    //karena livewire versi 2 menggunakan tailwind
    protected $paginationTheme = 'bootstrap';

    /**
     * public variable
     */
    public $currentPage   = 1;
    public $paginate      = 3;
    public $search        = '';

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
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

    public function getPostallQueryProperty()
    {
        return Post::with('author', 'postcategory', 'tags')
            ->orderBy('created_at', 'desc')
            ->published()
            ->publishedate()
            ->search(trim($this->search));  //search menggunakan scopeSearch di model
    }

    public function getPostallProperty()
    {
        return $this->postallQuery->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.post.postall', [
            'posts' => $this->postall,
        ]);
    }
}
