<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Album;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;

class Albumindex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    /**
     * public variable
     */
    public $perPage  = 3;

    public function render()
    {
        return view('livewire.template.frontend.nusantara.album.albumindex', [
            'albums' => Album::with('author')
                ->published()
                ->orderBy('created_at', 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
