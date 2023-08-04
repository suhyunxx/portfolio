<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지 자세히 보기</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js/header.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="detailWrap">
            <div class="center">
                <div class="topText">
                    <h4>공지사항</h4>
                </div>
                <?php
                    $num = $_GET['num'];

                    include "db_connect.php";

                    $sql = "SELECT * FROM notice WHERE num = $num";

                    $result = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_assoc($result);
                ?>
                <div class="detailTop"><h4><?php echo $row['title']; ?></h4></div>
                <div class="detailbot"><h4><?php echo $row['context']; ?></h4></div>
                <div class="listview"><a href="board.php">목록보기</a></div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
</body>
</html>