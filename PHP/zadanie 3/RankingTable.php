<?php

class RankingTable
{
    public $numberOfgasme=0;
    public $competitors = array();
    public $rank = array();
    public $rank_coped = array();
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
        if (array_key_exists($name, $this->rank)) {
            $this->sum($name, $points);
        } else {
            $this->rank[$name] = $points;
        }
    }

    public function sum($name,$points){
        for($i=0;$i<count($this->competitors);$i++){
            if($name==$this->competitors[$i]){
                $this->rank[$name]+=$points;
            }
        }
        return $this->rank[$name];
    }

    public function segregation(){
        $segregated = array();
        $this->rank_coped=$this->rank;
        $num=0;
        while ($num < count($this->rank)) {
            $max = max($this->rank);
            $segregated[$num] = $max;
            $num++;
            $key = array_search($max, $this->rank);
            unset($this->rank[$key]);
        }
        $this->rank=$segregated;
    }
    public function playerRank($rank){
        return array_search($this->rank[$rank-1],$this->rank_coped);
    }
}