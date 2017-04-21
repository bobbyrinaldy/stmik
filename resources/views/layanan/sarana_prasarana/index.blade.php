@extends('layout/master')

@section('title','Sarana Dan Prasarana')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
								<li><a href="">Layanan</a></li>
								<li class="active">Sarana dan Prasarana</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Sarana dan Prasarana</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

        @foreach ($sarana as $item)
				<div class="row">
					<div class="col-md-5">
						<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
							<div>

								<span class="img-thumbnail">
									<img alt="" class="img-responsive" src="{{asset('/storage/'.$item->cover)}}">
								</span>
							</div>
						</div>

					</div>

					<div class="col-md-7">

						<h2><a class="a1" href=""><strong>{{$item->nama}}</strong></a></h2>
						<p class="mt-xlg">{!! $item->deskripsi !!}</p>

						<a href="detail_sarana_prasarana.php" class="btn btn-primary btn-icon">Lihat Detail</a>

					</div>

				</div>

				<hr class="tall">
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
@endsection
