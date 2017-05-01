@extends('layout/master')

@section('title','Sejarah')


@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
								<li><a href="">Tentang Kami</a></li>
								<li class="active">Sejarah</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Sejarah</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

						<div class="row">
							<div class="col-md-12">
								<p>{!! $sejarah->deskripsi !!}</p>
							</div>
						</div>

					</div>

					@include('widget_beritaterkini')

				</div>

			</div>

		</div>
@endsection
