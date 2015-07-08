<?php

$recepient = "politstartup@gmail.com";
$sitename = "Вибори 2015 politstartup.org.ua";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$social = trim($_POST["social"]);
$region = trim($_POST["region"]);
$message = "ПІБ: $name \nТелефон: $phone \nПошта: $email \nСоцмережа: $social \nРегіон: $region";

$pagetitle = "Нова заявка з сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");