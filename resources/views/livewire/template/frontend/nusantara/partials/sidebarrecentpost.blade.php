<div>
    <div class="widget">
        <h4 class="pb-15 mb-25 bb-1"><i class="fa fa-bookmark mr-3" aria-hidden="true"></i> Berita Terbaru </h4>
        @foreach ($post_recent as $item)
            <div class="recent-post clearfix">
                <div class="recent-post-image">
                    <img class="img-fluid bg-primary-light"
                        src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/assets/images/front-end-img/courses/cor-logo-1.png' }}"
                        alt="">
                </div>
                <div class="recent-post-info">
                    <a href="{{ route('post.detail', $item->slug) }}"
                        title="{{ $item->title }}">{!! Str::words($item->title, 6, ' ...') !!}</a>
                    <span><i class="fa fa-calendar-o"></i> {{ TanggalID('j M Y', $item->created_at) }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
