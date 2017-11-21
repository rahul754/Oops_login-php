<?php
session_start();

class User{
	public $host = "localhost";
	public $username= "root";
	public $password = "";
	public $db = "Login_oops";
	public $run;

	function __construct () 
	{
 		$this->run = new mysqli($this->host,$this->username,$this->password, $this->db);
 		if(mysqli_connect_errno()){
 			echo "Connection fail";
 			exit;
 		}
    }

    public function login($data) {
      $log = $this->run->query($data);
      if($log->num_rows>0){
         //print($log->num_rows);
      	return true;
      }else{
      	//print($log->num_rows);
      	return false;
      }
    }

    public function insert($data){
      $insertdata = $this->run->query($data);
      if($insertdata){
         return true;
      }else{
      	 return false; 
      }
    }

    public function url($url=null){
    	header("Location:".$url);
    }

    public function profile($pro) {
 		 $log = $this->run->query($pro);
 		 $value= $log->fetch_object();
 		 $this->val[] = $value;
 		 return $this->val;
    }
  
   public function logout() {
 		unset($_SESSION['email']);
 		$this->url('index.php');
   }
}

$ob = new User();
?>
