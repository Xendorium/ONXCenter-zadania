<?php
session_start();
include_once ('Pipeline.php');

$var = 3;
$_SESSION['var']=$var;

echo Pipeline::make(function($var) { return $var * 3; }, function($var) { return $var + 1; },
function($var) { return $var / 2; });
