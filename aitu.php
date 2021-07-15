<!DOCTYPE html>
<html lang="ru">
<head>

	<?php
			$connn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
			
			if(mysqli_connect_error()){
				print mysqli_connect_error();
				exit;
			}

			mysqli_set_charset($connn,"utf8");

			$unid = 522;

			$sqll = "SELECT * FROM universities
					WHERE uni_id = $unid";
			$resul = mysqli_query($connn,$sqll);

			$prin = mysqli_fetch_all($resul, MYSQLI_ASSOC);
			$lol;
			foreach ($prin as $key => $value) {
				$lol = $value;
			}
	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uniledge | <?php echo $lol['name'] ?></title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/univer.css">
</head>
<body>

	<?php require('forOld.html')?>
	
	<div class="official-wrapper" title="Перейти на официальный сайт университета">
		<a href=<?php echo '"', $lol["link"], '"';?> class="btn-official"><img src="img/globalw.svg" alt="site"></a>
	</div>

	<header class="header" id="header">
			
			<?php require('./header.php') ?>

			<div class="header__wrapper">

			<div class="header__wrapper__afterSlider aituAfter"></div>

				<div class="header__wrapper__slider">
			<?php
			$sqqphots = "select * from uni_photos where slider = 1 and uni_id = $unid";

			$resulphots = mysqli_query($connn,$sqqphots);

			$prinphots = mysqli_fetch_all($resulphots, MYSQLI_ASSOC);

			$sqgop = "SELECT COUNT(DISTINCT gop_id) as total from op where uni_id = $unid";
			$sqop = "SELECT count(op_id) as total from op where uni_id = $unid";

			$resulgop = mysqli_query($connn,$sqgop);
			$resulop = mysqli_query($connn,$sqop);

			$printop = mysqli_fetch_all($resulop, MYSQLI_ASSOC);
			$printgop = mysqli_fetch_all($resulgop, MYSQLI_ASSOC);

			foreach ($prinphots as $ksey => $vaslue) {
					print '<div class="header__wrapper__slider__item"><img src="';
					print $vaslue['photo_link'];
					print '" alt="';
					print $lol['alt'];
					print '"></div>';
		    }
			?>
				</div>
				<div class="header__wrapper__main">
					<div class="breadcrumbs">
						<a href="index.php">Главная</a>
						<p> / </p>
						<a href=<?php echo $lol["href"];?>><?php echo $lol["name"];?></a>
					</div>
					<h1><?php echo $lol["name"];?></h1>
					<p>Информация носит ознакомительный характер. Для получения точной информации обратитесь к <a href=<?php echo '"', $lol["link"], '"';?> target="blank">официальному сайту</a> учебного заведения.</p>
					<button class="btn" onclick="toggle()">Посмотреть видео</button>
					<div class="header__wrapper__main__stat">
						<div class="header__wrapper__main__stat__block">
							<b><?php echo $lol["uni_id"];?></b>
							<p>код университета</p>
						</div>
						<div class="header__wrapper__main__stat__block">
							<b><?php foreach($printgop as $keyp => $valop){ echo $valop['total'];}?></b>
							<p>групп образовательных программ</p>
						</div>
						<div class="header__wrapper__main__stat__block">
							<b><?php foreach($printop as $keyp => $valop){ echo $valop['total'];}?></b>
							<p>образовательных программ</p>
						</div>
					</div>
					<div class="header__wrapper__main__contacts">
						<h3>Официальные контакты университета</h3>
						<div class="head-line black"></div>

						<div class="header__wrapper__main__contacts__cells">
							<div class="d3card">
								<div class="header__wrapper__main__contacts__cells__cell front" id="cell1">
									<img src="img/email.svg" alt="email">
								</div>
								<div class="back">
									<p><?php echo $lol["email"];?></p>
								</div>
							</div>
							<div class="d3card">
								<div class="header__wrapper__main__contacts__cells__cell front" id="cell2">
									<img src="img/phone.svg" alt="phone">
								</div>
								<div class="back">
									<p><?php echo $lol["phone"];?></p>
								</div>
							</div>
						</div>
						
					</div>
					<div class="header__wrapper__main__social">
						<a href=<?php echo '"', $lol["fblink"], '"';?>><img src="img/facebook.svg" alt="facebook"></a>
						<a href=<?php echo '"', $lol["instlink"], '"';?>><img src="img/instagram.svg" alt="instagram"></a>
						<p><?php echo $lol["location"];?></p>
					</div>
					
				</div>
			</div>

			

	</header>

	<section class="faculty" id="faculty">
		
		<div class="faculty__choose">
			<p>Группа образовательных программ</p>
			<div class="select-box faculty__choose__item">

				<div class="options-container faculty__choose__item__options">

				<?php

					$sqlll = "SELECT DISTINCT univer.gop_name, op.gop_id FROM op
							JOIN univer ON op.gop_id = univer.gop_id
							WHERE uni_id = $unid";
					$resula = mysqli_query($connn,$sqlll);

					$prina = mysqli_fetch_all($resula, MYSQLI_ASSOC);
					$lolv;
					$lolk;
					foreach ($prina as $key => $value) {
						$lolv = $value['gop_id'];
						$lolk = $value['gop_name'];
						print '<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="';
						print $lolv;
						print '" name="category"/><label for="spec" class="faculty-label">';
						print $lolk;
						print '</label></div>';
					}
				?>
					
				</div>
		
				<div class="selected faculty__choose__item__selected" id="faculty__choose__item__selected">
					<?php print $lolk; ?>
				</div>	

			</div>
			<b id="choose-code"><?php print $lolv; ?></b>
		</div>
	

        <?php 
					$sqllll = "SELECT univer.gop_id, univer.gop_name, op.op_id, op.op_name, op.op_text, op.op_link, coo.coo_id, coo.coo_name, cnp.cnp_id, cnp.cnp_name, op.uni_id, subcom.subcom_id, sb.sub_name as sub1, st.sub_name as sub2, op.op_duration
					from op 
					join univer on op.gop_id = univer.gop_id 
                    join cnp on univer.cnp_id = cnp.cnp_id 
					join coo on cnp.coo_id = coo.coo_id
					join subcom on univer.subcom_id = subcom.subcom_id
					join sub sb on subcom.sub1_id = sb.sub_id
					join sub st on subcom.sub2_id = st.sub_id
					WHERE op.uni_id = $unid";

					$resulaaa = mysqli_query($connn,$sqllll);

					$prin = mysqli_fetch_all($resulaaa, MYSQLI_ASSOC);
					foreach ($prina as $keys => $values) {
						print '<div class="faculty__specializations" id="b';
						print $values['gop_id'];
						if($lolv == $values['gop_id']){
							print '" >';
						}else{
							print '" style="display:none" >';
						}
						$lola = 0;
						foreach ($prin as $key => $value) {
							if($values['gop_id'] == $value['gop_id']){
								print '<div class="faculty__specialization__box faculty__specialization__box';
								print $value['gop_id'];
								print ' tab-';
								print $value['op_id'];
								if($lola == 0){
									print ' is-active';
									$lola = 10;
								}
								print '">
				                <div class="faculty__specializations__about">
					            <h4 class="title__box">Описание</h4>
					            <div class="line-headline"></div>
					            <p>';
					            print $value['op_text'];
					            print '</p>
					            <a href="';
					            print $value['op_link'];
					            print '" class="main-link" target="blank">
                                <p>Подробнее</p>
                                <img src="img/left-arrow-blue.svg" alt="arrow">
                                </a>
				                </div>
				                <div class="faculty__specializations__about">
					            <h4 class="title__box">Код и классификация</h4>
								<div class="line-headline"></div>
								<p>Профильные предметы: <b>';
								print $value['sub1'];
								if($value['sub1'] != $value['sub2']) {
									print ' - ';
									print $value['sub2'];
								}
								print '</b></p>
								<p>Срок обучения: <b>';
								print $value['op_duration'];
								if($value['op_duration'] <= 4) {
									print ' года';
								} else {
									print ' лет';
								}
								print '</b></p>
					            <p>Код группы образовательных программ: <b>';
					            print $value['gop_id'];
					            print ' - ';
					            print $value['gop_name'];
					            print '</b></p>
					            <p>Код и классификация области образования: <b>';
					            print $value['coo_id'];
					            print ' - ';
					            print $value['coo_name'];
					            print '</b></p>
					            <p>Код и классификация направлений подготовки: <b>';
					            print $value['cnp_id'];
					            print ' - ';
					            print $value['cnp_name'];
								print '</b></p>
								
								</div>
							    </div>';
							}
						}


						print '<div class="faculty__specializations__list">
				        <h4 style="color: #2CA5EB;">Образовательные программы</h4>
				        <div class="line-headline blue-hl"></div>';
				        $lola = 0;
				        foreach ($prin as $key => $value) {
				        	if($values['gop_id'] == $value['gop_id']){
				        		print '<a class="faculty-programs faculty-programs';
				        		print $value['gop_id'];
				        		if ($lola == 0) {
				        			$lola = 1;
				        			print ' active-spec';
				        		}
				        		print '" data-tab-name="tab-';
				        		print $value['op_id'];
				        		print '">';
				        		print $value['op_name'];
				        		print '</a>';
				        	}
				        }

				        $lola = 0;
				        print '</div>
		                </div>';
					}

        ?>
	</section>

	<?php if( $lol["num_grants"] != null ){ ?>

	<section class="grants" id="grants">
		<h2>Гранты на 2020-2021</h2>
		<h1><?php echo $lol["num_grants"];?> целевых грантов</h1>
		<?php if( $lol["num_old_grants"] != null ){ ?>
				<p>В 2019 году было выделено <?php echo $lol["num_old_grants"];?> целевых грантов</p>
		<?php } ?>
	</section>

	<?php } ?>

	<section class="rules" id="rules">
		<div class="rules__tabs">
			<div class="rules__tabs__nav">
				<div class="rules__tabs__nav__item">
					Правила поступления на грант
				</div>
			</div>
			<div class="rules__tabs__content">
				<div class="rules__tabs__content__tab">
					<div class="tab__block">
						<b>ЕНТ</b>
						<div class="tab__block__content">
							<h4 class="title__box" style="color: #68DC60">Требования к ЕНТ</h4>
							<div class="line-headline green-hl"></div>
							<p><?php print $lol['ent'] ?></p>
						</div>
					</div>

					<?php

					if($lol['eng'] != null) { ?>

						<div class="tab__block" style="border-color: #2CA5EB">
							<b style="color: #2CA5EB">English</b>
							<div class="tab__block__content">
								<h4 class="title__box" style="color: #2CA5EB">Требования к английскому языку</h4>
								<div class="line-headline blue-hl"></div>
								<p><?php print $lol['eng'] ?></p>
							</div>
						</div>

					<?php
					}
					?>
				</div>
			</div>

		</div>
	</section>
	<section class="dates" id="dates">
		<div class="center__headline">
			<b class="main-headline">Важные даты</b>
			<div class="line-headline"></div>
			<div class="dates__headlines__marks">
				<div class="dates__headlines__marks__mark">
					<div class="dates-circle green-hl"></div>
					<p>Основные даты</p>
				</div>
				<div class="dates__headlines__marks__mark">
					<div class="dates-circle blue-hl"></div>
					<p>Мероприятия университета</p>
				</div>
			</div>
		</div>
			<?php
			$sq = "SELECT * FROM uni_dates";
			$resull = mysqli_query($connn,$sq);

			$printt = mysqli_fetch_all($resull, MYSQLI_ASSOC);

			print '<div class="dates__cards">';

			foreach ($printt as $key => $value) {

				if($value['uni_id'] == null) {
					print  '<div class="dates__cards__card">
								<div class="dates__cards__card__hide" style="background: #68DC60"></div>
								<div class="dates__cards__card__textblock">
									<b>';
					print	$value['uni_date'];				
					print 			'</b>
									<p>';
					print	$value['uni_date_info'];				
					print			'</p>
								</div>
							</div>';
				} else if($value['uni_id'] == $unid){					
					print  '<div class="dates__cards__card">
								<div class="dates__cards__card__hide"></div>
								<div class="dates__cards__card__textblock">
									<b>';
					print	$value['uni_date'];				
					print 			'</b>
									<p>';
					print	$value['uni_date_info'];				
					print			'</p>
								</div>
							</div>';
				}

			};

			print '</div>';

	?>
	</section>

	<?php

	
	$sqqphotcount = "select count(photo_id) as total from uni_photos where gallery = 1 and uni_id = $unid";

	$resulphotcount = mysqli_query($connn,$sqqphotcount);

	$prinphotcount = mysqli_fetch_all($resulphotcount, MYSQLI_ASSOC);


	foreach($prinphotcount as $keay => $valeay) {
		if($valeay['total'] >= 3) {
	?>
	<section class="gallery" id="gallery">
		<div class="gallery__slider">
			<?php
			$sqqphot = "select * from uni_photos where gallery = 1 and uni_id = $unid";

			$resulphot = mysqli_query($connn,$sqqphot);

			$prinphot = mysqli_fetch_all($resulphot, MYSQLI_ASSOC);
			foreach ($prinphot as $kety => $valute) {
				print '<div class="gallery__slider__item"><img src="';
				print $valute['photo_link'];
				print '" alt="';
				print $lol['alt'];
				print '"></div>';
		    }
			?>
		</div>	
	</section>
	<?php } } ?>


	<?php if($lol["academ_link"] != null) {?>
	<section class="academic-mobility">
		<div class="mobility__headline">
			<b class="main-headline">Академическая мобильность</b>
			<div class="line-headline"></div>
		</div>
		<div class="mobility__text">
			<p><?php echo $lol["text_academ"];?></p>
		</div>
		<a href=<?php echo '"', $lol["academ_link"], '"';?>  class="main-link" target="blank">
			<p>Подробнее</p>
			<img src="img/left-arrow-blue.svg" alt="arrow">
		</a>
	</section>
	<?php } ?>

	<?php if($lol["text_military"] != null) {?>
	<section class="common-section" id="military">
		<b class="main-headline">Военная кафедра</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__img">
				<img src=<?php echo '"', $lol["military_photo_link"], '"';?> alt="image">
				<div class="flex-block__img__hide"></div>
			</div>
			<div class="flex-block__text">
				<p><?php echo $lol["text_military"];?></p>
				<a href=<?php echo '"', $lol["military_link"], '"';?> class="main-link" target="blank">
					<p style="color: #68DC60">Подробнее</p>
					<img src="img/left-arrow-green.svg" alt="arrow">
				</a>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if($lol["text_studlife"] != null) {?>
	<section class="common-section" id="student-life">
		<b class="main-headline">Студенческая жизнь</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__text">
				<p><?php echo $lol["text_studlife"];?>
				</p>
				<a href=<?php echo '"', $lol["studlife_link"], '"';?> class="main-link" target="blank">
					<p>Подробнее</p>
					<img src="img/left-arrow-blue.svg" alt="arrow">
				</a>
			</div>
			<div class="flex-block__img">
				<img src=<?php echo '"', $lol["studlife_photo_link"], '"';?> alt="image">
				<div class="flex-block__img__hide" style="background: #2CA5EB"></div>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if($lol["text_studhouse"] != null) {?>
	<section class="common-section" id="aitu-house">
		<b class="main-headline">Студенческий дом</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__img">
				<img src=<?php echo '"', $lol["studhouse_photo_link"], '"';?> alt="image">
				<div class="flex-block__img__hide"></div>
			</div>
			<div class="flex-block__text">
				<p><?php echo $lol["text_studhouse"];?></p>
				<a href=<?php echo '"', $lol["studhouse_link"], '"';?> class="main-link" target="blank">
					<p style="color: #68DC60">Подробнее</p>
					<img src="img/left-arrow-green.svg" alt="arrow">
				</a>
			</div>
		</div>
	</section>
	<?php } ?>

	<section class="contacts" id="contacts">

		<div class="center__headline">
			<b class="main-headline" style="color: #fff">Контакты</b>
			<div class="line-headline white-hl"></div>
		</div>
		<div class="contacts__data">
			<div class="contacts__data__block">
				<img src="img/phone.svg" alt="phone">
				<b>Телефон</b>
				<p><?php echo $lol["phone"];?></p>
			</div>
			
			<div class="contacts__data__block">
				<img src="img/globalw.svg" alt="site">
				<b>Официальный сайт</b>
				<a href=<?php echo '"', $lol["link"], '"';?> style="color: #fff"><?php echo $lol["link"];?></a>
			</div>

			<div class="contacts__data__block">
				<img src="img/email.svg" alt="email">
				<b>Email</b>
				<p><?php echo $lol["email"];?></p>
			</div>
		</div>

	</section>

	<section class="map" id="map">
		<div class="center__headline">
			<b class="main-headline">Местоположение</b>
			<div class="line-headline"></div>
		</div>
		<?php echo $lol["mapcode"];?>
	</section>



	<section class="feedback" id="feedback" style="height: auto">
		<h2 style="text-align: center; margin-bottom: 10vh">Отзывы</h2>
		<div class="feedback-section">

			<input name="un_id" style="display: none" value="<?php print $unid ?>"></input>
			<div id="txtHint">
			<?php
				// error_reporting(0);
			
				$sql = "SELECT * FROM coments
						WHERE uni_id = $unid";
				$result = mysqli_query($connn,$sql);

				$print = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
						if ($key1 == "coment"){
							print '<p class="feedback-description">';
							print $value1;
							print "</p>";
						}
						if ($key1 == "date"){
							print '<p class="feedback-time">';
							print $value1;
							print "</p>";
							print "</div>";
						}
					}
					print "</div>";
				}
			?>
			
			</div>

				<?php
					if(count($_COOKIE) != 0){
						?>
						<form id="feedform">

							<div class="write">
							<h3>Добавь свой отзыв</h3>
							<textarea type="text" name="coment" placeholder="Напиши свой комментарий" class="feedback-card" pattern='^[A-Za-zА-Яа-яЁё0-9@,."\s]+$' minlength="100"  maxlength="3000" oninput="count(value)" required></textarea>
								<div class="public">
									<div style="display: flex; color: #949494; font-size: 14px;">
										<p id="word-counter">0</p>
										<p style="margin-left: 5px"> / 3000</p>
									</div>
									
									<button type="submit" class="btn accent" name="signup_button" style="text-align: center" id="new_coment">Опубликовать</button>
								</div>
							</div>

						</form>

				<?php } ?>



		</div>
	</section>

	<?php require('./footer.php') ?>


	<div id="popup">   <!-- pop-up window -->
		<?php echo $lol['videolink'] ?>
		<button onclick="toggle()"></button>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
	<script>

		$(".accordeon dd").hide().prev().click(function() {
			$(this).parents(".accordeon").find("dd").not(this).slideUp().prev().removeClass("active");
			$(this).next().not(":visible").slideDown().prev().addClass("active");
		});

	</script>

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
			document.querySelector('html').style.overflowY="hidden"
			document.getElementById('stub').style.display="flex";
		}

		function showGop() {

			switch($('#faculty__choose__item__selected').text()) {
				<?php
				foreach ($prina as $key => $value) {
					$lolv = $value['gop_id'];
					$lolk = $value['gop_name'];
					print 'case "';
					print $lolk;
					print '":';
					foreach ($prina as $keyys => $valuees) {
						if($valuees['gop_id'] == $lolv){
							print "$('#b";
							print $valuees['gop_id'];
							print "').show();";
							print "$('#choose-code').text('";
							print $valuees['gop_id'];
							print "');";
						} else {
							print "$('#b";
							print $valuees['gop_id'];
							print "').hide();";
						}
					}
					print 'break;';
				
				}	
				?>
			}
		}


		
		const selectedU = document.querySelector(".faculty__choose__item__selected");
		const optionsContainerU = document.querySelector(".faculty__choose__item__options");

		const optionsListU = document.querySelectorAll(".faculty__choose__item__options__option");

		selectedU.addEventListener("click", () => {
			optionsContainerU.classList.toggle("active");
		});

		optionsListU.forEach(o => {
			o.addEventListener("click", () => {
				selectedU.innerHTML = o.querySelector('.faculty-label').innerHTML;
				optionsContainerU.classList.remove("active");
				showGop();
			});
		});


		$("document").ready(function()
  		{
				$('#feedform').submit(function(event) {
					event.preventDefault();
					$.ajax({
						url: "feedback.php",
						method: 'post',
						data: ({coment: $('textarea[name="coment"]').val(),
						un_id: $('input[name="un_id').val()}),  
						dataType: "html",
						success: function(data) {
							document.getElementById("txtHint").innerHTML=data;
						}
					})
				});
		});


		<?php
		foreach ($prina as $key => $value) {
			print "let ";
			print $value['gop_id'];
			print " = function () {
			let tabNav = document.querySelectorAll('.faculty-programs";
			print $value['gop_id'];
			print "'),
			tabContent = document.querySelectorAll('.faculty__specialization__box";
			print $value['gop_id'];
			print "'),
				tabName;

			tabNav.forEach(item => {
				item.addEventListener('click', selectTabNav)
			});

			function selectTabNav() {
				tabNav.forEach(item => {
					item.classList.remove('active-spec');
				});
				this.classList.add('active-spec');
				
				tabName = this.getAttribute('data-tab-name');
				selectTabContent(tabName);
			}

			function selectTabContent(tabName) {
				tabContent.forEach(item => {
					item.classList.contains(tabName) ? item.classList.add('is-active') : item.classList.remove('is-active');
				})
			}

		};";

		print $value['gop_id'];
		print "();";
		}
		 ?>
	
	</script>
</body>
</html>
