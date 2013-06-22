<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                Bluemoon.Multi-Survey                                      //
//                    Copyright (c) 2005 Yoshi.Sakai @ Bluemoon inc.         //
//                       <http://www.bluemooninc.biz/>                       //
// ------------------------------------------------------------------------- //
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
// The name of this module
define("_MI_SURVEY_NAME","�£ͥ����٥�");
define("_MI_SURVEY_ADMIN","��������");
// A brief description of this module
define("_MI_SURVEY_BNAME1","���ϥե�����");
define("_MI_SURVEY_DESC","Bluemoon.Multi-Survey");

// Names of blocks for this module
define('_MI_MSURVEY_RESPONDENT','�����Ԥ��Խ�');
define('_MI_MSURVEY_CASTSURVEY','���󥱡�������');
define('_MI_MSURVEY_RECIEVECHECK','���󥱡��ȼ���');
define('_MI_MSURVEY_RESISTER','��Ͽ�᡼������');
define('_MI_MSURVEY_STATUS','���ơ������������å�');
define('_MI_MSURVEY_FILECHARSET','ź�եե�����̾�Υ�����');
define('_MI_MSURVEY_FILECHARSET_DESC','��������¸���Υե�����̾�˻Ȥ�ʸ�������ɤ����ꤷ�ޤ�(SJIS,UTF-8,EUC-JP��)');
define('_MI_MSURVEY_CSVCHARSET','CSV�ե�����̾�Υ�����');
define('_MI_MSURVEY_CSVCHARSET_DESC','CSV���������ɻ��˥���С��Ȥ���ʸ�������ɤ����ꤷ�ޤ�(SJIS,UTF-8,EUC-JP��)');
define('_MI_MSURVEY_CSVADDNUM','CSV���ϤΥե������̾���ֹ�ɸ��');
define('_MI_MSURVEY_CSVADDNUM_DESC','CSV���ϤΥե������̾����̤��ֹ�򿶤�ޤ���');
define('_MI_MSURVEY_CHOICEOPT','CSV���Ϥ�������ܥ�����');
define('_MI_MSURVEY_CHOICEOPT_DESC','������ܤν��Ϥ�ʸ�����ֹ���¤ӽ�ˤǹԤ��������򤷤ޤ���');
define('_MI_MSURVEY_CSVOTHERF','CSV���ϻ���!other�ե����ޥå�');
define('_MI_MSURVEY_CSVOTHERF_DESC','������ܤ���¾�����Ϥ��줿�ͤ���Ϥ�����Υե����ޥåȤ���ꤷ�ޤ���');
define('_MI_MSURVEY_MAILSERVER','�᡼�롦������');
define('_MI_MSURVEY_MAILSERVER_DESC','�����ѥ᡼���POP3�����Ф����ꤷ�ޤ�');
define('_MI_MSURVEY_MAILUSER','�᡼�롦�桼����');
define('_MI_MSURVEY_MAILUSER_DESC','�����٥��ѥ᡼�륢�ɥ쥹�Υ桼����̾�����ꤷ�ޤ�');
define('_MI_MSURVEY_MAILPWD','�᡼�롦�ѥ����');
define('_MI_MSURVEY_MAILPWD_DESC','�����٥��ѥ᡼�륢�ɥ쥹�Υѥ���ɤ����ꤷ�ޤ�');
define('_MI_MSURVEY_MAILADDR','�᡼�롦���ɥ쥹');
define('_MI_MSURVEY_MAILADDR_DESC','�����٥��ѥ᡼�륢�ɥ쥹�����ꤷ�ޤ�');
define('_MI_MSURVEY_CASTKEY','�����ۿ���ǧ�ڥ�����');
define('_MI_MSURVEY_CASTKEY_DESC','cast.php ��¹Ԥ���Ȥ���keyʸ��������ꤷ�ޤ�');
define('_MI_MSURVEY_MANAGEGROUP','������˥塼���ѥ��롼��');
define('_MI_MSURVEY_MANAGEGROUP_DESC','������˥塼�����ѤǤ��륰�롼�פ����ꤷ�ޤ�');
define('_MI_MSURVEY_MGPSTATUS','�������롼�פθ���');
define('_MI_MSURVEY_MGPSTATUS_DESC','�������롼�פˤ���Խ��������ƥ��١��ȡ���λ����Ĥ��ޤ�');
define('_MI_MSURVEY_BLOCKLIST','�֥�å��ꥹ�ȿ�');
define('_MI_MSURVEY_BLOCKLIST_DESC','�֥�å����ɽ�����륢�󥱡��Ȥο�����ꤷ�ޤ�');
define('_MI_MSURVEY_ADDINFO','�������ղþ�����ղ�');
define('_MI_MSURVEY_ADDINFO_DESC','�������ղþ����ޤ�ƥ᡼���������ޤ�');
define('_MI_MSURVEY_ADDUSAGE','����˻Ȥ������ղ�');
define('_MI_MSURVEY_ADDUSAGE_DESC','����᡼��˻Ȥ��������ޤ�ƥ᡼���������ޤ�');
define('_MI_MSURVEY_ONERESPONSE','������1��˸���');
define('_MI_MSURVEY_ONERESPONSE_DESC','���Ĥμ���᡼����Ф�������������Ǥ���褦�ˤ��ޤ�');
define('_MI_MSURVEY_RESETRADIOBUTTON','�饸���ܥ����������');
define('_MI_MSURVEY_RESETRADIOBUTTON_DESC','�饸���ܥ�����������Ǥ���褦�ˤ��ޤ�');
define('_MI_MSURVEY_RESULTRANK','���ɽ�����̤ˤ�����졼��ɽ����ˡ');
define('_MI_MSURVEY_RESULTRANK_DESC','ʿ�ѥ���դ��������ɽ���������򤷤ޤ�');
?>