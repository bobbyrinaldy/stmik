@extends('layout/master')

@section('title',"Kurikulum")

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
								<li><a href="">Layanan</a></li>
								<li class="active">Kurikulum</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Kurikulum</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

            @if (!empty($kurikulum))
              <div class="row">
  							<div class="col-md-12">
  								<p>{!! $kurikulum->deskripsi !!}</p>
  							</div>
  						</div>
            @else

            <section class="call-to-action with-borders button-centered mb-xl">
              <div class="call-to-action-content">
                <h3>This<strong> Page</strong> is Currently <strong>Empty !</strong></h3>
                <p>Please tell the <strong>Administrator</strong></p>
              </div>
              <div class="call-to-action-btn">
                <a href="/" target="_blank" class="btn btn-lg btn-primary"><span class="fa fa-refresh fa-spin"></span> Home</a>
              </div>
            </section>

            @endif

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
