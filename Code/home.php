<?php
include 'class.php';

echo '<center><h2 style=background:red;color:white;>'.$_SESSION['email'].'<a href=logout.php style=float:right;>logout</a></h2><center>';

$em = $_SESSION['email'];
$query = "SELECT * FROM register WHERE email='$em'";
$ob->profile($query);

foreach ($ob->val as $data) {
	echo $data->name.'<br>';
	echo $data->email.'<br>';
	echo $data->number.'<br>';
}
?>