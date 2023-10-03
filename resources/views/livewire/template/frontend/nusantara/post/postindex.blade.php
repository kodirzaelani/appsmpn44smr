<div>
    <section class="py-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Berita</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            @if ($posts->count())
                <div class="row mt-30 justify-content-center">
                    @foreach ($posts as $item)
                        <div class="col-xl-4 col-md-4 col-12">
                            <div class="blog-post">
                                <div class="entry-image clearfix">
                                    <img class="img-fluid"
                                        src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/uploads/images/logo/' . $global_option->logo }}"
                                        alt="">
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="{{ route('post.detail', $item->slug) }}">{{ $item->title }}</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        {!! Str::words($item->content, 70, ' ...') !!}
                                    </div>
                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                        <div class="entry-button">
                                            <a href="{{ route('post.detail', $item->slug) }}"
                                                class="btn btn-primary btn-sm">Read
                                                more</a>
                                        </div>
                                        <div class="social">
                                            <strong>Share : </strong>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        {{ $posts->links('vendor.livewire.simple-bootstrap') }}
                    </div>
                </div>
            @else
                <h2>Berita belum tersedia</h2>
            @endif
        </div>
    </section>
</div>
