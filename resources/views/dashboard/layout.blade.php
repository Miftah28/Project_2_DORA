<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.head')

<body>
    <main id="main" class="main">

        @include('dashboard.partials.header')
        @include('dashboard.partials.sidebar')
        @yield('content')
        @include('dashboard.partials.footer')

    </main><!-- End #main -->
    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('dashboard.partials.js')
    @yield('script')
</body>

</html>
