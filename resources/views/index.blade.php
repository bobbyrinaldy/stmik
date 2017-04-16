@extends('layout/master')

@section('title','STMIK LPKIA')

@section('main')
  <div role="main" class="main">

    <div class="slider-container rev_slider_wrapper" style="height: 677px;">
      <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 800, "gridheight": 677}'>
        <ul>
          <li data-transition="fade">
            <img src="{{asset('Main/img/slides/slide-bg-4.jpg')}}"
              alt=""
              data-bgposition="center center"
              data-bgfit="cover"
              data-bgrepeat="no-repeat"
              class="rev-slidebg">

            <div class="tp-caption"
              data-x="center" data-hoffset="-150"
              data-y="center" data-voffset="-95"
              data-start="1000"
              style="z-index: 5"
              data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{asset('Main/img/slides/slide-title-border.png')}}" alt=""></div>

            <div class="tp-caption top-label"
              data-x="center" data-hoffset="0"
              data-y="center" data-voffset="-95"
              data-start="500"
              style="z-index: 5"
              data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

            <div class="tp-caption"
              data-x="center" data-hoffset="150"
              data-y="center" data-voffset="-95"
              data-start="1000"
              style="z-index: 5"
              data-transform_in="x:[300%];opacity:0;s:500;"><img src="{{asset('Main/img/slides/slide-title-border.png')}}" alt=""></div>

            <div class="tp-caption main-label"
              data-x="center" data-hoffset="0"
              data-y="center" data-voffset="-45"
              data-start="1500"
              data-whitespace="nowrap"
              data-transform_in="y:[100%];s:500;"
              data-transform_out="opacity:0;s:500;"
              style="z-index: 5"
              data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

            <div class="tp-caption bottom-label"
              data-x="center" data-hoffset="0"
              data-y="center" data-voffset="5"
              data-start="2000"
              style="z-index: 5"
              data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

            <a class="tp-caption btn btn-lg btn-primary btn-slider-action"
              data-hash
              data-hash-offset="85"
              href="#home-intro"
              data-x="center" data-hoffset="0"
              data-y="center" data-voffset="80"
              data-start="2200"
              data-whitespace="nowrap"
              data-transform_in="y:[100%];s:500;"
              data-transform_out="opacity:0;s:500;"
              style="z-index: 5"
              data-mask_in="x:0px;y:0px;">Get Started Now!</a>

          </li>
          <li data-transition="fade">
            <img src="{{asset('Main/img/slides/slide-bg-3.jpg')}}"
              alt=""
              data-bgposition="center center"
              data-bgfit="cover"
              data-bgrepeat="no-repeat"
              class="rev-slidebg">

            <div class="tp-caption featured-label"
              data-x="center"
              data-y="center" data-voffset="-45"
              data-start="500"
              style="z-index: 5"
              data-transform_in="y:[100%];s:500;"
              data-transform_out="opacity:0;s:500;">WELCOME TO PORTO</div>

            <div class="tp-caption bottom-label"
              data-x="center"
              data-y="center" data-voffset="5"
              data-start="1000"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
              data-transform_out="opacity:0;s:500;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-splitin="chars"
              data-splitout="none"
              data-responsive_offset="on"
              style="font-size: 23px; line-height: 30px; z-index: 5"
              data-elementdelay="0.05">The #1 Selling HTML Site Template on ThemeForest</div>
          </li>
        </ul>
      </div>
    </div>

    <div class="home-intro" id="home-intro">
      <div class="container">

        <div class="row">
          <div class="col-md-8">
            <p>
              The fastest way to grow your business with the leader in <em>Technology</em>
              <span>Check out our options and features included.</span>
            </p>
          </div>
          <div class="col-md-4">
            <div class="get-started">
              <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
              <div class="learn-more">or <a href="index.html">learn more.</a></div>
            </div>
          </div>
        </div>

      </div>
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
      <div class="row">
        <div class="counters">
          <div class="col-md-3 col-sm-6">
            <div class="counter counter-dark">
              <i class="fa fa-user"></i>
              <strong data-to="19000" data-append="+">0</strong>
              <label>Happy Clients</label>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter counter-dark">
              <i class="fa fa-star"></i>
              <strong data-to="15">0</strong>
              <label>Years in Business</label>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter counter-dark">
              <i class="fa fa-coffee"></i>
              <strong data-to="352">0</strong>
              <label>Cups of Coffee</label>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter counter-dark">
              <i class="fa fa-bar-chart"></i>
              <strong data-to="178">0</strong>
              <label>High Score</label>
            </div>
          </div>
        </div>
      </div>

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
										<h5><a class="text-dark" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-4">
								<img class="img-responsive" src="{{asset('Main/img/blog/blog-hosting-2.jpg')}}" alt="Blog">
								<div class="recent-posts mt-md mb-lg">
									<article class="post">
										<h5><a class="text-dark" href="blog-post.html">Lorem consectetur adipiscing elit.</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-4">
								<img class="img-responsive" src="{{asset('Main/img/blog/blog-hosting-3.jpg')}}" alt="Blog">
								<div class="recent-posts mt-md mb-lg">
									<article class="post">
										<h5><a class="text-dark" href="blog-post.html">Lorem dolor sit amet, consectetur adipiscing elit.</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>
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
            STMIK LPKIA LULUSANNYA
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
