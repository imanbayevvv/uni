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

		<b class="admin-subtitle">Общая информация</b>

			<label for="href">Filename</label>
			<input type="text" name="href" class="profile_input" style="border-bottom-color: #2CA5EB;" required >

			<label for="uni_id" id="txt">ID университета</label>
			<input type="number" name="uni_id" class="profile_input" style="border-bottom-color: #2CA5EB;" id="uni_id" required>

			<label for="img">Основное фото</label>
			<input type="file" name="img" class="profile_input" style="border-bottom-color: #2CA5EB;" accept="image/jpeg,image/png" required>

			<label for="videolink">Код видео с ютуба(если имеется)</label>
			<input type="text" name="videolink" class="profile_input">

			<label for="logo">Логотип</label>
			<input type="file" name="logo" class="profile_input" accept="image/jpeg,image/png" style="border-bottom-color: #2CA5EB;" required>

			<label for="name">Название университета</label>
			<input type="text" name="name" class="profile_input" style="border-bottom-color: #2CA5EB;" required>
			
			<label for="location">Город, страна</label>
			<input type="text" name="location" class="profile_input" style="border-bottom-color: #2CA5EB;" required>

			<b class="admin-subtitle">Контакты</b>

			<label for="link">Ссылка на основной сайт</label>
			<input type="text" name="link" class="profile_input" style="border-bottom-color: #2CA5EB;" required>

			<label for="email">Электронная почта</label>
			<input type="email" name="email" class="profile_input" style="border-bottom-color: #2CA5EB;" required>

			<label for="phone">Телефон приемной комиссии или колл-центра</label>
			<input type="text" name="phone" class="profile_input" style="border-bottom-color: #2CA5EB;" required>

			<label for="fblink">Ссылка на аккаунт Facebook</label>
			<input type="text" name="fblink" class="profile_input">
			
			<label for="instlink">Ссылка на аккаунт Instagram</label>
			<input type="text" name="instlink" class="profile_input">

			<b class="admin-subtitle">Информация о грантах</b>
			
			<label for="num_grants">Количество выделенных грантов в этом году</label>
			<input type="text" name="num_grants" class="profile_input">
		
			<label for="num_old_grants">Количество выделенных грантов в прошлом году</label>
			<input type="text" name="num_old_grants" class="profile_input">

			<b class="admin-subtitle">Требования для поступления</b>

			<label for="ent">Требования к ент</label>
			<textarea type="text" name="ent" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<label for="eng">Требования к английскому языку(если имеется)</label>
			<textarea type="text" name="eng" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<b class="admin-subtitle">Академическая мобильность</b>
			
			<label for="text_academ">Текст для секции "Академическая мобильность"</label>
			<textarea type="text" name="text_academ" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<label for="academ_link">Ссылка "Академическая мобильность" на основном сайте</label>
			<input type="text" name="academ_link" class="profile_input">

			<b class="admin-subtitle">Военная кафедра</b>

			<label for="text_military">Текст для секции "Военная кафедра" (если имеется)</label>
			<textarea type="text" name="text_military" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<label for="military_link">Ссылка "Военная кафедра" на основном сайте</label>
			<input type="text" name="military_link" class="profile_input">

			<label for="military_photo_link">Фото для раздела "Военная кафедра"</label>
			<input type="file" name="military_photo_link" class="profile_input">

			<b class="admin-subtitle">Студенческая жизнь</b>

			<label for="text_studlife">Текст для секции "Студенческая жизнь" (если имеется)</label>
			<textarea type="text" name="text_studlife" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<label for="studlife_link">Ссылка "Студенческая жизнь" на основном сайте</label>
			<input type="text" name="studlife_link" class="profile_input">

			<label for="studlife_photo_link">Фото для раздела "Студенческая жизнь"</label>
			<input type="file" name="studlife_photo_link" class="profile_input" accept="image/jpeg,image/png">

			<b class="admin-subtitle">Студенческий дом</b>

			<label for="text_studhouse">Текст для секции "Студенческий дом" (если имеется)</label>
			<textarea type="text" name="text_studhouse" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

			<label for="studhouse_link">Ссылка "Студенческий дом" на основном сайте</label>
			<input type="text" name="studhouse_link" class="profile_input">

			<label for="studhouse_photo_link">Фото для раздела "Студенческий дом"</label>
			<input type="file" name="studhouse_photo_link" class="profile_input" accept="image/jpeg,image/png">

			<b class="admin-subtitle">Карта</b>

			<label for="mapcode">Код Яндекс карты</label>
			<textarea type="text" name="mapcode" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px; border-bottom-color: #2CA5EB;" required></textarea>

			<br>
			<b class="admin-subtitle">Загрузка фотографий</b>

			<label for="slider_photo">Фото для основного слайдера(разрешено сразу множество)</label>
			<input type="file" name="slider_photo[]" class="profile_input" multiple accept="image/jpeg,image/png">

			<label for="gallery_photo">Фото для раздела "Галерея"(разрешено сразу множество)</label>
			<input type="file" name="gallery_photo[]" class="profile_input" multiple accept="image/jpeg,image/png">


			<b class="admin-subtitle">Образовательные программы</b>

			<!-- <div class="op_info">
					<label for="op_name">Название образовательной программы</label>
					<input type="text" name="op_name[]" class="profile_input">

					<label for="op_text">Описание образовательной программы</label>
					<textarea type="text" name="op_text[]" class="profile_input" style="max-width:100%; min-width: 100%; min-height: 100px;"></textarea>

					<label for="op_link">Ссылка на источник</label>
					<input type="text" name="op_link[]" class="profile_input">

					<div class="admin_form_blocks">

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
					</div>
			</div> -->

			<a onclick="add()" class="btn" id="addBtn">+</a>
			<a onclick="remove()" class="btn red" id="removeBtn">-</a>

			<b class="admin-subtitle">Важные даты</b>

			<!-- <div class="dates_info">
				<label for="uni_date">Дата</label>
				<input type="text" name="uni_date[]" class="profile_input" maxlength="30">

				<label for="uni_date_info">Событие</label>
				<input type="text" name="uni_date_info[]" class="profile_input" maxlength="100">
			</div> -->

			<a onclick="addDate()" class="btn" id="dateBtn">+</a>
			<a onclick="removeDate()" class="btn" id="dateRemoveBtn">-</a>

			<input type="submit" class="disabled-btn" value="Добавить университет" id="btnsub" style="display: block; margin-top: 7%" disabled>

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

		var tmpMainDiv;
		var tmpAdminBlocks;
		var tmpAdminBlocksInBlock;
		var opcnt = -1;
		var datecnt = -1;

		function addMainDiv() {
			var newMainDiv = document.createElement("div");
			newMainDiv.setAttribute('class', 'op_info');
			tmpMainDiv = newMainDiv;
			var addBtn = document.getElementById('addBtn');
			var parentBtn = addBtn.parentNode;
			parentBtn.insertBefore(newMainDiv, addBtn);
		}

		function addElements() {

			let inputOpName = document.createElement("input");
			inputOpName.setAttribute('type', 'text');
			inputOpName.setAttribute('name', 'op_name[]');
			inputOpName.setAttribute('class', 'profile_input');
			
			let labelOpName = document.createElement("label");
			labelOpName.setAttribute('for', 'op_name');
			labelOpName.innerHTML = "Название образовательной программы";

			let textareaOpText = document.createElement("textarea");
			textareaOpText.setAttribute('type', 'text');
			textareaOpText.setAttribute('name', 'op_text[]');
			textareaOpText.setAttribute('class', 'profile_input');
			textareaOpText.setAttribute('style', 'max-width: 100%; min-width: 100%; min-height: 100px;');

			let labelOpText = document.createElement("label");
			labelOpText.setAttribute('for', 'op_text');
			labelOpText.innerHTML = "Описание образовательной программы";

			let labelOpLink = document.createElement("label");
			labelOpLink.setAttribute('for', 'op_link');
			labelOpLink.innerHTML = "Ссылка на источник";

			let inputOpLink = document.createElement("input");
			inputOpLink.setAttribute('type', 'text');
			inputOpLink.setAttribute('name', 'op_link[]');
			inputOpLink.setAttribute('class', 'profile_input');

			tmpMainDiv.append(labelOpName);
			tmpMainDiv.append(inputOpName);
			tmpMainDiv.append(labelOpText);
			tmpMainDiv.append(textareaOpText);
			tmpMainDiv.append(labelOpLink);
			tmpMainDiv.append(inputOpLink);
		}

		function addAdminBlocks() {
			var newAdminBlocks = document.createElement("div");
			newAdminBlocks.setAttribute('class', 'admin_form_blocks');
			tmpAdminBlocks = newAdminBlocks;

			tmpMainDiv.append(newAdminBlocks);
		}

		function addAdminBlocksInBlock() {
			var newAdminBlocksInBlock = document.createElement("div");
			newAdminBlocksInBlock.setAttribute('class', 'admin_form_blocks__admin_form_block');
			tmpAdminBlocksInBlock = newAdminBlocksInBlock;

			tmpAdminBlocks.append(newAdminBlocksInBlock);
		}

		function addOpDuration() {

			let inputOpDuration = document.createElement("input");
			inputOpDuration.setAttribute('type', 'number');
			inputOpDuration.setAttribute('name', 'op_duration[]');
			inputOpDuration.setAttribute('class', 'profile_input');
			inputOpDuration.setAttribute('max', '9');
			
			let labelOpDuration = document.createElement("label");
			labelOpDuration.setAttribute('for', 'op_duration');
			labelOpDuration.innerHTML = "Срок обучения";

			tmpAdminBlocksInBlock.append(labelOpDuration);
			tmpAdminBlocksInBlock.append(inputOpDuration);

		}

		function addGop() {
			let labelGop = document.createElement("label");
			labelGop.setAttribute('for', 'gop_id');
			labelGop.innerHTML = "Группа образовательных программ";

			tmpAdminBlocksInBlock.append(labelGop);

			let selectGop = document.createElement("select");
			selectGop.setAttribute('name', 'gop_id[]');
			selectGop.setAttribute('class', 'profile_input');

			tmpAdminBlocksInBlock.append(selectGop);
							<?php 

							foreach($print as $key => $value) {
								print 'let optionGop';
								print $value['gop_id'];
								print ' = document.createElement("option");
								optionGop';
								print $value['gop_id'];
								print '.setAttribute("value", "';
								print $value['gop_id'];
								print '");';
								
								print 'optionGop';
								print $value['gop_id'];
								print '.innerHTML = "';
								print $value['gop_id'];
								print ' и ';
								print $value['gop_name'];
								print '";';

								print 'selectGop.append(optionGop';
								print $value['gop_id'];
								print ');';
							}

							?>

		}

		function add() {

			addMainDiv();

			addElements();

			addAdminBlocks();

			addAdminBlocksInBlock();

			addOpDuration();

			addAdminBlocksInBlock();

			addGop();

			opcnt++;
		}

		function remove() {
			
			let adv = document.getElementsByClassName('op_info');
			adv[opcnt].parentNode.removeChild(adv[opcnt]);
			
			if(opcnt != -1) {
				opcnt--;
			}
		}


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
			
			addDateMainDiv();

			addDateElements();

			datecnt++;
		}

		function removeDate() {
			
			let advDate = document.getElementsByClassName('dates_info');
			advDate[datecnt].parentNode.removeChild(advDate[datecnt]);
			
			if(datecnt != -1) {
				datecnt--;
			}
		}
		

	</script>

</body>
</html>

<?php 
// }
 ?>

