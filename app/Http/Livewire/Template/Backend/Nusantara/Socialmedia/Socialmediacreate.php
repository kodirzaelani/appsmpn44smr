<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Socialmedia;

use Livewire\Component;
use App\Models\Mediasocial;
use Illuminate\Support\Str;

class Socialmediacreate extends Component
{
    public $title;
    public $icon;
    public $class;
    public $scripthtml;
    public $slug;
    public $url;

    public function store()
    {
        $validateData = [
            'title' => 'required|min:2|unique:mediasocials,title',
        ];

        // Default data
        $data = [
            'title'      => $this->title,
            'slug'       => Str::slug($this->title),
            'icon'       => $this->icon,
            'class'      => $this->class,
            'url'        => $this->url,
            'scripthtml' => $this->scripthtml,
            'status'     => 1,
        ];

        $this->validate($validateData);

        $mediasocial = Mediasocial::create($data);

        // even listener -> emit
        $this->emit('mediasocialStored', $mediasocial);
        // This is to reset our public variables
        $this->cleanVars();
    }


    private function cleanVars()
    {
        // Kosongkan field input
        $this->title      = null;
        $this->icon       = null;
        $this->class      = null;
        $this->url        = null;
        $this->scripthtml = null;
    }

    public function render()
    {
        return view('livewire.template.backend.nusantara.socialmedia.socialmediacreate');
    }
}
