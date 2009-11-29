<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti � l'utilisateur les droits suivants
 *
 * 1. La libert� d'ex�cuter le logiciel, pour n'importe quel usage,
 * 2. La libert� de l' �tudier et de l'adapter � ses besoins,
 * 3. La libert� de redistribuer des copies,
 * 4. La libert� d'am�liorer et de rendre publiques les modifications afin
 * que l'ensemble de la communaut� en b�n�ficie.
 *
 * @copyright   http://www.tdmxoops.net
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM (G.Mage); TEAM DEV MODULE
 *
 * ****************************************************************************
 */

// index.php
define("_MD_TDMDOWNLOADS_INDEX_BLDATE", "Nylige Downloads:");
define("_MD_TDMDOWNLOADS_INDEX_BLNAME", "Resumé");
define("_MD_TDMDOWNLOADS_INDEX_BLRATING", "Mest populære filer:");
define("_MD_TDMDOWNLOADS_INDEX_BLPOP", "Top Downloads:");
define("_MD_TDMDOWNLOADS_INDEX_DLNOW", "Download nu!");
define("_MD_TDMDOWNLOADS_INDEX_LATESTLIST", "Seneste lister");
define("_MD_TDMDOWNLOADS_INDEX_NEWTHISWEEK", "Nyt i denne uge");
define("_MD_TDMDOWNLOADS_INDEX_POPULAR", "Populære");
define("_MD_TDMDOWNLOADS_INDEX_UPTHISWEEK", "Opdateret i denne uge");
define("_MD_TDMDOWNLOADS_INDEX_SCAT", "Under-kategorier:");
define("_MD_TDMDOWNLOADS_INDEX_SUBMITDATE", "Indsendt den");
define("_MD_TDMDOWNLOADS_INDEX_SUBMITTER", "Indsendt af:");
define("_MD_TDMDOWNLOADS_INDEX_THEREARE", "Der er<b> %s </b> fil(er) i vores databse");

// viewcat.php:
define("_MD_TDMDOWNLOADS_CAT_CURSORTBY", "Filer øjeblikket sorteret efter: %s ");
define("_MD_TDMDOWNLOADS_CAT_DATE", "Dato");
define("_MD_TDMDOWNLOADS_CAT_DATENEW", "Dato (faldende)");
define("_MD_TDMDOWNLOADS_CAT_DATEOLD", "Dato (stigende)");
define("_MD_TDMDOWNLOADS_CAT_HITS", "Hits");
define("_MD_TDMDOWNLOADS_CAT_LIST", "List");
define("_MD_TDMDOWNLOADS_CAT_NONEXISTENT", "Denne kategori findes ikke");
define("_MD_TDMDOWNLOADS_CAT_POPULARITY", "Popularitet;");
define("_MD_TDMDOWNLOADS_CAT_POPULARITYLTOM", "Popularitet (fra laveste til højeste)");
define("_MD_TDMDOWNLOADS_CAT_POPULARITYMTOL", "Popularitet; (fra højeste til laveste)");
define("_MD_TDMDOWNLOADS_CAT_RATING", "Bedøm");
define("_MD_TDMDOWNLOADS_CAT_RATINGLTOH", "Bedømmelse (fra laveste til højeste)");
define("_MD_TDMDOWNLOADS_CAT_RATINGHTOL", "Bedømmelse (fra højeste til laveste)");
define("_MD_TDMDOWNLOADS_CAT_SORTBY", "Sorteret efter:");
define("_MD_TDMDOWNLOADS_CAT_SUMMARY", "Resumé");
define("_MD_TDMDOWNLOADS_CAT_THEREARE", "Der er<b> %s </b>fil(er) i denne kategori");
define("_MD_TDMDOWNLOADS_CAT_TITLE", "Titel");
define("_MD_TDMDOWNLOADS_CAT_TITLEATOZ", "Titel (A til Z)");
define("_MD_TDMDOWNLOADS_CAT_TITLEZTOA", "Titel (Z til A)");
define("_MD_TDMDOWNLOADS_CAT_VOTE", "Afstemning");

// singlefile.php:
define("_MD_TDMDOWNLOADS_SINGLEFILE_AUTHOR", "Indsendt af");
define("_MD_TDMDOWNLOADS_SINGLEFILE_COMMENTS", "Kommentarer ( %s )");
define("_MD_TDMDOWNLOADS_SINGLEFILE_DATEPROP", "Indsendt den");
define("_MD_TDMDOWNLOADS_SINGLEFILE_ICI", "Her");
define("_MD_TDMDOWNLOADS_SINGLEFILE_INTFILEFOUND", "Her er en vigtig fil %s ");
define("_MD_TDMDOWNLOADS_SINGLEFILE_NBTELECH", "Hentet %s gange");
define("_MD_TDMDOWNLOADS_SINGLEFILE_NONEXISTENT", "Denne download eksisterer ikke i vores database");
define("_MD_TDMDOWNLOADS_SINGLEFILE_MODIFY", "Rediger");
define("_MD_TDMDOWNLOADS_SINGLEFILE_RATING", "Hyppighed");
define("_MD_TDMDOWNLOADS_SINGLEFILE_RATHFILE", "Bedøm denne fil");
define("_MD_TDMDOWNLOADS_SINGLEFILE_REPORTBROKEN", "Rapport en beskadiget fil");
define("_MD_TDMDOWNLOADS_SINGLEFILE_TELLAFRIEND", "Send til en ven");
define("_MD_TDMDOWNLOADS_SINGLEFILE_VOTES", "( %s  stemmer)");

// ratefile.php
define("_MD_TDMDOWNLOADS_RATEFILE_BEOBJECTIVE", "Du kan være objektiv, hvis alle modtager 1 eller 10, kan vurderingerne ikke bruges til noget.");
define("_MD_TDMDOWNLOADS_RATEFILE_CANTVOTEOWN", "Stem ikke på dit eget download. <br /> Alle stemmer er registreret og kontrolleret.");
define("_MD_TDMDOWNLOADS_RATEFILE_DONOTVOTE", "Stem ikke på dit eget download.");
define("_MD_TDMDOWNLOADS_RATEFILE_RATE", "Bedøm!");
define("_MD_TDMDOWNLOADS_RATEFILE_RATINGSCALE", "Skalaen er 1 - 10, hvor 1 er det laveste og 10 det højeste.");
define("_MD_TDMDOWNLOADS_RATEFILE_VOTE", "Afstemning");
define("_MD_TDMDOWNLOADS_RATEFILE_VOTEOK", "Din stemme er værdsat. <br /> Tak fordi du tog dig tid til at stemme her");
define("_MD_TDMDOWNLOADS_RATEFILE_VOTEONCE", "Vær venlig ikke at stemme på det samme mere end én gang.");

// brokenfile.php
define("_MD_TDMDOWNLOADS_BROKENFILE_ALREADYREPORTED", "Du har allerede indsendt en rapport vedr. brudte downloads til dette download.");
define("_MD_TDMDOWNLOADS_BROKENFILE_FORSECURITY", "Af sikkerhedsmæssige årsager bliver dit brugernavn og IP-adresse også blive midlertidigt registreres.");
define("_MD_TDMDOWNLOADS_BROKENFILE_REPORTBROKEN", "Brudte filer rapporter");
define("_MD_TDMDOWNLOADS_BROKENFILE_THANKSFORHELP", "Tak for din hjælp til at opretholde denne mappes integritet.");
define("_MD_TDMDOWNLOADS_BROKENFILE_THANKSFORINFO", "Tak for oplysningerne. Vi vil se på din anmodning om kort tid.");

// modfile.php
define("_MD_TDMDOWNLOADS_MODFILE_THANKSFORINFO", "Tak for oplysningerne. Vi vil se på din anmodning om kort tid.");

//submit.php
define("_MD_TDMDOWNLOADS_SUBMIT_ALLPENDING", "?Alle fil/script oplysninger er indsendt og afventer bekræftelse.");
define("_MD_TDMDOWNLOADS_SUBMIT_DONTABUSE", "?Brugernavn og IP bliver registreret, så misbrug ikke systemet.");
define("_MD_TDMDOWNLOADS_SUBMIT_ISAPPROVED", "Din fil er godkendt");
define("_MD_TDMDOWNLOADS_SUBMIT_PROPOSER", "Indsend en fil");
define("_MD_TDMDOWNLOADS_SUBMIT_RECEIVED", "Vi har modtaget din fil. Tak!");
define("_MD_TDMDOWNLOADS_SUBMIT_SUBMITONCE", "Indsend kun din fil/script én gang.");
define("_MD_TDMDOWNLOADS_SUBMIT_TAKEDAYS", "Det kan tage flere dage før din fil/script er tilføjet i vores database.");

//search.php
define("_MD_TDMDOWNLOADS_SEARCH", "Filter i listen");
define("_MD_TDMDOWNLOADS_SEARCH_ALL1", "Alle");
define("_MD_TDMDOWNLOADS_SEARCH_ALL2", "Alle");
define("_MD_TDMDOWNLOADS_SEARCH_BT", "Søgning");
define("_MD_TDMDOWNLOADS_SEARCH_CATEGORIES", "Kategorier");
define("_MD_TDMDOWNLOADS_SEARCH_DATE", "Dato");
define("_MD_TDMDOWNLOADS_SEARCH_DOWNLOAD", "Download");
define("_MD_TDMDOWNLOADS_SEARCH_HITS", "Hits");
define("_MD_TDMDOWNLOADS_SEARCH_NOTE", "Hyppighed");
define("_MD_TDMDOWNLOADS_SEARCH_PAGETITLE", "Liste");
define("_MD_TDMDOWNLOADS_SEARCH_THEREARE", "Der er <b>%s </b>fil(er)");
define("_MD_TDMDOWNLOADS_SEARCH_TITLE", "Navn");

// formulaire
define("_AM_TDMDOWNLOADS_FORMADD", "Tilføj");
define("_AM_TDMDOWNLOADS_FORMEDIT", "Rediger");
define("_AM_TDMDOWNLOADS_FORMFILE", "Fil");
define("_AM_TDMDOWNLOADS_FORMHOMEPAGE", "Hjemmeside");
define("_AM_TDMDOWNLOADS_FORMINCAT", "i kategorien");
define("_AM_TDMDOWNLOADS_FORMIMG", "Screen Shot");
define("_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS", "Beskrivelse: <br><br> Brug <b>'[pagebreak]'</b> til at definerer størrelsen af den korte beskrivelse. <br> Den korte beskrivelse <br> gør det muligt at reducere tekststørrelsen på hjemmesiden for det modul og kategorier.");
define("_AM_TDMDOWNLOADS_FORMTITLE", "Titel");
define("_AM_TDMDOWNLOADS_FORMPATH", "Filen findes i: %s ");
define("_AM_TDMDOWNLOADS_FORMPLATFORM", "Plateform");
define("_AM_TDMDOWNLOADS_FORMSIZE", "Filstørrelse (bytes)");
define("_AM_TDMDOWNLOADS_FORMUPLOAD", "Uploader");
define("_AM_TDMDOWNLOADS_FORMURL", "Download URL");
define("_AM_TDMDOWNLOADS_FORMVERSION", "Version");

//g�n�rique
define("_MD_TDMDOWNLOADS_EDITTHISDL", "Rediger dette download");
define("_MD_TDMDOWNLOADS_MOREDETAILS", ">> Flere oplysninger");
define("_MD_TDMDOWNLOADS_NUMBYTES", " %s  bytes");

//visit.php
define("_MD_TDMDOWNLOADS_NOPERMISETOLINK", "Denne fil hører ikke til hjemmesiden, hvor du kom fra. <br /><br /> Du bør kontakte webmaster for det websted du kom fra og fortæl denne at : <br /> <b>Intet ejerskab af links fra andre sider! (Leech)</b> <br /><br /> <b>Leecher definition:</b> En person, der er for doven til at linke til sin egen server eller stjæler arbejde udført af andre mennesker <br /><br /> Du er allerede <b>registreret.</b>");

//Message d'erreur
define("_MD_TDMDOWNLOADS_ERREUR_NOCAT", "Du er nødt til at vælge en kategori!");
define("_MD_TDMDOWNLOADS_ERREUR_SIZE", "Filstørrelse skal være et tal");

//pour xoops france:
define("_MD_TDMDOWNLOADS_SUP", "<br /><br /> [block]: Blokke <br /> [noter]: Noter <br /> [evolutions]: Planlagt udvikling <br /> [Infos]: Informationer <br /> [changelog]: Changelog <br /> [BackOffice]: Back Office <br /> [frontoffice]: Front Office");
define("_MD_TDMDOWNLOADS_SUP_BACKOFFICE", "Back Office:");
define("_MD_TDMDOWNLOADS_SUP_BLOCS", "Blokke:");
define("_MD_TDMDOWNLOADS_SUP_CHANGELOG", "Changelog:");
define("_MD_TDMDOWNLOADS_SUP_EVOLUTIONS", "Planlagte udvikling:");
define("_MD_TDMDOWNLOADS_SUP_FRONTOFFICE", "Front Office:");
define("_MD_TDMDOWNLOADS_SUP_INFOS", "Informationer:");
define("_MD_TDMDOWNLOADS_SUP_NOTES", "Noter:");
?><?php // Translation done by xtransam & anderssk - 2009-08-30 20:35 ?>
