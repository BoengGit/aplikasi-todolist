<?php

require_once "../aplikasi-todolist/Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;
