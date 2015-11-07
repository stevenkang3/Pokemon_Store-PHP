
  <form class="" action="/dashboards/search" method="post">
    <input type="hidden"  value="">
    <input id='searchBar'  name="search" class='col-md-4' type='text' placeholder='Search by Name' />
    <button id='search' type="submit" class="btn btn-default btn-sm">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
  </form>


<form class="" action="/dashboards/status_search" method="post">
    <select class="status" name="status_search">
      <option>Show All</option>
      <option>In Process</option>
      <option>Pending</option>
      <option>Shipped</option>
      <option>Cancelled</option>
    </select>
      <button id='addButton' class='btn-sm btn-primary' type='submit'>Update</button>
</form>
<div class="order_info">
  <table class='table table-striped table-bordered'>
    <thead>
      <tr>
        <th class='col-md-1'>Order ID</th>
        <th class='col-md-2'>Name</th>
        <th class='col-md-1'>Date</th>
        <th class='col-md-4'>Billing Address</th>
        <th class='col-md-2'>Total</th>
        <th class='col-md-2'>Status</th>
      </tr>
    </thead>
    <tbody>
<?php
    foreach($show_all as $show)
    {
      $date = date('m/d/Y', strtotime($show['created_at']));
      ?>     <div>

            <tr>
              <td><a class='item_info' href="/dashboards/order/<?= $show['id'];?>"><?=$show['id'];?></a></td>
              <td><?=$show['first_name'];?></td>
              <td><?= $date;?></td>
              <td><?=$show['address'].",  ".$show['city']." ".$show['state'].", ".$show['zip'];?></td>
              <td>$ <?= $show['total'];?></td>
              <td><form action="/dashboards/update/<?=$show['id'];?>" method="post">
                <select class="" name="shipstatus">
                      <option><?=$show['status'];?></option>
                      <option>Pending</option>
                      <option>In Process</option>
                      <option>Shipped</option>
                </select>
                <button id='addButton' class='btn-xs btn-info' type='submit'>Update</button></form>
            </tr>
          </div>
<?php       } ?>
