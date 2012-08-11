<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','اطلاعات کا انتخاب کرنا');
define('_NOT_UPDATENOW','تازا کریں');
define('_NOT_UPDATEOPTIONS','آگہی کا انتخاب تازہ کریں');

define('_NOT_CLEAR','صاف');
define('_NOT_CHECKALL','سارے ٹک کریں');
define('_NOT_MODULE','موڈیول');
define('_NOT_CATEGORY','درجہ');
define('_NOT_ITEMID','شناخت');
define('_NOT_ITEMNAME','نام');
define('_NOT_EVENT','واقعہ');
define('_NOT_EVENTS','واقعے');
define('_NOT_ACTIVENOTIFICATIONS','فعال اطلاعات');
define('_NOT_NAMENOTAVAILABLE','نام موجود نہیں');
// RMV-NEW :To Do: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','جزو کا نام موجود نہیں ہے');
define('_NOT_ITEMTYPENOTAVAILABLE','جزو کا قسم میسر نہیں');
define('_NOT_ITEMURLNOTAVAILABLE','جزو کا اڈریس میسر نہیں');
define('_NOT_DELETINGNOTIFICATIONS','اطلاعات کو حزف کر رہا ہے');
define('_NOT_DELETESUCCESS','اطلاع(s) کو کامیابی سے حزف کرلیا گیا.');
define('_NOT_UPDATEOK','اطلاعات کا انتخاب اپڈیٹ کر لیا گیا');
define('_NOT_NOTIFICATIONMETHODIS','اطلاعات کا طریقہ کار');
define('_NOT_EMAIL','ایمیل');
define('_NOT_PM','شخصی پیغام');
define('_NOT_DISABLE','غیر فعال');
define('_NOT_CHANGE','تبدیل');

define('_NOT_NOACCESS','آپکو اس صفحے تک رسائ کی اجازت نہیں.');

// Text for module config options

define('_NOT_ENABLE','فعال');
define('_NOT_NOTIFICATION','آگہی');

define('_NOT_CONFIG_ENABLED','آگہی کو فعال کرنا');
define('_NOT_CONFIG_ENABLEDDSC','یہ موڈیول ارکان کو مخصوص اطلاعات فراہم کرنے کا موقع راہم کرتا ہے۔ جب بہی کوی مخصوص واقعہ ہو۔ فعال کرنے کیلۓ ہاں کا انتخاب کریں');

define('_NOT_CONFIG_EVENTS','مخصوص مواقع فعال کریں');
define('_NOT_CONFIG_EVENTSDSC','کونسے اطلاعات میں آپکے کونسے ارکان سبسکرئب ہو سکتے ہیں');

define('_NOT_CONFIG_ENABLE','اطلاعات فعال کریں');
define('_NOT_CONFIG_ENABLEDSC','یہ موڈیول ارکان کو مخصوص واقعے کے بارے میں مطلع کرتا ہے۔ جب بہی کوئ ایسا واقع پیش آۓ۔ آپ اسے بلاک کی صورت میں فعال کرسکتے ہیں بشرطیکہ یہ فیچر موڈیول میں فعال ہو۔ آپ اسے اندرونی یا بیرونی بلاک کی صورت میں پیش کرسکتے ہیں');
define('_NOT_CONFIG_DISABLE','اطلاعات غیر فعال کریں');
define('_NOT_CONFIG_ENABLEBLOCK','بلاک سٹایل کا انتخاب کریں');
define('_NOT_CONFIG_ENABLEINLINE','صرف اندرونی طرز فعال کریں');
define('_NOT_CONFIG_ENABLEBOTH','اطلاعات فعال کریں (دونوں طرز)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','تبصرہ شامل کرلیا گیا');
define('_NOT_COMMENT_NOTIFYCAP','مجھے مطلع کریں جب کوئ نیا تبصرہ اس جزو کیلۓ ارسال کیا گیا');
define('_NOT_COMMENT_NOTIFYDSC','اطلاعات وصول کریں جب کوی نیا تبصرہ اس جزو کیلۓ ارسال کیا گیا (یا منظور کیا گیا)');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} خودکار اطلاع: تبصرہ شامل کیا گیا {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','تبصرہ ارسال کیا گیا');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','مجھے مطلع کریں جب کوئ نیا تبصرھ ارسال کیا گیا اس جزو کیلۓ (منظور ہونے کا منتظر)');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','اطلاعات وصول کریں جب کوئ نیا تبصرھ ارسال کیا گیا اس جزو کیلۓ (منظور ہونے کا منتظر ) ');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} خودکار اطلاع: کیلۓ تبصرہ ارسال کیا گیا {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','نشان');
define('_NOT_BOOKMARK_NOTIFYCAP','اس جزو کیلۓ نشان کرنا (کوئ اطلاعات نہیں).');
define('_NOT_BOOKMARK_NOTIFYDSC','اس جزو کا پیچھا کریں بغیر کوئ اطلاع وصول کرنے کے');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','اطلاعات کا طریقہ کار<br />اگر آپ مثال کے طور پر کوئ فورم مانیٹر کریں۔ تو آپ کس طرع جدید اطلاعات وصول کرنا چاہیں گے؛');
define('_NOT_METHOD_EMAIL','ایمیل (ذاتی معلومات میں سے اڈریس برؤے کار لایئں)');
define('_NOT_METHOD_PM','شخصی پیغام');
define('_NOT_METHOD_DISABLE','وقتی طور پر غیر فعال');

define('_NOT_NOTIFYMODE','اطلاعات کا طرز');
define('_NOT_MODE_SENDALWAYS','منتخب تازہ ترین کے بارے میں مطلع کریں');
define('_NOT_MODE_SENDONCE','صرف ایک بار مطلع کریں');
define('_NOT_MODE_SENDONCEPERLOGIN','ایک بار مطلع کرے غیر فعال کریں جب تک میں دوبارہ لاگن نہ کروں');

define('_NOT_NOTHINGTODELETE','یہاں کچھ حذف کرنے کیلۓ نہیں');
?>