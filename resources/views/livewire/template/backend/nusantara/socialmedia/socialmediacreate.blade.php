<div>
    <div class="box bs-3 border-success">
        <div class="box-header">
            <h4 class="box-title"><strong>Create </strong></h4>
        </div>

        <form enctype="multipart/form-data" wire:submit.prevent="store">
            <div class="box-body">

                <div class="form-group">
                    <h5>Title <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="title"
                            class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                    </div>
                    <div class="form-control-feedback"><small class="text-primary"> {{ $title }}</small></div>
                    @error('title')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>
                        Icon
                        @if ($icon)
                            <i class="fa {{ $icon }} ms-10" aria-hidden="true"></i>
                        @endif
                    </h5>
                    <div class="controls">
                        <input type="text" wire:model="icon" class="form-control @error('icon') is-invalid @enderror"
                            placeholder="fa-facebook">
                    </div>
                    <small>
                        <a href="{{ route('backend.fontawesome') }}" target="_blank" rel="noopener noreferrer">
                            Font Awesome
                        </a>
                    </small>

                    @error('icon')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Class</h5>
                    <div class="controls">
                        <input type="text" wire:model="class"
                            class="form-control @error('class') is-invalid @enderror" placeholder="facebook">
                    </div>
                    @error('class')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Url</h5>
                    <div class="controls">
                        <input type="url" wire:model="url" class="form-control @error('url') is-invalid @enderror"
                            placeholder="https://">
                    </div>
                    @error('url')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Script HTML</h5>
                    <div class="controls">
                        <textarea wire:model="scripthtml" cols="30" rows="5"></textarea>
                    </div>
                    @error('url')
                        <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
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
