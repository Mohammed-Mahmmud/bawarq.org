<!doctype html>
<html class="no-js" lang="zxx">

@include('front.layouts.partials.main-head')

<body data-background="images/slider/body-bg.jpg">
    @include('front.layouts.partials.preloader')


    @include('front.layouts.partials.navbar')


    <!--  ====== header extra info start
    ============================================================ -->
    <main class="over-hiddenn">
        @include('front.layouts.partials.header')
        @yield('content')
    </main>
    @include('front.layouts.partials.footer')

  @include('front.layouts.partials.upbtn')


    @include('front.layouts.partials.scripts')

</body>

</html>
