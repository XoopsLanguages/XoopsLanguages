<?php

/**
* $Id: modinfo.php,v 1.26 2005/01/09 23:02:34 malanciault Exp $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME","پرسش های همگانی");

// A brief description of this module
define("_MI_SF_MD_DESC","سیستم پیشرفته پرسش های همگانی (پرسش و پاسخ) برای برنامه مدیریت محتوای زوپس");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1","ارسال پرسش و پاسخ");
define("_MI_SF_SUB_SMNAME2","درخواست برای پاسخ به پرسش");
define("_MI_SF_SUB_SMNAME3","پرسش های باز");
define("_MI_SF_SUB_SMNAME4","مدیریت پرسش و پاسخ");

// Config options
define("_MI_SF_ALLOWSUBMIT","کاربران بتوانند پرسش و پاسخ برای سایت ارسال کنند:");
define("_MI_SF_ALLOWSUBMITDSC","Allow users to submit Q&A on your website?");

define("_MI_SF_ALLOWREQUEST","کاربران بتوانند پرسشی را برای سایت ارسال کنند:");
define("_MI_SF_ALLOWREQUESTDSC","Allow users to request Q&A on your website?");

define("_MI_SF_NEWANSWER","اجازه برای فرستادن پاسخ جدید داده شود؟");
define("_MI_SF_NEWANSWERDSC","Select 'Yes' to allow users to submit new answers for already published Q&A.");

define("_MI_SF_ANONPOST","اجازه به کاربران مهمان برای درخواست پاسخ به یک پرسش داده شود؟");
define("_MI_SF_ANONPOSTDSC","Allow anonymous users to submit or request Q&A.");

define('_MI_SF_DATEFORMAT','فرمت تاریخ:');
define('_MI_SF_DATEFORMATDSC','در قسمت آخر فایل language/persian/global.php فرمت تاریخ مناسب را برای نشان دادن بنویسید. مثال: "d-M-Y H:i" ');

define('_MI_SF_DISPLAY_COLLAPS','نشان دادن دکمه جمع کننده ');
define('_MI_SF_DISPLAY_COLLAPSDSC',"Select 'Yes' to display the collapsable bar in the index and category page.");

define('_MI_SF_DISPLAYTYPE',"نوع نمایش پرسش و پاسخ:");
define('_MI_SF_DISPLAYTYPEDSC',"اگر 'نمایش خلاصه'انتخاب شود فقط پرسش ، تاریخ ارسال و تعداد بازدید برای هر پرسش در  شاخه نمایش داده خواهد شد. اگر 'نمایش کامل'انتخاب شود تمام اطلاعات پرسش و پاسخ در شاخه نمایش داده خواهد شد.");
define('_MI_SF_DISPLAYTYPE_SUMMARY',"نمایش خلاصه");
define('_MI_SF_DISPLAYTYPE_FULL',"نمایش کامل");

define('_MI_SF_DISPLAY_LAST_FAQ','نمایش ستون آخرین پرسش و پاسخ ها؟');
define('_MI_SF_DISPLAY_LAST_FAQDSC',"Select 'Yes' to display the last Q&A in each category in the index and category page.");

define('_MI_SF_DISPLAY_LAST_FAQS','نمایش آخرین پرسش و پاسخ ها؟');
define('_MI_SF_DISPLAY_LAST_FAQSDSC',"Select 'Yes' to display a list of last Q&amp;A's on the index page.");

define('_MI_SF_LAST_FAQ_SIZE','تعداد پرسش و پاسخ ها در ستون آخرین پرسش و پاسخ ها :');
define('_MI_SF_LAST_FAQ_SIZEDSC',"Set the maximum size of the question in the Last Q&A column.");

define('_MI_SF_QUESTION_SIZE',"سایز پرسش :");
define('_MI_SF_QUESTION_SIZEDSC',"Set the maximum size of the question as a title in the single Q&A display page.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX','نمایش زیر شاخه ها در صفحه اصلی');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC',"Select 'Yes' to display subcategories on the index page.");

define('_MI_SF_DISPLAY_TOPCAT_DSC','نمایش شرح شاخه های اصلی؟');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC',"Select 'Yes' to display the description of top categories in the index and category page.");

define('_MI_SF_DISPLAY_SBCAT_DSC','نمایش شرح زیر شاخه ها؟');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC',"Select 'Yes' to display the description of sub-categories in the index and category page.");

define('_MI_SF_ORDERBYDATE','چیدن پرسش و پاسخ ها بر حسب زمان :');
define('_MI_SF_ORDERBYDATEDSC','If you set this option to "Yes", the Q&As inside a category will be ordered by decending date, otherwise, they will be ordered by their weight.');

define('_MI_SF_DISPLAY_DATE_COL',"نشان دادن ستون 'قرار گرفته در تاریخ'در صفحه اصلی و شاخه ها؟");
define('_MI_SF_DISPLAY_DATE_COLDSC',"When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the Q&A table on the index and category page.");

define('_MI_SF_DISPLAY_HITS_COL',"نشان دادن ستون 'تعداد بازدید'در صفحه اصلی و شاخه ها؟");
define('_MI_SF_DISPLAY_HITS_COLDSC',"When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the Q&A table on the index and category page.");

define('_MI_SF_USEIMAGENAVPAGE','استفاده از تصویر برای مرور صفحات؟');
define('_MI_SF_USEIMAGENAVPAGEDSC','If you set this option to "Yes", the Page Navigation will be displayed with image, otherwise, the original Page Naviagation will be used.');

define('_MI_SF_ALLOWCOMMENTS','کنترل نظر ها با توجه به دسترسی در هر پرسش:');
define('_MI_SF_ALLOWCOMMENTSDSC','If you set this option to "Yes", you\'ll see comments only on those Q&A that have their comment checkbox marked. <br /><br />Select "No" to have comments managed at the global level (look below under the tag "Comment rules".');

define('_MI_SF_ALLOWADMINHITS','تعداد بازدید مدیر از پرسش ها لحاظ شود:');
define('_MI_SF_ALLOWADMINHITSDSC','Allow admin hits for counter stats?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ','تایید خودکار پرسش و پاسخ ها:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC','Auto approves submitted Q&A without admin intervention.');

define('_MI_SF_AUTOAPPROVE_REQUEST','تایید خودکار درخواست برای پاسخ به یک پرسش:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC','Auto approves requested Q&A without admin intervention.');

define('_MI_SF_AUTOAPPROVE_ANS','تایید خودکار پاسخ ها:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC','Auto approves submitted answers for open questions.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW','تایید خودکار پاسخهای جدید');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC','Auto approves new submitted answers for published Q&A.');

define('_MI_SF_LASTFAQSPERCAT','حداکثر تعداد پرسش و پاسخ در شاخه:');
define('_MI_SF_LASTFAQSPERCATDSC','Maximum number of Q&A to be displayed in the Info column of a category.');

define('_MI_SF_CATPERPAGE','حداکثر تعداد شاخه های نمایش داده شده (در قسمت کاربر):');
define('_MI_SF_CATPERPAGEDSC','Maximum number of top categories per page to be displayed at once in the user side.');

define('_MI_SF_PERPAGE','حداکثر تعداد شاخه های نمایش داده شده (در قسمت مدیر):');
define('_MI_SF_PERPAGEDSC','Maximum number of Q&A per page to be displayed at once in Q&A Admin.');

define('_MI_SF_PERPAGEINDEX','حداکثر تعداد پرسش های نمایش داده شده (در قسمت کاربر):');
define('_MI_SF_PERPAGEINDEXDSC','Maximum number of Q&A  to be displayed per page in the user side.');

define('_MI_SF_INDEXWELCOMEMSG','پیغام صفحه اول سایت برای خوشآمد گویی:');
define('_MI_SF_INDEXWELCOMEMSGDSC','Welcome message to be displayed in the index page of the module.');
define('_MI_SF_INDEXWELCOMEMSGDEF',"در این قسمت از این سایت شما پاسخ به پرسش هایی را که سوال افراد زیادی بوده است می بینید.پرسش ها در شاخه های مختلفی قرار گرفته اند. لطفا اگر سوالی دارید که در این قسمت وجود ندارد بی درنگ از قسمت درخواست برای پاسخ به یک پرسش برای ما بفرستید"); 

define('_MI_SF_REQUESTINTROMSG','پیغام در صفحه درخواست برای پاسخ به یک پرسش:');
define('_MI_SF_REQUESTINTROMSGDSC','Introduction message to be displayed in the Request a Q&A page of the module.');
define('_MI_SF_REQUESTINTROMSGDEF',"شما پاسخی رای پرسشی که به دنبال آن هستید پیدا نکردید؟ مشکلی نیست ، به سادگی این فرم را پر کرده و پرسش خود را برای ما بفرستید مدیران سایت پرسش ها را ببرسی کرده و پرسش هایی را که سوال تعداد زیادی از افراد باشد را پاسخ خواهند داد یا در قسمت پرسش های باز قرار می دهعند تا یک نفر که پاسخ را می داند به آن جواب دهد"); 

define('_MI_SF_OPENINTROMSG','پیغام در صفحه پرسش های باز:');
define('_MI_SF_OPENINTROMSGDSC','Introduction message to be displayed in the Open Questions section of the module.');
define('_MI_SF_OPENINTROMSGDEF',"در اینجا لیست پرسش های باز قرار دارند ، این ها پرسش هایی هستند که کاربران سایت برای سایت ارسال کرده اند و هنوز کسی پاسخ درستی برای آن ها ارسال نکرده است. شما می توانید روی پرسشی که جواب آن را می دانید کلیک کرده و با فرستادن پاسخ آن ما را یاری کنید."); 

define('_MI_SF_USEREALNAME','استفاده از نام واقعی کاربران');
define('_MI_SF_USEREALNAMEDSC','When displaying a username, use the real name of that user if he has a set his real name.');

define('_MI_SF_HELP_PATH_SELECT',"محل قرار گیری فایل های کمک پرسش های همگانی (smartfaq)");
define('_MI_SF_HELP_PATH_SELECT_DSC',"Select from where you would like to access SmartFAQ's help files. If you downloaded the 'SmartFAQ's Help Package' and uploaded it in 'modules/smartfaq/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartFAQ's help files'");

define('_MI_SF_HELP_PATH_CUSTOM',"محل دستی قرار گیری فایل های کمک پرسش های همگانی (smartfaq)");
define('_MI_SF_HELP_PATH_CUSTOM_DSC',"If you selected 'Custom path' in the previous option 'Path of SmartFAQ's help files', please specify the URL of SmartFAQ's help files, in that format : http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE',"درون ماژول");
define('_MI_SF_HELP_CUSTOM',"محل دستی");

//define('_MI_SF_MODERATORSEDIT','اجازه به ناظران برای ویرایش (ارتقای رتبه ناظران)');
//define('_MI_SF_MODERATORSEDITDSC','This option will allow moderators to edit questions and Q&A within categories for which they are moderators. Otherwise, moderators can only approve or reject questions and Q&A.');

// Names of admin menu items
define("_MI_SF_ADMENU1","صفحه اصلی مدیریت");
define("_MI_SF_ADMENU2","شاخه ها");
define("_MI_SF_ADMENU3","پرسش و پاسخ ها");
define("_MI_SF_ADMENU4","پرسش ها");
define("_MI_SF_ADMENU5","دسترسی ها");
define("_MI_SF_ADMENU6","بلاک ها و گروه ها");
define("_MI_SF_ADMENU7","برو به ماژول");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW","پرسش و پاسخ های اخیر");
define("_MI_SF_ARTSRANDOM_DIDUNO","آیا می دانید که؟");
define("_MI_SF_ARTSRANDOM_FAQ","پرسش های تصادفی");
define("_MI_SF_ARTSRANDOM_HOW","چطور میتونم...");
define("_MI_SF_ARTSCONTEXT","پرسش و پاسخ های مربوطه");
define("_MI_SF_RECENTFAQS","پرسش و پاسخ های اخیر (با جزییات)");
define("_MI_SF_RECENT_QUESTIONS","پرسش های باز اخیر");
define("_MI_SF_MOST_VIEWED","پرسش و پاسخ های پر بیننده");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY','پرسش و پاسخ  - کلی');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به همه پرسش و پاسخ ها');

define('_MI_SF_CATEGORY_FAQ_NOTIFY','پرسش و پاسخ - شاخه');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به این شاخه');

define('_MI_SF_FAQ_NOTIFY','پرسش و پاسخ - پرسش و پاسخ');
define('_MI_SF_FAQ_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به این پرسش و پاسخ');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY','پرسش های باز - کلی');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به همه پرسش های باز');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY','پرسش های باز - شاخه');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به این شاخه');

define('_MI_SF_QUESTION_NOTIFY','پرسش های باز - پرسش باز');
define('_MI_SF_QUESTION_NOTIFY_DSC','تنظیمات آگهی رسانی مربوط به این پرسش باز');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY','شاخه جدید');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP','وقتی شاخه جدیدی ایجاد شد مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC','آگهی رسانی در مورد ایجاد یک شاخه جدید');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : شاخه جدید');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY','پرسش و پاسخ جدید ارسال شده');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP','هر پرسش و پاسخی که ارسال شد و منتظر تایید بود مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC','آگهی رسانی در مورد ارسال پرسش و پاسخ های منتظر برای تایید');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ ارسال شده جدید');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY','پرسش و پاسخ جدید قرار گرفته');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP','هر پرسش و پاسخی در سایت قرار گرفت مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد قرار گرفتن پرسش و پاسخ های جدید در سایت');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ جدید قرار گرفته در سایت');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY','پاسخ جدید ارسال شده');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','هر پاسخی که برای هر کدام از پرسش ها ارسال شد مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','آگهی رسانی در مورد پاسخ ارسال شده به پرسش ها');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پاسخ ارسال شده جدید');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY','پاسخ جدید قرار گرفته');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','هر پاسخی که برای هر کدام از پرسش ها در سایت قرار گرفت مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد پاسخ های قرار گرفته برای هر کدام از پرسش ها');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پاسخ قرار گرفته جدید');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY','پرسش و پاسخ جدید ارسال شده');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP','هر پرسش و پاسخی که در این شاخه ارسال شد مرا با خبر کم');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC','آگهی رسانی در مورد پرسش و پاسخ ارسال شده به شاخه');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ ارسال شده به شاخه'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY','پرسش و پاسخ قرار گرفته ');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP','هر پرسش و پاسخی که در این شاخه قرار گرفت مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد پرسش و پاسخ قرار گرفته در شاخه');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پرسش و پاسخ قرار گرفته در شاخه'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY','ارسال پاسخ دیگر به جای پاسخ فعلی');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','هر وقت پاسخی به جای پاسخ های موجود در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','آگهی رسانی در مورد پاسخ های ارسال شده به جای پاسخ های فعلی در این شاخه');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : ارسال پاسخ دیگر به جای پاسخ فعلی');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY','پاسخ جدید قرار گرفته');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','هر وقت پاسخ جدیدی به جای پاسخ های موجود در این شاخه قرار گرفت مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد پاسخ های قرار گرفته به جای پاسخ های فعلی در این شاخه');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پاسخ جدید قرار گرفته');

define('_MI_SF_FAQ_REJECTED_NOTIFY','رد کردن پرسش و پاسخ');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP','اگر این پرسش و پاسخ رد شد مرا با خبر کن');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC','آگهی رسانی در مورد پرسش و پاسخ رد شده');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ رد شده'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY','تایید پرسش و پاسخ');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP','هر پرسش و پاسخی تایید شد مرا با خبر کن');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC','آگهی رسانی در مورد رسش و پاسخ تایید شده');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : تایید پرسش و پاسخ'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY','تایید پاسخ');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP','هر پاسخی تایید شد مرا با خبر کن');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC','آگهی رسانی در مورد پاسخ تایید شده');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : تایید پالسخ'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY','پاسخ رد شده');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP','اگر این پاسخ رد شد مرا با خبر کن');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC','آگهی رسانی در مورد رد  شدن  پاسخ');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : رد شدن پاسخ'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY','ارسال پرسش');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP','هر پرسش ارسال شد و منتظر برای تایید قرار گرفت مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC',' آکهی رسانی در مورد ارسال پرسش جدید');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : ارسال  پرسش');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY','پرسش قرار گرفته');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP','هر پرسشی که در پرسش های باز قرار گرفت مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد قرار گرفتن پرسش جدید در پرسش های باز');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش جدید قرار گرفته');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY','ارسال پاسخ');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','هر پاسخی که برای یک پرسش ارسال شد مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','آگهی رسانی در مورد ارسال پاسخ برای یک پرسش');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال پاسخ');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY','ارسال پرسش');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP','هر پرسشی که در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC','آگهی رسانی در مورد ارسال پرسش در یک شاخه');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال یک پرسش');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY','پرسش قرار گرفته');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP','هر پرسشی که در این شاخه قرار گرفت مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC','آگهی رسانی در مورد قرار گرفتن پرسش در این شاخه');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش جدید قرار گرفته');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY','ارسال پاسخ');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','هر پاسخی که برای یک پرسش  در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','آگهی رسانی در مورد ارسال پاسخ برای یک پرسش در این شاخه');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال پاسخ');

define('_MI_SF_QUESTION_REJECTED_NOTIFY','پرسش رد شده');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP','هر پرسشی رد شد مرا با خبر کن');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC','آگهی رسانی در مورد رد شدن پرسش');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پرسش رد شده');

define('_MI_SF_QUESTION_APPROVED_NOTIFY','پرسش تایید شده');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP','هر پرسشی تایید شد مرا با خبر کن.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC','آگهی رسانی در مورد تایید پرسش');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش تایید شده');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY','پاسخ تایید شده');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP','هر پاسخی تاید شد مرا با خبر کن');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC','آگهی رسانی در مورد تاید پاسخ');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار: پاسخ تایید شده');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY','پاسخ رد شده');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP','هر پاسخی رد شد مرا با خبر کن');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC','آگهی رسانی در مورد رد شدن  پاسخ');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پاسخ رد شده');

// About.php constants
define('_MI_SF_AUTHOR_INFO',"اطلاعات در مورد سازندگان ماژول");
define('_MI_SF_DEVELOPER_LEAD',"سازندگان اصلی");
define('_MI_SF_DEVELOPER_CONTRIBUTOR',"کمک کنندگان");
define('_MI_SF_AUTHOR_WEBSITE',"وب سایت سازنده");
define('_MI_SF_AUTHOR_EMAIL',"ایمیل سازنده");
define('_MI_SF_AUTHOR_CREDITS',"افراد سازنده");
define('_MI_SF_DEMO_SITE',"سایت دموی ماژول smartfaq");
define('_MI_SF_MODULE_INFO',"اطلاعات در مورد دولاپر های ماژول");
define('_MI_SF_MODULE_STATUS',"وضعیت");
define('_MI_SF_MODULE_RELEASE_DATE',"تاریخ انتشار");
define('_MI_SF_MODULE_DEMO',"سایت دمو");
define('_MI_SF_MODULE_SUPPORT',"سایت رسمی پشتیبانی از ماژول");
define('_MI_SF_MODULE_BUG',"گزارش باگ از این ماژول");
define('_MI_SF_MODULE_FEATURE',"پیشنهاد یک کار جدید برای این ماژول");
define('_MI_SF_MODULE_DISCLAIMER',"شرایط");
define('_MI_SF_AUTHOR_WORD',"حرف های سازنده");
define('_MI_SF_VERSION_HISTORY',"تاریخچه ورژن های ماژول");

// Beta
define('_MI_SF_WARNING_BETA',"This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SF_WARNING_RC',"This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SF_WARNING_FINAL',"This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");

?>
