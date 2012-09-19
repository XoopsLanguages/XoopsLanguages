<?php
/*******************************************************************
* $Id: main.php,v 0.2.1 26/12/2005 20:37 BitC3R0 Exp $             *
* ----------------------------------------------------             *
* RMSOFT Gallery System 2.0                                        *
* Sistema Avanzado de GalerĂ­as                                     *
* CopyRight ÂŠ 2005 - 2006. Red MĂŠxico Soft                         *
* http://www.redmexico.com.mx                                      *
* http://www.xoops-mexico.net                                      *
*                                                                  *
* This program is free software; you can redistribute it and/or    *
* modify it under the terms of the GNU General Public License as   *
* published by the Free Software Foundation; either version 2 of   *
* the License, or (at your option) any later version.              *
*                                                                  *
* This program is distributed in the hope that it will be useful,  *
* but WITHOUT ANY WARRANTY; without even the implied warranty of   *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the     *
* GNU General Public License for more details.                     *
*                                                                  *
* You should have received a copy of the GNU General Public        *
* License along with this program; if not, write to the Free       *
* Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,   *
* MA 02111-1307 USA                                                *
*                                                                  *
* ----------------------------------------------------             *
* main.php:                                                        *
* Lenguaje                                                         *
* ----------------------------------------------------             *
* @copyright:  2005 - 2006. BitC3R0.                              *
* @autor: BitC3R0                                                  *
* @paquete: RMSOFT GS v2.0                                         *
* @version: 0.2.1                                                 *
* @modificado: 26/12/2005 08:37:20 p.m.                            *
*******************************************************************/

global $rmgs_location;

define('_RMGS_PHOTOS', 'Obrazy:');
define('_RMGS_YOURPHOTOS', 'Moje obrazy');
define('_RMGS_UPLOAD', 'Wgraj');
define('_RMGS_POPULARS', 'Popularne');
define('_RMGS_BESTVOTE', 'Najlepiej ocenione');
define('_RMGS_SEARCH', 'Szukaj');
define('_RMGS_QUOTA', 'Używane <strong>%s</strong> z <strong>%s</strong>.');
define('_RMGS_ALL_PHOTOS', 'Wszystkie obrazy');
define('_RMGS_BY', 'Od:');
define('_RMGS_LASTIMAGES', 'Ostatnie <strong>%s</strong> Obrazy');
define('_RMGS_CATEGOS', 'Kategorie');
define('_RMGS_SUBCATEGOS', 'Podkategorie');
define('_RMGS_IMGCOUNT', 'Obrazów: <strong>%s</strong>');
define('_RMGS_SINCE', 'Od:');
define('_RMGS_GOTO', 'Idź do:');
define('_RMGS_NOALLOWED', 'Przepraszamy, ale nie masz uprawnień do przeglądania tej sekcji.');
define('_RMGS_PAG', 'Strona:');
define('_RMGS_RESULTS', 'Wyników na stronie:');
define('_RMGS_NOCAT', 'Nie wskazaleś kategorii.');
define('_RMGS_CATEGO_NOTFOUND', 'Nie znaleziono wybranej kategorii');
define('_RMGS_WELCOME', 'Witaj %s!');
define('_RMGS_NOIMG', 'Obraz nie został wybrany do wyświetlenia.');
define('_RMGS_IMG_NOTFOUND', 'Nie znaleziono wybranego obrazu');
define('_RMGS_INVALID_METHOD', 'Nieprawidłowa metoda');
define('_RMGS_IMG', 'Obraz');
define('_RMGS_FAVORITES', 'Ulubione');
define('_RMGS_FINDIMAGE', 'Znajdź obraz:');
define('_RMGS_POPULARKEY', 'Popularne wyszukiwania');
define('_RMGS_UPLOAD_HOME', 'Wgraj obraz');
define('_RMGS_FAVS_HOME', 'Moje ulubione');
define('_RMGS_TOTAL_POINTS', '%s Punktów');

switch ($rmgs_location){
	case 'details':
		define('_RMGS_DTITLE', 'Tytuł:');
		define('_RMGS_DVOTES', 'Głosów:');
		define('_RMGS_DDOWNS', 'Dostęp:');
		define('_RMGS_DRATE', 'Ocena:');
		define('_RMGS_DPOP', 'Popularność:');
		define('_RMGS_DVOTE', 'Głosuj');
		define('_RMGS_PREV', 'Poprzedni');
		define('_RMGS_NEXT', 'Następny');
		define('_RMGS_AVAILABLE_SIZES', 'Pozostałe formaty:');
		define('_RMGS_KEYS', 'Klucze');
		define('_RMGS_SIZES', 'Formaty');
		define('_RMGS_BELONG_TO', 'Kategorie');
		break;
	case 'votos':
		define('_RMGS_CANNOT', 'Przeraszamy, ale nie masz uprawnień do głosowania');
		define('_RMGS_ONEVOTEDAY', 'Możesz głosować tylko raz dziennie');
		define('_RMGS_CLOSEW', 'Zamknij okno');
		define('_RMGS_VOTE_THX', 'Dziękujemy za oddanie głosu');
		define('_RMGS_VOTE_ERR', 'twój głos nie został zapisany z powodu błędu. Proszę spróbować jeszcze raz.');
		define('_RMGS_NOVOTE_TWICE', 'Nie możesz głosować dwa razy na ten sam obraz');
		define('_RMGS_TITPAGE', 'Głosów');
		break;
	case 'favoritos':
		define('_RMGS_PREV_PAGE', 'Wróć do');
		break;
	case 'postales':
		define('_RMGS_CREATE_POSTAL', 'Stwórz pocztówkę');
		define('_RMGS_NAME_DEST', 'Odbiorca:');
		define('_RMGS_DEST_EMAIL', 'E-mail odbiorcy:');
		define('_RMGS_TITLE_POSTAL', 'Tytuł pocztówki:');
		define('_RMGS_POSTAL_CONTENT', 'Treść wiadomości:');
		define('_RMGS_STEMPLATE', 'Skórka:');
		define('_RMGS_YOUR_NAME', 'Twoje imię:');
		define('_RMGS_YOUR_MAIL', 'Twój e-mail:');
		define('_RMGS_PREVIEW', 'Podgląd');
		define('_RMGS_ERRTITLE', 'Nie wpisałeś tytułu dla pocztówki');
		define('_RMGS_ERRTEXT', 'Nie wpisałeś treści wiadomości');
		define('_RMGS_ERRNAMEDEST', 'Nie wpisałeś odbiorcy');
		define('_RMGS_ERRMAILDEST', 'Nie wpisałeś e-mailu odbiorcu');
		define('_RMGS_ERRNAME', 'Niei wpisałeś swojego imienia');
		define('_RMGS_ERREMAIL', 'Nie wpisałeś swojego adresu e-mail');
		define('_RMGS_ERRTPL', 'musisz wybrać wygląd pocztówki');
		define('_RMGS_POSTALSENT', 'Twoja pocztówka została wysłana do <strong>%s</strong> ');
		define('_RMGS_ERRSENT', 'Wystapił bład podczas wysyłania pocztówki. Spróbuj ponownie.');
		define('_RMGS_POSTALRECEIVE', 'Otrzymałeś pocztówkę w %s');
		define('_RMGS_NOEXISTS', 'Wybrana pocztówka nie istnieje');
		break;
	case 'uploads':
		define('_RMGS_UPLOAD_IMAGES', 'Wgraj obraz');
		define('_RMGS_UPLOADTIP', 'Wybierz obrazy na dysku twardym i przypisz im słowa kluczowe.<br /><br />Pozwalają one na wyszukiwanie obrazów w galerii.');
		define('_RMGS_KEYWORDS', 'Słowa Kluczowe:*');
		define('_RMGS_KEYSPACE', 'Oddziel słowa spacjami');
		define('_RMGS_SELECT_CATEGO', 'Kategorie:*');
		define('_RMGS_UPLOAD_OK', 'Obrazy zostały utworzone');
		
		define('_RMGS_ERR_KEYS', 'Nie dodałeś słów dla wyszukiwania');
		define('_RMGS_ERR_CATS', 'Proszę wskazać kategorię dla obrazu');
		define('_RMGS_ERR_IMAGES', 'Nie ma obrazu do wgrania');
		define('_RMGS_ERR_ALLOWCATS', 'Nie masz uprawnień do wgrywania obrazów we wskazanych kategoriach');
		define('_RMGS_ERR_QUOTA', 'Przepraszamy, ale przekroczyłeś limit dyskowy dla swojego konta.');
		break;
	case 'misimagenes':
		define('_RMGS_MYPICS_TOTAL', 'Moje obrazy: <em><strong>%s</strong> Obrazów</em>');
		define('_RMGS_DELETE', 'Skasuj');
		define('_RMGS_EDIT', 'Edytuj');
		define('_RMGS_OKDELETE', 'Obraz został skasowany');
		define('_RMGS_NOUSER', 'Nie masz uprawnień do tej czynności!');
		define('_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasować ten element?');
		define('_RMGS_ERRID', 'Nie wskazałeś obrazu do edycji');
		define('_RMGS_ERRIMAGE', 'Wybrany obraz nie został znaleziony');
		define('_RMGS_ERRSIZE', 'Nie znaleziono wybranego formatu');
		define('_RMGS_ERRFILE', 'Nie wskazałeś poliku');
		define('_RMGS_ERRUPLOAD', 'Wystąpił błąd podczas wgrywania pliku na serwer. Proszę spróbować ponownie.');
		define('_RMGS_EDITOK', 'Zmodyfikowano obraz.');
		define('_RMGS_ERRONDB', 'Wystąpił błąd podczas zapisywania pliku. Proszę spróbowac ponownie.');
		// Forumulario
		define('_RMGS_EDIT_TITLE', 'Edytowanie "%s"');
		define('_RMGS_IMGTITLE', 'tytuł:');
		define('_RMGS_IMGFILE', 'Plik:');
		define('_RMGS_IMGFILE_DESC', 'Jeśli wskażesz nowy plik to stary zostanie skasowany.');
		define('_RMGS_IMGCYR_FILE', 'Aktualny plik:');
		define('_RMGS_KEYWORDS', 'Słowa Kluczowe:*');
		define('_RMGS_SELECT_CATEGO', 'Kategorie:*');
		define('_RMGS_DDOWNS', 'Dostęp:');
		define('_RMGS_SIZES', 'Formaty');
		define('_RMGS_SIZES_TITLE', 'Pozostałe formaty:');
		define('_RMGS_FORM_TITLE', 'Nowy Format');
		define('_RMGS_FFILE', 'Plik (Lokalny):');
		define('_RMGS_FFILE_URL', 'Plik (URL):');
		define('_RMGS_LOCAL', 'Lokalny');
		define('_RMGS_REMOTE', 'Przenieś');
		define('_RMGS_RETURN', 'Wstecz');
		break;
	case 'imagenes':
		define('_RMGS_TITLE_ALL', 'Przeglądaj wszystkie obrazy');
		define('_RMGS_TITLE_POPULAR', 'Najbardziej popularne');
		define('_RMGS_TITLE_VOTES', 'Najlepiej ocenione');
		define('_RMGS_TITLE_USER', 'Obrazów z %s');
		define('_RMGS_TITLE_KEYS', '"%s" Rezultatów');
		define('_RMGS_SHOWING', 'Widocznych <strong>%s</strong> do <strong>%s</strong> z <strong>%s</strong> Obrazów');
		define('_RMGS_ERR_KEYS', 'Nie dodałeś słów dla wyszukiwania');
		break;
}

?>