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
                            <li><button class="btn btn-success">Menu frontend</button></li>|
                            <li><a href="{{ route('backend.menuitem.index') }}" class="btn btn-info text-white"
                                    style="margin:0 4px; padding: 0 4px; vertical-align: middle; font-size: 0.8571rem; font-weight: 400;">List
                                    Menu Item</a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">

                                <div class="box">
                                    <div class="box-header">
                                        <form method="GET" action="{{ $currentUrl }}" class="form-inline">
                                            <div class="form-group">
                                                <label class="form-label">Select the menu you want to edit: </label>
                                                <select class="form-control select2" style="width: 100%;" name="menu_id">
                                                    <option value="" holder>Select Menu</option>
                                                    @foreach ($menus as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('menu_id') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->location }}</option>
                                                    @endforeach
                                                </select>
                                                @error('menu_id')
                                                    <span class="help-block"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary ml-2">Choose</button>
                                        </form>
                                    </div>

                                    <div class="box-body">
                                        <input type="hidden" id="idmenu" value="{{ $indmenu->id ?? null }}" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- @include('nguyendachuy-menu::partials.right') --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ajax-loader" id="ajax_loader">
                                        <div class="lds-ripple">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <!-- Default box -->
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Structure Menu</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="myadmin-dd-empty dd" id="nestable2">
                                            <ol class="dd-list">
                                                <li class="dd-item dd3-item" data-id="13">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 13 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 14 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 16 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 17 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 18 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 19 </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="15">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content"> Item 15 </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item dd3-item" data-id="16">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content"> Item 16 </div>
                                                        </li>
                                                        <li class="dd-item dd3-item" data-id="17">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content"> Item 17 </div>
                                                        </li>
                                                        <li class="dd-item dd3-item" data-id="18">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content"> Item 18 </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
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
    <link href="{{ asset('vendor/nguyendachuy-menu/style.css') }}" rel="stylesheet"> --}}
@endpush
@push('scripts')
    <script src="{{ asset('') }}assets/backend/js/pages/nestable.js"></script>
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
    {{-- {!! Menu::scripts() !!} --}}
    <script>
        var URL_CURRENT = "{{ url()->current() }}";
        var URL_FULL = "{{ request()->fullUrl() }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/nguyendachuy-menu/menu.js') }}"></script>
@endpush
