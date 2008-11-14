<?php

define('_AM_EXTGALLERY_CATEGORY',"Kategori");
define('_AM_EXTGALLERY_INFORMATION',"Information");
define('_AM_EXTGALLERY_PARENT_CAT',"Moder kategori");
define('_AM_EXTGALLERY_DESC',"Beskrivelse");
define('_AM_EXTGALLERY_PHOTO',"Foto");
define('_AM_EXTGALLERY_WEIGHT',"Vægt");
define('_AM_EXTGALLERY_TITLE',"Titel");

// Main administration menu
define('_AM_EXTGALLERY_GO_TO_MODULE',"Gå til modul");
define('_AM_EXTGALLERY_PREFERENCES',"Indstillinger");
define('_AM_EXTGALLERY_ADMINISTRATION',"Administration");

// Index page
define('_AM_EXTGALLERY_UPDATE',"Opdater");
define('_AM_EXTGALLERY_CHECK_UPDATE_ERROR',"Kan ikke hente den seneste version af eXtGalley.");
define('_AM_EXTGALLERY_UPDATE_KO',"Din eXtGallery version er forældet. Vi anbefaler at hente den nye eXtGallery version på <a href=\"http://www.zoullou.net/\">Zoullou.net</a>.");
define('_AM_EXTGALLERY_UPDATE_OK',"Du kører eXtGallery med de seneste opdateringer for stabilitet og sikkerhed.");
define('_AM_EXTGALLERY_SERVER_CONF',"Server konfiguration");
define('_AM_EXTGALLERY_XOOPS_VERSION',"XOOPS Version");
define('_AM_EXTGALLERY_GRAPH_GD_LIB_VERSION',"Grafik <b>GD</b> bibliotek version");
define('_AM_EXTGALLERY_GRAPH_IM_LIB_VERSION',"Grafik <b>ImageMagick</b> bibliotek version");
define('_AM_EXTGALLERY_GIF_SUPPORT',"GIF support");
define('_AM_EXTGALLERY_JPEG_SUPPORT',"JPEG support");
define('_AM_EXTGALLERY_PNG_SUPPORT',"PNG support");
define('_AM_EXTGALLERY_PUBLIC_ORIG_PATH',"Offentlig original sti");
define('_AM_EXTGALLERY_PUBLIC_LARGE_PATH',"Offentlige store sti");
define('_AM_EXTGALLERY_PUBLIC_MEDIUM_PATH',"Offentlige mellemstor sti");
define('_AM_EXTGALLERY_PUBLIC_THUMB_PATH',"Offentlige thumb sti");
define('_AM_EXTGALLERY_NOT_CREATED',"Ikke oprettet");
define('_AM_EXTGALLERY_NOT_WRITABLE',"Ikke skrivbart");

// Public category page
define('_AM_EXTGALLERY_MODDELETE_PUBLICCAT',"Ændre eller slette offentlige kategori");
define('_AM_EXTGALLERY_MODDELETE_PUBLICCAT_INFO',"Du kan finde en liste over alle kategorier/albums tilgængelige på dit websted. Tallet i slutningen af kategori-navnet er vægten af den kategori.");
define('_AM_EXTGALLERY_ADD_PUBLIC_CAT',"Tilføj en offentlig kategori");
define('_AM_EXTGALLERY_ADD_PUBLIC_CAT_INFO',"Du kan kun tilføje en kategori under kategorier uden foto. Kun gyldig kategorier er mulige at vælge nedenfor.");
define('_AM_EXTGALLERY_NAME',"Navn");
define('_AM_EXTGALLERY_DELETE_CAT_CONFIRM',"Alt indholdet af disse kategori eller album vil blive slettet.");
define('_AM_EXTGALLERY_MOD_PUBLIC_CAT',"Ændre en offentlig kategori");
define('_AM_EXTGALLERY_CAT_IMG',"Kategori Billed");
define('_AM_EXTGALLERY_THUMB',"Thumbnail");
define('_AM_EXTGALLERY_CAT_CREATED',"Kategori dannet");
define('_AM_EXTGALLERY_CAT_MODIFIED',"Kategori ændret");
define('_AM_EXTGALLERY_CAT_DELETED',"Kategori slettet");
define('_AM_EXTGALLERY_NO_CATEGORY_SELECTED',"Ingen kategori valgt");

// Photo page
define('_AM_EXTGALLERY_ADD_BATCH',"Tilføj et parti fotos");
define('_AM_EXTGALLERY_BATCH_PATH',"Parti mappesti");
define('_AM_EXTGALLERY_ADD_BATCH_INFO',"Der er <b>%d</ b> billeder i parti mappe. Ved at trykke på knappen Indsend nedenfor vil alle billeder i parti mappe vil blive føjet til albummet / albummet valgt nedenfor.");
define('_AM_EXTGALLERY_EDITDELETE_PHOTO',"Rediger/Slet foto");
define('_AM_EXTGALLERY_EDITDELETE_PHOTO_INFO',"Vælg den kategori, hvor du ønsker at redigere eller slette billedet.");
define('_AM_EXTGALLERY_PENDING_PHOTO',"Afventende foto");
define('_AM_EXTGALLERY_APPROVE_INFO',"<b>Godkend</b> dette foto");
define('_AM_EXTGALLERY_EDIT_INFO',"<b>Rediger</b> dette foto før godkendelse");
define('_AM_EXTGALLERY_DELETE_INFO',"<b>Slet</b> dette foto");
define('_AM_EXTGALLERY_ACTION',"Handling");
define('_AM_EXTGALLERY_APPROVE',"Godkend");
define('_AM_EXTGALLERY_EDITDELETE_PHOTOTABLE_INFO',"Kun foto, der er afkrydset vil blive ændre eller slettet.");
define('_AM_EXTGALLERY_APPLY_CHANGE',"Anvend ændring");
define('_AM_EXTGALLERY_X_PHOTO_ADDED',"%d foto tilføjet");
define('_AM_EXTGALLERY_X_PHOTO_APPROVED',"%d foto godkendt");
define('_AM_EXTGALLERY_X_PHOTO_DELETED',"%d foto slettet");
define('_AM_EXTGALLERY_X_PHOTO_MODIFIED',"%d foto ændretmodified");
define('_AM_EXTGALLERY_PHOTO_MODIFIED',"Foto ændret");
define('_AM_EXTGALLERY_BATCH_CONTINUE_MESSAGE',"%d foto tilføjet, %d mere. Klik for at fortsætte.");
define('_AM_EXTGALLERY_NOT_AN_ALBUM',"Du skal vælge et gyldig album");
define('_AM_EXTGALLERY_ALBUM',"Album");
define('_AM_EXTGALLERY_NO_PHOTO_IN_BATCH_DIR',"Der er ikke billeder i batch bibliotek");
define('_AM_EXTGALLERY_NO_PHOTO_SELECTED',"Der er ikke valgt noget foto");
define('_AM_EXTGALLERY_NO_PHOTO_IN_THIS_ALBUM',"Ingen billeder i album");

// Permissions
define('_AM_EXTGALLERY_PUBLIC_PERM_MASK',"Offentlige tilladelser maske");
define('_AM_EXTGALLERY_PUBLIC_PERM_MASK_INFO',"Du kan her indstille standard-mask for tilladelser, der skal gælde for nye kategorier. Vær forsigtig ikke at give for mange tilladelser her, fordi alle nye kategorier vil få dem.");
define('_AM_EXTGALLERY_GROUP_NAME',"Gruppe navn");
define('_AM_EXTGALLERY_CAN_ACCESS',"Kan få adgang til");
define('_AM_EXTGALLERY_CAN_RATE',"Kan bedømme billeder");
define('_AM_EXTGALLERY_CAN_SEND_ECARD',"Kan sende eKort fra offentligt galleri");
define('_AM_EXTGALLERY_CAN_DOWNLOAD',"Kan downloade billeder");
define('_AM_EXTGALLERY_CAN_DOWNLOAD_ORIG',"Kan downloade originale billeder");
define('_AM_EXTGALLERY_CAN_UPLOAD',"Kan uploade billeder til offentligt album");
define('_AM_EXTGALLERY_AUTOAPPROVE',"Offentlige foto skal ikke godkendes af admin");
define('_AM_EXTGALLERY_DISPLAYED',"Vis eller ikke dette album");

define('_AM_EXTGALLERY_PERM_MASK_UPDATED',"Tilladelses maske opdateret");

define('_AM_EXTGALLERY_ACCESS_PERM',"Adgangs tilladelse");
define('_AM_EXTGALLERY_ACCESS_PERM_DESC',"Vælg kategorier som man harlov til at ses");
define('_AM_EXTGALLERY_ACCESS_PERM_INFO',"Denne tilladelse giver dig mulighed for at begrænse adgang til kategorien. En bruger kan ikke se en kategori, som han ikke er tilladt at få adgang til.");

define('_AM_EXTGALLERY_RATE_PERM',"Bedømmelses tilladelse");
define('_AM_EXTGALLERY_RATE_PERM_DESC',"Vælg kategorier, hvor billeder kan blive bedømt");
define('_AM_EXTGALLERY_RATE_PERM_INFO',"Denne tilladelse giver dig mulighed for at begrænse bedømmelses funktion. En afvist bruger kan ikke bedømme i en kategori, men kan se karakteren på billederne.");

define('_AM_EXTGALLERY_PUBLIC_ECARD',"Offentlige eKort tilladelse");
define('_AM_EXTGALLERY_PUBLIC_ECARD_DESC',"Vælg kategorier, hvor foto kan sendes med eCard");
define('_AM_EXTGALLERY_PUBLIC_ECARD_INFO',"Denne tilladelse giver dig mulighed for at begrænse eKort funktion. Alle eKort afsenderes IP er logget.");

define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD',"Offentlige download tilladelse");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_DESC',"Vælg kategorier, hvor billeder kan downloades");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_INFO',"Denne tilladelse giver dig mulighed for at begrænse download af store billede. Hvis en bruger er tilladt til at downloade, han kan få adgang til det store billede, hvis \"Gem stort foto\" er aktiverer i præferencer.");

define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG',"Download original tilladelser");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG_DESC',"Vælg kategorier, hvor brugeren kan downloade det originale foto. <br /> Gem originale foto-funktionen skal være aktiveret i Systemindstillinger for at hente original og gruppen skal have ret til at downloade.");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG_INFO',"Denne tilladelse giver dig mulighed for at begrænse overførslen af det oprindelige billede. Hvis en bruger er tilladt at downloade det originale, kan han få adgang til det oprindelige billede (uden kanter og vandmærke, og ikke uændres i størrelse), hvis \"Gem originale foto\" er aktiverer i præferencer.");

define('_AM_EXTGALLERY_PUBLIC_UPLOAD',"Offentlidt upload tilladelse");
define('_AM_EXTGALLERY_PUBLIC_UPLOAD_DESC',"Vælg kategorier, hvor brugeren kan uploade");
define('_AM_EXTGALLERY_PUBLIC_UPLOAD_INFO',"Denne tilladelse giver dig mulighed for at begrænse upload / indsendelse af nye image i offentlige album.");

define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE',"Offentlig auto godkende tilladelser");
define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE_DESC',"Vælg kategorier, hvor fotografiet ikke behøver godkendelse");
define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE_INFO',"Denne tilladelse giver dig mulighed for at ikke vise indsendt billeder, før de er godkendt af en admin. Vælg kategori, hvor brugeren må uploade uden godkendelse. Brugere skal have lov til at sende foto til at aktivere denne tilladelse.");

define('_AM_EXTGALLERY_PUBLIC_DISPLAYED',"Vis album tilladelser");
define('_AM_EXTGALLERY_PUBLIC_DISPLAYED_DESC',"Vælg kategorier, der vil blive vist");
define('_AM_EXTGALLERY_PUBLIC_DISPLAYED_INFO',"Denne tilladelse giver dig mulighed for ikke at vise en kategori, men give adgang til billederne i kategorien. Du kan bruge billederne i disse kategorier til indholdet på dit websted.");

// Watermark and border page
define('_AM_EXTGALLERY_AVAILABLE_FONT',"Tilgængelige fonte");
define('_AM_EXTGALLERY_ADD_FONT',"Tilføj font (TTF)");
define('_AM_EXTGALLERY_FONT_FILE',"Font fil");
define('_AM_EXTGALLERY_FONT_MANAGMENT',"Font styring");
define('_AM_EXTGALLERY_ADD_FONT_LINK',"Der er %s fonte tilgængelige. <a href=\"watermark-border.php?op=uploadfont\">Klik her</a> for at tilføje det");
define('_AM_EXTGALLERY_WATERMARK_FREETYPE_WARN',"<b> PHP skal compiles med FreeType understøttelse for at aktivere vandmærkning. Se <a href=\"http://www.freetype.org/\"> FreeType.org </ a> for yderligere oplysninger. </ b>");
define('_AM_EXTGALLERY_WATERMARK_CONF',"Vandmærke konfiguration");
define('_AM_EXTGALLERY_FONT',"Font");
define('_AM_EXTGALLERY_WATERMARK_TEXT',"Vandmærke tekst");
define('_AM_EXTGALLERY_POSITION',"Placering");
define('_AM_EXTGALLERY_TOP_LEFT',"Top venstre");
define('_AM_EXTGALLERY_TOP_RIGHT',"Top højre");
define('_AM_EXTGALLERY_BOTTOM_LEFT',"Nederst venstre");
define('_AM_EXTGALLERY_BOTTOM_RIGHT',"Nederst højre");
define('_AM_EXTGALLERY_TOP_CENTER',"Top midte");
define('_AM_EXTGALLERY_BOTTOM_CENTER',"Nederts midte");
define('_AM_EXTGALLERY_LEFT_CENTER',"Venstre midte");
define('_AM_EXTGALLERY_RIGHT_CENTER',"Højre midte");
define('_AM_EXTGALLERY_CENTER_CENTER',"Midte midte");
define('_AM_EXTGALLERY_WATERMARK_COLOR',"Vandmærke farve");
define('_AM_EXTGALLERY_WATERMARK_FONT_SIZE',"Vandmærke skriftstørrelse (px)");
define('_AM_EXTGALLERY_WATERMARK_PADDING',"Vandmærke polstring (px)");
define('_AM_EXTGALLERY_BORDER_CONF',"Kant konfiguration");
define('_AM_EXTGALLERY_INNER_BORDER_COLOR',"Inder kant farve");
define('_AM_EXTGALLERY_INNER_BORDER_SIZE',"Inder kant størrelse (px)");
define('_AM_EXTGALLERY_OUTER_BORDER_COLOR',"Ydre kant farve");
define('_AM_EXTGALLERY_OUTER_BORDER_SIZE',"Ydre kant størrelse (px)");
define('_AM_EXTGALLERY_WATERMARK_BORDER_EXEMPLE',"Vandmærke og kant eksempel");
define('_AM_EXTGALLERY_WATERMARK_BORDER_EXEMPLE_INFO',"Opdater din browser for at tømme cachen, hvis det opdaterede billedet ikke bliver vist.");
define('_AM_EXTGALLERY_FONT_ADDED',"Font tilføjet");
define('_AM_EXTGALLERY_CONFIGURATION_SAVED',"Konfiguration gemt");
define('_AM_EXTGALLERY_PRINT_SUBMITTER_UNAME',"Print tilføjer brugernavn");

?>
