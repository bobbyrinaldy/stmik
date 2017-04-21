@extends('layout/master')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="index.php">Beranda</a></li>
								<li class="active">HIMA SMTIK</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>HIMA STMIK</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

						<center>
							<div class="col-md-12">
								<span class="img-thumbnail">
									<img alt="" class="img-responsive" width="300px" src="{{asset('Main/img/projects/project.jpg')}}">
								</span>
							</div>
						</center>

						<div class="col-md-12">
							<hr class="tall">
						</div>

						<div class="row">
							<div class="col-md-12">
								<p>{!!$stmik->deskripsi!!}</p>
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
