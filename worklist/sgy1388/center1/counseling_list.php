<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="counseling" class="content">
        <div class="center">
            <h5 class="sub_title">상담신청조회</h5>
            <div class="counseling_tab">
                   <ul>
                       <li class="on"><a href="counseling_list.php">대면상담</a></li>
                       <li><a href="meta_list.php">메타버스 상담</a></li>
                   </ul>
               </div>
            <div class="sub_inner">
               <form action="">
                   <div class="_top_area">
                       <p class="total">총 <span class="point_color">1</span> 건</p>
                       <div class="search_util">
                           <select name="" id="">
                               <option value="">전체</option>
                               <option value="">제목</option>
                               <option value="">내용</option>
                               <option value="">작성자</option>
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
                               <th width="10%;">번호</th>
                               <th>제목</th>
                               <th width="10%;">작성자</th>
                               <th width="10%;">작성일</th>
                               <th width="10%;">조회수</th>
                           </tr>
                       </thead>
                       <tbody>
                          <tr>
                               <td>10</td>
                               <td class="title"><a href="lock_2.php"><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>9</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>8</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>7</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>6</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>5</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>4</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>3</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>2</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td class="title"><a href=""><i class="xi-lock"></i>제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
               <div class="write_btn"><a href="counseling.php">상담신청</a></div>
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