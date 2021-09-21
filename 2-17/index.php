<?php

  $x = 0;
  $i = 0;
  while($x < 40) {
    $i++;
    $s = mt_rand(1,6);
    echo $i . '回目=' . $s . '<br>';
    $x += $s;
  }
  echo "合計{$i}回でゴールしました<br>";

  date_default_timezone_set('Asia/Tokyo');
  $time = date('H');
  echo "今{$time}時台です<br>";
  if($time >= 5 && $time < 12) {
    echo 'おはようございます';
  } elseif ($time >= 12 && $time < 18) {
    echo 'こんにちは';
  } else {
    echo 'こんばんは';
  }
