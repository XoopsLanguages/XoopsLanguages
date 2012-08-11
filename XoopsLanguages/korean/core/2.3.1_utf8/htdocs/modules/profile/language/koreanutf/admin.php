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

define("_PROFILE_AM_FIELD","필드");
define("_PROFILE_AM_FIELDS","필드");
define("_PROFILE_AM_CATEGORY","카테고리");
define("_PROFILE_AM_STEP","Step");

define("_PROFILE_AM_SAVEDSUCCESS","%s 이/가 성공적으로 저장되어졌습니다.");
define("_PROFILE_AM_DELETEDSUCCESS","%s 이/가 성공적으로 삭제되어졌습니다.");
define("_PROFILE_AM_RUSUREDEL","%s 을/를 정말로 삭제하시겠습니까?");

define("_PROFILE_AM_ADD","추가 %s");
define("_PROFILE_AM_EDIT","편집 %s");
define("_PROFILE_AM_TYPE","필드 종류");
define("_PROFILE_AM_VALUETYPE","필드값 종류");
define("_PROFILE_AM_NAME","이름");
define("_PROFILE_AM_TITLE","타이틀");
define("_PROFILE_AM_DESCRIPTION","설명");
define("_PROFILE_AM_REQUIRED","필수?");
define("_PROFILE_AM_MAXLENGTH","최대길이");
define("_PROFILE_AM_WEIGHT","표시순");
define("_PROFILE_AM_DEFAULT","디폴트");
define("_PROFILE_AM_NOTNULL","널값 아님(Not Null)?");
//define("_PROFILE_AM_MODULE","모듈");

define("_PROFILE_AM_ARRAY","Array(배열)");
define("_PROFILE_AM_EMAIL","메일주소");
define("_PROFILE_AM_INT","Integer(정수)");
define("_PROFILE_AM_TXTAREA","Text Area(글 영역)");
define("_PROFILE_AM_TXTBOX","Text field(글 줄)");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","그 외");

define("_PROFILE_AM_PROF_VISIBLE_ON","이 그룹(들)의 프로필에 필드 표시");
define("_PROFILE_AM_PROF_VISIBLE_FOR","이 그룹(들)을 위한 프로필에 필드 표시");define("_PROFILE_AM_PROF_VISIBLE","Visibility");
define("_PROFILE_AM_PROF_EDITABLE","프로필로부터 편집가능한 필드");
define("_PROFILE_AM_PROF_REGISTER","회원등록 폼에 표시");
define("_PROFILE_AM_PROF_SEARCH","이 그룹(들)에 의한 검색허용");
define("_PROFILE_AM_PROF_ACCESS","Profile accessible by these groups");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","The field ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," is visible for ");
define("_PROFILE_AM_FIELDVISIBLEON"," viewing a profile of ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Everyone");
define("_PROFILE_AM_FIELDNOTVISIBLE","is not visible");


define("_PROFILE_AM_CHECKBOX","체크박스");
define("_PROFILE_AM_GROUP","그룹선택");
define("_PROFILE_AM_GROUPMULTI","그룹 복수선택");
define("_PROFILE_AM_LANGUAGE","언어선택");
define("_PROFILE_AM_RADIO","라디오 버튼");
define("_PROFILE_AM_SELECT","선택");
define("_PROFILE_AM_SELECTMULTI","복수선택");
define("_PROFILE_AM_TEXTAREA","Text Area(글 영역)");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Text Area(DHTML글 영역)");
define("_PROFILE_AM_TEXTBOX","Text Field(글 줄)");
define("_PROFILE_AM_TIMEZONE","시간대");
define("_PROFILE_AM_YESNO","라디오버튼 예/아니요");
define("_PROFILE_AM_DATE","날짜");
define("_PROFILE_AM_AUTOTEXT","Auto Text");
define("_PROFILE_AM_DATETIME","날짜와 시간(Date and Time)");
define("_PROFILE_AM_LONGDATE","Long Date");

define("_PROFILE_AM_ADDOPTION","옵션 추가");
define("_PROFILE_AM_REMOVEOPTIONS","옵션 제거");
define("_PROFILE_AM_KEY","키");
define("_PROFILE_AM_VALUE","값");

// User management
define("_PROFILE_AM_EDITUSER","등록회원 편집");
define("_PROFILE_AM_SELECTUSER","등록회원 선택");
/*
define("_PROFILE_AM_AYSYWTDU","사용자계정 %s 을 정말로 삭제하시겠습니까?");
define("_PROFILE_AM_BYTHIS","해당 회원계정과 관련된 모든 정보가 완전히 삭제처리됩니다.");
define("_PROFILE_AM_YMCACF","필수항목은 반드시 작성하셔야 합니다.");
define("_PROFILE_AM_CNRNU","새 회원계정을 등록하지 못했습니다.");
define("_PROFILE_AM_EDEUSER","등록회원 편집/삭제");
define("_PROFILE_AM_NICKNAME","아이디");
define("_PROFILE_AM_MODIFYUSER","등록회원 편집");
define("_PROFILE_AM_DELUSER","등록회원 삭제");
define("_PROFILE_AM_GO","보내기");
*/
define("_PROFILE_AM_ADDUSER","신규 계정 작성");
//define("_PROFILE_AM_OPTION","선택항목(옵션)");
//define("_PROFILE_AM_AVATAR","아바타");
define("_PROFILE_AM_THEME","테마");
//define("_PROFILE_AM_AOUTVTEAD","이 메일주소를 공개");
define("_PROFILE_AM_RANK","등급");
/*
define("_PROFILE_AM_NSRA","스페셜등급은 설정되어 있지 않습니다.");
define("_PROFILE_AM_NSRID","스페셜등급에 대한 설정은 존재하지 않습니다.");
define("_PROFILE_AM_ACCESSLEV","액세스 레벨");
define("_PROFILE_AM_SIGNATURE","서명");
define("_PROFILE_AM_PASSWORD","패스워드");
define("_PROFILE_AM_INDICATECOF","* 은 필수항목을 의미합니다.");
define("_PROFILE_AM_NOTACTIVE","이 회원은 현재 비활성화상태입니다. 지금 바로 활성화처리 하시겠습니까?");
define("_PROFILE_AM_UPDATEUSER","등록회원정보 갱신");
define("_PROFILE_AM_USERINFO","등록회원 기본정보");
define("_PROFILE_AM_USERID","등록회원번호");
define("_PROFILE_AM_RETYPEPD","패스워드 확인 재입력");
define("_PROFILE_AM_CHANGEONLY","(변경하실 경우만)");
define("_PROFILE_AM_USERPOST","등록회원 투고정보");
define("_PROFILE_AM_STORIES","Stories");
define("_PROFILE_AM_COMMENTS","투고수");
define("_PROFILE_AM_PTBBTSDIYT","위의 데이타가 잘못되었다고 판단되어질 경우엔 아래의 버튼을 클릭하셔서 데이타를 재집계처리해보시기 바랍니다.");
define("_PROFILE_AM_SYNCHRONIZE","재집계 처리");
*/
define("_PROFILE_AM_USERDONEXIT","조건에 맞는 등록회원은 존재하지 않습니다!");
/*
define("_PROFILE_AM_STNPDNM","패스워드가 잘못 입력되었습니다. 다시 입력해 주세요!");
define("_PROFILE_AM_CNGTCOM","투고수의 조회에 실패하였습니다.");
define("_PROFILE_AM_CNGTST","Could not get total stories");
define("_PROFILE_AM_CNUUSER","등록회원 정보 갱신에 실패하였습니다.");
define("_PROFILE_AM_CNGUSERID","등록회원번호 취득에 실패하였습니다.");
define("_PROFILE_AM_LIST","리스트");
define("_PROFILE_AM_NOUSERS","등록회원이 선택되어져 있지 않습니다.");
*/
define("_PROFILE_MA_USERLEVEL","등록회원 레벨");

define("_PROFILE_MA_ACTIVE","활성화");
define("_PROFILE_MA_INACTIVE","비활성화");
/*
define("_PROFILE_MA_DISABLED","계정정지");
define("_PROFILE_MA_USERDISABLED","이 사용자의 계정은 정지된 상태입니다. 관리자에게 문의하시기 바랍니다.");
define("_PROFILE_AM_NOUSERNAME","사용자명이 선택되어져 있지 않습니다.");
*/
define("_PROFILE_AM_USERCREATED","회원 계정이 생성되어졌습니다.");

define("_PROFILE_AM_CANNOTDELETESELF","자기 계정의 삭제는 허용되지 않습니다. - 자기 계정삭제를 원하시면 회원정보페이지를 이용하세요!");
define("_PROFILE_AM_CANNOTDELETEADMIN","관리자 계정의 삭제는 허용되지 않습니다.");

define("_PROFILE_AM_NOSELECTION","사용자가 선택되지 않았습니다");
define("_PROFILE_AM_USER_ACTIVATED","사용자가 활성화되었습니다.");
define("_PROFILE_AM_USER_DEACTIVATED","사용자가 비활성화되었습니다.");
define("_PROFILE_AM_USER_NOT_ACTIVATED","에러: 사용자가 활성화처리되지 않았습니다.");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","에러: 사용자가 비활성화처리되지 않았습니다.");

define("_PROFILE_AM_STEPNAME","단계명");
define("_PROFILE_AM_STEPORDER","단계 순서");
define("_PROFILE_AM_STEPSAVE","단계 완료후 저장");
define("_PROFILE_AM_STEPINTRO","단계 설명");

?>