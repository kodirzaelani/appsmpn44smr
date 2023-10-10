<div>
    <section class="bg-img pt-50 pb-10" data-overlay="7"
        style="background-image: url({{ $global_option->BgheaderUrl ? $global_option->BgheaderUrl : '/assets/images/background/bg-8.jpeg' }}); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-white mb-30">Index Video</h1>
                    </div>
                    <form class="cours-search">
                        <div class="input-group">
                            <input type="search" wire:model.debounce.500ms="search" class="form-control"
                                wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch"
                                placeholder="Kata kunci pencarian agenda ...">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    @if ($agendas->count())
                        @foreach ($agendas as $item)
                            <div class="box">
                                <div class="row g-0">
                                    <div class="col-md-4 col-12 bg-img h-md-auto h-250"
                                        style="background-image: url({{ $item->imageThumbUrl ? $item->imageThumbUrl : '/uploads/images/logo/' . $global_option->logo }})">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="box-body">
                                            <h4>
                                                <a href="{{ route('video.detail', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h4>
                                            <div class="d-flex mb-10">
                                                <div class="me-10">
                                                    <i class="fa fa-user me-5"></i> {{ $item->author->name }}
                                                </div>
                                                <div>
                                                    <i class="fa fa-calendar me-5"></i>
                                                    {{ TanggalID('j M Y', $item->created_at) }}
                                                </div>
                                            </div>

                                            {!! Str::words($item->content, 30, ' ...') !!}

                                            <div class="flexbox align-items-center mt-3">
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('agenda.detail', $item->slug) }}">Selengkapnya</a>

                                                <div class="gap-items-4">
                                                    <a class="text-muted" href="#">
                                                        <i class="fa fa-eye "></i>
                                                        {{ $item->view_count }} Kali
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>Agenda belum tersedia atau kata kunci tidak ditemukan</h2>
                    @endif


                    <div aria-label="Page navigation example">
                        {{ $agendas->links('vendor.livewire.bootstrap') }}
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
                        <div class="widget clearfix">
                            <h4 class="pb-15 mb-15 bb-1">Categories</h4>
                            <div class="media-list media-list-divided">
                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Biology Course </span>
                                    <span class="mx-0 badge badge-secondary-light">125</span>
                                </a>

                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Contemporary Art</span>
                                    <span class="mx-0 badge badge-primary-light">124</span>
                                </a>

                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Elizabethan Theater</span>
                                    <span class="mx-0 badge badge-info-light">425</span>
                                </a>

                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Geometry Course</span>
                                    <span class="mx-0 badge badge-success-light">321</span>
                                </a>

                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Informatic Course</span>
                                    <span class="mx-0 badge badge-danger-light">159</span>
                                </a>

                                <a class="px-0 media media-single" href="#">
                                    <span class="title ms-0">Live Drawing</span>
                                    <span class="mx-0 badge badge-warning-light">452</span>
                                </a>
                            </div>
                        </div>
                        <div class="widget clearfix">
                            <h4 class="pb-15 mb-25 bb-1">Archives</h4>
                            <ul class="list list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2020</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2020</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2020</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2020</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> July 2020</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="pb-15 mb-25 bb-1">Tags</h4>
                            <div class="widget-tags">
                                <ul class="list-unstyled">
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Multipurpose</a></li>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="pb-15 mb-25 bb-1">Meta</h4>
                            <ul class="list list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Online</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="pb-15 mb-25 bb-1">Recent agendas </h4>
                            <div class="recent-post clearfix">
                                <div class="recent-post-image">
                                    <img class="img-fluid bg-primary-light"
                                        src="../images/front-end-img/courses/cor-logo-1.png" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
                                </div>
                            </div>
                            <div class="recent-post clearfix">
                                <div class="recent-post-image">
                                    <img class="img-fluid bg-primary-light"
                                        src="../images/front-end-img/courses/cor-logo-5.png" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
                                </div>
                            </div>
                            <div class="recent-post clearfix">
                                <div class="recent-post-image">
                                    <img class="img-fluid bg-primary-light"
                                        src="../images/front-end-img/courses/cor-logo-4.png" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="pb-15 mb-25 bb-1">Newsletter</h4>
                            <div class="widget-newsletter">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="newsletter-content">
                                    <i>Fusce tincidunt, metus at dignissim fringilla, lorem velit posuere mi, sed
                                        pretium turpis leo ac metus. Aenean sit amet sapien eget eros </i>
                                </div>
                                <div class="newsletter-form mt-20">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail2"
                                            placeholder="Name">
                                    </div>
                                    <a class="btn btn-primary w-p100" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="pb-15 mb-25 bb-1">Testimonials</h4>
                            <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1"
                                data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                <div class="item">
                                    <div class="testimonial-widget">
                                        <div class="testimonial-content">
                                            <p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in
                                                lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam
                                                viverra.</p>
                                        </div>
                                        <div class="testimonial-info mt-20">
                                            <div class="testimonial-avtar">
                                                <img class="img-fluid" src="../images/front-end-img/avatar/1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-name">
                                                <strong>Johen Doe</strong>
                                                <span>Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-widget">
                                        <div class="testimonial-content">
                                            <p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit,
                                                mattis convallis sapien efficitur non phasellus et erat sapien
                                                phasellus. </p>
                                        </div>
                                        <div class="testimonial-info mt-20">
                                            <div class="testimonial-avtar">
                                                <img class="img-fluid" src="../images/front-end-img/avatar/2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-name">
                                                <strong>Johen Doe</strong>
                                                <span>Design</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-widget">
                                        <div class="testimonial-content">
                                            <p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in
                                                lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam
                                                viverra.</p>
                                        </div>
                                        <div class="testimonial-info mt-20">
                                            <div class="testimonial-avtar">
                                                <img class="img-fluid" src="../images/front-end-img/avatar/3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-name">
                                                <strong>Johen Doe</strong>
                                                <span>Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-widget">
                                        <div class="testimonial-content">
                                            <p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit,
                                                mattis convallis sapien efficitur non phasellus et erat sapien
                                                phasellus. </p>
                                        </div>
                                        <div class="testimonial-info mt-20">
                                            <div class="testimonial-avtar">
                                                <img class="img-fluid" src="../images/front-end-img/avatar/4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-name">
                                                <strong>Johen Doe</strong>
                                                <span>Design</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget mb-10">
                            <h4 class="pb-15 mb-25 bb-1">Quick contact</h4>
                            <form class="gray-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputphone"
                                        placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="message"></textarea>
                                </div>
                                <a class="btn btn-primary w-p100" href="#">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
