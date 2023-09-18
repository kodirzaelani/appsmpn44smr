<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Program;

use App\Models\Program;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

class Programcreate extends Component
{
    use WithFileUploads;
    public $title;
    public $link = '';
    public $typeprogram;
    public $targetview;
    public $icon;
    public $image;
    public $description;
    public $status;



    public function store()
    {
        $validateData = [
            'title'       => 'required|min:5',
            'typeprogram'  => 'required',
            'description' => 'required',
        ];

        $data = [];
        // Default data
        $data = [
            'title'       => $this->title,
            'slug'        => Str::slug($this->title),
            'typeprogram'  => $this->typeprogram,
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
            $imagedata = $manager->make('uploads/images/widget/' . $imageHashName)->resize(300, 200); // Jangan lupa sesauikan nama folder dengan public folder image
            $imagedata->save(public_path('uploads/images/widget/images_thumb/' . $imageHashName)); // Jangan lupa buat folder sesuai dengan rencana penyimpanan

            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $imageHashName
            ]);
        }



        $this->validate($validateData);

        $program = Program::create($data);

        // even listener -> emit
        $this->emit('programStored', $program);

        // This is to reset our public variables
        $this->cleanVars();
    }


    private function cleanVars()
    {
        // Kosongkan field input
        $this->title       = null;
        $this->typeprogram  = null;
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
        return view('livewire.template.backend.nusantara.program.programcreate');
    }
}
