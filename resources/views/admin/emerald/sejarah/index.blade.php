<!-- SEJARAH index -->

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

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                  <a href="{{url('/admin/sejarah/create')}}" class="btn btn-primary">Create New</a>
              @else
                @foreach ($sejarah as $item)
                  <a href="{{url('/admin/sejarah/'. $item->id .'/edit')}}" class="btn btn-warning">Edit Sejarah</a>
                @endforeach

              @endif
            </div>
            <div class="panel-body">
              <table data-toggle="table">
                  <thead>
                  <tr>
                    <th>Sejarah</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($sejarah as $item)
                    <tr>
                      <td>{!!$item->deskripsi!!}</td>
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
