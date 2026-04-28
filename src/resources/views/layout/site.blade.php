<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.head')
</head>

<body>

    <div class="smooth-wrapper">
        <div id="smooth-content">
        @include('partials.preloader')
        @include('partials.header')
        @include('partials.search')

        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!-- GT MouseCursor Start -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        <main>
            @yield('content')
        </main>
        <!-- Back To Top Start -->

        <!-- @include('partials.footer') -->

        </div>
    </div>

    @include('partials.script')

</body>

</html>