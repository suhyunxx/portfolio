<?

	if($req['st']){
			if($req['sn'] == "s1") $Where[] = " ( wr_subject like '%".$req['st']."%') ";
			if($req['sn'] == "s2") $Where[] = " ( wr_content like '%".$req['st']."%') ";
            if($req['sn'] == "s3") $Where[] = " ( wr_name like '%".$req['st']."%') ";
			if($req['sn'] == "") $Where[] = " ( wr_subject like '%".$req['st']."%' or wr_content like '%".$req['st']."%' or wr_name like '%".$req['st']."%' ) ";
	}

	if($req['sdate'] && $req['edate']){
		if($req['sd'] == "")   $Where[] = " ( reg_date between '".$req['sdate']." 00:00:00' and '".$req['edate']." 23:59:59') ";
	}
    if(!$req['pn']) $req['pn'] = 1;
	$Board['page_limit'] = 12;

    $Where = "";
	$WhereQuery = (is_array($Where))? " and (".implode(" AND ", $Where).")" : "";
	$Q['Limit'] = ($req['pn'] - 1)*$Board['page_limit'].", ".$Board['page_limit'] ;

	$TOTAL = $db -> Total("SELECT COUNT(*) FROM ".$Board['table_board']." where wr_id > 0");

	$NUMBER = $TOTAL - ($req['pn'] - 1)*$Board['page_limit'];
	$LIST = $db -> SelectList("SELECT * FROM ".$Board['table_board']." WHERE wr_id > 0 $WhereQuery order by wr_id desc limit ".$Q['Limit']);	
    echo "SELECT * FROM ".$Board['table_board']." WHERE wr_id > 0 $WhereQuery order by wr_id desc limit ".$Q['Limit'];
?>

<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="gallery1" class="content">
        <div class="center">
            <h5 class="sub_title">활동사진</h5>
            <div class="sub_inner">
               <form action="">
                   <div class="_top_area">
                       <p class="total">총 <span class="point_color"><?=$TOTAL?></span> 건</p>
                       <div class="search_util">
                           <select name="sn" id="sn">
                               <option value="" <?if($req['sn'] == ""){echo"selected";}?>>전체</option>
                               <option value="s1" <?if($req['sn'] == "s1"){echo"selected";}?>>제목</option>
                               <option value="s2" <?if($req['sn'] == "s2"){echo"selected";}?>>내용</option>
                               <option value="s3" <?if($req['sn'] == "s3"){echo"selected";}?>>작성자</option>
                           </select>
                           <div class="input_area">
                               <input type="text" name="st" placeholder="검색어를 입력하세요.">
                               <button><i class="xi-search"></i></button>
                           </div>
                       </div>
                   </div>
               </form>
               <div class="pic_list">
                   
                    <?
						if($LIST){
                            foreach($LIST as $key => $Value){
                                $Image = $db -> SelectOne("SELECT * FROM ".$Board['table_attach']." where bo_table = 'gallery03' and wr_id = ".$Value['wr_id']." order by wr_id desc ");

                                if(!$Image){
                                    preg_match("/<img.*src=\"(.*)\"/iU", $Value['wr_content'], $match);
                                    if ($match[1]) {

                                        $ContentImage = str_replace('sgy1388.or.kr','hansgy1388.cafe24.com',$match[1]);
                                    }
                                }
                                // echo "SELECT * FROM ".$Board['table_attach']." where bo_table = 'gallery03' and wr_id = ".$Value['wr_id']." order by wr_id desc ";
							?>
                            <div>
							<div>
                                <a href="gallery1.php?at=view&idx=<?=$Value['wr_id']?>">
                                <? if(!$Image['bf_file']){ ?>
                                    <div class="img_area"><img src="<?=$ContentImage?>" alt=""></div>
                                <? } else { ?>
                                    <div class="img_area"><img src="<?=dir?>data/file/<?=$Board['board_id']?>/<?=$Image['bf_file']?>" alt=""></div>
                                <? } ?>
                                    
                                    <div class="txt_area">
                                        <p class="pic_title"><?=$Value['wr_subject']?></p>
                                        <p><span class="_when"><?=substr($Value['wr_datetime'],0,10)?></span><span class="_who"><?=$Value['wr_name']?></span></p>
                                    </div>
                                </a>
                            </div>
                            </div>
							<?}}else{?>
                            <div>
                                <div class="txt_area">
                                    <p class="pic_title">게시물이 없습니다.</p>
                                </div>
                            </div>
							<?}?>
               </div>

               <!-- <? include('../include/paging_inc.php');?> -->
               <!-- <div class="page_wrap">
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
               </div> -->
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>