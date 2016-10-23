<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Database_name";

$y=mysqli_connect($host, $user, $pass,$db);



if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
    $sql = "SELECT * FROM TABLENAME WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
		$res = mysqli_query($y,$sql);
		$x =mysqli_num_rows($res);
		if( $x==1){
			header('location: http://');//desired location
		}
		else {
			header('location: http://');//desired location
		}
}
?>
