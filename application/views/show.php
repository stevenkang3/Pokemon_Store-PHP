<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show</title>
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript"></script>
  </head>
  <style media="screen">
  a {
    padding-left: 50px;
  }

  .order_info {
    margin-top: 30px;
  }

  table {
    border: 1px solid black;
    padding: 10px;

  }
  th {
    border: 1px solid black;
    padding: 5px;
    width: 115px;
    background-color: lightblue;
  }
  td {
    border: 1px solid black;
    padding: 10px;
  }
  ul {
    text-decoration: none;
  }
  .status
  {
  margin-left: 600px;
  }

  .order_info{
    width: 300px;
    height: 450px;
    padding-top: 30px;
    padding-left: 15px;
    border: 1px solid black;
  }

  .order {
    padding-top: 30px;
  }

  .stats {
    padding-top: 50px;
  }

  .ship_status{
    background-color: lightgreen;
    width: 220px;
    padding: 2px;
    padding-left: 20px;
    border: 1px solid black;
  }
  .total {
    height: 100px;
    width:200px;
    padding: 5px;
    border: 1px solid black;
  }

  </style>
  <!-- <body> -->


    <!-- <nav class="navbar navbar-default">
      <div class="container-fluid">
          <div class="navbar-brand">
            Dashboard
            <a href="/dashboards/index">Orders</a>
            <a href="#">Products</a>
          </div>
       <a class="nav navbar-nav navbar-right" href="/dashboards/destroy">log off</a>
      </div>
    </nav> -->

    <div class="container">
      <div class="col-md-4">
        <div class="order_info">
          <h3>ORDER ID: <?=$user_info[0]['id']?></h3>
          <p><ul style="list-style-type:none">
            <li><h4>Customer shipping info:</h4></li>
              <li>name: <?=$user_info[0]['first_name']?></li>
              <li>address: <?=$user_info[0]['address']?></li>
              <li>city: <?=$user_info[0]['city']?></li>
              <li>state: <?=$user_info[0]['state']?></li>
              <li>zip: <?=$user_info[0]['zip']?></li></ul></p>

              <p><ul style="list-style-type:none">
            <li><h4>Customer billing info:</h4></li>
              <li>name: <?=$user_info[0]['billing_first_name']?></li>
              <li>address: <?=$user_info[0]['billing_address']?></li>
              <li>city: <?=$user_info[0]['billing_city']?></li>
              <li>state: <?=$user_info[0]['billing_state']?></li>
              <li>zip: <?=$user_info[0]['billing_zip']?></li>
            </ul></p>
          <p></p>
        </div>
      </div>

      <div class="col-md-8">
        <div class="order">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Item</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
<?php       $total = 0;
            $subtotal = 0;
            foreach($order as $item){
            $total = $item['price'] * $item['quantity'];
            $subtotal += $total;
          ?>
            <tr>
              <td><?=$item['product_id']?></td>
              <td><?=$item['name']?></td>
              <td><?=$item['price']?></td>
              <td><?=$item['quantity']?></td>
              <td><?= $total ?></td>
            </tr>
<?php       }?>
          </tbody>
        </table>
      </div>

      <div class="stats">
        <div class="col-md-6">
        <p class='ship_status'>Status: <?=$order[0]['status']?></p>
        </div>
        <div class="col-md-6">
          <div class="total">
            <ul>
              <li>Sub total: <?=$subtotal?></li>
              <li>Shipping: $5.00</li>
              <li>Total Price: <?=$subtotal+5?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </body>
</html> -->
