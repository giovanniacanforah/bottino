<?php

if(php_sapi_name() != 'cli') die();
if(!file_exists("already")){
    if(isset($argv[1]) && $argv[1] == "install"){
      file_put_contents("already", "installed");  
      echo 'Okay, installed.';
      echo PHP_EOL.'Start @BottinoBot on Telegram for continue!'.PHP_EOL;
    }else echo 'Do "php bottino.php install" for install'.PHP_EOL;
}else echo 'Start @BottinoBot on Telegram for continue.'.PHP_EOL;


/*IRONIC CODE BY @CAGATEMI ON TELEGRAM.
IF YOU WANT TO USE BOTTINO'S FEATURE, ADD TO A TELEGRAM GROUP @BottinoManagerBot.*/
