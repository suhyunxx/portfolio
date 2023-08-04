<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis04">
        <h5 class="svis_title">알림마당</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="notice" class="content">
        <div class="center">
<!--            <h5 class="sub_title">공지사항</h5>-->
            <div class="sub_inner">
               <div class="noti_tab">
                   <ul>
                       <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                       <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                       <li><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
                       <li class="on"><a href="<?=dir?>noti/news.php">센터소식</a></li>
                   </ul>
               </div>
               <form action="">
                   <div class="_top_area">
                       <p class="total">총 <span class="point_color">1</span> 건</p>
                       <div class="search_util">
                           <select name="" id="">
                               <option value="">전체</option>
                               <option value="">제목</option>
                               <option value="">내용</option>
                               <option value="">작성자</option>
                               <option value="">청소년상담</option>
                               <option value="">꿈드림</option>
                           </select>
                           <div class="input_area">
                               <input type="text" placeholder="검색어를 입력하세요.">
                               <button><i class="xi-search"></i></button>
                           </div>
                       </div>
                   </div>
               </form>
               <div class="_list_area">
                   <table>
                       <thead>
                           <tr>
                               <th width="7%;">번호</th>
                               <th width="10%;">분야</th>
                               <th>제목</th>
                               <th width="7%;">작성자</th>
                               <th width="10%;">작성일</th>
                               <th width="7%;">조회수</th>
                           </tr>
                       </thead>
                       <tbody>
                          <tr class="fix">
                               <td><span class="_top_notice">공지</span></td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="news_view.php">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr class="fix">
                               <td><span class="_top_notice">공지</span></td>
                               <td><span class="_common_icon _dream">꿈드림</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>8</td>
                               <td><span class="_common_icon _dream">꿈드림</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>7</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>6</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>5</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>4</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>3</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>2</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td><span class="_common_icon _youth_counseling">청소년 상담</span></td>
                               <td class="title"><a href="">제목</a></td>
                               <td>관리자</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
<!--               <div class="write_btn"><a href="closed_consult_write.php">글쓰기</a></div>-->
               <div class="page_wrap">
                   <ul class="page">
                       <li class="first"><a href=""><i class="bi bi-chevron-double-left"></i></a></li>
                       <li class="prev"><a href=""><i class="bi bi-chevron-left"></i></a></li>
                       <li class="active"><a href="">1</a></li>
                       <li><a href="">2</a></li>
                       <li><a href="">3</a></li>
                       <li><a href="">4</a></li>
                       <li><a href="">5</a></li>
                       <li><a href="">6</a></li>
                       <li><a href="">7</a></li>
                       <li><a href="">8</a></li>
                       <li><a href="">9</a></li>
                       <li><a href="">10</a></li>
                       <li class="next"><a href=""><i class="bi bi-chevron-double-right"></i></a></li>
                       <li class="last"><a href=""><i class="bi bi-chevron-right"></i></a></li>
                   </ul>
               </div>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>