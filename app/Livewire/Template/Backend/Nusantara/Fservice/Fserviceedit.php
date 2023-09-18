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

class Fserviceedit extends Component
{
    use WithFileUploads;
    public $title;
    public $status;
    public $link;
    public $prevlink;
    public $menu;
    public $icon;
    public $previcon;
    public $targetview;
    public $image;
    public $previmage;
    public $description;
    public $statustitle;
    public $uploadPath = 'uploads/images/widget';

    public $modelId;

    protected $listeners = [
        'getModelId',
    ];

    public function getModelId($modelId)
    {
        $this->modelId = $modelId;

        $model = Service::find($this->modelId);

        $this->title          = $model->title;
        $this->link           = $model->link;
        $this->icon       = $model->icon;
        $this->description    = $model->description;
        $this->prevlink       = $model->link;
        $this->previmage      = $model->image;
        $this->targetview     = $model->targetview;
    }

    public function update()
    {
        $validateData = [];
        $oldImage  = $this->previmage;

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
            'updated_by'   => Auth::id(),
        ];



        if (!empty($this->image)) {
            // Append to the validation if image is not empty
            $validateData = array_merge($validateData, [
                'image'      => 'image|mimes:jpeg,jpg,png',
            ]);
        }

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
                'image'      => $imageHashName,
            ]);
        }

        $this->validate($validateData);

        $fservice = Service::find($this->modelId);

        $fservice->update($data);

        // Jika gambar lama ada maka lakukan hapus gambar
        if ($oldImage !== $fservice->image) {
            $this->removeImage($oldImage);
        }

        // This is to reset our public variables
        $this->cleanVars();

        // even listener -> emit
        $this->emit('fserviceUpdated', $fservice);
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
        return view('livewire.template.backend.nusantara.fservice.fserviceedit', [
            'pages' => Page::orderBy('created_at', 'desc')->where('status', 1)->get(),
            'albums' => Album::orderBy('created_at', 'desc')->where('status', 1)->get(),
            'postcategory' => Postcategory::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
