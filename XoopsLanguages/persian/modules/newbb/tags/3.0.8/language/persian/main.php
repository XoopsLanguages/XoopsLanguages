<?php
// $Id: main.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','خطا');
define('_MD_NOPOSTS','پیامی موجود نیست');
define('_MD_GO','برو');
define('_MD_SELFORUM','یک انجمن را انتخاب کنید');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','فایل پیوست‌شده:');
define('_MD_ALLOWED_EXTENSIONS','پسوندهای مجاز');
define('_MD_MAX_FILESIZE','حداکثر اندازه فایل');
define('_MD_ATTACHMENT','پیوست');
define('_MD_FILESIZE','اندازه');
define('_MD_HITS','دفعات بازدید');
define('_MD_GROUPS','گروه‌ها:');
define('_MD_DEL_ONE','فقط این پیام را حذف کن');
define('_MD_DEL_RELATED','این پیام و تمامی پیام‌های مربوط به آن را حذف کن');
define('_MD_MARK_ALL_FORUMS','علامت‌گذاری تمام انجمن‌ها');
define('_MD_MARK_ALL_TOPICS','علامت‌گذاری تمام عنوان‌ها');
define('_MD_MARK_UNREAD','خوانده نشده');
define('_MD_MARK_READ','خوانده شده');
define('_MD_ALL_FORUM_MARKED','تمامی انجمن‌ها علامت‌گذاری شدند');
define('_MD_ALL_TOPIC_MARKED','تمامی عنوان‌ها علامت‌گذاری شدند');
define('_MD_BOARD_DISCLAIMER','شرایط انجمن‌ها');


//index.php
define('_MD_ADMINCP','محیط مدیریت');
define('_MD_FORUM','انجمن');
define('_MD_WELCOME','به انجمن‌های %s خوش آمدید');
define('_MD_TOPICS','عنوان');
define('_MD_POSTS','پیام');
define('_MD_LASTPOST','آخرین پیام');
define('_MD_MODERATOR','ناظر');
define('_MD_NEWPOSTS','پیام‌های جدید');
define('_MD_NONEWPOSTS','پیام جدید موجود نیست');
define('_MD_PRIVATEFORUM','انجمن غیر فعال');
define('_MD_BY','توسط'); // Posted by
define('_MD_TOSTART','برای دیدن پیام‌ها یک انجمن را که مایلید پیام‌هایش را ببیند انتخاب کنید.');
define('_MD_TOTALTOPICSC','مجموع تمامی عنوان‌ها: ');
define('_MD_TOTALPOSTSC','مجموع تمامی پیام‌های منتشر شده: ');
define('_MD_TOTALUSER','مجموع تعداد کاربران: ');
define('_MD_TIMENOW','تاریخ و ساعت در حال حاضر %s است.');
define('_MD_LASTVISIT','آخرین بازدید شما از انجمن در %s بوده‌است.');
define('_MD_ADVSEARCH','جستجوی پیشرفته');
define('_MD_POSTEDON','پیام منتشر شده در: ');
define('_MD_SUBJECT','عنوان');
define('_MD_INACTIVEFORUM_NEWPOSTS','انجمن غیرفعال با پیام جدید');
define('_MD_INACTIVEFORUM_NONEWPOSTS','انجمن غیرفعال بدون پیام جدید');
define('_MD_SUBFORUMS','زیرانجمن');
define('_MD_MAINFORUMOPT','گزینه‌های اصلی');
define("_MD_PENDING_POSTS_FOR_AUTH","پیام‌های منتظر برای تایید");



//page_header.php
define('_MD_MODERATEDBY','نظارت توسط');
define('_MD_SEARCH','جستجو');
//define('_MD_SEARCHRESULTS','نتایج جستجو');
define('_MD_FORUMINDEX','%s صفحه اصلی انجمن‌ها');
define('_MD_POSTNEW','ارسال پیام جدید');
define('_MD_REGTOPOST','برای ارسال پیام باید ابتدا ثبت‌نام کنید');

//search.php
define('_MD_SEARCHALLFORUMS','جستجوی تمام انجمن‌ها');
define('_MD_FORUMC','انجمن');
define('_MD_AUTHORC','نویسنده:');
define('_MD_SORTBY','مرتب‌سازی بر اساس ');
define('_MD_DATE','تاریخ');
define('_MD_TOPIC','عنوان');
define('_MD_POST2','نوشته');
define('_MD_USERNAME','نام کاربری');
define('_MD_BODY','متن');
define('_MD_SINCE','از');

//viewforum.php
define('_MD_REPLIES','پاسخ‌ها');
define('_MD_POSTER','فرستنده');
define('_MD_VIEWS','بازدید');
define('_MD_MORETHAN','پیام جدید[ پر طرفدار ]');
define('_MD_MORETHAN2','پیام جدیدی نیست [ پرطرفدار ]');
define('_MD_TOPICSHASATT','عنوان دارای پیوست است.');
define('_MD_TOPICHASPOLL','عنوان دارای نظر سنجی است.');
define('_MD_TOPICLOCKED','قفل است.');
define('_MD_LEGEND','فهرست');
define('_MD_NEXTPAGE','صفحه بعد');
define('_MD_SORTEDBY','مرتب شده بر اساس');
define('_MD_TOPICTITLE','نام عنوان');
define('_MD_NUMBERREPLIES','تعداد پاسخ‌ها');
define('_MD_TOPICPOSTER','ارسال‌کننده پیام');
define('_MD_TOPICTIME','زمان انتشار عنوان');
define('_MD_LASTPOSTTIME','زمان آخرین پیام');
define('_MD_ASCENDING','مرتب‌سازی صعودی');
define('_MD_DESCENDING','مرتب‌سازی نزولی');
define('_MD_FROMLASTHOURS','از %s ساعت گذشته');
define('_MD_FROMLASTDAYS','از %s روز گذشته');
define('_MD_THELASTYEAR','از سال گذشته');
define('_MD_BEGINNING','از ابتدا');
define('_MD_SEARCHTHISFORUM','این انجمن را جستجو کنید');
define('_MD_TOPIC_SUBJECTC','پیشوند عنوان:');


define('_MD_RATINGS','ارزش‌یابی');
define("_MD_CAN_ACCESS","شما <strong>می‌توانید</strong> به این انجمن دسترسی داشته باشید<br />");
define("_MD_CANNOT_ACCESS","شما <strong>نمی‌توانید</strong> به این انجمن دسترسی داشته باشید<br />");
define("_MD_CAN_POST","شما <b>می‌‌توانید</b> عنوان جدید باز کنید<br>");
define("_MD_CANNOT_POST","شما <b>نمی‌توانید</b> عنوان جدید باز کنید<br>");
define("_MD_CAN_VIEW","شما <b>می‌‌توانید</b> مطالب را بخوانید<br />");
define("_MD_CANNOT_VIEW","شما <b>نمی‌توانید</b> مطالب را بخوانید<br />");
define("_MD_CAN_REPLY","شما <b>می‌‌توانید</b> به عنوان‌ها پاسخ دهید<br>");
define("_MD_CANNOT_REPLY","شما <b>نمی‌توانید</b> به عنوان‌ها پاسخ دهید<br>");
define("_MD_CAN_EDIT","شما <b>می‌‌توانید</b> پیام‌های خودتان را ویرایش کنید<br>");
define("_MD_CANNOT_EDIT","شما <b>نمی‌توانید</b> پیام‌های خودتان را ویرایش کنید<br>");
define("_MD_CAN_DELETE","شما <b>می‌‌توانید</b> پیام‌های خودتان را حذف کنید<br>");
define("_MD_CANNOT_DELETE","شما <b>نمی‌توانید</b> پیام‌های خودتان را حذف کنید<br>");
define("_MD_CAN_ADDPOLL","شما <b>می‌‌توانید</b> نظر‌سنجی اضافه کنید<br>");
define("_MD_CANNOT_ADDPOLL","شما <b>نمی‌توانید</b> نظرسنجی اضافه کنید<br>");
define("_MD_CAN_VOTE","شما <b>می‌‌توانید</b> در نظرسنجی‌ها شرکت کنید<br>");
define("_MD_CANNOT_VOTE","شما <b>نمی‌توانید</b> در نظرسنجی‌ها شرکت کنید<br>");
define("_MD_CAN_ATTACH","شما <b>می‌‌توانید</b> فایل‌ها را به پیام خود پیوست کنید<br>");
define("_MD_CANNOT_ATTACH","شما <b>نمی‌توانید</b> فایل‌ها را به پیام خود پیوست کنید<br>");
define("_MD_CAN_NOAPPROVE","شما <b>می‌‌توانید</b> پیام بدون نیاز به تایید بزنید<br>");
define("_MD_CANNOT_NOAPPROVE","شما <b>نمی‌توانید</b> پیام بدون نیاز به تایید بزنید<br>");
define("_MD_IMTOPICS","عنوان‌های مهم");
define("_MD_NOTIMTOPICS","عنوان‌های انجمن");
define('_MD_FORUMOPTION','گزینه‌های انجمن');

define('_MD_VAUP','مشاهده تمامی عنوان‌های بدون پاسخ');
define('_MD_VANP','مشاهده تمامی پیام‌های جدید');


define('_MD_UNREPLIED','عنوان‌های بدون پاسخ');
define('_MD_UNREAD','عنوان‌های خوانده نشده');
define('_MD_ALL','تمامی عنوان‌ها');
define('_MD_ALLPOSTS','همه پیام‌ها');
define('_MD_VIEW','دیدن');

//viewtopic.php
define('_MD_AUTHOR','نویسنده');
define('_MD_LOCKTOPIC','این عنوان را قفل کن');
define('_MD_UNLOCKTOPIC','این عنوان را باز کن');
define('_MD_UNSTICKYTOPIC','این عنوان را غیر مهم (چسبان) قرار بده');
define('_MD_STICKYTOPIC','این عنوان را مهم قرار(چسبان) بده');
define('_MD_DIGESTTOPIC','این عنوان را به عنوان خلاصه قرار بده');
define('_MD_UNDIGESTTOPIC','این عنوان را از حالت خلاصه خارج کن');
define('_MD_MERGETOPIC','این عنوان را ادغام کن');
define('_MD_MOVETOPIC','این عنوان را منتقل کن');
define('_MD_DELETETOPIC','این عنوان را حذف کن');
define('_MD_TOP','بالا');
define('_MD_BOTTOM','پایین');
define('_MD_PREVTOPIC','پیام قبلی');
define('_MD_NEXTTOPIC','پیام بعدی');
define('_MD_GROUP','گروه:');
define('_MD_QUICKREPLY','پاسخ سریع');
define('_MD_POSTREPLY','پاسخ خود را برای این عنوان بنویسید');
define('_MD_PRINTTOPICS','چاپ کردن این عنوان');
define('_MD_PRINT','چاپ');
define('_MD_REPORT','گزارش');
define('_MD_PM','پیام شخصی');
define('_MD_EMAIL','اپست‌الکترونیکی');
define('_MD_WWW','وب‌سایت');
define('_MD_AIM','شناسه AIM');
define('_MD_YIM','شناسه یاهو');
define('_MD_MSNM','شناسه MSN');
define('_MD_ICQ','شماره ICQ');
define('_MD_PRINT_TOPIC_LINK','آدرس برای این بحث');
define('_MD_ADDTOLIST','اضافه کردن به لیست مرتبطین');
define('_MD_TOPICOPT','انتخاب‌های عنوان');
define('_MD_VIEWMODE','نوع دید');
define('_MD_NEWEST','اول تازه‌ها');
define('_MD_OLDEST','اول قدیمی‌ها');

define('_MD_FORUMSEARCH','جستجوی انجمن');

define('_MD_RATED','ارزشیابی شده:');
define('_MD_RATE','ارزشیابی موضوع');
define('_MD_RATEDESC','این موضوع را ارزشیابی کنید');
define('_MD_RATING','رای دهید');
define('_MD_RATE1','وحشتناک');
define('_MD_RATE2','بد');
define('_MD_RATE3','متوسط');
define('_MD_RATE4','خوب');
define('_MD_RATE5','عالی');

define('_MD_TOPICOPTION','انتخاب‌های این‌عنوان');
define('_MD_KARMA_REQUIREMENT','کارمای شخص شما  %s به حداقل کارمای مورد نیاز %s نمی‌رسد. <br /> لطفا بعدا سعی نمایید.');
define('_MD_REPLY_REQUIREMENT','برای دیدن این پیام بایستی ابتدا یک پاسخ بزنید');
define('_MD_TOPICOPTIONADMIN','انتخاب‌های مدیر عنوان');
define('_MD_POLLOPTIONADMIN','انتخاب‌های مدیر نظر‌سنجی');

define('_MD_EDITPOLL','این نظرسنجی را ویرایش کن');
define('_MD_DELETEPOLL','این نظرسنجی را حذف کن');
define('_MD_RESTARTPOLL','این نظرسنجی را از اول شروع کن');
define('_MD_ADDPOLL','اضافه‌کردن نظرسنجی');

define('_MD_QUICKREPLY_EMPTY','یک پاسخ سریع در این قسمت وارد کنید');

define('_MD_LEVEL','سطح :');
define('_MD_HP','پست/روز :');
define('_MD_MP','روز/پست :');
define('_MD_EXP','درصد این سطح :');

define('_MD_BROWSING','در حال دیدن این عنوان:');
define('_MD_POSTTONEWS','این پست را به عنوان یک خبر ارسال کن');

define('_MD_EXCEEDTHREADVIEW','تعداد پیام‌ها در این عنوان از حداکثر مجاز برای حالت شاخه‌ای بیشتر است<br />حالت به صفحه‌ای تغییر کرد');


//forumform.inc
define('_MD_PRIVATE','این انجمن انجمنی <b>خصوصی</b> است.<br />فقط کاربران با سطح دسترسی خاصی می‌توانند در این انجمن پیام بفرستند.');
define('_MD_QUOTE','نقل قول');
define('_MD_VIEW_REQUIRE','دیدن نیاز‌مندی‌ها');
define('_MD_REQUIRE_KARMA','کارما');
define('_MD_REQUIRE_REPLY','پاسخ');
define('_MD_REQUIRE_NULL','بدون نیازمندی');

define("_MD_SELECT_FORMTYPE","لطفا صفحه ویرایشگر مورد علاقه خود را انتخاب کنید");

define("_MD_FORM_COMPACT","فشرده");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw ویرایشگر");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK ویرایشگر");
define("_MD_FORM_KOIVI","Koivi ویرایشگر");
define("_MD_FORM_TINYMCE","TinyMCE ویرایشگر");

// ERROR messages
define('_MD_ERRORFORUM','خطا: انجمن انتخاب نشده‌است.');
define('_MD_ERRORPOST','خطا: پیام انتخاب نشده است.');
define('_MD_NORIGHTTOVIEW','شما اجازه دیدن این پیام را ندارید.');
define('_MD_NORIGHTTOPOST','شما اجازه ارسال پست در این انجمن را ندارید.');
define('_MD_NORIGHTTOEDIT','شما اجازه ویرایش در این انجمن را ندارید.');
define('_MD_NORIGHTTOREPLY','شما اجازه پاسخ‌دادن دراین انجمن را ندارید.');
define('_MD_NORIGHTTOACCESS','شما اجازه واردشدن به این انجمن را ندارید.');
define('_MD_ERRORTOPIC','خطا: پیامی انتخاب نشده است.');
define('_MD_ERRORCONNECT','خطا: تماس با پایگاه‌داده انجمن مقدور نیست.');
define('_MD_ERROREXIST','خطا: انجمنی که شما انتخاب کرده‌اید وجود ندارد.');
define('_MD_ERROROCCURED','یک خطا رخ داده است.');
define('_MD_COULDNOTQUERY','در پایگاه‌داده انجمن نمی‌توان استفسار کرد.');
define('_MD_FORUMNOEXIST','خطا: انجمن/پیامی که انتخاب کرده‌اید وجود ندارد، لطفاً دوباره سعی کنید.');
define('_MD_USERNOEXIST','کاربر وجود ندارد. لطفا بازگردید و جستجو رو دوباره انجام دهید.');
define('_MD_COULDNOTREMOVE','خطا - هیچ پیامی را نمی‌توان حذف کرد.');
define('_MD_COULDNOTREMOVETXT','خطا - نمی‌توان متن پیام‌ها را حذف کرد.');
define('_MD_TIMEISUP','زمان شما برای ویرایش این پست سپری شده است');
define('_MD_TIMEISUPDEL','زمان شما برای حذف این پست سپری شده است');

//reply.php
define('_MD_ON','در تاریخ'); //Posted on
define('_MD_USERWROTE','%s نوشته:'); // %s is username
define('_MD_RE','پاسخ به');

//post.php
define('_MD_EDITNOTALLOWED','شما اجازه ویرایش این پیام را ندارید.');
define('_MD_EDITEDBY','ویرایش شده توسط ');
define('_MD_ANONNOTALLOWED','کاربران مهمان اجازه ارسال پیام ندارند.<br>لطفا ثبت نام کنید');
define('_MD_THANKSSUBMIT','با تشکر از ارسال شما');
define('_MD_REPLYPOSTED','یک پاسخ به عنوان شما داده‌شده است.');
define('_MD_HELLO','سلام %s،');
define('_MD_URRECEIVING','شما این پست‌الکترونیکی را دریافت کرده‌اید چرا که به پیام شما در انجمن‌های سایت %s پاسخ داده شده است.'); // %s is your site name
define('_MD_CLICKBELOW','لینک زیر را کلیک کنید تا عنوان را مشاهده کنید.');
define('_MD_WAITFORAPPROVAL','لطفاً منتظر باشید تا این پیام توسط ناظر تایید شود.');
define('_MD_POSTING_LIMITED','ارسال پیام‌های پشت سر هم ممنوع است چرا کمی صبر نمی کنید .لطفا %d ثانیه پس از آخرین پست خود در این عنوان پست ارسال کنید');

//forumform.inc
define('_MD_NAMEMAIL','نام/پست‌الکترونیکی:');
define('_MD_LOGOUT','خروج');
define('_MD_REGISTER','ثبت‌نام');
define('_MD_SUBJECTC','عنوان:');
define('_MD_MESSAGEICON','شکلک پیام:');
define('_MD_MESSAGEC','پیام:');
define('_MD_ALLOWEDHTML','HTML مجاز است:');
define('_MD_OPTIONS','انتخاب‌ها');
define('_MD_POSTANONLY','ارسال پاسخ به عنوان کاربر مهمان');
define('_MD_DOSMILEY','فعال‌کردن Smileys');
define('_MD_DOXCODE','فعال‌کردن کد‌های Xoops');
define('_MD_DOBR','فعال کردن شکستن خود به خود خط‌ها (پیشنهاد می‌شود که در حالتی که HTML مجاز است این گزینه را غیر فعال کنید)');
define('_MD_DOHTML','استفاده از تگ‌های HTML');
define('_MD_NEWPOSTNOTIFY','من را از پیام‌های جدید این انجمن با خبر کن');
define('_MD_ATTACHSIG','پیوست امضا');
define('_MD_POST','بفرست');
define('_MD_SUBMIT','ثبت‌کن');
define('_MD_CANCELPOST','نفرست');
define('_MD_REMOVE','حذف');
define('_MD_UPLOAD','بارگذاری');

// forumuserpost.php
define('_MD_ADD','اضافه‌کردن');
define('_MD_REPLY','پاسخ');

// topicmanager.php
define('_MD_VIEWTHETOPIC','دیدن عنوان');
define('_MD_RETURNTOTHEFORUM','بازگشت به انجمن');
define('_MD_RETURNFORUMINDEX','بازگشت به صفحه اصلی انجمن‌ها');
define('_MD_ERROR_BACK','خطا - لطفا بازگردید و دوباره سعی کنید.');
define('_MD_GOTONEWFORUM','دیدن عنوان‌های به روز شده');

define('_MD_TOPICDELETE','عنوان حذف شده.');
define('_MD_TOPICMERGE','عنوان ادغام شده.');
define('_MD_TOPICMOVE','عنوان منتقل شده.');
define('_MD_TOPICLOCK','عنوان مورد نظر قفل شده.');
define('_MD_TOPICUNLOCK','قفل عنوان مورد نظر باز شد.');
define('_MD_TOPICSTICKY','عنوان مورد نظر مهم(چسبان) شده.');
define('_MD_TOPICUNSTICKY','عنوان مورد نظر از حالت مهم (چسبان) در‌آمده.');
define('_MD_TOPICDIGEST','عنوان خلاصه شده.');
define('_MD_TOPICUNDIGEST','عنوان از خلاصه درآمده.');

define('_MD_DELETE','حذف کن');
define('_MD_MOVE','منتقل‌کن');
define('_MD_MERGE','ادغام کن');
define('_MD_LOCK','قفل کن');
define('_MD_UNLOCK','قفل را باز کن');
define('_MD_STICKY','مهم (چسبان) کن');
define('_MD_UNSTICKY','غیر مهم (عادی) کن');
define('_MD_DIGEST','خلاصه کن');
define('_MD_UNDIGEST','غیر خلاصه کن');

define('_MD_DESC_DELETE','وقتی شما دکمه حذف کن را در پایین می‌زنید؛ این عنوان که انتخاب کرده‌اید به همراه تمام پیام‌های نوشته شده و متعلق به آن <strong>کاملاً</strong>حذف خواهند شد.');
define('_MD_DESC_MOVE','وقتی شما دکمه منتقل کن در پایین را می‌زنید،  این عنوان که انتخاب کرده‌اید به همراه تمام پیام‌های نوشته شده و متعلق به آن به انجمنی که انتخاب کرده‌اید منتقل می‌شود.');
define('_MD_DESC_MERGE','وقتی شما دکمه ادغام کن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید به همراه تمام پیام‌های نوشته شده و متعلق به آن با عنوانی که انتخاب خواهید کرد ادغام می شود.<br /><strong>شماره شناسایی عنوان مقصد باید کوچکتر از این عنوان باشد</strong>.');
define('_MD_DESC_LOCK','وقتی شما دکمه قفل‌کن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید قفل خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را از حالت قفل خارج کنید.');
define('_MD_DESC_UNLOCK','وقتی شما دکمه قفل را بازکن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید از حالت قفل خارج خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را قفل کنید.');
define('_MD_DESC_STICKY','وقتی شما دکمه مهم (چسبان) کن در پایین را می زنید، این عنوان که انتخاب کرده‌اید مهم (چسبان) خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را غیر مهم  (عادی) کنید.');
define('_MD_DESC_UNSTICKY','وقتی شما دکمه غیر مهم (عادی) کن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید غیر مهم (عادی)خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را مهم (چسبان) کنید.');
define('_MD_DESC_DIGEST','وقتی شما دکمه خلاصه کن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید خلاصه خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را غیر خلاصه کنید');
define('_MD_DESC_UNDIGEST','وقتی شما دکمه غیر خلاصه کن در پایین را می‌زنید، این عنوان که انتخاب کرده‌اید غیر خلاصه خواهد شد. شما بعدا اگر بخواهید دوباره می‌توانید آن را  خلاصه کنید');

define('_MD_MERGETOPICTO','ادغام عنوان با:');
define('_MD_MOVETOPICTO','انتقال عنوان به:');
define('_MD_NOFORUMINDB','هیچ انجمنی در پایگاه‌داده نیست!');

// delete.php
define('_MD_DELNOTALLOWED','متأسفم، شما اجازه حذف این پیام را ندارید.');
define('_MD_AREUSUREDEL','مطمئنید که می‌خواهید این پیام و تمامی پیام‌های وابسته به آن را حذف کنید؟');
define('_MD_POSTSDELETED','پیام انتخاب شده و تمامی پیام‌های وابسته‌ی آن حذف شدند!');
define('_MD_POSTDELETED','پیام انتخاب شده حذف شد.');

// definitions moved from global.
define('_MD_THREAD','عنوان');
define('_MD_FROM','از');
define('_MD_JOINED','عضو شده از');
define('_MD_ONLINE','آنلاین');
define('_MD_OFFLINE','آفلاین');
define('_MD_FLAT','یک صفحه‌ای');


// online.php
define('_MD_USERS_ONLINE','کاربران آنلاین:');
define('_MD_ANONYMOUS_USERS','کاربر مهمان');
define('_MD_REGISTERED_USERS','کاربر عضو:');
define('_MD_BROWSING_FORUM','کاربر در حال دیدن این انجمن');
define('_MD_TOTAL_ONLINE','در مجموع %d کاربر آنلاین است.');
define('_MD_ADMINISTRATOR','مدیر');

define('_MD_NO_SUCH_FILE','فایل موجود نیست!');
define('_MD_ERROR_UPATEATTACHMENT','خطا هنگام به روز کردن فایل پیوست');

// ratethread.php
define("_MD_CANTVOTEOWN","شما به عنوانی که خود آن را ایجاد کرده‌اید نمی‌توانید رای‌دهید<br />تمامی رای‌‌ها ثبت و بازبینی می‌شوند.");
define("_MD_VOTEONCE","لطفا بیش از یک‌بار برای یک ارزش‌یابی رای ندهید.");
define("_MD_VOTEAPPRE","با تشکر از ارزش‌گذاری شما برای این عنوان");
define("_MD_THANKYOU","با تشکر از وقتی که برای رأی دادن در سایت %s گذاشتید."); // %s is your site name
define("_MD_VOTES","رای");
define("_MD_NOVOTERATE","شما این پیام را ارزش‌گذاری نکرده‌اید");


// polls.php
define("_MD_POLL_DBUPDATED","دیتابیس با موفقیت به روز شد!");
define("_MD_POLL_POLLCONF","تنظیمات نظرسنجی");
define("_MD_POLL_POLLSLIST","لیست نظر‌ها");
define("_MD_POLL_AUTHOR","نویسنده این نظرسنجی");
define("_MD_POLL_DISPLAYBLOCK","در بلاک نشان داده شود؟");
define("_MD_POLL_POLLQUESTION","سوال نظر سنجی؟");
define("_MD_POLL_VOTERS","مجموع رای‌دهنگان");
define("_MD_POLL_VOTES","مجموع رای‌ها");
define("_MD_POLL_EXPIRATION","انقضا");
define("_MD_POLL_EXPIRED","منقضی شده");
define("_MD_POLL_VIEWLOG","دیدن اطلاعات نظرسنجی");
define("_MD_POLL_CREATNEWPOLL","ایحاد یک نظرسنجی جدید");
define("_MD_POLL_POLLDESC","توضیحات نظرسنجی");
define("_MD_POLL_DISPLAYORDER","مرتب‌سازی نمایش");
define("_MD_POLL_ALLOWMULTI","اجازه دادن چندین رای‌ همزمان؟");
define("_MD_POLL_NOTIFY","مطلع کردن نویسنده نظرسنجی پس از منقضی شدن؟");
define("_MD_POLL_POLLOPTIONS","انتخاب‌ها");
define("_MD_POLL_EDITPOLL","ویرایش نظرسنجی");
define("_MD_POLL_FORMAT","ساختار: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME","زمان و تاریخ در حال حاضر: %s");
define("_MD_POLL_EXPIREDAT","انقضا در تاریخ %s");
define("_MD_POLL_RESTART","این نظر سنجی را دوباره شروع کن");
define("_MD_POLL_ADDMORE","اضافه کردن انتخاب‌های بیشتر");
define("_MD_POLL_RUSUREDEL","آیا مطمئنید که می‌خواهید این نظر سنجی و تمام رأی‌های آن را پاک کنید؟");
define("_MD_POLL_RESTARTPOLL","دوباره شروع کردن نظرسنجی");
define("_MD_POLL_RESET","تمامی ثبت‌شده‌های این نظرسنجی را از اول تنظیم کن.");
define("_MD_POLL_ADDPOLL","اضافه‌کردن نظرسنجی");
define("_MD_POLLMODULE_ERROR","ماژول Xoopspoll برای استفاده آماده نیست ");

//report.php
define("_MD_REPORTED","با تشکر از گزارش شما از این پیام؛ ناظر به زودی به این گزارش رسیدگی خواهد کرد.");
define("_MD_REPORT_EORROR","خطا هنگام ارسال گزارش");
define("_MD_REPORT_TEXT","پیام گزارش:");

define("_MD_PDF","ساختن فایل PDF از این پیام");
define("_MD_PDF_PAGE","صفحه %s");

//print.php
define("_MD_COMEFROM","لینک این پست :");

//viewpost.php
define("_MD_VIEWALLPOSTS","همه پیام‌ها");
define("_MD_VIEWTOPIC","عنوان");
define("_MD_VIEWFORUM","انجمن");

define("_MD_COMPACT","فشرده");

define("_MD_MENU_SELECT","انتخاب");
define("_MD_MENU_HOVER","شناور");
define("_MD_MENU_CLICK","کلیک");

define("_MD_WELCOME_SUBJECT","%s به سایت وارد شده است");
define("_MD_WELCOME_MESSAGE","سلام، %s یک عضو جدید است.");

define("_MD_VIEWNEWPOSTS","دیدن پست‌های جدید");

define("_MD_INVALID_SUBMIT","ارسال نا معتبر است. زمان شما برای ارسال در انجمن‌ها به پایان رسیده است. لطفا دوباره روی دکمه ارسال بزنید یا اگر وارد نشده‌اید، یک پشتیبان از پیام خود تهیه کرده و سپس وارد شوید و پست خود را ارسال کنید");

define("_MD_ACCOUNT","شناسه");
define("_MD_NAME","نام");
define("_MD_PASSWORD","واژه رمز");
define("_MD_LOGIN","ورود");

define("_MD_TRANSFER","انتقال");
define("_MD_TRANSFER_DESC","انتقال پست به یک برنامه دیگر");
define("_MD_TRANSFER_DONE","عمل با موفقیت اناجم شد: %s");

define("_MD_APPROVE","تایید");
define("_MD_RESTORE","بازیابی");
define("_MD_SPLIT_ONE","این پست را جدا کن");
define("_MD_SPLIT_TREE","این پست و تمام وابسته‌های آن را جدا کن");
define("_MD_SPLIT_ALL","همه را جدا کن");

define("_MD_TYPE_ADMIN","مدیر");
define("_MD_TYPE_VIEW","نمایش");
define("_MD_TYPE_PENDING","نوشته‌های نیازمند تایید");
define("_MD_TYPE_DELETED","حذف شده‌ها");
define("_MD_TYPE_SUSPEND","معلق‌کردن کاربران");

define("_MD_DBUPDATED","پایگاه داده با موفقیت به روز شد");

define("_MD_SUSPEND_SUBJECT","کاربر به شناسه %s برای مدت %d روز معلق شده است");
define("_MD_SUSPEND_TEXT","کاربر  به شناسه %s برای مدت %d روز به دلیل نوشته شده در زیر معلق شده است:<br />[quote]%s[/quote]<br /><br />معلق بودن تا %s معتبر است");
define("_MD_SUSPEND_UID","شناسه کاربری");
define("_MD_SUSPEND_IP","IP(کامل یا مجزا)");
define("_MD_SUSPEND_DURATION","طول مدت معلق بودن (به روز)");
define("_MD_SUSPEND_DESC","دلیل معلق بودن");
define("_MD_SUSPEND_LIST","فهرست افراد معلق");
define("_MD_SUSPEND_START","شروع");
define("_MD_SUSPEND_EXPIRE","خاتمه");
define("_MD_SUSPEND_SCOPE","میدان عمل");
define("_MD_SUSPEND_MANAGEMENT","مدیریت ناظر");
define("_MD_SUSPEND_NOACCESS","ID یا Ip شما معلق شده است");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define("_MD_TODAY","امروز G:i:s");
define("_MD_YESTERDAY","دیروز G:i:s");
define("_MD_MONTHDAY","G:i:s l j F Y");
define("_MD_YEARMONTHDAY","G:i l j F Y");

// For user info
// If you have customized userbar, define here.
require_once(XOOPS_ROOT_PATH."/modules/newbb/class/user.php");
class User_language extends User
{
    function User_language(&$user)
    {
	    $this->User($user);
    }

    function &getUserbar()
    {
	    global $xoopsModuleConfig, $xoopsUser, $isadmin;
    	if (empty($xoopsModuleConfig['userbar_enabled'])) return null;
    	$user =& $this->user;
    	$userbar = array();
        $userbar[] = array("link"=>XOOPS_URL . "/userinfo.php?uid=" . $user->getVar("uid"), "name" =>_PROFILE);
		if (is_object($xoopsUser))
        $userbar[]= array("link"=>"javascript:void openWithSelfMain('" . XOOPS_URL . "/pmlite.php?send2=1&amp;to_userid=" . $user->getVar("uid") . "','pmlite', 450, 380);","name"=>_MD_PM);
        if($user->getVar('user_viewemail') || $isadmin)
        $userbar[]= array("link"=>"javascript:void window.open('mailto:" . $user->getVar('email') . "','new');","name"=>_MD_EMAIL);
        if($user->getVar('url'))
        $userbar[]= array("link"=>"javascript:void window.open('" . $user->getVar('url') . "','new');","name"=>_MD_WWW);
        if($user->getVar('user_icq'))
        $userbar[]= array("link"=>"javascript:void window.open('http://wwp.icq.com/scripts/search.dll?to=" . $user->getVar('user_icq')."','new');","name" => _MD_ICQ);
        if($user->getVar('user_aim'))
        $userbar[]= array("link"=>"javascript:void window.open('aim:goim?screenname=" . $user->getVar('user_aim') . "&amp;message=Hi+" . $user->getVar('user_aim') . "+Are+you+there?" . "','new');","name"=>_MD_AIM);
        if($user->getVar('user_yim'))
        $userbar[]= array("link"=>"javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $user->getVar('user_yim') . "&.src=pg" . "','new');","name"=> _MD_YIM);
        if($user->getVar('user_msnm'))
        $userbar[]= array("link"=>"javascript:void window.open('http://members.msn.com?mem=" . $user->getVar('user_msnm') . "','new');","name" => _MD_MSNM);
		return $userbar;
    }
}
?>
