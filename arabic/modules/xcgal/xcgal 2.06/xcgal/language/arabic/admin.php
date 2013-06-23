<?php
// $Id: admin.php,v 1.2 2005/09/01 13:58:33 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Gr�gory DEMAR                           //
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
define("_AM_CONFIG","��������� ��������");
define("_AM_GENERALCONF","��������� ��������");
define("_AM_CATMNGR","����� �������");
define("_AM_USERMNGR","����� �������");
define("_AM_GROUPMNGR","����� ���������");
define("_AM_BATCHADD","������ ��� �����");
define("_AM_ECARDMNGR","����� �������� ��������");
define("_AM_PICAPP","�� ������ �����");

define("_AM_PARAM_MISSING","�� ��� �������� ������ ��� �����");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","����� �������");
define("_AM_USERMGR_USHOW","��� �� ����� ���������� �������");
define("_AM_USERMGR_USHOWDEL","��� �� ��������� ������� ���������");
define("_AM_USERMGR_ULIST","����� �������");
define("_AM_USERMGR_USER","���");
define("_AM_USERMGR_ALBUMS","�������");
define("_AM_USERMGR_PICS","���");
define("_AM_USERMGR_QUOTA","������ ���������");
define("_AM_USERMGR_ALB","�����");
define("_AM_USERMGR_DELUID","��� ��� �����");
define("_AM_USERMGR_OPT","������");
define("_AM_USERMGR_NOTMOVE","** ��� ��� **");
define("_AM_USERMGR_DEL","���");
define("_AM_USERMGR_PROPS","�������");
define("_AM_USERMGR_EDITP","����� �����");

define("_AM_USERMGR_UONPAGE","%d ��� �� %d ����");
define("_AM_USERMGR_NOUSER","�� ��� ����� �� ���");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","����� �� ����� �������");
define("_AM_SRCHNEW_SEL_DIR","���� �����");
define("_AM_SRCHNEW_SEL_DIR_MSG","��� ������� ���� �� ����� ������ ����� ���� ������ ������ �� ���� ����� ��<br /><br />���� ������ ���� ���� ���� �����");
define("_AM_SRCHNEW_NO_PIC_ADD","������ ���� �� ���� �������");
define("_AM_SRCHNEW_NEED_ONE_ALB","����� ��� ����� ����� ���� ������ ��� �������");
define("_AM_SRCHNEW_WARNING","�����");
define("_AM_SRCHNEW_CHG_PERM","�������� ������� ������� ������ ��� ������ ������� ��� 755 �� 777 ��� ����� ������");
define("_AM_SRCHNEW_TARGET_ALB","��� ����� &quot;</b>%s<b>&quot; �� </b>%s");
define("_AM_SRCHNEW_FOLDER","������");
define("_AM_SRCHNEW_IMAGE","������");
define("_AM_SRCHNEW_ALB","�����");
define("_AM_SRCHNEW_RESULT","�������");
define("_AM_SRCHNEW_DIR_RO","������ ������� ���� ");
define("_AM_SRCHNEW_CANT_READ","������ ������ ");
define("_AM_SRCHNEW_INSERT","����� ��� ���� �� �������");
define("_AM_SRCHNEW_LIST_NEW","����� ����� �������");
define("_AM_SRCHNEW_INS_SEL","����� ����� ������ �����");
define("_AM_SRCHNEW_NO_PIC","�� ��� ����� ��� �����");
define("_AM_SRCHNEW_PATIENT","���� �������� ���� ������� ����� ���");
define("_AM_SRCHNEW_NOTES","<ul><li><b>ok</b> : ���� ��� ����� ����� �����<li><b>DP</b> : ���� �� ������ ���� ���� ���� ������ �����<li><b>PB</b> : ���� �� ����� �� ����� ������ ���� ��� ������ �� ���� ����� �� �� ������ ������� ������ �� ��<li>��� OK, DP, PB  �� ���� ��� ���� ���� ���� ��� ���� ��� �� ���� ���� ��� ��<li>��� �� ����� ������� ������ ��� ������� ��� ����� �� ���� ���� ��� ��� ������ ��������</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","��������");
define("_AM_GRPMGR_NAME","��� ��������");
define("_AM_GRPMGR_QUOTA","���� �������");
define("_AM_GRPMGR_RATE","����� ������� ��� �����");
define("_AM_GRPMGR_SENDCARD","����� ����� ����� ������");
define("_AM_GRPMGR_COM","����� ����� �����");
define("_AM_GRPMGR_UPLOAD","����� ����� ����");
define("_AM_GRPMGR_PRIVATE","����� ������ �����");
define("_AM_GRPMGR_APPLY","���� ���������");
define("_AM_GRPMGR_MANAGE","����� ���������");
define("_AM_GRPMGR_PUB_APPR","(1)");
define("_AM_GRPMGR_PRIV_APPR","(2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b>  ����� ����� ��� ������� ����� ����� ��� ����� ��� �� ������");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> ����� ����� ��� ��� ��������� �������� ���� ������� ����� ����� ��� �� ������");
define("_AM_GRPMGR_NOTES","�������");
define("_AM_GRPMGR_SYN","�������");
define("_AM_GRPMGR_SYN_NOTE","������� ���� ��� ������� ������ �� ������� �������");
define("_AM_GRPMGR_EMPTY","���� ��������� ������� ����<br /><br />����� ������� ������");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","������ �������� � '%s' ��� ����� �� ������ ���� ����");
define("_AM_CAT_UNKOWN","����� ���� ������ ��� ����� �� ����� ��������");
define("_AM_CAT_UGAL_CAT_RO","����� ������� ������ ����");
define("_AM_CAT_MNGCAT","����� �������");
define("_AM_CAT_CONF_DEL","�� ��� ����� �� ��� ���� ��� ��� ����� �");
define("_AM_CAT_CAT","�����");
define("_AM_CAT_OP","�������");
define("_AM_CAT_MOVE","���� ���");
define("_AM_CAT_UPCR","����� ������ ���");
define("_AM_CAT_PARENT","����� �������");
define("_AM_CAT_TITLE","��� �����");
define("_AM_CAT_DESC","��� �����");
define("_AM_CAT_NOCAT","* ������ ��� *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","����� �������� ��������");
define("_AM_CARDMGR_TIME","�������");
define("_AM_CARDMGR_SUNAME","��� ������");
define("_AM_CARDMGR_SEMAIL","���� ������");
define("_AM_CARDMGR_SIP","�� �� ������");
define("_AM_CARDMGR_PID","��� �������");
define("_AM_CARDMGR_STATUS","������");
define("_AM_CARDMGR_DEL_SELECTED","��� �������� ������ �����");
define("_AM_CARDMGR_DEL_ALL","��� �� ��������");
define("_AM_CARDMGR_DEL_PICKED","��� �� �������� ���� ��� ��������");
define("_AM_CARDMGR_DEL_UNPICKED","��� �� �������� ���� �� �����");
define("_AM_CARDMGR_CONPAGE","%d ����� �� %d ����");

?>
