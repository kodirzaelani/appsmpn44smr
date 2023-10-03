<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Partials;

use App\Models\Post;
use Livewire\Component;

class Sidebarrecentpost extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.partials.sidebarrecentpost', [
            'post_recent' => Post::published()->latest()->take(3)->get()
        ]);
    }
}
