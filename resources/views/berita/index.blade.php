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
									<li class="active">Berita</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Berita</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<div class="blog-posts">
                @foreach ($berita as $item)

                @php
                  $month = $item->created_at;
                  $postMonth = date('l ,d F Y',strtotime($month));
                  $postTime = date('h:m:s',strtotime($month));
                @endphp

								<article class="post post-medium">
									<div class="row">

										<div class="col-md-4">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
                              <img class="img-responsive" src="{{Storage::url($item->cover)}}" width="450px" height="450px">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-8">

											<div class="post-content">

												<h2><a class="a1" href="/berita/{{$item->id}}">{{$item->judul}}</a></h2>
                        @php
                          if (strlen($item->deskripsi) > 500)
                            echo substr($item->deskripsi, 0, 500) . '...';
                            else {
                              echo $item->deskripsi;
                            }
                        @endphp

											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
                        <span><i class="fa fa-calendar"></i> {{$postMonth}}</span>
												<span><i class="fa fa-clock-o"></i> {{$postTime}}</span>
												<span><i class="fa fa-user"></i>By <strong>:</strong> John Doe </span>
												<a href="/berita/{{$item->id}}" class="btn btn-xs btn-primary pull-right">Lihat Detail</a>
											</div>
										</div>
									</div>

								</article>
              @endforeach

								<ul class="pagination pagination-lg pull-right">
									<li><a href="#">«</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">»</a></li>
								</ul>

							</div>
						</div>

					</div>

				</div>

			</div>
@endsection
