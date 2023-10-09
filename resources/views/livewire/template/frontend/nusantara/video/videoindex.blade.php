<div>

    <section class="py-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Video</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            @if ($videos->count())
                <div class="row mt-30 justify-content-center">
                    @foreach ($videos as $item)
                        <div class="col-xl-4 col-md-4 col-12">
                            <div class="blog-post h-450">
                                <div class="entry-image clearfix">
                                    <a href="{{ route('video.detail', $item->slug) }}">
                                        <img class="img-fluid"
                                            src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/uploads/images/logo/' . $global_option->logo }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="{{ route('video.detail', $item->slug) }}">{{ $item->title }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-10">
                    <div class="col-2 text-center">
                        <a href="{{ route('video.all') }}" class="btn btn-info btn-sm ms-10">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            @else
                <h2 class="text-center text-info">Video belum tersedia</h2>
            @endif
        </div>
    </section>
</div>
