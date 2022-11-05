<?php
session_start();
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "persons";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];


$password =$_POST["password"];



$sql = "SELECT  `name` , `email` , `password` from `registertable` where email= '$email' and password = '$password'";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<br>  ". $row["id"]. "  Name: ". $row["name"].  "Email:" . $row["email"] . "<br>";
    }
} else {
    echo "<script>window.location.href='login1.php'</script>";
}
echo "<form action='' method='post'>
<button type='submit' name='logout' class='logout'>Logout</button>
</form>";
if(isset($_POST["logout"]))
{
   
    session_destroy();

}


$conn->close();

?>
