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
    private $pass1;

    public function __construct() {
        $this->email1 = isset($_POST['email'])?$_POST['email']:null;
        $this->pass1 = isset($_POST['pass'])?$_POST['pass']:null;
    }

    public function check() {
        $email = $this->email1;
        $pass = $this->pass1;
        $mysql = $this->mysql();
        $result = $mysql->query("SELECT * FROM `login` WHERE `email` = '$email'");
        $ser = $result->fetch_assoc();

        if($ser == null) {
            echo json_encode(0);
        } else {
            if(password_verify($pass, $ser['pas'])){
                echo json_encode(1);
            } else {
                echo json_encode(0);
            }
        }

        $mysql -> close();
        
    }
}



