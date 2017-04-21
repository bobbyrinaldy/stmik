@extends('layout/master')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
								<li><a href="">SubKemahasiswaan</a></li>
								<li class="active">LOOP COMMUNITY</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>LOOP COMMUNITY</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

						<div class="row">
							<div class="col-md-12">
								<p>{!! $loop->deskripsi !!}</p>
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

		</div>
@endsection
