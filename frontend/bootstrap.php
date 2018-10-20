<?php

namespace Snow\Frontend;

class Bootstrap{
    
    function init(){
        $this->load_scripts();
    }

    function load_scripts(){
        \add_action('wp_enqueue_scripts', [$this, 'load_scripts_callback']);
    }

    function load_scripts_callback(){
        \wp_enqueue_script(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/frontend/assets/js/script.js'));
        \wp_enqueue_style(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/frontend/assets/css/style.css'));
    }

}