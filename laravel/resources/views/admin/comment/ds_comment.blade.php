@extends('admin.layout')
@section('name_quanly')
	Quản lý comment người dùng
@endsection
@section('table')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <a href="{{route('view_delete_comment')}}" class="btn btn-success btn-edit">Xem lại comment đã xóa</a>
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
            @foreach($comment as $ds)
              <tr>
                <td>{{$ds->id}}</td>
                <td>{{$ds->id_user}}</td>
                <td>{{$ds->id_pro}}</td>
                <td>{{$ds->name}}</td>
                <td>{{$ds->date}}</td>
                <td>
                  <a onclick="return confirm('Bạn có muốn xóa comment này?')" href="{{route('xoa_comment',['id'=>$ds->id])}}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
            @endforeach
            </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
