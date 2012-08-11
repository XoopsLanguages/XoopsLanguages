<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti à l'utilisateur les droits suivants
 *
 * 1. La liberté d'exécuter le logiciel, pour n'importe quel usage,
 * 2. La liberté de l' étudier et de l'adapter à ses besoins,
 * 3. La liberté de redistribuer des copies,
 * 4. La liberté d'améliorer et de rendre publiques les modifications afin
 * que l'ensemble de la communauté en bénéficie.
 *
 * @copyright   http://www.tdmxoops.net
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM (G.Mage); TEAM DEV MODULE
 *
 * ****************************************************************************
 */

// index.php
define("_AM_TDMDOWNLOADS_INDEX_BROKEN","Der er<span style='color : Red'><b> %s </b></span>brudte filer rapporteret");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADS","Der er<span style='color : Red'><b> %s </b></span>filer i vores database");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADSWAITING","Der er<span style='color : Red'><b> %s </b></span>downloads der venter på godkendelse");
define("_MI_TDMDOWNLOADS_INDEX_ERREURPFOLDER","FEJL: »TDMDownloads 'mappe' %s  / uploads / 'kan ikke oprettes, du er nødt til at oprette det manuelt <br><br> bare kopiere mappen 'TDMDownloads' (du finder den i 'ekstra' mappe inde i modulet) over i 'uploads' mappen");
define("_MI_TDMDOWNLOADS_INDEX_ERREURPHP","FEJL: Denne menu kræver mindst PHP 5.0 eller derover");
define("_AM_TDMDOWNLOADS_INDEX_MODIFIED","Der er<span style='color : Red'><b> %s</b></span> ændringsønsker");
//version  1.1
define("_AM_TDMDOWNLOADS_INDEX_UPDATE_INFO","Seneste version af TDMDownloads");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_OK","Du har den seneste version af TDMDownloads %s");
define("_AM_TDMDOWNLOADS_INDEX_CHANGELOG","<b>Ændringslog</b>");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_NOT_OK","Der er en ny version af TDMDownloads %s, du kan hente den <a href='http://www.tdmxoops.net/modules/TDMDownloads' target='_blank'>her</a>");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_ALLOWURLFOPEN","For at undersøge om en ny version af TDMDownloads findes, skal du have &#039;allow_url_fopen&#039; til &#039;on&#039;");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_FICHIER_KO","Fil version modulet af TDM er i øjeblikket ikke tilgængeligt");

//category.php
define("_AM_TDMDOWNLOADS_CAT_NEW","Ny kategori");
define("_AM_TDMDOWNLOADS_CAT_LIST","Kategorier List");
define("_AM_TDMDOWNLOADS_DELDOWNLOADS","med følgende filer:");
define("_AM_TDMDOWNLOADS_DELSOUSCAT","Følgende kategorier vil blive helt slettet:");
define("_AM_TDMDOWNLOADS_DOWNLOADSINCAT","download (s) i denne kategori");
define("_AM_TDMDOWNLOADS_THEREIS","Der er");

//downloads.php
define("_AM_TDMDOWNLOADS_DOWNLOADS_LISTE","Downloads List");
define("_AM_TDMDOWNLOADS_DOWNLOADS_NEW","Ny download");
define("_AM_TDMDOWNLOADS_DOWNLOADS_SEARCH","Søgning");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESANONYME","Stemmer fra anonyme (alt stemmer: %s )");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESUSER","Stemmer fra brugerne (i alt stemmer: %s )");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_USER","Brugere");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_IP","IP-adresse");
define("_AM_TDMDOWNLOADS_DOWNLOADS_WAIT","Afventer validering");

//broken.php
define("_AM_TDMDOWNLOADS_BROKEN_SENDER","Rapport forfatter");
define("_AM_TDMDOWNLOADS_BROKEN_SURDEL","Er du sikker på du vil slette denne rapport?");

//modified.php
define("_AM_TDMDOWNLOADS_MODIFIED_MOD","Indsendt ved;");
define("_AM_TDMDOWNLOADS_MODIFIED_ORIGINAL","Original");
define("_AM_TDMDOWNLOADS_MODIFIED_SURDEL","Er du sikker på du vil slette dette download anmodning?");

//field.php
define("_AM_TDMDOWNLOADS_DELDATA","med følgende oplysninger:");
define("_AM_TDMDOWNLOADS_FIELD_LIST","Felter List");
define("_AM_TDMDOWNLOADS_FIELD_NEW","Nye felter");

//about.php
define("_AM_TDMDOWNLOADS_ABOUT_AUTHOR","Author");
define("_AM_TDMDOWNLOADS_ABOUT_CHANGELOG","Change log");
define("_AM_TDMDOWNLOADS_ABOUT_CREDITS","Credits");
define("_AM_TDMDOWNLOADS_ABOUT_LICENSE","Licens");
define("_AM_TDMDOWNLOADS_ABOUT_MODULEINFOS","Modul Information");
define("_AM_TDMDOWNLOADS_ABOUT_MODULEWEBSITE","Support Website");
define("_AM_TDMDOWNLOADS_ABOUT_RELEASEDATE","Dato for udgivelse");
define("_AM_TDMDOWNLOADS_ABOUT_STATUS","Status");

//permissions.php
define("_AM_TDMDOWNLOADS_PERMISSIONS_4","Indsend et download");
define("_AM_TDMDOWNLOADS_PERMISSIONS_8","Indsende en ændring");
define("_AM_TDMDOWNLOADS_PERMISSIONS_16","Bedømme et download");
define("_AM_TDMDOWNLOADS_PERMISSIONS_32","Uploade filer");
define("_AM_TDMDOWNLOADS_PERM_AUTRES","Andre tilladelser");
define("_AM_TDMDOWNLOADS_PERM_AUTRES_DSC","Vælg grupper, der kan:");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT","Indsend rettigheder");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT_DSC","Vælg grupper, der kan sende filer til kategori");
define("_AM_TDMDOWNLOADS_PERM_VIEW","Visnings rettigheder");
define("_AM_TDMDOWNLOADS_PERM_VIEW_DSC","Vælg grupper der kan se filer i kategorier");

// Import.php
define("_AM_TDMDOWNLOADS_IMPORT1","Import");
define("_AM_TDMDOWNLOADS_IMPORT_CAT_IMP","Kategori: ' %s ' importeret");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_MYDOWNLOADS","Er du sikker på du vil importere data fra Mydownloads modul til TDMDownloads");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_WFDOWNLOADS","Er du sikker på du vil importere data fra WF-Downloads moduler til TDMDownloads");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_DOWNLOADS","Der er ingen filer til at importere");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_TOPIC","Der er ingen filer til at importere");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS","filer importeret");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS_IMP","filer: ' %s ' importeret;");
define("_AM_TDMDOWNLOADS_IMPORT_ERREUR","Vælg Upload Directory (stien)");
define("_AM_TDMDOWNLOADS_IMPORT_ERROR_DATA","Fejl under import af data");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS","Import fra Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_PATH","Vælg Upload Directory (stien) for skærmbilleder af Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_URL","Vælg den tilsvarende webadresse til skærmbilleder af Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_NB_CAT","Der er %s  kategorier at importere");
define("_AM_TDMDOWNLOADS_IMPORT_NB_DOWNLOADS","Der er %s  filer at importere");
define("_AM_TDMDOWNLOADS_IMPORT_NUMBER","Data til at importerer");
define("_AM_TDMDOWNLOADS_IMPORT_OK","Import udført med succes!");
define("_AM_TDMDOWNLOADS_IMPORT_VOTE_IMP","AFSTEMNING: ' %s ' importeret;");
define("_AM_TDMDOWNLOADS_IMPORT_WARNING","<span style='color:#FF0000; font-size:16px; font-weight:bold'>Advarsel!</span> <br><br> Indførsel vil slette alle data i TDMDownloads. Det er anbefales, at du laver en sikkerhedskopi af dine data, også på dit websted. <br><br> TDM er ikke ansvarlig, hvis du mister dine data. Det sker, at skærmbilleder kan ikke kopieres.");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS","Import fra WF Downloads (kun for V3.2 RC2)");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_CATIMG","Vælg Upload Directory (stien) for kategorier billeder til Downloads");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_SHOTS","Vælg Upload Directory (stien) for skærmbilleder til Downloads");

//Pour les options de filtre
define("_AM_TDMDOWNLOADS_ORDER","rækkefølge:");
define("_AM_TDMDOWNLOADS_TRIPAR","sorteret efter:");

//Formulaire et tableau
define("_AM_TDMDOWNLOADS_FORMADD","Tilføj");
define("_AM_TDMDOWNLOADS_FORMACTION","Handling");
define("_AM_TDMDOWNLOADS_FORMAFFICHE","Vis felt?");
define("_AM_TDMDOWNLOADS_FORMAFFICHESEARCH","Søgbart felt?");
define("_AM_TDMDOWNLOADS_FORMAPPROVE","Godkend");
define("_AM_TDMDOWNLOADS_FORMCAT","Kategori");
define("_AM_TDMDOWNLOADS_FORMCOMMENTS","Antal kommentarer");
define("_AM_TDMDOWNLOADS_FORMDATE","Dato");
define("_AM_TDMDOWNLOADS_FORMDEL","Slet");
define("_AM_TDMDOWNLOADS_FORMDISPLAY","Vis");
define("_AM_TDMDOWNLOADS_FORMEDIT","Rediger");
define("_AM_TDMDOWNLOADS_FORMFILE","Fil");
define("_AM_TDMDOWNLOADS_FORMHITS","Hits");
define("_AM_TDMDOWNLOADS_FORMHOMEPAGE","Hjemmeside");
define("_AM_TDMDOWNLOADS_FORMLOCK","Deaktiver download");
define("_AM_TDMDOWNLOADS_FORMIGNORE","Ignorer");
define("_AM_TDMDOWNLOADS_FORMINCAT","i kategorien");
define("_AM_TDMDOWNLOADS_FORMIMAGE","Billede");
define("_AM_TDMDOWNLOADS_FORMIMG","Skærm dump");
define("_AM_TDMDOWNLOADS_FORMPATH","Filer findes i: %s ");
define("_AM_TDMDOWNLOADS_FORMPLATFORM","Platform");
define("_AM_TDMDOWNLOADS_FORMPOSTER","Indsendt af");
define("_AM_TDMDOWNLOADS_FORMRATING","Bemærk!");
define("_AM_TDMDOWNLOADS_FORMSIZE","Fil størrelse (bytes)");
define("_AM_TDMDOWNLOADS_FORMSUREDEL","Er du sikker på du vil <span style='color : Red'><b>slette: %s </b></span>");
define("_AM_TDMDOWNLOADS_FORMTEXT","Beskrivelse");
define("_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS","Beskrivelse: <br><br> Brug <b>'[pagebreak]'</b> til definerer størrelsen af den korte beskrivelse. <br> Den korte beskrivelse gør det muligt at reducere tekststørrelsen på hjemmesiden for modulet og kategorier.");
define("_AM_TDMDOWNLOADS_FORMTITLE","Titel");
define("_AM_TDMDOWNLOADS_FORMUPLOAD","Upload");
define("_AM_TDMDOWNLOADS_FORMURL","Download URL");
define("_AM_TDMDOWNLOADS_FORMVALID","Aktivér download");
define("_AM_TDMDOWNLOADS_FORMVERSION","Version");
define("_AM_TDMDOWNLOADS_FORMVOTE","Afstemninger");
define("_AM_TDMDOWNLOADS_FORMWEIGHT","Vægt");
define("_AM_TDMDOWNLOADS_FORMWITHFILE","Med filen:");

//Message d'erreur
define("_AM_TDMDOWNLOADS_ERREUR_CAT","Du kan ikke bruge denne kategori ");
define("_AM_TDMDOWNLOADS_ERREUR_NOBMODDOWNLOADS","Der er ikke nogen ændrede downloads");
define("_AM_TDMDOWNLOADS_ERREUR_NOBROKENDOWNLOADS","Der er ikke nogen brudte downloads");
define("_AM_TDMDOWNLOADS_ERREUR_NOCAT","Du er nødt til at vælge en kategori!");
define("_AM_TDMDOWNLOADS_ERREUR_NODESCRIPTION","Du er nødt til at lave en beskrivelse");
define("_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADS","Der er ingen filer til download");
define("_AM_TDMDOWNLOADS_ERREUR_SIZE","filstørrelsen skal være et tal");
define("_AM_TDMDOWNLOADS_ERREUR_WEIGHT","vægt skal være et tal");

//Message de redirection
define("_AM_TDMDOWNLOADS_REDIRECT_DELOK","Slettet");
define("_AM_TDMDOWNLOADS_REDIRECT_NOCAT","Du er nødt til at oprette en kategori");
define("_AM_TDMDOWNLOADS_REDIRECT_NODELFIELD","Du kan ikke slette dette felt");
define("_AM_TDMDOWNLOADS_REDIRECT_SAVE","Gemt");

//générique
define("_MD_TDMDOWNLOADS_NUMBYTES"," %s  bytes");

//pour xoops france:
define("_MD_TDMDOWNLOADS_SUP","<br /><br /> [block]: Blokke <br /> [notes]: Noter <br /> [evolutions]: Planlagt udvikling <br /> [Infos]: Information <br /> [changelog]: Ændringslog <br /> [BackOffice]: Back Office <br /> [frontoffice]: Front Office");
define("_MD_TDMDOWNLOADS_SUP_BACKOFFICE","Back Office:");
define("_MD_TDMDOWNLOADS_SUP_BLOCS","Blokke:");
define("_MD_TDMDOWNLOADS_SUP_CHANGELOG","Ændringslog:");
define("_MD_TDMDOWNLOADS_SUP_EVOLUTIONS","Planlagt udvikling:");
define("_MD_TDMDOWNLOADS_SUP_FRONTOFFICE","Front Office:");
define("_MD_TDMDOWNLOADS_SUP_INFOS","Informationer:");
define("_MD_TDMDOWNLOADS_SUP_NOTES","Noter:");
?><?php // Translation done by xtransam & anderssk - 2009-08-30 20:35 ?>
