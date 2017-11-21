<?php 

include 'class.php';

extract($_POST);

if(isset($login)){
     $select =  "SELECT email, password FROM register WHERE email = '$e' AND password='$p'";
     if($ob->login($select)){
     	$_SESSION['email'] = $e;
  		$ob->url("home.php?msg=run");
      } 
      else
      {
 		$ob->url("index.php?err=error");
      }
}

?>