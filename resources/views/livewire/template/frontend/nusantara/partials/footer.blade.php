<div>
    <footer class="footer_three">
        <div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title pb-15 bb-1">Tentang SMPN 44 Samarinda</h4>
                            <ul class="list-unstyled mb-30">
                                @if ($public_menu_footer)
                                    @foreach ($public_menu_footer as $menu)
                                        <li>
                                            <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                                                {{ $menu['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title pb-15 bb-1">Pelajaran</h4>
                            <ul class="list-unstyled mb-30">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Details</a></li>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="widget">
                            <h4 class="footer-title">Kontak</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">

                            <ul class="list list-unstyled mb-30">
                                @if ($global_option != '0')
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        {{ !empty($global_option->address) ? $global_option->address : 'Sesuaikan di halaman admin' }}</br>
                                        {{ !empty($global_option->city) ? $global_option->city : '' }},
                                        {{ !empty($global_option->state) ? $global_option->state : '' }}</br>
                                        {{ !empty($global_option->country) ? $global_option->country : '' }}
                                        {{ !empty($global_option->postalcode) ? $global_option->postalcode : '' }}
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span>{{ !empty($global_option->phone) ? $global_option->phone : '' }} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <span>
                                            <a
                                                href="mailto:{{ !empty($global_option->email) ? $global_option->email : 'info@digitalnusantara.id' }}">{{ !empty($global_option->email) ? $global_option->email : 'info@digitalnusantara.id' }}
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                    @elseif ($global_option == '0')
                                        <i class="fa fa-map-marker"></i>
                                        <p class="text-capitalize mb-20">Silahkan di halaman admin menu setting </p>
                                    </li>
                                @endif
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Statistik Pengunjung</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">

                            <h4 class="footer-title mt-20">Newsletter</h4>
                            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
                                <form class="" action="" method="post">
                                    <input name="email" required="required" class="form-control"
                                        placeholder="Your Email Address" type="email">
                                    <button name="submit" value="Submit" type="submit" class="btn btn-info mt-5"> Get
                                        notified </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12 text-md-start text-center"> © 2023 @php
                        $date = date('Y');
                        if ($date == 2023) {
                            echo '';
                        } else {
                            echo ' - ' . date('Y');
                        }
                    @endphp -
                        <a class="text-white" target="_blank" href="{{ config('app.url') }}">
                            @if ($global_option != '0')
                                @if ($global_option->webname)
                                    {{ !empty($global_option->webname) ? $global_option->webname : config('app.name') }}
                                @endif
                            @endif
                        </a> - All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
