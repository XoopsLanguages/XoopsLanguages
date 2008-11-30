<?php
// $Id: admin.php,v 1.1.2.12 2005/06/25 18:58:20 mithyt2 Exp $
define("_PROFILE_AM_FIELD", "Mezõ");
define("_PROFILE_AM_FIELDS", "Mezõk");
define("_PROFILE_AM_CATEGORY", "Kategória");

define("_PROFILE_AM_SAVEDSUCCESS", "%s Sikeresen elmentve");
define("_PROFILE_AM_DELETEDSUCCESS", "%s Sikeresen törölve");
define("_PROFILE_AM_RUSUREDEL", "Biztosan törölni akarod %s");

define("_PROFILE_AM_ADD", "Hozzáad");
define("_PROFILE_AM_EDIT", "Szerkeszt");
define("_PROFILE_AM_TYPE", "Mezõ tipus");
define("_PROFILE_AM_VALUETYPE", "Érték tipus");
define("_PROFILE_AM_NAME", "Név");
define("_PROFILE_AM_TITLE", "Felirat");
define("_PROFILE_AM_DESCRIPTION", "Leírás");
define("_PROFILE_AM_REQUIRED", "Kötelezõ?");
define("_PROFILE_AM_MAXLENGTH", "Maximum hosszúság");
define("_PROFILE_AM_WEIGHT", "Súly");
define("_PROFILE_AM_DEFAULT", "Alapértelmezett");
define("_PROFILE_AM_NOTNULL", "Nem üres?");
define("_PROFILE_AM_MODULE", "Modul");

define("_PROFILE_AM_ARRAY", "Tömb");
define("_PROFILE_AM_EMAIL", "E-mail");
define("_PROFILE_AM_INT", "Egész szám");
define("_PROFILE_AM_TXTAREA", "Szövegdoboz (Text Area)");
define("_PROFILE_AM_TXTBOX", "Szövegmezõ (Text field)");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "Más");

define("_PROFILE_AM_PROF_VISIBLE_ON", "A mezõ az alábbi csoportok profiljában látszik");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "A mezõ az alábbi csoportok részére látható a profilban");
define("_PROFILE_AM_PROF_EDITABLE", "A mezõ szerkeszthetõ a profilból");
define("_PROFILE_AM_PROF_REGISTER", "Megjelenítés a regisztrációs ûrlapban");
define("_PROFILE_AM_PROF_SEARCH", "Kereshetõ az alábbi csoportok által");

define("_PROFILE_AM_CHECKBOX", "Jelölõnégyzet (Checkbox)");
define("_PROFILE_AM_GROUP", "Csoport választó (Group Select)");
define("_PROFILE_AM_GROUPMULTI", "Több csoport választó (Group Multi Select)");
define("_PROFILE_AM_LANGUAGE", "Nyelv választó (Language Select)");
define("_PROFILE_AM_RADIO", "Választó gombok (Radio Buttons)");
define("_PROFILE_AM_SELECT", "Kiválasztó (Select)");
define("_PROFILE_AM_SELECTMULTI", "Több kiválasztó (Multi Select)");
define("_PROFILE_AM_TEXTAREA", "Szövegdoboz (Text Area)");
define("_PROFILE_AM_DHTMLTEXTAREA", "DHTML szövegdoboz (DHTML Text Area)");
define("_PROFILE_AM_TEXTBOX", "Szövegmezõ (Text Field)");
define("_PROFILE_AM_TIMEZONE", "Idõzóna");
define("_PROFILE_AM_YESNO", "Választó Igen/Nem");
define("_PROFILE_AM_DATE", "Dátum");
define("_PROFILE_AM_AUTOTEXT", "Automata szöveg");
define("_PROFILE_AM_DATETIME", "Dátum és idõ");
define("_PROFILE_AM_LONGDATE", "Hosszú dátum");

define("_PROFILE_AM_ADDOPTION", "Opció hozzáadása");
define("_PROFILE_AM_REMOVEOPTIONS", "Opciók eltávolítása");
define("_PROFILE_AM_KEY", "Kulcs");
define("_PROFILE_AM_VALUE", "Érték");

// User management
define("_PROFILE_AM_EDITUSER", "Felhasználó szerkesztése");
define("_PROFILE_AM_SELECTUSER", "Felhasználó kiválasztása");
define("_PROFILE_AM_AYSYWTDU","Biztosan törölni akarod a felhasználót: %s?");
define("_PROFILE_AM_BYTHIS","Ezzel a felhasználóhoz tartozó összes információ véglegesen törölve lesz!");
define("_PROFILE_AM_YMCACF","Ki kell tölteni minden kötelezõ mezõt!");
define("_PROFILE_AM_CNRNU","Nem lehet új felhasználót regisztrálni.");
define("_PROFILE_AM_EDEUSER","Felhasználók szerkesztése/törlése");
define("_PROFILE_AM_NICKNAME","Becenév (Nick név)");
define("_PROFILE_AM_MODIFYUSER","Felhasználó módosítása");
define("_PROFILE_AM_DELUSER","Felhasználó törlése");
define("_PROFILE_AM_GO","Mehet!");
define("_PROFILE_AM_ADDUSER","Felhasználó hozzáadása");
define("_PROFILE_AM_OPTION","Opció");
define("_PROFILE_AM_AVATAR","Avatar");
define("_PROFILE_AM_THEME","Kimézet");
define("_PROFILE_AM_AOUTVTEAD","Más felhasználók láthatják ezt az e-mail címet?");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_NSRA","Nincs hozzárendelt speciális rang");
define("_PROFILE_AM_NSRID","Nincs speciális rank az adatbázisban");
define("_PROFILE_AM_ACCESSLEV","Hozzáférési szint");
define("_PROFILE_AM_PASSWORD","jelszó");
define("_PROFILE_AM_INDICATECOF","* az ezzel jelölt mezõk kitöltése kötelezõ");
define("_PROFILE_AM_NOTACTIVE","Ez a felhasználó nem lett aktiválva. Szeretnéd aktiválni?");
define("_PROFILE_AM_UPDATEUSER","Felhasználó frissítése");
define("_PROFILE_AM_USERINFO","Felhasználó információ");
define("_PROFILE_AM_USERID","Felhasználó ID");
define("_PROFILE_AM_RETYPEPD","Jelszó ismét");
define("_PROFILE_AM_CHANGEONLY","(csak a változtatásához)");
define("_PROFILE_AM_USERPOST","Felhasználó hozzászólásai");
define("_PROFILE_AM_COMMENTS","Megjegyzésel");
define("_PROFILE_AM_PTBBTSDIYT","Kattints a gombra az adatok szinkronizálásához, ha úgy gondolod, hogy a fenti felhasználó hozzászólási információk nem a jelenlegi állapotokat mutatja.");
define("_PROFILE_AM_SYNCHRONIZE","Szinkronizálás");
define("_PROFILE_AM_USERDONEXIT","Nincs ilyen felhasználó!");
define("_PROFILE_AM_STNPDNM","Sajnálom, az új jelszavak nem egyeznek. Menj vissza és próbáldd újra.");
define("_PROFILE_AM_CNGTCOM","Nem lehet lekérni az összes hozzászólást");
define("_PROFILE_AM_CNUUSER","Nem sikerült a felhasználó frissítése");
define("_PROFILE_AM_CNGUSERID","Nem lehet lekérni a felhasználó ID-ket");
define("_PROFILE_AM_LIST","Listázás");
define("_PROFILE_AM_NOUSERS", "Nincs felhasználó kiválasztva");
define("_PROFILE_MA_ACTIVEUSER", "Felhasználó szint");

define("_PROFILE_MA_ACTIVE", "Aktív");
define("_PROFILE_MA_INACTIVE", "Inaktív");
define("_PROFILE_MA_DISABLED", "Kikapcsolt");
define("_PROFILE_MA_USERDISABLED", "Ez a hozzáférés ki van kapcsolva és nem aktiválható a felhasználó által");

define("_PROFILE_AM_NOUSERNAME", "Nincs felhasználónév kiválasztva");
define("_PROFILE_AM_USERCREATED", "Felhasználó létrehozva");
?>