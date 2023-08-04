<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="gallery1_view" class="content">
        <div class="center">
            <h5 class="sub_title">비공개상담</h5>
            <div class="sub_inner">
                <form action="">
                    <div class="write_table">
                        <table>
                            <tr>
                                <th>성명</th>
                                <td><input class="input-width" type="text" placeholder="성명을 입력하세요."></td>
                            </tr>
                            <tr>
                                <th>제목</th>
                                <td><input type="text" placeholder="제목을 입력하세요."></td>
                            </tr>
                            <tr>
                                <th>첨부파일</th>
                                <td>
                                    <div class="file_upload">
                                        <input class="upload-name input-width" placeholder="첨부파일" >
                                        <label for="file">파일선택</label> 
                                        <input type="file" id="file" name="file1" onchange="changeValue(this)">
                                    </div>
                                    <script>
//                                        $("#file").on('change',function(){
//                                          var fileName = $("#file").val();
//                                          $(".upload-name").val(fileName);
//                                        });
                                        function changeValue(a)
                                        {
                                            console.log(a.files[0].name);
                                            $(".upload-name").val(a.files[0].name);
                                        }
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <th>비밀번호 입력</th>
                                <td>
                                    <input type="password">
                                </td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td>
                                    <textarea name="" ></textarea>
                                </td>
                            </tr>
                        </table>
                        <div class="btn_set">
                           <div class="confirm"><a href="closed_consult.php">확인</a></div>
                           <div class="reset"><a href="closed_consult.php">취소</a></div>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>