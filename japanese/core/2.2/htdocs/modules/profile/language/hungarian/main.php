<?php
// $Id: main.php,v 1.1.2.13 2005/07/19 18:14:35 mithyt2 Exp $
define("_PROFILE_MA_ERRORDURINGSAVE", "Hiba a mentés közben");
define('_PROFILE_MA_USERREG','Felhasználó regisztráció');
define('_PROFILE_MA_NICKNAME','Felhasználónév');
define('_PROFILE_MA_REALNAME', 'Valódi név');
define('_PROFILE_MA_EMAIL','E-mail cím');
define('_PROFILE_MA_ALLOWVIEWEMAIL','Más felhasználók láthatják az e-mail címedet?');
define('_PROFILE_MA_TIMEZONE','Idõzóna');
define('_PROFILE_MA_AVATAR','Avatar');
define('_PROFILE_MA_VERIFYPASS','Jelszó megerõsítése');
define('_PROFILE_MA_SUBMIT','Elküld');
define('_PROFILE_MA_USERNAME','Felhasználónév');
define('_PROFILE_MA_FINISH','Befejez');
define('_PROFILE_MA_REGISTERNG','Nem lehet új felhasználót regisztrálni.');
define('_PROFILE_MA_MAILOK','Fogadsz fontos leveleket<br />az adminisztrátoroktól és a moderátoroktól?');
define('_PROFILE_MA_DISCLAIMER','Jogi nyilatkozat');
define('_PROFILE_MA_IAGREE','Elfogadom a fentieket');
define('_PROFILE_MA_UNEEDAGREE', 'Sajnálom, el kell fogadnod a jogi nyilatkozatot, hogy regisztrálhass.');
define('_PROFILE_MA_NOREGISTER','Sajnálom, jelenleg nem  fogadunk új regisztrációkat');

// %s is username. This is a subject for email
define('_PROFILE_MA_USERKEYFOR','Felhasználó aktiváló kulcs %s részére');
define('_PROFILE_MA_ACTLOGIN','A hozzáférésed aktiválva. Kérlek lépj be a regisztrált jelszavaddal.');

define('_PROFILE_MA_YOURREGISTERED','Egy e-mailt küldtünk az aktiváló kulccsal az általad megadott címre. Kövesd a levélben leírt utasításokat a hozzáférésed aktiválásához');
define('_PROFILE_MA_YOURREGMAILNG','Mostantól regisztrálva vagy. Viszont sajnos az aktivációs e-mailt nem sikerült elküldeni valamilyen szerver hiba miatt. Elnézést a kellemetlenségekért, kérlek értesítsd a webmestert a problémáról.');
define('_PROFILE_MA_YOURREGISTERED2','Mostantól regisztrálva vagy. Kérlek várj, amíg a hozzáférésedet valamelyik adminisztrátor aktiválja.  Kapsz egy értesítést, ha aktiválták a hozzáférésedet.  Ez eltarthat egy jóideig, szóval kérjük légy türelmes.');

// %s is your site name
define('_PROFILE_MA_NEWUSERREGAT','Új felhasználói regisztráció: %s');
// %s is a username
define('_PROFILE_MA_HASJUSTREG','%s most regisztrált!');

define('_PROFILE_MA_INVALIDMAIL','HIBA: Hibás e-mail cím');
define('_PROFILE_MA_EMAILNOSPACES','HIBA: Az e-mail cím nem tartalmazhat szóközt.');
define('_PROFILE_MA_INVALIDNICKNAME','HIBA: Hibás felhasználónév');
define("_PROFILE_MA_INVALIDDISPLAYNAME", "HIBA: Hibás megjelenõ név");
define('_PROFILE_MA_NICKNAMETOOLONG','A felhasználónév túl hosszú. Kevesebb, mint %s karakter lehet.');
define('_PROFILE_MA_DISPLAYNAMETOOLONG','A megjelenõ név túl hosszú. Kevesebb, mint %s karakter lehet.');
define('_PROFILE_MA_NICKNAMETOOSHORT','A felhasználónév túl rövid. Több, mint %s karakteresnek kell lennie.');
define('_PROFILE_MA_DISPLAYNAMETOOSHORT','A megjelenõ név túl rövid. Több, mint %s karakteresnek kell lennie.');
define('_PROFILE_MA_NAMERESERVED','HIBA: Fenntartott név.');
define('_PROFILE_MA_DISPLAYNAMERESERVED','HIBA: Fenntartott megjelenõ név.');
define('_PROFILE_MA_NICKNAMENOSPACES','A felhasználónév nem tartalmazhat szóközt.');
define('_PROFILE_MA_DISPLAYNAMENOSPACES','A megjelenõ név nem tartalmazhat szóközt.');
define('_PROFILE_MA_NICKNAMETAKEN','HIBA: Foglalt felhasználónév.');
define('_PROFILE_MA_DISPLAYNAMETAKEN','HIBA: Foglalt megjelenõ név.');
define('_PROFILE_MA_EMAILTAKEN','HIBA: Az e-mail cím már regisztrálva van.');
define('_PROFILE_MA_ENTERPWD','HIBA: Meg kell adnod egy jelszót.');
define('_PROFILE_MA_SORRYNOTFOUND','Sajnálom, nem megfelelõ felhasználói információt találtam.');
define("_PROFILE_MA_WRONGPASSWORD", "HIBA: Hibás jelszó");
define("_PROFILE_MA_USERALREADYACTIVE", "A felhasználó a(z) %s címrõl már aktiválva van");

// %s is your site name
define('_PROFILE_MA_YOURACCOUNT', 'A hozzáférésed : %s');

// %s is a username
define('_PROFILE_MA_ACTVMAILNG', 'Nem sikerült értesítõ levelet küldeni %s felhasználónak');
define('_PROFILE_MA_ACTVMAILOK', 'Értesítõ levél elküldve %s felhasználó részére.');

define("_PROFILE_MA_DEFAULT", "Alapértelmezett beállítások");

//%%%%%%		File Name userinfo.php 		%%%%%
define('_PROFILE_MA_SELECTNG','Nincs felhasználó kiválasztva! Menj vissza és próbáldd újra.');
define('_PROFILE_MA_PM','PÜ');
define('_PROFILE_MA_ICQ','ICQ');
define('_PROFILE_MA_AIM','AIM');
define('_PROFILE_MA_YIM','YIM');
define('_PROFILE_MA_MSNM','MSN Messenger');
define('_PROFILE_MA_LOCATION','Lakhely');
define('_PROFILE_MA_OCCUPATION','Foglalkozás');
define('_PROFILE_MA_INTEREST','Érdeklõdési kör');
define('_PROFILE_MA_SIGNATURE','Aláírás');
define('_PROFILE_MA_EXTRAINFO','Egyéb Infó');
define('_PROFILE_MA_EDITPROFILE','Profil szerkesztése');
define('_PROFILE_MA_LOGOUT','Kijelentkezés');
define('_PROFILE_MA_INBOX','Bejövõ üzenetek');
define('_PROFILE_MA_MEMBERSINCE','Regisztráció dátuma');
define('_PROFILE_MA_RANK','Rang');
define('_PROFILE_MA_POSTS','Megjegyzések/hozzászólások');
define('_PROFILE_MA_LASTLOGIN','Legutóbbi bejelentkezés');
define('_PROFILE_MA_ALLABOUT','Minden információ %s felhasználóról');
define('_PROFILE_MA_STATISTICS','Statisztika');
define('_PROFILE_MA_MYINFO','Saját infó');
define('_PROFILE_MA_BASICINFO','Alap információ');
define('_PROFILE_MA_MOREABOUT','Több infó rólam');
define('_PROFILE_MA_SHOWALL','Mindet mutat');

//%%%%%%		File Name edituser.php 		%%%%%
define('_PROFILE_MA_PROFILE','Profil');
define('_PROFILE_MA_DISPLAYNAME','Megjelenõ név');
define('_PROFILE_MA_SHOWSIG','Mindíg csatolja az aláírásomat');
define('_PROFILE_MA_CDISPLAYMODE','Hozzászólások megjelenítési módja');
define('_PROFILE_MA_CSORTORDER','A hozzászólások sorrendje');
define('_PROFILE_MA_PASSWORD','Jelszó');
define('_PROFILE_MA_TYPEPASSTWICE','(add meg az új jelszót kétszer a cseréhez)');
define('_PROFILE_MA_SAVECHANGES','Változtatások mentése');
define('_PROFILE_MA_NOEDITRIGHT','Sajnálom, nincs jogosultságod a felhasználó információjának szerkesztésére.');
define('_PROFILE_MA_PASSNOTSAME','Mindkét jelszó különbözõ. Egyezniük kell.');
define('_PROFILE_MA_PWDTOOSHORT','Sajnálom, a jelszónak minimum <b>%s</b> karakteresnek kell lennie.');
define("_PROFILE_MA_NOPASSWORD", "Kérlek add meg a jelszót");
define('_PROFILE_MA_PROFUPDATED','A profilod frissítve!');
define('_PROFILE_MA_USECOOKIE','A felhasznónevem tárolása cookie-ban 1 évig.');
define('_PROFILE_MA_NO','Nem');
define('_PROFILE_MA_DELACCOUNT','Hozzáférés törlése');
define('_PROFILE_MA_MYAVATAR', 'Saját avatar');
define('_PROFILE_MA_UPLOADMYAVATAR', 'Avatar feltöltése');
define('_PROFILE_MA_MAXPIXEL','Max Pixelek');
define('_PROFILE_MA_MAXIMGSZ','Max képméret (Bájt)');
define('_PROFILE_MA_SELFILE','Válaszd ki a fájlt');
define('_PROFILE_MA_OLDDELETED','A régi avatarod törölve lesz!');
define('_PROFILE_MA_CHOOSEAVT', 'Válassz avatart az elérhetõ listából');

define('_PROFILE_MA_PRESSLOGIN', 'Kattints az alábbi gombra a bejelentkezéshez');

define('_PROFILE_MA_ADMINNO', 'A webmester csoport tagjait nem lehet eltávolítani');
define('_PROFILE_MA_GROUPS', 'Felhasználó csoportjai');

//changepass.php
define("_PROFILE_MA_CHANGEPASSWORD", "Jelszó cseréje");
define("_PROFILE_MA_PASSWORDCHANGED", "A jelszó sikeresen cserélve");
define("_PROFILE_MA_OLDPASSWORD", "Jelenlegi jelszó");
define("_PROFILE_MA_NEWPASSWORD", "Új jelszó");

//search.php
define("_PROFILE_MA_SORTBY", "Rendezési szempont");
define("_PROFILE_MA_ORDER", "Sorrend");
define("_PROFILE_MA_PERPAGE", "Elemek száma oldalanként");
define("_PROFILE_MA_LATERTHAN", "%s késõbbi, mint");
define("_PROFILE_MA_EARLIERTHAN", "%s korábbi, mint");
define("_PROFILE_MA_LARGERTHAN", "%s nagyobb, mint");
define("_PROFILE_MA_SMALLERTHAN", "%s kisebb, mint");

define("_PROFILE_MA_NOUSERSFOUND", "Felhasználó nem található");
define("_PROFILE_MA_RESULTS", "Keresési eredmények");

//changemail.php
define("_PROFILE_MA_CHANGEMAIL", "E-mail cím cseréje");
define("_PROFILE_MA_NEWMAIL", "Új e-mail cím");

define("_PROFILE_MA_NEWEMAILREQ", "Új e-mail cím kérelem");
define("_PROFILE_MA_NEWMAILMSGSENT", "Egy e-mail az aktivációs linkkel elküldve a megadott e-mail címre. A linkre kattintva befejezheted a cserét.");
define("_PROFILE_MA_EMAILCHANGED", "Az e-mail címed megváltoztatva.");

define("_PROFILE_MA_CONFCODEMISSING", "A megerõsítõ kód hiányzik.");
?>