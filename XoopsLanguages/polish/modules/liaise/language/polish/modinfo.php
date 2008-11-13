<?php
// 2006-12-20 K.OHWADA
// add captcha

// $Id: modinfo.php 26 2005-09-04 09:52:40Z tuff $
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:44 dap997 Exp $ dap997 17.09.2005 rc1

// The name of this module
define("_MI_LIAISE_NAME"                  ,"Liaise");

// A brief description of this module
define("_MI_LIAISE_DESC"                  ,"Kreator formularzy kontaktowych");

// admin/menu.php
define("_MI_LIAISE_ADMENU1"               ,"Lista formularzy kontaktowych");
define("_MI_LIAISE_ADMENU2"               ,"Utw�rz nowy formularz");

//	preferences
define("_MI_LIAISE_TEXT_WIDTH"            ,"Standardowa szeroko�� tekstbox�w ");
define("_MI_LIAISE_TEXT_MAX"              ,"Standardowa maksymalna d�ugo�� tekstboks�w");
define("_MI_LIAISE_TAREA_ROWS"            ,"Standardowa ilo�� wierszy w textareas");
define("_MI_LIAISE_TAREA_COLS"            ,"Standardowe kolumny w textareas");

######### version 1.1  additions #########
//	preferences
define("_MI_LIAISE_MAIL_CHARSET"          ,"Kodowanie tekstu dla wysy�anych e-maili");

//	template descriptions
define("_MI_LIAISE_TMPL_MAIN_DESC"        ,"Strona g��wna Liaise");
define("_MI_LIAISE_TMPL_ERROR_DESC"       ,"Strona pokazywana w razie wyst�pienia b��du");

######### version 1.2 additions #########
//	template descriptions
define("_MI_LIAISE_TMPL_FORM_DESC"        ,"Wzorce dla formularzy");

//	preferences
define("_MI_LIAISE_MOREINFO"              ,"Wy�lij dodatkowe informacje wraz z formularzem");
define("_MI_LIAISE_MOREINFO_USER"         ,"Nazwa u�ytkownika i adres URL");
define("_MI_LIAISE_MOREINFO_IP"           ,"Adres IP u�ytkownika");
define("_MI_LIAISE_MOREINFO_AGENT"        ,"Nazwa przegl�darki u�ytkownika");
define("_MI_LIAISE_MOREINFO_FORM"         ,"Adres URL strony u�ytkownika ");
define("_MI_LIAISE_MAIL_CHARSET_DESC"     ,"Zostaw puste dla "._CHARSET);
define("_MI_LIAISE_PREFIX"                ,"Prefiks tekstowy dla wymaganych p�l");
define("_MI_LIAISE_SUFFIX"                ,"Sufiks tekstowy dla wymaganych p�l");
define("_MI_LIAISE_INTRO"                 ,"Tekst wprowadzenia na stronie g��wnej");
define("_MI_LIAISE_GLOBAL"                ,"Tekst pokazywany na ka�dej stronie formularza");

// admin/menu.php
define("_MI_LIAISE_ADMENU3"               ,"Utw�rz element formularza");

######### version 1.21 additions #########
// preferences default values
define("_MI_LIAISE_INTRO_DEFAULT"         ,"Poczuj si� zaproszonym do napisanie do nas przez nast�puj�cy formularz:");
define("_MI_LIAISE_GLOBAL_DEFAULT"        ,"[b]* Wymagane[/b]");

######### version 1.23 additions #########
define("_MI_LIAISE_UPLOADDIR"             ,"Fizyczna �cie�ka do przechowywania dodanych plik�w  BEX trailing slash");
define("_MI_LIAISE_UPLOADDIR_DESC"        ,"Wszystkie pliki b�d� przechowywane tutaj o gdy formularz zostanie wys�any przez prytwatn� wiadomo��.");

// --- captcha ---
define("_MI_LIAISE_CAPTCHA","Zabezpieczenie antyspamowe");
define("_MI_LIAISE_CAPTCHA_DESC","Wybierz TAK, aby u�y� (zalecane)");

?>