@extends('admin.layout')
@section('ten_quan_ly')
	Quản lý loại sản phẩm
@endsection
@section('table')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <button href="" data-target="#modal-add" data-toggle="modal" class="btn btn-success btn-edit">Thêm mới</button>
      <br></br>
            <thead>
              <tr>
                <th>Id</th>
                <th>Tên loại sản phẩm</th>
                <th>Ngày tạo</th>
                <th>Description</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            @foreach($type as $ds)
              <tr>
                <td>{{$ds->id}}</td>
                <td>{{$ds->name}}</td>
                <td>{{$ds->created_at}}</td>
                <td>{{$ds->description}}</td>
                <td>
                  <button data-url="{{route('detail_type',['id'=>$ds->id])}}" id="" type="button" data-target="#show-type" data-toggle="modal" class="btn btn-info btn-show">Xem</button>
                  <button data-url="{{route('edit_type',['id'=>$ds->id])}}"​ type="button" data-target="#modal-edit-type" data-toggle="modal" class="btn btn-warning btn-edit-type">Sửa</button>
                  <a onclick="return confirm('Bạn có muốn xóa người dùng này')" href="" class="btn btn-danger btn-delete">Xóa</a>
                </td>
              </tr>
            @endforeach
            </tbody>
      </table>
    </div>
  </div>
</div>
@include('admin.LoaiSanPham.add_type_product')
@include('admin.LoaiSanPham.detail_type_product')
@include('admin.LoaiSanPham.edit_type_product')
@endsection