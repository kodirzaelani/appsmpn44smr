<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Program;

use App\Models\Program;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

class Programedit extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public $previmage;
    public $description;
    public $typeprogram;
    public $uploadPath = 'uploads/images/widget';

    public $modelId;

    protected $listeners = [
        'getModelId',
    ];

    public function getModelId($modelId)
    {
        $this->modelId = $modelId;

        $model = Program::find($this->modelId);

        $this->title          = $model->title;
        $this->description    = $model->description;
        $this->previmage      = $model->image;
        $this->typeprogram     = $model->typeprogram;
    }

    public function update()
    {
        $validateData = [];
        $oldImage  = $this->previmage;

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
            'description' => $this->description,
            'updated_by'   => Auth::id(),
        ];



        if (!empty($this->image)) {
            // Append to the validation if image is not empty
            $validateData = array_merge($validateData, [
                'image'      => 'image|mimes:jpeg,jpg,png|max:1000',
            ]);
        }

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
                'image'      => $imageHashName,
                'scripthtml' => null,
            ]);
        }

        $this->validate($validateData);

        $program = Program::find($this->modelId);

        $program->update($data);

        // Jika gambar lama ada maka lakukan hapus gambar
        if ($oldImage !== $program->image) {
            $this->removeImage($oldImage);
        }

        // This is to reset our public variables
        $this->cleanVars();

        // even listener -> emit
        $this->emit('programUpdated', $program);
    }
    private function cleanVars()
    {
        // Kosongkan field input
        $this->title       = null;
        $this->typeprogram  = null;
        $this->image       = null;
        $this->description = null;
    }


    public function selectCancel($action)
    {
        if ($action == 'cancel') {
            $this->emit('widgeteditCancel');
            $this->cleanVars();
            $this->resetErrorBag();
            $this->resetValidation();
        }
    }

    private function removeImage($oldImage)
    {
        if (!empty($oldImage)) {
            $imagePath     = $this->uploadPath . '/' . $oldImage;
            $thumbnailPath = $this->uploadPath . '/images_thumb/' . $oldImage;

            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }

    public function render()
    {
        return view('livewire.template.backend.nusantara.program.programedit');
    }
}
