<?php

require_once ('Dictionary.php');

$tezaurus=new Dictionary();

$word="market";
echo $tezaurus->getSynonyms($word);
echo "</br>";

$word="small";
echo $tezaurus->getSynonyms($word);
echo "</br>";

$word="asleast";
echo $tezaurus->getSynonyms($word);
echo "</br>";

