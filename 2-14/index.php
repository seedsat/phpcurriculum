<?php

$sports = ['baseball', 'soccer', 'tennis', 'swimming'];
echo count($sports);

echo '<br>';

$sports = ['baseball', 'soccer', 'tennis', 'swimming'];
echo sort($sports);
var_dump($sports);

echo '<br>';

$sports = ['baseball', 'soccer', 'tennis', 'swimming'];
echo sort($sports);
var_dump(in_array('baseball', $sports));

echo '<br>';

$sports = ['baseball', 'soccer', 'tennis', 'swimming'];
$str = implode('と', $sports);
var_dump($str);

echo '<br>';

$sports = ['baseball', 'soccer', 'tennis', 'swimming'];
$str = implode('と', $sports);

$re_str = explode('と', $str);
var_dump($re_str);

echo '<br>';