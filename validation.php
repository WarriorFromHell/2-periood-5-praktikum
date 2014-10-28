<?php
$isSubmitted = isset($_POST["submit"]);
if($isSubmitted) { $username = $_POST["$username"];}
if (isset($_POST["submit"])){


$username = $_POST["username"];
}
if(!isset($username) || $username ==""){
	$usernameMessage="Sobib" ;
}
else{
	$usernameMessage="No ei sobi" ;
} 


?>