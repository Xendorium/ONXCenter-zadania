<?php

class Dictionary
{

    public function getSynonyms($word){
        $tezaurus=array("market" => array("trade"), "small" => array("little", "compact"));

        if(isset($tezaurus[$word])){
            $synonims=$tezaurus[$word];
        }
        else{
            $synonims=array();
            $data=$synonims;
        }
        $data = array('word'=>$word,'synonyms'=>$synonims);
        return "'".json_encode($data)."'";
    }
}
