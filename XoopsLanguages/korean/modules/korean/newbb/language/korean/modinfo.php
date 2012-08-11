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
define("_MI_NEWBB_NAME","����");

// A brief description of this module
define("_MI_NEWBB_DESC","XOOPS ���� ���");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BNAME1","�ֱ� �����");
define("_MI_NEWBB_BNAME2","�������� ���� ����");
define("_MI_NEWBB_BNAME3","������� ���� ����");
define("_MI_NEWBB_BNAME4","�������й��� �ֱ� �����");

// Names of admin menu items
define("_MI_NEWBB_ADMENU1","��й� �߰�");
define("_MI_NEWBB_ADMENU2","��й� ����");
define("_MI_NEWBB_ADMENU3","�������й� ����");
define("_MI_NEWBB_ADMENU4","����ۼ��� ������");
define("_MI_NEWBB_ADMENU5","ī�װ�� ÷��");
define("_MI_NEWBB_ADMENU6","ī�װ�� ����");
define("_MI_NEWBB_ADMENU7","ī�װ�� ����");
define("_MI_NEWBB_ADMENU8","ī�װ�� ��ġ����");

// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','ǥ������ ����');
define('_MI_NEWBB_THREAD_NOTIFYDSC','ǥ������ ���ȿ� ���� �����ɼ�');

define('_MI_NEWBB_FORUM_NOTIFY','ǥ������ ��й�');
define('_MI_NEWBB_FORUM_NOTIFYDSC','ǥ������ ��й濡 ���� �����ɼ�');

define('_MI_NEWBB_GLOBAL_NOTIFY','�����ü');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','������� ��ü�� ���� �����ɼ�');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','����� ����');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','�� ���ȿ� ���� ����� ����� ��� ������');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','�� ���ȿ� ���� ����� ����� ��� ������ �ݴϴ�.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ���ȳ��� ���ο� ����� ����Ǿ����ϴ�.');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','�ű� ����');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','�� ��й濡 �ű� ������ �ż��� ��� ������.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','�� ��й濡 �ű� ������ �ż��� ��� ������ �ݴϴ�..');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ��й濡 �ű� ������ ����Ǿ����ϴ�.');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','�ű� ��й�');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','�ű� ��й��� ������� ��� ������.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','�ű� ��й��� ������� ��� ������ �ݴϴ�.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ��й��� ����������ϴ�.');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','�ű� ����');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','�ű� ���� �Ǵ� ����� ����� ��� ������.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','�ű� ���� �Ǵ� ����� ����� ��� ������ �ݴϴ�.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ����� �־����ϴ�.');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','�ű� ����');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','�� ��й濡 �ű� ����� �ִ� ��� ������.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','�� ��й濡 �ű� ����� �ִ� ��� ������ �ݴϴ�.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ��й濡 �ű� ����� �־����ϴ�.');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','�ű� ���� (����� ����)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','�ű� ���� �Ǵ� ����� ����� ��� ������(���������)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','�ű� ���� �Ǵ� ����� ����� ��� ����۵� �����ؼ� ������ �ݴϴ�.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ����� �־����ϴ�. (����� ����)');

?>
