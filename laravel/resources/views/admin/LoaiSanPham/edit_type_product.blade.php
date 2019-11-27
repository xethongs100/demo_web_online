<div class="modal fade" id="modal-edit-type">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" data-url="" id="form-edit-type" method="POST" role="form">
				@csrf
				<div class="alert alert-danger print-error-msg" style="display:none;">
					<h5 id="message-edit"></h5>
				</div>
				<div class="modal-header">
					<h4 class="modal-title">Thêm loại sản phẩm</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Tên loại</label>
						<input name="type" type="text" class="form-control" id="name-type-edit" >
					</div>
				
					<div class="form-group">
						<label for="">Description</label>
						<input name="description" type="text" class="form-control" id="description-edit">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Sửa</button>
				</div>
			</form>
		</div>
	</div>
</div>
