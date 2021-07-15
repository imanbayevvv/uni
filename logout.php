<?php
// error_reporting(0);
setcookie ("lastname", $lastname,time()-3600);
setcookie ("firstname", $firstname,time()-3600);
setcookie ("email", $email,time()-3600);
header('Location: /index.php');
?>
