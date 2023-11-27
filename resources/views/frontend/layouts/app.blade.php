<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="author" content="masud9900">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Food - Ordaring HTML Web Template">
    <meta name="keywords" content="html template, food, food ordaring, echomarch, food revewring,">
    <title>Food - Ordaring Application Laravel </title>
    <!-- ====================Favicon============ -->
    <link rel="icon" sizes="32x32" href="img/favicon.png">
    <!-- ==================LINK ALL STYLE ARE HERE=============== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./font/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/smoothproducts.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/timePic.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}./css/responsive.css">


</head>

<body>
{{-- 
    <div class='spinner__wrapper' id="spinner__wrapper">
        <img src="{{ asset('assets/frontend/') }}./img/Pizza spinning.gif" alt="" class="spiner">
    </div> --}}
    <!-- ==========================Preloder============= -->

    <div class="weapper">
        <!-- ======================================NAVIGATION SECTION================== -->
         @include('frontend.partials.header')

        <!-- =============mobile nav model==== -->
         @include('frontend.partials.mobile_nav')
        <!-- =============mobile nav model end==== -->
        <!-- ======================================NAVIGATION SECTION END================== -->
        <!-- Modal -->
         @include('frontend.partials.modal')

    </div>
    <!-- ==========================Book A Table  form====================== -->

    <!-- =======================================BOOK A TABLE END================ -->
    <!-- =======================================BODY SECTION START================ -->
    <div class="body-wraper">
        <div class="body-inner">
            <!-- ===============================SLIDER SECTION START============== -->
         
            <!-- ===============================SLIDER SECTION END============== -->
            <!-- ===============================CATEGORY SLIDER=================== -->

            <!-- ===============================CATEGORY SLIDER END=============== -->
            <!-- =================================BANNER SECTION START============= -->

            <!-- =================================BANNER SECTION END============= -->
            <!-- =================================TOP RECIPES SECTION START============= -->

            <!-- =================================TOP RECIPES SECTION END============= -->
            <!-- =================================DISCOUNT SECTION START============= -->

            <!-- =================================DISCOUNT SECTION END============= -->
            <!-- =================================PRODUCT SECTION START============= -->

            <!-- =================================PRODUCT SECTION END============= -->
            <!-- ============LIFE JEARNY========= -->

            <!-- ============LIFE JARNY END========= -->


@yield('content')


            <!-- ==================CHEFC===== -->

            <!-- ==================CHEFC END===== -->

            <!-- =================================CLIENT REVIEWS START============= -->

            <!-- =================================CLIENT REVIEWS END============= -->
            <!-- =================================DELEVERY SECTION START============= -->

            <!-- middle footer end -->
            <!-- =================================DELEVERY SECTION END============= -->
            <!-- =================================FOOTER SECTION START============= -->
            @include('frontend.partials.footer')
            <!-- =================================FOOTER SECTION END============= -->


        </div>
        <!-- body inner end  -->
    </div>
    <!-- =======================================BODY SECTION END================ -->

    <!-- ==================ALL SCRIPT ARE HERE======================= -->
    <script src="{{ asset('assets/frontend/') }}./js/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/timePic.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/mixitup.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/mixtup.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/jquery.countdown.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}./js/smoothproducts.min.js"></script>
    <!-- ======================CUSTOME SCRIPT ARE HERE================== -->
    <script src="{{ asset('assets/frontend/') }}./js/main.js"></script>

</body>

</html>