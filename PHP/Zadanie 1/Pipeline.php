<?php
session_start();
class Pipeline
{
    public static function make($function){

        $closure = function($arg) use ($function){
            $function($arg);
        };
        $closure($_SESSION['var']);
    }
}