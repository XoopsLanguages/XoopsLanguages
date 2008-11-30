<?php
// $Id: main.php,v 1.11 2004/12/26 19:11:56 onokazu Exp $
//%%%%%%		Module Name 'MyDownloads'		%%%%%

define("_MD_THANKSFORINFO","Zahvaljujemo na informaciji. Razmotrit �emo va� prijedlog.");
define("_MD_THANKSFORHELP","Zahvaljujemo na va�oj pomo�i u odr�avanju ovog dijela direktorija.");
define("_MD_FORSECURITY","Iz sigurnosnih razloga va�a IP adresa i korisni�ko ime �e biti privremeno zabilje�eni.");
define("_MD_NOPERMISETOLINK", "Ova datoteka ne pripada stranici s koje dolazite <br /><br />Molimo da kontaktirate administratora tih stranica i preporu�ite mu:   <br /><b>NEMOJTE TERORIZIRATI, KRASTI TU�E LINKOVE!</b> <br /><br /><b>Definicija teroriziranja:</b> Onaj koji je prelijen da pove�e datoteku sa svog poslu�itelja ili ukrade te�ki rad drugih ljudi i napravi da izgleda kako je njegovo <br /><br />  Va�a IP adresa <b>je zabilje�ena</b>.");
define("_MD_ALL","Sve");
define("_MD_DESCRIPTION","Opis");
define("_MD_SEARCH","Tra�i");
define("_MD_SUBMITCATHEAD","Obrazac za slanje downloada");

define("_MD_MAIN","PO�ETNA");
define("_MD_POPULAR","Popularno");
define("_MD_NEWTHISWEEK","Novo, dodano ovaj tjedan");
define("_MD_UPTHISWEEK","Obnovljeno ovaj tjedan");

define("_MD_POPULARITYLTOM","Popularnost (najmanje prema najvi�e pregleda)");
define("_MD_POPULARITYMTOL","Popularnost (najvi�e prema najmanje pregleda)");
define("_MD_TITLEATOZ","Naslov (A do �)");
define("_MD_TITLEZTOA","Naslov (� do A)");
define("_MD_DATEOLD","Datum (Prika�i prvo starije datoteke)");
define("_MD_DATENEW","Datum (Prika�i prvo novije datoteke)");
define("_MD_RATINGLTOH","Ocjena (najlo�ije prema najboljem)");
define("_MD_RATINGHTOL","Ocjena (najbolje prema najlo�ijem)");

define("_MD_NOSHOTS","Nema raspolo�ivog zaslona");
define("_MD_EDITTHISDL","Uredi ovaj Download");

define("_MD_DESCRIPTIONC","Opis: ");
define("_MD_EMAILC","Email: ");
define("_MD_CATEGORYC","Kategorija: ");
define("_MD_LASTUPDATEC","Zadnja obnova: ");
define("_MD_DLNOW","Preuzmi sada!");
define("_MD_VERSION","Ina�ica");
define("_MD_SUBMITDATE","Izdano");
define("_MD_DLTIMES","Skinuto %s puta");
define("_MD_FILESIZE","Veli�ina datoteke");
define("_MD_SUPPORTEDPLAT","Platforma");
define("_MD_HOMEPAGE","Po�etna");
define("_MD_HITSC","Pregleda: ");
define("_MD_RATINGC","Ocjena: ");
define("_MD_ONEVOTE","1 glasanje");
define("_MD_NUMVOTES","%s glasanja");
define("_MD_RATETHISFILE","Ocjeni datoteku");
define("_MD_MODIFY","Promijeni");
define("_MD_REPORTBROKEN","Prijavi slomljen izvor");
define("_MD_TELLAFRIEND","Preporu�i");
define("_MD_EDIT","Uredi");

define("_MD_THEREARE","Postoji <b>%s</b> datoteke u na�oj bazi podataka");
define("_MD_LATESTLIST","Najnovija lista");

define("_MD_REQUESTMOD","Zahtijev za promijenu downloada");
define("_MD_FILEID","ID datoteke: ");
define("_MD_FILETITLE","Naslov Downloada: ");
define("_MD_DLURL","URL downloada: ");
define("_MD_HOMEPAGEC","Po�etna stranica: ");
define("_MD_VERSIONC","Ina�ica: ");
define("_MD_FILESIZEC","Veli�ina datoteke: ");
define("_MD_NUMBYTES","%s bajtova");
define("_MD_PLATFORMC","Platforma: ");
define("_MD_SHOTIMAGE","Slika zaslona: ");
define("_MD_SENDREQUEST","Po�alji zahtijev");
define("_MD_OPTIONS", 'Opcije: ');
define("_MD_NOTIFYAPPROVE", 'Obavijesti me kada se ova datoteka odobri');

define("_MD_VOTEAPPRE","Va� glas je zabilje�en.");
define("_MD_THANKYOU","Hvala vam na va�em vremenu za glasanje na %s"); // %s is your site name
define("_MD_VOTEONCE","Molimo da ne glasate za isti izvor vi�e od jednom.");
define("_MD_RATINGSCALE","Ljestvica je od 1 do 10. 1 je lo�e a 10 izvrsno.");
define("_MD_BEOBJECTIVE","Molimo da budete objektivni, ako svi dobe 1 ili 10, ocjene nisu od neke koristi.");
define("_MD_DONOTVOTE","Ne glasajte za vlastiti izvor.");
define("_MD_RATEIT","Ocjenite!");

define("_MD_INTFILEFOUND","Evo dobre datoteke za download sa %s"); // %s is your site name

define("_MD_RECEIVED","Primili smo podatke o va�em downloadu. Hvala!");
define("_MD_WHENAPPROVED","Primit �ete email kada datoteka bude odobrena.");
define("_MD_SUBMITONCE","Podnesite svoju datoteku samo jednom.");
define("_MD_ALLPENDING","Sve datoteke su poslane i �ekaju provjeru.");
define("_MD_DONTABUSE","Korisni�ko ime i IP adresa su zabilje�eni, pa stoga nemojte zloupotrebljavati sustav.");
define("_MD_TAKEDAYS","Mo�e pro�i nekoliko dana prije nego va�a datoteka bude u na�oj bazu podataka.");

define("_MD_RANK","Rang");
define("_MD_CATEGORY","Kategorija");
define("_MD_HITS","Pregleda");
define("_MD_RATING","Ocjena");
define("_MD_VOTE","Glasova");

define("_MD_SORTBY","Razvrstaj po:");
define("_MD_TITLE","Naslov");
define("_MD_DATE","Datum");
define("_MD_POPULARITY","Popularno");
define("_MD_CURSORTBY","Datoteke su trenutno razvrstane po: %s");
define("_MD_PREVIOUS","Prethodno");
define("_MD_NEXT","Slijede�e");
define("_MD_NOMATCH","Nema rezultata za va� upit");

define("_MD_TOP10","%s Top 10"); // %s is a downloads category name

define("_MD_SUBMIT","Podnesi");
define("_MD_CANCEL","Odustani");

define("_MD_BYTES","Bajtova");
define("_MD_ALREADYREPORTED","Ve� ste prijavili ovu slomljenu datoteku.");
define("_MD_MUSTREGFIRST","�ao nam je ali nemate potrebno odobrenje za izvr�avanje ove radnje.<br />Molimo da se prvo registrirate ili prijavite!");
define("_MD_NORATING","Nije izabrana ocjena.");
define("_MD_CANTVOTEOWN","Ne mo�ete glasati za izvor koji ste vi podnesli.<br />Sva glasanja se bilje�e i odobravaju.");

//%%%%%%	Module Name 'MyDownloads' (Admin)	  %%%%%

define("_MD_DLCONF","Postavke Downloada");
define("_MD_GENERALSET","Op�enite postavke Downloada");
define("_MD_ADDMODDELETE","Dodaj, uredi i izbri�i datoteke/kategorije");
define("_MD_DLSWAITING","Dovnload koji �ekaju potvrdu");
define("_MD_BROKENREPORTS","Prijave slomljenih datoteka");
define("_MD_MODREQUESTS","Zahtijevi o promjeni downloada");
define("_MD_SUBMITTER","Podnositelj:");
define("_MD_DOWNLOAD","Skinuto");
define("_MD_APPROVE","Odobri");
define("_MD_DELETE","Izbri�i");
define("_MD_NOSUBMITTED","Nema novih Downloada.");
define("_MD_ADDMAIN","Dodaj GLAVNU kategoriju");
define("_MD_TITLEC","Naslov: ");
define("_MD_IMGURL","URL slike (NEOBAVEZNO; visina slike bit �e smanjena na 50):");
define("_MD_ADD","Dodaj");
define("_MD_ADDSUB","Dodaj POD-kategoriju");
define("_MD_IN","u");
define("_MD_ADDNEWFILE","Dodaj novu datoteku");
define("_MD_MODCAT","Uredi kategoriju");
define("_MD_MODDL","Uredi download");
define("_MD_USER","Korisnik");
define("_MD_IP","IP adresa");
define("_MD_USERAVG","Prosje�na ocjena korisnika");
define("_MD_TOTALRATE","Ukupno ocjena");
define("_MD_NOREGVOTES","Nema glasova registriranih korisnika");
define("_MD_NOUNREGVOTES","Nema glasova anonimnih korisnika");
define("_MD_VOTEDELETED","Izbrisani podaci o glasovanju.");
define("_MD_NOBROKEN","Nema prijava o slomljenim datotekama.");
define("_MD_IGNOREDESC","Zanemari (zanemari prijave i samo izbri�i <b>prijave slomljenih datoteke</b>)");
define("_MD_DELETEDESC","Izbri�i (Izbri�i <b>prijave slomljene podatke o preuzimanju</b> i <b>prijave slomljenih datoteka</b> za datoteku.)");
define("_MD_REPORTER","Prijava po�iljatelja");
define("_MD_FILESUBMITTER","Podnositelj datoteke");
define("_MD_IGNORE","Zanemari");
define("_MD_FILEDELETED","Datoteka izbrisana.");
define("_MD_BROKENDELETED","Izbrisana prijava slomljene datoteke.");
define("_MD_USERMODREQ","Zahtijevi za promijenu downloada");
define("_MD_ORIGINAL","Original");
define("_MD_PROPOSED","Predlo�eno");
define("_MD_OWNER","Vlasnik: ");
define("_MD_NOMODREQ","Nema zahtijeva za promijenu downloada.");
define("_MD_DBUPDATED","Baza podataka uspje�no a�urirana!");
define("_MD_MODREQDELETED","Zahtijevi o promijeni izbrisani.");
define("_MD_IMGURLMAIN","URL slike (NEOBAVEZNO, vrijedi samo za glavne kategorije; visina slike bit �e smanjena na 50):");
define("_MD_PARENT","Izvorna kategorija:");
define("_MD_SAVE","Spremi promjene");
define("_MD_CATDELETED","Kategorija izbrisana.");
define("_MD_WARNING","UPOZORENJE: Sigurno �elite izbrisati ovu kategoriju i sve njene datoteke i komentare?");
define("_MD_YES","Da");
define("_MD_NO","Ne");
define("_MD_NEWCATADDED","Nova kategorija uspje�no dodana!");
define("_MD_ERROREXIST","GRE�KA: Download koji ste unjeli je ve� u bazi podataka!");
define("_MD_ERRORTITLE","GRE�KA: Morate unjeti NASLOV!");
define("_MD_ERRORDESC","GRE�KA: Morate unjeti OPIS!");
define("_MD_NEWDLADDED","Novi download je dodan u bazu podataka.");
define("_MD_HELLO","Pozdrav %s");
define("_MD_WEAPPROVED","Odobrili smo va�u datoteku, i dodana je u na�u bazu podataka.");
define("_MD_THANKSSUBMIT","Zahvaljujemo na va�em doprinosu!");

define("_MD_MUSTBEVALID","Slika zauzetog zaslona download mora biti valjana iz %s direktorija (ex. shot.gif). Ostavite ovo prazno ako nema nikakve slike.");

define("_MD_REGUSERVOTES","Glasovi registriranih korisnika (ukupno glasova: %s)");
define("_MD_ANONUSERVOTES","Glasovi anonimnih korisnika (ukupno glasova: %s)");

define("_MD_YOURFILEAT","Va�a datoteka podnesena na %s"); // this is an approved mail subject. %s is your site name

define("_MD_VISITAT","Posjetite na� download odjel na %s");

define("_MD_DLRATINGS","Ocjena Download (ukupno glasova: %s)");
define("_MD_ISAPPROVED","Odobrili smo va� prijedlog za download");
?>