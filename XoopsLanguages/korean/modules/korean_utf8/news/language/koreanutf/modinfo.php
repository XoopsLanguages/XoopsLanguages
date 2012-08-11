<?php
// $Id: modinfo.php,v 1.12 2004/12/26 19:12:01 onokazu Exp $
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

// Module Info

// The name of this module
define('_MI_NEWS_NAME','뉴스');

// A brief description of this module
define('_MI_NEWS_DESC','코멘트 가능 뉴스기사 시스템을 구축합니다.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','뉴스 토픽 블록');
define('_MI_NEWS_BNAME3','오늘의 톱뉴스 블록');
define('_MI_NEWS_BNAME4','톱뉴스 블록');
define('_MI_NEWS_BNAME5','최신뉴스 블록');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','뉴스 투고');
define('_MI_NEWS_SMNAME2','아카이브');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','토픽 관리');
define('_MI_NEWS_ADMENU3','뉴스기사 투고/편집');

// Title of config items
define('_MI_STORYHOME','메인페이지에 게재할 기사 수');
define('_MI_NOTIFYSUBMIT','신규 투고가 있을 경우 메일로 통지');
define('_MI_DISPLAYNAV','네비게션 박스를 표시');
define('_MI_ANONPOST','손님의 뉴스투고를 허가함');
define('_MI_AUTOAPPROVE','신규 투고 기사를 자동승인/게재 처리함');

// Description of each config items
define('_MI_STORYHOMEDSC','메인(톱)페이지에 표시할 기사의 수를 지정해 주세요');
define('_MI_NOTIFYSUBMITDSC','신규 투고가 있을 경우 메일로 관리자에게 통지할지를 선택해 주세요');
define('_MI_DISPLAYNAVDSC','카테고리선택용 네비게이션박스를 기사의 상부에 표시할지를 선택해 주세요');
define('_MI_AUTOAPPROVEDSC','신규 투고 기사를 자동승인/게재 처리할지를 선택해 주세요');

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY','모듈 전체');
define('_MI_NEWS_GLOBAL_NOTIFYDSC','뉴스 모듈 전체에 대한 통지 옵션');

define('_MI_NEWS_STORY_NOTIFY','현 뉴스기사');
define('_MI_NEWS_STORY_NOTIFYDSC','현 뉴스기사에 대한 통지 옵션');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','신규 토픽');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','신규 토픽이 작성된 경우 통지함.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','신규 토픽이 작성된 경우 통지합니다.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 토픽이 작성되었습니다.');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY','신규 뉴스기사 투고');       
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','신규 뉴스기사의 투고가 있을 경우 통지함.');                           
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','신규 뉴스기사의 투고가 있을 경우 통지합니다.');                
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 뉴스기사가 투고되었습니다.');                              

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','신규 뉴스기사 게재');       
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','신규 뉴스기사가 정식 게재된 경우 통지함');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','신규 뉴스기사가 정식 게재된 경우 통지합니다.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 뉴스기사가 정식게재되었습니다.');                              

define('_MI_NEWS_STORY_APPROVE_NOTIFY','뉴스기사 승인/게재');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP','이 뉴스기사가 정식 승인/게재된 경우 통지함');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC','이 뉴스기사가 정식 승인/게재된 경우 통지합니다.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 뉴스기사가 승인/게재되었습니다.');

?>
