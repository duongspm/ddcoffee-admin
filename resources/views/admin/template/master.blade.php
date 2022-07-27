<!DOCTYPE html>
<html lang="en">
@include('admin.template.head')
<body>
    @include('admin.template.header')
    @include('admin.template.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->
    @include('admin.template.footer')
</body>

</html>