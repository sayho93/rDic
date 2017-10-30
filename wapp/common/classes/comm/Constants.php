<?php
if(! class_exists("Constants") )
{
	class Constants 
	{
	
		/* 개발서버 */
		var $excelSavePath			= "D:/workspace_php/duratech/upload_excel" ;
		var $fileSavePath			= "C:/Users/p/workspace_php/duratech/wapp/upload_img" ;
		var $fileSavePath_720		= "C:/Users/p/workspace_php/duratech/720" ;				
		var $fileSavePath_640		= "C:/Users/p/workspace_php/duratech/640" ;				
		var $fileSavePath_480		= "C:/Users/p/workspace_php/duratech/480" ;				
		var $fileSavePath_320		= "C:/Users/p/workspace_php/duratech/320" ;				
		var $fileSavePath_100		= "C:/Users/p/workspace_php/duratech/100" ;				
		var $agreeInfoPath			= "C:/Users/p/workspace_php/duratech/setting/agree.txt";	// 이용약관 파일 경로
		var $privacyInfoPath		= "C:/Users/p/workspace_php/duratech/setting/privacy.txt";	// 개인정보취급방침 파일 경로
		

// 		var $logPath				= "C:/Users/p/workspace_php/groupby/log" ;	// simple 로그기록
		var $logPath				= "C:/Users/p/workspace_php/duratech/wapp/log" ;	// simple 로그기록
		var $documentRoot			= "C:/Users/p/workspace_php/duratech/wapp" ;	// simple 로그기록
		var $webRoot				= "http://localhost:916/wapp" ;
		var $con_domain				= "http://localhost:916" ;	// 메일에서 사용되는 도메인


        var $serverRoot				= "http://192.168.0.38:10030";
				
		var $fileSaveUrl			= "/upload_img/" ;
		var $fileSaveUrl_480		= "/480/" ;


 		var $dbHost					= "1.201.142.86" ;
 		var $dbName					= "RDic" ;
 		var $dbUser					= "root" ;
 		var $dbPass					= "$#@!richware7" ;
 		var $charset				= "utf8" ;
		
		
		/* System Constants */
		var $MEM_TYPE_NOMAL			= "N" ;		// 일반회원
		var $MEM_TYPE_HOLD			= "H" ;		// 멤버쉽 신청중
		var $MEM_TYPE_MEMBER		= "M" ;		// 멤버쉽 회원
		var $MEM_TYPE_VIP			= "V" ;		// VIP 회원
		
		var $MEM_REGI_EMAIL			= "E" ;		// 이메일 회원가입
		var $MEM_REGI_KAKAO			= "K" ;		// 카카오 회원가입
		var $MEM_REGI_FACEBOOK		= "F" ;		// 페이스북 회원가입
		
		var $STATUS_NOMAL			= "Y" ;		// 정상
		var $STATUS_STOP			= "N" ;		// 삭제(탈퇴)
		

		
		var $POINT_PAY_ADM			= "admin" ;		// 관리자 지급 이벤트
		var $POINT_PAY_RET			= "retrieve" ;	// 회수 이벤트
	
		

		var $BOARD_PUBLIC_NORMAL	= "Y" ;		// 일반글
		var $BOARD_PUBLIC_CLOSE		= "N" ;		// 비밀글
		
		var $POPUP_TYPE_OPEN		= "1" ;		// 실행시 팝업
		var $POPUP_TYPE_CLOSE		= "2" ;		// 종료시 팝업
		

		var $PAY_TYPE_USE			= "use" ;		// 실행시 팝업
		var $PAY_TYPE_ADMIN			= "admin" ;		// 종료시 팝업
		var $PAY_TYPE_RETRIEVE		= "retrieve" ;		// 종료시 팝업
		var $SEND_SMS_PHONE			= "01091047493";
		
		var $IS_DEBUG		=true;
		
		// 푸시 타입 정의
		public $PUSH_TYPE_BI = "100";
		public $PUSH_TYPE_BI_COM = "101";
		public $PUSH_TYPE_MS_OK = "201";
		public $PUSH_TYPE_MS_NO = "202";
		public $PUSH_TYPE_V_OK = "203";
		public $PUSH_TYPE_V_NO = "204";
		public $PUSH_TYPE_ADMIN = "999";
		
		
	}
}
?>