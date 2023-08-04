<?php
    session_start();

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    include "db_connect.php";

    $sql = "SELECT * FROM housejoin WHERE id='$id' AND pass='$pass' ";
    $result = mysqli_query($conn,$sql); 

    $exit_id = mysqli_fetch_assoc($result);

    if(isset($exit_id))
    {
        $_SESSION['username'] = $exit_id['name'];

?>

<script>
    window.alert("로그인 되었습니다");
    window.location.href="index.php";
</script>

<?php } else { ?>
<script>
    window.alert("아이디와 비밀번호를 다시 확인해주세요");
    window.location.href="login.php";
</script>

<?php } ?>