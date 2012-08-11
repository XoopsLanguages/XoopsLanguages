<?php
// $Id: modinfo.php,v 1.15 2004/12/26 19:11:59 onokazu Exp $
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
define("_MI_NEWBB_NAME","포럼");

// A brief description of this module
define("_MI_NEWBB_DESC","XOOPS 포럼 모듈");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BNAME1","최근 투고글");
define("_MI_NEWBB_BNAME2","참조수가 많은 토픽");
define("_MI_NEWBB_BNAME3","투고수가 많은 토픽");
define("_MI_NEWBB_BNAME4","비공개토론방의 최근 투고글");

// Names of admin menu items
define("_MI_NEWBB_ADMENU1","토론방 추가");
define("_MI_NEWBB_ADMENU2","토론방 편집");
define("_MI_NEWBB_ADMENU3","비공개토론방 설정");
define("_MI_NEWBB_ADMENU4","투고글수의 재집계");
define("_MI_NEWBB_ADMENU5","카테고리 첨가");
define("_MI_NEWBB_ADMENU6","카테고리 편집");
define("_MI_NEWBB_ADMENU7","카테고리 삭제");
define("_MI_NEWBB_ADMENU8","카테고리 위치변경");

// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','표시중인 토픽');
define('_MI_NEWBB_THREAD_NOTIFYDSC','표시중인 토픽에 대한 통지옵션');

define('_MI_NEWBB_FORUM_NOTIFY','표시중인 토론방');
define('_MI_NEWBB_FORUM_NOTIFYDSC','표시중인 토론방에 대한 통지옵션');

define('_MI_NEWBB_GLOBAL_NOTIFY','모듈전체');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','포럼모듈 전체에 대한 통지옵션');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','답글의 투고');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','이 토픽에 대한 답글이 투고된 경우 통지함');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','이 토픽에 대한 답글이 투고된 경우 통지해 줍니다.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 토픽내에 새로운 답글이 투고되었습니다.');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','신규 토픽');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','이 토론방에 신규 토픽이 신설된 경우 통지함.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','이 토론방에 신규 토픽이 신설된 경우 통지해 줍니다..');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 토론방에 신규 토픽이 투고되었습니다.');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','신규 토론방');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','신규 토론방이 만들어진 경우 통지함.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','신규 토론방이 만들어진 경우 통지해 줍니다.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 토론방이 만들어졌습니다.');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','신규 투고');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','신규 토픽 또는 답글이 투고된 경우 통지함.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','신규 토픽 또는 답글이 투고된 경우 통지해 줍니다.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 투고가 있었습니다.');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','신규 투고');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','이 토론방에 신규 투고가 있는 경우 통지함.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','이 토론방에 신규 투고가 있는 경우 통지해 줍니다.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 토론방에 신규 투고가 있었습니다.');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','신규 투고 (투고글 포함)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','신규 토픽 또는 답글이 투고된 경우 통지함(투고글포함)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','신규 토픽 또는 답글이 투고된 경우 투고글도 포함해서 통지해 줍니다.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : 신규 투고가 있었습니다. (투고글 포함)');

?>
