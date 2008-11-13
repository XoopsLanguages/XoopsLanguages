<?php
// $Id: main.php,v 1.10 2004/12/26 19:12:01 onokazu Exp $
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

//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","인쇄용 페이지");
define("_NW_SENDSTORY","이 기사를 친구에게 추천");
define("_NW_READMORE","계속...");
define("_NW_COMMENTS","코멘트");
define("_NW_ONECOMMENT","1 코멘트");
define("_NW_BYTESMORE","%s 바이트 남음");
define("_NW_NUMCOMMENTS","%s 코멘트");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","뉴스 투고");
define("_NW_TITLE","제목");
define("_NW_TOPIC","토픽");
define("_NW_THESCOOP","메세지 본문");
define("_NW_NOTIFYPUBLISH","뉴스가 정식 승인/게재되면 메일로 통지");
define("_NW_POST","투고");
define("_NW_GO","보내기");
define("_NW_THANKS","투고해주셔서 감사합니다. 내용 확인후 정식으로 승인/게재해 드리겠습니다."); //submission of news article

define("_NW_NOTIFYSBJCT","NEWS for my site"); // Notification mail subject
define("_NW_NOTIFYMSG","신규 뉴스의 투고가 있었습니다."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","뉴스 아카이브");
define("_NW_ARTICLES","뉴스");
define("_NW_VIEWS","조회");
define("_NW_DATE","투고일시");
define("_NW_ACTIONS","처리");
define("_NW_PRINTERFRIENDLY","인쇄용 페이지");

define("_NW_THEREAREINTOTAL","총 %s 건의 뉴스기사가 있습니다.");

// %s is your site name
define("_NW_INTARTICLE","흥미로운 뉴스 발견(%s 에서)");
define("_NW_INTARTFOUND","다음은 %s에서 발견한 흥미있는 뉴스기사입니다.");

define("_NW_TOPICC","토픽:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","선택하신 뉴스기사는 존재하지 않습니다.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","이 뉴스기사가 게재되어 있는 곳의 URL :");

// %s represents your site name
define("_NW_THISCOMESFROM","더욱더 많은 흥미로운 기사를 읽어실 수 있습니다.(%s)");

// Added language definitions for news expiry date
define("_AM_EXPARTS","게재기한종료된 기사");
define("_AM_EXPIRED","기한종료");
define("_AM_CHANGEEXPDATETIME","게재기한 변경");
define("_AM_SETEXPDATETIME","게재기한 설정");
define("_AM_NOWSETEXPTIME","현재 설정 게재기한: %s");
?>