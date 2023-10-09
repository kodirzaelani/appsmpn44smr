<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Postsearch extends Component
{

    use WithPagination;
    //view pagination menggunakan bootstrap
    //karena livewire versi 2 menggunakan tailwind
    protected $paginationTheme = 'bootstrap';

    /**
     * public variable
     */
    public $currentPage = 1;
    public $paginate    = 3;
    public $term;

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'term'      => ['except' => ''],
    ];

    public function mount()
    {
        $this->term = request()->query('term', '');
    }


    public function render()
    {
        $posts = Post::with('author', 'postcategory', 'tags')
            ->latest()
            ->published()
            ->publishedate()
            ->filter(request()->only(['term', 'year', 'month']))
            ->paginate($this->paginate);

        return view('livewire.template.frontend.nusantara.post.postsearch', [
            'posts' => $posts,
            'key'   => $this->term
        ]);
    }
}
