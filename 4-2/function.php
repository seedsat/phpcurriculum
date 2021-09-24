<?php 
    /**
     * $_SESSION["name"]が空だった場合、ログインページにリダイレクトする
     * @return void
     */
    function check_user_logged_in() {
        // セッション開始
        session_start();
        // セッションにuser_nameの値がなければlogin.phpにリダイレクト
        if (empty($_SESSION["name"])) {
            header("Location: login.php");
            exit;
        }
    }

    // 共通関数
    function check_empty_name_pwd($name, $pwd) {
        if(empty($name)) {
            echo 'ユーザー名を入力してください。';
        }

        if(empty($pwd)) {
            echo 'パスワードを入力してください。';
        }
    }
?>