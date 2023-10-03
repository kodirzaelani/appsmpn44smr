<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Partials;

use App\Models\Post;
use Livewire\Component;

class Sidebarpostpupoler extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.partials.sidebarpostpupoler', [
            'post_popular' => Post::published()->popular()->take(3)->get()
        ]);
    }
}
