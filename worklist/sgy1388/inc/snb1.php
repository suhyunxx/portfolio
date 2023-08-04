
   <div class="_location_wrap">
    <ul class="_location center">
        <li class="_loc_home"><a href="<?=dir?>./"><i class="xi-home"></i></a></li>
        
        <?php
            
            $file_url = preg_replace("'\/[^/]*\.php$'i", "/", $_SERVER['PHP_SELF']); //상대경로 가져오기
            if($file_url == "/intro/")
            {

        ?>
        <li class="loc1">
            <a href="#">소개</a>
            <ul class="loc1_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">소개</a></li>
                <li><a href="<?=dir?>center1/company1.php">대전서구청소년상담복지센터</a></li>
                <li><a href="<?=dir?>center2/company2.php">대전서구학교밖청소년지원센터</a></li>
                <li><a href="<?=dir?>noti/notice.php">알림마당</a></li>
            </ul>
        </li>
        
        
        <?php
            
        }
        
        else if($file_url == "/center1/")
            
        {
            
        ?>
        
        <li class="loc1">
            <a href="#">대전서구청소년상담복지센터</a>
            <ul class="loc1_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">소개</a></li>
                <li><a href="<?=dir?>center1/company1.php">대전서구청소년상담복지센터</a></li>
                <li><a href="<?=dir?>center2/company2.php">대전서구학교밖청소년지원센터</a></li>
                <li><a href="<?=dir?>noti/notice.php">알림마당</a></li>
            </ul>
        </li>
        
        <?php
            
        }
        
        else if($file_url == "/center2/")
            
        {
            
        ?>
        
        <li class="loc1">
            <a href="#">대전서구학교밖청소년지원센터</a>
            <ul class="loc1_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">소개</a></li>
                <li><a href="<?=dir?>center1/company1.php">대전서구청소년상담복지센터</a></li>
                <li><a href="<?=dir?>center2/company2.php">대전서구학교밖청소년지원센터</a></li>
                <li><a href="<?=dir?>noti/notice.php">알림마당</a></li>
            </ul>
        </li>
        
        <?php
            
        }
        
        else if($file_url == "/noti/")
            
        {
            
        ?>
        
        <li class="loc1">
            <a href="#">알림마당</a>
            <ul class="loc1_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">소개</a></li>
                <li><a href="<?=dir?>center1/company1.php">대전서구청소년상담복지센터</a></li>
                <li><a href="<?=dir?>center2/company2.php">대전서구학교밖청소년지원센터</a></li>
                <li><a href="<?=dir?>noti/notice.php">알림마당</a></li>
            </ul>
        </li>
        
        
        
        <?php
        
            }
        ?>
        
        
        <?php
            
            if($_SERVER['REQUEST_URI'] == "/intro/greeting.php")
            {

        ?>

        <li class="loc2">
            <a href="#">인사말</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">인사말</a></li>
               <li><a href="<?=dir?>intro/history.php">연혁</a></li>
               <li><a href="<?=dir?>intro/org.php">조직도</a></li>
               <li><a href="<?=dir?>intro/map.php">오시는 길</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/intro/history.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">연혁</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">인사말</a></li>
               <li><a href="<?=dir?>intro/history.php">연혁</a></li>
               <li><a href="<?=dir?>intro/org.php">조직도</a></li>
               <li><a href="<?=dir?>intro/map.php">오시는 길</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/intro/org.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">조직도</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">인사말</a></li>
               <li><a href="<?=dir?>intro/history.php">연혁</a></li>
               <li><a href="<?=dir?>intro/org.php">조직도</a></li>
               <li><a href="<?=dir?>intro/map.php">오시는 길</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/intro/map.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">오시는 길</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>intro/greeting.php">인사말</a></li>
               <li><a href="<?=dir?>intro/history.php">연혁</a></li>
               <li><a href="<?=dir?>intro/org.php">조직도</a></li>
               <li><a href="<?=dir?>intro/map.php">오시는 길</a></li>
            </ul>
        </li>
        
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center1/company1.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">서구청소년상담복지센터는?</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center1/company1.php">서구청소년상담복지센터는?</a></li>
                <li><a href="<?=dir?>center1/business1.php">사업안내</a></li>
               <li><a href="<?=dir?>center1/gallery1.php">활동사진</a></li>
               <li><a href="<?=dir?>center1/closed_consult.php">비공개상담</a></li>
               <li><a href="<?=dir?>center1/counseling.php">상담신청</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center1/business1.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">사업안내</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center1/company1.php">서구청소년상담복지센터는?</a></li>
                <li><a href="<?=dir?>center1/business1.php">사업안내</a></li>
               <li><a href="<?=dir?>center1/gallery1.php">활동사진</a></li>
               <li><a href="<?=dir?>center1/closed_consult.php">비공개상담</a></li>
               <li><a href="<?=dir?>center1/counseling.php">상담신청</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center1/gallery1.php" || $_SERVER['REQUEST_URI'] == "/center1/gallery1_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">활동사진</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center1/company1.php">서구청소년상담복지센터는?</a></li>
                <li><a href="<?=dir?>center1/business1.php">사업안내</a></li>
               <li><a href="<?=dir?>center1/gallery1.php">활동사진</a></li>
               <li><a href="<?=dir?>center1/closed_consult.php">비공개상담</a></li>
               <li><a href="<?=dir?>center1/counseling.php">상담신청</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center1/closed_consult.php" || $_SERVER['REQUEST_URI'] == "/center1/lock.php" || $_SERVER['REQUEST_URI'] == "/center1/closed_consult_view.php" || $_SERVER['REQUEST_URI'] == "/center1/closed_consult_write.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">비공개상담</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center1/company1.php">서구청소년상담복지센터는?</a></li>
                <li><a href="<?=dir?>center1/business1.php">사업안내</a></li>
               <li><a href="<?=dir?>center1/gallery1.php">활동사진</a></li>
               <li><a href="<?=dir?>center1/closed_consult.php">비공개상담</a></li>
               <li><a href="<?=dir?>center1/counseling.php">상담신청</a></li>
            </ul>
        </li>
        
         <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center1/counseling.php" || $_SERVER['REQUEST_URI'] == "/center1/counseling_list.php" || $_SERVER['REQUEST_URI'] == "/center1/counseling_view.php" 
                   || $_SERVER['REQUEST_URI'] == "/center1/meta.php" || $_SERVER['REQUEST_URI'] == "/center1/meta_view.php" || $_SERVER['REQUEST_URI'] == "/center1/meta_list.php" || $_SERVER['REQUEST_URI'] == "/center1/lock_2.php" || $_SERVER['REQUEST_URI'] == "/center1/lock_3.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">상담신청</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center1/company1.php">서구청소년상담복지센터는?</a></li>
                <li><a href="<?=dir?>center1/business1.php">사업안내</a></li>
               <li><a href="<?=dir?>center1/gallery1.php">활동사진</a></li>
               <li><a href="<?=dir?>center1/closed_consult.php">비공개상담</a></li>
               <li><a href="<?=dir?>center1/counseling.php">상담신청</a></li>
            </ul>
        </li>
        
        
        
        
         <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center2/company2.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">서구학교밖청소년지원센터는?</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center2/company2.php">서구학교밖청소년지원센터는?</a></li>
                <li><a href="<?=dir?>center2/business2.php">사업안내</a></li>
               <li><a href="<?=dir?>center2/gallery2.php">활동사진</a></li>
               <li><a href="<?=dir?>center2/service.php">프로그램 신청</a></li>
            </ul>
        </li>    
        
           
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center2/business2.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">사업안내</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center2/company2.php">서구학교밖청소년지원센터는?</a></li>
                <li><a href="<?=dir?>center2/business2.php">사업안내</a></li>
               <li><a href="<?=dir?>center2/gallery2.php">활동사진</a></li>
               <li><a href="<?=dir?>center2/service.php">프로그램 신청</a></li>
            </ul>
        </li>    
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center2/gallery2.php" || $_SERVER['REQUEST_URI'] == "/center2/gallery2_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">활동사진</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>center2/company2.php">서구학교밖청소년지원센터는?</a></li>
                <li><a href="<?=dir?>center2/business2.php">사업안내</a></li>
               <li><a href="<?=dir?>center2/gallery2.php">활동사진</a></li>
               <li><a href="<?=dir?>center2/service.php">프로그램 신청</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/center2/service.php" || $_SERVER['REQUEST_URI'] == "/center2/service_list.php"|| $_SERVER['REQUEST_URI'] == "/center2/service_view.php" || $_SERVER['REQUEST_URI'] == "/center2/lock.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">프로그램 신청</a>
            <ul class="loc2_list loc_list">
               <li><a href="<?=dir?>center2/company2.php">서구학교밖청소년지원센터는?</a></li>
                <li><a href="<?=dir?>center2/business2.php">사업안내</a></li>
               <li><a href="<?=dir?>center2/gallery2.php">활동사진</a></li>
               <li><a href="<?=dir?>center2/service.php">프로그램 신청</a></li>
            </ul>
        </li>
        
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/noti/notice.php" || $_SERVER['REQUEST_URI'] == "/noti/notice_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">공지사항</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                <li><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
               <li><a href="<?=dir?>noti/news.php">센터소식</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/noti/program.php" || $_SERVER['REQUEST_URI'] == "/noti/program_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">프로그램</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                <li><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
               <li><a href="<?=dir?>noti/news.php">센터소식</a></li>
            </ul>
        </li>
        
         <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/noti/recruit.php" || $_SERVER['REQUEST_URI'] == "/noti/recruit_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">채용공고</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                <li><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
               <li><a href="<?=dir?>noti/news.php">센터소식</a></li>
            </ul>
        </li>
        
        <?php        
    
            }
        
            else if($_SERVER['REQUEST_URI'] == "/noti/news.php" || $_SERVER['REQUEST_URI'] == "/noti/news_view.php")

            {
        
        ?>

  
        <li class="loc2">
            <a href="#">센터소식</a>
            <ul class="loc2_list loc_list">
                <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                <li><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
               <li><a href="<?=dir?>noti/news.php">센터소식</a></li>
            </ul>
        </li>
        
   
       <?php

            }

        ?>
    </ul>
</div>