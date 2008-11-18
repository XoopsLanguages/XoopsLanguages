<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","악의적인 공격으로부터 XOOPS를 보호해주는 모듈입니다.(ex:DoS , SQL Injection , and Variables contaminations.)<br />\n이 모듈의 블록의 작동을 최적화하기 위해서는 모든 페이지의,왼쪽 최상단부에, 손님접근가능 으로 배치시키시기 바랍니다.");

// Names of blocks for this module (Not all module has blocks)
//define($constpref."_BNAME1","Protector");
//define($constpref."_BDESC1","이 블록의 작동을 최적화하기 위해서는 모든 페이지의,왼쪽 최상단부에, 손님접근가능 으로 배치시키시기 바랍니다.");

// Menu
define($constpref."_ADMININDEX","Protect Center");
define($constpref."_ADVISORY","Security Advisory");
//define($constpref."_MYBLOCKSADMIN","블록&그룹 관리");
define($constpref."_PREFIXMANAGER","Prefix 관리자");
define($constpref.'_ADMENU_MYBLOCKSADMIN','액세스 권한') ;


// Configs
define($constpref.'_GLOBAL_DISBL','일시적 동작 중지');
define($constpref.'_GLOBAL_DISBLDSC','모듈의 모든 방어기능을..일시적으로 중지합니다.<br />문제해결후 중지를 반드시 해제하시기 바랍니다.');
define($constpref.'_RELIABLE_IPS','신용가능한 IP');
define($constpref.'_RELIABLE_IPSDSC','Dos공격 감지 예외처리할 신용가능한 IP 주소를  | 로 구분해 기술해 주세요!  ^ 는 문자열의 시작을, $ 은 끝을 의미합니다.');
define($constpref.'_LOG_LEVEL','로그 레벨');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','기한부 IP거부의 기한(초)');

define($constpref.'_LOGLEVEL0','로그출력않음');
define($constpref.'_LOGLEVEL15','위험성이 높은 것만 로그');
define($constpref.'_LOGLEVEL63','위험성이 낮은 것은 로그하지 않음');
define($constpref.'_LOGLEVEL255','모든 종류의 로그를 유효화');

define($constpref.'_HIJACK_TOPBIT','세션을 지속할 보호 비트(Protected IP bits)');
define($constpref.'_HIJACK_TOPBITDSC','세션 가로채기공격 대응책:<br />기본적으로 32(bit)로 모든 비트를 보호합니다.<br />Proxy를 이용하실 경우와 같이 액세스마다 IP주소가 변경되는 경우엔 변경되지 않는 최장 비트수를 지정하시면 됩니다.<br />(예) 192.168.0.0 - 192.168.0.255 의 범위에서 변동될 가능성이 있으실 경우, 24(bit)로 지정하시면 됩니다.');
define($constpref.'_HIJACK_DENYGP','세션내에서의 IP변동을 금지할 그룹');
define($constpref.'_HIJACK_DENYGPDSC','세션 하이재킹 방지(Anti Session Hi-Jacking):<br />세션내에서의 IP변동(다른 IP로부터의 접속)을 금지할 그룹을 지정해주세요 <br />(관리자에 대해 ON으로 설정하실 것을 권합니다.)');
define($constpref.'_SAN_NULLBYTE','null문자열을 스페이스로 변경(Sanitizing null-bytes)');
define($constpref.'_SAN_NULLBYTEDSC','문자열 종료 character인 "\\0" 는 악의적 공격에 이용될 수 있습니다.<br />발견시에 스페이스로 변경처리합니다.<br />(On설정을 강력 권고)');
define($constpref.'_DIE_NULLBYTE','null문자열 발견시 강제종료');
define($constpref.'_DIE_NULLBYTEDSC','문자열 종료 character인 "\\0" 는 악의적 공격에 이용될 수 있습니다.<br />(On설정을 강력 권고)');
define($constpref.'_DIE_BADEXT','실행가능파일의 업로드시에 강제종료');
define($constpref.'_DIE_BADEXTDSC','확장자 php 와 같이 서버에서의 악의적 실행가능이 있는 파일의 업로드가 있는 경우 강제종료합니다.<br />B-Wiki 또는 PukiWikiMod를 사용하며, 빈번히 PHP 소스파일을 첨부하곤 한다면 OFF로 설정하세요.');
define($constpref.'_CONTAMI_ACTION','변수 오염(contamination) 발견시의 조치');
define($constpref.'_CONTAMI_ACTIONDS','XOOPS의 시스템 글로벌변수를 덮어쓰기위한 공격을 발견한 경우의 처리를 선택해 주세요.<br />(기본설정은 강제종료)');
define($constpref.'_ISOCOM_ACTION','isolated comment 발견시의 조치');
define($constpref.'_ISOCOM_ACTIONDSC','SQL Injection 방지:<br />짝이 될 */이 없는 isolated comment ("/*") 가 발견된 경우의 조치를 정합니다. <br />"Sanitizing" 방법: 끝에 짝이 되는  "*/" 을 강제 첨가.<br />(Sanitizing 방법을 추천합니다.)');
define($constpref.'_UNION_ACTION','UNION 이 발견된 경우의 조치');
define($constpref.'_UNION_ACTIONDSC','SQL Injection 방지:<br />UNION문을 검출한 경우의 처리를 결정합니다.<br />"Sanitizing"방법: union 을 uni-on 으로 강제처리<br />(Sanitizing 방법을 추천합니다.)');
define($constpref.'_ID_INTVAL','id형 변수의 강제 캐스팅');
define($constpref.'_ID_INTVALDSC','변수명이 id로 끝날 경우 강제로 정수로 캐스팅처리합니다.<br />이 옵션은 XSS 나 SQL Injection의 방지에 효과적입니다만..<br />강제적 조치인만큼 일부 모듈에서 오작동을 유발할 수 있습니다. 주의바랍니다.');
define($constpref.'_FILE_DOTDOT','의심스러운 파일지정의 금지');
define($constpref.'_FILE_DOTDOTDSC','파일을 지정한다고 판단되는 리퀘스트문자열에서 ".."형태의 패턴을 제거합니다. ');

define($constpref.'_BF_COUNT','Brute Force 대책');
define($constpref.'_BF_COUNTDSC','패스워드에 대한 Brute Force공격에 대응합니다. 10분동안 여기서 지정한 횟수 이상 로그인에 실패할 경우 해당 IP를 금지처리합니다.');

define($constpref.'_DOS_SKIPMODS','DoS감시 대상에서 제외할 모듈');
define($constpref.'_DOS_SKIPMODSDSC','제외하길 원하는 모듈의 dirname을 | 로 구분해 입력해 주세요. 채팅계열 모듈등에 유효합니다.');

define($constpref.'_DOS_EXPIRE','DOS등의 감시시간(초)');
define($constpref.'_DOS_EXPIREDSC','DOS공격이나 악의적 crawler의 액세스 빈도를 추적하기위한 감시단위시간');

define($constpref.'_DOS_F5COUNT','F5 공격으로 인식처리할 회수');
define($constpref.'_DOS_F5COUNTDSC','DoS공격 방어<br />위에서 설정한 감시시간내에 이 회수이상,동일 URI에의 접속이 계속되었을 경우 공격으로 간주합니다.');
define($constpref.'_DOS_F5ACTION','F5 공격에 대한 대처');

define($constpref.'_DOS_CRCOUNT','악의적 crawler로 인식처리할 회수');
define($constpref.'_DOS_CRCOUNTDSC','악의적 crawler에 대한 대처<br />위에서 설정한 감시시간내에 이 회수이상, 사이트내를 돌아다니면 악의적 crawler로 간주합니다.');
define($constpref.'_DOS_CRACTION','악의적 Crawler에 대한 대처');

define($constpref.'_DOS_CRSAFE','화이트리스트 User-Agent');
define($constpref.'_DOS_CRSAFEDSC','무조건적으로 crawl을 허가할 Agent명을 perl 정규식 표현으로 적어주세요 <br /><br />예) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','없음 (로그만 기록)');
define($constpref.'_OPT_SAN','무해처리(Sanitizing)');
define($constpref.'_OPT_EXIT','강제종료');
define($constpref.'_OPT_BIP','금지IP등록(무기한)');
define($constpref.'_OPT_BIPTIME0','금지IP등록(기한부)');

define($constpref.'_DOSOPT_NONE','없음 (로그만 기록)');
define($constpref.'_DOSOPT_SLEEP','Sleep(비추천)');
define($constpref.'_DOSOPT_EXIT','exit');
define($constpref.'_DOSOPT_BIP','금지IP 리스트에 올림(무기한)');
define($constpref.'_DOSOPT_BIPTIME0','금지IP 리스트에 올림(기한부)');
define($constpref.'_DOSOPT_HTA','.htaccess에 DENY등록(테스트단계기능)');

define($constpref.'_BIP_EXCEPT','금지 IP 등록의 예외 그룹');
define($constpref.'_BIP_EXCEPTDSC','여기에 지정한 회원으로부터의 접속은 금지 IP 등록조건을 만족하여도 금지리스트에 올리지 않습니다. 단 로그인하지 않으면 회원판단이 불가능하므로 의미가 없습니다.<br />(관리자의 ON 설정 권함)');
//define($constpref.'_PATCH2092','Xoops 2.0.9.2 이하에 존재하는 취약점에 대한 패치');
define($constpref.'_DISABLES','XOOPS의 불안/위험한 기능의 무효처리');
/*
define($constpref.'_PASSWD_BIP','비상용 패스워드');
define($constpref.'_PASSWD_BIPDSC','만약 어떤 이유에서 관리자 자신이 금지IP처리되어진 경우 비상수단을 제공합니다.<br /> XOOPS_URL/modules/protector/admin/rescue.php 에 액세스한 후 여기에서 지정한 패스워드를 입력하시면 됩니다.<br />여기에 패스워드를 지정하지 않으면 비상수단 기능자체가 작동하지 않으므로 주의바랍니다.');
*/
define($constpref.'_BIGUMBRELLA','anti-XSS (BigUmbrella) 유효화');
define($constpref.'_BIGUMBRELLADSC','이 기능을 사용하시면 상당수의 XSS취약성을 무효화하실 수 있습니다. 물론 100% 방어는 못함!');

define($constpref.'_SPAMURI4U','SPAM 대책: 일반사용자에게 허용할 URL수');
define($constpref.'_SPAMURI4UDSC','관리자이외의 일반사용자의 투고내용에 지정한 수 이상의 URL이 포함되어져 있을 경우 이를 SPAM으로 간주합니다. 0 는 무제한가능을 의미!');
define($constpref.'_SPAMURI4G','SPAM 대책: 손님에게 허용할 URL수');
define($constpref.'_SPAMURI4GDSC','단순 방문객의 투고내용에 지정한 수 이상의 URL이 포함되어져 있을 경우 이를 SPAM으로 간주합니다. 0 는 무제한가능을 의미!');

}

?>