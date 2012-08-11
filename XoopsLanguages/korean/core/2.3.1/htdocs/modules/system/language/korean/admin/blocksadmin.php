<?php
// $Id: blocksadmin.php,v 1.6 2003/10/02 07:16:47 okazu Exp $
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

//%%%%%%	Admin Module Name  Blocks 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN","��� ����");
define("_AM_ADDBLOCK","�ű� ��� �ۼ�");
define("_AM_LISTBLOCK","��� ����� ǥ��");
define("_AM_SIDE","ǥ�� ���̵�");
define("_AM_BLKDESC","��� ����");
define("_AM_TITLE","Ÿ��Ʋ");
define("_AM_WEIGHT","ǥ�ü���");
define("_AM_ACTION","ó��");
define("_AM_BLKTYPE","��� Ÿ��");
define("_AM_LEFT","����");
define("_AM_RIGHT","������");
define("_AM_CENTER","�߾�");
define("_AM_VISIBLE","ǥ��");
define("_AM_POSCONTT","�߰� �������� ������ ��ġ");
define("_AM_ABOVEORG","���� �������� ��");
define("_AM_AFTERORG","���� �������� �Ʒ�");
define("_AM_EDIT","����");
define("_AM_DELETE","����");
define("_AM_SBLEFT","���̵��� - ����");
define("_AM_SBRIGHT","���̵��� - ������");
define("_AM_CBLEFT","�߾Ӻ�� - ����");
define("_AM_CBRIGHT","�߾Ӻ�� - ������");
define("_AM_CBCENTER","�߾Ӻ�� - �߾�");
define("_AM_CBBOTTOMLEFT","�߾Ӻ�� - �ϴ� ����");
define("_AM_CBBOTTOMRIGHT","�߾Ӻ�� - �ϴ� ������");
define("_AM_CBBOTTOM","�߾Ӻ�� - �ϴ�");
define("_AM_CONTENT","������");
define("_AM_OPTIONS","�����׸�");
define("_AM_CTYPE","������ ����");
define("_AM_HTML","HTML");
define("_AM_PHP","PHP Script");
define("_AM_AFWSMILE","�ڵ� ���� (�󱼾����� ��ȿ)");
define("_AM_AFNOSMILE","Auto Format (�󱼾����� ��ȿ)");
define("_AM_SUBMIT","������");
define("_AM_CUSTOMHTML","Ŀ���� ��� (HTML)");
define("_AM_CUSTOMPHP","Ŀ���� ��� (PHP)");
define("_AM_CUSTOMSMILE","Ŀ���� ��� (�ڵ�����+�󱼾�����)");
define("_AM_CUSTOMNOSMILE","Ŀ���� ��� (�ڵ�����)");
define("_AM_DISPRIGHT","������ ��ϸ� ǥ��");
define("_AM_SAVECHANGES","������� ����");
define("_AM_EDITBLOCK","�������");
define("_AM_SYSTEMCANT","�ý��� ����� �����ϽǼ� �����ϴ�!");
define("_AM_MODULECANT","�� ����� ���� ���� �����Ҽ��� �����ϴ�! ���� �� ����� ���� ����� ��Ȱ��ȭ���ּ���!");
define("_AM_RUSUREDEL","<strong>%s</strong>����� ������ �����Ͻ� �ǰ���?");
define("_AM_NAME","�̸�");
define("_AM_USEFULTAGS","��밡�� �±�:");
define("_AM_BLOCKTAG1","%s ��(��) %s �� ǥ���մϴ�.");
define('_AM_SVISIBLEIN','ǥ���� ��: %s');
define('_AM_TOPPAGE','Top������');
define('_AM_VISIBLEIN','ǥ���� ��');
define('_AM_ALLPAGES','��� ������');
define('_AM_TOPONLY','Top����������');
define('_AM_ADVANCED','���μ���');
define('_AM_BCACHETIME','ĳ�� ����');
define('_AM_BALIAS','Alias name');
define('_AM_CLONE','����');  // clone a block
define('_AM_CLONEBLK','Ŭ��'); // cloned block
define('_AM_CLONEBLOCK','Ŭ�� ����� �ۼ�');
define('_AM_NOTSELNG',"'%s' �� ���õǾ����� �ʽ��ϴ�."); // error message
define('_AM_EDITTPL','���÷� ����');
define('_AM_MODULE','���');
define('_AM_GROUP','�׷�');
define('_AM_UNASSIGNED','���Ҵ�');

define("_AM_CUSTOM","Ŀ���� ���");
define('_AM_GENERATOR','������ ���(by %s)');
define('_AM_TYPES','��� Ÿ��');

?>