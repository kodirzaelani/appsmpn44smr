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
                        <img src="{{ asset('') }}assets/images/auth-bg/500.png" class="max-w-650 w-p100" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 col-12">
                    <div class="text-md-start text-center">
                        <h2><strong> EduAdmin: </strong> fully responsive template in the market</h2>
                        <p class="mb-0">Exclusive multi-purpose lightweight responsive with powerful features.</p>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="text-md-end text-center mt-30 mt-md-0">
                        <a class="btn btn-primary" href="#">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
