<?php
/**
 * $Id: modinfo.php,v 1.12 2007/03/31 16:42:01 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define('_MI_WFD_NAME','WF-Downloads');

// A brief description of this module
define('_MI_WFD_DESC','Opretter en download sektion, hvor brugerne kan downloade/indsende og bedømme forskellige filer ');

// Names of blocks for this module (Not all module has blocks)
define('_MI_WFD_BNAME1','Nye WF-Downloads');
define('_MI_WFD_BNAME2','Mest hentet');

// Sub menu titles
define('_MI_WFD_SMNAME1','Indsend');
define('_MI_WFD_SMNAME2','Populær');
define('_MI_WFD_SMNAME3','Højst vurderet');

// Names of admin menu items
define('_MI_WFD_BINDEX','Index');
define('_MI_WFD_INDEXPAGE','Index  indstillinger');
define('_MI_WFD_MCATEGORY','Kategorier');
define('_MI_WFD_MDOWNLOADS','Filer');
define('_MI_WFD_REVIEWS','Bedømmelser');
define('_MI_WFD_MUPLOADS','Billed upload');
define('_MI_WFD_MMIMETYPES','Fil-typer');
define('_MI_WFD_PERMISSIONS','Rettigheder');
define('_MI_WFD_MVOTEDATA','Stemmer');
define('_MI_WFD_MMIRRORS','Mirrors');

// Title of config items
define('_MI_WFD_POPULAR','Populær antal');
define('_MI_WFD_POPULARDSC','Antallet af downloads får status på en fil bliver populær');

//Display Icons
define('_MI_WFD_ICONDISPLAY','Populær og nye downloads:');
define('_MI_WFD_DISPLAYICONDSC','Vælg hvordan de populærer og nye downloads skal vises');
define('_MI_WFD_DISPLAYICON1','Vis som ikon');
define('_MI_WFD_DISPLAYICON2','Vis som tekst');
define('_MI_WFD_DISPLAYICON3','Vis ikke');

define('_MI_WFD_DAYSNEW','Nye downloads:');
define('_MI_WFD_DAYSNEWDSC','Antallet af dage et download betragtes som nyt');
define('_MI_WFD_DAYSUPDATED','Opdaterede downloads:');
define('_MI_WFD_DAYSUPDATEDDSC','Antallet af dage et opdateret download markes med opdateret.');

define('_MI_WFD_PERPAGE','Antal downloads');
define('_MI_WFD_PERPAGEDSC','Antallet af downloads der vises i hver kategori');

define('_MI_WFD_TEMPLATESET','Vælg skabelon sæt');
define('_MI_WFD_TEMPLATESETDSC','Vælg skabelon sæt til dit modul.<br />Kan hjælpe dig med at vælge hvordan dine downloads vises');
define('_MI_WFD_TEMPLATESET1','Standard');
define('_MI_WFD_TEMPLATESET2','Professionel');

define('_MI_WFD_USESHOTS','Vis screenshot billeder?');
define('_MI_WFD_USESHOTSDSC','Vælg Ja vor at vise screenshot billeder ved hvert download');
define('_MI_WFD_SHOTWIDTH','Billed bredde');
define('_MI_WFD_SHOTWIDTHDSC','Billed bredde på screenshot');
define('_MI_WFD_SHOTHEIGHT','Billed højde');
define('_MI_WFD_SHOTHEIGHTDSC','Billed højde på screenshot');
define('_MI_WFD_CHECKHOST','Forhindre direkte download link? (leeching)');
define('_MI_WFD_REFERERS','Disse sider kan lave direkte link til dine filer<br /> adskil med |');

define('_MI_WFD_CAT_IMGWIDTH','Kategori billed bredde');
define('_MI_WFD_CAT_IMGWIDTHDSC','Bredden på kategori billedet');
define('_MI_WFD_CAT_IMGHEIGHT','Kategori billed højde');
define('_MI_WFD_CAT_IMGHEIGHTDSC','Højden på kategori billedet');

define('_MI_WFD_ANONPOST','Anonyme bruger indsendelse:');
define('_MI_WFD_ANONPOSTDSC','Tillad anonyme brugere at indsende nye downloads/mirrors på din side?');
define('_MI_WFD_ANONPOST1','Ingen');
define('_MI_WFD_ANONPOST2','Kun download');
define('_MI_WFD_ANONPOST3','Kun mirror');
define('_MI_WFD_ANONPOST4','Begge');

define('_MI_WFD_AUTOAPPROVE','Auto godkend indsendte downloads/mirrors');
define('_MI_WFD_AUTOAPPROVEDSC','Vælg for at godkende downloads/mirrors uden validering.');
define('_MI_WFD_AUTOAPPROVE1','Ingen');
define('_MI_WFD_AUTOAPPROVE2','Kun download');
define('_MI_WFD_AUTOAPPROVE3','Kun mirror');
define('_MI_WFD_AUTOAPPROVE4','Begge');

define('_MI_WFD_REVIEWAPPROVE','Auto godkend indsendte bedømmelser');
define('_MI_WFD_REVIEWAPPROVEDSC','Vælg for at godkende indsendte bedømmelser uden validering.');
define('_MI_WFD_REVIEWANONPOST','Anonyme bruger bedømmelser:');
define('_MI_WFD_REVIEWANONPOSTDSC','Tillad anonyme brugere at indsende ny bedømmelser til din side?');

define('_MI_WFD_MAXFILESIZE','Upload Størrelse (KB)');
define('_MI_WFD_MAXFILESIZEDSC','Maksimal tilladte størrelse ved upload');
define('_MI_WFD_IMGWIDTH','Upload billed bredde');
define('_MI_WFD_IMGWIDTHDSC','Maksimal tilladte billed bredde ved billed upload');
define('_MI_WFD_IMGHEIGHT','Upload billed højde');
define('_MI_WFD_IMGHEIGHTDSC','Maksimal tilladte billed højde ved billed upload');

define('_MI_WFD_AUTOSUMMARY','Slå auto resumé til');
define('_MI_WFD_AUTOSUMMARYDESC','Opretter automatisk et resumé baseret på antallet af karakterer defineret');
define('_MI_WFD_AUTOSUMMARYLENGTH','Resumé længde');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','Det maksimale antal af karakterer vist i resumé');

define('_MI_WFD_UPLOADDIR','Upload bibliotek (Ingen slash til sidst)');
define('_MI_WFD_UPLOADDIRDSC','Upload bibliotek  *SKAL* være den absolutte sti!');

define('_MI_WFD_ENABLERSS','RSS Feeds:');
define('_MI_WFD_ENABLERSSDSC','Vælg ja for at slå RSS Feeds til.');

define('_MI_WFD_DOWNLOADMINPOSTS','Minimum antal poster for at kunne downloade');
define('_MI_WFD_DOWNLOADMINPOSTSDSC','Indtast det minimale antal poster der kræves for at kunne downloade en fil.');
define('_MI_WFD_UPLOADMINPOSTS','Minimum antal poster for at kunne uploade');
define('_MI_WFD_UPLOADMINPOSTSDSC','Indtast det minimale antal poster der kræves for at kunne uploade');

define('_MI_WFD_ALLOWSUBMISS','Bruger indlæg:');
define('_MI_WFD_ALLOWSUBMISSDSC','Tillad bruger at indsende nye downloads/mirrors');
define('_MI_WFD_ALLOWSUBMISS1','Ingen');
define('_MI_WFD_ALLOWSUBMISS2','Kun download');
define('_MI_WFD_ALLOWSUBMISS3','Kun mirrors');
define('_MI_WFD_ALLOWSUBMISS4','Begge');
define('_MI_WFD_ALLOWUPLOADS','Bruger upload:');
define('_MI_WFD_ALLOWUPLOADSDSC','Tillad brugere at uploade filer direkte til din side.<br />Gælder både filer og billeder!');
define('_MI_WFD_ALLOWUPLOADSGROUP','Indsend uploads:');
define('_MI_WFD_ALLOWUPLOADSGROUPDSC','Vælg de grupper der kan uploade filer.<br />Gælder både filer og screenshots!');
define('_MI_WFD_SCREENSHOTS','Bibliotek til Screenshots');
define('_MI_WFD_CATEGORYIMG','Bibliotek til Kategori billeder');
define('_MI_WFD_MAINIMGDIR','Hovedbibliotek til billeder.');
define('_MI_WFD_USETHUMBS','Brug frimærker:');
define('_MI_WFD_USETHUMBSDSC','Følgende filtyper understøttes: JPG, GIF, PNG.<div style=\'padding-top: 8px;\'>WF-Downloads vil bruge frimærker for billeder (kategori og screenshots). sæt til  \'Nej\' for at bruge det originale billed, hvis serveren ikke understøtter funktionen.</div>');
define('_MI_WFD_DATEFORMAT','Tidsstempel:');
define('_MI_WFD_DATEFORMATDSC','Default Timestamp i WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER','Vis ansvarsfraskrivelse før bruger indlæg?');
define('_MI_WFD_SHOWDOWNDISCL','Vis ansvarsfraskrivelse før bruger download?');
define('_MI_WFD_DISCLAIMER','Skriv tekste på ansvarsfraskrivelse ved indlæg:');
define('_MI_WFD_DOWNDISCLAIMER','Skriv teksten på ansvarsfraskrivels ved download:');
define('_MI_WFD_PLATFORM','Angiv platform:');
define('_MI_WFD_SUBCATS','Underkategori');
define('_MI_WFD_VERSIONTYPES','Versions status:');
define('_MI_WFD_LICENSE','Angiv licens;');
define('_MI_WFD_LIMITS','Angiv begrænsninger:');
define('_MI_WFD_MAXSHOTS','Vælg det maksimale antal af screenshots:');
define('_MI_WFD_MAXSHOTSDSC','Angiver det maksimale antal af tilladte screenshots ved upload.');

define('_MI_WFD_SUBMITART','Indsend download:');
define('_MI_WFD_SUBMITARTDSC','Vælg grupper der kan indsende nye download.<br />Webmaster har denne rettighed automatisk!');

define('_MI_WFD_IMGUPDATE','Opdatér frimærker?');
define('_MI_WFD_IMGUPDATEDSC','Hvis valgt vil frimærker blive opdateret hver gang siden indlæses, ellers vil det første frimærke blive vist uanset hvad. <br /><br />');
define('_MI_WFD_QUALITY','Frimærke kvalitet');
define('_MI_WFD_QUALITYDSC','Lavest: 0 Højest: 100');
define('_MI_WFD_KEEPASPECT','Fastlås størrelsesforhold?');
define('_MI_WFD_KEEPASPECTDSC','');
define('_MI_WFD_ADMINPAGE','Administration fil visning:');
define('_MI_WFD_AMDMINPAGEDSC','Antallet af nye filer vist på modul administrations siden');
define('_MI_WFD_ARTICLESSORT','Default download sortering');
define('_MI_WFD_ARTICLESSORTDSC','Vælg standard sortering for downloads');
define('_MI_WFD_TITLE','Titel');
define('_MI_WFD_RATING','Bedømmelse');
define('_MI_WFD_WEIGHT','Vægt');
define('_MI_WFD_POPULARITY','Popularitet');
define('_MI_WFD_SUBMITTED2','Indsendt dato');
define('_MI_WFD_COPYRIGHT','Copyright bemærkning:');
define('_MI_WFD_COPYRIGHTDSC','Vis copyright bemærkning på downloadsiden.');

// Description of each config items
define('_MI_WFD_PLATFORMDSC','List platforme <br />Adskil med | VIGTIGT: Lad være med at ændre dette når siden er åben, Tilføj nye i slutningen!');
define('_MI_WFD_SUBCATSDSC','Vælg Ja for at vise underkategorier. Vælg Nej for at skjule underkategorier.');
define('_MI_WFD_LICENSEDSC','List platforme <br />Adskil med |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY','Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC','Global downloads notifikations muligheder.');

define('_MI_WFD_CATEGORY_NOTIFY','Kategori');
define('_MI_WFD_CATEGORY_NOTIFYDSC','beskedsmuligheder i den aktuelle fil kategori');

define('_MI_WFD_FILE_NOTIFY','Fil');
define('_MI_WFD_FILE_NOTIFYDSC','beskedsmuligheder om denne fil.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY','Ny kategori');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP','beskedsmuligheder ved ny fil kategori');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC','Modtag besked når en ny fil oprettes.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ny filkategori');                              

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY','Redigér fil ønsker');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP','Giv mig besked mig ved alle fil redigereinger.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC','Modtag besked ved alle fil ændringer er indsendt.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ønske om filredigering');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY','Brudte filer indsendt.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP','Giv mig besked mig ved alle brudte filer.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC','Modtag en besked når en brudt fil rapporteres.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Brudt fil rapporteret.');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY','Fil indsendt');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP','Giv mig besked mig når en ny fil er indsendt (og afventer godkendelse)');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC','Modtag besked når en ny fil er indsendt og afventer godkendelse');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Nt fil indsendt');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY','New Fil');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP','Giv mig besked mig når nye filer er indsendt.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC','Modtag besked når der er indsendt nye filer.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY','Fil Indsendt');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP','Giv mig besked mig når en ny fil er indsendt (og afventer godkendelse) i den aktuelle kategori.');   
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC','Modtag besked når en ny fil er indsendt (og afventer godkendelse) i den aktuelle kategori.');      
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil indsendt i kategori'); 

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY','New Fil');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP','Giv mig besked mig når en fil offentliggøres i denne kategori.');   
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC','Modtag besked når en ny fil er offentliggjort i denne kategori.');      
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil i kategori'); 

define('_MI_WFD_FILE_APPROVE_NOTIFY','Fil Godkendelse');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP','Giv mig besked mig når en fil er godkendt	.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC','Modtag besked når en fil er godkendt	.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Fil Godkendt');

/* Added by Lankford on 2007/3/21 */
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFY','Fil Redigeret');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP','Giv mig besked mig når en fil er redigeret.	.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC','Modtag besked når en fil er redigeret.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Fil Redigeret');

define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY','Fil Redigeret');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP','Giv mig besked mig når en fil i denne kategori er redigeret.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC','Modtag besked når en fil i denne kategori er redigeret..');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Fil Redigeret');

define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY','Fil Redigeret');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP','Giv mig besked mig når en hvilken som helst fil er redigeret.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC','Modtag besked når en fil er redigeret.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Fil Redigeret');
/* End add block */

define('_MI_WFD_AUTHOR_INFO','Udvikler Information	');
define('_MI_WFD_AUTHOR_NAME','Udvikler');
define('_MI_WFD_AUTHOR_DEVTEAM','Udvikler team');
define('_MI_WFD_AUTHOR_WEBSITE','Udviklers hjemmeside	');
define('_MI_WFD_AUTHOR_EMAIL','Udviklers email');
define('_MI_WFD_AUTHOR_CREDITS','Tak til');
define('_MI_WFD_MODULE_INFO','Modul udviklings information');
define('_MI_WFD_MODULE_STATUS','Udviklings status');
define('_MI_WFD_MODULE_DEMO','Demo side');
define('_MI_WFD_MODULE_SUPPORT','Officiel support side');
define('_MI_WFD_MODULE_BUG','Informér om fejl i dette modul');
define('_MI_WFD_MODULE_FEATURE','Kom med foreslag til dette modul');
define('_MI_WFD_MODULE_DISCLAIMER','Ansvarsfraskrivelse');
define('_MI_WFD_RELEASE','Udgivelses dato: ');

define('_MI_WFD_MODULE_MAILLIST','SmartFactory Mailingliste');

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS','Meddelelses Mailingliste');
define('_MI_WFD_MODULE_MAILBUGS','Fejl Mailingliste');
define('_MI_WFD_MODULE_MAILFEATURES','Egenskaber Mailingliste');

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC','Få de sidste nyheder fra SmartFactory.');
define('_MI_WFD_MODULE_MAILBUGSDSC','Fejlsøgning og indlægs mailingliste');
define('_MI_WFD_MODULE_MAILFEATURESDSC','Forslag til ændringer mailingliste.');

define('_MI_WFD_WARNINGTEXT','THE SOFTWARE IS PROVIDED BY SMARTFACTORY \"AS IS\" AND \"WITH ALL FAULTS.\"
SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN SMARTFACTORY WEBSITE. IN NO
EVENT WILL SMARTFACTORY BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
SMARTFACTORY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..');

define('_MI_WFD_AUTHOR_CREDITSTEXT','The SmartFactory Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish, Kiang<br />and anyone else who has contributed to either directly or indirectly.');
define('_MI_WFD_AUTHOR_BUGFIXES','Tidliger fejlrettelser');

define('_MI_WFD_COPYRIGHTIMAGE','Billederne WF-Project/SmartFactory er beskyttet af copyright og må kun benyttes med tilladelse');

// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES','Vis mirror log?'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC','Vælg Ja for at vise logo for hvert mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH','Logo bredde'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC','Vis bredden for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT','Logo højde'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC','Vis højden for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE','Autogodkend indsendte mirrors');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC','Vælg for at godkende mirrors uden godkendelse.');

define('_MI_WFD_MIRROR_MAXIMGWIDTH','Upload logo bredde'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC','Maksimal bredde på logo der uploades.'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT','Upload logo højde'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC','Maksimal højde på logo der uploades.'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE','Aktivér mirror system');
define('_MI_WFD_MIRROR_ENABLEDSC','');
define('_MI_WFD_MIRROR_ENABLEONCHK','Aktivér check for server status.');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC','Aktiverer check på mirrors<br />Denne kan gøre din side langsommere hvis du har mange mirrors');
define('_MI_WFD_MIRROR_ALLOWSUBMISS','Indsendelse af mirror fra bruger');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC','Tillad brugere at indsende nye mirrors');
define('_MI_WFD_MIRROR_MIRRORIMAGES','Mirror logo upload bibliotek'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC','Mirror logo upload bibliotek'); // not implemented yet
?>
