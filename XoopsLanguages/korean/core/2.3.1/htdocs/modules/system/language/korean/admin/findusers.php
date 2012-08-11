<?php
// $Id: findusers.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
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

//%%%%%%	File Name findusers.php 	%%%%%

define("_AM_FINDUS","���ȸ���˻�");
define("_AM_AVATAR","�ƹ�Ÿ");
define("_AM_REALNAME","�̸�");
define("_AM_REGDATE","�����");
define("_AM_EMAIL","�����ּ�");
define("_AM_PM","PM����");
define("_AM_URL","URL");
define("_AM_PREVIOUS","����");
define("_AM_NEXT","����");
define("_AM_USERSFOUND","%s ���� ���ȸ���� �˻��Ǿ����ϴ�.");

define("_AM_ACTUS","������ �Ϸ��(Ȱ��ȭ��) ���ȸ��: %s");
define("_AM_INACTUS","������ �Ϸ���� ����(��Ȱ��ȭ) ���ȸ��: %s");
define("_AM_NOFOUND","������ �����ϴ� ���ȸ���� �������� �ʽ��ϴ�.");
define("_AM_UNAME","���̵�");
define("_AM_ICQ","ICQ ��ȣ");
define("_AM_AIM","AOL �޽���");
define("_AM_YIM","Yahoo!�޽���");
define("_AM_MSNM","MSN�޽���");
define("_AM_LOCATION","�ּ�");
define("_AM_OCCUPATION","����");
define("_AM_INTEREST","���");
define("_AM_URLC","Ȩ������ URL");
define("_AM_LASTLOGMORE","<span style='color:#ff0000;'>X</span>�� �̻� �α������� ����");
define("_AM_LASTLOGLESS","<span style='color:#ff0000;'>X</span>�� �̳��� �α��������� �ִ�");
define("_AM_REGMORE","������� <span style='color:#ff0000;'>X</span>�� �̻� ���� ");
define("_AM_REGLESS","������� <span style='color:#ff0000;'>X</span>�� �̳��� ");
define("_AM_POSTSMORE","���� ���� <span style='color:#ff0000;'>X</span>�� �̻���");
define("_AM_POSTSLESS","���� ���� <span style='color:#ff0000;'>X</span>�� �̳���");
define("_AM_SORT","��������");
define("_AM_ORDER","ǥ�ü�");
define("_AM_LASTLOGIN","�����α��� �Ͻ�");
define("_AM_POSTS","���� ��");
define("_AM_ASC","��������");
define("_AM_DESC","��������");
define("_AM_LIMIT","�������� ǥ���� ���ȸ����");
define("_AM_RESULTS","�˻����");
define("_AM_SHOWMAILOK","ǥ���� ���ȸ���� Ÿ��");
define("_AM_MAILOK","���ϼ��� OK�� ���ȸ�����Ը�");
define("_AM_MAILNG","���ϼ��� NO�� ���ȸ�����Ը�");
define("_AM_SHOWTYPE","ǥ���� ���ȸ���� Ÿ��");
define("_AM_ACTIVE","Ȱ��ȭ������ ���ȸ����");
define("_AM_INACTIVE","��Ȱ��ȭ������ ���ȸ����");
define("_AM_BOTH","��� ���ȸ��");
define("_AM_SENDMAIL","�޼����� ����");
define("_AM_ADD2GROUP","���ȸ���� %s �׷��� ����� ����ó����");

define("_AM_GROUPS","�׷�");

?>