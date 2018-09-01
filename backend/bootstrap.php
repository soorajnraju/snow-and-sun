<?php

namespace Snow\Backend;

class Bootstrap{
    
    function init(){
        $this->load_scripts();
    }

    function load_scripts(){
        \add_action('admin_enqueue_scripts', [$this, 'load_scripts_callback']);
    }

    function load_scripts_callback(){
        \wp_enqueue_script(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/backend/js/script.js'));
        \wp_enqueue_style(PLUGIN_NAME, \plugins_url(PLUGIN_NAME.'/backend/css/style.css'));
    }

}
