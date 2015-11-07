$(document).ready(function(){

	$('#addButton').click(function(){
		$('#addModal').modal();
	});

	// Getting products
	$.get('/products/load_products', function(info){
		$('#productBody').html(info);
	});

	// Search and get filtered products
	$(document).on('submit', '#searchForm', function(){
		$.post($(this).attr('action'), $(this).serialize(), function(info) 
		{
			$('#productBody').html(info);
		},"html");

		$('#searchBar').val('');
		$('#searchBar').attr('placeholder', 'Search by Name or Type');
		return false;
	});

	// Edit and Delete button for each product
	$(document).on('click', '.editButton', function(){
		var id = $(this).attr('id');
		$.get('/products/one_product/'+id, function(prod){
			$('#modalArea').html(prod);
			$('#editModal').modal({show: true});
		})
	});
	
	$(document).on('click', '.deleteButton', function(){
		var id = $(this).attr('id');
		$.get('products/del/'+id, function(prod){
			$('#modalArea').html(prod);
			$('#deleteModal').modal({show: true});

			$('#delButton').click(function(){
				var closeForm = $(this).closest('form');
				closeForm.trigger('submit');
			})
		})	
	});

	$(document).on('click', '.previewButtonAdd', function(){
		form = document.getElementById('addForm');
		form.target = '_blank';
		form.action = 'products/preview';
		form.submit();
		form.action = 'products/add';
		form.target='';
	});

	$(document).on('click', '.previewButtonEdit', function(){
		form = document.getElementById('editForm');
		form.target = '_blank';
		form.action = 'products/preview';
		form.submit();
		form.action = 'products/edit';
		form.target='';
	});

	$(document).on('click', '.updateButton', function(){
		$('#addForm').validate();
		$('#editForm').validate();
		var closeForm = $(this).closest('form');
		closeForm.trigger('submit');
	});
	
});