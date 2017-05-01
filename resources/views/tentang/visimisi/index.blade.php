@extends('layout/master')

@section('title','Visi Dan Misi')


@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
								<li><a href="">Tentang Kami</a></li>
								<li class="active">Visi dan Misi</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Visi dan Misi</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

						<div class="row">
							<div class="col-md-12">
								<h3><strong>Visi</strong></h3>
								<p>{!! $visimisi->visi !!}</p>
								<hr class="tall">
								<h3><strong>Misi</strong></h3>
								<p>{!! $visimisi->misi !!}</p>
							</div>
						</div>

					</div>

					@include('widget_beritaterkini')
          
				</div>

			</div>

		</div>
@endsection
