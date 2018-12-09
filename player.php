<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	$mysqli = new mysqli('Localhost', 'root', '', 'kinomonster');
	if(mysqli_connect_errno()) {
		printf("Соединение не установлено", mysqli_connect_errno());
		exit();
}

$mysqli->set_charset('utf8');
$query = $mysqli->query('SELECT * FROM music');
while($row=mysqli_fetch_assoc($query)) {
	echo $row['name'];
}

$query = "INSERT INTO music VALUES(0, 'Oyxxximiron', 'Признаки жизни')";
$mysqli->query($query);

?>
	<form method="post" action="#" >
		<input type="text" name="name" placeholder="Название композиции">
		<input type="text" name="author" placeholder="Имя исполнителя">
		<input type="submit" class="btn" value="Добавить">
	</form>

</body>
</html>