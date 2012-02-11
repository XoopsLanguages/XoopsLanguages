<?php
######### (liaise) version 1.0  additions #########
define("_AM_SAVE","Opslaan");
define("_AM_COPIED","%s kopieren");
define("_AM_DBUPDATED","Database succesvol bijgewerkt!");
define("_AM_ELE_CREATE","Formulierelement aanmaken");
define("_AM_ELE_EDIT","Formulierelement bewerken: %s");

define("_AM_ELE_CAPTION","Onderschrift");
define("_AM_ELE_DEFAULT","Standaardwaarde");
define("_AM_ELE_DETAIL","Detail");
define("_AM_ELE_REQ","Verplicht");
define("_AM_ELE_ORDER","Volgorde");
define("_AM_ELE_DISPLAY","Weergave");

define("_AM_ELE_TEXT","Tekstregel");
define("_AM_ELE_TEXT_DESC","{UNAME} toont gebruikersnaam;<br />{EMAIL} toont e-mailadres gebruiker.");
define("_AM_ELE_TAREA","Tekstvak");
define("_AM_ELE_SELECT","Selecties");
define("_AM_ELE_CHECK","Selectievakken");
define("_AM_ELE_RADIO","keuzeknoppen");
define("_AM_ELE_YN","Ja/nee keuzeknoppen");

define("_AM_ELE_SIZE","Grootte");
define("_AM_ELE_MAX_LENGTH","Maximum lengte");
define("_AM_ELE_ROWS","Rijen");
define("_AM_ELE_COLS","Kolommen");
define("_AM_ELE_OPT","Opties");
define("_AM_ELE_OPT_DESC","Vink de selectievakken voor het selecteren van de standaardwaarden");
define("_AM_ELE_OPT_DESC1","<br />Alleen de eerste is aangevinkt wanneer meerdere keuzes niet is toegestaan");
define("_AM_ELE_OPT_DESC2","Selecteer de standaardwaarde door het selecteren van de keuzeknoppen");
define("_AM_ELE_ADD_OPT","%s opties toevoegen");
define("_AM_ELE_ADD_OPT_SUBMIT","Toevoegen");
define("_AM_ELE_SELECTED","Geselecteerd");
define("_AM_ELE_CHECKED","Gekozen");
define("_AM_ELE_MULTIPLE","Meerdere selecties toestaan");

define("_AM_ELE_CONFIRM_DELETE","Het formulierelement verwijderen?");

######### (liaise) version 1.1 #########
define("_AM_ELE_OTHER", 'Voor de optie "Anders", plaats {OTHER|*nummer*} in 1 van de tekstvakken. b.v. {OTHER|30} creert een tekstvak voor een breedte van 30 karakters.');

######### (liaise) version 1.2 additions #########
define("_AM_FORM_LISTING", "Contact Form Listing");
define("_AM_FORM_ORDER","Weergavevolgorde");
define("_AM_FORM_ORDER_DESC","0 = formulier verbergen");
define("_AM_FORM_TITLE", "Titel formulier");
define("_AM_FORM_PERM", "Groepen die dit formulier mogen gebruiken");
define("_AM_FORM_SENDTO", "Verzenden aan");
define("_AM_FORM_SENDTO_ADMIN", "E-mail webmaster");
define("_AM_FORM_SEND_METHOD", "Verzendmethode");
define("_AM_FORM_SEND_METHOD_DESC", "Informatie kan niet verzonden worden via een privebericht wanneer het formulier wordt verzonden aan "._AM_FORM_SENDTO_ADMIN." of verstuurd wordt door anonieme bezoekers");
define("_AM_FORM_SEND_METHOD_MAIL", "E-mail");
define("_AM_FORM_SEND_METHOD_PM", "Prive bericht");
define("_AM_FORM_DELIMETER", "Scheiding tussen selectievakken en keuzeknoppen");
define("_AM_FORM_DELIMETER_SPACE", "Witte ruimte");
define("_AM_FORM_DELIMETER_BR", "Scheidingslijn");
define("_AM_FORM_SUBMIT_TEXT", "Tekst op knop om op te slaan");
define("_AM_FORM_DESC", "Omschrijving formulier");
define("_AM_FORM_DESC_DESC", "Tekst die wordt weergegeven op de hoofdpagina wanneer meer dan 1 formulier is vermeld.");
define("_AM_FORM_INTRO", "Introductie formulier");
define("_AM_FORM_INTRO_DESC", "Tekst die wordt weergegeven op de formulierpagina.");
define("_AM_FORM_WHERETO", "URL om naartoe te gaan nadat het formulier is ingediend");
define("_AM_FORM_WHERETO_DESC", "Laat dit veld leeg om naar de hoofdpagina van de site te gaan; {SITE_URL} toont ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM", "Formulierinstellingen bewerken");
define("_AM_FORM_ACTION_EDITELEMENT", "formulierelementen bewerken");
define("_AM_FORM_ACTION_CLONE", "Formulier klonen");

define("_AM_FORM_NEW", "Formulier aanmaken");
define("_AM_FORM_EDIT", "Formulier: %s bewerken");
define("_AM_FORM_CONFIRM_DELETE", "Zeker weten om dit formulier te verwijderen met alle formulierelementen?");

define("_AM_ID", "ID");
define("_AM_ACTION", "Actie");
define("_AM_RESET_ORDER", "Volgorde bijwerken");
define("_AM_SAVE_THEN_ELEMENTS", "Opslaan en formulierelementen wijzigen");
define("_AM_SAVE_THEN_FORM", "Opslaan en formulieren instellingen wijzigen");
define("_AM_NOTHING_SELECTED", "Niets geselecteerd.");
define("_AM_GO_CREATE_FORM", "Maak eerst een formulier aan.");

define("_AM_ELEMENTS_OF_FORM", "Formulierelementen van %s");
define("_AM_ELE_APPLY_TO_FORM", "Formulier toepassen");
define("_AM_ELE_HTML", "Platte tekst / HTML");

######### (liaise) version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG", "Versie van XOOPS komt niet overeen met de benodigde versie. xforms werkelijk mogelijk niet correct.");
define("_AM_ELE_UPLOADFILE","Bestand uploaden");
define("_AM_ELE_UPLOADIMG","Afbeelding uploaden");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","Maximum breedte (pixels)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","Maximum hoogte (pixels)");
define("_AM_ELE_UPLOAD_MAXSIZE","Maximum bestandsgrootte (bytes)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 bytes");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = geen limiet");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","Toegestande bestandsextensies");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","Bestandsextensies scheiden met een |, hoofdlettergevoelig. b.v. 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","Toegestane MIME types");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","MIME types scheiden met een  |, hoofdlettergevoelig. b.v. 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","Leeglaten voor geen limiet (niet aangeraden voor veiligheidsredenen)");
define("_AM_ELE_UPLOAD_SAVEAS","Geladen bestand toevoegen aan");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","E-mail bijgevoegd bestand");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","Upload map");

######### (xforms) version 1.0 additions ##########
define("_AM_IMPORT_SUCCES", "xForms heeft alle liaise formulieren succesvol geimporteerd.");
define("_AM_IMPORT_FAILED", "ERROR: xForms heeft alle liaise formulieren NIET succesvol geimporteerd.");
define("_AM_IMPORT_NFND", "Liaise is niet gevonden als module!");

?>