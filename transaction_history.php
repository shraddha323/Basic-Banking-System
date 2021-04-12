

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <?php include 'links.php'; ?>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="display.css">
  
</head>
<body>
    <div class="main-div">
    <h1><marquee><b>Transaction History</b></marquee> </h1>
    <div class="center-div">
        <div class="table-responsive" style="align:cenetr; margin-left: 10%" >
            <table class="w3-table-all w3-centered w3-hoverable w3-bordered w3-striped w3-margin w3-hover-border-color table table-success table table-borderedd" style= "width: 80%; border: 1px solid black;table align:center" >
                <thead>
                    <tr class= "w3-red">>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount Tranfer</th>
                        <th>Date</th>
                        
                        
                    </tr>
                </thead>
                <tbody>


                <?php
  

                    include 'config.php';

                    $selectquery="select * from transcation_history";

                    $query=mysqli_query($mysqli, $selectquery);

                    $nums =mysqli_num_rows($query);



                    

                    while($res=mysqli_fetch_array($query))
                    {
                        ?>
                        


                    <tr>
                        <td><?php echo $res['sender'];?></td>
                        <td><?php echo $res['receiver'];?></td>
                        <td><?php echo $res['amount'];?></td>
                        <td><?php echo $res['date2'];?></td>
                        
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