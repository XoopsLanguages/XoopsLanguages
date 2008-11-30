<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","K�rlek v�rj");
define("_FETCHING","Bet�lt�s...");
define("_TAKINGBACK","Taking you back to where you were....");
define("_LOGOUT","Kijelentkez�s");
define("_SUBJECT","Subject");
define("_MESSAGEICON","�zenet ikon");
define("_COMMENTS","Hozz�sz�l�sok");
define("_POSTANON","Ismeretlen k�ld�");
define("_DISABLESMILEY","Smiley-k n�lk�l");
define("_DISABLEHTML","HTML n�lk�l");
define("_PREVIEW","El�zetes...");

define("_GO","Go!");
define("_NESTED","Nested");
define("_NOCOMMENTS","Nincs hozz�sz�l�s");
define("_FLAT","Flat");
define("_THREADED","Threaded");
define("_OLDESTFIRST","R�gi az els�");
define("_NEWESTFIRST","�j az els�");
define("_MORE","tov�bb...");
define("_MULTIPAGE","To have your article span multiple pages, insert the word <font color=red>[pagebreak]</font> (with brackets) in the article.");
define("_IFNOTRELOAD","If the page does not automatically reload, please click <a href='%s'>here</a>");
define("_WARNINSTALL2","WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons.");
define("_WARNINWRITEABLE","WARNING: File %s is writeable by the server. <br />Please change the permission of this file for security reasons.<br /> in Unix (444), in Win32 (read-only)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Bek�ldte");
define("_VISITWEBSITE","Visit Website");
define("_SENDPMTO","Priv�t �zenet k�ld�se %s r�sz�re.");
define("_SENDEMAILTO","E-mail k�ld�se %s r�sz�re");
define("_ADD","Hozz�ad");
define("_REPLY","Reply");
define("_DATE","D�tum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Main");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Control Panel Home");
define("_YOURHOME","F�oldal");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Ki online");
define('_GUESTS', 'Vend�gek');
define('_MEMBERS', 'Tagok');
define("_ONLINEPHRASE","<b>%s</b> online");
define("_ONLINEPHRASEX","<b>%s</b> user(s) are browsing <b>%s</b>");
define("_CLOSE","Bez�r");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Quote:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Nincs jogosults�god ehhez a ter�lethez.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Nem");
define("_YES","Igen");
define("_EDIT","Szerkeszt�s");
define("_DELETE","T�rl�s");
define("_SUBMIT","Submit");
define("_MODULENOEXIST","Selected module does not exist!");
define("_ALIGN","Align");
define("_LEFT","Balra");
define("_CENTER","K�z�pre");
define("_RIGHT","Jobbra");
define("_FORM_ENTER", "Please enter %s");
// %s represents file name
define("_MUSTWABLE","File %s must be writable by the server!");
// Module info
define('_PREFERENCES', 'Be�ll�t�sok');
define("_VERSION", "Verzi�");
define("_DESCRIPTION", "Le�r�s");
define("_ERRORS", "Hiba");
define("_NONE", "Egyik sem");
define('_ON','bekapcsolva');
define('_READS','olvas');
define('_WELCOMETO','�dv�zl�nk %s');
define('_SEARCH','Keres�s');
define('_ALL', '�sszes');
define('_TITLE', 'C�m');
define('_OPTIONS', 'Options');
define('_QUOTE', 'Quote');
define('_LIST', 'List');
define('_LOGIN','Bejelentkez�s');
define('_USERNAME','Felhaszn�l�n�v: ');
define('_PASSWORD','Jelsz�: ');
define("_SELECT","V�laszt");
define("_IMAGE","K�p");
define("_SEND","Elk�ld");
define("_CANCEL","M�gse");
define("_ASCENDING","Ascending order");
define("_DESCENDING","Descending order");
define('_BACK', 'Vissza');
define('_NOTITLE', 'No title');

/* Image manager */
define('_IMGMANAGER','K�p-kezel�');
define('_NUMIMAGES', '%s images');
define('_ADDIMAGE','K�p hozz�ad�sa');
define('_IMAGENAME','N�v:');
define('_IMGMAXSIZE','Maximum m�ret (byte):');
define('_IMGMAXWIDTH','Maximum sz�less�g (pixel):');
define('_IMGMAXHEIGHT','Maximum magass�g (pixel):');
define('_IMAGECAT','Kateg�ria:');
define('_IMAGEFILE','K�pf�jl:');
define('_IMGWEIGHT','Display order in image manager:');
define('_IMGDISPLAY','K�p mutat�sa?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG', 'Could not get uploaded file %s');
define('_FAILSAVEIMG', 'Failed storing image %s into the database');
define('_NOCACHE', 'No Cache');
define('_CLONE', 'Clone');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Starts with");
define("_ENDSWITH", "Ends with");
define("_MATCHES", "Matches");
define("_CONTAINS", "Contains");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Regisztr�ci�");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","SIZE");  // font size
define("_FONT","FONT");  // font family
define("_COLOR","COLOR");  // font color
define("_EXAMPLE","SAMPLE");
define("_ENTERURL","Enter the URL of the link you want to add:");
define("_ENTERWEBTITLE","Enter the web site title:");
define("_ENTERIMGURL","Enter the URL of the image you want to add.");
define("_ENTERIMGPOS","Now, enter the position of the image.");
define("_IMGPOSRORL","'R' or 'r' for right, 'L' or 'l' for left, or leave it blank.");
define("_ERRORIMGPOS","ERROR! Enter the position of the image.");
define("_ENTEREMAIL","Enter the email address you want to add.");
define("_ENTERCODE","Enter the codes that you want to add.");
define("_ENTERQUOTE","Enter the text that you want to be quoted.");
define("_ENTERTEXTBOX","Please input text into the textbox.");
define("_ALLOWEDCHAR","Allowed max chars length: ");
define("_CURRCHAR","Current chars length: ");
define("_PLZCOMPLETE","Please complete the subject and message fields.");
define("_MESSAGETOOLONG","Your message is too long.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 m�sodperc');
define('_SECONDS', '%s m�sodperc');
define('_MINUTE', '1 perc');
define('_MINUTES', '%s perc');
define('_HOUR', '1 �ra');
define('_HOURS', '%s �ra');
define('_DAY', '1 nap');
define('_DAYS', '%s nap');
define('_WEEK', '1 h�t');
define('_MONTH', '1 h�nap');

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'ISO-8859-1');
define('_LANGCODE', 'en');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>