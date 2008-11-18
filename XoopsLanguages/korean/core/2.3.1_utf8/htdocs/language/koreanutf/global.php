<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
//                XOOPS Korean (translated by wanikoo[ wani@wanisys.net ])	   //
//                       <http://www.wanisys.net/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","잠시만 기다려주세요!");
define("_FETCHING","처리중....");
define("_TAKINGBACK","이전 페이지로 되돌아갑니다.....");
define("_LOGOUT","로그아웃");
define("_SUBJECT","주제");
define("_MESSAGEICON","메세지 아이콘");
define("_COMMENTS","코멘트");
define("_POSTANON","익명 투고");
define("_DISABLESMILEY","얼굴아이콘 무효화");
define("_DISABLEHTML","HTML 무효화");
define("_PREVIEW","미리보기");

define("_GO","보내기");
define("_NESTED","계단식 표시");
define("_NOCOMMENTS","코멘트 표시않음");
define("_FLAT","일괄식 표시");
define("_THREADED","쓰레드식 표시");
define("_OLDESTFIRST","오래된 것부터");
define("_NEWESTFIRST","새 것부터");
define("_MORE","그외 더...");
define("_MULTIPAGE","<span style='color:red;'>[pagebreak]</span>태그를 본문중에 삽입하는 것으로 페이지구분을 하실 수 있습니다. ");
define("_IFNOTRELOAD","페이지가 자동으로 갱신되지 않을 경우엔 <a href='%s'>여기</a>를 클릭해 주세요");
define("_WARNINSTALL2","주의: 디렉토리/파일 %s 가 서버상에 존재합니다.<br />설치(인스톨)후엔 보안상 삭제하여 주시기 바랍니다.");
define("_WARNINWRITEABLE","주의: 파일 %s 가 쓰기가능 상태입니다.<br />이 파일의 퍼미션설정을 변경해 주십시오.<br /> in Unix (444), in Win32 (read-only)");

// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s 은 필수항목입니다." );
define( "_XOBJ_ERR_SHORTERTHAN", "%s 은 %d 문자(바이트)이하로 설정하셔야 합니다." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","프로필");
define("_POSTEDBY","글쓴이 : ");
define("_VISITWEBSITE","홈페이지");
define("_SENDPMTO","%s님에게 PM쪽지를 보냄");
define("_SENDEMAILTO","%s님에게 메일을 보냄");
define("_ADD","추가");
define("_REPLY","답장");
define("_DATE","투고일시 : ");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","메인페이지");
define("_MANUAL","메뉴얼");
define("_INFO","버전 정보");
define("_CPHOME","관리 메뉴");
define("_YOURHOME","홈페이지");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","온라인 상태");
define('_GUESTS', '손님');
define('_MEMBERS', '등록회원');
define("_ONLINEPHRASE","<b>%s</b> 분이 현재 온라인상태입니다.");
define("_ONLINEPHRASEX","<b>%s</b> 분이 <b>%s</b>을 이용중이십니다.");
define("_CLOSE","닫기");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","인용 : ");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","죄송합니다. 님은 이곳에 접근권한이 없습니다.");

//%%%%%		Common Phrases		%%%%%
define("_NO","아니오");
define("_YES","예");
define("_EDIT","편집");
define("_DELETE","삭제");
define("_SUBMIT","보내기");
define("_MODULENOEXIST","선택하신 페이지는 존재하지 않습니다.");
define("_ALIGN","위치");
define("_LEFT","왼쪽");
define("_CENTER","중앙");
define("_RIGHT","오른쪽");
define("_FORM_ENTER", "%s을(를) 입력해 주세요!");
// %s represents file name
define("_MUSTWABLE","파일 %s 에 대한 쓰기권한이 있어야합니다.");
// Module info
define('_PREFERENCES', '일반설정');
define("_VERSION", "버전");
define("_DESCRIPTION", "설명");
define("_AUTHOR", "제작자");
define("_CREDITS", "Credits");
define("_LICENCE", "라이센스");
define("_ERRORS", "에러");
define("_NONE", "없음");
define('_ON','투고일시 : ');
define('_READS','읽음');
define('_WELCOMETO','%s님 어서오세요');
define('_SEARCH','검색');
define('_ALL', '모두');
define('_TITLE', '제목');
define('_OPTIONS', '선택항목');
define('_QUOTE', '인용');
define('_LIST', '리스트');
define('_LOGIN','로그인');
define('_USERNAME','아이디: ');
define('_PASSWORD','패스워드: ');
define("_SELECT","선택");
define("_IMAGE","그림파일");
define("_SEND","보내기");
define("_CANCEL","취소");
define("_ASCENDING","오름차순");
define("_DESCENDING","내림차순");
define('_BACK', '뒤로');
define('_NOTITLE', '제목 없음');

/* Image manager */
define('_IMGMANAGER','그림파일 관리기');
define('_NUMIMAGES', '%s 개');
define('_ADDIMAGE','그림파일 추가');
define('_IMAGENAME','그림파일명:');
define('_IMGMAXSIZE','업로드 파일크기 제한 (bytes):');
define('_IMGMAXWIDTH','업로드 그림파일 폭 제한 (pixels):');
define('_IMGMAXHEIGHT','업로드 그림파일 높이 제한 (pixels):');
define('_IMAGECAT','카테고리:');
define('_IMAGEFILE','그림파일명:');
define('_IMGWEIGHT','그림파일 관리기 표시순:');
define('_IMGDISPLAY','이 그림파일을 표시함');
define('_IMAGEMIME','MIME 종류:');
define('_FAILFETCHIMG', '업로드 파일 %s을(를) 가져오지 못했습니다.');
define('_FAILSAVEIMG', '그림파일 %s을(를) 데이타베이스에 저장하지 못했습니다.');
define('_NOCACHE', '캐쉬 않음');
define('_CLONE', '복제');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "로 시작하는");
define("_ENDSWITH", "로 끝나는");
define("_MATCHES", "완전일치");
define("_CONTAINS", "를 포함한");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","등록");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","크기");  // font size
define("_FONT","글꼴");  // font family
define("_COLOR","색");  // font color
define("_EXAMPLE","예제");
define("_ENTERURL","링크할 사이트 URL을 입력해 주세요!");
define("_ENTERWEBTITLE","사이트명을 입력해주세요!");
define("_ENTERIMGURL","그림파일의 URL을 입력해 주세요!");
define("_ENTERIMGPOS","그림파일의 위치를 정해주세요!");
define("_IMGPOSRORL","'R' 또는 'r' 은 오른쪽, 'L' 또는 'l' 는 왼쪽, 지정하지 않을 경우엔 공란!");
define("_ERRORIMGPOS","잘못된 입력! 그림파일의 위치를 다시 정해주세요!");
define("_ENTEREMAIL","링크할 메일주소를 입력해 주세요!");
define("_ENTERCODE","프로그램 코드를 입력해 주세요!");
define("_ENTERQUOTE","인용처리할 글을 입력해 주세요!");
define("_ENTERTEXTBOX","글상자에 입력해 주세요!");
define("_ALLOWEDCHAR","최대 바이트 수: ");
define("_CURRCHAR","현재 바이트 수: ");
define("_PLZCOMPLETE","제목과 내용글을 입력해 주세요!");
define("_MESSAGETOOLONG","내용글이 너무 깁니다.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 초');
define('_SECONDS', '%s 초');
define('_MINUTE', '1 분');
define('_MINUTES', '%s 분');
define('_HOUR', '1 시간');
define('_HOURS', '%s 시간');
define('_DAY', '1 일');
define('_DAYS', '%s 일');
define('_WEEK', '1 주');
define('_MONTH', '1 달');

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'ko');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "1");
?>