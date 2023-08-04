<div id="paging">
	


<?
  // 페이징
	$PageHTML = "";
	if($TOTAL > 0){
		$cfg = $Board;
		$cfg['btn_first'] = "<img src=\"/img/sub/bo_prev_all.jpg\" alt=\"처음\" />";
		$cfg['btn_prev']  = "<img src=\"../img/sub/bo_prev.jpg\" alt=\"이전10\" />";
		$cfg['btn_next']  = "<img src=\"../img/sub/bo_next.jpg\" alt=\"다음10\" />";
		$cfg['btn_last']  = "<img src=\"../img/sub/bo_next_all.jpg\" alt=\"마지막\" />";
		$cfg['page_sp']   = "";

		$func = (!isset($func))? "goPage" : $func;
		$req['pn']   = (!$req['pn'])? 1 : $req['pn'];
		$cfg['page_limit']   = (!isset($cfg['page_limit']))? 10: $cfg['page_limit'];
		$cfg['page_block']   = (!isset($cfg['page_block']))? 10: $cfg['page_block'];

		// 전체 페이지
		$totalpage = ceil($TOTAL/$cfg['page_limit']);


		// 시작페이지
		if ( $req['pn'] % $cfg['page_block'] == 0 ) $startpage = $req['pn'] - ( $cfg['page_block'] - 1 );
		else $startpage = intval( $req['pn'] / $cfg['page_block'] ) * $cfg['page_block'] + 1;

		 // 이전 페이지 설정
		$prevpage = $startpage - 1;

		// 다음 페이지 설정
		$nextpage = $startpage + $cfg['page_block'];

		// 블럭내 마지막 페이지
		$lastpage = $startpage + ($cfg['page_block'] - 1);
		if($lastpage > $totalpage)$lastpage = $totalpage;

		//전체 마지막페이지
		if ( $totalpage / $cfg['page_block'] > 1 ) $laststartpage = (intval($totalpage / $cfg['page_block']) * $cfg['page_block'] ) + 1;
		else $laststartpage = 1;

		 //$PageHTML .= "<table><tr>";
		/*-------------------------------------------------------------------------------------------------
		▶ 맨 처음으로 */
		//$PageHTML .= "<td class='prevbtn'>";
		if($cfg['btn_first'] != ""){
			if ( $req['pn'] > $cfg['page_block'] ) $PageHTML .= " <a href='javascript:$func(1);' class='prev_all'>".$cfg['btn_first']."</a>";
			else $PageHTML .= "<a href=\"#\" class='prev_all'>".$cfg['btn_first']."</a>";
		}
		//$PageHTML .= "</td>";

		
		/*-------------------------------------------------------------------------------------------------
		▶ 이전 10 */
		//$PageHTML .= "<td class='prevbtn'>";
		if ( $totalpage > $cfg['page_block'] && $req['pn'] > $cfg['page_block'] ) $PageHTML .= " <a href='javascript:$func(".$prevpage.");' class='prev'>".$cfg['btn_prev']."</a>";
		else $PageHTML .= "<a href=\"#\" class='prev'>".$cfg['btn_prev']."</a>";
		//$PageHTML .= "</td>";

		/*-------------------------------------------------------------------------------------------------
		▶ 페이징 리스트 */
		//$PageHTML .= "<td><ul class='clearfix'>";
		if ( $totalpage <= 1 ) {
				//$PageHTML .= "<li><span class=\"cur_page\">1</span></li>";
				$PageHTML .= "<a href='#' class='num on'>1</a>";
		} else {
			// 페이지 링크 번호 나열
			if($startpage < 1 )$startpage = 1;
			for ( $i = $startpage ; $i <= ($startpage + ($cfg['page_block'] - 1) ) ; $i++ ) {

				//$PageHTML .= "<li>";
				if( $req['pn'] != $i ) $PageHTML .= "<a href='javascript:$func(".$i.")' class='num'>".$i."</a>";
				else	$PageHTML .= "<a href='#' class='num on'>$i</a>";
				//$PageHTML .= "</li>";

				//if($i < $lastpage) $PageHTML .= "".$cfg['page_sp'].""; // 페이지 번호사이의 구분자
				if ( $i >= $totalpage ) {
					break;
				}
			}
		}
		//$PageHTML .= "</ul></td>";

		/*-------------------------------------------------------------------------------------------------
		▶ 다음 10 */
		//$PageHTML .= "<td class='nextbtn'>";
		if ( $startpage + $cfg['page_block'] - 1 < $totalpage) $PageHTML .= " <a href='javascript:$func(".$nextpage.")' class='next' >".$cfg['btn_next']."</a>";
		else $PageHTML .= "<a href=\"#\"  class='next'>".$cfg['btn_next']."</a>";
		//$PageHTML .= "</td>";
		/*-------------------------------------------------------------------------------------------------
		▶ 맨 끝으로 */
		//$PageHTML .= "<td class='nextbtn'>";
		if($cfg['btn_last'] != ""){
			if ( $req['pn'] < intval($laststartpage) ) $PageHTML .= " <a href='javascript:$func(".$totalpage.");'  class='next_all'>".$cfg['btn_last']."</a>";
			else 	$PageHTML .= "<a href=\"#\" class='next_all'>".$cfg['btn_last']."</a>";
		}
		//$PageHTML .= "</td></tr></table>";
	}
	echo $PageHTML;
?>

</div>

<script>
function goPage(i){
	if($("input[name=pagenumber]").length > 0){
		frm = $("input[name=pagenumber]").eq(0).parent();
		$("input[name=pagenumber]").eq(0).val(i);
	}else{
		frm = $("input[name=pn]").eq(0).parent();
		$("input[name=pn]").eq(0).val(i);	
	}
	frm.action = "";
	frm.submit();
}
</script>