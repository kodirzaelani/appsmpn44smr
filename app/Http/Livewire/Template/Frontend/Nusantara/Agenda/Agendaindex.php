<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Agenda;

use App\Models\Agenda;
use Livewire\Component;
use Livewire\WithPagination;

class Agendaindex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    /**
     * public variable
     */
    public $perPage  = 3;

    public function render()
    {
        return view('livewire.template.frontend.nusantara.agenda.agendaindex', [
            'agendas' => Agenda::with('author')
                ->published()
                ->orderBy('created_at', 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
