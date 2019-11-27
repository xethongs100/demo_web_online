@extends('admin.layout')
@section('table')
<div class="container">
	<div class="modal-content">
		<form action="{{route('add-product')}}" method="POST" role="form" enctype="multipart/form-data">
			@csrf
			<div class="modal-header">
				<h4 class="modal-title">Thêm sản phẩm</h4>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="modal-body">
						<div class="form-group">
							<label for="">Loại sản phẩm</label>
							<select name="id_type" id="id_type" class="form-control" >
							@foreach($t_product as $ds1)
								<option value="{{$ds1->id}}">{{$ds1->name}}</option>
							@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="">Tên sản phẩm</label>
							<input name="ten_san_pham" type="text" class="form-control" id="ten_san_pham" placeholder="Nhập vào tên sản phẩm" >
							<br>
                            @if($errors->has('ten_san_pham'))
                            	<div class="alert alert-danger">
                            		{{ $errors->first('ten_san_pham') }}
                            	</div>
                            @endif
						</div>

						<div class="form-group">
							<label for="">Giá tiền</label>
							<input name="price" type="text" class="form-control" id="price" placeholder="Nhập vào giá tiền sản phẩm" >
							<br>
                            @if($errors->has('price'))
                            	<div class="alert alert-danger">
                            		{{ $errors->first('price') }}
                            	</div>
                            @endif
						</div>

						<div class="form-group">
							<input type="file" name="myFile" id="myFile" onchange="showImage.call(this)" >
							<br></br>
							<label for="">Hình ảnh</label>
							<br></br>
							<img src="" style="height:100px;" id="image">
							<br>
                            @if($errors->has('myFile'))
                            	<div class="alert alert-danger">
                            		{{ $errors->first('myFile') }}
                            	</div>
                            @endif
						</div>

						<div class="form-group">
							<label for="">Đơn vị</label>
							<input name="unit" type="text" class="form-control" id="unit" placeholder="Nhập vào đơn vị sản phẩm" >
							<br>
                            @if($errors->has('unit'))
                            	<div class="alert alert-danger">
                            		{{ $errors->first('unit') }}
                            	</div>
                            @endif
						</div>
						<div class="modal-footer">
							<a href="{{route('view_ds_product')}}" class="btn btn-default">Quay về</a>
							<input type="submit" class="btn btn-primary" value="Thêm">
						</div>
					</div>
				</div>
			<div class="col-sm-3"></div>
				
			</div>
		</form>
	</div>
</div>
@endsection
<script type="text/javascript">
		function showImage() 
		{
			if(this.files && this.files[0])
			{
				var object = new FileReader();
				object.onload = function(data){
					var image = document.getElementById("image");
					image.src = data.target.result;
				}
				object.readAsDataURL(this.files[0]);
			}
		}
</script>
