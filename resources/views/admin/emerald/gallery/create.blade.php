<!-- Create btk create.blade.php -->

@extends('admin.main')

@section('pageInfo')

<title>Gallery</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle','Gallery')

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/gallery')}}" method="post" enctype="multipart/form-data">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Upload New Gallery </div>
					<div class="panel-body">

            <div class="form-group">
              <label for="">Judul : </label>
              <input type="text" name="judul" value="" class="form-control" placeholder="judul cover">
              {{ ($errors->has('judul')) ?  $errors->first('judul') : '' }}
            </div>

						<div class="form-group">
              <label for="">Logo : </label>
              <input type="file" name="gambar" value="">
              {{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/gallery" class="btn btn-default btn-block" >CANCEL</a>
          </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
	<!-- End Form -->

@endsection

@stop
