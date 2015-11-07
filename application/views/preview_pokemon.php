<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Preview Pokemon</title>
</head>
<body>
<!-- Nav Bar -->
	<div class='navbar navbar-default'>
		<div class='container'>
			<div class='navbar-header'>
				<p class='navbar-brand'>R</p>
			</div>
			<div>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='/admins/logout'>Shopping Cart(0)</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class='container'>
		<div class='row'>
			<a href='/products'>Go back</a>
			<h1><?= $previewData['name']; ?></h1>
		</div>

		<div id='pokedex' class="row">
			<img src='/<?= $previewData['image']; ?>' alt='No Image Selected'>
			<div id='text'>
				<p><?= $previewData['description']; ?></p>
				<p>Type: <?= $previewData['category']; ?></p>
			</div>
		</div>

		<div class='row'>
			<form action='' method='post'>
				<select class='form-control' name='amount'>
					<option value='1'>1 (<?= $previewData['price']; ?>)</option>
					<option value='2'>2 (<?= floatval($previewData['price'])*2; ?>)</option>
					<option value='3'>3 (<?= floatval($previewData['price'])*3; ?>)</option>
				</select>
				<input type='submit' value='Buy' class='btn btn-primary' />
			</form>
		</div>

		<div class='row'>
			<h4>Similar Pokemon</h4>
<?php 		shuffle($similarPokemons);
			$count = 0;
			foreach ($similarPokemons as $simPoke)
			{
				if ($count < 4)
				{ ?>
				<div class='similar'>
					<img src='/<?= $simPoke['image']; ?>' alt='raichu'>
					<p><?= $simPoke['name']; ?></p>
				</div>
<?php 			$count++;
				}
			} ?>
		</div>
	</div>
</body>
</html>
