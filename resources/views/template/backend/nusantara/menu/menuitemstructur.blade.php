@extends('template.backend.nusantara.layouts.appb')
@section('title', 'Structure Menu Item')
@section('content')
    @php
        $currentUrl = url()->current();
    @endphp
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Menu Items</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home"><span
                                            class="path1"></span><span class="path2"></span></i></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('backend.menuitem.index') }}">All Menu Item</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">@yield('title')</h4>
                        <ul class="box-controls pull-right">
                            <li><button class="btn btn-success">Structure</button></li>|
                            <li><a href="{{ route('backend.menuitem.index') }}" class="btn btn-info text-white"
                                    style="margin:0 4px; padding: 0 4px; vertical-align: middle; font-size: 0.8571rem; font-weight: 400;">List
                                    Menu Item</a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">

                                {!! Menu::render() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('vendor/menu-builder/style.css') }}" rel="stylesheet"> --}}
@endpush
@push('scripts')
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="menu_id"]').on('change', function() {
                var menu_id = $(this).val();
                if (menu_id) {
                    $.ajax({
                        url: "{{ url('/backend/get/menuitem/') }}/" + menu_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#postsubcategory_id").empty();
                            $("#postsubcategory_id").removeAttr("disabled")
                            $.each(data, function(key, value) {
                                $("#postsubcategory_id").append('<option value="' +
                                    value.id + '">' + value.title + '</option>');
                            });
                            //  console.log(data)
                        },

                    });
                } else {
                    // alert('danger');
                }
            });
        });
    </script> --}}
    <!-- Menu Js -->
    {!! Menu::scripts() !!}
@endpush
