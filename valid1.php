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

    private $pass1;
    private $email1;

    public function __construct() {
        $this->email1 = $_COOKIE['email'];
        $this->pass1 = isset($_POST['pass'])?$_POST['pass']:null;
    }

    public function check() {
        $email = $this->email1;
        $pass = $this->pass1;

        $mysql = $this->mysql();
        $result = $mysql->query("SELECT * FROM `login` WHERE `email` = '$email'");
        $ser = $result->fetch_assoc();
        
        if(password_verify($pass, $ser['pas'])){
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
?>