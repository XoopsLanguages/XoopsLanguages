<?php
//////////////////////////////////////////////////////////////////////////////
// $Id: admin.php,v 2.0 02/11/2005 22:14:58 BitC3R0 Exp $                   //
// ------------------------------------------------------------------------ //
//                         RM+Soft Library 2.0                              //
//                   Copyright © 2005. Red Mexico Soft                      //
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
// Visita http://www.xoops-mexico.net para obtener los últimos módulos      //
// de Red México Soft.                                                      //
//                                                                          //
// For more modules from Red México Soft visit http://www.xoops-mexico.net  //
// ------------------------------------------------------------------------ //
//////////////////////////////////////////////////////////////////////////////

global $rmlib_location;

define('_MA_RMLIB_NAVSECTIONS','Sekcje');
define('_MA_RMLIB_NAVNEWSECTION','Nowa sekcja');
define('_MA_RMLIB_NAVBOOKS','Ksi±¿ki');
define('_MA_RMLIB_NAVNEWBOOK','Nowa ksi±¿ka');
define('_MA_RML_SEND','Zapisz');
define('_MA_RML_CANCEL','Skasuj');
define('_MA_RMLIB_YES','Tak');
define('_MA_RMLIB_NO','Nie');

// Tipos de publicaciones
define('_MA_RML_BOOK','Ksi±¿ka');
define('_MA_RML_MANUAL','Manual');
define('_MA_RML_TUTOR','Tutorial');
define('_MA_RML_FAQ','FAQ');
define('_MA_RML_MAGAZINE','Czasopismo');
define('_MA_RML_LISTOPTIONS','Opcje');

// Errores globales
define('_MA_RML_ERR_BOOK_EXISTS','Istnieje ju¿ publikacja o tej nazwie');
define('_MA_RML_ERR_DATA','Data nie jest kompletna');
define('_MA_RML_ERRONDB','Wyst±pi³ b³±d:<br />%s');

switch ($rmlib_location){
	case 'sections':
		define('_MA_RML_SECINSEC','Podsekcji w "%s"');
		define('_MA_RML_SECTIONS','Sekcji (%s z wszystkich)');
		define('_MA_RML_NONE','¯aden');
		define('_MA_RML_TITLE','Sekcja');
		define('_MA_RML_PARENT','Nadrzêdna');
		define('_MA_RML_ORDER','Kolejno¶æ');
		define('_MA_RML_DATE','Data');
		define('_MA_RML_OPTIONS','Opcje');
		define('_MA_RML_BOOKSTIP','Ksi±¿ki');
		define('_MA_RML_VIEWTIP','Szczegó³y');
		define('_MA_RML_EDITTIP','Edytuj');
		define('_MA_RML_DELETETIP','Skasuj');
		define('_MA_RML_CONFIRMDELETE','Czy na pewno chcesz skasowaæ "%s" ?');
		define('_MA_RML_CREATED','Utwórz:');
		
		// Mensajes y Errores
		define('_MA_RML_ERRNOID','Nie ma takiej publikacji');
		define('_MA_RML_DBOK','Baza danych zosta³a zmodyfikowana');
		define('_MA_RML_ERRTITLE','Nie wskazano nazwy sekcji');
		define('_MA_RML_ERRDESC','Nie wpisano opisu dla sekcji');
		define('_MA_RML_SECEXISTS','Istnieje ju¿ taka podsekcja w tej sekcji nadrzêdnej.<br />Proszê sprawdziæ nazwê podsekcji lub sekcjê nadrzêdn±.');
		define('_MA_RML_UPLOADERR','B³±d przy zapisywaniu obrazu. Proszê sprawdzic uprawnienia czy istnieje katalog "uploads/sec" i czy ma on uprawnienia zapisu');
		define('_MA_RML_OKCREATED','Utworzono sekcjê');
		define('_MA_RML_NOTFOUND','Nie znaleziono sekcji');
		define('_MA_RML_DELETEOK','Skasowano sekcjê:<br /><br />%s');
		
		//Nueva Sección
		define('_MA_RML_FORMTITLE','Nowa sekcja');
		define('_MA_RML_FORMMOD','Modyfikuj sekcjê');
		define('_MA_RML_FORM_TITLE','Nazwa:');
		define('_MA_RML_FORM_DESC','Opis:');
		define('_MA_RML_SELECT_SEC','Wybierz...');
		define('_MA_RML_FORM_RAIZ','Kategoria nadrzêdna:');
		define('_MA_RML_FORM_ORDER','Kolejno¶æ:');
		define('_MA_RML_FORM_IMG','Ok³adka kategorii:');
		define('_MA_RML_ACCESS_GROUPS','Grupy z dostêpem:');
		define('_MA_RML_FORM_ALLS','Wszystkie');
		define('_MA_RML_CURRENT_IMG','Obrazy:');
		break;
	case 'books':
		define('_MA_RML_BOOKSTITLE','Ksi±¿ek %s ');
		define('_MA_RML_BOOKSIN','Ksi±¿ek "%s" z %s ');
		define('_MA_RML_LISTTITLE','Spisy tre¶ci');
		define('_MA_RML_LISTSECTION','Sekcje');
		define('_MA_RML_LISTORDER','Kolejno¶æ');
		define('_MA_RML_LISTDATE','Utworzono');
		define('_MA_RML_LISTPUBLIC','Publikuj');
		define('_MA_RML_LISTTYPE','Typ');
		define('_MA_RML_INDEXTIP','Spis tre¶ci');
		define('_MA_RML_WRITETIP','Uprawnienia');
		define('_MA_RML_EDITTIP','Edytuj');
		define('_MA_RML_DELETETIP','Skasuj');
		define('_MA_RML_CONFIRMDELETE','Czy na pewno chcesz skasowaæ"%s" ?');
		
		// Formularios
		define('_MA_RML_NEWTITLE','Dodaj podsekcjê');
		define('_MA_RML_MODTITLE','Modyfikuj nazwê');
		define('_MA_RML_FORM_TITLE','Nazwa:');
		define('_MA_RML_FORM_DESC','Opis:');
		define('_MA_RML_FORM_SECTION','Sekcje');
		define('_MA_RML_FORM_ORDER','Kolejno¶æ:');
		define('_MA_RML_FORM_TYPE','Typ publikacji');
		define('_MA_RML_FORM_READ','Uprawnienia dostêpu:');
		define('_MA_RML_FORM_WRITE','Uprawnienia dostêpu(zapis)');
		define('_MA_RML_FORM_EMAIL','E-mail do kontaktu:');
		define('_MA_RML_FORM_IMG','Ok³adka:');
		define('_MA_RML_FORM_ALLS','Wszystkie');
		define('_MA_RML_FROM_CONTACT','Zezwól na kontakt z autorem. Wpisz adres e-mail autora.');
		define('_MA_RML_CURRENT_COVER','Aktualna ok³adka:');
		define('_MA_RML_SYSTEM_USERS','U¿ytkownicy systemu:');
		define('_MA_RML_BOOK_WRITERS','Strony tytu³owe (etykiety)');
		define('_MA_RML_LETS','Dostêp dla "%s"');
		define('_MA_RML_ADD','Dalej >>');
		define('_MA_RML_REMOVE','<< Wstecz');
		define('_MA_RML_FINISH','Koniec');
		
		//Mensajes y Errores
		define('_MA_RML_ERR_TITLE','Nie wpisano tytu³u');
		define('_MA_RML_ERR_DESC','Nie wpisano opisu');
		define('_MA_RML_ERR_SECTION','Nie wskazano sekcji');
		define('_MA_RML_ERR_EMAIL','Niepoprawny adres e-mail');
		define('_MA_RML_ERR_EXISTS','Istnieje ju¿ publikacja o tej nazwie');
		define('_MA_RML_UPLOADERR','B³±d przy zapisywaniu obrazu. Proszê sprawdziæ uprawnienia czy istnieje katalog "uploads/sec" i czy ma on uprawnienia zapisu');
		define('_MA_RML_SAVE_OK','Utworzono publikacjê');
		define('_MA_RML_ERRNOID','Nie ma takiej publikacji');
		define('_MA_RML_ERR_NOTFOUND','Nie znaleziono publikacji');
		define('_MA_RML_EDITOK','Zmiana dokonana pomy¶lnie');
		define('_MA_RML_DELETED','Usuniêto publikacjê');
		define('_MA_RML_CONFIRM1','Czy na pewno usun±æ tê sekcjê?');
		define('_MA_RML_WRITEOK','Zapisano uprawnienia');
		define('_MA_RML_WRITEREMOVED','Usuniêto uprawnienia');
		break;
	case 'indices':
		define('_MA_RML_ERR_NOID','Nie wskazano spisu tre¶ci');
		define('_MA_RML_LISTTITLE','Spisy tre¶ci');
		define('_MA_RML_INDEX_TREE','Rozwiniêcie spisu tre¶ci');
		define('_MA_RML_INDEX_DATE','Utworzono');
		define('_MA_RML_INDEX_ORDER','Kolejno¶æ');
		define('_MA_RML_CONTENTTIP','Edytuj awarto¶æ');
		define('_MA_RML_EDITTIP','Modyfikuj');
		define('_MA_RML_DELETETIP','Skasuj');
		define('_MA_RML_WWWTIP','Rezultaty www');
		define('_MA_RML_NEWTITLE','Nowa sekcja');
		define('_MA_RML_INDEX_TITLE','Tytu³:');
		define('_MA_RML_INDEX_PARENT','Kategoria nadrzêdna:');
		define('_MA_RML_INDEX_SELECT','Wybierz');
		define('_MA_RML_INDEXORDER','Kolejno¶æ:');
		define('_MA_RML_INDEXOK','Utworzono spis tre¶ci');
		define('_MA_RML_MODTITLE','Modyfikuj spis tre¶ci');
		define('_MA_RML_MODOK','Zmodyfikowano spis tre¶ci');
		define('_MA_RML_CONFIRMDELETE','Czy na pewno chcesz skasowaæ "%s" ?');
		define('_MA_RML_INDEXDELETED','Skasowano spis tre¶ci');
		break;
	case 'contenido':
		define('_MA_RML_ERR_NOID','Nie wskazano spisu tre¶ci');
		define('_MA_RML_CONTENT_TITLE','Zawarto¶æ "%s"');
		define('_MA_RML_FORM_TEXT','Tre¶æ:');
		define('_MA_RML_FOOT_TITLE','Napisz komentarz');
		define('_MA_RML_FOOT_TEXT','Tekst komentarza:');
		define('_MA_RML_FOOT_ORDER','Wybierz:');
		define('_MA_RML_NOTEOK','Utworzono komentarz');
		define('_MA_RML_FOOT_DELETE','Skasuj');
		define('_MA_RML_FOOTTEXT','Tekst');
		define('_MA_RML_FOOTLINK','Zapisz');
		define('_MA_RML_CONTENTOK','Dodano zawarto¶æ');
		define('_MA_RML_NOTETEXT','Tekst notatki:');
		define('_MA_RML_NOCODE','Nie wpisano tekstu notatki');
		define('_MA_RML_CODEEXISTS','Istnieje ju¿ taka notatka');
		break;
}
?>



