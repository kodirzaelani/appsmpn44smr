<div>
    @section('title', $title)
    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ $global_option->BgheaderUrl ? $global_option->BgheaderUrl : '/assets/images/background/bg-8.jpeg' }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Kontak Kami</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->

    <section class="py-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12 text-center">
                    <div class="box">
                        <div class="box-body">
                            <img src="{{ $global_option->imageUrl ? $global_option->imageUrl : '/uploads/default/no_image.png' }}"
                                class="img-fluid pt-5" style="max-width: 75%">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-40 bg-dark mb-0">
                        <h2>Kontak Kami</h2>
                        @if ($global_option != '0')
                            <p>Silahkan Menghubungi kami malalui salah satu layana di bawah ini!</p>
                            <div class="widget fs-18 my-20 py-20 by-1 border-light">
                                <ul class="list list-unstyled text-white-80">
                                    <li class="ps-40"><i
                                            class="ti-location-pin"></i>{{ !empty($global_option->address) ? $global_option->address : 'Silahkan Sesuaikan ' }},<br>
                                        {{ !empty($global_option->city) ? $global_option->city : 'Silahkan Sesuaikan ' }},&nbsp;
                                        {{ !empty($global_option->state) ? $global_option->state : 'Silahkan Sesuaikan ' }},&nbsp;
                                        {{ !empty($global_option->postalcode) ? $global_option->postalcode : 'Silahkan Sesuaikan ' }}
                                    </li>
                                    <li class="ps-40 my-20"><i
                                            class="ti-mobile"></i>{{ !empty($global_option->phone) ? $global_option->phone : 'Silahkan Sesuaikan ' }}
                                    </li>
                                    <li class="ps-40"><i
                                            class="ti-email"></i>{{ !empty($global_option->email) ? $global_option->email : 'Silahkan Sesuaikan ' }}
                                    </li>
                                </ul>
                            </div>
                        @endif
                        <h4 class="mb-20">Ikuti Kami di</h4>
                        <ul class="list-unstyled d-flex gap-items-1">
                            @foreach ($global_socialmedia as $item)
                                <li>
                                    <a @if ($item->url) href="{{ $item->url }}" target="_blank"
                                    @else
                                    href="#" @endif
                                        class="waves-effect waves-circle btn btn-social-icon btn-circle btn-{{ $item->class }}">
                                        <i class="fa {{ $item->icon }} text-white"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <iframe
                        src="{{ !empty($global_option->maps) ? $global_option->maps : 'Silahkan Sesuaikan di halaman admin' }}"
                        class="map" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

</div>
