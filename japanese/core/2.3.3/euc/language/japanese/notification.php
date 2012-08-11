<?php
// $Id: notification.php 2008-07-29 06:18+09:00 2 8 6 $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','���٥�Ȥ�����');
define('_NOT_UPDATENOW','����������');
define('_NOT_UPDATEOPTIONS','���٥�Ȥι���');

define('_NOT_CLEAR','���ꥢ');
define('_NOT_DELETE','���');
define('_NOT_CHECKALL','���ƥ����å�');
define('_NOT_MODULE','�⥸�塼��');
define('_NOT_CATEGORY','���ƥ���');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','̾��');
define('_NOT_EVENT','���٥��');
define('_NOT_EVENTS','���٥��');
define('_NOT_ACTIVENOTIFICATIONS','�����ǽ�ʥ��٥��');
define('_NOT_NAMENOTAVAILABLE','̵��');
define('_NOT_ITEMNAMENOTAVAILABLE','����̾��̵���Ǥ�');
define('_NOT_ITEMTYPENOTAVAILABLE','���ܥ����פ�̵���Ǥ�');
define('_NOT_ITEMURLNOTAVAILABLE','���� URL ��̵���Ǥ�');
define('_NOT_DELETINGNOTIFICATIONS','���򥤥٥�Ȥκ��');
define('_NOT_DELETESUCCESS','���򤵤줿���٥�Ȥ������ޤ���');
define('_NOT_UPDATEOK','���٥�Ȥ򹹿����ޤ���');
define('_NOT_NOTIFICATIONMETHODIS','������ˡ��');
define('_NOT_EMAIL','�᡼��');
define('_NOT_PM','�ץ饤�١��ȡ���å�����');
define('_NOT_DISABLE','̵���ˤ���');
define('_NOT_CHANGE','�ѹ�');

define('_NOT_NOACCESS','���Υڡ����ؤΥ����������¤Ϥ���ޤ���');

// Text for module config options

define('_NOT_ENABLE','ͭ���ˤ���');
define('_NOT_NOTIFICATION','���٥�����ε�ǽ');

define('_NOT_CONFIG_ENABLED','���٥�����ε�ǽ������');
define('_NOT_CONFIG_ENABLEDDSC','���Υ⥸�塼��Ǥϡ���������Υ��٥�Ȥ�ȯ�������ݤˡ��������٥�ȹ��ɼԤ��Ф����Υ�å�������������褦������Ǥ��ޤ������ε�ǽ��ͭ���ˤ���ˤϡ֤Ϥ��פ����򤷤Ƥ���������');

define('_NOT_CONFIG_EVENTS','���ꥤ�٥�Ȥ�ͭ���ˤ���');
define('_NOT_CONFIG_EVENTSDSC','�桼���������ǽ�ʥ��٥�Ȥ����ꤷ�Ƥ���������');

define('_NOT_CONFIG_ENABLE','���٥�����ε�ǽ������');
define('_NOT_CONFIG_ENABLEDSC','���Υ⥸�塼��Ǥϡ���������Υ��٥�Ȥ�ȯ�������ݤˡ��������٥�ȹ��ɼԤ��Ф����Υ�å�������������褦������Ǥ��ޤ������ε�ǽ��ͭ���ˤ��뤿��η��������򤷤Ƥ���������');
define('_NOT_CONFIG_DISABLE','���ε�ǽ��̵���ˤ���');
define('_NOT_CONFIG_ENABLEBLOCK','���٥�����򥪥ץ�����֥�å���ɽ������');
define('_NOT_CONFIG_ENABLEINLINE','���٥�����򥪥ץ�����ᥤ�󥳥�ƥ�Ĳ����ɽ������');
define('_NOT_CONFIG_ENABLEBOTH','���٥�����򥪥ץ�����֥�å�����ӥᥤ�󥳥�ƥ�Ĳ����ξ����ɽ������');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','�����Ȥ��ɲä���ޤ���');
define('_NOT_COMMENT_NOTIFYCAP','���Υڡ����˥����Ȥ��ɲä��줿�ݤ����Τ���');
define('_NOT_COMMENT_NOTIFYDSC','');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_MODULE}] ��{X_ITEM_TYPE}�פ��Ф��ƥ����Ȥ��ɲä���ޤ��� �ʼ�ư���Ρ�');

define('_NOT_COMMENTSUBMIT_NOTIFY','���������Ȥ���Ƥ�����ޤ���');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','���Υڡ����˾�ǧ��ɬ�פʥ����Ȥ���Ƥ��줿�ݤ����Τ���');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_MODULE}] ��{X_ITEM_TYPE}�פ��Ф��ƿ��������Ȥ���Ƥ�����ޤ��� �ʼ�ư���Ρ�');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','�֥å��ޡ���');
define('_NOT_BOOKMARK_NOTIFYCAP','���Υڡ�����֥å��ޡ�������');
define('_NOT_BOOKMARK_NOTIFYDSC','���Υڡ�����֥å��ޡ������ޤ������Υ�å������������ޤ���');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','���٥�ȹ��������Υ�å�������ɤΤ褦�ʷ��Ǽ������ޤ�����');
define('_NOT_METHOD_EMAIL','�᡼��');
define('_NOT_METHOD_PM','�ץ饤�١��ȡ���å�����');
define('_NOT_METHOD_DISABLE','���Ū�����');

define('_NOT_NOTIFYMODE','���٥�����ΤΥ����ߥ�');
define('_NOT_MODE_SENDALWAYS','���٥�ȹ�������ɬ�����Τ���');
define('_NOT_MODE_SENDONCE','���٤������Τ���');
define('_NOT_MODE_SENDONCEPERLOGIN','�������Τ����塢���٥�����󤹤�ޤ����Τ��ʤ�');

define('_NOT_NOTHINGTODELETE','�������٤���ΤϤ���ޤ���');
?>