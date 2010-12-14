<?php

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED', 'Nie masz jeszcze konta? Kliknij <a href=register.php>tutaj</a>.');
define('_US_LOSTPASSWORD', 'Zapomniałeś hasła?');
define('_US_NOPROBLEM', 'Żaden problem. Wpisz adres email, który podałeś przy rejestracji a otrzymasz nowe hasło.');
define('_US_YOUREMAIL', 'Twój email: ');
define('_US_SENDPASSWORD', 'Wyślij hasło');
define('_US_LOGGEDOUT', 'Zostałeś wylogowany.');
define('_US_THANKYOUFORVISIT', 'Dziękujemy za odwiedzenie naszej strony!');
define('_US_INCORRECTLOGIN', 'Błędne hasło lub login!');
define('_US_LOGGINGU', 'Dziękujemy %s. Zostałeś prawidłowo zalogowany.');

// 2001-11-17 ADD
define('_US_NOACTTPADM', 'Wybrany użytkownik został wyłączony lub nie dokonał jeszcze aktywacji.<br>Skontaktuj się z administratorem aby uzyskać szczegóły.');
define('_US_ACTKEYNOT', 'Klucz aktywacyjny jest niewłaściwy!');
define('_US_ACONTACT', 'Wybrane konto jest już aktywne!');
define('_US_ACTLOGIN', 'Twoje konto zostało aktywowane. Zaloguj się teraz używając swojego hasła i loginu.');
define('_US_NOPERMISS', 'Niestety, nie masz uprawnień do wykonania tej akcji!');
define('_US_SURETODEL', 'Jesteś pewien, że chcesz usunąć swoje konto?');
define('_US_REMOVEINFO', 'Zostaną usunięte wszystkie informacje z bazy danych.');
define('_US_BEENDELED', 'Twoje konto zostało usunięte.');
define('_US_ACTFAILD', 'Aktywacja nieudana!');

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG', 'Rejestracja użytkownika');
define('_US_NICKNAME', 'Login');
define('_US_EMAIL', 'Email');
define('_US_ALLOWVIEWEMAIL', 'Pokazywać pozostałym użytkownikom Twój adres email?');
define('_US_WEBSITE', 'Strona WWW');
define('_US_TIMEZONE', 'Strefa czasowa');
define('_US_AVATAR', 'Avatar');
define('_US_VERIFYPASS', 'Powtórz hasło');
define('_US_SUBMIT', 'Zatwierdź');
define('_US_USERNAME', 'Nazwa użytkownika');
define('_US_FINISH', 'Koniec');
define('_US_REGISTERNG', 'Nie można zarejestrować nowego użytkownika.');
define('_US_MAILOK', 'Pozwolić administratorowi i <br /> moderatorom na wysyłanie wiadomości?');
define('_US_DISCLAIMER', 'Regulamin');
define('_US_IAGREE', 'Akceptuję regulamin');
define('_US_UNEEDAGREE', 'Aby się zarejestrować, musisz zaakceptować regulamin.');
define('_US_NOREGISTER', 'Przepraszamy, rejestracja jest obecnie wyłączona');

// %s is username. This is a subject for email
define('_US_USERKEYFOR', 'Klucz aktywacyjny dla %s');
define('_US_YOURREGISTERED', 'Zostałeś zarejestrowany. Email zawierający klucz aktywacyjny został wysłany na adres, który podałeś przy zakładaniu konta. Proszę postępować według instrukcji w emailu aby aktywować swoje konto. ');
define('_US_YOURREGMAILNG', 'Zostałeś zarejestrowany. Niestety, z powodu problemów z naszym serwerem, email aktywacyjny nie został wysłany. Przepraszamy za niedogodności. Proszę skontaktować się z Administratorem strony poprzez email.');
define('_US_YOURREGISTERED2', 'Zostałeś zarejestrowany. Proszę poczekać na aktywacje swojego konta przez administratora. Otrzymasz email gdy Twoje konto zostanie aktywowane. To może trochę potrwać, proszę o cierpliwość.');

// %s is your site name
define('_US_NEWUSERREGAT', 'Rejestracja nowego użytkownika w serwisie %s');

// %s is a username
define('_US_HASJUSTREG', '%s już się zarejestrował!');
define('_US_INVALIDMAIL', 'BŁĄD: niepoprawny e-mail');
define('_US_EMAILNOSPACES', 'BŁĄD: adresy e-mail nie zawierają spacji.');
define('_US_INVALIDNICKNAME', 'BŁĄD: Niepoprawny login');
define('_US_NICKNAMETOOLONG', 'Login jest za długi. Musi być krótszy niż %s znaków.');
define('_US_NICKNAMETOOSHORT', 'Login jest za krótki. Musi być dłuższy niż %s znaków.');
define('_US_NAMERESERVED', 'BŁĄD: nazwa jest już zarezerwowana.');
define('_US_NICKNAMENOSPACES', 'Login nie może zawierać spacji.');
define('_US_NICKNAMETAKEN', 'BŁĄD: podany Login jest już zajęty.');
define('_US_EMAILTAKEN', 'BŁĄD: podany adres e-mail jest już zarejestrowany.');
define('_US_ENTERPWD', 'BŁĄD: musisz podać hasło.');
define('_US_SORRYNOTFOUND', 'Niestety, nie znaleziono odpowiednich informacji.');

// %s is your site name
define('_US_NEWPWDREQ', 'Prośba o nowe hasło w serwisie %s');
define('_US_YOURACCOUNT', 'Twoje konto w serwisie %s');
define('_US_MAILPWDNG', 'mail_password: nie mogę uaktualnić wpisu. Skontaktuj się z administratorem');
// %s is a username
define('_US_PWDMAILED', 'Hasło dla %s zostało wysłane.');
define('_US_CONFMAIL', 'E-mail potwierdzający dla %s został wysłany.');
define('_US_ACTVMAILNG', 'Nie udało się wysłać e-maila potwierdzającego do %s');
define('_US_ACTVMAILOK', 'E-mail z zawiadomieniem został wysłany do %.');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG', 'Nie wybrano użytkownika! Wróć i spróbuj ponownie.');
define('_US_PM',            'PM - Prywatna Wiadomość');
define('_US_ICQ',           'ICQ');  #15 chars
define('_US_AIM',           'AIM');    #18 chars
define('_US_YIM',           'YIM');     #25 chars
define('_US_MSNM',          'MSNM');#100 chars
define('_US_LOCATION',      'Miejscowość');     #100 chars
define('_US_OCCUPATION',    'Zawód');    #100 chars
define('_US_INTEREST',      'Zainteresowania'); #150 chars
define('_US_SIGNATURE',     'Podpis');          #tinytext
define('_US_EXTRAINFO',     'Dodatkowe informacje (tu możesz coś więcej o sobie napisać)'); #tinytext
define('_US_EDITPROFILE', 'Edytuj Profil');
define('_US_LOGOUT', 'Wyloguj');
define('_US_INBOX', 'Skrzynka odbiorcza');
define('_US_MEMBERSINCE', 'Zarejestrowany od');
define('_US_RANK', 'Ranga');
define('_US_POSTS', 'Komentarze/Posty');
define('_US_LASTLOGIN', 'Ostatnie logowanie');
define('_US_ALLABOUT', 'Wszystko o %s');
define('_US_STATISTICS', 'Statystyki');
define('_US_MYINFO', 'Informacje o mnie');
define('_US_BASICINFO', 'Informacje podstawowe');
define('_US_MOREABOUT', 'Więcej o mnie');
define('_US_SHOWALL', 'Pokaż wszystko');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE', 'Profil');
define('_US_REALNAME', 'Prawdziwe imię');
define('_US_SHOWSIG', 'Zawsze dołączaj mój podpis');
define('_US_CDISPLAYMODE', 'Sposób wyświetlania komentarzy');
define('_US_CSORTORDER', 'Kolejność sortowania komentarzy');
define('_US_PASSWORD', 'Hasło');
define('_US_TYPEPASSTWICE', '(wpisz dwukrotnie nowe hasło aby je zmienić)');
define('_US_SAVECHANGES', 'Zapisz zmiany');
define('_US_NOEDITRIGHT', 'Niestety, nie masz uprawnień do edytowania informacji o tym użytkowniku.');
define('_US_PASSNOTSAME', 'Oba hasła są różne. Muszą być identyczne.');
define('_US_PWDTOOSHORT', 'Twoje hasło musi składać się przynajmniej z  <strong>%s</strong> znaków.');
define('_US_PROFUPDATED', 'Twoj profil został uaktualniony!');
define('_US_USECOOKIE', 'Zapisz moją nazwę użytkownika w cookie na 1 rok');
define('_US_NO', 'Nie');
define('_US_DELACCOUNT', 'Usuń konto');
define('_US_MYAVATAR', 'Mój avatar');
define('_US_UPLOADMYAVATAR', 'Dodaj avatar');
define('_US_MAXPIXEL', 'Maks. liczba pikseli');
define('_US_MAXIMGSZ', 'Maks. wielkość obrazka (w bajtach)');
define('_US_SELFILE', 'Wybierz plik');
define('_US_OLDDELETED', 'Twoj stary avatar zostanie skasowany!');
define('_US_CHOOSEAVT', 'Wybierz avatar z dostępnej listy');
define('_US_PRESSLOGIN', 'Kliknij na przycisk poniżej, aby się zalogować');
define('_US_ADMINNO', 'Użytkownik z grupy webmasterów nie może być usunięty');
define('_US_GROUPS', 'Grupy użytkownika');
define('_US_REMEMBERME', 'Pamiętaj mnie');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Witamy na %s');

?>
