<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Agenda;

use App\Models\Agenda;
use Livewire\Component;
use Livewire\WithPagination;

class Agendaall extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    /**
     * public variable
     */
    public $currentPage   = 1;
    public $paginate      = 3;
    public $search        = '';

    protected $queryString = [
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getagendaallQueryProperty()
    {
        return Agenda::with('author', 'agendacategory')
            ->latest()
            ->published()
            ->search(trim($this->search));
    }

    public function getagendaallProperty()
    {
        return $this->agendaallQuery->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.agenda.agendaall', [
            'agendas' => $this->agendaall,
        ]);
    }
}
