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
$user = new User();
$user->check();

class User extends DB{

    private $email1;

    public function __construct() {
        $this->email1 = isset($_POST['email'])?$_POST['email']:null;
    }

    public function check() {
        $email = $this->email1;
        $mysql = $this->mysql();
        $result = $mysql->query("SELECT * FROM `login` WHERE `email` = '".$email."'");
        if($result->num_rows == 1) {
            $ans = "Пользователь с таким email уже зарегистрирован";
            echo json_encode($ans);
        } else {
            $ans = "Email";
            echo json_encode($ans);
        }
        $result->close();
    }
}