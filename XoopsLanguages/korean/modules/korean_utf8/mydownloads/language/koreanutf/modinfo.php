<?php
// $Id: modinfo.php,v 1.16 2004/12/26 19:11:56 onokazu Exp $
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
define("_MI_MYDOWNLOADS_NAME","다운로드");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","다운로드정보를 공유/평가할수 있는 서비스를 제공합니다.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","신규 다운로드");
define("_MI_MYDOWNLOADS_BNAME2","베스트 다운로드");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","등록");
define("_MI_MYDOWNLOADS_SMNAME2","인기 다운로드");
define("_MI_MYDOWNLOADS_SMNAME3","고평가 다운로드");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","다운로드정보 추가/편집");
define("_MI_MYDOWNLOADS_ADMENU3","신규투고 다운로드정보");
define("_MI_MYDOWNLOADS_ADMENU4","파손파일/끊어진 링크 신고");
define("_MI_MYDOWNLOADS_ADMENU5","수정다운로드정보");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','인기다운로드 가 되기위한 최저다운로드수');
define('_MI_MYDOWNLOADS_NEWDLS','신규다운로드 블록에 표시할 다운로드정보 수');
define('_MI_MYDOWNLOADS_PERPAGE','페이지당 표시할 다운로드정보 수');
define('_MI_MYDOWNLOADS_USESHOTS','스크린샷을 사용함');
define('_MI_MYDOWNLOADS_SHOTWIDTH','스크린샷의 그림파일 폭');
define('_MI_MYDOWNLOADS_CHECKHOST','무단직접링크 금지');
define('_MI_MYDOWNLOADS_REFERERS','다음 사이트들은 파일에서 직접링크를 허용!<br />각 사이트는 | 로 구분하세요');
define("_MI_MYDOWNLOADS_ANONPOST","손님의 다운로드정보 투고를 허용함");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','신규 다운로드정보를 자동승인함');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC','인기다운로드 가 되기위해 필요한 다운로드수를 지정해 주세요');
define('_MI_MYDOWNLOADS_NEWDLSDSC','신규다운로드 블록에 표시할 다운로드정보 수를 지정해 주세요');
define('_MI_MYDOWNLOADS_PERPAGEDSC','다운로드 리스트에서 페이지당 표시할 다운로드정보 수를 지정해 주세요');
define('_MI_MYDOWNLOADS_USESHOTSDSC','다운로드정보에 스크린샷도 표시할 경우엔 예를 선택해 주세요');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC','스크린샷용 그림파일의 최대폭을 지정해 주세요');
define('_MI_MYDOWNLOADS_REFERERSDSC','파일에의 직접링크를 허용할 사이트들을 지정해 주세요');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC','신규 다운로드정보를 자동승인처리하시려면 예를 선택해 주세요');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY','모듈전체');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC','다운로드 모듈 전체에 대한 통지옵션');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY','현 카테고리');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC','현 카테고리에 대한 통지옵션');

define('_MI_MYDOWNLOADS_FILE_NOTIFY','현재 파일');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC','현 다운로드정보에 대한 통지옵션.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','신규 카테고리');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','신규 카테고리가 신설된 경우 통지함.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','신규 카테고리가 신설된 경우 통지합니다.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 카테고리가 신설되었습니다.');                              

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','다운로드정보 수정요청');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','다운로드정보 수정 요청이 있는 경우 통지함.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','다운로드정보 수정 요청이 있는 경우 통지합니다.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 다운로드정보에 대한 수정요청이 있었습니다.');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','파손파일/끊어진 링크 신고');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','파손파일/끊어진 링크 신고가 있는 경우 통지함');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','파손파일/끊어진 링크 신고가 있는 경우 통지합니다.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 파손파일/끊어진 링크 신고가 있었습니다.');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','신규 다운로드정보 투고');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','신규 다운로드정보의 투고가 있는 경우 통지');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','신규 다운로드정보의 투고가 있는 경우 통지');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 다운로드정보의 투고가 있습니다.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','신규 다운로드정보 등록');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','신규 다운로드정보가 등록되어진 경우 통지');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','신규 다운로드 정보가 등록되어진 경우 통지합니다.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 다운로드정보가 정식등록되었습니다.');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','신규 다운로드정보 투고(특정 카테고리내)');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','현 카테고리에 신규 다운로드정보가 투고된 경우 통지함.');   
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','현 카테고리에 신규 다운로드정보가 투고된 경우 통지합니다.');      
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 카테고리내에 신규다운로드정보가 투고되어졌습니다.'); 

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','신규 다운로드정보 등록(특정 카테고리내)');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','현 카테고리에 다운로드정보가 신규로 정식등록된 경우 통지함');   
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','현 카테고리에 다운로드정보가 신규로 정식등록된 경우 통지합니다.');      
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 카테고리에 다운로드정보가 신규로 정식등록되었습니다.'); 

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY','다운로드정보 승인');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP','이 다운로드정보가 승인된 경우 통지함');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC','이 다운로드정보가 승인된 경우에 통지합니다.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 다운로드정보가 정식 승인/등록되었습니다.');

?>
