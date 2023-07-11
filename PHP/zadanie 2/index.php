<?php

include_once ('TextInput.php');

$t1=new TextInput();

$t1->add("Anna");
$t1->getValue();
$t1->add(" 23");
$t1->getValue();