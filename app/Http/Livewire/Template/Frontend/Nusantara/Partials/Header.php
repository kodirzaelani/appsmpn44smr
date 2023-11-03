<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Partials;

use Livewire\Component;
use Efectn\Menu\Facades\Menu;

class Header extends Component
{


    public function render()
    {
        return view('livewire.template.frontend.nusantara.partials.header', [
            'public_menu' => Menu::getByName('Header'),
        ]);
    }
}
