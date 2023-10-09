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
                            <div class="blog-post h-450">
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
                                            <li>
                                                <a href="#"><i class="fa fa-calendar-o"></i>
                                                    {{ TanggalID('j M Y', $item->created_at) }}</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-folder-open-o"></i>
                                                    {{ $item->postcategory->title }}</a>
                                            </li>
                                            {{-- <li>
                                                <a href="#"><i class="fa fa-eye"></i> {{ $item->view_count }}
                                                    Kali</a>
                                            </li> --}}


                                        </ul>
                                    </div>
                                    {{-- <div class="entry-content">
                                        {!! Str::words($item->content, 50, ' ...') !!}
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-10">
                    <div class="col-2 text-center">
                        {{ $posts->links('vendor.livewire.simple-bootstrap') }}
                    </div>
                </div>
            @else
                <h2 class="text-center text-info">Berita belum tersedia</h2>
            @endif
        </div>
    </section>
</div>
