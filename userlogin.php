<?php 
echo "<link rel='stylesheet' href='style.css'></link>";
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the user id and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Run the query to check if the user id and password exists in the User table
$sql = "SELECT COUNT(*) AS FOUND, client_name, bill, client_ID FROM client_table WHERE username='$username' AND password='$password';";
$result = mysqli_query($conn,$sql);
if ($result) 
{
    $row = mysqli_fetch_assoc($result);
// If the user id and password exists, output "logged in successfully"

if ($row['FOUND']==1) 
{
    session_start();
    echo "<h1>logged in successfully!</h1>";
    
    // Store the username into a PHP Session variable
    $_SESSION["user"]=$username;
    $_SESSION["name"]=$row['client_name'];
    $_SESSION["bill"]=$row['bill'];
    $_SESSION["id"]=$row['client_ID'];
       echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        echo $sql;
    header("Location:eventra.php");
    exit;

} 
else 
{
    echo "<h1>Invalid user id or password! </h1>";
    echo "<br>";
    echo "<div id='redirectbutton'><button name='redirect' ><a href='login.html'>Redirect to Login Page</a></button></div>";
}
}
?>