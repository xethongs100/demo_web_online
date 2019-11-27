@extends('admin.layout')
@section('table')
  <div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable"  width="100%" cellspacing="0">
      <br></br>
      <!-- <a href="{{route('view_add_product')}}" class="btn btn-success btn-add">Thêm mới</a> -->
      <br></br>
            <thead>
              <tr>
                <th>Id</th>
                <th>Id_User</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ giao hàng</th>
                <th>Số điện thoại</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th>Tổng tiền</th>
                <th>Thời gian</th>
                <th>Ghi chú</th>
                <th>Thanh toán</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            @foreach($hoadon as $ds)
              @if($ds->status==0)
              <tr>
                <td>{{$ds->id}}</td>
                <td>{{$ds->id_user}}</td>
              @foreach($customer as $ds2)
                @if($ds2->id_user==$ds->id_user)
                  <td>{{$ds2->name}}</td>
                  <td>{{$ds2->address}}</td>
                  <td>{{$ds2->phone_number}}</td>
                  @break
                @endif
              @endforeach
                <td>{{$ds->name}}</td>
                <td>{{$ds->qty}}</td>
                <td>{{$ds->price}}</td>
                <td>{{$ds->total}}</td>
                <td>{{$ds->date}}</td>
                <td>{{$ds->note}}</td>
                <td>{{$ds->payment}}</td>
                @if($ds->status==0)
                  <td>Chưa xác nhận</td>
                @else
                  <td>Đã xác nhận</td>
                @endif
                <td>
                  <a onclick="return confirm('Bạn chắc chắc xác nhận hóa đơn này?')" href="{{route('xac-nhan-don-hang',['id'=>$ds->id])}}" class="btn btn-warning">Xác nhận hóa đơn</a>
                </td>
              </tr>
              @endif
            @endforeach
            </tbody>
      </table>
    </div>
  </div>
</div>

@endsection