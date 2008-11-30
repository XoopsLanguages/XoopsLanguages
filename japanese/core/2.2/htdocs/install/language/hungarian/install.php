<?php
// $Id: install.php,v 1.8 2003/10/08 10:23:22 okazu Exp $
define("_INSTALL_L0","Üdvözöllek a XOOPS 2.2 Telepítõ varázslójában");
define("_INSTALL_L70","Kérlek változtasd meg a mainfile.php fájl hozzáférési jogait úgy, hogy a szerver által írható legyen (pl. chmod 777 mainfile.php UNIX/LINUX-os szerveren, vagy ellenõrizd a fájl tulajdonságait és nézd meg, hogy a Csak olvasható ne legyen bejelölve Windowsos szerver esetén ). Ha beállítottad a hozzáférési jogokat, frissítsd egyszer ezt az oldalt.");
//define("_INSTALL_L71","A telepítés elkezdéséhez kattints az alábbi gombra.");
define("_INSTALL_L1","Nyisd meg a mainfile.php egy txt szerkesztõvel és keresd meg az alábbi kódokat a 31. sorban:");
define("_INSTALL_L2","Most cseréldd ki a sort erre:");
define("_INSTALL_L3","Aztán, a 35. sorban, cseréld ezt: %s erre: %s");
define("_INSTALL_L4","OK, beállítottam az alábbi adatokat, próbáljuk újra!");
define("_INSTALL_L5","FIGYELEM!");
define("_INSTALL_L6","Nem egyezik a XOOPS_ROOT_PATH beállítás a mainfile.php 31. sorában és az általunk felismert gyökér könyvtár (root path)");
define("_INSTALL_L7","Megadott adat: ");
define("_INSTALL_L8","A felismert adat: ");
define("_INSTALL_L9","( MS rendszereken, akkor is megkaphatod ezt az üzenetet, ha a beállítás megfelelõ. Ha ez a helyzet, akkor kattints az alábbi gombra a folytatáshoz");
define("_INSTALL_L10","Kérlek kattints az alábbi gombra a folytatáshoz, ha valóban minden ok.");
define("_INSTALL_L11","Az elérési út a XOOPS gyökérkönyvtárhoz: ");
define("_INSTALL_L12","URL a XOOPS gyökérkönyvtárhoz: ");
define("_INSTALL_L13","Ha a fenti adatok rendben vannak, kattints az alábbi gombra a folytatáshoz.");
define("_INSTALL_L14","Tovább");
define("_INSTALL_L15","Kérlek nyisd meg a mainfile.php fájlt és írdd be a szükséges adatbázis adatokat");
define("_INSTALL_L16","%s az adatbázis szerver elérési címe.");
define("_INSTALL_L17","%s a hozzáféréshez tartozó felhasználónév.");
define("_INSTALL_L18","%s az adatbázis eléréséhez szükséges jelszó.");
define("_INSTALL_L19","%s az adatbázis neve, ahol a XOOPS táblák létre lesznek hozva.");
define("_INSTALL_L20","%s a táblanevek elõtagja, ami a telepítés során létre lesz hozva.");
define("_INSTALL_L21","A következõ adatbázis nem található a szerveren:");
define("_INSTALL_L22","Megpróbáljuk létrehozni?");
define("_INSTALL_L23","Igen");
define("_INSTALL_L24","Nem");
define("_INSTALL_L25","Az következõ adatbázis beállításokat észleltük a mainfile.php beállításaiból. Kérlek javítsd, ha nem megfelelõ.");
define("_INSTALL_L26","Adatbázis beállítások");
define("_INSTALL_L51","Adatbázis");
define("_INSTALL_L66","Válaszd ki a használandó adatbázist");
define("_INSTALL_L27","Adatbázis elérési címe");
define("_INSTALL_L67","Az adatbázis szerver elérési címe. Ha nem vagy benne biztos, a 'localhost' a legtöbb esetben mûkdik.");
define("_INSTALL_L28","Adatbázis felhasználóneve");
define("_INSTALL_L65","Az adatbázis eléréséhez szükséges felhasználónév");
define("_INSTALL_L29","Adatbázis neve");
define("_INSTALL_L64","Az adatbázis neve. A telepítõ megpróbálja létrehozni, ha még nem létezik.");
define("_INSTALL_L52","Adatbázis jelszó");
define("_INSTALL_L68","Az adatbázis eléréséhez szükséges jelszó");
define("_INSTALL_L30","Táblanevek elõtagja");
define("_INSTALL_L63","Ez az elõtag hozzáadódik az összes táblanévhez, hogy kizárja a név ütközés lehetõségét az adatbázisban. Ha nem tudod, mi ez, használd az alapértelmezettet 'xoops'.");
define("_INSTALL_L54","Folyamatos kapcsolat használata?");
define("_INSTALL_L69","Alapbeállítás 'Nem'. Válaszd a 'Nem' -et, ha nem vagy biztos benne.");
define("_INSTALL_L55","XOOPS Fizikális útvonal");
define("_INSTALL_L59","Fizikális elérési útvonal a XOOPS fõkönyvtárához záró perjel nélkül");
define("_INSTALL_L56","XOOPS Virtuális útvonal (URL)");
define("_INSTALL_L58","Virtuális elérési út a XOOPS fõkönyvtárához záró perjel nélkül");

define("_INSTALL_L31","Nem lehet adatbázist lérehozni. Keresd fel a szerver adminisztrátorát.");
define("_INSTALL_L32","A telepítés sikeresen befejezve");
define("_INSTALL_L33","Kattints <a href='../index.php'>IDE</a> az oldalad kezdõlapjának megtekintéséhez.");
define("_INSTALL_L35","Ha bármilyen hibát észlelsz, lépj kapcsolatba a XOOPS Hungary Team-el a <a href='http://xoops.chaosteam.hu/' target='_blank'>XOOPS Magyarország</a> oldalon.");
define("_INSTALL_L36","Add meg az oldalad adminisztrátor nevét és jelszavát.");
define("_INSTALL_L37","Admin Megjelenített Név");
define("_INSTALL_L38","Admin E-mail");
define("_INSTALL_L39","Admin jelszó");
define("_INSTALL_L74","Jelszó mégegyszer");
define("_INSTALL_L40","Táblák létrehozása");
define("_INSTALL_L41","Menj vissza és add meg a szükséges adatokat.");
define("_INSTALL_L42","Vissza");
define("_INSTALL_L57","Kérlek add meg: %s");

// %s is database name
define("_INSTALL_L43","%s adatbázis létrehozva!");

// %s is table name
define("_INSTALL_L44","Nem lehet létrehozni: %s");
define("_INSTALL_L45","%s tábla létrehozva.");

define("_INSTALL_L46","Néhány modul megfelelõ mûködéséhez az alábbi fájloknak bárki által írhatóknak kell lenniük. Kérlek állítsd be ezen fájlokon a jogosultságokat.  (p.l. 'chmod 666 fájlnév' és 'chmod 777 könyvtárnév' UNIX/LINUX szerveren, vagy ellenõrizd a fájl tulajdonságainál hogy az Írásvédett opció nincs bejelölve Windowsos szerveren)");
define("_INSTALL_L47","Következõ");
define("_INSTALL_L48","Az admin jelszavak különböznek");
define("_INSTALL_L49","Modul telepítés");

define("_INSTALL_L53","Kérlek erõsítsd meg az alábbi megadott adatokat:");

define("_INSTALL_L60","A mainfile.php nem írható. Kérlek ellenõrizd a jogosultságokat és próbáldd újra.");
define("_INSTALL_L61","A mainfile.php nem írható. Keresd fel a rendszergazdát a részletekért.");
define("_INSTALL_L62","A konfigurációs információk sikeresen elmentve a mainfile.php fájlba.");
define("_INSTALL_L72","A következõ könyvtáraknak írhatóaknak kell lenniük.(p.l. 'chmod 777 könyvtárnév' UNIX/LINUX szerveren)");
define("_INSTALL_L73","Érvénytelen E-mail");

// add by haruki
define("_INSTALL_L80","bevezetés");
define("_INSTALL_L81","a fájl és könyvtár jogosultságok ellenõrzése");
define("_INSTALL_L82","A fájl és könyvtár jogosultságok ellenõrzése");
define("_INSTALL_L83","A(z) %s fájl NEM írható.");
define("_INSTALL_L84","A(z) %s fájl írható.");
define("_INSTALL_L85","A(z) %s könyvtár NEM írható.");
define("_INSTALL_L86","A(z) %s könyvtár írható.");
define("_INSTALL_L87","Nincs hiba.");
define("_INSTALL_L89","általános beállítások");
define("_INSTALL_L90","Általános beálítások");
define("_INSTALL_L91","megerõsítés");
define("_INSTALL_L92","beállítások mentése");
define("_INSTALL_L93","beállítások módosítása");
define("_INSTALL_L88","A beállítások mentése..");
define("_INSTALL_L94","az elérési út és az URL ellenõrzése");
define("_INSTALL_L127","Az elérési út és az URL beállítások ellenõrzése..");
define("_INSTALL_L95","Nem lehet észlelni a XOOPS fizikális elérési útját.");
define("_INSTALL_L96","Az észlelt (%s) és az általad megadott fizikális elérési út adatok nem egyeznek.");
define("_INSTALL_L97","<b>Fizikális elérési út</b> megfelelõ.");

define("_INSTALL_L99","<b>A fizikális elérési útnak</b> könyvtárnak kell lennie.");
define("_INSTALL_L100","<b>A virtuális elérési út</b> érvényes URL.");
define("_INSTALL_L101","<b>A virtuális elérési út</b> nem érvényes URL.");
define("_INSTALL_L102","adatbázis beállítások megerõsítése");
define("_INSTALL_L103","újrakezd az elejérõl");
define("_INSTALL_L104","adatbázis ellenõrzése");
define("_INSTALL_L105","adatbázis létrehozási kisérlet");
define("_INSTALL_L106","Nem lehet csatlakozni az adatbázis szerverhez.");
define("_INSTALL_L107","Kérlek ellenõrizd az adatbázis szervert és a beállításait.");
define("_INSTALL_L108","Sikeres kapcsolódás az adatbázis szerverhez.");
define("_INSTALL_L109","Nincs ilyen adatbázis: %s.");
define("_INSTALL_L110","A(z) %s adatbázis létezik és használható.");
define("_INSTALL_L111","Adatbázis kapcsolat OK.<br />Kattints az alábbi gombra az adatbázis tábláinak létrehozásához.");
define("_INSTALL_L112","admin felhasználó beállítása");
define("_INSTALL_L113","A(z) %s tábla törölve.");
define("_INSTALL_L114","Nem sikerült a táblák létrehozása.");
define("_INSTALL_L115","Adatbázis táblák létre hozva.");
define("_INSTALL_L116","adatok rögzítése");
define("_INSTALL_L117","befejezés");

define("_INSTALL_L118","A(z) %s tábla létrehozása sikertelen.");
define("_INSTALL_L119","%d bejegyzés beszúrva a %s táblába.");
define("_INSTALL_L120","Nem sikerült beszúrni %d bejegyzést a(z) %s táblába.");

define("_INSTALL_L121","%s állandó beállítva %s értékre.");
define("_INSTALL_L122","A(z) %s állandót nem sikerült ide írni: %s ");

define("_INSTALL_L123","A %s fájl elhelyezve a cache/ könyvtárban.");
define("_INSTALL_L124","A %s fájlt nem sikerült elhelyezni a cache/ könyvtárban.");

define("_INSTALL_L125","A %s -t felülírta a %s.");
define("_INSTALL_L126","Nem lehet írni a %s fájlba.");
define("_INSTALL_L129","Modulok");
define("_INSTALL_L130","A telepítõ XOOPS 1.3.x táblákat talált az adatbázisbab.<br />A telepítõ megpróbálja frissíteni az adatbázisodat XOOPS2-re.");
define("_INSTALL_L131","A XOOPS2 táblái már léteznek az adatbázisodban.");
define("_INSTALL_L132","táblák frissítése");
define("_INSTALL_L133","A(z) %s tábla frissítve.");
define("_INSTALL_L134","A(z) %s táblát nem siekrült frissíteni.");
define("_INSTALL_L135","A táblákat nem sikerült frissíteni.");
define("_INSTALL_L136","Az atabázis táblái frissítve.");
define("_INSTALL_L137","modulok frissítése");
define("_INSTALL_L138","hozzászólások frissítére");
define("_INSTALL_L139","avatarok frissítése");
define("_INSTALL_L140","mosolyok frissítése");
define("_INSTALL_L141","A telepítõ most minden modult frissít XOOPS2 kompatibilisre.<br />Ellenõrizd, hogy minden fájlt feltöltöttél-e a XOOPS2 csomagból a szerverre.<br />This may take a while to complete.");
define("_INSTALL_L142","Modulok frissítése..");
define("_INSTALL_L143","A telepítõ most frissíti a XOOPS 1.3.x beállításokat XOOPS2 kompatibilisre.");
define("_INSTALL_L144","beállítás frissítése");
define("_INSTALL_L145","Hozzászólás (ID: %s) beillesztve az adatbázisba.");
define("_INSTALL_L146","A hozzászólást (ID: %s) nem sikerült  beilleszteni az adatbázisba.");
define("_INSTALL_L147","Hozzászólások frissítése..");
define("_INSTALL_L148","Sikeres frissítés.");
define("_INSTALL_L149","A telepítõ most frissíti a XOOPS 1.3.x -ben található hozzászólásokat XOOPS2 kompatibilisre.<br />Ez egy jóideig eltarthat.");
define("_INSTALL_L150","A telepítõ most frissíti a mosolyokat és a felhasználói rang képeket XOOPS2 kompatibilisre.<br />Ez néhány percet igénybe vehet.");
define("_INSTALL_L151","A telepítõ most frissíti a felhasználói avatarokat XOOPS2 kompatibilisre.<br />Ez igénybe vehet néhány percet.");
define("_INSTALL_L155","Mosoly/rang képek frissítése..");
define("_INSTALL_L156","Felhasználói avatarok frissítése..");
define("_INSTALL_L157","Válaszd ki az alapértelmezett felhasználó csoportot az összes szoport tipushoz");
define("_INSTALL_L158","1.3.x -ben található csoportok");
define("_INSTALL_L159","Webmesterek");
define("_INSTALL_L160","Regisztrált felhasználók");
define("_INSTALL_L161","Névtelen felhasználók");
define("_INSTALL_L162","Ki kell választanod az alapértelmezett felhasználó csoportot mindegyik csoport tipushoz.");
define("_INSTALL_L163","A(z) %s tábla eldobva.");
define("_INSTALL_L164","A(z) %s tábla törlése sikertelen.");
define("_INSTALL_L165","%s sikeresen létrehozva.");
define("_INSTALL_L166","%s nem hozható létre.");
define("_INSTALL_L167","Admin bejelentkezõ név");





// %s is filename
define("_INSTALL_L152","Nem nyitható meg: %s.");
define("_INSTALL_L153","Nem lehet frissíteni: %s.");
define("_INSTALL_L154","%s frissítve.");

define('_INSTALL_L128', 'Válaszd ki a telepítõ nyelvét');
define('_INSTALL_L200', 'Újratölt');


define('_INSTALL_CHARSET','ISO-8859-2');
?>