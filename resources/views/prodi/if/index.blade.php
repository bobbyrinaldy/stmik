@extends('layout/master')

@section('title','Teknik Informatika')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
								<li><a href="">Program Studi</a></li>
								<li class="active">Teknik Informatika</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Teknik Informatika</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-9">

            @if (!empty($informatika))
              <div class="row">
  							<div class="col-md-12">
  								<p>{!! $informatika->deskripsi !!}</p>
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
