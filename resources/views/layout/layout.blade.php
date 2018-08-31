@include('layout/header')
    <div class="row mt-3">
        <div class="col-8">
            @yield('layout/content')
        </div>
        <div class="col-4">
            @include('layout/sidebar')
        </div>
    </div>
@include('layout/footer')