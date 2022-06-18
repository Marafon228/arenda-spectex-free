<?php
/*    array_walk($_POST, create_function('&$val,$key','$val=" $key: "$val"<br>";'));
    $text = implode($_POST," : ");
    mail("test@mail.ru", "Новый запрос", $text, "X-Mailer: PHP/");
    header('Location: confirm.html'); // ссылка на страницу спасибо
    */?>
<?php
/*$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

if(!empty($_POST['productname']) and !empty($_POST['tel']) and !empty($_POST['email'])
	and !empty($_POST['message'])){
	$productname = trim(strip_tags($_POST['productname']));
	$datein = trim(strip_tags($_POST['datein']));
	$dateout = trim(strip_tags($_POST['dateout']));
	$fio = trim(strip_tags($_POST['fio']));
	$tel = trim(strip_tags($_POST['tel']));
	$birthday = trim(strip_tags($_POST['birthday']));
	$addres = trim(strip_tags($_POST['addres']));
	$passport = trim(strip_tags($_POST['passport']));
	$passinfo = trim(strip_tags($_POST['passinfo']));
	$email = trim(strip_tags($_POST['email']));
	$message = trim(strip_tags($_POST['message']));

	mail('nasalwrot@gmail.com', 'Письмо с от клиента по поводу аренды спецтехники',
		'Вам написал: '.$fio.'Выбранная техника: '.$productname.'<br />Его номер: '.$tel.'<br />Его почта: '.$email.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");

	echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";

	exit;

}
else {
	echo "Для отправки сообщения заполните все поля! $back";
	exit;
}
*/?>

<?php
$productname = trim(strip_tags($_POST['productname']));
$datein = trim(strip_tags($_POST['datein']));
$dateout = trim(strip_tags($_POST['dateout']));
$fio = trim(strip_tags($_POST['fio']));
$tel = trim(strip_tags($_POST['tel']));
$birthday = trim(strip_tags($_POST['birthday']));
$addres = trim(strip_tags($_POST['addres']));
$passport = trim(strip_tags($_POST['passport']));
$passinfo = trim(strip_tags($_POST['passinfo']));
$email = trim(strip_tags($_POST['email']));
$message = trim(strip_tags($_POST['message']));

mail('nasalwrot@gmail.com', 'Письмо с от клиента по поводу аренды спецтехники',
	'Вам написал: '.$fio.'Выбранная техника: '.$productname.'<br />Его номер: '.$tel.'<br />Его почта: '.$email.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");

header('Location: index.html');
/*echo "<script>alert('Данные отправлены !!!')</script>";*/
?>
