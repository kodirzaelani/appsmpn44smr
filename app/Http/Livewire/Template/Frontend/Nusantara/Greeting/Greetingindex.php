<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Greeting;

use Livewire\Component;
use App\Models\Greeting;

class Greetingindex extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.greeting.greetingindex', [
            'greetings' => Greeting::published()->orderBy('created_at', 'desc')->take('1')->get(),
        ]);
    }
}
