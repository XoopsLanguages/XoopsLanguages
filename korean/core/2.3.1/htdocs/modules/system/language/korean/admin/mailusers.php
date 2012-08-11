<?php
// $Id: mailusers.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
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

//%%%%%%	Admin Module Name  MailUsers	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","�޼��� ������ ����:");
define("_AM_SENDTOUSERS2","������:");
define("_AM_GROUPIS","�׷� (��������)");
define("_AM_TIMEFORMAT","(yyyy-mm-dd�������� ����, ��������)");
define("_AM_LASTLOGMIN","�����α��� �Ͻð� ������ �Ͻú��� ��");
define("_AM_LASTLOGMAX","�����α��� �Ͻð� ������ �Ͻú��� ��");
define("_AM_REGDMIN","��� �Ͻð� ������ �Ͻú��� ��");
define("_AM_REGDMAX","��� �Ͻð� ������ �Ͻú��� ��");
define("_AM_IDLEMORE","�����α��� �Ͻð� X �� �̻� ��(��������)");
define("_AM_IDLELESS","�����α��� �Ͻð�  X �� �̳� (��������)");
define("_AM_MAILOK","����Ʈ�κ����� ���ϼ����� ����ϴ� ���ȸ�����Ը� (��������)");
define("_AM_INACTIVE","��Ȱ��ȭ������ ȸ�����Ը�(��������)");
define("_AMIFCHECKD","üũ�� ��� ���� ������ ��� ���õ˴ϴ�. ���� PM������ �߼۵��� �ʽ��ϴ�.");
define("_AM_MAILFNAME","�۽��� (���ϻ���)");
define("_AM_MAILFMAIL","�۽��� �����ּ� (���ϻ���)");
define("_AM_MAILSUBJECT","����");
define("_AM_MAILBODY","����");
define("_AM_MAILTAGS","��밡�� �±�:");
define("_AM_MAILTAGS1","{X_UID} �� ���ȸ�� ���̵� ǥ���մϴ�.");
define("_AM_MAILTAGS2","{X_UNAME} �� ���ȸ�� �̸��� ǥ���մϴ�.");
define("_AM_MAILTAGS3","{X_UEMAIL} �� ���ȸ�� �����ּҸ� ǥ���մϴ�.");
define("_AM_MAILTAGS4","{X_UACTLINK} �� ���Ȱ��ȭ ���������� ��ũ�� ǥ���մϴ�.");
define("_AM_SENDTO","�۽Ź��");
define("_AM_EMAIL","����");
define("_AM_PM","PM����");
define("_AM_SENDMTOUSERS","�޼��� �۽�");
define("_AM_SENT","�۽��� ���� ���ȸ��");
define("_AM_SENTNUM","%s - %s (�հ�: %s ��)");
define("_AM_SENDNEXT","���");
define("_AM_NOUSERMATCH","������ �����ϴ� ���ȸ���� ã������ �����ϴ�.");
define("_AM_SENDCOMP","�޼��� �۽��� �Ϸ�Ǿ����ϴ�.");

?>