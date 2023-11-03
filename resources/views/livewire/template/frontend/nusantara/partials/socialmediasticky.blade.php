<div>
    <!-- The social media icon bar -->
    <div class="icon-bar-sticky">
        @foreach ($global_socialmedia as $item)
            <a @if ($item->url) href="{{ $item->url }}" target="_blank"
                @else
                href="#" @endif
                class="waves-effect waves-light btn btn-social-icon btn-{{ $item->class }}">
                <i class="fa {{ $item->icon }}"></i>
            </a>
        @endforeach
    </div>
</div>
