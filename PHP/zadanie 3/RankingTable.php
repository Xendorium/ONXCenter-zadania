<?php

class RankingTable
{
    public $competitors = array();
    public $rank = array();
    public function __construct($players){
        $this->competitors=$players;
    }

    public function recordResult($name,$points){
        for($i=0;$i<count($this->competitors);$i++){
            if($name==$this->competitors[$i]){
                goto P1;
            }
        }
        echo "</br>Nie znaleziono gracza ".$name." na liście graczy";
        return;
        P1:
        echo "</br>Znaleziono gracza: ".$name;
        $this->rank[$name]=$points;
    }
    public function playerRank($rank){

    }
}