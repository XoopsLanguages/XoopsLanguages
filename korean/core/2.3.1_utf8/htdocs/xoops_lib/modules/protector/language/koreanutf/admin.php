<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','액세스권한');
define('_MD_A_MYMENU_MYPREFERENCES','일반설정');

// index.php
define("_AM_TH_DATETIME","일시");
define("_AM_TH_USER","User");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","종류");
define("_AM_TH_DESCRIPTION","상세정보");

define("_AM_TH_BADIPS" , "금지 IP 리스트<br /><br />한줄에 하나씩 IP주소 기재하시기 바랍니다. 공백으로 두시면 모두 허가하게 됩니다." ) ;
//define("_AM_TH_ENABLEIPBANS" , "IP주소에 의한 접근금지를 사용함" ) ;

define("_AM_TH_GROUP1IPS" , '관리자 그룹(1) 허가 IP<br /><br />한줄에 하나씩 IP주소 기재하시기 바랍니다. 공백으로 두시면 모두 허가하게 됩니다.<br />192.168. means 192.168.*<br />blank means all IPs are allowed</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "로그를 컴팩트화" ) ;
define("_AM_BUTTON_COMPACTLOG" , "컴팩트화 실행" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "중복된(IP,Type) 레코드를 삭제처리합니다." ) ;
define("_AM_LABEL_REMOVEALL" , "모든 레코드를 삭제:" ) ;
define("_AM_BUTTON_REMOVEALL" , "모두삭제 실행" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "모든 로그를 삭제처리합니다. 계속 하시겠습니까?" ) ;

define("_AM_LABEL_REMOVE" , "체크한 레코드를 삭제함:" ) ;
define("_AM_BUTTON_REMOVE" , "삭제실행" ) ;
define("_AM_JS_REMOVECONFIRM" , "정말로 삭제하실 건가요?" ) ;
//define("_AM_MSG_PRUPDATED" , "설정을 성공적으로 갱신하였습니다!" ) ;
define("_AM_MSG_REMOVED" , "삭제하였습니다." ) ;

define("_AM_MSG_IPFILESUPDATED" , "IP 리스트파일을 갱신하였습니다." ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "거부IP(bad ip)리스트파일을 열수가 없습니다." ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "관리자용IP 리스트파일을 열수가 없습니다." ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "configs 디렉토리를 쓰기가능으로 설정해 주세요!: %s" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "접두어(Prefix) 관리자" ) ;
define("_AM_MSG_DBUPDATED" , "데이타베이스가 성공적으로 갱신되었습니다." ) ;
define("_AM_CONFIRM_DELETE" , "모든 테이블이 삭제됩니다. 계속하시겠습니까?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "테이블 접두어(prefix)를 변경하실 경우는 <br />%s/mainfile.php 의 다음 부분을 직접 편집해주셔야 합니다.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Insecure");

define("_AM_ADV_REGISTERGLOBALS","현 설정은 변수와 관련된 다양한 형태의 공격을 가능하게 합니다. <br />만약 .htaccess 을 사용할 수 있는 서버라면 즉시 관련설정을 하시기 바랍니다. 자세한 사항은 관리자에게 문의하시기 바랍니다.");
define("_AM_ADV_ALLOWURLFOPEN","현 설정은 외부의 스크립트를 실행가능케할 위험성이 있습니다 .<br />이 설정의 변경을 위해선 서버관리자권한이 필요합니다.<br />서버관리자라면 php.ini , httpd.conf 의 관련설정을 편집하시기 바랍니다.<br /><b>Sample of httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />만약 관리자가 아니라면 서버관리자에게 문의하시기 바랍니다.");
define("_AM_ADV_USETRANSSID","세션 ID가 자동적으로 링크에 표시되어지는 설정으로 되어 있습니다. 세션 가로채기공격의 위험이 있으니 XOOPS_ROOT_PATH에 .htaccess을 다음과 같이 작성하시기 바랍니다.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","테이블 접두어(Prefix)가 기본값인 xoops인 경우는 'SQL Injections'의 위험도가 높아집니다.<br />'Isolated Comments필터링'(Force sanitizing *) 등 SQL Injection 방지관련의 설정을 ON으로 해 주시기 바랍니다.");
define("_AM_ADV_LINK_TO_PREFIXMAN","접두어(prefix) 관리자로");
define("_AM_ADV_MAINUNPATCHED","Xoops Protector가 제기능을 다하기 위해선 mainfile.php을 변경할 필요가 있습니다. <br />README를 숙독하신 후 mainfile.php 관련 변경을 해 주시기 바랍니다.");
//define("_AM_ADV_RESCUEPASSWORD","비상용 패스워드(Rescue Password)");
//define("_AM_ADV_RESCUEPASSWORDUNSET","미설정");
//define("_AM_ADV_RESCUEPASSWORDSHORT","가능한 6 자이상으로 설정하시기 바랍니다. (min 6 charactors)");

define("_AM_ADV_SUBTITLECHECK","Protector 작동 체크");
//define("_AM_ADV_AT1STSETPASSWORD","자기자신이 금지 IP 리스트에 올라갈 가능성도 배제할 수 없으므로 먼저 비상용 패스워드를 설정하시기 바랍니다.");
define("_AM_ADV_CHECKCONTAMI","변수 오염");
define("_AM_ADV_CHECKISOCOM","고립 코멘트");


// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tables");
define("_AM_EZ_UPDATED","Updated");
define("_AM_EZ_COPY","Copy");
define("_AM_EZ_ACTIONS","Actions");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Delete");


?>