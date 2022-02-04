<?php
require 'classes/user.php';

$user = new user();

echo $user::MAX_INSTANCES;
var_dump($user->parseRequest());






