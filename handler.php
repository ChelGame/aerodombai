<?php

if (isset($_POST['count_people'])) {
  $_POST['count_people'] = 0;
}

$fromMail = 'info@aerodombay.ru';
$fromName = 'info@aerodombay.ru Форма';

$emailTo = 'stasrysakevich@gmail.com';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

$body = 'Тип вертолета: ' . $_POST['copter_type'] . '<br />' . 'Число: ' . $_POST['number'] . '<br />' . 'Месяц: ' . $_POST['month'] . '<br />'
. 'Время: ' . $_POST['time'] . '<br />' . 'Телефон: ' . $_POST['phone'] . '<br />' . 'Описание' . $_POST['discript'];

if (strlen($_POST['copter_type']) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
    $message = '<div class="popup"><p>Спасибо за заказ</p></div>';
}
