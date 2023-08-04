<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];

  include "db_connect.php";

  $sql = "INSERT INTO 2022intro(name,phone,content) VALUES('$name','$phone','$content')";

  mysqli_query($conn,$sql);


    $to = 'suhyunk519@naver.com';
    $title = '포트폴리오 문의';
    $text = $name."\n".$phone."\n".$content;

    mail($to, $title, $text);

  echo "<script> 
          window.alert('메일이 전송되었습니다.'); 
          window.location.href = 'index.php';
        </script>";

?>