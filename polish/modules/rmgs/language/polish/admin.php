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

define('_AS_RMGS_DELETE','Skasuj');
define('_AS_RMGS_IMAGES','Obrazy');
define('_AS_RMGS_EDIT','Edytuj');
define('_AS_RMGS_SEND','Zg³o¶');
define('_AS_RMGS_CANCEL','Anuluj');
define('_AS_RMGS_SELECT','Wybierz...');
define('_AS_RMGS_CATEGOS','Kategorie');
define('_AS_RMGS_NEWCATEGO','Nowa Kategoria');
define('_AS_RMGS_UPLOAD','Wgraj obrazek');
define('_AS_RMGS_SETS','Albumy');
define('_AS_RMGS_POSTALS','Pocztówki');
define('_AS_RMGS_USERS','U¿ytkownicy');
define('_AS_RMGS_FIELDREQUIRED','Pole %s musi byæ wype³nione');
define('_AS_RMGS_FIELDUNIQUE','Nastepne pole musi byæ unikalne:<br /> <strong>%s</strong>');
define('_AS_RMGS_ERRDB','Wyst±pi³ b³±d podczas wykonywania polecenia:<br /><br />%s');
define('_AS_RMGS_BACK','Wstecz');
define('_AM_RMDP_GOPAGE','Strona: ');
define('_AM_RMDP_PAGELOC','Strona <strong>%s</strong> z <strong>%s</strong>');
define('_AS_RMGS_OPTIONL','Opcje');

switch (_RMGS_LOCATION){

	case 'categorias':
		define('_AS_RMGS_CATEGOSTITLE','Lista Kategorii');
		define('_AS_RMGS_NAMEL','Nazwa');
		define('_AS_RMGS_DESCL','Opis');
		define('_AS_RMGS_DATEL','Data');
		define('_AS_RMGS_IMGSINCAT','<span style="font-size: 10px;"><strong>%s</strong> Obrazów.</span>');
		
		define('_AS_RMGS_ACCESS_DESC','Tylko u¿ytkownicy nale¿±cy do wskazanych <br />grup mog± zobaczyæ t± kategoriê.');
		define('_AS_RMGS_ALL','Wszystkie...');
		define('_AS_RMGS_NOBODY','Nikt');
		define('_AS_RMGS_GROUP','Zaznacz grupy z dostepem:');
		define('_AS_RMGS_WRITE','Wska¿ grupy z prawem zapisu:');
		define('_AS_RMGS_WRITEDESC','Tylko uzytkownicy nale¿±cy do<br /> wybranych grup mog± wgrywaæ obrazy.');
		define('_AS_RMGS_FNAME','Nazwa:');
		define('_AS_RMGS_FDESC','Opis:');
		define('_AS_RMGS_NEWOK','Utworzono kategoriê:');
		define('_AS_RMGS_MODOK','Zmodyfikowano kategoriê');
		define('_AS_RMGS_NOTFOUND','Nie znaleziono kategorii');
		define('_AS_RMGS_EDITCATEGO','Edytuj Kategoriê');
		define('_AS_RMGS_PARENT','Folder ¼ród³owy kategorii:');
		define('_AS_RMGS_CONFIRMDEL','Czy na pewno chcesz skasowaæ u¿ytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego u¿ytkownika zostan± skadowane.');
		define('_AS_RMGS_DELOK','U¿ytkownik zosta³ usuniêty');
		define('_AS_RMGS_ERRNAME','Proszê wskazaæ nazwê kategorii');
		define('_AS_RMGS_ERREXIST','Wybrany plik nie istnieje');
		define('_AS_RMGS_TOTALIMGS','<strong>%s</strong> Dostêpne obrazy');
		break;
		
	case 'imagenes':
	
		define('_AS_RMGS_LISTTILE','Obrazów w %s');
		define('_AS_RMGS_LIMAGE','Obraz');
		define('_AS_RMGS_LTITLE','Tytu³');
		define('_AS_RMGS_LOCALSIZE','Lokalny');
		define('_AS_RMGS_REMOTESIZE','Przenie¶');
		define('_AS_RMGS_LUSER','Uzytkownik');
		define('_AS_RMGS_LACCES','Wy¶wietleñ:');
		define('_AS_RMGS_LVOTES','G³osów');
		define('_AS_RMGS_LOPTIONS','Opcje');
		define('_AS_RMGS_UPLOADFORM','Wgraj obrazy do %s');
		define('_AS_RMGS_INDISC','Zaznacz obrazy na dysku twardym i przypisz im s³owa kluczowe.');
		define('_AS_RMGS_KEYS','Dodaj s³owa kluczowe dla tego obrazu (<span style=\'font-size: 10px;\'>Oddzielaj je spacj&plusmn;</span>):');
		define('_AS_RMGS_CATEGOSP','Wgraj do Kategorii:');
		define('_AS_RMGS_IMGOK','Obraz zosta³ utworzony');
		define('_AS_RMGS_IMGMODOK','Obraz zosta³ zmodyfikowany');
		define('_AS_RMGS_NOCATEGO','Proszê wskazaæ kategoriê do ogl±dania');
		define('_AS_RMGS_ERRID','Nie wskaza³e¶ obrazu do edycji');
		define('_AS_RMGS_NOIMAGE','Wskazany obraz nie istnieje');
		define('_AS_RMGS_EDITIMG','Edytuj Obraz');
		define('_AS_RMGS_FTITLE','Tytu³');
		define('_AS_RMGS_FUSER','U¿ytkownik');
		define('_AS_RMGS_FFILE','Plik (lokalny):');
		define('_AS_RMGS_FFILE_URL','Plik (URL):');
		define('_AS_RMGS_FFILETYPE','Tytp pliku:');
		define('_AS_RMGS_FFILEIMG','Obraz');
		define('_AS_RMGS_FFILEBIN','Mo¿liwy do zrzucenia');
		define('_AS_RMGS_FKEYS','S³owa Kluczowe:');
		define('_AS_RMGS_FCATEGOS','Kategorie:');
		define('_AS_RMGS_FFILEDESC','Je¶li zostanie wybrany nowy obraz to stary zostanie skasowany.');
		define('_AS_RMGS_FAFILE','Aktualny plik:');
		define('_AS_RMGS_FOTHERS','Inne Formaty');
		define('_AS_RMGS_ERRUPLOAD','Nowy plik nie zosta³ utworzony. Spróbuj ponownie.');
		define('_AS_RMGS_ADDSIZE','Dodaj inny rozmiar');
		define('_AS_RMGS_ERRTITLE','Proszê wpisaæ tytu³ dla tego pliku');
		define('_AS_RMGS_ERRFILE','Musisz dodaæ plik dla tego elementu');
		define('_AS_RMGS_ERRSIZE','Zaznacz element do skasowania');
		define('_AS_RMGS_DELELEMENT','Czy na pewno skasowaæ ten element?');
		define('_AS_RMGS_DELCONFIRM','Czy na pewno skasowaæ ten obraz?');
		define('_AS_RMGS_DELOK','U¿ytkownik zosta³ usuniêty');
		break;
	
	case 'usuarios':
	
		define('_AS_RMGS_LISTTITLE','UUzytkowników z obrazami w module');
		define('_AS_RMGS_LUSED','Zajêty: %s');
		define('_AS_RMGS_USER','Uzytkownik');
		define('_AS_RMGS_USED','Wykorzystana przestrze&ntilde;');
		define('_AS_RMGS_ALBUM','Albumy');
		define('_AS_RMGS_SETQUOTA','Modyfikuj limit');
		define('_AS_RMGS_ACTUALQ','Obecny limit:');
		define('_AS_RMGS_NEWQ','Nowy limit:');
		define('_AS_RMGS_NEWQDESC','Wska¿ w megabitach');
		define('_AS_RMGS_ERRQUOTA','Nieprawid³owa wielko¶æ limitu. Wielko¶æ musi byæ dodatnia.');
		define('_AS_RMGS_QUOTAOK','Limit zosta³ zmodyfikowany');
		define('_AS_RMGS_CONFIRMDEL','Czy na pewno chcesz skasowaæ u¿ytkownika tej kategorii?.<br /><br /><strong>Uwaga:</strong> Wszystkie kategorie i obrazy tego u¿ytkownika zostan± skadowane.');
		define('_AS_RMGS_DELOK','U¿ytkownik zosta³ usuniêty');
		break;
	
	case 'postales':
		define('_AS_RMGS_POSTALTITLE','Lista pocztówek');
		define('_AS_RMGS_TITLE','Tutu³');
		define('_AS_RMGS_FECHA','Data');
		define('_AS_RMGS_TEMPLATE','Szablon');
		define('_AS_RMGS_USER','Uzytkownik');
		define('_AS_RMGS_OPTIONS','Opcje');
		define('_AS_RMGS_ANONYM','Anonim');
		define('_AS_RMGS_NEWTPL','Nowy Szablon');
		define('_AS_RMGS_TPLS','Szablony');
		
		define('_AS_RMGS_TPLSLIST','Lista Szablonów');
		define('_AS_RMGS_NOWRITE','Szablon nie mo¿e zostaæ zmodyfikowany, poniewa¿ folder docelowy nie ma w³a¶ciwo¶ci zapisu');
		define('_AS_RMGS_TPLTITLE','Tytu³');
		define('_AS_RMGS_TPLTEXT','Zawarto¶æ');
		define('_AS_RMGS_ERRTITLE','Proszê wpisaæ tytu³ dla tego pliku');
		define('_AS_RMGS_ERRTEXT','Prosze dodaæ zawarto¶æ do pliku');
		define('_AS_RMGS_ERREXIST','Wybrany plik nie istnieje');
		define('_AS_RMGS_ERRFILEEXISTS','Istnieje ju¿ plik o tej nazwie');
		break;

}
?>

