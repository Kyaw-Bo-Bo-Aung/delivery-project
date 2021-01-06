$(document).ready(function(){

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('.weight-change').change(function(){
		// alert("ok");
		var id = $(this).val();
		// console.log(id);

		$.post("/weight",{id:id},function(response){
			console.log(response);
			var price = response[0]['price'];
			console.log(price);

			var html='';
			html += `
				<input type="number" min="0" max="50000" step="any" 
				name="deliveryFees" class="form-control" placeholder="${price}" 
				readonly="" value="${price}">
			`
			$('.price-change').html(html);
		})
	})


	$('.assignedBtn').on('click',function(){
		// alert("ok");
		var id = $(this).data('id');
		// console.log(id);
		$.post("/order/detail",{id:id},function(response){
			// console.log(response);
			// var price = response[0]['price'];
			// console.log(price);
			var pickUpPlace = response[0]['pick_up_place'];
			var pickUpDate = response[0]['pick_up_date'];
			var pickUpTime = response[0]['pick_up_time'];
			var dropOffPlace = response[0]['pick_up_place'];
			var productType = response[0]['product_type_id'];
			var packagingType = response[0]['packaging_type_id'];
			var qty = response[0]['qty'];
			var receiverName = response[0]['receiver_name'];
			var receiverPhone = response[0]['receiver_phone'];
			var note = response[0]['note'];
			var weight = response[0]['weight'];
			var deliveryFees = response[0]['product_value'];

			var html;
			html+=`
				
			`;



		$('.orderdetailmodal').modal('show');
	})


})

})
//end ready function