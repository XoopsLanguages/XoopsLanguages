<?php
// $Id: admin.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
//%%%%%%	File Name  index.php   	%%%%%
define('_AM_NEWBB_FORUMCONF','Forum Konfiguration');
define('_AM_NEWBB_ADDAFORUM','Tilføj et forum');
define('_AM_NEWBB_SYNCFORUM','Synkroniser et forum');
define('_AM_NEWBB_REORDERFORUM','Genoptag');
define('_AM_NEWBB_FORUM_MANAGER','Fora');
define('_AM_NEWBB_PRUNE_TITLE','Ryd op i Forums');
define('_AM_NEWBB_CATADMIN','Kategorier');
define('_AM_NEWBB_GENERALSET','Modul indstillinger');
define('_AM_NEWBB_MODULEADMIN','Modul administration:');
define('_AM_NEWBB_HELP','Hjælp');
define('_AM_NEWBB_ABOUT','Om');
define('_AM_NEWBB_BOARDSUMMARY','Statistik');
define('_AM_NEWBB_PENDING_POSTS_FOR_AUTH','Antal indlæg der afventer godkendelse');
define('_AM_NEWBB_POSTID','Indlæg ID');
define('_AM_NEWBB_POSTDATE','Indlæg dato');
define('_AM_NEWBB_POSTER','Afsender');
define('_AM_NEWBB_TOPICS','Emner');
define('_AM_NEWBB_SHORTSUMMARY','Resumé');
define('_AM_NEWBB_TOTALPOSTS','Antal indlæg totalt');
define('_AM_NEWBB_TOTALTOPICS','Antal emner totalt');
define('_AM_NEWBB_TOTALVIEWS','Antal visninger');
define('_AM_NEWBB_BLOCKS','Blokke');
define('_AM_NEWBB_SUBJECT','Emne');
define('_AM_NEWBB_APPROVE','Godkend indlæg');
define('_AM_NEWBB_APPROVETEXT','Indhold af dette indlæg');
define('_AM_NEWBB_POSTAPPROVED','Indlægget er blevet godkendt');
define('_AM_NEWBB_POSTNOTAPPROVED','Indlægget er IKKE godkendt');
define('_AM_NEWBB_POSTSAVED','Indlægget er gemt');
define('_AM_NEWBB_POSTNOTSAVED','Indlægget er IKKE gemt');

define('_AM_NEWBB_TOPICAPPROVED','Emnet er godkendt');
define('_AM_NEWBB_TOPICNOTAPPROVED','Emnet er IKKE godkendt');
define('_AM_NEWBB_TOPICID','Emne ID');
define('_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH','Ikke godkendte emner');


define('_AM_NEWBB_DEL_ONE','Slet kun denne besked');
define('_AM_NEWBB_POSTSDELETED','Valgte indlæg slettet');
define('_AM_NEWBB_NOAPPROVEPOST','Der er i øjeblikket ingen indlæg der afventer godkendelse.');
define('_AM_NEWBB_SUBJECTC','Emne:');
define('_AM_NEWBB_MESSAGEICON','Besked ikon:');
define('_AM_NEWBB_MESSAGEC','Besked:');
define('_AM_NEWBB_CANCELPOST','Fortryd indlæg');
define('_AM_NEWBB_GOTOMOD','Gå til modul');

define('_AM_NEWBB_PREFERENCES','Modul indstillinger');
define('_AM_NEWBB_POLLMODULE','Xoops Afstemnings modul');
define('_AM_NEWBB_POLL_OK','Klar til brug');
define('_AM_NEWBB_GDLIB1','GD1 bibliotek:');
define('_AM_NEWBB_GDLIB2','GD2 bibliotek:');
define('_AM_NEWBB_AUTODETECTED','Find automatisk:');
define('_AM_NEWBB_AVAILABLE','Klar');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Ikke klar</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Ikke skrivbar (CHMOD)</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Ikke sat');
define('_AM_NEWBB_ATTACHPATH','Sti til opbevaring af vedhæftede filer');
define('_AM_NEWBB_THUMBPATH','Sti til vedhæftede billeder');
//define('_AM_NEWBB_RSSPATH','Path for RSS feed');
define('_AM_NEWBB_REPORT','Indberet dette indlæg');
define('_AM_NEWBB_REPORT_PENDING','Afventende rapport');
define('_AM_NEWBB_REPORT_PROCESSED','Afviklet rapport');

define('_AM_NEWBB_CREATETHEDIR','Lav det');
define('_AM_NEWBB_SETMPERM','Sæt rettighederne');
define('_AM_NEWBB_DIRCREATED','Folderen er blevet oprettet');
define('_AM_NEWBB_DIRNOTCREATED','Folderen kunne ikke oprettes');
define('_AM_NEWBB_PERMSET','Rettighederne er sat');
define('_AM_NEWBB_PERMNOTSET','Rettighederne kunne ikke sættes');

define('_AM_NEWBB_DIGEST','Orientéring ved resumé');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Skulle være afsendt for %d minutter siden</font>');
define('_AM_NEWBB_DIGEST_NEXT','Skal afsendes om %d minutter');
define('_AM_NEWBB_DIGEST_ARCHIVE','Arkiv af resuméer');
define('_AM_NEWBB_DIGEST_SENT','Resuméer behandlet');
define('_AM_NEWBB_DIGEST_FAILED','Resuméer ikke behandlet');

// admin_forum_manager.php
define('_AM_NEWBB_NAME','Navn');
define('_AM_NEWBB_CREATEFORUM','Opret Forum');
define('_AM_NEWBB_EDIT','Rediger');
define('_AM_NEWBB_CLEAR','Ryd');
define('_AM_NEWBB_DELETE','Slet');
define('_AM_NEWBB_ADD','Tilføj');
define('_AM_NEWBB_MOVE','Flyt');
define('_AM_NEWBB_ORDER','Sortér');
define('_AM_NEWBB_TWDAFAP','Bemærk: Dette vil slette forummet og ALLE indlæg i dette.<br /><br />ADVARSEL: Er du sikker på at du vil slette dettte forum?');
define('_AM_NEWBB_FORUMREMOVED','Forum slettet');
define('_AM_NEWBB_CREATENEWFORUM','Opret et nyt Forum');
define('_AM_NEWBB_EDITTHISFORUM','Rediger Forum:');
define('_AM_NEWBB_SET_FORUMORDER','Vælg Forum Position:');
define('_AM_NEWBB_ALLOWPOLLS','Tillad afstemninger:');
define('_AM_NEWBB_ATTACHMENT_SIZE','Maksimal størrelse i kb`s:');
define('_AM_NEWBB_ALLOWED_EXTENSIONS','Tilladte filtyper:<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>\'*\' ingen begrænsninger.<br /> Filtyper adskilles med \'|\'</span>');
//define('_AM_NEWBB_ALLOW_ATTACHMENTS','Allow Attachments:');
define('_AM_NEWBB_ALLOWHTML','Tillad HTML:');
define('_AM_NEWBB_YES','Ja');
define('_AM_NEWBB_NO','Nej');
define('_AM_NEWBB_ALLOWSIGNATURES','Tillad signature:');
define('_AM_NEWBB_HOTTOPICTHRESHOLD','Grænse for "Varme" enmer:');
//define('_AM_NEWBB_POSTPERPAGE','Posts per Page:<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>');
//define('_AM_NEWBB_TOPICPERFORUM','Topics per Forum:<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>');
//define('_AM_NEWBB_SHOWNAME','Replace user\'s name with real name:');
//define('_AM_NEWBB_SHOWICONSPANEL','Show icons panel:');
//define('_AM_NEWBB_SHOWSMILIESPANEL','Show smilies panel:');
define('_AM_NEWBB_MODERATOR_REMOVE','Fjern nuværende moderatore');
define('_AM_NEWBB_MODERATOR_ADD','Tilføj moderatorer');
define('_AM_NEWBB_ALLOW_SUBJECT_PREFIX','Tillad emne prefix for dette emne');
define('_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC','Dette vil tillade et prefix, som vil blive tiljøjet til emnets emne');


// admin_cat_manager.php

define('_AM_NEWBB_SETCATEGORYORDER','Indstil Kategori position:');
define('_AM_NEWBB_ACTIVE','Aktiv');
define('_AM_NEWBB_INACTIVE','Inaktiv');
define('_AM_NEWBB_STATE','Status:');
define('_AM_NEWBB_CATEGORYDESC','Kategori beskrivelse:');
define('_AM_NEWBB_SHOWDESC','Vis beskrivelse?');
define('_AM_NEWBB_IMAGE','Billed:');
//define('_AM_NEWBB_SPONSORIMAGE','Sponsor Image:');
define('_AM_NEWBB_SPONSORLINK','Sponsor Link:');
define('_AM_NEWBB_DELCAT','Slet kategori');
define('_AM_NEWBB_WAYSYWTDTTAL','Bemærk: Dette vil IKKE slette de forums der er under katagorien, du skal gøre dette via Rediger Forum sektionen.<br /><br />ADVARSEL: Er du sikker på du vil slette denne kategori?');



//%%%%%%        File Name  admin_forums.php           %%%%%
define('_AM_NEWBB_FORUMNAME','Forum Navn:');
define('_AM_NEWBB_FORUMDESCRIPTION','Forum Beskrivelse:');
define('_AM_NEWBB_MODERATOR','Moderatore(r):');
define('_AM_NEWBB_REMOVE','Fjern');
define('_AM_NEWBB_CATEGORY','Kategori:');
define('_AM_NEWBB_DATABASEERROR','Database fejl');
define('_AM_NEWBB_CATEGORYUPDATED','Kategori opdateret.');
define('_AM_NEWBB_EDITCATEGORY','Redigerer Kategori:');
define('_AM_NEWBB_CATEGORYTITLE','Kategori Title:');
define('_AM_NEWBB_CATEGORYCREATED','Kategori oprettet.');
define('_AM_NEWBB_CREATENEWCATEGORY','Opret en ny Kategori');
define('_AM_NEWBB_FORUMCREATED','Forum oprettet.');
define('_AM_NEWBB_ACCESSLEVEL','Gobalt Adgangs Level:');
define('_AM_NEWBB_CATEGORY1','Kategori');
define('_AM_NEWBB_FORUMUPDATE','Forums indstillinger opdateret');
define('_AM_NEWBB_FORUM_ERROR','FEJL: Forums indstillings fejl');
define('_AM_NEWBB_CLICKBELOWSYNC','Tryk på denne knap for at synkronisere dine forums og emner sider med den korekte data fra databasen. Gør dette når du opdager fejl i emner og forum lister.');
define('_AM_NEWBB_SYNCHING','Synkronisere forum index og emner (Dette kan tage et stykke tid)');
define('_AM_NEWBB_CATEGORYDELETED','Kategori Slettet.');
define('_AM_NEWBB_MOVE2CAT','Flyt til kategori:');
define('_AM_NEWBB_MAKE_SUBFORUM_OF','Lav et under forum af:');
define('_AM_NEWBB_MSG_FORUM_MOVED','Forum flyttet!');
define('_AM_NEWBB_MSG_ERR_FORUM_MOVED','Fejl under flytning af forum');
define('_AM_NEWBB_SELECT','< Vælg >');
define('_AM_NEWBB_MOVETHISFORUM','Flyt dette forum');
define('_AM_NEWBB_MERGE','Sammenlæg');
define('_AM_NEWBB_MERGETHISFORUM','Sammenlæg dette forum');
define('_AM_NEWBB_MERGETO_FORUM','Sammenlæg dette forum med:');
define('_AM_NEWBB_MSG_FORUM_MERGED','Forum lagt sammen');
define('_AM_NEWBB_MSG_ERR_FORUM_MERGED','Fejl ved sammenlægning af forum');

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define('_AM_NEWBB_REORDERID','ID');
define('_AM_NEWBB_REORDERTITLE','Titel');
define('_AM_NEWBB_REORDERWEIGHT','Position');
define('_AM_NEWBB_SETFORUMORDER','Indstil rækkefølge');
define('_AM_NEWBB_BOARDREORDER','Ændringerne er foretaget');

// admin_permission.php
define('_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM','Emne adgang til dette forum');
define('_AM_NEWBB_CAT_ACCESS','Kategori adgang');
define('_AM_NEWBB_CAN_ACCESS','Har adgang');
define('_AM_NEWBB_CAN_VIEW','Kan se');
define('_AM_NEWBB_CAN_POST','Kan starte nye emner');
define('_AM_NEWBB_CAN_REPLY','Kan svare');
define('_AM_NEWBB_CAN_EDIT','Kan redigerer');
define('_AM_NEWBB_CAN_DELETE','Kan slette');
define('_AM_NEWBB_CAN_ADDPOLL','Kan tilføje en afstemning');
define('_AM_NEWBB_CAN_VOTE','Kan stemme');
define('_AM_NEWBB_CAN_ATTACH','Kan vedhæfte filer');
define('_AM_NEWBB_CAN_NOAPPROVE','Kan lave indlæg uden godkendelse');
define('_AM_NEWBB_ACTION','Handling');

define('_AM_NEWBB_PERM_TEMPLATE','Brug default rettighedsskabelon');
define('_AM_NEWBB_PERM_TEMPLATE_DESC','Redigér følgende rettighedsskabelon så den kan benyttes til et eller flere forum');
define('_AM_NEWBB_PERM_FORUMS','Vælg forum');
define('_AM_NEWBB_PERM_TEMPLATE_CREATED','Rettighedsskabelon er dannet');
define('_AM_NEWBB_PERM_TEMPLATE_ERROR','Fejl ved oprettelsen af rettighedsskabelon');
define('_AM_NEWBB_PERM_TEMPLATEAPP','Benyt default rettigheder');
define('_AM_NEWBB_PERM_TEMPLATE_APPLIED','Default rettigheder er sat ');
define('_AM_NEWBB_PERM_ACTION','Rettighedsadministration');
define('_AM_NEWBB_PERM_SETBYGROUP','Sæt rettigheder direkte på gruppen');

// admin_forum_prune.php

define('_AM_NEWBB_PRUNE_RESULTS_TITLE','Rens resultaterne');
define('_AM_NEWBB_PRUNE_RESULTS_TOPICS','Renset Emner');
define('_AM_NEWBB_PRUNE_RESULTS_POSTS','Renset Indlæg');
define('_AM_NEWBB_PRUNE_RESULTS_FORUMS','Renset Forums');
define('_AM_NEWBB_PRUNE_STORE','Gem indlæg i dette forum istedet for at slette dem');
define('_AM_NEWBB_PRUNE_ARCHIVE','Lav en kopi af indlæg til arkivet');
define('_AM_NEWBB_PRUNE_FORUMSELERROR','Du glemte at vælge nogle forum(s) er rense');

define('_AM_NEWBB_PRUNE_DAYS','Fjen emner uden svar i:');
define('_AM_NEWBB_PRUNE_FORUMS','Forums der bliver renset');
define('_AM_NEWBB_PRUNE_STICKY','Behold emner der er megen aktivitet i');
define('_AM_NEWBB_PRUNE_DIGEST','Behold emner med resumé');
define('_AM_NEWBB_PRUNE_LOCK','Behold Låste emner');
define('_AM_NEWBB_PRUNE_HOT','Behold emner med flere end dette nummer svar');
define('_AM_NEWBB_PRUNE_SUBMIT','OK');
define('_AM_NEWBB_PRUNE_RESET','Fortryd');
define('_AM_NEWBB_PRUNE_YES','Ja');
define('_AM_NEWBB_PRUNE_NO','Nej');
define('_AM_NEWBB_PRUNE_WEEK','En Uge');
define('_AM_NEWBB_PRUNE_2WEEKS','To Uger');
define('_AM_NEWBB_PRUNE_MONTH','En Måned');
define('_AM_NEWBB_PRUNE_2MONTH','To Måneder');
define('_AM_NEWBB_PRUNE_4MONTH','Fire Måneder');
define('_AM_NEWBB_PRUNE_YEAR','Et År');
define('_AM_NEWBB_PRUNE_2YEARS','To År');

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO','Forfatter Informationer');
define('_AM_NEWBB_AUTHOR_NAME','Forfatter');
define('_AM_NEWBB_AUTHOR_WEBSITE','Forfatterens website');
define('_AM_NEWBB_AUTHOR_EMAIL','Forfatterens email');
define('_AM_NEWBB_AUTHOR_CREDITS','Kredits');
define('_AM_NEWBB_MODULE_INFO','Modul Udviklings information');
define('_AM_NEWBB_MODULE_STATUS','Status');
define('_AM_NEWBB_MODULE_DEMO','Demo side');
define('_AM_NEWBB_MODULE_SUPPORT','Official support site');
define('_AM_NEWBB_MODULE_BUG','Rapoter en fejl i dette modul');
define('_AM_NEWBB_MODULE_FEATURE','Forslå en ny egenskab til dette modul');
define('_AM_NEWBB_MODULE_DISCLAIMER','Disclaimer');
define('_AM_NEWBB_AUTHOR_WORD','Udviklerens\'s ord');
define('_AM_NEWBB_BY','Af');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA','');

// admin_report.php
define('_AM_NEWBB_REPORTADMIN','Indberettede indlæg manager');
define('_AM_NEWBB_PROCESSEDREPORT','Vis behandlet reporter');
define('_AM_NEWBB_PROCESSREPORT','Behandel reporter');
define('_AM_NEWBB_REPORTTITLE','Raport title');
define('_AM_NEWBB_REPORTEXTRA','Ekstra');
define('_AM_NEWBB_REPORTPOST','Indberettede indlæg');
define('_AM_NEWBB_REPORTTEXT','Raporteret tekst');
define('_AM_NEWBB_REPORTMEMO','Behandel memo');

// admin_report.php
define('_AM_NEWBB_DIGESTADMIN','Resumé');
define('_AM_NEWBB_DIGESTCONTENT','Indhold af resumé');

// admin_votedata.php
define('_AM_NEWBB_VOTE_RATINGINFOMATION','Afstemnings Information');
define('_AM_NEWBB_VOTE_TOTALVOTES','Totale stemmer');
define('_AM_NEWBB_VOTE_REGUSERVOTES','Registrede brugere stemmer: %s');
define('_AM_NEWBB_VOTE_ANONUSERVOTES','Anonyme stemmer: %s');
define('_AM_NEWBB_VOTE_USER','Bruger');
define('_AM_NEWBB_VOTE_IP','IP Adresse');
define('_AM_NEWBB_VOTE_USERAVG','Gennemsnitlig bruger bedømmelse');
define('_AM_NEWBB_VOTE_TOTALRATE','Totale bedømmelser');
define('_AM_NEWBB_VOTE_DATE','Tilføjet');
define('_AM_NEWBB_VOTE_RATING','Bedømmelse');
define('_AM_NEWBB_VOTE_NOREGVOTES','Ingen registrede bruger stemmer');
define('_AM_NEWBB_VOTE_NOUNREGVOTES','Ingen ikkeregistrede bruger stemmer');
define('_AM_NEWBB_VOTEDELETED','Afstemnings data slettet.');
define('_AM_NEWBB_VOTE_ID','ID');
define('_AM_NEWBB_VOTE_FILETITLE','Tråds Title');
define('_AM_NEWBB_VOTE_DISPLAYVOTES','Afstemnings Data Information');
define('_AM_NEWBB_VOTE_NOVOTES','Ingen Bruger stemmer at vise');
define('_AM_NEWBB_VOTE_DELETE','Ingen Bruger stemmer at vise');
define('_AM_NEWBB_VOTE_DELETEDSC','<strong>Sletter</strong> den valgte stemme information fra databasen.');
?>
