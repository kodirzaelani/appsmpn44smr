<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Fservice;

use App\Models\Page;
use App\Models\Album;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Postcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use phpDocumentor\Reflection\Types\Nullable;

class Fservicecreate extends Component
{
    use WithFileUploads;
    public $title;
    public $link = '';
    public $targetview;
    public $icon;
    public $image;
    public $description;
    public $status;



    public function store()
    {
        $validateData = [
            'title'       => 'required|min:5',
            'link'  => 'required',
            'targetview'  => 'required',
            'description' => 'required',
        ];

        $data = [];
        // Default data
        $data = [
            'title'       => $this->title,
            'slug'        => Str::slug($this->title),
            'link'        => $this->link,
            'targetview'  => $this->targetview,
            'icon'  => $this->icon,
            'description' => $this->description,
            'status'      => 1,
            'author_id'   => Auth::id(),
        ];


        if (!empty($this->image)) {
            $imageHashName = $this->image->hashName();

            // Upload the main image
            $this->image->store('images/widget/');

            // Create a thumbnail of the image using Intervention Image Library
            $manager = new ImageManager();
            $imagedata = $manager->make('uploads/images/widget/' . $imageHashName)->resize(350, 250); // Jangan lupa sesauikan nama folder dengan public folder image
            $imagedata->save(public_path('uploads/images/widget/images_thumb/' . $imageHashName)); // Jangan lupa buat folder sesuai dengan rencana penyimpanan

            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $imageHashName
            ]);
        }



        $this->validate($validateData);

        $fservice = Service::create($data);

        // even listener -> emit
        $this->emit('fserviceStored', $fservice);

        // This is to reset our public variables
        $this->cleanVars();
    }


    private function cleanVars()
    {
        // Kosongkan field input
        $this->title       = null;
        $this->link        = null;
        $this->targetview  = null;
        $this->icon  = null;
        $this->image       = null;
        $this->description = null;
    }

    public function resetLink()
    {
        $this->link = null;
        $this->emit('refreshParent');
    }


    public function selectCancel($action)
    {
        if ($action == 'cancel') {
            $this->emit('widgetCancel');
            $this->cleanVars();
            $this->resetErrorBag();
            $this->resetValidation();
        }
    }
    public function render()
    {
        return view('livewire.template.backend.nusantara.fservice.fservicecreate', [
            'pages' => Page::orderBy('created_at', 'desc')->where('status', 1)->get(),
            'albums' => Album::orderBy('created_at', 'desc')->where('status', 1)->get(),
            'postcategory' => Postcategory::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
