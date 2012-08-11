<?php
// $Id: users.php,v 1.5 2003/02/12 11:38:42 okazu Exp $
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

//%%%%%%	Admin Module Name  Users 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_AM_AYSYWTDU","���ȸ�� %s �� ������ ������ �����Ͻǰǰ���?");
define("_AM_BYTHIS","������ ������ ��� �ش� ���ȸ���� ��� ������ �����˴ϴ�.");
define("_AM_YES","��");
define("_AM_NO","�ƴϿ�");
define("_AM_YMCACF","�ʼ��׸��� ��� ������ �ֽñ� �ٶ��ϴ�.");
define("_AM_CNRNU","�ű�ȸ�� ��Ͽ� �����Ͽ����ϴ�.");
define("_AM_EDEUSER","���ȸ�� ����/����");
define("_AM_NICKNAME","���̵�");
define("_AM_MODIFYUSER","���ȸ�� ����");
define("_AM_DELUSER","���ȸ�� ����");
define("_AM_GO","������");
define("_AM_ADDUSER","�ű� ���� �ۼ�");
define("_AM_NAME","�̸�");
define("_AM_EMAIL","�����ּ�");
define("_AM_OPTION","�����׸�(�ɼ�)");
define("_AM_AVATAR","�ƹ�Ÿ");
define("_AM_THEME","�׸�");
define("_AM_AOUTVTEAD","�� �����ּҸ� ����");
define("_AM_URL","Ȩ������");
define("_AM_ICQ","ICQ");
define("_AM_AIM","AIM");
define("_AM_YIM","YIM");
define("_AM_MSNM","MSNM");
define("_AM_LOCATION","�ּ�");
define("_AM_OCCUPATION","����");
define("_AM_INTEREST","���");
define("_AM_RANK","���");
define("_AM_NSRA","����ȵ���� �����Ǿ� ���� �ʽ��ϴ�.");
define("_AM_NSRID","����ȵ�޿� ���� ������ �������� �ʽ��ϴ�.");
define("_AM_ACCESSLEV","�׼��� ����");
define("_AM_SIGNATURE","����");
define("_AM_PASSWORD","�н�����");
define("_AM_INDICATECOF","* �� �ʼ��׸��� �ǹ��մϴ�.");
define("_AM_NOTACTIVE","�� ȸ���� ���� ��Ȱ��ȭ�����Դϴ�. ���� �ٷ� Ȱ��ȭó�� �Ͻðڽ��ϱ�?");
define("_AM_UPDATEUSER","���ȸ������ ����");
define("_AM_USERINFO","���ȸ�� �⺻����");
define("_AM_USERID","���ȸ����ȣ");
define("_AM_RETYPEPD","�н����� Ȯ�� ���Է�");
define("_AM_CHANGEONLY","(�����Ͻ� ��츸)");
define("_AM_USERPOST","���ȸ�� ��������");
define("_AM_STORIES","Stories");
define("_AM_COMMENTS","�����");
define("_AM_PTBBTSDIYT","���� ����Ÿ�� �߸��Ǿ��ٰ� �ǴܵǾ��� ��쿣 �Ʒ��� ��ư�� Ŭ���ϼż� ����Ÿ�� ������ó���غ��ñ� �ٶ��ϴ�.");
define("_AM_SYNCHRONIZE","������ ó��");
define("_AM_USERDONEXIT","���ǿ� �´� ���ȸ���� �������� �ʽ��ϴ�!");
define("_AM_STNPDNM","�н����尡 �߸� �ԷµǾ����ϴ�. �ٽ� �Է��� �ּ���!");
define("_AM_CNGTCOM","������� ��ȸ�� �����Ͽ����ϴ�.");
define("_AM_CNGTST","Could not get total stories");
define("_AM_CNUUSER","���ȸ�� ���� ���ſ� �����Ͽ����ϴ�.");
define("_AM_CNGUSERID","���ȸ����ȣ ��濡 �����Ͽ����ϴ�.");
define("_AM_LIST","����Ʈ");
define("_AM_NOUSERS","���ȸ���� ���õǾ��� ���� �ʽ��ϴ�.");

define("_AM_CNRNU2","���ȸ���� �׷쿡 �߰����� ���߽��ϴ�: %s.");

?>