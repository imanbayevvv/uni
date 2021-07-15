<?php

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
	
<?php
	// error_reporting(0);	
	require('forOld.html') ?>

    <main class="main-admin">
		<h1 class="main-admin-headline">Админ-панель</h1>
		<div class="line-headline black-hl"></div>
		<div class="btn-case">
			<a href="admin-add.php" class="btn">Добавить университет</a>
			<a href="#" class="btn">Изменить данные университета</a>
		</div>		
    </main>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>

<?php 
// } 
?>