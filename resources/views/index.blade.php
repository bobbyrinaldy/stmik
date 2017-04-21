@extends('layout/master')

@section('title','STMIK LPKIA')

@section('main')
  <div role="main" class="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

        <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{asset('Main/img/parallax-image.jpg')}}" alt="" width="100%">
        </div>

        <div class="item">
          <img src="{{asset('Main/img/parallax-image.jpg')}}" alt="" width="100%">
        </div>

        <div class="item">
          <img src="{{asset('Main/img/parallax-image.jpg')}}" alt="" width="100%">
        </div>

      </div>

        <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="home-intro" id="home-intro">
    </div>

    <div class="container">

      <div class="row center">
        <div class="col-md-12">
          <h2 class="mb-sm word-rotator-title">
            <strong>STMIK LPKIA BANDUNG</strong>
          </h2>
          <p class="lead">
            Trusted by over 19,000 satisfied users, Porto became the best-selling HTML template<br> in the of one of the world's largest MarketPlace.
          </p>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="row center">
        <div class="col-md-12">
          <img src="{{asset('Main/img/dark-and-light.jpg')}}" class="img-responsive appear-animation" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;">
        </div>
      </div>
    </div>

    <section class="section" data-appear-animation="bounceIn">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-building"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Fasilitas Lengkap</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                  </div>
                </div>
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-file"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Kurikulum Terbaik</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-bus"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Akses Angkutan Umum Mudah</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                  </div>
                </div>
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-location-arrow"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Lokasi Strategis</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Bersertifikasi Internasional</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                  </div>
                </div>
                <div class="feature-box feature-box-style-2">
                  <div class="feature-box-icon">
                    <i class="fa fa-desktop"></i>
                  </div>
                  <div class="feature-box-info">
                    <h4 class="mb-none">Sistem Terkomputerisasi</h4>
                    <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <hr class="tall">

      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive mt-xl appear-animation" src="{{asset('Main/img/layout-styles.png')}}" alt="layout styles" data-appear-animation="bounceInLeft">
        </div>
        <div class="col-md-7 col-md-offset-1">
          <h2 class="mt-xl"><strong>Mudah Bekerja</strong></h2>
          <p class="lead">
            There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
          </p>
        </div>
      </div>

      <hr class="tall">

      <div class="row">
        <div class="col-md-7">
          <h2 class="mt-xl"><strong>Berkualiatas</strong></h2>
          <p class="lead">
            With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
          </p>
        </div>
        <div class="col-md-4 col-md-offset-1 mt-xl">
          <img class="img-responsive appear-animation" src="{{asset('Main/img/style-switcher.png')}}" alt="style switcher" data-appear-animation="bounceInRight">
        </div>
      </div>

      <hr class="tall">

      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive mt-xl appear-animation" src="{{asset('Main/img/layout-styles.png')}}" alt="layout styles" data-appear-animation="bounceInLeft">
        </div>
        <div class="col-md-7 col-md-offset-1">
          <h2 class="mt-xl"><strong>Biaya Terjangkau</strong></h2>
          <p class="lead">
            There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
          </p>
        </div>
      </div>

      <hr class="tall">

      <div class="row center">
        <div class="col-md-12">
          <h2 class="mb-none word-rotator-title mt-xl">
             <strong>Berita Terkini</strong>
          </h2>
          <p class="lead mb-xl">
            Cari tahu berita mengenai kami
          </p>
        </div>
      </div>

    </div>

    <section class="section section-no-background section-no-border mt-md section-footer" id="blog" data-appear-animation="fadeInDown">
			<div class="container">
        <div class="col-md-4">
					<img class="img-responsive" src="{{asset('Main/img/blog/blog-hosting-1.jpg')}}" alt="Blog">
					<div class="recent-posts mt-md mb-lg">
						<article class="post">
							<h5><a class="text-dark" href="blog-post.html">Judul berita.</a></h5>
              <div class="post-meta">
								<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
								<span><i class="fa fa-user"></i> By John Doe </span>
							</div>
              <p>Isi berita.</p>
						</article>
					</div>
				</div>
        <div class="col-md-4">
					<img class="img-responsive" src="{{asset('Main/img/blog/blog-hosting-1.jpg')}}" alt="Blog">
					<div class="recent-posts mt-md mb-lg">
						<article class="post">
							<h5><a class="text-dark" href="blog-post.html">Judul berita.</a></h5>
              <div class="post-meta">
								<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
								<span><i class="fa fa-user"></i> By John Doe </span>
							</div>
              <p>Isi berita.</p>
						</article>
					</div>
				</div>
        <div class="col-md-4">
					<img class="img-responsive" src="{{asset('Main/img/blog/blog-hosting-1.jpg')}}" alt="Blog">
					<div class="recent-posts mt-md mb-lg">
						<article class="post">
							<h5><a class="text-dark" href="blog-post.html">Judul berita.</a></h5>
              <div class="post-meta">
								<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
								<span><i class="fa fa-user"></i> By John Doe </span>
							</div>
              <p>Isi berita.</p>
						</article>
					</div>
				</div>
			</div>
		</section>

    <div class="container">
      <div class="row center">
        <div class="col-md-12">
          <hr class="tall">
          <h2 class="mb-none word-rotator-title mt-lg">
            STMIK LPKIA
            <strong>
              <span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
                <span class="word-rotate-items">
                  <span>MUDAH BEKERJA</span>
                  <span>BERKUALITAS</span>
                  <span>BIAYA TERJANGKAU</span>
                </span>
              </span>
            </strong>

          </h2><br>
          <p class="lead">Bekerjasama dengan</p>
        </div>
      </div>
      <div class="row center mt-xl">
        <div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-1.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-2.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-3.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-4.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-5.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-6.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-4.png')}}" alt="">
          </div>
          <div>
            <img class="img-responsive" src="{{asset('Main/img/logos/logo-2.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection
