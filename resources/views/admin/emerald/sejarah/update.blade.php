<!-- Update SEJARAH -->

@extends('admin.main')

@section('pageInfo')

<title>Sejarah</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sejarah

@endsection

@section('content')

  <form class="" action="{{url('/admin/sejarah/'. $sejarah->id .'')}}" method="post">


    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Sejarah </div>
					<div class="panel-body">

            <div class="form-group">
              <textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar">{{$sejarah->deskripsi}}</textarea>
          		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/sejarah" class="btn btn-default btn-block" >CANCEL</a>

          </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


		<!-- hidden -->
    <input type="hidden" name="_method" value="put">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>


	<!-- End Form -->

@endsection

@stop
