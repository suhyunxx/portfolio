<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">신청내역</h5>
    </div>
    <div id="lock" class="content">
        <div class="center">
            <h5 class="sub_title">신청내역</h5>
            <div class="sub_inner">
<!--
              <div class="application_list_tab">
                   <ul>
                       <li><a href="application_list.php">대면상담</a></li>
                       <li class="on"><a href="application_list2.php">메타버스 상담</a></li>
                       <li><a href="application_list3.php">서비스 신청</a></li>
                   </ul>
               </div>
-->
               <form action="">
                   <div class="_top_area">
                       <p class="total">총 <span class="point_color">2</span> 건</p>
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
                               <td>2</td>
                               <td class="title"><a href="application_view2.php">제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td class="title"><a href="application_view2.php">제목<span class="comment_num">3</span></a></td>
                               <td>김수현</td>
                               <td>2022-12-22</td>
                               <td>1</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
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