
var ingredients = [];

$(".cartHandle").click(function(){
	let id = $(this).val();

	if (!ingredients.includes(id)){
		ingredients.push($(this).val());
		$(this).removeClass("fa-plus").addClass("fa-times is-in-cart");
	} else {
		var index = ingredients.indexOf(id);

		ingredients.splice(index.toString(),1);
		$(this).removeClass("fa-times is-in-cart").addClass("fa-plus");
	}

	var totalIngredients = ingredients.length;

	$(".totalIngredients").html(totalIngredients == 1 ? '1 ingrédient' : `(${totalIngredients} ingrédients)` );
	
	if (totalIngredients == 0) {
		$(".totalIngredients").html('');
	}

	console.log(ingredients);


});

// POST of Place order
$('.place-order').click(function(){
	
	// ingredients = [];
	// $(".cartHandle").removeClass("fa-times is-in-cart").addClass("fa-plus");
	// console.log(ingredients);

	// Ajax POST to OrderController
	// var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	if(ingredients.length < 1) {
		$('#order-messages-result').html(`
			<div class="order-error alert alert-danger">
				Please select at least 1 ingredient.
			</div>
		`)
		return;
	}

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
		}
	});
	
	$.ajax({
		type: "POST",
		url: '/ajaxplaceorder',
		data: {
			// _token: CSRF_TOKEN,
			ingredients : ingredients
		},
		success: function(response) {

			console.log(response);

			// Display success message
			$('#order-messages-result').html(`
				<div class="order-error alert alert-success">
					${response.success}
				</div>
			`);
		},
		error: function( err ){
			// console.log(err);
			
			if (err.status == 401) {
				message = 'Vous devez vous connecter pour faire la commande';
			} else {
				message = 'Il y a une erreur s\'il vous plaît contacter le support';
			}

			$('#order-messages-result').html(`
			<div class="order-error alert alert-danger">
				${message}
			</div>
		`)
		}
	});


	
	// Re-initialize ingredients array
	ingredients = [];

	// Reset all buttons to default
	$(".cartHandle").removeClass("fa-times is-in-cart").addClass("fa-plus");
	$(".totalIngredients").html('');

	
	console.log(ingredients);
});






