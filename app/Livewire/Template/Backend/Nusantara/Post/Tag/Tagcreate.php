<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Post\Tag;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class Tagcreate extends Component
{
    public $title;
    public $slug;



    public function store()
    {
        $validateData = [
            'title' => 'required|min:2|unique:tags,title',
        ];

         // Default data
         $data = [
            'title' => $this->title,
            'slug'  => Str::slug($this->title,),

        ];

        $this->validate($validateData);

        $tag = Tag::create($data);

        // even listener -> emit
        $this->emit('tagStored', $tag);
        // This is to reset our public variables
        $this->cleanVars();

    }


    private function cleanVars()
    {
        // Kosongkan field input
        $this->title = null;
    }
    public function render()
    {
        return view('livewire.template.backend.nusantara.post.tag.tagcreate');
    }
}
