<?php

/**
 * Description of Hello_World
 *
 * @author Sooraj<soorajnraju@gmail.com>
 */

namespace Snow\Backend\Modules\Models;

class Hello_World {
    
    static $table = TABLE_PREFIX.'hello'; 

    public function insert($data){
        global $wpdb;
        //Insert It
    }
    
    public function select_all(){
        global $wpdb;
        //Select All
    }
    
    public function select_one(){
        global $wpdb;
        //Select One
    }
    
    public function update($data, $id){
        global $wpdb;
        //Update It
    }
    
    public function delete($id){
        global $wpdb;
        //Delete It
    }

}
