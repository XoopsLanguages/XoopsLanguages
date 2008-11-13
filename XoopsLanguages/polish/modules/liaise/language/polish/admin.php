<?php
// $Id: admin.php,v 1.1 2007/02/10 18:55:44 dap997 Exp $ dap997 17.09.2005 rc1
define("_AM_SAVE"                               ,"Zapisz");
define("_AM_COPIED"                             ,"%s skopiowany");
define("_AM_DBUPDATED"                          ,"Baza danych zosta�a zaktualizowana!");
define("_AM_ELE_CREATE"                         ,"Utw�rz nowy element formularza");
define("_AM_ELE_EDIT"                           ,"Zmie� element formularza: %s");

define("_AM_ELE_CAPTION"                        ,"Etykietka");
define("_AM_ELE_DEFAULT"                        ,"Wato�ci standardowe");
define("_AM_ELE_DETAIL"                         ,"Szczeg�y");
define("_AM_ELE_REQ"                            ,"Wymagane");
define("_AM_ELE_ORDER"                          ,"Sortuj");
define("_AM_ELE_DISPLAY"                        ,"Poka�");

define("_AM_ELE_TEXT"                           ,"Textbox");
define("_AM_ELE_TEXT_DESC"                      ,"{UNAME} poka�e imi� u�ytkownika;<br />{EMAIL} poka�e e-mail u�ytkownika ");
define("_AM_ELE_TAREA"                          ,"Textarea");
define("_AM_ELE_SELECT"                         ,"Wybrane");
define("_AM_ELE_CHECK"                          ,"Checkboxes");
define("_AM_ELE_RADIO"                          ,"Radio buttons");
define("_AM_ELE_YN"                             ,"Prosty radio buttons yes/no ");

define("_AM_ELE_SIZE"                           ,"Wielko��");
define("_AM_ELE_MAX_LENGTH"                     ,"Maksymalna d�ugo��");
define("_AM_ELE_ROWS"                           ,"Wiersze");
define("_AM_ELE_COLS"                           ,"Kolumny");
define("_AM_ELE_OPT"                            ,"Opcje");
define("_AM_ELE_OPT_DESC"                       ,"Zaznacz check boxes aby wybra� standardowe warto�ci");
define("_AM_ELE_OPT_DESC1"                      ,"<br />Tylko pierwsze zaznaczenie jest brane pod uwag� je�li wybierzesz wi�cej");
define("_AM_ELE_OPT_DESC2"                      ,"Wybierz standardowe warto�ci przez znaznaczenie odpowiednich radio buttons");
define("_AM_ELE_ADD_OPT"                        ,"Doda�em opcj� %s");
define("_AM_ELE_ADD_OPT_SUBMIT"                 ,"Dodaj");
define("_AM_ELE_SELECTED"                       ,"Wybrane");
define("_AM_ELE_CHECKED"                        ,"Zaznaczone");
define("_AM_ELE_MULTIPLE"                       ,"Pozw�l na wielokrotny wyb�r");

define("_AM_ELE_CONFIRM_DELETE"                 ,"Czy na pewno chcesz skasowa� ten element formularza?");

######### version 1.1 #########
define("_AM_ELE_OTHER"                          ,'Dla opcji "Innej", napisz {OTHER|*numer*} w polu textboxa na przyk�ad {OTHER|30} tworzy textbox o d�ugo�ci 30 znak�w.');

######### version 1.2 additions #########
define("_AM_FORM_LISTING"                       ,"Spis formularzy kontaktowych");
define("_AM_FORM_ORDER"                         ,"Kolejno�� wy�wietlania");
define("_AM_FORM_ORDER_DESC"                    ,"0 = ukruj ten formularz");
define("_AM_FORM_TITLE"                         ,"Tytu� formularza");
define("_AM_FORM_PERM"                          ,"Grupy maj�ce prawo dost�pu do tego formularza");
define("_AM_FORM_SENDTO"                        ,"Wy�lij do");
define("_AM_FORM_SENDTO_ADMIN"                  ,"E-mail do administratora ");
define("_AM_FORM_SEND_METHOD"                   ,"Metoda wysy�ania");
define("_AM_FORM_SEND_METHOD_DESC", "Information cannot be sent via private message when the form is sent to "._AM_FORM_SENDTO_ADMIN." or sent by anonymous users");
define("_AM_FORM_SEND_METHOD_MAIL"              ,"E-mail");
define("_AM_FORM_SEND_METHOD_PM"                ,"Prywatne wiadomo�ci");
define("_AM_FORM_DELIMETER"                     ,"Delimiter dla checkboxes i radio buttons");
define("_AM_FORM_DELIMETER_SPACE"               ,"Spacje (bia�e znaki)");
define("_AM_FORM_DELIMETER_BR"                  ,"Znak ko�ca linii");
define("_AM_FORM_SUBMIT_TEXT"                   ,"Tekst na przycisku wysy�ania");
define("_AM_FORM_DESC"                          ,"Opis formularza");
define("_AM_FORM_DESC_DESC"                     ,"Tekst wy�wietlany na stronie g��wnej je�li istnieje w�cej ni� jeden formularz");
define("_AM_FORM_INTRO"                         ,"Wprowadzenie do formularza");
define("_AM_FORM_INTRO_DESC"                    ,"Tekst pokazywany na stronie formularza.");
define("_AM_FORM_WHERETO"                       ,"URL do kt�rego u�ytkownik zostanie przekierowany po wys�aniu formularza");
define("_AM_FORM_WHERETO_DESC"                  ,"Je�li zostawisz pole pustym zostanie u�yty adres tej strony. Znacznik {SITE_URL} poka�e ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM"               ,"Zmie� ustawienia formularza");
define("_AM_FORM_ACTION_EDITELEMENT"            ,"Zmie� elementy formularza");
define("_AM_FORM_ACTION_CLONE"                  ,"Powiel ten formularz");

define("_AM_FORM_NEW"                           ,"Utw�rz nowy formularz");
define("_AM_FORM_EDIT"                          ,"Zmie� formularz: %s");
define("_AM_FORM_CONFIRM_DELETE"                ,"Czy jeste� pewien, �e chcesz skasowa� ten formularz i wszystkie jego elementy?");

define("_AM_ID"                                 ,"ID");
define("_AM_ACTION"                             ,"Akcja");
define("_AM_RESET_ORDER"                        ,"Akutalizuj kolejno��");
define("_AM_SAVE_THEN_ELEMENTS"                 ,"Zapisz ten element");
define("_AM_SAVE_THEN_FORM"                     ,"Zapisz ten formularz");
define("_AM_NOTHING_SELECTED"                   ,"Nic nie wybrano.");
define("_AM_GO_CREATE_FORM"                     ,"Musisz najpierw stworzy� fromularz.");

define("_AM_ELEMENTS_OF_FORM"                   ,"Element formularza %s");
define("_AM_ELE_APPLY_TO_FORM"                  ,"Zastosuj do formularza");
define("_AM_ELE_HTML"                           ,"Tekst/ HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG"                ,"Ta wersja XOOPS nie spe�nia wymaga� Liaise, dlatego modu� mo�e nie dzia�a�poprawnie.");
define("_AM_ELE_UPLOADFILE"                     ,"Dodawanie plik�w");
define("_AM_ELE_UPLOADIMG"                      ,"Dodawanie obrazk�w");
define("_AM_ELE_UPLOADIMG_MAXWIDTH"             ,"Maksymalna szeroko�� w pikselach");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT"            ,"Maksymalna wysoko��w pikselach");
define("_AM_ELE_UPLOAD_MAXSIZE"                 ,"Maksymalna wielko�� pliku w bajtach");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC"            ,"1k = 1024 bajt�w");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT"       ,"0 = bez limitu");
define("_AM_ELE_UPLOAD_ALLOWED_EXT"             ,"Zezw�l na nast�puj�ce zako�czenia plik�w");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC"        ,"Odziel zako�czenia plik�w u�ywaj�c |, wielko�� znak�w nie ma znaczenia. Na przyk�ad: 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME"            ,"Zezw�l na typy MIME");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC"       ,"Odziel typy MIME u�ywaj�c |, wielko�� znak�w nie ma znaczenia. Na przyk�ad: 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT"            ,"Pozostaw to pole pustm, aby zezwoli� na wszystko (nie zalecane ze wzgl�d�w bezpiecze�stwa)");
define("_AM_ELE_UPLOAD_SAVEAS"                  ,"Zapisuj dodawane pliki do");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL"             ,"Za��cznik e-mail");
define("_AM_ELE_UPLOAD_SAVEAS_FILE"             ,"Katalog do zapisu dla plik�w dodawanych");

?>