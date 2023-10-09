<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Video;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class Videoindex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    /**
     * public variable
     */
    public $perPage  = 3;

    public function render()
    {
        return view('livewire.template.frontend.nusantara.video.videoindex', [
            'videos' => Video::with('videocategory', 'author')
                ->published()
                ->orderBy('created_at', 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
