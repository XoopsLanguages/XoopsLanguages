<?php

define("LEGEND_XOOPS_PATHS","XOOPS의 경로(Physical paths)" );
define("LEGEND_DATABASE","데이타베이스 Character Set" );

define("XOOPS_LIB_PATH_LABEL","XOOPS 라이브리 디렉토리" );
define("XOOPS_LIB_PATH_HELP","XOOPS 라이브러리 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다. 보안을 위해 " . XOOPS_ROOT_PATH . "의 외부에 해당 디렉토리를 두시기 바랍니다." );
define("XOOPS_DATA_PATH_LABEL","XOOPS 데이타 디렉토리" );
define("XOOPS_DATA_PATH_HELP","XOOPS 데이타 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다. 보안을 위해 " . XOOPS_ROOT_PATH . "의 외부에 해당 디렉토리를 두시기 바랍니다." );

define("DB_COLLATION_LABEL","데이타베이스 character set and collation" );
define("DB_COLLATION_HELP",  "데이타베이스에 익숙하지 않으신 분들은 설정을 변경하지 마실 것을 권합니다. 설정을 변경하실 분은 주위의 전문가분에게 문의해 보신 후 설정을 변경하시기 바랍니다.(As of 4.12 MySQL supports custom character set and collation. However it is more complex than expected, so DON'T make any change unless you are confident with your choice.)");
define("DB_COLLATION_NOCHANGE",  "변경하지 않음");

define("XOOPS_PATH_FOUND","패스(Path)를 찾았습니다." );
define("ERR_COULD_NOT_ACCESS","지정된 디렉토리에 액세스할수가 없습니다. 디렉토리가 존재하는지 혹은 읽기권한이 있는지 확인해 보시기 바랍니다." );
define("CHECKING_PERMISSIONS","Checking file and directory permissions..." );
define("ERR_NEED_WRITE_ACCESS","다음의 디렉토리들을 쓰기가능으로 설정해 주시기 바랍니다. (예: UNIX/LINUX 서버 'chmod 777 directory_name' , Windows서버 읽기전용해제)" );
define("IS_NOT_WRITABLE","파일 %s 은(는) 쓰기불가 상태입니다. 쓰기가능으로 설정해주세요!" );
define("IS_WRITABLE","파일 %s 은(는) 쓰기가능 상태입니다." );
define("ERR_COULD_NOT_WRITE_MAINFILE","mainfile.php 파일에의 쓰기에 실패하였습니다. 파일권한설정이 올바른지 다시 확인해 주시기 바랍니다." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","XOOPS mainfile 준비");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","protector모듈을 설치하실 계획이면 <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> 파일 대신 <em>/extras/mainfile.dist.php.protector</em>파일을 이용하시기 바랍니다." .
                                            " (즉 후자의 파일명을 <em>mainfile.dist.php</em>로 이름바꾸기하여 대신 사용하시면 됩니다.).<br />" .
                                            "이미 protector모듈이 성공적으로 설치되어 있다면 이 과정은 무시하시면 됩니다.");
?>