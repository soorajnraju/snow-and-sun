<?php

/**
 * Description of Hello_World
 *
 * @author Sooraj<soorajnraju@gmail.com>
 */

namespace Snow\Backend\Modules\Database;

class Hello_World {

    public function __construct() {
        add_action('init', [$this, 'create_hello']);
    }

    public function create_hello() {
        global $wpdb;
        $table_name = TABLE_PREFIX . 'hello';

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            name tinytext NOT NULL,
            text text NOT NULL,
            url varchar(55) DEFAULT '' NOT NULL,
            PRIMARY KEY  (id)
          ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }

}
