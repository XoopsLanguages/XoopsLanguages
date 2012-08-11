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
define("_MI_MYLINKS_NAME","��ũ��");

// A brief description of this module
define("_MI_MYLINKS_DESC","����Ʈ��ũ������ ����/���� �� �ִ� ���񽺸� �����մϴ�.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","�ű� ��ũ");
define("_MI_MYLINKS_BNAME2","����Ʈ ��ũ");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","���");
define("_MI_MYLINKS_SMNAME2","�α� ��ũ");
define("_MI_MYLINKS_SMNAME3","���� ��ũ");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2","��ũ���� �߰�/����");
define("_MI_MYLINKS_ADMENU3","�ű����� ��ũ����");
define("_MI_MYLINKS_ADMENU4","������ ��ũ �Ű�");
define("_MI_MYLINKS_ADMENU5","���� ��ũ����");
define("_MI_MYLINKS_ADMENU6","��ũ üũ");

// Title of config items
define('_MI_MYLINKS_POPULAR','�α� ��ũ�� �Ǳ� ���� �����湮��');
define('_MI_MYLINKS_NEWLINKS','������������ �ű� ��ũ�� ǥ���� ��ũ���� ��');
define('_MI_MYLINKS_PERPAGE','�������� ǥ���� ��ũ���� ��');
define('_MI_MYLINKS_USESHOTS','��ũ������ �����');
define('_MI_MYLINKS_USEFRAMES','�������� �����');
define('_MI_MYLINKS_SHOTWIDTH','��ũ������ �׸����� ��');
define('_MI_MYLINKS_ANONPOST','�մ��� ��ũ���� ����� �����');
define('_MI_MYLINKS_AUTOAPPROVE','�ű� ��ũ������ �ڵ�������');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC','�α⸵ũ�� �Ǳ����� �ʿ��� �湮���� ������ �ּ���!');
define('_MI_MYLINKS_NEWLINKSDSC','�űԸ�ũ�� ǥ���� ��ũ���� ���� ������ �ּ���!');
define('_MI_MYLINKS_PERPAGEDSC','��ũ���� ����Ʈ���� �������� ǥ���� ��ũ���� ���� ������ �ּ���');
define('_MI_MYLINKS_USEFRAMEDSC','��ũ �������� �����ӳ��� ǥ�������� ���� �ּ���');
define('_MI_MYLINKS_USESHOTSDSC','��ũ������ ��ũ������ ǥ���� ��쿣 ���� ������ �ּ���');
define('_MI_MYLINKS_SHOTWIDTHDSC','��ũ������ �׸������� �ִ����� ������ �ּ���');
define('_MI_MYLINKS_AUTOAPPROVEDSC','�ű� ��ũ������ �ڵ�����ó���Ͻ÷��� ���� ������ �ּ���');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY','�����ü');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','�ٿ�ε� ��� ��ü�� ���� �����ɼ�');

define('_MI_MYLINKS_CATEGORY_NOTIFY','�� ī�װ��');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','�� ī�װ���� ���� �����ɼ�');

define('_MI_MYLINKS_LINK_NOTIFY','���� ��ũ');
define('_MI_MYLINKS_LINK_NOTIFYDSC','�� ��ũ������ ���� �����ɼ�');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','�ű� ī�װ��');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','�ű� ī�װ���� �ż��� ��� ������');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','�ű� ī�װ���� �ż��� ��� �����մϴ�.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ī�װ���� �ż��Ǿ����ϴ�.');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','��ũ���� ������û');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','��ũ���� ���� ��û�� �ִ� ��� ������');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','��ũ���� ���� ��û�� �ִ� ��� �����մϴ�.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ��ũ������ ���� ������û�� �־����ϴ�.');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','������ ��ũ �Ű�');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','������ ��ũ �Ű�� �ִ� ��� ������');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','������ ��ũ �Ű�� �ִ� ��� �����մϴ�.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ������ ��ũ�Ű�� �־����ϴ�.');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','�ű� ��ũ���� ����');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','�ű� ��ũ������ ����� �ִ� ��� ����');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','�ű� ��ũ������ ����� �ִ� ��� ����');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ��ũ������ ����� �־����ϴ�.');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','�ű� ��ũ���� ���');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','�ű� ��ũ������ ��ϵǾ��� ��� ����');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','�ű� ��ũ������ ��ϵǾ��� ��� �����մϴ�.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ��ũ������ ���ĵ�ϵǾ����ϴ�.');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','�ű� ��ũ���� ����(Ư�� ī�װ����)');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','�� ī�װ���� �ű� ��ũ������ ����� ��� ������');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','�� ī�װ���� �ű� ��ũ������ ����� ��� �����մϴ�.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ī�װ������ �űԸ�ũ������ ����Ǿ������ϴ�.');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','�ű� ��ũ���� ���(Ư�� ī�װ����)');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP','�� ī�װ���� ��ũ������ �űԷ� ���ĵ�ϵ� ��� ������');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC','�� ī�װ���� ��ũ������ �űԷ� ���ĵ�ϵ� ��� �����մϴ�');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ī�װ���� ��ũ������ �űԷ� ���ĵ�ϵǾ����ϴ�.');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','��ũ���� ����');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP','�� ��ũ������ ���ε� ��� ������');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC','�� ��ũ������ ���ε� ��� �����մϴ�.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ��ũ������ ���� ����/��ϵǾ����ϴ�.');

?>
