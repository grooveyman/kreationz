<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    img {
        height: fit-content;
        width: fit-content;
    }
    
    .pad-middle {
        /* background-image: url("assets/images/305kreationz/earring_edt/IMG_3090_copy2.jpg"); */
        /* background-color: antiquewhite; */
        min-height: 60vh !important;
        background-size: contain;
        background-repeat: no-repeat;
        /* margin-bottom: 10px; */
        /* margin: 5px 5px 5px 5px; */
    }
    
    .content {
        padding: 10px;
    }
</style>


<body>
    @yield('content')
</body>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a1cc6557e2b4929","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
    crossorigin="anonymous"></script>

</html>