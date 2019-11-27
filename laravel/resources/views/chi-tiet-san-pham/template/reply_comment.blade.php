<div class="modal fade" id="modal-reply-comment">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" data-url="" id="form-add" method="POST" role="form">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Trả lời bình luận</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="form-block">
							<label for="notes">Ghi bình luận</label>
							<textarea name="comment" id="notes" class="form-control"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Gửi</button>
				</div>
			</form>
		</div>
	</div>
</div>
