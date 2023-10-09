<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Post;

use Livewire\Component;

class Postheadersearch extends Component
{
    public $search        = '';

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
    ];

    public function mount()
    {
        $this->fill(request()->only('search'));
        $this->resetSearch();
    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function render()
    {
        return view('livewire.template.frontend.nusantara.post.postheadersearch');
    }
}
