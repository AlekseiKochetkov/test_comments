<?php
if($_POST['Message']!="") {
	//��������� ������ �����. ������ HTML ����� �� �� ��������
	$Message = htmlspecialchars($_POST['Message'], ENT_QUOTES);
	$User = htmlspecialchars($_POST['User'], ENT_QUOTES);
	$Email = htmlspecialchars($_POST['Email'], ENT_QUOTES);
	$Parent = intval($_POST['Parent']);

	$host = $_SERVER['HTTP_HOST'];
	$url = $_SERVER['REQUEST_URI'];

	//���������� ����������� � ����
	addComment($Parent, $User, $Email, $Message, $host, $url);
}
?>