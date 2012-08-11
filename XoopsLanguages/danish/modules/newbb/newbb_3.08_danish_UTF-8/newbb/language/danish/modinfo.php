<?php
// $Id: modinfo.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define('_MI_NEWBB_NAME','CBB');

// A brief description of this module
define('_MI_NEWBB_DESC','Forum modul til XOOPS');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWBB_BLOCK_TOPIC_POST','Nyeste besvarede emner');
define('_MI_NEWBB_BLOCK_TOPIC','Nyeste emner');
define('_MI_NEWBB_BLOCK_POST','Nyeste indlæg');
define('_MI_NEWBB_BLOCK_AUTHOR','Forfatter');
/*
define('_MI_NEWBB_BNAME2','Mest viste Emner');
define('_MI_NEWBB_BNAME3','mest aktive emner');
define('_MI_NEWBB_BNAME4','Nyeste sammendrag');
define('_MI_NEWBB_BNAME5','Nyeste Sticky Emner');
define('_MI_NEWBB_BNAME6','Nyeste indlæg');
define('_MI_NEWBB_BNAME7','Forfattere med de fleste emner');
define('_MI_NEWBB_BNAME8','Forfattere med de fleste indlæg');
define('_MI_NEWBB_BNAME9','Forfattere med de fleste digest');
define('_MI_NEWBB_BNAME10','Forfattere med mest sticky emner');
define('_MI_NEWBB_BNAME11','Nyeste indlæg med tekst');
*/

// Names of admin menu items
define('_MI_NEWBB_ADMENU_INDEX','Indeks');
define('_MI_NEWBB_ADMENU_CATEGORY','Kategorier');
define('_MI_NEWBB_ADMENU_FORUM','Fora');
define('_MI_NEWBB_ADMENU_PERMISSION','Rettigheder');
define('_MI_NEWBB_ADMENU_BLOCK','Blokke');
define('_MI_NEWBB_ADMENU_ORDER','Rækkefælge');
define('_MI_NEWBB_ADMENU_SYNC','Synkronisér fora');
define('_MI_NEWBB_ADMENU_PRUNE','Rens');
define('_MI_NEWBB_ADMENU_REPORT','Rapporter');
define('_MI_NEWBB_ADMENU_DIGEST','Resumé');
define('_MI_NEWBB_ADMENU_VOTE','Stemmer');



//config options

define('_MI_DO_DEBUG','Debug Mode');
define('_MI_DO_DEBUG_DESC','Vis fejl beskeder');

define('_MI_IMG_SET','Billed sæt');
define('_MI_IMG_SET_DESC','Vælg det billed sæt der skal bruges');

define('_MI_THEMESET','Tema');
define('_MI_THEMESET_DESC','Module-wide, vælg \'"Ingen"\' vil bruge sidebreden på dit theme');

define('_MI_DIR_ATTACHMENT','Fysisk sti til vedhæftede filer.');
define('_MI_DIR_ATTACHMENT_DESC','Fysisk sti behæves kun at blive sat fra xoops rod-biblioteket. Hvis du vil have vedhæftede filer gemt i www.ditdomæne.dk/uploads/newbb, behæves du altså kun at indtaste \'/uploads/newbb\' afslut aldrig med \'/\' thumbnails sti vil være \'/uploads/newbb/thumbs\'');
define('_MI_PATH_MAGICK','Fysisk sti til ImageMagick');
define('_MI_PATH_MAGICK_DESC','Normalt er det \'/usr/bin/X11\'. Lad den være blank, hvis du ikke har ImageMagicK installeret eller for automatisk at finde den.');

define('_MI_SUBFORUM_DISPLAY','Visning mode for underforums på indeks siden');
define('_MI_SUBFORUM_DISPLAY_DESC','');
define('_MI_SUBFORUM_EXPAND','Udvidet');
define('_MI_SUBFORUM_COLLAPSE','Minimeret');
define('_MI_SUBFORUM_HIDDEN','Skjult');

define('_MI_POST_EXCERPT','Indlæg preview på forum siden');
define('_MI_POST_EXCERPT_DESC','Længde af preview (tooltip) ved mouse over. 0 for ingen preview.');

define('_MI_PATH_NETPBM','Fysisk sti til Netpbm');
define('_MI_PATH_NETPBM_DESC','Normalt er det \'/usr/bin/\'. Lad den være blank, hvis du ikke har ImageMagicK installeret eller for automatisk at finde den.');

define('_MI_IMAGELIB','Vælg det Image library der skal bruges');
define('_MI_IMAGELIB_DESC','Vælg det Image library der skal bruges til at lave Thumbnails. Brug AUTO for automatisk valg.');

define('_MI_MAX_IMG_WIDTH','Maksimum billede brede');
define('_MI_MAX_IMG_WIDTH_DESC','Sæt den maksimale <strong>brede</strong> stærrelse af et uploaded billede ellers thumbnail vil blive brugt. <br >Input 0 vis du ikke vil bruge thumbnails.');

define('_MI_MAX_IMAGE_WIDTH','Maksimum billede brede for at lave thumbnail');
define('_MI_MAX_IMAGE_WIDTH_DESC','Sætter den maksimale brede på et uploaded billede for at lave thumbnail. <br>Billede med brede stærrer en denne værdi vil ikke bruge thumbnail.');

define('_MI_MAX_IMAGE_HEIGHT','Maksimum billede højde for at lave thumbnail');
define('_MI_MAX_IMAGE_HEIGHT_DESC','Sætter den maksimale højde på et uploaded billede for at lave thumbnail. <br>Billede med højde størrer en denne værdi vil ikke bruge thumbnail.');

define('_MI_SHOW_DIS','Vis Disclaimer til');
define('_MI_DISCLAIMER','Disclaimer');
define('_MI_DISCLAIMER_DESC','Skriv din Disclaimer der vil blive vist i valget ovenover.');
define('_MI_DISCLAIMER_TEXT','Dette forum indeholder indlæg med en hel del information.<br /><br />For at undgå dobbelt-indlæg bær du sæge i forummet fær du poster nye indlæg. Tak.');
define('_MI_NONE','Ingen');
define('_MI_POST','Post');
define('_MI_REPLY','Besvar');
define('_MI_OP_BOTH','Begge');
define('_MI_WOL_ENABLE','Slå "Hvem er online" til');
define('_MI_WOL_ENABLE_DESC','Slå "Hvem er online" block til mellem indeks siden og forum siden');
//define('_MI_WOL_ADMIN_COL','Administrator Highlight Color');
//define('_MI_WOL_ADMIN_COL_DESC','Highlight Color of the Administrators shown in the Who\'s Online Block');
//define('_MI_WOL_MOD_COL','Moderator Highlight Color');
//define('_MI_WOL_MOD_COL_DESC','Highlight Color of the Moderators shown in the Who\'s Online Block');
//define('_MI_LEVELS_ENABLE','Enable HP/MP/EXP Levels Mod');
//define('_MI_LEVELS_ENABLE_DESC','<strong>HP</strong>  is determined by your average posts per day.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> goes up each time you post, and when you get to 100%, you gain a level and the EXP drops to 0 again.');
define('_MI_NULL','Slå fra');
define('_MI_TEXT','Tekst');
define('_MI_GRAPHIC','Grafik');
define('_MI_USERLEVEL','HP/MP/EXP Level Mode');
define('_MI_USERLEVEL_DESC','<strong>HP</strong>  bestemmes ud fra dine indlæg pr. dag.<br /><strong>MP</strong>  bestemmes ud fra din registreringsdato kontra antal indlæg.<br /><strong>EXP</strong> stiger hver gang du laver et indlæg. Når du når 100%, stiger du et level og EXP starter fra 0 igen.');
define('_MI_RSS_ENABLE','Slå RSS feed til');
define('_MI_RSS_ENABLE_DESC','Slå RSS feed til, vælg muligheder herunder for maksimum antal indlæg og beskrivelses længde');
define('_MI_RSS_MAX_ITEMS','RSS maks. enheder');
define('_MI_RSS_MAX_DESCRIPTION','RSS maks. beskrivelses længde');
define('_MI_RSS_UTF8','RSS kodet med UTF-8');
define('_MI_RSS_UTF8_DESCRIPTION','\'UTF-8\' vil blive benyttet elles vil \'"._CHARSET."\' blive benyttet.');
define('_MI_RSS_CACHETIME','RSS feed cache tid');
define('_MI_RSS_CACHETIME_DESCRIPTION','Cache tid for regenerering af RSS feed - i minutter');

define('_MI_MEDIA_ENABLE','Slå Media Funktion til');
define('_MI_MEDIA_ENABLE_DESC','Viser vedhæftede billeder direkte i indlæget.');
define('_MI_USERBAR_ENABLE','Slå Brugerbar til');
define('_MI_USERBAR_ENABLE_DESC','Viser en udvidet brugerbar: Profile, PM, ICQ, MSN, etc...');

define('_MI_GROUPBAR_ENABLE','Slå Gruppe bar til');
define('_MI_GROUPBAR_ENABLE_DESC','Viser brugerens grupper i indlægs info feltet.');

define('_MI_RATING_ENABLE','Slå Bedømmelse funktion til');
define('_MI_RATING_ENABLE_DESC','Tillad emne bedømmelse.');

define('_MI_VIEWMODE','Visnings mode på trådene');
define('_MI_VIEWMODE_DESC','Til at overskrive den general indstilling af visning mode i tråde, sæt til NONE for at slå denne funktion fra');
define('_MI_COMPACT','Kompakt');

define('_MI_MENUMODE','Default Menu Mode');
define('_MI_MENUMODE_DESC','\'SELECT\' - valg muligheder, \'HOVER\' - kan virke sløvt i IE, \'CLICK\' - kræver JAVASCRIPT');

define('_MI_REPORTMOD_ENABLE','Anmeld et indlæg');
define('_MI_REPORTMOD_ENABLE_DESC','Brugere kan anmelde indlæg til Moderator(s), med en hvilken som helst grund. Dette gær det muligt for Moderator(s) at ændre, slette eller redigerer indlæget.');
define('_MI_SHOW_JUMPBOX','Vis hurtignavigering');
define('_MI_JUMPBOXDESC','Hvis vist, en drop-down menu vil tillade brugerne at hoppe til et andet forum fra et forum eller en tråd');

define('_MI_SHOW_PERMISSIONTABLE','Vis rettighedstabel');
define('_MI_SHOW_PERMISSIONTABLE_DESC','Ja, vil vise brugerens rettigheder');

define('_MI_EMAIL_DIGEST','Send sammendrag via mail');
define('_MI_EMAIL_DIGEST_DESC','Set tidsperioden for afsendelse af sammendrag til brugere');
define('_MI_NEWBB_EMAIL_NONE','Ingen mail');
define('_MI_NEWBB_EMAIL_DAILY','Dagligt');
define('_MI_NEWBB_EMAIL_WEEKLY','Ugenligt');

define('_MI_SHOW_IP','Vis Bruger IP');
define('_MI_SHOW_IP_DESC','Sæt til Ja vil vise bruger IP adresser til moderatorer');

define('_MI_ENABLE_KARMA','Slå karma krav til');
define('_MI_ENABLE_KARMA_DESC','Dette tillader en bruger at sætte det karma krav for at andre bruger kan læse han/hendes indlæg');

define('_MI_KARMA_OPTIONS','Karma muligheder for indlæg');
define('_MI_KARMA_OPTIONS_DESC','Brug \',\' som adskiller for multi-options.');

define('_MI_SINCE_OPTIONS','\'Siden\' options for \'viewform\' og \'søg\'');
define('_MI_SINCE_OPTIONS_DESC','Positiv værdi for dage og negativ for timer. Brug \',\' som adskiller for multi-options.');

define('_MI_SINCE_DEFAULT','\'Siden\' standart værdi');
define('_MI_SINCE_DEFAULT_DESC','Standard værdig hvis den ikke er angivt af bruger. 0 - fra starten');

define('_MI_MODERATOR_HTML','Tillad HTML tags for moderators');
define('_MI_MODERATOR_HTML_DESC','Dette tillader kun moderators at bruge HTML i indlægs emner');

define('_MI_USER_ANONYMOUS','Tillad registerede brugere at poste anonymt');
define('_MI_USER_ANONYMOUS_DESC','Dette tillader en bruger der er logget på at skrive anonymt');

define('_MI_ANONYMOUS_PRE','Prefix for anonyme brugere');
define('_MI_ANONYMOUS_PRE_DESC','Dette vil tilføje et prefix til den anonyme brugers brugernavn når han lavet et indlæg');

define('_MI_REQUIRE_REPLY','Tillad at kræve et svar for at læse');
define('_MI_REQUIRE_REPLY_DESC','Denne funktion tvinger læsere at svare på det orginale indlæg får de kan læse det.');

define('_MI_EDIT_TIMELIMIT','Tidsgrænse for at redigere et indlæg');
define('_MI_EDIT_TIMELIMIT_DESC','Sæt en tidsgrænse indtil brugere ikke længere kan redigere deres egne posts, i minutter. 0 for ingen grænse');

define('_MI_DELETE_TIMELIMIT','Tidsgrænse for at slette et indlkg');
define('_MI_DELETE_TIMELIMIT_DESC','Sæt en tidsgrænse indtil brugere ikke lkngere kan slette deres egne posts, i minutter. 0 for ingen grænse');

define('_MI_POST_TIMELIMIT','Tidsgrænse for at gentagende posting');
define('_MI_POST_TIMELIMIT_DESC','Sæt en tidsgrænse for gentagende posting. I sekunder, 0 for ingen grænse');

define('_MI_RECORDEDIT_TIMELIMIT','Tidsgrænse for at vise redigeret info');
define('_MI_RECORDEDIT_TIMELIMIT_DESC','Sæt en tidsgrænse for at vente med at vise et et inlæg er blevet redigeret, i minutter. 0 for ingen grænse');

define('_MI_SUBJECT_PREFIX','Tilfæj et prefix til et Emne emne');
define('_MI_SUBJECT_PREFIX_DESC','Sæt et Præfix i begyndelsen af enmet. Brug \',\' som adskiller ved flere muligheder, eller lad den være blank for ikke at benytte præfix.');
//define("_MI_SUBJECT_PREFIX_DEFAULT",'<font color="#00CC00">[løst]</font>,<font color="#00CC00">[rettet]</font>,<font color="#FF0000">[ønske]</font>,<font color="#FF0000">[fejl rapport]</font>,<font color="#FF0000">[uløst]</font>\');
define('_MI_SUBJECT_PREFIX_LEVEL','Hvem kan bruge præfix');
define('_MI_SUBJECT_PREFIX_LEVEL_DESC','Vælg hvem der må benytte præfiks');
define('_MI_SPL_DISABLE','Slå fra');
define('_MI_SPL_ANYONE','Alle');
define('_MI_SPL_MEMBER','Medlemmer');
define('_MI_SPL_MODERATOR','Moderators');
define('_MI_SPL_ADMIN','Administrators');

define('_MI_SHOW_REALNAME','Vis Rigtigt navn');
define('_MI_SHOW_REALNAME_DESC','Skift brugernavn ud med brugerns rigtige navn');

define('_MI_CACHE_ENABLE','Slå Cache til');
define('_MI_CACHE_ENABLE_DESC','Gem nogle mellemliggende resultater i en session for at spare på forespørgelserne');

define('_MI_QUICKREPLY_ENABLE','Slå Hurtig Svar til');
define('_MI_QUICKREPLY_ENABLE_DESC','Dette vil slå Hurtig svar formen til');

define('_MI_POSTSPERPAGE','Indlæg pr side');
define('_MI_POSTSPERPAGE_DESC','Det maksimale antal af indlæg der vil blive vist pr side');

define('_MI_POSTSFORTHREAD','Maksimalt antal indlæg for tråden i visningen');
define('_MI_POSTSFORTHREAD_DESC','Flat mode vil benyttes hvis antallet af indlæg overskrider dette antal');

define('_MI_TOPICSPERPAGE','Emner pr side');
define('_MI_TOPICSPERPAGE_DESC','Det maksimale antal af emner der vil blive vist pr side');

define('_MI_IMG_TYPE','Billede type');
define('_MI_IMG_TYPE_DESC','Vælg billedtypen for knapper i forummet.<br />- png: ved hurtig server hastighed;<br />- gif: for normal serverhastighed;<br />- auto: gif ved internet Explorer og png for ævrige browsere');

define('_MI_PNGFORIE_ENABLE','Slå PNG hack til');
define('_MI_PNGFORIE_ENABLE_DESC','Dette hack tillader png gennemsigtighed i internet explorer');

define('_MI_FORM_OPTIONS','Form indstillinger');
define('_MI_FORM_OPTIONS_DESC','Form indstillinger som brugere kan vælge når de poster/redigerér eller besvarer indlæg');
define('_MI_FORM_COMPACT','Compact');
define('_MI_FORM_DHTML','DHTML');
define('_MI_FORM_SPAW','Spaw Editor');
define('_MI_FORM_HTMLAREA','HtmlArea Editor');
define('_MI_FORM_FCK','FCK Editor');
define('_MI_FORM_KOIVI','Koivi Editor');
define('_MI_FORM_TINYMCE','TinyMCE Editor');

define('_MI_MAGICK','ImageMagick');
define('_MI_NETPBM','Netpbm');
define('_MI_GD1','GD1 Library');
define('_MI_GD2','GD2 Library');
define('_MI_AUTO','AUTO');

define('_MI_WELCOMEFORUM','Forum til velkomst af nye brugere');
define('_MI_WELCOMEFORUM_DESC','Et profile indlæg vil blive indsendt første gang en bruger besøger forummet.');

define('_MI_PERMCHECK_ONDISPLAY','Kontroller rettigheder');
define('_MI_PERMCHECK_ONDISPLAY_DESC','Kontroller rettigheder for redigering på siden');

define('_MI_USERMODERATE','Enable user moderation');
define('_MI_USERMODERATE_DESC','');


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','Tråd');
define('_MI_NEWBB_THREAD_NOTIFYDSC','beskedsmuligheder, der anvendes på den aktuelle tråd.');

define('_MI_NEWBB_FORUM_NOTIFY','Forum');
define('_MI_NEWBB_FORUM_NOTIFYDSC','beskedsmmuligheder, der anvendes på det aktuelle forum.');

define('_MI_NEWBB_GLOBAL_NOTIFY','Global');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','Globale beskedsmuligheder for alle fora.');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','Nye indlæg');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','Orientér mig om nye indlæg i den aktuelle tråd.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','Modtag besked når et nyt indlæg bliver skrevet i den aktuelle tråd.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt indlæg i tråden');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','Ny tråd');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','Orientér mig om nye emner i det aktuelle forum.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','Modtag besked når et nyt emne bliver oprettet i det aktuelle forum.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt emne i forummet');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','Nyt forum');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','Orientér mig når et nyt forum bliver oprettet.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','Modtag besked når et nyt forum bliver oprettet.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt forum');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','Nye indlæg');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','Orientér mig om alle nye indlæg.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','Modtag besked om alle nye indlæg.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt indlæg');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','Nye indlæg');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','Orientér mig om alle nye indlæg i det aktuelle forum.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','Modtag besked om alle nye indlæg i det aktuelle forum.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt indlæg i forummet');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','Nyt indlæg (Komplet tekst)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','Orientér mig om alle nye indlæg (inklusiv komplet kopi af teksten i beskeden).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','Modtag besked (med komplet kopi af teksten) om alle nye indlæg.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt indlæg (med komplet kopi af full text)');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','Resumé');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','Orientér mig om resumé.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','Modtag besked om alle nye resuméer');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt indlæg med resumé');

// FOR installation
define('_MI_NEWBB_INSTALL_CAT_TITLE','Kategori Test');
define('_MI_NEWBB_INSTALL_CAT_DESC','Kategori til test');
define('_MI_NEWBB_INSTALL_FORUM_NAME','Forum Test');
define('_MI_NEWBB_INSTALL_FORUM_DESC','Forum til test');
define('_MI_NEWBB_INSTALL_POST_SUBJECT','Tillykke! Forummet virker');
define('_MI_NEWBB_INSTALL_POST_TEXT','	Velkommen til ".(htmlspecialchars($GLOBALS["xoopsConfig"][\'sitename\'], ENT_QUOTES))." forum.
	Du er velkommen til at registrerer dig og logge ind, for at starte en debat:
	
	Hvis du har nogle spærgsmål om CBB, besøg den nordiske XOOPS side på [url=http://www.xoopsnordic.org]
	');
?>