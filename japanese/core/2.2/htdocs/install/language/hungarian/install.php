<?php
// $Id: install.php,v 1.8 2003/10/08 10:23:22 okazu Exp $
define("_INSTALL_L0","�dv�z�llek a XOOPS 2.2 Telep�t� var�zsl�j�ban");
define("_INSTALL_L70","K�rlek v�ltoztasd meg a mainfile.php f�jl hozz�f�r�si jogait �gy, hogy a szerver �ltal �rhat� legyen (pl. chmod 777 mainfile.php UNIX/LINUX-os szerveren, vagy ellen�rizd a f�jl tulajdons�gait �s n�zd meg, hogy a Csak olvashat� ne legyen bejel�lve Windowsos szerver eset�n ). Ha be�ll�tottad a hozz�f�r�si jogokat, friss�tsd egyszer ezt az oldalt.");
//define("_INSTALL_L71","A telep�t�s elkezd�s�hez kattints az al�bbi gombra.");
define("_INSTALL_L1","Nyisd meg a mainfile.php egy txt szerkeszt�vel �s keresd meg az al�bbi k�dokat a 31. sorban:");
define("_INSTALL_L2","Most cser�ldd ki a sort erre:");
define("_INSTALL_L3","Azt�n, a 35. sorban, cser�ld ezt: %s erre: %s");
define("_INSTALL_L4","OK, be�ll�tottam az al�bbi adatokat, pr�b�ljuk �jra!");
define("_INSTALL_L5","FIGYELEM!");
define("_INSTALL_L6","Nem egyezik a XOOPS_ROOT_PATH be�ll�t�s a mainfile.php 31. sor�ban �s az �ltalunk felismert gy�k�r k�nyvt�r (root path)");
define("_INSTALL_L7","Megadott adat: ");
define("_INSTALL_L8","A felismert adat: ");
define("_INSTALL_L9","( MS rendszereken, akkor is megkaphatod ezt az �zenetet, ha a be�ll�t�s megfelel�. Ha ez a helyzet, akkor kattints az al�bbi gombra a folytat�shoz");
define("_INSTALL_L10","K�rlek kattints az al�bbi gombra a folytat�shoz, ha val�ban minden ok.");
define("_INSTALL_L11","Az el�r�si �t a XOOPS gy�k�rk�nyvt�rhoz: ");
define("_INSTALL_L12","URL a XOOPS gy�k�rk�nyvt�rhoz: ");
define("_INSTALL_L13","Ha a fenti adatok rendben vannak, kattints az al�bbi gombra a folytat�shoz.");
define("_INSTALL_L14","Tov�bb");
define("_INSTALL_L15","K�rlek nyisd meg a mainfile.php f�jlt �s �rdd be a sz�ks�ges adatb�zis adatokat");
define("_INSTALL_L16","%s az adatb�zis szerver el�r�si c�me.");
define("_INSTALL_L17","%s a hozz�f�r�shez tartoz� felhaszn�l�n�v.");
define("_INSTALL_L18","%s az adatb�zis el�r�s�hez sz�ks�ges jelsz�.");
define("_INSTALL_L19","%s az adatb�zis neve, ahol a XOOPS t�bl�k l�tre lesznek hozva.");
define("_INSTALL_L20","%s a t�blanevek el�tagja, ami a telep�t�s sor�n l�tre lesz hozva.");
define("_INSTALL_L21","A k�vetkez� adatb�zis nem tal�lhat� a szerveren:");
define("_INSTALL_L22","Megpr�b�ljuk l�trehozni?");
define("_INSTALL_L23","Igen");
define("_INSTALL_L24","Nem");
define("_INSTALL_L25","Az k�vetkez� adatb�zis be�ll�t�sokat �szlelt�k a mainfile.php be�ll�t�saib�l. K�rlek jav�tsd, ha nem megfelel�.");
define("_INSTALL_L26","Adatb�zis be�ll�t�sok");
define("_INSTALL_L51","Adatb�zis");
define("_INSTALL_L66","V�laszd ki a haszn�land� adatb�zist");
define("_INSTALL_L27","Adatb�zis el�r�si c�me");
define("_INSTALL_L67","Az adatb�zis szerver el�r�si c�me. Ha nem vagy benne biztos, a 'localhost' a legt�bb esetben m�kdik.");
define("_INSTALL_L28","Adatb�zis felhaszn�l�neve");
define("_INSTALL_L65","Az adatb�zis el�r�s�hez sz�ks�ges felhaszn�l�n�v");
define("_INSTALL_L29","Adatb�zis neve");
define("_INSTALL_L64","Az adatb�zis neve. A telep�t� megpr�b�lja l�trehozni, ha m�g nem l�tezik.");
define("_INSTALL_L52","Adatb�zis jelsz�");
define("_INSTALL_L68","Az adatb�zis el�r�s�hez sz�ks�ges jelsz�");
define("_INSTALL_L30","T�blanevek el�tagja");
define("_INSTALL_L63","Ez az el�tag hozz�ad�dik az �sszes t�blan�vhez, hogy kiz�rja a n�v �tk�z�s lehet�s�g�t az adatb�zisban. Ha nem tudod, mi ez, haszn�ld az alap�rtelmezettet 'xoops'.");
define("_INSTALL_L54","Folyamatos kapcsolat haszn�lata?");
define("_INSTALL_L69","Alapbe�ll�t�s 'Nem'. V�laszd a 'Nem' -et, ha nem vagy biztos benne.");
define("_INSTALL_L55","XOOPS Fizik�lis �tvonal");
define("_INSTALL_L59","Fizik�lis el�r�si �tvonal a XOOPS f�k�nyvt�r�hoz z�r� perjel n�lk�l");
define("_INSTALL_L56","XOOPS Virtu�lis �tvonal (URL)");
define("_INSTALL_L58","Virtu�lis el�r�si �t a XOOPS f�k�nyvt�r�hoz z�r� perjel n�lk�l");

define("_INSTALL_L31","Nem lehet adatb�zist l�rehozni. Keresd fel a szerver adminisztr�tor�t.");
define("_INSTALL_L32","A telep�t�s sikeresen befejezve");
define("_INSTALL_L33","Kattints <a href='../index.php'>IDE</a> az oldalad kezd�lapj�nak megtekint�s�hez.");
define("_INSTALL_L35","Ha b�rmilyen hib�t �szlelsz, l�pj kapcsolatba a XOOPS Hungary Team-el a <a href='http://xoops.chaosteam.hu/' target='_blank'>XOOPS Magyarorsz�g</a> oldalon.");
define("_INSTALL_L36","Add meg az oldalad adminisztr�tor nev�t �s jelszav�t.");
define("_INSTALL_L37","Admin Megjelen�tett N�v");
define("_INSTALL_L38","Admin E-mail");
define("_INSTALL_L39","Admin jelsz�");
define("_INSTALL_L74","Jelsz� m�gegyszer");
define("_INSTALL_L40","T�bl�k l�trehoz�sa");
define("_INSTALL_L41","Menj vissza �s add meg a sz�ks�ges adatokat.");
define("_INSTALL_L42","Vissza");
define("_INSTALL_L57","K�rlek add meg: %s");

// %s is database name
define("_INSTALL_L43","%s adatb�zis l�trehozva!");

// %s is table name
define("_INSTALL_L44","Nem lehet l�trehozni: %s");
define("_INSTALL_L45","%s t�bla l�trehozva.");

define("_INSTALL_L46","N�h�ny modul megfelel� m�k�d�s�hez az al�bbi f�jloknak b�rki �ltal �rhat�knak kell lenni�k. K�rlek �ll�tsd be ezen f�jlokon a jogosults�gokat.  (p.l. 'chmod 666 f�jln�v' �s 'chmod 777 k�nyvt�rn�v' UNIX/LINUX szerveren, vagy ellen�rizd a f�jl tulajdons�gain�l hogy az �r�sv�dett opci� nincs bejel�lve Windowsos szerveren)");
define("_INSTALL_L47","K�vetkez�");
define("_INSTALL_L48","Az admin jelszavak k�l�nb�znek");
define("_INSTALL_L49","Modul telep�t�s");

define("_INSTALL_L53","K�rlek er�s�tsd meg az al�bbi megadott adatokat:");

define("_INSTALL_L60","A mainfile.php nem �rhat�. K�rlek ellen�rizd a jogosults�gokat �s pr�b�ldd �jra.");
define("_INSTALL_L61","A mainfile.php nem �rhat�. Keresd fel a rendszergazd�t a r�szletek�rt.");
define("_INSTALL_L62","A konfigur�ci�s inform�ci�k sikeresen elmentve a mainfile.php f�jlba.");
define("_INSTALL_L72","A k�vetkez� k�nyvt�raknak �rhat�aknak kell lenni�k.(p.l. 'chmod 777 k�nyvt�rn�v' UNIX/LINUX szerveren)");
define("_INSTALL_L73","�rv�nytelen E-mail");

// add by haruki
define("_INSTALL_L80","bevezet�s");
define("_INSTALL_L81","a f�jl �s k�nyvt�r jogosults�gok ellen�rz�se");
define("_INSTALL_L82","A f�jl �s k�nyvt�r jogosults�gok ellen�rz�se");
define("_INSTALL_L83","A(z) %s f�jl NEM �rhat�.");
define("_INSTALL_L84","A(z) %s f�jl �rhat�.");
define("_INSTALL_L85","A(z) %s k�nyvt�r NEM �rhat�.");
define("_INSTALL_L86","A(z) %s k�nyvt�r �rhat�.");
define("_INSTALL_L87","Nincs hiba.");
define("_INSTALL_L89","�ltal�nos be�ll�t�sok");
define("_INSTALL_L90","�ltal�nos be�l�t�sok");
define("_INSTALL_L91","meger�s�t�s");
define("_INSTALL_L92","be�ll�t�sok ment�se");
define("_INSTALL_L93","be�ll�t�sok m�dos�t�sa");
define("_INSTALL_L88","A be�ll�t�sok ment�se..");
define("_INSTALL_L94","az el�r�si �t �s az URL ellen�rz�se");
define("_INSTALL_L127","Az el�r�si �t �s az URL be�ll�t�sok ellen�rz�se..");
define("_INSTALL_L95","Nem lehet �szlelni a XOOPS fizik�lis el�r�si �tj�t.");
define("_INSTALL_L96","Az �szlelt (%s) �s az �ltalad megadott fizik�lis el�r�si �t adatok nem egyeznek.");
define("_INSTALL_L97","<b>Fizik�lis el�r�si �t</b> megfelel�.");

define("_INSTALL_L99","<b>A fizik�lis el�r�si �tnak</b> k�nyvt�rnak kell lennie.");
define("_INSTALL_L100","<b>A virtu�lis el�r�si �t</b> �rv�nyes URL.");
define("_INSTALL_L101","<b>A virtu�lis el�r�si �t</b> nem �rv�nyes URL.");
define("_INSTALL_L102","adatb�zis be�ll�t�sok meger�s�t�se");
define("_INSTALL_L103","�jrakezd az elej�r�l");
define("_INSTALL_L104","adatb�zis ellen�rz�se");
define("_INSTALL_L105","adatb�zis l�trehoz�si kis�rlet");
define("_INSTALL_L106","Nem lehet csatlakozni az adatb�zis szerverhez.");
define("_INSTALL_L107","K�rlek ellen�rizd az adatb�zis szervert �s a be�ll�t�sait.");
define("_INSTALL_L108","Sikeres kapcsol�d�s az adatb�zis szerverhez.");
define("_INSTALL_L109","Nincs ilyen adatb�zis: %s.");
define("_INSTALL_L110","A(z) %s adatb�zis l�tezik �s haszn�lhat�.");
define("_INSTALL_L111","Adatb�zis kapcsolat OK.<br />Kattints az al�bbi gombra az adatb�zis t�bl�inak l�trehoz�s�hoz.");
define("_INSTALL_L112","admin felhaszn�l� be�ll�t�sa");
define("_INSTALL_L113","A(z) %s t�bla t�r�lve.");
define("_INSTALL_L114","Nem siker�lt a t�bl�k l�trehoz�sa.");
define("_INSTALL_L115","Adatb�zis t�bl�k l�tre hozva.");
define("_INSTALL_L116","adatok r�gz�t�se");
define("_INSTALL_L117","befejez�s");

define("_INSTALL_L118","A(z) %s t�bla l�trehoz�sa sikertelen.");
define("_INSTALL_L119","%d bejegyz�s besz�rva a %s t�bl�ba.");
define("_INSTALL_L120","Nem siker�lt besz�rni %d bejegyz�st a(z) %s t�bl�ba.");

define("_INSTALL_L121","%s �lland� be�ll�tva %s �rt�kre.");
define("_INSTALL_L122","A(z) %s �lland�t nem siker�lt ide �rni: %s ");

define("_INSTALL_L123","A %s f�jl elhelyezve a cache/ k�nyvt�rban.");
define("_INSTALL_L124","A %s f�jlt nem siker�lt elhelyezni a cache/ k�nyvt�rban.");

define("_INSTALL_L125","A %s -t fel�l�rta a %s.");
define("_INSTALL_L126","Nem lehet �rni a %s f�jlba.");
define("_INSTALL_L129","Modulok");
define("_INSTALL_L130","A telep�t� XOOPS 1.3.x t�bl�kat tal�lt az adatb�zisbab.<br />A telep�t� megpr�b�lja friss�teni az adatb�zisodat XOOPS2-re.");
define("_INSTALL_L131","A XOOPS2 t�bl�i m�r l�teznek az adatb�zisodban.");
define("_INSTALL_L132","t�bl�k friss�t�se");
define("_INSTALL_L133","A(z) %s t�bla friss�tve.");
define("_INSTALL_L134","A(z) %s t�bl�t nem siekr�lt friss�teni.");
define("_INSTALL_L135","A t�bl�kat nem siker�lt friss�teni.");
define("_INSTALL_L136","Az atab�zis t�bl�i friss�tve.");
define("_INSTALL_L137","modulok friss�t�se");
define("_INSTALL_L138","hozz�sz�l�sok friss�t�re");
define("_INSTALL_L139","avatarok friss�t�se");
define("_INSTALL_L140","mosolyok friss�t�se");
define("_INSTALL_L141","A telep�t� most minden modult friss�t XOOPS2 kompatibilisre.<br />Ellen�rizd, hogy minden f�jlt felt�lt�tt�l-e a XOOPS2 csomagb�l a szerverre.<br />This may take a while to complete.");
define("_INSTALL_L142","Modulok friss�t�se..");
define("_INSTALL_L143","A telep�t� most friss�ti a XOOPS 1.3.x be�ll�t�sokat XOOPS2 kompatibilisre.");
define("_INSTALL_L144","be�ll�t�s friss�t�se");
define("_INSTALL_L145","Hozz�sz�l�s (ID: %s) beillesztve az adatb�zisba.");
define("_INSTALL_L146","A hozz�sz�l�st (ID: %s) nem siker�lt  beilleszteni az adatb�zisba.");
define("_INSTALL_L147","Hozz�sz�l�sok friss�t�se..");
define("_INSTALL_L148","Sikeres friss�t�s.");
define("_INSTALL_L149","A telep�t� most friss�ti a XOOPS 1.3.x -ben tal�lhat� hozz�sz�l�sokat XOOPS2 kompatibilisre.<br />Ez egy j�ideig eltarthat.");
define("_INSTALL_L150","A telep�t� most friss�ti a mosolyokat �s a felhaszn�l�i rang k�peket XOOPS2 kompatibilisre.<br />Ez n�h�ny percet ig�nybe vehet.");
define("_INSTALL_L151","A telep�t� most friss�ti a felhaszn�l�i avatarokat XOOPS2 kompatibilisre.<br />Ez ig�nybe vehet n�h�ny percet.");
define("_INSTALL_L155","Mosoly/rang k�pek friss�t�se..");
define("_INSTALL_L156","Felhaszn�l�i avatarok friss�t�se..");
define("_INSTALL_L157","V�laszd ki az alap�rtelmezett felhaszn�l� csoportot az �sszes szoport tipushoz");
define("_INSTALL_L158","1.3.x -ben tal�lhat� csoportok");
define("_INSTALL_L159","Webmesterek");
define("_INSTALL_L160","Regisztr�lt felhaszn�l�k");
define("_INSTALL_L161","N�vtelen felhaszn�l�k");
define("_INSTALL_L162","Ki kell v�lasztanod az alap�rtelmezett felhaszn�l� csoportot mindegyik csoport tipushoz.");
define("_INSTALL_L163","A(z) %s t�bla eldobva.");
define("_INSTALL_L164","A(z) %s t�bla t�rl�se sikertelen.");
define("_INSTALL_L165","%s sikeresen l�trehozva.");
define("_INSTALL_L166","%s nem hozhat� l�tre.");
define("_INSTALL_L167","Admin bejelentkez� n�v");





// %s is filename
define("_INSTALL_L152","Nem nyithat� meg: %s.");
define("_INSTALL_L153","Nem lehet friss�teni: %s.");
define("_INSTALL_L154","%s friss�tve.");

define('_INSTALL_L128', 'V�laszd ki a telep�t� nyelv�t');
define('_INSTALL_L200', '�jrat�lt');


define('_INSTALL_CHARSET','ISO-8859-2');
?>