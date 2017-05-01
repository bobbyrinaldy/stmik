@extends('layout/master')

@section('title','STMIK LPKIA')

@section('main')
  <div role="main" class="main">

    <div class="home-intro" id="home-intro" style="margin-top:-17px;">

      <div class="row center" style="margin-bottom:-20px">
        <div class="owl-carousel owl-theme" data-plugin-options='{"items": 12, "autoplay": true, "autoplayTimeout": 2500}'>
          @foreach ($carousel as $item)
          <div>
            <img width="400px" height="110px" src="{{Storage::url('carousel/'.$item->gambar)}}" alt="">
          </div>
        @endforeach
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
            Lulusannya Mudah Bekerja, Berkualitas, Dan Biaya Terjangkau
          </p>
        </div>
      </div>

    </div>

      <div class="row center">
        <div class="col-md-4">
          <img src="{{Storage::url('lpkia1.jpg')}}" width="400px" height="200px" class="appear-animation" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -10px;">
        </div>
        <div class="col-md-4">
          <img src="{{Storage::url('lpkia2.jpg')}}" width="400px" height="200px" class="appear-animation" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;">
        </div>
        <div class="col-md-4">
          <img src="{{Storage::url('lpkia3.jpg')}}" width="400px" height="200px" class="appear-animation" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;">
        </div>
      </div>

    <section class="section" data-appear-animation="bounceIn">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                  <div class='feature-box-icon'>
                    <i class='fa fa-building'></i>
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
        <div class="col-md-3">
          <img class="img-responsive mt-xl appear-animation" src="{{Storage::url('bekerja.jpg')}}" alt="layout styles" data-appear-animation="bounceInLeft">
        </div>
        <div class="col-md-9">
          <h2 class="mt-xl"><strong>Mudah Bekerja</strong></h2>
          <p>
            There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
          </p>
        </div>
      </div>

      <hr class="tall">

      <div class="row">
        <div class="col-md-9">
          <h2 class="mt-xl"><strong>Berkualiatas</strong></h2>
          <p>
            With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
          </p>
        </div>
        <div class="col-md-3 mt-xl">
          <img class="img-responsive appear-animation" src="{{Storage::url('berkualitas.jpg')}}" alt="style switcher" data-appear-animation="bounceInRight">
        </div>
      </div>

      <hr class="tall">

      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive mt-xl appear-animation" src="{{Storage::url('terjangkau.jpg')}}" alt="layout styles" data-appear-animation="bounceInLeft">
        </div>
        <div class="col-md-9">
          <h2 class="mt-xl"><strong>Biaya Terjangkau</strong></h2>
          <p>
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
        @foreach ($berita as $item)

          @php
            $month = $item->updated_at;
            $postMonth = date('l ,d F Y',strtotime($month));
            $postTime = date('h:m:s',strtotime($month));
          @endphp

        <div class="col-md-4">
          <img src="{{Storage::url('/berita/'.$item->cover)}}" width="360px" height="150px">
					<div class="recent-posts mt-md mb-lg">
						<article class="post">
							<h5><a class="text-dark" href="/berita/{{$item->id}}">{{$item->judul}}</a></h5>
              <div class="post-meta">
                <span><i class="fa fa-calendar"></i> {{$postMonth}} </span>
								<span><i class="fa fa-clock-o"></i> {{$postTime}} </span>
								<span><i class="fa fa-user"></i>By STMIK LPKIA</span>
							</div>
						</article>
					</div>
				</div>

      @endforeach
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
        @foreach ($kerjasama as $item)

          <div>
            <img height="100px" width="100px" style="padding-left:10px; padding-right: 10px;" src="{{Storage::url('/kerjasama/'.$item->logo)}}" alt="kerjasama logo">
          </div>

        @endforeach

        </div>
      </div>
    </div>


  </div>
@endsection
