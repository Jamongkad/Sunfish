<?php
require_once 'webphp/web.php';

function routes($url) { 
    $first = array_kshift($url);
    foreach($first as $key => $value) {
        $url[$key] = $value;
    }

    run($url);
}

function array_kshift(&$arr) {
   list($k) = array_keys($arr);
   $r = array($k=>$arr[$k]);
   unset($arr[$k]);
   return $r;
}
?>
