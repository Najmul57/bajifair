<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BajiFair</title>
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">


</head>

<body>

    <!-- header start-->
    @include('frontend.layouts.header')
    <!-- header end-->

    <!-- main content start -->
    <main>

@yield('frontend')

    </main>
    <!-- main content end -->

    <!-- footer start -->
@include('frontend.layouts.footer')
    <!-- footer end -->


    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>



</body>

</html>
