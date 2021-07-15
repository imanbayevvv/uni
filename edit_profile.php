<?php 
// error_reporting(0);
if(count($_COOKIE) == 0) {
	header('Location: /index.php');
}

?>

<?php
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
private $lastname1;
private $firstname1;

function __construct(){
  $this->email1 = $_COOKIE['email'];
  $this->lastname1 = isset($_POST['edit_last_name'])?$_POST['edit_last_name']:$_COOKIE['lastname'];
  $this->firstname1 = isset($_POST['edit_first_name'])?$_POST['edit_first_name']:$_COOKIE['firstname'];
}

function show(){

  $email = $this->email1;
  $lastname = $this->lastname1;
  $firstname = $this->firstname1;

  if($lastname == "") {
    $lastname = $_COOKIE['lastname'];
  }

  if($firstname == "") {
    $firstname = $_COOKIE['firstname'];
  }
  
    $conn = $this->Conn();
	mysqli_set_charset($conn,"utf8");
    $sql = "UPDATE login
      SET lastname = '".$lastname."',
      firstname = '".$firstname."'
       where email = '".$email."'
       ";
       setcookie ("lastname", $lastname,time()+3600);
       setcookie ("firstname", $firstname,time()+3600);
       setcookie ("email", $email,time()+3600);
        
        $result = mysqli_query($conn,$sql);
	mysqli_close($conn);
  header('Location: /profile.php');
}
}
?>
