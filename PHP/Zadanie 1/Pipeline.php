<?php
class Pipeline
{
    public static function make(...$functions){
        foreach ($functions as $function){
            $closure = function($arg) use ($function){
                return $function($arg);
            };
        } return $closure(3);
    }
}