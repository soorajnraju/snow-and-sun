<?php

namespace Snow;

class Loader{
    
    function __construct(){
        $this->register();
    }

    function register(){
        spl_autoload_register(array($this, 'autoload'));
    }

    function autoload($class){
        $length = strlen( __NAMESPACE__);

        if(strncmp($class, __NAMESPACE__, $length)!==0){
            return; //return to other registered autoloaders
        }

        $dir = explode('\\',$class );
        if($dir[0]==__NAMESPACE__){
            unset($dir[0]);
        }
        $file = constant('PLUGIN_PATH');
        foreach($dir as $d){
            $file.=$d.'/';
        }
        $file = rtrim($file, '/');
        $file.='.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
}
