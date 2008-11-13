<?php
/*******************************************************************
* $Id: main.php,v 0.2.1 26/12/2005 20:37 BitC3R0 Exp $             *
* ----------------------------------------------------             *
* RMSOFT Gallery System 2.0                                        *
* Sistema Avanzado de GalerÃ­as                                     *
* CopyRight Â© 2005 - 2006. Red MÃ©xico Soft                         *
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
define('_RMGS_QUOTA', 'U¿ywane <strong>%s</strong> z <strong>%s</strong>.');
define('_RMGS_ALL_PHOTOS', 'Wszystkie obrazy');
define('_RMGS_BY', 'Od:');
define('_RMGS_LASTIMAGES', 'Ostatnie <strong>%s</strong> Obrazy');
define('_RMGS_CATEGOS', 'Kategorie');
define('_RMGS_SUBCATEGOS', 'Podkategorie');
define('_RMGS_IMGCOUNT', 'Obrazów: <strong>%s</strong>');
define('_RMGS_SINCE', 'Od:');
define('_RMGS_GOTO', 'Id¼ do:');
define('_RMGS_NOALLOWED', 'Przepraszamy, ale nie masz uprawnieñ do przegl±dania tej sekcji.');
define('_RMGS_PAG', 'Strona:');
define('_RMGS_RESULTS', 'Wyników na stronie:');
define('_RMGS_NOCAT', 'Nie wskazale¶ kategorii.');
define('_RMGS_CATEGO_NOTFOUND', 'Nie znaleziono wybranej kategorii');
define('_RMGS_WELCOME', 'Witaj %s!');
define('_RMGS_NOIMG', 'Obraz nie zosta³ wybrany do wy¶wietlenia.');
define('_RMGS_IMG_NOTFOUND', 'Nie znaleziono wybranego obrazu');
define('_RMGS_INVALID_METHOD', 'Nieprawid³owa metoda');
define('_RMGS_IMG', 'Obraz');
define('_RMGS_FAVORITES', 'Ulubione');
define('_RMGS_FINDIMAGE', 'Znajd¼ obraz:');
define('_RMGS_POPULARKEY', 'Popularne wyszukiwania');
define('_RMGS_UPLOAD_HOME', 'Wgraj obraz');
define('_RMGS_FAVS_HOME', 'Moje ulubione');
define('_RMGS_TOTAL_POINTS', '%s Punktów');

switch ($rmgs_location){
	case 'details':
		define('_RMGS_DTITLE', 'Tytu³:');
		define('_RMGS_DVOTES', 'G³osów:');
		define('_RMGS_DDOWNS', 'Dostêp:');
		define('_RMGS_DRATE', 'Ocena:');
		define('_RMGS_DPOP', 'Popularno¶æ:');
		define('_RMGS_DVOTE', 'G³osuj');
		define('_RMGS_PREV', 'Poprzedni');
		define('_RMGS_NEXT', 'Nastêpny');
		define('_RMGS_AVAILABLE_SIZES', 'Pozosta³e formaty:');
		define('_RMGS_KEYS', 'Klucze');
		define('_RMGS_SIZES', 'Formaty');
		define('_RMGS_BELONG_TO', 'Kategorie');
		break;
	case 'votos':
		define('_RMGS_CANNOT', 'Przeraszamy, ale nie masz uprawnieñ do g³osowania');
		define('_RMGS_ONEVOTEDAY', 'Mo¿esz g³osowaæ tylko raz dziennie');
		define('_RMGS_CLOSEW', 'Zamknij okno');
		define('_RMGS_VOTE_THX', 'Dziêkujemy za oddanie g³osu');
		define('_RMGS_VOTE_ERR', 'twój g³os nie zosta³ zapisany z powodu b³êdu. Proszê spróbowaæ jeszcze raz.');
		define('_RMGS_NOVOTE_TWICE', 'Nie mo¿esz g³osowaæ dwa razy na ten sam obraz');
		define('_RMGS_TITPAGE', 'G³osów');
		break;
	case 'favoritos':
		define('_RMGS_PREV_PAGE', 'Wróæ do');
		break;
	case 'postales':
		define('_RMGS_CREATE_POSTAL', 'Stwórz pocztówkê');
		define('_RMGS_NAME_DEST', 'Odbiorca:');
		define('_RMGS_DEST_EMAIL', 'E-mail odbiorcy:');
		define('_RMGS_TITLE_POSTAL', 'Tytu³ pocztówki:');
		define('_RMGS_POSTAL_CONTENT', 'Tre¶æ wiadomo¶ci:');
		define('_RMGS_STEMPLATE', 'Skórka:');
		define('_RMGS_YOUR_NAME', 'Twoje imiê:');
		define('_RMGS_YOUR_MAIL', 'Twój e-mail:');
		define('_RMGS_PREVIEW', 'Podgl±d');
		define('_RMGS_ERRTITLE', 'Nie wpisa³e¶ tytu³u dla pocztówki');
		define('_RMGS_ERRTEXT', 'Nie wpisa³e¶ tre¶ci wiadomo¶ci');
		define('_RMGS_ERRNAMEDEST', 'Nie wpisa³e¶ odbiorcy');
		define('_RMGS_ERRMAILDEST', 'Nie wpisa³e¶ e-mailu odbiorcu');
		define('_RMGS_ERRNAME', 'Niei wpisa³e¶ swojego imienia');
		define('_RMGS_ERREMAIL', 'Nie wpisa³e¶ swojego adresu e-mail');
		define('_RMGS_ERRTPL', 'musisz wybraæ wygl±d pocztówki');
		define('_RMGS_POSTALSENT', 'Twoja pocztówka zosta³a wys³ana do <strong>%s</strong> ');
		define('_RMGS_ERRSENT', 'Wystapi³ b³ad podczas wysy³ania pocztówki. Spróbuj ponownie.');
		define('_RMGS_POSTALRECEIVE', 'Otrzyma³e¶ pocztówkê w %s');
		define('_RMGS_NOEXISTS', 'Wybrana pocztówka nie istnieje');
		break;
	case 'uploads':
		define('_RMGS_UPLOAD_IMAGES', 'Wgraj obraz');
		define('_RMGS_UPLOADTIP', 'Wybierz obrazy na dysku twardym i przypisz im s³owa kluczowe.<br /><br />Pozwalaj± one na wyszukiwanie obrazów w galerii.');
		define('_RMGS_KEYWORDS', 'S³owa Kluczowe:*');
		define('_RMGS_KEYSPACE', 'Oddziel s³owa spacjami');
		define('_RMGS_SELECT_CATEGO', 'Kategorie:*');
		define('_RMGS_UPLOAD_OK', 'Obrazy zosta³y utworzone');
		
		define('_RMGS_ERR_KEYS', 'Nie doda³e¶ s³ów dla wyszukiwania');
		define('_RMGS_ERR_CATS', 'Proszê wskazaæ kategoriê dla obrazu');
		define('_RMGS_ERR_IMAGES', 'Nie ma obrazu do wgrania');
		define('_RMGS_ERR_ALLOWCATS', 'Nie masz uprawnieñ do wgrywania obrazów we wskazanych kategoriach');
		define('_RMGS_ERR_QUOTA', 'Przepraszamy, ale przekroczy³e¶ limit dyskowy dla swojego konta.');
		break;
	case 'misimagenes':
		define('_RMGS_MYPICS_TOTAL', 'Moje obrazy: <em><strong>%s</strong> Obrazów</em>');
		define('_RMGS_DELETE', 'Skasuj');
		define('_RMGS_EDIT', 'Edytuj');
		define('_RMGS_OKDELETE', 'Obraz zosta³ skasowany');
		define('_RMGS_NOUSER', 'Nie masz uprawnieñ do tej czynno¶ci!');
		define('_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasowaæ ten element?');
		define('_RMGS_ERRID', 'Nie wskaza³e¶ obrazu do edycji');
		define('_RMGS_ERRIMAGE', 'Wybrany obraz nie zosta³ znaleziony');
		define('_RMGS_ERRSIZE', 'Nie znaleziono wybranego formatu');
		define('_RMGS_ERRFILE', 'Nie wskaza³e¶ poliku');
		define('_RMGS_ERRUPLOAD', 'Wyst±pi³ b³±d podczas wgrywania pliku na serwer. Proszê spróbowaæ ponownie.');
		define('_RMGS_EDITOK', 'Zmodyfikowano obraz.');
		define('_RMGS_ERRONDB', 'Wyst±pi³ b³±d podczas zapisywania pliku. Proszê spróbowac ponownie.');
		// Forumulario
		define('_RMGS_EDIT_TITLE', 'Edytowanie "%s"');
		define('_RMGS_IMGTITLE', 'tytu³:');
		define('_RMGS_IMGFILE', 'Plik:');
		define('_RMGS_IMGFILE_DESC', 'Je¶li wska¿esz nowy plik to stary zostanie skasowany.');
		define('_RMGS_IMGCYR_FILE', 'Aktualny plik:');
		define('_RMGS_KEYWORDS', 'S³owa Kluczowe:*');
		define('_RMGS_SELECT_CATEGO', 'Kategorie:*');
		define('_RMGS_DDOWNS', 'Dostêp:');
		define('_RMGS_SIZES', 'Formaty');
		define('_RMGS_SIZES_TITLE', 'Pozosta³e formaty:');
		define('_RMGS_FORM_TITLE', 'Nowy Format');
		define('_RMGS_FFILE', 'Plik (Lokalny):');
		define('_RMGS_FFILE_URL', 'Plik (URL):');
		define('_RMGS_LOCAL', 'Lokalny');
		define('_RMGS_REMOTE', 'Przenie¶');
		define('_RMGS_RETURN', 'Wstecz');
		break;
	case 'imagenes':
		define('_RMGS_TITLE_ALL', 'Przegl±daj wszystkie obrazy');
		define('_RMGS_TITLE_POPULAR', 'Najbardziej popularne');
		define('_RMGS_TITLE_VOTES', 'Najlepiej ocenione');
		define('_RMGS_TITLE_USER', 'Obrazów z %s');
		define('_RMGS_TITLE_KEYS', '"%s" Rezultatów');
		define('_RMGS_SHOWING', 'Widocznych <strong>%s</strong> do <strong>%s</strong> z <strong>%s</strong> Obrazów');
		define('_RMGS_ERR_KEYS', 'Nie doda³e¶ s³ów dla wyszukiwania');
		break;
}

?>