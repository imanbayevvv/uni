<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uniledge | Astana IT University</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/univer.css">
</head>
<body>

	<?php require('forOld.html') ?>

	<div class="official-wrapper" title="Перейти на официальный сайт университета">
		<a href="http://www.astanait.edu.kz" class="btn-official"><img src="img/globalw.svg" alt="site"></a>
	</div>

	<header class="header" id="header">
			
			<?php require('./header.php') ?>

			<div class="header__wrapper">

			<div class="header__wrapper__afterSlider aituAfter"></div>

				<div class="header__wrapper__slider">
					<div class="header__wrapper__slider__item"><img src="img/aituu.png" alt="aitu"></div>
					<div class="header__wrapper__slider__item"><img src="img/aitu2.jpg" alt="aitu"></div>
					<div class="header__wrapper__slider__item"><img src="img/aitu.jpg" alt="aitu"></div>
				</div>
				<div class="header__wrapper__main">
					<div class="breadcrumbs">
						<a href="index.php">Главная</a>
						<p> / </p>
						<a href="aitu.php">Astana IT University</a>
					</div>
					<h1>Astana IT University</h1>
					<p>Информация взята с <a href="http://www.astanait.edu.kz" target="blank">официального сайта университета</a></p>
					<button class="btn" onclick="toggle()">Посмотреть видео</button>
					<div class="header__wrapper__main__stat">
						<div class="header__wrapper__main__stat__block">
							<b>522</b>
							<p>код университета</p>
						</div>
						<div class="header__wrapper__main__stat__block">
							<b>5</b>
							<p>групп образовательных программ</p>
						</div>
						<div class="header__wrapper__main__stat__block">
							<b>9</b>
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
									<p>info@astanait.edu.kz</p>
								</div>
							</div>
							<div class="d3card">
								<div class="header__wrapper__main__contacts__cells__cell front" id="cell2">
									<img src="img/phone.svg" alt="phone">
								</div>
								<div class="back">
									<p>+7 (7172) 64 57 10 <br> +7 (747) 855 12 02</p>
								</div>
							</div>
						</div>
						
					</div>
					<div class="header__wrapper__main__social">
						<a href="https://www.facebook.com/astanaituniversity/"><img src="img/facebook.svg" alt="facebook"></a>
						<a href="https://www.instagram.com/astana_it_university/"><img src="img/instagram.svg" alt="instagram"></a>
						<p>Нур-Султан, Казахстан</p>
					</div>
					
				</div>
			</div>

			

	</header>

	<section class="faculty" id="faculty">
		<div class="faculty__choose">
			<p>Группа образовательных программ</p>
			<div class="select-box faculty__choose__item">
				<div class="options-container faculty__choose__item__options">
					<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="b042" name="category"/>
						<label for="spec" class="faculty-label">Журналистика и репортерское дело</label>
					</div>		
					<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="b044" name="category"/>
						<label for="spec" class="faculty-label">Менеджмент и управление</label>
					</div>
					
					<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="b057" name="category"/>
						<label for="spec" class="faculty-label">Информационные технологии</label>
					</div>
					<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="b058" name="category"/>
						<label for="spec" class="faculty-label">Информационная безопасность</label>
					</div>
					<div class="option faculty__choose__item__options__option">
						<input type="radio" class="radio" id="b059" name="category"/>
						<label for="spec" class="faculty-label">Коммуникации и коммуникационные технологии</label>
					</div>
					
				</div>
		
				<div class="selected faculty__choose__item__selected" id="faculty__choose__item__selected">
					Информационные технологии
				</div>
			</div>
			<b id="choose-code">B057</b>
		</div>
		<div class="faculty__specializations" id="bb057">
			<div class="faculty__specialization__box faculty__specialization__boxIT tab-1 is-active">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Computer Science» (Информатика) включает в себя дисциплины по основам ИТ технологий и программных средств, которые позволяют студентам позиционировать себя как профессионалов в области ИТ технологий, включая сферу разработки и сопровождения программного обеспечения различных масштабов. По результатам обучения студенты свободно овладеют навыками управления ИТ технологиями в компании, а также несколькими языками программирования, и смогут разрабатывать программное обеспечение для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложении для мобильных устройств, баз данных и веб-приложении.</p>
					<a href="https://astanait.edu.kz/computer-science/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B057 - Информационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specialization__box faculty__specialization__boxIT tab-2">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Software Engineering» (Программная Инженерия) включает в себя дисциплины по основам разработки программных средств и систем, которые позволяют студентам позиционировать себя как профессионалов в области разработки и сопровождения программного обеспечения различных масштабов. По результатам обучения студенты свободно овладеют несколькими языками программирования, смогут разрабатывать программное обеспечение для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложений для мобильных устройств, баз данных и веб-приложении.</p>
					<a href="https://astanait.edu.kz/software-engineering/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B057 - Информационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specialization__box faculty__specialization__boxIT tab-3">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Big Data Analysis» (Анализ больших данных) включает в себя дисциплины по основам ИТ технологий и программных средств, которые позволяют студентам позиционировать себя как профессионалов в области анализа данных, включая сферу разработки и сопровождения систем анализа данных различных масштабов. По результатам обучения студенты свободно овладеют навыками анализа данных, а также несколькими языками программирования, включая язык программирования Python и смогут разрабатывать модели и методы анализа данных для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке для баз данных и веб-приложении.</p>
					<a href="https://astanait.edu.kz/big-data-analysis/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B057 - Информационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specialization__box faculty__specialization__boxIT tab-4">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Industrial Automation» (Индустриальная автоматизация) включает в себя дисциплины по основам индустриальной автоматизации, который во многом предполагает разработку программных средств и систем для автоматизации работы в одном или нескольких промышленных секторах. По завершению студенты могут позиционировать себя как профессионалов в области разработки и сопровождения программного обеспечения в области индустриальной автоматизации различных масштабов. По результатам обучения студенты свободно овладеют несколькими языками программирования, смогут разрабатывать программное обеспечение для частных, государственных и национальных промышленных корпорации и организации.</p>
					<a href="https://astanait.edu.kz/industrial-automation/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B057 - Информационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specialization__box faculty__specialization__boxIT tab-5">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Media Technologies» (Медиа технологии) включает в себя дисциплины по основам медиа технологий, которые позволяют студентам позиционировать себя как профессионалов в области медиа технологий, включая сферу цифровой журналистики, обработки и работы с изображениями, и видео. По результатам обучения студенты свободно овладеют навыками управления медиа технологиями в компании, а также несколькими языками программирования, и смогут разрабатывать различные системы для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложении для мобильных устройств, баз данных и веб-приложении.</p>
					<a href="https://astanait.edu.kz/media-technologies/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B057 - Информационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specializations__list">
				<h4 style="color: #2CA5EB;">Образовательные программы</h4>
				<div class="line-headline blue-hl"></div>
				<a class="faculty-programs faculty-programsIT active-spec" data-tab-name="tab-1">Computer Science</a>
				<a class="faculty-programs faculty-programsIT" data-tab-name="tab-2">Software Engineering</a>
				<a class="faculty-programs faculty-programsIT" data-tab-name="tab-3">Big Data Analysis</a>
				<a class="faculty-programs faculty-programsIT" data-tab-name="tab-4">Industrial Automation</a>
				<a class="faculty-programs faculty-programsIT" data-tab-name="tab-5">Media Technology</a>
			</div>
		</div>
		<div class="faculty__specializations" id="bb044" style="display:none">
			<div class="faculty__specialization__box tab-6 is-active">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «IT Management» посвящена обучению студентов теории и практики управления информационными технологиями.</p>
					<a href="https://astanait.edu.kz/it-management/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B044 - Менеджмент и управление</b></p>
					<p>Код и классификация области образования: <b>6B04 - Бизнес, управление и право</b></p>
					<p>Код и классификация направлений подготовки: <b>041 - Бизнес, управление и право</b></p>
				</div>
			</div>
			<div class="faculty__specializations__list">
				<h4 style="color: #2CA5EB;">Образовательные программы</h4>
				<div class="line-headline blue-hl"></div>
				<a class="faculty-programs active-spec" id="cos" data-tab-name="tab-6">IT management</a>
			</div>
		</div>
		<div class="faculty__specializations" id="bb042" style="display:none">
			<div class="faculty__specialization__box tab-7 is-active">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Подготовка специалиста в области цифровых медиа, обладающего навыками работы с цифровыми мобильными технологиями сбора, обработки и передачи информации, умеющего создавать мультимедийный контент для медиа, владеющего инновационными журналистскими практиками, востребованными на современном рынке труда.</p>
					<a href="https://astanait.edu.kz/digital-journalism/" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B042 - Журналистика и репортерское дело</b></p>
					<p>Код и классификация области образования: <b>6B03 - Социальные науки, журналистика и информация</b></p>
					<p>Код и классификация направлений подготовки: <b>032 - Журналистика и информация</b></p>
				</div>
			</div>
			<div class="faculty__specializations__list">
				<h4 style="color: #2CA5EB;">Образовательные программы</h4>
				<div class="line-headline blue-hl"></div>
				<a class="faculty-programs active-spec" id="cos" data-tab-name="tab-7">Digital journalism</a>
			</div>
		</div>
		<div class="faculty__specializations" id="bb058" style="display:none">
			<div class="faculty__specialization__box tab-8 is-active">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Образовательная программа «Cybersecurity» (Кибербезопасность) включает в себя работу по  информационной безопасности, по независимой и объективной оценке текущего уровня защищенности компьютерных систем и сетей, по идентифицированию имеющихся проблем безопасности, по проектированию и разработке систем обеспечения информационной безопасности организаций и предприятий. Программа позволит развить навыки   в разработке программного обеспечения, а также в технологиях защиты информации и объектов информатизации, обеспечения целостности информации и анализа защищенности систем</p>
					<a href="https://astanait.edu.kz/cybersecurity/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B058 - Информационная безопасность</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>061 - Информационно-коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specializations__list">
				<h4 style="color: #2CA5EB;">Образовательные программы</h4>
				<div class="line-headline blue-hl"></div>
				<a class="faculty-programs active-spec" id="cos" data-tab-name="tab-8">Cyber Security</a>
			</div>
		</div>
		<div class="faculty__specializations" id="bb059" style="display:none">
			<div class="faculty__specialization__box tab-9 is-active">
				<div class="faculty__specializations__about">
					<h4 class="title__box">Описание</h4>
					<div class="line-headline"></div>
					<p>Профессиональная деятельность выпускников программы направлена в область радиотехники, электроники, цифровых систем связи, интеллектуальных телекоммуникационных технологий, систем радиовещания и телевидения. Подготовка специалистов по радиотехнике, электронике и телекоммуникации будет осуществляться по новой образовательной программе (ОП). Содержание дисциплин образовательной программы разрабатывалось с учетом соответствующих образовательных программ ведущих университетов мира и международного классификатора профессиональной деятельности по направлению телекоммуникация. Видами профессиональной деятельности являются: производственнотехнологическая; сервисно-эксплуатационная; организационноуправленческая; монтажно-наладочная; расчетно-проектная; экспериментально-исследовательская. Предметами профессиональной деятельности являются системы, включающие в себя: разработку и эксплуатацию систем телекоммуникаций, радиосвязи, телевидения, радиовещания, радиолокации и навигации, радиоуправления, мобильной связи, спутниковой связи, радиопередачи и радиоприема телевизионных и звуковых сигналов, электронных и компьютерных систем и систем, управляемых с помощью микроконтроллеров и  и микро ЭВМ.</p>
					<a href="https://astanait.edu.kz/telecommunication-systems/" class="main-link" target="blank">
                        <p>Подробнее</p>
                        <img src="img/left-arrow-blue.svg" alt="arrow">
                    </a>
				</div>
				<div class="faculty__specializations__about">
					<h4 class="title__box">Код и классификация</h4>
					<div class="line-headline"></div>
					<p>Код группы образовательных программ: <b>B059 - Коммуникации и коммуникационные технологии</b></p>
					<p>Код и классификация области образования: <b>6B06 - Информационно-коммуникационные технологии</b></p>
					<p>Код и классификация направлений подготовки: <b>059 - Коммуцникации и коммуникационные технологии</b></p>
				</div>
			</div>
			<div class="faculty__specializations__list">
				<h4 style="color: #2CA5EB;">Образовательные программы</h4>
				<div class="line-headline blue-hl"></div>
				<a class="faculty-programs active-spec" id="cos" data-tab-name="tab-9">Telecommunication systems</a>
			</div>
		</div>
	</section>

	<section class="grants" id="grants">
		<h2>Гранты на 2020-2021</h2>
		<h1>1100 целевых грантов</h1>
		<p>В 2019 году было выделено 600 целевых грантов</p>
	</section>

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
							<p>
								<b>Лица имеющие среднее, техническое и профессиональное или послесреднее образование, набравшие по результатам ЕНТ не менее 50 баллов,</b> в том числе не менее 5-ти баллов – по истории Казахстана, математической грамотности, грамотности чтения – язык обучения, и не менее 5-ти баллов по каждому профильному предмету, <b>за исключением поступающих на образовательные программы высшего образования, требующие творческой подготовки</b>
								<br><br><b>Лица имеющие среднее, техническое и профессиональное или послесреднее образование, набравшие по результатам ЕНТ не менее 50 баллов,</b> в том числе не менее 5-ти баллов – по истории Казахстана, грамотности чтения – язык обучения, и не менее 5-ти баллов по каждому творческому экзамену
							</p>
						</div>
					</div>
					<div class="tab__block" style="border-color: #2CA5EB">
						<b style="color: #2CA5EB">English</b>
						<div class="tab__block__content">
							<h4 class="title__box" style="color: #2CA5EB">Требования к английскому языку</h4>
							<div class="line-headline blue-hl"></div>
							<p>
								<b>1. Лица, сдавшие дополнительные экзамены по английскому языку</b><br><br><b>2. Лица, имеющие следующие действующие международные сертификаты (подлинники) </b> , подтверждающие владение английским языком в соответствии с общеевропейскими компетенциями (стандартами), освобождаются от вступительного экзамена по английскому языку:
							<br><b>- International English Language Testing System (IELTS), пороговый балл — не менее 5.0</b>
							<br><b>- Test of English as a Foreign Language Institutional Testing Programm (TOEFL ITP) — не менее 460 баллов</b> 
							<br><b>- Test of English as a Foreign Language Internet-based Test (TOEFL IBT), пороговый балл – 46-59</b>
							<br><b>- Сертификат Aptis, с результатом, соответствующим уровню B1</b>
							<br><b>- Сертификаты уровня B1, выданные языковыми центрами InterPress городов Нур-Султан, Алматы и Караганда в 2020 году</b>
							</p>
						</div>
					</div>
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
		<div class="dates__cards">
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>с 25 мая</b>
					<p>Онлайн регистрация для подачи документов</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>1 июня - 16 июля</b>
					<p>Регистрация для сдачи экзамена по английскому языку</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>20 июня - 7 июля</b>
					<p>Регистрация для сдачи творческого экзамена</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide" style="background: #68DC60"></div>
				<div class="dates__cards__card__textblock">
					<b>20 июня - 5 июля</b>
					<p>Единое национальное тестирование (ЕНТ)</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>6 - 19 июля</b>
					<p>Экзамен по английскому языку</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>8 - 13 июля</b>
					<p>Творческий экзамен</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide" style="background: #68DC60"></div>
				<div class="dates__cards__card__textblock">
					<b>13 - 20 июля</b>
					<p>Подача заявления на участие в конкурсе по присуждению грантов</p>
				</div>
			</div>
			<div class="dates__cards__card">
				<div class="dates__cards__card__hide"></div>
				<div class="dates__cards__card__textblock">
					<b>до 25 августа</b>
					<p>Подача заявления на прием на платное обучение</p>
				</div>
			</div>
		</div>
	</section>

	<section class="gallery" id="gallery">
		<div class="gallery__slider">
			<div class="gallery__slider__item"><img src="img/aituphoto1.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto2.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto3.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto4.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto5.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto7.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto6.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto8.jpg" alt="aitu"></div>
			<div class="gallery__slider__item"><img src="img/aituphoto9.jpg" alt="aitu"></div>
		</div>	
	</section>

	<section class="academic-mobility">
		<div class="mobility__headline">
			<b class="main-headline">Академическая мобильность</b>
			<div class="line-headline"></div>
		</div>
		<div class="mobility__text">
			<p>Возможность провести один триместр в другой стране в качестве студента зарубежного университета, не прерывая своего обучения в Astana IT University. Задача программ академической 
				мобильности – это интернационализация высшего образования и культурная интеграция молодежи разных стран.

				Пользуясь преимуществами академической мобильности, Вы получаете отличную возможность познакомиться с культурой и системой образования другой страны, улучшить владение 
				иностранными языками, завести новых друзей и приобрести бесценный опыт.

				Обучение в сильном зарубежном вузе будет хорошим дополнением к Вашему диплому о высшем образовании и, безусловно, повысит Вашу конкурентоспособность на рынке труда.</p>
		</div>
		<a href="https://astanait.edu.kz/international-relations/" class="main-link" target="blank">
			<p>Подробнее</p>
			<img src="img/left-arrow-blue.svg" alt="arrow">
		</a>
	</section>

	<section class="common-section" id="military">
		<b class="main-headline">Военная кафедра</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__img">
				<img src="img/aitumilitary.jpg" alt="image">
				<div class="flex-block__img__hide"></div>
			</div>
			<div class="flex-block__text">
				<p>Организация и осуществление на высоком уровне учебной и научно-методической работы по 
					дисциплинам военной подготовки, воспитательной работы среди студентов, научных исследований 
					по профилю кафедры, подготовки научно-педагогических кадров и повышения их квалификации. 
					Работа кафедры направлена на подготовку из числа студентов офицеров запаса для ВС РК, 
					обладающих глубоки­ми теоретическими и практическими знаниями, умениями и навыками, 
					высокой профессиональной квалификацией, в соответствии с требованиями программы подготовки 
					офицеров запаса из числа студентов ВУЗов по военно-учетным специальностям.</p>
				<a href="https://astanait.edu.kz/military-department/" class="main-link" target="blank">
					<p style="color: #68DC60">Подробнее</p>
					<img src="img/left-arrow-green.svg" alt="arrow">
				</a>
			</div>
		</div>
	</section>

	<section class="common-section" id="student-life">
		<b class="main-headline">Студенческая жизнь</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__text">
				<p>Студенты «Astana IT University» живут интересной, яркой и насыщенной студенческой жизнью, дающей 
					все возможности для профессионального роста, самореализации в общественной деятельности, 
					творчестве и спорте, повышения уровня личностных компетенций.  В университете вы можете  стать 
					участником  большого количества событий городского и республиканского масштаба.</p>
				
					<br><b>Студенческие клубы</b><br>
					<p>В университете существует много разнонаправленных сообществ: Event club, Phoenix club, Music club, 
					Dance club и др., которые помогут вам найти новые знакомства, увлечения, а также улучшить свои 
					имеющиеся спортивные и интеллектуальные навыки.
				</p>
				<a href="https://astanait.edu.kz/university-life/" class="main-link" target="blank">
					<p>Подробнее</p>
					<img src="img/left-arrow-blue.svg" alt="arrow">
				</a>
			</div>
			<div class="flex-block__img">
				<img src="img/aitustudent.jpg" alt="image">
				<div class="flex-block__img__hide" style="background: #2CA5EB"></div>
			</div>
		</div>
	</section>

	<section class="common-section" id="aitu-house">
		<b class="main-headline">Студенческий дом</b>
		<div class="line-headline"></div>

		<div class="flex-block">
			<div class="flex-block__img">
				<img src="img/aituhouse.jpg" alt="image">
				<div class="flex-block__img__hide"></div>
			</div>
			<div class="flex-block__text">
				<p>Иногородним студентам предоставляются два типа комнат: двухместная и трехместная. 
					Каждая комната оборудованы кроватями, рабочими столами и шкафами. Размеры комнаты 
					варьируются в зависимости от типа. 

					Для проживающих студентов доступны специально оборудованные кухни и столовая. 
					Приготовление пищи разрешено только на кухне, которые оснащены холодильниками, 
					электрическими плитами, духовым шкафом, вытяжным шкафом, микроволновкой и кухонным
					гарнитуром.

					Для комфорта проживания для обучающихся предусмотрены учебные комнаты, комнаты 
					отдыха, комнаты для стирки белья, оборудованные автоматическими стиральными машинами,
					сушильные и гладильные комнаты.

					Также во всех жилых комплексах предоставлен доступ к интернету через wifi-сеть.

					Благоприятные социально-бытовые условия, полноценный досуг, порядок и дисциплина в 
					Жилых домах университета, самоорганизация студентов и поддержка эдвайзеров – важные
					факторы успешной социально- психологической адаптации студентов к условиям обучения в 
					университете.</p>
				<a href="https://astanait.edu.kz/university-life/student-housing/" class="main-link" target="blank">
					<p style="color: #68DC60">Подробнее</p>
					<img src="img/left-arrow-green.svg" alt="arrow">
				</a>
			</div>
		</div>
	</section>

	<section class="contacts" id="contacts">

		<div class="center__headline">
			<b class="main-headline" style="color: #fff">Контакты</b>
			<div class="line-headline white-hl"></div>
		</div>
		<div class="contacts__data">
			<div class="contacts__data__block">
				<img src="img/phone.svg" alt="phone">
				<b>Телефон</b>
				<p>+7 (7172) 64 57 10
				<br>+7 (747) 855 12 02</p>
			</div>
			
			<div class="contacts__data__block">
				<img src="img/globalw.svg" alt="site">
				<b>Официальный сайт</b>
				<a href="http://astanait.edu.kz" style="color: #fff">www.astanait.edu.kz</a>
			</div>

			<div class="contacts__data__block">
				<img src="img/email.svg" alt="email">
				<b>Email</b>
				<p>info@astanait.edu.kz</p>
			</div>
		</div>

	</section>

	<section class="map" id="map">
		<div class="center__headline">
			<b class="main-headline">Местоположение</b>
			<div class="line-headline"></div>
		</div>
		<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae91ecefb8567a525b6ec5e452eda6d61e7454c23937fad4acf83082618bc798a&amp;source=constructor" width="781" height="479" frameborder="0" style="width: 100%"></iframe>
	</section>



	<section class="feedback" id="feedback" style="height: auto">
		<h2 style="text-align: center; margin-bottom: 10vh">Отзывы</h2>
		<div class="feedback-section">

			<input name="un_id" style="display: none" value="1000"></input>
			<div id="txtHint">
			<?php
	// error_reporting(0);
			$conn = mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
			
			if(mysqli_connect_error()){
				print mysqli_connect_error();
				exit;
			}

			mysqli_set_charset($conn,"utf8");

			$sql = "SELECT * FROM coments
					WHERE un_id = 1000";
			$result = mysqli_query($conn,$sql);

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
									
									<button type="submit" class="btn accent" name="signup_button" style="text-align: center; margin-left: 30px" id="new_coment">Опубликовать</button>
								</div>
							</div>

						</form>

				<?php } ?>



		</div>
	</section>

	<?php require('./footer.php') ?>


<div id="popup">   <!-- pop-up window -->
	<video controls>
		<source src="https://www.youtube.com/watch?v=RiicZ3OdKJs">
			Refresh page
	</video>
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
				case 'Информационные технологии':
					$('#bb057').show();
					$('#bb042').hide();
					$('#bb044').hide();
					$('#bb058').hide();
					$('#bb059').hide();
					$('#choose-code').text('B057');
					break;
				case 'Информационная безопасность':
					$('#bb057').hide();
					$('#bb042').hide();
					$('#bb044').hide();
					$('#bb058').show();
					$('#bb059').hide();
					$('#choose-code').text('B058');
					break;
				case 'Менеджмент и управление':
					$('#bb057').hide();
					$('#bb042').hide();
					$('#bb044').show();
					$('#bb058').hide();
					$('#bb059').hide();
					$('#choose-code').text('B044');
					break;
				case 'Журналистика и репортерское дело':
					$('#bb057').hide();
					$('#bb042').show();
					$('#bb044').hide();
					$('#bb058').hide();
					$('#bb059').hide();
					$('#choose-code').text('B042');
					break;
				case 'Коммуникации и коммуникационные технологии':
					$('#bb057').hide();
					$('#bb042').hide();
					$('#bb044').hide();
					$('#bb058').hide();
					$('#bb059').show();
					$('#choose-code').text('B059');
					break;
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
						star: $('input[name="star"]').val(),
						un_id: $('input[name="un_id').val()
								}),  
						dataType: "html",
						success: function(data) {
							document.getElementById("txtHint").innerHTML=data;
						}
					})
				});

				$('#del_coment').bind('click', function() {
						$.ajax({
						url: 'del.php',
						type: 'POST',
						data: ({name: $('input[name="name_del"]').val(),
								last: $('input[name="last_del"]').val(),
								un_id: $('input[name="un_id').val(),
								date: $('input[name="time_del"]').val()
								}),
						dataType: "html",
						success: function(data){
							document.getElementById("txtHint").innerHTML=data;
						}
					})
				});
		});


		let tab = function () {
			let tabNav = document.querySelectorAll('.faculty-programsIT'),
				tabContent = document.querySelectorAll('.faculty__specialization__boxIT'),
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

		};

		tab();
		

	</script>
</body>
</html>
