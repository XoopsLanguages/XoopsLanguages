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
define("_AD_MULTIMENU_TITLE"                        , "Tytu�");
define("_AD_MULTIMENU_STATUS"                       , "Status");
define("_AD_MULTIMENU_ONLINE"                       , "Online");
define("_AD_MULTIMENU_OFFLINE"                      , "Offline");
define("_AD_MULTIMENU_SUBMENU"                      , "Rodzaj");
define("_AD_MULTIMENU_SUBMENUEXP"                   , "<br /><i><font color='red'>Podmenu <u>musi mie�</u><br />t� sam� �cie�k�<br />co g��wny</font></i>");
define("_AD_MULTIMENU_SUBYES"                       , "Tak");
define("_AD_MULTIMENU_SUBNO"                        , "Nie");
define("_AD_MULTIMENU_MAINLINK"                     , "<b>G��wny link</b>");
define("_AD_MULTIMENU_SUBLINK"                      , "<i>Podlink</i>");
define("_AD_MULTIMENU_PERMSUBLINK"                  , "Sta�y podlink");
define("_AD_MULTIMENU_NOTE"                         , "Opis");
define("_AD_MULTIMENU_TARGET"                       , "Cel");
define("_AD_MULTIMENU_GROUPS"                       , "Grupy kt�re b�d� widzia�y ten link");
define("_AD_MULTIMENU_LINK"                         , "Link");
define("_AD_MULTIMENU_OPERATION"                    , "Edycja");
define("_AD_MULTIMENU_UP"                           , "G�ra");
define("_AD_MULTIMENU_DOWN"                         , "D�");
define("_AD_MULTIMENU_TARG_SELF"                    , "self");
define("_AD_MULTIMENU_TARG_BLANK"                   , "blank");
define("_AD_MULTIMENU_TARG_PARENT"                  , "parent");
define("_AD_MULTIMENU_TARG_TOP"                     , "top");
define("_AD_MULTIMENU_SUREDELETE"                   , "Czy napewno chcesz usun�� ten link?");
define("_AD_MULTIMENU_UPDATED"                      , "Baza danych zaktualizowana!");
define("_AD_MULTIMENU_NOTUPDATED"                   , "Nie mo�na zaktualizowa� Bazy danych!");
define("_AD_MULTIMENU_SUBMIT"                       , "Potwierd�");
define("_AD_MULTIMENU_IMAGE"                        , "Obrazek");

define("_AD_MULTIMENU_CATEGORY"                     , "Kategoria");
define("_AD_MULTIMENU_NOTES"                        , "<font color='red'>*</font> multiMenu wspiera wzgl�dne i bezwzgl�dne adresy URL.<br /><br />
<b><u>Przyk�ady</u> :</b><br /><br />
<u>Bezwzgl�dny URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Wzgl�dny URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>�eby linki poprawnie dzia�a�y,<br />trzeba doda� ' / ' (uko�nik)<br />na ko�cu linka!</td><tr></table><br />
<br />
Mo�esz u�ywa� nast�puj�cych tag�w w �cie�ce do swojego pliku:<br />
- {theme} poka�e obecnie u�ywan� sk�rk�.<br />
- {module} poka�e nazw� obecnie wy�wietlanego modu�u.");

define("_AD_MULTIMENU_PREFERENCES"                  , "Opcje");
define("_AD_MULTIMENU_HELP"                         , "Przewodnik");

define("_AD_MULTIMENU_FATHER_INDEX"                 , "Katalog nadrz�dny");
define("_AD_MULTIMENU_CANTPARENT"                   , "Wej�cie nie mo�e prowadzi� do siebie lub podkatalogu!");
define("_AD_MULTIMENU_ID"                           , "Id");
define("_AD_MULTIMENU_PID"                          , "Pid");
define("_AD_MULTIMENU_BLOCK_LINK"                   , "Lista link�w");

define("_AD_MULTIMENU_GUIDET_GENERAL"               , "Ustawienia g��wne");
define("_AD_MULTIMENU_GUIDET_PREF"                  , "Preferencje");
define("_AD_MULTIMENU_GUIDET_INDEX"                 , "Index");
define("_AD_MULTIMENU_GUIDET_BLOCKS"                , "Bloki");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Kr�tko o multiMenu</font>
</strong></p><br />
<br />
<strong><u>Wst�p</u>
</strong>
<br />multiMenu jest wielofunkcyjnym menad�erem menu. Zosta� stworzony aby umo�liwi� �atwe wy�wietlanie link�w oraz menu na stronie opartej na Xoops'ie. Dla webmaster�w: nowy link mo�e by� dodany z panelu administracyjnego, lub wprost z linku na stronie. Wersja 1.7 zawiera interfejs mapy strony, kt�ry pozwala na �atwe tworzenie w�asnych menu.
<br />
<br />
<strong><u>Cechy</u>
</strong>
<br />G��wn� cech� tego modu�u jest �atwe tworzenie w�asnych menu. Takie menu mo�na �atwo dostosowa� menu do swoich potrzeb. multiMenu zawiera dodatkowo szereg opcji kt�rych nie mo�na opisa� w tym kr�tkim przewodniku.
<br />
<br /><strong><u>Podzi�kowania</u></strong>
<br />Odno�nie projektowania i tworzenia tego modu�u, podzi�kowania dla kilku dobrze znanych ludzi: <br />Herv&eacute;, Marcan i Solo za ich pomoc oraz wsp�prac� przy tworzeniu tego modu�u.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Jak u�ywa� multiMenu ?</font></strong>
</p>
<br /><strong><u>Administracja<br /></u></strong>
<br /><strong><u>Obja�nienia opcji</u>
</strong>
<br /><br />Przed uzyciem tego modu�u sugerujemy aby� zapozna� si� z opcjami. W�a�nie tam b�dziesz ustawia� g��wne opcje multiMenu. Te ustawienia maj� bezpo�redni wp�yw na twoj� stron� (ale nie na bloki).
<br />
<br />
<br /><strong><em>Poka� stron� g��wn�: <br /></em></strong>
Tutaj mo�esz aktywowa� lub nie, opcje strony g��wnej. Je�eli wy��czysz t� opcj�, mo�esz u�ywa� linku jako fa�szywy, kt�ry b�dzie pokazywa� co tylko zechecsz, lub u�ywa� go jako drug� stron� g��wna. Pami�taj, �e ta opcja mo�e ukry� tylko link do strony g��wnej a nie podlinki.
<br />
<br />
<strong><em>Tekst powitalny: <br /></em></strong>
Wpisz tutaj tekst kt�ry b�dzie wy�wietlony nad linkiem do strony g��wnej. Mo�esz u�ywac tag-�w Xoops'a i HTML.
<br />
<br />
<strong><em>Baner:</em></strong>
Masz mo�liwo�� umieszczenia banera lub nazwy modu�u ponad wszystkimi linkami. Je�li chcesz zmieni� baner, nadpisz plik logo.gif : '/module/multiMenu/images/logo.gif' .
<br />
<br />
<strong><em>Tytu� menu: <br /></em></strong>
Zdefiniuj tytu�y stron. Nazwy blok�w si� nie zmieni�!
<br />
<br />
<strong><em>~Nazwy menu (id 1 do 4): <br /></em></strong>
Utw�rz spis i nazwy stron administratora. Uwaga, to nie ma wp�ywu na nazwy blok�w!
<br />
<br />
<strong><em>Poka� belk� nawigacji:</em></strong>
 <br />Belka nawigacji b�dzie wy�wietlana na ka�dej stronie. Je�eli nie chcesz to nie musisz aktywowa� tej funkcji.
<br />
<br /><strong><em>Domy�lna szeroko�� obrazka:</em>
</strong>
<br />Podaj maksymalny rozmiar obrazka kt�ry b�dzie wy�wietlany w menu. Ta opcja b�dzie tylko zminiejsza�a za du�e obrazy aby ujednolici� menu. Obazki mniejsze ni� podany przez ciebie wymiar nie b�d� powi�kszane aby nie utraci�y jako�ci.
<br />
<br />
<br /><strong><em>Ikony:</em></strong>
<br />S� 4 rodzaje ikon. Ka�dy link ma odpowiedni� ikon�:<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Bezwzgl�dny g��wny link</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Bezwzgl�dny0 podrz�dny link</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Wzgl�dny g��wny link</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Wzgl�dny podrz�dny link</li>
</ul>
<br />
<br />
<strong><em>multiMenu w sk�rce:<br /></em></strong>
Aby multiMenu by�o wy�wietlane w twojej sk�rce musisz do niej wklei� ten kod *:
<p align='center'><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font></p>
<br />
<i>* Uwaga: Tylko 'g��wne linki' s� wy�wieltane w sk�rce!</i>
");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Jak u�ywa� multiMenu ?</font></strong></p>
<br /><strong><u>Administracja<br /></u></strong><br />
<strong><u>Opcje administracyjne</u></strong>
<br />
<br />
S� dwa rodzaje menu: menu dynamiczne oraz zwyk�e sta�e linki.
<br />
<br />
<strong>Belka nawigacji sk�ada sie z nast�puj�cych cz�ci:</strong>
<ul><li>Strona g��wna</li>
<li>Opcje</li>
<li> Pomoc</li>
<li> Linki admina</li>
<li> multiMenu</li></ul><br />
Uwaga: Specjalny kolor kt�ry pokazuje czy dany link jest wy�wietlany czy nie na stronie (zielony - jest wy�wietlany, czerwony - nie jest wy�wietlany).<br />
<br />
Mo�esz porusza� si� po ca�ym module dzi�ki belce nawigacji. Pami�taj, �e ka�d� strone wygenerowan� przez ten modu� jako administrator b�dziesz m�g� modyfikowa� i usuwa�.
<br />
<br />
<strong><u>Strona g��wna multiMenu</u></strong><br />
<br />
Spis link�w. <br />
W spisie link�w, mo�esz dosta� kilka cennych informacji odno�nie twoich odno�nik�w :<br />
<ul>
<li>Obrazek: poka� dostosowan� wersj� obrazka.</li>
<li>Tytu�</li>
<li>Link</li>
<li>Status: zielony - online (nie wy�wietlany), czerwony - offline (wy�wietlany).</li>
<li>Rodzaj</li>
<li>Edycja: modyfikowanie, usuwanie, zmiana po�o�enia link�w (strza�kami).</li>
</ul>
Linki s� pouk�adane w kolejno�ci wy�wietlania. Ustawienie link�w mo�e by� zmieniane poprzez klikni�cie na zielon� strza�k�(d� i g�ra).
<br />
<br />
Kliknij na 'Nowy Link' aby utworzy� nowy odno�nik. 
<br />
<br />
<strong><u>Nowy link</u></strong><br />
<br />
multiMenu zosta�o stworzone aby umo�liwia� �atwe dodawane link�w do menu. Musisz tylko wype�ni� stosowne pola.<br />
Mo�esz wybra� wy�wietlanie obrazk�w z lub bez link�w, z r�nymi mo�liwymi opcjami wy�wietlania.<br />
<br />
<strong><em>Tytu�:</em></strong> to nazwa linka. Mo�esz u�ywa� tag'�w HTML (np �eby zmieni� kolor napisu) lub buziek. Prosz� nie u�ywa� BBCode.<br />
<br />
<strong><em>Link:</em></strong> to jest URL do kt�rego b�dzie prowadzi� nowy link. Nic nie wpisuj je�eli chcesz �eby ten lnk pozosta� nieaktywny (pusty). URL mo�e by� wzgl�dy lub bezwzgl�dny. Je�eli ustawisz na wzgl�dny, multiMenu automatycznie doda obecn� �cie�k�, wi�c, tw�j link b�dzi zawsze poprawny bo b�dzie prowadzi� do aktualnie ogl�danej strony. <br />
<br />
<strong><em>Obrazek:</em></strong> URL obrazka kt�rego chcesz u�y�. To samo je�li chodzi o link wzgl�dny lub bezwzgl�dny. Je�eli obrazek jest niedost�pny lub niew�a�ciwy, multiMenu u�yje domy�lnego czyli czerwonej �apy.<br />
W tej wersji, masz mo�liwo�� u�ycia dw�ch r�nych tag'�w<strong>{module}</strong> <strong>{theme}</strong>, pokazuj� one kolejno modu� i sk�r� aktualnie u�ywan�.<br />
<br />
<strong><em>Status:</em></strong> czy link ma by� wy�wietlony czy nie.<br />
<br />
<strong><em>Rodzaj:</em></strong> wybierz rodzaj linka. Jest 5 r�nych typ�w :<br />
<ul>
<li><strong>Kategoria:</strong> Kategoria link�w.</li>
<li><strong>G��wny link:</strong> G��wny link.</li>
<li><strong>Sta�y podlink:</strong> Podlink kt�ry b�dzie wy�wietlany stale.</li>
<li><strong>Dynamiczny podlink:</strong> Podlink kt�ry b�dzie wy�wietlany dynamicznie, odnosz�cy si� do linku g��wnego. Aby dynamiczne podlinki dzia�a�y poprawnie, nale�y doda� '\ / ' (uko�niki) na ko�cu linku do danego katalogu!
</li>
<li>Uwaga: mo�e by� wy�wietlane jako zwyk�y tekst.</li>
</ul><br />
<strong><em>Cel:</em></strong>Do czego ma si� odnosi� link.</li><br />
<br />
<strong><em>Grupy:</em></strong> wybierz kt�re grupy mog� widzie� a kt�re nie aktualnie tworzony link.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>Jak u�ywa� multiMenu ?</font></strong></p><br />
<br />
<strong><u>Bloki w multiMenu</u></strong><br />
<br />
Jedn� z wa�niejszych cech multiMenu s� bloki. Jak napisano powy�ej, masz dla ka�dego menu odpowiedni blok (pocz�wszy od 1 do 4 i blok admina), plus dwa inne w�asne bloki (A i B). Do ka�dego dost�pnego bloku mo�esz mie� bardzo szerki zakres zastosowa�, opcji itd.<br /><br />Kiedy edytujesz blok multiMenu, definiujesz sze�� r�nych opcji.<br />
<br />
<strong>1) Rodzaj bloku</strong><br />
<br />
<strong><em>Rodzaj:</em></strong><br />
Mo�esz wy�witli� linki w  multiMenu w 11 r�nych formach:<br />
- Zwyk�e<br />
- Drzewko<br />
- Wybieranie okienka<br />
- Ustalony obrazek<br />
- Przesuwane obrazki (bez pauzy)<br />
- Przesuwane obrazki (z pauza)<br />
- Nieuporz�dkowana lista (bez numer�w)<br />
- Uporz�dkowana lista (Z numerkamis)<br />
- Nieuporz�dkowana lista<br />
- Przewijana lista (bez pauzy)<br />
- Przesuwana lista (z pauz� na ko�cu)<br />
<br />
<strong><em>Liczba kolumn:</em></strong><br />
Ustaw liczbe kolumn w kt�rych maja by� wy�wietlane twoje linki. Ta opcja dzia�a tylko ze zwyk�ym menu i ustalonymi obrazkami.<br />
<br />
<strong>2) Linki</strong><br />
<br />
<strong><em>Rodzaj linka do wy�wietlenia:</em></strong><br />
Ustaw rodzaj link�w kt�re chcesz wy�wietli� w�r�d wszystkich kategorii. <br />
<strong><em>Sortuj wed�ug:</em></strong><br />
W jakim porz�dku chcesz posortowa� swoje linki: wg wagi lub wg alfabetu.<br />
<br />
<strong>3) Tytu�</strong><br />
<br />
<strong><em>Poka� tytu�:</em></strong><br />
Czy chcesz wy�wietli� tytu� link�w? Ta opcja powinna by� u�ywana tylko z menu obrazkowym!<br />
<strong><em>Max. D�ugo��:</em></strong><br />
Jaki d�ugi mo�e by� tytu� ? Podaj ilo�� znak�w.<br />
<br />
<strong>4) Obrazek</strong><br />
<br />
<strong><em>Wy�wietl obrazek:</em></strong><br />
Czy chcesz wy�wietli� obrazek do linku.<br />
<strong><em>Max. Szeroko��:</em></strong><br />
Ustaw maksymaln� szeroko�� obrazka aby utrzyma� jednolity wygl�d twojego menu. Je�li obrazek jest za ma�y, nie zostanie on powi�kszony aby nie straci� na jako�ci.<br />
<br />
<strong>5) Opcje przewijania</strong><br />
<br />Te opcje s� tylko przydatne je�eli wybra�e� menu przewijane. 
<br /><strong><em>Wysoko�� i szeroko�� bloku:</em></strong><br />
Zdefiniuj rozmiary bloku. Sprawd� szeroko�� obrazka aby najlepiej dostosowa� blok.<br />
<strong><em>Pr�dko��:</em><br /></strong>
Zdefiniuj pr�dko�� przewijania link�w i obazk�w w menu. <br />
<br />
<strong>6) Losowe Linki</strong><br />
<br />
<strong><em>Losowe Linki:</em></strong></strong><br />
multiMenu ma mo�liwo�� wy�wietlania losowych link�w. Wybierz czy chcesz u�y� tej opcji czy nie. Ta opcja powinna by� u�ywana ostro�nie je�eli masz w menu kilka r�nych rodzaj�w link�w, ta opcja pracuje najlepiej z jednym rodzajem link�w.<br />
<strong><em>Liczba losowych link�w kt�re zostan� wy�wietlone:</em></strong><br />
Ta opcja definiuje ilo�� losowych link�w kt�re b�d� wy�wietlone w menu. Ta opcja mo�e wy�wietli� dan� liczb� link�w po pierwszym wybranym linku. 
<br /><br />Dzi�kujemy za wyb�r multiMenu, jak zawsze czekamy na wasze komentarze i propozycje. Dzi�ki waszej pomocy pragniemy dalej udoskonala� multiMenu.<br /><br />- Autorzy");
?>
