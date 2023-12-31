<div>
    <div class="box bs-3 border-success">
        <div class="box-header">
            <h4 class="box-title"><strong>Create</strong></h4>
        </div>
        <form enctype="multipart/form-data" wire:submit.prevent="store">
            <div class="box-body">
                <div class="form-group">
                    <h5>Title <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="title"
                            class="form-control @error('title') is-invalid @enderror" placeholder="Title" required>
                    </div>
                    <div class="form-control-feedback"><small class="text-primary"> {{ $title }}</small></div>
                    <br />
                    @error('title')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group @error('postcategory_id') has-error @enderror">
                    <label class="form-label">Parent </label>
                    <select class="form-control select2" style="width: 100%;" wire:model="parent_id">
                        <option value="" holder>Select Category</option>
                        @foreach ($postcatagories as $item)
                            <option value="{{ $item->id }}"
                                {{ old('postcategory_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->title }}</option>
                        @endforeach
                    </select>
                    @error('postcategory_id')
                        <span class="help-block"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input wire:model="image" type="file" class="form-control @error('image') is-invalid @enderror"
                        id="formFile">
                </div>
                <div class="mb-3">
                    @error('image')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror

                    @if ($image)
                        <label for="formFile" class="form-label">Image Preview:</label>
                        <br />
                        <img src="{{ $image->temporaryUrl() }}" style="max-width: 40%">
                    @endif
                </div>
            </div>
            <div class="box-footer flexbox">
                <div class="text-end flex-grow">
                    <button class="btn btn-sm btn-primary"><i class="ti-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
