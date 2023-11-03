@extends('template.frontend.nusantara.layouts.appf')
@section('title', __('404 Not Fount'))
@section('content')
    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ asset('') }}assets/images/background/bg-8.jpeg);">
    </section>
    <!--Page content -->
    <section class="error-page h-p100 py-50">
        <div class="container h-p100">
            <div class="row h-p100 align-items-center justify-content-center text-center">
                <div class="col-lg-7 col-md-10 col-12">
                    <div>
                        <h1>Selamat Anda Menemukan 404!</h1>
                        <h3>Silahkan telusuri melalui menu di atas! </h3>
                        <img src="{{ asset('') }}uploads/default/404.png" class="max-w-650 w-p100" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('template.frontend.nusantara.partials.errorfooter')

@endsection
