{{-- Modal show chi tiết todo --}}
<div class="modal fade" id="show-type">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Xem thông tin</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<h1>Thông tin loại sản phẩm:</h2>
				Id: <h2 id="id"></h2>
				Tên loại: <h2 id="name"></h2>
				Description: <h2 id="description"></h2>
				Ngày tạo: <h2 id="created_at"></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>