<?php
// $Id: admin.php,v 1.1.2.12 2005/06/25 18:58:20 mithyt2 Exp $
define("_PROFILE_AM_FIELD", "Mez�");
define("_PROFILE_AM_FIELDS", "Mez�k");
define("_PROFILE_AM_CATEGORY", "Kateg�ria");

define("_PROFILE_AM_SAVEDSUCCESS", "%s Sikeresen elmentve");
define("_PROFILE_AM_DELETEDSUCCESS", "%s Sikeresen t�r�lve");
define("_PROFILE_AM_RUSUREDEL", "Biztosan t�r�lni akarod %s");

define("_PROFILE_AM_ADD", "Hozz�ad");
define("_PROFILE_AM_EDIT", "Szerkeszt");
define("_PROFILE_AM_TYPE", "Mez� tipus");
define("_PROFILE_AM_VALUETYPE", "�rt�k tipus");
define("_PROFILE_AM_NAME", "N�v");
define("_PROFILE_AM_TITLE", "Felirat");
define("_PROFILE_AM_DESCRIPTION", "Le�r�s");
define("_PROFILE_AM_REQUIRED", "K�telez�?");
define("_PROFILE_AM_MAXLENGTH", "Maximum hossz�s�g");
define("_PROFILE_AM_WEIGHT", "S�ly");
define("_PROFILE_AM_DEFAULT", "Alap�rtelmezett");
define("_PROFILE_AM_NOTNULL", "Nem �res?");
define("_PROFILE_AM_MODULE", "Modul");

define("_PROFILE_AM_ARRAY", "T�mb");
define("_PROFILE_AM_EMAIL", "E-mail");
define("_PROFILE_AM_INT", "Eg�sz sz�m");
define("_PROFILE_AM_TXTAREA", "Sz�vegdoboz (Text Area)");
define("_PROFILE_AM_TXTBOX", "Sz�vegmez� (Text field)");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "M�s");

define("_PROFILE_AM_PROF_VISIBLE_ON", "A mez� az al�bbi csoportok profilj�ban l�tszik");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "A mez� az al�bbi csoportok r�sz�re l�that� a profilban");
define("_PROFILE_AM_PROF_EDITABLE", "A mez� szerkeszthet� a profilb�l");
define("_PROFILE_AM_PROF_REGISTER", "Megjelen�t�s a regisztr�ci�s �rlapban");
define("_PROFILE_AM_PROF_SEARCH", "Kereshet� az al�bbi csoportok �ltal");

define("_PROFILE_AM_CHECKBOX", "Jel�l�n�gyzet (Checkbox)");
define("_PROFILE_AM_GROUP", "Csoport v�laszt� (Group Select)");
define("_PROFILE_AM_GROUPMULTI", "T�bb csoport v�laszt� (Group Multi Select)");
define("_PROFILE_AM_LANGUAGE", "Nyelv v�laszt� (Language Select)");
define("_PROFILE_AM_RADIO", "V�laszt� gombok (Radio Buttons)");
define("_PROFILE_AM_SELECT", "Kiv�laszt� (Select)");
define("_PROFILE_AM_SELECTMULTI", "T�bb kiv�laszt� (Multi Select)");
define("_PROFILE_AM_TEXTAREA", "Sz�vegdoboz (Text Area)");
define("_PROFILE_AM_DHTMLTEXTAREA", "DHTML sz�vegdoboz (DHTML Text Area)");
define("_PROFILE_AM_TEXTBOX", "Sz�vegmez� (Text Field)");
define("_PROFILE_AM_TIMEZONE", "Id�z�na");
define("_PROFILE_AM_YESNO", "V�laszt� Igen/Nem");
define("_PROFILE_AM_DATE", "D�tum");
define("_PROFILE_AM_AUTOTEXT", "Automata sz�veg");
define("_PROFILE_AM_DATETIME", "D�tum �s id�");
define("_PROFILE_AM_LONGDATE", "Hossz� d�tum");

define("_PROFILE_AM_ADDOPTION", "Opci� hozz�ad�sa");
define("_PROFILE_AM_REMOVEOPTIONS", "Opci�k elt�vol�t�sa");
define("_PROFILE_AM_KEY", "Kulcs");
define("_PROFILE_AM_VALUE", "�rt�k");

// User management
define("_PROFILE_AM_EDITUSER", "Felhaszn�l� szerkeszt�se");
define("_PROFILE_AM_SELECTUSER", "Felhaszn�l� kiv�laszt�sa");
define("_PROFILE_AM_AYSYWTDU","Biztosan t�r�lni akarod a felhaszn�l�t: %s?");
define("_PROFILE_AM_BYTHIS","Ezzel a felhaszn�l�hoz tartoz� �sszes inform�ci� v�glegesen t�r�lve lesz!");
define("_PROFILE_AM_YMCACF","Ki kell t�lteni minden k�telez� mez�t!");
define("_PROFILE_AM_CNRNU","Nem lehet �j felhaszn�l�t regisztr�lni.");
define("_PROFILE_AM_EDEUSER","Felhaszn�l�k szerkeszt�se/t�rl�se");
define("_PROFILE_AM_NICKNAME","Becen�v (Nick n�v)");
define("_PROFILE_AM_MODIFYUSER","Felhaszn�l� m�dos�t�sa");
define("_PROFILE_AM_DELUSER","Felhaszn�l� t�rl�se");
define("_PROFILE_AM_GO","Mehet!");
define("_PROFILE_AM_ADDUSER","Felhaszn�l� hozz�ad�sa");
define("_PROFILE_AM_OPTION","Opci�");
define("_PROFILE_AM_AVATAR","Avatar");
define("_PROFILE_AM_THEME","Kim�zet");
define("_PROFILE_AM_AOUTVTEAD","M�s felhaszn�l�k l�thatj�k ezt az e-mail c�met?");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_NSRA","Nincs hozz�rendelt speci�lis rang");
define("_PROFILE_AM_NSRID","Nincs speci�lis rank az adatb�zisban");
define("_PROFILE_AM_ACCESSLEV","Hozz�f�r�si szint");
define("_PROFILE_AM_PASSWORD","jelsz�");
define("_PROFILE_AM_INDICATECOF","* az ezzel jel�lt mez�k kit�lt�se k�telez�");
define("_PROFILE_AM_NOTACTIVE","Ez a felhaszn�l� nem lett aktiv�lva. Szeretn�d aktiv�lni?");
define("_PROFILE_AM_UPDATEUSER","Felhaszn�l� friss�t�se");
define("_PROFILE_AM_USERINFO","Felhaszn�l� inform�ci�");
define("_PROFILE_AM_USERID","Felhaszn�l� ID");
define("_PROFILE_AM_RETYPEPD","Jelsz� ism�t");
define("_PROFILE_AM_CHANGEONLY","(csak a v�ltoztat�s�hoz)");
define("_PROFILE_AM_USERPOST","Felhaszn�l� hozz�sz�l�sai");
define("_PROFILE_AM_COMMENTS","Megjegyz�sel");
define("_PROFILE_AM_PTBBTSDIYT","Kattints a gombra az adatok szinkroniz�l�s�hoz, ha �gy gondolod, hogy a fenti felhaszn�l� hozz�sz�l�si inform�ci�k nem a jelenlegi �llapotokat mutatja.");
define("_PROFILE_AM_SYNCHRONIZE","Szinkroniz�l�s");
define("_PROFILE_AM_USERDONEXIT","Nincs ilyen felhaszn�l�!");
define("_PROFILE_AM_STNPDNM","Sajn�lom, az �j jelszavak nem egyeznek. Menj vissza �s pr�b�ldd �jra.");
define("_PROFILE_AM_CNGTCOM","Nem lehet lek�rni az �sszes hozz�sz�l�st");
define("_PROFILE_AM_CNUUSER","Nem siker�lt a felhaszn�l� friss�t�se");
define("_PROFILE_AM_CNGUSERID","Nem lehet lek�rni a felhaszn�l� ID-ket");
define("_PROFILE_AM_LIST","List�z�s");
define("_PROFILE_AM_NOUSERS", "Nincs felhaszn�l� kiv�lasztva");
define("_PROFILE_MA_ACTIVEUSER", "Felhaszn�l� szint");

define("_PROFILE_MA_ACTIVE", "Akt�v");
define("_PROFILE_MA_INACTIVE", "Inakt�v");
define("_PROFILE_MA_DISABLED", "Kikapcsolt");
define("_PROFILE_MA_USERDISABLED", "Ez a hozz�f�r�s ki van kapcsolva �s nem aktiv�lhat� a felhaszn�l� �ltal");

define("_PROFILE_AM_NOUSERNAME", "Nincs felhaszn�l�n�v kiv�lasztva");
define("_PROFILE_AM_USERCREATED", "Felhaszn�l� l�trehozva");
?>