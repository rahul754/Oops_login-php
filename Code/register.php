<?php 
include 'class.php';
extract($_POST);

if(isset($submit)) {
    $imgs	= $_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$imgs);
	$inserts = "INSERT INTO register VALUES ('','$n','$e','$nu','$p','$imgs')";
	if($ob->insert($inserts)){
      $ob->url("index.php?msg=run");
	}
	else
	{
       $ob->url("index.php?msg=run");
	}
}


?>