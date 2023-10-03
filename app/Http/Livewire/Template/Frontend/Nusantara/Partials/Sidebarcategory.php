<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Partials;

use App\Models\Postcategory;
use Livewire\Component;

class Sidebarcategory extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.partials.sidebarcategory', [
            'postcategories' => Postcategory::with('posts')->orderBy('title', 'asc')->get(),
            'titlecategory' => 'Kategori',
        ]);
    }
}
