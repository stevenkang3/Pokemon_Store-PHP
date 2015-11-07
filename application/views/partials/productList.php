
	<?php foreach ($productList as $product) { ?>
	<tr>
		<td><img src='/<?=$product['image'];?>' alt='img'></td>
		<td><?= $product['id'] ?></td>
		<td><?= $product['name'] ?></td>
		<td><?= $product['inventory'] ?></td>
		<td>
		<?php if($product['quantity_sold']){ echo $product['quantity_sold']; }
			  else { echo 0; } ?>
		</td>
		<td>
			<p>
				<button id='<?= $product['id'] ?>' class='btn btn-link editButton'>Edit</button> |
	 	   		<button id='<?= $product['id'] ?>' class='btn btn-link deleteButton'>Delete</button>
	 	   	</p>
	 	</td>
	</tr>
	<?php } ?>
