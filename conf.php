<?php
/*****
* Configuration PHP File
* in URL, PATH Array, Database Info
*****/
if (!defined('IS_SITE')) {
    require_once(__DIR__. '/error/403.php');
    exit;
}

$__database = array();
$__database['id'] = '';
$__database['pw'] = '';
$__database['db'] = '';
$__database['host'] = '';

$site = array();
$site['url'] = 'http://localhost/test';
$site['path'] = __DIR__;

// URL
$site['url'] = array(
    'default' => $site['url'], // 다른 곳에서는 $site['url']가 Array로 나오기 때문.
    'view' => $site['url']. '/view/',
    'file' => array(
        'css' => $site['url']. '/file/css/',
        'js' => $site['url']. '/file/js/'
    )
);

// PATH
$site['path'] = array(
    'default' => $site['path'], // 다른 곳에서는 $site['path']가 Array로 나오기 때문.
    'view' => $site['path']. '/view/',
);


// Configuration
$site['config'] = array(
    'title' => 'My Portfolio',
);
