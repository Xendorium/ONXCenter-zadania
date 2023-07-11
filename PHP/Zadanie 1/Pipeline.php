<?php
class Pipeline
{
    public static function make(...$functions){
        $arg = $_SESSION['var'];
        foreach ($functions as $function){
            $closure = function($arg) use ($function){
                return $function($arg);
            };
            $arg = $closure($arg);
        }
        return $arg;
    }
}