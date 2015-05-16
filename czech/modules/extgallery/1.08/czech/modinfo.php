<?php

define('_MI_EXTGAL_NAME',"eXtGallery");
define('_MI_EXTGAL_DESC',"eXtGallery je výkonná galerie pro XOOPS");

// Main menu
define('_MI_EXTGALLERY_USERALBUM',"Mé obrázky");
define('_MI_EXTGALLERY_PUBLIC_UPLOAD',"Přidat obrázek");

// Main administration menu
define('_MI_EXTGALLERY_INDEX',"Přehled");
define('_MI_EXTGALLERY_PUBLIC_CAT',"Kategorie/Alba");
define('_MI_EXTGALLERY_PHOTO',"Obrázky");
define('_MI_EXTGALLERY_PERMISSIONS',"Oprávnění");
define('_MI_EXTGALLERY_WATERMARK_BORDER',"Vodoznaky &amp; okraje");
define('_MI_EXTGALLERY_SLIDESHOW',"Slideshow");
define('_MI_EXTGALLERY_EXTENTION',"Rozšíření");

// Module options
define('_MI_EXTGAL_DISP_TYPE',"Display type");
define('_MI_EXTGAL_DISP_TYPE_DESC',"Select the display type for photo");
define('_MI_EXTGAL_NB_COLUMN',"Počet sloupců v albu");
define('_MI_EXTGAL_NB_COLUMN_DESC',"Určuje, kolik se zobrazí sloupců náhledů.");
define('_MI_EXTGAL_NB_LINE',"Počet rádek v albu");
define('_MI_EXTGAL_NB_LINE_DESC',"Určujě, kolik se zobrazí řádek nahledů.");
define('_MI_EXTGAL_SAVE_L',"Uložit velký obrázek");
define('_MI_EXTGAL_SAVE_L_DESC',"Jestliže chcete ukládat veliké obrázky, které jsou větší než střední velikost. Pokud se tyto obrázky uloží, vedle fotografie se zobrazí odkaz pro jejich stažení.");
define('_MI_EXTGAL_M_WIDTH',"Šířka střední fotografie");
define('_MI_EXTGAL_M_WIDTH_DESC',"Nahrávaná fotografie bude zmenšena na tuto velikost. Toto je maximální velikost, zachovává se poměr stran.");
define('_MI_EXTGAL_M_HEIGTH',"Výška střední fotografie");
define('_MI_EXTGAL_M_HEIGTH_DESC',"Nahrávaná fotografie bude zmenšena na tuto velikost. Toto je maximální velikost, zachovává se poměr stran.");
define('_MI_EXTGAL_T_WIDTH',"Šířka náhledu");
define('_MI_EXTGAL_T_WIDTH_DESC',"Maximání šířka náhledu.");
define('_MI_EXTGAL_T_HEIGTH',"Výška náhledu");
define('_MI_EXTGAL_T_HEIGTH_DESC',"Maximální výška náhledu.");
define('_MI_EXTGAL_M_WATERMARK',"Povolit vodoznak u střední velikosti");
define('_MI_EXTGAL_M_WATERMARK_DESC',"Tímto nastavení povolíte vkládání vodoznaků do fotografií. Nezapomeňte nejprve nastavit vodoznaky.");
define('_MI_EXTGAL_M_BORDER',"Povolit okraje u střední velikosti");
define('_MI_EXTGAL_M_BORDER_DESC',"Tímto nastavením povolíte vkládání okrajů do nových fotografií. Nezapomeňte nejprve nastavit vodoznaky.");
define('_MI_EXTGAL_L_WATERMARK',"Povolit vodoznak u velkých fotografií");
define('_MI_EXTGAL_L_WATERMARK_DESC',"Tímto nastevením povolíte vkládání vodoznaků do velkých fotografií. Nezapomeňte nejprve nastavit vodoznaky.");
define('_MI_EXTGAL_L_BORDER',"Povolit okraje u velkých fotografií");
define('_MI_EXTGAL_L_BORDER_DESC',"Tímto nastvením povolíte vkládání okrajů do velkých fotografií. Nezapomeňte nejprve nastavit vodoznaky.");
define('_MI_EXTGAL_NAME_PATTERN',"Auto photo description pattern");
define('_MI_EXTGAL_NAME_PATTERN_DESC',"If you don't provide a description for your photo on public side or batch upload on admin side, the file name of the photo is used to make an auto description.<br />With a \"Tournament-06-may-2006_1.jpg\" photo name, you will get \"Tournament 06 may 2006\" as description");
define('_MI_EXTGAL_DISPLAY_EXTRA',"Zobrazit 'Rozšířené informace'");
define('_MI_EXTGAL_DISPLAY_EXTRA_DESC',"This feature allow you to add more information on submit form. With this feature you can add paypal bouton for each photo for exemple.");
define('_MI_EXTGAL_ALLOW_HTML',"Povolit HTML");
define('_MI_EXTGAL_ALLOW_HTML_DESC',"Tímto nastevením povolíte použití HTML v popisech fotografií.");
define('_MI_EXTGAL_HIDDEN_FIELD',"Tato konstanta se používá pro odstranění hlášek PHP. Tento text není použitý v modulu.");
define('_MI_EXTGAL_SAVE_ORIG',"Ukládat originální obrázky");
define('_MI_EXTGAL_SAVE_ORIG_DESC',"Tímto nastavením povolíte ukládání fotografií ještě před jejich označením vodoznakem a okrajem. Pokud chcete povolit tuto možnost <b>musí</b> být také povolena volba \"Uložit velké fotografie\".<br /><b>Stahování originální fotografií musí být povoleno v nastavení oprávnění \"Povolit stahování originálů\"</b>.<br />Pokud nemá uživatel toto oprávnění, bude velká fotografie odeslána.");
define('_MI_EXTGAL_ADM_NBPHOTO',"Počet obrázků na stránce (administrace)");
define('_MI_EXTGAL_ADM_NBPHOTO_DESC',"Určuje kolik fotografií se zobrazí v tabulce pro schvalování a upravování.");
define('_MI_EXTGAL_GRAPHLIB',"Grafická knihovna");
define('_MI_EXTGAL_GRAPHLIB_DESC',"Zvolte jakou grafickou knihovnu chcete použít. Při nastavení buďte opatrní, pokud si nejste jistí, nechte nastavení beze změny.");
define('_MI_EXTGAL_GRAPHLIB_PATH',"Cesta ke knihovně");
define('_MI_EXTGAL_GRAPHLIB_PATH_DESC',"Cesta ke grafické knihovně na serveru <b>SE</b> zpětným lomítkem.");
define('_MI_EXTGAL_ENABLE_RATING',"Povolit hodnocení fotografií");
define('_MI_EXTGAL_ENABLE_RATING_DESC',"Tímto nastavením povolíte nebo zakážete hodnocení fotografií pro všechny kategorie.");
define('_MI_EXTGAL_DISP_PH_TITLE',"Nadpis fotografie");
define('_MI_EXTGAL_DISP_PH_TITLE_DESC',"This option allows to choose if one wants to post the title of the photograph or not, in the sight of the album.");
define('_MI_EXTGAL_DISP_CAT_IMG',"Obrázek kategorie");
define('_MI_EXTGAL_DISP_CAT_IMG_DESC',"This option makes it possible to choose if he one wants to post the image représentant the catégorie or not.");
define('_MI_EXTGAL_M_QUALITY',"Medium photo quality");
define('_MI_EXTGAL_M_QUALITY_DESC',"Quality for medium photo from 0 (bad) to 100 (good)");
define('_MI_EXTGAL_T_QUALITY',"Thumb photo quality");
define('_MI_EXTGAL_T_QUALITY_DESC',"Quality for thumb photo from 0 (bad) to 100 (good)");
define('_MI_EXTGALLERY_ALBUM',"Album");
define('_MI_EXTGAL_EXT_UPLOAD',"Ovládací panel");
define('_MI_EXTGAL_EXT_UPLOAD_DESC',"Jaký ovládací panel použít pro nahrávání obrázků? Pamatujte, že rozšířený ovládací panel vyžaduje nainstalovanou Javu.");
define('_MI_EXTGALLERY_EXTENDED',"Rozšířené");
define('_MI_EXTGALLERY_STANDARD',"Základní");

// Bloc Name
define('_MI_EXTGAL_B_RAND',"Náhodné fotografie");
define('_MI_EXTGAL_B_LAST',"Nejnovjěší fotografie");
define('_MI_EXTGAL_B_MOST',"Populární fotografie");
define('_MI_EXTGAL_B_TOPR',"Nejlépe hodnocené fotografie");
define('_MI_EXTGAL_B_TOPE',"Nejlépe hodnocené pohlednice");
define('_MI_EXTGAL_B_RANDSS',"Náhodné fotografie (Slideshow)");
define('_MI_EXTGAL_B_LASTSS',"Nejnovější fotografie (Slideshow)");
define('_MI_EXTGAL_B_MOSTSS',"Populární fotografie (Slideshow)");
define('_MI_EXTGAL_B_TOPRSS',"Nejlépe hodnocené fotografie (Slideshow)");
define('_MI_EXTGAL_B_TOPESS',"Nejlépe hodnocení pohlednice (Slideshow)");

// Notifications
define('_MI_EXTGAL_GLOBAL_NOTIFY',"Hlavní");
define('_MI_EXTGAL_GLOBAL_NOTIFYDSC',"GLOBAL_NOTIFYDSC");
define('_MI_EXTGAL_ALBUM_NOTIFY',"Album");
define('_MI_EXTGAL_ALBUM_NOTIFYDSC',"_MI_EXTGAL_CAT_NOTIFYDSC");
define('_MI_EXTGAL_PHOTO_NOTIFY',"Fotografie");
define('_MI_EXTGAL_PHOTO_NOTIFYDSC',"_MI_EXTGAL_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFY',"Nová fotografie");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYCAP',"Upozorni mne při vložení nové fotografie.");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYDSC',"NEW_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYSBJ',"Vložení nové fotografie");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFY',"Upozorni mne po schválení nové fotografie.");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYCAP',"Upozorni mne po schválení nové fotografie.");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYSBJ',"Schválení nové fotografie.");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFY',"Upozorni mne při vložení nové fotografie do tohoto alba.");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYCAP',"Upozorni mne při vložení nové fotografie do tohoto alba.");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYSBJ',"Vložení nové fotografie");
?>