<!-- Index sisfo -->

@extends('admin.main')

@section('pageInfo')

<title>Sisfo</title>

@section('rute')
    <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Sistem Informasi Akademik</li>
@endsection

@section('pageTitle')

Sistem Informasi Akademik

@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                <a href="{{url('/admin/sisfo/create')}}" class="btn btn-primary">Create New</a>
              @else
                  @foreach ($sisfo as $item)
                    <a href="{{url('/admin/sisfo/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                  @endforeach
              @endif
            </div>
            <div class="panel-body">
              <table data-toggle="table">

                  <tbody>
                    @foreach ($sisfo as $item)
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


@endsection

@stop
