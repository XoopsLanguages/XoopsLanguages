<?php
// $Id: modinfo.php,v 1.15 2004/12/26 19:11:57 onokazu Exp $
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
define("_MI_MYLINKS_NAME","링크집");

// A brief description of this module
define("_MI_MYLINKS_DESC","사이트링크정보를 공유/평가할 수 있는 서비스를 제공합니다.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","신규 링크");
define("_MI_MYLINKS_BNAME2","베스트 링크");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","등록");
define("_MI_MYLINKS_SMNAME2","인기 링크");
define("_MI_MYLINKS_SMNAME3","고평가 링크");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2","링크정보 추가/편집");
define("_MI_MYLINKS_ADMENU3","신규투고 링크정보");
define("_MI_MYLINKS_ADMENU4","끊어진 링크 신고");
define("_MI_MYLINKS_ADMENU5","수정 링크정보");
define("_MI_MYLINKS_ADMENU6","링크 체크");

// Title of config items
define('_MI_MYLINKS_POPULAR','인기 링크가 되기 위한 최저방문수');
define('_MI_MYLINKS_NEWLINKS','메인페이지의 신규 링크에 표시할 링크정보 수');
define('_MI_MYLINKS_PERPAGE','페이지당 표시할 링크정보 수');
define('_MI_MYLINKS_USESHOTS','스크린샷을 사용함');
define('_MI_MYLINKS_USEFRAMES','프레임을 사용함');
define('_MI_MYLINKS_SHOTWIDTH','스크린샷의 그림파일 폭');
define('_MI_MYLINKS_ANONPOST','손님의 링크정보 투고를 허용함');
define('_MI_MYLINKS_AUTOAPPROVE','신규 링크정보를 자동승인함');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC','인기링크가 되기위해 필요한 방문수를 지정해 주세요!');
define('_MI_MYLINKS_NEWLINKSDSC','신규링크에 표시할 링크정보 수를 지정해 주세요!');
define('_MI_MYLINKS_PERPAGEDSC','링크정보 리스트에서 페이지당 표시할 링크정보 수를 지정해 주세요');
define('_MI_MYLINKS_USEFRAMEDSC','링크 페이지를 프레임내에 표시할지를 정해 주세요');
define('_MI_MYLINKS_USESHOTSDSC','링크정보에 스크린샷도 표시할 경우엔 예를 선택해 주세요');
define('_MI_MYLINKS_SHOTWIDTHDSC','스크린샷용 그림파일의 최대폭을 지정해 주세요');
define('_MI_MYLINKS_AUTOAPPROVEDSC','신규 링크정보를 자동승인처리하시려면 예를 선택해 주세요');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY','모듈전체');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','다운로드 모듈 전체에 대한 통지옵션');

define('_MI_MYLINKS_CATEGORY_NOTIFY','현 카테고리');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','현 카테고리에 대한 통지옵션');

define('_MI_MYLINKS_LINK_NOTIFY','현재 링크');
define('_MI_MYLINKS_LINK_NOTIFYDSC','현 링크정보에 대한 통지옵션');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','신규 카테고리');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','신규 카테고리가 신설된 경우 통지함');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','신규 카테고리가 신설된 경우 통지합니다.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 카테고리가 신설되었습니다.');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','링크정보 수정요청');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','링크정보 수정 요청이 있는 경우 통지함');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','링크정보 수정 요청이 있는 경우 통지합니다.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 링크정보에 대한 수정요청이 있었습니다.');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','끊어진 링크 신고');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','끊어진 링크 신고가 있는 경우 통지함');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','끊어진 링크 신고가 있는 경우 통지합니다.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 끊어진 링크신고가 있었습니다.');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','신규 링크정보 투고');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','신규 링크정보의 투고가 있는 경우 통지');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','신규 링크정보의 투고가 있는 경우 통지');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 링크정보의 투고가 있었습니다.');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','신규 링크정보 등록');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','신규 링크정보가 등록되어진 경우 통지');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','신규 링크정보가 등록되어진 경우 통지합니다.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 링크정보가 정식등록되었습니다.');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','신규 링크정보 투고(특정 카테고리내)');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','현 카테고리에 신규 링크정보가 투고된 경우 통지함');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','현 카테고리에 신규 링크정보가 투고된 경우 통지합니다.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 카테고리내에 신규링크정보가 투고되어졌습니다.');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','신규 링크정보 등록(특정 카테고리내)');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP','현 카테고리에 링크정보가 신규로 정식등록된 경우 통지함');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC','현 카테고리에 링크정보가 신규로 정식등록된 경우 통지합니다');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 카테고리에 링크정보가 신규로 정식등록되었습니다.');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','링크정보 승인');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP','이 링크정보가 승인된 경우 통지함');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC','이 링크정보가 승인된 경우 통지합니다.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 링크정보가 정식 승인/등록되었습니다.');

?>
