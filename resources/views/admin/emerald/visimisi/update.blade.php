<!-- UPdate Visi Misi -->

@extends('admin.main')

@section('pageInfo')

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/visimisi/'. $visimisi->id .'')}}" method="post">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Visi Misi</div>
					<div class="panel-body">

            <h3>Visi</h3> <br />
            <textarea name="visi" rows="10" cols="40" placeholder="Visi">{{$visimisi->visi}}</textarea>
        		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

            <h3>Misi</h3> <br />
            <textarea name="misi" rows="10" cols="40" placeholder="Misi">{{$visimisi->misi}}</textarea>
        		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            <br>

            <input type="submit" class="btn btn-warning btn-block" name="name" value="UPDATE">
            <a href="/admin/visimisi" class="btn btn-default btn-block" >CANCEL</a>

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
