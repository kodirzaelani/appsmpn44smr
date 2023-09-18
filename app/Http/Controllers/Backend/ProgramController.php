<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use App\Models\Album;
use App\Models\Widget;
use Illuminate\Support\Str;
use App\Models\Postcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Requests\RequestWidgetStore;
use App\Http\Requests\RequestWidgetUpdate;

class ProgramController extends Controller
{
    protected $uploadPath;
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:program.index|program.create|program.edit|program.delete|program.trash']);
        $this->uploadPath = public_path(config('cms.image.directoryWidget'));
    }

    public function index()
    {
        return view('template.backend.nusantara.program.index', [
            'title' => 'Program'
        ]);
    }

    // function remove image
    private function removeImage($image)
    {
        if (!empty($image)) {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }
}
