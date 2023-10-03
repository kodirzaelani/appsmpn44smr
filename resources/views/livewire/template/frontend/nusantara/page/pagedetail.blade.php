<div>
    @section('title', 'Detail Halaman')
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ asset('') }}assets/images/front-end-img/background/bg-8.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Detail</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('root') }}" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $page->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="blog-post mb-30">
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#" class="fs-24">{{ $page->title }}</a>
                            </div>
                            <hr>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i>
                                            {{ $page->pagecategory->title }}</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i> {{ $page->view_count }} Kali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-image clearfix">
                            @if ($page->image)
                                <img class="img-fluid" src="{{ $page->image_url }}" alt="">
                            @endif
                        </div>
                        <div class="blog-detail">
                            <div class="entry-content">
                                {!! $page->content !!}
                            </div>
                        </div>
                    </div>

                    {{-- @livewire('frontend.nusantara1.main.contentshare') --}}

                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="side-block px-20 py-10 bg-white">

                        {{-- @livewire('frontend.nusantara1.page.sidebarsearch')
                        @livewire('frontend.nusantara1.widget.widgetsidebartop')
                        @livewire('frontend.nusantara1.page.sidebarcategory')

                        @livewire('frontend.nusantara1.post.postsidebarapopuler')
                        @livewire('frontend.nusantara1.widget.widgetsidebarmidle')

                        @livewire('frontend.nusantara1.widget.widgetservicesidebar')
                        @livewire('frontend.nusantara1.widget.widgetsidebarbottom') --}}


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
