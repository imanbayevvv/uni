<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uniledge | Помощь</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/univer.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>

<?php
	// error_reporting(0);
	require('forOld.html') ?>

	<header class="header" id="header">
		<?php require('header.php') ?>
	</header>

	<section class="help-section" id="help-section">
		<div class="help_title">
			<h1>Помощь / FAQ</h1>
			<p class="subtitle">Если вы не нашли ответ на свой вопрос, вы можете задать его нам на почту: <a href="mailto:support@uniledge.com" class="help_email">support@uniledge.com</a></p>
		</div>
		<div class="help-container">
			<dl class="accordeon">
				<dt>Для чего создан сервис Uniledge?</dt>
				<dd>Сервис Uniledge создан для облегчения выпускникам определиться с выбором ВУЗа. Мы предоставляем информацию об университетах Казахстана. Ежедневно пополняем базу университетов.</dd>
			</dl>
			<dl class="accordeon">
				<dt>Откуда берется информация?</dt>
				<dd>Вся информация берется с официальных сайтов университетов. Если вы нашли ошибку в информации, то просим немедленно сообщить ее нам на почту: support@uniledge.kz</dd>
			</dl>
			<dl class="accordeon">
				<dt>Достоверная ли информация на вашем сайте?</dt>
				<dd>Да, 99% информации достоверно. 1% это возможные конфликты с указанием количества образовательных программ. Вы можете сообщить об ошибке нам на почту: support@uniledge.kz</dd>
			</dl>
		</div>
	</section>


	<?php require('footer.php') ?>
	
	<script src="js/jquery.min.js"></script>
	<script>
		$(".accordeon dd").hide().prev().click(function() {
		$(this).parents(".accordeon").find("dd").not(this).slideUp().prev().removeClass("accor-active");
		$(this).next().not(":visible").slideDown().prev().addClass("accor-active");
	});
	</script>
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

	</script>
</body>
</html>
