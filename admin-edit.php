<?php

$connn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
									
						if(mysqli_connect_error()){
							print mysqli_connect_error();
							exit;
						}

						mysqli_set_charset($connn,"utf8");

// if(count($_COOKIE) == 0) {
// 	header('Location: /index.php');
// } else {
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uniledge</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/univer.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <main class="admin-add">
		<h1 class="main-admin-headline">Изменить университет</h1>
		<div class="line-headline black-hl"></div>

		
    </main>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>

<?php 
// }
 ?>

