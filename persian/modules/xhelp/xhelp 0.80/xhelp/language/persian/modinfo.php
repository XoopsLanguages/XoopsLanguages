<?php
//$Id: modinfo.php,v 1.8 2005/12/01 20:27:43 eric_juden Exp $
define('_MI_XHELP_NAME','صفحه کمک و راهنما');
define('_MI_XHELP_DESC','Used to store client requests for help with their problems');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','تمپلیت برای فایل addTicket.php');
define('_MI_XHELP_TEMP_SEARCH','تمپلیت برای فایل search.php');
define('_MI_XHELP_TEMP_STAFF_INDEX','تمپلیت مسوول رسیدگی برای index.php');
define('_MI_XHELP_TEMP_STAFF_PROFILE','تمپلیت برای profile.php');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','تمپلیت مسسول رسیدگی برای ticket.php');
define('_MI_XHELP_TEMP_USER_INDEX','تمپلیت درخواست کننده برای index.php');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','تمپلیت درخواست کننده برای ticket.php');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','تمپلیت برای response.php');
define('_MI_XHELP_TEMP_LOOKUP','تمپلیت برای lookup.php');
define('_MI_XHELP_TEMP_STAFFREVIEW','تمپلیت برای نقد کردن کار مسوولان رسیدگی کننده');
define('_MI_XHELP_TEMP_EDITTICKET','تمپلیت برای ویرایش یک بلیت');
define('_MI_XHELP_TEMP_EDITRESPONSE','تمپلیت برای ویرایش یک پاسخ');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','تمپلیت برای اعلان ها');
define('_MI_XHELP_TEMP_STAFF_HEADER','تمپلیت برای منوی مسوولان رسیدگی کننده');
define('_MI_XHELP_TEMP_USER_HEADER','تمپلیت برای منوی درخواست کننده');
define('_MI_XHELP_TEMP_PRINT','تمپلیت برای صفحه قابل چاپ بلیت');
define('_MI_XHELP_TEMP_STAFF_ALL','تمپلیت برای دیدن همه بلیت ها برای مسوولان');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','تمپلیت برای دیدن بلیت های مسوولان رسیدگی کننده');
define('_MI_XHELP_TEMP_SETDEPT','تمپلیت برای صفحه تعیین شاخه');
define('_MI_XHELP_TEMP_SETPRIORITY','تمپلیت برای صفحه تعیین اهمیت');
define('_MI_XHELP_TEMP_SETOWNER','تمپلیت برای صفحه تعیین مسوول رسیدگی کننده به بلیت');
define('_MI_XHELP_TEMP_SETSTATUS','تمپلیت برای تعیین صفحه حالت بلیت');
define('_MI_XHELP_TEMP_DELETE','تمپلیت برای صفحه حذف کردن دسته جمعی بلیت ها');
define('_MI_XHELP_TEMP_BATCHRESPONSE','تمپلیت برای صفحه اضافه کردن پاسخ دسته جمعی به بلیت ها');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','تمپلیت برای صفحه اضافه کردن بلیت توسط کاربر ناشناس');
define('_MI_XHELP_TEMP_ERROR','تمپلیت برای صفحه خطاها');
define('_MI_XHELP_TEMP_EDITSEARCH','تمپلیت برای ویرایش یک جستجوی ذخیره شده.');
define('_MI_XHELP_TEMP_USER_ALL','تمپلیت برای دیدن صفحه نمایش همه بلیت ها در قسمت کاربر');


// Block variables
define('_MI_XHELP_BNAME1','بلیت های باز من');
define('_MI_XHELP_BNAME1_DESC','فهرست بلیت های باز کاربر را نشان می دهد');
define('_MI_XHELP_BNAME2','شاخه بلیت ها');
define('_MI_XHELP_BNAME2_DESC','تعداد بلیت های باز در هر شاخه را نشان می دهد.');
define('_MI_XHELP_BNAME3','بلیت هایی که اخیرا دیده شده');
define('_MI_XHELP_BNAME3_DESC','بلیت هایی را که کمک کننده اخیرا دیده است نشان می دهد.');
define('_MI_XHELP_BNAME4','اعمال انجام شده روی بلیت ها');
define('_MI_XHELP_BNAME4_DESC','عمل هایی را که روی بلیت  انجام شده  نشان می دهد');
define('_MI_XHELP_BNAME5','اعمال اصلی بلیت');
define('_MI_XHELP_BNAME5_DESC','نمایش اعمال اصلی برای سیستم بلیت');

// Config variables
define('_MI_XHELP_TITLE','صفحه کمک و راهنما');
define('_MI_XHELP_TITLE_DSC','Give your helpdesk a name:');
define('_MI_XHELP_UPLOAD','شاخه بارگذاری');
define('_MI_XHELP_UPLOAD_DSC','Path where user stores files that are added to a ticket');
define('_MI_XHELP_ALLOW_UPLOAD','اجازه برای بارگذاری');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Allow users to add a file to their ticket requests?');
define('_MI_XHELP_UPLOAD_SIZE','حجم فایل');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Max size of upload (in bytes)');
define('_MI_XHELP_UPLOAD_WIDTH','عرض فایل تصویر');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Max width of upload (in pixels)');
define('_MI_XHELP_UPLOAD_HEIGHT','طول فایل تصویر');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Max height of upload (in pixels)');
define('_MI_XHELP_NUM_TICKET_UPLOADS','حداکثر تعداد فایل برای بارگذاری');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','این حداکثر تعداد فایلی است که در هنگام ارسال بلیت میتواند به آن متصل شود (این شامل فیلد های دست ساز در بلیت نمی شود).');
define('_MI_XHELP_ANNOUNCEMENTS','عنوان خبری برای اعلان ها');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','This is the news topic that pulls announcements for xhelp. Update the xHelp module to see newly added news categories');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"This is the news topic that pulls announcements for xhelp. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Click here</a> to update the news categories.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***غیر فعال کردن اعلان***');
define('_MI_XHELP_ALLOW_REOPEN','اجازه برای دوباره باز کردن بلیت های بسته شده');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Allow users to re-open a ticket after it has been closed?');
define('_MI_XHELP_STAFF_TC','تعداد بلیت ها در صفحه مسوول رسیدگی کننده');
define('_MI_XHELP_STAFF_TC_DSC','How many tickets should be displayed for each section on the staff index page?');
define('_MI_XHELP_STAFF_ACTIONS','اعمال مسوولان رسیدگی کننده');
define('_MI_XHELP_STAFF_ACTIONS_DSC','What style would you like the staff actions to show up as? Inline is the default, Block-Style requires you to enable the Staff Actions block.');
define('_MI_XHELP_ACTION1','Inline-Style');
define('_MI_XHELP_ACTION2','Block-Style');
define('_MI_XHELP_DEFAULT_DEPT','شاخه پیشفرض');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"This will be the default department that is selected in the list when adding a ticket. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Click here</a> to update the departments.");
define('_MI_XHELP_OVERDUE_TIME','حداکثر زمان لازم برای بررسی بلیت');
define('_MI_XHELP_OVERDUE_TIME_DSC','This determines how long the staff have to finish a ticket before it is late (in hours).');
define('_MI_XHELP_ALLOW_ANON','اجازه برای فرستادن بلیت توسط مهمان ها');
define('_MI_XHELP_ALLOW_ANON_DSC','This allows anyone to create a ticket on your site. When an anonymous user submits a ticket, they are also prompted to create an account.');
define('_MI_XHELP_APPLY_VISIBILITY','شاخه برای کمک کننده قابل دیدن باشد؟');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','This determines if staff are limited to what departments they can submit tickets to. If "yes" is selected, staff members will be limited to submitting tickets to departments where the XOOPS group they belong to is selected.');
define('_MI_XHELP_DISPLAY_NAME','نشان دادن شناسه کاربری یا نام واقعی؟');
define('_MI_XHELP_DISPLAY_NAME_DSC','This allows for the real name to be shown in all places where the username would normally be (username will display if there is no real name).');
define('_MI_XHELP_USERNAME','شناسه کاربری');
define('_MI_XHELP_REALNAME','نام واقعی');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','مدیریت بلیت ها');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','مدیریت شاخه ها');
define('_MI_XHELP_MENU_MANAGE_STAFF','مدیریت مسوولان رسیدگی کننده');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','ویرایش تمپلیت ایمیل های ارسالی');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','صفحه ویرایش بلیت ها');
define('_MI_XHELP_MENU_GROUP_PERM','دسترسی به گروه ها');
define('_MI_XHELP_MENU_ADD_STAFF','اضافه کردن مسوول رسیدگی');
define('_MI_XHELP_MENU_MIMETYPES','مدیریت نوع فایل ها (MIMETYPE)');
define('_MI_XHELP_MENU_CHECK_TABLES','بررسی تیبل ها در پایگاه داده');
define('_MI_XHELP_MENU_MANAGE_ROLES','مدیریت نقش ها');
define('_MI_XHELP_MENU_MAIL_EVENTS','رخداد های ایمیل');
define('_MI_XHELP_MENU_CHECK_EMAIL','چک کردن ایمیل');
define('_MI_XHELP_MENU_MANAGE_FILES','مدیریت فایل ها');
define('_MI_XHELP_ADMIN_ABOUT','درباره');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','مدیریت حالت ها');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','مدیریت فیلد های دست ساز');
define('_MI_XHELP_TEXT_NOTIFICATIONS','مدیریت آگهی رسانی ها');

//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','شاخه');
define('_MI_XHELP_DEPT_NOTIFYDSC','Notification options that apply to a certain department');

define('_MI_XHELP_TICKET_NOTIFY','بلیت');
define('_MI_XHELP_TICKET_NOTIFYDSC','Notification options that apply to the current ticket');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','کمک کننده: بلیت جدید');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','هر بلیت جدید ارسال شد مرا با خبر کن');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Receive notification when a new ticket is created');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت ارسال شده');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','کمک کننده: بلیت حذف شده');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','هر بلیتی حذف شد مرا با خبر کن');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Receive notification when a ticket is deleted');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت حذف شده');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','کمک کننده: بلیت ویرایش شده');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','هر بلیتی ویرایش شد مرا با خبر کن');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Receive notification when a ticket is deleted');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت ویرایش شده');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','کمک کننده: بلیت پاسخ داده شده');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','هر پاسخی به بلیتی داده شد مرا با خبر کن');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Receive notification when a response is created');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت پاسخ داده شده');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','کمک کننده: پاسخ ویرایش شده');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','هر پاسخی که ویرایش شد مرا با خبر کن');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Receive notification when a response is modified');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} پاسخ ویرایش شده');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','کمک کننده: تغییر حالت بلیت');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','حالت هر بلیتی که تغییر کرد مرا با خبر کن');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Receive notification when the status of a ticket is changed');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تغییر حالت بلیت');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','کمک کننده : تغییر اهمیت بلیت');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','اهمیت هر بلیتی که تغییر کرد مرا با  خبر کن');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','اهمیت هر بلیتی که تغییر کرد مرا با  خبر کن');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تغییر اهمیت بلیت');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','کمک کننده: مسوول رسیدگی کننده جدید');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','مسوول رسیدگی کننده به هر بلیتی که تغییر کرد مرا با خبر کن');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Receive notification when ownership of a ticket is changed');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} مسوول رسیدگی کننده جدید');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','کاربر: بلیت حذف شده');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','هر وقت این بلیت حذف شد مرا با خبر کن');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Receive notification when this ticket is deleted');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت حذف شده');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','کاربر: بلیت ویرایش شده');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','هر وقت این بلیت ویرایش شد مرا با خبر کن');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Receive notification when this ticket is modified');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت ویرایش شده');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','کاربر: پاسخ جدید');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','هر وقت به این بلیت پاسخ جدیدی داده شد مرا با خبر کن');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Receive notification when a response is created for this ticket');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','RE: {TICKET_SUBJECT} {{TICKET_SUPPORT_KEY}}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','کاربر: پاسخ ویرایش شده');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','هر وقت پاسخی که به این بلیت داده شده ویرایش شد مرا با خبر کن');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Receive notification when a response is modified for this ticket');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} پاسخ داده شده به بلیت ویرایش شده');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','کاربر: تغییر حالت');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','هر وقت حالت این بلیت تغییر کرد مرا با خبر کن');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Receive notification when the status of this ticket is changed');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تغییر حالت بلیت');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','کاربر: تغییر اهمیت');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','هر وقت اهمیت این بلیت تغییر کرد مرا با خبر کن');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Receive notification when the priority of this ticket is changed');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تغییر اهمیت بلیت');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','کاربر: مسوول رسیدگی کننده جدید');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','هر وقت مسوول رسیدگی کننده به این بلیت تغییر کرد مرا با خبر کن');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Receive notification when ownership has been changed for this ticket');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تغییر مسوول رسیدگی به این بلیت');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','کاربر: بلیت جدید');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','هر وقت بلیت جدید ارسال شد مرا با خبر کن');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Receive notification when a new ticket is created');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','RE: {TICKET_SUBJECT} {{TICKET_SUPPORT_KEY}}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','کمک کننده: بلیت بسته شده');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','هر وقت بلیتی بسته شد مرا با خبر کن');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Receive notification when a ticket is closed');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت بسته شده');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','کاربر: بلیت بسته شده');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','وقتی این بلیت بسته شد مرا با خبر کن');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Receive notification when a ticket is closed');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} بلیت بسته شده');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','کاربر: ساخته شدن کاربر جدید از طریق ایمیل فعال سازی');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','هر کاربری را که در سایت ثبت نام کرد با خبر کن');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Receive notification when a new user is created from an email submission');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تایید کاربر');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','کاربر: ساخته شدن کاربر جدید از طریق فعال سازی اوتو ماتیک');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','هر کاربری را که در سایت ثبت نام کرد با خبر کن');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Receive notification when a new user is created from an email submission (Auto Activation)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} تایید کاربر');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','کاربر: ساخته شدن کاربر جدید از طریق فعال سازی به وسیله مدیر');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','هر کاربری را که در سایت ثبت نام کرد با خبر کن');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Receive notification when a new user is created from an email submission (Requires Admin Activation)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ساخته شدن کاربر جدید');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','کاربر: خطای ایمیل');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','اگر ایمیل ذخیره نشد مرا با خبر کن');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','Receive notification when an email submission is not stored');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','کمک کننده: ادغام بلیت ها');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','هر بلیتی ادغام شد مرا با خبر کن');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','Receive notification when tickets are merged');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} بلیت ها ادغام شدند');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','کاربر: ادغام بلیت ها');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','هر بلیتی ادغام شد مرا با خبر کن');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','Receive notification when tickets are merged');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} بلیت ها ادغام شدند');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','کاربر: بلیت جدید توسط ایمیل');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','تایید اینکهخ بلیت توسط ایمیل ارسال شده است');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','Receive notification when a new ticket is created by email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');

// Be sure to add new mail_templates to array in admin/index.php - modifyEmlTpl()
?>