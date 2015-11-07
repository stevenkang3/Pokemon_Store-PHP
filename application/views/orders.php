<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/jquery.validate.js"></script>
	   <link href="/assets/adminProductMain.css" rel="stylesheet" type="text/css">
    <title>Orders</title>
    <script type="text/javascript">

    $(document).ready(function()
    {
      $.get('dashboards/index_html', function(info){
        $('#allOrders').html(info);
      });

      $(document).on('submit', '.item_info', function()
      {
        $.get($(this).attr('href'), function(info)
        {
          $('#allOrders').html(info);
        }, 'html'
        );
          return false;
      });

      $(document).on('submit', 'form', function()
      {
          $.post($(this).attr('action'), $(this).serialize(), function(info)
          {
            $('#allOrders').html(info);
          }, 'html'
        );
        return false;
      });


      $(document).on('click', '#orders', function()
      {
        $.get('dashboards/index_html', function(info)
        {
          $('#allOrders').html(info);
        }, 'html'
        );
          return false;
      });

      $(document).on('submit', '#search', function()
      {
        $.get('dashboards/search', function(info)
        {
          $('#allOrders').html(info);
        }, 'html'
        );
          return false;
      });
  });

    </script>
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
    width: 150px;
    background-color: lightblue;
  }
  td {
    border: 1px solid black;
    padding: 10px;
  }

  .status
  {
  margin-left: 950px;
  }

  .pagin
  {
    text-align: center;
  }
  #searchBar, #addButton{
    display: inline;
    vertical-align: top;
  }
  #searchBar{
    margin-top: 22px;
    border-radius: 25px;
  }
  #search {
    position: relative;
    top: 20px;
    left:5px;
    border-radius: 50px;
  }


  </style>
  <body>
    <!-- Nav Bar -->
    	<div class='navbar navbar-inverse'>
    		<div class='container'>
    			<div class='navbar-header'>
    				<p class='navbar-brand'>R</p>
    			</div>
    			<div>
    				<ul class='nav navbar-nav'>
    					<li><a href='/dashboards'>Orders</a></li>
    					<li><a href='/products'>Products</a></li>
    				</ul>
    				<ul class='nav navbar-nav navbar-right'>
    					<li><a href='/admins/logout'>Log Off</a></li>
    				</ul>
    			</div>
    		</div>
    	</div>

    <div class="container">
    <div id='allOrders'></div>

    <div id="pagination_controls"></div>
    <div id="results_box"></div>

      </div>
    </div>
  </body>
</html>
