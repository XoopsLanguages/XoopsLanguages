<?php
//$Id: admin.php,v 1.8 2005/12/01 20:27:43 eric_juden Exp $

//Menu choice
define('_AM_XHELP_ADMIN_TITLE','%s منوی مدیر');
define('_AM_XHELP_BLOCK_TEXT','مدیریت بلاک ها');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','مدیریت شاخه ها');
define('_AM_XHELP_MENU_MANAGE_STAFF','مدیریت مسوولان رسیدگی');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','ویرایش تمپلیت های ایمیل');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','ویرایش شکل بلیت ها');
define('_AM_XHELP_MENU_GROUP_PERM','دسترسی به گروه ها');
define('_AM_XHELP_MENU_MIMETYPES','Mimetype مدیریت');
define('_AM_XHELP_MENU_PREFERENCES','ویژگی ها (Preferences)');
define('_AM_XHELP_MENU_ADD_STAFF','اضافه کردن مسوول رسیدگی');
define('_AM_XHELP_UPDATE_MODULE','آپدیت ماژول');
define('_AM_XHELP_MENU_MANAGE_ROLES','مدیریت نقش ها');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','مدیریت آگهی رسانی ها');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);
define('_AM_XHELP_SEC_TICKET_MERGE', 9);
define('_AM_XHELP_SEC_FILE_DELETE', 10);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','اضافه کردن بلیت ها');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','اصلاح بلیت ها');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','حذف بلیت ها');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','تغییر مسوول رسیدگی به بلیت');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','تغییر حالت بلیت');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','تغییر اهمیت بلیت');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','وارد کردن بلیت برای کاربر');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','اضافه کردن پاسخ');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','اصلاح پاسخ');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','ادغام بلیت');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','حذف فایل متصل شده به بلیت');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT','درباره');
define('_AM_XHELP_ADMIN_GOTOMODULE','برو به ماژول');

//Permissions
define('_AM_XHELP_GROUP_PERM','دسترسی به گروه ها');
define('_AM_XHELP_GROUP_PERM_TITLE','ویرایش دسترسی ها');
define('_AM_XHELP_GROUP_PERM_NAME','دسترسی ها');
define('_AM_XHELP_GROUP_PERM_DESC','امکاناتی را که گروه ها امکان ویرایش آن را دارند انتخاب کنید');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','خطا: مسوول رسیدگی به روز نشد');
define('_AM_XHELP_MESSAGE_FILE_READONLY','فایل فقط خواندنی است. لطفا شاخه modules/xhelp/language/persian/mail_templates را برای دسترسی writeable کنید');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','فایل با موفقیت به روز شد');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','خطا: فایل به روز نشد');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','نقش با موفقیت اضافه شد');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','خطا: نقش ساخته نشد');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','نقش با موفقیت ساخته شد');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','خطا: نقش حذف نشد');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','نقش با موفقیت به روز شد');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','خطا: نقش به روز نشد');
define('_AM_XHELP_MESSAGE_DEPT_STORE','دسترسی به شاخه با موفقیت ذخیره شد');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','خطا: دسترسی به شاخه ذخیره نشد');
define('_AM_XHELP_MESSAGE_DEF_ROLES','دتسرسی های پیشفرض به نقش با موفقیت اضافه شد');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','دسترسی های پیشفرض به نقشراضافه نشد');
define('_AM_XHELP_MESSAGE_NO_DEPT','خطا: هیچ شاخه ای شناخته نشد');
define('_AM_XHELP_MESSAGE_NO_DESC','خطا: شما شرحی را برای این شاخه مشخص نکردید.');
define('_AM_MESSAGE_ADD_STATUS_ERR','خطا: حالت اضافه نشد.');
define('_AM_MESSAGE_EDIT_STATUS_ERR','خطا: حالت به روز نشد.');
define('_AM_XHELP_DEL_STATUS_ERR','خطا: حالت حذف نشد.');
define('_AM_XHELP_STATUS_HASTICKETS_ERR','خطا : هنوز بلیتهایی از این وضعیت استفاده می کنند. ابتدا وضعیت آنها را تغییر دهید');
define('_AM_XHELP_MESSAGE_NO_ID','خطا: id مشخص نشد.');
define('_AM_XHELP_MESSAGE_NO_VALUE','خطا: نوع پسوند فایل (mimetype) مشخص نشد.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','خطا: پسوند فایل (mimetype) به روز نشد.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','خطا: پسوند فایل (mimetype) حذف نشد.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','خطا: پسوند فایل (mimetype) اضافه نشد.');


// Buttons
define('_AM_XHELP_BUTTON_DELETE','حذف');
define('_AM_XHELP_BUTTON_EDIT','ویرایش');
define('_AM_XHELP_BUTTON_SUBMIT','ارسال');
define('_AM_XHELP_BUTTON_RESET','ریست');
define('_AM_XHELP_BUTTON_ADDSTAFF','اضافه کردن مسوول رسیدگی');
define('_AM_XHELP_BUTTON_UPDATESTAFF','به روز کردن مسوول رسیدگی');
define('_AM_XHELP_BUTTON_CANCEL','انصراف');
define('_AM_XHELP_BUTTON_UPDATE','به روز رسانی');
define('_AM_XHELP_BUTTON_CREATE_ROLE','اضافه کردن نقش جدید');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','پاک کردن دسترسی ها');
//define('_AM_XHELP_BUTTON_ADD_DEPT','اضافه کردن شاخه');

define('_AM_XHELP_EDIT_DEPARTMENT','ویرایش شاخه');
define('_AM_XHELP_EXISTING_DEPARTMENTS','شاخه های موجود:');
define('_AM_XHELP_MANAGE_DEPARTMENTS','مدیریت شاخه ها');
define('_AM_XHELP_MANAGE_STAFF','مدیریت مسوولان رسیدگی');
define('_AM_XHELP_EXISTING_STAFF','مسوولان رسیدگی موجود:');
define('_AM_XHELP_ADD_STAFF','اضافه کردن مسوولان رسیدگی');
define('_AM_XHELP_EDIT_STAFF','ویرایش مسوولان رسیدگی');
define('_AM_XHELP_INDEX','صفحه اصلی مدیریت (Index)');
define('_AM_XHELP_DEPARTMENT_SERVERS','ایمیل شاخه');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','آدرس ایمیل');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','نوع میل باکس');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','اهیمت پیشفرض برای بلیت');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','سرور');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','پورت');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','عمل ها');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','میل باکس را برای بررسی اضافه کن');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','شناسه کاربری');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','واژه رمز');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','پاسخ به آدرس ایمیل (Reply-To)');
define('_AM_XHELP_DEPARTMENT_NO_ID','ID شاخه یافت نشد. عملیات ناقص ماند.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','میل باکس به شاخه اضافه شد');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','خطا در اضافه کردن میل باکس به شاخه');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','میل باکس برای این شاخه مشخص نیست');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','میل باکس این شاخه حذف شد');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','خطا در حذف میل باکس از این شاخه');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','شما باید قبل از ذخیره کردن یک کاربر را به یک یا چند شاخه اختصاص دهید');
define('_AM_XHELP_STAFF_ERROR_ROLES','شما باید قبل از ذخیره کردن یک کاربر را به یک یا چند نقش اختصاص دهید');
define('_AM_XHELP_STAFF_ERROR_USERS','شما باید یک کاربر را برای کمک کننده شدن اختصاص دهید..');
define('_AM_XHELP_STAFF_EXISTS','خطا: این کاربر در حال حاضر یک کمک کننده است.');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','اضافه کردن شاخه');
define('_AM_XHELP_TEXT_EDIT_DEPT','ویرایش نام شاخه:');
define('_AM_XHELP_TEXT_EDIT','ویرایش');
define('_AM_XHELP_TEXT_DELETE','حذف');
define('_AM_XHELP_TEXT_SELECTUSER','انتخاب شناسه کاربری:');
define('_AM_XHELP_TEXT_DEPARTMENTS','شاخه ها');
define('_AM_XHELP_TEXT_USER','شناسه کاربری');
define('_AM_XHELP_TEXT_ALL_DEPTS','همه');
define('_AM_XHELP_TEXT_NO_DEPTS','هیچکدام');
define('_AM_XHELP_TEXT_MAKE_DEPTS','باید قبل از اضافه کردن مسوول رسیدگی شاخه اضافه کنید');
define('_AM_XHELP_LINK_ADD_DEPT','اضافه کردن شاخه ها');
define('_AM_XHELP_TEXT_TOP_CLOSERS','آخرین بلیت های بسته شده');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Worst Closers');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','بلیت های باز با بالاترین اهمیت');
define('_AM_XHELP_TEXT_NO_OWNER','بدون مسوول');
define('_AM_XHELP_TEXT_NO_DEPT','بدون شاخه');
define('_AM_XHELP_TEXT_RESPONSE_TIME','سریعترین زمان پاسخ گویی');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','کندترین زمان پاسخ گویی');
define('_AM_XHELP_TEXT_PRIORITY','اهمیت:');
define('_AM_XHELP_TEXT_ELAPSED','زمان باقی مانده:');
define('_AM_XHELP_TEXT_STATUS','حالت:');
define('_AM_XHELP_TEXT_SUBJECT','عنوان:');
define('_AM_XHELP_TEXT_DEPARTMENT','شاخه:');
define('_AM_XHELP_TEXT_OWNER','مسوول');
define('_AM_XHELP_TEXT_LAST_UPDATED','آخرین به روز رسانی:');
define('_AM_XHELP_TEXT_LOGGED_BY','ورود توسط:');
define('_AM_XHELP_TEXT_EXISTING_ROLES','نقش های موجود');
define('_AM_XHELP_TEXT_NO_ROLES','هیچ نقشی پیدا نشد');
define('_AM_XHELP_TEXT_ROLES','نقش ها:');
define('_AM_XHELP_TEXT_CREATE_ROLE','ساختن نقش جدید');
define('_AM_XHELP_TEXT_EDIT_ROLE','ویرایش نقش');
define('_AM_XHELP_TEXT_NAME','نام:');
define('_AM_XHELP_TEXT_PERMISSIONS','دسترسی ها:');
define('_AM_XHELP_TEXT_SELECT_ALL','انتخاب همه');
define('_AM_XHELP_TEXT_DEPT_PERMS','تنظیم دستی دسترسی ها به شاخه');
define('_AM_XHELP_TEXT_CUSTOMIZE','تنظیم دستی');
define('_AM_XHELP_TEXT_ACTIONS','عمل ها:');
define('_AM_XHELP_TEXT_ID','ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER','جستجوی کاربر');
define('_AM_XHELP_TEXT_BY','به وسیله');
define('_AM_XHELP_TEXT_ASCENDING','صعودی');
define('_AM_XHELP_TEXT_DESCENDING','نزولی');
define('_AM_XHELP_TEXT_SORT_BY','مرتب شده بر اساس:');
define('_AM_XHELP_TEXT_ORDER_BY','چیده شده بر اساس:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','تعداد در هر صفحه:');
define('_AM_XHELP_TEXT_SEARCH_MIME','جستجوی پسوند فایل');
define('_AM_XHELP_TEXT_SEARCH_BY','جستجو بر اساس:');
define('_AM_XHELP_TEXT_SEARCH_TEXT','متن جستجو:');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','بازگشت به صفحه جستجو');
define('_AM_XHELP_TEXT_FIND_USERS','پیدا کردن کاربر');

define('_AM_XHELP_SEARCH_BEGINEGINDATE','تاریخ شروع');
define('_AM_XHELP_SEARCH_ENDDATE','تاریخ پایان');

define('_AM_XHELP_TEXT_ADD_STATUS','اضافه کردن حالت');
define('_AM_XHELP_TEXT_STATE','حالت');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','مدیریت حالت ها');
define('_AM_XHELP_TEXT_EDIT_STATUS','ویرایش حالت');

define('_AM_XHELP_TEXT_NO_RECORDS','هیچ رکوردی پیدا نشد.');
define('_AM_XHELP_TEXT_MAIL_EVENTS','رخداد های ایمیل');
define('_AM_XHELP_TEXT_MAILBOX','جعبه میل (Mailbox)');
define('_AM_XHELP_TEXT_EVENT_CLASS','کلاس رخداد');
define('_AM_XHELP_TEXT_TIME','زمان');
define('_AM_XHELP_NO_EVENTS','هیچ رخدادی پیدا نشد');
define('_AM_XHELP_SEARCH_EVENTS','جستجوی رخداد های ایمیل');
define('_AM_XHELP_BUTTON_SEARCH','جستجو');
define('_AM_XHELP_BUTTON_TEST','تست');
define('_AM_XHELP_POSITION','موقعیت');
define('_AM_XHELP_TEXT_MANAGE_FILES','مدیریت فایل ها');
define('_AM_XHELP_TEXT_TICKETID','ID بلیت');
define('_AM_XHELP_TEXT_FILENAME','نام فایل');
define('_AM_XHELP_TEXT_MIMETYPE','پسوند فایل (Mimetype)');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','کل فضای مصرف شده');
define('_AM_XHELP_TEXT_SIZE','اندازه');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','فایل های متصل شده به بلیت های رفع مشکل شده حذف شوند؟');
define('_AM_XHELP_TEXT_NO_FILES','هیچ فایلی پیدا نشد');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','فایل های متصل شده به بلیت های رفع مشکل شده');
define('_AM_XHELP_TEXT_ALL_ATTACH','همه متصل شده ها');
define('_AM_XHELP_TEXT_MAINTENANCE','کار های تعمیری');
define('_AM_XHELP_TEXT_ORPHANED','رکورد های کمک کننده از بین رفته از جدول xhelp_staff حذف شود؟');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','حذف کمک کننده از شاخه');
define('_AM_XHELP_MSG_NO_DEPTID','خطا: هیچ id شاخه ای مشخص نشد.');
define('_AM_XHELP_MSG_NO_UID','خطا: هیچ کاربری مشخص نشد.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','خطا: کمک کننده از شاخه حذف نشد.');
define('_AM_XHELP_TEXT_DEFAULT','پیش فرض');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','این را به عنوان ساخه پیش فرض قرار بده');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','شاخه پیش فرض');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','شاخه پیش فرض را به روز کن.');


// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","نوع فایل");
define("_AM_XHELP_MIME_ADMIN","کمک کننده");
define("_AM_XHELP_MIME_USER","کاربر");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","ساختن (Mimetype)");
define("_AM_XHELP_MIME_MODIFYF","ویرایش (Mimetype)");
define("_AM_XHELP_MIME_EXTF","پسوند فایل:");
define("_AM_XHELP_MIME_NAMEF","Application Type/Name:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter application associated with this extension.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter each mimetype associated with the file extension. Each mimetype must be seperated with a space.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Allowed Admin Mimetype");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Mimetypes that are available for Admin uploads:</b>");
define("_AM_XHELP_MIME_USERF","Allowed User Mimetype");
define("_AM_XHELP_MIME_USERFINFO","<b>Mimetypes that are available for User uploads:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","No mimetypes selected.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Find New Mimetype:");
define("_AM_XHELP_MIME_EXTFIND","Search File Extension:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter file extension you wish to search.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>New mimetypes can be created, edit or deleted easily via this form.</li>
	<li>Search for a new mimetypes via an external website.</li>
	<li>View displayed mimetypes for Admin and User uploads.</li>
	<li>Change mimetype upload status.</li></ul>
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","بساز");
define("_AM_XHELP_MIME_CLEAR","ریست");
define("_AM_XHELP_MIME_CANCEL","انصراف");
define("_AM_XHELP_MIME_MODIFY","اصلاح");
define("_AM_XHELP_MIME_DELETE","حذف");
define("_AM_XHELP_MIME_FINDIT","پسوند را بگیر!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","حذف پسوند فایل های (Mimetype)مشخص شده؟");
define("_AM_XHELP_MIME_MIMEDELETED","پسوند فایل (Mimetype) %s حذف شد");
define("_AM_XHELP_MIME_CREATED","اطلاعات پسوند فایل (Mimetype) ساخته شد");
define("_AM_XHELP_MIME_MODIFIED","اطلاعات پسوند فایل (Mimetype) ویرایش شد");

define("_AM_XHELP_MINDEX_ACTION","عمل");
define("_AM_XHELP_MINDEX_PAGE","<b>صفحه</b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","این آیتم را ویرایش کن");
define("_AM_XHELP_ICO_DELETE","این آیتم را حذف کن");
define("_AM_XHELP_ICO_ONLINE","آنلاین");
define("_AM_XHELP_ICO_OFFLINE","آفلاین");
define("_AM_XHELP_ICO_APPROVED","تایید شده");
define("_AM_XHELP_ICO_NOTAPPROVED","تایید نشده");

define("_AM_XHELP_ICO_LINK","لینک مرتبط");
define("_AM_XHELP_ICO_URL","اضافه کردن لیتک مرتبط");
define("_AM_XHELP_ICO_ADD","اضافه کردن");
define("_AM_XHELP_ICO_APPROVE","تایید");
define("_AM_XHELP_ICO_STATS","آمار");

define("_AM_XHELP_ICO_IGNORE","رد کردن");
define("_AM_XHELP_ICO_ACK","تشکر از گزارش خرابی لینک");
define("_AM_XHELP_ICO_REPORT","از گزارش خرابی لینک تشکر می کنید؟");
define("_AM_XHELP_ICO_CONFIRM","تایید گزارش خرابی لینک");
define("_AM_XHELP_ICO_CONBROKEN","گزارش خرابی لینک را تایید می کنید؟");

define("_AM_XHELP_UPLOADFILE","فایل با موفقیت بارگزاری شد");
define('_AM_XHELP_TEXT_TICKET_INFO','اطلاعات بلیت');
define('_AM_XHELP_TEXT_OPEN_TICKETS','بلیت های باز');
define('_AM_XHELP_TEXT_HOLD_TICKETS','بلیت های در حال بررسی');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','بلیت های بسته');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','همه بلیت ها');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','نام تمپلیت:');
define('_AM_XHELP_TEXT_DESCRIPTION','شرح:');
define('_AM_XHELP_TEXT_PATH','مسیر');
define('_AM_XHELP_TEXT_GENERAL_TAGS','کدهای قابل استفاده');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - آدرس سایت');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - نام سایت');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - ایمیل تماس با سایت');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - نام ماژول');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - لینک به صفحه اصلی ماژول');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','به غیر از کد های نوشته شده از کد دیگری نمی توانید استفاده کنید');

define('_AM_XHELP_CURRENTVER','ورژن ماژول: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','ورژن دیتابیس: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','دیتابیس شما به روز است و نیازی به به روز رسانی ندارد');
define('_AM_XHELP_DB_NEEDUPDATE','دیتابیس شما نیاز به به روز رسانی دارد');
define('_AM_XHELP_UPDATE_NOW','الان به روز کنید!');
define('_AM_XHELP_DB_NEEDINSTALL','دیتابیس شما با ورژن نصب شده مطابقت ندارد لطفا فایل های این ورژن را نصب کنید');
define('_AM_XHELP_VERSION_ERR','ورژن قبلی قابل تشخیص نیست');
define('_AM_XHELP_MSG_MODIFYTABLE','اصلاح جدول %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','خطا در اصلاح جدول %s');
define('_AM_XHELP_MSG_ADDTABLE','اضافه کردن جدول %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','خطا در اضافه کردن جدول %s');
define('_AM_XHELP_MSG_UPDATESTAFF','به روز کردن مسوول رسیدگی شماره #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','خطا در به روز کردن مسوول رسیدگی شماره #%s');
define('_AM_XHELP_UPDATE_DB','به روز کردن دیتابیس:');
define('_AM_XHELP_UPDATE_TO','ارتقا به ورژن %s:');
define('_AM_XHELP_UPDATE_OK','با موفقیت به ورژن %s آپدیت شد');
define('_AM_XHELP_UPDATE_ERR','خطا در ارتقا به ورژن %s');
define('_AM_XHELP_MSG_UPD_PERMS','دسترسی ها برای مسوول رسیدگی شماره #%s به شاخه %s اضافه شد.');
define('_AM_XHELP_MSG_REMOVE_TABLE','جدول %s از پایگاه داده حذف شد.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','مسوول رسیدگی شماره #%s دسترسی کلی دارد.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','خطا: جدول %s از پایگاه داده حذف نشد');
define('_AM_XHELP_MSG_RENAME_TABLE','نام جدول %s به %s عوض شد.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','خطا: نام جدول%s عوض نشد.');
define('_AM_XHELP_MSG_UPDATE_ROLE','دسترسی های نقش %s به روز شد.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','خطا: دسترسی های نقش %s به روز نشد.');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','آیا مطمان هستید که میخواهید شاخه شماره %u را حذف کنید؟');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','آیا مطمان هستید که میخواهید کمک کننده شماره %u را حذف کنید؟');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','آیا مطمان هستید که میخواهید میل باکس %s را حذف کنید؟');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','خطا: حالت \'%s\' اضافه نشد.');
define('_AM_XHELP_MSG_ADD_STATUS','حالت \'%s\' اضافه شد.');
define('_AM_XHELP_MSG_CHANGED_STATUS','بلیت ها با حالت جدید به روز شدند.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','خطا: حالت بلیت ها به روز نشد.');
define('_AM_XHELP_MSG_DELETE_RESOLVED','آیا مطمان هستید که می خواهید فایل های متصل شده به بلیت های رفع مشکل شده حذف شوند؟');
define('_AM_XHELP_MSG_DELETE_FILE','آیا مطمان هستید که میخواهید این فایل متصل شده را حذف کنید؟');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR','خطا: مقدار تنظیمات برای شاخه ذخیره نشد');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','خطا: مقدار تنظیمات برای شاخه به روز نشد');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','رکورد های کمک کننده به روز هستند.');
define('_AM_XHELP_MSG_UPDATE_SEARCH','جستجوی ذخیره شده شماره %u به روز شده است.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','خطا: جستجوی ذخیره شده شماره %u به روز نشد.');

define('_AM_XHELP_TEXT_CONTRIB_INFO','اطلاعات همکاران');
define('_AM_XHELP_TEXT_DEVELOPERS','توسعه دهندگان');
define('_AM_XHELP_TEXT_TRANSLATORS','مترجمان');
define('_AM_XHELP_TEXT_TESTERS','تست کنندگان');
define('_AM_XHELP_TEXT_DOCUMENTER','نویسنده راهنمای استفاده');
define('_AM_XHELP_TEXT_CODE','پچ ها');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','اطلاعات توسعه ماژول');
define('_AM_XHELP_TEXT_DEMO_SITE','سایت نمایش');
define('_AM_XHELP_DEMO_SITE','سایت نمایشی به زبان فارسی');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','سایت رسمی پشتیبانی');
define('_AM_XHELP_OFFICIAL_SITE','farsixoops.org');
define('_AM_XHELP_TEXT_REPORT_BUG','یک باگ در ماژول پیدا کرده اید؟');
define('_AM_XHELP_REPORT_BUG','گزارش باگ');
define('_AM_XHELP_TEXT_NEW_FEATURE','یک درخواست برای امکانات اضافه دارید؟');
define('_AM_XHELP_NEW_FEATURE','امکانات اضافه');
define('_AM_XHELP_TEXT_QUESTIONS','سوال دارید؟');
define('_AM_XHELP_QUESTIONS','پرسیدن یک سوال از توسعه دهندگان ماژول');
define('_AM_XHELP_TEXT_RELEASE_DATE','تاریخ انتشار');
define('_AM_XHELP_TEXT_DISCLAIMER','شرایط استفاده');
define('_AM_XHELP_DISCLAIMER','هشدار: این ماژول هنوز در حالت بتا است. تا حد امکان نباید از آن در یک سایت در حال کار استفاده شود. توسعه دهندگان در برابر اتفاقاتی که در استفاده از این ماژول پیش بیاید مسئول نیستند.');
define('_AM_XHELP_TEXT_CHANGELOG','تغییرات در حین توسعهماژول');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','قابل دیدن برای گروه ها');

define('_AM_XHELP_PATH_CONFIG',"تنظیمات شاخه ماژول");
define('_AM_XHELP_PATH_TICKETATTACH','فایل های متصل شده به بلیت');
define('_AM_XHELP_PATH_EMAILTPL','تمپلیت های ایمیل');
define('_AM_XHELP_TEXT_CREATETHEDIR','ساختن یک شاخه');
define('_AM_XHELP_TEXT_SETPERM','تنظیم دسترسی ها');

define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>موجود است</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>موجود نیست</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>قابل نوشتن نیست</span>");
define('_AM_XHELP_PATH_CREATED',"شاخه با موفقیت ساخته شد");
define('_AM_XHELP_PATH_NOTCREATED',"شاخه ساخته نشد");
define('_AM_XHELP_PATH_PERMSET','دسترسی های پوشه با موفقیت گذاشته شد.');
define('_AM_XHELP_PATH_NOTPERMSET','دسترسی های پوشه گذاشته نشد.');
define('_AM_XHELP_MESSAGE_ACTIVATE','Toggle فعال');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Toggle غیر فعال');
define('_AM_XHELP_TEXT_ACTIVE','فعال');
define('_AM_XHELP_TEXT_INACTIVE','غیر فعال');
define('_AM_XHELP_TEXT_ACTIVITY','فعالیت');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','میل باکس شاخه به روز شد');

define('_AM_XHELP_TEXT_MANAGE_FIELDS','مدیریت فیلد های دست ساز');
define('_AM_XHELP_ADD_FIELD','اضافه کردن فیلد های دست ساز');
define('_AM_XHELP_EDIT_FIELD','ویرایش فیلد های دست ساز');
define('_AM_XHELP_TEXT_NAME_DESC','نامی که به افراد در هنگام پر کردن فیلد نشان داده میشود.');
define('_AM_XHELP_TEXT_FIELDNAME','نام فیلد');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','به صورت کد و برای نشان دادن نام در دیتابیس است. انگلیسی نوشته شود.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','هر متنی که توضیح دهد این فیلد راد چطور باید پر کرد');
define('_AM_XHELP_TEXT_CONTROLTYPE','نوع کنترل');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','نوع کنترل HTML که فیلد کاستوم را render میکند.');
define('_AM_XHELP_TEXT_DEPT_DESC','دوست دارید در چه شاخه هایی این فیلد نشان داده شود؟');
define('_AM_XHELP_TEXT_REQUIRED','ضروری');
define('_AM_XHELP_TEXT_REQUIRED_DESC','آیا این فیلد در موقع پر کردن بلیت حتما باید نوشته شود؟');
define('_AM_XHELP_TEXT_DATATYPE','نوع داده ها');
define('_AM_XHELP_TEXT_DATATYPE_DESC','چه نوع داده ای در این فیلد استفاده میشود؟');
define('_AM_XHELP_TEXT_VALIDATION','اعتبار');
define('_AM_XHELP_TEXT_VALIDATION_DESC','شرایطی که برای تعیین صحت اطلاعات وارد شده توسط کاربر مورد سنجش قرار می گیرد.');
define('_AM_XHELP_TEXT_WEIGHT','وزن');
define('_AM_XHELP_TEXT_WEIGHT_DESC','برای چیدن فیلد های دست ساز استفاده میشود.');
define('_AM_XHELP_TEXT_FIELDVALUES','فهرست مقدار فیلد ها');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','مثال:<br />ن=نا مشخص<br />م=مرد<br />ز=زن<br /><br />این مقدار برای باکس های انتخابی یا هر باکسی با امکان انتخاب چند تایی استفاده می شود.اطلاعات وارد شده قبل از علامت  = کلید ،و اطلاعات وارد شده بعد از آن مقدار است.');
define('_AM_XHELP_TEXT_DEFAULTVALUE','مقدار پیشفرض');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','مقدار پیشفرضی که در فیلد دست ساز مورد استفاده قرار میگیرد.<br />برای فیلد دست سازی که بیش از یک مقدار پیشفرض دارد، از کلید عنصر استفاده کنید.');
define('_AM_XHELP_TEXT_LENGTH','طول');
define('_AM_XHELP_TEXT_LENGTH_DESC','طول فیلد دست ساز.');

define('_AM_XHELP_TEXT_REGEX_CUSTOM','دست ساز');
define('_AM_XHELP_TEXT_REGEX_USPHONE','شماره تلفن');
define('_AM_XHELP_TEXT_REGEX_USZIP','US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','آدرس ایمیل');

define('_XHELP_CONTROL_DESC_TXTBOX','Text Box');
define('_XHELP_CONTROL_DESC_TXTAREA','Multi-line Text Box');
define('_XHELP_CONTROL_DESC_SELECT','Select Box');
define('_XHELP_CONTROL_DESC_MULTISELECT','Multi-Select Box');
define('_XHELP_CONTROL_DESC_YESNO','Yes / No');
define('_XHELP_CONTROL_DESC_CHECKBOX','Checkbox');
define('_XHELP_CONTROL_DESC_RADIOBOX','Radiobox');
define('_XHELP_CONTROL_DESC_DATETIME','Date+Time');
define('_XHELP_CONTROL_DESC_FILE','File');

define('_XHELP_DATATYPE_TEXT','متن');
define('_XHELP_DATATYPE_NUMBER_INT','شماره (عددی)');
define('_XHELP_DATATYPE_NUMBER_DEC','شماره (اعشاری)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','آیا اطمینان دارید که می خواهید فیلد شماره %u را حذف کنید؟');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE','نوع کنترل غیر مجاز انتخاب شده است.');
define('_AM_XHELP_TEXT_SESSION_RESET','پاک کردن خطا ها');
define('_AM_XHELP_VALID_ERR_NAME','نام ست نشد');
define('_AM_XHELP_VALID_ERR_FIELDNAME','نام فیلد ست نشد');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','نام فیلد باید منحصر به فرد باشد');
define('_AM_XHELP_VALID_ERR_LENGTH','طول فیلد باید یک عدد بین %u و %u باشد');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','مقدار پیش فرض باید در فهرست گزینه ها موجود باشد');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','مقدار "%s" بزرگتر از اندازه فیلد است, %u کاراکتر');
define('_AM_XHELP_VALID_ERR_VALUE','شما باید برای این فیلد یک مقدار مشخص کنید');
define('_AM_XHELP_MSG_FIELD_ADD_OK','فیلد با موفقیت ذخیره شد');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','در حین ذخیره کردن فیلد خطا رخ داد');
define('_AM_XHELP_MSG_FIELD_UPD_OK','فیلد با موفقیت به روز شد');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','در حین به روز کردن فیلد خطا رخ داد');
define('_AM_XHELP_MSG_SUBMISSION_ERR','ارسال شما خطا دارد. لطفا اصلاح کرده و دوباره سعی کنید');
define('_AM_XHELP_MSG_NEED_UID','خطا: شما باید اول یک کاربر انتخاب کنید.');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','حالت پیشفرض');

define('_AM_XHELP_VALID_ERR_MIME_EXT','پسوند فایل ست نشد');
define('_AM_XHELP_VALID_ERR_MIME_NAME','نوع /نام فایل کاربردی ست نشد');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','پسوند های فایل (Mimetype) ست نشدند');

define('_AM_XHELP_TEXT_NOTIF_NAME','نام آگهی رسانی');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','اعضای پذیرنده ');

define('_AM_XHELP_NOTIF_NEW_TICKET','بلیت جدید');
define('_AM_XHELP_NOTIF_DEL_TICKET','بلیت حذف شده');
define('_AM_XHELP_NOTIF_MOD_TICKET','بلیت ویرایش شده');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','پاسخ جدید');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','پاسخ ویرایش شده');
define('_AM_XHELP_NOTIF_MOD_STATUS','حالت بلیت عوض شده');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','اهمیت بلیت عوض شده');
define('_AM_XHELP_NOTIF_MOD_OWNER','مسئول بلیت عوض شده');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','بلیت بسته شده');
define('_AM_XHELP_NOTIF_MERGE_TICKET','بلیت ادغام شده');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1','همه کمک کننده ها');
define('_AM_XHELP_STAFF_SETTING2','کمک کنند های این شاخه');
define('_AM_XHELP_STAFF_SETTING3','مسئول بلیت');
define('_AM_XHELP_STAFF_SETTING4','آگهی رسانی خاموش');
define('_AM_XHELP_USER_SETTING1','آگهی رسانی روشن');
define('_AM_XHELP_USER_SETTING2','آگهی رسانی خاموش');
define('_AM_XHELP_TEXT_SUBMITTER','ارسال کننده');
define('_AM_XHELP_TEXT_NOTIF_STAFF','آگهی رسانی کمک کننده');
define('_AM_XHELP_TEXT_NOTIF_USER','آگهی رسانی کاربر');
define('_AM_XHELP_TEXT_ASSOC_TPL','تمپلیت های مشترک');
define('_AM_XHELP_TEXT_AND','و');
?>