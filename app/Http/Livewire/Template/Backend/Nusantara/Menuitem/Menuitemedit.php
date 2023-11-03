<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Menuitem;

use App\Models\Page;
use App\Models\Album;
use Livewire\Component;
use App\Models\Postcategory;
use Efectn\Menu\Models\Menus;
use App\Models\Itemmenufrontend;

class Menuitemedit extends Component
{
    public $label;
    public $link;
    public $menu_id;
    public $typemenu;
    public $linkid;
    public $prevlink;
    public $target;

    public $urlnow;

    public $modelId;

    protected $listeners = [
        'getModelId',
    ];

    public function getModelId($modelId)
    {
        $this->modelId = $modelId;

        $model = Itemmenufrontend::find($this->modelId);

        $this->label    = $model->label;
        $this->link     = $model->link;
        $this->menu_id  = $model->menu_id;
        $this->typemenu = $model->typemenu;
        $this->prevlink = $model->link;
        $this->target   = $model->target;
    }

    public function update()
    {
        $validateData = [
            'label'    => 'required|min:2',
            'typemenu' => 'required',
            'menu_id'  => 'required',
        ];

        $data = [];
        // Default data
        $data = [
            'label'    => $this->label,
            'typemenu' => $this->typemenu,
            'menu_id'  => $this->menu_id,
            'target'   => $this->target,
        ];

        $this->urlnow = config('app.url');

        if ($this->link == '/') {
            $basicurl = $this->urlnow;
        } else {
            $basicurl = $this->urlnow . '/' . $this->link;
        }

        if ($this->typemenu == 9) {
            $blink = $this->link;
            $data  = array_merge($data, [
                'link' => $blink,
            ]);
        } else {
            $blink = $basicurl;
            $data  = array_merge($data, [
                'link' => $blink,
            ]);
        }

        // if ($this->typemenu == 1) {
        //     $blink   = $basicurl;
        //     $data = array_merge($data, [
        //         'link'   => $blink,
        //     ]);
        // } elseif ($this->typemenu == 9) {
        //     $blink   = $this->link;
        //     $data = array_merge($data, [
        //         'link'   => $blink,
        //     ]);
        // } else{
        //     $blink   = $basicurl;
        //     $data = array_merge($data, [
        //         'link'   => $blink,
        //     ]);
        // }

        // Just add validation if there are any changes in the fields
        $this->validate($validateData);

        $menuitem = Itemmenufrontend::find($this->modelId);

        $menuitem->update($data);

        // even listener -> emit
        $this->emit('menuitemUpdated', $menuitem);
        // This is to reset our public variables
        $this->cleanVars();
    }

    private function cleanVars()
    {
        // Kosongkan field input
        $this->label    = null;
        $this->link     = null;
        $this->menu_id  = null;
        $this->typemenu = null;
        $this->linkid   = null;
        $this->target   = null;
    }
    public function selectCancel($action)
    {
        if ($action == 'cancel') {
            $this->emit('menuitemCancel');
            $this->cleanVars();
            $this->resetErrorBag();
            $this->resetValidation();
        }
    }
    public function render()
    {
        return view('livewire.template.backend.nusantara.menuitem.menuitemedit', [
            'menus'        => Menus::orderBy('name', 'asc')->where('status', '1')->get(),
            'pages'        => Page::orderBy('title', 'asc')->where('status', 1)->get(),
            'albums'       => Album::orderBy('title', 'asc')->where('status', 1)->get(),
            'postcategory' => Postcategory::orderBy('title', 'asc')->get(),
        ]);
    }
}
