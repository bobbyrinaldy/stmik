@extends('layout/master')

@section('title','Testimoni')

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
							{{-- <div class="col-md-12">
								<h3 class="mb-none"><strong>Mahasiswa</strong></h3><br><br>
							</div> --}}
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
            {!! $testimoni->links() !!}
				</div>

				@include('widget_beritaterkini')

			</div>
		</div>
@endsection
