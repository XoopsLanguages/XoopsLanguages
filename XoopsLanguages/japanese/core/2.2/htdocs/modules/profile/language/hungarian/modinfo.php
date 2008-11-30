<?php
// $Id: modinfo.php,v 1.1.2.13 2005/07/05 17:33:07 mithyt2 Exp $
define("_PROFILE_MI_NAME", "Kiterjesztett profilok");
define("_PROFILE_MI_DESC", "Modul az egyéni felhasználói profil mezõk kezelésére");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT", "Hozzáférés szerkesztése");
define("_PROFILE_MI_CHANGEPASS", "Jelszó cseréje");
define("_PROFILE_MI_CHANGEMAIL", "E-mail cím cseréje");

//Admin links
define("_PROFILE_MI_INDEX", "Kezdõ");
define("_PROFILE_MI_CATEGORIES", "Kategóriák");
define("_PROFILE_MI_FIELDS", "Mezõk");
define("_PROFILE_MI_USERS", "Felhasználók");
define("_PROFILE_MI_PERMISSIONS", "Jogosultságok");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE", "Felhasználói profil");
define("_PROFILE_MI_CATEGORY_DESC", "Azon felhasználói mezõknek");

//User Profile Fields
define("_PROFILE_MI_AIM_TITLE", "AIM");
define("_PROFILE_MI_AIM_DESCRIPTION", "America Online Instant Messenger Kliens azonosító");
define("_PROFILE_MI_ICQ_TITLE", "ICQ");
define("_PROFILE_MI_ICQ_DESCRIPTION", "ICQ azonosító");
define("_PROFILE_MI_YIM_TITLE", "YIM");
define("_PROFILE_MI_YIM_DESCRIPTION", "Yahoo! Instant Messenger azonosító");
define("_PROFILE_MI_MSN_TITLE", "MSN");
define("_PROFILE_MI_MSN_DESCRIPTION", "Microsoft Messenger azonosító (MSN cím)");
define("_PROFILE_MI_FROM_TITLE", "Lakhely");
define("_PROFILE_MI_FROM_DESCRIPTION", "A település neve, ahol élsz");
define("_PROFILE_MI_SIG_TITLE", "Aláírás");
define("_PROFILE_MI_SIG_DESCRIPTION", "Itt megadhatsz egy aláírást, ami szerepelhet a fórum hozzászólásaidban, megjegyzéseidben, stb.");
define("_PROFILE_MI_VIEWEMAIL_TITLE", "Más felhasználók láthatják az e-mail címedet?");
define("_PROFILE_MI_BIO_TITLE", "Egyéb Infó");
define("_PROFILE_MI_BIO_DESCRIPTION", "Egyéb információk");
define("_PROFILE_MI_INTEREST_TITLE", "Érdeklõdési kör");
define("_PROFILE_MI_INTEREST_DESCRIPTION", "");
define("_PROFILE_MI_OCCUPATION_TITLE", "Foglalkozás");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION", "");
define("_PROFILE_MI_URL_TITLE", "Weboldal");
define("_PROFILE_MI_URL_DESCRIPTION", "");
define("_PROFILE_MI_NEWEMAIL_TITLE", "Új e-mail");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION", "Változó az új e-mail cím tárolására, amíg a régi címrõl nem érkezik megerõsítés. Nézd meg a modules/profile/changemail.php -t");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS", "Általános beállítások");
define("_PROFILE_MI_CAT_SETTINGS_DSC", "");
define("_PROFILE_MI_CAT_USER", "Felhasználói beállítások");
define("_PROFILE_MI_CAT_USER_DSC", "");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH", "A felhasználó által Legutobb beküldött dolgok megjelenítése a profilban");
define("_PROFILE_MI_MAX_UNAME", "A felhasználónév maximális hossza");
define("_PROFILE_MI_MAX_UNAME_DESC", "Ez meghatározza a felhasználónévben felhasználható karakterek maximális számát");
define("_PROFILE_MI_MIN_UNAME", "A felhasználónév minimális hossza");
define("_PROFILE_MI_MIN_UNAME_DESC", "Ez meghatározza a felhasználónevek minimális hosszát");
define("_PROFILE_MI_DISPLAY_DISCLAIMER", "Jogi nyilatkozat megjelenítése");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC", "Bekapcsolt állapotban a jogi nyilatkozat megjelenik a regisztrációs ûrlapon.");
define("_PROFILE_MI_DISCLAIMER", "Jogi nyilatkozat szövege");
define("_PROFILE_MI_DISCLAIMER_DESC", "Ez a szöveg fog megjelenni a regisztrációs ûrlapon, ha bekapcsoltad.");
define("_PROFILE_MI_BAD_UNAMES", "Add meg azokat a neveket, melyek nem szerepelhetnek a felhasználónévben valamint a megjelenített névben.");
define("_PROFILE_MI_BAD_UNAMES_DESC", "Válaszd el õket <b>|</b> jelekkel, regex bekapcsolva.");
define("_PROFILE_MI_BAD_EMAILS", "Add meg a nem használható E-mail címeket");
define("_PROFILE_MI_BAD_EMAILS_DESC", "Válaszd el õket <b>|</b> jelekkel, regex bekapcsolva.");
define("_PROFILE_MI_MINPASS", "Minimális jelszó hosszúság");
define("_PROFILE_MI_NEWUNOTIFY", "E-mail értesítés küldése ha új felhasználó regisztrál?");
define("_PROFILE_MI_NOTIFYTO", "Válaszd ki az értesítést megkapó csoportot");
define("_PROFILE_MI_ACTVTYPE", "Válaszd ki az újonnan regisztrált felhasználók aktiválási módját");
define("_PROFILE_MI_USERACTV","Felhasználó általi aktiválás szükséges (ajánlott)");
define("_PROFILE_MI_AUTOACTV","Automatikus aktiválás");
define("_PROFILE_MI_ADMINACTV","Adminisztrátorok általi aktiválás");
define("_PROFILE_MI_ACTVGROUP", "Válaszd ki a csoportot, amelyiknek az aktivációs levél el lesz küldve.");
define("_PROFILE_MI_ACTVGROUP_DESC", "Csak akkor érvényes, ha az 'Adminisztrátorok általi aktiválás' van kiválaszva");
define("_PROFILE_MI_UNAMELVL","Felhasználónév szûrés szigorúsági szintje");
define("_PROFILE_MI_STRICT","Szigorú (csak betûk és számok)");
define("_PROFILE_MI_MEDIUM","Közepes");
define("_PROFILE_MI_LIGHT","Gyenge (multi-bájt karakterekhez ajánlott)");
define("_PROFILE_MI_ALLOWREG", "Engedélyezed az új felhasználói regisztrációkat?");
define("_PROFILE_MI_ALLOWREG_DESC", "Válaszd az igent a regisztráció engedélyezéséhez");
define("_PROFILE_MI_AVATARALLOW", "Engedélyezed az egyéni avatarok feltöltését?");
define("_PROFILE_MI_AVATARALLOW_DESC", "");
define("_PROFILE_MI_AVATARWIDTH", "Avatar kép maximális szélessége (pixel)");
define("_PROFILE_MI_AVATARWIDTH_DESC", "");
define("_PROFILE_MI_AVATARHEIGHT", "Avatar kép maximális magassága (pixel)");
define("_PROFILE_MI_AVATARHEIGHT_DESC", "");
define("_PROFILE_MI_AVATARMAX", "Avatar kép maximális fájlmérete (bájt)");
define("_PROFILE_MI_AVATARMAX_DESC", "");
define("_PROFILE_MI_SELFDELETE", "A felhasználók törölhetik a hozzáférésüket?");
define("_PROFILE_MI_SELFDELETE_DESC", "");
define("_PROFILE_MI_AVATARMINPOSTS", "Minimálisan szükséges hozzászólások száma");
define("_PROFILE_MI_AVATARMINPOSTS_DESC", "Add meg az egyéni avatar feltöltéshez szükséges hozzászólások minimális számát");
define("_PROFILE_MI_ALLOWCHGMAIL", "A felhasználók megváltoztathatják az e-mail címüket?");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC", "");
define("_PROFILE_MI_ALLOWVIEWACC", "Hozzáférés megtekintésének engedélyezése");
define("_PROFILE_MI_ALLOWVIEWACC_DESC", "Az egyedülálló mezõk láthatóságát a mezõk adminisztrációjában lehet beállítani,<br />de ha szeretnéd engedélyezni a hozzáférést más felhasználók hozzáféréséhez kizárólag bizonyos csoportok számára,<br /> miközben továbbra is lehet új felhasználókat regisztrálni,<br /> válaszd ki a csoportokat itt");

//Pages
define("_PROFILE_MI_PAGE_INFO", "Felhasználó info");
define("_PROFILE_MI_PAGE_EDIT", "Felhasználó szerkesztése");
define("_PROFILE_MI_PAGE_SEARCH", "Keresés");
?>