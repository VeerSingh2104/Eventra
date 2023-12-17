<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>Document</title>
    <style>
        body{padding: 0px;
            margin: 0px;
    background-image: url("blur.jpeg");
background-repeat: no-repeat;
background-size: 100%;}
p{color: white;}
.container{height: 500px;
    width: 500px;
    
    position:absolute;
    top: 25%;
    left: 15%;
    border: 2px solid black;
               border-radius: 5px;
               
               display: flex;
               display: inline-block;
               padding: 20px;}
               .item{padding: 10px;
                 position: relative;
                width: 95%;}
                .item2{padding: 10px;
                 position: relative;
                width: 100%;}
    </style>
</head>
<body>
<div class="container">
    
    <div>
    <form action="custom.php" method="get">
        <p>VENUE ID</p>  
        <input type="number" name="vid" class="item"><br><br>
        <p>CATERER ID</p> 
         <input type="number" name="cid" class="item"><br><br>
         <p>DECORATION ID</p> 
        <input type="number" name="did" class="item"><br><br><br><br>
        <input type="submit" name="sub" class="item2" value="book now"><br>
    </form>
    </div>
    <?php
    session_start();
    $id=$_SESSION['id'];
    $bill=$_SESSION['bill'];

    if(isset($_GET['sub']))
    {      

       $ven=$_GET['vid'];
       $dec=$_GET['did'];
       $cat=$_GET['cid'];
       $con=mysqli_connect("localhost","root","","project");
       $sqlv="select ven_price+cat_price+decor_price from venue,caterer,decoration where ven_id='$ven' and decor_id= '$dec' and cat_id='$cat'";
       $r1=mysqli_query($con,$sqlv);
       $r2=mysqli_fetch_array($r1);
        echo $r2[0];
        $_SESSION["bill"]=$r2[0];
        $sql5="update client_table set bill= '$r2[0]' where client_ID='$id'";
      mysqli_query($con,$sql5);
             $sql="insert into custom_booking(cid,vid,did)
         values('$cat','$ven','$dec')";
        mysqli_query($con,$sql);
        header("Location: services.php");
    }
    ?>
    
</body>
</html>