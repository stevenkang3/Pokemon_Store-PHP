<div id='addModal' class='modal fade' tabindex='-1' role='dialog'>
  	<div class='modal-dialog modal-sm' role='document'>
    	<div class='modal-content'>
	      	<div class='modal-header'>
	        	<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	        	<h4 class='modal-title' id='myModalLabel'>Add New Product</h4>
	      	</div>
	      	<div class='modal-body'>
				<form action='/products/add' method='post' id='addForm' enctype='multipart/form-data'>
					<p>Name</p><input type='text' name='name' required/>
					<p>Description</p><textarea name='description' required></textarea>
					<p>Type
						<select class='form-control' name='category'>
<?php 					foreach($types as $type)
						{ ?>
							<option value='<?= $type['category']; ?>'><?= $type['category']; ?></option>
<?php 					} ?>
						</select>
					</p>
					<p>or add a new type</p><input type='text' name='newCategory' />
					<p>Price</p><input type='text' name='price' required/>
					<p>Inventory Amount</p><input type='number' name='inventory' required/> 
					<p>Images<input type='file' name='upload' required/>
				</form>
	      	</div>
	      	<div class='modal-footer'>
	        	<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
	        	<button class='btn btn-success previewButtonAdd'>Preview</button>
	        	<button class='btn btn-primary updateButton' type='submit' form='addForm'>Add</button>
	      	</div>
    	</div>
  	</div>
</div>