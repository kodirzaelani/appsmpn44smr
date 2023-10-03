<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Postcategory;
use Livewire\WithPagination;

class Postindex extends Component
{
    use WithPagination;
    //view pagination menggunakan bootstrap
    //karena livewire versi 2 menggunakan tailwind
    protected $paginationTheme = 'bootstrap';
    /**
     * public variable
     */
    public $perPage  = 3;


    public function render()
    {

        $posts = Post::with('postcategory', 'tags', 'author')
            ->published()
            ->publishedate()
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.template.frontend.nusantara.post.postindex', compact('posts'));
    }
}
