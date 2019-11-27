//viết ajax cập nhập giỏ hàng
$(document).ready(function () {
	$(".update").click(function (){
		var rowId = $(this).attr('id');
		var qty = $(this).parent().parent().find("input").val();
		var token = $("input[name='_token']").val();
		//alert(rowId);
		$.ajax({
			url:'gio-hang/cap-nhat/'+rowId+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowId,"qty":qty},
			success:function(data) {
				if(data == "update"){
					//alert('Yes');
					window.location = "gio-hang"
				}
			}
		});
	});

	$(".delete").click(function (){
		var rowId = $(this).attr('id');
		//alert(rowId);
		$.ajax({
			url:'xoa-gio-hang/'+rowId,
			type:'GET',
			cache:false,
			data:{"id_delete":rowId},
			success:function(data) {
				if(data == "delete"){
					//alert('Yes');
					window.location = "gio-hang"
				}
			}
		});
	});

});
