@extends('template.frontend.nusantara.layouts.appf')
@section('title', __('500'))
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
                        <h1>E-500</h1>
                        <h3>Mungkin saat ini server kami mengalami kendala, sialhkan kembali beberapa saat lagi! </h3>
                        <img src="{{ asset('') }}uploads/default/500.png" class="max-w-650 w-p100" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('template.frontend.nusantara.partials.errorfooter')

@endsection
