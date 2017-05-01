@extends('layout/master')

@section('title','Bursa Tenaga Kerja')

@section('main')

  <div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
                  <li><a href="index.php">Beranda</a></li>
									<li><a href="">Layanan</a></li>
									<li class="active">Bursa Tenaga Kerja</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Bursa Tenaga Kerja</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<div class="blog-posts">
                @foreach ($btks as $item)

                @php
                  $month = $item->created_at;
                  $postMonth = date('l ,d F Y',strtotime($month));
                  $postTime = date('h:m:s',strtotime($month));
                @endphp

								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
                              <img class="img-responsive" src="{{Storage::url('btk/'.$item->gambar)}}" width="450px" height="450px">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h2><a class="a1" href="/btk/{{$item->id}}">{{$item->judul}}</a></h2>
                        @php
                          if (strlen($item->deskripsi) > 100)
                            echo "<p style='word-wrap: break-word;'>".substr($item->deskripsi, 0, 375) . '...</p>';
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
												<a href="/btk/{{$item->id}}" class="btn btn-xs btn-primary pull-right">Lihat Detail</a>
											</div>
										</div>
									</div>

								</article>
              @endforeach

								<ul class="pagination pagination-lg pull-right">
									{!! $btks->links() !!}
								</ul>

							</div>
						</div>

					</div>

				</div>

			</div>
@endsection
