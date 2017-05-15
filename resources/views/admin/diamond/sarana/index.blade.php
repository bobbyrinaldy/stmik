<!-- INDEX SARANA DAN PRASARANA -->

@extends('admin.main')

@section('pageInfo')

<title>Sarana Dan Prasarana</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sarana Dan Prasarana

@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <a href="{{url('/admin/sarana/create')}}" class="btn btn-primary">Add</a>

            </div>
            <div class="panel-body">
              <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Cover</th>
                    <th>Created at</th>
                    <th>Update at</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach ($sarana as $item)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$item->nama}}</td>
                      <td width="20%">{!! str_limit($item->deskripsi, 50)!!}</td>
                      <td><img src="{{Storage::url('sarana/'.$item->cover)}}" width="70px" height="70px" alt=""></td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td align="center">
                        <a href="/admin/sarana/{{$item->id}}/edit" class="btn btn-warning btn-simple btn-xs"><li class="fa fa-pencil"></li></a>
                        <a href="/admin/sarana/{{$item->id}}/delete" data-name="{{$item->nama}}" class="btn btn-danger btn-simple btn-xs delete"><li class="fa fa-trash"></li></a>
                      </td>

                    </tr>
                  @endforeach
                  </tbody>
              </table>
              <br>

            </div>
          </div>
        </div>
      </div>

	<!-- NAVIGATOR FOR THIS FITUR-->


	<!-- </div> -->



@endsection
@section('js')
  <script type="text/javascript">

    $('.delete').click(function(e) {
    e.preventDefault(); // Prevent the href from redirecting directly
    var linkURL = $(this).attr("href");
    var name = $(this).attr("data-name");
    warnBeforeRedirect(linkURL,name);
    });
     function warnBeforeRedirect(linkURL,name) {
       swal({
           title: "Are you sure?",
           text: "You will delete record with name = "+name+" !",
           type: "warning",
           showCancelButton: true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText: "Yes, delete it!",
           cancelButtonText: "No, cancel it!",
           closeOnConfirm: false,
           closeOnCancel: false
         },
        function(isConfirm){
      if (isConfirm) {
        swal("Deleted!", "Your record with name "+name+" has been deleted.", "success");
        window.location.href = linkURL;
      } else {
          swal("Cancelled", "Your record with name "+name+" is safe :)", "error");
      }
    });
      }
</script>
@endsection
@stop
