<?php

// Module Info

// The name of this module
define('_MI_RECETTE_NAME','Opskrifter');

// A brief description of this module
define('_MI_RECETTE_DESC','Opretter en sektion hvor brugere kan indsende og kommenterer opskrifter.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_RECETTE_BNAME1','Opskrift typer');
define('_MI_RECETTE_BNAME3','Dagens opskrift');
define('_MI_RECETTE_BNAME4','Top opskrift (dansk mangler)');
define('_MI_RECETTE_BNAME5','Mest læste opskrift');
define('_MI_RECETTE_BNAME6','Moderate opskrift (dansk mangler)');
define('_MI_RECETTE_BNAME7','Opskrift navigation');
define('_MI_RECETTE_BNAME8','Opskrift type block (dansk mangler)');
define('_MI_RECETTE_BNAME9','sidste opskrift');

// Sub menus in main menu block
define('_MI_RECETTE_SMNAME1','Indsend opskrift');
define('_MI_RECETTE_SMNAME2','Arkiv');
define('_MI_RECETTE_SMNAME3','Liste over ingredienser');

// Names of admin menu items
define('_MI_RECETTE_ADMENU2','Kategorier');
define('_MI_RECETTE_ADMENU3','Ret opskrifter');
define('_MI_RECETTE_GROUPPERMS','Rettigheder');
define('_MI_RECETTE_FUSION','Tilføj ingrediens');
define('_MI_RECETTE_ICONE','Vedligehold billeder');
define('_MI_RECETTE_LNK','Link ikoner');

// Title of config items
define('_MI_RECETTE_STORYHOME','Hvor mange opskrifter skal der vises på index siden?');
define('_MI_RECETTE_NOTIFYSUBMIT','Besked ved indsendelse af nye opskrifter?');
define('_MI_RECETTE_DISPLAYNAV','Vis navigations boks');
define('_MI_RECETTE_ANONPOST','Skal gæster have rettighed til at indsende opskrifter ?');
define('_MI_RECETTE_AUTOAPPROVE','Automatisk udgivelse af opskrifter ?');
define('_MI_RECETTE_ALLOWEDSUBMITGROUPS','Grupperettighed til at indsende opskrift');
define('_MI_RECETTE_ALLOWEDAPPROVEGROUPS','Grupperettighed til at udgive opskrift');
define('_MI_RECETTE_NEWSDISPLAY','Vis layout');
define('_MI_RECETTE_NAMEDISPLAY','Navn på forfatter');
define('_MI_RECETTE_COLUMNMODE','Kolonner');
define('_MI_RECETTE_STORYCOUNTADMIN','Antal viste opskrifter på index siden af admin delen:');
define('_MI_RECETTE_UPLOADFILESIZE','MAX filstørrelse ved upload (kb) 1048576 = 1 Mb');
define('_MI_RECETTE_UPLOADGROUPS','Gruppe der må uploade');

// Description of each config items
define('_MI_RECETTE_STORYHOMEDSC','');
define('_MI_RECETTE_NOTIFYSUBMITDSC','');
define('_MI_RECETTE_DISPLAYNAVDSC','');
define('_MI_RECETTE_AUTOAPPROVEDSC','');
define('_MI_RECETTE_ALLOWEDSUBMITGROUPSDESC','Valgte grupper må indsende opskrifter');
define('_MI_RECETTE_ALLOWEDAPPROVEGROUPSDESC','Valgte grupper må');
define('_MI_RECETTE_NEWSDISPLAYDESC','\\\"Classic\\\\\\\" viser opskrifter alt efter dato. \\\\\\\"According to category\\\\\\\" gruppere opskrifter alt efter kategori, hvor den sidst indtastede opskrift vises komplet - kun titlen på øvrige opskrifter vises.');
define('_MI_RECETTE_ADISPLAYNAMEDSC','Hvordan skal navnet på forfatter vises ?');
define('_MI_RECETTE_COLUMNMODE_DESC','Hvor mange kolonner skal opskriftslisten vises med?');
define('_MI_RECETTE_STORYCOUNTADMIN_DESC','');
define('_MI_RECETTE_UPLOADFILESIZE_DESC','');
define('_MI_RECETTE_UPLOADGROUPS_DESC','Vælg de grupper, der må uploade filer til serveren.');


// Name of config item values
define('_MI_RECETTE_NEWSCLASSIC','Classic');
define('_MI_RECETTE_NEWSBYTOPIC','According to category');
define('_MI_RECETTE_DISPLAYNAME1','Bruger navn');
define('_MI_RECETTE_DISPLAYNAME2','Fulde navn');
define('_MI_RECETTE_DISPLAYNAME3','Vil ikke forfatter');
define('_MI_RECETTE_UPLOAD_GROUP1','Indsender og godkender');
define('_MI_RECETTE_UPLOAD_GROUP2','Kun godkender');
define('_MI_RECETTE_UPLOAD_GROUP3','Upload deaktiveret');


// Text for notifications

define('_MI_RECETTE_GLOBAL_NOTIFY','General');
define('_MI_RECETTE_GLOBAL_NOTIFYDSC','Generelle besked muligheder');

define('_MI_RECETTE_STORY_NOTIFY','Opskrifter');
define('_MI_RECETTE_STORY_NOTIFYDSC','Beskeder muligheder der berører den aktueller opskrift');

define('_MI_RECETTE_GLOBAL_NEWCATEGORY_NOTIFY','Ny opskrift i kategori');
define('_MI_RECETTE_GLOBAL_NEWCATEGORY_NOTIFYCAP','Besked ved oprettelse af ny opskrift');
define('_MI_RECETTE_GLOBAL_NEWCATEGORY_NOTIFYDSC','Besked ved oprettelse af ny opskrift');
define('_MI_RECETTE_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatisk besked: Ny opskrift kategori');

define('_MI_RECETTE_GLOBAL_STORYSUBMIT_NOTIFY','Ny opskrift indsendt');       
define('_MI_RECETTE_GLOBAL_STORYSUBMIT_NOTIFYCAP','Besked ved indsendelse af ny opskrift (som afventer godkendelse).');                           
define('_MI_RECETTE_GLOBAL_STORYSUBMIT_NOTIFYDSC','Besked ved indsendelse at ny opskrift (som afventer godkendelse).');                
define('_MI_RECETTE_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatisk besked: Ny opskrift indsendt');                              

define('_MI_RECETTE_GLOBAL_NEWSTORY_NOTIFY','Ny opskrift');       
define('_MI_RECETTE_GLOBAL_NEWSTORY_NOTIFYCAP','Besked ved udgivelse af ny opskrift');
define('_MI_RECETTE_GLOBAL_NEWSTORY_NOTIFYDSC','Besked ved udgivelse af ny opskrift');
define('_MI_RECETTE_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatisk besked: Ny opskrift udgivet');                              

define('_MI_RECETTE_STORY_APPROVE_NOTIFY','Opskrift udgivet');
define('_MI_RECETTE_STORY_APPROVE_NOTIFYCAP','Besked ved udgivelse af denne opskrift');
define('_MI_RECETTE_STORY_APPROVE_NOTIFYDSC','Besked ved udgivelse af denne opskrift');
define('_MI_RECETTE_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatisk besked: Opskrift udgivelse');

define('_MI_RECETTE_RESTRICTINDEX','Begræns visning af opskrift kategorier på hovedsiden?');
define('_MI_RECETTE_RESTRICTINDEXDSC','Hvis du vælger Ja vil brugerne kun have mulighed for at få vist den kategorier, som deres gruppe-medlemsskab tillader.');
?>