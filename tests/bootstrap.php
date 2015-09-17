<?php

error_reporting(E_ALL);
if (function_exists('date_default_timezone_set') && function_exists('date_default_timezone_get')) {
    date_default_timezone_set(@date_default_timezone_get());
}

require realpath(dirname(__FILE__) . '/../vendor/autoload.php');
