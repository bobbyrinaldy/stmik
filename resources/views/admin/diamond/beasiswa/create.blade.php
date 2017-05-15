<!-- CREATE BEASISWA -->

@extends('admin.main')

@section('pageInfo')

<title>Beasiswa</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/beasiswa">Beasiswa</a></li>
  <li class="active">Create</li>

@endsection

@section('pageTitle')

Beasiswa

@endsection

@section('content')

	<!-- form -->

  <form class="" action="{{url('/admin/beasiswa')}}" method="post">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Create New Beasiswa</div>
					<div class="panel-body">

            <div class="form-group">
              <label for="">Judul : </label>
              <input type="nama" name="nama" value="" placeholder="Judul Beasiswa" class="form-control">
          		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="isi" rows="10" cols="40" placeholder="Isi"></textarea>
          		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/if" class="btn btn-default btn-block" >CANCEL</a>
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
