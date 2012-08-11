<?php
// $Id: admin.php,v 1.2 2005/08/09 11:05:23 ohwada Exp $

// 2005-08-09
// BUG 2827: RSS refresh: Invalid argument supplied for foreach()
// _WEBLINKS_ADMIN_NO_LINK_BROKEN_CHECK, others

// 2005-01-20 K.OHWADA
// add link field, RSS/ATOM view, user_list, mail_user

// 2004-11-28 K.OHWADA
// config.php, etc

//=========================================================
// language for admin
// 2004-10-20 K.OHWADA
//=========================================================

// --- define language begin ---
if( !defined('WEBLINKS_LANG_AM_LOADED') ) 
{
define('WEBLINKS_LANG_AM_LOADED', 1);
define("_WEBLINKS_ADMIN_MODULE_CONFIG_1","Modul Konfiguration 1"); 
define("_WEBLINKS_ADMIN_MODULE_CONFIG_2","Modul Konfiguration 2"); 
define("_WEBLINKS_ADMIN_ADDMODDEL_CATEGORY","Tilføj, Rediger og Slet Kategorier"); 
define("_WEBLINKS_ADMIN_ADD_LINK","Tilføj nyt link"); 
define("_WEBLINKS_ADMIN_OTHERFUNC","Andre funktioner"); 
define("_WEBLINKS_ADMIN_GOTO_ADMIN_INDEX","Gå til Admin Indeks");

//======	config.php 	======
// Access Authority
define('_WEBLINKS_ADMIN_AUTH','Indstilling af rettigheder'); 
define('_WEBLINKS_ADMIN_AUTH_TEXT','Administratoren har alle rettighederne'); 
define('_WEBLINKS_AUTH_SUBMIT','Rettigheden til at indsende et nyt link'); 
define('_WEBLINKS_AUTH_SUBMIT_DSC','Angiv den gruppe, der kan give tilladelse til at indsende et nyt link'); 
define('_WEBLINKS_AUTH_SUBMIT_AUTO','Rettighed til at godkende, når der er indsendt et nyt link'); 
define('_WEBLINKS_AUTH_SUBMIT_AUTO_DSC','Angiv den gruppe, der kan give rettighed til at godkende automatisk, når forelægge et nyt link'); 
define('_WEBLINKS_AUTH_MODIFY','Rettighed til at ændre et link');
define('_WEBLINKS_AUTH_MODIFY_DSC','Angiv den gruppe, der kan give tilladelse til at ændre et link'); 
define('_WEBLINKS_AUTH_MODIFY_AUTO','Rettighed til at godkende, når et link ønskes ændret'); 
define('_WEBLINKS_AUTH_MODIFY_AUTO_DSC','Angiv den gruppe, der kan give rettighed til at godkende automatisk, når et link ændres'); 
define('_WEBLINKS_AUTH_RATELINK','Rettighed til at bedømme et link'); 
define('_WEBLINKS_AUTH_RATELINK_DSC','Angiv den gruppe, der kan give tilladelse til bedømmelse af et link. <br /> den er effektiv, når bruger bedømmelser af link er sat til ja.'); 
define('_WEBLINKS_USE_PASSWD','Password validering, når et link ændres'); 
define('_WEBLINKS_USE_PASSWD_DSC','Når JA, <br /> og bruger ikke har rettighed til at godkende automatisk, når et link ændres, <br /> vis password validering.'); 
define('_WEBLINKS_USE_RATELINK','Bedømmelse af link'); 
define('_WEBLINKS_USE_RATELINK_DSC','Ved at vælge JA, <br /> tildeles bruger rettighed til at bedømme et link, og se resultaterne af bedømmelserne.'); 
define('_WEBLINKS_AUTH_UPDATED','Opdateret adgangsrettigheder');


// RSS/ATOM
define('_WEBLINKS_ADMIN_RSS','Indstilling af RSS/Atom feeds'); 
define('_WEBLINKS_RSS_MODE_AUTO','Automatisk opdatering af RSS/Atom feeds'); 
define('_WEBLINKS_RSS_MODE_AUTO_DSC',"Når der vælges Ja, udføres 'Auto opdagelse af RSS/Atom url' og 'automatisk opdatering', når de viser et link detaljeret information."); 
define('_WEBLINKS_RSS_MODE_DATA','Data af RSS/Atom at vise'); 
define('_WEBLINKS_RSS_MODE_DATA_DSC',"Når valgt 'Atom-feed', skal du bruge data i atomfeed tabel efter modtagelse. <br /> Når valgt 'XML', skal du bruge data i linket tabeller  før modtagelse. <br /> Nogle af oplysningerne kan ikke være gemt i atomfeed tabellen, pga. filtrering."); 
define('_WEBLINKS_RSS_CACHE','Cache tid af RSS/Atom feeds'); 
define('_WEBLINKS_RSS_CACHE_DSC','Værdien er altid i timer.'); 
define('_WEBLINKS_RSS_LIMIT','Maksimalt antal RSS/Atom feeds'); 
define('_WEBLINKS_RSS_LIMIT_DSC','Indtast det maksimale antal af RSS/Atom feeds gemt i atomfeed tabellen <br /> Det vil blive ryddet op efter dato, hvis denne værdi er overskredet. <br /> 0 er ubegrænset.'); 
define('_WEBLINKS_RSS_SITE','RSS søgewebsted');


// RSS/ATOM
define('_WEBLINKS_ADMIN_RSS_VIEW','Indstilling af RSS/Atom feeds'); 
define('_WEBLINKS_RSS_MODE_TITLE','Brug af HTML-tag af titlen'); 
define('_WEBLINKS_RSS_MODE_TITLE_DSC','Hvis "JA", vises titel med HTML-tag, hvis titel er HTML-tag. <br /> Hvis "NEJ", vises titel uden HTML-tag.'); 
define('_WEBLINKS_RSS_MODE_CONTENT','Brug af HTML-tag af indhold'); 
define('_WEBLINKS_RSS_MODE_CONTENT_DSC','Hvis "JA", vises indhold med HTML-tag, hvis indhold har HTML-tag. <br /> Hvis "NEJ", vises indhold uden HTML-tag.'); 
define('_WEBLINKS_RSS_NEW','Vælg det maksimale antal "nye RSS/Atom feeds", der vises på toppen side'); 
define('_WEBLINKS_RSS_NEW_DSC','Indtast det maksimale antal nye RSS/Atom feeds, der skal vises i Main page.'); 
define('_WEBLINKS_RSS_PERPAGE','Vælg det maksimale antal af RSS/Atom feeds vises i og Link detaljer side og RSS/Atom side');
define('_WEBLINKS_RSS_PERPAGE_DSC','Indtast det maksimale antal af RSS/Atom feeds skal vises i RSS/Atom side.'); 
define('_WEBLINKS_RSS_NUM_CONTENT','Antal feeds, som viser indhold'); 
define('_WEBLINKS_RSS_NUM_CONTENT_DSC','Indtast antallet af feeds, der viser indholdet af RSS/Atom feeds i Link detaljer side. <br />Et resumé er vist på feeds mere end antallet.'); 
define('_WEBLINKS_RSS_MAX_CONTENT','Maksimum antal tegn bruges til RSS/Atom-feed indhold'); 
define('_WEBLINKS_RSS_MAX_CONTENT_DSC','Indtast det maksimale antal tegn, der skal anvendes til RSS/Atom-feed indholdet i RSS/Atom side. <br />Det er effektivt, når "Brug af HTML-tag af indholdet" er "NEJ" '); 
define('_WEBLINKS_RSS_MAX_SUMMARY','Maksimum antal tegn bruges til RSS/Atom-feed summary'); 
define('_WEBLINKS_RSS_MAX_SUMMARY_DSC','Indtast det maksimale antal tegn, der skal anvendes til RSS/Atom-feed resumé på hovedsiden.');


// use link field
define('_WEBLINKS_ADMIN_POST','Indstilling af link felter'); 
define('_WEBLINKS_ADMIN_POST_TEXT_1','Når "Brug ikke" er valgt, vises det ikke i formularen.'); 
define('_WEBLINKS_ADMIN_POST_TEXT_2','Når "Brug" er valgt, vises det i formularen.'); 
define('_WEBLINKS_ADMIN_POST_TEXT_3',' Når "Kræves" er valgt, viser det i formularen og det kræves at det er udfyldt.'); 
define('_WEBLINKS_NO_USE','Brug ikke'); 
define('_WEBLINKS_USE','Brug'); 
define('_WEBLINKS_INDISPENSABLE','Kræves'); 
define('_WEBLINKS_TYPE_DESC','Type af beskrivelse i formularen'); 
define('_WEBLINKS_TYPE_DESC_DSC','Når du vælge "NEJ", bruges de normale tekstfeltet. <br /> Når du vælge "JA", bruges Xoops DHTML i formularen.'); 
define('_WEBLINKS_CHECK_DOUBLE','Accepter registrering af eksisterende links'); 
define('_WEBLINKS_CHECK_DOUBLE_DSC','Når du vælge "NEJ", accepteres registrering af eksisterende forbindelser. <br> Når du vælge "JA", <br /> kontrolleres det, om de samme link allerede eksisterer.'); 
define('_WEBLINKS_POST_UPDATED','Opdateret link områdets indstilling');

// cateogry
define('_WEBLINKS_ADMIN_CAT_SET','Indstilling af kategori'); 
define('_WEBLINKS_CAT_SEL','Maksimum antal selektive kategorier'); 
define('_WEBLINKS_CAT_SEL_DSC','Indtast det maksimale antal selektive kategorier fra et link'); 
define('_WEBLINKS_CAT_SUB','Antallet af underkategorier'); 
define('_WEBLINKS_CAT_SUB_DSC','Indstil antallet af underkategorier der vises på en kategori liste over top side'); 
define('_WEBLINKS_CAT_IMG_MODE','Vælg kategori billede'); 
define('_WEBLINKS_CAT_IMG_MODE_DSC','Når du vælge "ingen", vises ikke noget billedet. <br /> Når du vælge "Folder.gif", viser Folder.gif. <br /> Når du vælge "Indstilling", vises indstillings billeder for hver kategori. '); 
define('_WEBLINKS_CAT_IMG_MODE_0',"ingen"); 
define('_WEBLINKS_CAT_IMG_MODE_1',"Folder.gif"); 
define('_WEBLINKS_CAT_IMG_MODE_2',"Indstilling"); 
define('_WEBLINKS_CAT_IMG_WIDTH','Største bredde af et kategori billede'); 
define('_WEBLINKS_CAT_IMG_HEIGHT','Største højde af et kategori billede'); 
define('_WEBLINKS_CAT_IMG_SIZE_DSC','Effektiv når vælge "Indstilling".'); 
define('_WEBLINKS_CAT_UPDATED','Opdateret kategori indstilling');


//======	cateogry_list.php 	======
define("_WEBLINKS_ADMIN_CATEGORY_MANAGE","Vedligeholdelse af kategori"); 
define("_WEBLINKS_ADMIN_CATEGORY_LIST","List kategorier"); 
define("_WEBLINKS_ORDER_ID","List efter ID"); 
define("_WEBLINKS_ORDER_TREE","List i træ"); 
define("_WEBLINKS_CAT_ORDER","Rækkefølgen af kategorier"); 
define("_WEBLINKS_THERE_ARE_CATEGORY","Der er <b>%s</b> kategorier i databasen"); 
define("_WEBLINKS_ADMIN_CATEGORY_NOTICE_1","Når du klikker på <b>Kategori ID</b>, kommer siden, hvor du kan redigere kategorien."); 
define("_WEBLINKS_ADMIN_CATEGORY_NOTICE_2","Klik på <b>Øverste kategori</b> eller <b>Titel</b>, for at ændre rækkefølge af kategorierne."); 
define("_WEBLINKS_NO_CATEGORY","Der er ingen tilhørende kategori."); 
define("_WEBLINKS_NUM_SUBCAT","Antal underkategorier"); 
define("_WEBLINKS_ORDERS_UPDATED","Opdateret rækkefølgen af kategorier");

//======	cateogry_manage.php 	======
define("_WEBLINKS_IMGURL_MAIN","URL til kategori billed"); 
define("_WEBLINKS_IMGURL_MAIN_DSC1","Dette er en mulighed. <br /> Juster automatisk, størrelsen af et billede. "); 
define("_WEBLINKS_IMGURL_MAIN_DSC2","Dette er effektivt i den hoved kategorien.");


//======	link_list.php 	======
define("_WEBLINKS_ADMIN_LINK_MANAGE","Vedligeholdelse af Link"); 
define("_WEBLINKS_ADMIN_LINK_LIST","Link liste"); 
define("_WEBLINKS_ADMIN_LINK_BROKEN","Liste over brudte link"); 
define("_WEBLINKS_ADMIN_LINK_ALL_ASC","Liste over alle links (Sorteret stigende efter ID)"); 
define("_WEBLINKS_ADMIN_LINK_ALL_DESC","Liste over alle links (sorteret faldende efter ID)"); 
define("_WEBLINKS_ADMIN_LINK_NOURL","Liste over link, hvor webadressen er ikke oprettet"); 
define("_WEBLINKS_COUNT_BROKEN","Antal af brudte link"); 
define("_WEBLINKS_NO_LINK","Der er ingen tilsvarende link."); 
define("_WEBLINKS_ADMIN_PRESENT_SAVE","Data der er gemt i databasen vises her.");

//======	link_manage.php 	======
define("_WEBLINKS_USERID","Bruger ID");
define("_WEBLINKS_CREATE","Oprettet");

//======	link_broken_check.php 	======
define("_WEBLINKS_ADMIN_LINK_CHECK_UPDATE","Link kontrol og opdatering"); 
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK","Brudte link check"); 
define("_WEBLINKS_ADMIN_BROKEN_CHECK","check"); 
define("_WEBLINKS_ADMIN_BROKEN_RESULT","check resultat"); 
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_CAUTION","En timeout kan opstå, hvis der er mange brudt link. <br /> Så skal du ændre den numeriske værdi af grænsen. <br /> grænse = 0 er ingen begrænsning. <br />" ); 
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_NOTICE","En redigerings side åbnes, når du klikker på <b>link ID</b>. <br />Tilsvarende URL vil være åben, når du klikke på <b>web-adressen</b>. <br /> "); 
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_GOOGLE","Google-søgning vil åbnes, når du klikker på <b>sidens titel</b>. <br />"); 
define("_WEBLINKS_ADMIN_LIMIT","Højeste kontrol links (grænse)"); 
define("_WEBLINKS_ADMIN_OFFSET","Erstatning (offset)"); 
define("_WEBLINKS_ADMIN_CHECK","CHECK"); 
define("_WEBLINKS_ADMIN_TIME_START","Starttidspunkt"); 
define("_WEBLINKS_ADMIN_TIME_END","Slut tid"); 
define("_WEBLINKS_ADMIN_TIME_ELAPSE","Brugt tid"); 
define("_WEBLINKS_ADMIN_LINK_NUM_ALL","Alle links"); 
define("_WEBLINKS_ADMIN_LINK_NUM_CHECK","Kontrolleret links"); 
define("_WEBLINKS_ADMIN_LINK_NUM_BROKEN","Brudte links"); 
define("_WEBLINKS_ADMIN_NUM","links"); 
define("_WEBLINKS_ADMIN_MIN_SEC","%s min %s sek"); 
define("_WEBLINKS_ADMIN_CHECK_NEXT","Check næste %s links"); 
define("_WEBLINKS_ADMIN_RSS_REFRESH_NOTE","Udfør samtidig Auto opdagelse af RSS/Atom url");

//======	rss_manage.php 	======
define("_WEBLINKS_ADMIN_RSS_MANAGE","Vedligehold af RSS/Atom-feed"); 
define("_WEBLINKS_ADMIN_RSS_REFRESH","Opdatering af RSS/Atom"); 
define("_WEBLINKS_ADMIN_RSS_REFRESH_LINK","Opdater cache på link data"); 
define("_WEBLINKS_ADMIN_RSS_REFRESH_SITE","Opdater cache af RSS søgewebsted"); 
define("_WEBLINKS_ADMIN_NUM_REFRESH_RSS_URL","Antal RSS/Atom url opdateret"); 
define("_WEBLINKS_ADMIN_NUM_REFRESH_RSS_SITE","Antal RSS/Atom websted opdateret url"); 
define("_WEBLINKS_ADMIN_NUM_REFRESH_ATOM_SITE","Antal RSS/Atom websted opdateret feed"); 
define("_WEBLINKS_ADMIN_NUM_REFRESH_ATOMFEED","Antal RSS/Atom-feed opdateret"); 
define("_WEBLINKS_ADMIN_RSS_CACHE_CLEAR","Ryd cache af RSS/Atom-feed"); 
define("_WEBLINKS_RSS_CLEAR_NUM","Ryd cache af RSS/Atom-feed efter en dato, hvis mere end det angivne antal feeds."); 
define("_WEBLINKS_RSS_NUMBER","antallet af feeds"); 
define("_WEBLINKS_RSS_CLEAR_LID","Ryd cache, der er specificeret link ID"); 
define("_WEBLINKS_RSS_CLEAR_ALL","Ryd alle cache"); 
define("_WEBLINKS_NUM_RSS_CLEAR_LINK","Antal RSS/Atom cache ryddet"); 
define("_WEBLINKS_NUM_RSS_CLEAR_ATOMFEED","Antal ATOM/RSS-feed ryddet");

//======	user_list.php 	======
define("_WEBLINKS_ADMIN_USER_MANAGE","Vedligeholdelse af brugere"); 
define("_WEBLINKS_ADMIN_USER_EMAIL","Liste over brugere har Email-adresse"); 
define("_WEBLINKS_ADMIN_USER_LINK","Liste over de registrerede brugere, der har link oplysninger"); 
define("_WEBLINKS_ADMIN_USER_NOLINK","Liste over de registrerede brugere, der ikke har nogen link oplysninger"); 
define("_WEBLINKS_ADMIN_USER_EMAIL_DSC","Vis kun en email-adresse, hvis der er gentagelser"); 
define("_WEBLINKS_ADMIN_USER_LINK_DSC","Brug 'Send Besked til Brugere' fra Xoops Core"); 
define("_WEBLINKS_USER_ALL","(alle)"); 
define("_WEBLINKS_USER_MAX","(hver %s personer)"); 
define("_WEBLINKS_THERE_ARE_USER","<b>%s</b> brugere fundet"); 
define("_WEBLINKS_USER_NUM","Vis fra %s person til %s person."); 
define("_WEBLINKS_USER_NOFOUND","Ingen Brugere fundet"); 
define("_WEBLINKS_UID_EMAIL","Email-adresse på afsender");

//======	mail_users.php 	======
define("_WEBLINKS_ADMIN_SENDMAIL","Send Email"); 
define("_WEBLINKS_THERE_ARE_EMAIL","Der er <b>%s</b> e-mails"); 
define("_WEBLINKS_SEND_NUM","Send email form %s person til %s person"); 
define("_WEBLINKS_SEND_NEXT","Send næste %s e-mails"); 
define("_WEBLINKS_SUBJECT_FROM","Information fra %s"); 
define("_WEBLINKS_HELLO","Hej %s"); 
define("_WEBLINKS_MAIL_TAGS1","{W_NAME} vil indsætte brugernavn"); 
define("_WEBLINKS_MAIL_TAGS2","{W_EMAIL} vil indsætte brugerens e-mail"); 
define("_WEBLINKS_MAIL_TAGS3","{W_LID} vil indsætte bruger link-id");

// general
define('_WEBLINKS_WEBMASTER','Webmaster'); 
define('_WEBLINKS_SUBMITTER','Afsender'); 
if( !defined('_WEBLINKS_MID') ) {define('_WEBLINKS_MID','Rediger ID'); }
define('_WEBLINKS_UPDATE','Opdater'); 
define('_WEBLINKS_SET_DEFAULT','Sæt standard'); 
define('_WEBLINKS_CLEAR','RYD'); 
define('_WEBLINKS_CHECK','CHECK'); 
define('_WEBLINKS_NON','Intet at ændre'); 
define('_WEBLINKS_SENDMAIL','Send Email');

// 2005-08-09
// BUG 2827: RSS refresh: Invalid argument supplied for foreach()
define("_WEBLINKS_ADMIN_NO_LINK_BROKEN_CHECK","Der er ingen link at kontrollerer"); 
define("_WEBLINKS_ADMIN_NO_RSS_REFRESH","Der er ikke noget link til at opdatere RSS");

// 2005-10-20
define("_WEBLINKS_LINK_APPROVED","[{X_SITENAME}] {X_MODULE}: Dit indsendte link er godkendt");
define("_WEBLINKS_LINK_REFUSED",  "[{X_SITENAME}] {X_MODULE}: Dit indsendte link er IKKE godkendt");

// 2006-05-15
define('_AM_WEBLINKS_INDEX_DESC','Hovedsides introtekst');
define('_AM_WEBLINKS_INDEX_DESC_DSC','Du kan bruge denne til at skrive en intro tekst. Html er tilladt.');
define('_AM_WEBLINKS_INDEX_DESC_DEFAULT','<div align="center" style="color: #0000ff">Her skrives din hovedside intro.<br />Du kan rette den i "Modulkonfiguration 2".<br /></div>');

define('_AM_WEBLINKS_ADD_CATEGORY','Tilføj ny kategori');
define('_AM_WEBLINKS_ERROR_SOME','Der forefindes fejlmeddelelser');
define('_AM_WEBLINKS_LIST_ID_ASC',  'List efter gammel id');
define('_AM_WEBLINKS_LIST_ID_DESC','List efter ny id');

// config
//define('_AM_WEBLINKS_WARNING_NOT_WRITABLE','The directory is not writeable');

define('_AM_WEBLINKS_CONF_LINK','Link konfiguration');
define('_AM_WEBLINKS_CONF_LINK_IMAGE','Link Image konfiguration');
define('_AM_WEBLINKS_CONF_VIEW','Visnings konfiguration');
define('_AM_WEBLINKS_CONF_TOPTEN','Top 10 konfiguration');
define('_AM_WEBLINKS_CONF_SEARCH','Søgekonfiguration');

define('_AM_WEBLINKS_USE_BROKENLINK','Brudte links rapportering');
define('_AM_WEBLINKS_USE_BROKENLINK_DSC','JA tillader brugere at give besked mht brudte links');
define('_AM_WEBLINKS_USE_HITS','Læg hit til ved spring');
define('_AM_WEBLINKS_USE_HITS_DSC','JA betyder der lægges til hits når man trykker på linket');
define('_AM_WEBLINKS_USE_PASSWD','Password godkendelse');
define('_AM_WEBLINKS_USE_PASSWD_DSC','JA, <b>anoyme brugere</b> må rette et link med godkendelse via password.<br />NEJ, <br />passwordfeltet vises ikke.');
define('_AM_WEBLINKS_PASSWD_MIN','Minimum længde på password');
define('_AM_WEBLINKS_POST_TEXT','Administrator har alle rettigheder');
define('_AM_WEBLINKS_AUTH_DOHTML','Ret til at bruge HTML tags');
define('_AM_WEBLINKS_AUTH_DOHTML_DSC','Angiv grupper der må bruge HTML tags');
define('_AM_WEBLINKS_AUTH_DOSMILEY','Ret til smiley ikoner');
define('_AM_WEBLINKS_AUTH_DOSMILEY_DSC','Angiv grupper der må bruge smileys');
define('_AM_WEBLINKS_AUTH_DOXCODE','Ret til XOOPS codes');
define('_AM_WEBLINKS_AUTH_DOXCODE_DSC','Angiv grupper der må bruge XOOPS codes');
define('_AM_WEBLINKS_AUTH_DOIMAGE','Ret til billeder');
define('_AM_WEBLINKS_AUTH_DOIMAGE_DSC','Angiv grupper der må bruge billeder');
define('_AM_WEBLINKS_AUTH_DOBR','Ret til linebreaks');
define('_AM_WEBLINKS_AUTH_DOBR_DSC','Angiv grupper der må bruge linebreak');
define('_AM_WEBLINKS_SHOW_CATLIST','Vis kategoriliste i submenu');
define('_AM_WEBLINKS_SHOW_CATLIST_DSC','JA viser kategorien i submenuen');
define('_AM_WEBLINKS_VIEW_URL','URL visningsstil');
define('_AM_WEBLINKS_VIEW_URL_DSC','INGEN <br />ingen url eller &lt;a&gt; tag vises.<br />Indirekte<br /> viser visit.php i hreffeltet instedet for URL. <br />Direkte <br />Viser url in hreffelt, JavaScript ved onmousedown felt og hits tælles via JavaScript.');
define('_AM_WEBLINKS_VIEW_URL_0','INGEN');
define('_AM_WEBLINKS_VIEW_URL_1','Indirekte url');
define('_AM_WEBLINKS_VIEW_URL_2','Direkte url');
define('_AM_WEBLINKS_RECOMMEND_PRI','Priotritering af anbefalede sider');
define('_AM_WEBLINKS_RECOMMEND_PRI_DSC','INGEN <br />vises ikke.<br />Normal <br />Anbefalede sider vises i header.<br />Højere <br />Viser anbefaldede sider i header på hver respektive kategori.');
define('_AM_WEBLINKS_MUTUAL_PRI','Prioritet af ligende sider');
define('_AM_WEBLINKS_MUTUAL_PRI_DSC','INEGN <br />vises ikke.<br />Normal <br />Anbefalede side vises i header.<br />Højere <br />Viser anbefalede sider i topen af hver respektive kategori.');
define('_AM_WEBLINKS_PRI_0','INGEN');
define('_AM_WEBLINKS_PRI_1','Normal');
define('_AM_WEBLINKS_PRI_2','Højere');
define('_AM_WEBLINKS_LINK_IMAGE_AUTO','Auto opdater Banner billedstørrelse');
define('_AM_WEBLINKS_LINK_IMAGE_AUTO_DSC',"JA <br />Opdater bannerbilled størrelse automatisk.");
define('_AM_WEBLINKS_RSS_USE','Brug RSS feed');
define('_AM_WEBLINKS_RSS_USE_DSC','JA <br />Hent og vis RSS/ATOM feed.');

// bulk import
define('_AM_WEBLINKS_BULK_IMPORT','Masseimport');
define('_AM_WEBLINKS_BULK_IMPORT_FILE','Masse import fra Fil');
define('_AM_WEBLINKS_BULK_CAT','Masseimporter kategorier');
define('_AM_WEBLINKS_BULK_CAT_DSC1','Beskriv kategorier');
define('_AM_WEBLINKS_BULK_CAT_DSC2','Brug venstre-pil parentes (>) i begyndelse af kategori for at betegne en submenu.');
define('_AM_WEBLINKS_BULK_LINK','Masse Import af Links');
define('_AM_WEBLINKS_BULK_LINK_DSC1','Skriv en kategori på den 1ste linie.');
define('_AM_WEBLINKS_BULK_LINK_DSC2','Beskriv linktitel, URL, of beskrivelse adskilt med komma (,) på linie 2.');
define('_AM_WEBLINKS_BULK_LINK_DSC3','Brug dashes (---) for at adskille links horisontale barer.');
define('_AM_WEBLINKS_BULK_ERROR_LAYER','Specificer to eller flere underlag i kategoriens tree struktur. Denne behøber uddybning G.S.');
define('_AM_WEBLINKS_BULK_ERROR_CID','Forkert kategori ID');
define('_AM_WEBLINKS_BULK_ERROR_PID','Forkert hoved kategori ID');
define('_AM_WEBLINKS_BULK_ERROR_FINISH','En fejl stoppede operationen');

// command
//define('_AM_WEBLINKS_CREATE_CONFIG','Create Config File');
//define('_AM_WEBLINKS_TEST_EXEC','Test execute for %s');

// === 2006-10-05 ===
// menu
define('_AM_WEBLINKS_MODULE_CONFIG_3','Module konfiguration 3');
define('_AM_WEBLINKS_MODULE_CONFIG_4','Module konfiguration 4');
define('_AM_WEBLINKS_VOTE_LIST','Afstemningsliste');
define('_AM_WEBLINKS_CATLINK_LIST','Kategoriser Link Liste');
//define('_AM_WEBLINKS_COMMAND_MANAGE','Command Management');
define('_AM_WEBLINKS_TABLE_MANAGE',  'DB Tabel indstillinger');
define('_AM_WEBLINKS_IMPORT_MANAGE','Import indstillinger');
define('_AM_WEBLINKS_EXPORT_MANAGE','Ekspoter indstillinger');

// config
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_2','Auth, kat, etc');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_3','Link');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_4','RSS, Forum, kort');
define('_AM_WEBLINKS_LINK_REGISTER','Link indstillinger: Beskrivelse');

// bin configuration
//define('_AM_WEBLINKS_FORM_BIN','Command Config');
//define('_AM_WEBLINKS_FORM_BIN_DESC','It is used on bin command');
//define('_AM_WEBLINKS_CONF_BIN_PASS','Password');
//define('_AM_WEBLINKS_CONF_BIN_PASS_DESC','');
//define('_AM_WEBLINKS_CONF_BIN_SEND','Send Mail');
//define('_AM_WEBLINKS_CONF_BIN_SEND_DESC','');
//define('_AM_WEBLINKS_CONF_BIN_MAILTO','Email to send');
//define('_AM_WEBLINKS_CONF_BIN_MAILTO_DESC','');

// rssc
//define('_AM_WEBLINKS_RSS_DIRNAME','RSSC Module Dirname');
//define('_AM_WEBLINKS_RSS_DIRNAME_DESC','');

// link manage
define('_AM_WEBLINKS_DEL_LINK','Slet link');
define('_AM_WEBLINKS_ADD_RSSC','Tilføj link til RSSC module');
define('_AM_WEBLINKS_MOD_RSSC','Ret link i RSSC module');
define('_AM_WEBLINKS_REFRESH_RSSC','Opdater link i RSSC module');
define('_AM_WEBLINKS_APPROVE',     'Godkend nyt link');
define('_AM_WEBLINKS_APPROVE_MOD','godkend rettet link');
define('_AM_WEBLINKS_RSSC_LID_SAVED','Gemt rssc lid');
define('_AM_WEBLINKS_GOTO_LINK_LIST','GÅ til link liste');
define('_AM_WEBLINKS_GOTO_LINK_EDIT','GÅ til link ret');
define('_AM_WEBLINKS_ADD_BANNER','Tilføj banner billedstørrelse');
define('_AM_WEBLINKS_MOD_BANNER','Ret banner billedstørrelse');

// vote list
define('_AM_WEBLINKS_VOTE_USER','Registrede brugerstemmer');
define('_AM_WEBLINKS_VOTE_ANON','Anonyme brugerstemmer');

// locate
define('_AM_WEBLINKS_CONF_LOCATE','Find konfiguration');
define('_AM_WEBLINKS_CONF_COUNTRY_CODE','Landekode');
define('_AM_WEBLINKS_CONF_COUNTRY_CODE_DESC','Skriv ccTLDs kode <br/> <a href="http://www.iana.org/cctld/cctld-whois.htm" target="_blank">IANA: Lande-kode top-niveau Domæner</a>');
define('_AM_WEBLINKS_CONF_RENEW_COUNTRY_CODE_DESC','Opfrisk emnet som relaterer til landekoden. <br/> Emnet med <span style="color:#0000ff;">#</span> mærket');
define('_AM_WEBLINKS_RENEW','Opfrisk');

// map
define('_AM_WEBLINKS_CONF_MAP','Kort sideindstillinger');
define('_AM_WEBLINKS_CONF_MAP_USE','Brug kortside');
define('_AM_WEBLINKS_CONF_MAP_TEMPLATE','Template af kortside');
define('_AM_WEBLINKS_CONF_MAP_TEMPLATE_DESC','Skriv template filnavn i template/map/ dir');

// google map: hacked by wye <http://never-ever.info/>
define('_AM_WEBLINKS_CONF_GOOGLE_MAP','Google Maps indstillinger');
define('_AM_WEBLINKS_CONF_GM_USE','Brug Google Maps');
define('_AM_WEBLINKS_CONF_GM_APIKEY','Google Maps API key');
define('_AM_WEBLINKS_CONF_GM_APIKEY_DESC','Hent API key på <br/> <a href="http://www.google.com/apis/maps/signup.html" target="_blank">http://www.google.com/apis/maps/signup.html</a> <br/> når du bruger GoogleMaps.' );
define('_AM_WEBLINKS_CONF_GM_SERVER','Server Navn');
define('_AM_WEBLINKS_CONF_GM_LANG',  'Sprogkode');
define('_AM_WEBLINKS_CONF_GM_LOCATION','default lokalitet');
define('_AM_WEBLINKS_CONF_GM_LATITUDE','default breddegrad');
define('_AM_WEBLINKS_CONF_GM_LONGITUDE','default længdegrad');
define('_AM_WEBLINKS_CONF_GM_ZOOM',     'default Zoom niveau');

// google search
define('_AM_WEBLINKS_CONF_GOOGLE_SEARCH','Google søgningsgodkendelse');
define('_AM_WEBLINKS_CONF_GOOGLE_SERVER','Servernavn');
define('_AM_WEBLINKS_CONF_GOOGLE_LANG',  'Sprogkode');

// template
//define('_AM_WEBLINKS_CONF_TEMPLATE','Clear cache of Templates');
define('_AM_WEBLINKS_CONF_TEMPLATE_DESC','SKAL køres når template filerne ændres i template/parts/ template/xml/ and template/map/ directory');

// === 2006-12-11 ===
// link item
//define('_AM_WEBLINKS_TIME_PUBLISH','Set the publication time');
//define('_AM_WEBLINKS_TIME_PUBLISH_DESC','If you do not check it, published time will become undated');
//define('_AM_WEBLINKS_TIME_EXPIRE','Set expiration time');
//define('_AM_WEBLINKS_TIME_EXPIRE_DESC','If you do not check it, expired setting will become undated');
define('_AM_WEBLINKS_LINK_TIME_PUBLISH_BEFORE','Link listes før Udgivelsestid');
define('_AM_WEBLINKS_LINK_TIME_EXPIRE_AFTER',  'Link listes efter udløbelsestid');

define('_AM_WEBLINKS_SERVER_ENV','Server enviroment ');
define('_AM_WEBLINKS_DEBUG_CONF','Ret variabler');
define('_AM_WEBLINKS_ALL_GREEN','Alt Grønt');

// === 2007-02-20 ===
// performance
define('_AM_WEBLINKS_UPDATE_CAT_PATH','Opdater kategori stitræ');
define('_AM_WEBLINKS_UPDATE_CAT_COUNT','Opdater link kategori tal');
define('_AM_WEBLINKS_CAT_COUNT_UPDATED','Kategori stitræ opdateret');

// config
define('_AM_WEBLINKS_SYSTEM_POST_LINK','Skriv (tæller) når du indsender link');
define('_AM_WEBLINKS_SYSTEM_POST_LINK_DSC','JA tæller med når en XOOPS bruger poster nyt link. ');
define('_AM_WEBLINKS_SYSTEM_POST_RATE','Skriv tæller når der postes en linkstemme');
define('_AM_WEBLINKS_SYSTEM_POST_RATE_DSC','JA tæller op når en XOOPS bruger stemmer på et link. ');

define('_AM_WEBLINKS_VIEW_STYLE_CAT','Vis stil i hver kategori');
define('_AM_WEBLINKS_VIEW_STYLE_MARK','Vis stil i anbefal side');
define('_AM_WEBLINKS_VIEW_STYLE_MARK_DSC','Dvs i Anbefal side, lignende sider og RSS/ATOM site');
define('_AM_WEBLINKS_VIEW_STYLE_0','Summering');
define('_AM_WEBLINKS_VIEW_STYLE_1','Fuld detaljer');

define('_AM_WEBLINKS_CONF_PERFORMANCE','Udførselsforbedring');
define('_AM_WEBLINKS_CONF_PERFORMANCE_DSC','Pga. udførselsforbedringen gennemarbejdes data før visning og det gemmes i databasen. <br />Når bruges første gang kør "Kategori liste" -> "Opdater kategori stitree"');
define('_AM_WEBLINKS_CAT_PATH','Kategori sti træ');
define('_AM_WEBLINKS_CAT_PATH_DSC','JA genarbejder kategoriens stitræ og gemmer i Db.<br />NEJ gennemarbejder ved visning.');
define('_AM_WEBLINKS_CAT_COUNT','Kategori link tal');
define('_AM_WEBLINKS_CAT_COUNT_DSC','JA sammenregner kategoriens link tal og gemmer i DB.<br />NEJ sammenregner ved visning.');

define('_AM_WEBLINKS_POST_TEXT_4','Alle emner vises i Admin siden');
define('_AM_WEBLINKS_LINK_REGISTER_1','Link indstillinger: Textarea1');

define('_AM_WEBLINKS_CONF_LINK_GUEST','Gæst link registrer indstillinger');
define('_AM_WEBLINKS_USE_CAPTCHA','Brug CAPTCHA');
define('_AM_WEBLINKS_USE_CAPTCHA_DSC','CAPTCHA er en anti-spam teknik.<br />Denne funktion bruger Captcha module.<br />JA, <b>anonym bruger</b> skal bruge CAPTCHA når tilføjer eller retter link.<br />NEJ vises ikkeCAPTCHA felt.');
define('_AM_WEBLINKS_CAPTCHA_FINDED',     'Captcha modul ver %s fundet.');
define('_AM_WEBLINKS_CAPTCHA_NOT_FINDED','Captcha modul er ikke fundet');

define('_AM_WEBLINKS_CONF_SUBMIT','Beskrivelse af link registrer formen.');
define('_AM_WEBLINKS_SUBMIT_MAIN',    'Beskrivelse af nyt link: 1');
define('_AM_WEBLINKS_SUBMIT_PENDING','Beskrivelse af nyt link: 2');
define('_AM_WEBLINKS_SUBMIT_DOUBLE',  'Beskrivelse af nyt link: 3');
define('_AM_WEBLINKS_SUBMIT_MAIN_DSC',   'Vises altid');
define('_AM_WEBLINKS_SUBMIT_PENDING_DSC','Vis ved "admin skal godkende" mode');
define('_AM_WEBLINKS_SUBMIT_DOUBLE_DSC','Vis ved "check om url eksisterer" mode');

define('_AM_WEBLINKS_MODLINK_MAIN',     'Beskrivelse af ret link: 1');
define('_AM_WEBLINKS_MODLINK_PENDING',  'Beskrivelse af ret link: 2');
define('_AM_WEBLINKS_MODLINK_NOT_OWNER','Beskrivelse af ret link: 3');
define('_AM_WEBLINKS_MODLINK_NOT_OWNER_DSC','Vis ved "admin skal godkende" mode og ikke ejer');

define('_AM_WEBLINKS_CONF_CAT_FORUM','Vis forum i kategori');
define('_AM_WEBLINKS_CONF_LINK_FORUM','Vis forum i link');
//define('_AM_WEBLINKS_FORUM_SEL','Select Forum module');
define('_AM_WEBLINKS_FORUM_THREAD_LIMIT','Antal tråde der vises');
define('_AM_WEBLINKS_FORUM_POST_LIMIT','Antal poster der vises i hver tråd');
define('_AM_WEBLINKS_FORUM_POST_ORDER','Post orden');
define('_AM_WEBLINKS_FORUM_POST_ORDER_0','Ældre poster');
define('_AM_WEBLINKS_FORUM_POST_ORDER_1','Nyere poster');
//define('_AM_WEBLINKS_FORUM_INSTALLED',     'Forum module ( %s ) ver %s is installed');
//define('_AM_WEBLINKS_FORUM_NOT_INSTALLED','Forum module ( %s ) is not installed');

// === 2007-03-25 ===
define('_AM_WEBLINKS_UPDATE_CAT_IMAGE_SIZE','Opdater kategoribilled størrelse');

define('_AM_WEBLINKS_CONF_INDEX','Indeksside indstillinger');
define('_AM_WEBLINKS_CONF_INDEX_GM_MODE','Google Map mode');

define('_AM_WEBLINKS_CAT_SHOW_GM',   'Vis Google map');
define('_AM_WEBLINKS_MODE_NON',       'Vis ikke');
define('_AM_WEBLINKS_MODE_DEFAULT',   'Default værdi');
define('_AM_WEBLINKS_MODE_PARENT',    'Samme som hovedkategori');
define('_AM_WEBLINKS_MODE_FOLLOWING','følgende værdi');

define('_AM_WEBLINKS_CONF_CAT_ALBUM',  'Vis album i kategori');
define('_AM_WEBLINKS_CONF_LINK_ALBUM','Vis album i link');
//define('_AM_WEBLINKS_ALBUM_SEL','Select Album module');
define('_AM_WEBLINKS_ALBUM_LIMIT','Antal billeder der vises');
define('_AM_WEBLINKS_WHEN_OMIT','Udfør ved send');

define('_AM_WEBLINKS_MODULE_INSTALLED',     '%s modul ( %s ) ver %s er installeret');
define('_AM_WEBLINKS_MODULE_NOT_INSTALLED','%s modul ( %s ) er ikke installeret');

// === 2007-04-08 ===
define('_AM_WEBLINKS_CAT_DESC_MODE',  'Vis beskrivelse');
define('_AM_WEBLINKS_CAT_SHOW_FORUM','Vis Forum');
define('_AM_WEBLINKS_CAT_SHOW_ALBUM','Vis Album');
define('_AM_WEBLINKS_MODE_SETTING',   'Indstillings værdi');
define('_AM_WEBLINKS_MODE_OMIT_PARENT','Samme som hoved kategori ved send');

// === 2007-06-10 ===
// d3forum
define('_AM_WEBLINKS_CONF_D3FORUM','Kommentar-integration med d3forum modul');
define('_AM_WEBLINKS_PLUGIN_SEL',   'Plugin vælg');
define('_AM_WEBLINKS_DIRNAME_SEL',  'Modul vælg');

// category
define('_AM_WEBLINKS_CAT_PATH_STYLE','Vis kategori stiens stil');

// category page
define('_AM_WEBLINKS_CONF_CAT_PAGE','Kategoriside indstillinger');
define('_AM_WEBLINKS_CAT_COLS','Antal kolonner i kategorier');
define('_AM_WEBLINKS_CAT_COLS_DESC','På kategorisiden angiv hvor mange kolonner der vises under et hieraki');
define('_AM_WEBLINKS_CAT_SUB_MODE','Vis vidde af subkategorier');
define('_AM_WEBLINKS_CAT_SUB_MODE_1','Kun kategorier i et hieraki');
define('_AM_WEBLINKS_CAT_SUB_MODE_2','Alle kategorier under et og flere hierakier');

// === 2007-07-14 ===
// highlight
define('_AM_WEBLINKS_USE_HIGHLIGHT','Brug keyword fremhævning');
define('_AM_WEBLINKS_CHECK_MAIL','Check emailformat');
define('_AM_WEBLINKS_CHECK_MAIL_DSC','INGEN tillader alle formater. <br /> JA checker om emailformate er som abc@efg.com når der registreres et link. ');
//define('_AM_WEBLINKS_NO_EMAIL','Not Set Email Address');

// === 2007-08-01 ===
// config
define('_AM_WEBLINKS_MODULE_CONFIG_0','Modul indstillinger');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_0','Index');
define('_AM_WEBLINKS_MODULE_CONFIG_5','Module konfig 5');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_5','Link Registrer emne');
define('_AM_WEBLINKS_MODULE_CONFIG_6','Module konfig 6');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_6','Google Map');

// google map
define('_AM_WEBLINKS_GM_MAP_CONT',  'Map Control');
define('_AM_WEBLINKS_GM_MAP_CONT_DESC',  'GLargeMapControl, GSmallMapControl, GSmallZoomControl');
define('_AM_WEBLINKS_GM_MAP_CONT_NON',   'Vis ikke');
define('_AM_WEBLINKS_GM_MAP_CONT_LARGE','Stor kontrol');
define('_AM_WEBLINKS_GM_MAP_CONT_SMALL','Lille Control');
define('_AM_WEBLINKS_GM_MAP_CONT_ZOOM',  'Zoom Control');
define('_AM_WEBLINKS_GM_USE_TYPE_CONT',  'Brug map type kontrol');
define('_AM_WEBLINKS_GM_USE_TYPE_CONT_DESC',  'GMapTypeControl');
define('_AM_WEBLINKS_GM_USE_SCALE_CONT',  'Use Skaler kontrol');
define('_AM_WEBLINKS_GM_USE_SCALE_CONT_DESC',  'GScaleControl');
define('_AM_WEBLINKS_GM_USE_OVERVIEW_CONT',  'Brug overblikskort Control');
define('_AM_WEBLINKS_GM_USE_OVERVIEW_CONT_DESC',  'GOverviewMapControl');
define('_AM_WEBLINKS_GM_MAP_TYPE','[Søg] kort type');
define('_AM_WEBLINKS_GM_MAP_TYPE_DESC','GMapType');
define('_AM_WEBLINKS_GM_GEOCODE_KIND',  '[Søg] stil af Geocode');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_DESC',  'Søg længde og breddegrad på adresse<br /><b>Enkelt resultat</b><br />GClientGeocoder - getLatLng<br /><b>flere Resultater</b><br />GClientGeocoder - getLocations');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_LATLNG','Enkelt Resultat: getLatLng');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_LOCATIONS',   'Flere resultater: getLocations');
define('_AM_WEBLINKS_GM_USE_GEOCODE_TOKYO',  '[Søg][Japan] Brug CSIS');
define('_AM_WEBLINKS_GM_USE_GEOCODE_TOKYO_DESC',  'Bruges i  Japan<br />Søg længde -og breddegrad fra adresse');
define('_AM_WEBLINKS_GM_USE_NISHIOKA',  '[Søg][Japan] Brug omvendt Geocode');
define('_AM_WEBLINKS_GM_USE_NISHIOKA_DESC',  'Bruges i Japan<br />Søg længde -og breddegrad<br /><a href="http://nishioka.sakura.ne.jp/google/" target="_blank">http://nishioka.sakura.ne.jp/google/</a>');
define('_AM_WEBLINKS_GM_TITLE_LENGTH',  '[Marker] Maksimum tegn for titel');
define('_AM_WEBLINKS_GM_TITLE_LENGTH_DESC',  'Max antal tegn i titlen <br /><b>-1</b> er ubegrænset');
define('_AM_WEBLINKS_GM_DESC_LENGTH',  '[Marker] Maksimum tegn for indhold');
define('_AM_WEBLINKS_GM_DESC_LENGTH_DESC',  'Max antal tegn i indhold <br /><b>-1</b> er ubegrænset');
define('_AM_WEBLINKS_GM_WORDWRAP',  '[Marker] max tegn for wordwarp');
define('_AM_WEBLINKS_GM_WORDWRAP_DESC',  'Maksimum antal tegn anvendt per linie (wordwrap)<br /><b>-1</b> er ubegrænset');
define('_AM_WEBLINKS_GM_USE_CENTER_MARKER',  '[Marker] Vis center markør');
define('_AM_WEBLINKS_GM_USE_CENTER_MARKER_DESC',  'I hovedmenu og kategorisiden vis centrermarkøren');

// map jp
define('_AM_WEBLINKS_MAP_JP_MANAGE','Japan kort indstillinger');

// column
define('_AM_WEBLINKS_COLUMN_MANAGE','Kolonnestyring');
define('_AM_WEBLINKS_COLUMN_MANAGE_DESC','Tilføj f.eks. kolonne i link tabel og ret tabel');
define('_AM_WEBLINKS_COLUMN_MANAGE_NOT_USE','Anvend ikke');
define('_AM_WEBLINKS_THERE_ARE_COLUMN','Der er <b>%s</b> kolonner i linktabellen');
define('_AM_WEBLINKS_COLUMN_NUM','Antal tilføjede kolonner');
define('_AM_WEBLINKS_COLUMN_BIGGER_USE','Antal kolonner er større en antallet i link tabellen');
define('_AM_WEBLINKS_COLUMN_UNMATCH',  'Kolonnerne passer ikke i antal.');
define('_AM_WEBLINKS_PHPMYADMIN',  'Ret med passende software som f.eks phpMyAdmin');
define('_AM_WEBLINKS_LINK_NUM_ETC','Antal af kolonner');

// latest
define('_AM_WEBLINKS_INDEX_MODE_LATEST','Orden på seneste links');
define('_AM_WEBLINKS_INDEX_MODE_LATEST_UPDATE','Opdateret Dato');
define('_AM_WEBLINKS_INDEX_MODE_LATEST_CREATE','Oprettet Dato');

// header
define('_AM_WEBLINKS_CONF_HTML_STYLE','HTML Style indstillinger');
define('_AM_WEBLINKS_HEADER_MODE','Brug xoops module header');
define('_AM_WEBLINKS_HEADER_MODE_DESC','Ved "NEJ", vis stylesheet og javascript i bodytag<br />Ved "JA", vis dem i headertag, brugende xoops header<br />bemærk der er nogle temaer der ikke kan bruge denne metode');

// bulk
define('_AM_WEBLINKS_BULK_SAMPLE','Du kan se et preview, tryk på previewknappen');
define('_AM_WEBLINKS_BULK_LINK_DSC10','registrerede emner er fixed');
define('_AM_WEBLINKS_BULK_LINK_DSC20','Admin specificer registrer emner');
define('_AM_WEBLINKS_BULK_LINK_DSC21','Første paragraf');
define('_AM_WEBLINKS_BULK_LINK_DSC22','Anden paragraf, og følgende');
define('_AM_WEBLINKS_BULK_LINK_DSC23','Skriv registrer emnenavne på den 1. linie.<br />Skriv horizontal bar (---)');
define('_AM_WEBLINKS_BULK_LINK_DSC24','Beskriv registrernavne efter ordenen af den 1. paragraf adskildt af komma (,) på den 2. linie');
define('_AM_WEBLINKS_BULK_CHECK_URL','Marker for at skrive URL');
define('_AM_WEBLINKS_BULK_CHECK_DESCRIPTION','Marker for at skrive beskrivelse');

// === 2007-09-01 ===
// auth
define('_AM_WEBLINKS_AUTH_DELETE','Må slette');
define('_AM_WEBLINKS_AUTH_DELETE_DSC','Angiv grupper der må indgive Slet link requests');
define('_AM_WEBLINKS_AUTH_DELETE_AUTO','Må godkende "Slet link"');
define('_AM_WEBLINKS_AUTH_DELETE_AUTO_DSC','Angiv grupper der må slette links');

// nofitication
define('_AM_WEBLINKS_NOTIFICATION_MANAGE','Notifikationsindstillinger');
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_DESC','Indstillinger for hver modul administrator<br />Det er det samme som toppen af modulet');
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_NOT_USE',"Kan ikke anvendes i alle xoops versioner");
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_PLEASE','I så fald brug "I toppen af dette modul"');
define('_AM_WEBLINKS_SUBJ_LINK_MOD_APPROVED','[{X_SITENAME}] {X_MODULE}: Din ret link ansøgning er godkendt');
define('_AM_WEBLINKS_SUBJ_LINK_MOD_REFUSED',  '[{X_SITENAME}] {X_MODULE}: Din ret link ansøgning er afslået');
define('_AM_WEBLINKS_SUBJ_LINK_DEL_APPROVED','[{X_SITENAME}] {X_MODULE}: Din slet link ansøgning er godkendt');
define('_AM_WEBLINKS_SUBJ_LINK_DEL_REFUSED',  '[{X_SITENAME}] {X_MODULE}: Din ret link ansøgning er afslået');

// config
define('_AM_WEBLINKS_ADMIN_WAITING_SHOW','Vis admin ventende liste');
define('_AM_WEBLINKS_USER_WAITING_NUM',   'Antal af brugers links på ventende liste');
define('_AM_WEBLINKS_USER_OWNER_NUM',     'Number of list user submitted list');
define('_AM_WEBLINKS_USE_HITS_SINGLELINK','Countup hits ved vis singlelink');
define('_AM_WEBLINKS_USE_HITS_SINGLELINK_DSC','JA for countup link hits tæller ved vis singlelink');
define('_AM_WEBLINKS_MODE_RANDOM','Redirect ved tilfældig spring');
define('_AM_WEBLINKS_MODE_RANDOM_URL','registreret side url');
define('_AM_WEBLINKS_MODE_RANDOM_SINGLE','singlelink i dette modul');

// request list
define('_AM_WEBLINKS_DEL_REQS','Sletning links ventende godkendelse');
define('_AM_WEBLINKS_NO_DEL_REQ','Ingen linksletnings Request');
define('_AM_WEBLINKS_DEL_REQ_DELETED','Sletnings Request er slettet');

// link list
define('_AM_WEBLINKS_LINK_USERCOMMENT_DESC','Link liste med kommentarer for admin (Listes efter ny ID)');

// clone
define('_AM_WEBLINKS_CLONE_LINK','Klon');
define('_AM_WEBLINKS_CLONE_MODULE','Klon til andet modul');
define('_AM_WEBLINKS_CLONE_CONFIRM','Godkend klon');
define('_AM_WEBLINKS_NO_MODULE','Der er ingen tilhørende modul');

// link form
define('_AM_WEBLINKS_MODIFIED','Rettet');
define('_AM_WEBLINKS_CHECK_CONFIRM','Godkendt');
define('_AM_WEBLINKS_WARN_CONFIRM','Advarsel: marker "godkent" for %s');
define('_AM_WEBLINKS_RSSC_LID_EXIST_MORE','Der er 2 eller flere links der har samme "RSSC ID"');

// web shot
define('_AM_WEBLINKS_LINK_IMG_THUMB','Udskiftning af link billede');
define('_AM_WEBLINKS_LINK_IMG_THUMB_DSC','Vis WEB side thumbnail istedet for link billede, <br />anvendende thumbnail web service, <br />hvis ikke sæt link image.');
define('_AM_WEBLINKS_LINK_IMG_NON','ingen');
//define('_AM_WEBLINKS_LINK_IMG_MOZSHOT','Use <a href="http://mozshot.nemui.org/" target="_blank">MozShot</a>');
//define('_AM_WEBLINKS_LINK_IMG_SIMPLEAPI','Use <a href="http://img.simpleapi.net/" target="_blank">SimpleAPI</a>');

// === 2007-11-01 ===
// google map
define('_AM_WEBLINKS_GM_MARKER_WIDTH',  '[Marker] Bredde (pixel)');
define('_AM_WEBLINKS_GM_MARKER_WIDTH_DESC',  'Bredde på kort marker info<br /><b>-1</b> er uspecificeret');
define('_AM_WEBLINKS_LINK_IMG_USE','Brug %s');

define('_AM_WEBLINKS_RSS_SITE','Denne side');
define('_AM_WEBLINKS_RSS_FEED','RSS feeds');

// nameflag mainflag
define('_AM_WEBLINKS_CONF_LINK_USER','Bruger Link Registrer indstilling');
define('_AM_WEBLINKS_USER_NAMEFLAG','Vælg visning af flagnavn');
define('_AM_WEBLINKS_USER_MAILFLAG','Vælg visning af mailflag');
define('_AM_WEBLINKS_USER_NAME_MAIL_FLAG_DESC','Default værdi nå en bruger registrer<br />Admin kan ændre værdi');
define('_AM_WEBLINKS_USER_NAME_MAIL_FLAG_SEL','Brugervalg');

// description length
define('_AM_WEBLINKS_DESC_LENGTH','Maks længde karakterer');
define('_AM_WEBLINKS_DESC_LENGTH_DSC','<b>-1</b> eller Admin : 64KB grænse<br />');

// === 2007-12-09 ===
define("_AM_WEBLINKS_D3FORUM_VIEW","visningstype på kommentarer");

// === 2008-02-17 ===
// config
define('_AM_WEBLINKS_MODULE_CONFIG_7','Module konfig 7');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_7','Menu');
define('_AM_WEBLINKS_CONF_MENU','Menuvisning');
define('_AM_WEBLINKS_CONF_MENU_DESC','Indstilling som relaterer til visning af menuen');
define('_AM_WEBLINKS_CONF_TITLE','Titel på menu');

// htmlout
define('_AM_WEBLINKS_OUTPUT_PLUGIN_MANAGE','HTML Output Plugin indstilling');
define('_AM_WEBLINKS_HTMLOUT','HTML Output Plugin');
define('_AM_WEBLINKS_RSSOUT',  'RSS Output Plugin');
define('_AM_WEBLINKS_KMLOUT',  'KML Output Plugin');

// pagerank
define('_AM_WEBLINKS_LINK_CHECK_MANAGE','Link Check indstilling');
define('_AM_WEBLINKS_USE_PAGERANK','Vis PageRank');
define('_AM_WEBLINKS_USE_PAGERANK_DESC','"Vis" : Vis pageRank i menubar, link liste, link single');
define('_AM_WEBLINKS_USE_PAGERANK_NON',   'Vis ikke');
define('_AM_WEBLINKS_USE_PAGERANK_SHOW',  'Vis');
define('_AM_WEBLINKS_USE_PAGERANK_CACHE','Vis pageRank når der hentes vha cache');

// kml
define('_AM_WEBLINKS_KML_USE','Vis KML');

}

?>