{{-- Modal sửa todo --}}
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" data-url="" id="form-edit" method="POST" role="form">
				<div class="modal-header">
					<h4 class="modal-title">Cập nhật</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Họ tên</label>
						<input type="text" class="form-control" id="hoten-edit" placeholder="Nhập vào họ tên">
					</div>


					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="number" class="form-control" id="sdt-edit" placeholder="Nhập vào số điện thoại">
					</div>

					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" id="diachi-edit" placeholder="Nhập vào địa chỉ">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>

				</div>
			</form>
		</div>
	</div>
</div>