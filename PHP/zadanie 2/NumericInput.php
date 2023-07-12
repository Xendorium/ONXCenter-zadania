<?php

class NumericInput extends TextInput
{
    public function add($text)
    {
        if(is_numeric($text)){
            Parent::$value=Parent::$value.$text;
        }
    }
}