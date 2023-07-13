<?php


$tezaurus=array("market" => array("trade"), "small" => array("little", "compact"));
function getSynonyms($word){


    echo '\''."{".'"'."word".":".'"'.$word.'"',",",'"synonyms:"'."["."]"."}".'\'';
}



$word="market";

$tezaurus["small"]=implode(',',"small");

/*$tezaurus->*/getSynonyms($word);


