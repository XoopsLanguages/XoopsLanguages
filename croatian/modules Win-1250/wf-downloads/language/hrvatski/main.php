<?php
/**
 * $Id: main.php,v 1.2 2005/12/23 06:20:33 m0nty_ Exp $
 * Modul: WF-Downloads
 * Ina�ica: v2.0.5a
 * Datum objave: 26 july 2004
 * Autor: WF-Sections
 * Licenca: GNU
 */
 
//Todo - Still to remove redundat defines from this area. 
define("_MD_WFD_NODOWNLOAD", "Ova zaprema ne postoji!");
define("_MD_WFD_MINPOSTS", "Trebate pove�ati svoj broj poruka<br />prije nego �to mo�ete otpremati i zapremati datoteke");

define("_MD_WFD_SUBCATLISTING", "Lista kategorija");
define("_MD_WFD_ISADMINNOTICE", "Administrator: ima problema sa ovom slikom.");
define("_MD_WFD_THANKSFORINFO", "Hvala vam na podna�anju. Bit �ete obavije�teni kada administrator odobri va� zahtjev.");
define("_MD_WFD_ISAPPROVED", "Hvala vam na podna�anju. Va� zahtjev je odobren i bit �e prikazan na na�oj listi.");
define("_MD_WFD_THANKSFORHELP", "Hvala vam na pomo�i za odr�avanje integriteta ove mape.");
define("_MD_WFD_FORSECURITY", "U sigurnosne svrhe va� IP i korisni�ko ime �e isto biti trenutno zabilje�eni.");
define("_MD_WFD_NOPERMISETOLINK", "Ova datoteka ne pripada strani od koje ste do�li <br /><br />Molimo da kontaktirate administratora te strane i ka�ete:   <br /><b>NEMOJTE PARAZITIRATI, KRASTI TU�E LINKOVE!</b> <br /><br /><b>Definicija parazita:</b> Onaj koji je prelijen da pove�e datoteku sa svog poslu�itelja ili ukrade te�ki rad drugih ljudi i napravi da izgleda kako je njegovo <br /><br />  Va�a IP adresa <b>je zabilje�ena</b>.");
define("_MD_WFD_SUMMARY", "Sa�etak<br /><br /><span style='font-weight: normal;'>Ovo mo�ete ostaviti prazno<br />Sa�etak �e biti stvoren ako je prazno</span>");
define("_MD_WFD_DESCRIPTION", "Opis");
define("_MD_WFD_SUBMITCATHEAD", "Obrazac za slanje zapreme");
define("_MD_WFD_MAIN", "PO�ETNA");
define("_MD_WFD_POPULAR", "Popularno");
define("_MD_WFD_NEWTHISWEEK", "Novo ovog tjedna");
define("_MD_WFD_UPTHISWEEK", "A�urirano ovog tjedna");
define("_MD_WFD_POPULARITYLTOM", "Popularnost (najmanje prema najvi�e pregleda)");
define("_MD_WFD_POPULARITYMTOL", "Popularnost(najvi�e prema najmanje pregleda)");
define("_MD_WFD_TITLEATOZ", "Naslov (A do �)");
define("_MD_WFD_TITLEZTOA", "Naslov (� do A)");
define("_MD_WFD_DATEOLD", "Datum (prvo izlistane stare datoteke)");
define("_MD_WFD_DATENEW", "Datum (prvo izlistane nove datoteke)");
define("_MD_WFD_RATINGLTOH", "Ocjena (najlo�ije prema najboljem)");
define("_MD_WFD_RATINGHTOL", "Ocjena (najbolje prema najlo�ijem)");
define("_MD_WFD_DESCRIPTIONC", "Opis: ");
define("_MD_WFD_CATEGORYC", "Kategorija: ");
define("_MD_WFD_VERSION", "Ina�ica");
define("_MD_WFD_SUBMITDATE", "Izdano");
define("_MD_WFD_DLTIMES", "Zapremljeno %s puta");
define("_MD_WFD_FILESIZE", "Veli�ina datoteke (bajtovi)");
define("_MD_WFD_SUPPORTEDPLAT", "Platforma");
define("_MD_WFD_HOMEPAGE", "Po�etna");
define("_MD_WFD_PUBLISHERC", "Izdava�: ");
define("_MD_WFD_RATINGC", "Ocjena: ");
define("_MD_WFD_ONEVOTE", "1 glasanje");
define("_MD_WFD_NUMVOTES", "%s glasanja");
define("_MD_WFD_RATETHISFILE", "Ocjeni izvor");
define("_MD_WFD_REVIEWTHISFILE", "Recenziraj izvor");
define("_MD_WFD_REVIEWS", "Recenzije:");
define("_MD_WFD_DOWNLOADHITS", "Zapreme");
define("_MD_WFD_MODIFY", "Preina�i");
define("_MD_WFD_REPORTBROKEN", "Prijavi kao slomljeno");
define("_MD_WFD_BROKENREPORT", "Prijavi slomljen izvor");
define("_MD_WFD_SUBMITBROKEN", "Podnesi");
define("_MD_WFD_BEFORESUBMIT", "Prije podna�anja slomljenog izvora molimo da provjerite kako datoteke koju �elite prijaviti zaista nema a ne da su internet stranice samo onemogu�ene.");
define("_MD_WFD_TELLAFRIEND", "Preporu�i");
define("_MD_WFD_EDIT", "Uredi");
define("_MD_WFD_THEREARE", "Postoje <b>%s</b> <i>kategorije</i> i <b>%s</b> <i>zapreme</i> na listi");
define("_MD_WFD_THEREIS", "Postoji <b>%s</b> <i>kategorija</i> i <b>%s</b> <i>zaprema</i> na listi");
define("_MD_WFD_LATESTLIST", "Najnovije");
define("_MD_WFD_FILETITLE", "Naslov zapreme: ");
define("_MD_WFD_DLURL", "URL zapreme: ");
define("_MD_WFD_HOMEPAGEC", "Po�etna strana: ");
define("_MD_WFD_UPLOAD_FILEC", "Otpremi datoteku: ");
define("_MD_WFD_VERSIONC", "Ina�ica: ");
define("_MD_WFD_FILESIZEC", "Veli�ina datoteke (bajtovi): ");
define("_MD_WFD_NUMBYTES", "%s bajtova");
define("_MD_WFD_PLATFORMC", "Platforme: ");
define("_MD_WFD_PRICE", "Cijena");
define("_MD_WFD_LIMITS", "Ograni�enja");
define("_MD_WFD_DOWNLICENSE", "Licenca");
define("_MD_WFD_NOTSPECIFIED", "Nije odre�eno");
define("_MD_WFD_MIRRORSITE", "Zrcalo zapreme");
define("_MD_WFD_MIRROR", "Stranice zrcala");
define("_MD_WFD_PUBLISHER", "Izdava�");
define("_MD_WFD_UPDATEDON", "A�urirano");
define("_MD_WFD_PRICEFREE", "Besplatno");
define("_MD_WFD_VIEWDETAILS", "Pogledaj pune detalje");
define("_MD_WFD_OPTIONS", 'Opcije: ');
define("_MD_WFD_NOTIFYAPPROVE", 'Obavijesti me kada se ova datoteka odobri');
define("_MD_WFD_VOTEAPPRE", "Va� glas je cijenjen.");
define("_MD_WFD_THANKYOU", "Hvala vam na vremenu za glasanje na %s"); // %s is your site name
define("_MD_WFD_VOTEONCE", "Molimo da ne glasate za isti izvor vi�e od jednom.");
define("_MD_WFD_RATINGSCALE", "Ljestvica je od 1 do 10. 1 je lo�e a 10 izvrsno.");
define("_MD_WFD_BEOBJECTIVE", "Molimo da budete objektivni, ako svi dobe 1 ili 10, ocjene nisu veoma korisne.");
define("_MD_WFD_DONOTVOTE", "Ne glasajte za vlastiti izvor.");
define("_MD_WFD_RATEIT", "Ocjenite!");
define("_MD_WFD_INTFILEFOUND", "Evo dobre datoteke za zapremu sa %s"); // %s is your site name
define("_MD_WFD_RANK", "Rang");
define("_MD_WFD_CATEGORY", "Kategorija");
define("_MD_WFD_HITS", "Pregleda");
define("_MD_WFD_RATING", "Rating");
define("_MD_WFD_VOTE", "Glasuj");
define("_MD_WFD_SORTBY", "Razvrstaj po:");
define("_MD_WFD_TITLE", "Naslov");
define("_MD_WFD_DATE", "Datum");
define("_MD_WFD_POPULARITY", "Popularnost");
define("_MD_WFD_TOPRATED", "Ocjena");
define("_MD_WFD_CURSORTBY", "Datoteke su trenutno razvrstane po: %s");
define("_MD_WFD_CANCEL", "Poni�ti");
define("_MD_WFD_ALREADYREPORTED", "Ve� ste prijavili slomljenost ovog izvora.");
define("_MD_WFD_MUSTREGFIRST", "�ao nam je ali nemate potrebno odobrenje za izvr�avanje ove radnje.<br />Molimo da se prvo registrirate ili prijavite!");
define("_MD_WFD_NORATING", "Nije odabrana ocjena.");
define("_MD_WFD_CANTVOTEOWN", "Ne mo�ete glasati za izvor koji ste vi poslali.<br />Sva glasanja se bilje�e i odobravaju.");
define("_MD_WFD_SUBMITDOWNLOAD", "Podnesite zapremu");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Sve nove zapreme se provjeravaju i mo�e potrajati do 24 sata da se ne pojave na na�oj listi.</li><li>Zadr�avamo prava da odbijemo ili promijenimo sadr�aj bilo kojeg podna�anja bez obavijesti.</li></ul>");
define("_MD_WFD_MAINLISTING", "Lista glavne kategorije");
define("_MD_WFD_LASTWEEK", "Pro�li tjedan");
define("_MD_WFD_LAST30DAYS", "Pro�lih 30 dana");
define("_MD_WFD_1WEEK", "1 tjedan");
define("_MD_WFD_2WEEKS", "2 tjedna");
define("_MD_WFD_30DAYS", "30 dana");
define("_MD_WFD_SHOW", "Prika�i");
define("_MD_WFD_DAYS", "dana");
define("_MD_WFD_NEWDOWNLOADS", "Nove zapreme");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Ukupne nove zapreme");
define("_MD_WFD_DTOTALFORLAST", "Ukupne nove zapreme za zadnjih");
define("_MD_WFD_AGREE", "Sla�em se");
define("_MD_WFD_DOYOUAGREE", "Sla�ete li se sa gore navedenim uvjetima?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Odrje�itelj");
define("_MD_WFD_DUPLOADSCRSHOT", "Otpremi sliku:");
define("_MD_WFD_RESOURCEID", "Broj identifikacije izvora: ");
define("_MD_WFD_REPORTER", "Izvorni prijavitelj: ");
define("_MD_WFD_DATEREPORTED", "Datum prijave: ");
define("_MD_WFD_RESOURCEREPORTED", "Izvor prijavljen kao slomljen");
define("_MD_WFD_BROWSETOTOPIC", "<b>Pretra�uj zapreme po abecednom redu</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Prijava slomljene datoteke obznanjena: ");
define("_MD_WFD_WEBMASTERCONFIRM", "Prijava slomljene datoteke potvr�ena: ");
define("_MD_WFD_DELETE", "Izbri�i");
define("_MD_WFD_DISPLAYING", "Prikazano po: ");
define("_MD_WFD_LEGENDTEXTNEW", "Novo danas");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Novo u zadnja 3 dana");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Novo ovaj tjedan");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Preko jednog tjedna");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Gre�ka: ova datoteka ne postoji!");
define("_MD_WFD_BROKENREPORTED", "Slomljena datoteka prijavljena");
// visit
define("_MD_WFD_DOWNINPROGRESS", "Zaprema u tijeku");
define("_MD_WFD_DOWNSTARTINSEC", "Va�e zapremanje bi trebala po�eti za 3 sekunde...<b>molimo pri�ekajte</b>.");
define("_MD_WFD_DOWNNOTSTART", "Ako va�ae zapremanje ne po�ne, ");
define("_MD_WFD_CLICKHERE", "Kliknite ovdje!");
define("_MD_WFD_BROKENFILE", "Slomljena datoteka");
define("_MD_WFD_PLEASEREPORT", "Molimo da prijavite ovu slomljenu datoteku administratoru, ");
// Reviews
define("_MD_WFD_REV_TITLE", "Naslov recenzije:");
define("_MD_WFD_REV_RATING", "Ocjena:");
define("_MD_WFD_REV_DESCRIPTION", "Recenzija:");
define("_MD_WFD_REV_SUBMITREV", "Podnesite recenziju");
define("_MD_WFD_REV_SNEWMNAMEDESC", " 
Molimo da u potpunosti ispunite obrazac ispod a mi �emo �to prije dodati va�u recenziju.<br /><br />
Hvala vam na vremenu za slanje va�eg mi�ljenja. �elimo dati korisnicima mogu�nost brzog pronalaska kvalitetnog softvera.<br /><br />Sve recenzije provjerava jedan od na�ih administratora prije nego �to su objavljenje na stranicama.");
define("_MD_WFD_ISNOTAPPROVED", "Va�u prijavu prvo treba odobriti moderator.");
define("_MD_WFD_LICENCEC", "Softverska licenca: ");
define("_MD_WFD_LIMITATIONS", "Softverska ograni�enja: ");
define("_MD_WFD_KEYFEATURESC", "Klju�ne mogu�nosti:<br /><br /><span style='font-weight: normal;'>Odvojite svaku mogu�nost sa |</span>");
define("_MD_WFD_REQUIREMENTSC", "Sustavski zahtjevi:<br /><br /><span style='font-weight: normal;'>Odvojite svaki zahtjev sa |</span>");
define("_MD_WFD_HISTORYC", "Povijest zapreme:");
define("_MD_WFD_HISTORYD", "Dodaj novu povijest zapreme:<br /><br /><span style='font-weight: normal;'>Datum podna�anja �e automatski biti dodan.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Ime naslovnice: ");
define("_MD_WFD_REQUIREMENTS", "Sustavski zahtjevi:");
define("_MD_WFD_FEATURES", "Mogu�nosti:");
define("_MD_WFD_HISTORY", "Povijest zapreme:");
define("_MD_WFD_PRICEC", "Cijena:");
define("_MD_WFD_SCREENSHOT", "Zaslonska slika:");
define("_MD_WFD_SCREENSHOTCLICK", "Prika�i cijelu sliku");
define("_MD_WFD_OTHERBYUID", "Druge datoteke od: ");
define("_MD_WFD_DOWNTIMES", "Broj zapremanja: ");
define("_MD_WFD_MAINTOTAL", "Ukupne datoteke: ");
define("_MD_WFD_DOWNLOADNOW", "Zapremite sada");
define("_MD_WFD_PAGES", "<b>Stranice</b>");
define("_MD_WFD_REVIEWER", "Recenzent");
define("_MD_WFD_RATEDRESOURCE", "Ocjenjen izvor");
define("_MD_WFD_SUBMITTER", "Po�iljatelj");
define("_MD_WFD_REVIEWTITLE", "Recenzije korisnika");
define("_MD_WFD_REVIEWTOTAL", "<b>Ukupne recenzije:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Recenzije korisnika");
define("_MD_WFD_USERREVIEWS", "Pro�itajte recenzije korisnika za %s");
define("_MD_WFD_NOUSERREVIEWS", "Budite prvi koji �e recenzirati %s.");
define("_MD_WFD_ERROR", "Gre�ka kod a�uriranja baze podataka: podaci nisu spremljeni");
define("_MD_WFD_COPYRIGHT", "autorska prava");
define("_MD_WFD_INFORUM", "Raspravite na forumu");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","Nije vam dopu�teno slanje datoteka");
define("_MD_WFD_INFONOSAVEDB","Podaci nisu spremljeni u bazu podataka: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Prvo stvorite kanal");

//
define("_MD_WFD_NEWLAST","Novo, poslano prije ovog tjedna");
define("_MD_WFD_NEWTHIS","Novo, poslano u ovom tjednu");
define("_MD_WFD_THREE","Novo, poslano u zadnja 3 dana");
define("_MD_WFD_TODAY","Novo, poslano danas");
define("_MD_WFD_NO_FILES","Jo� nema datoteka");
?>
