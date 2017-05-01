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
					<div class="col-md-3">
						<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
							<div>

								<span class="img-thumbnail">
									<img alt="{{$item->nama}}" src="{{url('/storage/sarana/'.$item->cover)}}" height="175px" width="175px">
								</span>
							</div>
						</div>

					</div>

					<div class="col-md-9" ]>

						<h2><a class="a1" href=""><strong>{{$item->nama}}</strong></a></h2>
						<p class="mt-xlg">@php
              if (strlen($item->deskripsi) > 100)
                echo substr($item->deskripsi, 0, 100) . '...';
                else {
                  echo $item->deskripsi;
                }
            @endphp
</p>

						<a href="/layanan/sarana_prasarana/{{$item->id}}" class="btn btn-primary btn-icon">Lihat Detail</a>

					</div>

				</div>

				<hr class="tall">
      @endforeach

      {!! $sarana->links() !!}

  		</div>
		</div>
@endsection
