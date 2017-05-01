@extends('layout/master')

@section('title','beasiswa')

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
								<h1>Beasiswa</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<div class="blog-posts">
                @foreach ($beasiswa as $item)

                @php
                  $month = $item->created_at;
                  $postMonth = date('l ,d F Y',strtotime($month));
                  $postTime = date('h:m:s',strtotime($month));
                @endphp

								<article class="post post-medium">
									<div class="row">


										<div class="col-md-12">

											<div class="post-content">

												<h2><a class="a1" href="beasiswa/{{$item->id}}">{{$item->nama}}</a></h2>
                        @php
                          if (strlen($item->deskripsi) > 100)
                            echo "<p style='word-wrap: break-word;'>".substr($item->deskripsi, 0, 555) . '...</p>';
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
												<span><i class="fa fa-user"></i>By <strong>:</strong> Admin STMIK LPKIA </span>
												<a href="beasiswa/{{$item->id}}" class="btn btn-xs btn-primary pull-right">Lihat Detail</a>
											</div>
										</div>
									</div>

								</article>
              @endforeach

								<ul class="pagination pagination-lg pull-right">
									{!! $beasiswa->links() !!}
								</ul>

							</div>
						</div>

					</div>

				</div>

			</div>
@endsection
