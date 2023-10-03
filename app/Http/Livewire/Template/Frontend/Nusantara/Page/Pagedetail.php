<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Page;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Http\Request;

class Pagedetail extends Component
{
    public $segment;

    public function mount(Request $request, Page $page)
    {

        $this->segment = $request->segment(3);
        $page->where('slug', $this->segment)->increment('view_count');
    }


    public function render()
    {
        return view('livewire.template.frontend.nusantara.page.pagedetail', [
            'page' => Page::where('slug', $this->segment)->first()
        ]);
    }
}
