<?php
// $Id: notification.php,v 1.6 2003/04/01 04:31:03 okazu Exp $
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

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','�̺�Ʈ ����');
define('_NOT_UPDATENOW','���� �ٷ� ����');
define('_NOT_UPDATEOPTIONS','�̺�Ʈ ����');

define('_NOT_CLEAR','Clear');
define('_NOT_CHECKALL','��� ����');
define('_NOT_MODULE','���');
define('_NOT_CATEGORY','ī�װ��');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','��Ī');
define('_NOT_EVENT','�̺�Ʈ');
define('_NOT_EVENTS','�̺�Ʈ');
define('_NOT_ACTIVENOTIFICATIONS','���ð����� �̺�Ʈ');
define('_NOT_NAMENOTAVAILABLE','�������');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','�׸���� �����ϴ�.');
define('_NOT_ITEMTYPENOTAVAILABLE','�׸�Ÿ���� �����ϴ�.');
define('_NOT_ITEMURLNOTAVAILABLE','�׸�URL�� �����ϴ�.');
define('_NOT_DELETINGNOTIFICATIONS','�����̺�Ʈ ����');
define('_NOT_DELETESUCCESS','�����Ͻ� �̺�Ʈ�� ���������� �����Ͽ����ϴ�.');
define('_NOT_UPDATEOK','�̺�Ʈ�� �����Ͽ����ϴ�.');
define('_NOT_NOTIFICATIONMETHODIS','���� ���: ');
define('_NOT_EMAIL','����');
define('_NOT_PM','PM����');
define('_NOT_DISABLE','������');
define('_NOT_CHANGE','����');

define('_NOT_NOACCESS','�� �������� ���� �׼��� ������ �����ϴ�.');

// Text for module config options

define('_NOT_ENABLE','�����');
define('_NOT_NOTIFICATION','�̺�Ʈ �������');

define('_NOT_CONFIG_ENABLED','�̺�Ʈ ������� ����');
define('_NOT_CONFIG_ENABLEDDSC','�� ��⿡�� Ư�� �̺�Ʈ�� �߻��� ���, �ش� �̺�Ʈ�� ���� ������ ����� �̵鿡�� �����޼����� �������� �����Ͻ� �� �ֽ��ϴ�. �� ����� ����Ͻ÷��� �� �� ������ �ּ���!');

define('_NOT_CONFIG_EVENTS','Ư�� �̺�Ʈ�� �����');
define('_NOT_CONFIG_EVENTSDSC','����ڰ� ���ð����� �̺�Ʈ�� ������ �ּ���');

define('_NOT_CONFIG_ENABLE','�̺�Ʈ ������� ����');
define('_NOT_CONFIG_ENABLEDSC','�� ��⿡�� Ư�� �̺�Ʈ�� �߻��� ���, �ش� �̺�Ʈ�� ���� ������ ����� �̵鿡�� �����޼����� �������� �����Ͻ� �� �ֽ��ϴ�. �� ����� ����ϱ� ���� ����� ������ �ּ���.');
define('_NOT_CONFIG_DISABLE','�̺�Ʈ ���� ������');
define('_NOT_CONFIG_ENABLEBLOCK','�̺�Ʈ ���� �ɼ��� ��Ͽ� ǥ��');
define('_NOT_CONFIG_ENABLEINLINE','�̺�Ʈ ���� �ɼ��� ������������ �ϴܿ� ǥ��');
define('_NOT_CONFIG_ENABLEBOTH','�̺�Ʈ ���� �ɼ��� ��� �׸��� ���������� �ϴܿ� ǥ��');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','�ڸ�Ʈ�� ÷���Ǿ����ϴ�.');
define('_NOT_COMMENT_NOTIFYCAP','�� �������� �ڸ�Ʈ�� ÷���Ǿ��� ��� ������');
define('_NOT_COMMENT_NOTIFYDSC','');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} {X_ITEM_TYPE} �� �ڸ�Ʈ�� ÷���Ǿ����ϴ�.');

define('_NOT_COMMENTSUBMIT_NOTIFY','�ű� �ڸ�Ʈ ����� �־����ϴ�.');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','�� �������� ������ �ʿ��� �ڸ�Ʈ�� ����Ǿ��� ��� ������');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} {X_ITEM_TYPE} �� �ű� �ڸ�Ʈ�� ����� �־����ϴ�.(�ڵ�����)');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','�ϸ�ũ');
define('_NOT_BOOKMARK_NOTIFYCAP','�� �������� �ϸ�ũ��.');
define('_NOT_BOOKMARK_NOTIFYDSC','�� �������� �ϸ�ũ�մϴ�. �����޼����� �߼۵��� �ʽ��ϴ�.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','�̺�Ʈ���� ���� �޼��� ���Ź��');
define('_NOT_METHOD_EMAIL','����');
define('_NOT_METHOD_PM','PM����');
define('_NOT_METHOD_DISABLE','�Ͻ������� �ߴ�');

define('_NOT_NOTIFYMODE','�̺�Ʈ ������ Ÿ�̹�');
define('_NOT_MODE_SENDALWAYS','�̺�Ʈ ���Žÿ� �ݵ�� ������');
define('_NOT_MODE_SENDONCE','�ѹ��� ������');
define('_NOT_MODE_SENDONCEPERLOGIN','�ѹ� ������ �Ŀ� ��α��νñ��� �������� ����');

define('_NOT_NOTHINGTODELETE','������ ������ �����ϴ�.');

?>