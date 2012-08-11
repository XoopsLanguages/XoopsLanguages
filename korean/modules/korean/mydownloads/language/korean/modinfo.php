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
define("_MI_MYDOWNLOADS_NAME","�ٿ�ε�");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","�ٿ�ε������� ����/���Ҽ� �ִ� ���񽺸� �����մϴ�.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","�ű� �ٿ�ε�");
define("_MI_MYDOWNLOADS_BNAME2","����Ʈ �ٿ�ε�");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","���");
define("_MI_MYDOWNLOADS_SMNAME2","�α� �ٿ�ε�");
define("_MI_MYDOWNLOADS_SMNAME3","���� �ٿ�ε�");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","�ٿ�ε����� �߰�/����");
define("_MI_MYDOWNLOADS_ADMENU3","�ű����� �ٿ�ε�����");
define("_MI_MYDOWNLOADS_ADMENU4","�ļ�����/������ ��ũ �Ű�");
define("_MI_MYDOWNLOADS_ADMENU5","�����ٿ�ε�����");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','�α�ٿ�ε� �� �Ǳ����� �����ٿ�ε��');
define('_MI_MYDOWNLOADS_NEWDLS','�űԴٿ�ε� ��Ͽ� ǥ���� �ٿ�ε����� ��');
define('_MI_MYDOWNLOADS_PERPAGE','�������� ǥ���� �ٿ�ε����� ��');
define('_MI_MYDOWNLOADS_USESHOTS','��ũ������ �����');
define('_MI_MYDOWNLOADS_SHOTWIDTH','��ũ������ �׸����� ��');
define('_MI_MYDOWNLOADS_CHECKHOST','����������ũ ����');
define('_MI_MYDOWNLOADS_REFERERS','���� ����Ʈ���� ���Ͽ��� ������ũ�� ���!<br />�� ����Ʈ�� | �� �����ϼ���');
define("_MI_MYDOWNLOADS_ANONPOST","�մ��� �ٿ�ε����� ����� �����");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','�ű� �ٿ�ε������� �ڵ�������');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC','�α�ٿ�ε� �� �Ǳ����� �ʿ��� �ٿ�ε���� ������ �ּ���');
define('_MI_MYDOWNLOADS_NEWDLSDSC','�űԴٿ�ε� ��Ͽ� ǥ���� �ٿ�ε����� ���� ������ �ּ���');
define('_MI_MYDOWNLOADS_PERPAGEDSC','�ٿ�ε� ����Ʈ���� �������� ǥ���� �ٿ�ε����� ���� ������ �ּ���');
define('_MI_MYDOWNLOADS_USESHOTSDSC','�ٿ�ε������� ��ũ������ ǥ���� ��쿣 ���� ������ �ּ���');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC','��ũ������ �׸������� �ִ����� ������ �ּ���');
define('_MI_MYDOWNLOADS_REFERERSDSC','���Ͽ��� ������ũ�� ����� ����Ʈ���� ������ �ּ���');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC','�ű� �ٿ�ε������� �ڵ�����ó���Ͻ÷��� ���� ������ �ּ���');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY','�����ü');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC','�ٿ�ε� ��� ��ü�� ���� �����ɼ�');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY','�� ī�װ��');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC','�� ī�װ���� ���� �����ɼ�');

define('_MI_MYDOWNLOADS_FILE_NOTIFY','���� ����');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC','�� �ٿ�ε������� ���� �����ɼ�.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','�ű� ī�װ��');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','�ű� ī�װ���� �ż��� ��� ������.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','�ű� ī�װ���� �ż��� ��� �����մϴ�.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� ī�װ���� �ż��Ǿ����ϴ�.');                              

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','�ٿ�ε����� ������û');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','�ٿ�ε����� ���� ��û�� �ִ� ��� ������.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','�ٿ�ε����� ���� ��û�� �ִ� ��� �����մϴ�.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ٿ�ε������� ���� ������û�� �־����ϴ�.');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','�ļ�����/������ ��ũ �Ű�');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','�ļ�����/������ ��ũ �Ű�� �ִ� ��� ������');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','�ļ�����/������ ��ũ �Ű�� �ִ� ��� �����մϴ�.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ļ�����/������ ��ũ �Ű�� �־����ϴ�.');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','�ű� �ٿ�ε����� ����');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','�ű� �ٿ�ε������� ����� �ִ� ��� ����');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','�ű� �ٿ�ε������� ����� �ִ� ��� ����');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� �ٿ�ε������� ����� �ֽ��ϴ�.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','�ű� �ٿ�ε����� ���');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','�ű� �ٿ�ε������� ��ϵǾ��� ��� ����');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','�ű� �ٿ�ε� ������ ��ϵǾ��� ��� �����մϴ�.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ű� �ٿ�ε������� ���ĵ�ϵǾ����ϴ�.');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','�ű� �ٿ�ε����� ����(Ư�� ī�װ����)');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','�� ī�װ���� �ű� �ٿ�ε������� ����� ��� ������.');   
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','�� ī�װ���� �ű� �ٿ�ε������� ����� ��� �����մϴ�.');      
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ī�װ������ �űԴٿ�ε������� ����Ǿ������ϴ�.'); 

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','�ű� �ٿ�ε����� ���(Ư�� ī�װ����)');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','�� ī�װ���� �ٿ�ε������� �űԷ� ���ĵ�ϵ� ��� ������');   
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','�� ī�װ���� �ٿ�ε������� �űԷ� ���ĵ�ϵ� ��� �����մϴ�.');      
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : ī�װ���� �ٿ�ε������� �űԷ� ���ĵ�ϵǾ����ϴ�.'); 

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY','�ٿ�ε����� ����');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP','�� �ٿ�ε������� ���ε� ��� ������');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC','�� �ٿ�ε������� ���ε� ��쿡 �����մϴ�.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : �ٿ�ε������� ���� ����/��ϵǾ����ϴ�.');

?>
