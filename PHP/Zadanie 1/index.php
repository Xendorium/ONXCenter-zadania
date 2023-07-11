<?php
include_once ('Pipeline.php');

$var = 0;

$_SESSION['var'] = $var;

Pipeline::make(function($var) { return $var * 3; }/*, function($var) { return $var + 1; },
function($var) { return $var / 2; }*/);
