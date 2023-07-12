<?php

include_once ('TextInput.php');

$t1=new TextInput();

$t1->add('Adam');
$t1->add(' 123');
$t1->getValue();

$n1=new NumericInput();
$n1->getValue();
$n1->add('ab');
$n1->getValue();
$n1->add('12');
$n1->getValue();

$t1->getValue();