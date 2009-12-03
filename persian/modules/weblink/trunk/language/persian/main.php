<?php
//=========================================================
// WebLinks Module
// language for admin
// 2004-10-20 K.OHWADA
//=========================================================	
// Translated to Persian By :   www.irxoops.org version 1.85
// --- define language begin ---
if( !defined('WEBLINKS_LANG_MB_LOADED') )
{

define('WEBLINKS_LANG_MB_LOADED', 1);

//---------------------------------------------------------
// same as mylinks
//---------------------------------------------------------

//======	 singlelink.php	======
define("_WLS_CATEGORY","شاخه");
define("_WLS_HITS","دفعات بازديد");
define("_WLS_RATING","درجه");
define("_WLS_VOTE","نظرخواهي");
define("_WLS_ONEVOTE","1 نظر");
define("_WLS_NUMVOTES","%s نظر");
define("_WLS_RATETHISSITE","به اين ساي درجه بدهيد");
define("_WLS_REPORTBROKEN","لينک از کار افتاده را گزارش کنيد");
define("_WLS_TELLAFRIEND","به دوستانتان بگوييد");
define("_WLS_EDITTHISLINK","اين لينک را ويرايش کنيد");
define("_WLS_MODIFY","تغيير");

//======	submit.php	======
define("_WLS_SUBMITLINKHEAD","لينک جديد ارسال کنيد");
define("_WLS_SUBMITONCE","لينک خود را تنها يک بار ارسال کنيد");
define("_WLS_DONTABUSE","نام کاربري و شماره IP شما ضبط مي شود پس لطفا از سيستم سوء استفاده نکنيد");
define("_WLS_TAKESHOT","ما از وب سايت شما يک تصوير ضبط مي کنيم و ممکن است چند روز طول بکشد تا لينک شما به سايت اضافه شود");
define("_WLS_ALLPENDING","ارسال لينک به صورت موقتي انجام شد و انتشار آن پس از بازبيني توسط کارکنان انجام خواهد شد<br />اين بدان معناست که انتشار لينک ممکن است مدتي طول بکشد");
define("_WLS_WHENAPPROVED","زماني که لينک شما قبول شود ، شما توسط پست الکترونيک مطلع خواهيد شد");
define("_WLS_RECEIVED","ما اطلاعات وب سايت شما را دريافت کرديم، متشکرم");

//======	modlink.php	======
define("_WLS_REQUESTMOD","درخواست تغيير لينک");
define("_WLS_THANKSFORINFO","از اطلاعات متشکريم ، ما بزودي درخواست شما را بررسي خواهيم کرد");


define("_WLS_THANKSFORHELP","از کمک شما بابت اطمينان از صحت اين دايرکتوري متشکريم");
define("_WLS_FORSECURITY","براي دلايل امنيتي نام کاربري و IP شما به صورت موقتي ظبط خواهد شد");

define("_WLS_SEARCHFOR","جستجو براي"); //-no use
define("_WLS_ANY","هر چيز");
define("_WLS_SEARCH","جستجو");

define("_WLS_MAIN","اصلي");
define("_WLS_SUBMITLINK","ارسال لينک");
define("_WLS_POPULAR","محبوب");
define("_WLS_TOPRATED","بالاترين ارزيابيها");

define("_WLS_NEWTHISWEEK","جديد اين هفته");
define("_WLS_UPTHISWEEK","به روز شده اين هفته");

define("_WLS_POPULARITYLTOM","محبوبيت (کمترين تا بيشترين برخوردها)");
define("_WLS_POPULARITYMTOL","محبوبيت (بيشترين تا کمترين برخوردها)");
define("_WLS_TITLEATOZ","عنوان (الف تا ي)");
define("_WLS_TITLEZTOA","عنوان (ي تا الف)");
define("_WLS_DATEOLD","تاريخ (لينکهاي قديمي اول ليست شده اند)");
define("_WLS_DATENEW","تاريخ (لينکهاي جديد اول ليست شده اند)");
define("_WLS_RATINGLTOH","درجه (از کمترين تا بيشترين امتياز)");
define("_WLS_RATINGHTOL","درجه (از بيشترين تا کمترين امتياز)");

//define("_WLS_NOSHOTS","هيچ تصويري موجود نيست");
//define("_WLS_DESCRIPTIONC","توضيحات :");
//define("_WLS_EMAILC","پست الکترونيک :");
//define("_WLS_CATEGORYC","شاخه :");
//define("_WLS_LASTUPDATEC","آخرين به روز رساني :");
//define("_WLS_HITSC","دفعات بازديد : ");
//define("_WLS_RATINGC","امتياز :");

define("_WLS_THEREARE","تعداد <b>%s</b> لينک در پايگاه داده موجود است");
define("_WLS_LATESTLIST","آخرين ليست شده ها");

//define("_WLS_LINKID","شناسه لينک :");
//define("_WLS_SITETITLE","عنوان وب سايت :");
//define("_WLS_SITEURL","آدرس وب سايت :");
//define("_WLS_OPTIONS","گزينه ها :");
define("_WLS_LINKID","شناسه لينک");
define("_WLS_SITETITLE","عنوان وب سايت");
define("_WLS_SITEURL","آدرس وب سايت");
define("_WLS_OPTIONS","گزينه ها");

define("_WLS_NOTIFYAPPROVE", "زماني که لينک من پذيرش شد به من اطلاع بده");
//define("_WLS_SHOTIMAGE","Screenshot Img: ");
define("_WLS_SENDREQUEST","درخواست ارسال");

define("_WLS_VOTEAPPRE","از راي شما ممنونيم");
define("_WLS_THANKURATE","از اينکه وقت گذاشتيد و به اين سايت امتياز %s داديد ممنونيم");
define("_WLS_VOTEFROMYOU","عمل کاربراني چون شما باعث خواهد شد بقيه بتوانند براي ديدن سايتها بهتر تصميم گيري کنند");
define("_WLS_VOTEONCE","لطفا براي يک لينک بيش از يک بار راي ندهيد");
define("_WLS_RATINGSCALE","مقياس از 1 تا 10 است و 1 به معناي ضعيف و 10 به معناي عالي است");
define("_WLS_BEOBJECTIVE","لطفا بدون غرض راي دهيد تا راي ها بتوانند براي همه مفيد باشند");
define("_WLS_DONOTVOTE","براي لينکهاي خودتان راي ندهيد");
define("_WLS_RATEIT","امتياز بدهيد !");

define("_WLS_INTRESTLINK","وب سايت جالب در آدرس : %s");  // %s is your site name
define("_WLS_INTLINKFOUND","اين آدرس وب سايت جالبي است که من پيدا کرده ام : %s");  // %s is your site name

define("_WLS_RANK","درجه");
define("_WLS_TOP10","10 برتر %s"); // %s is a link category title

define("_WLS_SEARCHRESULTS","نتايج جستجو براي <b>%s</b> :"); // %s is search keywords
define("_WLS_SORTBY","مرتب شده بر اساس :");
define("_WLS_TITLE","عنوان");
define("_WLS_DATE","تاريخ");
define("_WLS_POPULARITY","محبوبيت");
define("_WLS_CURSORTEDBY","سايتها هم اکنون بر اساس %s مرتب شده اند");
define("_WLS_PREVIOUS","قبلي");
define("_WLS_NEXT","بعدي");
define("_WLS_NOMATCH","هيچ نظيري براي جستار شما يافت نشد");

define("_WLS_SUBMIT","ارسال");
define("_WLS_CANCEL","انصراف");

define("_WLS_ALREADYREPORTED","شما قبلا براي اين شناسه گزارش از کار افتادگي ارسال کرده ايد");
define("_WLS_MUSTREGFIRST","متاسفانه شما اجازه چنين عملي را نداريد<br />لطفا اول عضو شويد و يا وارد سايت شويد");
define("_WLS_NORATING","هيچ درجه اي انتخاب نشده است");
define("_WLS_CANTVOTEOWN","شما نمي توانيد به لينکهايي که خودتان ارسال کرده ايد راي بدهيد<br />تمامي راي ها ضبط و بازبيني مي شوند");
define("_WLS_VOTEONCE2","تنها به لينکهاي انتخاب شده راي بدهيد<br />تمامي راي ها ضبط و بازبيني مي شوند");

//%%%%%%	Admin	  %%%%%

define("_WLS_WEBLINKSCONF","تنظيمات وب لينک");
define("_WLS_GENERALSET","تنظيمات عمومي وب لينک");
//define("_WLS_ADDMODDELETE","اضافه،تغيير و يا حذف شاخه/لينک");
define("_WLS_LINKSWAITING","لينکهاي جديد در انتظار تاييد");
define("_WLS_MODREQUESTS","لينکهاي تغيير يافته در انتظار تاييد");
define("_WLS_BROKENREPORTS","گزارشهاي لينکهاي از کار افتاده");

//define("_WLS_SUBMITTER","Submitter: ");
define("_WLS_SUBMITTER","ارسال کننده");

define("_WLS_VISIT","ديدن");

//define("_WLS_SHOTMUST","Screenshot image must be a valid image file under %s directory (ex. shot.gif). Leave it blank if no image file.");
define("_WLS_LINKIMAGEMUST","نام تصوير لينک را تحت شاخه %s وارد کنيد اگر تصويري موجود نيست آن را خالي بگذاريد");

define("_WLS_APPROVE","قبول");
define("_WLS_DELETE","حذف");
define("_WLS_NOSUBMITTED","هيچ لينک جديد ارسال شده اي نيست");
define("_WLS_ADDMAIN","اضافه کردن يک شاخه اصلي");
define("_WLS_TITLEC","عنوان : ");
define("_WLS_IMGURL","آدرس تصوير (طول تصوير اختياري به 50 تقليل خواهد يافت)");
define("_WLS_ADD","اضافه");
define("_WLS_ADDSUB","اضافه کردن يک شاخه فرعي");
define("_WLS_IN","در");
define("_WLS_ADDNEWLINK","اضافه کردن يک لينک جديد");
define("_WLS_MODCAT","تغيير شاخه");
define("_WLS_MODLINK","تغيير لينک");
define("_WLS_TOTALVOTES","راي ها لينک (کل راي ها %s)");
define("_WLS_USERTOTALVOTES","راي هاي کاربران (کل راي ها %s)");
define("_WLS_ANONTOTALVOTES","راي هاي مهمانان (کل راي ها %s)");
define("_WLS_USER","کاربر");
define("_WLS_IP","آدرس IP");
define("_WLS_USERAVG","درجه متوسط کاربر");
define("_WLS_TOTALRATE","کليه درجه ها");
define("_WLS_NOREGVOTES","هيچ کاربري راي نداده است");
define("_WLS_NOUNREGVOTES","هيچ مهماني راي نداده است");
define("_WLS_VOTEDELETED","اطلاعات راي حذف شد");
define("_WLS_NOBROKEN","هيچ لينک از کار افتاده اي گزارش نشده است");
define("_WLS_IGNOREDESC","رد کردن (رد کردن گزارش و حذف گزارش از کار افتادگي لينک)");
define("_WLS_DELETEDESC","حذف (حذف اطلاعات وب سايت و حذف گزارش از کار افتادگي لينک)");
define("_WLS_REPORTER","فرستنده گزارش");

//define("_WLS_IGNORE","رد کردن");
define("_WLS_IGNORE","رد کردن (حذف)");

define("_WLS_LINKDELETED","لينک حذف شد.");
define("_WLS_BROKENDELETED","گزارش لينک از کار افتاده حذف شد");
define("_WLS_USERMODREQ","درخواستهاي تغيير لينک کاربران");
define("_WLS_ORIGINAL","اصلي");
define("_WLS_PROPOSED","پيشنهاد شده");

//define("_WLS_OWNER","مالک: ");
define("_WLS_OWNER","مالک");

define("_WLS_NOMODREQ","هيچ درخواست تغيير لينکي داده نشده");
define("_WLS_DBUPDATED","پايگاه داده ها با موفقيت به روز شد");
define("_WLS_MODREQDELETED","درخواست تغيير پاک شد.");
define("_WLS_IMGURLMAIN","آدرس تصوير ( اختياري و تنها قابل استفاده براي شاخه هاي اصلي ، طول تصوير به 50 کاهش خواهد يافت ) : ");
define("_WLS_PARENT","شاخه والد :");
define("_WLS_SAVE","ضبط تغييرات");
define("_WLS_CATDELETED","شاخه حذف شد");
define("_WLS_WARNING","اخطار : آيا شما مطمئن هستيد که مي خواهيد اين شاخه و تمامي لينکها و نظرها آن را پاک کنيد ؟");
define("_WLS_YES","بله");
define("_WLS_NO","نه");
define("_WLS_NEWCATADDED","شاخه جديد با موفقيت اضافه شد !");
define("_WLS_ERROREXIST","خطا : لينک تهيه شده توسط شما درون پايگاه داد ها موجود است");
define("_WLS_ERRORTITLE","خطا : شما بايد عنوان را وارد کنيد");
define("_WLS_ERRORDESC","خطا : شما بايد توضيحات را وارد کنيد");
define("_WLS_NEWLINKADDED","لينک جديد به پايگاه داده اضافه شد");
define("_WLS_YOURLINK","لينک وب سايت شما در %s");
define("_WLS_YOUCANBROWSE","شما مي توانيد لينکهاي وب ما را در %s مشاهده کنيد");
define("_WLS_HELLO","سلام %s");
define("_WLS_WEAPPROVED","ما ارسال لينک شما را به پايگاه لينکهاي وب پذيرفتيم");
define("_WLS_THANKSSUBMIT","از ارسال شما متشکريم");
define("_WLS_ISAPPROVED","ما ارسال لينک شما را پذيرفتيم");


//---------------------------------------------------------
// weblinks
//---------------------------------------------------------

//======	index.php	======
// guidance bar
define("_WLS_SUBMIT_NEW_LINK","ارسال لينک جديد");
define("_WLS_SITE_POPULAR","سايت محبوب");
define("_WLS_SITE_HIGHRATE","سايت با ارزيابي بالا");
define("_WLS_SITE_NEW","آخرين سايت های اضافه شده");
define("_WLS_SITE_UPDATE","سايت به روز شده");

// corrected typo
define("_WLS_SITE_RECOMMEND","سايت توصيه شده");

// BUG 3032: "mutual site" is not suitable English
define("_WLS_SITE_MUTUAL","سايت متقابل");

define("_WLS_SITE_RANDOM","پرش تصادفي");
define("_WLS_NEW_SITELIST","آخرين سايت های اضافه شده");
define("_WLS_NEW_ATOMFEED","آخرين تغذيه کننده RSS/ATOM");
define("_WLS_SITE_RSS","RSS/ATOM سایت");
define("_WLS_ATOMFEED","تغزیه کننده ی RSS/ATOM");

define("_WLS_LASTUPDATE","آخرين به روز رساني");
define("_WLS_MORE","جزييات بيشتر");

//======	 singlelink.php	======
define("_WLS_DESCRIPTION","توضيحات");
define("_WLS_PROMOTER","ارتقاء");
define("_WLS_ZIP","کد پستي");
define("_WLS_ADDR","آدرس");
define("_WLS_TEL","شماره تلفن");
define("_WLS_FAX","شماره فکس");

//======	 submit.php	======
define("_WLS_BANNERURL","آدرس بنر");
define("_WLS_NAME","نام");
define("_WLS_EMAIL","پست الکترونيک");
define("_WLS_COMPANY","شرکت/سازمان");
define("_WLS_STATE","استان");
define("_WLS_CITY","شهر");
define("_WLS_ADDR2","آدرس 2");
define("_WLS_PUBLIC","انتشار");
define("_WLS_NOTPUBLIC","عدم انتشار");
define("_WLS_NOTSELECT","نا مشخص");
define("_WLS_SUBMIT_INDISPENSABLE","علامت ستاره '<b>*</b>' به معناي فيلد حياتي است");
define("_WLS_SUBMIT_USER_COMMENT","توضيح به مديران : شما بايد از يک نظر يا درخواست و يا ... استفاده کنيد<br />اين ستون بر روي وب نشان داده نخواهد شد<br />لطفا لينک سايت شما که به اين سايت اشاره مي کند را پر کنيد تا به عنوان لينک دو طرفه در نظر گرفته شود");
define("_WLS_USER_COMMENT","توضيح به مدير");
define("_WLS_NOT_DISPLAY","اين ستون بر روي وب نشان داده نخواهد شد");

//======	modlink.php	======
define("_WLS_MODIFYAPPROVED","تقاضاي تغيير لينک شما مورد پذيرش قرار گرفت");
define("_WLS_MODIFY_NOT_OWNER","لطفا فکر نکنيد که شما ارسال کننده و مالک اين لينک بوده ايد !");
define("_WLS_MODIFY_PENDING","تغيير لينک به صورت موقتي ذخيره شد و پس از بازبيني توسط کارکنان منتشر خواهد شد<br />اين بدان معناست که تغيير لينک ممکن است مدتي طول بکشد");
define("_WLS_LINKSUBMITTER","فرستنده لينک");

//======	user.php	======
define('_WLS_PLEASEPASSWORD','رمز عبور خود را وارد کنيد');
define('_WLS_REGSTERED','کاربر عضو');
define('_WLS_REGSTERED_DSC','هر کس مي تواند اطلاعات لينک را تغيير دهد<br>مدير سايت اطلاعات را قبل از ارسال بررسي خواهد کرد');
define('_WLS_EMAILNOTFOUND',"آدرس پست الکترونيک همخواني ندارد");


// error message
define("_WLS_ERROR_FILL", "خطا : %s را پر کنيد");
define("_WLS_ERROR_ILLEGAL","خطا : فرمت اشتباه %s");
define("_WLS_ERROR_CID",  "خطا : شاخه را مشخص کنيد");
define("_WLS_ERROR_URL_EXIST","خطا : لينک قبلا ثبت شده است");
define("_WLS_WARNING_URL_EXIST","هشدار : لينک مشابه قبلا ثبت شده است");
define("_WLS_ERRORNOLINK","خطا : اينچنين لينکي يافت نشد");


define("_WLS_CATLIST","ليست شاخه");
define("_WLS_LINKIMAGE","تصوير لينک :");
define("_WLS_USERID","شناسه کاربر :");
define("_WLS_CATEGORYID","شناسه شاخه :");
define("_WLS_CREATEC","تاريخ ثبت :");
define("_WLS_TIMEUPDATE","به روز رساني");
define("_WLS_NOTTIMEUPDATE","عدم به روز رساني");
define("_WLS_LINKFLAG","ساخت يک لينک زير اين ");
define("_WLS_NOTLINKFLAG","عدم ساخت يک لينک زير اين ");
define("_WLS_GOTOADMIN","به صفحه مديريت برو");

// category delete
define("_WLS_DELCAT","حذف شاخه");
define("_WLS_SUBCATEGORY","زير شاخه");
define("_WLS_SUBCATEGORY_NON","زير شاخه موجود نيست");
define("_WLS_LINK_BELONG","لينکهاي مرتبط");
define("_WLS_LINK_BELONG_NUMBER","تعداد لينکهاي مرتبط");
define("_WLS_LINK_BELONG_NON","لينک مرتبط موجود نيست");
define("_WLS_LINK_MAYBE_DELETE","لينکهاي در انتظار حذف");
define("_WLS_LINK_MAYBE_DELETE_DSC","نتيجه اين عمل در صورت وجود زيرشاخه ها متفاوت است ، ممکن است تعدادي لينک ديگر نيز حذف شوند");
define("_WLS_LINK_DELETE_NON","هيچ لينکي براي حذف نيست");
define("_WLS_CATEGORY_LINK_DELETE_EXCUTE","شاخه و لينکهاي مرتبط را حذف کن");
define("_WLS_CATEGORY_LINK_DELETED","شاخه و لينکهاي مرتبط حذف شدند");
define("_WLS_CATEGORY_DELETED","شاخه ها حذف شدند");
define("_WLS_LINK_DELETED","لينکها حذف شدند");

define("_WLS_ERROR_CATEGORY","خطا : شاخه انتخاب نشده است");
define("_WLS_ERROR_MAX_SUBCAT","خطا : تعداد شاخه هاي انتخاب شده بيش از تعدادي است که مي توانند به يک باره حذف شوند");
define("_WLS_ERROR_MAX_LINK_BELONG","خطا : تعداد لينکهاي انتخاب شده بيش از تعدادي است که مي توانند به يک باره حذف شوند");
define("_WLS_ERROR_MAX_LINK_DEL","خطا : تعداد لينکهاي انتخاب شده بيش از تعدادي است که مي توانند به يک باره حذف شوند");

// recommend site, mutual site
define("_WLS_MARK","انتخاب");
define("_WLS_ADMINCOMMENT","توضيح مدير");

// broken link check
define("_WLS_BROKEN_COUNTER","شمارنده لينکهاي از کار افتاده");

// RSS/ATOM URL
define("_WLS_RSS_URL","آدرس RSS/ATOM");
define("_WLS_RSS_URL_0","بلا استفاده");
define("_WLS_RSS_URL_1","نوع RSS");
define("_WLS_RSS_URL_2","نوع ATOM");
define("_WLS_RSS_URL_3","کشف خودکار");

define("_WLS_ATOMFEED_DISTRIBUTE","تعميم دادن تغذيه کننده هاي RSS/ATOM که در اينجا نمايش داده شدند");
define("_WLS_ATOMFEED_FIREFOX","اگر شما از <a href='http://www.mozilla.org/products/firefox/' target='_blank'>Firefox</a> استفاده کنيد مي توانيد تغذيه کننده هاي RSS/ATOM را مشاهده کنيد");

// 2005-10-20
define("_WLS_EMAIL_APPROVE","اگر تاييد شد اطلاع بده");
define("_WLS_TOPTEN_TITLE","%s Top %u");
// %s is a link category title
// %u is number of links
define("_WLS_TOPTEN_ERROR", "در اينجا بيش از حد لزوم  شاخه ي عالي موجود است.متوقف کردن نمايش به وسيله ي %u");
// %u is munber of categories

// 2006-04-02
define('_WEBLINKS_MID', 'تغيير دادن ID');
define('_WEBLINKS_USERID', 'ID کابر');
define('_WEBLINKS_CREATE', 'ساختن');

define('_HOME',  'خانه');
define('_SAVE',  'ذخيره');
define('_SAVED', 'ذخيره شد');
define('_CREATE', 'ساختن');
define('_CREATED','ساخته شد');
define('_FINISH',   'پايان دادن');
define('_FINISHED', 'پايان يافت');
define('_EXECUTE', 'اجرا کردن');
define('_EXECUTED','اجرا شد');
define('_PRINT','چاپ');
define('_SAMPLE','نمونه');
define('_NO_MATCH_RECORD','هيچ چيز مطابق بايگاني نيست');
define('_MANY_MATCH_RECORD','2 يا موارد بيشتري مطابق بايگاني است');
define('_NO_CATEGORY', 'بدون شاخه');
define('_NO_LINK', 'بدون لينک');
define('_NO_TITLE', 'بدون عنوان');
define('_NO_URL', 'بدون URL');
define('_NO_DESCRIPTION','بدون توصيف');
define('_GOTO_MAIN',   'رفتن به صفحه ي اصلي');
define('_GOTO_MODULE', 'رفتن به ماژول');

// config
define('_WEBLINKS_INIT_NOT', 'پيکر بندي جدول آغاز نشده است');
define('_WEBLINKS_INIT_EXEC', 'آغاز پيکر بندي جدول');
define('_WEBLINKS_VERSION_NOT','It is not version  %s');
define('_WEBLINKS_UPGRADE_EXEC','پيکر بندي جدول  به روز شد');

// html tag
define('_WEBLINKS_OPTIONS', 'تنظيمات');
define('_WEBLINKS_DOHTML', ' فعال سازي تگ هاي html');
define('_WEBLINKS_DOIMAGE', ' فعال سازي عکس');
define('_WEBLINKS_DOBREAK', ' فعال سازي خط شکسته');
define('_WEBLINKS_DOSMILEY', ' فعال سازي لبخند ها');
define('_WEBLINKS_DOXCODE', ' فعال سازي کد هاي زوپس');

define('_WEBLINKS_PASSWORD_INCORRECT','پسورد اشتباه است');
define('_WEBLINKS_ETC', 'etc');
define('_WEBLINKS_AUTH_UID',    'مطابقت شناسه ي کاربري');
define('_WEBLINKS_AUTH_PASSWD', 'مطابقت پسورد');
define('_WEBLINKS_BANNER_SIZE', 'اندازه ي بنر');

 // === 2006-10-01 ===
// conflict with rssc
if( !defined('_HOME') )
{
	define('_HOME',  'خانه');
	define('_SAVE',  'ذخيره');
	define('_SAVED', 'ذخيره شد');
	define('_CREATE', 'ساختن');
	define('_CREATED','ساخته شد');
	define('_EXECUTE', 'اجرا کردن');
	define('_EXECUTED','اجرا شد');
}

define('_WEBLINKS_MAP_USE', 'استفاده از ايکن نقشه ');

// rssc
define('_WEBLINKS_RSSC_LID',  'سرپوش RSSC');
define('_WEBLINKS_RSS_MODE',  'سبک RSS');
define('_WEBLINKS_RSSC_NOT_INSTALLED', 'ماژول RSSC( %s ) نصب نشده است ');
define('_WEBLINKS_RSSC_INSTALLED',     'ماژول مرکز rss ( %s ) نسخه %s نصب شده است');
define('_WEBLINKS_RSSC_REQUIRE', 'نسخه %s یا بالاتر ماژول مرکز  rss لازم است');
define('_WEBLINKS_GOTO_SINGLELINK', 'برو به اطلاعات لينک');

// warnig
define('_WEBLINKS_WARN_NOT_READ_URL', 'اخطار: ناتواني در خواندن url');
define('_WEBLINKS_WARN_BANNER_NOT_GET_SIZE', 'اخطار: ناتواني در رفتن به اندازه ي بنر ها');

// google map: hacked by wye <http://never-ever.info/>
define('_WEBLINKS_GM_LATITUDE',  'عرض جغرافياي');
define('_WEBLINKS_GM_LONGITUDE', 'طول جغرافياي');
define('_WEBLINKS_GM_ZOOM',      'مرجله ي زوم');
define('_WEBLINKS_GM_GET_LOCATION', 'اطلاعات مکان به وسيله ي نقشه ي گوگل به دست مي آيد');
define('_WEBLINKS_GM_GET_BUTTON', 'رفتن به طول جغرافياي/عضر جغرافياي/ زوم');
define('_WEBLINKS_GM_DEFAULT_LOCATION', 'محل پيش فرض');
define('_WEBLINKS_GM_CURRENT_LOCATION', 'محل فعلي');

// === 2006-11-04 ===
// google map inline mode
define('_WEBLINKS_GOOGLE_MAPS', 'نقشه های گوگل');
define('_WEBLINKS_JAVASCRIPT_INVALID', 'مرورگر شما توانایی استفاده از جاوا اسکریپ را ندارد');
define('_WEBLINKS_GM_NOT_COMPATIBLE',  'مرورگر شما تومانایی استافده از نقشه های گوگل را ندارد');
define('_WEBLINKS_GM_NEW_WINDOW', 'نمایش در صفحه ی جدید');
define('_WEBLINKS_GM_INLINE',   'نمایش در این خط');
define('_WEBLINKS_GM_DISP_OFF', 'از کار انداختن نمایش');

// google map: inverse Geocoder
define('_WEBLINKS_GM_GET_LATITUDE', 'به دست آوردن طول جغرافياي/عضر جغرافياي/ زوم');
define('_WEBLINKS_GM_GET_ADDR', 'به دست آوردن آدرس');

// === 2006-12-11 ===
// google map: Geocode
define('_WEBLINKS_GM_SEARCH_MAP_FROM_ADDRESS', 'جستجو ی نقشه بر اساس آدرس');
define('_WEBLINKS_GM_NO_MATCH_PLACE', 'هیچ مکانی با این آدرس مطابقت ندارد');
define('_WEBLINKS_GM_JP_SEARCH_MAP_FROM_ADDRESS', 'جستجوی نقشه بر اساس آدرس در ژاپن');
define('_WEBLINKS_GM_JP_TOKYO_AC_GEOCODE', 'دانشگاه توکیو ژاپن');
define('_WEBLINKS_GM_JP_MLIT_ISJ', 'Japan Ministry of Land Infrastructure and Transport');

// link item
define('_WEBLINKS_TIME_PUBLISH', 'زمان انتشار');
define('_WEBLINKS_TIME_EXPIRE',  'زمان انقضا');
define('_WEBLINKS_TEXTAREA',     'محل متن');

define('_WEBLINKS_WARN_TIME_PUBLISH', 'زمان انتشار هنوز نرسیده');
define('_WEBLINKS_WARN_TIME_EXPIRE',  'زمان انقضا سپری شده');
define('_WEBLINKS_WARN_BROKEN', 'شاید این لینک شکسته باشد');

// === 2007-02-20 ===
// forum
define('_WEBLINKS_LATEST_FORUM', 'Leatest Forum');
define('_WEBLINKS_FORUM',  'انجمن');
define('_WEBLINKS_THREAD', 'Thead');
define('_WEBLINKS_POST',   'پست');
define('_WEBLINKS_FORUM_ID',  'ID انجمن');
define('_WEBLINKS_FORUM_SEL', 'انتخاب انجمن');
define('_WEBLINKS_COMMENT_USE',  'استفاده از سیستم نظر های زوپس');

// aux
define('_WEBLINKS_CAT_AUX_TEXT_1', 'aux_text_1');
define('_WEBLINKS_CAT_AUX_TEXT_2', 'aux_text_2');
define('_WEBLINKS_CAT_AUX_INT_1',  'aux_int_1');
define('_WEBLINKS_CAT_AUX_INT_2',  'aux_int_2');

// captcha
define('_WEBLINKS_CAPTCHA', 'تصاویر امنیتی');
define('_WEBLINKS_CAPTCHA_DESC', 'ضد هرز نامه');
define('_WEBLINKS_ERROR_CAPTCHA','خطا:تصاویر امنیتی تنظیم نشده است');
define('_WEBLINKS_ERROR', 'خطا');

// hack for multi site
define('_WEBLINKS_CAT_TITLE_JP', 'Japanse Title');
define('_WEBLINKS_DISABLE_FEATURE', 'Disbale this feature');
define('_WEBLINKS_REDIRECT_JP_SITE', 'Jump to Japanese Site');

// === 2007-03-25 ===
define('_WEBLINKS_ALBUM_ID',  'آلبوم ID');
define('_WEBLINKS_ALBUM_SEL', 'انتخاب آلبوم');

// === 2007-04-08 ===
define('_WEBLINKS_GM_TYPE',  'نوع نقشه گوگل');
define('_WEBLINKS_GM_TYPE_MAP',       'نقشه');
define('_WEBLINKS_GM_TYPE_SATELLITE', 'ماهواره');
define('_WEBLINKS_GM_TYPE_HYBRID',    'Hybrid');

// === 2007-08-01 ===
define('_WEBLINKS_GM_CURRENT_ADDRESS', 'آدرس فعلی');
define('_WEBLINKS_GM_SEARCH_LIST', 'جستجو در لیست نتایج');

// === 2007-09-01 ===
// waiting list
define('_WEBLINKS_ADMIN_WAITING_LIST', "لیست ارسال های منتظر برای مدیر");
define('_WEBLINKS_USER_WAITING_LIST',  'لیست ارسال های منتظر برای تایید شما');
define('_WEBLINKS_USER_OWNER_LIST',    'لیست فرستاده شده های شما');

// submit form
define('_WEBLINKS_TIME_PUBLISH_SET', 'تنظیم زمان انتشار');
define('_WEBLINKS_TIME_PUBLISH_DESC','اگر این گزینه را تنظیم نکنید, زمان انتشار نا مشخص میماند');
define('_WEBLINKS_TIME_EXPIRE_SET',  'تنظیم زمان خاتمه');
define('_WEBLINKS_TIME_EXPIRE_DESC', 'اگر این گزینه را تنظیم نکنید, زمان خاتمه نا مشخص میماند');
define('_WEBLINKS_DEL_LINK_CONFIRM','تایید برای حذف');
define('_WEBLINKS_DEL_LINK_REASON', 'دلیل برای حذف');

// === 2007-11-01 ===
define('_WEBLINKS_ERROR_LENGTH', "خطا: %s بیشتر است از %s کارکتر");

// === 2008-02-17 ===
// linkitem
define('_WEBLINKS_PAGERANK', 'PageRank');
define('_WEBLINKS_PAGERANK_UPDATE', 'زمان به روز شدن Pagerank');
define('_WEBLINKS_GM_KML_DEBUG', 'خطا گیری نمایش KML');

// gmap
define('_WEBLINKS_SITE_GMAP', 'سایت GoogleMaps');
define('_WEBLINKS_KML_LIST',  'لیست KML');
define('_WEBLINKS_KML_LIST_DESC', 'دریافت KML و نمایش آن در نرم افزار GoogleEarth');
define('_WEBLINKS_KML_PERPAGE', 'تعداد divide');

// pagerank
define('_WEBLINKS_SITE_PAGERANK', 'بالاترین PageRank سایت');

}
// --- define language end ---

?>