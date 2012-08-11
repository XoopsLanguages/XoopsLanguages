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

define("_WEBLINKS_ADMIN_INDEX","Admin Indeks"); 
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
define('_WEBLINKS_ADMIN_RSS','Setting of RSS/ATOM Feeds');
define('_WEBLINKS_RSS_MODE_AUTO','Auto update of RSS/ATOM feeds');
define('_WEBLINKS_RSS_MODE_AUTO_DSC',"when select YES, perform 'Auto Discovery of RSS/ATOM url' and 'auto update', when show a link detail infomation. ");
define('_WEBLINKS_RSS_MODE_DATA','Data of RSS/ATOM to show');
define('_WEBLINKS_RSS_MODE_DATA_DSC',"When select 'ATOM FEED', use the data in atomfeed table after parsing. <br />When select 'XML', use the data in link table before parsing. <br />Some datas may not be saved in atomfeed table since filtering. ");
define('_WEBLINKS_RSS_CACHE','Cache time of RSS/ATOM feeds');
define('_WEBLINKS_RSS_CACHE_DSC','Setting value is a 1 hour unit.');
define('_WEBLINKS_RSS_LIMIT','The maximum number of RSS/ATOM feeds');
define('_WEBLINKS_RSS_LIMIT_DSC','Enter the maximum number of RSS/ATOM feeds saved in atomfeed table<br />It will be cleared by old date, if this value is exceeded. <br />0 is unlimited. ');
define('_WEBLINKS_RSS_SITE','RSS search site');
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
define("_WEBLINKS_ORDERS_UPDATED','Opdateret rækkefølgen af kategorier");

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
define('_WEBLINKS_MID','Rediger ID'); 
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

?>