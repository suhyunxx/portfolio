<?php include "../inc/common.php"; ?>



<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="cont1">
            <div class="center">
                <div class="cont1_1 mainimg">
                    <img src="../img/main/visimg_220523.png"/>
                </div>
                <div class="cont1_2">
                    
                    <div class="dataWrap">
                        <div class="datatitlebox">
                           <h5 class="datatitle">자료실</h5>
                           <a href="../reference/sub1.php"><img src="../img/main/dataplus.png" alt="자료실 더보기 아이콘"/></a>
                        </div>
                        <div class="dataBox">
                            <div>
                                <a href="../reference/sub3.php">
                                    <div class="dataimgWrap"><img src="../img/main/dataicon1.png" alt="신문자료"/></div>
                                    <p class="font_light">신문자료</p>
                                </a>
                            </div>
                            <div>
                                <a href="../reference/sub5.php">
                                    <div class="dataimgWrap"><img src="../img/main/dataicon2.png" alt="법령자료"/></div>
                                    <p class="font_light">법령자료</p>
                                </a>
                            </div>
                            <div>
                                <a href="../reference/sub1.php">
                                    <div class="dataimgWrap"><img src="../img/main/dataicon3.png" alt="교수학습자료"/></div>
                                    <p class="font_light">교육프로그램 및 매뉴얼</p>
                                </a>
                            </div>
                            <div>
                                <a href="../reference/sub6.php">
                                    <div class="dataimgWrap"><img src="../img/main/dataicon4.png" alt="통계자료"/></div>
                                    <p class="font_light">통계자료</p>
                                </a>
                            </div>
                            </div>
                    </div>
                </div>
                <div class="quick">
                    <ul class="quick_list">
                        <li class="afterborder"><a href="#" style="line-height:22px;">QUICK<br>MENU</a></li>
                        <li><a href="../plaza/sub1.php">신문신청</a></li>
                        <li><a href="../plaza/sub2.php">캘린더신청</a></li>
                        <li><a href="https://www.moe.go.kr/main.do?s=moe" target="_blank">교육부</a></li>
                        <li><a href="https://www.kfta.or.kr/main/main.do" target="_blank">한국교총</a></li>
                        <li><a href="https://kicce.re.kr/main/index.do" target="_blank">육아정책연구소</a></li>
                        <li><a href="../quick/quick7_3.php">유아교육진흥원</a></li>
                        <li class="afterborder"><a href="https://e-childschoolinfo.moe.go.kr/main.do" target="_blank">유치원알리미</a></li>
                    </ul>
                    <!-- <div class="quick_top">
                        <a href="#">TOP</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="cont2">
            <div class="center">
                <div class="cont2_0">
                    <div class="loginBox">
                        <? if ($_SESSION['_MEMBER_']['ID']) { ?>
                            <h5 class="logintitle"><span>MEMBER</span>&nbsp;LOGIN</h5>
                            <div class="loginSet">
                                <div>
                                    <div class="idbox" style="line-height:21px;"><?=$UserName?>님<br> 환영합니다.</div>
                                    <div class="pwbox">&nbsp;</div>
                                </div>
                                <div style="width:30%; margin-left:5%; ">
                                    <div class="logingo">
                                        <button onclick="javascript:logOut();">LOGOUT</button>
                                    </div>
                                    <div class="">
                                        &nbsp;
                                    </div>
                                </div>
<!--                                <p>마이페이지</p>-->
                            </div>
                            <div class="login_bot">
                                <a href="../mypage/mypage.php" style="color:#0072b8">마이페이지</a>
                            </div>
                        <? } else {?>
                            <form name="login_form" method="post">
                            <input type="hidden" name="_referer_" value="<?=$_SERVER['PHP_SELF']?>">
                            <input type="hidden" name="return_url" value="<?=$return_url?>">
                                <h5 class="logintitle"><span>MEMBER</span>&nbsp;LOGIN</h5>
                                <div class="loginSet">
                                    <div>
                                        <div class="idbox"><input type="text" id="loginid" name="loginid" required placeholder="아이디" value="<?=$UserID?>"></div>
                                        <div class="pwbox"><input type="password" id="passwd" name="passwd" required placeholder="비밀번호"></div>
                                    </div>
                                    <div style="width:30%; margin-left:5%; ">
                                        <div class="logingo">
                                            <button onclick="javascript:loginSubmit();">LOGIN</button>
                                        </div>
                                        <div class="main_join">
                                            <button type="button" onclick="location.href='../userjoin/sub1.php';">회원가입</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="login_bot">
                                    <input class="idcheck checkboxdesign" type="checkbox" id="save_login" name="save_login" value="Y" <? if ($UserID) echo "checked";?>>
                                    <label for="save_login">아이디 저장</label>
                                    <a class="idpwSearch" href="../searchid/searchid.php">아이디/비밀번호 찾기</a>
                                </div>
                            </form>
                        <? } ?>
                    </div>
                </div>
                <div class="cont2_1">
                    
                    <ul class="main_tabmenu">
                        <li class="active"><a href="#">공지사항</a></li>
                        <li><a href="#">유아교육뉴스</a></li>
                        <li><a href="#">연합회소식</a></li>
                    </ul>
                    <div class="main_tabList">

                        <div class="tab1 active mtL">
                           <a class="tabplus" href="../newnews/sub1.php">더보기&nbsp;&nbsp;+</a>
                            <!-- <div class="tab_top">
                                <div class="newicon"><a href="#">NEW</a></div>
                                <div class="tab_top_right">
                                    <a href="../newnews/sub1_view.php">
                                        <p class="textover" >유치원 방과후 과정 담당교사 근무제 적용</p>
                                        <span class=".lightfont">2022.03.04</span>
                                    </a>
                                </div>
                            </div> -->
                            <div class="tab_bot">
                                <?php
                                $Board['board_id'] = "notice";
                                $Board['table_board'] = "G_Notice";
                                $WHERE = null;
                                $WHERE[] = " Status = 'Y' ";
                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                $OrderbyQuery = " Order by idx desc ";
                                $LimitQuery   = " Limit 4";
                                $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                                $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);
                                if($List){
                                    foreach($List as $key => $Value){
                                ?>
                                <div class="tab-title">
                                    <p style="width:300px;"><a href="/newnews/sub1.php?at=view&idx=<?=$Value['idx']?>"><?=highlight($req['st'],strCut($Value['Subject'],70,"..."))?></a></p>
                                    <span><?=str_replace("-",".",substr($Value["RegDate"],2,8))?></span>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab2 mtL">
                            <a class="tabplus" href="../newnews/sub3.php">더보기&nbsp;&nbsp;+</a>
                            <!-- <div class="tab_top">
                                <div class="newicon"><a href="#">NEW</a></div>
                                <div class="tab_top_right">
                                    <a href="../newnews/sub3_view.php">
                                        <p class="textover" >유치원 방과후 과정 담당교사 근무제 적용</p>
                                        <span class=".lightfont">2022.03.04</span>
                                    </a>
                                </div>
                            </div> -->
                            <div class="tab_bot">
                                <?php
                                $Board['board_id'] = "kidsnews";
                                $Board['table_board'] = "G_Notice";
                                $WHERE = null;
                                $WHERE[] = " Status = 'Y' ";
                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                $OrderbyQuery = " Order by idx desc ";
                                $LimitQuery   = " Limit 4";
                                $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                                $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);
                                if($List){
                                    foreach($List as $key => $Value){
                                ?>
                                <div class="tab-title">
                                    <p style="width:300px;"><a href="/newnews/sub3.php?at=view&idx=<?=$Value['idx']?>"><?=highlight($req['st'],strCut($Value['Subject'],70,"..."))?></a></p>
                                    <span><?=str_replace("-",".",substr($Value["RegDate"],2,8))?></span>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab3 mtL">
                            <a class="tabplus" href="../newnews/sub4.php">더보기&nbsp;&nbsp;+</a>
                            <!-- <div class="tab_top">
                                <div class="newicon"><a href="#">NEW</a></div>
                                <div class="tab_top_right">
                                    <a href="../newnews/sub4_view.php">
                                        <p class="textover" >유치원 방과후 과정 담당교사 근무제 적용</p>
                                        <span class=".lightfont">2022.03.04</span>
                                    </a>
                                </div>
                            </div> -->
                            <div class="tab_bot">
                                <?php
                                $Board['board_id'] = "news";
                                $Board['table_board'] = "G_Notice";
                                $WHERE = null;
                                $WHERE[] = " Status = 'Y' ";
                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                $OrderbyQuery = " Order by idx desc ";
                                $LimitQuery   = " Limit 4";
                                $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                                $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);
                                if($List){
                                    foreach($List as $key => $Value){
                                ?>
                                <div class="tab-title">
                                    <p style="width:300px;"><a href="/newnews/sub4.php?at=view&idx=<?=$Value['idx']?>"><?=highlight($req['st'],strCut($Value['Subject'],70,"..."))?></a></p>
                                    <span><?=str_replace("-",".",substr($Value["RegDate"],2,8))?></span>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cont2_2">
                    <h5>연합회홍보동영상</h5>
                    <div>
                        <video src="../img/main/kapkt.mp4" width="100%" height="150" autoplay controls muted loop playsinline></video>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="cont3">
            <div class="cont2_3">
                <div>
                    <a href="../quick/quick7_1.php">
<!--                        <h5>전국<br/>국공립유치원<br/>찾아보기 ></h5>-->
                        <h5 style="line-height:22px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;전국<br/>
                        &#10003; 국공립유치원<br/>
                        &#10003; 시도교육청<br/>
                        &#10003; 유아교육진흥원<br/>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;찾아보기 ☞
                        </h5>
                    </a>
                </div>
            </div>
            <div class="activity">
                <div class="act_wrap">
                    <h5 class="activitytitle">연합회 활동사진</h5>
                    <a href="../newnews/sub5.php"><img src="../img/main/dataplus.png"/></a>
                </div>
                <div class="activityTab">
                    <?php
                    $Board['board_id'] = "gallery";
                    $Board['table_board'] = "G_Board";
                    $Board['table_attach'] = "G_Board_Attach";
                    $WHERE = null;
                    $WHERE[] = " Status = 'Y' ";
                    $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                    $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                    $OrderbyQuery = " Order by idx desc ";
                    $LimitQuery   = " Limit 3";
                    $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                    $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);
                    if($List){
                        foreach($List as $key => $Value){
                          $imageSrc = $ImageGroup = null;
                          $AttachArray = AttachArray($Value['idx']);
                          if($AttachArray){
                              $FirstImage = $AttachArray[0];
                              $imageSrc = "<img src='"._CORE_."/act/thumb.php?src=".$FirstImage['SavePath']."/".$FirstImage['SaveName']."&x=800&y=800&f=0' >";
                          }
                    ?>
                    <div>
                        <a href="/newnews/sub5.php?at=view&idx=<?=$Value['idx']?>"><?=$imageSrc?></a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "../inc/footer.php"; ?>
    <script>
        function loginSubmit() {
            frm = document.login_form;
            if (!frm.loginid.value) {
                alert ("아이디를 입력해주세요.");
                frm.loginid.focus();
                return;
            }
            if (!frm.passwd.value) {
                alert ("비밀번호를 입력해주세요.");
                frm.passwd.focus();
                return;
            }
            frm.action = "../_core/act/?at=login";
            frm.submit();
        }

        function logOut() {
            window.location.href = "../_core/act/?at=logout"; 
        }
    </script>
</body>
</html>
<?php include "../inc/popup.php"; ?>