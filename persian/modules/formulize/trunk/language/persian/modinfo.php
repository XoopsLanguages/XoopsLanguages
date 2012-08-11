<?php
// Module Info

// The name of this module
define("_MI_formulize_NAME","فرم ها");

// A brief description of this module
define("_MI_formulize_DESC","براي تكميل فرمها و تحليل اطلاعات ورودي");

// admin/menu.php
define("_MI_formulize_ADMENU0","مديريت فرم ها");
define("_MI_formulize_ADMENU1","منو");

// notifications
define("_MI_formulize_NOTIFY_FORM","اطلاعيه هاي فرم");
define("_MI_formulize_NOTIFY_FORM_DESC","اطلاعيه هاي مربوط به فرم حاضر");
define("_MI_formulize_NOTIFY_NEWENTRY","ايجاد ركورد جديد در فرم");
define("_MI_formulize_NOTIFY_NEWENTRY_CAP","هنگامي كه كسي فرم را پر مي كند مرا باخبر كن");
define("_MI_formulize_NOTIFY_NEWENTRY_DESC","گزينه باخبر سازي به هنگام تكميل فرم توسط كاربر");
define("_MI_formulize_NOTIFY_NEWENTRY_MAILSUB","ركورد جديد در فرم");

define("_MI_formulize_NOTIFY_UPENTRY","ركورد ويرايش شده در فرم");
define("_MI_formulize_NOTIFY_UPENTRY_CAP","هرگاه كسي اطلاعات را ويراش كرد به من خبر بده");
define("_MI_formulize_NOTIFY_UPENTRY_DESC","گزينه باخبر سازي به هنگام ويرايش يك ركورد");
define("_MI_formulize_NOTIFY_UPENTRY_MAILSUB","ركورد ويرايش شده در يك فرم");

define("_MI_formulize_NOTIFY_DELENTRY","ركورد حذف شده از فرم");
define("_MI_formulize_NOTIFY_DELENTRY_CAP","با حذف يك ركورد توسط كاربر مرا باخبر كن");
define("_MI_formulize_NOTIFY_DELENTRY_DESC","گزينه باخبر سازي به هنگام حذف ركوردهاي يك فرم");
define("_MI_formulize_NOTIFY_DELENTRY_MAILSUB","ركورد حذف شده از فرم");


//	preferences
define("_MI_formulize_TEXT_WIDTH","طول پيش فرض تكست باكس ها");
define("_MI_formulize_TEXT_MAX","طول پيش فرض مجاز تكست باكس ها");
define("_MI_formulize_TAREA_ROWS","رديف هاي پيش فرض جعبه متن ها");
define("_MI_formulize_TAREA_COLS","ستون هاي پيش فرض جعبه متن ها");
define("_MI_formulize_DELIMETER","جداكننده پيش فرض دگمه هاي انتخاب و دگمه هاي گزينش");
define("_MI_formulize_DELIMETER_SPACE","فضاي سفيد");
define("_MI_formulize_DELIMETER_BR","خط فاصله");
define("_MI_formulize_SEND_METHOD","نحوه ارسال");
define("_MI_formulize_SEND_METHOD_DESC","توجه: فرم تكميل شده توسط كاربر ناشناس از طريق پيام خصوصي مجاز به ارسال نمي باشد.");
define("_MI_formulize_SEND_METHOD_MAIL","ايميل");
define("_MI_formulize_SEND_METHOD_PM","پيام خصوصي");
define("_MI_formulize_SEND_GROUP","ارسال به گروه");
define("_MI_formulize_SEND_ADMIN","ارسال فقط براي مدير");
define("_MI_formulize_SEND_ADMIN_DESC","Settings of \"Send to group\" will be ignored");
define("_MI_formulize_PROFILEFORM","هنگام مرور و ويرايش كاربران ، كدام فرم بخشي از مراحل ثبت عضويت قرار گيرد ؟ (استفاده از ماژول كدهاي ثبت عضويت الزاميست)");

define("_MI_formulize_ALL_DONE_SINGLES","آيا دگمه 'انصراف  ' در زير فرمهاي اصلاح و جديد به نمايش درنيايد؟");
define("_MI_formulize_SINGLESDESC","دگمه 'انصراف' براي ترك فرم بدون ثبت اطلاعات بكار مي رود.  در صورتي كه در فرم اطلاعاتي وارد شده باشد و قبل از ذخره دگمه انصراف را بزنيد اطلاعات روي فرم پاك خواهد شد و از فرم خارج خواهيد شد . لذا ترجيحا با انتخاب گزينه 'بله'دگمه  انصراف را از فرم حذف نماييد");

define("_MI_formulize_LOE_limit","حداكثر وروديهايي كه در ليست وروديها نمايش داده شود را مشخص نماييد ، بدون توجه به تاييد كابر براي ديدن تمام وروديها");
define("_MI_formulize_LOE_limit_DESC","در صورتي كه پايگاه داده خيلي بزرگ باشد ،نمايش ليست وروديها زمان زيادي را نياز دارد حتي ممكن است چند دقيقه طول بكشد .حداكثر تعداد وروديها كه سيستم بايد به يكباره نمايش دهد را اينجا مشخص كنيد . در صورتي كه وروديها بيشتر از اين حد تعيين شده باشد از كاربر در مورد نمايش كل وروديها سوال خواهد شد.");
       
define("_MI_formulize_USETOKEN","براي اعتبار فرمهاي ارسالي آيا از سيستم توكن امنيتي استفاده مي كنيد ؟");
define("_MI_formulize_USETOKENDESC","اطلاعات وارد شده در سيستم ذخيره نخواهد شد مگر اينكه ماژوي فورميولايز توكن معتبر براي آن دريافت كند . اين يك دفاع در مقابل حملات اسكريپتي مي باشد تا مطمئن شويد تكميل فرم توسط شخص صورت گرفته است . در بعضي شرايط بسته به فايروال  يا عوامل ديگر ، توكن معتبر شناخته نمي شود . در صورت تكرار پياپي اين مورد ، مي توانيد سيستم توكن را اينجا خاموش نماييد.");
       

// The name of this module
define("_MI_formulizeMENU_NAME","منوي من");

// A brief description of this module
define("_MI_formulizeMENU_DESC","يك منوي قابل تنظيم را در يك بلاك نمايش مي دهد");

// Names of blocks for this module (Not all module has blocks)
define("_MI_formulizeMENU_BNAME","منوي فرم");

// Version
define("_MI_VERSION","2.0b");

?>