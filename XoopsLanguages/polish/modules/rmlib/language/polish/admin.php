<?php
//////////////////////////////////////////////////////////////////////////////
// $Id: admin.php,v 2.0 02/11/2005 22:14:58 BitC3R0 Exp $                   //
// ------------------------------------------------------------------------ //
//                         RM+Soft Library 2.0                              //
//                   Copyright � 2005. Red Mexico Soft                      //
//                     <http:www.redmexico.com.mx/>                         //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
//                                                                          //
// This program is distributed in the hope that it will be useful, but      //
// WITHOUT ANY WARRANTY; without even the implied warranty of               //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU         //
// General Public License for more details.                                 //
//                                                                          //
// You should have received a copy of the GNU General Public License        //
// along with this program; if not, write to the                            //
// Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,      //
// MA 02111-1307 USA                                                        //
// ------------------------------------------------------------------------ //
// Questions, Bugs or any comment plese write me                            //
// Preguntas, errores o cualquier comentario escribeme                      //
// <adminone@redmexico.com.mx>                                              //
// ------------------------------------------------------------------------ //
// Visita http://www.xoops-mexico.net para obtener los �ltimos m�dulos      //
// de Red M�xico Soft.                                                      //
//                                                                          //
// For more modules from Red M�xico Soft visit http://www.xoops-mexico.net  //
// ------------------------------------------------------------------------ //
//////////////////////////////////////////////////////////////////////////////

global $rmlib_location;

define('_MA_RMLIB_NAVSECTIONS', 'Sekcje');
define('_MA_RMLIB_NAVNEWSECTION', 'Nowa sekcja');
define('_MA_RMLIB_NAVBOOKS', 'Ksi��ki');
define('_MA_RMLIB_NAVNEWBOOK', 'Nowa ksi��ka');
define('_MA_RML_SEND', 'Zapisz');
define('_MA_RML_CANCEL', 'Skasuj');
define('_MA_RMLIB_YES', 'Tak');
define('_MA_RMLIB_NO', 'Nie');

// Tipos de publicaciones
define('_MA_RML_BOOK', 'Ksi��ka');
define('_MA_RML_MANUAL', 'Manual');
define('_MA_RML_TUTOR', 'Tutorial');
define('_MA_RML_FAQ', 'FAQ');
define('_MA_RML_MAGAZINE', 'Czasopismo');
define('_MA_RML_LISTOPTIONS', 'Opcje');

// Errores globales
define('_MA_RML_ERR_BOOK_EXISTS', 'Istnieje ju� publikacja o tej nazwie');
define('_MA_RML_ERR_DATA', 'Data nie jest kompletna');
define('_MA_RML_ERRONDB', 'Wyst�pi� b��d:<br />%s');

switch ($rmlib_location){
	case 'sections':
		define('_MA_RML_SECINSEC', 'Podsekcji w "%s"');
		define('_MA_RML_SECTIONS', 'Sekcji (%s z wszystkich)');
		define('_MA_RML_NONE', '�aden');
		define('_MA_RML_TITLE', 'Sekcja');
		define('_MA_RML_PARENT', 'Nadrz�dna');
		define('_MA_RML_ORDER', 'Kolejno��');
		define('_MA_RML_DATE', 'Data');
		define('_MA_RML_OPTIONS', 'Opcje');
		define('_MA_RML_BOOKSTIP', 'Ksi��ki');
		define('_MA_RML_VIEWTIP', 'Szczeg�y');
		define('_MA_RML_EDITTIP', 'Edytuj');
		define('_MA_RML_DELETETIP', 'Skasuj');
		define('_MA_RML_CONFIRMDELETE', 'Czy na pewno chcesz skasowa� "%s" ?');
		define('_MA_RML_CREATED', 'Utw�rz:');
		
		// Mensajes y Errores
		define('_MA_RML_ERRNOID', 'Nie ma takiej publikacji');
		define('_MA_RML_DBOK', 'Baza danych zosta�a zmodyfikowana');
		define('_MA_RML_ERRTITLE', 'Nie wskazano nazwy sekcji');
		define('_MA_RML_ERRDESC', 'Nie wpisano opisu dla sekcji');
		define('_MA_RML_SECEXISTS', 'Istnieje ju� taka podsekcja w tej sekcji nadrz�dnej.<br />Prosz� sprawdzi� nazw� podsekcji lub sekcj� nadrz�dn�.');
		define('_MA_RML_UPLOADERR', 'B��d przy zapisywaniu obrazu. Prosz� sprawdzic uprawnienia czy istnieje katalog "uploads/sec" i czy ma on uprawnienia zapisu');
		define('_MA_RML_OKCREATED', 'Utworzono sekcj�');
		define('_MA_RML_NOTFOUND', 'Nie znaleziono sekcji');
		define('_MA_RML_DELETEOK', 'Skasowano sekcj�:<br /><br />%s');
		
		//Nueva Secci�n
		define('_MA_RML_FORMTITLE', 'Nowa sekcja');
		define('_MA_RML_FORMMOD', 'Modyfikuj sekcj�');
		define('_MA_RML_FORM_TITLE', 'Nazwa:');
		define('_MA_RML_FORM_DESC', 'Opis:');
		define('_MA_RML_SELECT_SEC', 'Wybierz...');
		define('_MA_RML_FORM_RAIZ', 'Kategoria nadrz�dna:');
		define('_MA_RML_FORM_ORDER', 'Kolejno��:');
		define('_MA_RML_FORM_IMG', 'Ok�adka kategorii:');
		define('_MA_RML_ACCESS_GROUPS', 'Grupy z dost�pem:');
		define('_MA_RML_FORM_ALLS', 'Wszystkie');
		define('_MA_RML_CURRENT_IMG', 'Obrazy:');
		break;
	case 'books':
		define('_MA_RML_BOOKSTITLE', 'Ksi��ek %s ');
		define('_MA_RML_BOOKSIN', 'Ksi��ek "%s" z %s ');
		define('_MA_RML_LISTTITLE', 'Spisy tre�ci');
		define('_MA_RML_LISTSECTION', 'Sekcje');
		define('_MA_RML_LISTORDER', 'Kolejno��');
		define('_MA_RML_LISTDATE', 'Utworzono');
		define('_MA_RML_LISTPUBLIC', 'Publikuj');
		define('_MA_RML_LISTTYPE', 'Typ');
		define('_MA_RML_INDEXTIP', 'Spis tre�ci');
		define('_MA_RML_WRITETIP', 'Uprawnienia');
		define('_MA_RML_EDITTIP', 'Edytuj');
		define('_MA_RML_DELETETIP', 'Skasuj');
		define('_MA_RML_CONFIRMDELETE', 'Czy na pewno chcesz skasowa�"%s" ?');
		
		// Formularios
		define('_MA_RML_NEWTITLE', 'Dodaj podsekcj�');
		define('_MA_RML_MODTITLE', 'Modyfikuj nazw�');
		define('_MA_RML_FORM_TITLE', 'Nazwa:');
		define('_MA_RML_FORM_DESC', 'Opis:');
		define('_MA_RML_FORM_SECTION', 'Sekcje');
		define('_MA_RML_FORM_ORDER', 'Kolejno��:');
		define('_MA_RML_FORM_TYPE', 'Typ publikacji');
		define('_MA_RML_FORM_READ', 'Uprawnienia dost�pu:');
		define('_MA_RML_FORM_WRITE', 'Uprawnienia dost�pu(zapis)');
		define('_MA_RML_FORM_EMAIL', 'E-mail do kontaktu:');
		define('_MA_RML_FORM_IMG', 'Ok�adka:');
		define('_MA_RML_FORM_ALLS', 'Wszystkie');
		define('_MA_RML_FROM_CONTACT', 'Zezw�l na kontakt z autorem. Wpisz adres e-mail autora.');
		define('_MA_RML_CURRENT_COVER', 'Aktualna ok�adka:');
		define('_MA_RML_SYSTEM_USERS', 'U�ytkownicy systemu:');
		define('_MA_RML_BOOK_WRITERS', 'Strony tytu�owe (etykiety)');
		define('_MA_RML_LETS', 'Dost�p dla "%s"');
		define('_MA_RML_ADD', 'Dalej >>');
		define('_MA_RML_REMOVE', '<< Wstecz');
		define('_MA_RML_FINISH', 'Koniec');
		
		//Mensajes y Errores
		define('_MA_RML_ERR_TITLE', 'Nie wpisano tytu�u');
		define('_MA_RML_ERR_DESC', 'Nie wpisano opisu');
		define('_MA_RML_ERR_SECTION', 'Nie wskazano sekcji');
		define('_MA_RML_ERR_EMAIL', 'Niepoprawny adres e-mail');
		define('_MA_RML_ERR_EXISTS', 'Istnieje ju� publikacja o tej nazwie');
		define('_MA_RML_UPLOADERR', 'B��d przy zapisywaniu obrazu. Prosz� sprawdzi� uprawnienia czy istnieje katalog "uploads/sec" i czy ma on uprawnienia zapisu');
		define('_MA_RML_SAVE_OK', 'Utworzono publikacj�');
		define('_MA_RML_ERRNOID', 'Nie ma takiej publikacji');
		define('_MA_RML_ERR_NOTFOUND', 'Nie znaleziono publikacji');
		define('_MA_RML_EDITOK', 'Zmiana dokonana pomy�lnie');
		define('_MA_RML_DELETED', 'Usuni�to publikacj�');
		define('_MA_RML_CONFIRM1', 'Czy na pewno usun�� t� sekcj�?');
		define('_MA_RML_WRITEOK', 'Zapisano uprawnienia');
		define('_MA_RML_WRITEREMOVED', 'Usuni�to uprawnienia');
		break;
	case 'indices':
		define('_MA_RML_ERR_NOID', 'Nie wskazano spisu tre�ci');
		define('_MA_RML_LISTTITLE', 'Spisy tre�ci');
		define('_MA_RML_INDEX_TREE', 'Rozwini�cie spisu tre�ci');
		define('_MA_RML_INDEX_DATE', 'Utworzono');
		define('_MA_RML_INDEX_ORDER', 'Kolejno��');
		define('_MA_RML_CONTENTTIP', 'Edytuj awarto��');
		define('_MA_RML_EDITTIP', 'Modyfikuj');
		define('_MA_RML_DELETETIP', 'Skasuj');
		define('_MA_RML_WWWTIP', 'Rezultaty www');
		define('_MA_RML_NEWTITLE', 'Nowa sekcja');
		define('_MA_RML_INDEX_TITLE', 'Tytu�:');
		define('_MA_RML_INDEX_PARENT', 'Kategoria nadrz�dna:');
		define('_MA_RML_INDEX_SELECT', 'Wybierz');
		define('_MA_RML_INDEXORDER', 'Kolejno��:');
		define('_MA_RML_INDEXOK', 'Utworzono spis tre�ci');
		define('_MA_RML_MODTITLE', 'Modyfikuj spis tre�ci');
		define('_MA_RML_MODOK', 'Zmodyfikowano spis tre�ci');
		define('_MA_RML_CONFIRMDELETE', 'Czy na pewno chcesz skasowa� "%s" ?');
		define('_MA_RML_INDEXDELETED', 'Skasowano spis tre�ci');
		break;
	case 'contenido':
		define('_MA_RML_ERR_NOID', 'Nie wskazano spisu tre�ci');
		define('_MA_RML_CONTENT_TITLE', 'Zawarto�� "%s"');
		define('_MA_RML_FORM_TEXT', 'Tre��:');
		define('_MA_RML_FOOT_TITLE', 'Napisz komentarz');
		define('_MA_RML_FOOT_TEXT', 'Tekst komentarza:');
		define('_MA_RML_FOOT_ORDER', 'Wybierz:');
		define('_MA_RML_NOTEOK', 'Utworzono komentarz');
		define('_MA_RML_FOOT_DELETE', 'Skasuj');
		define('_MA_RML_FOOTTEXT', 'Tekst');
		define('_MA_RML_FOOTLINK', 'Zapisz');
		define('_MA_RML_CONTENTOK', 'Dodano zawarto��');
		define('_MA_RML_NOTETEXT', 'Tekst notatki:');
		define('_MA_RML_NOCODE', 'Nie wpisano tekstu notatki');
		define('_MA_RML_CODEEXISTS', 'Istnieje ju� taka notatka');
		break;
}
?>



