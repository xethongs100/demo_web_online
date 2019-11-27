@extends('admin.layout')
@section('name_quanly')
	Quản lý tài khoản người dùng
@endsection
@section('table')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <a href="" class="btn btn-success btn-edit">Xem lại tài khoản đã xóa</a>
      <br></br>
            <thead>
              <tr>
                <th>Id</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo tài khoản</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            @foreach($user as $ds)
            @if($ds->role==1)
              <tr>
                <td>{{$ds->id}}</td>
                <td>{{$ds->full_name}}</td>
                <td>{{$ds->email}}</td>
                <td>{{$ds->password}}</td>
                <td>{{$ds->phone}}</td>
                <td>{{$ds->address}}</td>
                <td>{{$ds->created_at}}</td>
                <td>
                  <button data-url="{{route('detail_user',['id'=>$ds->id])}}" id="{{$ds->id}}" type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Xem user</button>
                  <button data-url="{{route('edit_user',['id'=>$ds->id])}}"​ type="button" data-target="#edit" data-toggle="modal" class="btn btn-warning btn-edit">Sửa</button>
                  <a onclick="return confirm('Bạn có muốn xóa người dùng này')" href="{{route('delete_user',['id'=>$ds->id])}}" class="btn btn-danger btn-delete">Xóa</a>
                </td>
              </tr>
            @endif
            @endforeach
            </tbody>
      </table>
    </div>
  </div>
</div>
@include('admin.user.detail_user')
@include('admin.user.edit_user')
@endsection
