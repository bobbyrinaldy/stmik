<!-- CREATE KERJASAMA -->

@extends('admin.main')

@section('pageInfo')

<title>Kerjasama</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/kerjasama">Kerjasama</a></li>
  <li class="active">Create</li>

@endsection

@section('pageTitle')

Kerjasama

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/kerjasama')}}" method="post" enctype="multipart/form-data">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Create New Kerjasama </div>
					<div class="panel-body">

            <div class="form-group">
              <label for="">Nama Perusahaan : </label>
              <input type="text" name="perusahaan" value="" placeholder="Nama Perusahaan" class="form-control">
          		{{ ($errors->has('perusahaan')) ?  $errors->first('perusahaan') : '' }}
            </div>

						<div class="form-group">
              <label for="">Logo : </label>
              <input type="file" name="gambar" value="" required>
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Kategori : </label>
              <select name="kategori" class="form-control">
                <option value="luar">Luar Negeri</option>
                <option value="dalam">Dalam Negeri</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="isi" rows="10" cols="40" placeholder="Isi"></textarea>
          		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/kerjasama" class="btn btn-default btn-block" >CANCEL</a>
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
