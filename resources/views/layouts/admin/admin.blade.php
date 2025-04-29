<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title ")</title>
	<link rel="stylesheet" href="assets/assets/vendors/core/core.css">
	<link rel="stylesheet" href="assets/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets/assets/images/favicon.png" />
    @stack("css")
</head>
<body>
	<div class="main-wrapper">
    @include("layouts.admin.sidebar")

		<div class="page-wrapper">
            @include("layouts.admin.navbar")
			<div class="page-content">
                @yield("body")
			</div>
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-center text-muted text-md-left">RTİCARET{{date('Y')}}<a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
			</footer>
		</div>
	</div>
	<script src="assets/assets/vendors/core/core.js"></script>
	<script src="assets/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/assets/js/template.js"></script>
    @stack("js")
</body>
</html>
