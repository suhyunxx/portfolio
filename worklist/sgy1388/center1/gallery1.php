<?php
error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING );
ini_set("display_errors", 1);
	require_once "../_core/_lib.php";
    include "../inc/common.php";
	/*-------------------------------------------------------------------------------------------------
	▶ 변수 체크 */

	// 변수 생성 예시
	 $req['pn']   = Request('pn');  // 정렬순서
	 $link['pn']  = $req['pn'];     // 링크생성
	

	$req['ss']   = Request('ss');  // 판매상태
	$link['ss']  = $req['ss'];     // 판매상태

	//require_once "../_gmanager/include/default.php"; // 공통으로 사용되는 변수생성 & 공통 환경 설정

	/*-------------------------------------------------------------------------------------------------
	▶ 게시판 정보 */	
	$Board['board_id'] = "gallery03";
	$Board['board_name'] = "활동사진";
	$Board['table_board'] = "g5_write_gallery03";
    $Board['table_attach'] = "g5_board_file";

	//$_Category = getCategory($Board);

	/*-------------------------------------------------------------------------------------------------
	▶ 페이지 호출 */
	$req['at'] = Request('at');
	$req['at'] = (isset($_GET['at']))? $_GET['at'] : "";

	$include_page = null;
	switch($req['at']){
		case "view": 
			$include_page = "gallery1_view.php";
		break;
		case "write": 
		case "modify": 
		case "reply": 
			$include_page = "gallery1_form.php"; break;
		case "dataprocess": 
			$include_page = "gallery1_action.php"; break;
		case "download": 
			download();		break;
		default:
			$include_page = "gallery1_list.php"; break;
	}

	if($include_page && file_exists($include_page)) include $include_page;
?>
