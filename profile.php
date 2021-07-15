<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uniledge | Личный кабинет</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">


	<style>

		header {
			padding-bottom: 0;
			margin-bottom: 0;
		}

		section {
			padding: 0;
			margin: 0;
		}

	</style>

</head>
<body>

<?php 
// error_reporting(0);
	require('forOld.html') ?>

	<header class="header" id="header">
		<?php require('header.php') ?>
	</header>

	<?php 

	if(count($_COOKIE) == 0) {
		header('Location: /index.php');
	}

	?>

	<section class="profile" id="profile">
		<div class="profile_wrapper">
			<div class="profile_container">
				<h1>Личный кабинет</h1>
			</div>
		</div>

		<div class="profile_container">
			<div class="profile_information">

				<div class="information_block" style="margin-top: 5vh">
					<p class="small_label">ФИО<p>
					<p><?=$_COOKIE['lastname']?> <?=$_COOKIE['firstname']?></p>
				</div>
				<div class="information_block">
					<p class="small_label">Email<p>
					<p><?=$_COOKIE['email']?></p>
				</div>
				<form action="profile_edit.php" method="post">
					<button type="submit" class="btn">Редактировать</button>
				</form>
			</div>
			<div class="profile_information">
				<h3>Смена пароля</h3>
				<form action="change-password.php" method="post">

					<label for="old_password" id="old_label">Старый пароль</label>
					<input type="password" name="old_password" class="profile_input" pattern='^[A-Za-zА0-9@"\s]+$' id="old_password" minlength="5"  maxlength="16" required>

					<label for="new_password" id="old_label">Новый пароль</label>
					<input type="password" name="new_password" class="profile_input" pattern='^[A-Za-zА0-9@"\s]+$' id="new_password"  minlength="5" maxlength="16" required>

					<label for="confirm_new_password" id="old_label">Повторите пароль</label>
					<input type="password" name="confirm_new_password" class="profile_input" pattern='^[A-Za-zА0-9@"\s]+$' id="confirm_new_password" minlength="5"  maxlength="16" required>
					<div class="bar">
						<div class="bar-1"></div>
						<div class="bar-2"></div>
						<div class="bar-3"></div>
						<div class="bar-4"></div>
					</div>
					<p style="font-size: 12px">Пароль должен содержать 5-16 символов включая буквы верхнего регистра, цифры и любой из знаков @ и двойных ковычек</p>
					<button type="submit" class="disabled-btn" id="change_btn_pas">Сменить пароль</button>
				</form>
			</div>
		</div>
	</section>

	<?php require('footer.php') ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>

	<script>
		
		// Opera 8.0+
		var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

		// Firefox 1.0+
		var isFirefox = typeof InstallTrigger !== 'undefined';

		// Safari 3.0+ "[object HTMLElementConstructor]" 
		var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

		// Internet Explorer 6-11
		var isIE = /*@cc_on!@*/false || !!document.documentMode;

		// Edge 20+
		var isEdge = !isIE && !!window.StyleMedia;

		// Chrome 1 - 79
		var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

		// Edge (based on chromium) detection
		var isEdgeChromium = isChrome && (navigator.userAgent.indexOf("Edg") != -1);

		// Blink engine detection
		var isBlink = (isChrome || isOpera) && !!window.CSS;



		if(isIE) {
			document.querySelector('section').style.display="none";
			document.querySelector('header').style.display="none";
			document.querySelector('footer').style.display="none";
			document.getElementById('stub').style.display="flex";
		}

		
		var cnt = 0;
		$('#old_password').bind('blur', function() {
			$.ajax({
				url: 'valid1.php',
				type: 'POST',
				data: { pass: $('#old_password').val() },
				dataType: 'html',
				beforeSend: function() {
					$('label[for="old_password"]').text('Идет проверка...');
				},
				success: function(data) {
					data = JSON.parse(data);
					if(data == 0) {
						$('#change_btn_pas').prop('disabled', true).removeClass('btn').removeClass('accent').addClass('disabled-btn');
						$('label[for="old_password"]').text('Пароль неверный').css('color', 'red');
						$('#old_password').css('border', '1px solid red');
						cnt = 0;
					} else {
						if(cont == 4 && io == 1 && oep == 1) {
							$('#change_btn_pas').prop('disabled', false).addClass('btn').addClass('accent').removeClass('disabled-btn');
						}
						$('label[for="old_password"]').text('Пароль верный').css('color', '#2a2a2a');
						$('#old_password').css('border', '1px solid #2ca5eb');
						cnt = 1;
					}

				}
			})
		});
		
	

		var cont;
		$('input[name="new_password"]').keyup(function(){
            var pass = $('input[name="new_password"]').val();
			cont = 0;
            for(var i = 0;i<pass.length;i++){
                if(pass.charCodeAt(i) >= 65 && pass.charCodeAt(i) <= 90){
                    cont ++;
                    break;
                }
            }
            for(var i = 0;i<pass.length;i++){
                if(pass.charCodeAt(i) == 34 || pass.charCodeAt(i) == 64){
                    cont ++;
                    break;
                }
            }
            for(var i = 0;i<pass.length;i++){
                if(pass.charCodeAt(i) >= 48 && pass.charCodeAt(i) <= 57){
                    cont ++;
                    break;
                }
            }
            if(pass.length >= 5){
                cont ++;
            }
            if(cont == 1){
                $(".bar-1").fadeIn();
                $(".bar-2").fadeOut();
                $(".bar-3").fadeOut();
                $(".bar-4").fadeOut();
            }
            if(cont == 2){
                $(".bar-1").fadeIn();
                $(".bar-2").fadeIn();
                $(".bar-3").fadeOut();
                $(".bar-4").fadeOut();
            }
            if(cont == 3){
                $(".bar-1").fadeIn();
                $(".bar-2").fadeIn();
                $(".bar-3").fadeIn();
                $(".bar-4").fadeOut();
            }
            if(cont == 4){
                $(".bar-1").fadeIn('fast');
                $(".bar-2").fadeIn('fast');
                $(".bar-3").fadeIn('fast');
                $(".bar-4").fadeIn('fast');
            }
            else if(cont == 0){
                $(".bar-1").fadeOut();
                $(".bar-2").fadeOut();
                $(".bar-3").fadeOut();
                $(".bar-4").fadeOut();
            }
            else if(cont != 4) {
                $('#change_btn_pas').prop("disabled", true).addClass('disabled-btn').removeClass('btn').removeClass('accent');
            }
			
			if($('#confirm_new_password').val() != $('input[name="new_password"]').val()) {
				$('#change_btn_pas').prop('disabled', true).removeClass('btn').removeClass('accent').addClass('disabled-btn');
				$('label[for="confirm_new_password"]').text('Пароли не совпадают').css('color', 'red');
			} else {
				if(cnt == 1 && cont == 4 && io == 1 && oep == 1) {
					$('#change_btn_pas').prop('disabled', false).addClass('btn').addClass('accent').removeClass('disabled-btn');
				}
				$('label[for="confirm_new_password"]').text('Пароли совпадают').css('color', '#2a2a2a');
			}
			
			if($('input[name="new_password"]').val() == $('#old_password').val()) {
				$('label[for="new_password"]').text('Новый пароль совпадает со старым').css('color', 'red');
				$('#change_btn_pas').prop('disabled', true).removeClass('btn').removeClass('accent').addClass('disabled-btn');
				oep = 0;
			} else {
				oep = 1;
				$('label[for="new_password"]').text('Новый пароль').css('color', '#2a2a2a');
			}
        });
		
		var io;
		$('#confirm_new_password').keyup(function() {
			if($('#new_password').val() != $(this).val()) {
				$('#change_btn_pas').prop('disabled', true).removeClass('btn').removeClass('accent').addClass('disabled-btn');
				$('label[for="confirm_new_password"]').text('Пароли не совпадают').css('color', 'red');
				io = 0;
			} else {
				io = 1;
				if(cnt == 1 && cont == 4 && oep == 1) {
					$('#change_btn_pas').prop('disabled', false).addClass('btn').addClass('accent').removeClass('disabled-btn');
				}
				$('label[for="confirm_new_password"]').text('Пароли совпадают').css('color', '#2a2a2a');
			}
		})

		
		
		

	</script>
</body>
</html>
