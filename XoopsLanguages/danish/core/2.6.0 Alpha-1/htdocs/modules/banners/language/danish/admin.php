<?Php
/*
 Du må ikke ændre eller ændre nogen del af denne kommentar eller kreditter
 af støtte udviklere fra denne kildekode eller nogen støtte kildekode
 som anses for ophavsretligt beskyttet (c) materiale af den oprindelige kommentar eller kredit forfattere.

 Dette program er distribueret i håb om at det vil være nyttigt,
 men UDEN NOGEN GARANTI, endda uden den underforståede garanti
 SALGBARHED eller EGNETHED TIL ET BESTEMT FORMÅL.
* /

/**
 * Bannere modul
 *
 * @ Ophavsret XOOPS Project http://sourceforge.net/projects/xoops/
 * @ Licens GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @ Pakke bannere
 * @ Idet 2.6.0
 * @ Author Mage Grégory (AKA Mage)
 * @ Version $ Id $
 */
//Generiske
define("_AM_BANNERS_ACTION", "Handling");
define("_AM_BANNERS_VIEW", "Vis");
define("_AM_BANNERS_DELETE", "Slet");
define("_AM_BANNERS_EDIT", "Rediger");
define("_AM_BANNERS_DBUPDATED", "Database opdateret!");

//Index.php
define("_AM_BANNERS_INDEX_NBTOTAL", "Der er %s bannere i vores database");
define("_AM_BANNERS_INDEX_NBCLIENT", "Der er %s klient i vores database");
define("_AM_BANNERS_INDEX_NBFINISH", "Der er %s Færdige bannere");

//Clients.php
define("_AM_BANNERS_CLIENTS_ACTIVEBANNERS", "Aktive Bannere");
define("_AM_BANNERS_CLIENTS_ADD", "Tilføj en ny klient");
define("_AM_BANNERS_CLIENTS_EDIT", "Edit klient");
define("_AM_BANNERS_CLIENTS_EXTRAINFO", "Ekstra information");
define("_AM_BANNERS_CLIENTS_LIST", "Liste over klienter");
define("_AM_BANNERS_CLIENTS_MAIL", "Client email");
define("_AM_BANNERS_CLIENTS_NAME", "Client name");
define("_AM_BANNERS_CLIENTS_SUREDEL", "Er du sikker på at slette denne klient '<strong> %s </strong>' og alle dens bannere?");
define("_AM_BANNERS_CLIENTS_UNAME", "Bruger navn");
define("_AM_BANNERS_CLIENTS_UNAME_NO", "Brug ikke en medlem");
define("_AM_BANNERS_CLIENTS_UNAME_YES", "Brug et medlem");

//Banners.php
define("_AM_BANNERS_BANNERS_ADD", "Tilføj en ny banner");
define("_AM_BANNERS_BANNERS_CLICKS", "klik");
define("_AM_BANNERS_BANNERS_CLICKURL", "Klik på URL");
define("_AM_BANNERS_BANNERS_CODEHTML", "Code HTML");
define("_AM_BANNERS_BANNERS_CURRENT", "Nuværende aktive bannere");
define("_AM_BANNERS_BANNERS_EDIT", "Edit banner");
define("_AM_BANNERS_BANNERS_ENDDATE", "Dato sluttede");
define("_AM_BANNERS_BANNERS_FINISH", "Færdig bannere");
define("_AM_BANNERS_BANNERS_IMAGE", "Billede");
define("_AM_BANNERS_BANNERS_IMAGE_PATH", "Der findes filer: %s");
define("_AM_BANNERS_BANNERS_IMGURL", "billed URL:");
define("_AM_BANNERS_BANNERS_IMPRESIONLEFT", "venstre Visninger");
define("_AM_BANNERS_BANNERS_IMPRESSIONS", "visninger");
define("_AM_BANNERS_BANNERS_IMPRESSIONSP", "Visninger købt");
define("_AM_BANNERS_BANNERS_IMPRESSIONSP_PATTERN", "Du skal indtaste et heltal");
define("_AM_BANNERS_BANNERS_LIST", "Liste over bannere");
define("_AM_BANNERS_BANNERS_NCLICKS", "% klik");
define("_AM_BANNERS_BANNERS_RELOAD", "Opdater banner");
define("_AM_BANNERS_BANNERS_STARTDATE", "Dato startet");
define("_AM_BANNERS_BANNERS_SUREDEL", "Er du sikker på at slette denne Banner?");
define("_AM_BANNERS_BANNERS_UNLIMIT", "Ubegrænset");
define("_AM_BANNERS_BANNERS_UPLOADS", "Opload");
define("_AM_BANNERS_BANNERS_USEHTML", "Brug HTML?");

define("_AM_BANNERS_BANNERS_ERROR_NOCLIENT", "Opret venligst først en klient");

//Tips
define("_AM_BANNERS_TIPS_CLIENTS", "<ul> <li> Tilføj, redigere og opdatere klienter </li> </ul>.");
define("_AM_BANNERS_TIPS_CLIENTS_ADDEDIT", "<ul> <li> redigere og opdatere klient </li> <li> Hvis du ikke sætter en bruger af hjemmesiden, vil kunden ikke har adgang til disse bannere. </li> < /ul> ");
define("_AM_BANNERS_TIPS_BANNERS", "<ul> <li> Tilføj, redigere og opdatere bannere </li> </ul>.");
define("_AM_BANNERS_TIPS_BANNERS_FORM1", "<ul> <li> Autoriseret mime typer: %s </li>");
define("_AM_BANNERS_TIPS_BANNERS_FORM2", "<li> Max uploadede filer størrelse: %s KB </li> </ul>");