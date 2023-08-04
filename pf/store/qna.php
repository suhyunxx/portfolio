<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>창업문의</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/qna.css">
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="sec1">
            <div class="center">
                <div class="topTitle">
                    <h3>창업 온라인 문의</h3>
                </div>
            </div>
        </div>
        <div id="sec2">
            <div class="center">
                <form action="db_insert.php" method="post">
                    <div>
                        <label for="name">이름</label>
                        <input type="text" id="name" name="name" placeholder="이름을 입력해주세요">
                    </div>
                    <div>
                        <label for="email">이메일</label>
                        <input type="text" id="email" name="email" placeholder="이메일 주소를 입력해주세요">
                    </div>
                    <div>
                        <label for="phone">휴대폰</label>
                        <input type="text" id="phone" name="phone" placeholder="휴대폰 번호를 입력해주세요">
                    </div>
                    <div>
                        <label for="month">창업시기</label>
                        <select id="month" name="month">
                            <option>선택하세요</option>
                            <option>1개월이내</option>
                            <option>1~3개월</option>
                            <option>4~6개월</option>
                            <option>6~12개월</option>
                        </select>
                    </div>
                    <div>
                        <label for="cost">예상창업비용</label>
                        <select id="cost" name="cost">
                            <option>선택하세요</option>
                            <option>1억 이하</option>
                            <option>1억~1.5억</option>
                            <option>1.5억~1억</option>
                            <option>2억 이상</option>
                        </select>
                        <p>※ 점포비용 포함</p>
                    </div>
                    <div>
                        <label for="title">문의하기</label>
                        <input type="text" placeholder="제목을 입력해주세요" id="title" name="title">
                        <textarea id="context" name="context" placeholder="내용을 입력하세요"></textarea>
                    </div>
                    <button type="submit" id="finish">보내기</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
    <script src="js/header.js"></script>
</body>
</html>