<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">연수</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <h4 class="innerTitle">연수후기</h4>
            <div class="content noticeWrite">
                <form>
                    <div class="noticeWriteDetail">
                        <div>
                            <div>제목</div>
                            <div><input type="text"></div>
                        </div>
                        <div>
                            <div>작성자</div>
                            <div><input type="text"></div>
                        </div>
                        <div>
                            <div>이메일</div>
                            <div><input type="text"></div>
                        </div>
                    </div>
                    <div class="noticeWriteDetail2">
                        <textarea id="ir1" style="width: 100%; height:600px;"></textarea>
                        <div class="writeDetail2btn">
                            <button class="noticereg">등록</button>
                            <button class="noticereset"><a href="sub5.php" style="display:inline-block; width:100%; line-height:40px; color:#fff;">취소</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <script type="text/javascript" src="../smarteditor/js/HuskyEZCreator.js" charset="utf-8"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script id="smartEditor" type="text/javascript"> 
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",  //textarea ID 입력
            sSkinURI: "../smarteditor/SmartEditor2Skin.html",  //martEditor2Skin.html 경로 입력
            fCreator: "createSEditor2",
            htParams : { 
                // 툴바 사용 여부 (true:사용/ false:사용하지 않음) 
                bUseToolbar : true, 
                // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음) 
            bUseVerticalResizer : false, 
                // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음) 
            bUseModeChanger : false 
            }

        });

        function pasteHTML(filepath) {

        var sHTML = '';

        oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);

        }

        //전송버튼

        $("#insertBoard").click(function(){

        //id가 smarteditor인 textarea에 에디터에서 대입

        obj.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);            

        $("#insertBoardFrm").submit();

        });
    </script>

</body>
</html>