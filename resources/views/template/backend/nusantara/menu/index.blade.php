@extends('template.backend.nusantara.layouts.appb')
@section('title', $title)

@section('content')

    @livewire('template.backend.nusantara.menu.menuindex')
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">@yield('title')</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home"><span
                                        class="path1"></span><span class="path2"></span></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('backend.menu.index') }}">All
                                @yield('title')</a></li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12 col-12">
            <h4 class="box-title">@yield('title')</h4>
            <div class="py-10 w-100">

                @if (count($menus) > 0)
                    Select a menu to edit:
                    <form action="{{ url('manage-menus') }}" class="form-inline">
                        <select name="id">
                            @foreach ($menus as $menu)
                                @if ($desiredMenu != '')
                                    <option value="{{ $menu->id }}" @if ($menu->id == $desiredMenu->id) selected @endif>
                                        {{ $menu->title }}</option>
                                @else
                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                @endif
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-default btn-menu-select">Select</button>
                    </form>
                    or <span class="badge badge-dark px-25 py-10">
                        <a href="{{ url('manage-menus?id=new') }}">
                            Create a new menu
                        </a>
                    </span>
                @endif
            </div>
            <div class="row" id="main-row">
                <div class="col-lg-4 cat-form @if (count($menus) == 0) disabled @endif">
                    <h3><span>Add Menu Items</span></h3>

                    <div class="accordion " id="accordionExample">
                        <div class="accordion-item bg-dark">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Categories
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="box-body">

                                        <div class="demo-checkbox">
                                            @foreach ($categories as $no => $item)
                                                <input type="checkbox" id="md_checkbox_'{{ $item->id }}'"
                                                    name="select-category[]" value="{{ $item->id }}"
                                                    class="filled-in chk-col-danger" />
                                                <label for="md_checkbox_'{{ $item->id }}'">{{ $item->title }}</label>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="box-footer">
                                        <input type="checkbox" id="select-all-categories"
                                            class="filled-in chk-col-success" />
                                        <label for="select-all-categories">Select
                                            All</label>
                                        <button type="button" class="pull-right btn btn-default btn-sm"
                                            id="add-categories">Add to Menu</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Posts
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="box-body">

                                        <div class="demo-checkbox">
                                            @foreach ($posts as $no => $item)
                                                <input type="checkbox" id="md_checkbox_'{{ $item->id }}'"
                                                    name="select-post[]" value="{{ $item->id }}"
                                                    class="filled-in chk-col-danger" />
                                                <label for="md_checkbox_'{{ $item->id }}'">{{ $item->title }}</label>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="box-footer">
                                        <input type="checkbox" id="select-all-posts" class="filled-in chk-col-success" />
                                        <label for="select-all-posts">Select
                                            All</label>
                                        <button type="button" class="pull-right btn btn-default btn-sm" id="add-posts">Add
                                            to Menu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Custome Links
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label>URL</label>
                                            <input type="url" id="url" class="form-control"
                                                placeholder="https://">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Text</label>
                                            <input type="text" id="linktext" class="form-control" placeholder="">
                                        </div>

                                    </div>
                                    <div class="box-footer">
                                        <button type="button" class="pull-right btn btn-default btn-sm"
                                            id="add-custom-link">Add to Menu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 cat-view">
                    <h3><span>Menu Structure</span></h3>
                    @if (count($menus) == 0)
                        <h4>Create New Menu</h4>
                        <form method="post" action="{{ url('create-menu') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-sm btn-primary">Create Menu</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

        </div>
    </div>


    </section> --}}

@endsection

@push('scripts')
    <script src="{{ asset('') }}assets/vendor_plugins/iCheck/icheck.js"></script>
    <script src="{{ asset('') }}assets/backend/js/pages/nestable.js"></script>
    {{-- Scripts Menu Categories --}}
    <script>
        $('#select-all-categories').click(function(event) {
            if (this.checked) {
                $('#categories-list :checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('#categories-list :checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
    {{-- Scripts Menu Categories --}}
    {{-- Scripts Menu Post --}}
    <script>
        $('#select-all-posts').click(function(event) {
            if (this.checked) {
                $('#posts-list :checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('#posts-list :checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
    {{-- Scripts Menu Post --}}
    <script>
        // Sweet Alert
        window.addEventListener('swal:modal', event => {
            swal({
                title: event.detail.title,
                text: event.detail.text,
                type: event.detail.type,
            });
        });
        window.addEventListener('swal:modaldelete', event => {
            swal({
                type: event.detail.type,
                title: event.detail.title,
                text: event.detail.text,
                timer: event.detail.timer,

            });
        });
    </script>
@endpush
