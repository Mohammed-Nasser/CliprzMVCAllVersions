<?php

/**
 * Copyright :
 *  Cliprz model view controller framework.
 *  Copyright (C) 2012 - 2013 By Yousef Ismaeil.
 *
 * Framework information :
 *  Version 1.0.0 - Incomplete version for real use..
 *  Official website http://www.cliprz.org .
 *
 * File information :
 *  File path BASE_PATH/cliprz_system/errors/ .
 *  File name error.php .
 *  Created date 14/11/2012 07:54 PM.
 *  Last modification date 26/11/2012 08:51 PM.
 *
 * Description :
 *  Errors class.
 *
 * Licenses :
 *  This program is released as free software under the Affero GPL license. You can redistribute it and/or
 *  modify it under the terms of this license which you can read by viewing the included agpl.txt or online
 *  at www.gnu.org/licenses/agpl.html. Removal of this copyright header is strictly prohibited without
 *  written permission from the original author(s).
 */

if (!defined("IN_CLIPRZ")) die('Access Denied');

class error
{

    /**
     * Show 404 error.
     *
     * @access public.
     */
    public static function show_404 ()
    {
        $forzerofor = APP_PATH.'errors/404.php';

        if (file_exists($forzerofor))
        {
            require_once ($forzerofor);
            exit();
        }
        else
        {
            exit("<h1>404</h1>");
        }
    }

}

?>