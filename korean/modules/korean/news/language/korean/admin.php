<?php
// $Id: admin.php,v 1.11 2004/12/26 19:12:01 onokazu Exp $
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

//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","����Ÿ���̽��� ���������� �����Ͽ����ϴ�!");
define("_AM_CONFIG","���� ����");
define("_AM_AUTOARTICLES","���� ���� ���");
define("_AM_STORYID","������� ID");
define("_AM_TITLE","����");
define("_AM_TOPIC","����");
define("_AM_POSTER","������");
define("_AM_PROGRAMMED","���� ���� �Ͻ�");
define("_AM_ACTION","����");
define("_AM_EDIT","����");
define("_AM_DELETE","����");
define("_AM_LAST10ARTS","�ֽ� ������� 10");
define("_AM_PUBLISHED","�����Ͻ�"); // Published Date
define("_AM_GO","������");
define("_AM_EDITARTICLE","������� ����");
define("_AM_POSTNEWARTICLE","�ű� ������� �ۼ�");
define("_AM_ARTPUBLISHED","������簡 ����Ǿ����ϴ�.");
define("_AM_HELLO","%s ��,�ȳ��ϼ���!");
define("_AM_YOURARTPUB","�Բ��� �����Ͻ� ������簡 �������� ���/���� �Ǿ����ϴ�.");
define("_AM_TITLEC","����: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","�����Ͻ�: ");
define("_AM_RUSUREDEL","������ �� �������� �׿� ���� �ڸ�Ʈ���� ��� �����Ͻ� �ǰ���?");
define("_AM_YES","��");
define("_AM_NO","�ƴϿ�");
define("_AM_INTROTEXT","���� ����");
define("_AM_EXTEXT","Ȯ�� ����");
define("_AM_ALLOWEDHTML","��밡�� HTML�±�:");
define("_AM_DISAMILEY","�󱼾������� ��ȿȭ");
define("_AM_DISHTML","HTML�� ��ȿȭ");
define("_AM_APPROVE","����");
define("_AM_MOVETOTOP","�� ��縦 ���������� �ֻ������ �̵���");
define("_AM_CHANGEDATETIME","�����Ͻø� ������");
define("_AM_NOWSETTIME","���� ���翹���Ͻ�: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","���� �ð�: %s");  // %s is the current datetime
define("_AM_SETDATETIME","�����Ͻø� ����");
define("_AM_MONTHC","��:");
define("_AM_DAYC","��:");
define("_AM_YEARC","��:");
define("_AM_TIMEC","�ð�:");
define("_AM_PREVIEW","�̸�����");
define("_AM_SAVE","����");
define("_AM_PUBINHOME","������������ ������");
define("_AM_ADD","÷��");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","���� ���� �ۼ�");
define("_AM_TOPICNAME","���ȸ�");
define("_AM_MAX40CHAR","(�ִ� 20��)");
define("_AM_TOPICIMG","���� �׸�����");
define("_AM_IMGNAEXLOC","%s �� �ִ� �׸����ϸ�");
define("_AM_FEXAMPLE","��: games.gif");
define("_AM_ADDSUBTOPIC","���� ���� �ۼ�");
define("_AM_IN","�θ� ����");
define("_AM_MODIFYTOPIC","���� ����");
define("_AM_MODIFY","������");
define("_AM_PARENTTOPIC","�θ� ����");
define("_AM_SAVECHANGE","��������");
define("_AM_DEL","����");
define("_AM_CANCEL","���");
define("_AM_WAYSYWTDTTAL","WARNING: ������ �� ���Ȱ� �̿� ���� ��� �������,�ڸ�Ʈ ���� �����Ͻðڽ��ϱ�?");


// Added in Beta6
define("_AM_TOPICSMNGR","���� ���� �޴�");
define("_AM_PEARTICLES","������� ����/����");
define("_AM_NEWSUB","�ű� ���� ���");
define("_AM_POSTED","�����Ͻ�");
define("_AM_GENERALCONF","�Ϲݼ���");

// Added in RC2
define("_AM_TOPICDISPLAY","���� �׸������� ǥ��");
define("_AM_TOPICALIGN","��ġ");
define("_AM_RIGHT","������");
define("_AM_LEFT","����");

define("_AM_EXPARTS","����������");
define("_AM_EXPIRED","��������");
define("_AM_CHANGEEXPDATETIME","��ȿ������ ����");
define("_AM_SETEXPDATETIME","��ȿ������ ����");
define("_AM_NOWSETEXPTIME","���� ������ ���� : %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","���ȸ��� ���ԵǾ� ���� �ʽ��ϴ�.");
define("_AM_EMPTYNODELETE","������ ���� �����ϴ�.");
?>
