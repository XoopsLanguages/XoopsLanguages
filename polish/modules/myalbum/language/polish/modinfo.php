<?php
//Polish translation by kaper@zk-p.pl

// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {

define( 'MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","Zdjęcia");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","Creates a photos section where users can search/submit/rate various photos.");

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","Najnowsze zdjęcia");
define("_ALBM_BNAME_HITS","Najpopularniejsze zdjęcia");
define("_ALBM_BNAME_RANDOM","Losowe zdjęcie");
define("_ALBM_BNAME_RECENT_P","Najnowsze zdjęcia z miniaturami");
define("_ALBM_BNAME_HITS_P","Najpopularniejsze zdjęcia z miniaturami");

// Config Items
define( "_ALBM_CFG_PHOTOSPATH" , "Ścieżka do plików zdjęć" ) ;

define( "_ALBM_CFG_DESCPHOTOSPATH" , "Ścieżka względna - podkatalog głównego katalogu XOOPS<br />(Ścieżka powinna zaczynać się od znaku '/', nie powinna kończyć się znakiem '/'.)<br />W systemie Unix prawa dostępu powinny być 777 lub 707." ) ;
define( "_ALBM_CFG_THUMBSPATH" , "Ścieżka do plików miniaturek" ) ;
define( "_ALBM_CFG_DESCTHUMBSPATH" , "Uwagi analogiczne jak wobec ścieżki do plików zdjęć" );
//define( "_ALBM_CFG_USEIMAGICK" , "Do obróbki obrazów używaj biblioteki ImageMagick") ;
//define( "_ALBM_CFG_DESCIMAGICK" , "Not use ImageMagick cause Not work resize or rotate the main photo, and make thumbnails by GD.<br />You'd better use ImageMagick if you can." ) ;
define( "_ALBM_CFG_IMAGINGPIPE" , "Biblioteka do obróbki obrazów" ) ;
define( "_ALBM_CFG_DESCIMAGINGPIPE" , "PHP standardowo korzysta z biblioteki GD. Jednak ze względu na problemy występujące z tą biblioteką, wskazane jest użycie jednej z pozostałych bibliotek." ) ;
define( "_ALBM_CFG_FORCEGD2" , "Wymuś konwersję do formatu GD2" ) ;
define( "_ALBM_CFG_DESCFORCEGD2" , "Wymusza konwersję do formatu GD2 (truecolor) nawet jeśli dystrybucja PHP zawiera bibliotekę GD. Uwaga - w niektórych konfiguracjach PHP może nie utworzyć miniatur GD2.<br />Ta opcja ma znaczenie jedynie w przypadku użycia biblioteki GD." ) ;
define( "_ALBM_CFG_IMAGICKPATH" , "Ścieżka do biblioteki ImageMagick" ) ;
define( "_ALBM_CFG_DESCIMAGICKPATH" , "Ścieżka do pliku 'convert'<br />(nie powinna kończyć się '/'.)<br />Opcja ma znaczenie jedynie w przypadku użycia biblioteki ImageMagick" ) ;
define( "_ALBM_CFG_NETPBMPATH" , "Ścieżka do biblioteki NetPBM" ) ;
define( "_ALBM_CFG_DESCNETPBMPATH" , "Ścieżka do plików 'pnmscale' itd.<br />(nie powinna kończyć się '/'.)<br />Opcja ma znaczenie jedynie w przypadku użycia biblioteki NetPBM" ) ;
define( "_ALBM_CFG_POPULAR" , "Liczba odsłon do uznania za popularny" ) ;
define( "_ALBM_CFG_NEWDAYS" , "Liczba dni wyświetlania oznaczeń 'nowy', 'zmieniony'" ) ;
define( "_ALBM_CFG_NEWPHOTOS" , "Liczba nowych zdjęć wyświetlanych na głównej stronie modułu" ) ;
define( "_ALBM_CFG_PERPAGE" , "Opcje wyboru liczby zdjęć na stronie" ) ;
define( "_ALBM_CFG_DESCPERPAGE" , "Liczby rozdzielone znakiem '|'<br />np. 10|20|50|100" ) ;
define( "_ALBM_CFG_ALLOWNOIMAGE" , "Dopuszczalne nadsyłanie bez obrazów" ) ;
define( "_ALBM_CFG_MAKETHUMB" , "Miniatury z plików" ) ;
define( "_ALBM_CFG_DESCMAKETHUMB" , "Zamiast generować miniatury przy każdym otwieraniu strony (obciążenie serwera!), korzysta z gotowych plików miniatur. Jeśli nie ma miniatur, można utworzyć je w opcji Zarządzanie Miniaturami." ) ;
//define( "_ALBM_CFG_THUMBWIDTH" , "Szerokość miniatury" ) ;
//define( "_ALBM_CFG_DESCTHUMBWIDTH" , "Wysokość miniatury zostanie obliczona proporcjonalnie do szerokości" ) ;
define( "_ALBM_CFG_THUMBSIZE" , "Rozmiar miniatur (piksele)" ) ;
define( "_ALBM_CFG_THUMBRULE" , "Metoda obliczania rozmiaru miniatury" ) ;
define( "_ALBM_CFG_WIDTH" , "Dopuszczalna szerokość zdjęcia" ) ;
define( "_ALBM_CFG_DESCWIDTH" , "Zdjęcie zostanie przeskalowane do tego rozmiaru." ) ;
define( "_ALBM_CFG_HEIGHT" , "Dopuszczalna wysokość zdjęcia" ) ;
define( "_ALBM_CFG_DESCHEIGHT" , "Zdjęcie zostanie przeskalowane do tego rozmiaru" ) ;
define( "_ALBM_CFG_FSIZE" , "Dopuszczalny rozmiar pliku" ) ;
define( "_ALBM_CFG_DESCFSIZE" , "Rozmiar pliku sprawdzany przy nadsyłaniu zdjęcia" ) ;
define( "_ALBM_CFG_MIDDLEPIXEL" , "Dopuszczalna wielkość zdjęcia wyświetlanego pojedynczo" ) ;
define( "_ALBM_CFG_DESCMIDDLEPIXEL" , "(szerokość)x(wysokość)<br />np. 480x480" ) ;
define( "_ALBM_CFG_ADDPOSTS" , "Zwiększenie licznika nadesłanych wiadomości" ) ;
define( "_ALBM_CFG_DESCADDPOSTS" , "Wartość, o jaką, po nadesłaniu każdego zdjęcia, zostanie zwiększony licznik wiadomości nadesłanych przez użytkownika. <br/> Zwykle 0 lub 1. Wartość ujemna oznacza 0" ) ;
define( "_ALBM_CFG_CATONSUBMENU" , "Wyświetlać kategorie główne w podmenu menu systemowego" ) ;
define( "_ALBM_CFG_NAMEORUNAME" , "Wyświetlana nazwa / imię użytkownika" ) ;
define( "_ALBM_CFG_DESCNAMEORUNAME" , "Autor wyświetlany pod nazwą (login) lub nazwiskiem" ) ;
define( "_ALBM_CFG_VIEWCATTYPE" , "Sposób wyświetlania w kategorii" ) ;
define( "_ALBM_CFG_ALLOWEDEXTS" , "Dopuszczalne rozszerzenia plików" ) ;
define( "_ALBM_CFG_DESCALLOWEDEXTS" , "Rozszerzenia rozdzielone znakiem '|'<br/> np. 'jpg|jpeg|gif|png' .<br />Małe litery, bez kropek. <br/>Ze wzgędów bezpieczeństwa nie dopuszczaj rozszerzeń 'php', 'html'...!" ) ;
define( "_ALBM_CFG_ALLOWEDMIME" , "Dopuszczalne typy MIME" ) ;
define( "_ALBM_CFG_DESCALLOWEDMIME" , "Typy MIME rozdzielone znakiem '|' (np 'image/gif|image/jpeg|image/png')<br />Puste pole - brak sprawdzania typu MIME" ) ;
define( "_ALBM_CFG_USESITEIMG" , "Obsługa znacznika [siteimg] przez Menedżer Obrazów" ) ;
define( "_ALBM_CFG_DESCUSESITEIMG" , "Znacznik [siteimg] udostępnia obrazy z podkatalogów XOOPS:<br>
[siteimg=images/obraz.gif] daje kod<br>
<.img src= 'http://adres.xoops/images/obraz.gif'><br>
Uwaga: obsługa znacznika dotyczy tylko tego modułu. Dla innych modułów należy zmodyfikować odpowiedni plik textsanitizer.php." ) ;
define( "_ALBM_CFG_COLSOFTABLEVIEW" , "Liczba kolumn w widoku tabelarycznym" ) ;
define( "_ALBM_OPT_USENAME" , "Nazwisko" ) ;
define( "_ALBM_OPT_USEUNAME" , "Nazwa (login)" ) ;

define( "_ALBUM_OPT_CALCFROMWIDTH" , "szerokość:podana wysokość:auto" ) ;
define( "_ALBUM_OPT_CALCFROMHEIGHT" , "szerokość:auto  wysokość:podana" ) ;
define( "_ALBUM_OPT_CALCWHINSIDEBOX" , "kwadrat podanej wielkości" ) ;

define( "_ALBM_OPT_VIEWLIST" , "Lista" ) ;
define( "_ALBM_OPT_VIEWTABLE" , "Tabela" ) ;


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","Wyślij nowe");
define("_ALBM_TEXT_SMNAME2","Najpopularniejsze");
define("_ALBM_TEXT_SMNAME3","Najwyżej oceniane");
define("_ALBM_TEXT_SMNAME4","Moje");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","Nadesłane zdjęcia");
define("_ALBM_MYALBUM_ADMENU1","Zarządzanie zdjęciami");
define("_ALBM_MYALBUM_ADMENU2","Zarządzanie kategoriami");
define("_ALBM_MYALBUM_ADMENU_GPERM","Uprawnienia");
define("_ALBM_MYALBUM_ADMENU3","Środowisko");
define("_ALBM_MYALBUM_ADMENU4","Wgrywanie wsadowe");
define("_ALBM_MYALBUM_ADMENU5","Zarządzanie miniaturami");
define("_ALBM_MYALBUM_ADMENU_IMPORT","Importuj");
define("_ALBM_MYALBUM_ADMENU_EXPORT","Eksportuj");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","Bloki");


// Text for notifications
define('_MI_MYALBUM_GLOBAL_NOTIFY', 'Moduł');
define('_MI_MYALBUM_GLOBAL_NOTIFYDSC', 'Powiadomienia w module');
define('_MI_MYALBUM_CATEGORY_NOTIFY', 'Kategoria');
define('_MI_MYALBUM_CATEGORY_NOTIFYDSC', 'Powiadomienia dotyczące bieżącej kategorii');
define('_MI_MYALBUM_PHOTO_NOTIFY', 'Zdjęcie');
define('_MI_MYALBUM_PHOTO_NOTIFYDSC', 'Powiadomienia dotyczące bieżącego zdjęcia');

define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY', 'Nowe zdjęcie');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP', 'Powiadomienie o opublikowaniu nowego zdjęcia');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC', 'Powiadomienie o opublikowaniu nowego zdjęcia');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ', '{X_SITENAME} - {X_MODULE}: Nowe zdjęcie');

define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY', 'Nowe zdjęcie');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP', 'Powiadomienie o opublikowaniu nowego zdjęcia');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC', 'Powiadomienie o opublikowaniu nowego zdjęcia');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ', '{X_SITENAME} - {X_MODULE}: Nowe zdjęcie');

}

?>
