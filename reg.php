<?php

// error_reporting(0);
	abstract class DB{		
		public function Conn(){
			return mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
		}
		public function mysql(){
			return new mysqli('localhost' , 'nurd' , '171119' , 'uniledge_uni');
		}
	}
$a = new A();
$a->show();
class A extends DB{

private $email1;
private $pass1;
function __construct(){
  $this->email1=isset($_POST['email-login'])?$_POST['email-login']:null;
  $this->pass1=isset($_POST['password-login'])?$_POST['password-login']:null;
}
	function show(){
 $email = $this->email1;
 $pass = $this->pass1;

$mysql = $this->mysql();
$mysql->set_charset("utf8");
$result = $mysql->query("SELECT * FROM `login` WHERE `email` = '$email'");
$ser = $result->fetch_assoc();

if(password_verify($pass, $ser['pas'])){
	$user = $ser;
	setcookie ("lastname", $user['lastname'],time()+3600);
	setcookie ("firstname", $user['firstname'],time()+3600);
	setcookie ("date", $user['date'],time()+3600);
	setcookie ("email", $user['email'],time()+3600);
	setcookie ("user_id", $user['user_id'],time()+3600);
}

$mysql->close();

header('Location: /index.php');
	
}
}
?>
