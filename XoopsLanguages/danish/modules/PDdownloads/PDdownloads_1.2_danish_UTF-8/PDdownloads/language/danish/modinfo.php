<?php
/**
 * $Id: main.php v 1.15 02 july 2004 Liquid Exp $
 * Module: PD-Downloads
 * Version: v1.0
 * Release Date: 04. März 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_PDD_NAME' ) ) {

	// Module Info
	// The name of this module
	define("_MI_PDD_NAME","PD-Downloads");

	// A brief description of this module
	define("_MI_PDD_DESC","Opretter en download sektion, hvor brugerne kan hente/indsende/vurderer forskellige filer.");

	// Names of blocks for this module (Not all module has blocks)
	define("_MI_PDD_BNAME1","Nye PD-Downloads"); 
	define("_MI_PDD_BNAME2","Top PD-Downloads");

	// Sub menu titles
	define("_MI_PDD_SMNAME1","Send"); 
	define("_MI_PDD_SMNAME2","Populær"); 
	define("_MI_PDD_SMNAME3","Top karakter"); 
	define("_MI_PDD_SMNAME4","Mine Downloads");

	// Names of admin menu items
	define("_MI_PDD_BINDEX","Hoved Indeks"); 
	define("_MI_PDD_INDEXPAGE","Vedligeholdelse"); 
	define("_MI_PDD_MCATEGORY","Kategorier"); 
	define("_MI_PDD_MDOWNLOADS","Filer"); 
	define("_MI_PDD_MUPLOADS","Billede"); 
	define("_MI_PDD_MMIMETYPES","Filtyper"); 
	define("_MI_PDD_PERMISSIONS","Rettigheder"); 
	define("_MI_PDD_BLOCKADMIN","Blokke"); 
	define("_MI_PDD_MVOTEDATA","Stemmer");

	// Title of config items
	define("_MI_PDD_POPULAR","Antal Download Populære"); 
	define("_MI_PDD_POPULARDSC","Antallet af hits før et download status vil blive betragtet som populær.");

	//Display Icons
	define("_MI_PDD_ICONDISPLAY","Populære og Nye downloads:"); 
  define("_MI_PDD_DISPLAYICONDSC","Vælg hvordan du vil vise populære og nye ikoner i download fortegnelse."); 
  define("_MI_PDD_DISPLAYICON1","Vis som ikoner"); 
  define("_MI_PDD_DISPLAYICON2","Vis som tekst"); 
  define("_MI_PDD_DISPLAYICON3","Vis ikke"); 

  define("_MI_PDD_DAYSNEW","Nyt downloads:"); 
  define("_MI_PDD_DAYSNEWDSC","Antallet af dage et download status vil blive betragtet som nye."); 
  define("_MI_PDD_DAYSUPDATED","Opdaterede downloads:"); 
  define("_MI_PDD_DAYSUPDATEDDSC","Antallet af dage et download status vil blive betragtet som opdateret."); 

  define("_MI_PDD_SHOWDLONINDEX","Vis nyeste downloads på modul-startside ??"); 
  define("_MI_PDD_SHOWDLONINDEXDSC","Viser de nyeste downloads på modul-startside."); 

  define("_MI_PDD_PERPAGE","Hent oversigt Count:"); 
  define("_MI_PDD_PERPAGEDSC","Antal Downloads til at vise i hver kategori liste."); 

  define("_MI_PDD_USESHOTS","Vis Screenshot billeder?"); 
  define("_MI_PDD_USESHOTSDSC","Vælg Ja for at vise skærmbillede billeder for hver download post"); 
  define("_MI_PDD_SHOTWIDTH","Billede Display Bredde"); 
  define("_MI_PDD_SHOTWIDTHDSC","Vis bredde for screenshot billede"); 
  define("_MI_PDD_SHOTHEIGHT","Billede Display Højde"); 
  define("_MI_PDD_SHOTHEIGHTDSC","Vis højde for screenshot billede"); 
  define("_MI_PDD_CHECKHOST","Disallow direkte download forbinder? (leeching)"); 
  define("_MI_PDD_REFERERS","Disse websteder kan direkte link til dine filer <br /> Adskil med <b> # </ b>"); 
  define("_MI_PDD_ANONPOST","anonym bruger Fremlæggelse:"); 
  define("_MI_PDD_ANONPOSTDSC","Tillad anonyme brugere til at indsende eller overfør til din hjemmeside?"); 
  define("_MI_PDD_AUTOAPPROVE","Auto Godkend Forelagt Downloads"); 
  define("_MI_PDD_AUTOAPPROVEDSC","Vælg for at godkende forelagt downloads uden mådehold."); 
  define("_MI_PDD_AUTOAPPROVEFORALL","Auto Godkend downloads for alle brugere:"); 
  define("_MI_PDD_AUTOAPPROVEFORALLDSC","<b> Ja </ b> - Alle grupper selv anonym brugere får automatisk adgang til download. <br> <b> Nej </ b> - Kun \' Webmaster \ 'og \' Registrerede medlemmer \ 'får automatisk adgang til download."); 

  define("_MI_PDD_MAXFILESIZE "," Upload størrelse (KB)"); 
  define("_MI_PDD_MAXFILESIZEDSC","Maksimal filstørrelse tilladt med file uploads."); 
  define("_MI_PDD_IMGWIDTH","Upload billedbredde"); 
  define("_MI_PDD_IMGWIDTHDSC","Maximum billedbredde tilladt, når uploade billedfiler"); 
  define("_MI_PDD_IMGHEIGHT","Upload Billedhøjde"); 
  define("_MI_PDD_IMGHEIGHTDSC","Maksimum billedhøjde tilladt, når uploade billedfiler"); 

  define("_MI_PDD_UPLOADDIR","Upload mappe (uden skråstreg)"); 
  define("_MI_PDD_ALLOWSUBMISS","Bruger upload tilladt?:"); 
  define("_MI_PDD_ALLOWSUBMISSDSC","Tillad brugere at indsende nye filer og skærmbilleder"); 
  define("_MI_PDD_ALLOWUPLOADS","Bruger uploads:"); 
  define("_MI_PDD_ALLOWUPLOADSDSC","Tillad brugere at uploade filer direkte til dit websted"); 
  define("_MI_PDD_SCREENSHOTS","Screenshots Upload mappe"); 
  define("_MI_PDD_CATEGORYIMG","Kategori Billede Upload mapp"); 
  define("_MI_PDD_MAINIMGDIR","Billed mappe"); 
  define("_MI_PDD_USETHUMBS","Brug Frimærker (Thumbs)"); 
  define("_MI_PDD_USETHUMBSDSC","Understøttede filtyper: JPG, GIF og PNG. <div style='padding-top: 8px;'> Modulet vil bruge frimærker (tumbnails) for billeder. Indstil til 'Nej' for at bruge originale billede, hvis serveren ikke understøtter denne mulighed. </ div> "); 
  define("_MI_PDD_DATEFORMAT","Tidsstempel:"); 
  define("_MI_PDD_DATEFORMATDSC","Standard Tidsstempel for modulet:"); 
  define("_MI_PDD_SHOWDISCLAIMER","Vis Ansvarsfraskrivelse før bruger indsendelse?"); 
  define("_MI_PDD_SHOWDISCLAIMERDSC","Vis Ansvarsfraskrivelse før Filupload fra en bruger?"); 
  define("_MI_PDD_SHOWDOWNDISCL","Vis Ansvarsfraskrivelse før bruger download?"); 
  define("_MI_PDD_SHOWDOWNDISCLDSC","Vis Ansvarsfraskrivelse Inden downloading?"); 
  define("_MI_PDD_DISCLAIMER","Indtast Ansvarsfraskrivelsens Tekst:"); 
  define("_MI_PDD_DOWNDISCLAIMER","Indtast Ansvarsfraskrivelse Tekst ved download:"); 
  define("_MI_PDD_PLATFORM","Indtast platforme:"); 
  define("_MI_PDD_SUBCATS","Sub-Kategorier:"); 
  define("_MI_PDD_VERSIONTYPES","Version Status:"); 
  define("_MI_PDD_LICENSE","Indtast Licens:"); 

  define("_MI_PDD_SUBMITART","Download indsendelse:"); 
  define("_MI_PDD_SUBMITARTDSC","Vælg grupper, der kan indsende nye downloads."); 

  define("_MI_PDD_IMGUPDATE","Opdater frimærker (thumbnails?)"); 
  define("_MI_PDD_IMGUPDATEDSC","Udvalgte frimærker (thumbnails) billeder vil blive opdateret på hver side, ellers første thumbnail image vil blive brugt. <br/><br/>"); 
  define("_MI_PDD_QUALITY","Frimærke kvalitet:"); 
  define("_MI_PDD_QUALITYDSC","Kvalitet Laveste: 0 Højeste: 100"); 
  define("_MI_PDD_KEEPASPECT","Bibehold billedets størrelsesforhold?"); 
  define("_MI_PDD_KEEPASPECTDSC",""); 
  define("_MI_PDD_ADMINPAGE","Admin indeksfiler antal:"); 
  define("_MI_PDD_AMDMINPAGEDSC","Antallet af nye filer til visning i administrator området."); 
  define("_MI_PDD_ARTICLESSORT","Standard download sortering:"); 
  define("_MI_PDD_ARTICLESSORTDSC","Vælg standard sortering for modulset."); 
  define("_MI_PDD_TITLE","Titel"); 
  define("_MI_PDD_RATING","Karakter"); 
  define("_MI_PDD_WEIGHT","Vægt"); 
  define("_MI_PDD_POPULARITY","Popularitet"); 
  define("_MI_PDD_SUBMITTED2","Indsendelses dato"); 
  define("_MI_PDD_COPYRIGHT","Ophavsret:"); 
  define("_MI_PDD_COPYRIGHTDSC","Vælg for at vise en meddelelse om ophavsret på download siden.");
  
	// Description of each config items
	define("_MI_PDD_PLATFORMDSC","Liste over platforme <br/>Adskil med <b>|</b> VIGTIGT: Undlad at ændre dette, når webstedet er Live, tilføje nye til slutningen af listen!"); 
	define("_MI_PDD_SUBCATSDSC","Vælg Ja for at vise underkategorier. Vælges Nej vil dette skjule underkategorier fra listen"); 
	define("_MI_PDD_LICENSEDSC","Liste over platforme<br/> Adskil med <b>|</b>"); 
	define("_MI_PDD_RSS","Aktiver RSS Feeds pr kategori?"); 
	define("_MI_PDD_RSSDSC","Når du vælger <b>Ja</b>, kan indholdet af kategorier opnås via RSS-feed.");

	// Text for notifications
	define("_MI_PDD_GLOBAL_NOTIFY","Global"); 
	define("_MI_PDD_GLOBAL_NOTIFYDSC","Global downloads besked muligheder."); 

	define("_MI_PDD_CATEGORY_NOTIFY","Kategori"); 
	define("_MI_PDD_CATEGORY_NOTIFYDSC","Besked muligheder, der gælder for den aktuelle fil kategori."); 

	define("_MI_PDD_FILE_NOTIFY","File"); 
	define("_MI_PDD_FILE_NOTIFYDSC","Besked muligheder, der gælder for den aktuelle fil.");
	
	define("_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFY","Ny kategori"); 
	define("_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYCAP","Giv mig besked, når en ny kategori er oprettet."); 
	define("_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYDSC","få besked, når en ny kategori er oprettet."); 
	define("_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny kategori"); 

	define("_MI_PDD_GLOBAL_FILEMODIFY_NOTIFY","Rediger fil Anmodning"); 
	define("_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYCAP","Giv mig besked ved enhver anmodning af fil redigering."); 
	define("_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYDSC","få besked, når en fil anmodning om redigering er sendt."); 
	define("_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Fil redigering anmodet"); 

	define("_MI_PDD_GLOBAL_FILEBROKEN_NOTIFY","Brudte filer information indsendt"); 
	define("_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYCAP","Giv mig besked om brudte fil rapporter."); 
	define("_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYDSC","få besked, når nogen har indsendt en brudt fil rapport."); 
	define("_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Brudt fil Rapporteret"); 

	define("_MI_PDD_GLOBAL_FILESUBMIT_NOTIFY","Fil Indsendt"); 
	define("_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYCAP","Giv mig besked, når en ny fil er indsendt (afventer godkendelse )."); 
	define("_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYDSC","få besked, når en ny fil er indsendt (afventer godkendelse )."); 
	define("_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil indsendt"); 

	define("_MI_PDD_GLOBAL_NEPDILE_NOTIFY","Ny Fil"); 
	define("_MI_PDD_GLOBAL_NEPDILE_NOTIFYCAP","Giv mig besked, når en ny fil er lagt ud."); 	
	define("_MI_PDD_GLOBAL_NEPDILE_NOTIFYDSC","få besked, når en ny fil er lagt ud."); 
	define("_MI_PDD_GLOBAL_NEPDILE_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil"); 

	define("_MI_PDD_CATEGORY_FILESUBMIT_NOTIFY","Fil Indsendt"); 
	define("_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYCAP","Giv mig besked, når en ny fil er indsendt (afventer godkendelse) i den nuværende kategori."); 
	define("_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYDSC","få besked, når en ny fil er indsendt (afventer godkendelse) i den nuværende kategori."); 
	define("_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil indsendt i kategorien"); 

	define("_MI_PDD_CATEGORY_NEPDILE_NOTIFY","Ny Fil"); 
	define("_MI_PDD_CATEGORY_NEPDILE_NOTIFYCAP","Giv mig besked, når en ny fil er lagt ud i den aktuelle kategori."); 
	define("_MI_PDD_CATEGORY_NEPDILE_NOTIFYDSC","få besked, når en ny fil er lagt ud i den aktuelle kategori."); 
	define("_MI_PDD_CATEGORY_NEPDILE_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny fil i kategorien"); 

	define("_MI_PDD_FILE_APPROVE_NOTIFY","Fil godkendt"); 
	define("_MI_PDD_FILE_APPROVE_NOTIFYCAP","Giv mig, når denne fil er godkendt."); 
	define("_MI_PDD_FILE_APPROVE_NOTIFYDSC","få besked, når denne fil er godkendt."); 
	define("_MI_PDD_FILE_APPROVE_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Fil godkendt");

	define("_MI_PDD_AUTHOR_INFO","Udviklings Information"); 
	define("_MI_PDD_AUTHOR_NAME","Udvikler"); 
	define("_MI_PDD_AUTHOR_WEBSITE","Udviklers hjemmeside"); 
	define("_MI_PDD_AUTHOR_EMAIL","Udviklers e-mail"); 
	define("_MI_PDD_AUTHOR_CREDITS","Credits"); 
	define("_MI_PDD_MODULE_DEVINFO","Modul Udviklings information"); 
	define("_MI_PDD_MODULE_INFO","Modul Information"); 
	define("_MI_PDD_MODULE_STATUS","Udviklings Status"); 
	define("_MI_PDD_MODULE_DISCLAIMER","Forbehold"); 
	define("_MI_PDD_RELEASE","Udgivelses Dato:");

	define("_MI_PDD_WARNINGTEXT","Softwaren er LEVERES AF Power-Dreams \"AS IS \" og \" MED ALLE FEJL. \" 
	Power-Dreams FREMSÆTTER INGEN ERKLÆRINGER ELLER GARANTIER AF NOGEN ART VEDRØRENDE 
	Kvalitet, sikkerhed eller egnethed af softwaren, HVERKEN UDTRYKKELIGE ELLER 
	STILTIENDE, HERUNDER UDEN BEGRÆNSNING EVENTUELLE UNDERFORSTÅEDE GARANTIER FOR 
	SALGBARHED, EGNETHED TIL ET BESTEMT FORMÅL ELLER IKKE-KRÆNKELSE. 
	YDERLIGERE, ABLEMEDIA FREMSÆTTER INGEN ERKLÆRINGER ELLER GARANTIER MED HENSYN TIL sandheden, 
	Nøjagtigheden eller fuldstændigheden af et virksomhedsberetninger, oplysninger eller materialer 
	OM software, der er indeholdt i Power-Dreams WEBSTEDET. I INTET 
	FALD VIL ABLEMEDIA være ansvarlige for indirekte tab, PØNALE, SPECIELLE, 	
	HÆNDELIGE SKADER ELLER FØLGESKADER uanset hvordan de opstår, og SELVOM 
	Power-Dreams er tidligere ADVARET OM RISIKOEN FOR SÅDANNE SKADER ..");

	define("_MI_PDD_AUTHOR_CREDITSTEXT","The Power-Dreams-teamet vil gerne takke følgende personer for deres hjælp og støtte i udviklingsfasen af dette modul: <br/><br/> 
	Frankblack, King76, baerchen, mcleines, gibaphp, Michael og alle Beta-Testere. "); 
	define("_MI_PDD_AUTHOR_BUGFIXES","Version Historie"); 

	define("_MI_PDD_DIVIDECATEGORY","Antallet af kategorier ved siden af hinanden:"); 
	define("_MI_PDD_DIVCATDSC","Det giver dig mulighed for at vælge, hvor tit kategorierne, vil blive opdelt ved siden af hinanden."); 
	define("_MI_PDD_DIVSUBCAT","Antallet af underkategorier ved siden af hinanden:"); 
	define("_MI_PDD_DIVSUBCATDSC","Det giver dig mulighed for at vælge, hvor tit underkategorier vil blive opdelt ved siden af hinanden.");
}
?>
