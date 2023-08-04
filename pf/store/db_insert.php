<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $month = $_POST['month'];
    $cost = $_POST['cost'];
    $title = $_POST['title'];
    $context = $_POST['context'];

    include "db_connect.php";

    $sql = "INSERT INTO sogongqna(name,email,phone,month,cost,title,context) VALUES('$name','$email','$phone','$month','$cost','$title','$context')";

    mysqli_query($conn,$sql);

    echo "<script>
          window.alert('문의사항이 등록되었습니다');
          window.location.href = 'index.php';
          </script>";

?>