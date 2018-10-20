<?php
/**
 * Description of Hello_World
 *
 * @author Sooraj<soorajnraju@gmail.com>
 */

namespace Snow\Backend\Modules\Pages;

class Hello_World {

    public function __construct() {
        add_menu_page( 'Hello', 'Hello', 'manage_options', 'hello_world', [$this, 'hello']);
    }

    public function hello() {
        ?>
        <h1>Hello World</h1>
        <?php
    }

}
