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
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#" class="fs-24">{{ $post->title }}</a>
                            </div>
                            <hr>
                            <div class="entry-meta mb-5">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"><i class="fa fa-folder-open-o"></i>
                                            {{ $post->postcategory->title }}</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fa fa-user"></i> {{ $post->author->name }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-calendar-o"></i>
                                            {{ TanggalID('j M Y', $post->created_at) }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-eye"></i> {{ $post->view_count }} Kali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-image clearfix">
                            <img class="img-fluid px-30"
                                src="{{ $post->imageUrl ? $post->imageUrl : '/assets/images/no_image.png' }}"
                                alt="">
                            <p class="fw-normal fst-italic px-30 mt-10">
                                {!! $post->caption_image !!}
                            </p>

                        </div>
                        <div class="blog-detail mt-0 pt-0">
                            <hr>
                            <div class="entry-content">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="widget">
                                <h4 class="mt-0 pb-15 mb-25 bb-1">TAGS</h4>
                                <div class="widget-tags">
                                    <ul class="list-unstyled">
                                        {!! $post->tags_html !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <p>Bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh
                                            vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                                            vulputate cursus a sit amet mauris <a
                                                href="#">http://themeforest.net</a> Morbi accumsan ipsum velit.
                                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat </p>
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
