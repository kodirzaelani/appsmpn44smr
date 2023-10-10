<div>
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Teras Petani</a>
                </li>
            </ul>
        </div>
        &copy; 2023 @php
            $date = date('Y');
            if ($date == 2023) {
                echo '';
            } else {
                echo ' - ' . date('Y');
            }
        @endphp <a target="_blank" href="{{ config('app.url') }}">SMPN 44 Samarinda</a>. All
        Rights Reserved.
    </footer>
</div>
