<div>
    <section class="py-50 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                    @foreach ($greetings as $item)
                        <div class="row">
                            <h2 class="fw-400 text-center pb-10">{{ $item->title }}</h2>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12 ">
                                <img src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/uploads/default/logobpic_thumb.png' }}"
                                    alt="{{ $item->title }}" class="img-fluid pt-5 me-10" title="{{ $item->title }}"
                                    style="cursor: pointer">
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                {!! Str::words($item->content, 70, ' ...') !!}
                                <p>
                                    <a href="{{ route('greeting.detail', $item->slug) }}" class="btn btn-info mt-10">
                                        Selengkapnya
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-12 position-relative">
                    <div class="popup-vdo">
                        <img src="{{ asset('') }}assets/images/courses/5f.jpeg" class="img-fluid rounded"
                            alt="">
                        <a href="https://www.youtube.com/watch?v=uK67pD7kI6s"
                            class="popup-youtube play-vdo-bt waves-effect waves-circle btn btn-circle btn-primary btn-lg"
                            title="Play Profil"><i class="mdi mdi-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js">
    </script>
    <script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js">
    </script>
@endpush
