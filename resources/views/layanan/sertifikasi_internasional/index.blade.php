@extends('layout/master')

@section('title','Sertifikasi Internasional')

@section('main')
  <div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
								<li><a href="">Layanan</a></li>
								<li class="active">Sertifikasi Internasional</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Sertifikasi Internasional</h1>
						</div>
					</div>
				</div>
			</section>


			<div class="container">

				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">

                <div class="table-responsive">
  								<table class="table">
                    @foreach ($sertifikasi as $item)
                    <tr>
                      <td width="1%"><img src="{{Storage::url('sertifikasi/'.$item->logo)}}" width="130px" height="130px"></td>
                      <td width="20%"><p>{{$item->nama}}</p></td>
                      <td>{!!$item->deskripsi!!}</td>
                    </tr>
                  @endforeach

  								</table>
                </div>
							</div>
            </div>
						</div>



					@include('widget_beritaterkini')
				</div>

			</div>

		</div>
@endsection
