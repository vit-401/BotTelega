<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$adres = $_POST['user_adres'];
$phone = $_POST['user_phone'];
$pompa = $_POST['pompa'];
$token = "1263778634:AAF-Og4D0tSnx7GpKd7WoCEqUic0e59NgYc";
$chat_id = "-496411225";
$arr = array(
  'Имя: ' => $name,
	'Адрес: ' => $adres,
	'Телефон: ' => $phone,
	'Помпа: ' => $pompa
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>