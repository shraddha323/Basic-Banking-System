<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=888, initial-scale=1.0">
    <title>Basic Banking System</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="homestyle.css">
</head>
<body>


<!-- Header -->
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white"><marquee><b>BASIC BANKING SYSTEM</b></marquee></h1>
    <h1><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png"></img>The Sparks Foundation
    </h1>
    <h2>Shraddha Kshirsagar
    </h2>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
  
 
    <div class="col-xl-3 col-md-6 mb-4" style="margin:20px">
    <a href="display.php">
      <div class="card border-0 shadow">
        <img src="https://img.icons8.com/dotty/2x/user-group-woman-woman.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">View All Customers</h5>
          
        </div>
      </div>
    </div>
    <!--  Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4" style="margin:20px">
    <a href="transaction.php">
      <div class="card border-0 shadow">
        <img src="https://img.icons8.com/wired/2x/money-bag-pound.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Transfer Money</h5>
          
        </div>
      </div>
      </a>
    </div>
    <!--Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4" style="margin:20px">
    <a href="transaction_history.php">
      <div class="card border-0 shadow">
        <img src="https://cdn2.iconfinder.com/data/icons/avatars-73/64/user_account_avatar_people_new_create_woman_add-128.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Transaction Details</h5>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
      </a>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
</body>
</html>