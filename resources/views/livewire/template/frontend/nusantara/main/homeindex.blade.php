<div>
    @section('title', 'Beranda')
    @livewire('template.frontend.nusantara.partials.headerhome')
    @livewire('template.frontend.nusantara.slider.heroslider')
    @livewire('template.frontend.nusantara.greeting.greetingindex')
    @livewire('template.frontend.nusantara.post.postindex')
    @livewire('template.frontend.nusantara.partials.statistic')
    @livewire('template.frontend.nusantara.agenda.agendaindex')
    @livewire('template.frontend.nusantara.video.videoindex')
    @livewire('template.frontend.nusantara.album.albumindex')

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Explore our Courses</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#all"
                                role="tab">All</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab1"
                                role="tab">Finance</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab2"
                                role="tab">Operations</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3"
                                role="tab">Strategy & Leadership</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab4"
                                role="tab">Marketing</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab5"
                                role="tab">Analytics</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab6"
                                role="tab">HR</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab7"
                                role="tab">Management</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="all" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/4.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">General</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/6.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/3.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab1" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/4.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/3.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/9.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/10.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/9.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/10.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/4.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">General</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/6.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/9.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/10.jpeg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('template.frontend.nusantara.partials.partners')




</div>
