<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU_RS/resource/php/class/core/init.php';
$user = new User();
$user->logout();
Redirect::to('login.php');
 ?>
