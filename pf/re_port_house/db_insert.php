<?php

  $id = $_POST['id'];
  $pass = $_POST['pass'];
  $passch = $_POST['passch'];
  $name = $_POST['name'];

  $birth_first = $_POST['birth_first'];
  $birth_second = $_POST['birth_second'];
  $birth_third = $_POST['birth_third'];

  $birth = $birth_first."년".$birth_second."월".$birth_third."일";

  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  include "db_connect.php";

  $sql = "INSERT INTO housejoin(id,pass,passch,name,birth,gender,email,phone) VALUES('$id','$pass','$passch','$name','$birth','$gender','$email','$phone')";

  mysqli_query($conn,$sql);

  echo "<script> 
          window.alert('회원가입이 완료되었습니다'); 
          window.location.href = 'index.php';
        </script>";

?>