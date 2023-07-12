<?php

include_once ('NumericInput.php');
class TextInput
{
    public static $value="";
    public function add($text){
        self::$value = self::$value.$text;
    }
    public function getValue(){
        echo self::$value."</br>";
    }
}