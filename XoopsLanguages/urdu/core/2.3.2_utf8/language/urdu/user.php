<?php
// $Id: user.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','رجسٹر نہیں ہے  کلک کریں <a href="register.php">یہاں</a>.');
define('_US_LOSTPASSWORD',' آپکو پاس ورڈ بھول گیا');
define('_US_NOPROBLEM','کوئ مسلہ نہیں۔ اپنا ایمیل اڈریس داخل کریں۔ ہم آپکو پاس ورڈ بھیج دیں گے.');
define('_US_YOUREMAIL','آپکا ایمیل آدریس: ');
define('_US_SENDPASSWORD','پاس ورڈ بھیجو');
define('_US_LOGGEDOUT','آپ ابھی خارج ہوۓ');
define('_US_THANKYOUFORVISIT','آپکا ہمارے سائٹ پر آنے کا شکریہ!');
define('_US_INCORRECTLOGIN','غلط داخلہ!');
define('_US_LOGGINGU','ڈاخل ہونے کا شکریہ, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','منتخب یوزر غئر فعال کیا گیا یا ابھی تک فعال نہیں ہے۔.<br />براۓ مہربانی منتظم سے رابطہ کریں.');
define('_US_ACTKEYNOT','فعال کرنے کا کوڈ درست نہیں ہے!');
define('_US_ACONTACT','منتخب اکاؤنٹ پہلے سے فعال ہے!');
define('_US_ACTLOGIN','آپکا اکاؤنٹ فعال کیا گیا۔ براۓ مھربانی اپنے رجسٹرڈ پاس ورڈ کے ساتة لاگن کریں.');
define('_US_NOPERMISS','آپکو یہ عمل کرنے کي اجازت نہیں!معذرت');
define('_US_SURETODEL','آپکو یقین ہے کہ آپ اپنا اکاؤنٹ حذف کرنا چاہتے ہیں');
define('_US_REMOVEINFO','یہ آپکی تمام معلمومات ڈیٹابیس سے حذف کر دے گی.');
define('_US_BEENDELED','آپکا اکاؤنٹ حذف کیا گیا.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','یوزر رجسٹریشن');
define('_US_NICKNAME','استعمال کنندا کا نام');
define('_US_EMAIL','ایمیل');
define('_US_ALLOWVIEWEMAIL','دوسرے یوزرز کو میرے ایمیل دیکھنے کی اجازت ہے');
define('_US_WEBSITE','ویب سایٹ');
define('_US_TIMEZONE','ٹائم زون');
define('_US_AVATAR','فوٹو');
define('_US_VERIFYPASS','پاس ورڈ کی تصدیق کریں');
define('_US_SUBMIT','ارسال');
define('_US_USERNAME','استعمال کنندہ کا نام');
define('_US_FINISH','ختم');
define('_US_REGISTERNG','نیا یوزر رجسٹر نہ کر سکا.');
define('_US_MAILOK','ایمیل اطلاعات وصول کریں <br />منتظم اور موڈریٹر کی طرف سے?');
define('_US_DISCLAIMER','انکار لاتعلقئ');
define('_US_IAGREE','مجھے منظور ہے');
define('_US_UNEEDAGREE','معذرت۔ آپکو ہمارے قوانین منظور ہونے چاہیۓ رجسٹریشن کیلۓ.');
define('_US_NOREGISTER','معذرت۔ نۓ یوزر رجسٹریشن فی الحال نبد ہیں');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','یوزر کے فعالیت کا کوڈ %s');

define('_US_YOURREGISTERED','آپ ابھی رجسٹرڈ ہو چکے ہیں۔ آپ کے اکاؤنٹ کو فعال کرنے کیلۓ ہدایات آپ کے ایمیل اڈریس میں ارسال کر دیۓ گۓ ہیں۔ براۓ مھرباني ہدایات پر دھیان دیں اپنے اکاؤنٹ فعال کرنے کیلۓ ');
define('_US_YOURREGMAILNG','آپ رجسٹرڈ ہوچکے ہیں۔ لیکن اندرونی مسلۓ کی وجہ سے ہم آپکو اکاؤنٹ فعال کرنے کیلۓ ایمیل نہیں بھیج سکے۔ برایۓ مہربانی منتظم کو بذریعہ ایمیل صورتحال سے آگاہ کریں۔ تاکہ آپکا اکاؤنٹ فعال کیا جا سکے');
define('_US_YOURREGISTERED2','آپ ابھی رجسٹرڈ ہیں۔ برایۓ مہربانی انتظار کریں۔ منتظم آپکا اکاؤنٹ فعال کردے گا۔ اس میں تھوڑا سا ٹائم لگ سکتا ہے۔');

// %s is your site name
define('_US_NEWUSERREGAT','پر نیا یوز رجسٹریشن %s');
// %s is a username
define('_US_HASJUSTREG','ابھی رجسٹر ہوا %s');

define('_US_INVALIDMAIL','غلط: ایمیل درست نہیں ہے');
define('_US_EMAILNOSPACES','غلط: ایمیل اڈریس کے درمیان خالی جگے نہیں ہوتے');
define('_US_INVALIDNICKNAME','غلط: یوزر کا نام درست نیں');
define('_US_NICKNAMETOOLONG','حروف سے کم ہونا چاہیۓ %s یوزر کا نام بہت لمبا ہے۔ نام');
define('_US_NICKNAMETOOSHORT','حروف سے زیادہ ہونا چاہیۓ %s یوزر کا نام بہت چھوٹا ہے');
define('_US_NAMERESERVED','غلط: یہ نام پہلے سے محفوظ ہے۔');
define('_US_NICKNAMENOSPACES','یوزر کے نام کے درمیان خالی جگے نہیں ہوتے');
define('_US_NICKNAMETAKEN','غلط: یہ نام پہلے سے کسی نیں حاصل کیا۔');
define('_US_EMAILTAKEN','غلط: یہ ایمیل اڈریس پہلے سے رجسٹر ہے۔');
define('_US_ENTERPWD','غلط: پاس ورڈ میسر کرنا لازمی ہے');
define('_US_SORRYNOTFOUND','معذرت، کوئ ایسا یوزر نہیں ملا ');




// %s is your site name
define('_US_NEWPWDREQ','پر نۓ پاس ورڈ کی درخواست %s');
define('_US_YOURACCOUNT','پر آپکا اکاؤنٹ %s');

define('_US_MAILPWDNG','میل پاس ورڈ: یوزر کی انٹری جدید نہ کرسکا۔ منتظم سے رابطہ کریں');

// %s is a username
define('_US_PWDMAILED','کیلۓ پاس ورڈ ایمیل کردیا گیا %s ');
define('_US_CONFMAIL','کیلۓ تتصدیقی ایمیل نہیں بھیج سکا %s');
define('_US_ACTVMAILNG','اکو اطلاعاتی ایمیل نہیں بھیج سکا %s');
define('_US_ACTVMAILOK','کو اطلاعاتی ایمیل بھیج دیا گیا %s ');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','کوئ یوزر منتخب نہیں ہے۔ براۓ مہربانی دوبارہ کوشش کریں');
define('_US_PM','شخضی پیغام');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','مقام');
define('_US_OCCUPATION','پیشہ');
define('_US_INTEREST','دلچسپی');
define('_US_SIGNATURE','دستخط');
define('_US_EXTRAINFO','مزید معلومات');
define('_US_EDITPROFILE','ذاتی معلومات کی تنسیخ');
define('_US_LOGOUT','خروج');
define('_US_INBOX','ان بکس');
define('_US_MEMBERSINCE','رکن تب سے');
define('_US_RANK','صف');
define('_US_POSTS','تبصرے/ مراسلے');
define('_US_LASTLOGIN','آخری لاگن');
define('_US_ALLABOUT','کے متعلق %s');
define('_US_STATISTICS','اعداد و شمار');
define('_US_MYINFO','میرے بارے میں');
define('_US_BASICINFO','بنیادی معلومات');
define('_US_MOREABOUT','میرے بارے میں مزید');
define('_US_SHOWALL','سارے دکھائیں');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','زاتی معلومات');
define('_US_REALNAME','خاندانی نام');
define('_US_SHOWSIG','ہمیشہ میرے دستخط منسلک کریں');
define('_US_CDISPLAYMODE','تبصرے طرز نمائش');
define('_US_CSORTORDER','تبصرے ترتیب وار');
define('_US_PASSWORD','پاس ورڈ');
define('_US_TYPEPASSTWICE','(تبدیل کرنے کیلۓ دو مرتبہ پاس ورڈ داخل کریں)');
define('_US_SAVECHANGES','تبدیلیاں محفوظ کریں');
define('_US_NOEDITRIGHT',"معذرت، آپکو اس یوزر کے معلومات کی تنسیخ کا حق حاصل نہیں");
define('_US_PASSNOTSAME','دونوں پاس ورڈ مختلف ہیں۔ انہیں ایک جیسا ہونا چاہۓ');
define('_US_PWDTOOSHORT','حروف ہونا چاہۓ <strong>%s</strong> معذرت، آپکے پاس ورڈ کو کم از کم');
define('_US_PROFUPDATED','آپکے ذاتی معلومات جدید کردیۓ گۓ');
define('_US_USECOOKIE','میرا یوزر نام ایک سال کیلۓ کوکی میں ذخیرہ کردیں');
define('_US_NO','نہیں');
define('_US_DELACCOUNT','اکاؤنٹ حذف کریں');
define('_US_MYAVATAR','میرا فوٹو');
define('_US_UPLOADMYAVATAR','فوٹو اپلوڈ کریں');
define('_US_MAXPIXEL','زیادہ سے زیادہ پکسلز');
define('_US_MAXIMGSZ','(Bytes) زیادہ سے زیادہ تصویر کا حجم');
define('_US_SELFILE','فائل منتخب کریں');
define('_US_OLDDELETED','آپکا پرانا فوٹو حذف کردیا جاے گا');
define('_US_CHOOSEAVT','دستیاب فھرست سے فوٹو منتخب کریں');

define('_US_PRESSLOGIN','لاگن کرے کیلۓ نیچے دیا گیا بٹن دبائیں');

define('_US_ADMINNO','منتظم گروپ کے اندر والا رکن حذف نہیں کیا جا سکتا');
define('_US_GROUPS','ارکان گروپ میں');

define('_US_REMEMBERME','مجھے یاد رکھیں');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','پر خوش آمدید %s');

?>