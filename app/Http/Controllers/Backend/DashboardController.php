<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $uploadPath;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->uploadPath = public_path(config('cms.image.directoryLogo'));
    // }


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
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fontawesome()
    {
        return view('template.backend.nusantara.main.fontawesome', [
            'title' => 'Font Awesome'
        ]);
    }
}
