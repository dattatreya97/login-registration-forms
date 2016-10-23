<?php
$host = "localhost";
$user = "root";
$pass = "Dattu@3121";
$db = "EduTrip";

$y=mysqli_connect($host, $user, $pass,$db);



if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
		$res = mysqli_query($y,$sql);
		$x =mysqli_num_rows($res);
		if( $x==1){
			header('location: http://127.0.0.1/EduTrip/userinput.html');
		}
		else {
			header('location: http://127.0.0.1/EduTrip/loginerror.html');
		}
}
?>
