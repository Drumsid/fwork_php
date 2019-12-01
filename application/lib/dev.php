<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

function myDebug($date)
{
	echo "<pre>";
	var_dump($date);
	echo "</pre>";
	exit;
}