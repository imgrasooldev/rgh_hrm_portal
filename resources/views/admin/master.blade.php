<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.compatibility')
    <meta name="description" content="">
    <title>Attendance Portal - RGS Digitals</title>
    @include('admin.includes.style')
</head>
<body>
    <section class="wrapper">
        @include("admin.includes.sidebar")
        @include("admin.includes.header")
        @yield('admin_content')
    </section>
    @include('admin.includes.footer')
</body>
</html>
