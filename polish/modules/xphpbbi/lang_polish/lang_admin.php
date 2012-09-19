<?php

/***************************************************************************
 *                            lang_admin.php [Polish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/06/10 00:31:19 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Ogólne';
$lang['Users'] = 'Użytkownicy';
$lang['Groups'] = 'Grupy';
$lang['Forums'] = 'Fora';
$lang['Styles'] = 'Style';

$lang['Configuration'] = 'Konfiguracja';
$lang['Permissions'] = 'Zezwolenia';
$lang['Manage'] = 'Zarządzaj';
$lang['Disallow'] = 'Zabroń nazwy';
$lang['Prune'] = 'Czyszczenie';
$lang['Mass_Email'] = 'Mas. Korespondencja';
$lang['Ranks'] = 'Rangi';
$lang['Smilies'] = 'Uśmieszki';
$lang['Ban_Management'] = 'Banicja';
$lang['Word_Censor'] = 'Cenzura Słów';
$lang['Export'] = 'Eksport';
$lang['Create_new'] = 'Utwórz';
$lang['Add_new'] = 'Dodaj';
$lang['Backup_DB'] = 'Kopia Zapasowa';
$lang['Restore_DB'] = 'Odtwarzanie';


//
// Index
//
$lang['Admin'] = 'Administracja';
$lang['Not_admin'] = 'Nie masz autoryzacji do administracji tym forum';
$lang['Welcome_phpBB'] = 'Witamy w phpBB';
$lang['Admin_intro'] = 'Dziękujemy, że wybrałeś phpBB do obsługi Twojego forum. Ten ekran przedstawia krótki przegląd różnorodnych danych statystycznych, dotyczących forum. Możesz wrócić do tej strony klikając odnośnik <u>Indeks Administracji</u> na lewym panelu. Aby powrócić do strony głównej forum kliknij logo phpBB na w lewym panelu. Inne odnośniki po lewej stronie ekranu dają dostęp do narzędzi kontrolujących każdy aspekt zachowania forum. Każde z nich zawiera osobne instrukcje użycia.';
$lang['Main_index'] = 'Str. Główna Forum';
$lang['Forum_stats'] = 'Statystyki Forum';
$lang['Admin_Index'] = 'Indeks Administracji';
$lang['Preview_forum'] = 'Podgląd Forum';

$lang['Click_return_admin_index'] = 'Kliknij %sTutaj%s aby powrócić do Indeksu Administracji';

$lang['Statistic'] = 'Statystyki';
$lang['Value'] = 'Wartość';
$lang['Number_posts'] = 'Liczba postów';
$lang['Posts_per_day'] = 'Postów dziennie';
$lang['Number_topics'] = 'Liczba tematów';
$lang['Topics_per_day'] = 'Tematów dziennie';
$lang['Number_users'] = 'Liczba użytkowników';
$lang['Users_per_day'] = 'Użytk. dziennie';
$lang['Board_started'] = 'Start Forum';
$lang['Avatar_dir_size'] = 'Katalog Emblematów';
$lang['Database_size'] = 'Baza Danych';
$lang['Gzip_compression'] = 'Kompresja Gzip';
$lang['Not_available'] = 'Niedostępne';

$lang['ON'] = 'TAK'; // This is for GZip compression
$lang['OFF'] = 'NIE'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Narzędzia Bazy Danych';

$lang['Restore'] = 'Przywracanie';
$lang['Backup'] = 'Kopia Zapasowa';
$lang['Restore_explain'] = 'Tutaj przeprowadzone zostanie odtwarzanie wszystkich tabeli phpBB z zapisanego pliku. Jeżeli twój serwer na to pozwala możesz podać plik skompresowany w gzip a zostanie on automatycznie rozpakowany. <b>UWAGA</b> Nadpisane zostaną wszystkie istniejące dane. Proces przywracania może długo potrwać i do jego zakończenia nie wolno odejść z tej strony.';
$lang['Backup_explain'] = 'Tutaj możesz utworzyć kopię zapasową wszystkich danych phpBB. Jeżeli masz dodatkowo utworzone tabele w tej samej bazie danych co phpBB, które chciałbyś skopiować wpisz ich nazwy oddzielone przecinkami w pole Dodatkowe Tabele. Jeżeli Twój serwer ma taką funkcję możesz także skompresować plik w gzip aby zmniejszyć jego rozmiar przed ściągnięciem.';

$lang['Backup_options'] = 'Opcje Kopii';
$lang['Start_backup'] = 'Zacznij Kopiowanie';
$lang['Full_backup'] = 'Pełna Kopia';
$lang['Structure_backup'] = 'Tylko Struktura';
$lang['Data_backup'] = 'Tylko Dane';
$lang['Additional_tables'] = 'Dodatkowe Tabele';
$lang['Gzip_compress'] = 'Skompresuj plik w Gzip';
$lang['Select_file'] = 'Wybierz plik';
$lang['Start_Restore'] = 'Zacznij Odtwarzanie';

$lang['Restore_success'] = 'Baza Danych została odtworzona.<br /><br />Twoje forum powinno już wrócić do stanu sprzed wykonania kopii.';
$lang['Backup_download'] = 'Ściąganie rozpocznie się lada chwila, zaczekaj';
$lang['Backups_not_supported'] = 'Przepraszamy, ale kopie zapasowe nie są obecnie obsługiwane dla Twojego systemu';

$lang['Restore_Error_uploading'] = 'Błąd w wysyłaniu pliku z danymi';
$lang['Restore_Error_filename'] = 'Problem z nazwą pliku, spróbuj wysłać inny';
$lang['Restore_Error_decompress'] = 'Nie mogę zdekompresować pliku, wyślij sam plik tekstowy';
$lang['Restore_Error_no_file'] = 'Nie wysłano żadnego pliku';


//
// Auth pages
//
$lang['Select_a_User'] = 'Wybierz Użytkownika';
$lang['Select_a_Group'] = 'Wybierz Grupę';
$lang['Select_a_Forum'] = 'Wybierz Forum';
$lang['Auth_Control_User'] = 'Kontrola Zezwoleń Użytkowników'; 
$lang['Auth_Control_Group'] = 'Kontrola Zezwoleń Grup'; 
$lang['Auth_Control_Forum'] = 'Kontrola Zezwoleń For'; 
$lang['Look_up_User'] = 'Wybierz Użytkownika'; 
$lang['Look_up_Group'] = 'Wybierz Grupy'; 
$lang['Look_up_Forum'] = 'Wybierz Forum'; 

$lang['Group_auth_explain'] = 'Tutaj możesz zmieniać zezwolenia i status moderatora przydzielony każdej grupie użytkowników. Nie zapomnij zmieniając ustawienia, że indywidualne uprawnienia mogą nadal zezwalać użytkownikowi na dostęp do for itp. Zostaniesz ostrzeżony gdy tak się stanie.';
$lang['User_auth_explain'] = 'Tutaj możesz zmieniać zezwolenia i status moderatora dla każdego użytkownika. Nie zapomnij zmieniając ustawienia, że uprawnienia grupowe mogą nadal zezwalać użytkownikowi na dostęp do for itp. Zostaniesz ostrzeżony gdy tak się stanie.';
$lang['Forum_auth_explain'] = 'Tutaj możesz zmienić poziomy autoryzacji dla każdego forum. Masz do dyspozycji metodę prostą i zaawansowaną, z których druga oferuje większe możliwości kontroli ustawień. Pamiętaj, że zmiana ustawień dotyczących for zadecyduje o tym, co użytkownicy będą mogli na nich robić.';

$lang['Simple_mode'] = 'Tryb Prosty';
$lang['Advanced_mode'] = 'Tryb Zaawansowany';
$lang['Moderator_status'] = 'Status Moderatora';

$lang['Allowed_Access'] = 'Dostęp Zezwolony';
$lang['Disallowed_Access'] = 'Dostęp Zabroniony';
$lang['Is_Moderator'] = 'Moderator';
$lang['Not_Moderator'] = 'Nie Moderator';

$lang['Conflict_warning'] = 'Ostrzeżenie o Konflikcie Autoryzacji';
$lang['Conflict_access_userauth'] = 'Ten użytkownik nadal ma dostęp do tego forum dzięki uprawnieniom grupowym. Aby w pełni pozbawić go tych uprawnień musisz zmienić ustawienia danej grupy, lub go z niej usunąć. Grupy dające mu prawa (i fora, których to dotyczy) są wypisane poniżej.';
$lang['Conflict_mod_userauth'] = 'Ten użytkownik nadal ma prawa moderatora dzięki uprawnieniom grupowym. Aby w pełni pozbawić go tych uprawnień musisz zmienić ustawienia danej grupy, lub go z niej usunąć. Grupy dające mu prawa (i fora, których to dotyczy) są wypisane poniżej.';

$lang['Conflict_access_groupauth'] = 'Poniższy użytkownik (lub użytkownicy) nadal ma dostęp do tego forum dzięki ustawieniom indywidualnym. Aby pozbawić go tych uprawnień musisz zmienić ich zezwolenia. Użytkownicy o takich prawach (i fora, których to dotyczy) są wypisane poniżej.';
$lang['Conflict_mod_groupauth'] = 'Poniższy użytkownik (lub użytkownicy) nadal ma prawa moderatora na tym forum dzięki ustawieniom indywidualnym. Aby pozbawić go tych uprawnień musisz zmienić ich zezwolenia. Użytkownicy o takich prawach (i fora, których to dotyczy) są wypisane poniżej.';

$lang['Public'] = 'Publiczne';
$lang['Private'] = 'Prywatne';
$lang['Registered'] = 'Zarejestrowani';
$lang['Administrators'] = 'Administratorzy';
$lang['Hidden'] = 'Ukryte';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'WSZYSCY';
$lang['Forum_REG'] = 'ZAREJESTR.';
$lang['Forum_PRIVATE'] = 'PRYWATNE';
$lang['Forum_MOD'] = 'MODERAT.';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Widoczny';
$lang['Read'] = 'Czytanie';
$lang['Post'] = 'Pisanie';
$lang['Reply'] = 'Odpowiedzi';
$lang['Edit'] = 'Edycja';
$lang['Delete'] = 'Usuwanie';
$lang['Sticky'] = 'Przyklejone';
$lang['Announce'] = 'Ogłoszenia'; 
$lang['Vote'] = 'Głosowanie';
$lang['Pollcreate'] = 'Tworzenie ankiet';

$lang['Permissions'] = 'Zezwolenia';
$lang['Simple_Permission'] = 'Proste Zezwolenia';

$lang['User_Level'] = 'Poziom użytkownika'; 
$lang['Auth_User'] = 'Użytkownik';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Członkostwo w grupach';
$lang['Usergroup_members'] = 'Tak grupa ma następującyh członków';

$lang['Forum_auth_updated'] = 'Zezwolenia For zostały zaktualizowane';
$lang['User_auth_updated'] = 'Zezwolenia Użytkowników zostały zaktualizowane';
$lang['Group_auth_updated'] = 'Zezwolenia Grup zostały zaktualizowane';

$lang['Auth_updated'] = 'Zezwolenia zostały zmienione';
$lang['Click_return_userauth'] = 'Kliknij %sTutaj%s aby powrócić do Zezwoleń Użytkowników';
$lang['Click_return_groupauth'] = 'Kliknij %sTutaj%s aby powrócić do Zezwoleń Grup';
$lang['Click_return_forumauth'] = 'Kliknij %sTutaj%s aby powrócić do Zezwoleń For';


//
// Banning
//
$lang['Ban_control'] = 'Kontrola Banicji';
$lang['Ban_explain'] = 'Tutaj mozesz kontrolować banicje użytkowników. Uzyskasz to przez banowanie danego użytkownika, zakresu numerów IP lub hostów. Dzięki tym metodom użytkownik nie dostanie się nawet na stronę główną. Aby zapobiec rejestracji pod innymi nazwami możesz także zbanować konkretny adres email. Pamiętaj jednak, że zbanowanie adresu email nie uniemożliwia uczestnictwa w działalności forum, to tego służą dwie pierwsze metody.';
$lang['Ban_explain_warn'] = 'Pamiętaj, że wpisanie zakresu adresów IP oznacza dopisanie do listy każdego adresu z podanego zakresu. Gdzie tylko będzie to możliwe dodawane będą znaki zamienne, ograniczające liczbę wpisów. Jeżeli naprawdę musisz wpisać zakres, staraj się by był najmniejszy lub lepiej podaj konkretne adresy.';

$lang['Select_username'] = 'Wybierz Nazwę Użytkownika';
$lang['Select_ip'] = 'Wybierz IP';
$lang['Select_email'] = 'Wybierz adres Email';

$lang['Ban_username'] = 'Zbanuj jednego lub wielu konkretnych użytkowników';
$lang['Ban_username_explain'] = 'Możesz zbanować wielu użytkowników jednocześnie korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla twojego komputera i przeglądarki';

$lang['Ban_IP'] = 'Zbanuj jeden lub więcej adresów IP lub hostów';
$lang['IP_hostname'] = 'Adresy IP lub hosty';
$lang['Ban_IP_explain'] = 'Aby podać kilka adresów IP lub hostów oddziel je przecinkami. Aby określić zakres adresów IP oddziel początkowy i końcowy myślnikiem (-), znakiem zamiennym jest *.';

$lang['Ban_email'] = 'Zbanuj jeden lub więcej adresów email';
$lang['Ban_email_explain'] = 'Aby podać więcej niż jeden adres email, oddziel je przecinkami. Znakiem zamiennym jest *, np. *@hotmail.com.';

$lang['Unban_username'] = 'Odbanuj jednego lub więcej użytkowników';
$lang['Unban_username_explain'] = 'Możesz odbanować wielu użytkowników jednocześnie korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla twojego komputera i przeglądarki.';

$lang['Unban_IP'] = 'Odbanuj jeden lub więcej adresów IP';
$lang['Unban_IP_explain'] = 'Możesz odbanować wiele adresów IP jednocześnie korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla twojego komputera i przeglądarki.';

$lang['Unban_email'] = 'Odbanuj jeden lub więcej adresów email';
$lang['Unban_email_explain'] = 'Możesz odbanować wiele adresów email jednocześnie korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla twojego komputera i przeglądarki.';

$lang['No_banned_users'] = 'Brak zbanowanych nazw';
$lang['No_banned_ip'] = 'Brak zbanowanych adresów IP';
$lang['No_banned_email'] = 'Brak zbanowanych adresów email';

$lang['Ban_update_sucessful'] = 'Lista banicji została zaktualizowana';
$lang['Click_return_banadmin'] = 'Kliknij %sTutaj%s aby powrócić do Kontroli Banicji';


//
// Configuration
//
$lang['General_Config'] = 'Ustawienia Główne';
$lang['Config_explain'] = 'Poniższy formularz pozwala dostosować wszystkie główne opcje forum. Szczegółowa konfiguracja For i Użytkowników jest dostępna z odnośników po lewej stronie.';

$lang['Click_return_config'] = 'Kliknij %sTutaj%s aby powrócić do Ustawień Głównych';

$lang['General_settings'] = 'Generalne Ustawienia Forum';
$lang['Server_name'] = 'Nazwa Domeny';
$lang['Server_name_explain'] = 'Nazwa domeny, z której działa to forum';
$lang['Script_path'] = 'Ścieżka skryptu';
$lang['Script_path_explain'] = 'Ścieżka pod którą znajduje się phpBB2 relatywnie do nazwy domeny';
$lang['Server_port'] = 'Port Serwera';
$lang['Server_port_explain'] = 'Port na którym działa twój serwer, zwykle 80, zmień tylko jeśli jest inny';
$lang['Site_name'] = 'Nazwa Strony';
$lang['Site_desc'] = 'Opis Strony';
$lang['Board_disable'] = 'Wyłącz forum';
$lang['Board_disable_explain'] = 'To uczyni forum niedostępnym dla użytkowników. Pozostań w tym czasie zalogowany, inaczej nie będziesz mógł się powtórnie zalogować!';
$lang['Acct_activation'] = 'Włącz aktywację kont';
$lang['Acc_None'] = 'Brak'; // These three entries are the type of activation
$lang['Acc_User'] = 'Użytkownik';
$lang['Acc_Admin'] = 'Admin';
$lang['Visual_confirm'] = 'Potwierdzenie wizualne';
$lang['Visual_confirm_explain'] = 'Wymaga od użytkownika podania kodu generowanego na obrazku podczas rejestracji.';
$lang['Abilities_settings'] = 'Podstawowe Ustawienia Forum i Użytkowników';
$lang['Max_poll_options'] = 'Maksymalna liczba opcji ankiety';
$lang['Flood_Interval'] = 'Interwał Anty-Floodowy';
$lang['Flood_Interval_explain'] = 'Ilość sekund, zanim można wysłać nowy post'; 
$lang['Board_email_form'] = 'Email przez forum';
$lang['Board_email_form_explain'] = 'Użytkownicy wysyłają email\'e przez forum';
$lang['Topics_per_page'] = 'Tematów na Stronę';
$lang['Posts_per_page'] = 'Postów na Stronę';
$lang['Hot_threshold'] = 'Postów do określenia Popularny';
$lang['Default_style'] = 'Domyślny Styl';
$lang['Override_style'] = 'Zignoruj Styl Użytkownika';
$lang['Override_style_explain'] = 'Zamienia styl użytkownika na domyślny';
$lang['Default_language'] = 'Domyślny Język';
$lang['Date_format'] = 'Format Daty';
$lang['System_timezone'] = 'Strefa Czasowa Systemu';
$lang['Enable_gzip'] = 'Włącz Komprecję GZip';
$lang['Enable_prune'] = 'Włącz Czyszczenie Forum';
$lang['Allow_HTML'] = 'Zezwól na HTML';
$lang['Allow_BBCode'] = 'Zezwól na BBCode';
$lang['Allowed_tags'] = 'Dozwolone tagi HTML';
$lang['Allowed_tags_explain'] = 'Oddziel znaczniki przecinkami';
$lang['Allow_smilies'] = 'Zezwól na Uśmieszki';
$lang['Smilies_path'] = 'Ścieżka dostępu do Uśmieszków';
$lang['Smilies_path_explain'] = 'Ścieżka od katalogu głównego forum, np. images/smilies';
$lang['Allow_sig'] = 'Zezwól na Podpisy';
$lang['Max_sig_length'] = 'Maksymalna długość podpisu';
$lang['Max_sig_length_explain'] = 'Maksymalna ilość znaków w podpisie użytkownika';
$lang['Allow_name_change'] = 'Zezwól na zmiany Nazw Użytkownika';

$lang['Avatar_settings'] = 'Ustawienia Emblematów';
$lang['Allow_local'] = 'Włącz galerię emblematów';
$lang['Allow_remote'] = 'Włącz zdalne emblematy';
$lang['Allow_remote_explain'] = 'Emblematy będą wyświetlane z innych serwerów';
$lang['Allow_upload'] = 'Włącz wysyłanie emblematów';
$lang['Max_filesize'] = 'Maksymalny rozmiar pliku emblematu';
$lang['Max_filesize_explain'] = 'Dla obrazków wysyłanych na serwer';
$lang['Max_avatar_size'] = 'Maksymalne Rozmiary Emblematu';
$lang['Max_avatar_size_explain'] = '(Wysokość x Szerokość w pikselach)';
$lang['Avatar_storage_path'] = 'Ścieżka Zapisu Emblematów';
$lang['Avatar_storage_path_explain'] = 'Ścieżka od katalogu głównego phpBB, np. images/avatars';
$lang['Avatar_gallery_path'] = 'Ścieżka Galerii Emblematów';
$lang['Avatar_gallery_path_explain'] = 'Ścieżka od katalogu głównego phpBB dla wcześniej ładowanych plików, np. images/avatars/gallery';

$lang['COPPA_settings'] = 'Ustawienia COPPA';
$lang['COPPA_fax'] = 'Numer Faxu COPPA';
$lang['COPPA_mail'] = 'Adres Pocztowy COPPA';
$lang['COPPA_mail_explain'] = 'To jest adres pocztowy, pod który rodzice będą przesyłali formularze rejestracji COPPA';

$lang['Email_settings'] = 'Ustawienia Email\'i';
$lang['Admin_email'] = 'Adres Email Admina';
$lang['Email_sig'] = 'Podpis pod Email';
$lang['Email_sig_explain'] = 'Ten tekst będzie dodawany do każdej wiadomości wysyłanej przez forum';
$lang['Use_SMTP'] = 'Używaj Serwera SMTP';
$lang['Use_SMTP_explain'] = 'Powiedz tak, jeśli chcesz aby wiadomości email były przesyłane przez odpowiedni serwer zamiast lokalnej funkcji mail';
$lang['SMTP_server'] = 'Adres Serwera SMTP';
$lang['SMTP_username'] = 'Nazwa Użytkownika SMTP';
$lang['SMTP_username_explain'] = 'Wpisz nazwę tylko jeśli twój serwer smtp wymaga tego';
$lang['SMTP_password'] = 'Hasło SMTP';
$lang['SMTP_password_explain'] = 'Wpisz hasło tylko jeśli twój serwer smtp wymaga tego';

$lang['Disable_privmsg'] = 'Prywatne Wiadomości';
$lang['Inbox_limits'] = 'Maks. wiadomości w Skrzynce';
$lang['Sentbox_limits'] = 'Maks. wiadomości w Wysłanych';
$lang['Savebox_limits'] = 'Maks. wiadomości w Zapisanych';

$lang['Cookie_settings'] = 'Ustawienia Cookies'; 
$lang['Cookie_settings_explain'] = 'Kontrolują w jaki sposób zdefiniowane zostanie cookie wysłane do przeglądarki. W większości przypadków powinny wystarczyć wartości domyślne. Jeśli zechcesz je zmienić rób to ostrożnie, nieprawidłowe ustawienia mogą uniemożliwić logowanie.';
$lang['Cookie_domain'] = 'Domena Cookie';
$lang['Cookie_name'] = 'Nazwa Cookie';
$lang['Cookie_path'] = 'Ścieżka Cookie';
$lang['Cookie_secure'] = 'Bezpieczne Cookie [ https ]';
$lang['Cookie_secure_explain'] = 'Jeśli twój serwer działa na SSL ustaw to na włączone, inaczej pozostaw wyłączone';
$lang['Session_length'] = 'Długość Sesji [ sekundy ]';

//
// Forum Management
//
$lang['Forum_admin'] = 'Administracja Forum';
$lang['Forum_admin_explain'] = 'W tym miejscu możesz dodawać, usuwać, modyfikować, zmieniać kolejność i ponownie synchronizować kategorie i fora.';
$lang['Edit_forum'] = 'Edytuj forum';
$lang['Create_forum'] = 'Nowe Forum';
$lang['Create_category'] = 'Nowa Kategoria';
$lang['Remove'] = 'Usuń';
$lang['Action'] = 'Działanie';
$lang['Update_order'] = 'Aktualizuj Porządek';
$lang['Config_updated'] = 'Konfiguracja Forum Została Zaktualizowana';
$lang['Edit'] = 'Edycja';
$lang['Delete'] = 'Usuń';
$lang['Move_up'] = 'W górę';
$lang['Move_down'] = 'W dół';
$lang['Resync'] = 'Synch.';
$lang['No_mode'] = 'Nie określono trybu';
$lang['Forum_edit_delete_explain'] = 'Poniższy formularz pozwoli zmienić wszystkie podstawowe opcje forum. Aby zmienić szczegółowe ustawienia Użytkowników i For skorzystaj z odnośników po lewej.';

$lang['Move_contents'] = 'Przenieś całą zawartość';
$lang['Forum_delete'] = 'Usuń Forum';
$lang['Forum_delete_explain'] = 'Poniższy formularz pozwoli na usunięcie forum (lub kategorii) i zdecydowanie co zrobić z tematami (lub forami), które były w nim zawarte.';

$lang['Status_locked'] = 'Zablokowany';
$lang['Status_unlocked'] = 'Odblokowany';
$lang['Forum_settings'] = 'Generalne Ustawienia Forum';
$lang['Forum_name'] = 'Nazwa Forum';
$lang['Forum_desc'] = 'Opis';
$lang['Forum_status'] = 'Status Forum';
$lang['Forum_pruning'] = 'Automatyczne Czyszczenie';

$lang['prune_freq'] = 'Sprawdź wiek tematu co';
$lang['prune_days'] = 'Usuń tematy, w których nie pisano nic przez';
$lang['Set_prune_data'] = 'Włączyłeś automatyczne czyszczenie dla tego forum ale nie okresliłeś jego parametrów. Wróć i wpisz wszystkie dane.';

$lang['Move_and_Delete'] = 'Przenieś i Usuń';

$lang['Delete_all_posts'] = 'Usuń wszystkie posty';
$lang['Nowhere_to_move'] = 'Nie ma dokąd przenieść';

$lang['Edit_Category'] = 'Edytuj Kategorię';
$lang['Edit_Category_explain'] = 'Użyj tego formularza do zmiany nazwy kategorii.';

$lang['Forums_updated'] = 'Dane dotyczące For i Kategorii zostały zaktualizowane';

$lang['Must_delete_forums'] = 'Musisz usunąć wszystkie fora przed usunięciem tej kategorii';

$lang['Click_return_forumadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Forum';


//
// Smiley Management
//
$lang['smiley_title'] = 'Edycja Uśmieszków';
$lang['smile_desc'] = 'Na tej stronie możesz dodawać, usuwać i zmieniać ikony emocji lub uśmieszki, które użytkownicy mogą używać w swoich postach i prywatnych wiadomościach.';

$lang['smiley_config'] = 'Konfiguracja Uśmieszku';
$lang['smiley_code'] = 'Kod Uśmieszku';
$lang['smiley_url'] = 'Plik Obrazka Uśmieszku';
$lang['smiley_emot'] = 'Emocja Uśmieszku';
$lang['smile_add'] = 'Nowy Uśmieszek';
$lang['Smile'] = 'Uśmiech';
$lang['Emotion'] = 'Emocja';

$lang['Select_pak'] = 'Wybierz Plik Paczki (.pak)';
$lang['replace_existing'] = 'Zamień Istniejący Uśmiech';
$lang['keep_existing'] = 'Zachowaj Istniejący Uśmiech';
$lang['smiley_import_inst'] = 'Powinieneś rozpakować paczkę uśmieszków i wysłać pliki do odpowiedniego katalogu Uśmieszków. Potem ustaw odpowiednio poniższy formularz i importuj paczkę.';
$lang['smiley_import'] = 'Import Paczki Uśmieszków';
$lang['choose_smile_pak'] = 'Wybierz Plik .pak Paczki Uśmieszków';
$lang['import'] = 'Importuj Uśmieszki';
$lang['smile_conflicts'] = 'Co zrobić w przypadku konfliktów';
$lang['del_existing_smileys'] = 'Usuń istniejące uśmieczki przed importem';
$lang['import_smile_pack'] = 'Importuj Paczkę';
$lang['export_smile_pack'] = 'Utwórz Paczkę';
$lang['export_smiles'] = 'Aby utworzyć paczkę uśmieszków z obecnie zainstalowanych kliknij %sTutaj%s aby ściągnąć plik .pak uśmieszków. Nazwij go odpowiednio zachowując rozszerzenie .pak. Potem spakuj ten plik razem z obrazkami uśmieszków w archiwum zip.';

$lang['smiley_add_success'] = 'Uśmieszek zosyał dodany';
$lang['smiley_edit_success'] = 'Uśmieszek został zaktualizowany';
$lang['smiley_import_success'] = 'Paczka Uśmieszków została zaimportowana!';
$lang['smiley_del_success'] = 'Uśmieszek został usunięty';
$lang['Click_return_smileadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Uśmieszkami';


//
// User Management
//
$lang['User_admin'] = 'Administracja Użytkownikami';
$lang['User_admin_explain'] = 'Tutaj możesz zmienić informacje o użytkowniku i ustawione przez niego opcje. Aby zmienić jego prawa dostępu skorzystaj z systemu zmiany zezwoleń.';

$lang['Look_up_user'] = 'Pokaż użytkownika';

$lang['Admin_user_fail'] = 'Nie można było zaktualizować profilu użytkownika.';
$lang['Admin_user_updated'] = 'Profil użytkownika został zaktualizowany.';
$lang['Click_return_useradmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Użytkownikami';

$lang['User_delete'] = 'Usuń tego użytkownika';
$lang['User_delete_explain'] = 'Kliknij tutaj aby usunąć tego użytkownika, nie można tego cofnąć.';
$lang['User_deleted'] = 'Użytkownik został usunięty.';

$lang['User_status'] = 'Użytkownik jest aktywny';
$lang['User_allowpm'] = 'Może wysyłać Prywatne Wiadomości';
$lang['User_allowavatar'] = 'Może pokazywać Emblemat';

$lang['Admin_avatar_explain'] = 'Tutaj możesz zobaczyć i usunąć obecny Emblemat użytkownika.';

$lang['User_special'] = 'Specjalne pola administratora';
$lang['User_special_explain'] = 'Tych pól nie mogą zmieniać sami użytkownicy. Możesz tutaj zmodyfikować ich status i inne opcje dotyczące ich możliwości działania.';


//
// Group Management
//
$lang['Group_administration'] = 'Administracja Grupami';
$lang['Group_admin_explain'] = 'Z tego panelu możesz administrować wszystkimi grupami użytkowników; możesz je usuwać, tworzyć i zmieniać ustawienia. Możesz wybierać moderatorów, zmieniać na otwarte lub zamknięte i modyfikować nazwę oraz opis.';
$lang['Error_updating_groups'] = 'Wystąpił błąd podczas aktualizacji grup';
$lang['Updated_group'] = 'Grupa została zaktualizowana';
$lang['Added_new_group'] = 'Nowa grupa została utworzona';
$lang['Deleted_group'] = 'Grupa została usunięta';
$lang['New_group'] = 'Utwórz nową grupę';
$lang['Edit_group'] = 'Edytuj grupę';
$lang['group_name'] = 'Nazwa Grupy';
$lang['group_description'] = 'Opis Grupy';
$lang['group_moderator'] = 'Moderator Grupy';
$lang['group_status'] = 'Status Grupy';
$lang['group_open'] = 'Otwarta';
$lang['group_closed'] = 'Zamknięta';
$lang['group_hidden'] = 'Ukryta';
$lang['group_delete'] = 'Usuń Grupę';
$lang['group_delete_check'] = 'Usuń tą grupę';
$lang['submit_group_changes'] = 'Wyślij Zmiany';
$lang['reset_group_changes'] = 'Anuluj Zmiany';
$lang['No_group_name'] = 'Musisz wpisać nazwę dla tej grupy';
$lang['No_group_moderator'] = 'Musisz podać moderatora tej grupy';
$lang['No_group_mode'] = 'Musisz podać tryb działania grupy, otwarta lub zamknięta';
$lang['No_group_action'] = 'Nie określono żadnego działania';
$lang['delete_group_moderator'] = 'Usunąć poprzedniego moderatora grupy?';
$lang['delete_moderator_explain'] = 'Jeżeli zmieniasz moderatora zaznacz to pole aby usunąć starego moderatora. Jeżeli tego nie zrobisz stanie się on zwykłym członkiem grupy.';
$lang['Click_return_groupsadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Grupami.';
$lang['Select_group'] = 'Wybierz grupę';
$lang['Look_up_group'] = 'Pokaż grupę';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Czyszczenie Forum';
$lang['Forum_Prune_explain'] = 'Usunięte zostaną tematy, w których nie napisano nic nowego przez określoną liczbę dni. Jeżeli nie wpiszesz żadnej liczby usunięte zostaną wszystkie tematy. Nietknięte pozostaną tematy z aktywnymi ankietami oraz ogłoszenia. Będziesz musiał usunąć je ręcznie.';
$lang['Do_Prune'] = 'Wykonaj';
$lang['All_Forums'] = 'Wszystkie Fora';
$lang['Prune_topics_not_posted'] = 'Wyczyść tematy bez nowych odpowiedzi przez dni';
$lang['Topics_pruned'] = 'Usunięto tematów';
$lang['Posts_pruned'] = 'Usunięto postów';
$lang['Prune_success'] = 'Czyszczenie zostało wykonane';


//
// Word censor
//
$lang['Words_title'] = 'Cenzura Słów';
$lang['Words_explain'] = 'Z tego miejsca możesz dodawać, zmieniać i usuwać słowa, które zostaną automatycznie ocenzurowane na Twoich forach. Dodatkowo ludzie nie będą mogli się rejestrować z nazwami zawierającymi te słowa. Znaki uniwersalne (*) są dozwolone, np. *test* obejmie przetestowanie, test* obejmie testowanie, *test obejmie przedtest.';
$lang['Word'] = 'Słowo';
$lang['Edit_word_censor'] = 'Zmień Cenzurę';
$lang['Replacement'] = 'Zamiennik';
$lang['Add_new_word'] = 'Dodaj nowe słowo';
$lang['Update_word'] = 'Aktualizuj cenzora';

$lang['Must_enter_word'] = 'Musisz wpisać słowo i jego zamiennik';
$lang['No_word_selected'] = 'Nie wybrano słowa do edycji';

$lang['Word_updated'] = 'Wybrana cenzura została zaktualizowana';
$lang['Word_added'] = 'Nowa cenzura została dodana';
$lang['Word_removed'] = 'Wybrana cenzura została usunięta';

$lang['Click_return_wordadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Cenzurą';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Stąd możesz wysłać wiadomość do wszystkich użytkowników lub wszystkich członków którejś grupy. Zostanie to wykonane przez wysłanie email\'a pod podany adres administrcyjny, wraz z kopia BCC (pol. UDW) wysłaną do wszystkich użytkowników. Jeżeli wysyłasz list do dużej grupy osób czekaj cierpliwie na zakończenie procesu i nie przerywaj go. Wysyłanie masowej korespondencji może zająć dużo czasu, i po zakończeniu procesu zostaniesz o tym powiadomiony.';
$lang['Compose'] = 'Utwórz'; 

$lang['Recipients'] = 'Odbiorcy'; 
$lang['All_users'] = 'Wszyscy Użytkownicy';

$lang['Email_successfull'] = 'Twoja wiadomość została wysłana';
$lang['Click_return_massemail'] = 'Kliknij %sTutaj%s aby powrócić do formularza Masowej Korespondencji';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administracja Rangami';
$lang['Ranks_explain'] = 'Używając tego formularza możesz dodawać, zmieniać, przeglądać i usuwać rangi. Możesz też tworzyć specjalne rangi i przydzielać je poprzez system zarządzania użytkowników.';

$lang['Add_new_rank'] = 'Dodaj nową rangę';

$lang['Rank_title'] = 'Nazwa Rangi';
$lang['Rank_special'] = 'Jest Rangą Specjalną';
$lang['Rank_minimum'] = 'Minimum Postów';
$lang['Rank_maximum'] = 'Maksimum Postów';
$lang['Rank_image'] = 'Obraz Rangi';
$lang['Rank_image_explain'] = 'Możesz tutaj określić mały obrazek związany z daną rangą';

$lang['Must_select_rank'] = 'Musisz wybrać rangę';
$lang['No_assigned_rank'] = 'Nie określono rang specjalnych';

$lang['Rank_updated'] = 'Ranga została zaktualizowana';
$lang['Rank_added'] = 'Ranga została dodana';
$lang['Rank_removed'] = 'Ranga została usunięta';
$lang['No_update_ranks'] = 'Ranga została usunięta, jednakże konta użytkowników, którym została przydzielona nie zostały zmienione. Będziesz musiał ręcznie usunąć rangę z tych kont';

$lang['Click_return_rankadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Rangami';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Kontrola Zabronionych Nazw';
$lang['Disallow_explain'] = 'Tutaj możesz kontrolować nazwy użytkowników, których nie wolno używać. Zabronione nazwy mogą zawierać znak zamienny *. Pamiętaj, że nie możesz zabronić nazwy, która już została zarejestrowana. Najpierw usuń tego użytkownika a potem dopisz tutaj nazwę.';

$lang['Delete_disallow'] = 'Usuń';
$lang['Delete_disallow_title'] = 'Usuń Zabronioną Nazwę';
$lang['Delete_disallow_explain'] = 'Możesz usunąć zabronioną nazwę wybierając ją z tej listy i klikając Wyślij.';

$lang['Add_disallow'] = 'Dodaj';
$lang['Add_disallow_title'] = 'Dodaj Zabronioną Nazwę';
$lang['Add_disallow_explain'] = 'Możesz zabronić korzystania z jakiejś nazwy wykorzystując znak * równoważny dowolnemu ciągowi znaków';

$lang['No_disallowed'] = 'Brak Zabronionych Nazw';

$lang['Disallowed_deleted'] = 'Zabroniona nazwa została usunięta';
$lang['Disallow_successful'] = 'Zabroniona nazwa została dodana';
$lang['Disallowed_already'] = 'Nazwa, którą wpisałeś, nie może być zakazana. Albo jest już na liście albo istnieje już taki użytkownik.';

$lang['Click_return_disallowadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Zabronionymi Nazwami';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administracja Stylami';
$lang['Styles_explain'] = 'Korzystając z tego narzędzia możesz dodawać, usuwać i zarządzać stylami (oraz szablonami) dostępnymi dla użytkowników';
$lang['Styles_addnew_explain'] = 'Poniższa lista zawiera wszystkie style, które są dostępne dla posiadanych przez ciebie szablonów. Elementy na tej liście nie zostały jeszcze zainstalowane w bazie danych phpBB. Aby zainstalować styl po prostu kliknij odnośnik Instaluj obok wpisu';

$lang['Select_template'] = 'Wybierz Szablon';

$lang['Style'] = 'Styl';
$lang['Template'] = 'Szablon';
$lang['Install'] = 'Instaluj';
$lang['Download'] = 'Ściągnij';

$lang['Edit_theme'] = 'Edytuj Styl';
$lang['Edit_theme_explain'] = 'W formularzu poniżej możesz zmienić ustawienia dla wybranego stylu';

$lang['Create_theme'] = 'Utwórz Styl';
$lang['Create_theme_explain'] = 'Użyj formularza poniżej aby utworzyć nowy styl dla wybranego szablonu. Wpisując kolory (do których możesz używać jedynie wartości szesnastkowych) nie dodawaj początkowego #, np. CCCCCC jest poprawne ale #CCCCCC już nie.';

$lang['Export_themes'] = 'Eksportuj Styl';
$lang['Export_explain'] = 'Z tego panelu możesz eksportować dane stylu dla wybranego szablonu. Wybierz styl z poniższej listy, a skrypt utworzy plik jego konfiguracji i spróbuje zapisać go w wybranym katalogu stylów. Jeżeli nie będzie możliwe zapisanie pliku otrzymasz możliwość ściągnięcia go. Aby plik został zapisany serwer musi mieć uprawnienia zapisu w danym katalogu. Więcej informacji znajdziesz w podręczniku phpBB 2.';

$lang['Theme_installed'] = 'Wybrany styl został zainstalowany';
$lang['Style_removed'] = 'Wybrany styl został usunięty z bazy danych. Aby całkowicie usunąć styl z systemu musisz usunąć go ręcznie z katalogu szablonów.';
$lang['Theme_info_saved'] = 'Informacje o stylu dla wybranego szablonu zostały zapisane. Powinieneś teraz przywrócić uprawnienia dostępu pliku theme_info.cfg (i jeśli to potrzebne także dla katalogu szablonów) na \'tylko do odczytu\'.';
$lang['Theme_updated'] = 'Wybrany styl został zaktualizowany. Powinieneś wyeksportować nowe ustawienia.';
$lang['Theme_created'] = 'Styl utworzony. Powinieneś teraz wyeksportować go do pliku konfiguracyjnego aby go zabezpieczyć lub użyć gdzie indziej.';

$lang['Confirm_delete_style'] = 'Czy na pewno chcesz usunąć ten styl';

$lang['Download_theme_cfg'] = 'Eksporter nie mógł zapisać pliku z informacjami o stylu. Kliknij przycisk poniżej aby ściągnąć ten plik przez przeglądarkę. Kiedy już go ściągniesz wyślij go ręcznie do katalogu z plikami szablonu. Możesz wtedy spakować pliki dla dystrybucji lub użycia gdzie indziej.';
$lang['No_themes'] = 'Wybrany szablon nie ma żadnych dołączonych stylów. Aby utworzyć nowy styl kliknij odnośnik Utwórz Nowy na lewym panelu.';
$lang['No_template_dir'] = 'Otwarcie katalogu szablonów było niemożliwe. Być może nie istnieje lub serwer nie ma do niego praw dostępu.';
$lang['Cannot_remove_style'] = 'Nie możesz usunąć wybranego stylu, ponieważ jest obecnie domyślnym dla forum. Zmień ustawienia domyślne i spróbuj ponownie.';
$lang['Style_exists'] = 'Nazwa stylu, którą wybrałeś już istnieje, wróć i spróbuj z inną nazwą.';

$lang['Click_return_styleadmin'] = 'Kliknij %sTutaj%s aby powrócić do Administracji Stylami';

$lang['Theme_settings'] = 'Ustawienia Tematu';
$lang['Theme_element'] = 'Element Tematu';
$lang['Simple_name'] = 'Prosta Nazwa';
$lang['Value'] = 'Wartość';
$lang['Save_Settings'] = 'Zapisz Ustawienia';

$lang['Stylesheet'] = 'Arkusz CSS';
$lang['Background_image'] = 'Obrazek Tła';
$lang['Background_color'] = 'Kolor Tła';
$lang['Theme_name'] = 'Nazwa Tematu';
$lang['Link_color'] = 'Kolor Odnośnika';
$lang['Text_color'] = 'Kolor Tekstu';
$lang['VLink_color'] = 'Kolor Odwiedzonego Odnośnika';
$lang['ALink_color'] = 'Kolor Aktywnego Odnośnika';
$lang['HLink_color'] = 'Kolor Odnośnika pod Kursorem';
$lang['Tr_color1'] = 'Kolor Rzędu Tabeli 1';
$lang['Tr_color2'] = 'Kolor Rzędu Tabeli 2';
$lang['Tr_color3'] = 'Kolor Rzędu Tabeli 3';
$lang['Tr_class1'] = 'Klasa Rzędu Tabeli 1';
$lang['Tr_class2'] = 'Klasa Rzędu Tabeli 2';
$lang['Tr_class3'] = 'Klasa Rzędu Tabeli 3';
$lang['Th_color1'] = 'Kolor Nagłówka Tabeli 1';
$lang['Th_color2'] = 'Kolor Nagłówka Tabeli 2';
$lang['Th_color3'] = 'Kolor Nagłówka Tabeli 3';
$lang['Th_class1'] = 'Klasa Nagłówka Tabeli 1';
$lang['Th_class2'] = 'Klasa Nagłówka Tabeli 2';
$lang['Th_class3'] = 'Klasa Nagłówka Tabeli 3';
$lang['Td_color1'] = 'Kolor Komórki Tabeli 1';
$lang['Td_color2'] = 'Kolor Komórki Tabeli 2';
$lang['Td_color3'] = 'Kolor Komórki Tabeli 3';
$lang['Td_class1'] = 'Klasa Komórki Tabeli 1';
$lang['Td_class2'] = 'Klasa Komórki Tabeli 2';
$lang['Td_class3'] = 'Klasa Komórki Tabeli 3';
$lang['fontface1'] = 'Czcionka 1';
$lang['fontface2'] = 'Czcionka 2';
$lang['fontface3'] = 'Czcionka 3';
$lang['fontsize1'] = 'Rozmiar Czcionki 1';
$lang['fontsize2'] = 'Rozmiar Czcionki 2';
$lang['fontsize3'] = 'Rozmiar Czcionki 3';
$lang['fontcolor1'] = 'Kolor Czcionki 1';
$lang['fontcolor2'] = 'Kolor Czcionki 2';
$lang['fontcolor3'] = 'Kolor Czcionki 3';
$lang['span_class1'] = 'Klasa Span 1';
$lang['span_class2'] = 'Klasa Span 2';
$lang['span_class3'] = 'Klasa Span 3';
$lang['img_poll_size'] = 'Rozmiar Obrazka Głosowania [px]';
$lang['img_pm_size'] = 'Rozmiar Statustu Pr. Wiadom. [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Witamy w Instalacji phpBB 2';
$lang['Initial_config'] = 'Podstawowa Konfiguracja';
$lang['DB_config'] = 'Konfiguracja Bazy Danych';
$lang['Admin_config'] = 'Konfiguracja Admina';
$lang['continue_upgrade'] = 'Kiedy ściągniesz plik konfiguracyjny na swój komputer możesz kliknąć przycisk "Kontynuuj Aktualizację" aby przejść dalej. Zaczekaj z wysłaniem pliku konfiguracyjnego na serwer do zakończenia aktualizacji.';
$lang['upgrade_submit'] = 'Kontynuuj Aktualizację';

$lang['Installer_Error'] = 'Wystąpił błąd podczas instalacji';
$lang['Previous_Install'] = 'Wykryto poprzednią instalację';
$lang['Install_db_error'] = 'Wystąpił błąd przy aktualizacji bazy danych';

$lang['Re_install'] = 'Twoja poprzednia instalacja jest nadal aktywna.<br /><br />Jeżeli chcesz ponownie zainstalować phpBB 2 kliknij przycisk Tak poniżej. Pamiętaj, że wykonanie tego usunie wszystkie istniejące dane bez żadnych kopii zapasowych! Konto administratora zostanie odtworzone z tą samą nazwą i hasłem co przed ponowną instalacją ale bez innych ustawień.<br /><br />Zastanów się przed wciśnięciem Tak!';

$lang['Inst_Step_0'] = 'Dziękujemy, że wybrałeś phpBB 2. Aby zainstalować forym wpisz poniższe szczegóły. Pamiętaj, że baza danych, w której chcesz zainstalować forum powinna wcześniej istnieć. Jeżeli instalujesz w bazie danych używającej ODBC, np. MS Access powinieneś najpierw utworzyć odpowiednie DSN.';

$lang['Start_Install'] = 'Zacznij Instalację';
$lang['Finish_Install'] = 'Zakończ Instalację';

$lang['Default_lang'] = 'Domyślny Język Forum';
$lang['DB_Host'] = 'Server Bazy Danych / DSN';
$lang['DB_Name'] = 'Nazwa Bazy Danych';
$lang['DB_Username'] = 'Użytkownik Bazy Danych';
$lang['DB_Password'] = 'Hasło Bazy Danych';
$lang['Database'] = 'Baza Danych';
$lang['Install_lang'] = 'Wybierz Język Instalacji';
$lang['dbms'] = 'Typ Bazy Danych';
$lang['Table_Prefix'] = 'Prefiks dla tabel w bazie danych';
$lang['Admin_Username'] = 'Nazwa Administratora';
$lang['Admin_Password'] = 'Hasło Administratora';
$lang['Admin_Password_confirm'] = 'Hasło Administratora [ Potwierdź ]';

$lang['Inst_Step_2'] = 'Konto administratora zostało utworzone. W tej chwili podstawowa instalacja jest zakończona. Zostaniesz przeniesiony do strony, która pozwoli ci zmienić wszelkie ustawienia forum. Pamiętaj o sprawdzeniu Konfiguracji Głównej i zmianie tych opcji, które tego wymagają. Dziękujemy, że wybrałeś phpBB 2.';

$lang['Unwriteable_config'] = 'Twój plik konfigiracyjny nie może zostać zapisany. Jego kopia zostanie wysłana do ciebie jeśli wciśniesz poniższy przycisk. Powinieneś wysłać ją ręcznie do katalogu z phpBB 2. Kiedy to zrobisz zaloguj się do nowego forum, używając twoich danych podanych wcześniej, oraz odwiedzić centrum administracji forum (do którego odnośnik pojawi się na dole każdej strony forum, kiedy się zalogujesz) aby zmienić opcje. Dziękujemy, że wybrałeś phpBB 2.';
$lang['Download_config'] = 'Ściągnij Plik Konfiguracyjny';

$lang['ftp_choose'] = 'Wybierz Metodę Ściągania';
$lang['ftp_option'] = '<br />Jeżeli opcje FTP są dostępne w tej wersji PHP możesz mieć także możliwość automatycznego wysłania pliku w odpowiednie miejsce przez FTP.';
$lang['ftp_instructs'] = 'Wybrałeś opcję automatycznego wysłania pliku do katalogu zawierającego phpBB 2. Poniżej wpisz informacje potrzebne do wykonania tego polecenia. Pamiętaj, że ścieżka do phpBB 2 powinna być dokładnie taka jaką używasz przy połączeniach z FTP przez inne programy.';
$lang['ftp_info'] = 'Wpisz informację o twoim FTP';
$lang['Attempt_ftp'] = 'Spróbuj wysłać plik przez ftp automatycznie';
$lang['Send_file'] = 'Wyślij plik do mnie a ja umieszczę go ręcznie na serwerze';
$lang['ftp_path'] = 'Ścieżka FTP do phpBB 2';
$lang['ftp_username'] = 'Użytkownik FTP';
$lang['ftp_password'] = 'Hasło FTP';
$lang['Transfer_config'] = 'Rozpocznij Transfer';
$lang['NoFTP_config'] = 'Próba wysłania pliku drogą ftp na swoje miejsce nie powiodła się. Ściągnij plik konfiguracyjny i wyślij go na miejsce samodzielnie.';

$lang['Install'] = 'Instalacja';
$lang['Upgrade'] = 'Aktualizacja';


$lang['Install_Method'] = 'Wybierz metodę instalacji';

$lang['Install_No_Ext'] = 'Konfiguracja php na serwerze nie obsługuje wybranej bazy danych';

$lang['Install_No_PCRE'] = 'phpBB2 wymaga kompatybilnego z Perlem Modułu Wyrażeń Regularnych, którego twoja konfiguracja php najwyraźniej nie obsługuje!';

//
// That's all Folks!
// -------------------------------------------------

?>