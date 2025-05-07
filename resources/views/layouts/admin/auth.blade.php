<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>
	<link rel="stylesheet" href="assets/assets/vendors/core/core.css">
	<link rel="stylesheet" href="assets/assets/vendors/mdi/css/materialdesignicons.min.css">

	<link rel="stylesheet" href="assets/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets/assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/assets/vendors/sweetalert2/sweetalert2.min.css">
    @stack("css")
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="mx-0 row w-100 auth-page">
					<div class="mx-auto col-md-8 col-xl-6">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                    <div class="auth-left-wrapper"
                        style="background-image: url('{{ asset(Route::is('register') ? 'assets/assets/images/auth/register.webp' : 'assets/assets/images/auth/login.webp') }}');">
                    </div>
                </div>
                <div class="col-md-8 pl-md-0">
                    @yield("body")
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<script src="assets/assets/vendors/core/core.js"></script>
    <script src="assets/assets/vendors/sweetalert2/sweetalert2.min.js"></script>
	<script src="assets/assets/js/template.js"></script>
    @include('sweetalert::alert')

    @stack("js")
</body>
</html>
