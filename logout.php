<?php

session_start();
$_SESSION = [];
session_unset(); //untuk memastikan session hilang
session_destroy();

setcookie('id','');
setcookie('key','');

header("location: login.php");
?>