<?php
//
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Dražen Punčec & Ivan Kosak / 2.3.2009.
//
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//  Author:     tank                                                         //
//  Website:    http://www.customvirtualdesigns.com                          //
//  E-Mail:     tanksplace@comcast.net                                       //
//  Date:       01/12/2009                                                   //
//  Module:     Video Tube                                                   //
//  File:       languages/english/modinfo.php                                //
//  Version:    1.83                                                         //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 1.0  Initial Release 04/14/2008                                  //
//  ***                                                                      //
//  Version 1.1  04/23/2008                                                  //
//  Bug Fix: Remove text from Video Display Order description indicating     //
//           "Random" as an available option                                 //
//  New: Add auto approve registered user submission config parameter        //
//  Note: E-mail contact address change                                      //
//  ***                                                                      //
//  Version 1.4  05/21/2008                                                  //
//  New: Add new definitions as necessary to support current release         //
//  ***                                                                      //
//  Version 1.5  05/26/2008                                                  //
//  New: Add new definitions as necessary to support submission template     //
//  ***                                                                      //
//  Version 1.6  08/01/2008                                                  //
//  New: Add config parameters for enhanced search display                   //
//  New: Add config parameters for categories                                //
//  New: Add labels for additional YouTube data                              //
//  ***                                                                      //
//  Version 1.61  08/02/2008                                                 //
//  New: Eliminate What's New page                                           //
//  New: Change Submit A Video submenu item to Search/Submit                 //
//  New: Add config parameters to define video search preview overlay        //
//  ***                                                                      //
//  Version 1.62  08/09/2008                                                 //
//  New: Add display of number of videos in each category                    //
//  New: Add Display All Categories preference parameter                     //
//  ***                                                                      //
//  Version 1.63  08/23/2008                                                 //
//  New: Add new definitions as necessary to support current release         //
//  ***                                                                      //
//  Version 1.64  09/06/2008                                                 //
//  New: Update YouTube parameter descriptions                               //
//  New: Add MetaCafe support                                                //
//  New: Add blip.tv support                                                 //
//  New: Add Manual Submission support                                       //
//  New: Add text for expanded Video Help page                               //
//  ***                                                                      //
//  Version 1.65  09/12/2008                                                 //
//  New: Add Manage My Videos submenu                                        //
//  ***                                                                      //
//  Version 1.7 RC1  09/14/2008                                              //
//  New: Add Page Menu items                                                 //
//  New: Add Featured blocks                                                 //
//  ***                                                                      //
//  Version 1.82  01/10/2009                                                 //
//  Remove Preview default position parameters                               //
//  Add Preview position offset parameters                                   //
//  ***                                                                      //
//  Version 1.83  01/12/2009                                                 //
//  Add number of inferred sub categories displayed parameter                //
//  ***                                                                      //

// The name of this module
define("_VP_MOD_NAME","Video Tube");

// A brief description of this module
define("_VP_MOD_DESC","Video prikaz");

// Name for Submenu Link
define("_MI_VP_SMNAME1","Pregledano od strane korisnika");
define("_MI_VP_SMNAME2","Pretraživanje YouTube");
define("_MI_VP_SMNAME3","Video Pomoć");
define("_MI_VP_SMNAME4","Pretraži DailyMotion");
define("_MI_VP_SMNAME5","Pretraži MetaCafe");
define("_MI_VP_SMNAME6","Pretraži blip.tv");
define("_MI_VP_SMNAME7","Ručni unos videa");
define("_MI_VP_SMNAME8","Upravljanje mojim video filmovima");

// Name for Pagemenu Link
define("_MI_VP_PMNAME1","Pregleg korisnika");
define("_MI_VP_PMNAME2","YouTube");
define("_MI_VP_PMNAME3","Pomoć");
define("_MI_VP_PMNAME4","DailyMotion");
define("_MI_VP_PMNAME5","MetaCafe");
define("_MI_VP_PMNAME6","blip.tv");
define("_MI_VP_PMNAME7","Ručno unos");
define("_MI_VP_PMNAME8","Upravljanje");

// Block Names
define("_MI_VP_BNAME1","Najbolji video H");
define("_MI_VP_BNAME2","Slučajni video H");
define("_MI_VP_BNAME3","Zadnji video H");
define("_MI_VP_BNAME4","Najbolji video V");
define("_MI_VP_BNAME5","Slučajni video V");
define("_MI_VP_BNAME6","Zadnji video V");
define("_MI_VP_BNAME7","Zadnje prikazivan video");
define("_MI_VP_BNAME8","Najčešće pregledan video");
define("_MI_VP_BNAME9","Slučajni odabir videa");
define("_MI_VP_BNAME10","Zadnji video zid");
define("_MI_VP_BNAME11","Najčešće prekledan video zid");
define("_MI_VP_BNAME12","Slučajni video zid");
define("_MI_VP_BNAME13","Prikazivani videi H");
define("_MI_VP_BNAME14","Prikazivani videi V");
define("_MI_VP_BNAME15","Prikazivani videi Video");

// Admin Menu
define("_MI_VP_ADMENU1","Početna");
define("_MI_VP_ADMENU2","Video prava");
define("_MI_VP_ADMENU3","Objavljeni Video filmovi");
define("_MI_VP_ADMENU4","Upravljanje kategorijama");
define("_MI_VP_ADMENU5","Video izvješća");

// Block Info
define("_MI_VP_NUMVIDEOS","Broj videa u bloku");
define("_MI_VP_NUMVIDEOSDSC","Koliko video minijatura će biti pokazano u bloku.");

define("_MI_VP_EDITSUBMITADD","Potvrda uređenja videa");
define("_MI_VP_EDITSUBMITCANCEL","Odustani");
define("_MI_VP_EDITSUCCESS","Uspješno snimljena video uređivanja");
define("_MI_VP_EDITERROR","Greška pri uređivanju videa");
define("_MI_VP_MANAGE_HEADER","Upravljanje mojim vido filmovima");
define("_MI_VP_ID_CHEADING","ID");
define("_MI_VP_CODE_CHEADING","Kod");
define("_MI_VP_TITLE_CHEADING","Naslov");
define("_MI_VP_ARTIST_CHEADING","Izvođač");
define("_MI_VP_CATEGORY_CHEADING","Kategorija");
define("_MI_VP_EDIT_CHEADING","Uredi");
define("_MI_VP_DELETE_CHEADING","Obriši");
define("_MI_VP_EDITHEADER","Uređivanje video informacija");
define("_MI_VP_EDIT","Uredi");
define("_MI_VP_DELETE","Obriši");
define("_MI_VP_DELSUCCESS","Uspješno obrisan video");
define("_MI_VP_DELERROR","Greška pri brisanju videa");
define("_MI_VP_CANCEL","Odustani");
define("_MI_VP_DEL_REALLY","Da li siguro želite obrisati ovaj video?");
define("_MI_VP_ID","Video ID");

// Config Preferences Info
define("_MI_VP_VDISPLAYFORMAT","Format video zaslona");
define("_MI_VP_VDISPLAYFORMATDSC","Odredi kako će zaslon videa biti prikazan.");
define("_MI_VP_VAUTOPLAY","Video AutoPlay");
define("_MI_VP_VAUTOPLAYDSC","Određivanje dali će se video pokretati automatski. Ovo ne utječe na sljedeće stranice. Kada je video minijatura izabrana i stranica se obnovi, video će se uvijek pokrenuti automatski.");
define("_MI_VP_VDISPLAYORDER","Naredba video zaslona");
define("_MI_VP_VDISPLAYORDERDSC","[<i>Po ID-u</i>] će poredati video filmove po njihovom redu prijave uzlaznim redoslijedom.<br />[<i>Po pregledima</i>] će poredati video filmove po broju pregleda silaznim redoslijedom.");
define("_MI_VP_VDISPLAYNUMBER","Broj video zaslona");
define("_MI_VP_VDISPLAYNUMBERDSC","Određivanje koliko će videa biti pokazano po stranici. Postavljanjem na 0 nema nikakve granice. Svi video fimovi će biti prikazani na jednoj stranici.");
define("_MI_VP_VANONSUBMIT","Podnošenje videa od anonimnih korisnika");
define("_MI_VP_VANONSUBMITDSC","Određivanje ako anonimni korisnici smiju podnositi video filmove.");
define("_MI_VP_VAUTOAPPROVESUBMIT","Automatski odobri prijave registriranim korisnicima");
define("_MI_VP_VAUTOAPPROVESUBMITDSC","Određivanje prava registriranim korisnicima da mogu automatski objavljivati video filmove.");
define("_MI_VP_VSEARCHRESULTSMAX","Maksimalan broj rezultata pretraživanja");
define("_MI_VP_VSEARCHRESULTSMAXDSC","Maksimalan broj rezultata pretraživanja po stranici.");
define("_MI_VP_VSEARCHRESULTSFORMAT","Format prikazivanja rezultata pretraživanja YouTube");
define("_MI_VP_VSEARCHRESULTSFORMATDSC","Određivanje načina prikaza rezultata pretraživanje YouTube.");
define("_MI_VP_VBORDERENABLE","Omogući prikazivanje ruba oko YouTube");
define("_MI_VP_VBORDERENABLEDSC","Određuje da li će se omogućiti rub oko ubačenog preglednika.");
define("_MI_VP_VPRIMARYCOLOR","Primarna boja ruba za YouTube");
define("_MI_VP_VPRIMARYCOLORDSC","Primarna boja ruba za ubačeni preglednik (u RRGGBB formatu).");
define("_MI_VP_VSECONDARYCOLOR","Sekudarna boja ruba Youtube");
define("_MI_VP_VSECONDARYCOLORDSC","Sekundarna boja ruba za ubačeni preglednik (u RRGGBB formatu).");
define("_MI_VP_VCATEGORIESENABLE","Omogući kategorije videa");
define("_MI_VP_VCATEGORIESENABLEDSC","Određivanje kategorije ako će biti korištene.");
define("_MI_VP_VDEFAULTHEIGHT","Zadana visina YouTube Video pretraživača");
define("_MI_VP_VDEFAULTHEIGHTDSC","Određivanje visine prekrivanja videa (u pixelima) gdje je veličina = 100%.");
define("_MI_VP_VDEFAULTWIDTH","Zadana širina YouTube Video pretraživača");
define("_MI_VP_VDEFAULTWIDTHDSC","Određivanje širine prekrivanja videa (u pixelima) gdje je veličina = 100%.");
define("_MI_VP_VSEARCHOVERLAYSIZE","Veličina prekrivanja video pretraživanja");
define("_MI_VP_VSEARCHOVERLAYSIZEDSC","Preračunavanje video prekrivanja u postotcima.");
define("_MI_VP_VSOBKGRDCLR","Boja pozadine prekrivanja video pretraživanja");
define("_MI_VP_VSOBKGRDCLRDSC","Pozadinska boja za prozor prekrivanja (u RRGGBB formatu).");
define("_MI_VP_VSOBRDRCLR","Boja ruba pretraživanja video prekrivanja");
define("_MI_VP_VSOBRDRCLRDSC","Boja ruba za prozor prekrivanja (u RRGGBB formatu).");
define("_MI_VP_VSOBRDRSIZE","Veličina ruba prekrivanje video pretraživanja");
define("_MI_VP_VSOBRDRSIZEDSC","Veličina ruba za prozor prekrivanja (in pixelima). Postavite na 0 da nema ruba.");
define("_MI_VP_VPAGENAV","Odaberi tipa navigacije video stranice");
define("_MI_VP_VPAGENAVDSC","Određivanje tipa prikaza navigacije stranice koja se koristi na video stranici.");
define("_MI_VP_DAILYMOTIONENABLE","Omogući Daily Motion");
define("_MI_VP_DAILYMOTIONENABLEDSC","Oređivanje prikaza DailyMotion pretraživanja u video Tube izborniku. PORUKA: Zahtjeva PHP5 ili viši");
define("_MI_VP_METACAFEENABLE","Omogući MetaCafe");
define("_MI_VP_METACAFEENABLEDSC","Oređivanje prikaza MetaCafe pretraživanja u video Tube izborniku. PORUKA: Zahtjeva PHP5 ili viši");
define("_MI_VP_BLIPTVENABLE","Omogući blip.tv");
define("_MI_VP_BLIPTVENABLEDSC","Oređivanje prikaza blip.tv-a pretraživanja u video Tube izborniku. PORUKA: Zahtjeva PHP5 ili viši");
define("_MI_VP_MANUALSUBMITENABLE","Omogući ručno podnošenje");
define("_MI_VP_MANUALSUBMITENABLEDSC","Određivanje prikaza ručnog podnošenja u video Tube izborniku.");
define("_MI_VP_MANAGEVIDEOSENABLE","Omogući korisnicima upravljanje njihovim video filmovima");
define("_MI_VP_MANAGEVIDEOSENABLEDSC","Određuje ako registrirani korisnici smoju uređivati/brisati svoje vlastite filmove.");
define("_MI_VP_PAGEMENUENABLE","Omogući stranicu video Tube izbornik");
define("_MI_VP_PAGEMENUENABLEDSC","Određivanje prikazivanja stavki pod izbornika pored stranice izborne trake.");

define("_MI_VP_CODE","Kod");
define("_MI_VP_TITLE","Naslov");
define("_MI_VP_ARTIST","Izvođač");
define("_MI_VP_CATEGORY","Kategorija");

define("_MI_VP_SUBMITHEADER","Podnošenje video filmova");
define("_MI_VP_SUBMIT","Podnesi");
define("_MI_VP_RESET","Resetiraj");

define("_MI_VP_AUTOSUBMITSUCCESS","Uspješno podnošenje videa i automatski je odobren");
define("_MI_VP_SUBMITSUCCESS","Uspješno podnošenje videa .... bit će odobren od administratora");
define("_MI_VP_SUBMITERROR","Greška pri podnašenju videa. Molimo kontaktirajte administratora.");

define("_MI_VP_PREVPAGELABEL","<<Natrag");
define("_MI_VP_NEXTPAGELABEL","Naprijed>>");

define("_MI_VP_NOTMINIMUM","Oprostite ali mi ne možemo prikazati video filmove dok nisu objavljena minimalno 2 videa");
define("_MI_VP_PLEASESUBMIT","Molimo podnesite svoj video da bi se pokrenuo");
define("_MI_VP_CATNOTMINIMUM","Oprostite ali mi ne možemo prikazati odaranu kategoriju dok nisu minimalno 2 videa najenjena za nju");
define("_MI_VP_CATPLEASESUBMIT","Molimo vas izaberite drugu kategoriju ili konaktiraje administratora");


define("_MI_VP_LISTINSTRUCTIONS","Kliknite na strelicu za način prikaza");
define("_MI_VP_COLUMN1LABEL","Korisničko ime");
define("_MI_VP_COLUMN2LABEL","Video filmovi");
define("_MI_VP_COLUMN3LABEL","Pregledano");
define("_MI_VP_COLUMN4LABEL","Zadnji Update");

define("_MI_VP_MYPAGETITLE","Moja Video Tube stranica");
define("_MI_VP_MAINPAGETITLE","Glavni video pregled");
define("_MI_VP_CATPAGETITLE","Kategorija video pregleda");
define("_MI_VP_LISTPAGETITLE","Lista podnositelja Videa");

define("_MI_VP_VIDEOVIEWER","Video preglednik");
define("_MI_VP_YOUTUBESEARCH","YouTube Pretraživanje");
define("_MI_VP_DMSEARCH","DailyMotion Pretraživanje");
define("_MI_VP_MCSEARCH","MetaCafe Pretraživanje");
define("_MI_VP_BTSEARCH","blip.tv Pretraživanje");
define("_MI_VP_KEYWORDS","Ključna riječ");

define("_MI_VP_NAVLABEL","Navigacija");

define("_MI_VI_VIDEOTITLE","Naslov Videa");
define("_MI_VI_DESC","Opis");
define("_MI_VI_DISPLAYMORE","Prikaži više informacija");
define("_MI_VI_DISPLAYLESS","Prikaži manje informacija");
define("_MI_VI_LOCALVIEWS","Lokalni pregledi");
define("_MI_VI_SUBMITTER","Podnositelj");
define("_MI_VI_DURATION","Trajanje");
define("_MI_VI_SUBMITDATE","Datum");
define("_MI_VI_VIEWS","Pregledano");
define("_MI_VI_SUBMITTIME","Vrijeme");
define("_MI_VI_FAVORITES","Favoriti");
define("_MI_VI_AUTHOR","Autor");
define("_MI_VI_RATERS","Broj ocjena");
define("_MI_VI_PUBDATE","Datum objave");
define("_MI_VI_AVGRATING","Ocjena (1-5)");
define("_MI_VI_PUBTIME","Vrijeme objave");

define("_MI_VP_SEARCHDMHEADER","DailyMotion Pretraživanje");
define("_MI_VP_SEARCHMCHEADER","MetaCafe Pretraživanjeh");
define("_MI_VP_SEARCHBTHEADER","blip.tv Pretraživanje");
define("_MI_VP_SEARCH","Traži");
define("_MI_VP_EMBEDCODE","Unesi URL kod");
define("_MI_VP_FULLEMBEDCODE","Unesi cijeli kod");
define("_MI_VP_DESC","Opis");
define("_MI_VP_THUMB","Thumbnail URL");
define("_MI_VP_SERVICENAME","Ime servisa");

// Added for v1.81
// ***************************************
define("_MI_VP_VSEARCHOVERLAYXOFFSET","Položaj pretpremijera video pretraživanja X Ofset");
define("_MI_VP_VSEARCHOVERLAYXOFFSETDSC","Određuje prozo pretpremijere u položaj X-os ofset od trenuto traženog položaja");
define("_MI_VP_VSEARCHOVERLAYYOFFSET","Položaj pretpremijera video pretraživanja Y Ofset");
define("_MI_VP_VSEARCHOVERLAYYOFFSETDSC","Određuje prozo pretpremijere u položaj Y-os ofset od trenuto traženog položaja");

define("_MI_VP_MAIN","Početna");
define("_MI_VP_MAIN_DISPLAY","Glavna lista kategorija");

define("_MI_VP_SUBMITTED","podneseno od");
define("_MI_VP_ON","na");
define("_MI_VP_AT","kod");

define("_MI_VP_FORMDESC","Opis");
define("_MI_VP_FORMREL","Povezano");
define("_MI_VP_FORMPUB","Objavljeno");

define("_MI_VP_CLOSEVIDEO","ZATVORI VIDEO");
define("_MI_VP_PREVIEW","** Portal Video pregleda **");
define("_MI_VP_RESULTS","video rezultati");
define("_MI_VP_TO","od");
define("_MI_VP_ABOUT","od ukupno");

define("_MI_VP_PAGESEL","Odabir stranice");
define("_MI_VP_CATSEL","Odabir kategorije");
define("_MI_VP_CATLIST","Lista kategorija");
define("_MI_VP_CATEGORY_TITLE","Naslov kategorija");

define("_MI_VP_PLEASESELECT","Molim odaberite kategoriju za pregled videa");
define("_MI_VP_NOVIDEOSFOUND","Nema pronađenih videa - Molim pretražite i podnesite video");

define("_MI_VP_SUBMITREPORT","Podnesi izvešće");
define("_MI_VP_REPORTHEADER","Obavijesti administratora o ovom videu");
define("_MI_VP_REPORTFORMRADIO","Razlozi o izvješću");
define("_MI_VP_REPORTREASON1","Video nije više dostupan");
define("_MI_VP_REPORTREASON2","Neprikladan sadržaj");
define("_MI_VP_REPORTREASON3","Neprikladna kategorija");
define("_MI_VP_REPORTREASON4","Slaba kvaliteta Video/Audio");
define("_MI_VP_REPORTREASON5","Ovaj video sadrži SPAM");
define("_MI_VI_VIDEOCODE","Video kod");
define("_MI_VP_REPORTSUCCESS","Uspješno poslano izvješće<br />Hvala na izvjeću o ovom videu");
define("_MI_VP_REPORTERROR","Greška pri slanju izvješća");
define("_MI_VI_REPORTBUTTON","Video izvješće");
define("_MI_VI_RECOMMENDBUTTON","Preporuči");
define("_MI_VI_RATEBUTTON","Ocjeni Video");
define("_MI_VI_MAILSUBJECT","Pogledaj ovaj video na stranici");
define("_MI_VI_MAILBODY","Prijatelj vam preporučuje da pogledate ovaj video na");

define("_MI_VP_VCATTYPE","Prikaži tip kategorije");
define("_MI_VP_VCATTYPEDSC","Ovaj izbor određuje kako će kategorije biti pokazane.<br />'Osnovni prikaz kategorije u padajućoj listi<br />'Napredni' prikazi kategorije u obrazcu s poljima i breadcrumb zaglavljem");
define("_MI_VP_VCATTYPECOLUMNS","Kategoriski prikaz stupova");
define("_MI_VP_VCATTYPECOLUMNSDSC","Kada je izabran napredan tip kategorije ovaj parametar određuje koliko će stupova biti korišteno kad pokazuje kategorije.");
define("_MI_VP_VCATTYPEINFERRED","Kategoriski prikaz je izdvojio pod-kategorije");
define("_MI_VP_VCATTYPEINFERREDDSC","Kada je izabran napredan tip kategorije ovaj parametar određuje koliko će izdvojenih pod-kategorija biti prikazano do trenutne kategorije.");

define("_MI_VP_VDISPFORMOPT1","1 Stup");
define("_MI_VP_VDISPFORMOPT2","2 Stupa");
define("_MI_VP_VDISPFORMOPT3","3 Stupa");
define("_MI_VP_VDISPFORMOPT4","4 Stupa");
define("_MI_VP_VDISPFORMOPT5","5 Stupa");
define("_MI_VP_VDISPORDOPT1","Kod pregleda ASC");
define("_MI_VP_VDISPORDOPT2","Kod podnošenja DESC");
define("_MI_VP_VDISPORDOPT3","Kod pregleda DESC");
define("_MI_VP_VDISPORDOPT4","Kod podnošenja ASC");
define("_MI_VP_VCATTYPEOPT1","Osnovno");
define("_MI_VP_VCATTYPEOPT2","Napredno");
define("_MI_VP_VSEARCHRESULTSOPT1","Puni tekst");
define("_MI_VP_VSEARCHRESULTSOPT2","Samo Thumbnail");
define("_MI_VP_VPAGENAVOPT1","Brojevi");
define("_MI_VP_VPAGENAVOPT2","Slika");
define("_MI_VP_VPAGENAVOPT3","Drop-Down Lista");

define("_MI_VP_BNAME1DSC","Prikaži minijature najgledanijih video filmova u vodoravnom formatu");
define("_MI_VP_BNAME2DSC","Prikaži minijature nasumično izabranih video filmova u vodoravnom formatu");
define("_MI_VP_BNAME3DSC","Prikaži minijature najnovijih video filmova u vodoravnom formatu");
define("_MI_VP_BNAME4DSC","Prikaži minijature najgledanijih video filmova u okomitom formatu");
define("_MI_VP_BNAME5DSC","Prikaži minijature nasumično izabranih video filmova u okomitom formatu");
define("_MI_VP_BNAME6DSC","Prikaži minijature najnovijih video filmova u vodoravnom u okomitom formatu");
define("_MI_VP_BNAME7DSC","Prikaži najnoviji video u bloku za prikaz");
define("_MI_VP_BNAME8DSC","Prikaži najgledaniji video u bloku za prikaz");
define("_MI_VP_BNAME9DSC","Prikaži nasumično izabran video u bloku za prikaz");
define("_MI_VP_BNAME10DSC","Prikaži najnovije video filmove u bloku video zida");
define("_MI_VP_BNAME11DSC","Prikaži najgledanije video filmove u bloku video zida");
define("_MI_VP_BNAME12DSC","Prikaži nasumično izabran u okruženom bloku");
define("_MI_VP_BNAME13DSC","Istaknuti prikazi minijatura videa u vodoravnom formatu");
define("_MI_VP_BNAME14DSC","Istaknuti prikazi minijatura videa u okomitom formatu");
define("_MI_VP_BNAME15DSC","Istaknuti prikazi videa u bloku za prikaz");
// ***************************************

define("_MI_VH_PAGETITLE","Video Tube Pomoć");

define("_MI_VH_PARAGRAPH1","Video Tube je dizajniran za prikaz videa i korištenje 
korištenje ubacivanja mogućnosti mnogih dosadanašnjih video usluga. Podnošenje videa je
automatizirano za određenu video uslugu. Možete pretraživati YouTube, Daily Motions,
MetaCafe i blip.tv, pregledavati i unositi bez da napuštate ovu stranicu.
ada izaberete jednu od pretraženih izbora iz glavnog izbornika pod Video Tube-om, 
tu možete i pregledati kako izgleda ekran prijavljenog videa. 
NAPOMENA: Prikazivani primjer je iz YouTube. Drugi ekrani za pretraživanje će se
malo razlikovati u izgledu. Druge usluge, osim YouTube-a, mogu, a ne moraju biti raspoložive na ovoj stranici.");

define("_MI_VH_PARAGRAPH2","Za početak unesite ključnu riječ u mjesto pretraživanja i pritisnite na tipku 
Traži ili pritisnite *Enter*. Kako će se rezultati pretraživanja pojaviti ovisi o
postavljenim postavkama kada je Video Tube instaliran. Ako se rezultati pretraživanja pojave
kao minijaturni video onda SAMO lebdeći (pomicanjem miša) preko minijaturnih 
videa će prikazati njihove naslove. Rezultati pretraživanja bi se mogli prikazati kao
minijature s punim tekstom opisa. Odmah iznad rezultata pretraživanja vidjet ćete 
zbroj pronađenih rezultata i koje rezultate ste pregledali (kako se rezultati pretraživanja pojavljuju
će varirati između različitih izabranih usluga video pretraživanja). Navigacijske tipke
*Natrag* i *Nastavi* mogu biti korištene za odabir drugih prikazanih rezultata pretraživanja.");

define("_MI_VH_PARAGRAPH3","Kada kliknete na jedan od minijatura videa pregled videa će se pojaviti u 
prenosivom Video pregledniku, a potrebna polja će biti ispunjena automatski u podnositeljskom 
obrascu.");

define("_MI_VH_PARAGRAPH4","Naslov i izvođač neće biti odvojeni u većini video usluga. 
Polje izvođača je neobavezno osim ako vi želite ručno unijeti ove informacije 
ali nije potrebno. Opis polje je također neobavezno. Ako ispunite opis će biti prikazan ispod videa kada
se video pojavi na ekranu za vizualni prikaz. Ako ovo polje ostane prazno onda će se prikazati opis
preuzet sa video usluge. Ako su kategorije omogućene posljednjim korakom prije podnošenja videa izaberite kategoriju u
kojoj želite svoj video prikazati.");

define("_MI_VH_PARAGRAPH5","Sada kliknite na podnesi i gotovi ste. Trebali biste vidjeti poruku na zaslonu koja
pokazuje da li je ili nije podnošenje uspjelo. Ako poruka pokazuje grešku onda obavijestite
administratora ili webmastera o ovom događaju.");

define("_MI_VH_PARAGRAPH6","Još je jedna opcija raspoloživa ako vi želite podnesti video od
video usluge koja nije među podržanim kod opcije pretraživača. Izaberite Ručni unos videa u
glavnom izborniku ispod Videa Tube, evo kako izgleda zaslon takve prijave.");

define("_MI_VH_PARAGRAPH7","Ručni unos zahtijeva malo više rada zato što nije automatiziran. Morate
posjetiti web stranice video usluge i doznati puni kod za ubacivanje od željenog videa
video naslov, video opis i URL za minijaturu videa. Kao na primjer recimo, želimo poslati video
koji se prikazuje na Live Leak-u. Prvo krenemo na http:www.liveleak.com i pretražujemo da
pronađemo željeni video.");

define("_MI_VH_PARAGRAPH8","Rezultati pretraživanja se pojave kao minijature s tekstom opisa. Kada
pronađete željeni video, na minijaturnu sliku kliknite desnom tipkom miša.
Brzi izbornik će se pojaviti na ekranu. Izaberu stavku Properties/Svojstva.");

define("_MI_VH_PARAGRAPH9","Prozor za svojstva će se pojaviti na zaslonu. Želite kopirati tekst koji
se prikaže desno od Adresa: (URL). Ovo je lako postavljanjem miša na početak teksta, pritiskom lijeve
tipke miša i držite stisnutom te vučete miša na kraj teksta. Sad puštate lijevu tipku miša.
Izabrani tekst bi trebao biti označen. Za kopirate izabranog teksta u vaš privremeni spremniku
(ovo je privremeni međuspremnik koji omogućava vaše računalo) pritisnite i držite tipku < Ctrl >
zatim pritisnite tipku < C >. Sada je tekst kopiran u vaš spremnik.");

define("_MI_VH_PARAGRAPH10","Sada se vraćamo na stranicu ručnog unosa videa. Kliknemo na mjesto za
unos desno od sličice URL. Pokazivač bi se trebao se pojaviti u ovom polju unosa. Da bi zalijepili
tekst iz vašeg spremnika pritisnite i držite tipku < Ctrl > zatim pritisnite tipku < V >");

define("_MI_VH_PARAGRAPH11","Zatim se trebamo vratiti natrag na Live Leak stranicu za nabavljanje koda
Za pregled videa kliknemo na minijaturnu sliku. Prozor bi se trebao pretvoriti u zaslon za prikazivanje
videa. play screen. Sada odaberete tipku View Ebed Code odmah ispod prikazanog videa. Kada se kod
za ubacivanje pojavi kliknite na polje teksta. Sav tekst u polju postane označen. Ponovno stisnite i
držite tipku < Ctrl > zatim pritisnite tipku < C > za kopiranje ovog teksta.");

define("_MI_VH_PARAGRAPH12","Ponovo se vraćamo na stranicu ručnog unosa na našoj stranici, ovaj put kliknete
na unos desno od Full Embed Code. Pokazivač bi se sada trebao se pojaviti u ovom polju unosa. Da bi zalijepili
tekst iz vašeg spremnika pritisnite i držite tipku < Ctrl > zatim pritisnite tipku < V >.");

define("_MI_VH_PARAGRAPH13","Možete ponavljati slične korake za kopiranje videa, naslov i opis videa
ili možete sastaviti vlastiti naslov i opis. To ovisi o vama. Postoji također opcijsko polje za upis
imena video uslge ako želite da se pojavi ispod minijaturnog videa.");

define("_MI_VH_PARAGRAPH14","Sada kliknite na podnesi i gotovi ste. Trebali biste vidjeti poruku na ekranu koja
pokazuje da li je ili nije podnošenje uspjelo. Ako poruka pokazuje grešku onda obavijestite
administratora ili webmastera o ovom događaju");

?>
