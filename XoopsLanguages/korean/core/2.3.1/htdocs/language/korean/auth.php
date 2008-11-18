<?php
// $Id: $
//%%%%%%		File Name auth.php 		%%%%%

define('_AUTH_MSG_AUTH_METHOD',"%s 인증방식을 사용");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP extension 의 로딩에 실패하였습니다.(PHP 설정[php.ini]을 다시 확인해 주세요!)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"서버 접속에 실패하였습니다.");
define('_AUTH_LDAP_USER_NOT_FOUND',"멤버 %s 의 정보가 존재하지 않습니다 - 디렉토리서버 (%s) in %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"%s 엔트리에 액세스할 수 없습니다.");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"XOOPS 데이타베이스에 해당 사용자정보가 존재하지 않습니다.: %s <br>" .
		"사용자정보를 다시 한번 확인해 주세요!");
define('_AUTH_LDAP_START_TLS_FAILED',"TLS 연결에 실패하였습니다.");		

?>