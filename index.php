<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenway &ndash;	Бизнес будущего</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body>

<!-- header -->
<div id="home" class="animated">
	<header>
		<!-- ссылки на соц сети -->
		<div id="social">
			<a href="https://vk.com/onlinegreenway"><img src="images/vk.png" width="50px" height="50px"></a>
			<a href="https://www.facebook.com/TatyanaGreenWay/"><img src="images/fb.png" width="50px" height="50px"></a>
			<a href="https://instagram.com/tatiana.nikylina"><img src="images/inst.png" width="50px" height="50px"></a>
			<a href="https://www.youtube.com/channel/UChQcwT7fvzOJ3YL-5EgFPFQ?view_as=subscriber"><img src="images/youtube.png" width="50px" height="50px"></a>
		</div>

		<h1>GREENWAY&#9658;</h1>

		<div id="menu">
			<ul>
				<li><a href="#home">Главная</a></li>
				<li><a href="#how">Как это работает</a></li>
				<li><a href="#whatis">Что такое Greenway</a></li>
				<li><a href="#prod">Продукция</a></li>
				<li><a href="#sotrud">Сотрудничество</a></li>
			</ul>
		</div>

	<h2 id="h2main">БИЗНЕС <br> БУДУЩЕГО</h2>
	
	<div id="tablet">
		<img src="images/ipad.png">
		<div id="greenway">
			<a href="http://greenwaystart.com/rus/?gw=y7HiVDhXLz"><img src="images/greenway.png"></a>
		</div>
	</div>

	</header>
</div>

<!-- боковые якори -->
<aside id="side">
	<ul class="sllft">
		<li><span class="sl_lt">Greenway</span><a class="n_1" href="#home"></a></li>
		<li><span class="sl_lt">Как это работает</span><a class="n_2" href="#how"></a></li>
		<li><span class="sl_lt">Что такое Greenway</span><a class="n_3" href="#whatis"></a></li>
		<li><span class="sl_lt">Линейка продукции</span><a class="n_4" href="#prod"></a></li>
		<li><span class="sl_lt">Сотрудничество</span><a class="n_5" href="#sotrud"></a></li>
	</ul>
</aside>

<!-- как это работает -->
<div id="how">
	<h2>КАК ЭТО <br> РАБОТАЕТ</h2>
	<div class="how_div">
		<h3>01</h3>
		<h4>ЗАБОТА О БЛИЗКИХ</h4>
		<p>	Позаботьтесь о себе и о тех, кто вам действительно дорог! Вместе мы сделаем наш дом чище, а планету - счастливее.</p>
	</div>
	<div class="how_div">
		<h3>02</h3>
		<h4>БЫСТРЫЙ СТАРТ БИЗНЕСА</h4>
		<p>	Начните уже сейчас и уже через год ваша машина и квартира будут круче, чем у бывшего босса!</p>
	</div>
	<div class="how_div">
		<h3>03</h3>
		<h4>СВОБОДА И УСПЕХ</h4>
		<p>	Greenway — динамично развивающаяся компания, в которой есть место и для новичков, и для профессионалов. Отличная компания и уверенность в завтрашнем дне!</p>
	</div>
</div>

<!-- что такое greenway -->
<div id="whatis" class="animated">
	<h2 class="even">ЧТО ТАКОЕ <br> GREENWAY</h2>
	<div id="hist"></div>
	<div id="idea"></div>
	<div id="aim"></div>
	<div id="possib"></div>
</div>

<!-- линейка продукции -->
<div id="prod">
	<h2>ЛИНЕЙКА <br> ПРОДУКЦИИ</h2>
</div>

<!-- запрос на сотрудничество -->
<div id="sotrud" class="animated">

<!-- подключение к дб -->
		<?php
		    $host = 'localhost';
		    $user = 'root'; 
		    $pass = '83211238';
		    $db_name = 'greenway_db';
		    
		    $link = mysqli_connect($host, $user, $pass, $db_name);
		   
		    if (!$link) {
		      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
		      exit;
		    }
			    mysqli_query($link, "SET NAMES 'utf8';");
				mysqli_query($link, "SET CHARACTER SET 'utf8';");
				mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci';");
		  ?>

	<h2 class="even" id="center">ЗАПРОС НА СОТРУДНИЧЕСТВО</h2>
		<div id="nik">
			<img src="images/nik_greenway.jpg">
		</div>

<!-- отправка данных из формы -->
	<?php
		  if (isset($_POST["fio"])) {
		    $sql = mysqli_query($link, "INSERT INTO `clients` (fio,date,passport,mobile,address,email,target) VALUES ('{$_POST['fio']}', '{$_POST['date']}', '{$_POST['passport']}', '{$_POST['mobile']}', '{$_POST['address']}', '{$_POST['email']}', '{$_POST['target']}')");
		    if ($sql) {
		      echo '<p id="green">Данные успешно добавлены.</p>';
		    } else {
		      echo '<p id="red">Произошла ошибка: ' . mysqli_error($link) . '</p>';
		    }
  		}
	?>

	<div id="form">
		<form method="post" action="">
			Приглашаю Вас присоединиться к эко-компании 🍀GreenWay🍀<br>
			В результате: <br> 
			☘ Вы полностью исключите бытовую химию у себя дома, тем самым обеспечите здоровье семьи. <br>
			Бытовая химия - это бомбы замедленного действия, расставленные по всему дому: на кухне, в ванной комнате, в спальне. <br>
			☘Будете пользоваться высококачественными и экологически чистыми продуктами для здоровья, которые разработали Японские ученые. <br>
			☘ Получите доступ в свой личный эко-маркет и возможность дополнительного заработка. Выплаты наличными еженедельно с первого дня. <br>
			☘ Сможете получать продукцию каждый месяц совершенно бесплатно, если пригласите в свой ЭКО-маркет 6 человек, которые так же хотят освободить свой дом от химии, и обеспечить ЭКО-безопасность своей семье. <br>
			☘ Имеете Шанс построить свой Эко-бизнес без вложений. <br>
			🍀После обработки Анкеты, Вы получите SMS с номером ID и паролем от своего личного кабинета на официальном сайте эко-маркета. <br>
			Фамилия Имя Отчество: <br>
			<input type="text" name="fio" required><br>
			Дата рождения: <br>
			<input type="date" name="date" required><br>
			Номер и серия паспорта РФ:<br>
			<input type="text" name="passport" required maxlength="11"><br>
			Мобильный телефон:<br>
			<input type="tel" name="mobile" required maxlength="12"><br>
			Ваш город, адрес и индекс:<br>
			<input type="text" name="address" required><br>
			E-mail:<br>
			<input type="email" name="email"><br>
			Цель вашей регистрации:<br>
			<input type="radio" name="target" value="client" required>Клиент<br>
			<input type="radio" name="target" value="prodavec" required>Продавец<br>
			<input type="radio" name="target" value="razvitie" required>Развитие сети эко-маркетов<br>
			Нажимая кнопку ОТПРАВИТЬ я даю согласие на обработку своих персональных данных. <br>
			<input type="submit" value="Отправить">
		</form>
	</div>
</div>

<!-- footer -->
<footer>
	<p>2019 Greenway&#9658</p>
</footer>

</body>
</html>