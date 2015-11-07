<!doctype html>
<html>
<head>
  <title>Shopping Cart</title>
  <meta charset='utf-8'>
  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  <script type="text/javascript">
  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
      $item = $(this);

      if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
      }
    });

    allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
          isValid = false;
          $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
      }

      if (isValid)
      nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
  });
  </script>
  <style>

  div.container{
    width:1000px;
    min-height: 700px;
    padding: 5px;

  }
  div.header2 p{
    display: inline-block;
    vertical-align: top;
  }
  div.cart_content{
    /*width: 780px;*/
  }
  div.cart_content p{
    /*margin-left: 650px;*/

  }
  div.cart_content input{
    /*margin-left: 640px;*/
  }
  #cont_shop{

    margin-bottom: 50px;

  }
  /*-------------------For CC FORMS------------------*/
  /* Padding - just for asthetics on Bootsnipp.com */

  .pay_up{
    display: inline-block;
    position: relative;
    left:900px;
  }
  /*------------------------------------Shipping/Billing info Starts--------------------------*/
  body{
    margin-top:40px;
  }

  .stepwizard-step p {
    margin-top: 10px;
  }

  .stepwizard-row {
    display: table-row;
  }

  .stepwizard {
    display: table;
    /*width: 100%;*/
    /*position: relative;*/
  }

  .stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
  }

  .stepwizard-row:before {
    top: 14px;
    bottom: 0;
    /*position: absolute;*/
    content: " ";
    /*width: 100%;*/
    height: 1px;
    background-color: #ccc;
    z-order: 0;

  }

  .stepwizard-step {
    display: table-cell;
    text-align: center;
    /*position: relative;*/
  }

  .btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
  }
  </style>
  <?php

  $cart_info = $this->session->userdata('cart');
  ?>
</head>
<body>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-4 col-sm-6'>
        <div class='header2'>
          <div class='col-xs-6'>
            <img src='https://s-media-cache-ak0.pinimg.com/236x/e9/39/09/e939091daaeda9df8246a8090456a350.jpg' name='logo'>
            <p>Poke Cart</p>
          </div>
          <div class='col-xs-6'>
            <form class="" action='/dashboards/logout' method="post">
              <button class="btn btn-danger nextBtn btn-sm pull-right" type="submit" >EMPTY OUT CART</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div class='row'>
      <div class='col-xs-4 col-sm-6'>
        <div class='cart_content'>
          <table class = 'table table-bordered table table-striped'>
            <thead>
              <tr>
                <th>Item #</th>
                <!-- <th>Image</th> -->
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php                 if($cart_info){
                $total = 0;
                foreach($cart_info as $info)
                {?>
                  <tr>
                    <td><?=$info['id']?></td>
                    <!-- <td><img src='/<?= $info['image']; ?>' alt='No Image Selected'></td> -->
                    <td><?=$info['name']?></td>
                    <td><?=$info['price']?></td>
                    <td><?=$info['amount']?></td>
                    <td><?=$info['price'] * $info['amount']?></td>
                  </tr>
                  <?php               $total += $info['price'] * $info['amount'];
                }} else{$total=0;}?>
              </tbody>

            </table>
          </div>
        </div>
      </div>

      <div class='row'>
        <div class='col-xs-4'>
          <p>Total : <?=$total?></p>

          <form action='/products/product_page' method='post'>
            <input id='cont_shop' type='submit' class='btn btn-info' value='Continue Shopping'>
          </form>
        </div>
      </div>

      <div class='row'>
        <div class='col-xs-4'>

          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class='col-xs-4'>
                <div class="stepwizard-step">
                  <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                  <p>Ship</p>
                </div>
              </div>
              <div class='col-xs-4'>
                <div class="stepwizard-step">
                  <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                  <p>Bill</p>
                </div>
              </div>
              <div class='col-xs-4'>
                <div class="stepwizard-step">
                  <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                  <p>Checkout</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <form role="form">
        <div class="row setup-content" id="step-1">
          <div class="col-xs-12">
            <div class="col-xs-4">
              <h3>Shipping Information</h3>
              <form class="" action="/products" method="post">
                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input type="text" class="form-control" name ='shipping_first_name' placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input type="text" class="form-control" name ='shipping_last_name' placeholder="Enter Last Name"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <input type="text" class="form-control" name ='shipping_address' placeholder="Enter Address"  />
                </div>
                <div class="form-group">
                  <label class="control-label">City</label>
                  <input type="text" class="form-control" name ='shipping_city' placeholder="Enter City"  />
                </div>
                <div class="form-group">
                  <label class="control-label">State</label>
                  <input type="text" class="form-control" name ='shipping_state' placeholder="Enter State"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Zip Code</label>
                  <input type="text" class="form-control" name ='shipping_zip' placeholder="Enter Zip"  />
                </div>
                <hr>
                <button class="btn btn-info nextBtn btn-md pull-right" type="button" >Next</button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
              <div class="col-xs-4">
                <h3>Billing Information</h3>

                <input type ='checkbox' name='same_shipping' ><label>Same as Shipping</label>

                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input type="text" class="form-control" name ='billing_first_name' placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input type="text" class="form-control" name ='billing_last_name' placeholder="Enter Last Name"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <input type="text" class="form-control" name ='billing_address' placeholder="Enter Address"  />
                </div>
                <div class="form-group">
                  <label class="control-label">City</label>
                  <input type="text" class="form-control" name ='billing_city' placeholder="Enter City"  />
                </div>
                <div class="form-group">
                  <label class="control-label">State</label>
                  <input type="text" class="form-control" name ='billing_state' placeholder="Enter State"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Zip Code</label>
                  <input type="text" class="form-control" name ='billing_zip' placeholder="Enter Zip"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-left" type="submit" >Confirm Order</button>
              </form><br>
              <hr>
              <!-- <div class="stepwizard-step">
              <a href='#step-3'>Check Out</a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
          <div class="col-xs-4">
            <h3> Step 3</h3>
            <div class="display-td" >

              <p><label>We Accept:</label><img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png"><p>
              </div>
              <br>
              <div>
                <?php
                require_once('stripe/lib/Stripe.php');

                $stripe = array(
                "secret_key"      => "sk_test_iPRnWiX1PBNTy46dddBxvel2",
                "publishable_key" => "pk_test_WJiLHtgmyGmBfRE0VmywzjS9"
                );

                \Stripe\Stripe::setApiKey($stripe['secret_key']);

                if($_POST){

                  $charge = Stripe/Charge::create(array(
                  'card'     => $_POST['stripeToken'],
                  'amount'   => 5000,
                  'currency' => 'usd'
                  ));

                  echo '<h1>Successfully charged <?=$total?>!</h1>';
                }
                ?>
                <form action="/products/product_page" method="post">
                  <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
                  data-key="<?php echo $stripe['publishable_key']; ?>"
                  data-description="Secure Purchase";
                  data-amount="",
                  data-locale="auto"></script>
                </form>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- ************stripe code begins*******                               -->


      <!-- *****************stripe code ends****************                                     -->



    </body>
    </html>
