<?php
// $Id: main.php,v 1.13 2004/12/26 19:11:59 onokazu Exp $
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

//%%%%%%		Module Name phpBB  		%%%%%
//functions.php
define("_MD_ERROR","����");
define("_MD_NOPOSTS","������� �����ϴ�.");
define("_MD_GO","������");

//index.php
define("_MD_FORUM","����");
define("_MD_WELCOME","%s ����(��й�)�� ���Ű� ȯ���մϴ�.");
define("_MD_TOPICS","����");
define("_MD_POSTS","����");
define("_MD_LASTPOST","��������");
define("_MD_MODERATOR","������");
define("_MD_NEWPOSTS","������ �湮������ �� ����� �־����ϴ�.");
define("_MD_NONEWPOSTS","������ �湮������ �� ����� �������ϴ�.");
define("_MD_PRIVATEFORUM","�������й�");
define("_MD_BY","������"); // Posted by
define("_MD_TOSTART","������ �ִ� ��й濡 �����ϼż� �ǰ��� ������ñ� �ٶ��ϴ�.");
define("_MD_TOTALTOPICSC","�� ���ȼ�: ");
define("_MD_TOTALPOSTSC","�� ����ۼ�: ");
define("_MD_TIMENOW","����ð�: %s");
define("_MD_LASTVISIT","�����湮�Ͻ�: %s");
define("_MD_ADVSEARCH","���ǰ˻�");
define("_MD_POSTEDON","�����Ͻ�: ");
define("_MD_SUBJECT","����");

//page_header.php
define("_MD_MODERATEDBY","������ ");
define("_MD_SEARCH","�˻�");
define("_MD_SEARCHRESULTS","�˻����");
define("_MD_FORUMINDEX","���� ����������");
define("_MD_POSTNEW","�ű� ���� �ۼ���������");
define("_MD_REGTOPOST","�����Ͻ÷��� ���� ȸ�������");

//search.php
define("_MD_KEYWORDS","Ű����:");
define("_MD_SEARCHANY","�Ǵ�(OR)���ǿ��� �˻�(�⺻��)");
define("_MD_SEARCHALL","�׸���(AND)���ǿ��� �˻�");
define("_MD_SEARCHALLFORUMS","��� ��й��� �˻�");
define("_MD_FORUMC","��й�:");
define("_MD_SORTBY","����:");
define("_MD_DATE","�Ͻ�");
define("_MD_TOPIC","����");
define("_MD_USERNAME","���̵�");
define("_MD_SEARCHIN","���ǰ˻�:");
define("_MD_BODY","����");
define("_MD_NOMATCH","�˻����ǿ� �´� ����Ÿ�� �������� �ʽ��ϴ�.");
define("_MD_POSTTIME","���� �Ͻ�");

//viewforum.php
define("_MD_REPLIES","���");
define("_MD_POSTER","������");
define("_MD_VIEWS","����");
define("_MD_MORETHAN","�α� ����!");
define("_MD_MORETHAN2","�α� ����!");
define("_MD_TOPICSTICKY","��ƼŰ ����");
define("_MD_TOPICLOCKED","��� ����");
define("_MD_LEGEND","Legend");
define("_MD_NEXTPAGE","���� ������");
define("_MD_SORTEDBY","����:");
define("_MD_TOPICTITLE","���� Ÿ��Ʋ");
define("_MD_NUMBERREPLIES","��� ��");
define("_MD_TOPICPOSTER","������");
define("_MD_LASTPOSTTIME","���������Ͻ�");
define("_MD_ASCENDING","��������");
define("_MD_DESCENDING","��������");
define("_MD_FROMLASTDAYS","���� %s �Ϻ�");
define("_MD_THELASTYEAR","���� 1���");
define("_MD_BEGINNING","���");

//viewtopic.php
define("_MD_AUTHOR","������");
define("_MD_LOCKTOPIC","�� ������ ���");
define("_MD_UNLOCKTOPIC","�� ������ ����� ����");
define("_MD_STICKYTOPIC","��ƼŰ�������� ����");
define("_MD_UNSTICKYTOPIC","��ƼŰ���ȿ��� ����");
define("_MD_MOVETOPIC","�� ������ �̵�");
define("_MD_DELETETOPIC","�� ������ ����");
define("_MD_TOP","Top");
define("_MD_PARENT","�θ� ����");
define("_MD_PREVTOPIC","���� ����");
define("_MD_NEXTTOPIC","���� ����");

//forumform.inc
define("_MD_ABOUTPOST","����� ���Ͽ�");
define("_MD_ANONCANPOST","�� ��й濡���� ������ ����� �Ͻ� �� �ֽ��ϴ�.");
define("_MD_PRIVATE","�������й濡���� ������ ���� ȸ������ ����� �Ͻ� �� �ֽ��ϴ�.");
define("_MD_REGCANPOST","�� ��й濡���� ���ȸ������ ����� �Ͻ� �� �ֽ��ϴ�.");
define("_MD_MODSCANPOST","�� ��й濡���� ���� �����ڿ� �����ڸ��� ������ �� �ֽ��ϴ�.");
define("_MD_PREVPAGE","���� ������");
define("_MD_QUOTE","�ο�");

// ERROR messages
define("_MD_ERRORFORUM","ERROR: ��й��� ���õǾ��� ���� �ʽ��ϴ�.");
define("_MD_ERRORPOST","ERROR: ������� ���õǾ��� ���� �ʽ��ϴ�.");
define("_MD_NORIGHTTOPOST","�� ��й濡 ������ �� �ִ� ������ �����ϴ�.");
define("_MD_NORIGHTTOACCESS","�� ��й濡 ���� ���ٱ����� �����ϴ�.");
define("_MD_ERRORTOPIC","ERROR: ������ ���õǾ����� �ʽ��ϴ�.");
define("_MD_ERRORCONNECT","ERROR: ���� ����Ÿ���̽����� �׼����� �����Ͽ����ϴ�.");
define("_MD_ERROREXIST","ERROR: �����Ͻ� ��й��� �������� �ʽ��ϴ�. �ٽ� �ѹ� �õ��� �ּ���!");
define("_MD_ERROROCCURED","������ �߻��߽��ϴ�.");
define("_MD_COULDNOTQUERY","���� ����Ÿ���̽����� ���ǿ� �����Ͽ����ϴ�.");
define("_MD_FORUMNOEXIST","Error - �����Ͻ� ��й�/������ �������� �ʽ��ϴ�. �ٽ� �ѹ� �õ��� �ּ���!");
define("_MD_USERNOEXIST","�ش��ϴ� ȸ���� �������� �ʽ��ϴ�.");
define("_MD_COULDNOTREMOVE","Error - ����Ÿ���̽����� ������� �����ϴµ� �����Ͽ����ϴ�.");
define("_MD_COULDNOTREMOVETXT","Error - ������� �����ϴµ� �����Ͽ����ϴ�.");

//reply.php
define("_MD_ON","�����Ͻ�"); //Posted on
define("_MD_USERWROTE","%s ���� ���ñ�:"); // %s is username

//post.php
define("_MD_EDITNOTALLOWED","������� ������ ������ �����ϴ�.");
define("_MD_EDITEDBY","�����α�:");
define("_MD_ANONNOTALLOWED","�湮���� ���� �͸������ ���Ǿ� ���� �ʽ��ϴ�. <br />���� ȸ������� ���ּ���!");
define("_MD_THANKSSUBMIT","�������ּż� �����մϴ�!");
define("_MD_REPLYPOSTED","����� ����Ǿ����ϴ�.");
define("_MD_HELLO","�ȳ��ϼ��� %s ��,");
define("_MD_URRECEIVING","%s ��й濡 �����Ͻ� �ۿ� ���� ����� ����� �־����� �˷��帳�ϴ�."); // %s is your site name
define("_MD_CLICKBELOW","������� ���÷��� �Ʒ��� ��ũ�� Ŭ���� �ּ���!");

//forumform.inc
define("_MD_YOURNAME","���̵�:");
define("_MD_LOGOUT","�α׾ƿ�");
define("_MD_REGISTER","���");
define("_MD_SUBJECTC","����:");
define("_MD_MESSAGEICON","�޼��� ������:");
define("_MD_MESSAGEC","�޼���:");
define("_MD_ALLOWEDHTML","��밡�� HTML�±�:");
define("_MD_OPTIONS","�ɼ�:");
define("_MD_POSTANONLY","�͸� ����");
define("_MD_DISABLESMILEY","�󱼾������� ��ȿȭ");
define("_MD_DISABLEHTML","HTML�±� ����ȭ");
define("_MD_NEWPOSTNOTIFY","�� ���ȿ� ���� �ű������ �ִ� ��� ������");
define("_MD_ATTACHSIG","����÷��");
define("_MD_POST","����");
define("_MD_SUBMIT","������");
define("_MD_CANCELPOST","�������");

// forumuserpost.php
define("_MD_ADD","÷��");
define("_MD_REPLY","���");

// topicmanager.php
define("_MD_YANTMOTFTYCPTF","�� ����� �����ڿ� �����ڸ��� ����� �� �ֽ��ϴ�.");
define("_MD_TTHBRFTD","������ ����Ÿ���̽����� ����ó�� �Ͽ����ϴ�.");
define("_MD_RETURNTOTHEFORUM","��й����� ���ư�");
define("_MD_RTTFI","���� ������������ ���ư�");
define("_MD_EPGBATA","Error - �ٽ� �ѹ� �õ��� �ּ���.");
define("_MD_TTHBM","������ �̵��Ǿ����ϴ�.");
define("_MD_VTUT","������ ����");
define("_MD_TTHBL","������ ��ɽ��ϴ�.");
define("_MD_TTHBS","��ƼŰ �������� �����Ͽ����ϴ�.");
define("_MD_TTHBUS","��ƼŰ ���ȿ��� �����Ͽ����ϴ�.");
define("_MD_VIEWTHETOPIC","������ ����");
define("_MD_TTHBU","������ ����� �����մϴ�.");
define("_MD_OYPTDBATBOTFTTY","���� ��ư�� Ŭ���Ͻø� �����Ͻ� ���Ȱ� �׿� ���� ��� ����۵��� ������ �����˴ϴ�.");
define("_MD_OYPTMBATBOTFTTY","�̵� ��ư�� Ŭ���Ͻø� �����Ͻ� ���Ȱ� �׿� ���� ��� ����۵��� ��� ��й����� �̵��˴ϴ�.");
define("_MD_OYPTLBATBOTFTTY","��� ��ư�� Ŭ���Ͻø� �����Ͻ� ������ ��׽� �� �ֽ��ϴٽű� ���� �Ұ�). ����� ������ �����Ͻ� �� �ֽ��ϴ�.");
define("_MD_OYPTUBATBOTFTTY","������� ��ư�� Ŭ���Ͻø� �����Ͻ� ������ ����� �����մϴ�. ");
define("_MD_OYPTSBATBOTFTTY","��ƼŰ ��ư�� Ŭ���Ͻø� �����Ͻ� ������ ��ƼŰ�������� �����մϴ�.");
define("_MD_OYPTTBATBOTFTTY","��ƼŰ ���� ��ư�� Ŭ���Ͻø� �����Ͻ� ��ƼŰ������ �����մϴ�.");
define("_MD_MOVETOPICTO","�̵��� ����:");
define("_MD_NOFORUMINDB","DB�� ��й��� �������� �ʽ��ϴ�.");
define("_MD_DATABASEERROR","����Ÿ���̽� ����(Database Error)");
define("_MD_DELTOPIC","������ ����");

// delete.php
define("_MD_DELNOTALLOWED","�� ������� ������ ������ ���� ���� �ʽ��ϴ�.");
define("_MD_AREUSUREDEL","�� ����۰� �̿� ���ϴ� ��� ��۵��� ������ �����Ͻ� �ǰ���?");
define("_MD_POSTSDELETED","�����Ͻ� ����۰� �׿� ���� ��� ��۵��� �����Ǿ����ϴ�.");

// definitions moved from global.
define("_MD_THREAD","������");
define("_MD_FROM","�ּ�");
define("_MD_JOINED","�����");
define("_MD_ONLINE","�¶���");
define("_MD_BOTTOM","�Ʒ���");
?>
