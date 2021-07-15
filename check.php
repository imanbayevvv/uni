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
private $lastname1;
private $firstname1;
private $email1;
private $pass1;

function __construct(){
  $this->lastname1 = isset($_POST['last-reg'])?$_POST['last-reg']:null;
  $this->firstname1 = isset($_POST['name-reg'])?$_POST['name-reg']:null;
  $this->email1 = isset($_POST['email-reg'])?$_POST['email-reg']:null;
  $this->pass1 = isset($_POST['password-login'])?$_POST['password-login']:null;
}


function show(){
 $lastname = $this->lastname1;
 $firstname = $this->firstname1;
 $email = $this->email1;
 $pass = $this->pass1;
 $pass = password_hash($pass, PASSWORD_DEFAULT);

$mysql = $this->Conn();
		if(mysqli_connect_error()){
			print mysqli_connect_error();
			exit;
		}
	mysqli_set_charset($mysql, "utf8");
	

$sql = "INSERT INTO login (lastname, firstname, email, pas)
	VALUES('".$lastname."', '".$firstname."', '".$email."', '".$pass."')";

$resultt = mysqli_query($mysql,$sql);
mysqli_close($mysql);
header('Location: /index.php');
}
}
?>
