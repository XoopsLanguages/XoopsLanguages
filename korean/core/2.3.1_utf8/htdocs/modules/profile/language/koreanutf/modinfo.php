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

define("_PROFILE_MI_NAME","사용자 프로필");
define("_PROFILE_MI_DESC","사용자 프로필 기능 확장 모듈");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT","계정 편집");
define("_PROFILE_MI_CHANGEPASS","패스워드 변경");
define("_PROFILE_MI_CHANGEMAIL","메일주소 변경");

//Admin links
define("_PROFILE_MI_INDEX","인덱스");
define("_PROFILE_MI_CATEGORIES","카테고리");
define("_PROFILE_MI_FIELDS","필드");
define("_PROFILE_MI_USERS","사용자");
define("_PROFILE_MI_STEPS","등록절차");
define("_PROFILE_MI_PERMISSIONS","퍼미션");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE","사용자 프로필");
define("_PROFILE_MI_CATEGORY_DESC","");

//User Profile Fields
/*
define("_PROFILE_MI_AIM_TITLE","AOL메신져");
define("_PROFILE_MI_AIM_DESCRIPTION","America Online Instant Messenger Client ID");
define("_PROFILE_MI_ICQ_TITLE","ICQ 번호");
define("_PROFILE_MI_ICQ_DESCRIPTION","ICQ Instant Messenger ID");
define("_PROFILE_MI_YIM_TITLE","Yahoo!메신져");
define("_PROFILE_MI_YIM_DESCRIPTION","Yahoo! Instant Messenger ID");
define("_PROFILE_MI_MSN_TITLE","MSN메신져");
define("_PROFILE_MI_MSN_DESCRIPTION","Microsoft Messenger ID");
define("_PROFILE_MI_FROM_TITLE","주소");
define("_PROFILE_MI_FROM_DESCRIPTION","");
define("_PROFILE_MI_SIG_TITLE","서명");
define("_PROFILE_MI_SIG_DESCRIPTION","포럼글이나 코멘트글에 첨부될 서명을 입력하시면 됩니다.");
define("_PROFILE_MI_VIEWEMAIL_TITLE","메일주소 공개");
define("_PROFILE_MI_BIO_TITLE","기타 정보");
define("_PROFILE_MI_BIO_DESCRIPTION","");
define("_PROFILE_MI_INTEREST_TITLE","취미");
define("_PROFILE_MI_INTEREST_DESCRIPTION","");
define("_PROFILE_MI_OCCUPATION_TITLE","직업");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION","");
define("_PROFILE_MI_URL_TITLE","웹사이트");
define("_PROFILE_MI_URL_DESCRIPTION","");
define("_PROFILE_MI_NEWEMAIL_TITLE","새 메일주소");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION","메일주소변경은 변경확인메일을 통해 이루어집니다. 참고: modules/profile/changemail.php");
*/
define("_PROFILE_MI_URL_TITLE","웹사이트");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS","일반 설정");
define("_PROFILE_MI_CAT_SETTINGS_DSC","");
define("_PROFILE_MI_CAT_USER","사용자 설정");
define("_PROFILE_MI_CAT_USER_DSC","");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH","사용자 프로필에서의 최근 변화분 표시");
/*
define("_PROFILE_MI_MAX_UNAME","아이디의 최대 문자수(byte)");
define("_PROFILE_MI_MAX_UNAME_DESC","아이디의 최대 문자수(byte)를 입력해 주세요!");
define("_PROFILE_MI_MIN_UNAME","아이디의 최저 문자수(byte)");
define("_PROFILE_MI_MIN_UNAME_DESC","아이디의 최저 문자수(byte)를 입력해 주세요!");
define("_PROFILE_MI_DISPLAY_DISCLAIMER","이용약관(disclaimer)을 표시");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC","예 를 선택하시면 신규등록페이지에 이용약관을 표시합니다.");
define("_PROFILE_MI_DISCLAIMER","이용약관(Registration disclaimer)");
define("_PROFILE_MI_DISCLAIMER_DESC","신규등록 페이지에 표시할 이용약관을 입력해 주세요!");
define("_PROFILE_MI_BAD_UNAMES","아이디 또는 표시명(별명)으로 사용할 수 없는 문자열");
define("_PROFILE_MI_BAD_UNAMES_DESC","각각의 문자열은 <b>|</b> 로 구분, 대소문자는 구별하지 않음, 정규식 사용가능");
define("_PROFILE_MI_BAD_EMAILS","회원의 메일주소로서 사용할 수 없는 문자열");
define("_PROFILE_MI_BAD_EMAILS_DESC","각각의 문자열은 <b>|</b> 로 구분, 대소문자는 구별하지 않음, 정규식 사용가능");
define("_PROFILE_MI_MINPASS","패스워드의 최저 문자수");
define("_PROFILE_MI_NEWUNOTIFY","신규 회원의 등록이 있는 경우 메일로 통지/통보 받음");
define("_PROFILE_MI_NOTIFYTO","신규 회원 등록 통지/통보 메일을 받을 그룹을 설정해 주세요!");
define("_PROFILE_MI_ACTVTYPE","신규 회원 계정의 활성화 방식을 선택해 주세요!");
define("_PROFILE_MI_USERACTV","계정 활성화를 위해 회원 자신의 확인이 필요(추천)");
define("_PROFILE_MI_AUTOACTV","자동적으로 계정을 활성화함");
define("_PROFILE_MI_ADMINACTV","관리자가 계정 활성화 여부를 결정");
define("_PROFILE_MI_ACTVGROUP","계정 활성화 확인 의뢰 메일을 받을 그룹을 선택해 주세요!");
define("_PROFILE_MI_ACTVGROUP_DESC","관리자가 계정 활성화 여부를 결정 을 선택하신 경우만 유효함");
define("_PROFILE_MI_UNAMELVL","아이디로 사용가능한 문자들을 설정! 문자 제한의 레벨을 선택해주세요!");
define("_PROFILE_MI_STRICT","엄격 (알파벳과 숫자만)");
define("_PROFILE_MI_MEDIUM","중간");
define("_PROFILE_MI_LIGHT","관대 (한글,한자등 사용허가)");
define("_PROFILE_MI_ALLOWREG","신규 회원의 등록을 허용함");
define("_PROFILE_MI_ALLOWREG_DESC","예 를 선택하시면 신규 회원 등록을 허용하게 됩니다.");
define("_PROFILE_MI_AVATARALLOW","아바타 그림파일의 업로드를 허용함?");
define("_PROFILE_MI_AVATARALLOW_DESC","");
define("_PROFILE_MI_AVATARWIDTH","아바타 그림파일의 최대허용 폭 (pixel)");
define("_PROFILE_MI_AVATARWIDTH_DESC","");
define("_PROFILE_MI_AVATARHEIGHT","아바타 그림파일의 최대허용 높이 (pixel)");
define("_PROFILE_MI_AVATARHEIGHT_DESC","");
define("_PROFILE_MI_AVATARMAX","아바타 그림파일의 최대허용 파일사이즈 (byte)");
define("_PROFILE_MI_AVATARMAX_DESC","");
define("_PROFILE_MI_SELFDELETE","등록회원의 자기 계정삭제를 허용(탈퇴허용)?");
define("_PROFILE_MI_SELFDELETE_DESC","");
define("_PROFILE_MI_AVATARMINPOSTS","아바타 업로드권한을 위한 최저 요구 투고 수");
define("_PROFILE_MI_AVATARMINPOSTS_DESC","등록회원이 자기의 아바타를 업로드할 권한을 얻기위해 필요한 최저 투고 수를 입력해 주세요");
define("_PROFILE_MI_ALLOWCHGMAIL","등록회원의 자기 메일주소 변경을 허용함?");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC","");
define("_PROFILE_MI_ALLOWVIEWACC","사용자 계정 정보열람 허용");
define("_PROFILE_MI_ALLOWVIEWACC_DESC","사용자 계정의 개개의 필드는 필드관리에서 표시/비표시 설정하실 수 있습니다.<br />특정 그룹에게 계정 정보열람을 허가하시려면 선택해 주시기 바랍니다.<br />(손님은 등록후 열람가능하게 됩니다)");
*/
//Pages
define("_PROFILE_MI_PAGE_INFO","사용자 정보");
define("_PROFILE_MI_PAGE_EDIT","사용자 편집");
define("_PROFILE_MI_PAGE_SEARCH","검색");

define("_PROFILE_MI_STEP_BASIC","기본정보");
define("_PROFILE_MI_STEP_COMPLEMENTARY","추가정보");

define("_PROFILE_MI_CATEGORY_PERSONAL","개인정보");
define("_PROFILE_MI_CATEGORY_MESSAGING","연락정보");
define("_PROFILE_MI_CATEGORY_SETTINGS","설정정보");
define("_PROFILE_MI_CATEGORY_COMMUNITY","커뮤니티정보");

?>