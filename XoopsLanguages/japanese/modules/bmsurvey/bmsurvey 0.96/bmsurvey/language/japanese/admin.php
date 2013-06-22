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
// Permition Check
define('_AM_BMSURVEY_ERROR01','�񤭹��߸��¤�����ޤ���');

// Admin Top Menu
define('_AM_PREFERENCES','��������');
define('_AM_BMSURVEY_GOMOD','�⥸�塼����̤�');
define('_AM_BMSURVEY_FAQ','FAQ');
define('_AM_BMSURVEY_SUPPORTSITE','���ݡ��ȡ�������');
// Admin Tag menu
define('_AM_BMSURVEY_MANAGE','�����٥�����');
define('_AM_BMSURVEY_RESPONDENT','�����Ԥ��Խ�');
define('_AM_BMSURVEY_CASTSURVEY','���󥱡�������');
define('_AM_BMSURVEY_CHECKRESPONSE','���󥱡��ȼ���');
define('_AM_BMSURVEY_RESISTER','��Ͽ�᡼������');
define('_AM_BMSURVEY_STATUS','���ơ������������å�');
// Document link
define('_AM_BMSURVEY_DOC_UPDATEINFO','���åץǡ��Ⱦ���');
define('_AM_BMSURVEY_DOC_POPNUPBLOG','PopnupBlog�Ȥ�Ϣư�ˤĤ���');
define('_AM_BMSURVEY_DOC_MAILTO','mailto���ץ����ȥǥե���������ͤ�����ˤĤ���');

//
define('_AM_BMSURVEY_RESPONDENTS','�᡼������԰���');
define('_AM_BMSURVEY_RESPONDENT_USAGE','*����ϥץ����ब���Ѥ��ޤ��Τǡ����ϡ���������פǤ���<br>
�����å��ֹ�ϥ��󥱡����������٤����ǹ�������Ť���Τ�̵���Ȥʤ�ޤ���');
define('_AM_BMSURVEY_USERNAME','�桼��̾');
define('_AM_BMSURVEY_PASSWORD','�����å��ֹ�');
define('_AM_BMSURVEY_FNAME','̾');
define('_AM_BMSURVEY_LNAME','��');
define('_AM_BMSURVEY_EMAIL','�᡼�륢�ɥ쥹');
define('_AM_BMSURVEY_DISABLED','�������');
define('_AM_BMSURVEY_SURVEYID','�����٥�ID');
define('_AM_BMSURVEY_RESPONSEID','����ID');
define('_AM_BMSURVEY_CHANGED','��������');
define('_AM_BMSURVEY_EXPIRE','���Ѵ���');
define('_AM_BMSURVEY_INVITATION','���󥱡��Ȳ����Ԥ���Ͽ�ѻ������');
define('_AM_BMSURVEY_SUBJECT','��̾');
define('_AM_BMSURVEY_SUBJECT_NEW','���󥱡��Ȳ�������Ͽ�Τ�����');
define('_AM_BMSURVEY_MESSAGE','��ʸ');
define('_AM_BMSURVEY_MESSAGE_NEW','
���줫�餪���ꤹ�륢�󥱡��Ȥ˲���ĺ���٤ˤϡ��桼����Ͽ��ɬ�פǤ���
[]��������Ϥ����ֿ�����������
----
u:[]Ǥ�դΥ桼��̾�����Ϥ��Ƥ���������
f:[]̾�ʥե������ȥ͡���ˤ����Ϥ��Ƥ���������
l:[]���ʥ饹�ȥ͡���ˤ����Ϥ��Ƥ���������
s:[]����ĺ�����󥱡����ֹ�Ǥ���
d:[]���󥱡��Ȥ˲���ĺ���ǽ��������꤯��������
');
define('_AM_BMSURVEY_CHOSESURVEY','�������륢�󥱡��Ȥ�����');
define('_AM_BMSURVEY_SENDQUESTION','���󥱡��Ȥ�����');
define('_AM_BMSURVEY_CONFIRM','�����Ԥγ�ǧ');
define('_AM_BMSURVEY_SENDQUESTIONNOW','�����򥯥�å�������оݼ������˥��󥱡��Ȥ��������ޤ�');
define('_AM_BMSURVEY_SENDQUESTIONUSAGE','�ʿ��������󥱡��Ȥ���������ȥ����å��ֹ椬�������졢�Ť����󥱡��Ȥϲ����ǽ�Ȥʤ�ޤ�����
<p>Wget�ȥ������塼��ǰʲ�URL��ƤӽФ��м�ư���Ǥ��ޤ���<p>%s<p>&hide=1��URL���ɲû��ꤹ��ȼ���ʸ���ά���ޤ�');
define('_AM_BMSURVEY_CHECKRESPONSENOW','�����򥯥�å�����ȥ��󥱡��Ȥ�����ѤΥ᡼��ܥå���������å����ޤ�');
define('_AM_BMSURVEY_CHECKRESPONSEUSAGE','Wget�ȥ������塼��ǰʲ�URL��ƤӽФ��м�ư���Ǥ��ޤ���
<p>%s');
define('_AM_BMSURVEY_SEEARESULT','�����򸫤�');
define('_AM_BMSURVEY_COPYQUESTION','�����٥��������򥳥ԡ�');
define('_AM_BMSURVEY_SELECTSTATUS','���֤�����');
define('_AM_BMSURVEY_RATECOUNT','�������ɽ��');
define('_AM_BMSURVEY_NORESPONSE','̵����');
define('_AM_BMSURVEY_TOTAL','���');
define('_AM_BMSURVEY_QUESTIONNUMBER','����<BR>�ֹ�');
define('_AM_BMSURVEY_FILEDNAME_DESC','<small><BR>��Ⱦ�ѱѿ�</small>');
define('_AM_BMSURVEY_ARCHIVED','����������');
define('_AM_BMSURVEY_TEST','�ƥ���');
define('_AM_BMSURVEY_EXPIRATION','��λ');
define('_AM_BMSURVEY_ACTIVE','�����ƥ���');
define('_AM_BMSURVEY_EDIT','�Խ�');

?>
