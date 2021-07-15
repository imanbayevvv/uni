<?php 
// error_reporting(0);
if(count($_COOKIE) == 0) {
	header('Location: /');
}

?>

<?php
 $lastname = $_COOKIE['lastname'];
 $firstname = $_COOKIE['firstname'];
 $coment = $_POST['coment'];
 $date = date("Y-m-d H:i:s");
 $un_id = $_POST['un_id'];
 $user_id = $_COOKIE['user_id'];
 $mysql = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
		if(mysqli_connect_error()){
			print mysqli_connect_error();
			exit;
		}

	mysqli_set_charset($mysql,"utf8");
	$sqll = "SELECT * FROM coments WHERE user_id = $user_id AND uni_id = $un_id";
	$resultee = mysqli_query($mysql,$sqll);

	if($resultee->num_rows == 0) {
		$sql = "INSERT INTO coments (firstname, lastname, date, coment, uni_id, user_id)
		VALUES('".$firstname."', '".$lastname."', '".$date."', '".$coment."', $un_id, $user_id)";
		$resultt = mysqli_query($mysql,$sql);
	}
			
			$conn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');

			if(mysqli_connect_error()){
				print mysqli_connect_error();
				exit;
			}
			mysqli_set_charset($conn,"utf8");

			$sql = "SELECT * FROM coments
					WHERE uni_id = $un_id";
			$result = mysqli_query($conn,$sql);

			$print = mysqli_fetch_all($result,MYSQLI_ASSOC);
			
			if($result->num_rows == 0) {
				print "<p style='text-align:center'>Отзывов нет. Стань первым!</p>";
			}

			foreach ($print as $key => $value) {
				print '<div class="feedback-card">';
				foreach ($value as $key1 => $value1) {
					if ($key1 == "firstname"){
						print '<div class="card-half">';
						print '<p class="name-feedback">';
						print $value1;
						print " ";
					}
					if ($key1 == "lastname"){
						print $value1;
						print "</p>";
					}
					if ($key1 == "date"){
						print '<p class="feedback-time">';
						print $value1;
						print "</p>";
					}
					if ($key1 == "coment"){
						print '<p class="feedback-description">';
						print $value1;
						print "</p>";
						print "</div>";
					}
				}
				print "</div>";
			}

			mysqli_close($mysql);
			mysqli_close($conn);
			 ?>