<?php
// $Id: global.php,v 1.1 2003/01/02 16:53:48 w4z004 Exp $
//%%%%%%        File Name mainfile.php         %%%%%
define("_PLEASEWAIT","Molim te sa&#269;ekaj");
define("_FETCHING","U&#269;itava se...");
define("_TAKINGBACK","Vra&#263;amo te na prethodnu stranicu...");
define("_LOGOUT","Izloguj se");
define("_SUBJECT","Tema");
define("_MESSAGEICON","Simbol vijesti");
define("_COMMENTS","Komentar");
define("_POSTANON","Anonymno napi&scaron;i");
define("_DISABLESMILEY","Smilise isklju&#269;i");
define("_DISABLEHTML","HTML isklju&#269;i");
define("_PREVIEW","Vidi izgled");

define("_GO","Idi!");
define("_NESTED","Ugnije&#382;deno");
define("_NOCOMMENTS","Nema Komentara");
define("_FLAT","Ravno");
define("_THREADED","Diskusije");
define("_OLDESTFIRST","Starije prvo");
define("_NEWESTFIRST","Novije prvo");
define("_MORE","vidi sve...");
define("_MULTIPAGE","Ako tvoj Artikal ima vi&scaron;e stranica, upi&scaron;i ovo <font color=red>[pagebreak]</font> (u zagradama) u Artiklu za sljede&#263;u stranicu tvog Artikla.");
define("_IFNOTRELOAD","Ako se stranica ne u&#269;ita automatski, klikni molim te  <a href=%s>OVDJE</a>");
define("_WARNINSTALL2","Pa&#382;nja: Direktorij %s postoji jo&scaron; uvijek na Serveru. Izbri&scaron;i ovaj direktorij zbog sigurnosnih razloga.");
define("_WARNINWRITEABLE","Pa&#382;nja: Podaci %s nisu zaza&scaron;ti&#263;eni za pisanje na Serveru. <br />Molim te CMOD odobrenje ispravno postavi. Ina&#269;e ti je stranica izlo&#382;ena riziku!<br /> (Pod Unixom (444), pod Win32 (zabrani pisanje))");

// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s je uspjelo" );
define("_XOBJ_ERR_SHORTERTHAN","%s mora vi&scaron;e %d oznaka imati." );

//%%%%%%        File Name themeuserpost.php         %%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Post od");
define("_VISITWEBSITE","Web stranicu posjeti");
define("_SENDPMTO","Privatnu poruku za %s po&scaron;alji");
define("_SENDEMAILTO","E-Mail za %s po&scaron;alji");
define("_ADD","Dodaj");
define("_REPLY","Odgovori");
define("_DATE","Datum");   // Posted date

//%%%%%%        File Name admin_functions.php         %%%%%
define("_MAIN","Glavni dio");
define("_MANUAL","Manualno");
define("_INFO","Info");
define("_CPHOME","Administracija");
define("_YOURHOME","Start stranica");

//%%%%%%        File Name misc.php (who's-online popup)        %%%%%
define("_WHOSONLINE","Ko je online");
define('_GUESTS','Gosti');
define('_MEMBERS','&#268;lanova');
define("_ONLINEPHRASE","<b>%s</b> posjetilaca je online");
define("_ONLINEPHRASEX","<b>%s</b> posjetilaca se nalezi u <b>%s</b> .");
define("_CLOSE","Zatvori prozor");  // Close window

//%%%%%%        File Name module.textsanitizer.php         %%%%%
define("_QUOTEC","Citat:");

//%%%%%%        File Name admin.php         %%%%%
define("_NOPERM","Oprosti, nema&scaron; odobrenje da u ovo podru&#269;je ulazi&scaron;. Ako smatra&scaron; da je gre&scaron;ka javi se webmasteru.");

//%%%%%                Common Phrases                %%%%%
define("_NO","Ne");
define("_YES","Da");
define("_EDIT","Uredi");
define("_DELETE","Izbri&scaron;i");
define("_SUBMIT","Po&scaron;alji");
define("_MODULENOEXIST","Izabrani Modul ne postoji!");
define("_ALIGN","Raspored");
define("_LEFT","Lijevo");
define("_CENTER","Sredina");
define("_RIGHT","Desno");
define("_FORM_ENTER","Molim te dodaj %s ");
// %s represents file name
define("_MUSTWABLE","Podatak %s mora na Serveru biti odobren za pisanje!");
// Module info
define('_PREFERENCES','Pode&scaron;avanja');
define("_VERSION","Verzija");
define("_DESCRIPTION","Opis");
define("_AUTHOR","Autor");
define("_CREDITS","Krediti");
define("_LICENCE","Licenca");
define("_ERRORS","Gre&scaron;ka");
define("_NONE","Nema");
define('_ON','dana');
define('_READS','x &#269;itano');
define('_WELCOMETO','Dobrodo&scaron;li na %s');
define('_SEARCH','Tra&#382;i');
define('_ALL','Sve');
define('_TITLE','Naslov');
define('_OPTIONS','Opcije');
define('_QUOTE','Citat');
define('_LIST','Lista');
define('_LOGIN','Uloguj se');
define('_USERNAME','Nik ime: ');
define('_PASSWORD','Lozinka: ');
define("_SELECT","Izaberi");
define("_IMAGE","Slika");
define("_SEND","Po&scaron;alji");
define("_CANCEL","Odustani");
define("_ASCENDING","Redoslijed novih");
define("_DESCENDING","Redoslijed starijih");
define('_BACK','Nazad');
define('_NOTITLE','Nema Naslova'); //added2.0.5

/* Image manager */
define('_IMGMANAGER','Menadzer slika');
define('_NUMIMAGES','%s slika');
define('_ADDIMAGE','Sliku dodaj');
define('_IMAGENAME','Naziv:');
define('_IMGMAXSIZE','maximalna veli&#269;ina (u Kb):');
define('_IMGMAXWIDTH','maximalna &scaron;irina (u Pixelima):');
define('_IMGMAXHEIGHT','maximalna visina (u Pixelima):');
define('_IMAGECAT','Kategorija:');
define('_IMAGEFILE','Vrsta slike:');
define('_IMGWEIGHT','Redoslijed u Menadzeru slika prika&#382;i:');
define('_IMGDISPLAY','Ovu sliku prika&#382;i?');
define('_IMAGEMIME','MIME-Typ:');
define('_FAILFETCHIMG','Poslata slika %s se nemo&#382;e iz Baze podataka prikazati');
define('_FAILSAVEIMG','Slika %s se nemo&#382;e u Bazu podataka dodati');
define('_NOCACHE','Nema Cache');
define('_CLONE','Kloniraj');

//%%%%%        File Name class/xoopsform/formmatchoption.php         %%%%%
define("_STARTSWITH","Po&#269;inje sa");
define("_ENDSWITH","Zavr&scaron;ava sa");
define("_MATCHES","Suglasno");
define("_CONTAINS","Sadr&#382;i");

//%%%%%%        File Name commentform.php         %%%%%
define("_REGISTER","Registriraj se");

//%%%%%%        File Name xoopscodes.php         %%%%%
define("_SIZE","Velicina");  // font size
define("_FONT","Vrsta slova");  // font family
define("_COLOR","Farba");  // font color
define("_EXAMPLE","Naprimjer");
define("_ENTERURL","Upisi URL od Linka, kojeg zelis dodati:");
define("_ENTERWEBTITLE","Upisi Web stranice naslov:");
define("_ENTERIMGURL","Upisi URL od Slike, koju zelis dodati.");
define("_ENTERIMGPOS","Sada upisi poziciju Slike.");
define("_IMGPOSRORL","'R' ili 'r' za desno, 'L' ili 'l' za lijevo, ili ostavi prazno.");
define("_ERRORIMGPOS","Greska! Upisi poziciju slike.");
define("_ENTEREMAIL","Upisi E-Mail-Adresu, koju zelis dodati.");
define("_ENTERCODE","Upisi Code , kojeg zelis dodati.");
define("_ENTERQUOTE","Upisi Tekst, kojeg zelis Citirati.");
define("_ENTERTEXTBOX","Molim te upisi tekst u polje teksta.");
define("_ALLOWEDCHAR","Dozvoljena maximalna duzina teksta je: ");
define("_CURRCHAR","Momentalna duzina teksta: ");
define("_PLZCOMPLETE","Molim te ispuni sva zahtjevna polja.");
define("_MESSAGETOOLONG","Tvoj post je predugacak.");

//%%%%%                TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 Sekunda');
define('_SECONDS','%s Sekundi');
define('_MINUTE','1 Minuta');
define('_MINUTES','%s Minuti');
define('_HOUR','1 Sat');
define('_HOURS','%s Sati');
define('_DAY','1 Dan');
define('_DAYS','%s Dana');
define('_WEEK','1 Sedmica');
define('_MONTH','1 Mjesec');

define("_DATESTRING","d.m.Y H:i");
define("_MEDIUMDATESTRING","d.m.Y H:i");
define("_SHORTDATESTRING","d.m.Y");
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
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%                LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','ISO-8859-2');
define('_LANGCODE','ba');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");
?>