<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{padding: 0px;
            margin: 0px;
    background-image: url("blur.jpeg");
background-repeat: no-repeat;
background-size: 100%;}
        .pay{height: 500px;
            width: 500px;
            position: absolute;
            left: 35%;
            top: 28%;
            border: 2px solid black;
            background-color: white;
            align-content: center;
        }
        .pay h1{text-align: center;}
        .result{
            text-align: center;
            font-size: 40px;
        }
        .pay button{position: relative;
            align-self: center;
            width: 100%;
        }
       
    </style>
</head>
<body>
    <div class="pay">
       <h1>YOUR TOTAL BILL</h1>
       <?php
       session_start();
       $id=$_SESSION['id'];
       $bill=$_SESSION['bill'];
       $con=mysqli_connect("localhost","root","","project");
       $sql7="select bill from client_table where client_ID='".$id."'";
       $result=mysqli_query($con,$sql7);
       $print=mysqli_fetch_array($result);
       ?>
       <div class="result">
       <?php
       echo "Bill for:".$_SESSION["name"]."<br>";
       echo "Id:".$id."<br>";
       echo $bill;
       ?>
       </div>
       <br><br><br><br><br><br><br><br><br><br>

    </div>
</body>
</html>