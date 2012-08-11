<?php
// $Id: modulesadmin.php,v 1.5 2003/02/12 11:38:42 okazu Exp $
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

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","��� ����");
define("_MD_AM_MODULE","���");
define("_MD_AM_VERSION","����");
define("_MD_AM_LASTUP","���� ������");
define("_MD_AM_DEACTIVATED","��Ȱ��ȭ");
define("_MD_AM_ACTION","ó��");
define("_MD_AM_DEACTIVATE","��Ȱ��ȭó��");
define("_MD_AM_ACTIVATE","Ȱ��ȭó��");
define("_MD_AM_UPDATE","���׷��̵�");
define("_MD_AM_DUPEN","����� ����Ÿ���̽����� ���ߵ�ϵǾ� �ֽ��ϴ�!");
define("_MD_AM_DEACTED","�����Ͻ� ����� ��Ȱ��ȭó���Ͽ����ϴ�. ���� �� ����� �����ϰ� ����(���ν���)�Ͻ� �� �ֽ��ϴ�.");
define("_MD_AM_ACTED","�����Ͻ� ����� Ȱ��ȭó���Ͽ����ϴ�.");
define("_MD_AM_UPDTED","�����Ͻ� ����� ���׷��̵�ó���Ͽ����ϴ�.");
define("_MD_AM_SYSNO","�ý��� ����� ��Ȱ��ȭó���Ͻ� �� �����ϴ�.");
define("_MD_AM_STRTNO","�� ����� ����Ʈ�� ���۸��μ� ��ϵǾ��ֽ��ϴ�. �� ����� ��Ȱ��ȭ�Ͻ÷��� ���� �Ϲݼ��� �޴����� ���۸���� ������ �ֽñ� �ٶ��ϴ�.");

// added in RC2
define("_MD_AM_PCMFM","������ ������ ����ó���մϴ�.");

// added in RC3
define("_MD_AM_ORDER","ǥ�ü���");
define("_MD_AM_ORDER0","(0 = ǥ�þ���)");
define("_MD_AM_ACTIVE","Ȱ��ȭ");
define("_MD_AM_INACTIVE","��Ȱ��ȭ");
define("_MD_AM_NOTINSTALLED","�̼�ġ");
define("_MD_AM_NOCHANGE","�������");
define("_MD_AM_INSTALL","��ġ(�ν���)");
define("_MD_AM_UNINSTALL","����(���ν���)");
define("_MD_AM_SUBMIT","������");
define("_MD_AM_CANCEL","���");
define("_MD_AM_DBUPDATE","����Ÿ���̽��� �����Ͽ����ϴ�.");
define("_MD_AM_BTOMADMIN","������ �޴��� ���ư�");

// %s represents module name
define("_MD_AM_FAILINS","%s ����� ��ġ�� �����Ͽ����ϴ�.");
define("_MD_AM_FAILACT","%s ����� Ȱ��ȭó���� �����Ͽ����ϴ�.");
define("_MD_AM_FAILDEACT","%s ����� ��Ȱ��ȭó���� �����Ͽ����ϴ�.");
define("_MD_AM_FAILUPD","%s ����� ���׷��̵�ó���� �����Ͽ����ϴ�.");
define("_MD_AM_FAILUNINS","%s ����� ���ſ� �����Ͽ����ϴ�.");
define("_MD_AM_FAILORDER","%s ����� ǥ�ü������濡 �����Ͽ����ϴ�.");
define("_MD_AM_FAILWRITE","���� �޴� ���Ͽ��� ���⿡ �����Ͽ����ϴ�.");
define("_MD_AM_ALEXISTS","%s ����� �̹� �����մϴ�.");
define("_MD_AM_ERRORSC","����:");
define("_MD_AM_OKINS","%s ����� ��ġ�� ���������� �Ϸ�Ǿ����ϴ�.");
define("_MD_AM_OKACT","%s ����� Ȱ��ȭó���� ���������� �Ϸ�Ǿ����ϴ�.");
define("_MD_AM_OKDEACT","%s ����� ��Ȱ��ȭó���� ���������� �Ϸ�Ǿ����ϴ�.");
define("_MD_AM_OKUPD","%s ����� ���׷��̵�ó���� ���������� �Ϸ�Ǿ����ϴ�.");
define("_MD_AM_OKUNINS","%s ����� ���������� ����(���ν���)�Ǿ����ϴ�.");
define("_MD_AM_OKORDER","%s ����� ǥ�ü��������� ���������� �̷�������ϴ�.");

define('_MD_AM_RUSUREINS','�� ����� ��ġ�Ͻ÷��� �Ʒ��� ��ư�� Ŭ���� �ּ���');
define('_MD_AM_RUSUREUPD','�� ����� ���׷��̵��Ͻ÷��� �Ʒ��� ��ư�� Ŭ���� �ּ���');
define('_MD_AM_RUSUREUNINS','������ �� ����� ����(���ν���)�Ͻ� �ǰ���?');
define('_MD_AM_LISTUPBLKS','����� ���׷��̵�ó���մϴ�.<br />�����Ͻ� ����� ����(���ø��� �ɼ�)�� ����� ó���˴ϴ�.<br />');
define('_MD_AM_NEWBLKS','�ű� ���');
define('_MD_AM_DEPREBLKS','Deprecated Blocks');
?>