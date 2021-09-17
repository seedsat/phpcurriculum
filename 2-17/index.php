<?php
  $sum = 0;
  for($i = 1; $sum < 40; $i ++) {
    $n = mt_rand(1, 6);
    $sum += $n;
    echo "{$i}回目＝{$n}<br>";
  }
  $total = $i - 1;
  echo "合計{$total}回でゴールしました";

  echo '<br>';

  $time = date('H');
  if($time >= 5 && $time < 12) {
    echo 'おはようございます';
  } elseif ($time >= 12 && $time < 18) {
    echo 'こんにちは';
  } else {
    echo 'こんばんは';
  }
