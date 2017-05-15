<!-- INDex VISI MISI index.blade.php -->

@extends('admin.main')

@section('pageInfo')

<title>Visi Misi</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Visi dan Misi

@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                  <a href="/admin/visimisi/create" class="btn btn-primary">Create New</a>
              @else
                  @foreach ($visimisi as $item)
                    <a href="{{url('/admin/visimisi/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                  @endforeach
              @endif
            </div>
            <div class="panel-body">
              <table data-toggle="table">
                  <thead>
                  <tr>
                    <th>Visi</th>
                    <th>Misi</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($visimisi as $item)
                    <tr>
                      <td>{!!$item->visi!!}</td>
                      <td>{!!$item->misi!!}</td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
              <br>

            </div>
          </div>
        </div>
      </div>


	<!-- </div> -->



@endsection

@stop
