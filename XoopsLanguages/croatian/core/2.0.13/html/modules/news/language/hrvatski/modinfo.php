<?php 
// $Id: modinfo.php,v 1.12 2004/12/26 19:12:01 onokazu Exp $
// Module Info 
 
// The name of this module 
define('_MI_NEWS_NAME','Novosti'); 
 
// A brief description of this module 
define('_MI_NEWS_DESC','Kreira sekciju gdje korisnici mogu pisati novosti i komentare.'); 
 
// Names of blocks for this module (Not all module has blocks) 
define('_MI_NEWS_BNAME1','Teme novosti'); 
define('_MI_NEWS_BNAME3','Pri�a dana'); 
define('_MI_NEWS_BNAME4','Naj�itanije novosti'); 
define('_MI_NEWS_BNAME5','Najnovije novosti'); 
 
// Sub menus in main menu block 
define('_MI_NEWS_SMNAME1','Dodaj �lanak'); 
define('_MI_NEWS_SMNAME2','Arhiva'); 
 
// Names of admin menu items 
define('_MI_NEWS_ADMENU2', 'Upravitelj temama'); 
define('_MI_NEWS_ADMENU3', 'Objavi/Uredi novosti'); 
 
// Title of config items 
define('_MI_STORYHOME', 'Izaberite broj �lanaka koji �e biti prikazani na naslovnoj stranici'); 
define('_MI_NOTIFYSUBMIT', 'Izaberite "da" da bi poslali obavijest administratoru o novo �lanku u novostima'); 
define('_MI_DISPLAYNAV', 'Izaberite "da" za prikaz navigacijskog dijela na vrhu svake stranice sa novostima'); 
define('_MI_ANONPOST','Dopusti anonomnim korisnicima objavu u novostima?'); 
define('_MI_AUTOAPPROVE','Automatski dopusti novi �lanak bez intervencije administratora?'); 
 
// Description of each config items 
define('_MI_STORYHOMEDSC', ''); 
define('_MI_NOTIFYSUBMITDSC', ''); 
define('_MI_DISPLAYNAVDSC', ''); 
define('_MI_AUTOAPPROVEDSC', ''); 
 
// Text for notifications 
 
define('_MI_NEWS_GLOBAL_NOTIFY', 'Op�enito'); 
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Op�enite postavke obavijesti.'); 
 
define('_MI_NEWS_STORY_NOTIFY', '�lanak'); 
define('_MI_NEWS_STORY_NOTIFYDSC', 'Opcije obavijesti koje se primjenjuju za trenutni �lanak.'); 
 
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova tema'); 
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Obavijesti me kada je stvorena nova tema.'); 
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Primi obavijest kada je stvorena nova tema.'); 
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova tema u novostima'); 
 
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Podnesen novi �lanak');        
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Obavijesti me kada je podne�en novi �lanak (�eka odobrenje).');                            
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Primi obavijest kada je podne�en novi �lanak (�eka odobrenje).');                 
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Podnesena novi �lanak');                               
 
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nova pri�a');        
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Obavijesti me kada je novi �lanak objavljena.'); 
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Primi obavijeti kada je objavljeno novi �lanak.'); 
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi �lanak u novostima');                               
 
define('_MI_NEWS_STORY_APPROVE_NOTIFY', '�lanak odobren'); 
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Obavijesti me kada je novi �lanak odobren.'); 
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC',  'Primi obavijest kada je ovaj �lanak odobrena'); 
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : �lanak odobren'); 
 
?> 
