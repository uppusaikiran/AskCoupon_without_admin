<?php
require_once("includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  $query = "select * from stores";
  $result = mysql_query($query);
  ?>
  <?php
  if (!$result) die ("Database access failed: " . mysql_error());?>

<body>
<div class="container">
<div class="row">

 <?php
while($row = mysql_fetch_array($result))
    {?> 
        <div class="col-xs-1">
                <?php echo $row['store_id']?>
        </div>
        <div class="col-xs-4">
                <?php echo $row['store_name']?>
        </div>
        <div class="col-xs-5">
                <?php echo $row['type_of_items']?>
        </div>
        <div class="col-xs-2">
                <?php echo $row['no_of_coupons']?>
        </div>
    <?php }?>
    </div>
</div>




  <?php
require_once("includes/database_closing.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>