<?php
// The name and description of this module
define("_MI_DANSK_NAME","Annoncer");
define("_MI_DANSK_DESC","Annonce modul");

// xoopsversion config
define("_MI_DANSK_MODERATE","Annonce redegering:");
define("_MI_DANSK_ANONCANPOST","Anonyme må poste");
define("_MI_DANSK_NBPERPAGE","Annoncer pr side:");
define("_MI_DANSK_NBPERPAGE_ADMIN","Annoncer pr side (administration)");
define("_MI_DANSK_DISPLAYNEW","Antal nye annoncer:");
define("_MI_DANSK_BBCODE","Form: med bbcodes");
define("_MI_DANSK_MAXSIZEIMG","Billede: maksimum størrelsen (bytes)");
define("_MI_DANSK_MAXSIZEIMG_DESC","0 til forhindre upload");
define("_MI_DANSK_MAXHEIGHTIMG","Billeder: max. højde");
define("_MI_DANSK_MAXWIDTHIMG","Billeder: max. bredde");
define("_MI_DANSK_NBDAYSEXPIRED","Antallet af dage, inden du sender en besked <br /> til at oplyse om udløbsdatoen på annoncen");
define("_MI_DANSK_RENEW_NBDAYS","Antal dage før udløb af annoncen, hvor brugeren kan forny sin annonce.");

define("_MI_DANSK_AUTO","Auto besked");
define("_MI_DANSK_AUTO_DESC","Send en besked når annoncen er ved at udløbe");

define("_MI_DANSK_PUB_FOOTER","Vil du vise dine banner?");
define("_MI_DANSK_PUB_FOOTER_DESC","Udfyld denne formular Tak!");
define("_MI_DANSK_PUB_FOOTER_SCRIPT","Sæt dit script i denne blok");
//define("_MI_DANSK_NBDAY_VALID","Annoncevarighed");//v1.3
define("_MI_DANSK_NBPUB_AGAIN","Antal forlængelser tilladt");
define("_MI_DANSK_NBDAY_NEW","Nye annoncer i (dage)");
define("_MI_DANSK_TPLTYPE","Indeks side: kategorier præsentation");
define("_MI_DANSK_COL","Kolonner");
define("_MI_DANSK_LIN","Linier");
define("_MI_DANSK_NBCOL","Indeks side: # af kolonne");
// 2004/10/24
define("_MI_DANSK_MAXLENTXT","Annoncetekst: max antal tegn.");
//add v1.3
define("_MI_DANSK_NBDAYS_BEFORE","Max tid før offentliggørelsen");
//add v1.4
define("_MI_DANSK_CANEDIT","Tillad annonce udgave");
define("_MI_DANSK_SHOW_CARD","Vis Danmarks kort ");
define("_MI_DANSK_SHOW_CAT_DESC","Vis kategorier beskrivelse");
define("_MI_DANSK_SHOW_SEO","Aktiv SEO");
define("_MI_DANSK_CANDELETE","Tillad annonce sletning");
define("_MI_DANSK_EMAIL_REQUIRED","Form: email");
define("_MI_DANSK_REGION_REQUIRED","Form: region");
define("_MI_DANSK_DEPARTEMENT_REQUIRED","Form: Afdeling");
define("_MI_DANSK_ZIPCODE_REQUIRED","Form: postnummer");
define("_MI_DANSK_REQUIRED","Påkrævet");
define("_MI_DANSK_OPTIONAL","Valgfrit");
define("_MI_DANSK_NOASK","Ikke spurgt;");
define("_MI_DANSK_NBCOLS_IMG","Annonce: # af billeder pr række");
define("_MI_DANSK_DISP_PSEUDO","Annonce: Vis Brugenavn");
define("_MI_THUMB_WIDTH","thumbnails bredde");
define("_MI_THUMB_METHOD","Resize billeder metode");


// Names of blocks for this module 
define("_MI_DANSK_BNAME1","Nyeste annoncer");
define("_MI_DANSK_BNAME2","Indsende en annonce");
define("_MI_DANSK_BNAME3","Mine annoncer");
define("_MI_DANSK_BNAME4","Send en e-mail, hvis annoncen er ude snart");

//submenu
define("_MI_DANSK_SMENU1","Mine annoncer");
define("_MI_DANSK_SMENU2","Indsend");
define("_MI_DANSK_SMENU3","Advenceret søgning");


// Popup
define("_MI_DANSK_ADMENU1","Indeks");
define("_MI_DANSK_ADMENU2","Annonce vedligeholdelse");
define("_MI_DANSK_ADMENU3","Kategorier vedligeholdelse");
define("_MI_DANSK_ADMENU4","Valg vedligeholdelse");
define("_MI_DANSK_ADMENU5","Ryd op");
define("_MI_DANSK_ADMENU6","Tilladelser");

// Text for notifications

define("_MI_DANSK_GLOBAL_NOTIFY","Global");
define("_MI_DANSK_GLOBAL_NOTIFYDSC","Global annoncer besked mulighed.");

define("_MI_DANSK_CATEGORY_NOTIFY","Kategori");
define("_MI_DANSK_CATEGORY_NOTIFYDSC","Anmeldelse mulighed for kategorien.");

define("_MI_DANSK_ADS_NOTIFY","Annoncer");
define("_MI_DANSK_ADS_NOTIFYDSC","Anmeldelse mulighed for det aktuelle annonce.");
// Event 1
define("_MI_DANSK_GLOBAL_ADSSUBMIT_NOTIFY","Annonce indsendt");
define("_MI_DANSK_GLOBAL_ADSSUBMIT_NOTIFYCAP","Meddelelse, når en ny annonce indsendt (venter).");
define("_MI_DANSK_GLOBAL_ADSSUBMIT_NOTIFYDSC","Blive underrettet, når en ny annonce er indsendt");
define("_MI_DANSK_GLOBAL_ADSSUBMIT_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny annonce");
// Event 2
define("_MI_DANSK_GLOBAL_NEWADS_NOTIFY","Ny annonce");       
define("_MI_DANSK_GLOBAL_NEWADS_NOTIFYCAP","Meddelelse, når en ny annonce er offentliggjort.");                           
define("_MI_DANSK_GLOBAL_NEWADS_NOTIFYDSC","Blive underrettet, når en ny annonce er offentliggjort.");                
define("_MI_DANSK_GLOBAL_NEWADS_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny annonce");                              
// Event 2//
define("_MI_DANSK_GLOBAL_EDIT_NOTIFY","Rediger annonce");       
define("_MI_DANSK_GLOBAL_EDIT_NOTIFYCAP","Meddelelse, når der er en ny redigeret annonce.");                           
define("_MI_DANSK_GLOBAL_EDIT_NOTIFYDSC","Blive underrettet, når en ny annonce er ændret.");                
define("_MI_DANSK_GLOBAL_EDIT_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Annonce Redigering");     
// Event 3
define("_MI_DANSK_CATEGORY_SUBMIT_NOTIFY","Ny annonce indsendt");       
define("_MI_DANSK_CATEGORY_SUBMIT_NOTIFYCAP","Meddelelse, når en ny annonce indsendt (venter).");
define("_MI_DANSK_CATEGORY_SUBMIT_NOTIFYDSC","Blive underrettet, når en ny annonce er indsendt.");
define("_MI_DANSK_CATEGORY_SUBMIT_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny annonce");                              
// Event 4
define("_MI_DANSK_CATEGORY_NEWADS_NOTIFY","Ny annonce indsendt");       
define("_MI_DANSK_CATEGORY_NEWADS_NOTIFYCAP","Meddelelse, når der er en ny annonce i denne kategori.");
define("_MI_DANSK_CATEGORY_NEWADS_NOTIFYDSC","Blive underrettet, når der er en ny annonce i denne kategori.");
define("_MI_DANSK_CATEGORY_NEWADS_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Ny annonce offentliggjort");                              
// Event 5
define("_MI_DANSK_ADS_APPROVE_NOTIFY","Annonce offentliggjort");
define("_MI_DANSK_ADS_APPROVE_NOTIFYCAP","Besked, når min annonce offentliggjort.");
define("_MI_DANSK_ADS_APPROVE_NOTIFYDSC","Få besked, når din annonce er offentliggjort.");
define("_MI_DANSK_ADS_APPROVE_NOTIFYSBJ","[(X_SITENAME)] (X_MODULE) auto-besked: Annonce offentliggjort");



?>
<?php // Translation done by xtransam & anderssk - 2009-07-10 20:09 ?>
