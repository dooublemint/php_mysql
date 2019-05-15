<!-- <html>
<head>
  <meta charset="utf-8">
<link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
<div id="example">Пример 3.1</div>
<div id="content">
<h1>Вступайте в наш виртуальный клуб</h1>
<p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
<form action="scripts/getFormInfo.php" method="POST">
<fieldset>
<label for="first_name">Имя:</label>
<input type="text" name="first_name" size="20" /><br />
<label for="last_name">Фамилия:</label>
<input type="text" name="last_name" size="20" /><br />
<label for="email">Адрес электронной почты:</label>
<input type="text" name="email" size="50" /><br />
<label for="facebook_url">URL в Facebook:</label>
<input type="text" name="facebook_url" size="50" /><br />
<label for="twitter_handle">Идентификатор в Twitter:</label>
<input type="text" name="twitter_handle" size="20" /><br />
</fieldset>
<br />
<fieldset class="center">
<input type="submit" value="Вступить в клуб" />
<input type="reset" value="Очистить и начать все сначала" />
</fieldset>
</form>
</div>
<div id="footer"></div>
</body>
</html> -->

<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$twitter_handle = $_REQUEST['twitter_handle'];
?>


<html>
<head>
  <meta charset="utf-8">
<link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
<div id="example">Пример 3.1</div>
<div id="content">
<p>Это структура с данными, получаемыми из формы:</p>
<p>
  Имя: <?php echo $first_name; ?><br>
  Фамилия: <?php echo $last_name; ?><br>
  Адрес электронной почты: <?php echo $email; ?><br>
  URL-адрес в Facebook: <?php echo $facebook_url; ?><br>
  Идентификатор в Twitter: <?php echo $twitter_handle; ?><br>
</p>
</div>
<div id="footer"></div>
</body>
</html>
