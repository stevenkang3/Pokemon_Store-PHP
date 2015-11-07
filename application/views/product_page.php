<!doctype html>
<html>
<head>
  <title>Products Page</title>
  <meta charset='utf-8'>
  <link href="/assets/animate.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  body {
    background-image: url(http://coolbackgroundhd.com/wp-content/uploads/2015/04/amazing-blue-abstract-picture-widescreen-high-definition-wallpapers.jpg);
  }
  .container {
    max-width: 1050px;
    height: auto;
    min-width: 300px;
    background-image: url(https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR76CJt3IEvzumzsD66Z89BdfWsqHApsud8RmTlrhiV0aDRMfRn);

  }

  .row {
    padding: 10px;
    width: 100%;
    min-width: 300px;
    height: auto;
    background-image: url(/uploads/background.png);
    border: 1px solid blue;
    margin: 0 auto;
  }

  .box {
    display: inline-block;
    border: 1px solid red;
    border-radius: 10px;
    margin: 5px;
  }
  .header3 {
    width: 100%;
    background-image: url(http://www.poketerra.com/header.png);
    min-height: 120px;
  }
  h3 {
    margin-left: 20px;
    color: white;
    text-shadow: 1px 1px white;
  }
  .team, .team2{
    font-family: marker felt;
    color: #B80000;
    font-size: 45px;
    text-shadow: 1px 1px white;
  }
  .rocket{
    font-family: arial black;
    font-size: 70px;
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
  .motto{
    text-align: right;
    font-size: 15px;
    color: lightblue;
  }
  .navbar {
    background-image: url(http://i40.tinypic.com/10e3pjb.jpg);
    border-top: 1px solid navy;
    margin-top: -5px;
    min-height: 50px;
    max-height: 200px;
    margin-top: -10px;
    padding: 10px;
  }
  div.navbar img {
    height: 45px;
    padding-bottom: 15px;
    margin-left: 70px;
  }
  .search{
    width:275px;
  }

  /*=========================
  Icons
  ================= */

  /* footer social icons */
  ul.social-network {
    list-style: none;
    display: inline;
    margin-left:0 !important;
    padding: 0;
  }
  ul.social-network li {
    display: inline;
    margin: 0 5px;
  }


  .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
  .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
    color:purple;
  }

  .social-circle li a {
    display:inline-block;
    /*position:relative;*/
    margin:0 auto;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    text-align: center;
    padding-top: 2px;
    width: 35px;
    height: 35px;
    font-size:25px;
  }
  .social-circle li i {
    margin:0 auto;
    line-height:20px;
    text-align: center;
    color: #800000;
  }

  .social-circle li a:hover i, .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
  }
  .social-circle i {
    color: #fff;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
  }
  #social a{
    background-color: #CC9900;
    text-shadow: 2px 1px navy;
    border: 1px solid navy;
  }

  #social{
    display: inline-block;
    padding: 10px;
  }

  #inventories{
    text-align: center;
  }


  /*//---------------------END for spinning links--------------------------*/

  </style>
</head>
<body>
  <div class='container'>
    <div class='header3'>
      <h3 class='animated fadeInDown welcome'>Welcome to <span class="team">Team</span><span class="rocket">R</span><span class="team2">ocket</span><span class='store'>>>Poké Store<<</span>

        <div id ='social'>
          <ul class="social-network social-circle">
            <li><a href="https://www.rss.com/" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li>|</li>
            <li><a href="http://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li>|</li>
            <li><a href="http://www.twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li>|</li>
            <li><a href="https://plus.google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li>|</li>
            <li><a href="https://www.linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </h3></div>


      <div class='navbar'>
        <div class='col-md-1'><a href="/home/index">Back</a></div>
        <div class="col-md-2"><img class='catchem' src="http://cdn.bulbagarden.net/upload/thumb/1/13/English_motto.png/250px-English_motto.png"></div>
        <div class="col-md-5"><form action='/products/load_search' method='post'>
          <input class='search' type='text' name='search'  placeholder=' Search by Product Name'>
          <input id='search' type='submit' class='btn btn-primary' value="Search">
        </form></div>
        <div class="col-md-2"><div id='types' class="dropdown">
          <button class="btn-xs btn-info dropdown-toggle" type="button" data-toggle="dropdown">Search by Type
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <?php                foreach($types as $type){  ?>
                <li ><a href="/products/category/<?=$type['category'];?>"><?=$type['category'];?></a></li>
                <?php                    }?>
              </ul>
            </div></div>
            <div class="col-md-2"><div id='cart' class="dropdown">
              <button class="btn-xs btn-info dropdown-toggle" type="button" data-toggle="dropdown"> ViewCart
                <span class="caret"></span></button>
                <ul class="dropdown-menu">

                  <?php

                  $cart_info = $this->session->userdata('cart');
                  if ($cart_info){
                    foreach($cart_info as $cart){
                      ?>
                      <li><a href="#"><?=$cart['amount']?> : <?=$cart['name']?></a></li>
                      <?php                  }} else{ echo " Cart : Empty";}?>
                        <li><h5><a href="/dashboards/checkout">Checkout</a></h5></li>
                      </ul>
                    </div>
                  </div>
                </div>


                <div class='row' id='inventories'>
                  <?php
                  foreach($products as $pokemon)
                  {
                    echo "<div class='animated zoomIn box'><a href='/products/one_pokemon/".$pokemon['id']."'><img src='/" . $pokemon['image'] . "' width='78px' height='78px' alt='img'></a></div>";
                  }?>
                </div>
              </div>

              <!-- <div class="copyright">
              COPYRIGHT@2015
            </div> -->
            <!-- </div> -->


          </body>
          </html>
