<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("body")</title>

    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @stack("css")
</head>
<body>
@include("layouts.front.topbar")
@include("layouts.front.navbar")

    @yield("body")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery/dist/jquery.min.js"></script>
    <script src="assets/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    @stack("js")
</body>
</html>
