<?php
    session_start();
    if (isset($_SESSION['ingelogd'])) {
        echo $_SESSION['password'];
    } else {
        header("Location: index.php");
        // header("Location: http://myhost.com/mypage.php");
    }
?>