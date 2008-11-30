<?php
// $Id: modinfo.php,v 1.1.2.13 2005/07/05 17:33:07 mithyt2 Exp $
define("_PROFILE_MI_NAME", "Kiterjesztett profilok");
define("_PROFILE_MI_DESC", "Modul az egy�ni felhaszn�l�i profil mez�k kezel�s�re");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT", "Hozz�f�r�s szerkeszt�se");
define("_PROFILE_MI_CHANGEPASS", "Jelsz� cser�je");
define("_PROFILE_MI_CHANGEMAIL", "E-mail c�m cser�je");

//Admin links
define("_PROFILE_MI_INDEX", "Kezd�");
define("_PROFILE_MI_CATEGORIES", "Kateg�ri�k");
define("_PROFILE_MI_FIELDS", "Mez�k");
define("_PROFILE_MI_USERS", "Felhaszn�l�k");
define("_PROFILE_MI_PERMISSIONS", "Jogosults�gok");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE", "Felhaszn�l�i profil");
define("_PROFILE_MI_CATEGORY_DESC", "Azon felhaszn�l�i mez�knek");

//User Profile Fields
define("_PROFILE_MI_AIM_TITLE", "AIM");
define("_PROFILE_MI_AIM_DESCRIPTION", "America Online Instant Messenger Kliens azonos�t�");
define("_PROFILE_MI_ICQ_TITLE", "ICQ");
define("_PROFILE_MI_ICQ_DESCRIPTION", "ICQ azonos�t�");
define("_PROFILE_MI_YIM_TITLE", "YIM");
define("_PROFILE_MI_YIM_DESCRIPTION", "Yahoo! Instant Messenger azonos�t�");
define("_PROFILE_MI_MSN_TITLE", "MSN");
define("_PROFILE_MI_MSN_DESCRIPTION", "Microsoft Messenger azonos�t� (MSN c�m)");
define("_PROFILE_MI_FROM_TITLE", "Lakhely");
define("_PROFILE_MI_FROM_DESCRIPTION", "A telep�l�s neve, ahol �lsz");
define("_PROFILE_MI_SIG_TITLE", "Al��r�s");
define("_PROFILE_MI_SIG_DESCRIPTION", "Itt megadhatsz egy al��r�st, ami szerepelhet a f�rum hozz�sz�l�saidban, megjegyz�seidben, stb.");
define("_PROFILE_MI_VIEWEMAIL_TITLE", "M�s felhaszn�l�k l�thatj�k az e-mail c�medet?");
define("_PROFILE_MI_BIO_TITLE", "Egy�b Inf�");
define("_PROFILE_MI_BIO_DESCRIPTION", "Egy�b inform�ci�k");
define("_PROFILE_MI_INTEREST_TITLE", "�rdekl�d�si k�r");
define("_PROFILE_MI_INTEREST_DESCRIPTION", "");
define("_PROFILE_MI_OCCUPATION_TITLE", "Foglalkoz�s");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION", "");
define("_PROFILE_MI_URL_TITLE", "Weboldal");
define("_PROFILE_MI_URL_DESCRIPTION", "");
define("_PROFILE_MI_NEWEMAIL_TITLE", "�j e-mail");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION", "V�ltoz� az �j e-mail c�m t�rol�s�ra, am�g a r�gi c�mr�l nem �rkezik meger�s�t�s. N�zd meg a modules/profile/changemail.php -t");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS", "�ltal�nos be�ll�t�sok");
define("_PROFILE_MI_CAT_SETTINGS_DSC", "");
define("_PROFILE_MI_CAT_USER", "Felhaszn�l�i be�ll�t�sok");
define("_PROFILE_MI_CAT_USER_DSC", "");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH", "A felhaszn�l� �ltal Legutobb bek�ld�tt dolgok megjelen�t�se a profilban");
define("_PROFILE_MI_MAX_UNAME", "A felhaszn�l�n�v maxim�lis hossza");
define("_PROFILE_MI_MAX_UNAME_DESC", "Ez meghat�rozza a felhaszn�l�n�vben felhaszn�lhat� karakterek maxim�lis sz�m�t");
define("_PROFILE_MI_MIN_UNAME", "A felhaszn�l�n�v minim�lis hossza");
define("_PROFILE_MI_MIN_UNAME_DESC", "Ez meghat�rozza a felhaszn�l�nevek minim�lis hossz�t");
define("_PROFILE_MI_DISPLAY_DISCLAIMER", "Jogi nyilatkozat megjelen�t�se");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC", "Bekapcsolt �llapotban a jogi nyilatkozat megjelenik a regisztr�ci�s �rlapon.");
define("_PROFILE_MI_DISCLAIMER", "Jogi nyilatkozat sz�vege");
define("_PROFILE_MI_DISCLAIMER_DESC", "Ez a sz�veg fog megjelenni a regisztr�ci�s �rlapon, ha bekapcsoltad.");
define("_PROFILE_MI_BAD_UNAMES", "Add meg azokat a neveket, melyek nem szerepelhetnek a felhaszn�l�n�vben valamint a megjelen�tett n�vben.");
define("_PROFILE_MI_BAD_UNAMES_DESC", "V�laszd el �ket <b>|</b> jelekkel, regex bekapcsolva.");
define("_PROFILE_MI_BAD_EMAILS", "Add meg a nem haszn�lhat� E-mail c�meket");
define("_PROFILE_MI_BAD_EMAILS_DESC", "V�laszd el �ket <b>|</b> jelekkel, regex bekapcsolva.");
define("_PROFILE_MI_MINPASS", "Minim�lis jelsz� hossz�s�g");
define("_PROFILE_MI_NEWUNOTIFY", "E-mail �rtes�t�s k�ld�se ha �j felhaszn�l� regisztr�l?");
define("_PROFILE_MI_NOTIFYTO", "V�laszd ki az �rtes�t�st megkap� csoportot");
define("_PROFILE_MI_ACTVTYPE", "V�laszd ki az �jonnan regisztr�lt felhaszn�l�k aktiv�l�si m�dj�t");
define("_PROFILE_MI_USERACTV","Felhaszn�l� �ltali aktiv�l�s sz�ks�ges (aj�nlott)");
define("_PROFILE_MI_AUTOACTV","Automatikus aktiv�l�s");
define("_PROFILE_MI_ADMINACTV","Adminisztr�torok �ltali aktiv�l�s");
define("_PROFILE_MI_ACTVGROUP", "V�laszd ki a csoportot, amelyiknek az aktiv�ci�s lev�l el lesz k�ldve.");
define("_PROFILE_MI_ACTVGROUP_DESC", "Csak akkor �rv�nyes, ha az 'Adminisztr�torok �ltali aktiv�l�s' van kiv�laszva");
define("_PROFILE_MI_UNAMELVL","Felhaszn�l�n�v sz�r�s szigor�s�gi szintje");
define("_PROFILE_MI_STRICT","Szigor� (csak bet�k �s sz�mok)");
define("_PROFILE_MI_MEDIUM","K�zepes");
define("_PROFILE_MI_LIGHT","Gyenge (multi-b�jt karakterekhez aj�nlott)");
define("_PROFILE_MI_ALLOWREG", "Enged�lyezed az �j felhaszn�l�i regisztr�ci�kat?");
define("_PROFILE_MI_ALLOWREG_DESC", "V�laszd az igent a regisztr�ci� enged�lyez�s�hez");
define("_PROFILE_MI_AVATARALLOW", "Enged�lyezed az egy�ni avatarok felt�lt�s�t?");
define("_PROFILE_MI_AVATARALLOW_DESC", "");
define("_PROFILE_MI_AVATARWIDTH", "Avatar k�p maxim�lis sz�less�ge (pixel)");
define("_PROFILE_MI_AVATARWIDTH_DESC", "");
define("_PROFILE_MI_AVATARHEIGHT", "Avatar k�p maxim�lis magass�ga (pixel)");
define("_PROFILE_MI_AVATARHEIGHT_DESC", "");
define("_PROFILE_MI_AVATARMAX", "Avatar k�p maxim�lis f�jlm�rete (b�jt)");
define("_PROFILE_MI_AVATARMAX_DESC", "");
define("_PROFILE_MI_SELFDELETE", "A felhaszn�l�k t�r�lhetik a hozz�f�r�s�ket?");
define("_PROFILE_MI_SELFDELETE_DESC", "");
define("_PROFILE_MI_AVATARMINPOSTS", "Minim�lisan sz�ks�ges hozz�sz�l�sok sz�ma");
define("_PROFILE_MI_AVATARMINPOSTS_DESC", "Add meg az egy�ni avatar felt�lt�shez sz�ks�ges hozz�sz�l�sok minim�lis sz�m�t");
define("_PROFILE_MI_ALLOWCHGMAIL", "A felhaszn�l�k megv�ltoztathatj�k az e-mail c�m�ket?");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC", "");
define("_PROFILE_MI_ALLOWVIEWACC", "Hozz�f�r�s megtekint�s�nek enged�lyez�se");
define("_PROFILE_MI_ALLOWVIEWACC_DESC", "Az egyed�l�ll� mez�k l�that�s�g�t a mez�k adminisztr�ci�j�ban lehet be�ll�tani,<br />de ha szeretn�d enged�lyezni a hozz�f�r�st m�s felhaszn�l�k hozz�f�r�s�hez kiz�r�lag bizonyos csoportok sz�m�ra,<br /> mik�zben tov�bbra is lehet �j felhaszn�l�kat regisztr�lni,<br /> v�laszd ki a csoportokat itt");

//Pages
define("_PROFILE_MI_PAGE_INFO", "Felhaszn�l� info");
define("_PROFILE_MI_PAGE_EDIT", "Felhaszn�l� szerkeszt�se");
define("_PROFILE_MI_PAGE_SEARCH", "Keres�s");
?>