<?php
foreach($_POST as $key => $val){
	if(empty($val)){
		continue;
	}
	$$key = filter_var($val, FILTER_SANITIZE_STRING);
	//echo $key."<br>";
}
if(!$name || !$name2 || !$name3 || !$personal_data){
	echo 'Все поля должны быть заполнены';
	exit();
}
$to      = 'slava@hmao-ugra.ru,slava1@hmao-ugra.ru';
$subject = 'Заявка на порубочный билет';
$message = 'Заявка на порубочный билет с сайта: Имя:'.$name.'. Фамилия'.$name2.'. Отчество:'.$name3;
$headers = 'From: slava@hmao-ugra.ru' . "\r\n" .
    'Reply-To: slava@hmao-ugra' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 'Заявка успешно отправлена! Ваш порубочный билет Вы сможете забрать в нашем офисе по адресу Сургут, улица 30 лет Победы 27а, офис 19. Не забудьте паспорт.';
}
?>
