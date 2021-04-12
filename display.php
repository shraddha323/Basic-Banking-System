
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Customers</title>
    <?php include 'links.php'; ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="display.css">
 
</head>
<body>
    <div class="main-div">
    <h1>All Customers Details </h1>
    <div class="center-div">
        <div class="table-responsive" style="align:cenetr; margin-left: 10%">
            <table class="w3-table-all w3-centered w3-hoverable w3-bordered w3-striped w3-margin w3-hover-border-color table table-success table table-borderedd" style= "width: 80%;">
                <thead>
                    <tr class= "w3-red">
                        <th>Name</th>
                        <th>Email </th>
                        <th>Bank Balance</th>
                        <th>Date</th>
                        
                        <th>Transfer Money</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php
  
                    include 'config.php';

                    $selectquery="select * from record";

                    $query=mysqli_query($mysqli, $selectquery);

                    $nums =mysqli_num_rows($query);

                    while($res=mysqli_fetch_array($query))
                    {
                        ?>

                    <tr>
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['email'];?></td>
                        <td><?php echo $res['mobile'];?></td>
                        <td><?php echo $res['date1'];?></td>
                        
                        <td><a href="transaction.php"><i class="fa fa-money" aria-hidden="true" ></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>