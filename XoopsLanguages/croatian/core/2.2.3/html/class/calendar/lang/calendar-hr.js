/* Slovenian language file for the DHTML Calendar version 0.9.2 
* Author David Milost <mercy@volja.net>, January 2004.
* Feel free to use this script under the terms of the GNU Lesser General
* Public License, as long as you do not remove or alter this notice.
*/
 // full day names
Calendar._DN = new Array
("Nedjelja",
 "Ponedjeljak",
 "Utorak",
 "Srijeda",
 "Četvrtak",
 "Petak",
 "Subota",
 "Nedjelja");
 // short day names
 Calendar._SDN = new Array
("Ned",
 "Pon",
 "Uto",
 "Sri",
 "Čet",
 "Pet",
 "Sub",
 "Ned");
// short month names
Calendar._SMN = new Array
("Sij",
 "Velj",
 "Ožu",
 "Tra",
 "Svi",
 "Lip",
 "Srp",
 "Kol",
 "Ruj",
 "Lis",
 "Stu",
 "Pro");
  // full month names
Calendar._MN = new Array
("Siječanj",
 "Veljača",
 "Užujak",
 "Travanj",
 "Svibanj",
 "Lipanj",
 "Srpanj",
 "Kolovoz",
 "Rujan",
 "Listopad",
 "Studeni",
 "Prosinac");

// tooltips
// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "O kalendaru";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"Za zadnju verziju pođi na na adresu: http://www.dynarch.com/projects/calendar/\n" +
"Distribuirano pod GNU LGPL.  Pogledajte http://gnu.org/licenses/lgpl.html za detalje." +
"\n\n" +
"Izbor datuma:\n" +
"- Upotrijebite \xab, \xbb tipke za izbor godine\n" +
"- Upotrijebite " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " tipke za izbor mjeseca\n" +
"- Zadržite klik na bilo kojoj od gornjih tipki za brzi izbor.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Izbor vremena:\n" +
"- Kliknite na bilo koji dio vremena za poveć. vremena\n" +
"- ili Shift-click za smanjenje vremena\n" +
"- ili kliknite i povucite za brzi izbor.";

Calendar._TT["TOGGLE"] = "Promijeni dan s kojim zapoćinje tjedan";
Calendar._TT["PREV_YEAR"] = "Prošla godina (dugi klik za meni)";
Calendar._TT["PREV_MONTH"] = "Prošli mjesec (dugi klik za meni)";
Calendar._TT["GO_TODAY"] = "Pođi na tekući dan";
Calendar._TT["NEXT_MONTH"] = "Slijedeći mjesec (dugi klik za meni)";
Calendar._TT["NEXT_YEAR"] = "Slijdeća godina(dugi klik za meni)";
Calendar._TT["SEL_DATE"] = "Izaberite datum";
Calendar._TT["DRAG_TO_MOVE"] = "Pritisni i povuci za promjenu pozicije";
Calendar._TT["PART_TODAY"] = " (danas)";
Calendar._TT["MON_FIRST"] = "Prikaži ponedjeljak kao prvi dan";
Calendar._TT["SUN_FIRST"] = "Prikaži nedjelju kao prvi dan";
Calendar._TT["CLOSE"] = "Zatvori";
Calendar._TT["TODAY"] = "Danas";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d-%m-%y";
Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";

Calendar._TT["WK"] = "Tje";