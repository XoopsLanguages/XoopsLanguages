<?php
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","سائٹ کی ترجیحات");
define("_MD_AM_SITENAME","سائٹ کا نام");
define("_MD_AM_SLOGAN","سائٹ کا نعرہ");
define("_MD_AM_ADMINML","منتظم کا ایمیل اڈریس");
define("_MD_AM_LANGUAGE","ترجیحی زبان");
define("_MD_AM_STARTPAGE","پہلے صفحے کا موڈیول");
define("_MD_AM_NONE","نہیں");
define("_MD_AM_SERVERTZ","سرور کا معیاری وقت");
define("_MD_AM_DEFAULTTZ","ترجیحی معیاری وقت");
define("_MD_AM_DTHEME","ترجیحی تھیم");
define("_MD_AM_THEMESET","تھیم سیٹ");
define("_MD_AM_ANONNAME","بغیر نام کے ارکان کیلۓ نام");
define("_MD_AM_MINPASS","پاس ورڈ کی کم ازکم لمبائ لازمی ہے");
define("_MD_AM_NEWUNOTIFY","ایمیل کے زریعے مطلع کریں اگر کوئ نیا رکن رجسٹر ہوا ہو؛");
define("_MD_AM_SELFDELETE","ارکان کو اپنے اکاؤنٹس کو حذف کرنے کی اجازت دیں؛");
define("_MD_AM_LOADINGIMG","لوڈنگ تصویر دکھایۓ؛");
define("_MD_AM_USEGZIP","اختصار استعمال کریں gzip");
define("_MD_AM_UNAMELVL","نام کے سختی کے لیول کا انتخاب کریں");
define("_MD_AM_STRICT","سخت (صرف حروف اور نمبر)");
define("_MD_AM_MEDIUM","درمیانہ");
define("_MD_AM_LIGHT","ہلکا (سفارش کی جاتي ہے multi-byte chars)");
define("_MD_AM_USERCOOKIE","رکن کے کوکی کا نام");
define("_MD_AM_USERCOOKIEDSC","اگر کوکی کا نام سيٹ ہو تو  'مجھے یاد رکھیں' رکن کے لاگن کیلۓ فعال کیا جاۓ گا۔ اگر رکن انتخاب کرے  'مخھے یاد رکھیں', تو وہ خودکار طریقے سے لاگن ہوگا. کوکی کی مدت ایک سال ہے۔.");
define("_MD_AM_USEMYSESS","بناوٹی نشستیں استعمال کریں");
define("_MD_AM_USEMYSESSDSC","نشستوں کی قدرتي بناوٹ کیلۓ ہاں کا انتخاب کریں۔");
define("_MD_AM_SESSNAME","نشست کا نام");
define("_MD_AM_SESSNAMEDSC","نشست کا نام (صرف بناوٹی نشستوں کیلۓ کارآمد ہے 'اگر بناوٹی نشستوں کا استعمال ' فعال ہو)");
define("_MD_AM_SESSEXPIRE","نشست کی مدت");
define("_MD_AM_SESSEXPIREDSC","نشست کی زیادہ سے زیادہ مدت اگر کچھ دیر کیلۓ مجھول ہو (صرف کارآمد ہے 'اگر بناوٹی نشستیں استعمال میں ہوں'  PHP4.2.0 یا پرانے نسخوں کیلۓ ہے)");
define("_MD_AM_BANNERS","بینر اشتہارات فعال کریں");
define("_MD_AM_MYIP","Ip آپکا آئ پی آدریس");
define("_MD_AM_MYIPDSC","یہ ip امپریشن بینر میں شمار کیا خاۓ گا");
define("_MD_AM_ALWDHTML","HTML تمنوں کی سارے مراسلوں میں اجازت ہے");
define("_MD_AM_INVLDMINPASS","کم سے کم پاس ورڈ کی لمبائ کیلۓ ناکارہ");
define("_MD_AM_INVLDUCOOK","غیردرست  وصف کوکی کیلۓ");
define("_MD_AM_INVLDSCOOK","غیر درست وصف نشست کی کوکی کے نام کیلۓ");
define("_MD_AM_INVLDSEXP","غیر درست وصف نشست کی مدت کیلۓ");
define("_MD_AM_ADMNOTSET","منتظم کا ایمیل سیٹ نہیں ہے");
define("_MD_AM_YES","ہاں");
define("_MD_AM_NO","نہيں");
define("_MD_AM_DONTCHNG","تبدیل نہ کریں");
define("_MD_AM_REMEMBER","یاد رکھیں chmod 666 اس فایل کو صحیح طریقے سے سسٹم کے لکھنے کے لیۓ اجازت نامے");
define("_MD_AM_IFUCANT","اگر آپ اجازت نامے تبدیل نہیں کر سکے تو آپکو پوری فائل کی تنسیخ کرنی پڑے گی");


define("_MD_AM_COMMODE","تبصرے کی ترجیحی طرز");
define("_MD_AM_COMORDER","تبصرے کی ترجیحی ترتیب");
define("_MD_AM_ALLOWHTML","HTML تنموں کی اجازت ہے؛");
define("_MD_AM_DEBUGMODE","تغیراتی طرز");
define("_MD_AM_DEBUGMODEDSC","متعدد تغیراتی آپشنز. چلتے ہوۓ ویبسائٹ میں یہ آپشن بند ہونی چاہۓ");
define("_MD_AM_AVATARALLOW","اواتار اپلوڈ کی اجازت؛");
define("_MD_AM_AVATARMP","کم سے کم مراسلے کی ضرورت");
define("_MD_AM_AVATARMPDSC","اواتار اپلوڈ کرنے کیلۓ کم سےکم مراسلوں کی ضرورت؛");
define("_MD_AM_AVATARW","اواتار کی زیادہ سے زیادہ چوڑائ (پکسل)");
define("_MD_AM_AVATARH","اواتار تصویر کی زیادہ سے زیادہ لمبائ (پکسل میں)");
define("_MD_AM_AVATARMAX","اواتار تصویر کی حجم (byte)");
define("_MD_AM_AVATARCONF","مرضی کے اواتار کی سیٹنگ");
define("_MD_AM_CHNGUTHEME","تمام ارکان کی تھیم تبدیل کریں' تھیم");
define("_MD_AM_NOTIFYTO","گروپ کا انتخاب کریں جنہیں نۓ رکن کی اطلاعاتی ایمیل بھیجنا ہو");
define("_MD_AM_ALLOWTHEME","ارکان کو تھیم کی انتخاب کی اجازت؛");
define("_MD_AM_ALLOWIMAGE","ارکان کو مراسلوں میں تصویری فائل دکھانے کی اجازت دیں؛");

define("_MD_AM_USERACTV","رکن کو خود فعال کرنے کی اجازت ہے (سفارش کی جاتی ہے)");
define("_MD_AM_AUTOACTV","خودکار طریقے سے فعال کریں");
define("_MD_AM_ADMINACTV","منتظم کے ذریعے فعالیت");
define("_MD_AM_ACTVTYPE","نۓ رجسٹرڈ ارکان کیلۓ فعالیت کی قسم کا انتخاب کریں");
define("_MD_AM_ACTVGROUP","گروپ کا انتخاب کریں جنہیں فعالیت کا ایمیل بھیجا جاے");
define("_MD_AM_ACTVGROUPDSC","صرف کارآمد ہے  'اگر منتظم کاے ذریعے فعالیت کا انتخاب کیا گیا ہو'");
define("_MD_AM_USESSL","لاگن کا استعمال کریں SSL ");
define("_MD_AM_SSLPOST","SSL مراسلے کا تغیر پذیر نام");
define("_MD_AM_SSLPOSTDSC","تغیر پذیر کا نام جو مراسلے کے ذریعے نشست کع ایک جگہ سے دوسرے جگہ لے جاے. اگر آپ کو نہیں پتہ, تو ایسے نام کا استعمال کرین جسے کوئ سوچ نہ سکے.");
define("_MD_AM_DEBUGMODE0","بند");
define("_MD_AM_DEBUGMODE1","نقص ڈھونڈنے کیلۓ فعال کریں (اندرونی طرز پر)");
define("_MD_AM_DEBUGMODE2","نقص ڈھونڈنے کیلۓ فعال کریں (بیرونی طرز پر)");
define("_MD_AM_DEBUGMODE3","ٹیمپلٹس کا نقص Smarty");
define("_MD_AM_MINUNAME","کم اس کم لمبائ لی ضرورت ارکان کے نام میں");
define("_MD_AM_MAXUNAME","ارکان کے نام کا زیادہ سے زیادہ لمبائ");
define("_MD_AM_GENERAL","مجموعی سیٹنگز");
define("_MD_AM_USERSETTINGS","رکن کے معلمات کی سیٹنگگز");
define("_MD_AM_ALLWCHGMAIL","ارکان کو ایمیل اڈریس تبدیل کرنے کی اجازت");
define("_MD_AM_ALLWCHGMAILDSC","");
define("_MD_AM_IPBAN","IP پابندی");
define("_MD_AM_BADEMAILS","وہ ایمیل اڈریسز داخل کرین جو رکن استعمال نہ کر سکیں");
define("_MD_AM_BADEMAILSDSC","ہر اہک کو جدا کریں <strong>|</strong>, حساہ نہين ہیں, regex فعال ہے");
define("_MD_AM_BADUNAMES","وہ نام داخل کریں جو ارکان استعمال نہ کر سکیں");
define("_MD_AM_BADUNAMESDSC","ہر ایک کو جدا کریں<strong>|</strong>, حساس نہیں ہیں, regex فعال ہے");
define("_MD_AM_DOBADIPS","کی پابندی فعال کریں IP");
define("_MD_AM_DOBADIPSDSC","ارکان دیۓ گۓ مخصوص ip اڈریسز سے سائٹ نہیں دیکھ سکتے");
define("_MD_AM_BADIPS"," IP وہ آئپی آدریسز جن پر پابندی ہے<br />ہرایک کع جدا کریں <strong>|</strong>, حساس نہين ہیں, regex فعال ہے.");
define("_MD_AM_BADIPSDSC","^ااا.ب ب ب.ت ت ت  دیکھنے والے کو نہیں دیکھنے دے گی جن کا آئپی آدریس شروع ہوتا ہے aaa.bbb.ccc<br />aaa.bbb.ccc$ نہیں دیکھنے دے گی جن کا اڈریس ختم ہوتا ہے IP سے aaa.bbb.ccc<br />aaa.bbb.ccc ان کع نہین دیکھنے دے گی جن کا اڈریس میں موجود ہو IP  aaa.bbb.ccc");
define("_MD_AM_PREFMAIN","مرکزی ترجیحات");
define("_MD_AM_METAKEY","Meta الفاظ");
define("_MD_AM_METAKEYDSC","ایسے الفاظ ہیں جو شائٹ کے مواد کی ترجمانی کرتے ہیئں meta . الفاظ کو لکھنے کئلۓ درمیان مین خالی جگہ ہا ، دینا ضروری ہے. (مثال کے طور پر. زوپس, پی ایچ پی, مائ سیکول, پورٹل سسٹم)");
define("_MD_AM_METARATING","Meta شرح بندی");
define("_MD_AM_METARATINGDSC","شرح بندی meta tag آپ کے سايٹ کی عمر کو واضع کرتے ہیں");
define("_MD_AM_METAOGEN","عمومی");
define("_MD_AM_METAO14YRS","۱۴ سال");
define("_MD_AM_METAOREST","پابند");
define("_MD_AM_METAOMAT","بالغ");
define("_MD_AM_METAROBOTS","Meta روبوٹس");
define("_MD_AM_METAROBOTSDSC"," Robots Tag تلاش کرنے والے انجں کو مواد کی نشاندہی کرتی ہیں");
define("_MD_AM_INDEXFOLLOW","انڈکس, پیچھا کرنا");
define("_MD_AM_NOINDEXFOLLOW","No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW","Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW","No Index, No Follow");
define("_MD_AM_METAAUTHOR","Meta مضنف");
define("_MD_AM_METAAUTHORDSC","مصنف meta tag فائل کے مصنف کی نشاندہی کرتا ہے. امدادی ڈیٹا کے ترتیب کیلۓ نام شامل کریں, ویب ماسٹر کا ایمیل اڈریس, کمپنی کا نام یا اڈریس");
define("_MD_AM_METACOPYR","Meta حق تالیف");
define("_MD_AM_METACOPYRDSC","حق تالیف meta tag حق تالیف کی نشاندہی کرتا ہے۔ جسے آپ اپنے عیب سایٹ کے صفحے میں دینا چاہتے ہوں.");
define("_MD_AM_METADESC","Meta تفصیل");
define("_MD_AM_METADESCDSC","تفصیل meta tag عمومی طور پر آپکے صفحے کی مواد کی ترجمانی کرتا ہے");
define("_MD_AM_METAFOOTER","Meta Tags اور پایان");
define("_MD_AM_FOOTER","پایان");
define("_MD_AM_FOOTERDSC","لنک ٹائپ کرنے میں مکمل آدریس کو یقینی بنایں http://, ورنہ آپکا موڈیولز کے صفحے میں درست طریقے سے کام نہیں کرے گا.");
define("_MD_AM_CENSOR","الفاظ کے چھان بین کے آپشنز");
define("_MD_AM_DOCENSOR","غیر ضروری الفاظ کے چھان بین کو فعال کریں");
define("_MD_AM_DOCENSORDSC","تمام الفاظ کی چھان بین کی جاۓ گی اکر یہ آپشن فعال ہو. اس آپشن کو آپ نبد رہنے دے سکتے ہیں سایٹ کو تیز کرنے کیلۓ");
define("_MD_AM_CENSORWRD","وہ الفاظ جن کی چھان بین کی جاۓ");
define("_MD_AM_CENSORWRDDSC","وہ الفاظ داخل کریں جن کی چھان بین رکن کے مراسلوں مین کرنا چاہیں.<br />ہر ایک کو جدا کریں <strong>|</strong>, حساس نہیں ہین");
define("_MD_AM_CENSORRPLC","برے الفاظ کو تبدیل کیا جاۓ گا کے ساتھ:");
define("_MD_AM_CENSORRPLCDSC","تمام چھان بین شدہ الفاظ کو نیچھے خانے میں دیۓ گۓ الفاظ میں تبدیل کیا جاۓ گا");

define("_MD_AM_SEARCH","تلاش کے آپشنز");
define("_MD_AM_DOSEARCH","گلوبل تلاش کو فعال کریں");
define("_MD_AM_DOSEARCHDSC","ساۓٹ میں مراسلوں اور اجزاء تلاش کرنے کی اجازت دیں");
define("_MD_AM_MINSEARCH","کم سے کم الفاظ کی لمبائ");
define("_MD_AM_MINSEARCHDSC"," کم سے کم الفاظ کا تعین کریں جسکا ارکان تلاش کرنے کے دوران پابند ہون ");
define("_MD_AM_MODCONFIG","موڈیول کے ترجیحی آپشنز");
define("_MD_AM_DSPDSCLMR","اقراری قواعد دکھایئں؟");
define("_MD_AM_DSPDSCLMRDSC","اقراری قواعد رجسٹریشن صفحے پر دکھانے کیلۓ ہاں کا انتخاب کریں");
define("_MD_AM_REGDSCLMR","اقراری رجسٹریشن");
define("_MD_AM_REGDSCLMRDSC","وہ عبارت داخل کریں جو رجسٹریشن کے دوراں دکھایا جاۓ");
define("_MD_AM_ALLOWREG","نۓ ارکان کو رجسٹریشن کی اجازت دو؛");
define("_MD_AM_ALLOWREGDSC","نۓ ارکان کی رجسٹریشن قبول کرنے کیلۓ ہاں کا انتخاب کریں");
define("_MD_AM_THEMEFILE","ٹیمپلٹس کو تبدیلی کیلۓ چیک کریں؟");
define("_MD_AM_THEMEFILEDSC","اگر یہ آپشن فعال ہو تو, تبدیل شدہ ٹیملٹس کو خودکار طریقے سے دوبارہ کمپائل کیا جاۓ گا. چلتے ہوۓ سائٹ پر اس آپشن کو بند رکھیں.");
define("_MD_AM_CLOSESITE","اپنا سائٹ بند کریں؟");
define("_MD_AM_CLOSESITEDSC","سایٹ کو بند کرنے کیلۓ ہاں کا انتخاب کریں۔ بند ہونے کی صورت مین صرف مخصوص گروپ کے ارگان سایٹ کو لاگن ہونے کے بعد دیکھ سکتے ہیں۔ ");
define("_MD_AM_CLOSESITEOK","ان گروپ کا انتخاب کریں جو سائٹ بند ہونے کی صورت میں بھی انہیں دسترس حاصل ہو۔");
define("_MD_AM_CLOSESITEOKDSC","ویب ماسٹر گروپ کے ارکان کو ہمیشہ دسترس حاصل ہے۔");
define("_MD_AM_CLOSESITETXT","سائٹ بند کرنے کی وجہ؟");
define("_MD_AM_CLOSESITETXTDSC","وہ عبارت جو سائٹ بند ہونے کی صورت میں پیش کیا جاۓ");
define("_MD_AM_SITECACHE","سايٹ وائڈ کیش");
define("_MD_AM_SITECACHEDSC","مخصوص مدت کیلۓ سایٹ کے مواد کی ذخیرہ اندوزی. سایٹ وائڈ site-wide cache موڈیول لیول  cache,کو دوبارہ لکھے گا block-level cache, and module item level cache if any.");
define("_MD_AM_MODCACHE","معڈیول وائڈ کیش");
define("_MD_AM_MODCACHEDSC","پرفارمنس کیلۓ موڈیول وائڈ کیش کی مدت؟. اس آپشن کے سیٹ کرنے سے موڈیول لیول کیش موڈیول کے اجزاء کی کیش کو دوبارہ لکھے گا.");
define("_MD_AM_NOMODULE","یہاں کوئ موڈیول کیش کرنے کیلۓ نہیں");
define("_MD_AM_DTPLSET","ترجیحی ٹیمپلٹ سیٹ");
define("_MD_AM_SSLLINK","URL where SSL login page is located");

// added for mailer
define("_MD_AM_MAILER","ایمیل کی سیٹ اپ");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","اڈریس کی طرف سے");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","منجانب ");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","رکن کی طرف سے");
define("_MD_AM_MAILFROMUIDDESC","جب سسٹم شخصی پیغام بھیجے, کس رکن کی طرف سے بھیجا جاے؟");
define("_MD_AM_MAILERMETHOD","خط بھیجنے کے طریقے");
define("_MD_AM_MAILERMETHODDESC","خط بھیجنے کا طریقہ استعمال کیا گیا ہو. ترجیحی \"خط\", دوسرا استعمال کریں اگر یہ مسلہ پیدا کرے");
define("_MD_AM_SMTPHOST","SMTP میزبان(s)");
define("_MD_AM_SMTPHOSTDESC","سرورز کی فھرست جن سے کنیکٹ کرنے کی کوشش کی جاۓ SMTP ");
define("_MD_AM_SMTPUSER","SMTPAuth رکن کا نام");
define("_MD_AM_SMTPUSERDESC","رکن کا نام جو سرور سے کنیکٹ کرے SMTP میزبان کے ساتھ SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth پاس ورڈ");
define("_MD_AM_SMTPPASSDESC","پاس ورڈ جس سے کنیکٹ کیا جا سکے SMTP میزبان کے ساتھ SMTPAuth.");
define("_MD_AM_SENDMAILPATH","خط بہیجنے کا راستہ");
define("_MD_AM_SENDMAILPATHDESC","خط بھیجنے کا راستہ یا پروگرام (or substitute) سرور میں.");
define("_MD_AM_THEMEOK","انتخاب کے قابل تھیم");
define("_MD_AM_THEMEOKDSC","ان تھیم کا انتخاب کریں جو ارکان انیہیں ترجیحی تھیم کے طور پر سیٹ کر سکیں");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","زوپس ڈیٹا بیس");
define("_MD_AM_AUTH_CONFOPTION_LDAP","معیارئ LDAP ڈایریکٹری");
define("_MD_AM_AUTH_CONFOPTION_AD","میکروسافٹ ایکٹو ڈایریکٹری &copy");
define("_MD_AM_AUTHENTICATION","تصدیقی آپشنز");
define("_MD_AM_AUTHMETHOD","تصدیقی طریقہ کار");
define("_MD_AM_AUTHMETHODDESC","ارکان کے لاگن ہونے کیلۓ کونسا تصدیقی طریقہ کار استعمال کرنا چاہیں گے");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - خط کے خانے کا نام");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","ایمیل کا نام E-Mail آپ کے ڈایرئکٹری کے درخت میں LDAP ");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - مشترک خانے کا نام");
define("_MD_AM_LDAP_NAME_ATTR_DESC","آپکےڈایریکٹری مین منسوب نام کا نام LDAP");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - خانداني نام کا خانہ");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","خاندانی نام کا نام LDAP ڈایرکٹری میں منسوب.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - دیۓ گۓ نام کا خانہ");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","دیۓ گۓ نام کا نام LDAP ڈایرکٹری میں منسوب");
define("_MD_AM_LDAP_BASE_DN","LDAP - بنیادی DN");
define("_MD_AM_LDAP_BASE_DN_DESC","بنیادی DN (Distinguished Name) آپکے LDAP ڈایرکٹری کے درخت مین.");
define("_MD_AM_LDAP_PORT","LDAP - پورٹ نمبر");
define("_MD_AM_LDAP_PORT_DESC","پورٹ نمبر ضروری ہے ڈیریکٹری سرور میں دسترس حاصل کرنے کیلۓ LDAP");
define("_MD_AM_LDAP_SERVER","LDAP - سرور کا نام");
define("_MD_AM_LDAP_SERVER_DESC","ڈایرکیٹری سرور کا نام LDAP");

define("_MD_AM_LDAP_MANAGER_DN","DN کا LDAP منتظم");
define("_MD_AM_LDAP_MANAGER_DN_DESC"," DN ارکان کو تلاش کرنے میں مدد دے گی (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS","مینیجر کا پاس ورڈ LDAP ");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","رکن کا پاس ورڈ جو تلاش کرنے کی اجازت دے");
define("_MD_AM_LDAP_VERSION","پروٹوکول نسخہ LDAP ");
define("_MD_AM_LDAP_VERSION_DESC"," LDAP پروٹوکول نسخہ : 2 or 3");
define("_MD_AM_LDAP_USERS_BYPASS","ارکان کو بئ پاس کرنے کی اجازت ہے LDAP تصدیقی");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","زوپس کے زاتی طریقہ کار سے ارکان کی تصدیق");

define("_MD_AM_LDAP_USETLS"," کنیکشن کا استعمال کریں TLS ");
define("_MD_AM_LDAP_USETLS_DESC"," TLS (Transport Layer Security) کنیکشن کا استعمال کريں. TLS نمبر کا استعمال کرتا ہے  389 معیاری پورٹ<BR>" .
								  " اور LDAP نسخہ سیٹ کرنا ضروری ہے 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute ارکان کو تلاش کرنے کیلۓ استعمال کرتی ہے");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D"," کے اندر استعمال کیا گیا تو ہا ں منتخب ہوگا جو کے زوپس کے نام کی تشریح کرے DN اگر لاگن نام,");
define("_MD_AM_LDAP_LOGINNAME_ASDN","کے اندر استعمال ہو DN لاگن نام جو");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","کے اندر LDAP DN زوپس لاگن نام استعمال ہوا(eg : uid=<loginname>,dc=xoops,dc=org)<br>کے اندر پڑھا جاسکے گا LDAP Server انٹری سیدھے طریقے سے");

define("_MD_AM_LDAP_FILTER_PERSON","ارکان کی چھان بیں کرے گا LDAP تلاش");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","ارکان کو تلاش کرنے کیلۓLDAP Filter سپیشل. @@لاگن نام@@ ارکان کے لاگن نام میں تبدیل کیا جاے گا<br> خالی چھوڑین اگر آپ کو نہیں پتہ کہ کیا کیا جاۓ' !" .
		"<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","ڈومین کا نام");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","ونڈعز ڈومیں کا نام. for ADS and NT سرور کیلۓ");

define("_MD_AM_LDAP_PROVIS","زوپس اکاؤنٹ کا خودکار تعین");
define("_MD_AM_LDAP_PROVIS_DESC","زوپس ڈیٹابیس وجود میں لایئں اگر پہلے سے موجود نہیں ہے");

define("_MD_AM_LDAP_PROVIS_GROUP","ترجیحی با اثر گروپ");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","نۓ ارکان انہیں گروپس میں شامل کیا جاۓ گا");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","زوپس تصدیقی سرور کے خانے کی میپنگ");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","تصدیقی سرور کے درمیان میپنگ کی تفصیل LDAP زوپس ڈیٹابیس خانے اور." .
		"<br /><br />ترتیب [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />مثال کے طورپر : email=mail" .
		"<br />ہر ایک کو جداکریں |" .
		"<br /><br />!! اعلی ارکان کیلۓ !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","صوپس اکاؤنٹ کی فراہمی برقرار رکھیں");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","زوپس ارکان کے اکاؤنٹس ہنیشہ تصدیقی سرور سے مطابقت رکھتے ہیں");


define("_MD_AM_CPANEL"," کنٹرول پینل کا گرافیکل انٹرفیس ");
define("_MD_AM_CPANELDSC","اندرونی سطح کیلۓ");

define("_MD_AM_WELCOMETYPE","خوش آمدیدی پیغام بہیجنا");
define("_MD_AM_WELCOMETYPE_DESC","رکن کی کامیاب رجسٹریشن پر خوشآمدیدی پیغام بہیجنے کا طریقہ کار");
define("_MD_AM_WELCOMETYPE_EMAIL","ایمیل");
define("_MD_AM_WELCOMETYPE_PM","پیغام");
define("_MD_AM_WELCOMETYPE_BOTH","ایمیل اورپیغام");

?>