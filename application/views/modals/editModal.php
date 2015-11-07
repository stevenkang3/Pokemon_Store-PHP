<div class='modal fade' id='editModal' tabindex='-1' role='dialog'>
  	<div class='modal-dialog modal-sm' role='document'>
    	<div class='modal-content'>
	      	<div class='modal-header'>
	        	<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	        	<h4 class='modal-title' id='myModalLabel'>Edit Product - ID #<?= $info['id']; ?></h4>
	      	</div>
	      	<div class='modal-body'>
				<form action='products/edit' method='post' id='editForm' enctype='multipart/form-data'>
					<input type='hidden' name='id' value='<?= $info['id']; ?>' />
					<p>Name</p><input type='text' name='name' value='<?= $info['name']; ?>' required/>
					<p>Description</p><textarea name='description' required><?= $info['description'];?></textarea>
					<p>Type
						<select class='form-control' name='category'>
							<option value='<?= $info['category']; ?>'><?= $info['category']; ?></option>
<?php 					foreach($types as $type)
						{ 
							if ($type['category'] !== $info['category'])
							{ ?>
							<option value='<?= $type['category']; ?>'><?= $type['category']; ?></option>
<?php 						}
						} ?>
						</select>
					</p>
					<p>or add a new type</p><input type='text' name='newCategory' />
					<p>Price</p><input type='text' name='price' value='<?= $info['price']; ?>' required/>
					<p>Inventory Amount</p><input type='number' name='inventory' value='<?= $info['inventory']; ?>' required/> 
					<p>Images<input type='file' name='upload'/>
				</form>
	      	</div>
	      	<div class='modal-footer'>
	        	<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
	        	<button class='btn btn-success previewButtonEdit'>Preview</button>
	        	<button class='btn btn-primary updateButton' type='submit' form='editForm'>Update</button>
	      	</div>
    	</div>
  	</div>
</div>