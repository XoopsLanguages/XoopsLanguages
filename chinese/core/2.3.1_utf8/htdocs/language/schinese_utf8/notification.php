<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','通知选项');
define('_NOT_UPDATENOW','现在更新');
define('_NOT_UPDATEOPTIONS','更新通知选项');

define('_NOT_CLEAR','清除');
define('_NOT_CHECKALL','全选');
define('_NOT_MODULE','跟踪的模块');
define('_NOT_CATEGORY','通知类别');
define('_NOT_ITEMID','条目ID');
define('_NOT_ITEMNAME','条目名称');
define('_NOT_EVENT','通知事件');
define('_NOT_EVENTS','通知事件');
define('_NOT_ACTIVENOTIFICATIONS','启用通知');
define('_NOT_NAMENOTAVAILABLE','名称无效');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','通知条目名称无效');
define('_NOT_ITEMTYPENOTAVAILABLE','通知条目类型无效');
define('_NOT_ITEMURLNOTAVAILABLE','通知条目网址无效');
define('_NOT_DELETINGNOTIFICATIONS','正在删除通知...');
define('_NOT_DELETESUCCESS','通知删除完毕。');
define('_NOT_UPDATEOK','通知选项已更新');
define('_NOT_NOTIFICATIONMETHODIS','通知方式');
define('_NOT_EMAIL','通过邮件');
define('_NOT_PM','通过短信');
define('_NOT_DISABLE','停用');
define('_NOT_CHANGE','更改');

define('_NOT_NOACCESS','您没有权限访问该页。');

// Text for module config options

define('_NOT_ENABLE','启用');
define('_NOT_NOTIFICATION','通知');

define('_NOT_CONFIG_ENABLED','启用通知');
define('_NOT_CONFIG_ENABLEDDSC','这个模块允许使用者在某一事件发生时，可以接受通知。请选“是”来启用这个功能。');

define('_NOT_CONFIG_EVENTS','启用特定的事件');
define('_NOT_CONFIG_EVENTSDSC','选择用户可以订阅的通知事件。');

define('_NOT_CONFIG_ENABLE','启用通知');
define('_NOT_CONFIG_ENABLEDSC','该模块允许用户在某些事件发生时接收通知。用户可以使用区块样式，或者模块样式(嵌入式)，或两者都用。要使用区块样式的通知，针对该模块的[通知选项]区块必须启用。');
define('_NOT_CONFIG_DISABLE','停用通知');
define('_NOT_CONFIG_ENABLEBLOCK','使用区块通知');
define('_NOT_CONFIG_ENABLEINLINE','使用嵌入通知');
define('_NOT_CONFIG_ENABLEBOTH','使用两种通知方式');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','评论发表');
define('_NOT_COMMENT_NOTIFYCAP','当有新评论发表时，请通知我。');
define('_NOT_COMMENT_NOTIFYDSC','当有新评论或评论通过审核时，请通知我。');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}自动通知：评论已添加到{X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','评论提交');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','当有新评论提交时，请通知我。');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','当有新评论提交或待审时，请通知我。');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}自动通知：提交{X_ITEM_TYPE}的评论');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','书签');
define('_NOT_BOOKMARK_NOTIFYCAP','加入书签（不必通知）。');
define('_NOT_BOOKMARK_NOTIFYDSC','不必接收任何通知，仍可掌握事件情况。');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','选择通知方式');
define('_NOT_METHOD_EMAIL','接收邮件通知');
define('_NOT_METHOD_PM','接收短信通知');
define('_NOT_METHOD_DISABLE','暂时拒收');

define('_NOT_NOTIFYMODE','默认通知方式');
define('_NOT_MODE_SENDALWAYS','全部选择的事件通知');
define('_NOT_MODE_SENDONCE','仅通知一次即可');
define('_NOT_MODE_SENDONCEPERLOGIN','只通知我一次，然后关闭这项功能，直到我再次登入。');

define('_NOT_NOTHINGTODELETE','未选择要删除的内容。');
?>