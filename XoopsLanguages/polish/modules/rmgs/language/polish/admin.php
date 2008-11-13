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
define('_AS_RMGS_SEND', 'Zg�o�');
define('_AS_RMGS_CANCEL', 'Anuluj');
define('_AS_RMGS_SELECT', 'Wybierz...');
define('_AS_RMGS_CATEGOS', 'Kategorie');
define('_AS_RMGS_NEWCATEGO', 'Nowa Kategoria');
define('_AS_RMGS_UPLOAD', 'Wgraj obrazek');
define('_AS_RMGS_SETS', 'Albumy');
define('_AS_RMGS_POSTALS', 'Poczt�wki');
define('_AS_RMGS_USERS', 'U�ytkownicy');
define('_AS_RMGS_FIELDREQUIRED', 'Pole %s musi by� wype�nione');
define('_AS_RMGS_FIELDUNIQUE', 'Nastepne pole musi by� unikalne:<br /> <strong>%s</strong>');
define('_AS_RMGS_ERRDB', 'Wyst�pi� b��d podczas wykonywania polecenia:<br /><br />%s');
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
		define('_AS_RMGS_IMGSINCAT', '<span style="font-size: 10px;"><strong>%s</strong> Obraz�w.</span>');
		
		define('_AS_RMGS_ACCESS_DESC', 'Tylko u�ytkownicy nale��cy do wskazanych <br />grup mog� zobaczy� t� kategori�.');
		define('_AS_RMGS_ALL', 'Wszystkie...');
		define('_AS_RMGS_NOBODY', 'Nikt');
		define('_AS_RMGS_GROUP', 'Zaznacz grupy z dostepem:');
		define('_AS_RMGS_WRITE', 'Wska� grupy z prawem zapisu:');
		define('_AS_RMGS_WRITEDESC', 'Tylko uzytkownicy nale��cy do<br /> wybranych grup mog� wgrywa� obrazy.');
		define('_AS_RMGS_FNAME', 'Nazwa:');
		define('_AS_RMGS_FDESC', 'Opis:');
		define('_AS_RMGS_NEWOK', 'Utworzono kategori�:');
		define('_AS_RMGS_MODOK', 'Zmodyfikowano kategori�');
		define('_AS_RMGS_NOTFOUND', 'Nie znaleziono kategorii');
		define('_AS_RMGS_EDITCATEGO', 'Edytuj Kategori�');
		define('_AS_RMGS_PARENT', 'Folder �r�d�owy kategorii:');
		define('_AS_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasowa� u�ytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego u�ytkownika zostan� skadowane.');
		define('_AS_RMGS_DELOK', 'U�ytkownik zosta� usuni�ty');
		define('_AS_RMGS_ERRNAME', 'Prosz� wskaza� nazw� kategorii');
		define('_AS_RMGS_ERREXIST', 'Wybrany plik nie istnieje');
		define('_AS_RMGS_TOTALIMGS', '<strong>%s</strong> Dost�pne obrazy');
		break;
		
	case 'imagenes':
	
		define('_AS_RMGS_LISTTILE', 'Obraz�w w %s');
		define('_AS_RMGS_LIMAGE', 'Obraz');
		define('_AS_RMGS_LTITLE', 'Tytu�');
		define('_AS_RMGS_LOCALSIZE', 'Lokalny');
		define('_AS_RMGS_REMOTESIZE', 'Przenie�');
		define('_AS_RMGS_LUSER', 'Uzytkownik');
		define('_AS_RMGS_LACCES', 'Wy�wietle�:');
		define('_AS_RMGS_LVOTES', 'G�os�w');
		define('_AS_RMGS_LOPTIONS', 'Opcje');
		define('_AS_RMGS_UPLOADFORM', 'Wgraj obrazy do %s');
		define('_AS_RMGS_INDISC', 'Zaznacz obrazy na dysku twardym i przypisz im s�owa kluczowe.');
		define('_AS_RMGS_KEYS', 'Dodaj s�owa kluczowe dla tego obrazu (<span style=\'font-size: 10px;\'>Oddzielaj je spacj&plusmn;</span>):');
		define('_AS_RMGS_CATEGOSP', 'Wgraj do Kategorii:');
		define('_AS_RMGS_IMGOK', 'Obraz zosta� utworzony');
		define('_AS_RMGS_IMGMODOK', 'Obraz zosta� zmodyfikowany');
		define('_AS_RMGS_NOCATEGO', 'Prosz� wskaza� kategori� do ogl�dania');
		define('_AS_RMGS_ERRID', 'Nie wskaza�e� obrazu do edycji');
		define('_AS_RMGS_NOIMAGE', 'Wskazany obraz nie istnieje');
		define('_AS_RMGS_EDITIMG', 'Edytuj Obraz');
		define('_AS_RMGS_FTITLE', 'Tytu�');
		define('_AS_RMGS_FUSER', 'U�ytkownik');
		define('_AS_RMGS_FFILE', 'Plik (lokalny):');
		define('_AS_RMGS_FFILE_URL', 'Plik (URL):');
		define('_AS_RMGS_FFILETYPE', 'Tytp pliku:');
		define('_AS_RMGS_FFILEIMG', 'Obraz');
		define('_AS_RMGS_FFILEBIN', 'Mo�liwy do zrzucenia');
		define('_AS_RMGS_FKEYS', 'S�owa Kluczowe:');
		define('_AS_RMGS_FCATEGOS', 'Kategorie:');
		define('_AS_RMGS_FFILEDESC', 'Je�li zostanie wybrany nowy obraz to stary zostanie skasowany.');
		define('_AS_RMGS_FAFILE', 'Aktualny plik:');
		define('_AS_RMGS_FOTHERS', 'Inne Formaty');
		define('_AS_RMGS_ERRUPLOAD', 'Nowy plik nie zosta� utworzony. Spr�buj ponownie.');
		define('_AS_RMGS_ADDSIZE', 'Dodaj inny rozmiar');
		define('_AS_RMGS_ERRTITLE', 'Prosz� wpisa� tytu� dla tego pliku');
		define('_AS_RMGS_ERRFILE', 'Musisz doda� plik dla tego elementu');
		define('_AS_RMGS_ERRSIZE', 'Zaznacz element do skasowania');
		define('_AS_RMGS_DELELEMENT', 'Czy na pewno skasowa� ten element?');
		define('_AS_RMGS_DELCONFIRM', 'Czy na pewno skasowa� ten obraz?');
		define('_AS_RMGS_DELOK', 'U�ytkownik zosta� usuni�ty');
		break;
	
	case 'usuarios':
	
		define('_AS_RMGS_LISTTITLE', 'UUzytkownik�w z obrazami w module');
		define('_AS_RMGS_LUSED', 'Zaj�ty: %s');
		define('_AS_RMGS_USER', 'Uzytkownik');
		define('_AS_RMGS_USED', 'Wykorzystana przestrze&ntilde;');
		define('_AS_RMGS_ALBUM', 'Albumy');
		define('_AS_RMGS_SETQUOTA', 'Modyfikuj limit');
		define('_AS_RMGS_ACTUALQ', 'Obecny limit:');
		define('_AS_RMGS_NEWQ', 'Nowy limit:');
		define('_AS_RMGS_NEWQDESC', 'Wska� w megabitach');
		define('_AS_RMGS_ERRQUOTA', 'Nieprawid�owa wielko�� limitu. Wielko�� musi by� dodatnia.');
		define('_AS_RMGS_QUOTAOK', 'Limit zosta� zmodyfikowany');
		define('_AS_RMGS_CONFIRMDEL', 'Czy na pewno chcesz skasowa� u�ytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego u�ytkownika zostan� skadowane.');
		define('_AS_RMGS_DELOK', 'U�ytkownik zosta� usuni�ty');
		break;
	
	case 'postales':
		define('_AS_RMGS_POSTALTITLE', 'Lista poczt�wek');
		define('_AS_RMGS_TITLE', 'Tutu�');
		define('_AS_RMGS_FECHA', 'Data');
		define('_AS_RMGS_TEMPLATE', 'Szablon');
		define('_AS_RMGS_USER', 'Uzytkownik');
		define('_AS_RMGS_OPTIONS', 'Opcje');
		define('_AS_RMGS_ANONYM', 'Anonim');
		define('_AS_RMGS_NEWTPL', 'Nowy Szablon');
		define('_AS_RMGS_TPLS', 'Szablony');
		
		define('_AS_RMGS_TPLSLIST', 'Lista Szablon�w');
		define('_AS_RMGS_NOWRITE', 'Szablon nie mo�e zosta� zmodyfikowany, poniewa� folder docelowy nie ma w�a�ciwo�ci zapisu');
		define('_AS_RMGS_TPLTITLE', 'Tytu�');
		define('_AS_RMGS_TPLTEXT', 'Zawarto��');
		define('_AS_RMGS_ERRTITLE', 'Prosz� wpisa� tytu� dla tego pliku');
		define('_AS_RMGS_ERRTEXT', 'Prosze doda� zawarto�� do pliku');
		define('_AS_RMGS_ERREXIST', 'Wybrany plik nie istnieje');
		define('_AS_RMGS_ERRFILEEXISTS', 'Istnieje ju� plik o tej nazwie');
		break;

}
?>

