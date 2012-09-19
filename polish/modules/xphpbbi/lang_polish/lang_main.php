<?php
/***************************************************************************
 *                            lang_main.php [Polish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-2';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategoria';
$lang['Topic'] = 'Temat';
$lang['Topics'] = 'Tematy';
$lang['Replies'] = 'Odpowiedzi';
$lang['Views'] = 'Wyświetleń';
$lang['Post'] = 'Post';
$lang['Posts'] = 'Posty';
$lang['Posted'] = 'Wysłany';
$lang['Username'] = 'Użytkownik';
$lang['Password'] = 'Hasło';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Wysłał';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Czas';
$lang['Hours'] = 'Godzin';
$lang['Message'] = 'Wiadomość';

$lang['1_Day'] = '1 Dzień';
$lang['7_Days'] = '7 Dni';
$lang['2_Weeks'] = '2 Tygodnie';
$lang['1_Month'] = '1 Miesiąc';
$lang['3_Months'] = '3 Miesiące';
$lang['6_Months'] = '6 Miesięcy';
$lang['1_Year'] = '1 Rok';

$lang['Go'] = 'Idź';
$lang['Jump_to'] = 'Skocz do';
$lang['Submit'] = 'Wyślij';
$lang['Reset'] = 'Wyczyść';
$lang['Cancel'] = 'Anuluj';
$lang['Preview'] = 'Podgląd';
$lang['Confirm'] = 'Zatwierdź';
$lang['Spellcheck'] = 'Sprawdź pisownię';
$lang['Yes'] = 'Tak';
$lang['No'] = 'Nie';
$lang['Enabled'] = 'Włączony';
$lang['Disabled'] = 'Wyłączony';
$lang['Error'] = 'Błąd';

$lang['Next'] = 'Następny';
$lang['Previous'] = 'Poprzedni';
$lang['Goto_page'] = 'Idź do strony';
$lang['Joined'] = 'Dołączył';
$lang['IP_Address'] = 'Adres IP';

$lang['Select_forum'] = 'Wybierz forum';
$lang['View_latest_post'] = 'Zobacz ostatni post';
$lang['View_newest_post'] = 'Zobacz najnowszy post';
$lang['Page_of'] = 'Strona <b>%d</b> z <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Numer ICQ'; 
$lang['AIM'] = 'Adres AIM'; 
$lang['MSNM'] = 'MSN Messenger'; 
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Forum %s Strona Główna';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Napisz nowy temat';
$lang['Reply_to_topic'] = 'Odpowiedz do tematu';
$lang['Reply_with_quote'] = 'Odpowiedz z cytatem';

$lang['Click_return_topic'] = 'Kliknij %sTutaj%s aby powrócić do tematu'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kliknij %sTutaj%s aby spróbować ponownie';
$lang['Click_return_forum'] = 'Kliknij %sTutaj%s aby powrócić na forum';
$lang['Click_view_message'] = 'Kliknij %sTutaj%s aby zobaczyć swoją wiadomość';
$lang['Click_return_modcp'] = 'Kliknij %sTutaj%s aby powrócić do Panelu Kontrolnego Moderacji';
$lang['Click_return_group'] = 'Kliknij %sTutaj%s aby powrócić do informacji o grupach';

$lang['Admin_panel'] = 'Panel Administracyjny';

$lang['Board_disable'] = 'Przepraszamy, ale to forum jest obecnie niedostępne. Zapraszamy później';


//
// Global Header strings
//
$lang['Registered_users'] = 'Zarejestrowani Użytkownicy:';
$lang['Browsing_forum'] = 'Użytkownicy przeglądający to forum:';
$lang['Online_users_zero_total'] = 'Na Forum jest <b>0</b> użytkowników :: ';
$lang['Online_users_total'] = 'Na Forum jest <b>%d</b> użytkowników :: ';
$lang['Online_user_total'] = 'Na Forum jest <b>%d</b> użytkownik :: ';
$lang['Reg_users_zero_total'] = '0 Zarejestrowanych, ';
$lang['Reg_users_total'] = '%d Zarejestrowanych, ';
$lang['Reg_user_total'] = '%d Zarejestrowany, ';
$lang['Hidden_users_zero_total'] = '0 Ukrytych i ';
$lang['Hidden_users_total'] = '%d Ukrytych i ';
$lang['Hidden_user_total'] = '%d Ukrytych i ';
$lang['Guest_users_zero_total'] = '0 Gości';
$lang['Guest_users_total'] = '%d Gości';
$lang['Guest_user_total'] = '%d Gość';
$lang['Record_online_users'] = 'Najwięcej użytkowników <b>%s</b> było obecnych %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Ostatnio odwiedziłeś nas %s'; // %s replaced by date/time
$lang['Current_time'] = 'Obecny czas to %s'; // %s replaced by time

$lang['Search_new'] = 'Zobacz posty od ostatniej wizyty';
$lang['Search_your_posts'] = 'Zobacz swoje posty';
$lang['Search_unanswered'] = 'Zobacz posty bez odpowiedzi';

$lang['Register'] = 'Rejestracja';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Zmień swój profil';
$lang['Search'] = 'Szukaj';
$lang['Memberlist'] = 'Użytkownicy';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Przewodnik BBCode';
$lang['Usergroups'] = 'Grupy';
$lang['Last_Post'] = 'Ostatni Post';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderatorzy';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Nasi użytkownicy napisali <b>0</b> wiadomości'; // Number of posts
$lang['Posted_articles_total'] = 'Nasi użytkownicy napisali <b>%d</b> wiadomości'; // Number of posts
$lang['Posted_article_total'] = 'Nasi użytkownicy napisali <b>%d</b> wiadomość'; // Number of posts
$lang['Registered_users_zero_total'] = 'Mamy <b>0</b> zarejestrowanych użytkowników'; // # registered users
$lang['Registered_users_total'] = 'Mamy <b>%d</b> zarejestrowanych użytkowników'; // # registered users
$lang['Registered_user_total'] = 'Mamy <b>%d</b> zarejestrowanego użytkownika'; // # registered users
$lang['Newest_user'] = 'Ostatnio zarejestrował się <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Brak nowych postów od twojej ostatniej wizyty';
$lang['No_new_posts'] = 'Brak nowych postów';
$lang['New_posts'] = 'Nowe posty';
$lang['New_post'] = 'Nowy post';
$lang['No_new_posts_hot'] = 'Brak nowych postów [ Popularny ]';
$lang['New_posts_hot'] = 'Nowe posty [ Popularny ]';
$lang['No_new_posts_locked'] = 'Brak nowych postów [ Zablokowany ]';
$lang['New_posts_locked'] = 'Nowe posty [ Zablokowany ]';
$lang['Forum_is_locked'] = 'Forum Zablokowane';


//
// Login
//
$lang['Enter_password'] = 'Wpisz nazwę użytkownika i hasło by się zalogować';
$lang['Login'] = 'Zaloguj';
$lang['Logout'] = 'Wyloguj';

$lang['Forgotten_password'] = 'Zapomniałem hasła';

$lang['Log_me_in'] = 'Zaloguj mnie automatycznie przy każdej wizycie';

$lang['Error_login'] = 'Podałeś nieprawidłowe lub nieaktywne dane użytkownika';


//
// Index page
//
$lang['Index'] = 'Indeks';
$lang['No_Posts'] = 'Brak Postów';
$lang['No_forums'] = 'Brak For';

$lang['Private_Message'] = 'Prywatna Wiadomość';
$lang['Private_Messages'] = 'Prywatne Wiadomości';
$lang['Who_is_Online'] = 'Kto jest na Forum';

$lang['Mark_all_forums'] = 'Oznacz wszystkie fora jako przeczytane';
$lang['Forums_marked_read'] = 'Wszystkie fora oznaczono jako przeczytane';


//
// Viewforum
//
$lang['View_forum'] = 'Zobacz Forum';

$lang['Forum_not_exist'] = 'Wybrane przez Ciebie forum nie istnieje';
$lang['Reached_on_error'] = 'Dotarłeś na tą stronę w wyniku błędu';

$lang['Display_topics'] = 'Wyświetl tematy z ostatnich';
$lang['All_Topics'] = 'Wszystkie Tematy';

$lang['Topic_Announcement'] = '<b>Ogłoszenie:</b>';
$lang['Topic_Sticky'] = '<b>Przyklejony:</b>';
$lang['Topic_Moved'] = '<b>Przesunięty:</b>';
$lang['Topic_Poll'] = '<b>[ Ankieta ]</b>';

$lang['Mark_all_topics'] = 'Oznacz wszystkie tematy jako przeczytane';
$lang['Topics_marked_read'] = 'Tematy na tym forum zostały oznaczone jako przeczytane';

$lang['Rules_post_can'] = '<b>Możesz</b> pisać nowe tematy';
$lang['Rules_post_cannot'] = '<b>Nie możesz</b> pisać nowych tematów';
$lang['Rules_reply_can'] = '<b>Możesz</b> odpowiadać w tematach';
$lang['Rules_reply_cannot'] = '<b>Nie możesz</b> odpowiadać w tematach';
$lang['Rules_edit_can'] = '<b>Możesz</b> zmieniać swoje posty';
$lang['Rules_edit_cannot'] = '<b>Nie możesz</b> zmieniać swoich postów';
$lang['Rules_delete_can'] = '<b>Możesz</b> usuwać swoje posty';
$lang['Rules_delete_cannot'] = '<b>Nie możesz</b> usuwać swoich postów';
$lang['Rules_vote_can'] = '<b>Możesz</b> głosować w ankietach';
$lang['Rules_vote_cannot'] = '<b>Nie możesz</b> głosować w ankietach';
$lang['Rules_moderate'] = '<b>Możesz</b> %smoderować to forum%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Nie ma żadnych postów na tym forum<br />Kliknij na przycisk <b>Nowy Temat</b> aby coś napisać';


//
// Viewtopic
//
$lang['View_topic'] = 'Zobacz temat';

$lang['Guest'] = 'Gość';
$lang['Post_subject'] = 'Temat postu';
$lang['View_next_topic'] = 'Zobacz następny temat';
$lang['View_previous_topic'] = 'Zobacz poprzedni temat';
$lang['Submit_vote'] = 'Wyślij Głos';
$lang['View_results'] = 'Zobacz Wyniki';

$lang['No_newer_topics'] = 'Nie ma nowszych tematów na tym forum';
$lang['No_older_topics'] = 'Nie ma starszych tematów na tym forum';
$lang['Topic_post_not_exist'] = 'Wybrany przez Ciebie temat lub post nie istnieje';
$lang['No_posts_topic'] = 'Nie istnieją żadne posty dla tego tematu';

$lang['Display_posts'] = 'Wyświetl posty z ostatnich';
$lang['All_Posts'] = 'Wszystkie Posty';
$lang['Newest_First'] = 'Najpierw Nowsze';
$lang['Oldest_First'] = 'Najpierw Starsze';

$lang['Back_to_top'] = 'Powrót do góry';

$lang['Read_profile'] = 'Zobacz profil autora'; 
$lang['Send_email'] = 'Wyślij email do autora';
$lang['Visit_website'] = 'Odwiedź stronę autora';
$lang['ICQ_status'] = 'Status ICQ';
$lang['Edit_delete_post'] = 'Zmień/Usuń ten post';
$lang['View_IP'] = 'Zobacz IP autora';
$lang['Delete_post'] = 'Usuń ten post';

$lang['wrote'] = 'napisał'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Cytat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Ostatnio zmieniony przez %s dnia %s, w całości zmieniany %d raz'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Ostatnio zmieniony przez %s dnia %s, w całości zmieniany %d razy'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Zablokuj ten temat';
$lang['Unlock_topic'] = 'Odblokuj ten temat';
$lang['Move_topic'] = 'Przesuń ten temat';
$lang['Delete_topic'] = 'Usuń ten temat';
$lang['Split_topic'] = 'Podziel ten temat';

$lang['Stop_watching_topic'] = 'Przestań śledzić ten temat';
$lang['Start_watching_topic'] = 'Śledź odpowiedzi w tym temacie';
$lang['No_longer_watching'] = 'Przestałeś śledzić ten temat';
$lang['You_are_watching'] = 'Rozpocząłeś śledzenie tego tematu';

$lang['Total_votes'] = 'Wszystkich Głosów';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Treść wiadomości';
$lang['Topic_review'] = 'Przegląd tematu';

$lang['No_post_mode'] = 'Nie określono typu postu';

$lang['Post_a_new_topic'] = 'Napisz nowy temat';
$lang['Post_a_reply'] = 'Napisz odpowiedź';
$lang['Post_topic_as'] = 'Napisz temat jako';
$lang['Edit_Post'] = 'Zmień post';
$lang['Options'] = 'Opcje';

$lang['Post_Announcement'] = 'Ogłoszenie';
$lang['Post_Sticky'] = 'Przyklejony';
$lang['Post_Normal'] = 'Normalny';

$lang['Confirm_delete'] = 'Czy na pewno chcesz usunąć ten post?';
$lang['Confirm_delete_poll'] = 'Czy na pewno chcesz usunąć tą ankietę?';

$lang['Flood_Error'] = 'Nie możesz wysłać nowego postu tak szybko po poprzednim, zaczekaj chwilę i spróbuj ponownie';
$lang['Empty_subject'] = 'Musisz wpisać temat jeśli wysyłasz nowy wątek';
$lang['Empty_message'] = 'Musisz wpisać wiadomość przed wysłaniem';
$lang['Forum_locked'] = 'To forum jest zablokowane, nie możesz pisać dodawać ani zmieniać na nim czegokolwiek';
$lang['Topic_locked'] = 'Ten temat jest zablokowany bez możliwości zmiany postów lub pisania odpowiedzi';
$lang['No_post_id'] = 'Musisz wybrać post do edycji';
$lang['No_topic_id'] = 'Musisz wybrać temat do wysłania odpowiedzi';
$lang['No_valid_mode'] = 'Możesz jedynie pisać nowe, odpowiadać, zmieniać lub cytować wiadomości, wróć i spróbuj ponownie';
$lang['No_such_post'] = 'Taki post nie istnieje, wróć i spróbuj ponownie';
$lang['Edit_own_posts'] = 'Przepraszamy, ale możesz zmieniać jedynie swoje posty';
$lang['Delete_own_posts'] = 'Przepraszamy, ale możesz usuwać jedynie swoje posty';
$lang['Cannot_delete_replied'] = 'Przepraszamy, ale nie możesz usuwać postów, które uzyskały odpowiedś';
$lang['Cannot_delete_poll'] = 'Przepraszamy, ale nie możesz usunąć aktywnej ankiety';
$lang['Empty_poll_title'] = 'Musisz wpisać tytuł dla ankiety';
$lang['To_few_poll_options'] = 'Musisz wpisać przynajmniej dwie opcje ankiety';
$lang['To_many_poll_options'] = 'Podałeś zbyt wiele opcji dla ankiety';
$lang['Post_has_no_poll'] = 'Ten post nie ma ankiety';
$lang['Already_voted'] = 'Oddałeś już głos w tej ankiecie';
$lang['No_vote_option'] = 'Musisz wybrać opcję podczas głosowania';

$lang['Add_poll'] = 'Dodaj Ankietę';
$lang['Add_poll_explain'] = 'Jeżeli nie chcesz dodawać ankiety do tego tematu, pozostaw pola puste';
$lang['Poll_question'] = 'Pytanie do ankiety';
$lang['Poll_option'] = 'Opcja ankiety';
$lang['Add_option'] = 'Dodaj opcję';
$lang['Update'] = 'Aktualizuj';
$lang['Delete'] = 'Usuń';
$lang['Poll_for'] = 'Czas trwania';
$lang['Days'] = 'Dni'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Wpisz 0 lub pozostaw puste dla niekończącej się ankiety ]';
$lang['Delete_poll'] = 'Usuń Ankietę';

$lang['Disable_HTML_post'] = 'Wyłącz HTML w tym poście';
$lang['Disable_BBCode_post'] = 'Wyłącz BBCode w tym poście';
$lang['Disable_Smilies_post'] = 'Wyłącz Uśmieszki w tym poście';

$lang['HTML_is_ON'] = 'HTML: <u>TAK</u>';
$lang['HTML_is_OFF'] = 'HTML: <u>NIE</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s: <u>TAK</u>';
$lang['BBCode_is_OFF'] = '%sBBCode%s: <u>NIE</u>';
$lang['Smilies_are_ON'] = 'Uśmieszki: <u>TAK</u>';
$lang['Smilies_are_OFF'] = 'Uśmieszki: <u>NIE</u>';

$lang['Attach_signature'] = 'Dodaj podpis (może być zmieniony w profilu)';
$lang['Notify'] = 'Powiadom mnie gdy ktoś odpowie';
$lang['Delete_post'] = 'Usuń ten post';

$lang['Stored'] = 'Twoja wiadomość została zapisana';
$lang['Deleted'] = 'Twoja wiadomość została usunięta';
$lang['Poll_delete'] = 'Twoja ankieta została usunięta';
$lang['Vote_cast'] = 'Twój głos został zapisany';

$lang['Topic_reply_notification'] = 'Powiadomienie o Odpowiedzi';

$lang['bbcode_b_help'] = 'Tekst pogrubiony: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Tekst kursywą: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Tekst podkreślony: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Cytat: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Pokaż kod: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Lista uporządkowana: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Wstaw obrazek: [img]http://adres_obrazka[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Wstaw adres: [url]http://adres[/url] or [url=http://adres]Tekst adresu[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Zamknij wszystkie otwarte tagi bbCode';
$lang['bbcode_s_help'] = 'Kolor czcionki: [color=red]tekst[/color]  Rada: możesz także podać color=#FF0000';
$lang['bbcode_f_help'] = 'Rozmiar czcionki: [size=x-small]mały tekst[/size]';

$lang['Emoticons'] = 'Emotikony';
$lang['More_emoticons'] = 'Więcej Ikon';

$lang['Font_color'] = 'Kolor';
$lang['color_default'] = 'Domyślny';
$lang['color_dark_red'] = 'Ciemnoczerwony';
$lang['color_red'] = 'Czerwony';
$lang['color_orange'] = 'Pomarańćzowy';
$lang['color_brown'] = 'Brązowy';
$lang['color_yellow'] = 'Żółty';
$lang['color_green'] = 'Zielony';
$lang['color_olive'] = 'Oliwkowy';
$lang['color_cyan'] = 'Błękitny';
$lang['color_blue'] = 'Niebieski';
$lang['color_dark_blue'] = 'Ciemnoniebieski';
$lang['color_indigo'] = 'Purpurowy';
$lang['color_violet'] = 'Fioletowy';
$lang['color_white'] = 'Biały';
$lang['color_black'] = 'Czarny';

$lang['Font_size'] = 'Rozmiar';
$lang['font_tiny'] = 'Minimalny';
$lang['font_small'] = 'Mały';
$lang['font_normal'] = 'Normalny';
$lang['font_large'] = 'Duży';
$lang['font_huge'] = 'Ogromny';

$lang['Close_Tags'] = 'Zamknij Tagi';
$lang['Styles_tip'] = 'Rada: Style mogą być stosowane szybko do zaznaczonego tekstu';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Prywatne Wiadomości';

$lang['Login_check_pm'] = 'Zaloguj się, by sprawdzić wiadomości';
$lang['New_pms'] = 'Masz %d nowych wiadomości'; // You have 2 new messages
$lang['New_pm'] = 'Masz %d nową wiadomość'; // You have 1 new message
$lang['No_new_pm'] = 'Nie masz nowych wiadomości';
$lang['Unread_pms'] = 'Masz %d nieprzeczytanych wiadomości';
$lang['Unread_pm'] = 'Masz %d nieprzeczytaną wiadomość';
$lang['No_unread_pm'] = 'Nie masz nieprzeczytanych wiadomości';
$lang['You_new_pm'] = 'Nowa prywatna wiadomość czeka na Ciebie w Skrzynce';
$lang['You_new_pms'] = 'Nowe prywatne wiadomości czekają na Ciebie w Skrzynce';
$lang['You_no_new_pm'] = 'Nie ma dla Ciebie żadnych nowych prywatnych wiadomości';

$lang['Unread_message'] = 'Nowa wiadomość';
$lang['Read_message'] = 'Przeczytana wiadomość';

$lang['Read_pm'] = 'Odczytaj wiadomość';
$lang['Post_new_pm'] = 'Napisz wiadomość';
$lang['Post_reply_pm'] = 'Odpowiedz na wiadomość';
$lang['Post_quote_pm'] = 'Cytuj wiadomość';
$lang['Edit_pm'] = 'Zmień wiadomość';

$lang['Inbox'] = 'Skrzynka';
$lang['Outbox'] = 'Wysłane';
$lang['Savebox'] = 'Zapisane';
$lang['Sentbox'] = 'Do wysłania';
$lang['Flag'] = 'Flaga';
$lang['Subject'] = 'Temat';
$lang['From'] = 'Od';
$lang['To'] = 'Do';
$lang['Date'] = 'Data';
$lang['Mark'] = 'Zaznacz';
$lang['Sent'] = 'Wysłana';
$lang['Saved'] = 'Zapisana';
$lang['Delete_marked'] = 'Usuń Zaznaczone';
$lang['Delete_all'] = 'Usuń Wszystkie';
$lang['Save_marked'] = 'Zapisz Zaznaczone'; 
$lang['Save_message'] = 'Zapisz Wiadomość';
$lang['Delete_message'] = 'Usuń Wiadomość';

$lang['Display_messages'] = 'Wyświetl wiadomości z ostatnich'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Wszystkie Wiadomości';

$lang['No_messages_folder'] = 'Nie masz wiadomości w tym folderze';

$lang['PM_disabled'] = 'Prywatne Wiadomości zostały wyłączone na tym forum';
$lang['Cannot_send_privmsg'] = 'Przepraszam, ale administrator zabronił Ci wysyłać prywatnych wiadomości';
$lang['No_to_user'] = 'Musisz wpisać nazwę użytkownika aby wysłać tą wiadomość';
$lang['No_such_user'] = 'Taki użytkownik nie istnieje';

$lang['Disable_HTML_pm'] = 'Wyłącz HTML w tej wiadomości';
$lang['Disable_BBCode_pm'] = 'Wyłącz BBCode w tej wiadomości';
$lang['Disable_Smilies_pm'] = 'Wyłącz Uśmieszki w tej wiadomości';

$lang['Message_sent'] = 'Twoja wiadomość została wysłana';

$lang['Click_return_inbox'] = 'Kliknij %sTutaj%s aby powrócić do Skrzynki odbiorczej';
$lang['Click_return_index'] = 'Kliknij %sTutaj%s aby powrócić do Strony Głównej';

$lang['Send_a_new_message'] = 'Wyślij nową prywatną wiadomość';
$lang['Send_a_reply'] = 'Odpowiedz na prywatną wiadomość';
$lang['Edit_message'] = 'Zmień prywatną wiadomość';

$lang['Notification_subject'] = 'Nadeszła nowa Prywatna Wiadomość';

$lang['Find_username'] = 'Znajdź użytkownika';
$lang['Find'] = 'Znajdź';
$lang['No_match'] = 'Nie znaleziono pasujących';

$lang['No_post_id'] = 'Nie określono ID postu';
$lang['No_such_folder'] = 'Nie istnieje taki folder';
$lang['No_folder'] = 'Nie określono folderu';

$lang['Mark_all'] = 'Zaznacz wszystkie';
$lang['Unmark_all'] = 'Odznacz wszystkie';

$lang['Confirm_delete_pm'] = 'Czy na pewno chcesz usunąć tą wiadomość?';
$lang['Confirm_delete_pms'] = 'Czy na pewno chcesz usunąć te wiadomości?';

$lang['Inbox_size'] = 'Wiadomości w Skrzynce zajmują %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Wysłane wiadomości zajmują %d%%';
$lang['Savebox_size'] = 'Zapisane wiadomości zajmują %d%%';

$lang['Click_view_privmsg'] = 'Kliknij %sTutaj%s aby odwiedzić twoją Skrzynkę';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Przedstawiamy profil :: %s'; // %s is username 
$lang['About_user'] = 'Wszystko o %s';

$lang['Preferences'] = 'Preferencje';
$lang['Items_required'] = 'Pola oznaczone * są wymagane, chyba że napisano inaczej';
$lang['Registration_info'] = 'Infomacje Rejestracji';
$lang['Profile_info'] = 'Informacje Profilu';
$lang['Profile_info_warn'] = 'Te informacje będą widoczne publicznie';
$lang['Avatar_panel'] = 'Panel kontrolny emblematów';
$lang['Avatar_gallery'] = 'Galeria Emblematów';

$lang['Website'] = 'Strona WWW';
$lang['Location'] = 'Skąd';
$lang['Contact'] = 'Kontakt z';
$lang['Email_address'] = 'Adres email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Wyślij prywatną wiadomość';
$lang['Hidden_email'] = '[ Ukryty ]';
$lang['Search_user_posts'] = 'Szukaj postów tego użytkownika';
$lang['Interests'] = 'Zainteresowania';
$lang['Occupation'] = 'Zawód'; 
$lang['Poster_rank'] = 'Ranga';

$lang['Total_posts'] = 'Postów';
$lang['User_post_pct_stats'] = '%d%% z całości'; // 15% of total
$lang['User_post_day_stats'] = '%.2f postów dziennie'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Znajdź wszystkie posty %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Przepraszamy, ale ten użytkownik nie istnieje';
$lang['Wrong_Profile'] = 'Nie możesz zmieniać cudzego profilu.';

$lang['Only_one_avatar'] = 'Można określić tylko jeden typ emblematu';
$lang['File_no_data'] = 'Plik pod podanym adresem nie zawiera żadnych danych';
$lang['No_connection_URL'] = 'Nie można było połączyć się z podanym przez Ciebie adresem';
$lang['Incomplete_URL'] = 'Wpisany adres jest niekompletny';
$lang['Wrong_remote_avatar_format'] = 'Podany adres emblematu nie jest prawidłowy';
$lang['No_send_account_inactive'] = 'Przepraszamy, ale Twoje hasło nie może być odzyskane gdyż Twoje konto jest obecnie nieaktywne. Skontaktuj się z administratorem aby uzyskać więcej informacji';

$lang['Always_smile'] = 'Zawsze włączaj Uśmieszki';
$lang['Always_html'] = 'Zawsze włączaj HTML';
$lang['Always_bbcode'] = 'Zawsze włączaj BBCode';
$lang['Always_add_sig'] = 'Zawsze dodawaj mój podpis';
$lang['Always_notify'] = 'Zawsze powiadamiaj o odpowiedziach';
$lang['Always_notify_explain'] = 'Wysyła email gdy ktoś odpowie w temacie, w którym napisałeś wiadomość. Możesz to zmienić przy każdej napisanej wiadomości';

$lang['Board_style'] = 'Styl Forum';
$lang['Board_lang'] = 'Język Forum';
$lang['No_themes'] = 'Brak Szablonów w bazie danych';
$lang['Timezone'] = 'Strefa Czasowa';
$lang['Date_format'] = 'Format Daty';
$lang['Date_format_explain'] = 'Składnia jest identyczna z funkcją <a href="http://www.php.net/date" target="_other">date()</a> w PHP';
$lang['Signature'] = 'Podpis';
$lang['Signature_explain'] = 'To jest blok tekstu, który może być dodawany do Twoich postów. Ma limit %d znaków';
$lang['Public_view_email'] = 'Zawsze pokazuj mój Adres Email';

$lang['Current_password'] = 'Obecne Hasło';
$lang['New_password'] = 'Nowe Hasło';
$lang['Confirm_password'] = 'Potwierdź Hasło';
$lang['Confirm_password_explain'] = 'Musisz potwierdzić obecne hasło jeśli chcesz je zmienić lub podać inny adres email';
$lang['password_if_changed'] = 'Musisz podawać hasło tylko jeśli chcesz je zmienić';
$lang['password_confirm_if_changed'] = 'Musisz potwierdzać hasło tylko jeśli chcesz je zmienić';

$lang['Avatar'] = 'Emblemat';
$lang['Avatar_explain'] = 'Wyświetla mały obrazek pod informacjami o Tobie przy każdym poście. Tylko jeden obrazek może być wyświetlany, jego szerokość nie może być większa niż %d pikseli, wysokość większa niż %d pikseli, a rozmiar większy niż %dkB.';
$lang['Upload_Avatar_file'] = 'Wyślij Emblemat z twojego komputera';
$lang['Upload_Avatar_URL'] = 'Wyślij Emblemat z adresu';
$lang['Upload_Avatar_URL_explain'] = 'Wpisz adres, pod którym zlokalizowany jest Twój Emblemat, zostanie on skopiowany na tę stronę.';
$lang['Pick_local_Avatar'] = 'Wybierz Emblemat z galerii';
$lang['Link_remote_Avatar'] = 'Odnośnik do zewnętrznego Emblematu';
$lang['Link_remote_Avatar_explain'] = 'Wpisz adres Emblematu, który chcesz wykorzystać.';
$lang['Avatar_URL'] = 'Adres Obrazu Emblematu';
$lang['Select_from_gallery'] = 'Wybierz Emblemat z galerii';
$lang['View_avatar_gallery'] = 'Pokaż galerię';

$lang['Select_avatar'] = 'Wybierz Emblemat';
$lang['Return_profile'] = 'Anuluj Wybór';
$lang['Select_category'] = 'Wybierz Kategorię';

$lang['Delete_Image'] = 'Usuń Obraz';
$lang['Current_Image'] = 'Obecny Obraz';

$lang['Notify_on_privmsg'] = 'Powiadom o Prywatnej Wiadomości';
$lang['Popup_on_privmsg'] = 'Otwórz okno przy nadejściu Wiadomości'; 
$lang['Popup_on_privmsg_explain'] = 'Niektóre szablony mogą otwierać nowe okno aby poinformować o nadejściu nowej Prywatnej Wiadomości'; 
$lang['Hide_user'] = 'Ukryj moją obecność na forum';

$lang['Profile_updated'] = 'Twój profil został zaktualizowany';
$lang['Profile_updated_inactive'] = 'Twój profil został zmieniony jednakże zmodyfikowałeś istotne dane i Twoje konto zostało deaktywowane. Otrzymasz wiadomość email z instrukcjami jak reaktywować Twoje konto, lub będziesz musiał poczekać aż administrator dokona reaktywacji';

$lang['Password_mismatch'] = 'Wpisane hasła nie pasują do siebie';
$lang['Current_password_mismatch'] = 'Wpisane przez Ciebie hasło nie pasuje do zapisanego w bazie danych';
$lang['Password_long'] = 'Twoje hasło nie może mieć więcej niż 32 znaki';
$lang['Too_many_registers'] = 'Za dużo prób rejestracji. Proszę spróbować później.';
$lang['Username_taken'] = 'Przepraszamy, ale ta nazwa użytkownika jest już zajęta';
$lang['Username_invalid'] = 'Nazwa użytkownika nie może zawierać znaków takich jak \"';
$lang['Username_disallowed'] = 'Ta nazwa użytkownika została zakazana';
$lang['Email_taken'] = 'Ten adres email został już zarejestrowany wraz z innym użytkownikiem';
$lang['Email_banned'] = 'Ten adres email został wyrzucony z forum';
$lang['Email_invalid'] = 'Ten adres email jest nieprawidłowy';
$lang['Signature_too_long'] = 'Twój podpis jest za długi';
$lang['Fields_empty'] = 'Musisz wypełnić wymagane pola';
$lang['Avatar_filetype'] = 'Emblemat musi być typu .jpg, .gif lub .png';
$lang['Avatar_filesize'] = 'Rozmiar emblematu musi być większy niż 0 kB i mniejszy niż'; // followed by xx kB, xx being the size
$lang['Avatar_imagesize'] = 'Emblemat musi być mniejszy niż %d pikseli szerokości i %d pikseli wysokości'; 

$lang['Welcome_subject'] = 'Witamy na Forum %s';
$lang['New_account_subject'] = 'Nowe Konto';
$lang['Account_activated_subject'] = 'Konto Aktywowane';

$lang['Account_added'] = 'Dziękujemy za rejestrację, Twoje konto zostało utworzone. Możesz zalogować się korzystając z podanych wcześniej nazwy użytkownika i hasła.';
$lang['Account_inactive'] = 'Twoje konto zostało utworzone. To Forum jednakże wymaga aktywacji kont, poprzez podanie klucza aktywującego, który otrzymasz w specjalnej wiadomości email. W niej też znajdziesz dalsze instrukcje postępowania.';
$lang['Account_inactive_admin'] = 'Twoje konto zostało utworzone. To Forum jednakże wymaga aktywacji kont przez administratora. Został już do niego wysłany email powiadamiający o utworzeniu nowego konta i wkrótce zostanie ono aktywowane';
$lang['Account_active'] = 'Twoje konto zostało niniejszym aktywowane. Dziękujemy za rejestrację';
$lang['Account_active_admin'] = 'Konto zostało aktywowane';
$lang['Reactivate'] = 'Reaktywuj soje konto!';
$lang['Already_activated'] = 'Twoje konto zostało już aktywowane';
$lang['COPPA'] = 'Twoje konto zostało utworzone ale musi jeszcze zostać zaakceptowane. Otrzymasz specjalny email z instrukcjami.';

$lang['Registration'] = 'Warunki Rejestracji';
$lang['Reg_agreement'] = 'Administratorzy i moderatorzy podejmą starania mające na celu usuwanie wszelkich uznawanych za obraźliwe materiałów jak najszybciej, jednakże nie jest możliwe przeczytanie każdej wiadomości. Zgadzasz się więc, że zawartość każdego postu na tym forum wyraża poglądy i opinie jego autora a nie administratorów, moderatorów czy webmasterów (poza wiadomościami pisanymi przez nich) i nie ponoszą oni za te treści odpowiedzialności.<br /><br />Zgadzasz się nie pisać żadnych obraźliwych, obscenicznych, wulgarnych, oszczerczych, nienawistnych, zawierających groźby i innych materiałów, które mogą być sprzeczne z prawem. Złamanie tej zasady może być przyczyną natychmiastowego i trwałego usunięcia z listy użytkowników (wraz z powiadomieniem odpowiednich władz). Aby wspomóc te działania rejestrowane są adresy IP autorów. Przyjmujesz do wiadomości, że webmaster, administrator i moderatorzy tego forum mają prawo do usuwania, zmiany lub zamykania każdego wątku w każdej chwili jeśli zajdzie taka potrzeba. Jako użytkownik zgadzasz się, że wszystkie informacje, które wpiszesz będą przechowywane w bazie danych. Informacje te nie będą podawane bez twojej zgody żadnym osobom ani podmiotom trzecim, jednakże webmaster, administrator i moderatorzy nie będą obarczeni odpowiedzialnością za włamania hackerskie prowadzące do pozyskania tych danych.<br /><br />Skrypt tego forum wykorzystuje cookies do przechowywania informacji na twoim komputerze. Te cookies nie zawierają żadnych informacji, które podałeś i służą jedynie ułatwieniu korzystania z forum. Adres email jest wykorzystywany jedynie dla potwierdzenia podanych informacji oraz hasła (i dla przesłania nowego hasła, gdybyś zapomniał stare).<br /><br />Klikając odnośnik Rejestracja na dole zgadzasz się na te warunki.';

$lang['Agree_under_13'] = 'Zgadzam Się na te warunki i mam <b>poniżej</b> 13 lat';
$lang['Agree_over_13'] = 'Zgadzam Się na te warunki i mam <b>powyżej</b> 13 lat';
$lang['Agree_not'] = 'Nie zgadzam się na te warunki';

$lang['Wrong_activation'] = 'Podany przez ciebie klucz aktywacyjny nie pasuje do żadnego w bazie danych';
$lang['Send_password'] = 'Wyślij mi nowe hasło';
$lang['Password_updated'] = 'Nowe hasło zostało utworzone. Otrzymasz email z informacjami jak je aktywować';
$lang['No_email_match'] = 'Adres email, który podałeś nie pasuje do zapisanego razem z bazą danych';
$lang['New_password_activation'] = 'Aktywacja nowego hasła';
$lang['Password_activated'] = 'Twoje konto zostało reaktywowane. Aby się zalogować użyj hasła podanego w email\'u, który otrzymałeś';

$lang['Send_email_msg'] = 'Wyślij mi email';
$lang['No_user_specified'] = 'Nie określono żadnego użytkownika';
$lang['User_prevent_email'] = 'Ten użytkownik nie życzy sobie otrzymywać email\'i. Spróbuj wysłać mu prywatną wiadomość.';
$lang['User_not_exist'] = 'Ten użytkownik nie istnieje';
$lang['CC_email'] = 'Wyślij kopię tego email\'a do siebie';
$lang['Email_message_desc'] = 'Wiadomość zostanie wysłana jako zwykły tekst, nie wstawiaj znaczników HTML ani BBCode. Jako adres zwrotny zostanie wstawiony twój adres email.';
$lang['Flood_email_limit'] = 'Nie możesz teraz wysłać kolejnego email\'a. Spróbuj ponownie za jakiś czas.';
$lang['Recipient'] = 'Odbiorca';
$lang['Email_sent'] = 'Email został wysłany';
$lang['Send_email'] = 'Wyślij email';
$lang['Empty_subject_email'] = 'Musisz określić temat dla email\'a';
$lang['Empty_message_email'] = 'Musisz wpisać wiadomość do wysłania';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Wprowadzony kod potwierdzający jest nieprawidłowy';
$lang['Too_many_registers'] = 'Za dużo prób rejestracji dla tej sesji. Proszę spróbować później.';
$lang['Confirm_code_impaired'] = 'Jeśli w jakikolwiek sposób nie jesteś w stanie odczytać kodu proszę skontaktować się z %sAdministratorem%s';
$lang['Confirm_code'] = 'Kod potwierdzający';
$lang['Confirm_code_explain'] = 'Wprowadź kod dokładnie tak jak powyżej. Uwaga: Cyfrę zero rozpoznajemy po przekreśleniu.';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Metoda sortowania';
$lang['Sort'] = 'Sortuj';
$lang['Sort_Top_Ten'] = '10 Najaktywniejszych';
$lang['Sort_Joined'] = 'Data przyłączenia';
$lang['Sort_Username'] = 'Nazwa Użytkownika';
$lang['Sort_Location'] = 'Skąd';
$lang['Sort_Posts'] = 'Wszystkich Postów';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Strona';
$lang['Sort_Ascending'] = 'Rosnąco';
$lang['Sort_Descending'] = 'Malejąco';
$lang['Order'] = 'Porządek';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Panel Kontrolny Grupy';
$lang['Group_member_details'] = 'Szczegóły Członkostwa w Grupie';
$lang['Group_member_join'] = 'Dołącz do Grupy';

$lang['Group_Information'] = 'Informacje o Grupie';
$lang['Group_name'] = 'Nazwa Grupy';
$lang['Group_description'] = 'Opis Grupy';
$lang['Group_membership'] = 'Twoje członkostwo';
$lang['Group_Members'] = 'Członkowie Grupy';
$lang['Group_Moderator'] = 'Moderator Grupy';
$lang['Pending_members'] = 'Członkowie Oczekujący';

$lang['Group_type'] = 'Typ grupy';
$lang['Group_open'] = 'Grupa otwarta';
$lang['Group_closed'] = 'Grupa zamknięta';
$lang['Group_hidden'] = 'Grupa ukryta';

$lang['Current_memberships'] = 'Obecni członkowie';
$lang['Non_member_groups'] = 'Grupy bez członkostw';
$lang['Memberships_pending'] = 'Oczekujące Członkostwa';

$lang['No_groups_exist'] = 'Żadna Grupa nie Istnieje';
$lang['Group_not_exist'] = 'Taka grupa nie istnieje';

$lang['Join_group'] = 'Dołącz';
$lang['No_group_members'] = 'Ta grupa nie ma członków';
$lang['Group_hidden_members'] = 'Tak grupa jest ukryta, nie możesz zobaczyć listy jej członków';
$lang['No_pending_group_members'] = 'Ta grupa nie ma członków oczekujących';
$lang['Group_joined'] = 'Zostałeś dołączony do tej grupy<br />Zostaniesz powiadomionu kiedy Twoje członkostwo zostanie zaakceptowane przez moderatora';
$lang['Group_request'] = 'Twoja prośba o przyłączenie do grupy została wysłana';
$lang['Group_approved'] = 'Twoja prośba została zaakceptowana';
$lang['Group_added'] = 'Zostałeś dodany do tej grupy'; 
$lang['Already_member_group'] = 'Jesteś już członkiem tej grupy';
$lang['User_is_member_group'] = 'Użytkownik jest już członkiem tej grupy';
$lang['Group_type_updated'] = 'Zaktualizowano typ grupy';

$lang['Could_not_add_user'] = 'Wybrany użytkownik nie istnieje';
$lang['Could_not_anon_user'] = 'Anonimowy nie może być członkiem grupy';

$lang['Confirm_unsub'] = 'Czy na pewno chcesz opuścić tą grupę?';
$lang['Confirm_unsub_pending'] = 'Twoje członkostwo w tej grupie nie zostało jeszcze zaakceptowane, czy na pewno chcesz je zakończyć?';

$lang['Unsub_success'] = 'Przestałeś być członkiem tej grupy.';

$lang['Approve_selected'] = 'Zaakceptuj Wybrane';
$lang['Deny_selected'] = 'Odrzuć Wybrane';
$lang['Not_logged_in'] = 'Musisz się zalogować by dołączyć do grupy.';
$lang['Remove_selected'] = 'Usuń Wybrane';
$lang['Add_member'] = 'Dodaj Członka';
$lang['Not_group_moderator'] = 'Nie jesteś moderatorem tej grupy i nie możesz wykonać tego działania.';

$lang['Login_to_join'] = 'Zaloguj się aby dołączyć do grupy lub zarządzać jej członkostwem';
$lang['This_open_group'] = 'To jest grupa otwarta, kliknij aby poprosić o członkostwo';
$lang['This_closed_group'] = 'To jest grupa zamknięta, nowi członkowie nie będą przyjmowani';
$lang['This_hidden_group'] = 'To jest grupa ukryta, automatyczne dodawanie członków nie jest dozwolone';
$lang['Member_this_group'] = 'Jesteś członkiem tej grupy';
$lang['Pending_this_group'] = 'Twoje członkowstwo w tej grupie czeka na akceptację';
$lang['Are_group_moderator'] = 'Jesteś moderatorem tej grupy';
$lang['None'] = 'Brak';

$lang['Subscribe'] = 'Dołącz';
$lang['Unsubscribe'] = 'Opuść';
$lang['View_Information'] = 'Zobacz Informacje';


//
// Search
//
$lang['Search_query'] = 'Poszukiwane Zapytanie';
$lang['Search_options'] = 'Opcje Wyszukiwania';

$lang['Search_keywords'] = 'Szukaj Słów Kluczowych';
$lang['Search_keywords_explain'] = 'Możesz używać <u>AND</u> aby określać, które słowa muszą znaleźć się w wynikach, <u>OR</u> dla tych, które mogą się tam znaleść i <u>NOT</u> dla tych, które nie mogą wystąpić. Znak * zastępuje dowolny ciąg znaków. Aby szukać zwrotu umieść go wewnątrz &quot;&quot;';
$lang['Search_author'] = 'Szukaj Autora';
$lang['Search_author_explain'] = 'Użyj * jako zamiennika dowolnego ciągu znaków';

$lang['Search_for_any'] = 'Szukaj któregokolwiek słowa lub wyrażenia jak je wpisano';
$lang['Search_for_all'] = 'Szukaj wszystkich słów';
$lang['Search_title_msg'] = 'Przeszukaj tytuł i tekst wiadomości'; 
$lang['Search_msg_only'] = 'Przeszukaj tylko tekst wiadomości'; 

$lang['Return_first'] = 'Pokaż pierwsze'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'znaków z postu';

$lang['Search_previous'] = 'Przeszukaj ostanie'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortuj według';
$lang['Sort_Time'] = 'Czas Wysłania';
$lang['Sort_Post_Subject'] = 'Temat Postu';
$lang['Sort_Topic_Title'] = 'Tytuł Tematu';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Pokaż wyniki jako';
$lang['All_available'] = 'Wszystkie dostępne';
$lang['No_searchable_forums'] = 'Nie masz uprawnień do przeszukiwania któegokolwiek forum na tej stronie';

$lang['No_search_match'] = 'Nie znaleziono tematów ani postów pasujących do Twoich kryteriów';
$lang['Found_search_match'] = 'Znaleziono %d wynik'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Znaleziono %d wyników'; // eg. Search found 24 matches

$lang['Close_window'] = 'Zamknij Okno';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Przepraszamy, ale tylko %s mogą pisać ogłoszenia na tym forum';
$lang['Sorry_auth_sticky'] = 'Przepraszamy, ale tylko %s mogą pisać tematy przyklejone na tym forum'; 
$lang['Sorry_auth_read'] = 'Przepraszamy, ale tylko %s mogą czytać tematy na tym forum'; 
$lang['Sorry_auth_post'] = 'Przepraszamy, ale tylko %s mogą pisać tematy na tym forum'; 
$lang['Sorry_auth_reply'] = 'Przepraszamy, ale tylko %s mogą odpowiadać na posty na tym forum'; 
$lang['Sorry_auth_edit'] = 'Przepraszamy, ale tylko %s mogą zmieniać posty na tym forum'; 
$lang['Sorry_auth_delete'] = 'Przepraszamy, ale tylko %s mogą usuwać posty na tym forum'; 
$lang['Sorry_auth_vote'] = 'Przepraszamy, ale tylko %s mogą głosować w ankietach na tym forum'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonimowi użytkownicy</b>';
$lang['Auth_Registered_Users'] = '<b>zarejestrowani użytkownicy</b>';
$lang['Auth_Users_granted_access'] = '<b>użytkownicy z uprawnieniami dostępu</b>';
$lang['Auth_Moderators'] = '<b>moderatorzy</b>';
$lang['Auth_Administrators'] = '<b>administratorzy</b>';

$lang['Not_Moderator'] = 'Nie jesteś moderatorem tego forum';
$lang['Not_Authorised'] = 'Nieautoryzowany';

$lang['You_been_banned'] = 'Zostałeś wyrzucony z tego forum<br />Skontaktuj się z webmasterem lub administratorem forum w celu uzyskania dalszych informacji';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Na Forum jest 0 Zarejestrowanych i '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Na forum jest %d Zarejestrowanych i ';
$lang['Reg_user_online'] = 'Na forum jest %d Zarejestrowany użytkownik i '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 Ukrytych użytkowników'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Ukrytych użytkowników';
$lang['Hidden_user_online'] = '%d Ukryty użytkownik'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Na Forum jest %d Gości';
$lang['Guest_users_zero_online'] = 'Na Forum jest 0 Gości'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Na Forum jest %d Gość';
$lang['No_users_browsing'] = 'Obecnie nie ma żadnych użytkowników na tym forum';

$lang['Online_explain'] = 'Te dane pokazują użytkowników aktywnych przez ostatnie 5 minut';

$lang['Forum_Location'] = 'Lokalizacja';
$lang['Last_updated'] = 'Ostatnia Aktualizacja';

$lang['Forum_index'] = 'Strona Główna';
$lang['Logging_on'] = 'Loguje się';
$lang['Posting_message'] = 'Pisze wiadomość';
$lang['Searching_forums'] = 'Przeszukuje fora';
$lang['Viewing_profile'] = 'Ogląda profil';
$lang['Viewing_online'] = 'Przegląda listę obecnych na forum';
$lang['Viewing_member_list'] = 'Ogląda listę użytkowników';
$lang['Viewing_priv_msgs'] = 'Ogląda Prywatne Wiadomości';
$lang['Viewing_FAQ'] = 'Ogląda FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Panel Kontrolny Moderacji';
$lang['Mod_CP_explain'] = 'Korzystając z poniższego formularza możesz przeprowadzić zbiorową moderację na tym forum. Możesz blokować, odblokowywać, przenosić i usuwać dowolną ilość tematów. Jeżeli to forum jest ustawione jako prywatne możesz także częściowo decydować, którzy użytkownicy mogą mieć do niego dostęp.';

$lang['Select'] = 'Wybierz';
$lang['Delete'] = 'Usuń';
$lang['Move'] = 'Przenieś';
$lang['Lock'] = 'Zablokuj';
$lang['Unlock'] = 'Odblokuj';

$lang['Topics_Removed'] = 'Wybrane tematy zostały usunięte z bazy danych.';
$lang['Topics_Locked'] = 'Wybrane tematy zostały zablokowane';
$lang['Topics_Moved'] = 'Wybrane tematy zostały przeniesione';
$lang['Topics_Unlocked'] = 'Wybrane tematy zostały odblokowane';
$lang['No_Topics_Moved'] = 'Nie przeniesiono żadnego tematu';

$lang['Confirm_delete_topic'] = 'Czy na pewno chcesz usunąć wybrane tematy?';
$lang['Confirm_lock_topic'] = 'Czy na pewno chcesz zablokować wybrane tematy?';
$lang['Confirm_unlock_topic'] = 'Czy na pewno chcesz odblokować wybrane tematy?';
$lang['Confirm_move_topic'] = 'Czy na pewno chcesz przenieść wybrane tematy?';

$lang['Move_to_forum'] = 'Przenieś do forum';
$lang['Leave_shadow_topic'] = 'Pozostaw odnośnik na starym forum.';

$lang['Split_Topic'] = 'Panel Kontrolny Dzielenia Tematów';
$lang['Split_Topic_explain'] = 'Używając poniższego formularza możesz podzielić temat na dwa, wybierając posty, które mają zostać wydzielone lub dzieląc od jednego zaznaczonego postu';
$lang['Split_title'] = 'Tytuł nowego tematu';
$lang['Split_forum'] = 'Forum dla nowego tematu';
$lang['Split_posts'] = 'Wydziel wybrane posty';
$lang['Split_after'] = 'Wydziel od wybranego postu';
$lang['Topic_split'] = 'Wybrany temat został podzielony';

$lang['Too_many_error'] = 'Wybrałeś zbyt wiele postów. Możesz wybrać tylko jeden, od którego chcesz dzielić temat!';

$lang['None_selected'] = 'Nie wybrałeś żadnych tematów do wykonania tej operacji. Proszę wróć i wybierz przynajmniej jeden.';
$lang['New_forum'] = 'Nowe forum';

$lang['This_posts_IP'] = 'IP dla tego postu';
$lang['Other_IP_this_user'] = 'Inne IP, z których pisał ten użytkownik';
$lang['Users_this_IP'] = 'Użytkownicy piszący z tego IP';
$lang['IP_info'] = 'Informacja o IP';
$lang['Lookup_IP'] = 'Szukaj IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Wszystkie czasy w strefie %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Godzin';
$lang['-11'] = 'GMT - 11 Godzin';
$lang['-10'] = 'HST (Hawaje)';
$lang['-9'] = 'GMT - 9 Godzin';
$lang['-8'] = 'PST (U.S./Kanada)';
$lang['-7'] = 'MST (U.S./Kanada)';
$lang['-6'] = 'CST (U.S./Kanada)';
$lang['-5'] = 'EST (U.S./Kanada)';
$lang['-4'] = 'GMT - 4 Godziny';
$lang['-3.5'] = 'GMT - 3.5 Godziny';
$lang['-3'] = 'GMT - 3 Godziny';
$lang['-2'] = 'Środkowy Atlantyk';
$lang['-1'] = 'GMT - 1 Godzina';
$lang['0'] = 'GMT';
$lang['1'] = 'CET (Europa)';
$lang['2'] = 'EET (Europa)';
$lang['3'] = 'GMT + 3 Godziny';
$lang['3.5'] = 'GMT + 3.5 Godziny';
$lang['4'] = 'GMT + 4 Godziny';
$lang['4.5'] = 'GMT + 4.5 Godziny';
$lang['5'] = 'GMT + 5 Godzin';
$lang['5.5'] = 'GMT + 5.5 Godzin';
$lang['6'] = 'GMT + 6 Godzin';
$lang['6.5'] = 'GMT + 6.5 Godziny';
$lang['7'] = 'GMT + 7 Godzin';
$lang['8'] = 'WST (Australia)';
$lang['9'] = 'GMT + 9 Godzin';
$lang['9.5'] = 'CST (Australia)';
$lang['10'] = 'EST (Australia)';
$lang['11'] = 'GMT + 11 Godzin';
$lang['12'] = 'GMT + 12 Godzin';
$lang['13'] = 'GMT + 13 Godzin';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12:00 hours) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11:00 hours) Wyspa Midway, Samoa';
$lang['tz']['-10'] = '(GMT -10:00 hours) Hawaje';
$lang['tz']['-9'] = '(GMT -9:00 hours) Alaska';
$lang['tz']['-8'] = '(GMT -8:00 hours) Pacific Time (US &amp; Kanada)';
$lang['tz']['-7'] = '(GMT -7:00 hours) Mountain Time (US &amp; Kanada)';
$lang['tz']['-6'] = '(GMT -6:00 hours) Central Time (US &amp; Kanada), Mexico City';
$lang['tz']['-5'] = '(GMT -5:00 hours) Eastern Time (US &amp; Kanada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4:00 hours) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3:30 hours) Nowa Funflandia';
$lang['tz']['-3'] = '(GMT -3:00 hours) Brazylia, Buenos Aires, Georgetown, Falklandy';
$lang['tz']['-2'] = '(GMT -2:00 hours) Śr-Atlantyk, Wyspa Ascension, Św. Helena';
$lang['tz']['-1'] = '(GMT -1:00 hours) Azory, Wyspy Cape Verde';
$lang['tz']['0'] = '(GMT) Casablanca, Dublin, Edynburg, Londyn, Lisbona, Monrovia';
$lang['tz']['1'] = '(GMT +1:00 hours) Berlin, Bruksela, Kopenhaga, Madryd, Paryż, Rzym';
$lang['tz']['2'] = '(GMT +2:00 hours) Kaliningrad, Poł. Afryka';
$lang['tz']['3'] = '(GMT +3:00 hours) Bagdad, Riyadh, Moskwa, Nairobi';
$lang['tz']['3.5'] = '(GMT +3:30 hours) Teheran';
$lang['tz']['4'] = '(GMT +4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4:30 hours) Kabul';
$lang['tz']['5'] = '(GMT +5:00 hours) Ekaterinburg, Islamabad, Karaczi, Taszkent';
$lang['tz']['5.5'] = '(GMT +5:30 hours) Bombaj, Kalkuta, Madras, Nowe Delhi';
$lang['tz']['6'] = '(GMT +6:00 hours) Almaty, Colombo, Dhaka';
$lang['tz']['6.5'] = '(GMT +6:30 hours) Rangoon';
$lang['tz']['7'] = '(GMT +7:00 hours) Bangkok, Hanoi, Dżakarta';
$lang['tz']['8'] = '(GMT +8:00 hours) Pekin, Hong Kong, Perth, Singapur, Taipei';
$lang['tz']['9'] = '(GMT +9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Jakuck';
$lang['tz']['9.5'] = '(GMT +9:30 hours) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10:00 hours) Melbourne, Papua Nowa Gwinea, Sydney, Władywostok';
$lang['tz']['11'] = '(GMT +11:00 hours) Magadan, Nowa Kaledonia, Wyspy Salomona';
$lang['tz']['12'] = '(GMT +12:00 hours) Auckland, Wellington, Fidżi, Wyspy Marshalla';
$lang['tz']['13'] = 'GMT + 13 Hours';

$lang['datetime']['Sunday'] = 'Niedziela';
$lang['datetime']['Monday'] = 'Poniedziałek';
$lang['datetime']['Tuesday'] = 'Wtorek';
$lang['datetime']['Wednesday'] = 'Środa';
$lang['datetime']['Thursday'] = 'Czwartek';
$lang['datetime']['Friday'] = 'Piątek';
$lang['datetime']['Saturday'] = 'Sobota';
$lang['datetime']['Sun'] = 'Nie';
$lang['datetime']['Mon'] = 'Pon';
$lang['datetime']['Tue'] = 'Wto';
$lang['datetime']['Wed'] = 'Sro';
$lang['datetime']['Thu'] = 'Czw';
$lang['datetime']['Fri'] = 'Pią';
$lang['datetime']['Sat'] = 'Sob';
$lang['datetime']['January'] = 'Styczeń';
$lang['datetime']['February'] = 'Luty';
$lang['datetime']['March'] = 'Marzec';
$lang['datetime']['April'] = 'Kwiecień';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['June'] = 'Czerwiec';
$lang['datetime']['July'] = 'Lipiec';
$lang['datetime']['August'] = 'Sierpień';
$lang['datetime']['September'] = 'Wrzesień';
$lang['datetime']['October'] = 'Październik';
$lang['datetime']['November'] = 'Listopad';
$lang['datetime']['December'] = 'Grudzień';
$lang['datetime']['Jan'] = 'Sty';
$lang['datetime']['Feb'] = 'Lut';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Kwi';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['Jun'] = 'Cze';
$lang['datetime']['Jul'] = 'Lip';
$lang['datetime']['Aug'] = 'Sie';
$lang['datetime']['Sep'] = 'Wrz';
$lang['datetime']['Oct'] = 'Paź';
$lang['datetime']['Nov'] = 'Lis';
$lang['datetime']['Dec'] = 'Gru';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informacja';
$lang['Critical_Information'] = 'Istotna Informacja';

$lang['General_Error'] = 'Błąd Ogólny';
$lang['Critical_Error'] = 'Błąd Krytyczny';
$lang['An_error_occured'] = 'Wystąpił Błąd';
$lang['A_critical_error'] = 'Wystąpił Krytyczny Błąd';

//
// That's all, Folks!
// -------------------------------------------------

?>