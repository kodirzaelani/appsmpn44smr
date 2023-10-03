<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Greeting;

use Livewire\Component;
use App\Models\Greeting;
use Illuminate\Http\Request;

class Greetingdetail extends Component
{
    public $segment;

    public function mount(Request $request, Greeting $greeting)
    {
        $greeting->increment('view_count');

        $this->segment = $request->segment(3);
    }

    public function render()
    {

        return view('livewire.template.frontend.nusantara.greeting.greetingdetail', [
            'greeting' => Greeting::published()->where('slug', $this->segment)->first(),
            'title' => 'Sambutan Detail'
        ]);
    }
}
