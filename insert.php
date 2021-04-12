<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=888, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
    <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="https://media.gettyimages.com/vectors/money-transfer-vector-id1158440846?k=6&m=1158440846&s=612x612&w=0&h=XdgnUrFp68QQbKaExWXXkgzpbnCU81VE9LvwnpxrTEg=" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://thumbs.dreamstime.com/b/businessman-money-transfer-concept-169827543.jpg" class="image"> </div>
                </div>
    </div>
    <div class="col-lg-6">
    <form action="" method="POST" action="display.php">
    <div class="row px-3"> <label class="mb-1">
        <h4 class="mb-0 text-sm">
        Name<input type="text" name="name"><br>
   
        Email<input type="email" name="email" placeholder="Enter your mail"><br>
        Amount<input type="mobile" name="mobile"><br>
        Date<input type="date" name="date"><br>
        </h4>
        <h2><b><input type="Submit" name="submit" onclick="submitForm('display.php','_self');"></b></h2>
    </div>
    </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];
        
        $result=mysqli_query($mysqli,"INSERT into record values('$name','$email','$mobile','$date')");

        if($result)
        {
            
            echo "Success";
        }
        else{
            echo "Failed";
        }

    }
    ?>
</div>
</div>
</div>
        

</body>
</html>