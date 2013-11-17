<?php
$str = '168834615@163.com.cn';

$name = preg_replace('/@.*/', '', $str);
// $name = preg_match('/^qq/', $str);

echo $name;
?>