<div>
    <section class="bg-light py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 col-12">
                    <div class="text-md-start text-center">
                        <h2><strong>
                                @if ($global_option != '0')
                                    {{ $global_option->webname }}
                            </strong>
                            @endif
                        </h2>
                        <h2>Cerdas, Cepat, Tepat, Berakhlak</h2>
                        {{-- <p class="mb-0">Menumbuhkan Karakter Manusia Yang Lebih Unggul.</p> --}}
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="text-md-end text-center mt-30 mt-md-0">
                        <a class="btn btn-primary" href="{{ route('root') }}">Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
