<?php
// $Id: admin.php,v 1.10 2004/12/26 19:11:59 onokazu Exp $
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

//%%%%%%	File Name  index.php   	%%%%%
define("_MD_A_FORUMCONF","��й� ����");
define("_MD_A_ADDAFORUM","��й� �߰�");
define("_MD_A_LINK2ADDFORUM","�ű� ��й��� �߰��մϴ�.");
define("_MD_A_EDITAFORUM","��й� ����");
define("_MD_A_LINK2EDITFORUM","��й� ������ �����մϴ�.");
define("_MD_A_SETPRIVFORUM","�������й� ����");
define("_MD_A_LINK2SETPRIV","�������й��� ���� �� �����۾��� �մϴ�.");
define("_MD_A_SYNCFORUM","���� �� ������");
define("_MD_A_LINK2SYNC","��й濡���� ���� ���� �������մϴ�.");
define("_MD_A_ADDACAT","ī�װ� �߰�");
define("_MD_A_LINK2ADDCAT","��й� ī�װ��� �űԷ� �ۼ��մϴ�.");
define("_MD_A_EDITCATTTL","ī�װ� Ÿ��Ʋ ����");
define("_MD_A_LINK2EDITCAT","��й� ī�װ� Ÿ��Ʋ�� �����մϴ�.");
define("_MD_A_RMVACAT","ī�װ� ����");
define("_MD_A_LINK2RMVCAT","��й� ī�װ��� �����մϴ�.");
define("_MD_A_REORDERCAT","ī�װ� ��ġ ����");
define("_MD_A_LINK2ORDERCAT","��й� ī�װ��� ǥ�ü����� �����մϴ�.");

//%%%%%%	File Name  admin_forums.php   	%%%%%
define("_MD_A_FORUMUPDATED","��й��� �����Ͽ����ϴ�. ");
define("_MD_A_HTSMHNBRBITHBTWNLBAMOTF","������ ������ �����Ͽ����ϴ�. ��й濡�� �ݵ�� 1���̻��� �����ڰ� �ʿ��մϴ�.");
define("_MD_A_FORUMREMOVED","��й��� �����Ͽ����ϴ�.");
define("_MD_A_FRFDAWAIP","��й濡 ���� ��� ����۵��� ����Ÿ���̽����� �����Ͽ����ϴ�.");
define("_MD_A_NOSUCHFORUM","�ش��ϴ� ��й��� �������� �ʽ��ϴ�.");
define("_MD_A_EDITTHISFORUM","��й� ����");
define("_MD_A_DTFTWARAPITF","��й� ���� (����:��й濡 ���� ��� ����۵��� ����ó���˴ϴ�!)");
define("_MD_A_FORUMNAME","��й� �̸�:");
define("_MD_A_FORUMDESCRIPTION","��й� ����:");
define("_MD_A_MODERATOR","������:");
define("_MD_A_REMOVE","����");
define("_MD_A_NOMODERATORASSIGNED","�����ڰ� �����Ǿ� ���� �ʽ��ϴ�.");
define("_MD_A_NONE","����");
define("_MD_A_CATEGORY","ī�װ�:");
define("_MD_A_ANONYMOUSPOST","��� �湮��");
define("_MD_A_REGISTERUSERONLY","���ȸ����");
define("_MD_A_MODERATORANDADMINONLY","������/�����ڸ�");
define("_MD_A_TYPE","Ÿ��:");
define("_MD_A_PUBLIC","����");
define("_MD_A_PRIVATE","�����");
define("_MD_A_SELECTFORUMEDIT","������ ��й��� ������ �ּ���");
define("_MD_A_NOFORUMINDATABASE","����Ÿ���̽��� ��й��� �������� �ʽ��ϴ�.");
define("_MD_A_DATABASEERROR","����Ÿ���̽� ����");
define("_MD_A_EDIT","����");
define("_MD_A_CATEGORYUPDATED","ī�װ��� ���ŵǾ����ϴ�.");
define("_MD_A_EDITCATEGORY","������ ī�װ�:");
define("_MD_A_CATEGORYTITLE","ī�װ� Ÿ��Ʋ:");
define("_MD_A_SELECTACATEGORYEDIT","������ ī�װ� ����");
define("_MD_A_CATEGORYCREATED","�ű� ī�װ��� �ۼ��Ǿ����ϴ�.");
define("_MD_A_NTWNRTFUTCYMDTVTEFS","����: ī�װ��� ���� ��й��� ����ó������ �ʽ��ϴ�. ��й��� ������ ���������� �����ϼž� �մϴ�.");
define("_MD_A_REMOVECATEGORY","ī�װ� ����");
define("_MD_A_CREATENEWCATEGORY","�ű� ī�װ� �ۼ�");
define("_MD_A_YDNFOATPOTFDYAA","�Է����� �ʿ��� ����Ÿ�� ��� �Է��� �ּ���<br>���� 1���̻��� �����ڸ� �����ϼž߸� �մϴ�.");
define("_MD_A_FORUMCREATED","��й��� �ż��Ͽ����ϴ�.");
define("_MD_A_VTFYJC","���� ��й��� �湮");
define("_MD_A_EYMAACBYAF","����: ��й��� �߰��ϱ� ���� ���� ī�װ��� �߰��ϼž߸� �մϴ�.");
define("_MD_A_CREATENEWFORUM","�ű� ��й� �ۼ�");
define("_MD_A_ACCESSLEVEL","�׼��� ����:");
define("_MD_A_CATEGORYMOVEUP","ī�װ��� ���� �̵��Ͽ����ϴ�.");
define("_MD_A_TCIATHU","�����Ͻ� ī�װ��� �̹� �ֻ����� ��ġ�ϰ� �ֽ��ϴ�.");
define("_MD_A_CATEGORYMOVEDOWN","ī�װ��� �Ʒ��� �̵��Ͽ����ϴ�.");
define("_MD_A_TCIATLD","�����Ͻ� ī�װ��� �̹� �������� ��ġ�ϰ� �ֽ��ϴ�.");
define("_MD_A_SETCATEGORYORDER","ī�װ� ǥ����ġ�� ����");
define("_MD_A_TODHITOTCWDOTIP","���� ���������������� ī�װ��� ǥ����ġ�� ���մϴ�. ī�װ��� ��ġ�� ���� �̵��� ��쿣 ���� ��ư�� Ŭ��, �Ʒ��� �̵��� ��쿣 �Ʒ��� ��ư�� Ŭ�����ּ��� ");
define("_MD_A_ECWMTCPUODITO","�ѹ� Ŭ���ϽǶ����� ��ĭ�� �̵��ϰ� �˴ϴ�.");
define("_MD_A_CATEGORY1","ī�װ�");
define("_MD_A_MOVEUP","����");
define("_MD_A_MOVEDOWN","�Ʒ���");


define("_MD_A_FORUMUPDATE","������ ������ �����Ͽ����ϴ�.");
define("_MD_A_RETURNTOADMINPANEL","�����޴���");
define("_MD_A_RETURNTOFORUMINDEX","���� ������������");
define("_MD_A_ALLOWHTML","HTML�±׸� �����:");
define("_MD_A_YES","��");
define("_MD_A_NO","�ƴϿ�");
define("_MD_A_ALLOWSIGNATURES","������ �߰���:");
define("_MD_A_HOTTOPICTHRESHOLD","�α������� ���� ���� ��:");
define("_MD_A_POSTPERPAGE","������ �� ǥ���� ����� ��:");
define("_MD_A_TITNOPPTTWBDPPOT","(1�������� ǥ���� ����� ���� ������ �ּ���)");
define("_MD_A_TOPICPERFORUM","��й濡���� �������� ���ȼ�:");
define("_MD_A_TITNOTPFTWBDPPOAF","(���� ����Ʈ���� �������� ǥ���� ������ ���� ������ �ּ���)");
define("_MD_A_SAVECHANGES","��������");
define("_MD_A_CLEAR","Clear");
define("_MD_A_CLICKBELOWSYNC","����� ���� �����踦 �ǽ��մϴ�. ����� ���� �߸��Ǿ��ٰ� �����Ǿ��� ��� ����ϼ���");
define("_MD_A_SYNCHING","������ ������");
define("_MD_A_DONESYNC","������ �Ϸ�");
define("_MD_A_CATEGORYDELETED","ī�װ��� �����Ͽ����ϴ�.");

//%%%%%%	File Name  admin_priv_forums.php   	%%%%%

define("_MD_A_SAFTE","������ ��й��� ����");
define("_MD_A_NFID","����Ÿ���̽��� ��й��� �������� �ʽ��ϴ�.");
define("_MD_A_EFPF","������ �������й�: <b>%s</b>");
define("_MD_A_UWA","������ ����� ȸ��:");
define("_MD_A_UWOA","������ ������ ȸ��:");
define("_MD_A_ADDUSERS","�߰� -->");
define("_MD_A_CLEARALLUSERS","Clear");
define("_MD_A_REVOKEPOSTING","���� �㰡���� ����");
define("_MD_A_GRANTPOSTING","���� �㰡��");
?>