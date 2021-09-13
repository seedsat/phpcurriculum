<?php

function cuboidVolume($vertical, $horizontal, $height) {
  $result = $vertical * $horizontal * $height;
  echo $result;
}

cuboidVolume(5, 10, 8);