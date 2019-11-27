{{-- Modal show chi tiết todo --}}
<div class="modal fade" id="show">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Xem thông tin</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<h1>Thông tin người dùng:</h2>
				Id: <h2 id="id"></h2>
				Họ Tên: <h2 id="hoten"></h2>
				Email: <h2 id="email"></h2>
				Số điện thoại: <h2 id="sdt"></h2>
				Địa chỉ: <h2 id="diachi"></h2>
				Ngày tạo tài khoản: <h2 id="created_at"></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>