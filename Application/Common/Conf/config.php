<?php

$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $DB_USER = 'xuanmai';
    $DB_PWD = 'xxx';
    $html = false;
} else {
    $DB_USER = 'xuanmai';
    $DB_PWD = 'xxx';
    $html = true;
}
$arr = array(
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'xxx',
    'DB_NAME' => 'xxx',
    'DB_USER' => 'xxx',
    'DB_PWD' => 'xxx',
    'DB_PORT' => 3306,
    'DB_PREFIX' => '',
    'DB_CHARSET' => 'utf8',
    'MODULE_ALLOW_LIST' => array(
        'Home',
    ),
    'LOG_RECORD' => false, //日志开启
    'URL_MODEL' => 2,
    'LOAD_EXT_FILE' => 'common',
    'SHOW_PAGE_TRACE' => false,
);
return $arr;
