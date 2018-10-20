<?php

namespace Snow\Backend;

class Bootstrap {

    function init() {
        if (is_admin()) {
            $this->load_scripts();
            if(isset($_GET['update_database']) && $_GET['update_database']=='true'){
                /*
                 * You can also hook into plugin activation hook
                 */
                $this->init_database();
            }
            $this->init_controllers();
            $this->init_pages();
        }
    }

    function load_scripts() {
        \add_action('admin_enqueue_scripts', [$this, 'load_scripts_callback']);
    }

    function load_scripts_callback() {
        \wp_enqueue_script(PLUGIN_NAME, \plugins_url(PLUGIN_NAME . '/backend/assets/js/script.js'));
        \wp_enqueue_style(PLUGIN_NAME, \plugins_url(PLUGIN_NAME . '/backend/assets/css/style.css'));
    }
    
    function init_database(){
        new \Snow\Backend\Modules\Database\Hello_World();
    }
    
    function init_controllers(){
         new \Snow\Backend\Modules\Controllers\Hello_World();
    }
    
    function init_pages(){
        new \Snow\Backend\Modules\Pages\Hello_World();
    }

}
