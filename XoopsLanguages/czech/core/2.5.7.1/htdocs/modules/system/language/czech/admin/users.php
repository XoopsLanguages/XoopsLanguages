<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    cs
 * _CHARSET     UTF-8
 * @version     $Id: users.php 12363 2014-03-08 10:39:06Z beckmi $
 */
// Navigation
define('_AM_SYSTEM_USERS_NAV_MAIN',"Správce uživatelů");
define('_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH',"Pokročilé vyhledávání");
define('_AM_SYSTEM_USERS_NAV_ADD_USER',"Přidat uživatele");
define('_AM_SYSTEM_USERS_NAV_EDIT_USER',"Upravit uživatele");
define('_AM_SYSTEM_USERS_NAV_DELETE_USER',"Smazat uživatele");
// Tips
define('_AM_SYSTEM_USERS_NAV_TIPS',"
<ul>
<li>Spravujte uživatele webu</li>
</ul>");
// Main
define('_AM_SYSTEM_USERS_USER',"Uživatel");
define('_AM_SYSTEM_USERS_ADMIN',"Administrátor");
define('_AM_SYSTEM_USERS_UID',"IČ");
define('_AM_SYSTEM_USERS_STATUS',"Stav");
define('_AM_SYSTEM_USERS_NAME',"Jméno");
define('_AM_SYSTEM_USERS_UNAME',"Uživatelské jméno");
define('_AM_SYSTEM_USERS_EMAIL',"Email");
define('_AM_SYSTEM_USERS_EDIT_GROUPS',"Upravit skupiny");
define('_AM_SYSTEM_USERS_REG_DATE',"Datum registrace");
define('_AM_SYSTEM_USERS_LAST_LOGIN',"Poslední přihlášení");
define('_AM_SYSTEM_USERS_POSTS',"Komentářů/Příspěvků");
define('_AM_SYSTEM_USERS_LEVEL',"Level");
define('_AM_SYSTEM_USERS_ACTION',"Akce");
define('_AM_SYSTEM_USERS_FINDUS',"Najít uživatele");
define('_AM_SYSTEM_USERS_AVATAR',"Avatar");
define('_AM_SYSTEM_USERS_REALNAME',"Skutečné jméno");
define('_AM_SYSTEM_USERS_REGDATE',"Datum registrace");
define('_AM_SYSTEM_USERS_PM',"SZ");
define('_AM_SYSTEM_USERS_URL',"WWW");
define('_AM_SYSTEM_USERS_PREVIOUS',"Předchozí");
define('_AM_SYSTEM_USERS_NEXT',"Následující");
define('_AM_SYSTEM_USERS_USERSFOUND',"%s uživatelů odpovídá zadání");
define('_AM_SYSTEM_USERS_ACTUS',"Aktivních uživatelů: %s");
define('_AM_SYSTEM_USERS_INACTUS',"Neaktivních uživatelů: %s");
define('_AM_SYSTEM_USERS_NOFOUND',"Žádní uživatelé neodpovídají zadání");
define('_AM_SYSTEM_USERS_ICQ',"ICQ");
define('_AM_SYSTEM_USERS_AIM',"AIM");
define('_AM_SYSTEM_USERS_YIM',"YIM");
define('_AM_SYSTEM_USERS_FACEBOOK',"Facebook"); //TODO
define('_AM_SYSTEM_USERS_SKYPE',"Skype"); //TODO
define('_AM_SYSTEM_USERS_MSNM',"MSNM");
define('_AM_SYSTEM_USERS_TIMEZONE',"Časové pásmo");
define('_AM_SYSTEM_USERS_SHOWSIG',"Vždy připojovat můj podpis");
define('_AM_SYSTEM_USERS_CDISPLAYMODE',"Režim zobrazení komentářů");
define('_AM_SYSTEM_USERS_CSORTORDER',"Komentáže řadit podle");
define('_AM_SYSTEM_USERS_EXTRAINFO',"Rozšířené informace");
define('_AM_SYSTEM_USERS_LOCATION',"Bydliště");
define('_AM_SYSTEM_USERS_OCCUPATION',"Zaměstnání");
define('_AM_SYSTEM_USERS_INTEREST',"Zájmy");
define('_AM_SYSTEM_USERS_URLC',"WWW obsahuje");
define('_AM_SYSTEM_USERS_LOCATIONC',"Bydliště obsahuje");
define('_AM_SYSTEM_USERS_OCCUPATIONC',"Zaměstnání obsahuje");
define('_AM_SYSTEM_USERS_INTERESTC',"Zájmy obsahují");
define('_AM_SYSTEM_USERS_LASTLOGMORE',"Poslední přihlášení bylo před více než <span style='color:#ff0000;'>X</span> dny");
define('_AM_SYSTEM_USERS_LASTLOGLESS',"Poslední přihlášení bylo před méně než <span style='color:#ff0000;'>X</span> dny");
define('_AM_SYSTEM_USERS_REGMORE',"Registrace proběhla před více než <span style='color:#ff0000;'>X</span> dny");
define('_AM_SYSTEM_USERS_REGLESS',"Registrace proběhla před méně než <span style='color:#ff0000;'>X</span> dny");
define('_AM_SYSTEM_USERS_POSTSMORE',"Počet příspěvků je větší než <span style='color:#ff0000;'>X</span>");
define('_AM_SYSTEM_USERS_POSTSLESS',"Počet příspěvků je menší než <span style='color:#ff0000;'>X</span>");
define('_AM_SYSTEM_USERS_SORT',"Třídit podle");
define('_AM_SYSTEM_USERS_ORDER',"Řadit");
define('_AM_SYSTEM_USERS_LASTLOGIN',"Poslední přihlášení");
define('_AM_SYSTEM_USERS_ASC',"Vzestupně");
define('_AM_SYSTEM_USERS_DESC',"Sestupně");
define('_AM_SYSTEM_USERS_LIMIT',"Počet uživatelů na stránku");
define('_AM_SYSTEM_USERS_RESULTS',"Výsledky hledání");
define('_AM_SYSTEM_USERS_SHOWMAILOK',"Vybrat tuživatele");
define('_AM_SYSTEM_USERS_MAILOK',"Pouze ty, kteří chtějí email");
define('_AM_SYSTEM_USERS_MAILNG',"Pouze ty, kteří nechtějí email");
define('_AM_SYSTEM_USERS_SHOWTYPE',"Zobrazit uživatele");
define('_AM_SYSTEM_USERS_ACTIVE',"Pouze aktivované");
define('_AM_SYSTEM_USERS_INACTIVE',"Pouze neaktivované");
define('_AM_SYSTEM_USERS_BOTH',"Všechny");
define('_AM_SYSTEM_USERS_SENDMAIL',"Odeslat email");
define('_AM_SYSTEM_USERS_ADD2GROUP',"Přidat uživatele do skupiny %s");
define('_AM_SYSTEM_USERS_GROUPS',"Skupiny");
define('_AM_SYSTEM_USERS_ADD_GROUPS',"Přidat skupinu");
define('_AM_SYSTEM_USERS_DELETE_GROUPS',"Smazat skupinu");
define('_AM_SYSTEM_USERS_AYSYWTDU',"Myslíte to vážně? Opravdu chcete smazat uživatele %s?");
define('_AM_SYSTEM_USERS_BYTHIS',"Pokračováním smažete veškeré informace o tomto uživateli.");
define('_AM_SYSTEM_USERS_YES',"Ano");
define('_AM_SYSTEM_USERS_NO',"Ne");
define('_AM_SYSTEM_USERS_YMCACF',"Musíte zadat všechny vyžadované informace.");
define('_AM_SYSTEM_USERS_CNRNU',"CHYBA! Nemohu registrovat nového uživatele.");
define('_AM_SYSTEM_USERS_EDEUSER',"Upravit/Smazat uživatele");
define('_AM_SYSTEM_USERS_NICKNAME',"Uživatelské jméno");
define('_AM_SYSTEM_USERS_MODIFYUSER',"Upravit uživatele");
define('_AM_SYSTEM_USERS_DELUSER',"Smazat uživatele");
define('_AM_SYSTEM_USERS_GO',"Proveď");
define('_AM_SYSTEM_USERS_ADDUSER',"Přidat uživatele");
define('_AM_SYSTEM_USERS_OPTION',"Volby");
define('_AM_SYSTEM_USERS_THEME',"Vzhled");
define('_AM_SYSTEM_USERS_AOUTVTEAD',"Zobrazit email ostatním uživatelům"); // Allow other users to view this email address
define('_AM_SYSTEM_USERS_RANK',"Hodnost");
define('_AM_SYSTEM_USERS_NSRA',"Není přidělená žádná speciální hodnost");
define('_AM_SYSTEM_USERS_NSRID',"V databázi nejsou žádné speciální hodnosti");
define('_AM_SYSTEM_USERS_ACCESSLEV',"Úroveň přístupu"); // Access Level
define('_AM_SYSTEM_USERS_SIGNATURE',"Podpis");
define('_AM_SYSTEM_USERS_PASSWORD',"Heslo");
define('_AM_SYSTEM_USERS_INDICATECOF',"* označuje povinné údaje");
define('_AM_SYSTEM_USERS_NOTACTIVE',"Tento uživatel ještě nebyl aktivován. Chcete jej aktivovat nyní?");
define('_AM_SYSTEM_USERS_UPDATEUSER',"Aktualizovat uživatele");
define('_AM_SYSTEM_USERS_USERINFO',"Informace o uživateli");
define('_AM_SYSTEM_USERS_USERID',"ID");
define('_AM_SYSTEM_USERS_RETYPEPD',"Heslo znovu");
define('_AM_SYSTEM_USERS_CHANGEONLY',"(pouze při jeho změně)");
define('_AM_SYSTEM_USERS_SYNCHRONIZE',"Synchronizovat");
define('_AM_SYSTEM_USERS_USERDONEXIT',"CHYBA! Tento uživatel neexistuje!");
define('_AM_SYSTEM_USERS_STNPDNM',"Lituji, ale hesla jsou různá. Vraťte se zpět a zkuste to ještě jednou.");
define('_AM_SYSTEM_USERS_CNUUSER',"CHYBA! Nemohu aktualizovat uživatele.");
define('_AM_SYSTEM_USERS_CNGUSERID',"CHYBA! Nemohu získat uživatelské ID.");
define('_AM_SYSTEM_USERS_NOUSERS',"Není vybraný žádný uživatel.");
define('_AM_SYSTEM_USERS_CNRNU2',"CHYBA: Nový uživatel nemůže být zařazen do skupin: %s.");
define('_AM_SYSTEM_USERS_SEARCH',"Hledání");
define('_AM_SYSTEM_USERS_SEARCH_USER',"Hledaný uživatel:");
define('_AM_SYSTEM_USERS_ADVANCED_SEARCH',"Pokročilé vyhledávání");
define('_AM_SYSTEM_USERS_EDIT',"Upravit člena");
define('_AM_SYSTEM_USERS_DEL',"Smazat člena");
define('_AM_SYSTEM_USERS_DELETE',"Smazat");
define('_AM_SYSTEM_USERS_SUBMIT',"Odeslat");
define('_AM_SYSTEM_USERS_PURGE',"Pročistit");
define('_AM_SYSTEM_USERS_ADD',"Přidat člena");
define('_AM_SYSTEM_USERS_VIEW',"Zobrazit informace o členovy");
define('_AM_SYSTEM_USERS_NO_FOUND',"Zadání neodpovídá žádný uživatel.");
define('_AM_SYSTEM_USERS_NOT_CONNECT',"Nikdy nepřipojen"); // Never connected
define('_AM_SYSTEM_USERS_FORM_SURE_DEL',"Smazat uživatele: %s");
define('_AM_SYSTEM_USERS_FORM_SURE_DEL2',"Smazat");
define('_AM_SYSTEM_USERS_NO_SUPP',"CHYBA: Nemohu smazat uživatele: %s <br />");
define('_AM_SYSTEM_USERS_NO_ADMINSUPP',"Nelze smazat administrátorský účet: %s <br />");
define('_AM_SYSTEM_USERS_ERROR',"CHYBA:<br /><br /> %s");
define('_AM_SYSTEM_USERS_ALLGROUP',"Všechny skupiny");
define('_AM_SYSTEM_USERS_ALLUSER',"Všichni uživatelé");
define('_AM_SYSTEM_USERS_ACTIVEUSER',"Pouze aktivní uživatelé");
define('_AM_SYSTEM_USERS_INACTIVEUSER',"Pouze neaktivní uživatelé");
// Error
define('_AM_SYSTEM_USERS_PSEUDO_ERROR',"CHYBA! Uživatelské jméno %s je již existuje.");
define('_AM_SYSTEM_USERS_MAIL_ERROR',"CHYBA! Email %s je již zaregistrovaný.");
//2.5.4
define('_AM_SYSTEM_USERS_ACCEPT_EMAIL',"Přijímá emaily od administrátorů.");
