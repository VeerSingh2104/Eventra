<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
$id=$_SESSION['userid'];

$con=mysqli_connect("localhost","root","","project");
$sql="Select bookingid from client_bill where clientid='".$id."'";
$bookingid= mysqli_query($con,$sql);
$result=mysqli_fetch_array($bookingid);
echo "BookingID:";
echo "<br>";
echo $result[0];
echo "<br>";
echo "<br>";
$sql2="Select A.client_id from client_bill B,client_table A where A.client_id=B.clientid and B.clientid='".$id."';";
$clientid= mysqli_query($con,$sql2);
$result2=mysqli_fetch_array($clientid);
echo "ClientID:";
echo "<br>";
echo $result2[0];
echo "<br>";
echo "<br>";
$sql3="Select A.occasion from client_bill B,client_table A where A.client_id=B.clientid and B.clientid='".$id."';";
$clientocc= mysqli_query($con,$sql3);
$result3=mysqli_fetch_array($clientocc);
echo "Client Occassion:";
echo "<br>";
echo $result3[0];
echo "<br>";
echo "<br>";
$sql4="Select A.cat_id,A.cat_name,A.cat_contact,A.cat_rating,A.cat_review,A.cat_price from caterer A, custom_booking B, client_bill C where C.bookingid=B.cbid AND B.cid=A.cat_id and C.clientid='".$id."';";
$caterer= mysqli_query($con,$sql4);
//$result4=mysqli_fetch_array($caterer);
echo "Caterer Name:";
echo "<br>";
?>
<table border="2px" id="tab" >
    <tr>
        <th>Caterer Id</th>
        <th>Caterer Name</th>
        <th>Caterer contact</th>
        <th>Caterer rating</th>
        <th>Caterer reviews</th>
        <th>Caterer price</th>
    </tr>
    <?php
    while($rows= mysqli_fetch_assoc($caterer))
    {
        ?>
        <tr>
        <td><?php echo $rows['cat_id']; ?></td>
                  <td><?php echo $rows['cat_name']; ?></td>
                  <td><?php echo $rows['cat_contact']; ?></td>
                  <td><?php echo $rows['cat_rating']; ?></td>
                  <td><?php echo $rows['cat_review']; ?></td>
                  <td><?php echo $rows['cat_price']; ?></td>
        </tr>
<?php
    }
    ?>
<?php
echo "<br>";
echo "<br>";
$sql5="Select A.ven_id,A.ven_name,A.ven_contact,A.ven_ratings,A.ven_review,A.ven_price from venue A, custom_booking B, client_bill C where C.bookingid=B.cbid AND B.vid=A.ven_id and C.clientid='".$id."';";
$venue= mysqli_query($con,$sql5);
//$result5=mysqli_fetch_array($venue);
echo "Venue Name:";
echo "<br>";
?>
<table border="2px" id="tab" >
    <tr>
    <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Venue reviews</th>
        <th>Venue price</th>
    </tr>
    <?php
    while($rows= mysqli_fetch_assoc($venue))
    {
        ?>
        <tr>
        <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
        </tr>
<?php
    }
    ?>
<?php
echo "<br>";
echo "<br>";
$sql6="Select A.decor_id,A.decor_name,A.decor_contact,A.decor_ratings,A.decor_review,A.decor_price from decoration A, custom_booking B, client_bill C where C.bookingid=B.cbid AND B.did=A.decor_id and C.clientid='".$id."';";
$decorations= mysqli_query($con,$sql6);
//$result6=mysqli_fetch_array($decorations);
echo "Decoration Name:";
echo "<br>";
?>
<table border="2px" id="tab" >
    <tr>
    <th>Decorator Id</th>
        <th>Decorator Name</th>
        <th>Decorator contact</th>
        <th>Decorator rating</th>
        <th>Decorator reviews</th>
        <th>Decorator price</th>
    </tr>
    <?php
    while($rows= mysqli_fetch_assoc($decorations))
    {
        ?>
        <tr>
        <td><?php echo $rows['decor_id']; ?></td>
                  <td><?php echo $rows['decor_name']; ?></td>
                  <td><?php echo $rows['decor_contact']; ?></td>
                  <td><?php echo $rows['decor_ratings']; ?></td>
                  <td><?php echo $rows['decor_review']; ?></td>
                  <td><?php echo $rows['decor_price']; ?></td>
        </tr>
<?php
    }
    ?>
<?php  
echo "<br>";
echo "<br>";
$sql7="Select C.cat_price+V.ven_price+D.decor_price as Total_Price from caterer C, venue V, decoration D, custom_booking A, client_bill B where B.bookingid=A.cbid AND  A.cid=C.cat_id AND A.vid=V.ven_id AND A.did=D.decor_id and B.clientid='".$id."';";
$totalbill= mysqli_query($con,$sql7);
$result7=mysqli_fetch_array($totalbill);
echo "Total Bill:";
echo "<br>";
echo $result7[0];
echo "<br>";
echo "<br>";
?>