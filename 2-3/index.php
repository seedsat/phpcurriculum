<?php

$name = 'taro';
$pwd = 'pass';


if( $name == 'taro' && $pwd == 'pass' ) {
  echo 'ログイン成功です';
} elseif( $name == 'taro' && $pwd != 'pass' ) {
  echo 'パスワードが間違っています。';
} elseif( $name != 'taro' && $pwd == 'pass' ) {
  echo '名前が間違っています。';
} else {
  echo '入力情報が間違っています';
}