<div>
    <form enctype="multipart/form-data" wire:submit.prevent="store">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Create a Service
                            {{-- <small>Advanced and full of features</small> --}}
                        </h4>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <h5>Title <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" wire:model="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}" placeholder="Title">
                            </div>
                            @error('title')
                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h5>Link <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" wire:model="link"
                                    class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}"
                                    placeholder="Link">
                            </div>
                            @error('link')
                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Target View <span class="text-danger">*</span></label>
                            <div class="demo-radio-button in-line">
                                <input wire:model="targetview" value="1"
                                    {{ old('targetview') == '_self' ? 'checked' : '' }} type="radio" id="radio_3"
                                    class="@error('targetview') is-invalid @enderror with-gap radio-col-success" />
                                <label for="radio_3">Self</label>
                                <input wire:model="targetview" value="2"
                                    {{ old('targetview') == '_blank' ? 'checked' : '' }} type="radio" id="radio_4"
                                    class="@error('targetview') is-invalid @enderror with-gap radio-col-success" />
                                <label for="radio_4">Blank </label>
                                @error('targetview')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code>
                                        </small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Icon </h5>
                            <div class="controls">
                                <input type="text" wire:model="icon"
                                    class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') }}"
                                    placeholder="Icon">
                                <small><a href="https://icons.getbootstrap.com/" target="_blank"
                                        rel="noopener noreferrer"><i class="bi bi-bootstrap"></i> Select Icon
                                        Bootsrap</a></small>
                            </div>
                            @error('icon')
                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Short Description <span class="text-danger">*</span></label>
                            <textarea rows="3" cols="80" class="form-control @error('description') is-invalid @enderror"
                                wire:model="description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="form-control-feedback"><small> <code>{{ $message }}</code>
                                    </small></div>
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
                            <small>Publish</small>
                        </h4>
                    </div>
                    <div class="box-footer text-end">
                        {{-- <button id="draft-btn"   class="btn btn-warning me-1">
                                    Draft
                                </button> --}}
                        <button class="btn btn-sm btn-primary">
                            Publish
                        </button>
                    </div>
                </div>


                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">
                            Image <span class="text-danger">*</span>
                        </h4>
                    </div>
                    <div class="box-body text-center ">
                        <label class="form-label">Size : Max 1Mb | 420 x 320 pixel</label>
                        <div class="mt-3">
                            <input wire:model="image" type="file"
                                class="form-control @error('image') is-invalid @enderror" id="formFile">
                        </div>
                        <div class="mb-3">
                            @if ($image)
                                <label for="formFile" class="form-label">Image Preview:</label>
                                <br />
                                <img class="rounded" src="{{ $image->temporaryUrl() }}" style="max-width: 80%">
                            @endif
                        </div>
                        @error('image')
                            <div class="form-control-feedback"><small> <code>{{ $message }}</code>
                                </small></div>
                        @enderror

                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
