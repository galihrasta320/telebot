<?php
require("library/core.php");

$cek = "Hallo galih!";
$sender = new Telebot();
$sender->send($cek);