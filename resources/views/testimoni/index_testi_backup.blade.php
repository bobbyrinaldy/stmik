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
									<li class="active">Testimonial</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Testimonial</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<h2 class="mb-none">Apa kata mereka tentang <strong>STMIK LPKIA</strong></h2>

								<hr class="tall">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="mb-none"><strong>Mahasiswa</strong></h3><br><br>
							</div>
              @foreach ($testimoni as $item)
                <div class="col-md-4">
  								<div class="testimonial testimonial-style-4">
  									<div class="testimonial-author">
  										<div class="testimonial-author-thumbnail">
  											<img src="{{Storage::url('testimoni/'.$item->profile)}}" class="img-responsive img-circle" alt="">
  										</div>
  										<p><strong class="a4">{{$item->nama}}</strong><i class="a3">{{$item->tag}}</i></p>
  									</div>
  									<blockquote>
  										<p><i class="a2">{!!$item->komentar!!}</i></p>
  									</blockquote>
  									<div class="testimonial-arrow-down"></div>
  								</div>
  							</div>
              @endforeach

						</div>

						<div class="row">
							<div class="col-md-12">
								<hr class="tall">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="mb-none"><strong>Alumni</strong></h3><br><br>
							</div>
							<div class="col-md-4">
								<div class="testimonial testimonial-style-4">
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="Main/img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
										</div>
										<p><strong class="a4">John Smith</strong><i class="a3">CEO & Founder - Okler</i></p>
									</div>
									<blockquote>
										<p><i class="a2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</i></p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<hr class="tall">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="mb-none"><strong>Perusahaan</strong></h3><br><br>
							</div>
							<div class="col-md-4">
								<div class="testimonial testimonial-style-4">
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="Main/img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
										</div>
										<p><strong class="a4">John Smith</strong><i class="a3">CEO & Founder - Okler</i></p>
									</div>
									<blockquote>
										<p><i class="a2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</i></p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<hr class="tall">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="mb-none"><strong>Masyarakat</strong></h3><br><br>
							</div>
							<div class="col-md-4">
								<div class="testimonial testimonial-style-4">
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="Main/img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
										</div>
										<p><strong class="a4">John Smith</strong><i class="a3">CEO & Founder - Okler</i></p>
									</div>
									<blockquote>
										<p><i class="a2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</i></p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
								</div>
							</div>
						</div>

				</div>

				<div class="col-md-3">
					<aside class="sidebar">

						<div class="tabs mb-xlg">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#popularPosts" data-toggle="tab"><i></i>Berita Terkini</a></li>
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
												<a class="a1" href="blog-post.html">Judul berita</a>
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
				</div>

			</div>
		</div>
@endsection
