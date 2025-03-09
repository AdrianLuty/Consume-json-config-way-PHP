<?php

$config = include "config.php";
extract($config["connection"]);
echo $user;
echo $password;
echo $database;
 ?>
