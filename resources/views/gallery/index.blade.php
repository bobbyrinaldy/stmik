@extends('layout/master')

@section('title','STMIK LPKIA')

@section('main')

<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Beranda</a></li>
									<li class="active">Gallery</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Gallery</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a.lightbox-portfolio", "type": "image", "gallery": {"enabled": true}}'>
									@if (!empty($count))
										@foreach ($gallery as $item)
											<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
												<div class="image-gallery-item">
													<a href="{{asset('Storage/'.$item->gambar)}}" class="lightbox-portfolio">
														<span class="thumb-info">
															<span class="thumb-info-wrapper">
																<img src="{{Storage::url('gallery/'.$item->gambar)}}" width="447px" height="247px" alt="">
																<span class="thumb-info-title">
																	<span class="thumb-info-type">{{$item->judul}}</span>
																</span>
																<span class="thumb-info-action">
																	<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
											</li>
										@endforeach
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
								</ul>

							</div>

						</div>
					</div>
				</div>
			</div>
@endsection
