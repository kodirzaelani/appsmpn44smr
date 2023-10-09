<div>
    <form action="{{ route('post.search') }}">
        <div class="wrap-search-fullscreen">
            <div class="container">
                <input type="search" wire:model.debounce.500ms="search" name="term" value="{{ request('term') }}"
                    wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch"
                    placeholder="Kata kunci pencarian berita ..." required />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
</div>
