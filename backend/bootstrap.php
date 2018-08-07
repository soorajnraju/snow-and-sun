<?php
namespace Snow\Backend;

class Bootstrap{
    
    private static $instance=null;

    function init(){
        self::getInstance();
        self::load_scripts();
    }

    function load_scripts(){
        add_action('admin_enqueue_scripts', array(self::$instance, 'load_scripts_callback'));
    }

    function load_scripts_callback(){
        \wp_enqueue_script(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/backend/js/script.js'));
        \wp_enqueue_style(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/backend/css/style.css'));
    }

    function getInstance(){
        if(self::$instance==null){
            self::$instance=new self;
        }
    }
}
