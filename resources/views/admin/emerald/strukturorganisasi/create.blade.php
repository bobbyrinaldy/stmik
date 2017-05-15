<!-- CREATE Struktur Organisasi -->

@extends('admin.main')

@section('pageInfo')

<title>Struktur Organisasi</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Struktur Organisasi

@endsection

@section('content')

  <form class="" action="{{url('/admin/strukturorganisasi')}}" method="post" enctype="multipart/form-data">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Create New Struktur Organisasi  </div>
					<div class="panel-body">

            <div class="form-group">
              <input type="file" name="gambar" value="" placeholder="namanya" class="form-control" required>
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/strukturorganisasi" class="btn btn-default btn-block" >CANCEL</a>
          </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>

	<!-- form -->

@endsection

@stop
