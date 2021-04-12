<?php 

$columnname="name";

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="logstyle.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>
<body>



<marquee><h1><b style="color:white">Transfer Money</b></h1></marquee>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                    <h2><b>
                    <select name="sender">
                        <option>From</option>

                        <?php 
                        $selectquery="select * from record";

                        $query=mysqli_query($mysqli, $selectquery);
                        
                        $nums =mysqli_num_rows($query);
                        
                        
                            if($query)
                            {
                                while($row=mysqli_fetch_array($query))
                                {
                                    $stname=$row["$columnname"];
                                    echo "<option>$stname<br></option>";
                                }
                            }
                        ?>
                    </select>
                    </h2></b>
                    </div>
                    
                   
                    
                    <div class="input-group form-group">
                    <h2><b>
                    <select name="receiver">
                        <option>To</option>

                        <?php 
                        $selectquery="select name from record";

                        $query=mysqli_query($mysqli, $selectquery);
                        
                        $nums =mysqli_num_rows($query);
                        
                        
                            if($query)
                            {
                                while($row=mysqli_fetch_array($query))
                                {
                                    $stname=$row["$columnname"];
                                    echo "<option>$stname<br></option>";
                                }
                            }
                        ?>
                    </select>
                    </h2></b>
                    </div>
                    
                    <div class="input-group form-group">
                    <h3><b>
                    <label for="amount"> </label> <input type=number name="amount" placeholder="Enter Amount"></input></label>
                    </h3></b>
                    </div>
                    <div class="input-group form-group">
                    <h3><b>
                    <label for="date"> </label> <input type=date name="date" placeholder="Select Date"></input></label>
                    </h3></b>
                    </div>


                   
                    <br>
                    <div class="form-group">
                    <h2><b>
                    <button type="submit" name="submit">Submit</button>
                    </h2></b>
                    
                    </div>
                    
                </form>
            
                <a href="index.php">Home</a><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png"></img>
             </div>
		</div>
		
	</div>
</div>
    <?php
    if(isset($_POST['submit']))
    {
        $amount=$_POST['amount'];
       
        $receiver=$_POST['receiver'];
        $sender=$_POST['sender'];
        $selectquery="select * from record";

        $query=mysqli_query($mysqli, $selectquery);
        
        $nums =mysqli_num_rows($query);
       
        
        
        $result=mysqli_query($mysqli,"update record set mobile=mobile+'$amount' where name='$receiver'");
        $result1=mysqli_query($mysqli,"update record set mobile=mobile-'$amount' where name='$sender'");
      
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];
        
        $result=mysqli_query($mysqli,"INSERT into transcation_history values('$sender','$receiver','$amount','$date')");
        if($result && $result1)
        {
            echo "Success";
        }
        else{
            echo "Failed";
        }

    }
    ?>
 
     
 
</body>
</html>