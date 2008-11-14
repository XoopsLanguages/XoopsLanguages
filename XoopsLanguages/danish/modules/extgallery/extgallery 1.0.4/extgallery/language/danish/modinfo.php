<?php

define('_MI_EXTGAL_NAME',"eXtGallery");
define('_MI_EXTGAL_DESC',"eXtGallery er et kraftfuldt web galleri modul til Xoops");

// Main menu
define('_MI_EXTGALLERY_USERALBUM',"Mit album");
define('_MI_EXTGALLERY_PUBLIC_UPLOAD',"Upload offentligt");

// Main administration menu
define('_MI_EXTGALLERY_INDEX',"Indeks");
define('_MI_EXTGALLERY_PUBLIC_CAT',"Kategori/Album");
define('_MI_EXTGALLERY_PHOTO',"Foto");
define('_MI_EXTGALLERY_PERMISSIONS',"Rettigheder");
define('_MI_EXTGALLERY_WATERMARK_BORDER',"Vandmærke &amp; Kant");

// Module options
define('_MI_EXTGAL_NB_COLUMN',"Kolonne nummer på albummet");
define('_MI_EXTGAL_NB_COLUMN_DESC',"Hvor mange kolonner anvendes til at vise thumbnails");
define('_MI_EXTGAL_NB_LINE',"Line nummer på album");
define('_MI_EXTGAL_NB_LINE_DESC',"Hvor mange linier bruges til at vise thumbnails");
define('_MI_EXTGAL_SAVE_L',"Gem stort foto");
define('_MI_EXTGAL_SAVE_L_DESC',"Vil du gemme store billeder, hvis de er større end medium konfiguration. Hvis du gemmer disse foto, vil download-linket pege på dem på foto side");
define('_MI_EXTGAL_M_WIDTH',"Bredde for mellemstore foto");
define('_MI_EXTGAL_M_WIDTH_DESC',"Foto vil blive ændret til at have denne værdi som maksimal bredde");
define('_MI_EXTGAL_M_HEIGTH',"Højde for mellemstore foto");
define('_MI_EXTGAL_M_HEIGTH_DESC',"Foto vil blive ændret til at have denne værdi som maksimal højde");
define('_MI_EXTGAL_T_WIDTH',"Bredde for thumbnail");
define('_MI_EXTGAL_T_WIDTH_DESC',"Største bredde for thumbnail");
define('_MI_EXTGAL_T_HEIGTH',"Højde på thumbnail");
define('_MI_EXTGAL_T_HEIGTH_DESC',"Maksimum højde på thumbnail");
define('_MI_EXTGAL_M_WATERMARK',"Aktiver vandmærke for mellemstore foto");
define('_MI_EXTGAL_M_WATERMARK_DESC',"Denne mulighed vil aktivere vandmærke funktion for nye foto. Du skal konfigurere vandmærke indstilling.");
define('_MI_EXTGAL_M_BORDER',"Aktiver kant for mellemstore foto");
define('_MI_EXTGAL_M_BORDER_DESC',"Denne mulighed vil aktivere kant funktion for nye foto. Du skal konfigurere kant indstilling.");
define('_MI_EXTGAL_L_WATERMARK',"Aktiver vandmærke for stort billede");
define('_MI_EXTGAL_L_WATERMARK_DESC',"Denne mulighed vil aktivere vandmærke funktion for nye foto. Du skal konfigurere vandmærke indstilling.");
define('_MI_EXTGAL_L_BORDER',"Aktiver kant for stort billede");
define('_MI_EXTGAL_L_BORDER_DESC',"Denne mulighed vil aktivere kant funktion for nye foto. Du skal konfigurere kant indstilling.");
define('_MI_EXTGAL_NAME_PATTERN',"Auto foto beskrivelse mønster");
define('_MI_EXTGAL_NAME_PATTERN_DESC',"Hvis du ikke giver en beskrivelse for dit foto på den offentlig side eller batch upload på admin side, filnavnet på billedet bruges til at danne en auto beskrivelse. <br /> Med et \"Turnerings-06-May-2006_1 . jpg\" foto navn, vil du få \"Tournament 06 mai 2006 \" som beskrivelse");
define('_MI_EXTGAL_DISPLAY_EXTRA',"Vis ekstra felt");
define('_MI_EXTGAL_DISPLAY_EXTRA_DESC',"Denne funktion giver dig mulighed for at tilføje flere oplysninger til form. Med denne funktion kan du tilføje paypal knap for hvert foto for eksempel.");
define('_MI_EXTGAL_ALLOW_HTML',"Tillad HTML");
define('_MI_EXTGAL_ALLOW_HTML_DESC',"Tillad eller ikke tillade HTML i beskrivelsen og ekstra felt.");
define('_MI_EXTGAL_HIDDEN_FIELD',"Denne konstant bruges kun til at fjerne PHP varsel. Denne tekst er ikke brugt i modulet");
define('_MI_EXTGAL_SAVE_ORIG',"Gem originale foto");
define('_MI_EXTGAL_SAVE_ORIG_DESC',"Denne indstilling giver dig mulighed for at gemme uploadet foto, inden vandmærket og kanten dannes, hvis en af disse muligheder er aktiveret for stort billede. \"Gem stort foto\" funktionen <b>skal</b> være aktiveret for at aktivere denne funktion. <br /> <b>Denne oprindelige version vil kunne downloades afhængig af gruppe tilladelser for  \"Download oprindelige tilladelser\" </b>. <br /> Hvis en bruger har ikke tilladelse til at hente originalen, vil det \"store\" foto vil blive sendt.");
define('_MI_EXTGAL_ADM_NBPHOTO',"Foto nummer af side på admin side");
define('_MI_EXTGAL_ADM_NBPHOTO_DESC',"Indstil antallet af foto, der vil blive vist på godkende og redigere tabellen.");
define('_MI_EXTGAL_GRAPHLIB',"Grafisk bibliotek");
define('_MI_EXTGAL_GRAPHLIB_DESC',"Vælg det grafiske bibliotek, du vil bruge. Være forsigtig dette er en avanceret mulighed, ændre ikke den, hvis du ikke ved hvad du gør.");
define('_MI_EXTGAL_GRAPHLIB_PATH',"Grafisk bibliotek sti");
define('_MI_EXTGAL_GRAPHLIB_PATH_DESC',"Stien til den grafiske bibliotek på serveren <b>MED</b> skråstreg.");
define('_MI_EXTGAL_ENABLE_RATING',"Aktiver foto bedømmelse");
define('_MI_EXTGAL_ENABLE_RATING_DESC',"Denne mulighed giver dig mulighed for globalt at aktivere eller deaktivere bedømmelses funktion.");

define('_MI_EXTGAL_DISP_PH_TITLE',"Foto titel");
define('_MI_EXTGAL_DISP_PH_TITLE_DESC',"Denne indstilling gør det muligt at vælge, om man ønsker at skrive titlen på foto eller ej, i synet af albummet.");
define('_MI_EXTGAL_DISP_CAT_IMG',"Kategoribillede");
define('_MI_EXTGAL_DISP_CAT_IMG_DESC',"Denne indstilling gør det muligt at vælge, hvis man ønsker at sende billedet der repræsentere kategorier eller ej.");

// Notifications
define('_MI_EXTGAL_GLOBAL_NOTIFY',"Global underretning");
define('_MI_EXTGAL_GLOBAL_NOTIFYDSC',"GLOBAL_NOTIFYDSC");
define('_MI_EXTGAL_ALBUM_NOTIFY',"Album underretning");
define('_MI_EXTGAL_ALBUM_NOTIFYDSC',"_MI_EXTGAL_CAT_NOTIFYDSC");
define('_MI_EXTGAL_PHOTO_NOTIFY',"Foto underretningnotification");
define('_MI_EXTGAL_PHOTO_NOTIFYDSC',"_MI_EXTGAL_PHOTO_NOTIFYDSC");

define('_MI_EXTGAL_NEW_PHOTO_NOTIFY',"Nyt foto");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYCAP',"Giv mig besked, når et nyt foto er tilføjet");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYDSC',"NEW_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYSBJ',"Nye foto tilføjet");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFY',"Giv mig besked, når et nyt foto er afventende");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYCAP',"Giv mig besked, når et nyt foto er afventende");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYSBJ',"Nyt afventende foto");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFY',"Giv mig besked, når et nyt foto er tilføjet i dette album");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYCAP',"Giv mig besked, når et nyt foto er tilføjet i dette album");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYSBJ',"Nye foto tilføjet");
?>