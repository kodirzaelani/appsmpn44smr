<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Video;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Http\Request;

class Videodetail extends Component
{
    public $segment;

    public function mount(Request $request, Video $video)
    {
        $video->increment('view_count');

        $this->segment = $request->segment(3);
    }

    public function render()
    {
        $videoitem = Video::with('videocategory', 'author')
            ->where('slug', $this->segment)
            ->first();
        return view('livewire.template.frontend.nusantara.video.videodetail', [

            'videoother' => Video::published()
                ->where('videocategory_id',  $videoitem->videocategory_id)
                ->where('id', '!=', $videoitem->id)
                ->latest()
                ->take('3')
                ->get(),
            'video' => $videoitem,
            'title' => 'Video Detail',
            'category' => $videoitem->videocategory_id
        ]);
    }
}
