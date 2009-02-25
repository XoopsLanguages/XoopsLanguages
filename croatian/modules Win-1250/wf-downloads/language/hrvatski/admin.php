<?php
/**
 * $Id: admin.php,v 1.7 2005/12/21 22:48:40 fx2024 Exp $
 * Modul: WF-Downloads
 * Ina�ica: v2.0.5a
 * Datum izdanja: 26 july 2004
 * Autor: WF-Sections
 * Licenca: GNU
 */

// %%%%%%	Modul NMDe 'MyDownloads' (Admin)	  %%%%%
// Gumbi
define("_AM_WFD_BMODIFY", "Promijeni");
define("_AM_WFD_BDELETE", "Izbri�i");
define("_AM_WFD_BADD", "Dodaj");
define("_AM_WFD_BAPPROVE", "Odobri");
define("_AM_WFD_BIGNORE", "Zanemari");
define("_AM_WFD_BCANCEL", "Poni�ti");
define("_AM_WFD_BSAVE", "Spremi");
define("_AM_WFD_BRESET", "Ponovno postavi");
define("_AM_WFD_BMOVE", "Premjesti datoteke");
define("_AM_WFD_BUPLOAD", "Otpremi");
define("_AM_WFD_BDELETEIMAGE", "Izbri�i izabranu sliku");
define("_AM_WFD_BRETURN", "Vrati me od kuda sam do�ao!");
define("_AM_WFD_DBERROR", "Gre�ka s pristupom bazi podataka: molimo da prijavite ovu gre�ku na WFSection strani");
//Protjerani korisnici
define("_AM_WFD_NONBANNED", "Nije protjeran");
define("_AM_WFD_BANNED", "Protjeran");
define("_AM_WFD_EDITBANNED", "Uredi protjerane korisnike");
// Druge opcije
define("_AM_WFD_TEXTOPTIONS", "Tekst opcije:");
define("_AM_WFD_ALLOWHTML", " Dozvoli HTML");
define("_AM_WFD_ALLOWSMILEY", " Dozvoli smje�ke");
define("_AM_WFD_ALLOWXCODE", " Dozvoli XOOPS kod");
define("_AM_WFD_ALLOWIMAGES", " Dozvoli slike");
define("_AM_WFD_ALLOWBREAK", " Koristi XOOPS <i>linebreak</i> pretvorbu?");
define("_AM_WFD_UPLOADFILE", "Datoteka uspje�no otpremljena");
define("_AM_WFD_NOMENUITEMS", "Nema predmeta u izborniku");

// Admin "kru�ne mrvice"
define("_AM_WFD_PREFS", "Postavke");
define("_AM_WFD_PERMISSIONS", "Dozvole");
define("_AM_WFD_BINDEX", "Temeljna stranica");
define("_AM_WFD_BLOCKADMIN", "Blokovi");
define("_AM_WFD_GOMODULE", "Oti�i do modula");
define("_AM_WFD_BHELP", "Pomo�");
define("_AM_WFD_ABOUT", "O...");
// Admin sa�etak
define("_AM_WFD_SCATEGORY", "Kategorija: ");
define("_AM_WFD_SFILES", "Datoteke: ");
define("_AM_WFD_SNEWFILESVAL", "Podne�eno: ");
define("_AM_WFD_SMODREQUEST", "Promijenjeno: ");
define("_AM_WFD_SREVIEWS", "Recenzije: ");
// Admin glavni izbornik
define("_AM_WFD_MCATEGORY", "Upravljanje kategorijama");
define("_AM_WFD_INDEXPAGE", "Upravljanje temeljnom stranicom");
define("_AM_WFD_MUPLOADS", "Otprema slika");
define("_AM_WFD_MMIMETYPES", "Upravljanje <i>mimetypeovima</i>");
define("_AM_WFD_MCOMMENTS", "Komentari");
define("_AM_WFS_MVOTEDATA", "Podaci glasanja");
// �ekaju�e recenzije
define("_AM_WFD_AREVIEWS", "Upravljanje recenzijama");
define("_AM_WFD_AREVIEWS_WAITING", "Recenzije koje �ekaju provjeru:");
define("_AM_WFD_AREVIEWS_INFO", "Podaci o upravljanju recenzijama");
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Odobri</b> novu recenziju bez pregledavanja.");
define("_AM_WFD_AREVIEWS_EDIT", "<b>Uredi</b> novu recenziju pa potom odobri.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Izbri�i</b> podatke nove recenzije.");

// Kategorije
define("_AM_WFD_CCATEGORY_CREATENEW", "Stvori novu kategoriju");
define("_AM_WFD_CCATEGORY_MODIFY", "Preina�i kategoriju");
define("_AM_WFD_CCATEGORY_MOVE", "Premjesti kategorijske datoteke");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "Naslov kategorije:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Neuspjelo premje�tanje datoteka: nemogu�e premje�tanje u tu kategoriju");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", "Neuspjelo premje�tanje datoteka: kategorija nije prona�ena");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Datoteke premje�tene");
define("_AM_WFD_CCATEGORY_CREATED", "Nova kategorija stvorena i baza podataka uspje�no a�urirana");
define("_AM_WFD_CCATEGORY_MODIFIED", "Izabrana kategorija preina�ena i baza podataka uspje�no a�urirana");
define("_AM_WFD_CCATEGORY_DELETED", "Izabrana kategorija izbrisana i baza podataka uspje�no a�urirana");
define("_AM_WFD_CCATEGORY_AREUSURE", "UPOZORENJE: Jeste li sigurni da �elite izbrisati ovu kategoriju i SVE njezine datoteke i komentare?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "Morate stvoriti kategoriju prije nego �to mo�ete dodati datoteku");
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Dozvola pristupa kategoriji:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Izaberite korisni�ke grupe koje �e imati pristup kategoriji.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Naslov kategorije:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Redni broj kategorije:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Postavi kao podkategoriju:");
define("_AM_WFD_FCATEGORY_CIMAGE", "Izaberite sliku kategorije:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Izaberite opis kategorije:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Izaberite sa�etak kategorije:");
/*
* Temeljna stranica (index page)
*/
define("_AM_WFD_IPAGE_UPDATED", "Temeljna stranica je preina�ena i baza podataka uspje�no a�urirana!");
define("_AM_WFD_IPAGE_INFORMATION", "Podaci temeljne stranice");
define("_AM_WFD_IPAGE_MODIFY", "Preina�i temeljnu stranicu");
define("_AM_WFD_IPAGE_CIMAGE", "Izaberite temeljnu sliku:");
define("_AM_WFD_IPAGE_CTITLE", "Naslov temeljne stranice:");
define("_AM_WFD_IPAGE_CHEADING", "Zaglavlje temeljne stranice:");
define("_AM_WFD_IPAGE_CHEADINGA", "Poravnanje zaglavlja:");
define("_AM_WFD_IPAGE_CFOOTER", "Podno�je temeljne stranica:");
define("_AM_WFD_IPAGE_CFOOTERA", "Poravnanje podno�ja:");
define("_AM_WFD_IPAGE_CLEFT", "Poravnaj lijevo");
define("_AM_WFD_IPAGE_CCENTER", "Poravnaj u sredinu");
define("_AM_WFD_IPAGE_CRIGHT", "Poravnaj desno");

/*
*  Dozvole
*/
define("_AM_WFD_PERM_MANAGEMENT", "Upravljanje dozvolama");
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>NAPOMENA:</b> Budite svjesni da iako ste postavili to�nu dozvolu pregledavanja, pojedina grupa mo�da ne�e mo�i pregledavati �lanke ili vidjeti blokove ako im niste dodijelili pravo pristupa modulu. Kako biste to u�inili, oti�ite u <b>Sustavska administracija > Grupe</b> te izaberite odgovaraju�i grupu i kliknite kvadrati� da nastane kva�ica kako biste njezinim �lanovima dali pristup.</div>");
define("_AM_WFD_PERM_CPERMISSIONS", "Kategorijske dozvole");
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Izaberite kategorije koje svaka grupa mo�e pregledavati");
define("_AM_WFD_PERM_CNOCATEGORY", "Nemogu�e pode�enje dozvole: jo� nemate stvorenih kategorija!");
define("_AM_WFD_PERM_FPERMISSIONS", "Datote�ne dozvole");
define("_AM_WFD_PERM_FNOFILES", "Nemogu�e pode�enje dozvola: jo� nemate stvorenih datoteka!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Izaberite datoteke koje svaka grupa mo�e pregledavati");
/*
* Otprema
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", "Slika uspje�no poslana na poslu�itelja");
define("_AM_WFD_DOWN_NOIMAGEEXIST", "Gre�ka: nijedna datoteka izabrana za otpremu.  Molimo, poku�ajte ponovno!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Slika ve� postoji u prostoru za otpremu!");
define("_AM_WFD_DOWN_FILEDELETED", "Datoteka je izbrisana.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Gre�ka kod brisanja datoteke: datoteka nije prona�ena na poslu�itelju.");
define("_AM_WFD_DOWN_NOFILEERROR", "Gre�ka kod brisanja datoteke: nijedna datoteka izabrana za brisanje.");
define("_AM_WFD_DOWN_DELETEFILE", "UPOZORENJE: Jeste li sigurni da �elite izbrisati ovu sliku?");
define("_AM_WFD_DOWN_IMAGEINFO", "Stanje poslu�itelja");
define("_AM_WFD_DOWN_SPHPINI", "<b>Podaci uzeti iz PHP ini datoteke:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Stanje sigurnosnog moda: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Registriraj globale: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Stanje otpreme poslu�itelja: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Maks. veli�ina otpreme dozvoljena: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Maks. veli�ina poruka dozvoljena: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (Ovo mo�e prouzro�iti probleme)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "GD bibliote�ka podr�ka: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "Ina�ina GD biblioteke: ");
define("_AM_WFD_DOWN_GDON", "<b>Omogu�eno</b> (umanjene sli�ice dostupne)");
define("_AM_WFD_DOWN_GDOFF", "<b>Onemogu�eno</b> (umanjene sli�ice nisu dostupne)");
define("_AM_WFD_DOWN_OFF", "<b>ISKLJU�ENO</b>");
define("_AM_WFD_DOWN_ON", "<b>UKLJU�ENO</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Kategorijske slike");
define("_AM_WFD_DOWN_SCREENSHOTS", "Zaslonske slike");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Glavne slike");
define("_AM_WFD_DOWN_FCATIMAGE", "Put do kategorijskih slika");
define("_AM_WFD_DOWN_FSCREENSHOTS", "Put do zaslonskih slika");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "Put do glavnih slika");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Slika otpreme: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "Put otpreme: ");
define("_AM_WFD_DOWN_FUPLOADURL", "URL otpreme: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Izaberite otpremsko odredi�te:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Prika�i izabranu sliku:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Otpremi novu sliku na izabrano odredi�te:");

// Temeljna stranica
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Sa�etak modulske administracije");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Izdane datoteke:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Automatski izdane datoteke:");
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Automatski istekle datoteke:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Offline datoteke:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Naslov datoteke");
define("_AM_WFD_MINDEX_POSTER", "Objavljiva�");
define("_AM_WFD_MINDEX_SUBMITTED", "Datum objave");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Online stanje");
define("_AM_WFD_MINDEX_PUBLISHED", "Izdano");
define("_AM_WFD_MINDEX_ACTION", "Radnja");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "OBAVIJEST: Nema zaprema koje podlije�u ovim kriterijima");
define("_AM_WFD_MINDEX_PAGE", "<b>Stranica:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>Detalji WF-Downloads glavne stranice.</li><li>S lako�om mo�ete promijeniti logo, zaglavlje i tekst zaglavlja i podno�ja temeljne stranice da odgovara va�em izgledu</li></ul><br /><br />Napomena: Logo kojeg izaberete �e biti kori�ten po cijelom WF-Downloads modulu.');

// Podne�ene datoteke
define("_AM_WFD_SUB_SUBMITTEDFILES", "Podne�ene datoteke");
define("_AM_WFD_SUB_FILESWAITINGINFO", "�ekam podatke datoteka");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Datoteke koje �ekaju provjeru: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Odobri</b> podatke nove datoteke bez provjere.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Uredi</b> podatke nove datoteke pa tek onda odobri.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Izbri�i</b> podatke nove datoteke.");
define("_AM_WFD_SUB_NOFILESWAITING", "Nema datoteka koje podlije�u ovim kriterijima");
define("_AM_WFD_SUB_NEWFILECREATED", "Novi datotetski podaci stvoreni i baza podataka uspje�no a�urirana");
// Mimetypeovi
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "PROD.");
define("_AM_WFD_MIME_NAME", "Vrsta aplikacije");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "Korisnik");
// Mimetype obrazac
define("_AM_WFD_MIME_CREATEF", "Stvori <i>mimetype</i>");
define("_AM_WFD_MIME_MODIFYF", "Preina�i <i>mimetype</i>");
define("_AM_WFD_MIME_EXTF", "Produ�etak datoteke:");
define("_AM_WFD_MIME_NAMEF", "Vrsta/ime datoteke:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite program vezan za ovaj produ�etak.</span></div>");
define("_AM_WFD_MIME_TYPEF", "<i>Mimetypeovi</i>:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite svaki <i>mimetype</i> vezan za ovaj produ�etak. Svaki <i>mimetype</i> mora biti odvojen razmakom.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Dozvoljen administracijski <i>mimetype</i>");
define("_AM_WFD_MIME_ADMINFINFO", "<b><i>Mimetypeovi</i> dostupni za administracijske otpreme:</b>");
define("_AM_WFD_MIME_USERF", "Dozvoljen korisni�ki <i>mimetype</i>");
define("_AM_WFD_MIME_USERFINFO", "<b><i>Mimetypeovi</i> dostupni za korisni�ke otpreme:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Nijedan <i>mimetype</i> izabran.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Prona�i nove <i>mimetypeove</i>:");
define("_AM_WFD_MIME_EXTFIND", "Pretra�i programske produ�etke:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite produ�etak kojeg �elite prona�i.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Novi <i>mimetypeovi</i> mogu s lako�om biti stvoreni, ure�eni ili izbrisani pomo�u ovog obrasca.</li>
	<li>Tra�i nove <i>mimetypeove</i> pomo�u vanjske strane.</li>
	<li>Pregledaj prikazane <i>mimetypeove</i> za administracijske i korisni�ke otpreme.</li>
	<li>Promijeni stanje <i>mimetype</i> otpreme.</li></ul>
	");

// Mimetype gumbi
define("_AM_WFD_MIME_CREATE", "Stvori");
define("_AM_WFD_MIME_CLEAR", "Ponovno po�ni");
define("_AM_WFD_MIME_CANCEL", "Poni�ti");
define("_AM_WFD_MIME_MODIFY", "Preina�i");
define("_AM_WFD_MIME_DELETE", "Izbri�i");
define("_AM_WFD_MIME_FINDIT", "Uzmi produ�etak!");
// Mimetype baza podataka
define("_AM_WFD_MIME_DELETETHIS", "Izbri�i izabrani <i>mimetype</i>?");
define("_AM_WFD_MIME_MIMEDELETED", "<i>Mimetype</i> %s je izbrisan");
define("_AM_WFD_MIME_CREATED", "<i>Mimetype</i> podaci stvoreni");
define("_AM_WFD_MIME_MODIFIED", "<i>Mimetype</i> podaci preina�eni");
// Podaci glasanja
define("_AM_WFD_VOTE_RATINGINFOMATION", "Podaci glasanja");
define("_AM_WFD_VOTE_TOTALVOTES", "Ukupan broj glasova: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Broj glasova registriranih korisnika: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES", "Broj glasova anonimnih korisnika: %s");
define("_AM_WFD_VOTE_USER", "Korisnik");
define("_AM_WFD_VOTE_IP", "IP adresa");
define("_AM_WFD_VOTE_USERAVG", "Prosje�na korisni�ka ocjena");
define("_AM_WFD_VOTE_TOTALRATE", "Ukupnih ocjena");
define("_AM_WFD_VOTE_DATE", "Podne�eno");
define("_AM_WFD_VOTE_RATING", "Ocjena");
define("_AM_WFD_VOTE_NOREGVOTES", "Nema glasova registriranih korisnika");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Nema glasova neregistriranih korisnikas");
define("_AM_WFD_VOTE_VOTEDELETED", "Podaci glasanja izbrisani.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "Naslov datoteke");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informacije o glasa�kim podacima");
define("_AM_WFD_VOTE_NOVOTES", "Nema korisni�kih glasova za prikazati");
define("_AM_WFD_VOTE_DELETE", "Nema korisni�kih glasova za prikazati");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Bri�e</b> izabrane podatke glasanja iz baze podataka.");

// Modifikacije
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Ukupan broj zahtjeva za preina�enje: ");
define("_AM_WFD_MOD_MODREQUESTS", "Preina�ene datoteke");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Podaci preina�enih datoteka");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Naslov");
define("_AM_WFD_MOD_MODPOSTER", "Izvorni objavljiva�: ");
define("_AM_WFD_MOD_DATE", "Podne�eno);
define("_AM_WFD_MOD_NOMODREQUEST", "Nema zahtjeva koji podlije�u ovih kriterijima");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Podna�atelj");
define("_AM_WFD_MOD_ORIGINAL", "Izvorni detalji zapreme");
define("_AM_WFD_MOD_REQDELETED", "Zahtjev za preinaku odstranjen iz baze podataka");
define("_AM_WFD_MOD_REQUPDATED", "Izabrana zaprema preina�ena i baza podataka uspje�no a�urirana");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "Ukupno zahtjeva za preina�enje: ");
define("_AM_WFD_MOD_MODREQUESTS", "Preina�ene datoteke");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Podaci preina�enih datoteka");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Naslov");
define("_AM_WFD_MOD_MODPOSTER", "Izvorni objavljiva�: ");
define("_AM_WFD_MOD_DATE", "Podne�eno");
define("_AM_WFD_MOD_NOMODREQUEST", "Nema zahtjeva koji podlije�u ovim kriterijima");
define("_AM_WFD_MOD_TITLE", "Naslov zapreme: ");
define("_AM_WFD_MOD_LID", "ID zapreme: ");
define("_AM_WFD_MOD_CID", "Kategorija: ");
define("_AM_WFD_MOD_URL", "URL zapreme: ");
define("_AM_WFD_MOD_MIRROR", "Zrcalo zapreme: ");
define("_AM_WFD_MOD_SIZE", "Veli�ina zapreme: ");
define("_AM_WFD_MOD_PUBLISHER", "Izdava�: ");
define("_AM_WFD_MOD_LICENSE", "Softverska licenca: ");
define("_AM_WFD_MOD_FEATURES", "Klju�ne mogu�nosti: ");
define("_AM_WFD_MOD_FORUMID", "Forum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Softverska ograni�enja: ");
define("_AM_WFD_MOD_DHISTORY", "Povijest zapremanja: ");
define("_AM_WFD_MOD_SCREENSHOT", "Zaslonska slika: ");
define("_AM_WFD_MOD_HOMEPAGE", "Naslovnica: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "Ime naslovnice: ");
define("_AM_WFD_MOD_VERSION", "Ina�ica: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Zaslonska slika: ");
define("_AM_WFD_MOD_FILESIZE", "Veli�ina datoteke: ");
define("_AM_WFD_MOD_PLATFORM", "Softverska platforma: ");
define("_AM_WFD_MOD_PRICE", "Cijena: ");
define("_AM_WFD_MOD_LICENCE", "Softverska licenca: ");
define("_AM_WFD_MOD_DESCRIPTION", "Softverska ograni�enja: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Zahtjevi: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Podna�atelj: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Podna�atelj");
define("_AM_WFD_MOD_PROPOSED", "Zatra�eni zapremski detalji");
define("_AM_WFD_MOD_ORIGINAL", "Izvorni zapremski detalji");
define("_AM_WFD_MOD_REQDELETED", "Zahtjev za preinaku odstranjen iz baze podataka");
define("_AM_WFD_MOD_REQUPDATED", "Izabrana zaprema preina�ena i baza podataka uspje�no a�urirana");
define('_AM_WFD_MOD_VIEW','Pregledaj');

//Recenzije
define("_AM_WFD_REV_SNEWMNAMEDESC", "Odobri recenziju: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "Naslov");
define("_AM_WFD_REV_POSTER", "Podna�atelj");
define("_AM_WFD_REV_SUBMITDATE", "Podneseno");
define("_AM_WFD_REV_FTITLE", "Naslov recenzije: ");
define("_AM_WFD_REV_FRATING", "Recenzentova ocjena: ");
define("_AM_WFD_REV_FDESCRIPTION", "Opis recenzije: ");
define("_AM_WFD_REV_FAPPROVE", "Odobrenje recenzije: ");
define("_AM_WFD_REV_ACTION", "Radnja");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Nema �ekaju�ih recenzija");
define("_AM_WFD_REV_REVIEW_UPDATED", "Izabrana recenzija preina�ena i baza podataka uspje�no a�urirana");

//Upravljanje datotekama
define("_AM_WFD_FILE_ID", "ID Datoteke: ");
define("_AM_WFD_FILE_IP", "IP adresa otpremitelja: ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dozvoljeni produ�eci administracijske otpreme</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Preina�i podatke datoteke");
define("_AM_WFD_FILE_CREATENEWFILE", "Stvori novu datoteku");
define("_AM_WFD_FILE_TITLE", "Naslov datoteke: ");
define("_AM_WFD_FILE_DLURL", "URL datoteke: ");
define("_AM_WFD_FILE_MIRRORURL", "Zrcalo datoteke: ");
define("_AM_WFD_FILE_SUMMARY", "Sa�etak datoteke: ");
define("_AM_WFD_FILE_DESCRIPTION", "Opis datoteke: ");
define("_MD_WFD_FILE_SUMMARY", "Sa�etak datoteke: ");
define("_AM_WFD_FILE_DUPLOAD", " Otpremi datoteku:");
define("_AM_WFD_FILE_CATEGORY", "Izaberite kategoriju: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "Ime naslovnice: ");
define("_AM_WFD_FILE_HOMEPAGE", "Naslovnica: ");
define("_AM_WFD_FILE_SIZE", "Veli�ina datoteke: ");
define("_AM_WFD_FILE_VERSION", "Ina�ica datoteke: ");
define("_AM_WFD_FILE_PUBLISHER", "Izdava� datoteke: ");
define("_AM_WFD_FILE_PLATFORM", "Softverska platforma: ");
define("_AM_WFD_FILE_LICENCE", "Softverska licenca: ");
define("_AM_WFD_FILE_LIMITATIONS", "Softverska ograni�enja: ");
define("_AM_WFD_FILE_PRICE", "Cijena: ");
define("_AM_WFD_FILE_KEYFEATURES", "Klju�ne mogu�nosti:<br /><br /><span style='font-weight: normal;'>Odvojite svaku mogu�nost sa |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Sustavski zahtjevi:<br /><br /><span style='font-weight: normal;'>Odvojite svaki zahtjev sa |</span>");
define("_AM_WFD_FILE_HISTORY", "Ure�enje povijesti zapremanja:<br /><br /><span style='font-weight: normal;'>Dodajte novu povijest zapreme i koristite samo ovo polje ako trebate urediti prija�nju povijest.</span>");
define("_AM_WFD_FILE_HISTORYD", "Dodaj novu povijest zapreme:<br /><br /><span style='font-weight: normal;'>Broj ina�ice i datum biti �e automatski dodani</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Ina�ica: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>A�urirano:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", " Postavi zapremu kao offline?<br /><br /><span style='font-weight: normal;'>Zaprema ne�e biti vidljiva svim korisnicima.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Postavi zapremu kao a�uriranu?<br /><br /><span style='font-weight: normal;'>Zaprema �e prikazati ikonu a�uracije.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Izaberite zaslonsku sliku: <br /><br /><span style='font-weight: normal;'>Znajte da �e se zaslonska slika pojaviti jedino ako je tako pode�eno u postavkama.</span>");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Dodaj 'raspravite na forumu'?");
define("_AM_WFD_FILE_PUBLISHDATE", "Datum izdavanja datoteke:");
define("_AM_WFD_FILE_EXPIREDATE", "Datum isteka datoteke:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Odstrani datum izdavanja:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Odstrani datum isteka:");
define("_AM_WFD_FILE_PUBLISHDATESET", " Datum izdavanja postavljen: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", " Postavi datum/vrijeme izdavanja");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Postavi datum/vrijeme isteka");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Postavi datum izdavanja: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Postavi novi datum izdavanja: </b><br />Izdano:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Datum izdavanja postavljen: </b><br />Izdaje se na datum:");
define("_AM_WFD_FILE_EXPIREDATESET", " Datum isteka postavljen: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Postavi datum isteka: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "Zaslonska slika mora biti va�e�a slikovna datoteka u %s mapi (npr. hrvatska.gif). Ostavite prazno ako nema slike.");
define("_AM_WFD_FILE_EDITAPPROVE", "Odobri zapremu:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Nova datoteka stvorena i baza podataka uspje�no a�urirana");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Izabrana datoteka preina�ena i baza podataka uspje�no a�urirana");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "Stvarno izbrisati izabranu datoteku?");
define("_AM_WFD_FILE_FILEWASDELETED", "Datoteka %s uspje�no odstranjena iz baze podataka!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Koristi ime zapreme kao naslov datoteke.");
define("_AM_WFD_FILE_FILEAPPROVED", "Datoteka odobrena i baza podataka uspje�no a�urirana");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Stvori pri�u u novostima iz zapreme</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Podnesi novu datoteku kao vijest?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Izaberite kategoriju za podna�anje vijesti:");
define("_AM_WFD_FILE_NEWSTITLE", "Naslov vijesti:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Ostavite prazno ako �elite koristiti naslov datoteke</span></div>");

/*
* Slomljene zapreme
*/
define("_AM_WFD_SBROKENSUBMIT", "Slomljeno: ");
define("_AM_WFD_BROKEN_FILE", "Prijave slomljenosti");
define("_AM_WFD_BROKEN_FILEIGNORED", "Prijava slomljenosti zanemarena i uspje�no odstranjena iz baze podataka!");
define("_AM_WFD_BROKEN_NOWACK", "Obznanjena promjena stanja i baza podataka a�urirana!");
define("_AM_WFD_BROKEN_NOWCON", "Potvr�ena promjena stanja i baza podataka a�urirana!");
define("_AM_WFD_BROKEN_REPORTINFO", "Podaci prijave slomljenosti");
define("_AM_WFD_BROKEN_REPORTSNO", "�ekaju�e prijave slomljenosti:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Zanemaruje</b> prijavu i samo nju bri�e.");
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Bri�e</b> prijavljene podatke zapreme i sve prijave na tu datoteku.");
define("_AM_WFD_BROKEN_EDITDESC", "<b>Uredi</b> zapremu kako bi ispravio problem.");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Obznanjeno</b> Postavi stanje obznanjenosti za prijavu.");
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Potvr�eno</b> Postavi stanje potvrde za prijavu.");

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "Naslov");
define("_AM_WFD_BROKEN_REPORTER", "Prijavitelj");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Podna�atelj");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Datum podna�anja");
define("_AM_WFD_BROKEN_ACTION", "Radnja");
define("_AM_WFD_BROKEN_NOFILEMATCH", "Nema prijava slomljenosti koje podlije�u ovim kriterijima");
define("_AM_WFD_BROKENFILEDELETED", "Opis zapreme odstranjen iz baze podataka kao i prijava slomljenosti");

/*
* O
*/
define("_AM_WFD_BY", "od");

//blok
define("_AM_WFD_BADMIN","Administracija bloka");
define("_AM_WFD_BLKDESC","Opis");
define("_AM_WFD_TITLE","Naslov");
define("_AM_WFD_SIDE","Poravnanje");
define("_AM_WFD_WEIGHT","Redoslijed");
define("_AM_WFD_VISIBLE","Vidljiv");
define("_AM_WFD_ACTION","Radnja");
define("_AM_WFD_SBLEFT","Lijevo");
define("_AM_WFD_SBRIGHT","Desno");
define("_AM_WFD_CBLEFT","Lijevi centar");
define("_AM_WFD_CBRIGHT","Desni centar");
define("_AM_WFD_CBCENTER","Sam centar");
define("_AM_WFD_ACTIVERIGHTS","Aktivna prava");
define("_AM_WFD_ACCESSRIGHTS","Prava pristupa");

//image admin icon
define("_AM_WFD_ICO_EDIT","Uredi ovaj predmet");
define("_AM_WFD_ICO_DELETE","Izbri�i ovaj predmet");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Odobreno");
define("_AM_WFD_ICO_NOTAPPROVED","Nije odobreno");

define("_AM_WFD_ICO_LINK","Srodan link");
define("_AM_WFD_ICO_URL","Dodaj srodni URL");
define("_AM_WFD_ICO_ADD","Dodaj");
define("_AM_WFD_ICO_APPROVE","Odobri");
define("_AM_WFD_ICO_STATS","Statistika");

define("_AM_WFD_ICO_IGNORE","Zanemari");
define("_AM_WFD_ICO_ACK","Prijava slomljenosti obznanjena");
define("_AM_WFD_ICO_REPORT","Obznani prijavu slomljenosti?");
define("_AM_WFD_ICO_CONFIRM","Prijava slomljenosti potvr�ena");
define("_AM_WFD_ICO_CONBROKEN","Potvrdi prijavu slomljenosti?");





define("_AM_WFD_DB_CHECKTABLES", "Provjeri tabele");
define("_AM_WFD_DB_CURRENTVER", "Trenutna ina�ica: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER", "Ina�ica baze podataka %s");
define("_AM_WFD_DB_MSG_ADD_DATA", "Podaci dodani u tabelu %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR", "Gre�ka kod dodavanja podataka u tabelu %s");
define("_AM_WFD_DB_MSG_CHGFIELD", "Mijenjam polje %s u tabeli %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR", "Gre�ka kod mijenjanja polja %s u tabeli %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE", "Tabela %s stvorena");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR", "Gre�ka kod stvaranja tabele %s");
define("_AM_WFD_DB_MSG_NEWFIELD", "Uspje�no dodavanje polja %s");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR", "Gre�ka kod dodavanja polja %s");
define("_AM_WFD_DB_NEEDUPDATE", "Va�a baza podataka je prestara. Molimo da nadogradite va�e tabele!<br><b>Napomena: SmartFactory �vrsto preporu�uje da napravite sigurnosnu kopiju svih SmartSection tabela prije nego �to pokrenete ovu skriptu za nadogradnju.</b><br>");
define("_AM_WFD_DB_NOUPDATE", "Va�a baza podataka je najnovija. A�uriranje nije potrebna.");
define("_AM_WFD_DB_UPDATE_DB", "A�uriranje baze podataka");
define("_AM_WFD_DB_UPDATE_ERR", "Gre�ka kod a�uriranja na ina�icu %s");
define("_AM_WFD_DB_UPDATE_NOW", "U�uriraj sada!");
define("_AM_WFD_DB_UPDATE_OK", "Uspje�no a�urirano na ina�icu %s");
define("_AM_WFD_DB_UPDATE_TO", "A�uriranje na ina�icu %s");

define("_AM_WFD_GOMOD", "Oti�i do modula");
define("_AM_WFD_UPDATE_MODULE", "U�uriraj modul");
define("_AM_WFD_MDOWNLOADS","Upravljanje datotekama");
define("_AM_WFD_DB_MSG_UPDATE_TABLE", "A�uriranje vrijednosti u polju %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR", "Gre�ka kod a�uriranja vrijednosti u polju %s");

?>
