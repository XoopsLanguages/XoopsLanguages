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

// Non du module
define("_MI_TDMDOWNLOADS_NAME", "TDMDownloads");

// Description du module
define("_MI_TDMDOWNLOADS_DESC", "Opretter en download sektion, hvor brugere kan downloade/indsende/bedømme forskellige filer.");

// Bloc
define("_MI_TDMDOWNLOADS_BNAME1", "Aktuelle Downloads");
define("_MI_TDMDOWNLOADS_BNAMEDSC1", "Vis seneste Downloads");
define("_MI_TDMDOWNLOADS_BNAME2", "Top Downloads");
define("_MI_TDMDOWNLOADS_BNAMEDSC2", "Vis Top Downloads");
define("_MI_TDMDOWNLOADS_BNAME3", "Top bedømte Download");
define("_MI_TDMDOWNLOADS_BNAMEDSC3", "Vis Top Bedømte Downloads");
define("_MI_TDMDOWNLOADS_BNAME4", "Tilfældig Downloads");
define("_MI_TDMDOWNLOADS_BNAMEDSC4", "Vis filer tilfældigt");

// Sous menu
define("_MI_TDMDOWNLOADS_SMNAME1", "Foreslå");
define("_MI_TDMDOWNLOADS_SMNAME2", "List");

// Menu administration
define("_MI_TDMDOWNLOADS_ADMENU1", "Index");
define("_MI_TDMDOWNLOADS_ADMENU2", "Kategorier vedligehold");
define("_MI_TDMDOWNLOADS_ADMENU3", "Download vedligehold");
define("_MI_TDMDOWNLOADS_ADMENU4", "Brudte Downloads");
define("_MI_TDMDOWNLOADS_ADMENU5", "Redigerede downloads");
define("_MI_TDMDOWNLOADS_ADMENU6", "Ekstra Felter");
define("_MI_TDMDOWNLOADS_ADMENU7", "Om");
define("_MI_TDMDOWNLOADS_ADMENU8", "Rettigheder");
define("_MI_TDMDOWNLOADS_ADMENU9", "Opdatering");
define("_MI_TDMDOWNLOADS_ADMENU10", "Import");

// Pr�f�rences
define("_MI_TDMDOWNLOADS_POPULAR", "Antal hits for at et download skal markeres som populært");
define('_MI_TDMDOWNLOADS_POPULARDSC', '');
define("_MI_TDMDOWNLOADS_NEWDLS", "Antallet af nye filer i \"Home Page\"");
define('_MI_TDMDOWNLOADS_NEWDLSDSC', '');
define("_MI_TDMDOWNLOADS_PERPAGE", "Antallet af artikler per side");
define('_MI_TDMDOWNLOADS_PERPAGEDSC', '');
define("_MI_TDMDOWNLOADS_SUBCATPARENT", "Antal underkategorier der skal vises i den hovedkategorien");
define('_MI_TDMDOWNLOADS_SUBCATPARENTDSC', '');
define("_MI_TDMDOWNLOADS_BLDATE", "Vis seneste uge på startsiden og kategorier (Resumé)?");
define('_MI_TDMDOWNLOADS_BLDATEDSC', '');
define("_MI_TDMDOWNLOADS_BLPOP", "Vis populære downloads på \"Home Page\" siden og kategorier (Resumé)?");
define('_MI_TDMDOWNLOADS_BLPOPDSC', '');
define("_MI_TDMDOWNLOADS_BLRATING", "Vis Top bedømte Downloads i \"Home Page\" siden og kategorier (Resumé)?");
define('_MI_TDMDOWNLOADS_BLRATINGDSC', '');
define("_MI_TDMDOWNLOADS_NBBL", "Antallet af download der vises i sammendrag?");
define('_MI_TDMDOWNLOADS_NBBLDSC', '');
define("_MI_TDMDOWNLOADS_LONGBL", "Titel længde i Resumé");
define('_MI_TDMDOWNLOADS_LONGBLDSC', '');
define("_MI_TDMDOWNLOADS_ANONUPLOADS", "Tillad anonyme for at uploade filer?");
define("_MI_TDMDOWNLOADS_USETELLAFRIEND", "Brug TellAFriend modul med linket \"tip en ven\"?");
define("_MI_TDMDOWNLOADS_USETELLAFRIENDDSC", "Du er nødt til at installere TellAFriend modul for at bruge denne mulighed");
define("_MI_TDMDOWNLOADS_AUTOAPPROVE", "Auto godkende nye downloads uden administrators indblanding?");
define('_MI_TDMDOWNLOADS_AUTOAPPROVEDSC', '');
define("_MI_TDMDOWNLOADS_USESHOTS", "Brug Screenshots?");
define('_MI_TDMDOWNLOADS_USESHOTSDSC', '');
define("_MI_TDMDOWNLOADS_SHOTWIDTH", "Screenshots højde");
define('_MI_TDMDOWNLOADS_SHOTWIDTHDSC', '');
define("_MI_TDMDOWNLOADS_CHECKHOST", "Tillad ikke direkte download ? (leeching)?");
define('_MI_TDMDOWNLOADS_CHECKHOSTDSC', "");
define("_MI_TDMDOWNLOADS_REFERERS", "Dette Websteder kan linke direkte. Adskil med |");
define('_MI_TDMDOWNLOADS_REFERERSDSC', '');
define("_MI_TDMDOWNLOADS_MIMETYPE", "autoriserede MIME-typer");
define("_MI_TDMDOWNLOADS_MIMETYPE_DSC", "Indtast den autoriserede mime typer adskilt af en |");
define("_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE", "Max fil størrelse");
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZEDSC',"");
define("_MI_TDMDOWNLOADS_FORM_OPTIONS", "Editor");
define("_MI_TDMDOWNLOADS_FORM_OPTIONSDSC","");
define("_MI_TDMDOWNLOADS_TOPORDER", "Hvordan skal inhold vises på index siden?");
define("_MI_TDMDOWNLOADS_TOPORDER1", "Dato (faldende)");
define("_MI_TDMDOWNLOADS_TOPORDER2", "Dato (stigende)");
define("_MI_TDMDOWNLOADS_TOPORDER3", "Hits (faldende)");
define("_MI_TDMDOWNLOADS_TOPORDER4", "hits (stigende)");
define("_MI_TDMDOWNLOADS_TOPORDER5", "Stemmer (faldende)");
define("_MI_TDMDOWNLOADS_TOPORDER6", "Stemmer (stigende)");
define("_MI_TDMDOWNLOADS_TOPORDER7", "Titel (faldende)");
define("_MI_TDMDOWNLOADS_TOPORDER8", "Titel (stigende)");
define('_MI_TDMDOWNLOADS_TOPORDERDSC','');
define("_MI_TDMDOWNLOADS_SEARCHORDER", "Sådan vises punkter på listen over filer?");
define('_MI_TDMDOWNLOADS_SEARCHORDERDSC','');
define("_MI_TDMDOWNLOADS_PERPAGELISTE", "Downloads vises på listen over filer");
define('_MI_TDMDOWNLOADS_PERPAGELISTEDSC', '');
define("_MI_TDMDOWNLOADS_AUTO_SUMMARY", "Automatisk Sammendrag?");
define('_MI_TDMDOWNLOADS_AUTO_SUMMARYDSC',"");
define("_MI_TDMDOWNLOADS_SHOW_UPDATED", "Vis 'opdateret' og 'nye' billede?");
define('_MI_TDMDOWNLOADS_SHOW_UPDATEDDSC',"");
//new 1.1
define('_MI_TDMDOWNLOADS_PLATEFORM',"Platform");
define('_MI_TDMDOWNLOADS_PLATEFORM_DSC',"Indtast platforme adskilt med |");
define('_MI_TDMDOWNLOADS_PERPAGEADMIN', 'Antal pr. side i administation');
define('_MI_TDMDOWNLOADS_PERPAGEADMINDSC', '');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAME', 'Omd�b filer der uploades?');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC', 'Hvis den s�ttes til  &#039;nej&#039; og du uploader en fil, med et navn, der allerede eksisterer, vil dette blive overskrevet');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX', 'Pr�fiks p� filer der uploades');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC', 'Kun muligt, hvis muligheden for at rename filer er sat til &#039;ja&#039;');
define('_MI_TDMDOWNLOADS_USETAG', 'Brug TAG modulet til at genererer tags');
define('_MI_TDMDOWNLOADS_USETAGDSC', 'Du skal installerer TAG modulet for at bruge denne mulighed');

// Notifications
define("_MI_TDMDOWNLOADS_GLOBAL_NOTIFY", "Global");
define("_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC", "Global downloads anmeldelse muligheder.");
define("_MI_TDMDOWNLOADS_CATEGORY_NOTIFY", "Kategori");
define("_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC", "Besked indstillinger, der gælder for den aktuelle fil kategori.");
define("_MI_TDMDOWNLOADS_FILE_NOTIFY", "Filer");
define("_MI_TDMDOWNLOADS_FILE_NOTIFYDSC", "Besked indstillinger, der gælder for den aktuelle fil.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY", "Ny kategori");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP", "Giv mig besked, når en ny kategori er oprettet.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC", "Få besked, når en ny kategori er oprettet");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil kategori");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY", "Redigering af Fil ønsket");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP", "Advisér mig om enhver fil ændring anmodning.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC", "Få besked, når en fil modifikation anmodningen er fremsat.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Fil ændring ønsket");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY", "Brudt fil rapporteret");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP", "Giv mig en rapport over brudte filer.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC", "Få besked, når en beskadiget fil er rapporteret.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Brudt fil rapporteret");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY", "Fil indsendt");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP", "Giv mig besked, når en ny fil er indsendt (afventer godkendelse).");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC", "Få besked, når en ny fil er indsendt (afventer godkendelse).");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil indsendt");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY", "Ny fil");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP", "Giv mig besked, når en ny fil er offentliggjort");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC", "Få besked, når en ny fil er offentliggjort.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY", "Fil indsendt");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP", "Giv mig besked, når en ny fil er indsendt (afventer godkendelse) til den aktuelle kategori.");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC", "Få besked, når en ny fil er indsendt (afventer godkendelse) til den aktuelle kategori.");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil sendt i kategori");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY", "Ny fil");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP", "Giv mig besked, når en ny fil er indsendt til den aktuelle kategori.");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC", "Få besked, når en ny fil er indsendt til den aktuelle kategori.");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) Ny fil i kategorien");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY", "Fil Godkendt");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP", "Få besked, når denne fil er godkendt.");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC", "Få besked, når denne fil er godkendt.");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ", "[(X_SITENAME)] (X_MODULE) auto-besked: Fil Godkendt");
?><?php // Translation done by xtransam & anderssk - 2009-08-30 20:35 ?>
