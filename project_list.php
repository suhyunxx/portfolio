<?php include "inc/common.php" ?>
<body>
    <div class="sub_wrap">
        <div class="center">
            <div class="sub_top">
                <h1 class="mont-800">PROJECT LIST</h1>
            </div>
            <div class="project_list">
<!--3개씩 짝 맞춰야함-->
                <div>
                    <a href="worklist/pume/index.php">
                        <div class="img_wrap"><img src="../img/major_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">메이저위드</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_major.php">
                        <div class="img_wrap"><img src="../img/major_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">메이저위드</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_eruum.php">
                        <div class="img_wrap"><img src="../img/eruum_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">이룸리온 중견련</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_kapkt_re.php">
                        <div class="img_wrap"><img src="../img/kapkt_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">한국국공립유치원교원연합회_개인작업</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_sgy1388.php">
                        <div class="img_wrap"><img src="../img/sgy1388_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">대전서구청소년상담복지센터</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                   
                </div>
                <div>
                    <a href="project_view/project_plbio.php">
                        <div class="img_wrap"><img src="../img/plbio_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">피엘바이오</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                    
                </div>
                <div>
                    <a href="project_view/project_kwan.php">
                        <div class="img_wrap"><img src="../img/kwan_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">관현사</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_jbam.php">
                        <div class="img_wrap"><img src="../img/jbam_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">JBAM</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="project_view/project_kapkt.php">
                        <div class="img_wrap"><img src="../img/kapkt_thumb.jpg" alt=""></div>
                        <div class="bot">
                            <p class="bolder">한국국공립유치원교원연합회</p>
                            <p class="view_btn"><i class="xi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                
                
                
                

            </div>
            <div class="more_btn"><a href="">더보기</a></div>
            <div class="quick_back test">
                <a href="index.php#tab3">
                    <div class="back"><i class="xi-arrow-left"></i></div>
                    <p class="bolder">돌아가기</p>
                </a>
            </div>
        </div>
    </div>
    <script>
        const project_list = document.querySelectorAll(".project_list > div");
        const more_btn = document.querySelector(".more_btn");
        
        let cnt = 1;
        let num3 = 1;
        let i=0;
        let leng = project_list.length;
        console.log('총' + leng);
        
        for(let i=0; i<6; i++)
        {
            project_list[i].style.display = "block";
        }
    
        more_btn.addEventListener("click",function(e){
            
            cnt++;
            num3++;
            i++;
            
            e.preventDefault();
           
            if(i>=0 && i<(cnt+1)*3)
            {
                for(let j=6; j<(cnt+1)*3; j++)
                {
                    project_list[j].style.display = "block";
                }
                    
            }
            
            if(cnt===(leng/3-1))
            {
                more_btn.style.display = "none";
            }
            
              console.log(cnt);
                console.log(num3);
                console.log((leng/3)-1);
      

        });
        
        
        
    </script>
</body>
</html>