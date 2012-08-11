<?php
/**
 * $Id: admin.php,v 1.7 2005/12/21 22:48:40 fx2024 Exp $
 * Modul: WF-Downloads
 * Inaèica: v2.0.5a
 * Datum izdanja: 26 july 2004
 * Autor: WF-Sections
 * Licenca: GNU
 */

// %%%%%%	Modul NMDe 'MyDownloads' (Admin)	  %%%%%
// Gumbi
define("_AM_WFD_BMODIFY","Promijeni");
define("_AM_WFD_BDELETE","Izbriši");
define("_AM_WFD_BADD","Dodaj");
define("_AM_WFD_BAPPROVE","Odobri");
define("_AM_WFD_BIGNORE","Zanemari");
define("_AM_WFD_BCANCEL","Poništi");
define("_AM_WFD_BSAVE","Spremi");
define("_AM_WFD_BRESET","Ponovno postavi");
define("_AM_WFD_BMOVE","Premjesti datoteke");
define("_AM_WFD_BUPLOAD","Otpremi");
define("_AM_WFD_BDELETEIMAGE","Izbriši izabranu sliku");
define("_AM_WFD_BRETURN","Vrati me od kuda sam došao!");
define("_AM_WFD_DBERROR","Greška s pristupom bazi podataka: molimo da prijavite ovu grešku na WFSection strani");
//Protjerani korisnici
define("_AM_WFD_NONBANNED","Nije protjeran");
define("_AM_WFD_BANNED","Protjeran");
define("_AM_WFD_EDITBANNED","Uredi protjerane korisnike");
// Druge opcije
define("_AM_WFD_TEXTOPTIONS","Tekst opcije:");
define("_AM_WFD_ALLOWHTML"," Dozvoli HTML");
define("_AM_WFD_ALLOWSMILEY"," Dozvoli smješke");
define("_AM_WFD_ALLOWXCODE"," Dozvoli XOOPS kod");
define("_AM_WFD_ALLOWIMAGES"," Dozvoli slike");
define("_AM_WFD_ALLOWBREAK"," Koristi XOOPS <i>linebreak</i> pretvorbu?");
define("_AM_WFD_UPLOADFILE","Datoteka uspješno otpremljena");
define("_AM_WFD_NOMENUITEMS","Nema predmeta u izborniku");

// Admin "krušne mrvice"
define("_AM_WFD_PREFS","Postavke");
define("_AM_WFD_PERMISSIONS","Dozvole");
define("_AM_WFD_BINDEX","Temeljna stranica");
define("_AM_WFD_BLOCKADMIN","Blokovi");
define("_AM_WFD_GOMODULE","Otiði do modula");
define("_AM_WFD_BHELP","Pomoæ");
define("_AM_WFD_ABOUT","O...");
// Admin sažetak
define("_AM_WFD_SCATEGORY","Kategorija: ");
define("_AM_WFD_SFILES","Datoteke: ");
define("_AM_WFD_SNEWFILESVAL","Podnešeno: ");
define("_AM_WFD_SMODREQUEST","Promijenjeno: ");
define("_AM_WFD_SREVIEWS","Recenzije: ");
// Admin glavni izbornik
define("_AM_WFD_MCATEGORY","Upravljanje kategorijama");
define("_AM_WFD_INDEXPAGE","Upravljanje temeljnom stranicom");
define("_AM_WFD_MUPLOADS","Otprema slika");
define("_AM_WFD_MMIMETYPES","Upravljanje <i>mimetypeovima</i>");
define("_AM_WFD_MCOMMENTS","Komentari");
define("_AM_WFS_MVOTEDATA","Podaci glasanja");
// èekajuæe recenzije
define("_AM_WFD_AREVIEWS","Upravljanje recenzijama");
define("_AM_WFD_AREVIEWS_WAITING","Recenzije koje èekaju provjeru:");
define("_AM_WFD_AREVIEWS_INFO","Podaci o upravljanju recenzijama");
define("_AM_WFD_AREVIEWS_APPROVE","<b>Odobri</b> novu recenziju bez pregledavanja.");
define("_AM_WFD_AREVIEWS_EDIT","<b>Uredi</b> novu recenziju pa potom odobri.");
define("_AM_WFD_AREVIEWS_DELETE","<b>Izbriši</b> podatke nove recenzije.");

// Kategorije
define("_AM_WFD_CCATEGORY_CREATENEW","Stvori novu kategoriju");
define("_AM_WFD_CCATEGORY_MODIFY","Preinaèi kategoriju");
define("_AM_WFD_CCATEGORY_MOVE","Premjesti kategorijske datoteke");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE","Naslov kategorije:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED","Neuspjelo premještanje datoteka: nemoguæe premještanje u tu kategoriju");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT","Neuspjelo premještanje datoteka: kategorija nije pronaðena");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED","Datoteke premještene");
define("_AM_WFD_CCATEGORY_CREATED","Nova kategorija stvorena i baza podataka uspješno ažurirana");
define("_AM_WFD_CCATEGORY_MODIFIED","Izabrana kategorija preinaèena i baza podataka uspješno ažurirana");
define("_AM_WFD_CCATEGORY_DELETED","Izabrana kategorija izbrisana i baza podataka uspješno ažurirana");
define("_AM_WFD_CCATEGORY_AREUSURE","UPOZORENJE: Jeste li sigurni da želite izbrisati ovu kategoriju i SVE njezine datoteke i komentare?");
define("_AM_WFD_CCATEGORY_NOEXISTS","Morate stvoriti kategoriju prije nego što možete dodati datoteku");
define("_AM_WFD_FCATEGORY_GROUPPROMPT","Dozvola pristupa kategoriji:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Izaberite korisnièke grupe koje æe imati pristup kategoriji.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE","Naslov kategorije:");
define("_AM_WFD_FCATEGORY_WEIGHT","Redni broj kategorije:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY","Postavi kao podkategoriju:");
define("_AM_WFD_FCATEGORY_CIMAGE","Izaberite sliku kategorije:");
define("_AM_WFD_FCATEGORY_DESCRIPTION","Izaberite opis kategorije:");
define("_AM_WFD_FCATEGORY_SUMMARY","Izaberite sažetak kategorije:");
/*
* Temeljna stranica (index page)
*/
define("_AM_WFD_IPAGE_UPDATED","Temeljna stranica je preinaèena i baza podataka uspješno ažurirana!");
define("_AM_WFD_IPAGE_INFORMATION","Podaci temeljne stranice");
define("_AM_WFD_IPAGE_MODIFY","Preinaèi temeljnu stranicu");
define("_AM_WFD_IPAGE_CIMAGE","Izaberite temeljnu sliku:");
define("_AM_WFD_IPAGE_CTITLE","Naslov temeljne stranice:");
define("_AM_WFD_IPAGE_CHEADING","Zaglavlje temeljne stranice:");
define("_AM_WFD_IPAGE_CHEADINGA","Poravnanje zaglavlja:");
define("_AM_WFD_IPAGE_CFOOTER","Podnožje temeljne stranica:");
define("_AM_WFD_IPAGE_CFOOTERA","Poravnanje podnožja:");
define("_AM_WFD_IPAGE_CLEFT","Poravnaj lijevo");
define("_AM_WFD_IPAGE_CCENTER","Poravnaj u sredinu");
define("_AM_WFD_IPAGE_CRIGHT","Poravnaj desno");

/*
*  Dozvole
*/
define("_AM_WFD_PERM_MANAGEMENT","Upravljanje dozvolama");
define("_AM_WFD_PERM_PERMSNOTE","<div><b>NAPOMENA:</b> Budite svjesni da iako ste postavili toènu dozvolu pregledavanja, pojedina grupa možda neæe moæi pregledavati èlanke ili vidjeti blokove ako im niste dodijelili pravo pristupa modulu. Kako biste to uèinili, otiðite u <b>Sustavska administracija > Grupe</b> te izaberite odgovarajuæi grupu i kliknite kvadratiæ da nastane kvaèica kako biste njezinim èlanovima dali pristup.</div>");
define("_AM_WFD_PERM_CPERMISSIONS","Kategorijske dozvole");
define("_AM_WFD_PERM_CSELECTPERMISSIONS","Izaberite kategorije koje svaka grupa može pregledavati");
define("_AM_WFD_PERM_CNOCATEGORY","Nemoguæe podešenje dozvole: još nemate stvorenih kategorija!");
define("_AM_WFD_PERM_FPERMISSIONS","Datoteène dozvole");
define("_AM_WFD_PERM_FNOFILES","Nemoguæe podešenje dozvola: još nemate stvorenih datoteka!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS","Izaberite datoteke koje svaka grupa može pregledavati");
/*
* Otprema
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD","Slika uspješno poslana na poslužitelja");
define("_AM_WFD_DOWN_NOIMAGEEXIST","Greška: nijedna datoteka izabrana za otpremu.  Molimo, pokušajte ponovno!");
define("_AM_WFD_DOWN_IMAGEEXIST","Slika veæ postoji u prostoru za otpremu!");
define("_AM_WFD_DOWN_FILEDELETED","Datoteka je izbrisana.");
define("_AM_WFD_DOWN_FILEERRORDELETE","Greška kod brisanja datoteke: datoteka nije pronaðena na poslužitelju.");
define("_AM_WFD_DOWN_NOFILEERROR","Greška kod brisanja datoteke: nijedna datoteka izabrana za brisanje.");
define("_AM_WFD_DOWN_DELETEFILE","UPOZORENJE: Jeste li sigurni da želite izbrisati ovu sliku?");
define("_AM_WFD_DOWN_IMAGEINFO","Stanje poslužitelja");
define("_AM_WFD_DOWN_SPHPINI","<b>Podaci uzeti iz PHP ini datoteke:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS","Stanje sigurnosnog moda: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS","Registriraj globale: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS","Stanje otpreme poslužitelja: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE","Maks. velièina otpreme dozvoljena: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE","Maks. velièina poruka dozvoljena: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS"," (Ovo može prouzroèiti probleme)");
define("_AM_WFD_DOWN_GDLIBSTATUS","GD biblioteška podrška: ");
define("_AM_WFD_DOWN_GDLIBVERSION","Inaèina GD biblioteke: ");
define("_AM_WFD_DOWN_GDON","<b>Omoguæeno</b> (umanjene slièice dostupne)");
define("_AM_WFD_DOWN_GDOFF","<b>Onemoguæeno</b> (umanjene slièice nisu dostupne)");
define("_AM_WFD_DOWN_OFF","<b>ISKLJUÈENO</b>");
define("_AM_WFD_DOWN_ON","<b>UKLJUÈENO</b>");
define("_AM_WFD_DOWN_CATIMAGE","Kategorijske slike");
define("_AM_WFD_DOWN_SCREENSHOTS","Zaslonske slike");
define("_AM_WFD_DOWN_MAINIMAGEDIR","Glavne slike");
define("_AM_WFD_DOWN_FCATIMAGE","Put do kategorijskih slika");
define("_AM_WFD_DOWN_FSCREENSHOTS","Put do zaslonskih slika");
define("_AM_WFD_DOWN_FMAINIMAGEDIR","Put do glavnih slika");
define("_AM_WFD_DOWN_FUPLOADIMAGETO","Slika otpreme: ");
define("_AM_WFD_DOWN_FUPLOADPATH","Put otpreme: ");
define("_AM_WFD_DOWN_FUPLOADURL","URL otpreme: ");
define("_AM_WFD_DOWN_FOLDERSELECTION","Izaberite otpremsko odredište:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE","Prikaži izabranu sliku:");
define("_AM_WFD_DOWN_FUPLOADIMAGE","Otpremi novu sliku na izabrano odredište:");

// Temeljna stranica
define("_AM_WFD_MINDEX_DOWNSUMMARY","Sažetak modulske administracije");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN","Izdane datoteke:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN","Automatski izdane datoteke:");
define("_AM_WFD_MINDEX_AUTOEXPIRE","Automatski istekle datoteke:");
define("_AM_WFD_MINDEX_OFFLINEDOWN","Offline datoteke:");
define("_AM_WFD_MINDEX_ID","ID");
define("_AM_WFD_MINDEX_TITLE","Naslov datoteke");
define("_AM_WFD_MINDEX_POSTER","Objavljivaè");
define("_AM_WFD_MINDEX_SUBMITTED","Datum objave");
define("_AM_WFD_MINDEX_ONLINESTATUS","Online stanje");
define("_AM_WFD_MINDEX_PUBLISHED","Izdano");
define("_AM_WFD_MINDEX_ACTION","Radnja");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND","OBAVIJEST: Nema zaprema koje podliježu ovim kriterijima");
define("_AM_WFD_MINDEX_PAGE","<b>Stranica:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT','<ul><li>Detalji WF-Downloads glavne stranice.</li><li>S lakoæom možete promijeniti logo, zaglavlje i tekst zaglavlja i podnožja temeljne stranice da odgovara vašem izgledu</li></ul><br /><br />Napomena: Logo kojeg izaberete æe biti korišten po cijelom WF-Downloads modulu.');

// Podnešene datoteke
define("_AM_WFD_SUB_SUBMITTEDFILES","Podnešene datoteke");
define("_AM_WFD_SUB_FILESWAITINGINFO","Èekam podatke datoteka");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION","Datoteke koje èekaju provjeru: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE","<b>Odobri</b> podatke nove datoteke bez provjere.");
define("_AM_WFD_SUB_EDITWAITINGFILE","<b>Uredi</b> podatke nove datoteke pa tek onda odobri.");
define("_AM_WFD_SUB_DELETEWAITINGFILE","<b>Izbriši</b> podatke nove datoteke.");
define("_AM_WFD_SUB_NOFILESWAITING","Nema datoteka koje podliježu ovim kriterijima");
define("_AM_WFD_SUB_NEWFILECREATED","Novi datotetski podaci stvoreni i baza podataka uspješno ažurirana");
// Mimetypeovi
define("_AM_WFD_MIME_ID","ID");
define("_AM_WFD_MIME_EXT","PROD.");
define("_AM_WFD_MIME_NAME","Vrsta aplikacije");
define("_AM_WFD_MIME_ADMIN","Admin");
define("_AM_WFD_MIME_USER","Korisnik");
// Mimetype obrazac
define("_AM_WFD_MIME_CREATEF","Stvori <i>mimetype</i>");
define("_AM_WFD_MIME_MODIFYF","Preinaèi <i>mimetype</i>");
define("_AM_WFD_MIME_EXTF","Produžetak datoteke:");
define("_AM_WFD_MIME_NAMEF","Vrsta/ime datoteke:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite program vezan za ovaj produžetak.</span></div>");
define("_AM_WFD_MIME_TYPEF","<i>Mimetypeovi</i>:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite svaki <i>mimetype</i> vezan za ovaj produžetak. Svaki <i>mimetype</i> mora biti odvojen razmakom.</span></div>");
define("_AM_WFD_MIME_ADMINF","Dozvoljen administracijski <i>mimetype</i>");
define("_AM_WFD_MIME_ADMINFINFO","<b><i>Mimetypeovi</i> dostupni za administracijske otpreme:</b>");
define("_AM_WFD_MIME_USERF","Dozvoljen korisnièki <i>mimetype</i>");
define("_AM_WFD_MIME_USERFINFO","<b><i>Mimetypeovi</i> dostupni za korisnièke otpreme:</b>");
define("_AM_WFD_MIME_NOMIMEINFO","Nijedan <i>mimetype</i> izabran.");
define("_AM_WFD_MIME_FINDMIMETYPE","Pronaði nove <i>mimetypeove</i>:");
define("_AM_WFD_MIME_EXTFIND","Pretraži programske produžetke:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Unesite produžetak kojeg želite pronaæi.</span></div>");
define("_AM_WFD_MIME_INFOTEXT","<ul><li>Novi <i>mimetypeovi</i> mogu s lakoæom biti stvoreni, ureðeni ili izbrisani pomoæu ovog obrasca.</li>
	<li>Traži nove <i>mimetypeove</i> pomoæu vanjske strane.</li>
	<li>Pregledaj prikazane <i>mimetypeove</i> za administracijske i korisnièke otpreme.</li>
	<li>Promijeni stanje <i>mimetype</i> otpreme.</li></ul>
	");

// Mimetype gumbi
define("_AM_WFD_MIME_CREATE","Stvori");
define("_AM_WFD_MIME_CLEAR","Ponovno poèni");
define("_AM_WFD_MIME_CANCEL","Poništi");
define("_AM_WFD_MIME_MODIFY","Preinaèi");
define("_AM_WFD_MIME_DELETE","Izbriši");
define("_AM_WFD_MIME_FINDIT","Uzmi produžetak!");
// Mimetype baza podataka
define("_AM_WFD_MIME_DELETETHIS","Izbriši izabrani <i>mimetype</i>?");
define("_AM_WFD_MIME_MIMEDELETED","<i>Mimetype</i> %s je izbrisan");
define("_AM_WFD_MIME_CREATED","<i>Mimetype</i> podaci stvoreni");
define("_AM_WFD_MIME_MODIFIED","<i>Mimetype</i> podaci preinaèeni");
// Podaci glasanja
define("_AM_WFD_VOTE_RATINGINFOMATION","Podaci glasanja");
define("_AM_WFD_VOTE_TOTALVOTES","Ukupan broj glasova: ");
define("_AM_WFD_VOTE_REGUSERVOTES","Broj glasova registriranih korisnika: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES","Broj glasova anonimnih korisnika: %s");
define("_AM_WFD_VOTE_USER","Korisnik");
define("_AM_WFD_VOTE_IP","IP adresa");
define("_AM_WFD_VOTE_USERAVG","Prosjeèna korisnièka ocjena");
define("_AM_WFD_VOTE_TOTALRATE","Ukupnih ocjena");
define("_AM_WFD_VOTE_DATE","Podnešeno");
define("_AM_WFD_VOTE_RATING","Ocjena");
define("_AM_WFD_VOTE_NOREGVOTES","Nema glasova registriranih korisnika");
define("_AM_WFD_VOTE_NOUNREGVOTES","Nema glasova neregistriranih korisnikas");
define("_AM_WFD_VOTE_VOTEDELETED","Podaci glasanja izbrisani.");
define("_AM_WFD_VOTE_ID","ID");
define("_AM_WFD_VOTE_FILETITLE","Naslov datoteke");
define("_AM_WFD_VOTE_DISPLAYVOTES","Informacije o glasaèkim podacima");
define("_AM_WFD_VOTE_NOVOTES","Nema korisnièkih glasova za prikazati");
define("_AM_WFD_VOTE_DELETE","Nema korisnièkih glasova za prikazati");
define("_AM_WFD_VOTE_DELETEDSC","<b>Briše</b> izabrane podatke glasanja iz baze podataka.");

// Modifikacije
/*
define("_AM_WFD_MOD_TOTMODREQUESTS","Ukupan broj zahtjeva za preinaèenje: ");
define("_AM_WFD_MOD_MODREQUESTS","Preinaèene datoteke");
define("_AM_WFD_MOD_MODREQUESTSINFO","Podaci preinaèenih datoteka");
define("_AM_WFD_MOD_MODID","ID");
define("_AM_WFD_MOD_MODTITLE","Naslov");
define("_AM_WFD_MOD_MODPOSTER","Izvorni objavljivaè: ");
define("_AM_WFD_MOD_DATE","Podnešeno);
define("_AM_WFD_MOD_NOMODREQUEST","Nema zahtjeva koji podliježu ovih kriterijima");
define("_AM_WFD_MOD_MODIFYSUBMIT","Podnašatelj");
define("_AM_WFD_MOD_ORIGINAL","Izvorni detalji zapreme");
define("_AM_WFD_MOD_REQDELETED","Zahtjev za preinaku odstranjen iz baze podataka");
define("_AM_WFD_MOD_REQUPDATED","Izabrana zaprema preinaèena i baza podataka uspješno ažurirana");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS","Ukupno zahtjeva za preinaèenje: ");
define("_AM_WFD_MOD_MODREQUESTS","Preinaèene datoteke");
define("_AM_WFD_MOD_MODREQUESTSINFO","Podaci preinaèenih datoteka");
define("_AM_WFD_MOD_MODID","ID");
define("_AM_WFD_MOD_MODTITLE","Naslov");
define("_AM_WFD_MOD_MODPOSTER","Izvorni objavljivaè: ");
define("_AM_WFD_MOD_DATE","Podnešeno");
define("_AM_WFD_MOD_NOMODREQUEST","Nema zahtjeva koji podliježu ovim kriterijima");
define("_AM_WFD_MOD_TITLE","Naslov zapreme: ");
define("_AM_WFD_MOD_LID","ID zapreme: ");
define("_AM_WFD_MOD_CID","Kategorija: ");
define("_AM_WFD_MOD_URL","URL zapreme: ");
define("_AM_WFD_MOD_MIRROR","Zrcalo zapreme: ");
define("_AM_WFD_MOD_SIZE","Velièina zapreme: ");
define("_AM_WFD_MOD_PUBLISHER","Izdavaè: ");
define("_AM_WFD_MOD_LICENSE","Softverska licenca: ");
define("_AM_WFD_MOD_FEATURES","Kljuène moguænosti: ");
define("_AM_WFD_MOD_FORUMID","Forum: ");
define("_AM_WFD_MOD_LIMITATIONS","Softverska ogranièenja: ");
define("_AM_WFD_MOD_DHISTORY","Povijest zapremanja: ");
define("_AM_WFD_MOD_SCREENSHOT","Zaslonska slika: ");
define("_AM_WFD_MOD_HOMEPAGE","Naslovnica: ");
define("_AM_WFD_MOD_HOMEPAGETITLE","Ime naslovnice: ");
define("_AM_WFD_MOD_VERSION","Inaèica: ");
define("_AM_WFD_MOD_SHOTIMAGE","Zaslonska slika: ");
define("_AM_WFD_MOD_FILESIZE","Velièina datoteke: ");
define("_AM_WFD_MOD_PLATFORM","Softverska platforma: ");
define("_AM_WFD_MOD_PRICE","Cijena: ");
define("_AM_WFD_MOD_LICENCE","Softverska licenca: ");
define("_AM_WFD_MOD_DESCRIPTION","Softverska ogranièenja: ");
define("_AM_WFD_MOD_REQUIREMENTS","Zahtjevi: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER","Podnašatelj: ");
define("_AM_WFD_MOD_MODIFYSUBMIT","Podnašatelj");
define("_AM_WFD_MOD_PROPOSED","Zatraženi zapremski detalji");
define("_AM_WFD_MOD_ORIGINAL","Izvorni zapremski detalji");
define("_AM_WFD_MOD_REQDELETED","Zahtjev za preinaku odstranjen iz baze podataka");
define("_AM_WFD_MOD_REQUPDATED","Izabrana zaprema preinaèena i baza podataka uspješno ažurirana");
define('_AM_WFD_MOD_VIEW','Pregledaj');

//Recenzije
define("_AM_WFD_REV_SNEWMNAMEDESC","Odobri recenziju: ");
define("_AM_WFD_REV_ID","ID");
define("_AM_WFD_REV_TITLE","Naslov");
define("_AM_WFD_REV_POSTER","Podnašatelj");
define("_AM_WFD_REV_SUBMITDATE","Podneseno");
define("_AM_WFD_REV_FTITLE","Naslov recenzije: ");
define("_AM_WFD_REV_FRATING","Recenzentova ocjena: ");
define("_AM_WFD_REV_FDESCRIPTION","Opis recenzije: ");
define("_AM_WFD_REV_FAPPROVE","Odobrenje recenzije: ");
define("_AM_WFD_REV_ACTION","Radnja");
define("_AM_WFD_REV_NOWAITINGREVIEWS","Nema èekajuæih recenzija");
define("_AM_WFD_REV_REVIEW_UPDATED","Izabrana recenzija preinaèena i baza podataka uspješno ažurirana");

//Upravljanje datotekama
define("_AM_WFD_FILE_ID","ID Datoteke: ");
define("_AM_WFD_FILE_IP","IP adresa otpremitelja: ");
define("_AM_WFD_FILE_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dozvoljeni produžeci administracijske otpreme</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE","Preinaèi podatke datoteke");
define("_AM_WFD_FILE_CREATENEWFILE","Stvori novu datoteku");
define("_AM_WFD_FILE_TITLE","Naslov datoteke: ");
define("_AM_WFD_FILE_DLURL","URL datoteke: ");
define("_AM_WFD_FILE_MIRRORURL","Zrcalo datoteke: ");
define("_AM_WFD_FILE_SUMMARY","Sažetak datoteke: ");
define("_AM_WFD_FILE_DESCRIPTION","Opis datoteke: ");
define("_MD_WFD_FILE_SUMMARY","Sažetak datoteke: ");
define("_AM_WFD_FILE_DUPLOAD"," Otpremi datoteku:");
define("_AM_WFD_FILE_CATEGORY","Izaberite kategoriju: ");
define("_AM_WFD_FILE_HOMEPAGETITLE","Ime naslovnice: ");
define("_AM_WFD_FILE_HOMEPAGE","Naslovnica: ");
define("_AM_WFD_FILE_SIZE","Velièina datoteke: ");
define("_AM_WFD_FILE_VERSION","Inaèica datoteke: ");
define("_AM_WFD_FILE_PUBLISHER","Izdavaè datoteke: ");
define("_AM_WFD_FILE_PLATFORM","Softverska platforma: ");
define("_AM_WFD_FILE_LICENCE","Softverska licenca: ");
define("_AM_WFD_FILE_LIMITATIONS","Softverska ogranièenja: ");
define("_AM_WFD_FILE_PRICE","Cijena: ");
define("_AM_WFD_FILE_KEYFEATURES","Kljuène moguænosti:<br /><br /><span style='font-weight: normal;'>Odvojite svaku moguænost sa |</span>");
define("_AM_WFD_FILE_REQUIREMENTS","Sustavski zahtjevi:<br /><br /><span style='font-weight: normal;'>Odvojite svaki zahtjev sa |</span>");
define("_AM_WFD_FILE_HISTORY","Ureðenje povijesti zapremanja:<br /><br /><span style='font-weight: normal;'>Dodajte novu povijest zapreme i koristite samo ovo polje ako trebate urediti prijašnju povijest.</span>");
define("_AM_WFD_FILE_HISTORYD","Dodaj novu povijest zapreme:<br /><br /><span style='font-weight: normal;'>Broj inaèice i datum biti æe automatski dodani</span>");
define("_AM_WFD_FILE_HISTORYVERS","<b>Inaèica: </b>");
define("_AM_WFD_FILE_HISTORDATE"," <b>Ažurirano:</b> ");
define("_AM_WFD_FILE_FILESSTATUS"," Postavi zapremu kao offline?<br /><br /><span style='font-weight: normal;'>Zaprema neæe biti vidljiva svim korisnicima.</span>");
define("_AM_WFD_FILE_SETASUPDATED"," Postavi zapremu kao ažuriranu?<br /><br /><span style='font-weight: normal;'>Zaprema æe prikazati ikonu ažuracije.</span>");
define("_AM_WFD_FILE_SHOTIMAGE","Izaberite zaslonsku sliku: <br /><br /><span style='font-weight: normal;'>Znajte da æe se zaslonska slika pojaviti jedino ako je tako podešeno u postavkama.</span>");
define("_AM_WFD_FILE_DISCUSSINFORUM","Dodaj 'raspravite na forumu'?");
define("_AM_WFD_FILE_PUBLISHDATE","Datum izdavanja datoteke:");
define("_AM_WFD_FILE_EXPIREDATE","Datum isteka datoteke:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE","<br /><br />Odstrani datum izdavanja:");
define("_AM_WFD_FILE_CLEAREXPIREDATE","<br /><br />Odstrani datum isteka:");
define("_AM_WFD_FILE_PUBLISHDATESET"," Datum izdavanja postavljen: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH"," Postavi datum/vrijeme izdavanja");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE"," Postavi datum/vrijeme isteka");
define("_AM_WFD_FILE_SETPUBLISHDATE","<b>Postavi datum izdavanja: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE","<b>Postavi novi datum izdavanja: </b><br />Izdano:");
define("_AM_WFD_FILE_SETPUBDATESETS","<b>Datum izdavanja postavljen: </b><br />Izdaje se na datum:");
define("_AM_WFD_FILE_EXPIREDATESET"," Datum isteka postavljen: ");
define("_AM_WFD_FILE_SETEXPIREDATE","<b>Postavi datum isteka: </b>");
define("_AM_WFD_FILE_MUSTBEVALID","Zaslonska slika mora biti važeæa slikovna datoteka u %s mapi (npr. hrvatska.gif). Ostavite prazno ako nema slike.");
define("_AM_WFD_FILE_EDITAPPROVE","Odobri zapremu:");
define("_AM_WFD_FILE_NEWFILEUPLOAD","Nova datoteka stvorena i baza podataka uspješno ažurirana");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE","Izabrana datoteka preinaèena i baza podataka uspješno ažurirana");
define("_AM_WFD_FILE_REALLYDELETEDTHIS","Stvarno izbrisati izabranu datoteku?");
define("_AM_WFD_FILE_FILEWASDELETED","Datoteka %s uspješno odstranjena iz baze podataka!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE"," Koristi ime zapreme kao naslov datoteke.");
define("_AM_WFD_FILE_FILEAPPROVED","Datoteka odobrena i baza podataka uspješno ažurirana");
define("_AM_WFD_FILE_CREATENEWSSTORY","<b>Stvori prièu u novostima iz zapreme</b>");
define("_AM_WFD_FILE_SUBMITNEWS","Podnesi novu datoteku kao vijest?");
define("_AM_WFD_FILE_NEWSCATEGORY","Izaberite kategoriju za podnašanje vijesti:");
define("_AM_WFD_FILE_NEWSTITLE","Naslov vijesti:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Ostavite prazno ako želite koristiti naslov datoteke</span></div>");

/*
* Slomljene zapreme
*/
define("_AM_WFD_SBROKENSUBMIT","Slomljeno: ");
define("_AM_WFD_BROKEN_FILE","Prijave slomljenosti");
define("_AM_WFD_BROKEN_FILEIGNORED","Prijava slomljenosti zanemarena i uspješno odstranjena iz baze podataka!");
define("_AM_WFD_BROKEN_NOWACK","Obznanjena promjena stanja i baza podataka ažurirana!");
define("_AM_WFD_BROKEN_NOWCON","Potvrðena promjena stanja i baza podataka ažurirana!");
define("_AM_WFD_BROKEN_REPORTINFO","Podaci prijave slomljenosti");
define("_AM_WFD_BROKEN_REPORTSNO","Èekajuæe prijave slomljenosti:");
define("_AM_WFD_BROKEN_IGNOREDESC","<b>Zanemaruje</b> prijavu i samo nju briše.");
define("_AM_WFD_BROKEN_DELETEDESC","<b>Briše</b> prijavljene podatke zapreme i sve prijave na tu datoteku.");
define("_AM_WFD_BROKEN_EDITDESC","<b>Uredi</b> zapremu kako bi ispravio problem.");
define("_AM_WFD_BROKEN_ACKDESC","<b>Obznanjeno</b> Postavi stanje obznanjenosti za prijavu.");
define("_AM_WFD_BROKEN_CONFIRMDESC","<b>Potvrðeno</b> Postavi stanje potvrde za prijavu.");

define("_AM_WFD_BROKEN_ID","ID");
define("_AM_WFD_BROKEN_TITLE","Naslov");
define("_AM_WFD_BROKEN_REPORTER","Prijavitelj");
define("_AM_WFD_BROKEN_FILESUBMITTER","Podnašatelj");
define("_AM_WFD_BROKEN_DATESUBMITTED","Datum podnašanja");
define("_AM_WFD_BROKEN_ACTION","Radnja");
define("_AM_WFD_BROKEN_NOFILEMATCH","Nema prijava slomljenosti koje podliježu ovim kriterijima");
define("_AM_WFD_BROKENFILEDELETED","Opis zapreme odstranjen iz baze podataka kao i prijava slomljenosti");

/*
* O
*/
define("_AM_WFD_BY","od");

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
define("_AM_WFD_ICO_DELETE","Izbriši ovaj predmet");
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
define("_AM_WFD_ICO_CONFIRM","Prijava slomljenosti potvrðena");
define("_AM_WFD_ICO_CONBROKEN","Potvrdi prijavu slomljenosti?");





define("_AM_WFD_DB_CHECKTABLES","Provjeri tabele");
define("_AM_WFD_DB_CURRENTVER","Trenutna inaèica: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER","Inaèica baze podataka %s");
define("_AM_WFD_DB_MSG_ADD_DATA","Podaci dodani u tabelu %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR","Greška kod dodavanja podataka u tabelu %s");
define("_AM_WFD_DB_MSG_CHGFIELD","Mijenjam polje %s u tabeli %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR","Greška kod mijenjanja polja %s u tabeli %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE","Tabela %s stvorena");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR","Greška kod stvaranja tabele %s");
define("_AM_WFD_DB_MSG_NEWFIELD","Uspješno dodavanje polja %s");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR","Greška kod dodavanja polja %s");
define("_AM_WFD_DB_NEEDUPDATE","Vaša baza podataka je prestara. Molimo da nadogradite vaše tabele!<br><b>Napomena: SmartFactory èvrsto preporuèuje da napravite sigurnosnu kopiju svih SmartSection tabela prije nego što pokrenete ovu skriptu za nadogradnju.</b><br>");
define("_AM_WFD_DB_NOUPDATE","Vaša baza podataka je najnovija. Ažuriranje nije potrebna.");
define("_AM_WFD_DB_UPDATE_DB","Ažuriranje baze podataka");
define("_AM_WFD_DB_UPDATE_ERR","Greška kod ažuriranja na inaèicu %s");
define("_AM_WFD_DB_UPDATE_NOW","Užuriraj sada!");
define("_AM_WFD_DB_UPDATE_OK","Uspješno ažurirano na inaèicu %s");
define("_AM_WFD_DB_UPDATE_TO","Ažuriranje na inaèicu %s");

define("_AM_WFD_GOMOD","Otiði do modula");
define("_AM_WFD_UPDATE_MODULE","Užuriraj modul");
define("_AM_WFD_MDOWNLOADS","Upravljanje datotekama");
define("_AM_WFD_DB_MSG_UPDATE_TABLE","Ažuriranje vrijednosti u polju %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR","Greška kod ažuriranja vrijednosti u polju %s");

?>
