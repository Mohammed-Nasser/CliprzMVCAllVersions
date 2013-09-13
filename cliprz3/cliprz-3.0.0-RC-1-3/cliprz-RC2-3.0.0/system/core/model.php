<?php

/**
 * Cliprz framework
 *
 * Color your project, An open source application development framework for PHP 5.3.0 or newer
 *
 * LICENSE: This program is released as free software under the Affero GPL license. You can redistribute it and/or
 * modify it under the terms of this license which you can read by viewing the included agpl.txt or online
 * at www.gnu.org/licenses/agpl.html. Removal of this copyright header is strictly prohibited without
 * written permission from the original author(s)
 *
 * @package    Cliprz
 * @author     Yousef Ismaeil <cliprz@gmail.com>
 * @copyright  Copyright (c) 2012 - 2013, Cliprz Developers team
 * @license    http://www.cliprz.org/agpl.txt
 * @link       http://www.cliprz.org
 * @since      Version 3.0.0
 */

class cliprz_model {

    /**
     * __CLASS__ constructor
     *
     * @access public
     */
    public function __construct() {
        $config = &autoloader::set('config','core');
        if ($config->enable_database === true) {
            $database = autoloader::set('database','database');
            $database->connect();
            $database->select_db();
            $database->set_charset();
            $database->character_set_name();
        }
    }

}

/**
 * File information
 *
 * @name      model.php
 * @directory ./system/core/
 */

?>