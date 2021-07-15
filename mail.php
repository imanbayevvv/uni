<?php

	// error_reporting(0);
  if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $email = $_POST['email'];

    $pass = rand(1, 535).time().rand(97,213).'m'.'"'.rand(1,50);
	$txt = "Ваш новый пароль: $pass \r\n";
    $txt .= "Настоятельно советуем непременно сменить пароль";
    
	$pass = password_hash($pass, PASSWORD_DEFAULT);

    $conn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
	
    $sql = "UPDATE login
      SET pas = '".$pass."'
       where email = '".$email."'
	   ";
	  
	$result = mysqli_query($conn,$sql);

    $to = $email;
    $subject = "Восстановление пароля";
    $headers = "From: no-reply@uniledge.kz";
    

    if (mail($to,$subject,$txt,$headers)){
      header("Location:Login.html");
    }else{
      header("Location:Login.html");
    }
	mysqli_close($conn);
  }
  else{
    header("Location:Login.html");
  }


?>