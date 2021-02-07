<?php
/**
 * Description of Hello_World
 *
 * @author Sooraj<soorajnraju@gmail.com>
 */

namespace Snow\Backend\Modules\Pages;

class Hello_World {

    public function __construct() {
        add_action( 'admin_menu', [$this, 'hello'] );
    }

    public function hello(){
        add_menu_page( 'Hello', 'Hello', 'manage_options', 'hello', [$this, 'hello_world'], 'dashicons-welcome-widgets-menus', 100);
    }

    public function hello_world() {
        ?>
        <h1>Hello World</h1>
        <?php
    }

}
