<div>
    @section('title', $title)
    <!---page Title --->
    @livewire('template.frontend.nusantara.partials.headerhome')

    <!--Page content -->

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="blog-post mb-30">
                        <div class="blog-detail popup-vdo">
                            <div class="entry-title mb-10">
                                <a href="#">{{ $video->title }}</a>
                            </div>
                            <hr>
                            <div class="entry-meta ">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"><i class="fa fa-folder-open-o"></i>
                                            {{ $video->videocategory->title }}</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fa fa-user"></i> {{ $video->author->name }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-calendar-o"></i>
                                            {{ TanggalID('j M Y', $video->created_at) }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-eye"></i> {{ $video->view_count }} Kali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-image clearfix position-relative">
                            <a href="https://www.youtube.com/watch?v={{ $video->video }}" class="popup-youtube"
                                title="Play">
                                <img class="img-fluid px-30"
                                    src="{{ $video->imageUrl ? $video->imageUrl : '/assets/images/no_image.png' }}"
                                    alt="">
                                <a href="https://www.youtube.com/watch?v={{ $video->video }}"
                                    class="popup-youtube play-vdo-bt waves-effect waves-circle btn btn-circle btn-primary btn-lg"
                                    title="Play"><i class="mdi mdi-play"></i>
                                </a>
                            </a>
                        </div>
                        <div class="blog-detail mt-20 pt-0">
                            <hr>
                            <div class="entry-content">
                                {!! $video->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-lg-12 col-12 text-start">
                            <h3 class="mb-15">Terkait</h3>
                            {{-- <hr class="w-100 bg-primary"> --}}
                        </div>
                    </div>

                    @if ($videoother->count())
                        <div class="row mt-30 justify-content-center">
                            @foreach ($videoother as $item)
                                <div class="col-xl-4 col-md-4 col-12">
                                    <div class="blog-post h-400">
                                        <div class="entry-image clearfix">
                                            <a href="{{ route('video.detail', $item->slug) }}">
                                                <img class="img-fluid"
                                                    src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/uploads/images/logo/' . $global_option->logo }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="blog-detail">
                                            <div class="entry-title mb-10">
                                                <a
                                                    href="{{ route('video.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif


                    <div class="box">
                        <div class="box-body">
                            <div class="widget">
                                <h4 class="mt-0 pb-15 mb-25 bb-1">Share</h4>
                                <ul class="list-inline mb-0">
                                    <li><a href="#"
                                            class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"
                                            class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"
                                            class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"
                                            class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"
                                            class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i
                                                class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="blog-comment">
                                <h4 class="mt-0 pb-15 mb-25 bb-1">04 Comments</h4>
                                <div class="comment-1">
                                    <div class="comment-photo">
                                        <img class="img-fluid" src="../images/front-end-img/avatar/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2020</span></h4>
                                        <div class="port-post-social float-end">
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet
                                            of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                            sagittis sem nibh id elit. Duis sed odio <a
                                                href="#">http://themeforest.net</a> Morbi accumsan ipsum velit.
                                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat </p>
                                    </div>
                                </div>
                                <div class="comment-1 comment-2">
                                    <div class="comment-photo">
                                        <img class="img-fluid" src="../images/front-end-img/avatar/2.jpg"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2020</span></h4>
                                        <div class="port-post-social float-end">
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor
                                            Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh..</p>
                                    </div>
                                </div>
                                <div class="comment-1 comment-2">
                                    <div class="comment-photo">
                                        <img class="img-fluid" src="../images/front-end-img/avatar/3.jpg"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2020</span></h4>
                                        <div class="port-post-social float-end">
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of
                                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet..</p>
                                    </div>
                                </div>
                                <div class="comment-1">
                                    <div class="comment-photo">
                                        <img class="img-fluid" src="../images/front-end-img/avatar/4.jpg"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2020</span></h4>
                                        <div class="port-post-social float-end">
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida
                                            nibh
                                            vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                                            vulputate cursus a sit amet mauris <a
                                                href="#">http://themeforest.net</a> Morbi accumsan ipsum velit.
                                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="widget">
                                <h4 class="mt-0 pb-15 mb-25 bb-1">Leave a Reply</h4>
                                <form id="contactform" class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Website URL">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Adress">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="7" placeholder="message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button name="submit" type="submit" value="Send"
                                            class="btn btn-primary"><span>Submit Now</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="side-block px-20 py-10 bg-white">
                        <div class="widget courses-search-bx placeholdertx mb-10">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="form-label">Search...</label>
                                    <input name="name" type="text" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        @livewire('template.frontend.nusantara.partials.sidebarrecentpost')
                        @livewire('template.frontend.nusantara.partials.sidebarcategory')
                        @livewire('template.frontend.nusantara.partials.sidebarpostpupoler')
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
