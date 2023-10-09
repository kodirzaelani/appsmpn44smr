<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Agenda;

use App\Models\Agenda;
use Livewire\Component;
use Illuminate\Http\Request;

class Agendadetail extends Component
{
    public $segment;

    public function mount(Request $request, Agenda $agenda)
    {
        $agenda->increment('view_count');

        $this->segment = $request->segment(3);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.agenda.agendadetail', [
            'agenda' => Agenda::with('author')
                ->where('slug', $this->segment)
                ->first(),
            'title' => 'Agenda Detail',
        ]);
    }
}
