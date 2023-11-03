<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Partials;

use Livewire\Component;
use Efectn\Menu\Facades\Menu;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.partials.footer', [
            'public_menu_footer' => Menu::getByName('FooterAbout'),
        ]);
    }
}
