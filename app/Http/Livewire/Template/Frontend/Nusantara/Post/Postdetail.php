<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;

class Postdetail extends Component
{
    public $segment;

    public function mount(Request $request, Post $post)
    {
        $post->increment('view_count');

        $this->segment = $request->segment(3);
    }

    public function render()
    {

        return view('livewire.template.frontend.nusantara.post.postdetail', [
            'post' => Post::with('postcategory', 'author', 'tags')
                ->where('slug', $this->segment)
                ->first(),
            'title' => 'Post Detail'
        ]);
    }
}
