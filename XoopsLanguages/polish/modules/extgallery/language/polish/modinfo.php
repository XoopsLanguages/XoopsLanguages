<?php

define('_MI_EXTGAL_NAME',"eXtGallery");
define('_MI_EXTGAL_DESC',"eXtGallery jest pot�nym skryptem galerii dla XOOPSa");

// Main menu
define('_MI_EXTGALLERY_PUBLIC_UPLOAD',"Wy�lij zdj�cie");

// Main administration menu
define('_MI_EXTGALLERY_INDEX',"Strona g��wna");
define('_MI_EXTGALLERY_PUBLIC_CAT',"Kategorie/Albumy");
define('_MI_EXTGALLERY_PHOTO',"Zdj�cia");
define('_MI_EXTGALLERY_PERMISSIONS',"Uprawnienia");
define('_MI_EXTGALLERY_WATERMARK_BORDER',"Znak wodny &amp; ramka");

// Module options
define('_MI_EXTGAL_NB_COLUMN',"Liczba kolumn w albumie");
define('_MI_EXTGAL_NB_COLUMN_DESC',"Ile kolumn ma by� u�ytych do wy�wietlania miniaturek");
define('_MI_EXTGAL_NB_LINE',"Liczba wierszy w albumie");
define('_MI_EXTGAL_NB_LINE_DESC',"Ile wierszy ma by� u�ytych do wy�wietlania miniaturek");
define('_MI_EXTGAL_SAVE_L',"Zapisuj olbrzymie zdj�cia");
define('_MI_EXTGAL_SAVE_L_DESC',"Czy chcesz zapisywa� zdj�cia wi�ksze ni� rozmiar �redni? Je�eli zapiszesz, to link do zdj�cia w oryginalnych rozmiarach b�dzie wy�wietlony pod zmniejszonym.");
define('_MI_EXTGAL_M_WIDTH',"Szeroko�� �redniego zdj�cia");
define('_MI_EXTGAL_M_WIDTH_DESC',"Zdj�cie b�dzie przeskalowane do podanej szeroko�ci");
define('_MI_EXTGAL_M_HEIGTH',"Wysoko�� �redniego zdj�cia");
define('_MI_EXTGAL_M_HEIGTH_DESC',"Zdj�cie b�dzie przeskalowane do podanej wysoko�ci");
define('_MI_EXTGAL_T_WIDTH',"Szeroko�� miniaturki");
define('_MI_EXTGAL_T_WIDTH_DESC',"Maksymalna szeroko�� miniaturki");
define('_MI_EXTGAL_T_HEIGTH',"Wysoko�� miniaturki");
define('_MI_EXTGAL_T_HEIGTH_DESC',"Maksymalna wysoko�� miniaturki");
define('_MI_EXTGAL_M_WATERMARK',"W��cz znak wodny dla �rednich zdj��");
define('_MI_EXTGAL_M_WATERMARK_DESC',"Ta opcja pozwoli na dodawanie znaku wodnego do �rednich zdj��, ale dopiero gdy zmienisz ustawienia znak�w wodnych.");
define('_MI_EXTGAL_M_BORDER',"W��cz ramk� dla �rednich zdj��");
define('_MI_EXTGAL_M_BORDER_DESC',"Ta opcja pozwoli na dodawanie ramki do �rednich zdj��, ale dopiero gdy zmienisz ustawienia ramek.");
define('_MI_EXTGAL_L_WATERMARK',"W��cz znak wodny dla olbrzymich zdj��");
define('_MI_EXTGAL_L_WATERMARK_DESC',"Ta opcja pozwoli na dodawanie znaku wodnego do olbrzymich zdj��, ale dopiero gdy zmienisz ustawienia znak�w wodnych.");
define('_MI_EXTGAL_L_BORDER',"W��cz ramki dla olbrzymich zdj��");
define('_MI_EXTGAL_L_BORDER_DESC',"Ta opcja pozwoli na dodawanie ramki do olbrzymich zdj��, ale dopiero gdy zmienisz ustawienia ramek.");
define('_MI_EXTGAL_NAME_PATTERN',"Automatyczny szablon nazwy");
define('_MI_EXTGAL_NAME_PATTERN_DESC',"Je�eli nie dodasz opisu do zdj�cia, jego nazwa zostanie u�yta do tego celu.<br />Z nazwy \"Tournament-06-may-2006_1.jpg\" otrzymasz \"Tournament 06 may 2006\".");
define('_MI_EXTGAL_DISPLAY_EXTRA',"Wy�wietl dodatkowe pole");
define('_MI_EXTGAL_DISPLAY_EXTRA_DESC',"ta opcja pozwala na dodanie wi�kszej ilo�ci informacji w formularzu dodawania zdj�cie. Mo�esz na przyk�ad wstawi� przycisk paypal dla ka�dego dodawanego zdj�cia.");
define('_MI_EXTGAL_HIDDEN_FIELD',"Ta sta�a jest u�ywana tylko do pozbywania si� powiadomienia PHP. Ten tekst nie jest u�ywany w module.");
define('_MI_EXTGAL_SAVE_ORIG',"Zapisuj oryginalne zdj�cie");
define('_MI_EXTGAL_SAVE_ORIG_DESC',"Dzi�ki tej opcji na serwerze zostan� zapisane zdj�cia w wersji oryginalnej (bez znaku wodnego i ramki). Opcja \"Zapisuj olbrzymie zdj�cia\" <b>musi</b> by� w��czona aby wszystko poprawnie funkcjonowa�o.<br /><b>Zdj�cie w wersji oryginalnej mo�e by� pobrane tylko, gdy u�ytkownik ma ustawione odpowiednie uprawnienia dla \"Pobierania orygina��w\"</b>.");
define('_MI_EXTGAL_ADM_NBPHOTO',"Liczba wy�wietlonych zdj�� na stronach administracyjnych");
define('_MI_EXTGAL_ADM_NBPHOTO_DESC',"Podaj liczb� zdj�� wy�wietlanych na stronach edycji oraz zatwierdzania.");
define('_MI_EXTGAL_GRAPHLIB',"Biblioteka graficzna");
define('_MI_EXTGAL_GRAPHLIB_DESC',"Wybierz, kt�r� bibliotek� chcesz u�ywa�. Nie modyfikuj tej opcji je�eli nie wiesz co robisz.");
define('_MI_EXTGAL_GRAPHLIB_PATH',"�cie�ka do biblioteki graficznej");
define('_MI_EXTGAL_GRAPHLIB_PATH_DESC',"Path to the graphic library on the serveur <b>WITH</b> trailing slash.");
define('_MI_EXTGAL_ENABLE_RATING',"W��cz mo�liwo�� oceniania zdj��");
define('_MI_EXTGAL_ENABLE_RATING_DESC',"This option allow you to globaly enable or disable the rating feature.");

define('_MI_EXTGAL_DISP_PH_TITLE',"Pokazuj tytu� zdj�cia");
define('_MI_EXTGAL_DISP_PH_TITLE_DESC',"Ta opcja pozwala wybra� czy w widoku albumu tytu� zdj�cia ma by� pokazywany.");
define('_MI_EXTGAL_DISP_CAT_IMG',"Obrazek kategorii");
define('_MI_EXTGAL_DISP_CAT_IMG_DESC',"Wybierz, czy chcesz mie� mo�liwo�� dodawania obrazka do kategorii.");

// Notifications
define('_MI_EXTGAL_GLOBAL_NOTIFY',"Globalne");
define('_MI_EXTGAL_GLOBAL_NOTIFYDSC',"GLOBAL_NOTIFYDSC");
define('_MI_EXTGAL_ALBUM_NOTIFY',"Album");
define('_MI_EXTGAL_ALBUM_NOTIFYDSC',"_MI_EXTGAL_CAT_NOTIFYDSC");
define('_MI_EXTGAL_PHOTO_NOTIFY',"Zdj�cie");
define('_MI_EXTGAL_PHOTO_NOTIFYDSC',"_MI_EXTGAL_PHOTO_NOTIFYDSC");

define('_MI_EXTGAL_NEW_PHOTO_NOTIFY',"Nowe zdj�cie");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYCAP',"Powiadom mnie o dodaniu nowego zdj�cia");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYDSC',"NEW_PHOTO_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYSBJ',"Wys�ano nowe zdj�cie");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFY',"Nowe zdj�cie oczekuje na zatwierdzenie");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYCAP',"Powiadom mnie o dodaniu nowego zdj�cia oczekuj�cego na zatwierdzenie");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYSBJ',"Nowe zdj�cie oczekuje na zatwierdzenie");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFY',"Powiadom mnie o dodaniu nowego zdj�cia do tego albumu");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYCAP',"Powiadom mnie o dodaniu nowego zdj�cia do tego albumu");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC',"_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC");
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYSBJ',"Dodano nowe zdj�cie");
?>