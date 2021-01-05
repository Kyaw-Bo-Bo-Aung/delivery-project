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




})
//end ready function