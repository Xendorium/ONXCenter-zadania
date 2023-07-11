<?php

include_once ('NumericInput.php');
class TextInput
{
    public $value="";
    public function add($text){
        $this->value = $this->value.$text;
    }
    public function getValue(){
        echo $this->value."</br>";
    }
}