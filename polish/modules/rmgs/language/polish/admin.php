<?php
/*******************************************************************
* $Id: admin.php,v 0.1.0 17/12/2005 10:26 BitC3R0 Exp $            *
* -----------------------------------------------------            *
* RMSOFT Gallery System 2.0                                        *
* Sistema Avanzado de Galeras                                     *
* CopyRight  2005 - 2006. Red Mxico Soft                         *
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
* -----------------------------------------------------            *
* admin.php:                                                       *
* Lenguage espaol para el administrador                           *
* -----------------------------------------------------            *
* @copyright:  2005 - 2006. BitC3R0.                              *
* @autor: BitC3R0                                                  *
* @paquete: RMSOFT GS v2.0                                         *
* @version: 0.1.0                                                  *
* @modificado: 17/12/2005 10:26:26 a.m.                            *
*******************************************************************/

define('_AS_RMGS_DELETE', 'Skasuj');
define('_AS_RMGS_IMAGES', 'Obrazy');
define('_AS_RMGS_EDIT', 'Edytuj');
define('_AS_RMGS_SEND', 'Zgłoś');
define('_AS_RMGS_CANCEL', 'Anuluj');
define('_AS_RMGS_SELECT', 'Wybierz...');
define('_AS_RMGS_CATEGOS', 'Kategorie');
define('_AS_RMGS_NEWCATEGO', 'Nowa Kategoria');
define('_AS_RMGS_UPLOAD', 'Wgraj obrazek');
define('_AS_RMGS_SETS', 'Albumy');
define('_AS_RMGS_POSTALS', 'Pocztówki');
define('_AS_RMGS_USERS', 'Użytkownicy');
define('_AS_RMGS_FIELDREQUIRED', 'Pole %s musi być wypełnione');
define('_AS_RMGS_FIELDUNIQUE', 'Nastepne pole musi być unikalne:<br /> <strong>%s</strong>');
define('_AS_RMGS_ERRDB', 'Wystąpił błąd podczas wykonywania polecenia:<br /><br />%s');
define('_AS_RMGS_BACK', 'Wstecz');
define('_AM_RMDP_GOPAGE', 'Strona: ');
define('_AM_RMDP_PAGELOC', 'Strona <strong>%s</strong> z <strong>%s</strong>');
define('_AS_RMGS_OPTIONL', 'Opcje');

switch (_RMGS_LOCATION){

	case 'categorias':
		define('_AS_RMGS_CATEGOSTITLE', 'Lista Kategorii');
		define('_AS_RMGS_NAMEL', 'Nazwa');
		define('_AS_RMGS_DESCL', 'Opis');
		define('_AS_RMGS_DATEL', 'Data');
		define('_AS_RMGS_IMGSINCAT', '<span style="font-size: 10px;"><strong>%s</strong> Obrazów.</span>');
		
		define('_AS_RMGS_ACCESS_DESC', 'Tylko użytkownicy należący do wskazanych <br />grup mogą zobaczyć tą kategorię.');
		define('_AS_RMGS_ALL', 'Wszystkie...');
		define('_AS_RMGS_NOBODY', 'Nikt');
		define('_AS_RMGS_GROUP', 'Zaznacz grupy z dostepem:');
		define('_AS_RMGS_WRITE', 'Wskaż grupy z prawem zapisu:');
		define('_AS_RMGS_WRITEDESC', 'Tylko uzytkownicy należący do<br /> wybranych grup mogą wgrywać obrazy.');
		define('_AS_RMGS_FNAME', 'Nazwa:');
		define('_AS_RMGS_FDESC', 'Opis:');
		define('_AS_RMGS_NEWOK', 'Utworzono kategorię:');
		define('_AS_RMGS_MODOK', 'Zmodyfikowano kategorię');
		define('_AS_RMGS_NOTFOUND', 'Nie znaleziono kategorii');
		define('_AS_RMGS_EDITCATEGO', 'Edytuj Kategorię');
		define('_AS_RMGS_PARENT', 'Folder źródłowy kategorii:');
		define('_AS_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasować użytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego użytkownika zostaną skadowane.');
		define('_AS_RMGS_DELOK', 'Użytkownik został usunięty');
		define('_AS_RMGS_ERRNAME', 'Proszę wskazać nazwę kategorii');
		define('_AS_RMGS_ERREXIST', 'Wybrany plik nie istnieje');
		define('_AS_RMGS_TOTALIMGS', '<strong>%s</strong> Dostępne obrazy');
		break;
		
	case 'imagenes':
	
		define('_AS_RMGS_LISTTILE', 'Obrazów w %s');
		define('_AS_RMGS_LIMAGE', 'Obraz');
		define('_AS_RMGS_LTITLE', 'Tytuł');
		define('_AS_RMGS_LOCALSIZE', 'Lokalny');
		define('_AS_RMGS_REMOTESIZE', 'Przenieś');
		define('_AS_RMGS_LUSER', 'Uzytkownik');
		define('_AS_RMGS_LACCES', 'Wyświetleń:');
		define('_AS_RMGS_LVOTES', 'Głosów');
		define('_AS_RMGS_LOPTIONS', 'Opcje');
		define('_AS_RMGS_UPLOADFORM', 'Wgraj obrazy do %s');
		define('_AS_RMGS_INDISC', 'Zaznacz obrazy na dysku twardym i przypisz im słowa kluczowe.');
		define('_AS_RMGS_KEYS', 'Dodaj słowa kluczowe dla tego obrazu (<span style=\'font-size: 10px;\'>Oddzielaj je spacj&plusmn;</span>):');
		define('_AS_RMGS_CATEGOSP', 'Wgraj do Kategorii:');
		define('_AS_RMGS_IMGOK', 'Obraz został utworzony');
		define('_AS_RMGS_IMGMODOK', 'Obraz został zmodyfikowany');
		define('_AS_RMGS_NOCATEGO', 'Proszę wskazać kategorię do oglądania');
		define('_AS_RMGS_ERRID', 'Nie wskazałeś obrazu do edycji');
		define('_AS_RMGS_NOIMAGE', 'Wskazany obraz nie istnieje');
		define('_AS_RMGS_EDITIMG', 'Edytuj Obraz');
		define('_AS_RMGS_FTITLE', 'Tytuł');
		define('_AS_RMGS_FUSER', 'Użytkownik');
		define('_AS_RMGS_FFILE', 'Plik (lokalny):');
		define('_AS_RMGS_FFILE_URL', 'Plik (URL):');
		define('_AS_RMGS_FFILETYPE', 'Tytp pliku:');
		define('_AS_RMGS_FFILEIMG', 'Obraz');
		define('_AS_RMGS_FFILEBIN', 'Możliwy do zrzucenia');
		define('_AS_RMGS_FKEYS', 'Słowa Kluczowe:');
		define('_AS_RMGS_FCATEGOS', 'Kategorie:');
		define('_AS_RMGS_FFILEDESC', 'Jeśli zostanie wybrany nowy obraz to stary zostanie skasowany.');
		define('_AS_RMGS_FAFILE', 'Aktualny plik:');
		define('_AS_RMGS_FOTHERS', 'Inne Formaty');
		define('_AS_RMGS_ERRUPLOAD', 'Nowy plik nie został utworzony. Spróbuj ponownie.');
		define('_AS_RMGS_ADDSIZE', 'Dodaj inny rozmiar');
		define('_AS_RMGS_ERRTITLE', 'Proszę wpisać tytuł dla tego pliku');
		define('_AS_RMGS_ERRFILE', 'Musisz dodać plik dla tego elementu');
		define('_AS_RMGS_ERRSIZE', 'Zaznacz element do skasowania');
		define('_AS_RMGS_DELELEMENT', 'Czy na pewno skasować ten element?');
		define('_AS_RMGS_DELCONFIRM', 'Czy na pewno skasować ten obraz?');
		define('_AS_RMGS_DELOK', 'Użytkownik został usunięty');
		break;
	
	case 'usuarios':
	
		define('_AS_RMGS_LISTTITLE', 'UUzytkowników z obrazami w module');
		define('_AS_RMGS_LUSED', 'Zajęty: %s');
		define('_AS_RMGS_USER', 'Uzytkownik');
		define('_AS_RMGS_USED', 'Wykorzystana przestrze&ntilde;');
		define('_AS_RMGS_ALBUM', 'Albumy');
		define('_AS_RMGS_SETQUOTA', 'Modyfikuj limit');
		define('_AS_RMGS_ACTUALQ', 'Obecny limit:');
		define('_AS_RMGS_NEWQ', 'Nowy limit:');
		define('_AS_RMGS_NEWQDESC', 'Wskaż w megabitach');
		define('_AS_RMGS_ERRQUOTA', 'Nieprawidłowa wielkość limitu. Wielkość musi być dodatnia.');
		define('_AS_RMGS_QUOTAOK', 'Limit został zmodyfikowany');
		define('_AS_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasować użytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego użytkownika zostaną skadowane.');
		define('_AS_RMGS_DELOK', 'Użytkownik został usunięty');
		break;
	
	case 'postales':
		define('_AS_RMGS_POSTALTITLE', 'Lista pocztówek');
		define('_AS_RMGS_TITLE', 'Tutuł');
		define('_AS_RMGS_FECHA', 'Data');
		define('_AS_RMGS_TEMPLATE', 'Szablon');
		define('_AS_RMGS_USER', 'Uzytkownik');
		define('_AS_RMGS_OPTIONS', 'Opcje');
		define('_AS_RMGS_ANONYM', 'Anonim');
		define('_AS_RMGS_NEWTPL', 'Nowy Szablon');
		define('_AS_RMGS_TPLS', 'Szablony');
		
		define('_AS_RMGS_TPLSLIST', 'Lista Szablonów');
		define('_AS_RMGS_NOWRITE', 'Szablon nie może zostać zmodyfikowany, ponieważ folder docelowy nie ma właściwości zapisu');
		define('_AS_RMGS_TPLTITLE', 'Tytuł');
		define('_AS_RMGS_TPLTEXT', 'Zawartość');
		define('_AS_RMGS_ERRTITLE', 'Proszę wpisać tytuł dla tego pliku');
		define('_AS_RMGS_ERRTEXT', 'Prosze dodać zawartość do pliku');
		define('_AS_RMGS_ERREXIST', 'Wybrany plik nie istnieje');
		define('_AS_RMGS_ERRFILEEXISTS', 'Istnieje już plik o tej nazwie');
		break;

}
?>

