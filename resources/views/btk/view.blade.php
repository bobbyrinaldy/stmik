@extends('layout/master')

@section('title','Bursa Tenaga Kerja | Detail')

@section('main')
  @php
    $month = $detail->created_at;
    $postMonth = date('l ,d F Y',strtotime($month));
    $postTime = date('h:m:s',strtotime($month));
  @endphp
  <div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Beranda</a></li>
									<li><a href="/berita">Bursa Tenaga Kerja</a></li>
									<li class="active">{{$detail->judul}}</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>{{$detail->judul}}</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="{{Storage::url('btk/'.$detail->gambar)}}" alt="">
												</div>
											</div>
										</div>
									</div>

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h2><a class="a1" href="#">{{$detail->judul}}</a></h2>

										<div class="post-meta">
                      <span><i class="fa fa-calendar"></i> {{$postMonth}}</span>
                      <span><i class="fa fa-clock-o"></i> {{$postTime}}</span>
                      <span><i class="fa fa-user"></i>By <strong>:</strong> STMIK LPKIA BANDUNG </span>
										</div>

										<p>{!!$detail->deskripsi!!}</p>


										<div class="post-block post-share">
											<h3 class="heading-primary"><i class="fa fa-share"></i>Share this post</h3>

											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style ">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->

										</div>

									</div>
								</article>

							</div>
						</div>

            @include('widget_beritaterkini')

						</div>
					</div>

				</div>

			</div>
@endsection
