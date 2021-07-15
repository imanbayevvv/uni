<?php

$conn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
if(mysqli_connect_error()){
	print mysqli_connect_error();
	exit;
}
mysqli_set_charset($conn, "utf8");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta name="yandex-verification" content="1c9edebb4244ebdc" />-->
	
	<title>Uniledge | Главная</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<?php
	// error_reporting(0);	
	require('forOld.html') ?>

	<header class="header" id="header">
			
			<?php require('header.php') ?>

			
			
			<div class="slider">
			
				<div class="main-slider">
					<div class="slider__item">
						<img src="img/aitu-slider.png" alt="AITU">
						<div class="slider__item__main">
							<h1>Выбери свой ВУЗ сейчас</h1>
							<p>Доступны уже более 5 университетов для ознакомления</p>
							<a href="#universities" class="btn accent">Выбрать ВУЗ</a>
						</div>
						<div class="slider__item__description">
							<h2>Astana IT University</h2>
							<div class="slider__item__description_box">
								<div class="location">
									<p>Нур-Султан, Казахстан</p>
									<a href="aitu.php">
										<p>Подробнее</p>
										<img src="img/left-arrow.svg" alt="arrow">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<img src="img/iitu-slider.png" alt="IITU">
						<div class="slider__item__main">
							<h1>Выбери свой ВУЗ сейчас</h1>
							<p>Доступны уже более 5 университетов для ознакомления</p>
							<a href="#universities" class="btn accent">Выбрать ВУЗ</a>
						</div>
						<div class="slider__item__description">
							<h2>Международный университет информационных технологий</h2>
							<div class="slider__item__description_box">
								<div class="location">
									<p>Алматы, Казахстан</p>
									<a href="iitu.php">
										<p>Подробнее</p>
										<img src="img/left-arrow.svg" alt="arrow">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<img src="img/uib-slider.png" alt="UIB">
						<div class="slider__item__main">
							<h1>Выбери свой ВУЗ сейчас</h1>
							<p>Доступны уже более 5 университетов для ознакомления</p>
							<a href="#universities" class="btn accent">Выбрать ВУЗ</a>
						</div>
						<div class="slider__item__description">
							<h2>Университет международного бизнеса</h2>
							<div class="slider__item__description_box">
								<div class="location">
									<p>Алматы, Казахстан</p>
									<a href="uib.php">
										<p>Подробнее</p>
										<img src="img/left-arrow.svg" alt="arrow">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<img src="img/satbayev-slider.png" alt="satbayev">
						<div class="slider__item__main">
							<h1>Выбери свой ВУЗ сейчас</h1>
							<p>Доступны уже более 5 университетов для ознакомления</p>
							<a href="#universities" class="btn accent">Выбрать ВУЗ</a>
						</div>
						<div class="slider__item__description">
							<h2>Satbayev University</h2>
							<div class="slider__item__description_box">
								<div class="location">
									<p>Алматы, Казахстан</p>
									<a href="satbayev.php">
										<p>Подробнее</p>
										<img src="img/left-arrow.svg" alt="arrow">
									</a>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
	</header>

	<section class="universities" id="universities">

		<div class="bg-case">
	   <img src="img/bg-item2.svg" alt="" class="bg-item2">
	   <div class="general-box">


	     <form action="filter.php">
			<div class="smart-filter-box">
				<p>Умный фильтр</p>
					<div class="select-box" id="select-box-degree">
						<div class="options-container options-containers">
							<div class="option options">
								<input type="radio" class="radio" id="undergraduate" name="category"/>
								<label for="undergraduate" class="deg">Бакалавриат</label>
							</div>
						</div>
				
						<div class="selected selecteds" id="selected_degree">Степень высшего образования</div>
					</div>
				<div class="select-box" id="select-box-method">
					<div class="options-container select-container-method">
						<div class="option option-method">
							<input type="radio" class="radio"	id="ed" name="category"/>
							<label for="ed" class="method">По группам образовательных программ</label>
						</div>
					</div>
			
					<div class="selected selected-method" id="selected_method">
						Сортировать по
					</div>
				</div>
				<div class="select-box" id="select-box-subjects">
					<div class="options-container select-container-subjects">

						<?php

						$sqllll1 = "SELECT subcom.subcom_id, sb.sub_name as sub1, st.sub_name as sub2
						from subcom 
						join sub sb on subcom.sub1_id = sb.sub_id
						join sub st on subcom.sub2_id = st.sub_id";

						$resulaaa1 = mysqli_query($conn,$sqllll1);

						$prin1 = mysqli_fetch_all($resulaaa1, MYSQLI_ASSOC);

						foreach($prin1 as $keys => $values) {
							print '<div class="option option-subjects">
							<input type="radio" class="radio"	id="z';
							print $values['subcom_id'];
							print '" name="category"/>
							<label for="z';
							print $values['subcom_id'];
							print '" class="subjects">';
							print $values['sub1'];
							print ' и ';
							print $values['sub2'];
							print '</label>
							</div>';
						}

						?>

					</div>
			
					<div class="selected selected-subjects" id="selected_subjects">
						Профильные предметы
					</div>
				</div>
				<div class="select-box" id="select-box-group">
					<div class="options-container select-container-group">

						<?php

							$squqll = "select * from univer";

							$resqll = mysqli_query($conn,$squqll);

							$printqll = mysqli_fetch_all($resqll,MYSQLI_ASSOC);

							foreach($printqll as $key => $value) {
								print '<div class="option option-group" id="b';
								print $value['gop_id'];
								print '">
								<input type="radio" class="radio"	id="';
								print $value['gop_id'];
								print '" name="category"/>
								<label for="';
								print $value['gop_id'];
								print '" class="label-group">';
								print $value['gop_name'];
								print '</label>
								</div>';
							}

						?>
					</div>
			
					<div class="selected selected-group" id="selected_profession">
						Группа образовательных программ
					</div>
				</div>
			</div>
		 </form>

	    <div class="card-box" id="card-box">
		<?php
			
			$sql = 
			"Select * from universities";

			$result = mysqli_query($conn,$sql);
			$print = mysqli_fetch_all($result,MYSQLI_ASSOC);
			foreach ($print as $key => $value) {
				foreach ($value as $key1 => $value1) {
					if ($key1 == "href"){
						print '<a href="';
						print $value1;
						print '" id="';
					}
					if ($key1 == "uni_id"){
						print $value1;
						print '">';
						print '<div class="card">';
					}
					if ($key1 == "img"){
						print '<img src="';
						print $value1;
						print '" alt="';
					}
					if ($key1 == "alt"){
						print $value1;
						print '">';
						print '<div class="about-box">';
						print '<div class="background-card"></div>';
						print '<div class="about-box__block">';
					}
					if ($key1 == "logo"){
						print '<img src="';
						print $value1;
						print '">';
						print "<h3>";
					}
					if ($key1 == "name"){
						print $value1;
						print "</h3>";
					}
					if ($key1 == "location"){
						print '<div class="location">';
						print '<img src="img/pin.svg" alt="location">';
						print '<p>';
						print $value1;
						print "</p>";
						print '</div>';
						print '</div>';
						print '</div>';
						print '</div>';
						print '</a>';
					}

				}
			}
		?>
     	</div>

    </div>
  </div>
	</section>

	<?php require('footer.php') ?>


	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

	<script>
	
	function checkDeg() {
	if(document.getElementById('selected_degree').innerHTML == 'Бакалавриат') {
		document.getElementById('select-box-method').style.display='block';
	}
}

function checkMet() {
	if(document.getElementById('selected_method').innerHTML == "По группам образовательных программ") {
		document.getElementById('select-box-subjects').style.display='block';
	}
}

function checkGroup() {
	


	if(document.getElementById('selected_subjects').innerHTML != "Группа образовательных программ") {
		
			document.getElementById('select-box-group').style.display='block';

			let optlist = document.querySelectorAll(".option-group");

			optlist.forEach(o => {
				o.style.display='none';
			});
			
			<?php 

			$sqllll = "SELECT univer.gop_id, subcom.subcom_id, sb.sub_name as sub1, st.sub_name as sub2
			from univer 
			join subcom on univer.subcom_id = subcom.subcom_id
			join sub sb on subcom.sub1_id = sb.sub_id
			join sub st on subcom.sub2_id = st.sub_id";

			$resulaaa = mysqli_query($conn,$sqllll);

			$prinaaaaa = mysqli_fetch_all($resulaaa, MYSQLI_ASSOC);

			$sqlea = "SELECT subcom.subcom_id, sb.sub_name as sub1, st.sub_name as sub2
			from subcom
			join sub sb on subcom.sub1_id = sb.sub_id
			join sub st on subcom.sub2_id = st.sub_id";

			$resulea = mysqli_query($conn,$sqlea);

			$prinea = mysqli_fetch_all($resulea, MYSQLI_ASSOC);

			foreach($prinea as $keeey => $valuuue) {
				print 'if(document.getElementById("selected_subjects").innerHTML == "';
				print $valuuue['sub1'];
				print ' и ';
				print $valuuue['sub2'];
				print '") {
						 ';
				foreach($prinaaaaa as $kuy => $valuuy){
					if($valuuue['subcom_id'] == $valuuy['subcom_id']) {
						print 'document.getElementById("b';
						print $valuuy['gop_id'];
						print '").style.display="block";';
					}
				}
				print '}';
			}

			?>
		}

		
	}

	function checkProfession() {
		$.ajax({
			url: "filter.php",
			type: "POST",
			data: {valueee: $('#selected_profession').text()},
			datatype: "html",
			success: function(data) {
				document.getElementById("card-box").innerHTML=data;
			}
		})
	}

	const selected = document.querySelector(".selecteds");
	const optionsContainer = document.querySelector(".options-containers");

	const optionsList = document.querySelectorAll(".options");

	selected.addEventListener("click", () => {
		optionsContainer.classList.toggle("active");
		optionsContainerM.classList.remove("active");
		optionsContainerP.classList.remove("active");
		optionsContainerG.classList.remove("active");
	});

	optionsList.forEach(o => {
		o.addEventListener("click", () => {
			selected.innerHTML = o.querySelector(".deg").innerHTML;
			optionsContainer.classList.remove("active");
			checkDeg();
		});
	});



	const selectedM = document.querySelector(".selected-method");
	const optionsContainerM = document.querySelector(".select-container-method");

	const optionsListM = document.querySelectorAll(".option-method");

	selectedM.addEventListener("click", () => {
		optionsContainerM.classList.toggle("active");
		optionsContainer.classList.remove("active");
		optionsContainerP.classList.remove("active");
		optionsContainerG.classList.remove("active");
	});

	optionsListM.forEach(o => {
		o.addEventListener("click", () => {
			selectedM.innerHTML = o.querySelector(".method").innerHTML;
			optionsContainerM.classList.remove("active");
			checkMet();
		});
	});




	const selectedP = document.querySelector(".selected-subjects");
	const optionsContainerP = document.querySelector(".select-container-subjects");

	const optionsListP = document.querySelectorAll(".option-subjects");

	selectedP.addEventListener("click", () => {
		optionsContainerP.classList.toggle("active");
		optionsContainer.classList.remove("active");
		optionsContainerM.classList.remove("active");
		optionsContainerG.classList.remove("active");
	});

	optionsListP.forEach(o => {
		o.addEventListener("click", () => {
			selectedP.innerHTML = o.querySelector(".subjects").innerHTML;
			optionsContainerP.classList.remove("active");
			checkGroup()
		});
	});



	const selectedG = document.querySelector(".selected-group");
	const optionsContainerG = document.querySelector(".select-container-group");

	const optionsListG = document.querySelectorAll(".option-group");

	selectedG.addEventListener("click", () => {
		optionsContainerG.classList.toggle("active");
		optionsContainerP.classList.remove("active");
		optionsContainer.classList.remove("active");
		optionsContainerM.classList.remove("active");
	});

	optionsListG.forEach(o => {
		o.addEventListener("click", () => {
			selectedG.innerHTML = o.querySelector(".label-group").innerHTML;
			optionsContainerG.classList.remove("active");
			checkProfession();
		});
	});

	
	</script>
	
</body>
</html>
