<div class='modal fade' id='deleteModal' tabindex='-1' role='dialog'>
  	<div class='modal-dialog modal-sm' role='document'>
    	<div class='modal-content'>
	      	<div class='modal-body'>
	      		<p>Do you want to delete</p>
	      		<p><strong><?= $info['name']; ?></strong></p>
	      		<p>(Deleted Pokemon cannot be revived!)</p>
				<form action='/products/delete' method='post' id='deleteForm'>
					<input type='hidden' name='id' value='<?= $info['id']; ?>' />
				</form>
	      	</div>
	      	<div class='modal-footer'>
				<button id='delButton' class='btn btn-danger' type='submit' form='deleteForm'>Delete</button>
	        	<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>   	
	      	</div>
    	</div>
  	</div>
</div>