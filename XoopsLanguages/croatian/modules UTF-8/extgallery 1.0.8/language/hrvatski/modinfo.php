<?php
// prijevod na hrvatski: Ivan Kosak (www.xoopshr.org) 14.2.2009

define('_MI_EXTGAL_NAME',"eXtGallery");
define('_MI_EXTGAL_DESC',"eXtGallery je moćan modul web galerije za XOOPS");

// Main menu
define('_MI_EXTGALLERY_USERALBUM',"Moj album");
define('_MI_EXTGALLERY_PUBLIC_UPLOAD',"Javni upload");

// Main administration menu
define('_MI_EXTGALLERY_INDEX',"Popis");
define('_MI_EXTGALLERY_PUBLIC_CAT',"Kategorija/Albumi");
define('_MI_EXTGALLERY_PHOTO',"Fotografije");
define('_MI_EXTGALLERY_PERMISSIONS',"Dozvole");
define('_MI_EXTGALLERY_WATERMARK_BORDER',"Vodeni žig &amp; Obrub");
define('_MI_EXTGALLERY_SLIDESHOW',"Slideshow");
define('_MI_EXTGALLERY_EXTENTION',"Dodatak");

// Module options
define('_MI_EXTGAL_DISP_TYPE',"Vrsta prikaza");
define('_MI_EXTGAL_DISP_TYPE_DESC',"Izaberite vrstu prikaza za fotografiju");
define('_MI_EXTGAL_NB_COLUMN',"Broj stupaca u svakom albumu");
define('_MI_EXTGAL_NB_COLUMN_DESC',"Postavlja broj stupaca za prikazivanje fotografija u pogledu albuma");
define('_MI_EXTGAL_NB_LINE',"Broj linija u svakom albumu");
define('_MI_EXTGAL_NB_LINE_DESC',"Postavlja broj linija za prikazivanje fotografija u pogledu albuma");
define('_MI_EXTGAL_SAVE_L',"Spremi veliku fotografiju");
define('_MI_EXTGAL_SAVE_L_DESC',"Ako spremate velike fotografije - veće od srednjih  - download link će pokazivati na njih na stranici fotografije");
define('_MI_EXTGAL_M_WIDTH',"Širina za srednje fotografije");
define('_MI_EXTGAL_M_WIDTH_DESC',"Fotografije će promjeniti veličinu na ovu maksimalnu širinu - u pixelima");
define('_MI_EXTGAL_M_HEIGTH',"Visina za srednju fotografiju");
define('_MI_EXTGAL_M_HEIGTH_DESC',"Fotografija će promjeniti veličinu na ovu maksimalnu visinu - u pixelima");
define('_MI_EXTGAL_T_WIDTH',"Širina za minijature fotografija");
define('_MI_EXTGAL_T_WIDTH_DESC',"Maksimalna širina za minijature fotografija");
define('_MI_EXTGAL_T_HEIGTH',"Visina za minijature fotografija");
define('_MI_EXTGAL_T_HEIGTH_DESC',"Maksimalna visina za minijature fotografija");
define('_MI_EXTGAL_M_WATERMARK',"Omogući vodeni žig za srednje fotografije");
define('_MI_EXTGAL_M_WATERMARK_DESC',"Izaberite da li će se omogućiti opcija vodenog žiga za nove srednje fotografije. Također morate podesiti postavke vodenog žiga na 'vodeni žig & obrub' kartici.");
define('_MI_EXTGAL_M_BORDER',"Omogući obrub za srednje fotografije");
define('_MI_EXTGAL_M_BORDER_DESC',"Izaberite da li će se omogućiti opcija obruba za nove srednje fotografije. Također morate podesiti postavke obruba na 'vodeni žig & obrub' kartici.");
define('_MI_EXTGAL_L_WATERMARK',"Omogući vodeni žig za velike fotografije");
define('_MI_EXTGAL_L_WATERMARK_DESC',"Izaberite da li će se omogućiti opcija vodenog žiga za nove velike fotografije. Također morate podesiti postavke vodenog žiga na 'vodeni žig & obrub' kartici.");
define('_MI_EXTGAL_L_BORDER',"Omogući obrub za velike fotografije");
define('_MI_EXTGAL_L_BORDER_DESC',"Izaberite da li će se omogućiti opcija obruba za nove velike fotografije. Također morate podesiti postavke obruba na 'vodeni žig & obrub' kartici.");
define('_MI_EXTGAL_NAME_PATTERN',"Uzorak automatskog opisa fotografija");
define('_MI_EXTGAL_NAME_PATTERN_DESC',"Ako niste dali opis za vašu fotografiju pri uploadu, ime datoteke će se koristiti da bi se stvorio auto opis.<br /> Na primjer, sa \"Natecanje-2006_1.jpg\" imenom fotografije, dobit ćete rezultat \"Natjecanje 2006\" kao opis");
define('_MI_EXTGAL_DISPLAY_EXTRA',"Prikaži dodatno polje");
define('_MI_EXTGAL_DISPLAY_EXTRA_DESC',"Izaberite da li će se dodati još informacija na obrazcu za slanje. Na primjer, možete korisiti opciju za dodavanje PayPal tipke za svaku fotografiju.");
define('_MI_EXTGAL_ALLOW_HTML',"Dozvoli HTML u dodatnom polju");
define('_MI_EXTGAL_ALLOW_HTML_DESC',"Dozvoliti ili nedozvoliti HTML kod u opisu i dodatnom polju.");
define('_MI_EXTGAL_HIDDEN_FIELD',"Ova konstanta se koristi samo za micanje PHP bilješki. Ovaj tekst se ne koristi u modulu");
define('_MI_EXTGAL_SAVE_ORIG',"Spremi originalnu fotografiju");
define('_MI_EXTGAL_SAVE_ORIG_DESC',"Ova opcija vam omogućava spremanje uploadane fotografije prije dodavanja vodenog žiga i obruba. Zahtjeva da je dodana opcija 'vodeni žig i obrub' <b>uključena</b> za velike fotografije kao i opcija \"Spremi velike fotografije\".<br /><b>Originalna inačica se može downloadati ali ovisi o grupnim pravima za \"Download originalna prava\"</b>.<br />Ako korisnik nema prava za download originala, onda će umjesto njih \"velike\" fotografije biti downloadane.");
define('_MI_EXTGAL_ADM_NBPHOTO',"Broj fotografija koje će biti prikazane na administratorskoj stranici");
define('_MI_EXTGAL_ADM_NBPHOTO_DESC',"Postavi koji će broj fotografija biti prikazan na administratorskoj tablici za odobravanje.");
define('_MI_EXTGAL_GRAPHLIB',"Grafička biblioteka");
define('_MI_EXTGAL_GRAPHLIB_DESC',"Izaberi grafičku biblioteku koju želite koristiti. Budite oprezni s ovom naprednom opcijom, nemojte mjenjati ako ne znate što ćete dobiti s time.");
define('_MI_EXTGAL_GRAPHLIB_PATH',"Put do grafičke biblioteke");
define('_MI_EXTGAL_GRAPHLIB_PATH_DESC',"Put do grafičke biblioteke na serveru <b>SA</b> završnom kosom crtom.");
define('_MI_EXTGAL_ENABLE_RATING',"Omogući ocjenjivanje fotografija");
define('_MI_EXTGAL_ENABLE_RATING_DESC',"Izaberite da li će se globalno koristiti mogućnost ocjenjivanja fotografija.");
define('_MI_EXTGAL_DISP_PH_TITLE',"Naslov fotografije");
define('_MI_EXTGAL_DISP_PH_TITLE_DESC',"Izaberite da li će se prikazivati naslov fotografije unutar albuma.");
define('_MI_EXTGAL_DISP_CAT_IMG',"Slika kategorije");
define('_MI_EXTGAL_DISP_CAT_IMG_DESC',"Izaberite da li će se prikazivati slika koja predstavlja kategoriju.");
define('_MI_EXTGAL_M_QUALITY',"Kvaliteta srednjih fotografija");
define('_MI_EXTGAL_M_QUALITY_DESC',"Kvaliteta srednjih fotografija od 0 (loše) do 100 (dobro)");
define('_MI_EXTGAL_T_QUALITY',"Kvaliteta minijatura fotografija");
define('_MI_EXTGAL_T_QUALITY_DESC',"Kvaliteta minijatura fotografija od 0 (loše) do 100 (dobro)");
define('_MI_EXTGALLERY_ALBUM',"Album");
define('_MI_EXTGAL_EXT_UPLOAD',"Vrsta upload stranice");
define('_MI_EXTGAL_EXT_UPLOAD_DESC',"Izaberite vrstu uploada koju korisnik ima na raspolaganju. Proširena zahtjeva Java plugin.");
define('_MI_EXTGALLERY_EXTENDED',"Proširena");
define('_MI_EXTGALLERY_STANDARD',"Standardna");

// Bloc Name
define('_MI_EXTGAL_B_RAND',"Slučajna fotografija");
define('_MI_EXTGAL_B_LAST',"Zadnja fotografija");
define('_MI_EXTGAL_B_MOST',"Najgledanija");
define('_MI_EXTGAL_B_TOPR',"Najviša ocjenjena");
define('_MI_EXTGAL_B_TOPE',"Naj eCard");
define('_MI_EXTGAL_B_RANDSS',"Slučajna fotografija (Slideshow)");
define('_MI_EXTGAL_B_LASTSS',"Zadnja fotografija (Slideshow)");
define('_MI_EXTGAL_B_MOSTSS',"Najgledanija (Slideshow)");
define('_MI_EXTGAL_B_TOPRSS',"Najviša ocjena (Slideshow)");
define('_MI_EXTGAL_B_TOPESS',"Naj eCard (Slideshow)");

// Notifications
define('_MI_EXTGAL_GLOBAL_NOTIFY',"Globalno obavještavanje");
define('_MI_EXTGAL_GLOBAL_NOTIFYDSC',"GLOBAL_NOTIFYDSC");
define('_MI_EXTGAL_ALBUM_NOTIFY',"Obavještavanje za albume");
define('_MI_EXTGAL_ALBUM_NOTIFYDSC',"_MI_EXTGAL_CAT_NOTIFYDSC");
define('_MI_EXTGAL_PHOTO_NOTIFY',"Obavještavanje za fotografije");
define('_MI_EXTGAL_PHOTO_NOTIFYDSC',"_MI_EXTGAL_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFY',"Nova fotografija");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYCAP',"Obavijesti me kad je dodana nova fotografija");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYDSC',"NEW_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYSBJ',"Dodana je nova fotografija");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFY',"Obavijesti me kad je nova fotografija na čekanju");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYCAP',"Obavijesti me kad je nova fotografija na čekanju");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYSBJ',"Nova fotografija na čekanju");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFY',"Obavijesti me kad je nova fotografija dodana u ovaj album");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYCAP',"Obavijesti me kad je nova fotografija dodana u ovaj album");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYSBJ',"Nova fotografija je prijavljena");
?>