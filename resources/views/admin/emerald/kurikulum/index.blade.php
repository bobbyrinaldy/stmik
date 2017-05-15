<!-- IndexKurikulum -->

@extends('admin.main')

@section('pageInfo')

<title>Kurikulum</title>

@section('rute')
    <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li lass="active">Kurikulum</li>
@endsection

@section('pageTitle')

Kurikulum

@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                  <a href="{{url('/admin/kurikulum/create')}}" class="btn btn-primary">Create New</a>
              @else
                  @foreach ($kurikulum as $item)
                    <a href="{{url('/admin/kurikulum/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                  @endforeach
              @endif
            </div>
            <div class="panel-body">
              <table data-toggle="table">

                  <tbody>
                    @foreach ($kurikulum as $item)
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
