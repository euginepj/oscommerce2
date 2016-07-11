<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright (c) 2016 osCommerce; https://www.oscommerce.com
 * @license GPL; https://www.oscommerce.com/gpllicense.txt
 */

namespace OSC\OM;

use OSC\OM\OSCOM;

class ErrorHandler
{
    public static function initialize()
    {
        ini_set('display_errors', false);
        ini_set('html_errors', false);
        ini_set('ignore_repeated_errors', true);

        if (is_writable(OSCOM::BASE_DIR . 'work')) {
            if (!file_exists(OSCOM::BASE_DIR . 'work/logs')) {
                mkdir(OSCOM::BASE_DIR . 'work/logs');
            }

            ini_set('log_errors', true);
            ini_set('error_log', OSCOM::BASE_DIR . 'work/logs/errors-' . date('Ymd') . '.txt');
        }
    }
}
