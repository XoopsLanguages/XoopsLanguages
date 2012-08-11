<?php
// $Id: admin.php,v 1.11 2004/12/26 19:12:01 onokazu Exp $
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

//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","데이타베이스를 성공적으로 갱신하였습니다!");
define("_AM_CONFIG","뉴스 설정");
define("_AM_AUTOARTICLES","게재 예정 기사");
define("_AM_STORYID","뉴스기사 ID");
define("_AM_TITLE","제목");
define("_AM_TOPIC","토픽");
define("_AM_POSTER","투고자");
define("_AM_PROGRAMMED","게재 예정 일시");
define("_AM_ACTION","관리");
define("_AM_EDIT","편집");
define("_AM_DELETE","삭제");
define("_AM_LAST10ARTS","최신 뉴스기사 10");
define("_AM_PUBLISHED","게재일시"); // Published Date
define("_AM_GO","보내기");
define("_AM_EDITARTICLE","뉴스기사 편집");
define("_AM_POSTNEWARTICLE","신규 뉴스기사 작성");
define("_AM_ARTPUBLISHED","뉴스기사가 게재되었습니다.");
define("_AM_HELLO","%s 님,안녕하세요!");
define("_AM_YOURARTPUB","님께서 투고하신 뉴스기사가 정식으로 등록/게재 되었습니다.");
define("_AM_TITLEC","제목: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","게재일시: ");
define("_AM_RUSUREDEL","정말로 이 뉴스기사와 그에 속한 코멘트등을 모두 삭제하실 건가요?");
define("_AM_YES","예");
define("_AM_NO","아니요");
define("_AM_INTROTEXT","시작 본문");
define("_AM_EXTEXT","확장 본문");
define("_AM_ALLOWEDHTML","사용가능 HTML태그:");
define("_AM_DISAMILEY","얼굴아이콘을 무효화");
define("_AM_DISHTML","HTML을 무효화");
define("_AM_APPROVE","승인");
define("_AM_MOVETOTOP","이 기사를 메인페이지 최상단으로 이동함");
define("_AM_CHANGEDATETIME","게재일시를 변경함");
define("_AM_NOWSETTIME","현재 게재예정일시: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","현재 시각: %s");  // %s is the current datetime
define("_AM_SETDATETIME","게재일시를 설정");
define("_AM_MONTHC","월:");
define("_AM_DAYC","일:");
define("_AM_YEARC","년:");
define("_AM_TIMEC","시각:");
define("_AM_PREVIEW","미리보기");
define("_AM_SAVE","저장");
define("_AM_PUBINHOME","메인페이지에 게재함");
define("_AM_ADD","첨가");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","메인 토픽 작성");
define("_AM_TOPICNAME","토픽명");
define("_AM_MAX40CHAR","(최대 20자)");
define("_AM_TOPICIMG","토픽 그림파일");
define("_AM_IMGNAEXLOC","%s 에 있는 그림파일명");
define("_AM_FEXAMPLE","예: games.gif");
define("_AM_ADDSUBTOPIC","서브 토픽 작성");
define("_AM_IN","부모 토픽");
define("_AM_MODIFYTOPIC","토픽 편집");
define("_AM_MODIFY","보내기");
define("_AM_PARENTTOPIC","부모 토픽");
define("_AM_SAVECHANGE","변경저장");
define("_AM_DEL","삭제");
define("_AM_CANCEL","취소");
define("_AM_WAYSYWTDTTAL","WARNING: 정말로 이 토픽과 이에 속한 모든 뉴스기사,코멘트 등을 삭제하시겠습니까?");


// Added in Beta6
define("_AM_TOPICSMNGR","토픽 관리 메뉴");
define("_AM_PEARTICLES","뉴스기사 투고/편집");
define("_AM_NEWSUB","신규 투고 기사");
define("_AM_POSTED","투고일시");
define("_AM_GENERALCONF","일반설정");

// Added in RC2
define("_AM_TOPICDISPLAY","토픽 그림파일을 표시");
define("_AM_TOPICALIGN","위치");
define("_AM_RIGHT","오른쪽");
define("_AM_LEFT","왼쪽");

define("_AM_EXPARTS","기한종료기사");
define("_AM_EXPIRED","기한종료");
define("_AM_CHANGEEXPDATETIME","유효기한을 변경");
define("_AM_SETEXPDATETIME","유효기한을 설정");
define("_AM_NOWSETEXPTIME","현재 설정된 기한 : %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","토픽명이 기입되어 있지 않습니다.");
define("_AM_EMPTYNODELETE","삭제할 것이 없습니다.");
?>
