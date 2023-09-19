<?php

namespace App\Http\Livewire\Template\Backend\Nusantara\Foto;

use App\Models\Foto;
use App\Models\Album;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

class Addphotos extends Component
{
    use WithFileUploads;
    public $multiplephoto;
    public $modelId;
    public $title;
    public $images;
    public $photo;
    public $selectedItem;
    public $uploadPath = 'uploads/images/fotos';

    protected $listeners = [
        'getModelId',
    ];

    public function getModelId($modelId)
    {
        $this->modelId = $modelId;

        $model = Album::find($this->modelId);

        $this->title     = $model->title;
    }

    public function photosStore()
    {
        $validateData = [
            'title' => 'required|min:2',
        ];
        // Validate image
        if (!empty($this->image)) {
            // Append to the validation if image is not empty
            $validateData = array_merge($validateData, [
                'images.*' => 'image'
            ]);
        }

        $this->validate($validateData);


        if (!empty($this->images)) {
            foreach ($this->images as $image) {

                $imageHashName = $image->hashName();

                // Upload the main image
                $image->store('images/fotos/');

                // Create a thumbnail of the image using Intervention Image Library
                $manager = new ImageManager();
                $imagedata = $manager->make('uploads/images/fotos/' . $imageHashName)->resize(300, 200); // Jangan lupa sesauikan nama folder dengan public folder image
                $imagedata->save(public_path('uploads/images/fotos/images_thumb/' . $imageHashName)); // Jangan lupa buat folder sesuai dengan rencana penyimpanan

                $data = [
                    // 'title'     => 'Photo' . time() . '-' . $this->title,
                    // 'slug'      => Str::slug(time() . '-' . $this->title),
                    'album_id'           => $this->modelId,
                    'status'             => '1',
                    'author_id'          => Auth::id(),
                ]; // This is to save the filename of the image in the database
                $data = array_merge($data, [
                    'image' => $imageHashName
                ]);
                Foto::create($data);
            }
        }

        $this->cleanVars();
        // even listener -> emit
        $this->emit('photoCreated');
        // This is to reset our public variables
    }


    private function cleanVars()
    {
        // Kosongkan field input
        $this->images = '';
    }

    public function selectItem($itemId, $action)
    {

        $this->selectedItem = $itemId;

        if ($action == 'delete') {
            // This will show the modal in the frontend
            $this->delete();
        }
    }

    // Delete Single Record
    public function delete()
    {
        $foto = Foto::find($this->selectedItem);

        Foto::destroy($this->selectedItem);
        if ($foto->image) {
            $this->removeImage($foto->image);
        }
        // even listener -> emit
        $this->emit('photoDeleted');
    }

    private function removeImage($image)
    {
        if (!empty($image)) {
            $imagePath     = $this->uploadPath . '/' . $image;
            $thumbnailPath = $this->uploadPath . '/images_thumb/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }
    public function render()
    {
        return view('livewire.template.backend.nusantara.foto.addphotos', [
            'modelphoto' => Foto::where('album_id', $this->modelId)->get(),
        ]);
    }
}
