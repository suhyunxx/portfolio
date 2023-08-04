<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/board.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js/header.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="boardWrap">
            <div class="center">
                <div class="topText">
                    <h4>공지사항</h4>
                </div>
                <div class="board">
                    <div class="boardTop">
                        <h4 class="number">번호</h4>
                        <h4 class="title">제목</h4>
                        <h4 class="day">작성일</h4>
                    </div>
                    <?php
                        include "db_connect.php";

                        $sql = "SELECT num,title,day FROM notice";

                        $result = mysqli_query($conn,$sql);

                        for($i=0; $row=mysqli_fetch_assoc($result); $i++)
                        {
                            
                    ?>
                    <div class="boardContents">
                        <h4 class="number"><?php echo $row['num']; ?></h4>
                        <h4 class="title"><a href="detail_view.php?num=<?php echo $row['num']; ?>"><?php echo $row['title']; ?></a></h4>
                        <h4 class="day"><?php echo $row['day']; ?></h4>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
</body>
</html>