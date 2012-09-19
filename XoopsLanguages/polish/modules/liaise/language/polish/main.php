<?php
// $Id: main.php,v 1.1 2007/02/10 18:55:44 dap997 Exp $ dap997 17.09.2005 rc1
define("_LIAISE_MSG_SUBJECT", '%s');	// Site name removed since verion 1.22
define("_LIAISE_MSG_SENT"              , "Twoja wiadomość została przesłana.<br /> Dziękujemy.");

######### version 1.1 #########
//	"Other" option for check boxes/radio buttons/selections
define("_LIAISE_OPT_OTHER"             , "Inne: ");
define("_LIAISE_PROXY"                 , " (Proxy: %s)");

//	error messages
define("_LIAISE_ERR_HEADING"           , "Proszę chwilę zaczekać...");
define("_LIAISE_ERR_INVALIDMAIL"       , "Nieprawidłowy adres e-mail.");
define("_LIAISE_ERR_REQ"               , 'Proszę wypełnić wymagane pole "%s"');

######### version 1.2 additions #########
define("_LIAISE_FORM_IS_HIDDEN"        , "Ten formularz jest ukryty dla użytkowników.");
define("_LIAISE_MSG_UNAME"             , "Nadesłany przez: %s");
define("_LIAISE_MSG_UINFO"             , "\nURL do strony informacyjnej użytkownika:\n%s");
define("_LIAISE_MSG_IP"                , "Adres IP : %s");
define("_LIAISE_MSG_AGENT"             , "Przeglądarka użytkownika: %s");
define("_LIAISE_MSG_FORMURL"           , "Wiadomość została przesłana za pomocą następującego adresu URL:\n%s");

######### version 1.23 additions #########
define("_LIAISE_ATTACHED_FILE"         , "Dołączone pliki: %s");
define("_LIAISE_UPLOADED_FILE"         , "Wysłane pliki: %s");

// --- captcha ---
define("_LIAISE_CAPTCHA","Przepisz kod z obrazka");
define("_LIAISE_CAPTCHA_DESC","Jeżeli nie możesz odczytać znaków - kliknij w obrazek<br />aby wygenerować nową kombinację.");
define("_LIAISE_CAPTCHA_ERROR","Błąd zabezpieczenia antyspamowego");

?>