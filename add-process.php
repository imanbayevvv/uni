<?php
// error_reporting(0);
// if(count($_COOKIE) == 0) {
// 	header('Location: /index.php');
// } else {
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
private $uni_id1;

function __construct(){
  $this->uni_id1 = isset($_POST['uni_id'])?$_POST['uni_id']:null;
}


function show(){
 $uni_id = $this->uni_id1;

 $mysql = $this->Conn();
 if(mysqli_connect_error()){
    print mysqli_connect_error();
    exit;
 }
 mysqli_set_charset($mysql, "utf8");

 $sql = "select count(uni_id) as total from universities where uni_id = $uni_id";

 $resultt = mysqli_query($mysql,$sql);

 $printt = mysqli_fetch_all($resultt, MYSQLI_ASSOC);

 foreach($printt as $key => $value) {
     if($value['total'] >= 1) {
         echo json_encode(1);
     } else {
         echo json_encode(0);
     }
 }

 mysqli_close($mysql);
//  header('Location: /admin.php');
}
}
// }
?>
