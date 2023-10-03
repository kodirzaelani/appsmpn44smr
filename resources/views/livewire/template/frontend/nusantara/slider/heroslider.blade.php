<div>
    <!--Page content -->

    <section class="py-2 d-xl-none d-lg-none d-md-none d-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="blog-post mb-30">
                        <div class="entry-image clearfix">
                            <div class="owl-carousel bottom-dots-center owl-theme" data-nav-dots="true"
                                data-autoplay="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1"
                                data-xx-items="1">
                                @foreach ($herosliders as $key => $slider)
                                    <div class="item">
                                        @if ($slider->imageUrl)
                                            <img src="{{ asset($slider->imageUrl) }}" alt="">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-xl-block d-lg-block d-md-block d-none">
        <div class="row ">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="entry-image clearfix">
                    <div class="owl-carousel bottom-dots-center owl-theme" data-nav-dots="true" data-autoplay="true"
                        data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">

                        @foreach ($herosliders as $key => $slider)
                            <div class=" item">
                                @if ($slider->imageUrl)
                                    <img src="{{ asset($slider->imageUrl) }}" alt="">
                                @endif
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script src="{{ asset('') }}assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
@endpush
