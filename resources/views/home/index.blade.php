<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        @include('home.slider')
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        @include('home.about')
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        @include('home.room')
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    <div class="gallery">
        @include('home.gallery')
    </div>
    <!-- end gallery -->
    <!-- blog -->

    <!-- end blog -->
    <!--  contact -->
    <div class="contact">
        @include('home.contact')
    </div>
    <!-- end contact -->
    <!--  footer -->
    @include('home.footer')
</body>

</html>
