<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="brand-logo" href="index.html">
            <img src="/assets/images/logo.svg" alt="{{config("app.name")}}">
        </a>
        <a class="sidebar-brand brand-logo-mini" href="index.html">
            <img src="/assets/images/logo-mini.svg" alt="{{config("app.name")}}">
        </a>
    </div>
    <ul class="nav">
        @foreach(config('sidebar') as $link)
            @if(!in_array(auth()->user()->role_id, $link['exclude_roles']))
                @include('partials.sidebar-link')
            @endif
        @endforeach
    </ul>
</nav>
