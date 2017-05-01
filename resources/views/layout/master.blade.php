
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>@yield('title')</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('Main/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('Main/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light')}}" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('Main/vendor/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/font-awesome/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/simple-line-icons/css/simple-line-icons.css')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/magnific-popup/magnific-popup.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('Main/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('Main/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('Main/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('Main/css/theme-shop.css')}}">
		<link rel="stylesheet" href="{{asset('Main/css/theme-animate.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('Main/vendor/rs-plugin/css/settings.css" media="screen')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/rs-plugin/css/layers.css" media="screen')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/rs-plugin/css/navigation.css" media="screen')}}">
		<link rel="stylesheet" href="{{asset('Main/vendor/circle-flip-slideshow/css/component.css" media="screen')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('Main/css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('Main/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('Main/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="/">
										<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{asset('Main/img/lpkia.png')}}">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="/developer"><i class="fa fa-angle-right"></i> Developer</a>
											</li>
											<li class="hidden-xs">
												<a href="/hubungi_kami"><i class="fa fa-angle-right"></i> Hubungi Kami</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>

										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="">
														<a href="/">
															Beranda
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Tentang Kami
														</a>
														<ul class="dropdown-menu">
															<li><a href="/tentang/sejarah">Sejarah</a></li>
															<li><a href="/tentang/visimisi">Visi dan Misi</a></li>
															<li><a href="/tentang/struktur_organisasi">Struktur Organisasi</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Program Studi
														</a>
														<ul class="dropdown-menu">
															<li><a href="/prodi/si">Sistem Informasi (SI)</a></li>
															<li><a href="/prodi/if">Teknik Informatika (IF)</a></li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-toggle" href="#">
															Layanan
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-md-7">
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="/layanan/sarana_prasarana">Sarana dan Prasarana</a></li>
																				<li><a href="/layanan/sertifikasi_internasional">Sertifikasi Internasional</a></li>
																				<li><a href="/layanan/kurikulum">Kurikulum</a></li>
																				<li><a href="/btk">Bursa Tenaga Kerja</a></li>
																			</ul>
																		</div>
																		<div class="col-md-5">
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="/layanan/sisfo_akademik">Sistem Informasi Akademik</a></li>
																				<li><a href="/layanan/beasiswa">Beasiswa</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="">
														<a href="/gallery">
															Gallery
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Kemahasiswaan
														</a>
														<ul class="dropdown-menu">
															<li class=""><a href="/kemahasiswaan/himastmik">HIMA STMIK</a></li>
															<li class=""><a href="/kemahasiswaan/himakom">HIMAKOM</a></li>
															<li class=""><a href="/kemahasiswaan/loopcommunity">LOOP COMMUNITY</a></li>
															<li class=""><a href="/kemahasiswaan/crash">CRASH</a></li>
															<li class=""><a href="/kemahasiswaan/comic">COMIC</a></li>
															<li class=""><a href="/kemahasiswaan/move">MOVE</a></li>
														</ul>
													</li>
													<li class="">
														<a href="/berita">
															Berita
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Kerjasama
														</a>
														<ul class="dropdown-menu">
															<li class=""><a href="/kerjasama/luar_negeri">Luar Negeri</a></li>
															<li class=""><a href="/kerjasama/dalam_negeri">Dalam Negeri</a></li>
														</ul>
													</li>
													<li class="">
														<a href="/testimonial">
															Testimonial
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@yield('main')

      <footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4> About <strong>STMIK LPKIA</strong></h4>

							<p> {!!$sejarah->deskripsi!!} <a href="#" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>
							<hr class="light">
							<div class="row">
								<div class="col-md-3">
									<h5>Link Terkait</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fa fa-caret-right"></i> <a href="blog-full-width.html">LPKIA</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-large-image.html">E-leaning LPKIA</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-medium-image.html">Stratos LPKIA</a></li>
                    <li><i class="fa fa-caret-right"></i> <a href="blog-post.html">Bursa Tenaga Kerja LPKIA</a></li>
                    <li><i class="fa fa-caret-right"></i> <a href="blog-post.html">Prodi Administrasi Bisnis</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-post.html">Prodi Komputer Akuntansi</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Tentang Kami</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fa fa-caret-right"></i> <a href="page-full-width.html">Visi & Misi</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-left-sidebar.html">Sejarah</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-right-sidebar.html">Struktur Organisasi</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Layanan</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-2-columns.html">Sarana & Prasarana</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-3-columns.html">Sertifikasi Internasional</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-4-columns.html">Kurikulum</a></li>
                    <li><i class="fa fa-caret-right"></i> <a href="portfolio-single-project.html">Sisfo Akademi</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-single-project.html">Beasiswa</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Organisasi STMIK LPKIA</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fa fa-caret-right"></i> <a href="page-team.html">HIMA STMIK</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-services.html">HIMA KOMPUTER</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-careers.html">LOOP COMMUNITY</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-faq.html">CRASH</a></li>
                    <li><i class="fa fa-caret-right"></i> <a href="sitemap.html">COMIC</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="sitemap.html">MOVE</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<h3 class="mb-sm">HUBUNGI KAMI</h3>
							<ul class="list list-icons mt-xl">
                <li> <i class="fa fa-phone"></i><strong> <p style="color:white;">Phone : (022) 7564283 / 7564284</p> </strong></li>
								<li><i class="fa fa-map-marker"></i><p style="color:white;"> <strong>Address:</strong> <br/>Jl. Soekarno Hatta No.456, Batununggal, Bandung Kidul, Kota Bandung, Jawa Barat 40266</p></li>
								<li><i class="fa fa-envelope"></i> <p style="color:white;"><strong>Email:</strong><a href="mailto:mail@example.com">mail@example.com</p></a></li>
							</ul>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>© Copyright 2017 <strong>STMIK LPKIA</strong> & <strong>LOOP COMMUNITY</strong>. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('Main/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.appear/jquery.appear.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.easing/jquery.easing.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery-cookie/jquery-cookie.js')}}"></script>
		<script src="{{asset('Main/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('Main/vendor/common/common.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.validation/jquery.validation.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.stellar/jquery.stellar.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.gmap/jquery.gmap.js')}}"></script>
		<script src="{{asset('Main/vendor/jquery.lazyload/jquery.lazyload.js')}}"></script>
		<script src="{{asset('Main/vendor/isotope/jquery.isotope.js')}}"></script>
		<script src="{{asset('Main/vendor/owl.carousel/owl.carousel.js')}}"></script>
		<script src="{{asset('Main/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('Main/vendor/vide/vide.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('Main/js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('Main/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('Main/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('Main/vendor/circle-flip-slideshow/js/jquery.flipshow.js')}}"></script>
		<script src="{{asset('Main/js/views/view.home.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('Main/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('Main/js/theme.init.js')}}"></script>

	</body>
</html>
