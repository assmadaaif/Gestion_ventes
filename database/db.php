<?php
require(dirname(__FILE__) . './conf.php');

class DB {

    static function connect() {

        try {
            
            return new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);

        } catch (PDOException $e) {
            
            return null;
        }

    }

}
?>