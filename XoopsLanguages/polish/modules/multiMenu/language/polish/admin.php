<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.4								//
//  ------------------------------------------------------------------------	//

define("_AD_MULTIMENU_ADMIN"                        , "Administration : multiMenu ");
define("_AD_MULTIMENU_EDITIMENU"                    , "Edycja");
define("_AD_MULTIMENU_NEWIMENU"                     , "Nowe IMenu");
define("_AD_MULTIMENU_NEW"                          , "Nowy Link");
define("_AD_MULTIMENU_TITLE"                        , "Tytuł");
define("_AD_MULTIMENU_STATUS"                       , "Status");
define("_AD_MULTIMENU_ONLINE"                       , "Online");
define("_AD_MULTIMENU_OFFLINE"                      , "Offline");
define("_AD_MULTIMENU_SUBMENU"                      , "Rodzaj");
define("_AD_MULTIMENU_SUBMENUEXP"                   , "<br /><i><font color='red'>Podmenu <u>musi mieć</u><br />tą samą ścieżkę<br />co główny</font></i>");
define("_AD_MULTIMENU_SUBYES"                       , "Tak");
define("_AD_MULTIMENU_SUBNO"                        , "Nie");
define("_AD_MULTIMENU_MAINLINK"                     , "<b>Główny link</b>");
define("_AD_MULTIMENU_SUBLINK"                      , "<i>Podlink</i>");
define("_AD_MULTIMENU_PERMSUBLINK"                  , "Stały podlink");
define("_AD_MULTIMENU_NOTE"                         , "Opis");
define("_AD_MULTIMENU_TARGET"                       , "Cel");
define("_AD_MULTIMENU_GROUPS"                       , "Grupy które będą widziały ten link");
define("_AD_MULTIMENU_LINK"                         , "Link");
define("_AD_MULTIMENU_OPERATION"                    , "Edycja");
define("_AD_MULTIMENU_UP"                           , "Góra");
define("_AD_MULTIMENU_DOWN"                         , "Dół");
define("_AD_MULTIMENU_TARG_SELF"                    , "self");
define("_AD_MULTIMENU_TARG_BLANK"                   , "blank");
define("_AD_MULTIMENU_TARG_PARENT"                  , "parent");
define("_AD_MULTIMENU_TARG_TOP"                     , "top");
define("_AD_MULTIMENU_SUREDELETE"                   , "Czy napewno chcesz usunąć ten link?");
define("_AD_MULTIMENU_UPDATED"                      , "Baza danych zaktualizowana!");
define("_AD_MULTIMENU_NOTUPDATED"                   , "Nie można zaktualizować Bazy danych!");
define("_AD_MULTIMENU_SUBMIT"                       , "Potwierdź");
define("_AD_MULTIMENU_IMAGE"                        , "Obrazek");

define("_AD_MULTIMENU_CATEGORY"                     , "Kategoria");
define("_AD_MULTIMENU_NOTES"                        , "<font color='red'>*</font> multiMenu wspiera względne i bezwzględne adresy URL.<br /><br />
<b><u>Przykłady</u> :</b><br /><br />
<u>Bezwzględny URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Względny URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>Żeby linki poprawnie działały,<br />trzeba dodać ' / ' (ukośnik)<br />na końcu linka!</td><tr></table><br />
<br />
Możesz używać następujących tagów w ścieżce do swojego pliku:<br />
- {theme} pokaże obecnie używaną skórkę.<br />
- {module} pokaże nazwę obecnie wyświetlanego modułu.");

define("_AD_MULTIMENU_PREFERENCES"                  , "Opcje");
define("_AD_MULTIMENU_HELP"                         , "Przewodnik");

define("_AD_MULTIMENU_FATHER_INDEX"                 , "Katalog nadrzędny");
define("_AD_MULTIMENU_CANTPARENT"                   , "Wejście nie może prowadzić do siebie lub podkatalogu!");
define("_AD_MULTIMENU_ID"                           , "Id");
define("_AD_MULTIMENU_PID"                          , "Pid");
define("_AD_MULTIMENU_BLOCK_LINK"                   , "Lista linków");

define("_AD_MULTIMENU_GUIDET_GENERAL"               , "Ustawienia główne");
define("_AD_MULTIMENU_GUIDET_PREF"                  , "Preferencje");
define("_AD_MULTIMENU_GUIDET_INDEX"                 , "Index");
define("_AD_MULTIMENU_GUIDET_BLOCKS"                , "Bloki");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Krótko o multiMenu</font>
</strong></p><br />
<br />
<strong><u>Wstęp</u>
</strong>
<br />multiMenu jest wielofunkcyjnym menadżerem menu. Został stworzony aby umożliwić łatwe wyświetlanie linków oraz menu na stronie opartej na Xoops'ie. Dla webmasterów: nowy link może być dodany z panelu administracyjnego, lub wprost z linku na stronie. Wersja 1.7 zawiera interfejs mapy strony, który pozwala na łatwe tworzenie własnych menu.
<br />
<br />
<strong><u>Cechy</u>
</strong>
<br />Główną cechą tego modułu jest łatwe tworzenie własnych menu. Takie menu można łatwo dostosować menu do swoich potrzeb. multiMenu zawiera dodatkowo szereg opcji których nie można opisać w tym krótkim przewodniku.
<br />
<br /><strong><u>Podziękowania</u></strong>
<br />Odnośnie projektowania i tworzenia tego modułu, podziękowania dla kilku dobrze znanych ludzi: <br />Herv&eacute;, Marcan i Solo za ich pomoc oraz współpracę przy tworzeniu tego modułu.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Jak używać multiMenu ?</font></strong>
</p>
<br /><strong><u>Administracja<br /></u></strong>
<br /><strong><u>Objaśnienia opcji</u>
</strong>
<br /><br />Przed uzyciem tego modułu sugerujemy abyś zapoznał się z opcjami. Właśnie tam będziesz ustawiał główne opcje multiMenu. Te ustawienia mają bezpośredni wpływ na twoją stronę (ale nie na bloki).
<br />
<br />
<br /><strong><em>Pokaż stronę główną: <br /></em></strong>
Tutaj możesz aktywować lub nie, opcje strony głównej. Jeżeli wyłączysz tą opcję, możesz używać linku jako fałszywy, który będzie pokazywał co tylko zechecsz, lub używać go jako drugą stronę główna. Pamiętaj, że ta opcja może ukryć tylko link do strony głównej a nie podlinki.
<br />
<br />
<strong><em>Tekst powitalny: <br /></em></strong>
Wpisz tutaj tekst który będzie wyświetlony nad linkiem do strony głównej. Możesz używac tag-ów Xoops'a i HTML.
<br />
<br />
<strong><em>Baner:</em></strong>
Masz możliwość umieszczenia banera lub nazwy modułu ponad wszystkimi linkami. Jeśli chcesz zmienić baner, nadpisz plik logo.gif : '/module/multiMenu/images/logo.gif' .
<br />
<br />
<strong><em>Tytuł menu: <br /></em></strong>
Zdefiniuj tytuły stron. Nazwy bloków się nie zmienią!
<br />
<br />
<strong><em>~Nazwy menu (id 1 do 4): <br /></em></strong>
Utwórz spis i nazwy stron administratora. Uwaga, to nie ma wpływu na nazwy bloków!
<br />
<br />
<strong><em>Pokaż belkę nawigacji:</em></strong>
 <br />Belka nawigacji będzie wyświetlana na każdej stronie. Jeżeli nie chcesz to nie musisz aktywować tej funkcji.
<br />
<br /><strong><em>Domyślna szerokość obrazka:</em>
</strong>
<br />Podaj maksymalny rozmiar obrazka który będzie wyświetlany w menu. Ta opcja będzie tylko zminiejszała za duże obrazy aby ujednolicić menu. Obazki mniejsze niż podany przez ciebie wymiar nie będą powiększane aby nie utraciły jakości.
<br />
<br />
<br /><strong><em>Ikony:</em></strong>
<br />Są 4 rodzaje ikon. Każdy link ma odpowiednią ikonę:<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Bezwzględny główny link</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Bezwzględny0 podrzędny link</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Względny główny link</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Względny podrzędny link</li>
</ul>
<br />
<br />
<strong><em>multiMenu w skórce:<br /></em></strong>
Aby multiMenu było wyświetlane w twojej skórce musisz do niej wkleić ten kod *:
<p align='center'><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font></p>
<br />
<i>* Uwaga: Tylko 'główne linki' są wyświeltane w skórce!</i>
");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Jak używać multiMenu ?</font></strong></p>
<br /><strong><u>Administracja<br /></u></strong><br />
<strong><u>Opcje administracyjne</u></strong>
<br />
<br />
Są dwa rodzaje menu: menu dynamiczne oraz zwykłe stałe linki.
<br />
<br />
<strong>Belka nawigacji składa sie z następujących części:</strong>
<ul><li>Strona główna</li>
<li>Opcje</li>
<li> Pomoc</li>
<li> Linki admina</li>
<li> multiMenu</li></ul><br />
Uwaga: Specjalny kolor który pokazuje czy dany link jest wyświetlany czy nie na stronie (zielony - jest wyświetlany, czerwony - nie jest wyświetlany).<br />
<br />
Możesz poruszać się po całym module dzięki belce nawigacji. Pamiętaj, że każdą strone wygenerowaną przez ten moduł jako administrator będziesz mógł modyfikować i usuwać.
<br />
<br />
<strong><u>Strona główna multiMenu</u></strong><br />
<br />
Spis linków. <br />
W spisie linków, możesz dostać kilka cennych informacji odnośnie twoich odnośników :<br />
<ul>
<li>Obrazek: pokaż dostosowaną wersję obrazka.</li>
<li>Tytuł</li>
<li>Link</li>
<li>Status: zielony - online (nie wyświetlany), czerwony - offline (wyświetlany).</li>
<li>Rodzaj</li>
<li>Edycja: modyfikowanie, usuwanie, zmiana położenia linków (strzałkami).</li>
</ul>
Linki są poukładane w kolejności wyświetlania. Ustawienie linków może być zmieniane poprzez kliknięcie na zieloną strzałkę(dół i góra).
<br />
<br />
Kliknij na 'Nowy Link' aby utworzyć nowy odnośnik. 
<br />
<br />
<strong><u>Nowy link</u></strong><br />
<br />
multiMenu zostało stworzone aby umożliwiać łatwe dodawane linków do menu. Musisz tylko wypełnić stosowne pola.<br />
Możesz wybrać wyświetlanie obrazków z lub bez linków, z różnymi możliwymi opcjami wyświetlania.<br />
<br />
<strong><em>Tytuł:</em></strong> to nazwa linka. Możesz używać tag'ów HTML (np żeby zmienić kolor napisu) lub buziek. Proszę nie używać BBCode.<br />
<br />
<strong><em>Link:</em></strong> to jest URL do którego będzie prowadził nowy link. Nic nie wpisuj jeżeli chcesz żeby ten lnk pozostał nieaktywny (pusty). URL może być względy lub bezwzględny. Jeżeli ustawisz na względny, multiMenu automatycznie doda obecną ścieżkę, więc, twój link będzi zawsze poprawny bo będzie prowadził do aktualnie oglądanej strony. <br />
<br />
<strong><em>Obrazek:</em></strong> URL obrazka którego chcesz użyć. To samo jeśli chodzi o link względny lub bezwzględny. Jeżeli obrazek jest niedostępny lub niewłaściwy, multiMenu użyje domyślnego czyli czerwonej łapy.<br />
W tej wersji, masz możliwość użycia dwóch różnych tag'ów<strong>{module}</strong> <strong>{theme}</strong>, pokazują one kolejno moduł i skórę aktualnie używaną.<br />
<br />
<strong><em>Status:</em></strong> czy link ma być wyświetlony czy nie.<br />
<br />
<strong><em>Rodzaj:</em></strong> wybierz rodzaj linka. Jest 5 różnych typów :<br />
<ul>
<li><strong>Kategoria:</strong> Kategoria linków.</li>
<li><strong>Główny link:</strong> Główny link.</li>
<li><strong>Stały podlink:</strong> Podlink który będzie wyświetlany stale.</li>
<li><strong>Dynamiczny podlink:</strong> Podlink który będzie wyświetlany dynamicznie, odnoszący się do linku głównego. Aby dynamiczne podlinki działały poprawnie, należy dodać '\ / ' (ukośniki) na końcu linku do danego katalogu!
</li>
<li>Uwaga: może być wyświetlane jako zwykły tekst.</li>
</ul><br />
<strong><em>Cel:</em></strong>Do czego ma się odnosić link.</li><br />
<br />
<strong><em>Grupy:</em></strong> wybierz które grupy mogą widzieć a które nie aktualnie tworzony link.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>Jak używać multiMenu ?</font></strong></p><br />
<br />
<strong><u>Bloki w multiMenu</u></strong><br />
<br />
Jedną z ważniejszych cech multiMenu są bloki. Jak napisano powyżej, masz dla każdego menu odpowiedni blok (począwszy od 1 do 4 i blok admina), plus dwa inne własne bloki (A i B). Do każdego dostępnego bloku możesz mieć bardzo szerki zakres zastosowań, opcji itd.<br /><br />Kiedy edytujesz blok multiMenu, definiujesz sześć różnych opcji.<br />
<br />
<strong>1) Rodzaj bloku</strong><br />
<br />
<strong><em>Rodzaj:</em></strong><br />
Możesz wyświtlić linki w  multiMenu w 11 różnych formach:<br />
- Zwykłe<br />
- Drzewko<br />
- Wybieranie okienka<br />
- Ustalony obrazek<br />
- Przesuwane obrazki (bez pauzy)<br />
- Przesuwane obrazki (z pauza)<br />
- Nieuporządkowana lista (bez numerów)<br />
- Uporządkowana lista (Z numerkamis)<br />
- Nieuporządkowana lista<br />
- Przewijana lista (bez pauzy)<br />
- Przesuwana lista (z pauzą na końcu)<br />
<br />
<strong><em>Liczba kolumn:</em></strong><br />
Ustaw liczbe kolumn w których maja być wyświetlane twoje linki. Ta opcja działa tylko ze zwykłym menu i ustalonymi obrazkami.<br />
<br />
<strong>2) Linki</strong><br />
<br />
<strong><em>Rodzaj linka do wyświetlenia:</em></strong><br />
Ustaw rodzaj linków które chcesz wyświetlić wśród wszystkich kategorii. <br />
<strong><em>Sortuj według:</em></strong><br />
W jakim porządku chcesz posortować swoje linki: wg wagi lub wg alfabetu.<br />
<br />
<strong>3) Tytuł</strong><br />
<br />
<strong><em>Pokaż tytuł:</em></strong><br />
Czy chcesz wyświetlić tytuł linków? Ta opcja powinna być używana tylko z menu obrazkowym!<br />
<strong><em>Max. Długość:</em></strong><br />
Jaki długi może być tytuł ? Podaj ilość znaków.<br />
<br />
<strong>4) Obrazek</strong><br />
<br />
<strong><em>Wyświetl obrazek:</em></strong><br />
Czy chcesz wyświetlić obrazek do linku.<br />
<strong><em>Max. Szerokość:</em></strong><br />
Ustaw maksymalną szerokość obrazka aby utrzymać jednolity wygląd twojego menu. Jeśli obrazek jest za mały, nie zostanie on powiększony aby nie stracił na jakości.<br />
<br />
<strong>5) Opcje przewijania</strong><br />
<br />Te opcje są tylko przydatne jeżeli wybrałeś menu przewijane. 
<br /><strong><em>Wysokość i szerokość bloku:</em></strong><br />
Zdefiniuj rozmiary bloku. Sprawdź szerokość obrazka aby najlepiej dostosować blok.<br />
<strong><em>Prędkość:</em><br /></strong>
Zdefiniuj prędkość przewijania linków i obazków w menu. <br />
<br />
<strong>6) Losowe Linki</strong><br />
<br />
<strong><em>Losowe Linki:</em></strong></strong><br />
multiMenu ma możliwość wyświetlania losowych linków. Wybierz czy chcesz użyć tej opcji czy nie. Ta opcja powinna być używana ostrożnie jeżeli masz w menu kilka różnych rodzajów linków, ta opcja pracuje najlepiej z jednym rodzajem linków.<br />
<strong><em>Liczba losowych linków które zostaną wyświetlone:</em></strong><br />
Ta opcja definiuje ilość losowych linków które będą wyświetlone w menu. Ta opcja może wyświetlić daną liczbę linków po pierwszym wybranym linku. 
<br /><br />Dziękujemy za wybór multiMenu, jak zawsze czekamy na wasze komentarze i propozycje. Dzięki waszej pomocy pragniemy dalej udoskonalać multiMenu.<br /><br />- Autorzy");
?>
