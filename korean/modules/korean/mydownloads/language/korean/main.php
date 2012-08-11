<?php
// $Id: main.php,v 1.11 2004/12/26 19:11:56 onokazu Exp $
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

//%%%%%%		Module Name 'MyDownloads'		%%%%%

define("_MD_THANKSFORINFO","�ٿ�ε� ������ ������ �ּż� �����մϴ�. ������ Ȯ���� �� �������� ���ó���� �帮�ڽ��ϴ�.");
define("_MD_THANKSFORHELP","����/������ �ּż� �������� ����帳�ϴ�. ������ Ȯ���� �� �ݿ��ϵ��� �ϰڽ��ϴ�.");
define("_MD_FORSECURITY","����Ʈ/���� ������ ���� ���� IP�� ���̵� �ӽ������� ���ó���ϴ� �� ���� �ٶ��ϴ�.");
define("_MD_NOPERMISETOLINK","�� �ٿ�ε������� ���� ���� �������� �� ����Ʈ�� �������� �ƴմϴ�.<br /><br />����Ʈ �����ڿ��� Ÿ ����Ʈ�� �������� ����������ũ���� ������ ��û�� �ֽñ� �ٶ��ϴ�.   <br /><b>����������ũ!!</b> <br /><br /><b>����������ũ��:</b>Ÿ ����Ʈ�� �������� ��ġ �ڱ����Ʈ�� �������� ��ó�� �������� ��ũó���ϴ� ���� �ǹ��մϴ�. <br /><br />���� <b>IP�ּ�</b>�� ���ó���Ǿ����ϴ�.");
define("_MD_ALL","���");
define("_MD_DESCRIPTION","����");
define("_MD_SEARCH","�˻�");
define("_MD_SUBMITCATHEAD","�ٿ�ε� ������ ���");

define("_MD_MAIN","����");
define("_MD_POPULAR","�ٿ��");
define("_MD_NEWTHISWEEK","�������̳��� ��ϵǾ�����");
define("_MD_UPTHISWEEK","�������̳��� ���׷��̵�Ǿ�����");

define("_MD_POPULARITYLTOM","�ٿ�� (���� �ͺ���)");
define("_MD_POPULARITYMTOL","�ٿ�� (���� �ͺ���)");
define("_MD_TITLEATOZ","���� (A to Z)");
define("_MD_TITLEZTOA","���� (Z to A)");
define("_MD_DATEOLD","�Ͻ� (������ �ͺ���)");
define("_MD_DATENEW","�Ͻ� (�� �ͺ���)");
define("_MD_RATINGLTOH","�� (�򰡰� ���� �ͺ���)");
define("_MD_RATINGHTOL","�� (�򰡰� ���� �ͺ���)");

define("_MD_NOSHOTS","��ũ������ �����ϴ�");
define("_MD_EDITTHISDL","�� �ٿ�ε� ������ ������");

define("_MD_DESCRIPTIONC","����: ");
define("_MD_EMAILC","�����ּ�: ");
define("_MD_CATEGORYC","ī�װ��: ");
define("_MD_LASTUPDATEC","���� �����Ͻ�: ");
define("_MD_DLNOW","�ٷ� �ٿ�ε�!");
define("_MD_VERSION","����");
define("_MD_SUBMITDATE","�����");
define("_MD_DLTIMES","%s �� �ٿ�ε�");
define("_MD_FILESIZE","����ũ��");
define("_MD_SUPPORTEDPLAT","��밡�� �÷���");
define("_MD_HOMEPAGE","Ȩ������");
define("_MD_HITSC","�ٿ�ε��: ");
define("_MD_RATINGC","��: ");
define("_MD_ONEVOTE","1 ǥ");
define("_MD_NUMVOTES","%s ǥ");
define("_MD_RATETHISFILE","�� �ٿ�ε������� ��");
define("_MD_MODIFY","����");
define("_MD_REPORTBROKEN","�ļ�����/������ ��ũ �Ű�");
define("_MD_TELLAFRIEND","ģ������ ��õ");
define("_MD_EDIT","����");

define("_MD_THEREARE","�� ����Ʈ���� ��<b>%s</b> ���� �ٿ�ε������� �����մϴ�.");
define("_MD_LATESTLIST","�ű� �ٿ�ε�");

define("_MD_REQUESTMOD","�ٿ�ε������� ���� ��û");
define("_MD_FILEID","���� ID: ");
define("_MD_FILETITLE","�ٿ�ε� ����: ");
define("_MD_DLURL","�ٿ�ε� URL: ");
define("_MD_HOMEPAGEC","Ȩ������: ");
define("_MD_VERSIONC","����: ");
define("_MD_FILESIZEC","���ϻ�����: ");
define("_MD_NUMBYTES","%s ����Ʈ");
define("_MD_PLATFORMC","��밡�� �÷���: ");
define("_MD_SHOTIMAGE","��ũ���� �̹���: ");
define("_MD_SENDREQUEST","������");
define("_MD_OPTIONS",'�ɼ�: ');
define("_MD_NOTIFYAPPROVE",'�� �ٿ�ε������� ���ε� ��� ������');

define("_MD_VOTEAPPRE","��(Vote)�� �̷�������ϴ�.");
define("_MD_THANKYOU","������ ����/���� ����帳�ϴ�.(%s)  "); // %s is your site name
define("_MD_VOTEONCE","�ٿ�ε������� ���� �򰡴� 1�� 1ȸ�� ���ѵǾ� �ֽ��ϴ�.");
define("_MD_RATINGSCALE","�򰡴� 1-10 �� �������� �����Ͻñ� �ٶ��ϴ�. ���� �����ϼ��� ���� �򰡸� �ǹ��մϴ�.");
define("_MD_BEOBJECTIVE","������ �򰡸� ��Ź�帳�ϴ�.");
define("_MD_DONOTVOTE","�ڱ��ڽ��� �ٿ�ε������� ���ؼ� ���Ͻ� �� �����ϴ�.");
define("_MD_RATEIT","��");

define("_MD_INTFILEFOUND","������ �ٿ�ε� ������ �߰ߵǾ����ϴ�.( %s)"); // %s is your site name

define("_MD_RECEIVED","�ٿ�ε� ������ �����Ͽ����ϴ�. �����մϴ�.");
define("_MD_WHENAPPROVED","�� �ٿ�ε� ������ �������� ����/��ϵ� ��� ���Ϸ� �뺸�� �帳�ϴ�.");
define("_MD_SUBMITONCE","������ �ٿ�ε� ������ �ߺ� �����Ͻ� �� �����ϴ�.");
define("_MD_ALLPENDING","��� �ٿ�ε� ������ ����Ȯ���� ���� ����/��Ͽ��θ� �����ϰ� �˴ϴ�.");
define("_MD_DONTABUSE","���̵�� IP�ּҸ� ����Ͽ����ϴ�. �ùٸ� �̿��� ��Ź�帳�ϴ�.");
define("_MD_TAKEDAYS","�ٿ�ε� ������ �������� ����/��ϵ� ������ �ణ�� ������ �ɸ��� �ִ� �� ���عٶ��ϴ�.");

define("_MD_RANK","����");
define("_MD_CATEGORY","ī�װ��");
define("_MD_HITS","�ٿ�ε� ��");
define("_MD_RATING","��");
define("_MD_VOTE","�򰡼�");

define("_MD_SORTBY","���ļ�:");
define("_MD_TITLE","����");
define("_MD_DATE","�Ͻ�");
define("_MD_POPULARITY","�ٿ�ε��");
define("_MD_CURSORTBY","���� ���ļ�: %s");
define("_MD_PREVIOUS","���� ������");
define("_MD_NEXT","���� ������");
define("_MD_NOMATCH","�ش��ϴ� �ٿ�ε� ������ �������� �ʽ��ϴ�.");

define("_MD_TOP10","%s ����Ʈ10"); // %s is a downloads category name

define("_MD_SUBMIT","������");
define("_MD_CANCEL","���");

define("_MD_BYTES","����Ʈ");
define("_MD_ALREADYREPORTED","����/������ �ּż� ����帳�ϴ�. Ȯ���� �ݿ��ϵ��� �ϰڽ��ϴ�.");
define("_MD_MUSTREGFIRST","�ٿ�ε� ������ �����Ͻ÷��� ���� ȸ������� �ϼž߸� �մϴ�.");
define("_MD_NORATING","�������� ���õǾ����� �ʽ��ϴ�.");
define("_MD_CANTVOTEOWN","�ڱ��ڽ��� �ٿ�ε� ������ ���ؼ� ���Ͻ� �� �����ϴ�.");

//%%%%%%	Module Name 'MyDownloads' (Admin)	  %%%%%

define("_MD_DLCONF","�ٿ�ε� ���� ����");
define("_MD_GENERALSET","�Ϲݼ���");
define("_MD_ADDMODDELETE","ī�װ��/�ٿ�ε������� �߰�/����/����");
define("_MD_DLSWAITING","���δ�� �ٿ�ε�����");
define("_MD_BROKENREPORTS","�ļյ� ����/������ ��ũ �Ű�");
define("_MD_MODREQUESTS","�ٿ�ε� ���� ���� ��û");
define("_MD_SUBMITTER","������: ");
define("_MD_DOWNLOAD","�ٿ�ε�");
define("_MD_APPROVE","����");
define("_MD_DELETE","����");
define("_MD_NOSUBMITTED","�ٿ�ε������� �ű������ �����ϴ�.");
define("_MD_ADDMAIN","���� ī�װ�� �ۼ�");
define("_MD_TITLEC","����: ");
define("_MD_IMGURL","ī�װ�� �׸����� URL (�����׸��Դϴ�. �׸����̴� 50�ȼ��� �����˴ϴ�.): ");
define("_MD_ADD","�߰�");
define("_MD_ADDSUB","���� ī�װ�� �ۼ�");
define("_MD_IN","�θ� ī�װ��");
define("_MD_ADDNEWFILE","�ű� �ٿ�ε� ����");
define("_MD_MODCAT","ī�װ�� ����");
define("_MD_MODDL","�ٿ�ε� ���� ����");
define("_MD_USER","���̵�");
define("_MD_IP","IP�ּ�");
define("_MD_USERAVG","��� ����");
define("_MD_TOTALRATE","�� ����");
define("_MD_NOREGVOTES","���ȸ���� �򰡰� �����ϴ�.");
define("_MD_NOUNREGVOTES","�մԿ� ���� �򰡰� �����ϴ�.");
define("_MD_VOTEDELETED","�� ������ �����Ͽ����ϴ�.");
define("_MD_NOBROKEN","�ļ�����/������ ��ũ�� ���� �Ű�� �����ϴ�.");
define("_MD_IGNOREDESC","���� (�ļ�����/������ ��ũ �Ű�� �����ϰ� �� <b>�Ű����</b>���� �����մϴ�.)");
define("_MD_DELETEDESC","���� (�ļ�����/������ ��ũ �Ű�� ���� �ٿ�ε� ������ �Բ� �����մϴ�.)");
define("_MD_REPORTER","���� ���:");
define("_MD_FILESUBMITTER","�ٿ�ε����� ������:");
define("_MD_IGNORE","����");
define("_MD_FILEDELETED","�ٿ�ε� ������ �����Ͽ����ϴ�.");
define("_MD_BROKENDELETED","�ļ�����/������ ��ũ �Ű�� �����Ͽ����ϴ�.");
define("_MD_USERMODREQ","�ٿ�ε����� ���� ��û");
define("_MD_ORIGINAL","������");
define("_MD_PROPOSED","������");
define("_MD_OWNER","�ٿ�ε� ���� ������: ");
define("_MD_NOMODREQ","�ٿ�ε����� ������û�� �����ϴ�.");
define("_MD_DBUPDATED","����Ÿ���̽��� ���������� �����Ͽ����ϴ�!");
define("_MD_MODREQDELETED","�ٿ�ε����� ������û�� �����Ͽ����ϴ�.");
define("_MD_IMGURLMAIN","ī�װ�� �׸����� URL (�����׸��Դϴ�. �׸��� ���̴� 50 �ȼ��� ������,���� ī�װ����): ");
define("_MD_PARENT","�θ�ī�װ��:");
define("_MD_SAVE","��������");
define("_MD_CATDELETED","ī�װ���� �����Ͽ����ϴ�.");
define("_MD_WARNING","WARNING: ������ �� ī�װ���� �׿� ���� �ٿ�ε����� ����Ÿ�� ��� �����Ͻ� �ǰ���?");
define("_MD_YES","��");
define("_MD_NO","�ƴϿ�");
define("_MD_NEWCATADDED","ī�װ���� �߰��Ͽ����ϴ�.");
define("_MD_ERROREXIST","ERROR: �����Ͻ� �ٿ�ε������� �̹� ��ϵǾ��� �ֽ��ϴ�.");
define("_MD_ERRORTITLE","ERROR: ������ �Է��� �ּ���!");
define("_MD_ERRORDESC","ERROR: ������ �Է��� �ּ���!");
define("_MD_NEWDLADDED","�ű� �ٿ�ε������� �߰��Ͽ����ϴ�.");
define("_MD_HELLO","%s ��, �������");
define("_MD_WEAPPROVED","���� �����Ͻ� �ٿ�ε������� �������� ����/���ó�� �Ǿ����ϴ�.");
define("_MD_THANKSSUBMIT","������ �ּż� �����մϴ�.");

define("_MD_MUSTBEVALID","��ũ���� �׸������� %s ���丮���� ������ ����� �ּ���(ex. shot.gif). �׸������� �������� ���� �ÿ��� �׳� �������� �μ���.");

define("_MD_REGUSERVOTES","���ȸ���� �� (�� �򰡼�: %s)");
define("_MD_ANONUSERVOTES","�մ��� �� (�� �򰡼�: %s)");

define("_MD_YOURFILEAT","Your file submitted at %s"); // this is an approved mail subject. %s is your site name

define("_MD_VISITAT","�پ��� �ٿ�ε����� �ֽ��ϴ�. ���� �̿�ٶ��ϴ�.(%s)");

define("_MD_DLRATINGS","������ (�򰡼�: %s)");
define("_MD_ISAPPROVED","���� �ٿ�ε������� �������� ����/��ϵǾ����ϴ�.");
?>
