<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * _LANGCODE    pl
 * _CHARSET     UTF-8
 * @version     $Id: admin.php 5572 2010-10-21 09:10:49Z kris_fr $
 */
 
// Main
define("_AM_SYSTEM_CONFIG","Konfiguracja systemu");
define("_AM_SYSTEM_CPANEL","Panel Systemu");
define("_AM_SYSTEM_UPDATE","Aktualizacja");
define("_AM_SYSTEM_GOTOMODULE","Przejdź do modułu");
define("_AM_SYSTEM_HELP","Pomoc");
define("_AM_SYSTEM_HELP_VIEW","Pokaż Pomoc");
define("_AM_SYSTEM_HELP_HIDE","Ukryj Pomoc");
define("_AM_SYSTEM_TIPS","Porady");
define("_AM_SYSTEM_SECTION","Sekcja");
define("_AM_SYSTEM_DESC","Opis");
define("_AM_SYSTEM_GO","Przejdź do tej sekcji");
define("_AM_SYSTEM_STATUS","Zmień status sekcji");
define("_AM_SYSTEM_LOADING","Ładowanie");
define("_AM_SYSTEM_ALL","Wszystko");

define("_AM_SYSTEM_TIPS_MAIN","<ul><li>W tym miejscu można włączać lub wyłączać poszczególne sekcje modułu systemowego lub przejść bezpośrednio do danej pozycji.</li></ul>");
define("_AM_SYSTEM_AVATAR_INFO","<ul><li><span class='bold red'>%s</span> avatary.</li></ul>");
define("_AM_SYSTEM_BANNER_INFO","<ul><li><span class='bold red'>%s</span> banery.</li></ul>");
define("_AM_SYSTEM_COMMENT_INFO","<ul><li><span class='bold red'>%s</span> komentarze.</li></ul>");
define("_AM_SYSTEM_GROUP_INFO","<ul><li><span class='bold red'>%s</span> grupy.</li></ul>");
define("_AM_SYSTEM_IMG_INFO","<ul><li><span class='bold red'>%s</span> obrazy.</li></ul>");
define("_AM_SYSTEM_SMILIES_INFO","<ul><li><span class='bold red'>%s</span> emotikony.</li></ul>");
define("_AM_SYSTEM_RANKS_INFO","<ul><li><span class='bold red'>%s</span> rangi użytkowników.</li></ul>");
define("_AM_SYSTEM_USERS_INFO","<ul><li><span class='bold red'>%s</span> użytkownicy.</li></ul>");

// Admin Module Names and description
define("_AM_SYSTEM_ADGS","Grupy");
define("_AM_SYSTEM_ADGS_DESC","Grupom użytkowników <br /> można nadawać uprawnienia <br /> do poszczególnych bloków czy modułów.");
define("_AM_SYSTEM_BANS","Bannery");
define("_AM_SYSTEM_BANS_DESC","Zarządzanie wyświetlanymi <br /> reklamami w systemie Xoops.");
define("_AM_SYSTEM_BLOCKS","Bloki");
define("_AM_SYSTEM_BLOCKS_DESC","Przy pomocy bloków można dodawać <br /> wiele treści, jak i organizować <br /> ich rozmieszczenie na stronach.");
define("_AM_SYSTEM_MODULES","Moduły");
define("_AM_SYSTEM_MODULES_DESC","Tutaj można instalować<br />i odinstalowywać moduły.<br /> Dowiedz się więcej czym są moduły <br /> w Pomocy.");
define("_AM_SYSTEM_SMLS","Emotikony");
define("_AM_SYSTEM_SMLS_DESC","W tej sekcji znajdują się emotikony, <br /> które użytkownicy mogą wykorzystywać <br /> w swoich postach, komentarzach, PW, itd.");
define("_AM_SYSTEM_RANK","Rangi użytkowników");
define("_AM_SYSTEM_RANK_DESC","Użytkownikom można nadawać rangi.");
define("_AM_SYSTEM_USER","Użytkownicy");
define("_AM_SYSTEM_USER_DESC","Zarządzanie użytkownikami <br /> i ich przynależnością do grup <br /> oraz innych ustawień z tym związanych.");
define("_AM_SYSTEM_PREF","Preferencje");
define("_AM_SYSTEM_PREF_DESC","XOOPS i każdy moduł <br /> ma swoje preferencje, <br /> które służą do ich konfiguracji.");
define("_AM_SYSTEM_MLUS","Mail do użytkowników");
define("_AM_SYSTEM_MLUS_DESC","Ta opcja służy do wysyłania użytkownikom<br />wiadomości na konto e-mail<br />lub prywatnych wiadomości (PW) w systemie Xoops.");
define("_AM_SYSTEM_IMAGES","Obrazki");
define("_AM_SYSTEM_IMAGES_DESC","Tutaj można dodawać obrazki <br /> i tworzyć dla nich Kategorie.");
define("_AM_SYSTEM_AVATARS","Avatary");
define("_AM_SYSTEM_AVATARS_DESC","Dodawanie i zarządzanie avatarami, <br /> które użytkownicy mogą <br /> wykorzystać w swoich profilach.");
define("_AM_SYSTEM_TPLSETS","Szablony");
define("_AM_SYSTEM_TPLSETS_DESC","Jeśli potrzebujesz pewnych zmian <br /> w szablonach podstawowych <br /> lub w szablonach poszczególnych modułów, <br /> ta sekcja może być pomocna.");
define("_AM_SYSTEM_COMMENTS","Komentarze");
define("_AM_SYSTEM_COMMENTS_DESC","Użytkownicy mogą dodawać komentarze <br /> do artykułow, aktualności, <br /> zdjęć w albumach, itd. <br /> W tej sekcji znajduje się zbiorcza lista wszystkich komentarzy.");
define("_AM_SYSTEM_FILEMANAGER","Menedżer plików");
define("_AM_SYSTEM_FILEMANAGER_DESC","Tutaj można dokonywać zmian <br /> w plikach w Xoops.");
define("_AM_SYSTEM_MAINTENANCE","Konserwacja");
define("_AM_SYSTEM_MAINTENANCE_DESC","Narzędzia dla bazy danych, <br /> czyszczenia folderów cache i tabeli sesji.");

// Messages
define('_AM_SYSTEM_DBUPDATED', 'Uaktualniono bazę danych!');
define('_AM_SYSTEM_DBERROR', 'Nie uaktualniono bazy danych, bo wystapił nieokreślony błąd!');
define("_AM_SYSTEM_NOTACTIVE","Ta sekcja nie jest aktywna!");

// Group permission phrases
define('_MD_AM_PERMADDNG', 'Nie mogłem nadać %s uprawnień do %s grupie %s');
define('_MD_AM_PERMADDOK', 'Nadano %s uprawnień do %s grupie %s');
define('_MD_AM_PERMRESETNG', 'Nie mogłem zresetować uprawnień grupy w module %s');
define('_MD_AM_PERMADDNGP', 'Wszystkie nadrzędne pozycje muszą być zaznaczone.');

?>
