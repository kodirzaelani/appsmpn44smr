@extends('template.backend.nusantara.layouts.appb')
@section('title', 'Slider create')

@section('content')
    <!-- Content Header (Slider header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">@yield('title')</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('backend.sliders.index') }}">All Page</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create a slider</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <form id="post-form" enctype="multipart/form-data" action="{{ route('backend.sliders.store') }}" method="post">
            <div class="row">
                @csrf
                <div class="col-lg-8 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Create a Slider
                                {{-- <small>Advanced and full of features</small> --}}
                            </h4>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <div class="form-group">
                                <h5>Title <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" placeholder="Title" required>
                                </div>
                                @error('title')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Content </label>
                                <textarea id="editor1" rows="10" cols="80" class="form-control @error('excerpt') is-invalid @enderror"
                                    name="excerpt">{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                @enderror
                            </div>
                            <div class="form-group @error('show_attribute') is-invalid @enderror">
                                <label class="form-label">Link Post/Video: <span class="text-danger">*</span></label>
                                @error('show_attribute')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small>
                                    </div>
                                @enderror
                                <div class="demo-radio-button">
                                    <input value="0" name="show_attribute" type="radio" id="radio_33"
                                        class="with-gap radio-col-success @error('show_attribute') is-invalid @enderror"
                                        {{ old('radio_33') == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }} checked />
                                    <label for="radio_33">No Link</label>
                                    <input value="1" name="show_attribute" type="radio" id="radio_30"
                                        class="with-gap radio-col-success @error('show_attribute') is-invalid @enderror"
                                        {{ old('radio_30') == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }} />
                                    <label for="radio_30">Post</label>
                                    <input value="2" name="show_attribute" type="radio" id="radio_32"
                                        class="with-gap radio-col-success @error('show_attribute') is-invalid @enderror"
                                        {{ old('radio_32') == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }} />
                                    <label for="radio_32">Video</label>

                                </div>
                            </div>

                            <div class="form-group" id="linkpost" style="display: none;">
                                <label for="post_id">Link Post</label>
                                <select class="form-control select2" style="width: 100%;" name="post_id" required>
                                    <option value="" holder>Select Post </option>
                                    @foreach ($posts as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('post_id') == $item->id ? 'selected' : '' }}>{{ $item->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('post_id')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                @enderror
                            </div>

                            <div class="form-group" id="linkvideo" style="display: none;">
                                <label for="video"> Video</label>
                                <input id="video" name="video" type="text"
                                    class="form-control @error('video') is-invalid @enderror" placeholder="Video"
                                    value="{{ old('video') }}">
                                <span class="font-italic"> Example: id video youtube DfMz1NMIVe4</span>
                                @error('video')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                @enderror
                            </div>

                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Save
                                <small>Publish or Draft</small>
                            </h4>
                        </div>
                        <div class="box-footer text-end">
                            <input type="text" name="status" id="status" hidden>
                            <button id="draft-btn" type="submit" class="btn btn-warning me-1">
                                Draft
                            </button>
                            <button id="publish-btn" type="submit"class="btn btn-primary">
                                Publish
                            </button>
                        </div>
                    </div>
                    {{-- <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">
                                Status Slider
                            </h4>
                        </div>

                        <div class="box-body">

                            <div class="form-group">
                                <label class="form-label">Status Banner :</label>
                                <div class="demo-radio-button">
                                    <input value="1" name="statusbanner" type="radio" id="radio_33"
                                        class="with-gap radio-col-primary" checked />
                                    <label for="radio_33">Slider</label>
                                    <input value="0" name="statusbanner" type="radio" id="radio_34"
                                        class="with-gap radio-col-primary" />
                                    <label for="radio_34">Banner</label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">
                                Image Slider
                            </h4>
                        </div>
                        <div class="box-body text-center ">
                            <label class="form-label">Size : 1920 pixel x 1088 pixel</label>
                            <div class="form-group">
                                <div class=" fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new img-thumbnail" style="width: 200px;">
                                        <img src="{{ asset('/assets/images/no_image.png') }}" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists img-thumbnail"
                                        style="max-width: 200px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span
                                                class="fileinput-new">Select image</span><span
                                                class="fileinput-exists">Change</span>
                                            <input type="file" class="@error('image') is-invalid @enderror"
                                                name="image" value="{{ old('image') }}"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                            data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    @push('styles')
        <!-- Jasny Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
    @endpush

    @push('scripts')
        <script src="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
        <script src="{{ asset('') }}assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="{{ asset('') }}assets/vendor_components/select2/dist/js/select2.full.js"></script>
        <script src="{{ asset('') }}assets/vendor_components/ckeditor/ckeditor.js"></script>
        <script src="{{ asset('') }}assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
            };
        </script>
        <script>
            CKEDITOR.replace('editor1', options);
            //Initialize Select2 Elements
            $('.select2').select2();

            //Save Draft
            $('#draft-btn').click(function(e) {
                e.preventDefault();
                $('#status').val(0);
                $('#post-form').submit();
            });
            //Save Publish
            $('#publish-btn').click(function(e) {
                e.preventDefault();
                $('#status').val(1);
                $('#post-form').submit();
            });
        </script>
        <script>
            const linkpost = document.getElementById('linkpost');
            const linkvideo = document.getElementById('linkvideo');


            function handleRadioClick() {
                if (document.getElementById('radio_30').checked) {
                    linkpost.style.display = 'block';
                    linkvideo.style.display = 'none';
                } else if (document.getElementById('radio_32').checked) {
                    linkpost.style.display = 'none';
                    linkvideo.style.display = 'block';
                } else {
                    linkpost.style.display = 'none';
                    linkvideo.style.display = 'none';
                }
            }

            const radioButtons = document.querySelectorAll('input[name="show_attribute"]');
            radioButtons.forEach(radio => {
                radio.addEventListener('click', handleRadioClick);
            });
        </script>
    @endpush
@endsection
