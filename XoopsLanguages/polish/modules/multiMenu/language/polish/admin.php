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
define("_AD_MULTIMENU_TITLE"                        , "Tytu³");
define("_AD_MULTIMENU_STATUS"                       , "Status");
define("_AD_MULTIMENU_ONLINE"                       , "Online");
define("_AD_MULTIMENU_OFFLINE"                      , "Offline");
define("_AD_MULTIMENU_SUBMENU"                      , "Rodzaj");
define("_AD_MULTIMENU_SUBMENUEXP"                   , "<br /><i><font color='red'>Podmenu <u>musi mieæ</u><br />t± sam± ¶cie¿kê<br />co g³ówny</font></i>");
define("_AD_MULTIMENU_SUBYES"                       , "Tak");
define("_AD_MULTIMENU_SUBNO"                        , "Nie");
define("_AD_MULTIMENU_MAINLINK"                     , "<b>G³ówny link</b>");
define("_AD_MULTIMENU_SUBLINK"                      , "<i>Podlink</i>");
define("_AD_MULTIMENU_PERMSUBLINK"                  , "Sta³y podlink");
define("_AD_MULTIMENU_NOTE"                         , "Opis");
define("_AD_MULTIMENU_TARGET"                       , "Cel");
define("_AD_MULTIMENU_GROUPS"                       , "Grupy które bêd± widzia³y ten link");
define("_AD_MULTIMENU_LINK"                         , "Link");
define("_AD_MULTIMENU_OPERATION"                    , "Edycja");
define("_AD_MULTIMENU_UP"                           , "Góra");
define("_AD_MULTIMENU_DOWN"                         , "Dó³");
define("_AD_MULTIMENU_TARG_SELF"                    , "self");
define("_AD_MULTIMENU_TARG_BLANK"                   , "blank");
define("_AD_MULTIMENU_TARG_PARENT"                  , "parent");
define("_AD_MULTIMENU_TARG_TOP"                     , "top");
define("_AD_MULTIMENU_SUREDELETE"                   , "Czy napewno chcesz usun±æ ten link?");
define("_AD_MULTIMENU_UPDATED"                      , "Baza danych zaktualizowana!");
define("_AD_MULTIMENU_NOTUPDATED"                   , "Nie mo¿na zaktualizowaæ Bazy danych!");
define("_AD_MULTIMENU_SUBMIT"                       , "Potwierd¼");
define("_AD_MULTIMENU_IMAGE"                        , "Obrazek");

define("_AD_MULTIMENU_CATEGORY"                     , "Kategoria");
define("_AD_MULTIMENU_NOTES"                        , "<font color='red'>*</font> multiMenu wspiera wzglêdne i bezwzglêdne adresy URL.<br /><br />
<b><u>Przyk³ady</u> :</b><br /><br />
<u>Bezwzglêdny URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Wzglêdny URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>¯eby linki poprawnie dzia³a³y,<br />trzeba dodaæ ' / ' (uko¶nik)<br />na koñcu linka!</td><tr></table><br />
<br />
Mo¿esz u¿ywaæ nastêpuj±cych tagów w ¶cie¿ce do swojego pliku:<br />
- {theme} poka¿e obecnie u¿ywan± skórkê.<br />
- {module} poka¿e nazwê obecnie wy¶wietlanego modu³u.");

define("_AD_MULTIMENU_PREFERENCES"                  , "Opcje");
define("_AD_MULTIMENU_HELP"                         , "Przewodnik");

define("_AD_MULTIMENU_FATHER_INDEX"                 , "Katalog nadrzêdny");
define("_AD_MULTIMENU_CANTPARENT"                   , "Wej¶cie nie mo¿e prowadziæ do siebie lub podkatalogu!");
define("_AD_MULTIMENU_ID"                           , "Id");
define("_AD_MULTIMENU_PID"                          , "Pid");
define("_AD_MULTIMENU_BLOCK_LINK"                   , "Lista linków");

define("_AD_MULTIMENU_GUIDET_GENERAL"               , "Ustawienia g³ówne");
define("_AD_MULTIMENU_GUIDET_PREF"                  , "Preferencje");
define("_AD_MULTIMENU_GUIDET_INDEX"                 , "Index");
define("_AD_MULTIMENU_GUIDET_BLOCKS"                , "Bloki");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Krótko o multiMenu</font>
</strong></p><br />
<br />
<strong><u>Wstêp</u>
</strong>
<br />multiMenu jest wielofunkcyjnym menad¿erem menu. Zosta³ stworzony aby umo¿liwiæ ³atwe wy¶wietlanie linków oraz menu na stronie opartej na Xoops'ie. Dla webmasterów: nowy link mo¿e byæ dodany z panelu administracyjnego, lub wprost z linku na stronie. Wersja 1.7 zawiera interfejs mapy strony, który pozwala na ³atwe tworzenie w³asnych menu.
<br />
<br />
<strong><u>Cechy</u>
</strong>
<br />G³ówn± cech± tego modu³u jest ³atwe tworzenie w³asnych menu. Takie menu mo¿na ³atwo dostosowaæ menu do swoich potrzeb. multiMenu zawiera dodatkowo szereg opcji których nie mo¿na opisaæ w tym krótkim przewodniku.
<br />
<br /><strong><u>Podziêkowania</u></strong>
<br />Odno¶nie projektowania i tworzenia tego modu³u, podziêkowania dla kilku dobrze znanych ludzi: <br />Herv&eacute;, Marcan i Solo za ich pomoc oraz wspó³pracê przy tworzeniu tego modu³u.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Jak u¿ywaæ multiMenu ?</font></strong>
</p>
<br /><strong><u>Administracja<br /></u></strong>
<br /><strong><u>Obja¶nienia opcji</u>
</strong>
<br /><br />Przed uzyciem tego modu³u sugerujemy aby¶ zapozna³ siê z opcjami. W³a¶nie tam bêdziesz ustawia³ g³ówne opcje multiMenu. Te ustawienia maj± bezpo¶redni wp³yw na twoj± stronê (ale nie na bloki).
<br />
<br />
<br /><strong><em>Poka¿ stronê g³ówn±: <br /></em></strong>
Tutaj mo¿esz aktywowaæ lub nie, opcje strony g³ównej. Je¿eli wy³±czysz t± opcjê, mo¿esz u¿ywaæ linku jako fa³szywy, który bêdzie pokazywa³ co tylko zechecsz, lub u¿ywaæ go jako drug± stronê g³ówna. Pamiêtaj, ¿e ta opcja mo¿e ukryæ tylko link do strony g³ównej a nie podlinki.
<br />
<br />
<strong><em>Tekst powitalny: <br /></em></strong>
Wpisz tutaj tekst który bêdzie wy¶wietlony nad linkiem do strony g³ównej. Mo¿esz u¿ywac tag-ów Xoops'a i HTML.
<br />
<br />
<strong><em>Baner:</em></strong>
Masz mo¿liwo¶æ umieszczenia banera lub nazwy modu³u ponad wszystkimi linkami. Je¶li chcesz zmieniæ baner, nadpisz plik logo.gif : '/module/multiMenu/images/logo.gif' .
<br />
<br />
<strong><em>Tytu³ menu: <br /></em></strong>
Zdefiniuj tytu³y stron. Nazwy bloków siê nie zmieni±!
<br />
<br />
<strong><em>~Nazwy menu (id 1 do 4): <br /></em></strong>
Utwórz spis i nazwy stron administratora. Uwaga, to nie ma wp³ywu na nazwy bloków!
<br />
<br />
<strong><em>Poka¿ belkê nawigacji:</em></strong>
 <br />Belka nawigacji bêdzie wy¶wietlana na ka¿dej stronie. Je¿eli nie chcesz to nie musisz aktywowaæ tej funkcji.
<br />
<br /><strong><em>Domy¶lna szeroko¶æ obrazka:</em>
</strong>
<br />Podaj maksymalny rozmiar obrazka który bêdzie wy¶wietlany w menu. Ta opcja bêdzie tylko zminiejsza³a za du¿e obrazy aby ujednoliciæ menu. Obazki mniejsze ni¿ podany przez ciebie wymiar nie bêd± powiêkszane aby nie utraci³y jako¶ci.
<br />
<br />
<br /><strong><em>Ikony:</em></strong>
<br />S± 4 rodzaje ikon. Ka¿dy link ma odpowiedni± ikonê:<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Bezwzglêdny g³ówny link</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Bezwzglêdny0 podrzêdny link</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Wzglêdny g³ówny link</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Wzglêdny podrzêdny link</li>
</ul>
<br />
<br />
<strong><em>multiMenu w skórce:<br /></em></strong>
Aby multiMenu by³o wy¶wietlane w twojej skórce musisz do niej wkleiæ ten kod *:
<p align='center'><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font></p>
<br />
<i>* Uwaga: Tylko 'g³ówne linki' s± wy¶wieltane w skórce!</i>
");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Jak u¿ywaæ multiMenu ?</font></strong></p>
<br /><strong><u>Administracja<br /></u></strong><br />
<strong><u>Opcje administracyjne</u></strong>
<br />
<br />
S± dwa rodzaje menu: menu dynamiczne oraz zwyk³e sta³e linki.
<br />
<br />
<strong>Belka nawigacji sk³ada sie z nastêpuj±cych czê¶ci:</strong>
<ul><li>Strona g³ówna</li>
<li>Opcje</li>
<li> Pomoc</li>
<li> Linki admina</li>
<li> multiMenu</li></ul><br />
Uwaga: Specjalny kolor który pokazuje czy dany link jest wy¶wietlany czy nie na stronie (zielony - jest wy¶wietlany, czerwony - nie jest wy¶wietlany).<br />
<br />
Mo¿esz poruszaæ siê po ca³ym module dziêki belce nawigacji. Pamiêtaj, ¿e ka¿d± strone wygenerowan± przez ten modu³ jako administrator bêdziesz móg³ modyfikowaæ i usuwaæ.
<br />
<br />
<strong><u>Strona g³ówna multiMenu</u></strong><br />
<br />
Spis linków. <br />
W spisie linków, mo¿esz dostaæ kilka cennych informacji odno¶nie twoich odno¶ników :<br />
<ul>
<li>Obrazek: poka¿ dostosowan± wersjê obrazka.</li>
<li>Tytu³</li>
<li>Link</li>
<li>Status: zielony - online (nie wy¶wietlany), czerwony - offline (wy¶wietlany).</li>
<li>Rodzaj</li>
<li>Edycja: modyfikowanie, usuwanie, zmiana po³o¿enia linków (strza³kami).</li>
</ul>
Linki s± pouk³adane w kolejno¶ci wy¶wietlania. Ustawienie linków mo¿e byæ zmieniane poprzez klikniêcie na zielon± strza³kê(dó³ i góra).
<br />
<br />
Kliknij na 'Nowy Link' aby utworzyæ nowy odno¶nik. 
<br />
<br />
<strong><u>Nowy link</u></strong><br />
<br />
multiMenu zosta³o stworzone aby umo¿liwiaæ ³atwe dodawane linków do menu. Musisz tylko wype³niæ stosowne pola.<br />
Mo¿esz wybraæ wy¶wietlanie obrazków z lub bez linków, z ró¿nymi mo¿liwymi opcjami wy¶wietlania.<br />
<br />
<strong><em>Tytu³:</em></strong> to nazwa linka. Mo¿esz u¿ywaæ tag'ów HTML (np ¿eby zmieniæ kolor napisu) lub buziek. Proszê nie u¿ywaæ BBCode.<br />
<br />
<strong><em>Link:</em></strong> to jest URL do którego bêdzie prowadzi³ nowy link. Nic nie wpisuj je¿eli chcesz ¿eby ten lnk pozosta³ nieaktywny (pusty). URL mo¿e byæ wzglêdy lub bezwzglêdny. Je¿eli ustawisz na wzglêdny, multiMenu automatycznie doda obecn± ¶cie¿kê, wiêc, twój link bêdzi zawsze poprawny bo bêdzie prowadzi³ do aktualnie ogl±danej strony. <br />
<br />
<strong><em>Obrazek:</em></strong> URL obrazka którego chcesz u¿yæ. To samo je¶li chodzi o link wzglêdny lub bezwzglêdny. Je¿eli obrazek jest niedostêpny lub niew³a¶ciwy, multiMenu u¿yje domy¶lnego czyli czerwonej ³apy.<br />
W tej wersji, masz mo¿liwo¶æ u¿ycia dwóch ró¿nych tag'ów<strong>{module}</strong> <strong>{theme}</strong>, pokazuj± one kolejno modu³ i skórê aktualnie u¿ywan±.<br />
<br />
<strong><em>Status:</em></strong> czy link ma byæ wy¶wietlony czy nie.<br />
<br />
<strong><em>Rodzaj:</em></strong> wybierz rodzaj linka. Jest 5 ró¿nych typów :<br />
<ul>
<li><strong>Kategoria:</strong> Kategoria linków.</li>
<li><strong>G³ówny link:</strong> G³ówny link.</li>
<li><strong>Sta³y podlink:</strong> Podlink który bêdzie wy¶wietlany stale.</li>
<li><strong>Dynamiczny podlink:</strong> Podlink który bêdzie wy¶wietlany dynamicznie, odnosz±cy siê do linku g³ównego. Aby dynamiczne podlinki dzia³a³y poprawnie, nale¿y dodaæ '\ / ' (uko¶niki) na koñcu linku do danego katalogu!
</li>
<li>Uwaga: mo¿e byæ wy¶wietlane jako zwyk³y tekst.</li>
</ul><br />
<strong><em>Cel:</em></strong>Do czego ma siê odnosiæ link.</li><br />
<br />
<strong><em>Grupy:</em></strong> wybierz które grupy mog± widzieæ a które nie aktualnie tworzony link.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>Jak u¿ywaæ multiMenu ?</font></strong></p><br />
<br />
<strong><u>Bloki w multiMenu</u></strong><br />
<br />
Jedn± z wa¿niejszych cech multiMenu s± bloki. Jak napisano powy¿ej, masz dla ka¿dego menu odpowiedni blok (pocz±wszy od 1 do 4 i blok admina), plus dwa inne w³asne bloki (A i B). Do ka¿dego dostêpnego bloku mo¿esz mieæ bardzo szerki zakres zastosowañ, opcji itd.<br /><br />Kiedy edytujesz blok multiMenu, definiujesz sze¶æ ró¿nych opcji.<br />
<br />
<strong>1) Rodzaj bloku</strong><br />
<br />
<strong><em>Rodzaj:</em></strong><br />
Mo¿esz wy¶witliæ linki w  multiMenu w 11 ró¿nych formach:<br />
- Zwyk³e<br />
- Drzewko<br />
- Wybieranie okienka<br />
- Ustalony obrazek<br />
- Przesuwane obrazki (bez pauzy)<br />
- Przesuwane obrazki (z pauza)<br />
- Nieuporz±dkowana lista (bez numerów)<br />
- Uporz±dkowana lista (Z numerkamis)<br />
- Nieuporz±dkowana lista<br />
- Przewijana lista (bez pauzy)<br />
- Przesuwana lista (z pauz± na koñcu)<br />
<br />
<strong><em>Liczba kolumn:</em></strong><br />
Ustaw liczbe kolumn w których maja byæ wy¶wietlane twoje linki. Ta opcja dzia³a tylko ze zwyk³ym menu i ustalonymi obrazkami.<br />
<br />
<strong>2) Linki</strong><br />
<br />
<strong><em>Rodzaj linka do wy¶wietlenia:</em></strong><br />
Ustaw rodzaj linków które chcesz wy¶wietliæ w¶ród wszystkich kategorii. <br />
<strong><em>Sortuj wed³ug:</em></strong><br />
W jakim porz±dku chcesz posortowaæ swoje linki: wg wagi lub wg alfabetu.<br />
<br />
<strong>3) Tytu³</strong><br />
<br />
<strong><em>Poka¿ tytu³:</em></strong><br />
Czy chcesz wy¶wietliæ tytu³ linków? Ta opcja powinna byæ u¿ywana tylko z menu obrazkowym!<br />
<strong><em>Max. D³ugo¶æ:</em></strong><br />
Jaki d³ugi mo¿e byæ tytu³ ? Podaj ilo¶æ znaków.<br />
<br />
<strong>4) Obrazek</strong><br />
<br />
<strong><em>Wy¶wietl obrazek:</em></strong><br />
Czy chcesz wy¶wietliæ obrazek do linku.<br />
<strong><em>Max. Szeroko¶æ:</em></strong><br />
Ustaw maksymaln± szeroko¶æ obrazka aby utrzymaæ jednolity wygl±d twojego menu. Je¶li obrazek jest za ma³y, nie zostanie on powiêkszony aby nie straci³ na jako¶ci.<br />
<br />
<strong>5) Opcje przewijania</strong><br />
<br />Te opcje s± tylko przydatne je¿eli wybra³e¶ menu przewijane. 
<br /><strong><em>Wysoko¶æ i szeroko¶æ bloku:</em></strong><br />
Zdefiniuj rozmiary bloku. Sprawd¼ szeroko¶æ obrazka aby najlepiej dostosowaæ blok.<br />
<strong><em>Prêdko¶æ:</em><br /></strong>
Zdefiniuj prêdko¶æ przewijania linków i obazków w menu. <br />
<br />
<strong>6) Losowe Linki</strong><br />
<br />
<strong><em>Losowe Linki:</em></strong></strong><br />
multiMenu ma mo¿liwo¶æ wy¶wietlania losowych linków. Wybierz czy chcesz u¿yæ tej opcji czy nie. Ta opcja powinna byæ u¿ywana ostro¿nie je¿eli masz w menu kilka ró¿nych rodzajów linków, ta opcja pracuje najlepiej z jednym rodzajem linków.<br />
<strong><em>Liczba losowych linków które zostan± wy¶wietlone:</em></strong><br />
Ta opcja definiuje ilo¶æ losowych linków które bêd± wy¶wietlone w menu. Ta opcja mo¿e wy¶wietliæ dan± liczbê linków po pierwszym wybranym linku. 
<br /><br />Dziêkujemy za wybór multiMenu, jak zawsze czekamy na wasze komentarze i propozycje. Dziêki waszej pomocy pragniemy dalej udoskonalaæ multiMenu.<br /><br />- Autorzy");
?>
