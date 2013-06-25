<?php
//$Id: main.php,v 1.8 2005/12/01 20:27:43 eric_juden Exp $

define('_XHELP_CATEGORY1','گیرنده اولیه بلیت');
define('_XHELP_CATEGORY2','حذف پاسخ ها');
define('_XHELP_CATEGORY3','حذف بلیت ها');
define('_XHELP_CATEGORY4','اضافه کردن کاربر / بلیت');
define('_XHELP_CATEGORY5','اصلاح پاسخ ها');
define('_XHELP_CATEGORY6','اصلاح اطلاعات بلیت');

define('_XHELP_SEC_TICKET_ADD', 0);
define('_XHELP_SEC_TICKET_EDIT', 1);
define('_XHELP_SEC_TICKET_DELETE', 2);
define('_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_XHELP_SEC_TICKET_STATUS', 4);
define('_XHELP_SEC_TICKET_PRIORITY', 5);
define('_XHELP_SEC_TICKET_LOGUSER', 6);
define('_XHELP_SEC_RESPONSE_ADD', 7);
define('_XHELP_SEC_RESPONSE_EDIT', 8);
define('_XHELP_SEC_TICKET_MERGE', 9);
define('_XHELP_SEC_FILE_DELETE', 10);

define('_XHELP_SEC_TEXT_TICKET_ADD','اضافه کردن بلیت ها');
define('_XHELP_SEC_TEXT_TICKET_EDIT','اصلاح بلیت ها');
define('_XHELP_SEC_TEXT_TICKET_DELETE','حذف بلیت ها');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','عوض کردن مسوول رسیدگی به بلیت ها');
define('_XHELP_SEC_TEXT_TICKET_STATUS','عوض کردن حالت بلیت ها');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','عوض کردن اهمیت بلیت');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','وارد کردن بلیت برای کاربر');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','اضافه کردن پاسخ');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','اصلاح پاسخ');
define('_XHELP_SEC_TEXT_TICKET_MERGE','ادغام بلیت ها');
define('_XHELP_SEC_TEXT_FILE_DELETE','حذف فایل های متصل شده');

define('_XHELP_JSC_TEXT_DELETE','آیا مطمان هستید که می خواهید این بلیت را حذف کنید؟');

define('_XHELP_MESSAGE_ADD_DEPT','شاخه با موفقیت اضافه شد');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','خطا: شاخه اضافه نشد');
define('_XHELP_MESSAGE_UPDATE_DEPT','شاخه با موفقیت به روز شد');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','خطا: شاخه به روز نشد');
define('_XHELP_MESSAGE_DEPT_DELETE','شاخه با موفقیت حذف شد');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','خطا : شاخه حذف نشد');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','خطا:کمک کننده اضافه نشد');
define('_XHELP_MESSAGE_ADDSTAFF','کمک کننده با موفقیت اضافه شد');
define('_XHELP_MESSAGE_STAFF_DELETE','کمک کننده با موفقیت حذف شد');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','کمک کننده حذف نشد');
define('_XHELP_MESSAGE_EDITSTAFF','ویژگی های فردی کمک کننده با موفقیت به روز شد');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','خطا: کمک کننده به روز نشد');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','خطا : شاخه های قدیمی پاک نشده اند');
define('_XHELP_MESSAGE_DEPT_EXISTS','شاخه در حال حاضر وجود دارد');
define('_XHELP_MESSAGE_ADDTICKET','بلیت با موفقیت اضافه شد');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','خطا: بلیت اضافه نشد');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','خطا: عمل انجام شده وارد دیتابیس نشد');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','اهمیت بلیت با موفقیت به روز شد');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','خطا: اهمیت بلیت به روز نشد');
define('_XHELP_MESSAGE_UPDATE_STATUS','حالت بلیت با موفقیت به روز شد');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','خطا: حالت بلیت به روز نشد');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','شاخه بلیت با موفقیت به روز شد');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','خطا: شاخه بلیت به روز نشد');
define('_XHELP_MESSAGE_CLAIM_OWNER','شما پذیرفتید که رسیدگی به این بلیت برای شما باشد');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','خطا: تخصیص رسیدگی بلیت به شما انجام نشد');
define('_XHELP_MESSAGE_ASSIGN_OWNER','رسیدگی به این بلیت با موفقیت واگذار شد');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','خطا: واگذاری بلیت انجام نشد');
define('_XHELP_MESSAGE_UPDATE_OWNER','رسیدگی کننده به بلیت با موفقیت به روز شد');
define('_XHELP_MESSAGE_ADDFILE','فایل با موفقیت آپلود شد');
define('_XHELP_MESSAGE_ADDFILE_ERROR','خطا: فایل آپلود نشد');
define('_XHELP_MESSAGE_ADDRESPONSE','پاسخ با موفقیت اضافه شد');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','خطا:" پاسخ اضافه نشد');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Error: callsClosed field not updated');
define('_XHELP_MESSAGE_ALREADY_OWNER','در حال حاضر %s مسوول رسیدگی به این بلیت است');
define('_XHELP_MESSAGE_ALREADY_STATUS','بلیت به این حالت تغییر کرد');
define('_XHELP_MESSAGE_DELETE_TICKET','بلیت با موفقیت حذف شد');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','خطا: بلیت حذف نشد');
define('_XHELP_MESSAGE_ADD_SIGNATURE','امضا با موفقیت به روز شد');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','خطا: امضا به روز نشد');
define('_XHELP_MESSAGE_RESPONSE_TPL','پاسخ های از پیش تعریف شده با موفقیت به روز شدند');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','خطا: پاسخ ها به روز نشدند');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','پاسخ های از پیش تعریف شده با موفقیت حذف شدند');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','خطا: پاسخ از پیش تعریف شده حذف نشد');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','نقد با موفقیت اضافه شد');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','خطا: نقد اضافه نشد');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','خطا: اطلاعات فرد کمک کننده به روز نشد');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','خطا: امضا به روز نشد');
define('_XHELP_MESSAGE_UPDATE_SIG','امضا به روز شد');
define('_XHELP_MESSAGE_EDITTICKET','بلیت به روز شد');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','خطا: بلیت به روز نشد');
define('_XHELP_MESSAGE_USER_MOREINFO','اطلاعات با موفقیت اضافه شد');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','خطا: اطلاعات اضافه نشد');
define('_XHELP_MESSAGE_USER_NO_INFO','خطا: شما اطلاعات جدیدی را وارد نکرده اید');
define('_XHELP_MESSAGE_EDITRESPONSE','پاسخ با موفقیت به روز شد');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','خطا: پاسخ به روز نشد');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','آگا هی ها با موفقیت به روز شدند');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','آگاهی ها به روز نشدند');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','کاربر هیچ آگهی دریافت نکرده است');
define('_XHELP_MESSAGE_NO_DEPTS','خطا: هیچ شاخه ای درست نشده با مدیر تماس بگیرید');
define('_XHELP_MESSAGE_NO_STAFF','خطا: هیچ کمک کننده ای تعریف نشده با مدیر تماس بگیرید');
define('_XHELP_MESSAGE_TICKET_REOPEN','بلیت با موفقیت دوباره باز شد');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','خطا: بلیت با موفقیت به روز نشد');
define('_XHELP_MESSAGE_TICKET_CLOSE','بلیت با موفقیت بسته شد');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','خطا: بلیت بسته نشد');
define('_XHELP_MESSAGE_NOT_USER','خطا: نمیتوانید در این بلیت تغییرات دهید.');
define('_XHELP_MESSAGE_NO_TICKETS','خطا: هیچ بلیتی انتخاب نشده است');
define('_XHELP_MESSAGE_NOOWNER','هیچ مسولی برای رسیدگی به بلیت وجود ندارد');
define('_XHELP_MESSAGE_UNKNOWN','نا شناس');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','خطا: این پسوند اجازه آپلود شدن ندارد');
define('_XHELP_MESSAGE_NO_UID','حطا: شماره کاربری شناسایی نشد');
define('_XHELP_MESSAGE_NO_PRIORITY','اخطا: اهمیت شناسایی نشد');
define('_XHELP_MESSAGE_FILE_ERROR','خطا: به دلایل زیر فایل آپلود شده ذخیره نشد<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','خطا: ایمیل به روز نشد');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','آیا اطمینان دارید که میخواهید این بلیت ها را حذف کنید');
define('_XHELP_MESSAGE_DELETE_TICKETS','بلیت ها با موفقیت حذف شدند');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','خطا: بلیت ها حذف نشدند');
define('_XHELP_MESSAGE_VALIDATE_ERROR','بلیت ارسالی شما ایراد دارد. لطفا ایراد را برطرف کنید و دوباره ارسال کنید');
define('_XHELP_MESSAGE_UNAME_TAKEN',' در حال حاضر استفاده شده است.');
define('_XHELP_MESSAGE_INVALID',' نا معتبر است.');
define('_XHELP_MESSAGE_REQUIRED',' ضروری است.');
define('_XHELP_MESSAGE_LONG',' خیلی بزرگ است.');
define('_XHELP_MESSAGE_SHORT',' خیلی کوتاه است.');
define('_XHELP_MESSAGE_NOT_ENTERED',' وارد نشده است.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' عددی نیست.');
define('_XHELP_MESSAGE_RESERVED',' قبلا گرفته شده است.');
define('_XHELP_MESSAGE_NO_SPACES',' نباید فاصله داشته باشد');
define('_XHELP_MESSAGE_NOT_SAME',' مانند هم نیست.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' استفاده نشده است.');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','کاربر ساخته نشده است');
define('_XHELP_MESSAGE_NO_REGISTER','لطفا با شناسه خود لاگین کنید تا بتوانید بلیت ارسال کنید');
define('_XHELP_MESSAGE_NEW_USER_ERR','خطا: شناسه کاربری شما ساخته نشد.');
define('_XHELP_MESSAGE_EMAIL_USED','خطا: ایمیل در حال حاضر  برای ثبت نام استفاده شده است.');
define('_XHELP_MESSAGE_DELETE_FILE_ERR','خطا: فایل حذف نشد.');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','خطا: جستجو حذف نشد.');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','خطا: بارگذاری فایل برای ماژول غیر فعال شده است.');
define('_XHELP_MESSAGE_UPLOAD_ERR','فایل %s از طرف %s به دلیل %s ذخیره نشد.');

define('_XHELP_MESSAGE_NO_ADD_TICKET','شما برای وارد کردن بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','شما برای حذف کردن بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','شما برای ویرایش کردن بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','شما برای عوض کردن مسئول رسیدگی به بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','شما برای عوض کردن اهمیت بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','شما برای عوض کردن حالت بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','شما برای وارد کردن پاسخ بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','شما برای ویرایش کردن  پاسخ بلیت دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_MERGE','شما برای ادغام  کردن بلیت ها دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_TICKET2','خطا: شما بلیتی را که باید با این بلیت ادغام شود مشخص نکردید.');
define('_XHELP_MESSAGE_ADDED_EMAIL','ایمیل با موفقیت اضافه شد.');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','خطا: ایمیل اضافه نشد.');
define('_XHELP_MESSAGE_NO_EMAIL','خطا: شما ایمیلی را برای اضافه شدن مشخص نکردید.');
define('_XHELP_MESSAGE_ADD_EMAIL','آکهی رسانی ایمیل ها به روز شد.');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','خطا: ایمیل به روز نشد.');
define('_XHELP_MESSAGE_NO_MERGE_TICKET','شما برای توقف یک ایمیل دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_FILE_DELETE','شما برای حذف کردن فایل ها دسترسی ندارید.');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','خطا: مقدار فیلد دست ساز ذخیره نشد.');

define('_XHELP_ERROR_INV_TICKET','خطا: بلیت نا معتبر تشخیص داده شد. لطفا بلیت را چک کرده و دوباره سعی کنید!');
define('_XHELP_ERROR_INV_RESPONSE','خطا: پاسخ بلیت نا معتبر تشخیص داده شد. لطفا پاسخ بلیت را چک کرده و دوباره سعی کنید!');
define('_XHELP_ERROR_NODEPTPERM','شما نمی توانید برای این بلیت پاسخ ارسال کنید. علت: هیچ کمک کننده ای برای این شاخه وجود ندارد.');
define('_XHELP_ERROR_INV_STAFF','خطا: کاربر کمک کننده نیست.');
define('_XHELP_ERROR_INV_TEMPLATE','خطا: قبل از ارسال هم نام تمپلیت و هم متن داخل آن را پر کنید');
define('_XHELP_ERROR_INV_USER','خطا: شما برای دیدن این بلیت دسترسی ندارید.');

define('_XHELP_TITLE_ADDTICKET','اضافه کردن بلیت');
define('_XHELP_TITLE_ADDRESPONSE','اضافه کردن پاسخ');
define('_XHELP_TITLE_EDITTICKET','ویرایش اطلاعات بلیت');
define('_XHELP_TITLE_EDITRESPONSE','ویرایش  پاسخ');
define('_XHELP_TITLE_SEARCH','جستجو');

define('_XHELP_TEXT_SIZE','اندازه:');
define('_XHELP_TEXT_REALNAME','نام واقعی');
define('_XHELP_TEXT_ID','شماره :');
define('_XHELP_TEXT_NAME','شناسه کاربری:');
define('_XHELP_TEXT_USER','کاربر:');
define('_XHELP_TEXT_USERID','شماره (ID)کاربر :');
define('_XHELP_TEXT_LOOKUP','جستجو');
define('_XHELP_TEXT_LOOKUP_USER','جستجوی کاربر');
define('_XHELP_TEXT_EMAIL','ایمیل:');
define('_XHELP_TEXT_ASSIGNTO','شاخه :');
define('_XHELP_TEXT_PRIORITY','اهمیت:');
define('_XHELP_TEXT_STATUS','حالت:');
define('_XHELP_TEXT_SUBJECT','عنوان:');
define('_XHELP_TEXT_DEPARTMENT','شاخه:');
define('_XHELP_TEXT_OWNER','رسیدگی کننده:');
define('_XHELP_TEXT_CLOSEDBY','بسته شده توسط:');
define('_XHELP_TEXT_NOTAPPLY','به کار نرفته');
define('_XHELP_TEXT_TIMESPENT','زمان صرف شده برای رسیدگی :');
define('_XHELP_TEXT_DESCRIPTION','شرح:');
define('_XHELP_TEXT_ADDFILE','اضافه کردن فایل:');
define('_XHELP_TEXT_FILE','فایل:');
define('_XHELP_TEXT_RESPONSE','پاسخ');
define('_XHELP_TEXT_RESPONSES','پاسخ');
define('_XHELP_TEXT_CLAIMOWNER','مسوول رسیدگی:');
define('_XHELP_TEXT_CLAIM_OWNER','با کلیک روی این آیکن شما مسوول رسیدگی به این بلیت می شوید');
define('_XHELP_TEXT_TICKETDETAILS','جزییات بلیت شماره %u');
define('_XHELP_TEXT_MINUTES','دقیقه');
define('_XHELP_TEXT_SEARCH','جستجو:');
define('_XHELP_TEXT_SEARCHBY','در:');
define('_XHELP_SEARCH_DESC','شرح');
define('_XHELP_SEARCH_SUBJECT','عنوان');
define('_XHELP_TEXT_NUMRESULTS','تعداد نتایج در هر صفحه:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','نتایج جستجو');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','پاسخ های از پیش تعریف شده:');
define('_XHELP_TEXT_PREDEFINED0','-- ساختن  پاسخ --');
define('_XHELP_TEXT_NO_USERS','کاربری پیدا نشد');
define('_XHELP_TEXT_SEARCH_AGAIN','جستجوی دوباره');
define('_XHELP_TEXT_LOGGED_BY','ارسال شده توسط:');
define('_XHELP_TEXT_LOG_TIME','زمانی که بلیت زده شده:');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','جزییات مسوول رسیدگی');
define('_XHELP_TEXT_ACTIVITY_LOG','لیست کار های انجام شده');
define('_XHELP_TEXT_HELPDESK_TICKET','بلیت صفحه کمک و راهنما:');
define('_XHELP_TEXT_YES','بله');
define('_XHELP_TEXT_NO','نه');
define('_XHELP_TEXT_ALL_TICKETS','همه بلیت ها');
define('_XHELP_TEXT_HIGH_PRIORITY','بلیت های واگذار نشده به من با بیشترین اهمیت');
define('_XHELP_TEXT_NEW_TICKETS','بلیت های جدید');
define('_XHELP_TEXT_MY_TICKETS','بلیت های باز واگذار شده به من');
define('_XHELP_TEXT_SUBMITTED_TICKETS','بلیت های ارسال شده توسط من');
define('_XHELP_TEXT_ANNOUNCEMENTS','اعلان ها');
define('_XHELP_TEXT_MY_PERFORMANCE','کارایی من');
define('_XHELP_TEXT_RESPONSE_TIME','متوسط زمان پاسخ گویی:');
define('_XHELP_TEXT_RATING','ارزیابی:');
define('_XHELP_TEXT_NUMREVIEWS','تعداد نقد ها:');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','تعداد بلیت های بسته شده:');
define('_XHELP_TEXT_TEMPLATE_NAME','نام تمپلیت:');
define('_XHELP_TEXT_MESSAGE','پیام:');
define('_XHELP_TEXT_ACTIONS','عمل:');
define('_XHELP_TEXT_ACTIONS2','عمل ها');
define('_XHELP_TEXT_MY_NOTIFICATIONS','آگاهی های من');
define('_XHELP_TEXT_SELECT_ALL','انتخاب همه');
define('_XHELP_TEXT_USER_IP','کاربر IP:');
define('_XHELP_TEXT_OWNERSHIP','مسوول رسیدگی');
define('_XHELP_TEXT_ASSIGN_OWNER','واگذاری مسوولیت رسیدگی');
define('_XHELP_TEXT_TICKET','بلیت');
define('_XHELP_TEXT_USER_RATING','ارزیابی کاربر:');
define('_XHELP_TEXT_EDIT_RESPONSE','ویرایش پاسخ');
define('_XHELP_TEXT_FILE_ADDED','فایل اضافه شد:');
define('_XHELP_TEXT_ACTION','عمل:');
define('_XHELP_TEXT_LAST_TICKETS','آخرین بلیت های ارسال شده از طرف:');
define('_XHELP_TEXT_RATE_STAFF','ارزیابی پاسخ گویی فرد کمک کننده');
define('_XHELP_TEXT_COMMENTS','نظر ها:');
define('_XHELP_TEXT_MY_OPEN_TICKETS','بلیت های باز من');
define('_XHELP_TEXT_RATE_RESPONSE','آیا پاسخ را ارزیابی میکنید؟');
define('_XHELP_TEXT_RESPONSE_RATING','ارزش  پاسخ:');
define('_XHELP_TEXT_REOPEN_TICKET','آیا بلیت را دوباره باز می کنید ؟');
define('_XHELP_TEXT_MORE_INFO','آیا به اطلاعات بیشتری نیاز دارید؟');
define('_XHELP_TEXT_REOPEN_REASON','دلیل باز کردن دوباره ( اختیاری )');
define('_XHELP_TEXT_MORE_INFO2','آیا میخواهید اطلاعات بیشتری را به بلیت خود اضافه کنید؟ پس اینجا بنویسید');
define('_XHELP_TEXT_NO_DEPT','بدون شاخه');
define('_XHELP_TEXT_NOT_EMAIL','آدرس ایمیل:');
define('_XHELP_TEXT_LAST_REVIEWS','آخرین نقد های افراد کمک کننده:');
define('_XHELP_TEXT_SORT_TICKETS','بلیت ها را بر اساس این ستون مرتب کن');
define('_XHELP_TEXT_ELAPSED','مدت زمان سپری شده از زدن بلیت:');
define('_XHELP_TEXT_FILTERTICKETS','بلیت های فیلتر شده:');
define('_XHELP_TEXT_LIMIT','رکورد ها در هر صفحه');
define('_XHELP_TEXT_SUBMITTEDBY','ارسال شده توسط:');
define('_XHELP_TEXT_NO_INCLUDE','هر کدام');
define('_XHELP_TEXT_PRIVATE_RESPONSE','پاسخ خصوصی:');
define('_XHELP_TEXT_PRIVATE','خصوصی');
define('_XHELP_TEXT_CLOSE_TICKET','آیا بلیت بسته شود ؟');
define('_XHELP_TEXT_ADD_SIGNATURE','آیا امضا به پاسخ ها اضافه شود ؟');
define('_XHELP_TEXT_LASTUPDATE','آخرین به روز رسانی :');
define('_XHELP_TEXT_BATCH_ACTIONS','عمل روی همه بلیت های انتخاب شده :');
define('_XHELP_TEXT_BATCH_DEPARTMENT','تغییر شاخه');
define('_XHELP_TEXT_BATCH_PRIORITY','تغییر اهمیت');
define('_XHELP_TEXT_BATCH_STATUS','تغییر حالت');
define('_XHELP_TEXT_BATCH_DELETE','حذف بلیت ها');
define('_XHELP_TEXT_BATCH_RESPONSE','پاسخ دادن');
define('_XHELP_TEXT_BATCH_OWNERSHIP','واگذاری/ گرفتن مسوولیت رسیدگی');
define('_XHELP_TEXT_UPDATE_COMP','به روز رسانی تکمیل شد');
define('_XHELP_TEXT_TOPICS_ADDED','تاپیک ها اضافه شدند');
define('_XHELP_TEXT_DEPTS_ADDED','شاخه ها اضافه شدند');
define('_XHELP_TEXT_CLOSE_WINDOW','بستن پنجره');
define('_XHELP_TEXT_USER_LOOKUP','پیدا کردن کاربر');
define('_XHELP_TEXT_EVENT','روی داد');
define('_XHELP_TEXT_AVAIL_FILETYPES','نوع فایل های قابل قبول');
define('_XHELP_USER_REGISTER','ثبت کاربر');

define('_XHELP_TEXT_SETDEPT','انتخاب شاخه:');
define('_XHELP_TEXT_SETPRIORITY','تعیین اهمیت بلیت:');
define('_XHELP_TEXT_SETOWNER','انتخاب مسوول رسیدگی:');
define('_XHELP_TEXT_SETSTATUS','تعیین حالت بلیت:');
define('_XHELP_TEXT_MERGE_TICKET','ادغام بلیت ها');
define('_XHELP_TEXT_MERGE_TITLE','شماره بلیتی (ID)را که میخواهید با این بلیت ادغام شود وارد کنید.');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','آگهی رسانی ایمیل:');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','ایمیلی را وارد کنید که برای آگهی رسانی در هنگام به روز شدن بلیت ها استفاده می شود.');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','آگهی رسانی های دریافتی:');
define('_XHELP_TEXT_EMAIL_SUPPRESS','ایمیل ها توقیف شده اند. اینجا را کلیک کنید تا آگهی رسانی ایمیل ارسال شود.');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','ایمیل ها ارسال شدند. اینجا را کلیک کنید تا توقیف شوند.');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','آکهی رسانی بلیت ها');
define('_XHELP_TEXT_STATE','حالت:');
define('_XHELP_TEXT_BY_STATUS','دارای حالت:');
define('_XHELP_TEXT_BY_STATE','دارای توضیح:');
define('_XHELP_TEXT_SEARCH_OR','-- یا --');
define('_XHELP_TEXT_VIEW1','نمایش پایه');
define('_XHELP_TEXT_VIEW2','نمایش پیشرفته');
define('_XHELP_TEXT_SAVE_SEARCH','جستجو ذخیره شود؟');
define('_XHELP_TEXT_SEARCH_NAME','نام جستجو:');
define('_XHELP_TEXT_SAVED_SEARCHES','جستجو های قبلا ذخیره شده');
define('_XHELP_TEXT_SWITCH_TO','عوض کردن به ');
define('_XHELP_TEXT_ADDITIONAL_INFO','اطلاعات اضافی');

define('_XHELP_ROLE_NAME1','مدیر بلیت');
define('_XHELP_ROLE_NAME2','پشتیبانی');
define('_XHELP_ROLE_NAME3','مرورگر');
define('_XHELP_ROLE_DSC1','همه کاری بتواند انجام دهد؟');
define('_XHELP_ROLE_DSC2','وارد کردن بلیت و پاسخ ها ، تغییر اهمیت و حالت بلیت ها و وارد کردن بلیت برای یک کاربر خاص');
define('_XHELP_ROLE_DSC3','هیچ تغییری نتواند انجام دهد');
define('_XHELP_ROLE_VAL1', 2047);
define('_XHELP_ROLE_VAL2', 241);
define('_XHELP_ROLE_VAL3', 0);



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','انتخاب کن:');
define('_XHELP_TEXT_ADD_RESPONSE','اضافه کردن پاسخ');
define('_XHELP_TEXT_EDIT_TICKET','ویرایش بلیت');
define('_XHELP_TEXT_DELETE_TICKET','حذف بلیت');
define('_XHELP_TEXT_PRINT_TICKET','چاپ بلیت');
define('_XHELP_TEXT_UPDATE_PRIORITY','به روز کردن اهمیت');
define('_XHELP_TEXT_UPDATE_STATUS','به روز کردن حالت');

define('_XHELP_PIC_ALT_USER_AVATAR','آواتار کاربر');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','بدون رفرش اوتو ماتیک');
define('_XHELP_TEXT_AUTO_REFRESH1','هر1 دقیقه رفرش کن');
define('_XHELP_TEXT_AUTO_REFRESH2','هر 5 دقیقه رفرش کن');
define('_XHELP_TEXT_AUTO_REFRESH3','هر 10 دققیه رفرش کن');
define('_XHELP_TEXT_AUTO_REFRESH4','هر 30 دقیقه رفرش کن');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','صفحه اصلی فهرست بلیت ها');
define('_XHELP_MENU_LOG_TICKET','ارسال  بلیت');
define('_XHELP_MENU_MY_PROFILE','ویژگی های فردی من');
define('_XHELP_MENU_ALL_TICKETS','دیدن همه بلیت ها');
define('_XHELP_MENU_SEARCH','جستجو');

define('_XHELP_SEARCH_EMAIL','ایمیل');
define('_XHELP_SEARCH_USERNAME','شناسه کاربری');
define('_XHELP_SEARCH_UID','شماره کاربری');

define('_XHELP_BUTTON_ADDRESPONSE','اضافه کردن  پاسخ');
define('_XHELP_BUTTON_ADDTICKET','ارسال بلیت');
define('_XHELP_BUTTON_EDITTICKET','ویرایش بلیت');
define('_XHELP_BUTTON_RESET','ریست');
define('_XHELP_BUTTON_EDITRESPONSE','به روز کردن  پاسخ');
define('_XHELP_BUTTON_SEARCH','جستجو');
define('_XHELP_BUTTON_LOG_USER','اضافه کردن برای کاربر');
define('_XHELP_BUTTON_FIND_USER','یافتن کاربر');
define('_XHELP_BUTTON_SUBMIT','ارسال');
define('_XHELP_BUTTON_DELETE','حذف');
define('_XHELP_BUTTON_UPDATE','به روز رسانی');
define('_XHELP_BUTTON_UPDATE_PRIORITY','به روز کردن اهمیت');
define('_XHELP_BUTTON_UPDATE_STATUS','به روز کردن حالت');
define('_XHELP_BUTTON_ADD_INFO','اضافه کردن اطلاعات');
define('_XHELP_BUTTON_SET','تعیین کن');
define('_XHELP_BUTTON_ADD_EMAIL','اضافه کردن ایمیل');
define('_XHELP_BUTTON_RUN','اجرا');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','زیاد');
define('_XHELP_TEXT_PRIORITY2','بیشتر از متوسط');
define('_XHELP_TEXT_PRIORITY3','متوسط');
define('_XHELP_TEXT_PRIORITY4','کمتر از متوسط');
define('_XHELP_TEXT_PRIORITY5','کم');

define('_XHELP_STATUS0','باز');
define('_XHELP_STATUS1','در حال بررسی');
define('_XHELP_STATUS2','بسته');

define('_XHELP_STATE1','تصمیم گیری نشده');
define('_XHELP_STATE2','تصمیم گیری شده');
define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_RATING0','بدون ارزش گذاری');
define('_XHELP_RATING1','بی ارزش');
define('_XHELP_RATING2','کمتر از متوسط');
define('_XHELP_RATING3','متوسط');
define('_XHELP_RATING4','بیشتر از متوسط');
define('_XHELP_RATING5','عالی');

// Log Messages
define('_XHELP_LOG_ADDTICKET','بلیت اضافه شده');
define('_XHELP_LOG_ADDTICKET_FORUSER','بلیت اضافه شده برای %s توسط %s');
define('_XHELP_LOG_EDITTICKET','اطلاعات بلیت ویرایش شد');
define('_XHELP_LOG_UPDATE_PRIORITY','اهمیت بلیت از: %u به :%u عوض شد');
define('_XHELP_LOG_UPDATE_STATUS','حالت بلیت از %s به %s عوض شد');
define('_XHELP_LOG_CLAIM_OWNERSHIP','پذیرفتن مسوولیت رسیدگی');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','واگذاری مسوولیت رسیدگی به %s');
define('_XHELP_LOG_ADDRESPONSE','اضافه کردن پاسخ');
define('_XHELP_LOG_USER_MOREINFO','اضافه کردن اطلاعات بیشتر');
define('_XHELP_LOG_EDIT_RESPONSE','پاسخ شماره %s ویرایش شد');
define('_XHELP_LOG_REOPEN_TICKET','بلیت دوباره باز شد');
define('_XHELP_LOG_CLOSE_TICKET','بلیت بسته شد');
define('_XHELP_LOG_ADDRATING','ارزش گذاری پاسخ %u');
define('_XHELP_LOG_SETDEPT','واگذاری به شاخه %s ');
define('_XHELP_LOG_MERGETICKETS','بلیت %s با بلیت %s ادغام شد');
define('_XHELP_LOG_DELETEFILE','فایل %s حذف شد');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','بلیتی پیدا نشد');
define('_XHELP_NO_RESPONSES_ERROR','پاسخی پیدا نشد');
define('_XHELP_NO_MAILBOX_ERROR','میل باکس نا معتبر تشخیص داده شد');
define('_XHELP_NO_FILES_ERROR','فایلی پیدا نشد');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','نظر بدید ؟');
define("_XHELP_ANNOUNCE_READMORE","خواندن ادامه ...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 نظر");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s نظر");
define("_XHELP_TICKET_MD5SIGNATURE","کلید پشتیبانی (Support Key):");

define('_XHELP_NO_OWNER','بدون مسوول رسیدگی');
define('_XHELP_RESPONSE_EDIT','پاسخ توسط  %s روی %s اصلاح شد');

define('_XHELP_TIME_SECS','ثانیه');
define('_XHELP_TIME_MINS','دقیقه');
define('_XHELP_TIME_HOURS','ساعت');
define('_XHELP_TIME_DAYS','روز');
define('_XHELP_TIME_WEEKS','هفته');
define('_XHELP_TIME_YEARS','سال');

define('_XHELP_TIME_SEC','ثانیه');
define('_XHELP_TIME_MIN','دقیقه');
define('_XHELP_TIME_HOUR','ساعت');
define('_XHELP_TIME_DAY','روز');
define('_XHELP_TIME_WEEK','هفته');
define('_XHELP_TIME_YEAR','سال');

define('_XHELP_MAILEVENT_CLASS0', 0); // Connection message
define('_XHELP_MAILEVENT_CLASS1', 1); // Parse message
define('_XHELP_MAILEVENT_CLASS2', 2); // Storage message
define('_XHELP_MAILEVENT_CLASS3', 3); // General message

define('_XHELP_MAILEVENT_DESC0','اتصال به سرور ممکن نشد');
define('_XHELP_MAILEVENT_DESC1','پیغام قابل ترجمه نیست');
define('_XHELP_MAILEVENT_DESC2','پیام ها قابل ذخیره کردن نیستند');
define('_XHELP_MAILEVENT_DESC3','');
define('_XHELP_MBOX_ERR_LOGIN','اتصال به میل سرور انجام نشد:  login/password نا معتبر');
define('_XHELP_MBOX_INV_BOXTYPE','این نوع میل باکس پشتبانی نمی شود');

define('_XHELP_MAIL_CLASS0','اتصال');
define('_XHELP_MAIL_CLASS1','تجزیه (Parsing)');
define('_XHELP_MAIL_CLASS2','ذخیره');
define('_XHELP_MAIL_CLASS3','کلی');

define('_XHELP_GROUP_PERM_DEPT','xhelp_dept');
define('_XHELP_MISMATCH_EMAIL','مشخص شد که پاسخ های ارسالی توسط %s دخیره نمی شود. کلید پشتیبانی درست است، ولی پاسخ ها باید به جای این شخص از طرف %s فرستاده شوند.');
define('_XHELP_MESSAGE_MERGE','ادغام با موفقیت انجام شد.');
define('_XHELP_MESSAGE_MERGE_ERROR','خطا: ادغام انجام نشد.');
define('_XHELP_RESPONSE_NO_TICKET','بلیتی برای پاسخ دادن یافت نشد');
define('_XHELP_MESSAGE_NO_ANON','پیام از طرف %s بلوکه شده است، ارسال بلیت از طرف افراد نا شناس غیر فعال است');
define('_XHELP_MESSAGE_EMAIL_DEPT_MBOX','پیام از طرف %s بلوکه شده است،ارسال کننده میل باکس شاخه است.');

define('_XHELP_SIZE_BYTES','بایت');
define('_XHELP_SIZE_KB','کیلو بایت');
define('_XHELP_SIZE_MB','مگا بایت');
define('_XHELP_SIZE_GB','گیگا بایت');
define('_XHELP_SIZE_TB','ترا بایت');

define('_XHELP_TEXT_USER_NOT_ACTIVATED','کاربر مرحله فعال سازی شناسه را تمام نکرده است.');

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[غیر فعال به وسیله مدیر]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','روش اگهی رسانی در حال حاضر');
define('_XHELP_NOTIFY_METHOD1','پیام شخصی');
define('_XHELP_NOTIFY_METHOD2','ایمیل');

define('_XHELP_TEXT_TICKET_LISTS','فهرست بلیت ها');
define('_XHELP_TEXT_LIST_NAME','نام فهرست');
define('_XHELP_TEXT_CREATE_NEW_LIST','ساختن فهرست جدید');
define('_XHELP_TEXT_NO_RECORDS','هیچ اطلاعاتی یافت نشد.');
define('_XHELP_TEXT_EDIT','ویرایش');
define('_XHELP_TEXT_DELETE','حذف');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','ساختن جستجوی ذخیره شده');
define('_XHELP_MSG_ADD_TICKETLIST_ERR','خطا: فهرست بلیت ساخته نشد.');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','خطا: فهرست بلیت حذف نشد.');
define('_XHELP_MSG_NO_ID','خطا: شما شماره شناسه خاصی را مشخص نکردید.');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','دیدن ادامه بلیت ها');
define('_XHELP_MSG_NO_EDIT_SEARCH','خطا: شما اجازه ویرایش این جستجو را ندارید.');
define('_XHELP_MSG_NO_DEL_SEARCH','خطا: شما اجازه حذف این جستجو را ندارید.');
define('_XHELP_TEXT_ADD_STAFF','اضافه کردن کمک کننده');
?>