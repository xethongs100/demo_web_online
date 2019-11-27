@extends('admin.layout')
@section('table')
<div class="card-body">
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <br></br>
        <thead>
          <tr>
            <th>Id</th>
            <th>Id_user</th>
            <th>Id_product</th>
            <th>Tên người comment</th>
            <th>Thời gian comment</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
        @foreach($delComment as $ds)
          <tr>
           	<td>{{$ds->id}}</td>
	        <td>{{$ds->id_user}}</td>
	        <td>{{$ds->id_pro}}</td>
	        <td>{{$ds->name}}</td>
	        <td>{{$ds->date}}</td>
            <td>
              <center><a href="{{route('phuc_hoi_comment',['id'=>$ds->id])}}" class="btn btn-success">Phục hồi</a></center>
            </td>
          </tr>
        @endforeach
        </tbody>
  </table>
</div>
</div>
@endsection
	
