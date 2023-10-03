<div>
    <div class="widget clearfix">
        <h4 class="pb-15 mb-15 bb-1"><i class="fa fa-folder-open" aria-hidden="true"></i> Kategori</h4>
        <div class="media-list media-list-divided">
            @foreach ($postcategories as $item)
                @if ($item->posts->where('status', 1)->count() > 0)
                    <a class="px-0 media media-single" href="{{ route('post.category', $item->slug) }}">
                        <span class="title ms-0">{{ $item->title }}</span>
                        <span class="mx-0 badge badge-info-light">{{ $item->posts->count() }}</span>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>
