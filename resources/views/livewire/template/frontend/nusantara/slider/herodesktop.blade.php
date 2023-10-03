<div>
    <section id="hero" class="d-xl-block d-lg-block d-md-block d-none p-0 m-0">
        {{-- <section id="hero"> --}}
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                @foreach ($herosliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url({{ asset($slider->imageUrl) }});">
                        @if ($slider->show_attribute == 1 || $slider->show_attribute == 2)
                            <div class="carousel-container">
                                <div class="carousel-content animate__animated animate__fadeInUp">
                                    @if ($slider->post_id)
                                        <div class="text-center"><a
                                                href="{{ $link }}/posts/detail/{{ $slider->post->slug }}"
                                                class="btn-get-started"><i class="fa fa-arrow-right"
                                                    aria-hidden="true"></i> Detail</a></div>
                                    @elseif ($slider->video)
                                        <div class="text-center">
                                            <a href="https://www.youtube.com/watch?v={{ $slider->video }}"
                                                class="btn-get-started glightbox btn-watch-video text-light fs-5 fw-bold"><i
                                                    class="bi bi-play-circle me-1"></i><span>Watch Video</span></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
</div>
