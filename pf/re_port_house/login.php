<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script defer src="js/mobile.js"></script>
    <script defer src="js/login.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div class="center">
            <div class="title">
                <h4>로그인</h4>
            </div>
            <div class="inputWrap">
                <form action="login_result.php" method="post">
                    <div><input type="text" class="id" name="id" id="id" placeholder="아이디를 입력해주세요"></div>
                    <div><input type="password" class="pass" name="pass" id="pass" placeholder="비밀번호를 입력해주세요"></div>
                    <div class="find">
                        <ul>
                            <li class="findid"><a href="#">아이디찾기</a></li>
                            <li><a href="#">비밀번호찾기</a></li>
                        </ul>
                    </div>
                    <div class="loginbtn"><button type="submit">로그인</button></div>
                    <div class="join">
                        <p>아직 회원이 아니신가요?</p>
                        <a href="join.php">회원가입</a>
                    </div>
                    <div class="naver">
                        <a href="#"><h4>네이버로 로그인</h4></a>
                    </div>
                    <div class="kakao">
                        <a href="#"><h4>카카오로 로그인</h4></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
</body>
</html>