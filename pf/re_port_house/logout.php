<?php
    session_start();

    session_unset();

    echo "<script>
            window.alert('로그아웃 되었습니다');
            window.location.href='index.php';
          </script>";
?>