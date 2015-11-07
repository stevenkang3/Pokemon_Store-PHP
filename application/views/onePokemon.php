<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Preview Pokemon</title>
	<link href="/assets/onePokemon.css" rel="stylesheet" type="text/css">
	<link href="/assets/animate.css" rel="stylesheet" type="text/css">
</head>
<style media="screen">
	#similar{
		background-size: 150% 100%;
		background-image: url(http://www.wall321.com/thumbnails/detail/20120308/pokemon%20fields%20ruby%201920x1200%20wallpaper_www.wall321.com_88.jpg);
		width: 1000px;
		padding-left:40px;
		padding-top: 20px;
		padding-bottom: 20px;
	}

	h2 {
		padding-top: 20px;
		padding-bottom: 20px;
		min-width: 250px;
		max-width: 400px;
		margin: 0 auto;
		color: white;
		text-shadow: 1px 1px navy;
	}
	.team, .team2{
		 font-family: marker felt;
		 color: #B80000;
		 font-size: 55px;
		 text-shadow: 1px 1px white;
 }
	.rocket{
		 font-family: arial black;
		 font-size: 80px;
		 color: #B80000;
		 text-shadow: 2px 2px navy;
 }
 .store{
		 font-size: 50px;
		 font-family: pokemon solid;
		 color: yellow;
		 display: inline-block;
		 text-align: center;
		 margin-left: 20px;
		 text-shadow: 2px 2px navy;

		 }
		 #topHeader {
			 background-image: url(http://www.esmandau.com/wp-content/uploads/2014/08/Pokemon-Ball-Pokeball-HEADER.jpg);
		 }
		 .imgBorder {

			 min-height: 300px;
			 min-width: 300px;
			 max-width: 400px;
			 max-height: 400px;
			 /*border: 1px solid red;*/
			 background-image: url(http://cdn2.bigcommerce.com/server5700/0a27b/products/53588/images/65411/white1__08112.1416534061.386.513.png?c=2);
		 }
		 h1{
			 padding: 15px;
			 text-decoration: underline;
			 font-family: serif;
			 color:green;
			 text-shadow: 2px 1px black;
		 }
		 .title {
			 font-family: serif;
			 font-size: 20px;
			 font-weight: bold;
		 }
		 .cat {
			 color: black;
			 font-weight: normal;
			 font-family: serif;
			 font-size: 16px
		 }
		 .mainContainer {
			 height: 800px;
			 max-height: 1500px;
			 width: auto;
			 padding-top: 10px;
			 background-image: url(http://2.bp.blogspot.com/-hlX7lyYj2bo/T7K1IrcvnKI/AAAAAAAAB20/0HUzrq1N-Q0/s1600/scr.jpg);
			 background-color: white;
			 padding-top: 40px;
			 margin-top: -20px;
		 }
		 body {
			 background-image: url(/uploads/Pokemon14.jpg);
			 background-color: pink;
		 }
		 .row {
			 padding-left: 20px;
		 }

</style>
<body>
<!-- Nav Bar -->
<div id='topHeader'>
	<div class='navbar'>
		<div class='container'>
			<div class='navbar-header'>
				<h4><a href='/products/product_page'>Go back</a></h4>
			</div>

				<!-- <div><img class='catchem' src="http://cdn.bulbagarden.net/upload/thumb/1/13/English_motto.png/250px-English_motto.png"></div> -->
<?php
			if($this->session->userdata('cart')){
			$cart = $this->session->userdata('cart');
			$quantity = 0;
			foreach($cart as $item)
			{
			  $quantity += $item['amount'];
			}
		}else{ $quantity = 0;}
?>
			<div>
				<ul class='nav navbar-nav navbar-right'>
					<li><h4><a href='/dashboards/checkout'>Shopping Cart (<?=$quantity?>)</a></h4></li>
				</ul>
			</div>
			<h2 class='animated rotateIn welcome'><span class="team">Team</span><span class="rocket">R</span><span class="team2">ocket</span><span class='store'>>>Poké Store<<</span></h2>
		</div>
	</div>
</div>
	<!-- <div class='header3'>

</div> -->
	<div class='container'>
		<div class='mainContainer'>
		<div class="col-md-4 col-md-offset-1">
		<div class='row1'>
			<div class=''>
			<img class="animated zoomIn imgBorder" src='/<?= $info['image']; ?>' alt='No Image Selected'>
		</div>
	</div>
</div>
		<div class='row1'>
  <div class="animated zoomIn col-md-5 ">
			<div id='pokedex' class="row">
			<div id='text'>
							<h1><?= $info['name']; ?></h1>
				<p class='title'>Product Description: </p>
				<p class='cat'><?= $info['description']; ?></p>
				<p class='title'>Type :<span class='cat'> <?= $info['category']; ?></span></p>

			</div>
		</div>
</div>
</div>
<div class="col-md-3 col-xs-offset-8">
	<div class='row'>
		<form action='/dashboards/cart/<?=$info['id'];?>' method='post'>
			<input type="hidden" name="id" value="<?=$info['id'];?>">
			<input type="hidden" name="price" value="<?=$info['price'];?>">
			<input type="hidden" name="name" value="<?=$info['name'];?>">
			<!-- <input type="hideen" name="image" value="<?= $info['image']; ?>"> -->
			<select class='form-control' name='amount'>
				<option name='quantity' value='1'>1 (<?= $info['price']; ?>)</option>
				<option name='quantity' value='2'>2 (<?= floatval($info['price'])*2; ?>)</option>
				<option name='quantity' value='3'>3 (<?= floatval($info['price'])*3; ?>)</option>
			</select>
			<input type='submit' value='Buy' class='btn btn-primary' />
		</form>
</div>
</div><br><hr>


	<div class="col-md-12">
<!-- <?=$info['id'];?>/<?=$info['price'];?> -->
		<div class='row'>
			<h4>Similar Pokemon</h4>

<?php shuffle($similarPokemons);
			$count = 0;
			foreach ($similarPokemons as $simPoke)
			{
				if ($count < 5)
				{ ?>
				<div class='animated lightSpeedIn similar'>
				<a href="/products/one_pokemon/<?=$simPoke['id'];?>"><img src='/<?= $simPoke['image']; ?>' alt='raichu'></a>
					<p><?= $simPoke['name']; ?></p>
				</div>
<?php 			$count++;
				}
			} ?>
		</div>
	</div>
	</div>
	</div>
</body>
</html>
