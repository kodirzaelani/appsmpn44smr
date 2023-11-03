<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Socialmedia;

use Livewire\Component;
use App\Models\Mediasocial;
use Illuminate\Support\Str;

class Socialmediaedit extends Component
{
    public $title;
    public $icon;
    public $class;
    public $url;
    public $scripthtml;
    public $slug;

    public $modelId;

    protected $listeners = [
        'getModelId',
    ];

    public function getModelId($modelId)
    {
        $this->modelId = $modelId;

        $model            = Mediasocial::find($this->modelId);
        $this->title      = $model->title;
        $this->icon       = $model->icon;
        $this->class      = $model->class;
        $this->url        = $model->url;
        $this->scripthtml = $model->scripthtml;
    }

    public function update()
    {
        $validateData = [
            'title' => 'required|min:1',
        ];

        // Default data
        $data = [
            'title'      => $this->title,
            'slug'       => Str::slug($this->title),
            'icon'       => $this->icon,
            'class'      => $this->class,
            'url'        => $this->url,
            'scripthtml' => $this->scripthtml,
        ];

        $this->validate($validateData);
        $mediasocial = Mediasocial::find($this->modelId);

        $mediasocial->update($data);

        // even listener -> emit
        $this->emit('mediasocialUpdated', $mediasocial);
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
        return view('livewire.template.backend.nusantara.socialmedia.socialmediaedit');
    }
}
