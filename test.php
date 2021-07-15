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
		<h1 class="main-admin-headline">Добавить университет</h1>
		<div class="line-headline black-hl"></div>

		<form action="admin-add-test.php" method="post" enctype="multipart/form-data">

			<b class="admin-subtitle">Важные даты</b>

			<div class="op_info">
				<label for="op_name">Название образовательной программы</label>
				<input type="text" name="op_name[]" class="profile_input">

				<label for="op_text">Описание образовательной программы</label>
				<textarea type="text" name="op_text[]" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

				<div class="admin_form_blocks">

					<div class="admin_form_blocks__admin_form_block">
						<label for="op_link">Ссылка на источник</label>
						<input type="text" name="op_link[]" class="profile_input">
					</div>

					<div class="admin_form_blocks__admin_form_block">
						<label for="op_duration">Срок обучения</label>
						<input type="number" name="op_duration[]" class="profile_input" max="9">
					</div>

					<div class="admin_form_blocks__admin_form_block">
						<label for="gop_id">Группа образовательных программ</label>
						<select name="gop_id[]" class="profile_input">
							<?php 
							$sql = "SELECT gop_id, gop_name FROM univer";
							
							$result = mysqli_query($connn,$sql);

							$print = mysqli_fetch_all($result, MYSQLI_ASSOC);

							foreach($print as $key => $value) {
								print '<option value="';
								print $value['gop_id'];
								print '">';						
								print $value['gop_id'];
								print ' - ';
								print $value['gop_name'];
								print '</option>';
							}

							?>
						</select>
					</div>
					
					<div class="admin_form_blocks__admin_form_block">
						<label for="cnp_id">Код и классификация направлений подготовки</label>
						<select name="cnp_id[]" class="profile_input">
							<?php 

							$sqlee = "SELECT cnp_id, cnp_name FROM cnp";
							
							$resultee = mysqli_query($connn,$sqlee);

							$printee = mysqli_fetch_all($resultee, MYSQLI_ASSOC);

							foreach($printee as $keyee => $valueee) {
								print '<option value="';
								print $valueee['cnp_id'];
								print '">';						
								print $valueee['cnp_id'];
								print ' - ';
								print $valueee['cnp_name'];
								print '</option>';
							}

							?>
						</select>
					</div>
				</div>
			</div>

			<input type="submit" class="accent btn" value="Добавить университет" id="btnsub" style="display: block; margin-top: 7%">

		</form>
    </main>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

	<script>

		$('#uni_id').bind('blur', function() {
			$.ajax({
				url: 'add-process.php',
				type: 'POST',
				data: ({
					uni_id: $('input[name="uni_id"]').val()
				}),
				dataType: "html",
				success: function(data) {
					data = JSON.parse(data);
					if(data == 1) {
						$('#txt').text('Данный университет уже имеется на сайте').css('color' , 'red');
						$('input[name="uni_id"]').css('border-color', 'red');
						$('input[type="submit"]').prop('disabled', true).addClass('disabled-btn').removeClass('btn').removeClass('accent');
					} else {
						$('input[type="submit"]').prop('disabled', false).removeClass('disabled-btn').addClass('btn').addClass('accent');
						$('input[name="uni_id"]').css('border-color', '#2ca5eb');
						$('#txt').text('Доступен к добавлению').css('color' , '#2CA5EB');
					}
				}
			})
		});

		var Dcnt = 0;
		var tmpDateMainDiv;


		function addDateMainDiv() {
			var newDateMainDiv = document.createElement("div");
			newDateMainDiv.setAttribute('class', 'dates_info');
			tmpDateMainDiv = newDateMainDiv;
			var addDateBtn = document.getElementById('dateBtn');
			var parentDateBtn = addDateBtn.parentNode;
			parentDateBtn.insertBefore(newDateMainDiv, addDateBtn);
		}

		function addDateElements() {
			let inputDateName = document.createElement("input");
			inputDateName.setAttribute('type', 'text');
			inputDateName.setAttribute('name', 'uni_date[]');
			inputDateName.setAttribute('class', 'profile_input');
			inputDateName.setAttribute('maxlength', '20');
			
			let labelDateName = document.createElement("label");
			labelDateName.setAttribute('for', 'uni_date');
			labelDateName.innerHTML = "Дата";
		
			let inputDateInfoName = document.createElement("input");
			inputDateInfoName.setAttribute('type', 'text');
			inputDateInfoName.setAttribute('name', 'uni_date_info[]');
			inputDateInfoName.setAttribute('class', 'profile_input');
			inputDateInfoName.setAttribute('maxlength', '100');
			
			let labelDateInfoName = document.createElement("label");
			labelDateInfoName.setAttribute('for', 'uni_date_info');
			labelDateInfoName.innerHTML = "Событие";

			tmpDateMainDiv.append(labelDateName);
			tmpDateMainDiv.append(inputDateName);
			tmpDateMainDiv.append(labelDateInfoName);
			tmpDateMainDiv.append(inputDateInfoName);

		}

		function addDate() {

			Dcnt++;
			
			addDateMainDiv();

			addDateElements();

			
			document.getElementById('datecnt').value = Dcnt;
		}

	</script>

</body>
</html>

<?php 
// }
 ?>

