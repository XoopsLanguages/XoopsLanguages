<?php

define("SHOW_HIDE_HELP","도움말 표시/숨기기" );

// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s extension" );
define("CHAR_ENCODING","Character encoding" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","필수요구사양" );
define("_PHP_VERSION","PHP 버전" );
define("RECOMMENDED_SETTINGS","권장 설정" );
define("RECOMMENDED_EXTENSIONS","권장 Extension" );
define("SETTING_NAME","설정명" );
define("RECOMMENDED","권장" );
define("CURRENT","현행" );
define("RECOMMENDED_EXTENSIONS_MSG","다음 extension들은 필수요구사양은 아닙니다만 특정한 기능(예:multi-language or RSS support)을 지원하기 위해 필요할 수 있으니 설치해 두실 것을 권합니다." );
define("NONE","없음" );
define("SUCCESS","성공" );
define("WARNING","주의" );
define("FAILED","실패" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS 설치마법사" );

define("LANGUAGE_SELECTION","설치 언어 선택" );
define("LANGUAGE_SELECTION_TITLE","사용하실 언어를 선택해 주세요!");		// L128
define("INTRODUCTION","소개" );
define("INTRODUCTION_TITLE","어서오세요. XOOPS 설치마법사 입니다." );		// L0
define("CONFIGURATION_CHECK","환경설정 체크" );
define("CONFIGURATION_CHECK_TITLE","서버 환경설정을 체크" );
define("PATHS_SETTINGS","디렉토리의 경로" );
define("PATHS_SETTINGS_TITLE","디렉토리의 경로" );
define("DATABASE_CONNECTION","데이타베이스 접속" );
define("DATABASE_CONNECTION_TITLE","데이타베이스 접속" );
define("DATABASE_CONFIG","데이타베이스 설정" );
define("DATABASE_CONFIG_TITLE","데이타베이스 설정" );
define("CONFIG_SAVE","설정 저장" );
define("CONFIG_SAVE_TITLE","시스템 환경설정을 저장" );
define("TABLES_CREATION","테이블 생성" );
define("TABLES_CREATION_TITLE","데이타베이스 테이블 생성" );
define("INITIAL_SETTINGS","초기 설정" );
define("INITIAL_SETTINGS_TITLE","초기 설정을 입력해 주세요!" );
define("DATA_INSERTION","데이타 삽입" );
define("DATA_INSERTION_TITLE","설정을 데이타베이스에 저장" );
define("WELCOME","환영합니다." );
define("WELCOME_TITLE","XOOPS의 세계에 오신 것을 환영합니다." );		// L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS의 경로(Physical Path)" );
define("XOOPS_URLS","XOOPS의 URL(Web locations)" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS 루트의 경로(Physical Path)" );
define("XOOPS_ROOT_PATH_HELP","XOOPS가 저장되어있는 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다." );

define("XOOPS_LIB_PATH_LABEL","XOOPS 라이브리 디렉토리" );
define("XOOPS_LIB_PATH_HELP","XOOPS 라이브러리 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다. 보안을 위해 " . XOOPS_ROOT_PATH_LABEL . "의 외부에 해당 디렉토리를 두시기 바랍니다.");
define("XOOPS_DATA_PATH_LABEL","XOOPS 데이타 디렉토리" );
define("XOOPS_DATA_PATH_HELP","XOOPS 데이타 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다. 보안을 위해 " . XOOPS_ROOT_PATH_LABEL . "의 외부에 해당 디렉토리를 두시기 바랍니다." );

define("XOOPS_URL_LABEL","XOOPS사이트의 URL" ); // L56
define("XOOPS_URL_HELP","XOOPS에 접속하기 위한 URL을 입력해 주세요! 끝에 [ / ] 를 붙이지 마시기 바랍니다." ); // L58

define("LEGEND_CONNECTION","서버 접속" );
define("LEGEND_DATABASE","데이타베이스서버" ); // L51

define("DB_HOST_LABEL","데이타베이스 서버 호스트명" );	// L27
define("DB_HOST_HELP",  "사용하는 데이타베이스 서버의 호스트명을 입력해 주세요. <br />잘 모르실 경우는 localhost 로 설정하시면 대부분 문제없이 작동합니다."); // L67
define("DB_USER_LABEL","데이타베이스 사용자계정명" );	// L28
define("DB_USER_HELP",  "사용하는 데이타베이스 서버에서의 사용자계정명을 입력해 주세요"); // L65
define("DB_PASS_LABEL","데이타베이스 패스워드" );	// L52
define("DB_PASS_HELP",  "위에서 입력한 데이타베이스 사용자 계정명의 패스워드를 입력해 주세요"); // L68
define("DB_NAME_LABEL","데이타베이스명" );	// L29
define("DB_NAME_HELP",  "사용할 데이타베이스명을 입력해 주세요!<br />존재하지 않을 경우엔 이 데이타베이스명으로 신규작성을 시도하게 됩니다."); // L64
define("DB_CHARSET_LABEL","데이타베이스 character set" );
define("DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define("DB_COLLATION_LABEL","데이타베이스 collation" );
define("DB_COLLATION_HELP",  "A collation is a set of rules for comparing characters in a character set.");
define("DB_PREFIX_LABEL","테이블 접두어" );	// L30
define("DB_PREFIX_HELP",  "각 테이블명에 이 접두어를 붙임으로써 기존의 테이블과 이름이 중복되는 것을 방지하게 됩니다. <br />잘 모르실 경우는 기본값을 사용해 주세요."); // L63
define("DB_PCONNECT_LABEL","데이타베이스에의 영구접속(persistent connection)" );	// L54
define("DB_PCONNECT_HELP",  "기본값은  아니요(NO) 입니다. 잘 모르실 경우는 아니요(NO) 를 선택해 주세요"); // L69
define("DB_DATABASE_LABEL","데이타베이스" );

define("LEGEND_ADMIN_ACCOUNT","관리자 계정" );
define("ADMIN_LOGIN_LABEL","관리자 아이디" ); // L37
define("ADMIN_EMAIL_LABEL","관리자 메일주소" ); // L38
define("ADMIN_PASS_LABEL","관리자 패스워드" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","관리자 패스워드(재입력)" ); // L74

// Buttons
define("BUTTON_PREVIOUS","뒤로" ); // L42
define("BUTTON_NEXT","다음" ); // L47

// Messages
define("XOOPS_FOUND","%s 을 찾았습니다." );
define("CHECKING_PERMISSIONS","파일과 디렉토리의 권한(퍼미션) 체크" ); // L82
define("IS_NOT_WRITABLE","파일 %s 은(는) 쓰기불가 상태입니다. 쓰기가능으로 설정해주세요!(chmod 666)" ); // L83
define("IS_WRITABLE","파일 %s 은(는) 쓰기가능 상태입니다." ); // L84

define("XOOPS_PATH_FOUND","패스(Path)를 찾았습니다." );

define("READY_CREATE_TABLES","XOOPS용 테이블이 존재하지 않습니다.<br />지금부터 설치마법사가 XOOPS용 테이블을 신규작성하게 될 것입니다.<br />계속 진행하시려면 <em>다음</em> 버튼을 클릭해주세요!" );
define("XOOPS_TABLES_FOUND","XOOPS의 테이블이 데이타베이스에 이미 존재합니다. 다음 단계로 진행하시려면 다음 버튼을 클릭해 주세요!" ); // L131
define("XOOPS_TABLES_CREATED","XOOPS용 테이블이 성공적으로 생성되어졌습니다.<br />다음 단계로 진행하시려면 <em>다음</em> 버튼을 클릭해 주세요!" );
define("READY_INSERT_DATA","지금부터 설치마법사가 데이타베이스에 초기 데이타를 삽입하게 될 것입니다." );
define("READY_SAVE_MAINFILE","지금부터 설치마법사가 지정하신 설정을 <em>mainfile.php</em>에 저장하게 될 것입니다.<br />계속 진행하시려면 <em>다음</em> 버튼을 클릭해 주세요!" );
define("SAVED_MAINFILE","mainfile.php 에 설정 저장" );
define("SAVED_MAINFILE_MSG","설치마법사가 지정하신 설정을 <em>mainfile.php</em>에 저장처리하였습니다. 다음 단계로 진행하시려면 <em>다음</em> 버튼을 클릭해 주세요!" );
define("DATA_ALREADY_INSERTED","XOOPS용 데이타가 데이타베이스 존재합니다.<br />다음 단계로 진행하시려면 <em>다음</em> 버튼을 클릭해 주세요!" );
define("DATA_INSERTED","초기 데이타가 데이타베이스에 삽입되어졌습니다.<br />다음 단계로 진행하시려면 <em>다음</em> 버튼을 클릭해 주세요!" );


// %s is database name
define("DATABASE_CREATED","데이타베이스 %s 을 작성하였습니다." ); // L43
// %s is table name
define("TABLE_NOT_CREATED","데이타베이스 %s의 작성에 실패하였습니다." ); // L118
define("TABLE_CREATED","%s 테이블을 작성하였습니다." ); // L45
define("ROWS_INSERTED","%d 개의 데이타가 데이타베이스 %s에 삽입되었습니다." ); // L119
define("ROWS_FAILED","%d 개의 데이타가 데이타베이스 %s에 삽입되는데 실패하였습니다." ); // L120
define("TABLE_ALTERED","테이블 %s 를 업그레이드했습니다."); // L133
define("TABLE_NOT_ALTERED","테이블 %s 의 업그레이드에 실패하였습니다."); // L134
define("TABLE_DROPPED","테이블 %s 를 삭제하였습니다."); // L163
define("TABLE_NOT_DROPPED","테이블 %s 의 삭제에 실패하였습니다."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","지정된 디렉토리에 액세스할수가 없습니다. 디렉토리가 존재하는지 혹은 읽기권한이 있는지 확인해 보시기 바랍니다." );
define("ERR_NO_XOOPS_FOUND","지정된 디렉토리에서 XOOPS를 찾을 수가 없습니다." );
define("ERR_INVALID_EMAIL","올바르지 않은 메일주소입니다." ); // L73
define("ERR_REQUIRED","필요한 정보를 모두 입력해 주시기 바랍니다." ); // L41
define("ERR_PASSWORD_MATCH","두 패스워드가 일치하지 않습니다." );
define("ERR_NEED_WRITE_ACCESS","다음의 디렉토리들을 쓰기가능으로 설정해 주시기 바랍니다. (예: UNIX/LINUX 서버 'chmod 777 directory_name' , Windows서버 읽기전용해제)" ); // L72
define("ERR_NO_DATABASE","데이타베이스의 작성에 실패하였습니다. 설정값이 올바른지 확인한 후 다시 처음부터 다시시도하시거나 관리자에게 해당사항을 문의해 보시기 바랍니다." ); // L31
define("ERR_NO_DBCONNECTION","데이타베이스 서버에 접속하는데 실패하였습니다." ); // L106
define("ERR_WRITING_CONSTANT","상수 %s 의 기록에 실패하였습니다." ); // L122

define("ERR_COPY_MAINFILE","mainfile.php 파일의 작성에 실패하였습니다." );
define("ERR_WRITE_MAINFILE","mainfile.php 파일에의 쓰기에 실패하였습니다. 파일권한설정이 올바른지 다시 확인해 주시기 바랍니다.");
define("ERR_READ_MAINFILE","mainfile.php 파일을 읽을 수가 없습니다." );

define("ERR_INVALID_DBCHARSET","character set '%s' 은 지원되지 않습니다." );
define("ERR_INVALID_DBCOLLATION","collation '%s' 은 지원되지 않습니다." );
define("ERR_CHARSET_NOT_SET","XOOPS 데이타베이스의 Default character set이 지정되어 있지 않습니다." );

//


define("_INSTALL_CHARSET","UTF-8");
?>