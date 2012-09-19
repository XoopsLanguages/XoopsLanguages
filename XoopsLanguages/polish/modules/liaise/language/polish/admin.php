<?php
// $Id: admin.php,v 1.1 2007/02/10 18:55:44 dap997 Exp $ dap997 17.09.2005 rc1
define("_AM_SAVE"                               ,"Zapisz");
define("_AM_COPIED"                             ,"%s skopiowany");
define("_AM_DBUPDATED"                          ,"Baza danych została zaktualizowana!");
define("_AM_ELE_CREATE"                         ,"Utwórz nowy element formularza");
define("_AM_ELE_EDIT"                           ,"Zmień element formularza: %s");

define("_AM_ELE_CAPTION"                        ,"Etykietka");
define("_AM_ELE_DEFAULT"                        ,"Watości standardowe");
define("_AM_ELE_DETAIL"                         ,"Szczegóły");
define("_AM_ELE_REQ"                            ,"Wymagane");
define("_AM_ELE_ORDER"                          ,"Sortuj");
define("_AM_ELE_DISPLAY"                        ,"Pokaż");

define("_AM_ELE_TEXT"                           ,"Textbox");
define("_AM_ELE_TEXT_DESC"                      ,"{UNAME} pokaże imię użytkownika;<br />{EMAIL} pokaże e-mail użytkownika ");
define("_AM_ELE_TAREA"                          ,"Textarea");
define("_AM_ELE_SELECT"                         ,"Wybrane");
define("_AM_ELE_CHECK"                          ,"Checkboxes");
define("_AM_ELE_RADIO"                          ,"Radio buttons");
define("_AM_ELE_YN"                             ,"Prosty radio buttons yes/no ");

define("_AM_ELE_SIZE"                           ,"Wielkość");
define("_AM_ELE_MAX_LENGTH"                     ,"Maksymalna długość");
define("_AM_ELE_ROWS"                           ,"Wiersze");
define("_AM_ELE_COLS"                           ,"Kolumny");
define("_AM_ELE_OPT"                            ,"Opcje");
define("_AM_ELE_OPT_DESC"                       ,"Zaznacz check boxes aby wybrać standardowe wartości");
define("_AM_ELE_OPT_DESC1"                      ,"<br />Tylko pierwsze zaznaczenie jest brane pod uwagę jeśli wybierzesz więcej");
define("_AM_ELE_OPT_DESC2"                      ,"Wybierz standardowe wartości przez znaznaczenie odpowiednich radio buttons");
define("_AM_ELE_ADD_OPT"                        ,"Dodałem opcję %s");
define("_AM_ELE_ADD_OPT_SUBMIT"                 ,"Dodaj");
define("_AM_ELE_SELECTED"                       ,"Wybrane");
define("_AM_ELE_CHECKED"                        ,"Zaznaczone");
define("_AM_ELE_MULTIPLE"                       ,"Pozwól na wielokrotny wybór");

define("_AM_ELE_CONFIRM_DELETE"                 ,"Czy na pewno chcesz skasować ten element formularza?");

######### version 1.1 #########
define("_AM_ELE_OTHER"                          ,'Dla opcji "Innej", napisz {OTHER|*numer*} w polu textboxa na przykład {OTHER|30} tworzy textbox o długości 30 znaków.');

######### version 1.2 additions #########
define("_AM_FORM_LISTING"                       ,"Spis formularzy kontaktowych");
define("_AM_FORM_ORDER"                         ,"Kolejność wyświetlania");
define("_AM_FORM_ORDER_DESC"                    ,"0 = ukruj ten formularz");
define("_AM_FORM_TITLE"                         ,"Tytuł formularza");
define("_AM_FORM_PERM"                          ,"Grupy mające prawo dostępu do tego formularza");
define("_AM_FORM_SENDTO"                        ,"Wyślij do");
define("_AM_FORM_SENDTO_ADMIN"                  ,"E-mail do administratora ");
define("_AM_FORM_SEND_METHOD"                   ,"Metoda wysyłania");
define("_AM_FORM_SEND_METHOD_DESC", "Information cannot be sent via private message when the form is sent to "._AM_FORM_SENDTO_ADMIN." or sent by anonymous users");
define("_AM_FORM_SEND_METHOD_MAIL"              ,"E-mail");
define("_AM_FORM_SEND_METHOD_PM"                ,"Prywatne wiadomości");
define("_AM_FORM_DELIMETER"                     ,"Delimiter dla checkboxes i radio buttons");
define("_AM_FORM_DELIMETER_SPACE"               ,"Spacje (białe znaki)");
define("_AM_FORM_DELIMETER_BR"                  ,"Znak końca linii");
define("_AM_FORM_SUBMIT_TEXT"                   ,"Tekst na przycisku wysyłania");
define("_AM_FORM_DESC"                          ,"Opis formularza");
define("_AM_FORM_DESC_DESC"                     ,"Tekst wyświetlany na stronie głównej jeśli istnieje węcej niż jeden formularz");
define("_AM_FORM_INTRO"                         ,"Wprowadzenie do formularza");
define("_AM_FORM_INTRO_DESC"                    ,"Tekst pokazywany na stronie formularza.");
define("_AM_FORM_WHERETO"                       ,"URL do którego użytkownik zostanie przekierowany po wysłaniu formularza");
define("_AM_FORM_WHERETO_DESC"                  ,"Jeśli zostawisz pole pustym zostanie użyty adres tej strony. Znacznik {SITE_URL} pokaże ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM"               ,"Zmień ustawienia formularza");
define("_AM_FORM_ACTION_EDITELEMENT"            ,"Zmień elementy formularza");
define("_AM_FORM_ACTION_CLONE"                  ,"Powiel ten formularz");

define("_AM_FORM_NEW"                           ,"Utwórz nowy formularz");
define("_AM_FORM_EDIT"                          ,"Zmień formularz: %s");
define("_AM_FORM_CONFIRM_DELETE"                ,"Czy jesteś pewien, że chcesz skasować ten formularz i wszystkie jego elementy?");

define("_AM_ID"                                 ,"ID");
define("_AM_ACTION"                             ,"Akcja");
define("_AM_RESET_ORDER"                        ,"Akutalizuj kolejność");
define("_AM_SAVE_THEN_ELEMENTS"                 ,"Zapisz ten element");
define("_AM_SAVE_THEN_FORM"                     ,"Zapisz ten formularz");
define("_AM_NOTHING_SELECTED"                   ,"Nic nie wybrano.");
define("_AM_GO_CREATE_FORM"                     ,"Musisz najpierw stworzyć fromularz.");

define("_AM_ELEMENTS_OF_FORM"                   ,"Element formularza %s");
define("_AM_ELE_APPLY_TO_FORM"                  ,"Zastosuj do formularza");
define("_AM_ELE_HTML"                           ,"Tekst/ HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG"                ,"Ta wersja XOOPS nie spełnia wymagań Liaise, dlatego moduł może nie działać poprawnie.");
define("_AM_ELE_UPLOADFILE"                     ,"Dodawanie plików");
define("_AM_ELE_UPLOADIMG"                      ,"Dodawanie obrazków");
define("_AM_ELE_UPLOADIMG_MAXWIDTH"             ,"Maksymalna szerokość w pikselach");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT"            ,"Maksymalna wysokość w pikselach");
define("_AM_ELE_UPLOAD_MAXSIZE"                 ,"Maksymalna wielkość pliku w bajtach");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC"            ,"1k = 1024 bajtów");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT"       ,"0 = bez limitu");
define("_AM_ELE_UPLOAD_ALLOWED_EXT"             ,"Zezwól na następujące zakończenia plików");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC"        ,"Odziel zakończenia plików używając |, wielkość znaków nie ma znaczenia. Na przykład: 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME"            ,"Zezwól na typy MIME");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC"       ,"Odziel typy MIME używając |, wielkość znaków nie ma znaczenia. Na przykład: 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT"            ,"Pozostaw to pole pustm, aby zezwolić na wszystko (nie zalecane ze względów bezpieczeństwa)");
define("_AM_ELE_UPLOAD_SAVEAS"                  ,"Zapisuj dodawane pliki do");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL"             ,"Załącznik e-mail");
define("_AM_ELE_UPLOAD_SAVEAS_FILE"             ,"Katalog do zapisu dla plików dodawanych");

?>