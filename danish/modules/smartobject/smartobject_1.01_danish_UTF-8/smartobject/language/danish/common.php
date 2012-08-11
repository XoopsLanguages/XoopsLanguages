<?php

/**
* $Id: common.php 1778 2008-04-24 17:48:56Z fx2024 $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

define('_CO_OBJ_ALL',"Alle"); // deprecated
define('_CO_OBJ_FILTER',"Filter");
define('_CO_OBJ_NONE',"Ingen");
define('_CO_OBJ_SHOW_ONLY','Vis kun');
define('_CO_OBJ_SORT_BY',"Sorteret efter");
define('_CO_SOBJECT_ACTIONS','Handling');
define('_CO_SOBJECT_ADMIN_PAGE',':: Administrations side ::');
define('_CO_SOBJECT_ALL',"Alle");
define('_CO_SOBJECT_APPROVE','Godkend');
define('_CO_SOBJECT_AUTHOR_WORD',"Forfatterens ord");
define('_CO_SOBJECT_BODY_DEFAULT',"Her er et interessant link jeg fandt på %s : %s");
define('_CO_SOBJECT_CANCEL','Fortryd');
define('_CO_SOBJECT_CURRENCY_ISO4217','ISO 4217 kode');
define('_CO_SOBJECT_CURRENCY_ISO4217_DSC','Officielle valuta kode. Mere information: <a href="http://da.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 på Wikipedia</a>');
define('_CO_SOBJECT_CURRENCY_NAME','Navn');
define('_CO_SOBJECT_CURRENCY_NAME_DSC','');
define('_CO_SOBJECT_CURRENCY_SYMBOL','Symbol');
define('_CO_SOBJECT_CURRENCY_SYMBOL_DSC','');
define('_CO_SOBJECT_CURRENCY_RATE','Omregningskurs');
define('_CO_SOBJECT_CURRENCY_RATE_DSC','');
define('_CO_SOBJECT_CURRENCY_DEFAULT','Standard valuta');
define('_CO_SOBJECT_CURRENCY_DEFAULT_DSC','');
define('_CO_SOBJECT_CATEGORY_CREATE','Opret en kategori');
define('_CO_SOBJECT_CATEGORY_CREATE_SUCCESS','Kategorien er blevet oprettet.');
define('_CO_SOBJECT_CATEGORY_DESCRIPTION','Beskrivelse');
define('_CO_SOBJECT_CATEGORY_DESCRIPTION_DSC','Beskrivelse af denne kategori.');
define('_CO_SOBJECT_CATEGORY_EDIT','Kategori information');
define('_CO_SOBJECT_CATEGORY_EDIT_INFO','Udfyld denne formular for at redigere denne kategori.');
define('_CO_SOBJECT_CATEGORY_IMAGE','Ikon');
define('_CO_SOBJECT_CATEGORY_IMAGE_DSC','Kategori ikon');
define('_CO_SOBJECT_CATEGORY_MODIFY_SUCCESS','Kategorien er blevet redigeret.');
define('_CO_SOBJECT_CATEGORY_NAME','Kategori navn');
define('_CO_SOBJECT_CATEGORY_NAME_DSC','Navn på denne kategori');
define('_CO_SOBJECT_CATEGORY_PARENTID','Øvre kategori');
define('_CO_SOBJECT_CATEGORY_PARENTID_DSC','Kategori, som tilhører denne kategori.');
define('_CO_SOBJECT_CLOSE_WINDOW',"Klik her for at lukke dette vindue.");
define('_CO_SOBJECT_COUNTER_FORM_CAPTION','Tæller');
define('_CO_SOBJECT_CREATE','Opret');
define('_CO_SOBJECT_CREATINGNEW','Opretter');
define('_CO_SOBJECT_CUSTOM_CSS','Brugerdefineret CSS');
define('_CO_SOBJECT_CUSTOM_CSS_DSC','Du kan angive brugerdefinerede CSS oplysninger her. Denne CSS skal benyttes når dette objekt vises på brugerens side.');
define('_CO_SOBJECT_DELETE','Slet');
define('_CO_SOBJECT_DELETE_CONFIRM',"Vil du virkelig slette '<em>%s</em>' ?");
define('_CO_SOBJECT_DELETE_ERROR','Der opstod en fejl under sletning af objektet.');
define('_CO_SOBJECT_DELETE_SUCCESS','Objektet er blevet slettet.');
define('_CO_SOBJECT_DEVELOPER_CONTRIBUTOR','Bidragyder(e)');
define('_CO_SOBJECT_DEVELOPER_CREDITS','Credits');
define('_CO_SOBJECT_DEVELOPER_EMAIL','Email');
define('_CO_SOBJECT_DEVELOPER_WEBSITE','Hjemmeside');
define('_CO_SOBJECT_DISPLAY_OPTIONS',"Visnings muligheder ");
define('_CO_SOBJECT_DOBR_FORM_CAPTION',' Aktiver linebreak');
define('_CO_SOBJECT_DOHTML_FORM_CAPTION',' Aktiver HTML koder');
define('_CO_SOBJECT_DOHTML_FORM_DSC',"");
define('_CO_SOBJECT_DOIMAGE_FORM_CAPTION',' Aktiver billeder');
define('_CO_SOBJECT_DOIMAGE_FORM_DCS',"");
define('_CO_SOBJECT_DOSMILEY_FORM_CAPTION',' Aktiver smiley ikoner');
define('_CO_SOBJECT_DOSMILEY_FORM_DSC',"");
define('_CO_SOBJECT_DOXCODE_FORM_CAPTION',' Aktiver XOOPS koder');
define('_CO_SOBJECT_DOXCODE_FORM_DSC',"");
define('_CO_SOBJECT_EDITING','Redigering');
define('_CO_SOBJECT_EMAIL','Send dette link');
define('_CO_SOBJECT_EMAIL_BODY','Her er noget interessant jeg fandt på %s');
define('_CO_SOBJECT_EMAIL_SUBJECT','Tag et kig på denne side på %s');
define('_CO_SOBJECT_GOTOMODULE','Gå til modul');
define('_CO_SOBJECT_LANGUAGE_CAPTION',"Sprog");
define('_CO_SOBJECT_LANGUAGE_DSC',"Sprog relateret til dette objekt");
define('_CO_SOBJECT_LIMIT',"Vis ");
define('_CO_SOBJECT_LIMIT_ALL','Alle ');
define('_CO_SOBJECT_LINK_BODY',"Body");
define('_CO_SOBJECT_LINK_BODY_DSC',"");
define('_CO_SOBJECT_LINK_DATE',"Date");
define('_CO_SOBJECT_LINK_FROM_EMAIL',"Fra email");
define('_CO_SOBJECT_LINK_FROM_EMAIL_DSC',"");
define('_CO_SOBJECT_LINK_FROM_NAME',"Fra navn");
define('_CO_SOBJECT_LINK_FROM_NAME_DSC',"");
define('_CO_SOBJECT_LINK_FROM_UID',"Fra bruger");
define('_CO_SOBJECT_LINK_FROM_UID_DSC',"");
define('_CO_SOBJECT_LINK_LINK',"Link");
define('_CO_SOBJECT_LINK_LINK_DSC',"");
define('_CO_SOBJECT_LINK_MID',"Modul ID");
define('_CO_SOBJECT_LINK_MID_DSC',"");
define('_CO_SOBJECT_LINK_MID_NAME',"Modul navn ");
define('_CO_SOBJECT_LINK_MID_NAME_DSC',"Navnet på det modul fra, hvis anmodningen orignated");
define('_CO_SOBJECT_LINK_SUBJECT',"Emne");
define('_CO_SOBJECT_LINK_SUBJECT_DSC',"");
define('_CO_SOBJECT_LINK_TO_EMAIL',"Til email");
define('_CO_SOBJECT_LINK_TO_EMAIL_DSC',"");
define('_CO_SOBJECT_LINK_TO_NAME',"Til navn");
define('_CO_SOBJECT_LINK_TO_NAME_DSC',"");
define('_CO_SOBJECT_LINK_TO_UID',"Til bruger");
define('_CO_SOBJECT_LINK_TO_UID_DSC',"");
define('_CO_SOBJECT_MAKE_SELECTION','Foretag et valg...');
define('_CO_SOBJECT_META_DESCRIPTION','Meta Beskrivelse');
define('_CO_SOBJECT_META_DESCRIPTION_DSC','For at hjælpe søgemaskiner, kan du tilpasse meta beskrivelse, som du vil bruge til denne artikel. Hvis du lader dette felt stå tomt, når du opretter en kategori, vil den automatisk blive udfyldt med resuméet for denne artikel.');
define('_CO_SOBJECT_META_KEYWORDS','Meta Keywords');
define('_CO_SOBJECT_META_KEYWORDS_DSC','For at hjælpe søgemaskiner, kan du de søgeord, som du vil bruge til denne artikel. Hvis du lader dette felt stå tomt, når du opretter en artikel, vil den automatisk blive udfyldt med ord fra resumé-området for denne artikel.');
define('_CO_SOBJECT_MODIFY','Redigér');
define('_CO_SOBJECT_MODULE_BUG','Rapporter en fejl for dette modul');
define('_CO_SOBJECT_MODULE_DEMO','Demo Side');
define('_CO_SOBJECT_MODULE_DISCLAIMER','Ansvarsfraskrivelse');
define('_CO_SOBJECT_MODULE_FEATURE','Foreslå en ny funktion til dette modul');
define('_CO_SOBJECT_MODULE_INFO','Modul Udviklings informationer');
define('_CO_SOBJECT_MODULE_RELEASE_DATE','Udgivelsesdato');
define('_CO_SOBJECT_MODULE_STATUS','Status');
define('_CO_SOBJECT_MODULE_SUBMIT_BUG','Indsende en fejlrapport');
define('_CO_SOBJECT_MODULE_SUBMIT_FEATURE','Foreslå en funktion');
define('_CO_SOBJECT_MODULE_SUPPORT','Officiel support-webside');
define('_CO_SOBJECT_NO_OBJECT','Ingen emner at vise.');
define('_CO_SOBJECT_NOT_SELECTED','Intet objekt valgt.');
define('_CO_SOBJECT_PRINT','Print');
define('_CO_SOBJECT_QUICK_SEARCH','Hurtig søgning');
define('_CO_SOBJECT_RATING_DATE','Dato');
define('_CO_SOBJECT_RATING_DIRNAME','Modul');
define('_CO_SOBJECT_RATING_ITEM','Punkt');
define('_CO_SOBJECT_RATING_ITEMID','Punkt ID');
define('_CO_SOBJECT_RATING_NAME','Bruger navn');
define('_CO_SOBJECT_RATING_RATE','Bedøm,');
define('_CO_SOBJECT_RATING_UID','Bruger');
define('_CO_SOBJECT_SAVE_ERROR','Der opstod en fejl under lagring af oplysningeren.');
define('_CO_SOBJECT_SAVE_SUCCESS','Oplysningerne blev gemt.');
define('_CO_SOBJECT_SEND_EMAIL','Send en email');
define('_CO_SOBJECT_SEND_ERROR',"Et problem opstod, da du sendte meddelelsen. Vi undskylder for dette. De bedes kontakte vores webmaster på %s.");
define('_CO_SOBJECT_SEND_LINK_FORM',"Send dette link til en ven");
define('_CO_SOBJECT_SEND_LINK_FORM_DSC',"Du skal blot udfylde nedenstående formular for at dele dette link med en ven.");
define('_CO_SOBJECT_SEND_PM','Send en privat besked');
define('_CO_SOBJECT_SEND_SUCCESS',"Beskeden er sendt med succes.");
define('_CO_SOBJECT_SEND_SUCCESS_INFO',"Tak for at du deler din interesse for vores websted med dine kontaktpersoner.");
define('_CO_SOBJECT_SHORT_URL','Kort URL');
define('_CO_SOBJECT_SHORT_URL_DSC','Når du bruger SEO funktioner i dette modul, kan du angive en kort URL for denne kategori. Dette felt er valgfrit.');
define('_CO_SOBJECT_SORT',"Sorteret efter:");
define('_CO_SOBJECT_SORT_ASC','Stigende ');
define('_CO_SOBJECT_SORT_DESC','Faldende ');
define('_CO_SOBJECT_SUBJECT_DEFAULT',"Et link fra %s");
define('_CO_SOBJECT_SUBMIT','Send');
define('_CO_SOBJECT_TAG_DESCRIPTION_CAPTION',"Beskrivelse");
define('_CO_SOBJECT_TAG_DESCRIPTION_DSC',"Beskrivelse af dette tag (Hvor det vil blive brugt osv...)");
define('_CO_SOBJECT_TAG_TAGID_CAPTION',"Tag navn");
define('_CO_SOBJECT_TAG_TAGID_DSC',"Navn der entydigt identificerer dette tag ");
define('_CO_SOBJECT_TAG_VALUE_CAPTION',"Værdi");
define('_CO_SOBJECT_TAG_VALUE_DSC',"Værdien af denne kode, dvs hvad der vil blive vist for brugeren");
define('_CO_SOBJECT_UPDATE_MODULE','Opdatér modul');
define('_CO_SOBJECT_UPLOAD_IMAGE','Upload et nyt billed :');
define('_CO_SOBJECT_VERSION_HISTORY','Versions historik');
define('_CO_SOBJECT_WARNING_BETA',"Dette modul kommer som det er, uden nogen garantier overhovedet. Dette modul er BETA, hvilket betyder at det stadig er under aktiv udvikling. Denne version er beregnet til <b>Testformål</b> og vi anbefaler <b>stærkt</b> at du ikke bruge det på en levende websted eller i et produktionsmiljø.");
define('_CO_SOBJECT_WARNING_FINAL',"Dette modul kommer som det er, uden nogen garantier overhovedet. Selv om dette modul er ikke beta, er det stadig under aktiv udvikling. Denne version kan bruges i en levende websted eller et produktions-miljø, men dets brug er under dit eget ansvar, hvilket betyder, forfatteren ikke kan gøres ansvarlig.");
define('_CO_SOBJECT_WARNING_RC',"Dette modul kommer som det er, uden nogen garantier overhovedet. Dette modul er en Release Candidate og bør ikke bruges på en produktion hjemmeside. Modulet er stadig under aktiv udvikling og dens anvendelse er under dit eget ansvar, hvilket betyder, forfatteren ikke kan gøres ansvarlig.");
define('_CO_SOBJECT_WEIGHT_FORM_CAPTION','Vægt');
define('_CO_SOBJECT_WEIGHT_FORM_DSC',"");

define('_CO_SOBJECT_ADMIN_VIEW',"Visning");
define('_CO_SOBJECT_EXPORT',"Eksport");
define('_CO_SOBJECT_UPDATE_ALL',"Opdatér alle");
define('_CO_SOBJECT_NO_RECORDS_TO_UPDATE',"Ingen objekter at opdatere");
define('_CO_SOBJECT_NO_RECORDS_UPDATED',"Objekter blevet opdateret !");

define('_CO_SOBJECT_CLONE',"Klon dette objekt"); 

define('_AM_SCONTENT_CATEGORY_VIEW',"Kategori visning");

define('_CO_SOBJECT_BLOCKS_ADDTO_LAYOUT',"Layout: ");
define('_CO_SOBJECT_BLOCKS_ADDTO_LAYOUT_OPTION0',"Horisontalt 1 række");
define('_CO_SOBJECT_BLOCKS_ADDTO_LAYOUT_OPTION1',"Horisontalt 2 rækker");
define('_CO_SOBJECT_BLOCKS_ADDTO_LAYOUT_OPTION2',"Lodret med ikoner");
define('_CO_SOBJECT_BLOCKS_ADDTO_LAYOUT_OPTION3',"Lodret uden ikoner");
define('_CO_SOBJECT_CURRENT_FILE',"Aktuel fil: ");
define('_CO_SOBJECT_URL_FILE_DSC',"Alternativt kan du bruge en webadresse. Hvis du vælger en fil via Browse knappen vil URL blive ignoreret. Du kan bruge taggen (XOOPS_URL) for at udskrive ".XOOPS_URL);
define('_CO_SOBJECT_URL_FILE',"URL: ");
define('_CO_SOBJECT_UPLOAD',"Vælg en fil som skal uploades: ");

define('_CO_SOBJECT_CHANGE_FILE',"<hr/><b>Skift fil.</b><br/>");
define('_CO_SOBJECT_CAPTION',"Billedtekst: ");
define('_CO_SOBJECT_URLLINK_URL',"URL: ");
define('_CO_SOBJECT_DESC',"Beskrivelse");
define('_CO_SOBJECT_URLLINK_TARGET',"Åbn link i:");
define('_CO_SOBJECT_URLLINK_SELF',"Samme vindue");
define('_CO_SOBJECT_URLLINK_BLANK',"Nyt vindue");

define('_CO_SOBJECT_ANY',"Hvilken som helst");
define('_CO_SOBJECT_EDITOR',"Ønsket teksteditor");
define('_CO_SOBJECT_WITH_SELECTED',"Med valgte: ");

?>