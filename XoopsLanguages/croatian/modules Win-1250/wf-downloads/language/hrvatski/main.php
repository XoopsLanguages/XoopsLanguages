<?php
/**
 * $Id: main.php,v 1.2 2005/12/23 06:20:33 m0nty_ Exp $
 * Modul: WF-Downloads
 * Inaèica: v2.0.5a
 * Datum objave: 26 july 2004
 * Autor: WF-Sections
 * Licenca: GNU
 */
 
//Todo - Still to remove redundat defines from this area. 
define("_MD_WFD_NODOWNLOAD","Ova zaprema ne postoji!");
define("_MD_WFD_MINPOSTS","Trebate poveæati svoj broj poruka<br />prije nego što možete otpremati i zapremati datoteke");

define("_MD_WFD_SUBCATLISTING","Lista kategorija");
define("_MD_WFD_ISADMINNOTICE","Administrator: ima problema sa ovom slikom.");
define("_MD_WFD_THANKSFORINFO","Hvala vam na podnašanju. Bit æete obaviješteni kada administrator odobri vaš zahtjev.");
define("_MD_WFD_ISAPPROVED","Hvala vam na podnašanju. Vaš zahtjev je odobren i bit æe prikazan na našoj listi.");
define("_MD_WFD_THANKSFORHELP","Hvala vam na pomoæi za održavanje integriteta ove mape.");
define("_MD_WFD_FORSECURITY","U sigurnosne svrhe vaš IP i korisnièko ime æe isto biti trenutno zabilježeni.");
define("_MD_WFD_NOPERMISETOLINK","Ova datoteka ne pripada strani od koje ste došli <br /><br />Molimo da kontaktirate administratora te strane i kažete:   <br /><b>NEMOJTE PARAZITIRATI, KRASTI TUÐE LINKOVE!</b> <br /><br /><b>Definicija parazita:</b> Onaj koji je prelijen da poveže datoteku sa svog poslužitelja ili ukrade teški rad drugih ljudi i napravi da izgleda kako je njegovo <br /><br />  Vaša IP adresa <b>je zabilježena</b>.");
define("_MD_WFD_SUMMARY","Sažetak<br /><br /><span style='font-weight: normal;'>Ovo možete ostaviti prazno<br />Sažetak æe biti stvoren ako je prazno</span>");
define("_MD_WFD_DESCRIPTION","Opis");
define("_MD_WFD_SUBMITCATHEAD","Obrazac za slanje zapreme");
define("_MD_WFD_MAIN","POÈETNA");
define("_MD_WFD_POPULAR","Popularno");
define("_MD_WFD_NEWTHISWEEK","Novo ovog tjedna");
define("_MD_WFD_UPTHISWEEK","Ažurirano ovog tjedna");
define("_MD_WFD_POPULARITYLTOM","Popularnost (najmanje prema najviše pregleda)");
define("_MD_WFD_POPULARITYMTOL","Popularnost(najviše prema najmanje pregleda)");
define("_MD_WFD_TITLEATOZ","Naslov (A do Ž)");
define("_MD_WFD_TITLEZTOA","Naslov (Ž do A)");
define("_MD_WFD_DATEOLD","Datum (prvo izlistane stare datoteke)");
define("_MD_WFD_DATENEW","Datum (prvo izlistane nove datoteke)");
define("_MD_WFD_RATINGLTOH","Ocjena (najlošije prema najboljem)");
define("_MD_WFD_RATINGHTOL","Ocjena (najbolje prema najlošijem)");
define("_MD_WFD_DESCRIPTIONC","Opis: ");
define("_MD_WFD_CATEGORYC","Kategorija: ");
define("_MD_WFD_VERSION","Inaèica");
define("_MD_WFD_SUBMITDATE","Izdano");
define("_MD_WFD_DLTIMES","Zapremljeno %s puta");
define("_MD_WFD_FILESIZE","Velièina datoteke (bajtovi)");
define("_MD_WFD_SUPPORTEDPLAT","Platforma");
define("_MD_WFD_HOMEPAGE","Poèetna");
define("_MD_WFD_PUBLISHERC","Izdavaè: ");
define("_MD_WFD_RATINGC","Ocjena: ");
define("_MD_WFD_ONEVOTE","1 glasanje");
define("_MD_WFD_NUMVOTES","%s glasanja");
define("_MD_WFD_RATETHISFILE","Ocjeni izvor");
define("_MD_WFD_REVIEWTHISFILE","Recenziraj izvor");
define("_MD_WFD_REVIEWS","Recenzije:");
define("_MD_WFD_DOWNLOADHITS","Zapreme");
define("_MD_WFD_MODIFY","Preinaèi");
define("_MD_WFD_REPORTBROKEN","Prijavi kao slomljeno");
define("_MD_WFD_BROKENREPORT","Prijavi slomljen izvor");
define("_MD_WFD_SUBMITBROKEN","Podnesi");
define("_MD_WFD_BEFORESUBMIT","Prije podnašanja slomljenog izvora molimo da provjerite kako datoteke koju želite prijaviti zaista nema a ne da su internet stranice samo onemoguæene.");
define("_MD_WFD_TELLAFRIEND","Preporuèi");
define("_MD_WFD_EDIT","Uredi");
define("_MD_WFD_THEREARE","Postoje <b>%s</b> <i>kategorije</i> i <b>%s</b> <i>zapreme</i> na listi");
define("_MD_WFD_THEREIS","Postoji <b>%s</b> <i>kategorija</i> i <b>%s</b> <i>zaprema</i> na listi");
define("_MD_WFD_LATESTLIST","Najnovije");
define("_MD_WFD_FILETITLE","Naslov zapreme: ");
define("_MD_WFD_DLURL","URL zapreme: ");
define("_MD_WFD_HOMEPAGEC","Poèetna strana: ");
define("_MD_WFD_UPLOAD_FILEC","Otpremi datoteku: ");
define("_MD_WFD_VERSIONC","Inaèica: ");
define("_MD_WFD_FILESIZEC","Velièina datoteke (bajtovi): ");
define("_MD_WFD_NUMBYTES","%s bajtova");
define("_MD_WFD_PLATFORMC","Platforme: ");
define("_MD_WFD_PRICE","Cijena");
define("_MD_WFD_LIMITS","Ogranièenja");
define("_MD_WFD_DOWNLICENSE","Licenca");
define("_MD_WFD_NOTSPECIFIED","Nije odreðeno");
define("_MD_WFD_MIRRORSITE","Zrcalo zapreme");
define("_MD_WFD_MIRROR","Stranice zrcala");
define("_MD_WFD_PUBLISHER","Izdavaè");
define("_MD_WFD_UPDATEDON","Ažurirano");
define("_MD_WFD_PRICEFREE","Besplatno");
define("_MD_WFD_VIEWDETAILS","Pogledaj pune detalje");
define("_MD_WFD_OPTIONS",'Opcije: ');
define("_MD_WFD_NOTIFYAPPROVE",'Obavijesti me kada se ova datoteka odobri');
define("_MD_WFD_VOTEAPPRE","Vaš glas je cijenjen.");
define("_MD_WFD_THANKYOU","Hvala vam na vremenu za glasanje na %s"); // %s is your site name
define("_MD_WFD_VOTEONCE","Molimo da ne glasate za isti izvor više od jednom.");
define("_MD_WFD_RATINGSCALE","Ljestvica je od 1 do 10. 1 je loše a 10 izvrsno.");
define("_MD_WFD_BEOBJECTIVE","Molimo da budete objektivni, ako svi dobe 1 ili 10, ocjene nisu veoma korisne.");
define("_MD_WFD_DONOTVOTE","Ne glasajte za vlastiti izvor.");
define("_MD_WFD_RATEIT","Ocjenite!");
define("_MD_WFD_INTFILEFOUND","Evo dobre datoteke za zapremu sa %s"); // %s is your site name
define("_MD_WFD_RANK","Rang");
define("_MD_WFD_CATEGORY","Kategorija");
define("_MD_WFD_HITS","Pregleda");
define("_MD_WFD_RATING","Rating");
define("_MD_WFD_VOTE","Glasuj");
define("_MD_WFD_SORTBY","Razvrstaj po:");
define("_MD_WFD_TITLE","Naslov");
define("_MD_WFD_DATE","Datum");
define("_MD_WFD_POPULARITY","Popularnost");
define("_MD_WFD_TOPRATED","Ocjena");
define("_MD_WFD_CURSORTBY","Datoteke su trenutno razvrstane po: %s");
define("_MD_WFD_CANCEL","Poništi");
define("_MD_WFD_ALREADYREPORTED","Veæ ste prijavili slomljenost ovog izvora.");
define("_MD_WFD_MUSTREGFIRST","Žao nam je ali nemate potrebno odobrenje za izvršavanje ove radnje.<br />Molimo da se prvo registrirate ili prijavite!");
define("_MD_WFD_NORATING","Nije odabrana ocjena.");
define("_MD_WFD_CANTVOTEOWN","Ne možete glasati za izvor koji ste vi poslali.<br />Sva glasanja se bilježe i odobravaju.");
define("_MD_WFD_SUBMITDOWNLOAD","Podnesite zapremu");
define("_MD_WFD_SUB_SNEWMNAMEDESC","<ul><li>Sve nove zapreme se provjeravaju i može potrajati do 24 sata da se ne pojave na našoj listi.</li><li>Zadržavamo prava da odbijemo ili promijenimo sadržaj bilo kojeg podnašanja bez obavijesti.</li></ul>");
define("_MD_WFD_MAINLISTING","Lista glavne kategorije");
define("_MD_WFD_LASTWEEK","Prošli tjedan");
define("_MD_WFD_LAST30DAYS","Prošlih 30 dana");
define("_MD_WFD_1WEEK","1 tjedan");
define("_MD_WFD_2WEEKS","2 tjedna");
define("_MD_WFD_30DAYS","30 dana");
define("_MD_WFD_SHOW","Prikaži");
define("_MD_WFD_DAYS","dana");
define("_MD_WFD_NEWDOWNLOADS","Nove zapreme");
define("_MD_WFD_TOTALNEWDOWNLOADS","Ukupne nove zapreme");
define("_MD_WFD_DTOTALFORLAST","Ukupne nove zapreme za zadnjih");
define("_MD_WFD_AGREE","Slažem se");
define("_MD_WFD_DOYOUAGREE","Slažete li se sa gore navedenim uvjetima?");
define("_MD_WFD_DISCLAIMERAGREEMENT","Odrješitelj");
define("_MD_WFD_DUPLOADSCRSHOT","Otpremi sliku:");
define("_MD_WFD_RESOURCEID","Broj identifikacije izvora: ");
define("_MD_WFD_REPORTER","Izvorni prijavitelj: ");
define("_MD_WFD_DATEREPORTED","Datum prijave: ");
define("_MD_WFD_RESOURCEREPORTED","Izvor prijavljen kao slomljen");
define("_MD_WFD_BROWSETOTOPIC","<b>Pretražuj zapreme po abecednom redu</b>");
define("_MD_WFD_WEBMASTERACKNOW","Prijava slomljene datoteke obznanjena: ");
define("_MD_WFD_WEBMASTERCONFIRM","Prijava slomljene datoteke potvrðena: ");
define("_MD_WFD_DELETE","Izbriši");
define("_MD_WFD_DISPLAYING","Prikazano po: ");
define("_MD_WFD_LEGENDTEXTNEW","Novo danas");
define("_MD_WFD_LEGENDTEXTNEWTHREE","Novo u zadnja 3 dana");
define("_MD_WFD_LEGENDTEXTTHISWEEK","Novo ovaj tjedan");
define("_MD_WFD_LEGENDTEXTNEWLAST","Preko jednog tjedna");
define("_MD_WFD_THISFILEDOESNOTEXIST","Greška: ova datoteka ne postoji!");
define("_MD_WFD_BROKENREPORTED","Slomljena datoteka prijavljena");
// visit
define("_MD_WFD_DOWNINPROGRESS","Zaprema u tijeku");
define("_MD_WFD_DOWNSTARTINSEC","Vaše zapremanje bi trebala poèeti za 3 sekunde...<b>molimo prièekajte</b>.");
define("_MD_WFD_DOWNNOTSTART","Ako vašae zapremanje ne poène, ");
define("_MD_WFD_CLICKHERE","Kliknite ovdje!");
define("_MD_WFD_BROKENFILE","Slomljena datoteka");
define("_MD_WFD_PLEASEREPORT","Molimo da prijavite ovu slomljenu datoteku administratoru, ");
// Reviews
define("_MD_WFD_REV_TITLE","Naslov recenzije:");
define("_MD_WFD_REV_RATING","Ocjena:");
define("_MD_WFD_REV_DESCRIPTION","Recenzija:");
define("_MD_WFD_REV_SUBMITREV","Podnesite recenziju");
define("_MD_WFD_REV_SNEWMNAMEDESC"," 
Molimo da u potpunosti ispunite obrazac ispod a mi æemo što prije dodati vašu recenziju.<br /><br />
Hvala vam na vremenu za slanje vašeg mišljenja. Želimo dati korisnicima moguænost brzog pronalaska kvalitetnog softvera.<br /><br />Sve recenzije provjerava jedan od naših administratora prije nego što su objavljenje na stranicama.");
define("_MD_WFD_ISNOTAPPROVED","Vašu prijavu prvo treba odobriti moderator.");
define("_MD_WFD_LICENCEC","Softverska licenca: ");
define("_MD_WFD_LIMITATIONS","Softverska ogranièenja: ");
define("_MD_WFD_KEYFEATURESC","Kljuène moguænosti:<br /><br /><span style='font-weight: normal;'>Odvojite svaku moguænost sa |</span>");
define("_MD_WFD_REQUIREMENTSC","Sustavski zahtjevi:<br /><br /><span style='font-weight: normal;'>Odvojite svaki zahtjev sa |</span>");
define("_MD_WFD_HISTORYC","Povijest zapreme:");
define("_MD_WFD_HISTORYD","Dodaj novu povijest zapreme:<br /><br /><span style='font-weight: normal;'>Datum podnašanja æe automatski biti dodan.</span>");
define("_MD_WFD_HOMEPAGETITLEC","Ime naslovnice: ");
define("_MD_WFD_REQUIREMENTS","Sustavski zahtjevi:");
define("_MD_WFD_FEATURES","Moguænosti:");
define("_MD_WFD_HISTORY","Povijest zapreme:");
define("_MD_WFD_PRICEC","Cijena:");
define("_MD_WFD_SCREENSHOT","Zaslonska slika:");
define("_MD_WFD_SCREENSHOTCLICK","Prikaži cijelu sliku");
define("_MD_WFD_OTHERBYUID","Druge datoteke od: ");
define("_MD_WFD_DOWNTIMES","Broj zapremanja: ");
define("_MD_WFD_MAINTOTAL","Ukupne datoteke: ");
define("_MD_WFD_DOWNLOADNOW","Zapremite sada");
define("_MD_WFD_PAGES","<b>Stranice</b>");
define("_MD_WFD_REVIEWER","Recenzent");
define("_MD_WFD_RATEDRESOURCE","Ocjenjen izvor");
define("_MD_WFD_SUBMITTER","Pošiljatelj");
define("_MD_WFD_REVIEWTITLE","Recenzije korisnika");
define("_MD_WFD_REVIEWTOTAL","<b>Ukupne recenzije:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE","Recenzije korisnika");
define("_MD_WFD_USERREVIEWS","Proèitajte recenzije korisnika za %s");
define("_MD_WFD_NOUSERREVIEWS","Budite prvi koji æe recenzirati %s.");
define("_MD_WFD_ERROR","Greška kod ažuriranja baze podataka: podaci nisu spremljeni");
define("_MD_WFD_COPYRIGHT","autorska prava");
define("_MD_WFD_INFORUM","Raspravite na forumu");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","Nije vam dopušteno slanje datoteka");
define("_MD_WFD_INFONOSAVEDB","Podaci nisu spremljeni u bazu podataka: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Prvo stvorite kanal");

//
define("_MD_WFD_NEWLAST","Novo, poslano prije ovog tjedna");
define("_MD_WFD_NEWTHIS","Novo, poslano u ovom tjednu");
define("_MD_WFD_THREE","Novo, poslano u zadnja 3 dana");
define("_MD_WFD_TODAY","Novo, poslano danas");
define("_MD_WFD_NO_FILES","Još nema datoteka");
?>
