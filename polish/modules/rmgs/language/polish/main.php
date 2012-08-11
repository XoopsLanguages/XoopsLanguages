<?php
/*******************************************************************
* $Id: main.php,v 0.2.1 26/12/2005 20:37 BitC3R0 Exp $             *
* ----------------------------------------------------             *
* RMSOFT Gallery System 2.0                                        *
* Sistema Avanzado de Galerías                                     *
* CopyRight © 2005 - 2006. Red México Soft                         *
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

define('_RMGS_PHOTOS','Obrazy:');
define('_RMGS_YOURPHOTOS','Moje obrazy');
define('_RMGS_UPLOAD','Wgraj');
define('_RMGS_POPULARS','Popularne');
define('_RMGS_BESTVOTE','Najlepiej ocenione');
define('_RMGS_SEARCH','Szukaj');
define('_RMGS_QUOTA','U�ywane <strong>%s</strong> z <strong>%s</strong>.');
define('_RMGS_ALL_PHOTOS','Wszystkie obrazy');
define('_RMGS_BY','Od:');
define('_RMGS_LASTIMAGES','Ostatnie <strong>%s</strong> Obrazy');
define('_RMGS_CATEGOS','Kategorie');
define('_RMGS_SUBCATEGOS','Podkategorie');
define('_RMGS_IMGCOUNT','Obraz�w: <strong>%s</strong>');
define('_RMGS_SINCE','Od:');
define('_RMGS_GOTO','Id� do:');
define('_RMGS_NOALLOWED','Przepraszamy, ale nie masz uprawnie� do przegl�dania tej sekcji.');
define('_RMGS_PAG','Strona:');
define('_RMGS_RESULTS','Wynik�w na stronie:');
define('_RMGS_NOCAT','Nie wskazale� kategorii.');
define('_RMGS_CATEGO_NOTFOUND','Nie znaleziono wybranej kategorii');
define('_RMGS_WELCOME','Witaj %s!');
define('_RMGS_NOIMG','Obraz nie zosta� wybrany do wy�wietlenia.');
define('_RMGS_IMG_NOTFOUND','Nie znaleziono wybranego obrazu');
define('_RMGS_INVALID_METHOD','Nieprawid�owa metoda');
define('_RMGS_IMG','Obraz');
define('_RMGS_FAVORITES','Ulubione');
define('_RMGS_FINDIMAGE','Znajd� obraz:');
define('_RMGS_POPULARKEY','Popularne wyszukiwania');
define('_RMGS_UPLOAD_HOME','Wgraj obraz');
define('_RMGS_FAVS_HOME','Moje ulubione');
define('_RMGS_TOTAL_POINTS','%s Punkt�w');

switch ($rmgs_location){
	case 'details':
		define('_RMGS_DTITLE','Tytu�:');
		define('_RMGS_DVOTES','G�os�w:');
		define('_RMGS_DDOWNS','Dost�p:');
		define('_RMGS_DRATE','Ocena:');
		define('_RMGS_DPOP','Popularno��:');
		define('_RMGS_DVOTE','G�osuj');
		define('_RMGS_PREV','Poprzedni');
		define('_RMGS_NEXT','Nast�pny');
		define('_RMGS_AVAILABLE_SIZES','Pozosta�e formaty:');
		define('_RMGS_KEYS','Klucze');
		define('_RMGS_SIZES','Formaty');
		define('_RMGS_BELONG_TO','Kategorie');
		break;
	case 'votos':
		define('_RMGS_CANNOT','Przeraszamy, ale nie masz uprawnie� do g�osowania');
		define('_RMGS_ONEVOTEDAY','Mo�esz g�osowa� tylko raz dziennie');
		define('_RMGS_CLOSEW','Zamknij okno');
		define('_RMGS_VOTE_THX','Dzi�kujemy za oddanie g�osu');
		define('_RMGS_VOTE_ERR','tw�j g�os nie zosta� zapisany z powodu b��du. Prosz� spr�bowa� jeszcze raz.');
		define('_RMGS_NOVOTE_TWICE','Nie mo�esz g�osowa� dwa razy na ten sam obraz');
		define('_RMGS_TITPAGE','G�os�w');
		break;
	case 'favoritos':
		define('_RMGS_PREV_PAGE','Wr�� do');
		break;
	case 'postales':
		define('_RMGS_CREATE_POSTAL','Stw�rz poczt�wk�');
		define('_RMGS_NAME_DEST','Odbiorca:');
		define('_RMGS_DEST_EMAIL','E-mail odbiorcy:');
		define('_RMGS_TITLE_POSTAL','Tytu� poczt�wki:');
		define('_RMGS_POSTAL_CONTENT','Tre�� wiadomo�ci:');
		define('_RMGS_STEMPLATE','Sk�rka:');
		define('_RMGS_YOUR_NAME','Twoje imi�:');
		define('_RMGS_YOUR_MAIL','Tw�j e-mail:');
		define('_RMGS_PREVIEW','Podgl�d');
		define('_RMGS_ERRTITLE','Nie wpisa�e� tytu�u dla poczt�wki');
		define('_RMGS_ERRTEXT','Nie wpisa�e� tre�ci wiadomo�ci');
		define('_RMGS_ERRNAMEDEST','Nie wpisa�e� odbiorcy');
		define('_RMGS_ERRMAILDEST','Nie wpisa�e� e-mailu odbiorcu');
		define('_RMGS_ERRNAME','Niei wpisa�e� swojego imienia');
		define('_RMGS_ERREMAIL','Nie wpisa�e� swojego adresu e-mail');
		define('_RMGS_ERRTPL','musisz wybra� wygl�d poczt�wki');
		define('_RMGS_POSTALSENT','Twoja poczt�wka zosta�a wys�ana do <strong>%s</strong> ');
		define('_RMGS_ERRSENT','Wystapi� b�ad podczas wysy�ania poczt�wki. Spr�buj ponownie.');
		define('_RMGS_POSTALRECEIVE','Otrzyma�e� poczt�wk� w %s');
		define('_RMGS_NOEXISTS','Wybrana poczt�wka nie istnieje');
		break;
	case 'uploads':
		define('_RMGS_UPLOAD_IMAGES','Wgraj obraz');
		define('_RMGS_UPLOADTIP','Wybierz obrazy na dysku twardym i przypisz im s�owa kluczowe.<br /><br />Pozwalaj� one na wyszukiwanie obraz�w w galerii.');
		define('_RMGS_KEYWORDS','S�owa Kluczowe:*');
		define('_RMGS_KEYSPACE','Oddziel s�owa spacjami');
		define('_RMGS_SELECT_CATEGO','Kategorie:*');
		define('_RMGS_UPLOAD_OK','Obrazy zosta�y utworzone');
		
		define('_RMGS_ERR_KEYS','Nie doda�e� s��w dla wyszukiwania');
		define('_RMGS_ERR_CATS','Prosz� wskaza� kategori� dla obrazu');
		define('_RMGS_ERR_IMAGES','Nie ma obrazu do wgrania');
		define('_RMGS_ERR_ALLOWCATS','Nie masz uprawnie� do wgrywania obraz�w we wskazanych kategoriach');
		define('_RMGS_ERR_QUOTA','Przepraszamy, ale przekroczy�e� limit dyskowy dla swojego konta.');
		break;
	case 'misimagenes':
		define('_RMGS_MYPICS_TOTAL','Moje obrazy: <em><strong>%s</strong> Obraz�w</em>');
		define('_RMGS_DELETE','Skasuj');
		define('_RMGS_EDIT','Edytuj');
		define('_RMGS_OKDELETE','Obraz zosta� skasowany');
		define('_RMGS_NOUSER','Nie masz uprawnie� do tej czynno�ci!');
		define('_RMGS_CONFIRMDEL','Czy na pewno chcesz skasowa� ten element?');
		define('_RMGS_ERRID','Nie wskaza�e� obrazu do edycji');
		define('_RMGS_ERRIMAGE','Wybrany obraz nie zosta� znaleziony');
		define('_RMGS_ERRSIZE','Nie znaleziono wybranego formatu');
		define('_RMGS_ERRFILE','Nie wskaza�e� poliku');
		define('_RMGS_ERRUPLOAD','Wyst�pi� b��d podczas wgrywania pliku na serwer. Prosz� spr�bowa� ponownie.');
		define('_RMGS_EDITOK','Zmodyfikowano obraz.');
		define('_RMGS_ERRONDB','Wyst�pi� b��d podczas zapisywania pliku. Prosz� spr�bowac ponownie.');
		// Forumulario
		define('_RMGS_EDIT_TITLE','Edytowanie "%s"');
		define('_RMGS_IMGTITLE','tytu�:');
		define('_RMGS_IMGFILE','Plik:');
		define('_RMGS_IMGFILE_DESC','Je�li wska�esz nowy plik to stary zostanie skasowany.');
		define('_RMGS_IMGCYR_FILE','Aktualny plik:');
		define('_RMGS_KEYWORDS','S�owa Kluczowe:*');
		define('_RMGS_SELECT_CATEGO','Kategorie:*');
		define('_RMGS_DDOWNS','Dost�p:');
		define('_RMGS_SIZES','Formaty');
		define('_RMGS_SIZES_TITLE','Pozosta�e formaty:');
		define('_RMGS_FORM_TITLE','Nowy Format');
		define('_RMGS_FFILE','Plik (Lokalny):');
		define('_RMGS_FFILE_URL','Plik (URL):');
		define('_RMGS_LOCAL','Lokalny');
		define('_RMGS_REMOTE','Przenie�');
		define('_RMGS_RETURN','Wstecz');
		break;
	case 'imagenes':
		define('_RMGS_TITLE_ALL','Przegl�daj wszystkie obrazy');
		define('_RMGS_TITLE_POPULAR','Najbardziej popularne');
		define('_RMGS_TITLE_VOTES','Najlepiej ocenione');
		define('_RMGS_TITLE_USER','Obraz�w z %s');
		define('_RMGS_TITLE_KEYS','"%s" Rezultat�w');
		define('_RMGS_SHOWING','Widocznych <strong>%s</strong> do <strong>%s</strong> z <strong>%s</strong> Obraz�w');
		define('_RMGS_ERR_KEYS','Nie doda�e� s��w dla wyszukiwania');
		break;
}

?>