<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Album;

use App\Models\Album;
use Livewire\Component;
use Illuminate\Http\Request;

class Albumdetail extends Component
{
    public $segment;

    public function mount(Request $request, Album $album)
    {
        $album->increment('view_count');

        $this->segment = $request->segment(3);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.album.albumdetail', [
            'album' => Album::with('author')
                ->where('slug', $this->segment)
                ->first(),
            'title' => 'Album Detail',
        ]);
    }
}
