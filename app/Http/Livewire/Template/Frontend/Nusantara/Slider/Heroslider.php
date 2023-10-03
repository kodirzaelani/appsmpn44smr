<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Slider;

use App\Models\Slider;
use Livewire\Component;

class Heroslider extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.slider.heroslider', [
            'herosliders' => Slider::where('status', 1)
                ->latest()
                ->take(4)
                ->get()
        ]);
    }
}
