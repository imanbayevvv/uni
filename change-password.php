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
  private $pascheck1;

  function __construct(){
    $this->email1 = $_COOKIE['email'];
    $this->pascheck1 = isset($_POST['new_password'])?$_POST['new_password']:null;
  }
  function show(){
    $email = $this->email1;
    $pascheck = $this->pascheck1;
    $pascheck = password_hash($pascheck, PASSWORD_DEFAULT);

      $conn = $this->Conn();
        $sql = "UPDATE login
          SET pas = '".$pascheck."'
          where email = '".$email."'
          ";

        $result = mysqli_query($conn,$sql);
      
    header('Location: /profile.php');
  }
}
?>
