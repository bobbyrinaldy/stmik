@extends('layout/master')

@section('title','Berita')

@section('main')
  <div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Beranda</a></li>
									<li><a href="/berita">Berita</a></li>
									<li class="active">Berita Selengkapnya</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Berita Selengkapnya</h1>
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
													<img class="img-responsive" src="{{asset('Main/img/blog/blog-image-1.jpg')}}" alt="">
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
											<span><i class="fa fa-user"></i> By <a class="a1">John Doe</a> </span>
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

						<div class="col-md-3">
							<aside class="sidebar">

								<div class="tabs mb-xlg">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"> Berita Terkini</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a class="a1" href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2015
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</aside>
							<hr>
						</div>
					</div>

				</div>

			</div>
@endsection
