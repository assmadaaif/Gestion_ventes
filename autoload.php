<?php

session_start();

require_once './bootstrap.php';

spl_autoload_register('autoload');

 function autoload($classe_name){
     $array_paths=array(
         'database/',
         'app/classes/',
         'controllers/',
         'models/',
         'public/',
         'views'
        

     );
     $parts=explode('\\',$classe_name);
     $name=array_pop($parts);
     foreach($array_paths as $path){
         $file=sprintf($path.'%s.php',$name);
         if(is_file($file)){
             include_once $file;
         }
     } 


 }



?>