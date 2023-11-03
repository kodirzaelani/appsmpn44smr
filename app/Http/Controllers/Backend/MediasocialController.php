<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class MediasocialController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:mediasocial.index|mediasocial.create|mediasocial.edit|mediasocial.delete|mediasocial.trash']);
    }

    public function index()
    {
        return view('template.backend.nusantara.mediasocial.index', [
            'title' => 'Media Sosial',
        ]);
    }
}
