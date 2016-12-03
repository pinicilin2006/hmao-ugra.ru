<?php
foreach($_POST as $key => $val){
	if(empty($val)){
		continue;
	}
	$$key = filter_var($val, FILTER_SANITIZE_STRING);
	//echo $key."<br>";
}
if(!$name || !$name2 || !$name3 || !$series || !$number || !$personal_data){
	echo 'Все поля должны быть заполнены';
	exit();
}
$to      = 'slava@hmao-ugra.ru';
$subject = 'Заявка на порубочный билет';
$message = 'Заявка на порубочный билет с сайта: Имя:'.$name.'. Фамилия'.$name2.'. Отчество:'.$name3.'. Серия паспорта:'.$series.'. Номер паспорта:'.$number.'.';
$headers = 'From: slava@hmao-ugra.ru' . "\r\n" .
    'Reply-To: slava@hmao-ugra' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 'Заявка успешно отправлена! Ваш порубочный билет Вы сможете забрать после 15 декабря. Не забудьте паспорт.';
}
?>
