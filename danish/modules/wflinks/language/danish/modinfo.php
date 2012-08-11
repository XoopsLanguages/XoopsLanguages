<?php
/**
* $ Id: main.php mod 1,00 21 juni 2005 John N Exp $
* Modul: WF-links
* Version: v1.0.3
* Udgivelsesdato: 21. juni 2005
* Udvikler: John N
* Team: WF-projekter
* Licens: GNU
* Format: UTF-8
*/
// Modul Info
// Navnet på dette modul
define("_MI_WFL_NAME","WF-Links");
// En kort beskrivelse af dette modul
define("_MI_WFL_DESC","Opretter en link sektion, hvor brugerne kan linke/indsende forskellige links.");
// Navne på blokke for dette modul (Ikke alle modul har blokke)
define("_MI_WFL_BNAME1","Den seneste WF-Links");
define("_MI_WFL_BNAME2","Top WF-Links");
// Sub menu titler
define("_MI_WFL_SMNAME1","Send");
define("_MI_WFL_SMNAME2","Populære");
define("_MI_WFL_SMNAME3","Top karakter");
define("_MI_WFL_SMNAME4","Seneste Fil");
// Navne på admin menupunkter
define("_MI_WFL_BINDEX","Index");
define("_MI_WFL_INDEXPAGE","Indexside styring");
define("_MI_WFL_MCATEGORY","Kategori");
define("_MI_WFL_MLINKS","Links");
define("_MI_WFL_MUPLOADS","Upload");
define("_MI_WFL_PERMISSIONS","Tilladelse");
define("_MI_WFL_BLOCKADMIN","Blocks");
define("_MI_WFL_MVOTEDATA","Afstemninger");
// Title of config poster
define('_MI_WFL_POPULAR','Link Populære antal');
define('_MI_WFL_POPULARDSC','Antallet af hits, før et link status vil blive betragtet som populært.');
// Display Ikoner
define("_MI_WFL_ICONDISPLAY","links Populære og Nye:");
define("_MI_WFL_DISPLAYICONDSC","Vælg hvordan du vil vise den populære og nye ikoner i linket liste.");
define("_MI_WFL_DISPLAYICON1","Vis som ikoner");
define("_MI_WFL_DISPLAYICON2","Vis som tekst");
define("_MI_WFL_DISPLAYICON3","Vis ikke");

define("_MI_WFL_DAYSNEW","links dage som Nye:");
define("_MI_WFL_DAYSNEWDSC","Antallet af dage et link status vil blive betragtet som nyt.");
define("_MI_WFL_DAYSUPDATED","links dage Opdateret:");
define("_MI_WFL_DAYSUPDATEDDSC","Mængden af dage et link status vil blive betragtet som opdateret.");

define('_MI_WFL_PERPAGE','Link oversigt Antal:');
define('_MI_WFL_PERPAGEDSC','Antal links der skal vises i hver kategori notering.');

define('_MI_WFL_USESHOTS','Vis Screenshot billeder?');
define('_MI_WFL_USESHOTSDSC','Vælg Ja for at vise skærmbillede billeder for hvert link post');
define('_MI_WFL_SHOTWIDTH','Billede Display Bredde');
define('_MI_WFL_SHOTWIDTHDSC','Vis bredde for skærmbillede billede');
define('_MI_WFL_SHOTHEIGHT','Billede Display Højde');
define('_MI_WFL_SHOTHEIGHTDSC','Vis højde for skærmbillede billede');
define('_MI_WFL_CHECKHOST','Tillad ikke direkte linkforbinder? (Leeching)');
define('_MI_WFL_REFERERS','Disse websteder kan direkte link til dine links <br/> Adskil med #');
define("_MI_WFL_ANONPOST","Anonym brugerindgivelse:");
define("_MI_WFL_ANONPOSTDSC","Tillad anonyme brugere til at indsende eller uploade til din hjemmeside?");
define('_MI_WFL_AUTOAPPROVE','Auto Godkend Forelagt links');
define('_MI_WFL_AUTOAPPROVEDSC','Vælg at godkende sendt links uden forbehold.');

define('_MI_WFL_MAXFILESIZE','Upload Size(KB)');
define('_MI_WFL_MAXFILESIZEDSC','Maksimum link størrelse tilladt med link uploads.');
define('_MI_WFL_IMGWIDTH','Upload Billedbredde');
define('_MI_WFL_IMGWIDTHDSC','Største billedbredde tilladt, når uploade billede links');
define('_MI_WFL_IMGHEIGHT','Upload Billedhøjde');
define('_MI_WFL_IMGHEIGHTDSC','Største billedhøjde tilladt, når uploade billede links');

define('_MI_WFL_UPLOADDIR','Upload Directory (ingen skråstreg)');
define('_MI_WFL_ALLOWSUBMISS','Bruger-materiale:');
define('_MI_WFL_ALLOWSUBMISSDSC','Tillad brugere at indsende nye links');
define('_MI_WFL_ALLOWUPLOADS','Bruger uploads:');
define('_MI_WFL_ALLOWUPLOADSDSC','Tillad brugere at uploade links direkte til dit websted');
define('_MI_WFL_SCREENSHOTS','Screenshots Oploadsmappe');
define('_MI_WFL_CATEGORYIMG','Kategori Billede Upload Directory');
define('_MI_WFL_MAINIMGDIR','Hoved Image Directory');
define('_MI_WFL_USETHUMBS','Brug Thumb nails:');
define("_MI_WFL_USETHUMBSDSC","Understøttede link typer: JPG, GIF, PNG. <div style='padding-top: 8px;'> WF-Links vil bruge thumbnails til billeder. indstillet til 'ingen' for at bruge originale billede, hvis serveren ikke  understøtter denne mulighed. </div> ");
define('_MI_WFL_DATEFORMAT','Timestamp:');
define('_MI_WFL_DATEFORMATDSC','Standard Tidsstempel for WF-links. <br/> Se <a href="http://jp.php.net/manual/en/function.date.php" target="_blank"> PHP manual </a> ');
define('_MI_WFL_SHOWDISCLAIMER','Vis Disclaimer før User Submission?');
define('_MI_WFL_SHOWDISCLAIMERDSC','Før en bruger kan sende en link viser forordninger?');
define('_MI_WFL_SHOWLINKDISCL','Vis Disclaimer før User link?');
define('_MI_WFL_SHOWLINKDISCLDSC','Vis link forskrifter, inden åbne et link?');
define('_MI_WFL_DISCLAIMER','Indtast Submission Ansvarsfraskrivelse tekst:');
define('_MI_WFL_LINKDISCLAIMER','Indtast link Ansvarsfraskrivelse tekst:');
define('_MI_WFL_SUBCATS','Under-kategorier:');
define("_MI_WFL_SUBMITART","link Submission:");
define("_MI_WFL_SUBMITARTDSC","Vælg grupper, der kan indsende nye links.");
define("_MI_WFL_RATINGGROUPS","link Karakterer:");
define("_MI_WFL_RATINGGROUPSDSC","Vælg grupper, som kan stemme på et link.");
define("_MI_WFL_IMGUPDATE","Opdater miniaturer ?");
define("_MI_WFL_IMGUPDATEDSC","Hvis dette er valgt vil miniaturebilleder ajourføres på hver side gøre, ellers første miniaturebillede vil blive anvendt. <br/><br/>");
define("_MI_WFL_QUALITY","Thumb Nail Kvalitet:");
define("_MI_WFL_QUALITYDSC","Kvalitet Laveste: 0 Højeste: 100");
define("_MI_WFL_KEEPASPECT","Hold Billedformatforhold?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Admin Index Links Antal:");
define("_MI_WFL_AMDMINPAGEDSC","Antal nye links der skal vises i modulet admin område.");
define("_MI_WFL_ARTICLESSORT","Standard link Bestil:");
define("_MI_WFL_ARTICLESSORTDSC","Vælg standard, for at linket programoversigter.");
define("_MI_WFL_TITLE","Titel");
define("_MI_WFL_RATING","Karakter");
define("_MI_WFL_WEIGHT","Vægt");
define("_MI_WFL_POPULARITY","Popularitet");
define("_MI_WFL_SUBMITTED2","Indgivelsesdato");
define('_MI_WFL_COPYRIGHT','Copyright Notits:');
define('_MI_WFL_COPYRIGHTDSC','Vælg for at vise en meddelelse om ophavsret på linket side.');
// Beskrivelse af de enkelte config poster
define('_MI_WFL_SUBCATSDSC','Vælg Ja til at vise underkategorier. Valg Ingen vil skjule underkategorier fra listerne');
// Tekst til anmeldelser
define('_MI_WFL_GLOBAL_NOTIFY','Global');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Globale links anmeldelse valgmuligheder.');
define('_MI_WFL_CATEGORY_NOTIFY','Kategori');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Anmeldelse indstillinger, der gælder for den nuværende linket kategori.');
define('_MI_WFL_LINK_NOTIFY','Link');
define('_MI_WFL_FILE_NOTIFYDSC','Anmeldelse indstillinger, der gælder for det aktuelle link.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Ny kategori');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Giv mig besked, når en ny link kategori er oprettet.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','få besked, når en ny link kategori er oprettet.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Nyt link kategori');

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Ændre Link Requested');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Giv mig et link ændring anmodning.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','få besked, når nogen sammenhæng ændring anmodningen er fremsat.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAM})] {X_MODULE} auto-anmelder: Link Ændring Requested');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Brudt Link Forelagt');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Giv mig nogen brudt link rapport.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','få besked, når nogen brudt link rapport er forelagt.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Broken Link Indberettet');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Link Forelagt');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Giv mig, når et nyt link er sendt (afventer godkendelse).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','få besked, når et nyt link er sendt (afventer godkendelse).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Nyt link sendt');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Nye links');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Giv mig, når et nyt link er udstationeret.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','få besked, når et nyt link er udstationeret.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Nyt link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Link Forelagt');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Giv mig besked, når et nyt link er sendt (afventer godkendelse) til den nuværende kategori.');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','få besked, når et nyt link er sendt (afventer godkendelse) til den nuværende kategori.');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Nyt link indsendt i kategorien');

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Nye link');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Giv mig besked, når et nyt link er indsendt til den aktuelle kategori.');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','få besked, når et nyt link er indsendt til den aktuelle kategori.');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Nyt link i kategorien');

define('_MI_WFL_LINK_APPROVE_NOTIFY','Link Godkendt');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Giv mig, når dette link er godkendt.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','få besked, når dette link er godkendt.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-anmelder: Link godkendt');

define('_MI_WFL_AUTHOR_INFO',"Developer Information");
define('_MI_WFL_AUTHOR_NAME',"Developer");
define('_MI_WFL_AUTHOR_DEVTEAM',"Development Team");
define('_MI_WFL_AUTHOR_WEBSITE',"Developer hjemmeside");
define('_MI_WFL_AUTHOR_EMAIL',"Developer email");
define('_MI_WFL_AUTHOR_CREDITS',"Credits");
define('_MI_WFL_MODULE_INFO',"Module Development Information");
define('_MI_WFL_MODULE_STATUS',"Udvikling Status");
define('_MI_WFL_MODULE_DEMO',"Demo Site");
define('_MI_WFL_MODULE_SUPPORT',"Offentlig støttet site");
define('_MI_WFL_MODULE_BUG',"Rapporter en fejl til dette modul");
define('_MI_WFL_MODULE_FEATURE',"Foreslå en ny funktion til dette modul");
define('_MI_WFL_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_WFL_RELEASE',"Release Dato:");

define('_MI_WFL_MODULE_MAILLIST',"WF-projektets postlister");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Announcements Mailing List");
define('_MI_WFL_MODULE_MAILBUGS',"Bug Mailing List");
define('_MI_WFL_MODULE_MAILFEATURES',"Funktioner Mailing List");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Få de seneste meddelelser fra WF-projektet.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Bug Tracking og indsendelse postliste");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Anmodning Nye funktioner postliste.");

define('_MI_WFL_WARNINGTEXT',"SOFTWAREN LEVERES AF WF-PROJEKTER \" SOM DEN ER \" og \" MED ALLE FEJL. \"
WF-PROJEKTER GIVER INGEN ERKLÆRINGER ELLER GARANTIER AF NOGEN ART VEDRØRENDE
Kvalitet, sikkerhed eller om programmerne kan bruges, HVERKEN UDTRYKKELIGE ELLER
UNDERFORSTÅEDE, HERUNDER UDEN BEGRÆNSNING EVENTUELLE STILTIENDE GARANTIER OM
SALGBARHED, EGNETHED TIL ET BESTEMT FORMÅL ELLER IKKE-KRÆNKELSE.
YDERLIGERE, WF-PROJEKTER fremsætter ingen erklæringer eller garantier for SANDHEDEN,
NØJAGTIGHED ELLER FULDSTÆNDIGHED eventuelle udtalelser, oplysninger eller materialer
OM SOFTWARE der er indeholdt i WF-projektet WEBSITE. UNDER INGEN
FALD VIL WF-PROJEKTER HOLDES ANSVARLIG FOR NOGEN INDIREKTE, PØNALE, SÆRLIGE,
TILFÆLDIGE ELLER FØLGESKADER, UANSET HVORDAN DE måtte opstå, og SELVOM
WF-projektet har været TIDLIGERE UNDERRETTET OM MULIGHEDEN FOR SÅDANNE SKADER .. ");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"The WF-projekter Team vil gerne takke følgende personer for deres hjælp og støtte i udviklingsfasen af dette modul. <br/></br/> EdStacey, maumed, forbudt, krobi, Pnooka , MarcoFr, cosmodrum, placebo333, GibaPhp ");
define('_MI_WFL_AUTHOR_BUGFIXES',"Bug Fix Historie");

define('_MI_WFL_COPYRIGHT2','Copyright');
define('_MI_WFL_COPYRIGHTIMAGE',"Medmindre andet er angivet, dette modul (WF-Links) og dens billeder er copyright til WF-projekthold. <br /> <br /> Du har tilladelse til at kopiere, redigere og ændre WF - links til dine personlige behov. Du accepterer ikke at ændre, tilpasse og videredistribuere kildekoden af Softwaren uden udtrykkelig tilladelse fra WF-projekthold. <br /> <br /> PageRank er et varemærke tilhørende Google Inc. " );

define('_MI_WFL_SELECTFORUM',"Vælg Forum:");
define('_MI_WFL_SELECTFORUMDSC',"Vælg det forum du har installeret og vil blive brugt af WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb (alle)");
define('_MI_WFL_DISPLAYFORUM2',"IPB Forum");
define('_MI_WFL_DISPLAYFORUM3',"phpBB2 Module");
// Tilføjet af McDonald
define("_MI_WFL_COUNTRY","Land:");
define('_MI_WFL_EDITOR',"Editor til at bruge (admin):");
define('_MI_WFL_EDITORCHOICE',"Vælg den editor der skal bruges til admin side. Hvis du har et 'simpelt' installere (f.eks du kun bruger Xoops kerne redaktør klasse, forudsat i standard xoops kernepakken), så kan du bare vælge DHTML og Compact ");
define('_MI_WFL_EDITORUSER',"Editor til at bruge (bruger):");
define('_MI_WFL_EDITORCHOICEUSER',"Vælg den editor til at anvende for brugerne. Hvis du har et 'simpelt' installere (f.eks du kun bruger Xoops kerne redaktør klasse, forudsat i standard xoops kernepakken), så kan du bare vælge DHTML og Compact ");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","htmlarea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","inbetween");
define("_MI_WFL_FORM_TINYEDITOR","TinyEditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML Extended");
define("_MI_WFL_SORTCATS","Sorter kategorier efter:");
define("_MI_WFL_SORTCATSDSC","Vælg, hvordan kategorier og sub-kategorier er sorteret.");
define("_MI_WFL_KEYLENGTH","Enter max. tegn til meta nøgleord:");
define("_MI_WFL_KEYLENGTHDSC","Standard er 255 tegn");
define("_MI_WFL_OTHERLINKS","Vis andre links indsendt af afsender?");
define("_MI_WFL_OTHERLINKSDSC","Vælg om, vil andre forbindelser af indsenderen vises.");
define("_MI_WFL_TOTALCHARS","Set samlede karakterer for beskrivelse?");
define("_MI_WFL_TOTALCHARSDSC","Set samlede karakterer til beskrivelsen i kategorien opfattelse.");
define("_MI_WFL_QUICKVIEW","Vis Quick View option?");
define("_MI_WFL_QUICKVIEWDSC","Dette aktiverer/off Quick View valgmulighed.");
define('_MI_WFL_ICONS_CREDITS',"Ikoner deaktiveret");
define("_MI_WFL_SHOWSBOOKMARKS","Vis Sociale Bogmærker?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Vælg Ja, hvis du ønsker at Social Bookmark ikoner vises under artikel.");
define("_MI_WFL_SHOWPAGERANK","Vis Google PageRank ™?");
define("_MI_WFL_SHOWPAGERANKSDSC","Vælg Ja, hvis du ønsker, at Google PageRank ™ til at blive vist.");
define("_MI_WFL_USERTAGDESCR","Bruger kan indsende Tags:");
define("_MI_WFL_USERTAGDSC","Vælg Ja, hvis brugeren har tilladelse til at indsende tags.");
// Version 1.05 RC5
define('_MI_WFL_DATEFORMATADMIN','Timestamp administration:');
define('_MI_WFL_DATEFORMATADMINDSC','Standard admininstration Tidsstempel for WF-Links <br/> Se <a href="http://jp.php.net/manual/en/function.date.php" target="_blank"> PHP manual </a> ');
define("_MI_WFL_USEADDRESSDESCR","Brug adresse og kort muligheder?");
define("_MI_WFL_USEADDRESSDSC","Vælg Ja for at bruge adresse og kort indslag.");
define("_MI_WFL_HEADERPRINT","{PRINT OPTIONS} Print page header");
define("_MI_WFL_HEADERPRINTDSC","Header der vil blive udskrevet for hvert link");
define("_MI_WFL_LOGOURLPRINT","{PRINT OPTIONS} Logo print url");
define("_MI_WFL_LOGOURLDSCPRINT","Url af logoet, der vil blive trykt i toppen af siden");
define("_MI_WFL_FOOTERPRINT","{PRINT OPTIONS} Print side footer");
define("_MI_WFL_FOOTERPRINTDSC","Footer der vil blive udskrevet for hvert link");
define("_MI_WFL_BNAME3","WF-Links Sponsor Statistik");
define("_MI_WFL_VCARD_CREDITS","vCard script");
// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Landeflags Image Directory");
define("_MI_WFL_FLAGIMGDSC","Indtast URL uden skråstreg");
define("_MI_WFL_CATEGORYIMGDSC","Indtast URL uden skråstreg");
define("_MI_WFL_SCREENSHOTSDSC","Indtast URL uden skråstreg");
define("_MI_WFL_MAINIMGDIRDSC","Indtast URL uden skråstreg");
define("_MI_WFL_USEAUTOSCRSHOT","Brug Auto Screenshot");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Dette vil automatisk oprette et skærmbillede baseret på den url. Dette underkender uploadede screenshots og måske ikke arbejde for alle websteder.");
define("_MI_WFL_MOZSHOT_CREDITS","Auto Screenshot slået fra");
define("_MI_WFL_MOZSHOT_CREDITSTXT","<a href='http://mozshot.nemui.org' target='_blank'>Mozshot</a> (alt kildekode i henhold til <a href ='http://www.ruby- lang.org/da/' target = '_blank'>Ruby</a> licens)");
// Version 1.06 RC-1
define("_MI_WFL_BNAME4","WF-Links Tag Cloud");
define("_MI_WFL_BNAME5","WF-Links Top Tags");
// Version 1.06 RC-3
define("_MI_WFL_TITLE_A","Title (A)");
define("_MI_WFL_TITLE_D","Title (D)");
define("_MI_WFL_RATING_A","Rating (A)");
define("_MI_WFL_RATING_D","Bedømmelse (D)");
define("_MI_WFL_SUBMITTED_A","Indgivelsesdato (A)");
define("_MI_WFL_SUBMITTED_D","Indgivelsesdato (D)");
define("_MI_WFL_POPULARITY_A","Popularitet (A)");
define("_MI_WFL_POPULARITY_D","Popularitet (D)");
define("_MI_WFL_COUNTRY_A","Land (A)");
define("_MI_WFL_COUNTRY_D","Land (D)");

?>