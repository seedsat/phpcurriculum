<?php

$x = 10.2;
echo ceil($x);

echo '<br>';

$x = 10.2;
echo floor($x);

echo '<br>';

$x = 9.8;
echo round($x);

echo '<br>';

$x = 3 * 3 * pi();
echo $x;

echo '<br>';

echo mt_rand(1, 1000);

echo '<br>';

$str = ' testsfsegew ';
echo strlen($str);

echo '<br>';

$str = 'testsfsegew';
echo strpos($str, 'ew');

echo '<br>';

$str = 'testsfsegew';
echo substr($str, 8, 3);

echo '<br>';

$str = 'testsfsegew';
echo substr($str, -8, 3);

echo '<br>';

$str = 'testsfsegew';
echo str_replace('testsfsegew', 'PHPに変換', $str);

echo '<br>';

$name = 'TEST';
$start = '9:00';
$finish = '19:00';
$message = '頑張ってください';

printf("%sさんは朝%d時から夜%d時まで働きます。%s", $name, $start, $finish, $message);

echo '<br>';

$name = 'TEST';
$start = '9:00';
$finish = '19:00';
$message = '頑張ってください';

$str = sprintf("%sさんは朝%d時から夜%d時まで働きます。%s", $name, $start, $finish, $message);
echo $str;