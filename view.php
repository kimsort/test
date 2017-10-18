<?php
require_once(__DIR__. '/vendor/autoload.php');

$get = array();
$get['querystring'] = $_SERVER['QUERY_STRING'];

if ($get['querystring']) {
    // 쿼리 스트링이 있을 경우
    /*
    * 만약 view.php?***로 접속했을 경우
    * conf.php를 불러오지 않았기 때문에 여기서 불러온다.
    */
    define('IS_SITE', true);
    require_once(__DIR__. '/conf.php');
    require_once($site['path']['view']. $get['querystring']. '/basic.php');
} else {
    // 쿼리 스트링이 없을 경우
    // 즉, INDEX일 경우
    require_once($site['path']['view']. 'index/basic.php');
}
