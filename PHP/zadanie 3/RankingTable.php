<?php

class RankingTable
{
    public $numberOfgame=array();
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
        if (array_key_exists($name, $this->rank)) {
            $this->sum($name, $points);
            $this->numberOfgame[$name]+=$this->numberOfgame[$name];
        } else {
            $this->rank[$name] = $points;
            $this->numberOfgame[$name]=1;
        }
    }

    public function key($array, $position){
        $arrayKeys=array_keys($array);
        return $arrayKeys[$position];
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
         arsort($this->rank);
         asort($this->numberOfgame);
         $count = count($this->rank);
         $num=0;

         $many = array_count_values($this->rank);
         $unique = count($many);

        $many_ = array_count_values($this->numberOfgame);
        $unique_ = count($many_);

         if ($unique==1){
             while($num < count($this->rank)){
                 $segregated[$num] = $this->key($this->numberOfgame,0);
                 $num++;
                 unset($this->numberOfgame[$this->key($this->numberOfgame,0)]);
             }
         }
         elseif ($unique_==1){
             while($num < count($this->numberOfgame)){
                 $segregated[$num] = $this->key($this->rank,0);
                 $num++;
                 unset($this->rank[$this->key($this->rank,0)]);
             }
         }
         else {
                while($num < $count){
                    $howManymax=1;
                    if(count($this->rank)>1){
                        for($i=0;($this->rank[$this->key($this->rank,$i)]==$this->rank[$this->key($this->rank,$i+1)]);$i++){
                            $howManymax++;
                        }
                    }
                    $howManynumber=1;
                    if(count($this->numberOfgame)>1){
                        for($i=0;$this->numberOfgame[$this->key($this->numberOfgame,$i)]==$this->numberOfgame[$this->key($this->numberOfgame,$i+1)];$i++){
                            $howManynumber++;
                        }
                    }
                    if ($howManymax==1){
                        $segregated[$num] = $this->key($this->rank,0);
                        $num++;
                        unset($this->rank[$this->key($this->rank,0)]);
                    }
                    else{
                        $p=0;
                        while ($p<$howManymax){
                            $i=0;
                            while($i<$howManynumber){
                                if($this->key($this->rank,$p)==$this->key($this->numberOfgame,$i)){
                                    $segregated[$num] = $this->key($this->rank,$i);
                                    $num++;
                                    unset($this->rank[$this->key($this->rank,$i)]);
                                }
                                $i++;
                            }
                            $p++;
                        }

                    }
                }
         }
        return $segregated;
    }


    public function playerRank($rank){
        $ranks=array();
        $ranks = $this->segregation();
        return $ranks[$rank-1];
    }
}