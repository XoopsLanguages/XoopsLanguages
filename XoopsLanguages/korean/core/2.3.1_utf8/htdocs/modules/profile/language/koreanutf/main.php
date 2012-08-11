<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//               XOOPS Korean - PHP Content Management System                        //
//                        (translated by wanikoo[ wani@wanisys.net ])                     //
//                                   <http://www.wanisys.net/>                                        //
//  ------------------------------------------------------------------------ //

define('_PROFILE_MA_REGISTER_NOTGROUP','New user is not registered to corresponding groups.');
define('_PROFILE_MA_FINISH_LOGIN','님의 계정이 성공적으로 작성되어졌습니다. 클릭하셔서 로그인해보시기 바랍니다.');
define("_PROFILE_MA_REGISTER_FINISH","등록해 주셔서 감사합니다.");
define("_PROFILE_MA_REGISTER_STEPS","등록절차:");

define("_PROFILE_MA_DEFAULT","기본정보");

define("_PROFILE_MA_ERRORDURINGSAVE","저장중 에러 발생");
/*
define('_PROFILE_MA_USERREG','회원등록');
define('_PROFILE_MA_NICKNAME','아이디');
define('_PROFILE_MA_REALNAME','이름');
define('_PROFILE_MA_EMAIL','메일');
define('_PROFILE_MA_ALLOWVIEWEMAIL','메일주소 공개');
define('_PROFILE_MA_TIMEZONE','시간대');
define('_PROFILE_MA_AVATAR','아바타');
define('_PROFILE_MA_VERIFYPASS','패스워드확인');
define('_PROFILE_MA_SUBMIT','보내기');
define('_PROFILE_MA_USERNAME','회원명');
define('_PROFILE_MA_FINISH','보내기');
define('_PROFILE_MA_REGISTERNG','등록에 실패하였습니다.');
define('_PROFILE_MA_MAILOK','이 사이트로부터의 정보메일을 수신허용함');
define('_PROFILE_MA_DISCLAIMER','이용약관');
define('_PROFILE_MA_IAGREE','위의 내용에 동의합니다');
define('_PROFILE_MA_UNEEDAGREE','죄송합니다만 등록하시려면 위의 이용약관에 동의하셔야만 합니다.');
define('_PROFILE_MA_NOREGISTER','죄송합니다만 현재 신규등록을 받고 있지 않습니다.');

// %s is username. This is a subject for email
//define('_PROFILE_MA_PROFILE_MAERKEYFOR','%s님의 승인키(활성화키)입니다.');
define('_PROFILE_MA_USERKEYFOR','%s님의 승인키(활성화키)입니다.');
define('_PROFILE_MA_ACTLOGIN','님의 계정이 활성화처리되었습니다. 등록하신 패스워드로 로그인하시면 됩니다.');
define('_PROFILE_MA_ACTKEYNOT','승인키(활성화키)가 올바르지 않습니다.');
define('_PROFILE_MA_ACONTACT','선택하신 계정은 이미 활성화처리된 상태입니다.');

define('_PROFILE_MA_YOURREGISTERED','등록이 완료되었습니다. 님의 메일주소로 승인키(활성화키)를 발송하였으니 메일의 지시에 따라 승인을 완료(계정활성화)하시기 바랍니다.');
define('_PROFILE_MA_YOURREGMAILNG','등록이 완료되었습니다. 하지만 서버의 내부에러로 승인키(활성화키)를 담은 메일을 발송하는데 실패하였습니다. 정말로 죄송합니다만 사이트 관리자에게 문의해 주시기 바랍니다.');
define('_PROFILE_MA_YOURREGISTERED2','등록이 완료되었습니다. 사이트 관리자가 님의 계정을 승인(활성화)하면 정식으로 등록처리됩니다. 승인(활성화)완료시엔 메일로 통보해 드립니다.');

// %s is your site name
define('_PROFILE_MA_NEWUSERREGAT','%s 에 신규회원등록이 있었습니다');
// %s is a username
define('_PROFILE_MA_HASJUSTREG','%s님이 신규 등록하셨습니다');

define('_PROFILE_MA_INVALIDMAIL','ERROR: 올바르지 않은 메일주소입니다.');
define('_PROFILE_MA_EMAILNOSPACES','ERROR: 메일주소에 공백은 사용하실 수 없습니다.');
define('_PROFILE_MA_INVALIDNICKNAME','ERROR: 올바르지 않은 아이디(회원명)입니다.');
define("_PROFILE_MA_INVALIDDISPLAYNAME","ERROR: 올바르지 않은 표시명(별명)입니다.");
define('_PROFILE_MA_NICKNAMETOOLONG','아이디가 너무 기네요! %s 문자 이내로 해주세요!');
define('_PROFILE_MA_DISPLAYNAMETOOLONG','표시명(별명)이 너무 기네요! %s 문자 이내로 해주세요!');
define('_PROFILE_MA_NICKNAMETOOSHORT','아이디가 너무 짧네요! %s 문자 이상으로 해주세요!');
define('_PROFILE_MA_DISPLAYNAMETOOSHORT','표시명(별명)이 너무 짧네요! %s 문자 이상으로 해주세요!');
define('_PROFILE_MA_NAMERESERVED','ERROR: 이 아이디는 사용하실수 없습니다.(예약된 아이디임)');
define('_PROFILE_MA_DISPLAYNAMERESERVED','ERROR: 이 표시명(별명)은 사용하실수 없습니다.(예약된 표시명임)');
define('_PROFILE_MA_NICKNAMENOSPACES','아이디에 공백은 사용하실 수 없습니다.');
define('_PROFILE_MA_DISPLAYNAMENOSPACES','표시명(별명)에 공백은 사용하실 수 없습니다.');
define('_PROFILE_MA_NICKNAMETAKEN','ERROR: 이 아이디는 이미 사용중입니다.');
define('_PROFILE_MA_DISPLAYNAMETAKEN','ERROR: 이 표시명(별명)은 이미 사용중입니다.');
define('_PROFILE_MA_EMAILTAKEN','ERROR: 이 메일주소는 이미 사용중입니다.');
define('_PROFILE_MA_ENTERPWD','ERROR: 패스워드를 입력해 주세요!');
define('_PROFILE_MA_SORRYNOTFOUND','죄송합니다만 회원정보가 존재하지 않습니다.');
define("_PROFILE_MA_WRONGPASSWORD","ERROR: 잘못된 패스워드입니다.");
define("_PROFILE_MA_USERALREADYACTIVE","해당 메일주소( %s )를 가진 회원은 이미 활성화되어 있는 상태입니다.");

// %s is your site name
define('_PROFILE_MA_YOURACCOUNT','%s 에서의 회원아이디');

// %s is a username
define('_PROFILE_MA_ACTVMAILNG','%s님에게 메일을 발송하는데 실패하였습니다.');
define('_PROFILE_MA_ACTVMAILOK','%s님에게 성공적으로 메일을 발송하였습니다.');

define("_PROFILE_MA_DEFAULT","디폴트 설정");

//%%%%%%		File Name userinfo.php 		%%%%%
define('_PROFILE_MA_SELECTNG','회원이 선택되지 않았습니다.');
define('_PROFILE_MA_PM','PM쪽지');
define('_PROFILE_MA_ICQ','ICQ');
define('_PROFILE_MA_AIM','AIM');
define('_PROFILE_MA_YIM','YIM');
define('_PROFILE_MA_MSNM','MSNM');
define('_PROFILE_MA_LOCATION','주소');
define('_PROFILE_MA_OCCUPATION','직업');
define('_PROFILE_MA_INTEREST','취미');
define('_PROFILE_MA_SIGNATURE','서명');
define('_PROFILE_MA_EXTRAINFO','그외');
define('_PROFILE_MA_EDITPROFILE','프로필 편집');
define('_PROFILE_MA_LOGOUT','로그아웃');
define('_PROFILE_MA_INBOX','수신함');
define('_PROFILE_MA_MEMBERSINCE','등록일');
define('_PROFILE_MA_RANK','등급');
define('_PROFILE_MA_POSTS','투고 수');
define('_PROFILE_MA_LASTLOGIN','최종 로그인 일시');
define('_PROFILE_MA_ALLABOUT','%s님의 기본정보');
define('_PROFILE_MA_STATISTICS','통계 정보');
define('_PROFILE_MA_MYINFO','개인 정보');
define('_PROFILE_MA_BASICINFO','기본정보');
define('_PROFILE_MA_MOREABOUT','개인 상세정보');
define('_PROFILE_MA_SHOWALL','모두 표시');

//%%%%%%		File Name edituser.php 		%%%%%
define('_PROFILE_MA_PROFILE','프로필');
define('_PROFILE_MA_DISPLAYNAME','표시명(별명)');
define('_PROFILE_MA_SHOWSIG','투고시 서명을 반드시 첨가함');
define('_PROFILE_MA_CDISPLAYMODE','코멘트 표시 방식');
define('_PROFILE_MA_CSORTORDER','코멘트 표시 순서');
define('_PROFILE_MA_PASSWORD','패스워드');
define('_PROFILE_MA_TYPEPASSTWICE','(패스워드를 갱신하실 경우만 입력해 주세요!)');
define('_PROFILE_MA_SAVECHANGES','변경저장');
define('_PROFILE_MA_NOEDITRIGHT',"이 회원의 정보를 변경할 권한을 가지고 있지 않습니다.");
define('_PROFILE_MA_PASSNOTSAME','패스워드가 올바르지 않습니다. 확인을 위해 동일한 패스워드를 두번 입력하셔야만 합니다.');
define('_PROFILE_MA_PWDTOOSHORT','패스워드는 최소 <b>%s</b>문자 이상이어야 합니다.');
define('_PROFILE_MA_PROFUPDATED','프로필을 갱신하였습니다.');
define('_PROFILE_MA_PROFILE_MAECOOKIE','회원 아이디를 1년간 쿠키에 보존함');
define('_PROFILE_MA_NO','No');
define('_PROFILE_MA_DELACCOUNT','계정을 삭제');
define('_PROFILE_MA_MYAVATAR','아바타');
define('_PROFILE_MA_UPLOADMYAVATAR','아바타를 업로드');
define('_PROFILE_MA_MAXPIXEL','최대 픽셀(Pixel)수');
define('_PROFILE_MA_MAXIMGSZ','최대 파일사이즈(Bytes)');
define('_PROFILE_MA_SELFILE','파일선택');
define('_PROFILE_MA_OLDDELETED','이전 아바타 그림파일은 덮어쓰기 처리됩니다.');
define('_PROFILE_MA_CHOOSEAVT','아바타를 리스트에서 선택해 주시기 바랍니다.');

define('_PROFILE_MA_PRESSLOGIN','아래의 버튼을 클릭후 로그인해 주시기바랍니다.');

define('_PROFILE_MA_ADMINNO','관리자그룹에 속한 회원의 계정은 삭제하실수 없습니다.');
define('_PROFILE_MA_GROUPS','소속그룹');

define('_PROFILE_MA_NOPERMISS','죄송합니다. 님은 이 작업을 위한 권한을 가지고 있지 않습니다.');
define('_PROFILE_MA_SURETODEL','정말로 자신의 계정을 삭제하길 원하십니까?');
define('_PROFILE_MA_REMOVEINFO','저희 데이타베이스에서 님에 관한 모든 정보들이 삭제될 것입니다.');
define('_PROFILE_MA_BEENDELED','님의 계정이 삭제처리되었습니다.');
*/
define("_PROFILE_MA_NOSTEPSAVAILABLE","현재 신규등록을 받고 있지 않습니다. 다음 기회를 이용해 주시기 바랍니다.");
define("_PROFILE_MA_EXPIRED","기간만료되었습니다. 다시 시도해 주시기 바랍니다.");


define('_PROFILE_MA_RECENTACTIVITY','최근 활동');
define('_PROFILE_MA_THEME','테마');
define('_PROFILE_MA_ACTIVATE','활성화');
define('_PROFILE_MA_DEACTIVATE','비활성화');
define('_PROFILE_MA_SENDPM','메세지 보내기');


//changepass.php
define("_PROFILE_MA_CHANGEPASSWORD","패스워드 변경");
define("_PROFILE_MA_PASSWORDCHANGED","패스워드가 성공적으로 변경되어졌습니다.");
define("_PROFILE_MA_OLDPASSWORD","현 패스워드");
define("_PROFILE_MA_NEWPASSWORD","새 패스워드");
define("_PROFILE_MA_WRONGPASSWORD","현 패스워드가 올바르지 않습니다.");

//search.php
define("_PROFILE_MA_SORTBY","정렬");
define("_PROFILE_MA_ORDER","정렬순");
define("_PROFILE_MA_PERPAGE","페이지당 회원수");
define("_PROFILE_MA_LATERTHAN","%s 보다 이후의");
define("_PROFILE_MA_EARLIERTHAN","%s 보다 이전의");
define("_PROFILE_MA_LARGERTHAN","%s 보다 큰");
define("_PROFILE_MA_SMALLERTHAN","%s 보다 작은");

define("_PROFILE_MA_NOUSERSFOUND","해당 회원은 존재하지 않습니다.");
define("_PROFILE_MA_RESULTS","검색 결과");
define("_PROFILE_MA_SEARCH","사용자 검색");

//changemail.php
define("_PROFILE_MA_CHANGEMAIL","메일주소 변경");
define("_PROFILE_MA_NEWMAIL","새 메일주소");

//define("_PROFILE_MA_NEWEMAILREQ","새 메일주소 요청");
define("_PROFILE_MA_NEWEMAIL","새 메일주소(%s)");
define("_PROFILE_MA_EMAILCHANGED","님의 메일주소가 성공적으로 변경되어졌습니다.");
define("_PROFILE_MA_SITEDEFAULT","Site default");

//define("_PROFILE_MA_CONFCODEMISSING","확인용 코드가 존재하지 않습니다.");
define("_PROFILE_MA_USERINFO","사용자프로필");
define("_PROFILE_MA_REGISTER","등록양식");

?>