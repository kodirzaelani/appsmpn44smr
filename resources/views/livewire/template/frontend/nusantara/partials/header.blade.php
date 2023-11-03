<div>
    <header class="top-bar text-dark ">
        @livewire('template.frontend.nusantara.partials.topbar')

        <nav hidden class="nav-white nav-transparent">
            <div class="nav-header">
                @if ($global_option != '0')
                    @if ($global_option->logo_menu)
                        <a href="{{ route('root') }}" class="brand">
                            <img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}"
                                alt="" style="max-width: 55%" />
                        </a>
                    @else
                        <a href="{{ route('root') }}" class="brand">
                            <img src="{{ asset('') }}uploads/default/teras_petani_studio.png" alt=""
                                style="max-width: 70%" />
                        </a>
                    @endif
                @endif

                <button class="toggle-bar">
                    <span class="ti-menu"></span>
                </button>
            </div>
            <ul class="menu">
                @if ($public_menu)
                    @foreach ($public_menu as $menu)
                        <li class="@if ($menu['child']) dropdown @endif ">
                            <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">{{ $menu['label'] }}</a>

                            @if ($menu['child'])
                                <ul class="dropdown-menu">
                                    @foreach ($menu['child'] as $child)
                                        <li @if ($child['child']) class="dropdown" @endif>
                                            <a href="{{ $child['link'] }}"
                                                target="{{ $child['target'] }}">{{ $child['label'] }}</a>
                                            @if ($child['child'])
                                                <ul class="dropdown-menu">
                                                    @foreach ($child['child'] as $subchild)
                                                        <li>
                                                            <a href="{{ $subchild['link'] }}"
                                                                target="{{ $subchild['target'] }}">{{ $subchild['label'] }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif

            </ul>
            <ul class="attributes">
                <li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10">
                        <div class="btn btn-primary py-5">Enroll Now</div>
                    </a></li>
                <li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
                <li class="megamenu" data-width="270">
                    <a href="#"><span class="ti-shopping-cart"></span></a>
                    <div class="megamenu-content megamenu-cart">
                        <!-- Start Shopping Cart -->
                        <div class="cart-header">
                            <div class="total-price">
                                Total: <span>$2,432.93</span>
                            </div>
                            <i class="ti-shopping-cart"></i>
                            <span class="badge">3</span>
                        </div>
                        <div class="cart-body">
                            <ul>
                                <li>
                                    <img src="../images/front-end-img/product/product-1.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                                <li>
                                    <img src="../images/front-end-img/product/product-2.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                                <li>
                                    <img src="../images/front-end-img/product/product-3.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-footer">
                            <a href="#">Checkout</a>
                        </div>
                        <!-- End Shopping Cart -->
                    </div>
                </li>
            </ul>
            @livewire('template.frontend.nusantara.post.postheadersearch')


        </nav>
    </header>
</div>
