@extends('layout/master')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
								<li><a href="">SubKemahasiswaan</a></li>
								<li class="active">MOVE</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>MOVE</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

            @if (!empty($move))
              <center>
                <div class="col-md-12">
                  <span class="img-thumbnail">
                    <img height="50%" width="50%" alt="" class="img-responsive" width="300px" src="{{Storage::url('kemahasiswaan/'.$move->logo)}}">
                  </span>
                </div>
              </center>

              <div class="row">
  							<div class="col-md-12">
  								<p>{!! $move->deskripsi !!}</p>
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

					@include('widget_beritaterkini')
				</div>

			</div>

		</div>
@endsection
