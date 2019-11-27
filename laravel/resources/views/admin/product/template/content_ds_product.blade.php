<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
     <!--  @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              <ul>
                <li>{{$error}}</li>
              </ul>
            </div>
        @endforeach
      @endif
      @if(Session::has('thongbao'))
          <div class="alert alert-success">
            {{Session::get('thongbao')}}
          </div>
      @endif
      @if(Session::has('update'))
          <div class="alert alert-success">
            {{Session::get('update')}}
          </div>
      @endif -->
      <table class="table table-bordered" id="dataTable"  width="100%" cellspacing="0">
        @if(Session::has('thongbao'))
          <div class="alert alert-success">
            {{Session::get('thongbao')}}
          </div>
        @endif
      <br></br>
      <a href="{{route('view_add_product')}}" class="btn btn-success btn-add">Thêm mới</a>
      <br></br>
            <thead>
              <tr>
                <th>Id</th>
                <th>Id_type</th>
                <th>Tên sản phẩm</th>
                <th>Description</th>
                <th>Giá gốc</th>
                <th>Giá khuyến mãi</th>
                <th>Hình ảnh</th>
                <th>Đơn vị</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            @foreach($product as $ds)
              <tr>
                <td>{{$ds->id}}</td>
                <td>{{$ds->id_type}}</td>
                <td>{{$ds->name}}</td>
                <td>{{$ds->description}}</td>
                <td>{{$ds->unit_price}}</td>
                <td>{{$ds->promotion_price}}</td>
                <td><img src="../image/product/{{$ds->image}}" style="height:80px;width:80px;"></td>
                <td>{{$ds->unit}}</td>
                <td>
                  <a href="{{route('view_edit_product',['id'=>$ds->id])}}" class="btn btn-warning btn-edit">Sửa</a>
                  <br></br>
                  <a href="" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" class="btn btn-danger btn-delete">Xóa</a>
                </td>
              </tr>
            @endforeach
            </tbody>
      </table>
    </div>
  </div>
</div>
