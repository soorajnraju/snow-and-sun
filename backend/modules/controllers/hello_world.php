<?php

/**
 * Description of Hello_World
 *
 * @author Sooraj<soorajnraju@gmail.com>
 */

namespace Snow\Backend\Modules\Controllers;

use Snow\Backend\Modules\Models\Hello_World as Hello_World_Model;

class Hello_World {

    protected $hello_world_model;

    public function __construct() {
        $this->hello_world_model = new Hello_World_Model();
        add_action('admin_post_hello_world', [$this, 'hello']);
    }

    public function hello() {
        pre($_POST);
    }

}
