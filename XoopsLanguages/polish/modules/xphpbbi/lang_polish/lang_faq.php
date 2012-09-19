<?php
/***************************************************************************
 *                          lang_faq.php [Polish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","Problemy Logowania i Rejestracji");
$faq[] = array("Dlaczego nie mogę się zalogować?", "A zarejestrowałeś się? Naprawdę musisz się zarejestrować aby móc się logować. A może zostałeś wyrzucony z forum (jeśli tak się stało zobaczysz odpowiednią informację)? W takim wypadku skontaktuj się z webmasterem lub administratorem forum aby poznać powód tego. Jeżeli zarejestrowałeś się, nie zostałeś wyrzucony a i tak nie możesz się logować sprawdź ponownie swój login i hasło. Zazwyczaj to właśnie błędny login lub hasło są problemem, ale jeśli tak nie jest skontaktuj się z administratorem forum, gdyż problem może leżeć po stronie błędnej konfiguracji skryptu.");
$faq[] = array("Dlaczego w ogóle muszę się rejestrować?", "Być może nie musisz, zależy to od administratora forum czy musisz się rejestrować by móc się wypowiedzieć. Jednakże rejestracja da ci dostęp do dodatkowych funkcji niedostępnych dla gości, takich jak własny emblemat, prywatne wiadomości, wysyłanie emaili, subskrypcja grup użytkowników itd. Rejestracja zajmuje tylko chwilę i naprawdę zalecamy jej dokonanie.");
$faq[] = array("Dlaczego wciąż jestem wylogowywany?", "Jeżeli nie zaznaczysz opcji <i>Loguj mnie automatycznie</i> podczas logowania na forum będziesz zawsze wylogowywany po pewnym czasie. To zapobiega wykorzystaniu twojego konta przez kogokolwiek innego. Aby pozostawać zalogowanym zaznacz powyższą opcję. Nie jest to zalecane, gdy korzystasz z publicznego komputera, np. w bibliotece, kawiarni internetowej czy na uczelni.");
$faq[] = array("Jak mogę zapobiec wyświetlaniu mojej ksywki na liście obecnych użytkowników?", "W swoim profilu znajdziesz opcję <i>Ukryj moją obecność na forum</i>. Jeżeli ją <i>włączysz</i> będziesz widoczny na liście tylko dla administratorów oraz dla siebie. Będziesz liczony jako użytkownik ukryty.");
$faq[] = array("Zgubiłem moje hasło!", "Nie panikuj! Twoje hasło co prawda nie może zostać odzyskane, ale można je wyczyścić. Aby to zrobić przejdź na stronę logowania i kliknij <u>Zapomniałem hasła</u>, oraz postępuj zgodnie z podanymi instrukcjami a szybko wrócisz na forum");
$faq[] = array("Zarejestrowałem się ale nie mogę się zalogować!", "Na początek sprawdź czy wpisujesz poprawny login i hasło. Jeżeli te są w porządku to problemem może być jedna z dwóch rzeczy. Jeżeli włączone są funkcje COPPA i kliknąłeś odnośnik <u>Mam mniej niż 13 lat</u> podczas rejestracji musisz postąpić zgodnie z otrzymanymi instrukcjami. Jeżeli tak nie jest to może twoje konto wymaga aktywacji? Niektóre fora wymagają aktywacji wszystkich nowych kont, albo przez samych użytkowników, albo przez administratora, zanim można się na nie logować. Po rejestracji powinieneś otrzymać wiadomość czy wymagana jest aktywacja. Jeżeli otrzymałeś email postępuj zgodnie z instrukcjami w nim zawartymi, a jeśli nie otrzymałeś email'a, to czy jesteś pewien, że podałeś właściwy adres? Jednym z powodów wykorzystania aktywacji jest redukcja dostępu do forum osób nieporządanych, które zechcą je spamować lub obrażać użytkowników. Jeżeli jesteś pewien, że podałeś właściwy email spróbuj skontaktować się z administratorem forum.");
$faq[] = array("Rejestrowałem się kiedyś ale nie mogę się już logować!", "Najbardziej prawdopodobne powody takiego stanu to: wpisałeś niewłaściwy login i hasło (poszukaj email'a, który dostałeś po rejestracji) lub administrator usunął twoje konto z jakiegoś powodu. Być może stało się tak, ponieważ nic nie napisałeś? Często administratorzy usuwają użytkowników, którzy w ogóle nic nie napisali aby zmniejszyć rozmiar bazy danych. Spróbuj zarejestrować się ponownie i bądź aktywny w dyskusjach.");


$faq[] = array("--","Preferencje i Ustawienia Użytkowników");
$faq[] = array("Jak mogę zmienić swoje ustawienia?", "Wszystkie twoje ustawienia (jeśli jesteś zarejestrowany) są przechowywane w bazie danych. Aby je zmienić kliknij w odnośnik <u>Profil</u> (najczęściej znajduje się na górze strony, chociaż nie zawsze). To pozwoli ci zmienić wszystkie ustawienia.");
$faq[] = array("Czasy nie są właściwe!", "Podane czasy są prawie na pewno właściwe, ale być może widzisz czasy ze strefy czasowej innej niż twoja. Jeżeli tak jest, to powinieneś zmienić ustawienia twojego profilu, wybierając strefę czasową odpowiednią dla twojego obszaru. Pamiętaj, że zmiana strefy czasowej, jak większość ustawień, może być dokonana jedynie przez użytkowników zarejestrowanych. Jeśli więc jeszcze się nie zarejestrowałeś, teraz jest dobry moment, żeby to zrobić.");
$faq[] = array("Zmieniłem strefę czasową ale czasy są nadal nieprawidłowe!", "Jeżeli jesteś pewien, że ustawienia twojej strefy czasowej są poprawne problemem może być czas letni. Forum nie jest zaprojektowane do osbługi zmian między czasem zimowym i letnim, więc w okresie obowiązywania czasu letniego podane czasy mogą różnić się o godzinę od prawdziwych.");
$faq[] = array("Mojego języka nie ma na liście!", "Najbardziej prawdopodobne powody to albo ponieważ administrator nie zainstalował twojego języka albo program nie został jeszcze przetłumaczony na twój język. Spróbuj spytać się administratora forum, czy może zainstalować odpowiedni język, a jeśli tłumaczenie nie istnieje możesz sam je zrobić. Więcej informacji znajdziesz na stronie Grupy phpBB (odnośnik znajdziesz na dole strony).");
$faq[] = array("Jak mogę wyświetlić obrazek pod moją ksywką?", "Pod twoją nazwą użytkownika przy czytaniu postów mogą być dwa obrazki. Pierwszy jest związany z twoją rangą, zwykle ma formę gwiazdek lub innych znaczków pokazujących jak dużo napisałeś postów lub jaki masz na nich status. Pod nim może znajdować się większy obrazek nazywany Emblematem, który z reguły dla każdego jest inny. To od administratora zależy czy zechce udostępnić funkcje Emblematów i w jaki sposób je udostępni. Jeżeli nie możesz z nich korzystać, to taka jest decyzja administratora i do niego możesz kierować pytania o jej powód (na pewno jest dobry!)");
$faq[] = array("Jak mogę zmienić swoją rangę?", "Przeważnie nie możesz zmienić nazwy swojej rangi (pojawiają się one pod nazwą użytkownika przy przeglądaniu tematu, oraz w twoim profilu, zależnie od szablonu). Większość for używa rang aby zaznaczyć liczbę postów, które napisałeś, i aby wyróżnić konkretne osoby, np. moderatorzy czy administratorzy mogą mieć specjalną rangę. Prosimy nie pisać specjalnie postów tylko po to, aby otrzymać wyższą rangę. W takim wypadku moderator lub administrator po prostu ręcznie ją zmniejszy.");
$faq[] = array("Kiedy klikam odnośnik email, forum wymaga logowania", "Jedynie zarejestrowani użytkownicy mogą wysyłać email przez wbudowany w forum system (jeżeli admin go włączył). Jest tak aby zapobiec niewłaściwemu wykorzystaniu adresów na forum przez anonimowych użytkowników.");


$faq[] = array("--","Problemy z Pisaniem");
$faq[] = array("Jak mogę napisać temat na forum?", "To proste, kliknij w odpowiedni temat na jedym z for lub tematów. Możliwe, że będziesz musiał się zarejestrować zanim będziesz mógł coś napisać; twoje uprawnienia są wypisane na dole stron for i tematów (lista <i>Możesz pisać nowe tematy, Możesz głosować w ankietach, itp.</i>)");
$faq[] = array("Jak mogę zmienić lub usunąć post?", "Jeżeli nie jesteś administratorem lub moderatorem forum możesz jedynie zmieniać lub usuwać własne posty. Aby zmienić post (czasem jest to możliwe jedynie przez jakiś czas po jego napisaniu) kliknij w przycisk <i>zmień</i> przy danym poście. Jeżeli ktoś już na niego odpowiedział po edycji pod postem pojawi się tekst drobnymi literami informujący, ile razy dany post zmieniano. Nie zostanie on dodany jeśli ktoś już odpowiedział na post, lub jeśli został on zmieniony przez administratorów lub moderatorów (powinni oni powiadomić co zmienili i dlaczego). Pamiętaj, że zwykli użytkownicy nie mogą usunąć postu, na który ktoś już odpowiedział.");
$faq[] = array("Jak mogę dodać podpis do mojego postu?", "Aby dodać podpis do wiadomości musisz najpierw go stworzyć w swoim profilu. Kiedy już to zrobisz możesz zaznaczyć pole <i>Dodaj podpis</i> przy formularzu wysyłania postu, aby dodać podpis. Możesz także domyślnie dodawać podpis do wszystkich swoich postów zaznaczając odpowiednią opcję w swoim profilu (przy czym każdorazowo pisząc post możesz zadecydować o nie dodawaniu do niego podpisu, przez odznaczenie pola w formularzu wysyłania)");
$faq[] = array("Jak mogę utworzyć ankietę?", "Tworzenie ankiet jest proste, kiedy piszesz nowy temat (lub zmieniasz pierwszy post w temacie, jeśli masz do tego uprawnienia) powinieneś zobaczyć formularz <i>Dodaj Ankietę</i> pod głównym polem wiadomości (jeżeli nie widzisz go, to prawdopodobnie nie masz uprawnień do tworzenia ankiet). Musisz wpisać tytuł ankiety i podać przynajmniej dwie opcje (kolejne opcje możesz dodawać przyciskiem <i>Dodaj opcję</i>). Możesz także wyznaczyć limit czasowy dla ankiety, ustaw 0 dla niekończącej się. Liczba możliwych do ustawienia opcji jest określana przez administratora.");
$faq[] = array("Jak mogę zmienić lub usunąć ankietę?", "Podobnie jak z postami, ankiety mogą być zmieniane jedynie przez ich twórców, moderatorów lub administratorów. Aby zmienić ankietę musisz zmienić pierwszy post w danym temacie (z którym zawsze związana jest ankieta). Jeżeli nikt jeszcze nie głosował użytkownicy mogą usunąć ankietę lub zmieniać którąkolwiek z opcji, jednakże jeśli zostały już oddane głosy tylko moderatorzy i administratorzy mogą ankietę zmienić lub usunąć. Jest to ustawione w ten sposób aby zapobiec fałszowaniu ankiet przez zmianę opcji w połowie głosowania.");
$faq[] = array("Dlaczego nie mam dostępu do forum?", "Nietóre fora mogą być przeznaczone dla konkretnych użytkowników lub grup. Aby przeglądać, czytać, pisać itp. może być potrzebna specjalna autoryzacja. Dostępu do nich mogą udzielić jedynie moderatorzy forum oraz administratorzy i z nimi powinieneś się skontaktować.");
$faq[] = array("Dlaczego nie mogę głosować w ankietach?", "Tylko zarejestrowani użytkownicy mogą głosować w ankietach (aby zapobiec fałszowaniu wyników). Jeżeli zarejestrowałeś się i nadal nie możesz głosować, prawdopodobnie nie masz odpowiednich uprawnień.");


$faq[] = array("--","Formatowanie i Typy Tematów");
$faq[] = array("Czym jest BBCode?", "BBCode jest specjalną implementacją HTML'a, a możliwość jego używania jest uzależniona od ustawień dokonanych przez administratora (możesz także wyłączać go dla każdego postu osobno w formularzu wysyłania). Sam BBCode jest podobny stylowo do HTML'a, znaczniki są zawarte w nawiasach kwadratowych [ i ] a nie &lt; i &gt; oraz oferuje większą kontrolę nad tym co i jak będzie wyświetlane. Więcej informacji o BBCode znajdziesz w przewodniku, do którego dostaniesz się ze strony wysyłania postu.");
$faq[] = array("Czy mogę używać HTML?", "Zależy to od decyzji administratora, który ma pełną kontrolę nad możliwością używania HTML'a. Jeżeli możesz go używać, prawdopodobnie tylko niektóre znaczniki będą działały. Jest to podyktowane względami <i>bezpieczeństwa</i>, aby zapobiec wstawianiu przez ludzi kodu, który zepsuje wygląd strony czy sprawi inne kłopoty. Jeżeli HTML jest włączony, możesz wyłączyć go dla każdego postu wybierając odpowiednią opcję w formularzu wysłania postu.");
$faq[] = array("Czym są Uśmieszki?", "Uśmieszki, albo Ikony Emocji są małymi grafikami, które mogą być używane do wyrażenia jakiegoś uczucia przez wstawienie krótkiego kodu, np. :) oznacza szczęście, :( oznacza smutek. Pełna lista ikon jest dostępna z formularza wysyłania postu. Spróbuj jednak nie nadużywać tych ikon, ponieważ mogą spowodować nieczytelność postu i moderator może zdecydować o usunięciu ich lub całego postu.");
$faq[] = array("Czy mogę dodawać Obrazki?", "Jak najbardziej możesz wstawiać obrazki do swoich postów. Jednakże obecnie nie istnieje możliwość przesyłania obrazków bezpośrednio na forum. Musisz więc wstawiać obrazki, które znajdują się na innym, ogólnodostępnym serwerze, np. http://www.moj-serwer.pl/moj-obraz.gif. Nie możesz wstawiać obrazków znajdujących się na twoim komputerze (chyba że jest on publicznie dostępnym serwerem) ani obrazków przechowywanych na stronach wymagających autoryzacji, np. skrzynki pocztowe, strony chronione hasłem itp. Aby wstawić obrazek użyj znacznika BBCode [img] lub odpowiedniego znacznika HTML (jeśli jest to dozwolone).");
$faq[] = array("Czym są Ogłoszenia?", "Ogłoszenia często zawierają istotne informacje i powinieneś czytać je gdy tylko się pojawią. Ogłoszenia pojawiają się na górze każdej strony na forum, w którym zostały napisane. To czy możesz wysyłać ogłoszenia zależy od tego, jakich wymaga to uprawnień dostępu, ustawianych przez administratora.");
$faq[] = array("Czym są Tematy Przyklejone?", "Tematy Przyklejone pojawiają się pod ogłoszeniami w przeglądzie for i tylko na pierwszej jego stronie. Najczęściej są dosyć ważne, więc w miarę możliwości powinieneś je czytać. Podobnie jak z ogłoszeniami, administrator decyduje jakie uprawnienia są konieczne do pisania tematów przyklejonych na każdym forum.");
$faq[] = array("Czym są Tematy Zablokowane?", "Zablokowane Tematy są ustawiane w ten sposób przez moderatora lub administratora. Nie możesz pisać w nich dalszych odpowiedzi oraz każda zawarta w nich ankieta jest automatycznie kończona. Powodów dla zamknięcia tematu może być bardzo wiele.");


$faq[] = array("--","Poziomy Użytkowników i Grupy");
$faq[] = array("Kim są Administratorzy?", "Administratorzy są ludźmi, którym przydzielono najwyższy poziom kontroli nad całym forum. Mogą oni kontrolować wszystkie aspekty działania forum, włącznie z ustawianiem uprawnień dostępu, usuwaniem użytkowników, tworzeniem grup, określaniem moderatorów itp. Mają także pełne możliwości moderacji na forach.");
$faq[] = array("Kim są Moderatorzy?", "Moderatorzy są osobami (albo grupami osób), których zadaniem jest doglądanie forum od czasu do czasu. Mają możliwość zmieniania treści lub usuwania postów oraz blokowania, odblokowywania, przenoszenia, usuwania i dzielenia tematów w forum, które moderują. Generalnie czuwają aby ludzie nie schodzili <i>z tematu</i> w dyskusjach oraz nie publikowali nieodpowiednich materiałow.");
$faq[] = array("Czym są Grupy Użytkowników?", "Grupy Użytkowników są sposobem, w jaki administratorzy mogą grupować użytkowników. Każdy użytkownik może należeć do wielu grup (co przeważnie nie jest możliwe w innych forach) i każda grupa może mieć własne prawa dostępu. Dzięku temu administratorzy mogą łatwo ustawić wielu użytkowników jako moderatorów lub dać im dostęp do prywatnego forum itp.");
$faq[] = array("Jak mogę dołączyć do Grupy?", "Aby dołączyć do grupy użytkowników kliknij w odnośnik grup użytkowników na górze strony (zależnie od szablonu), gdzie możesz przeglądać wszystkie grupy. Nie wszystkie są dostępne dla każdego, niektóre mogą być zamknięte a inne mogą mieć nawet ukryte członkowstwo. Jeżeli grupa jest otwarta możesz poprosić o członkowstwo klikając w odpowiedni przycisk. Twoja prośba musi zostać zaakceptowana przez moderatora grupy, przy czym może on spytać o powód twojej decyzji. Prosimy nie nagabywać moderatora w przypadku negatywnej decyzji, ma swoje powody.");
$faq[] = array("Jak mogę zostać Moderatorem Grupy?", "Grupy użytkowników są tworzone przez administratora forum i to on wyznacza moderatora. Jeżeli jesteś zainteresowany stworzeniem nowej grupy powinieneś w pierwszej kolejności z nim się skontaktować, na przykład przez prywatną wiadomość.");


$faq[] = array("--","Prywatne Wiadomości");
$faq[] = array("Nie mogę wysyłać prywatnych wiadomości!", "Mogą być tego trzy powody; nie jesteś zarejestrowany lub i/lub zalogowany, administrator wyłączył prywatne wiadomości dla całego forum lub wyłączył możliwość ich wysyłania dla ciebie. W ostatnim przypadku powinieneś skontaktować się z administratorem i spytać o powód jego decyzji.");
$faq[] = array("Wciąż dostaję niechciane prywatne wiadomości!", "W przyszłości planowane jest dodanie listy ignorowanych użytkowników dla systemu prywatnych wiadomości. Obecnie jednak jeśli dostajesz niechciane wiadomości od kogoś poinformuj o tym administratora, może on wyłączyć możliwość wysyłania wiadomości dla danego użytkownika.");
$faq[] = array("Dostałem spam lub obraźliwy email od kogoś z tego forum!", "Przykro nam z tego powodu. System wysyłania email'i tego forum zawiera funkcje umożliwiające odnalezienie użytkowników, którzy piszą takie listy. Prześlij administratorowi forum pełną kopię listu, który otrzymałeś. Ważne jest by zawierała wszystkie nagłówki (w których zawarte są informacje o nadawcy). Wtedy może on odpowiednio zadziałać.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Sprawy phpBB 2");
$faq[] = array("Kto napisał ten skrypt?", "Ten program (w niezmodyfikowanej formie) został stworzony, opublikowany i jest własnością <a href=\"http://www.phpbb.com/\" target=\"_blank\">Grupy phpBB</a>. Jest udostępniany na zasadach licencji GNU General Public Licence i może być dowolnie dystrybuowany. Więcej szczegółów pod odnośnikiem.");
$faq[] = array("Dlaczego funkcja X nie jest dostępna?", "To oprogramowanie jest dziełem i własnością Grupy phpBB. Jeżeli sądzisz, że jakaś funkcja powinna zostać do niego dodana odwiedź stronę phpbb.com i zobacz co w tej sprawie ma do powiedzenia Grupa phpBB. Prosimy nie pisać próśb o nowe funkcje na forum z phpbb.com. Grupa wykorzystuje system SourceForge do zarządzania tymi prośbami. Poszukaj na forum opinii Grupy phpBB na temat danej funkcji, jeśli taka już tam się znajduje, a w przeciwnym wypadku postępuj zgodnie z podaną tam procedurą zgłaszania prośb.");
$faq[] = array("Z kim mam się skontaktować w sprawach nadużyć i prawnych dotyczących tego forum?", "Powinieneś skontaktować się z administratorem forum. Jeżeli nie możesz dowiedzieć się kto nim jest spróbuj skontaktować się z którymś z moderatorów forum i jego spytać do kogo się zwrócić. Jeżeli nadal nie dostaniesz odpowiedzi skontaktuj się z właścicielem domeny (poszukaj go przez whois) lub, jeśli strona jest na serwerze darmowych kont (republika.pl, wp.pl, hg.pl, phg.pl itp.) skontaktuj się z działem nadużyć firmy zarządzającej serwerem. Pamiętaj, że Grupa phpBB nie ma żadnej kontroli i nie może być w żaden sposób odpowiedzialna za to jak, gdzie i przez kogo używane jest forum. Nie ma sensu kontaktować się z Grupą phpBB w sprawach prawnych nie związanych bezpośrednio ze stroną phpbb.com lub oprogramowaniem phpBB. Jeśli napiszesz do Grupy phpBB w sprawie wykorzystania skryptu przez osoby trzecie otrzymasz prawdopodobnie zwięzłą odpowiedź lub też nie otrzymasz jej wcale.");

//
// This ends the FAQ entries
//

?>