<?php
// $Id: admin.php,v 1.5 2003/02/12 11:39:00 okazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$adminMyDirName = basename(dirname(dirname(dirname(__FILE__))));

define('_AM_XPARTNERS_URL', 'URL');
define('_AM_XPARTNERS_HITS', 'Klikken');
define('_AM_XPARTNERS_IMAGE', 'Afbeelding');
define('_AM_XPARTNERS_TITLE', 'Titel');
define('_AM_XPARTNERS_WEIGHT', 'Gewicht');
define('_AM_XPARTNERS_DESCRIPTION', 'Omschrijving');
define('_AM_XPARTNERS_STATUS', 'Status');
define('_AM_XPARTNERS_ACTIVE', 'Actief');
define('_AM_XPARTNERS_INACTIVE', 'Inactief');
define('_AM_XPARTNERS_REORDER', 'Sorteer');
define('_AM_XPARTNERS_UPDATED', 'Instellingen bijgewerkt !');
define('_AM_XPARTNERS_NOTUPDATED', 'Instellingen niet bijgewerkt!');
define('_AM_XPARTNERS_BESURE', 'Controleer of een titel, een URL en een omschrijving is ingevuld.');
define('_AM_XPARTNERS_NOEXIST', "Bestand is niet een correct afbeeldingsbestand of bestaat niet");
define('_AM_XPARTNERS_ADDPARTNER', 'Toevoegen');
define('_AM_XPARTNERS_EDITPARTNER', 'Bewerken');
define('_AM_XPARTNERS_SUREDELETE', 'Zeker weten dat deze partner verwijderd wordt?');
define('_AM_XPARTNERS_IMAGE_ERROR', 'Afbeelding is groter dan 150x80!');
define('_AM_XPARTNERS_ADD', 'Partner toevoegen');
define('_AM_XPARTNERS_AUTOMATIC_SORT', 'Automatisch sorteren');


//1.11

// About.php
define('_AM_XPARTNERS_ABOUT_RELEASEDATE', 'Vrijgegeven: ');
define('_AM_XPARTNERS_ABOUT_UPDATEDATE', 'Bijgewerkt: ');
define('_AM_XPARTNERS_ABOUT_AUTHOR', 'Auteur: ');
define('_AM_XPARTNERS_ABOUT_CREDITS', 'Credits: ');
define('_AM_XPARTNERS_ABOUT_LICENSE', 'Licentie: ');
define('_AM_XPARTNERS_ABOUT_MODULE_STATUS', 'Status: ');
define('_AM_XPARTNERS_ABOUT_WEBSITE', 'Website: ');
define('_AM_XPARTNERS_ABOUT_AUTHOR_NAME', 'Naam auteur: ');
define('_AM_XPARTNERS_ABOUT_CHANGELOG', 'Wijzingsbeheer');
define('_AM_XPARTNERS_ABOUT_MODULE_INFO', 'Module Info');
define('_AM_XPARTNERS_ABOUT_AUTHOR_INFO', 'Auteur Info');
define('_AM_XPARTNERS_ABOUT_DESCRIPTION', 'Omschrijving: ');
define('_AM_XPARTNERS_EMPTYDATABASE', 'Er is niets om te sorteren. Voeg eerst een aantal partners toe!');

// Configuration
define('_AM_XPARTNERS_CONFIG_CHECK', 'Configuratiecontrole');
define('_AM_XPARTNERS_CONFIG_PHP', 'Minimum PHP versie benodigd: %s (huidige versie is %s)');
define('_AM_XPARTNERS_CONFIG_XOOPS', 'Minimum XOOPS versie benodigd:  %s (huidige versie is %s)');

define('_AM_XPARTNERS_ACTIONS', 'Acties');
define('_AM_XPARTNERS_INVALIDID', 'Er bestaat geen partner met dit ID');

// text in admin footer
define('_AM_MYLINKS_ADMIN_FOOTER',
    "<div class='right smallsmall italic pad5'>" . "<strong>{$adminMyDirName}</strong> wordt onderhouden door "
    . "<a class='tooltip' rel='external' href='http://xoops.org/' title='Bezoek de XOOPS Community'>XOOPS Community</a>"
    . "</div>");