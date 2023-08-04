<?php
// 팝업
$sql_p = "Select * from G_Popup Where Display = 'Y' and now() between StartDate and EndDate";
$Popup = $db -> SelectList($sql_p);
if($Popup){
    foreach ($Popup as $pvalue) {
?>
<script type='text/javascript'>
//<![CDATA[
$(function() {
    if ( getCookie( "popuplayer<?=$pvalue['idx']?>" ) != "done" ) { 
        $("#popuplayer<?=$pvalue['idx']?>").fadeIn();
    }
});
//]]>
</script>
<div style="width:<?=$pvalue['Width']?>px; height:<?=$pvalue['Height']?>px; position:absolute; top:<?=$pvalue['toppos']?>px; left:<?=$pvalue['leftpos']?>px; z-index:9999; background-color:#FFF; border:1px solid #c0c0c0; display:none;" id="popuplayer<?=$pvalue['idx']?>">
<?=$pvalue['Content']?>
<form name="popuplayer<?=$pvalue['idx']?>">
<div style="width:100%; height:30px; text-align:right; height:20px; background-color:#000000; color:white"><span style="color:grey"><label><input type="checkbox" name="popupcheck" value="Y" style="border:none"> 오늘하루열지않음</label> <span style="display:inie-block:width:300px">&nbsp;</span></span> <a href="javascript:popupClose('popuplayer<?=$pvalue['idx']?>');"><span style="color:grey">Close</span></a>&nbsp;&nbsp;</div>
</form>
</div>
<?
    }
}	
?>
<script type='text/javascript'>
//<![CDATA[
function popupClose(cookiename){ 
    var f = eval("document."+cookiename);
    if(f.popupcheck.checked){
        setCookie( cookiename, "done" , 1); 
    }
    $("#"+cookiename).hide().html("");
} 

/*=================================================================================================
 cookie 
=================================================================================================*/
//쿠키생성 ;;
function setCookie( name, value, expiredays ){
    var today = new Date();
    today.setDate( today.getDate() + expiredays );
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
}

// 쿠키정보 ;;
function getCookie( name ) { 
    var nameOfCookie = name + "="; 
    var x = 0; 
    while ( x <= document.cookie.length ) { 
        var y = (x+nameOfCookie.length); 
        if ( document.cookie.substring( x, y ) == nameOfCookie ) { 
            if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 ) 
                endOfCookie = document.cookie.length; 
            return unescape( document.cookie.substring( y, endOfCookie ) ); 
        } 
        x = document.cookie.indexOf( " ", x ) + 1; 
        if ( x == 0 ) 
        break; 
    } 
    return ""; 
}
//]]>
</script>