<?php

namespace App\Http\Controllers\Backend;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\OptionStoreRequest;
use App\Http\Requests\OptionUpdateRequest;

class BackendController extends Controller
{
    protected $uploadPath;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->uploadPath = public_path(config('cms.image.directoryLogo'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('template.backend.nusantara.main.index', [
            'title' => 'Dashboard'
        ]);
    }
}
