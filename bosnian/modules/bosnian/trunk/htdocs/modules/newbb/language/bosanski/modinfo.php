<?php
// $Id: modinfo.php,v 2.3 2005/11/01 01:36:14 phppp Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define("_MI_NEWBB_NAME","Forum");

// A brief description of this module
define("_MI_NEWBB_DESC","Fore modul za XOOPS");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST","Zadnje odgovorene Teme");
define("_MI_NEWBB_BLOCK_TOPIC","Aktuelne Teme");
define("_MI_NEWBB_BLOCK_POST","Aktuelni Postovi");
define("_MI_NEWBB_BLOCK_AUTHOR","Autori");
/*
define("_MI_NEWBB_BNAME2","Meist gelesene Themen");
define("_MI_NEWBB_BNAME3","Meist aktive Themen");
define("_MI_NEWBB_BNAME4","Neuste Zusammenfassung");
define("_MI_NEWBB_BNAME5","Neuste gepinnte Themen");
define("_MI_NEWBB_BNAME6","Neuste Beitr&auml;ge");
define("_MI_NEWBB_BNAME7","Autor mit den meisten Themen");
define("_MI_NEWBB_BNAME8","Autor mit den meisten Beitr&auml;gen");
define("_MI_NEWBB_BNAME9","Autor mit den meisten Zusammenfassungen");
define("_MI_NEWBB_BNAME10","Autor mit den meisten gepinnten Themen");
define("_MI_NEWBB_BNAME11","Letzter Beitrag mit Text");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","Index");
define("_MI_NEWBB_ADMENU_CATEGORY","Kategorije");
define("_MI_NEWBB_ADMENU_FORUM","Fore");
define("_MI_NEWBB_ADMENU_PERMISSION","Odobrenja");
define("_MI_NEWBB_ADMENU_BLOCK","Blokovi");
define("_MI_NEWBB_ADMENU_ORDER","Sortiranje");
define("_MI_NEWBB_ADMENU_SYNC","Foren sychroni&scaron;i");
define("_MI_NEWBB_ADMENU_PRUNE","O&#269;isti / Sredi");
define("_MI_NEWBB_ADMENU_REPORT","Prijave");
define("_MI_NEWBB_ADMENU_DIGEST","Digesti");
define("_MI_NEWBB_ADMENU_VOTE","Glasanja");



//config options

define("_MI_DO_DEBUG","Debug Modus");
define("_MI_DO_DEBUG_DESC","Prikazuje eventualne gre&scaron;ke");

define("_MI_IMG_SET","Set slika");
define("_MI_IMG_SET_DESC","Ovde izaberi dostunu sliku");
define("_MI_DIR_ATTACHMENT","Veza za zaka&#269;ene Podatke.");
define("_MI_DIR_ATTACHMENT_DESC","Veza mora biti od XOOPS-Glavnod direktorija data,kao npr.  www.g-orahovica.net/uploads/newbb gdje se trebaju podaci uploadati, mora data veza ovako biti '/uploads/newbb' . Svakako na kraju veze ovu oznaku '/' (slash) ne upisuj. Za pregledne slike izaberi direktorij '/uploads/newbb/thumbs'");
define("_MI_PATH_MAGICK","Veza za ImageMagick");
define("_MI_PATH_MAGICK_DESC","Normalno je ova '/usr/bin/X11'. Ovo ostavi prazno , ako ImageMagick nije instaliran ili ako autoprepoznavanje je uklju&#269;eno.");

define("_MI_SUBFORUM_DISPLAY","Modus prikazivanja Podfora nar Index stranici");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","Otvoreno");
define("_MI_SUBFORUM_COLLAPSE","Zatvoreno");
define("_MI_SUBFORUM_HIDDEN","Skriveno");

define("_MI_POST_EXCERPT","Slanje Postova u Forum");
define("_MI_POST_EXCERPT_DESC","Du&#382ina pristiglog Posta kod dodira Mi&scaron;a. 0 za bez dolazaka.");

define("_MI_PATH_NETPBM","Veza za Netpbm");
define("_MI_PATH_NETPBM_DESC","Normalno je ova '/usr/bin'. Ovo ostavi prazno , ako Netpbm nije instaliran ili ako autoprepoznavanje je uklju&#269;eno.");

define("_MI_IMAGELIB","Biblioteku grafike izaberi");
define("_MI_IMAGELIB_DESC","Postavi sa &#269;ime treba thumbnails napraviti. AUTO se postavlja za automatsko prepoznavanje.");

define("_MI_MAX_IMG_WIDTH","Maximalna &scaron;irina slike");
define("_MI_MAX_IMG_WIDTH_DESC","Stavi maximalnu dozvolu <strong>&scaron;irin</strong> uploadane slike. Ina&#269;e &#263;e se thumbnail napraviti. <br > 0 daj ako netreba thumbnails da se napravi.");

define("_MI_MAX_IMAGE_WIDTH","Maximalna &scaron;irina slike za thumbnail");
define("_MI_MAX_IMAGE_WIDTH_DESC","Stavi maximalnu &scaron;irinu uploadane slike za thumbnail .<br >Iz slike koja ima veliku  &scaron;irinu ne&#263;e thumbnail biti napravljen.");

define("_MI_MAX_IMAGE_HEIGHT","Maximalna visina slike za thumbnail");
define("_MI_MAX_IMAGE_HEIGHT_DESC","Stavi maximalnu visinu uploadane slike za thumbnail .<br >Iz slike koja ima veliku  visinu ne&#263;e thumbnail biti napravljen.");

define("_MI_SHOW_DIS","Pravilnik prika&#382;i kod");
define("_MI_DISCLAIMER","Pravilnik");
define("_MI_DISCLAIMER_DESC","Ovde upi&scaron;i Pravilnik kojeg treba gore u izabranoj opciji prikazati.");
define("_MI_DISCLAIMER_TEXT","Forum na&scaron; ima jako puno informacija o Na&scaron;oj Orahovici i samim na&scaron;im Orahov&#269;anima. <br /><br />Molim vas da prije svega pro&#269;itate Pravilnik i da se pridr&#382;avate pravila,jer respektiranjem smo na nivou po&scaron;tovanja jedih prema drugim.Pregledajte Forum i izbjegavajte duple diskusije,pratite gdje se o &#269;emu diskutuje i raspravlja.Koristite Forumsku pretragu ona vam mo&#382;e u pretrazi najvi&scaron;e pomo&#263;i.Kontaktirajte nas ako trebate pomo&#263;,uvijek smo tu da vam svima pomognemo.");
define("_MI_NONE","Nikome");
define("_MI_POST","Post sa&#269;uvaj");
define("_MI_REPLY","Odgovori");
define("_MI_OP_BOTH","Oboje");
define("_MI_WOL_ENABLE","Prikaz Online Status aktiviraj");
define("_MI_WOL_ENABLE_DESC","Aktiviraj 'Ko je online' Blok u Forumskom pregledu kao i pojedinim Forama");
//define("_MI_WOL_ADMIN_COL","Administrator Highlight Farbe");
//define("_MI_WOL_ADMIN_COL_DESC","Farbe mit der Administratoren innerhalb des 'Wer ist online' Block hervorgehoben werden sollen.");
//define("_MI_WOL_MOD_COL","Moderator Highlight Farbe");
//define("_MI_WOL_MOD_COL_DESC","Farbe mit der Moderatoren innerhalb des 'Wer ist online' Block hervorgehoben werden sollen.");
//define("_MI_LEVELS_ENABLE","HP/MP/EXP Levels Mod einschalten");
//define("_MI_LEVELS_ENABLE_DESC","<strong>HP</strong>  is determined by your average posts per day.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> goes up each time you post, and when you get to 100%, you gain a level and the EXP drops to 0 again.");
define("_MI_NULL","isklju&#269;i");
define("_MI_TEXT","Tekst");
define("_MI_GRAPHIC","Grafi&#269;ki");
define("_MI_USERLEVEL","HP/MP/EXP Level Mod  uklju&#269;i");
define("_MI_USERLEVEL_DESC","<strong>HP</strong> = Ozna&#269;ava broj Postova na dan Tag.<br /><strong>MP</strong> = Veza izme&#273;u datuma registracije i Postova do sada u ovom vremenu.<br /><strong>EXP</strong> = Ova oznaka se povisuje kod svakog upianog Posta u Forumu. Kada bude 100% onda se Level iskustva podi&#382; za jedan stupanj i po&#269;inje iz po&#269;etka dalje.");
define("_MI_RSS_ENABLE","RSS-Feed aktiviraj");
define("_MI_RSS_ENABLE_DESC","Aktivirani RSS-Feed. Molim te datu opciju promjeni i daj maximalni broj Postova i maximalnu du&#382;inu opisa unesi.");
define("_MI_RSS_MAX_ITEMS","Max. Postova");
define("_MI_RSS_MAX_DESCRIPTION","Max. du&#382;ina opisa");
define("_MI_RSS_UTF8","RSS-Codiranje sa UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION","'UTF-8' se koristi, ako je ova opcija izabrana. SIna&#269;e se '"._CHARSET."' koristi.");
define("_MI_RSS_CACHETIME","RSS-Feed Cache vrijeme");
define("_MI_RSS_CACHETIME_DESCRIPTION","Cache vrijeme do RSS-Feed ponovo generiraj, u minutama.");

define("_MI_MEDIA_ENABLE","Media Features aktiviraj");
define("_MI_MEDIA_ENABLE_DESC","Zaka&#269;enu sliku direktno u Postu prika&#382;i.");
define("_MI_USERBAR_ENABLE","Dodatni Meni aktiviraj");
define("_MI_USERBAR_ENABLE_DESC","Prika&#382;i dodatni Meni, sa: Profilom, PM, ICQ, MSN, itd.");

define("_MI_GROUPBAR_ENABLE","Grupe &#269;lanova prika&#382;i");
define("_MI_GROUPBAR_ENABLE_DESC","Prika&#382;i u Postovima Grupu koju &#269;lan ima.");

define("_MI_RATING_ENABLE","Funkciju ocjenjivanja aktiviraj");
define("_MI_RATING_ENABLE_DESC","Dozvoli da se Postovi ocjenjuju");

define("_MI_VIEWMODE","Modus prikazivanja za Postove");
define("_MI_VIEWMODE_DESC","Kroz ovo pode&scaron;avanje bi&#263;e glavno pode&scaron;avanje u Forumskom podru&#269;ju preko njega novo ispisano. 'Ni&scaron;ta' ako izabere&scaron; onda ostaje kako i jeste.");
define("_MI_COMPACT","Kompaktno");

define("_MI_MENUMODE","Priprema za prikaz Menija");
define("_MI_MENUMODE_DESC","'Izbor' - preko pulldown izaberi<br />'hover' - hover Meni izaberi (evtl. je IE sporiji)<br />'klik' - njemu je potreban Javascript");

define("_MI_REPORTMOD_ENABLE","Post prijavi");
define("_MI_REPORTMOD_ENABLE_DESC","&#268;lanovi mogu svaki Post koji na neki na&#269;in nije uredu Moderatoru prijaviti. Ovde se mo&#382;e reagirati (npr. Post promjenuti ili izbrisati)");
define("_MI_SHOW_JUMPBOX","'Idi u' Box aktiviraj");
define("_MI_JUMPBOXDESC","Ako je aktiviran, onda se Forum u Combo Boxu prikazuje, ova funkcija se korisnicima odobrava ako sa Foruma u Forum se preska&#269;e.");

define("_MI_SHOW_PERMISSIONTABLE","Tabele sa odorenjima prika&#382;i");
define("_MI_SHOW_PERMISSIONTABLE_DESC","Ako je Da izabrano onda &#263;e Lista sa odobrenjima i &#269;lanovima biti prikazana.");

define("_MI_EMAIL_DIGEST","Pregled Postova preko E-Maila");
define("_MI_EMAIL_DIGEST_DESC","Odredi vrijeme, kada se mo&#382;e preko E-Mail obavijest za pregled Postova poslati.");
define("_MI_NEWBB_EMAIL_NONE","Bez E-Mail");
define("_MI_NEWBB_EMAIL_DAILY","Dnevno");
define("_MI_NEWBB_EMAIL_WEEKLY","Sedmi&#269;no");

define("_MI_SHOW_IP","IP-Adresu korisnika prika&#382;i");
define("_MI_SHOW_IP_DESC","Ako je Da izabrano, onda Moderatori IP-Adrese mogu vidjeti.");

define("_MI_ENABLE_KARMA","'Karma zahtjevi' aktiviraj");
define("_MI_ENABLE_KARMA_DESC","Ovo omogu&#263;ava 'Karma zahtjevi' da drugi korisnici mogu vidjeti koliko neko ima aktivnosti na Forumu.");

define("_MI_KARMA_OPTIONS","Karma pode&scaron;avanje za Postove");
define("_MI_KARMA_OPTIONS_DESC","',' ovo koristi za razmak ako ima vi&scaron;e opcija.");

define("_MI_SINCE_OPTIONS","'Od' Opciju za 'Vidi' i 'Tra&#382;i'");
define("_MI_SINCE_OPTIONS_DESC","Pozitivne vrijednosti za dane i negativne vrijednosti za sate. ',' ovo koristi za razmak ako ima vi&scaron;e opcija.");

define("_MI_SINCE_DEFAULT","'Od' Daj vrijednost");
define("_MI_SINCE_DEFAULT_DESC","Daj vrijednost, ako nije druga&#269;ije od &#269;lana dato.");

define("_MI_MODERATOR_HTML","HTML Tagove za Moderatore dozvoli");
define("_MI_MODERATOR_HTML_DESC","Ovo dozvoljava Moderatorima u polju posta svoje Postove HTML da koriste");

define("_MI_USER_ANONYMOUS","Registrovanima dozvoli da anonimno u Forumu pi&scaron;u?");
define("_MI_USER_ANONYMOUS_DESC","Ovde je dozvoljeno da registrovani mogu svoje Postove anonimno objavljivati.");

define("_MI_ANONYMOUS_PRE","Prefix za anonimne &#269;lanove");
define("_MI_ANONYMOUS_PRE_DESC","Ovde dati Prefix &#263;e u Postovima anonimnih Postova anonimno prestavljati.");

define("_MI_REQUIRE_REPLY","Natjeraj da se da odgovor da bi se neki Post mogao pro&#269;itati");
define("_MI_REQUIRE_REPLY_DESC","Ova opcija tjera &#269;itaoce Foruma da daju odgovor prije nego pro&#269;itaju Post");

define("_MI_EDIT_TIMELIMIT","Vremenski limit, za koliko se Post vremena mo&#382;e urediti");
define("_MI_EDIT_TIMELIMIT_DESC","Stavi vremenski interval, u kojem &#269;lan mo&#382;e urediti svoj Post. U minutama, 0 je bez uvjeta.");

define("_MI_DELETE_TIMELIMIT","Vremenski limit, za koliko se Post vremena mo&#382;e izbrisati");
define("_MI_DELETE_TIMELIMIT_DESC","tavi vremenski interval, u kojem &#269;lan mo&#382;e izbrisati svoj Post. U minutama, 0 je bez uvjeta.");

define("_MI_POST_TIMELIMIT","Vremenski limit, za koliko se  vremena mo&#382;e ponovo dalje pisati");
define("_MI_POST_TIMELIMIT_DESC","Vremenski limit, za koliko se  vremena mo&#382;e novi Post upisati. U minutama, 0 je bez uvjeta.");

define("_MI_RECORDEDIT_TIMELIMIT","Vremenski limit, za koliko se  vremena mo&#382;e Post bez 'Promjenjeni Info' promjenuti mo&#382;e");
define("_MI_RECORDEDIT_TIMELIMIT_DESC","Stavi vremenski interval, u kojem mo&#382;e &#269;lan bez promjene informacija prikazati. U minutama, 0 je bez uvjeta.");

define("_MI_SUBJECT_PREFIX","Prefix za naziv Teme daj");
define("_MI_SUBJECT_PREFIX_DESC","Postavi Prefix, npr. [Rije&scaron;eno] na po&#269;etak razloga. za vi&scaron;e opcija koristi ',' za razmak oznaku. NEMA je bez Prefixa.");
define("_MI_SUBJECT_PREFIX_DEFAULT",'<font color="#00CC00">[Rije&scaron;eno]</font>,<font color="#00CC00">[Gotovo]</font>,<font color="#FF0000">[Pitanje]</font>,<font color="#FF0000">[Prijava bug-a]</font>,<font color="#FF0000">[Ne zavr&scaron;eno]</font>');

define("_MI_SUBJECT_PREFIX_LEVEL","Odobrenja za kori&scaron;tenje Prefixa");
define("_MI_SUBJECT_PREFIX_LEVEL_DESC","Grupa(e) izaberi koji smiju Prefix koristiti.");
define("_MI_SPL_DISABLE",'Isklju&#269;i');
define("_MI_SPL_ANYONE",'Svako');
define("_MI_SPL_MEMBER",'&#268;lanovi');
define("_MI_SPL_MODERATOR",'Moderatori');
define("_MI_SPL_ADMIN",'Administratori');

define("_MI_SHOW_REALNAME","Pravo ime prika&#382;i");
define("_MI_SHOW_REALNAME_DESC","Promjeni Nik ime sa pravim imenom, koje je u Profilu navedeno.");

define("_MI_CACHE_ENABLE","Cache aktiviraj");
define("_MI_CACHE_ENABLE_DESC","Memori&scaron;u se rezultati trenutni da bi upiti bili br&#382;i");

define("_MI_QUICKREPLY_ENABLE","Brzi odgovor aktiviraj");
define("_MI_QUICKREPLY_ENABLE_DESC","Ovim se aktivira Formular, sa kojim se direktno brzo na Post odgovara.");

define("_MI_POSTSPERPAGE","Postova po stranici");
define("_MI_POSTSPERPAGE_DESC","Maximaleni broj Postova, koje po stranici treba prikazati.");

define("_MI_POSTSFORTHREAD","Maximalni broj Postova u prikazanim diskusijama");
define("_MI_POSTSFORTHREAD_DESC","Ravni prikaz se koristi ako je broj Postova velik.");

define("_MI_TOPICSPERPAGE","Tema po stranici");
define("_MI_TOPICSPERPAGE_DESC","Maximalni broj Tema, koje treba po stranici prikazati.");

define("_MI_IMG_TYPE","Typ slike");
define("_MI_IMG_TYPE_DESC","Typ slike za Button u Forumu postavi.<br />- png: za brzi Server;<br />- gif: za normalnu brzinu;<br />- auto: gif za Internet Explorer i png za druge Browserere");

define("_MI_PNGFORIE_ENABLE","'PNG-Hack' aktiviraj");
define("_MI_PNGFORIE_ENABLE_DESC","Ovaj Hack dozvoljava Internet Exploreru,  png Transparentnie atributet da koriste.");

define("_MI_FORM_OPTIONS","Opcije Formulara");
define("_MI_FORM_OPTIONS_DESC","Opcije Formulara, na kojim &#269;lanovi pi&scaron;u/ure&#273;uju/odgovaraju i izabrati ga mogu.");
define("_MI_FORM_COMPACT","Kompaktni");
define("_MI_FORM_DHTML","DHTML");
define("_MI_FORM_SPAW","Spaw Editor");
define("_MI_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_FORM_FCK","FCK Editor");
define("_MI_FORM_KOIVI","Koivi Editor");
define("_MI_FORM_TINYMCE","TinyMCE Editor");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","GD1 Grafik biblioteka");
define("_MI_GD2","GD2 Grafik biblioteka");
define("_MI_AUTO","Automatski");

define("_MI_WELCOMEFORUM","Forum gdje se novi &#269;lanovi sa dobrodo&scaron;licom do&#269;ekuju");
define("_MI_WELCOMEFORUM_DESC","Svaki novi &#269;lan koji se prvi puta u Forumu na&#273;e bi&#263;e pozdravljen sa Postom kada u&#273;e u Forum.");

define("_MI_PERMCHECK_ONDISPLAY","Pristup provjeri");
define("_MI_PERMCHECK_ONDISPLAY_DESC","Pristup provjeri za promjenu prikazne stranice");

define("_MI_USERMODERATE","Enable user moderation");
define("_MI_USERMODERATE_DESC","");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','Diskusije');
define('_MI_NEWBB_THREAD_NOTIFYDSC','Opcija obavje&scaron;tenja aktuelne diskusije.');

define('_MI_NEWBB_FORUM_NOTIFY','Forum');
define('_MI_NEWBB_FORUM_NOTIFYDSC','Opcija obavje&scaron;tenja za aktuelni Forum.');

define('_MI_NEWBB_GLOBAL_NOTIFY','Globalno');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','Globalno Forum-Opcija obavje&scaron;tenja.');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','Novi Post');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','Obavjesti me kod aktuelne diskusije u Forumu.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','Obavjesti me kod Novih Postova u aktuelnim diskusijama u Forumu.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Novi Post u diskusiji');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','Nova Tema');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','Obavjesti me kod ako ima novih Tema u Forumu.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','Obavjesti me kod novih Tema u Forumu.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Nova Tema u Forumu');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','Novi Forum');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','Obavjesti me ako novi Forum napravljen bude.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','Obavjesti me ako novi Forum napravljen bude.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Novi Forum');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','Novi Post');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','Obavjesti me kod upisa novih Postova.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','Obavjesti me kod upisa novih Postova.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Novi Post');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','Novi Post');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','Obavjesti me kod upisa novih Postova u aktuenom Forumu.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','Obavjesti me kod upisa novih Postova u aktuenom Forumu.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Novi Post u im aktuelnom Forumu');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','Novi Post (Kompletni Tekst)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','Obavjesti me kod upisa novih Postova (Kompletni tekst u obavijesti prika&#382;i).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','Obavjesti me kod upisa novih Postova (Kompletni tekst u obavijesti prika&#382;i).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Novi Post (Kompletni Tekst)');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','Digest');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','Obavjesti me ako ima Digesta.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','Digest primi.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Digest je objavljen');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE","Kategorija Test");
define("_MI_NEWBB_INSTALL_CAT_DESC","Kategorija za Test.");
define("_MI_NEWBB_INSTALL_FORUM_NAME","Forum Test");
define("_MI_NEWBB_INSTALL_FORUM_DESC","Forum za Test.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT","Bravo! Forum radi.");
define("_MI_NEWBB_INSTALL_POST_TEXT","
	Dobrodo&scaron;li ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." u Forum.<br />
	Sada se registruj, uloguj i stratuj Teme za diskusiju.<br /><br />
	Ako ima pitanja za ovaj Modul Foruma idi na <a href=\"http://xoopsforge.com/modules/newbb/\" target=\"_blank\" title=\"CBB @ XoopsForge\">CBB Modul Seite</a> stranicu.
	");
?>
