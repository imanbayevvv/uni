<?php
//  error_reporting(0);
 ?>

<div class="preloader" id="preloader">
				<div class="loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
	<p class="beta">Сайт находится в бета-версии. Разработка продолжается.</p>
<nav id="navbar" class="navbar">
				<a href="index.php"><div class="logo" id="logo">
					<h3><span>Uni</span>ledge</h3>
					<div class="line">
						<div class="blue"></div>
					</div>
				</div></a>

				<form class="search-box" id="search-box" action="search.php" method="POST">
					<div class="zoom" id="zoom"><img src="img/Zoom.svg" alt="Поиск"></div>
					<input type="text" name="search-input" placeholder="Мой любимый университет" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$" class="search-input" id="search-input" title="Разрешен ввод только русских и латинских букв">
				</form>
				

				<div class="menu">
					<ul class="topmenu" id="topmenu" style="align-items: center">
						<?php
						if(count($_COOKIE) == 0){
							?>
						<li><a href="Login.html" class="login-btn">Войти</a></li>
						<li><a href="signup.html" class="registration-btn">Регистрация</a></li>
					<?php }else{ ?>
						<div class="active-session" style="display: inherit">
							<li><a  href="profile.php" class="login-btn" style="font-size: 14px; color: #2a2a2a; margin-right: .3vw"><?=$_COOKIE['firstname']?></a></li>
							<li><a  href="profile.php" class="login-btn" style="font-size: 14px; color: #2a2a2a"><?=$_COOKIE['lastname']?></a></li>
						</div>
						 <li><a  href="logout.php" class="login-btn"><img src="img/logout.svg" alt="Выход"></a></li>
					<?php }?>
					</ul>
				</div>
			</nav>