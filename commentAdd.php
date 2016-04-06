<?php
if($_POST['Message']!="") {
	//Обработка данных формы. Замена HTML тегов на их сущности
	$Message = htmlspecialchars($_POST['Message'], ENT_QUOTES);
	$User = htmlspecialchars($_POST['User'], ENT_QUOTES);
	$Email = htmlspecialchars($_POST['Email'], ENT_QUOTES);
	$Parent = intval($_POST['Parent']);

	$host = $_SERVER['HTTP_HOST'];
	$url = $_SERVER['REQUEST_URI'];

	//Добавление комментария в базу
	addComment($Parent, $User, $Email, $Message, $host, $url);
}
?>