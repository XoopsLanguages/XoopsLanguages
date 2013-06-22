<?php
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

// Créé par Niluge_Kiwi
// v 0.2 2006/08/25 20:11:35
// ======================================================================== //
//
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//

// Module Info

// The name of this module
define('_MI_ACHAT_NAME', 'aChat');
// A brief description of this module
define('_MI_ACHAT_DESC','un module de Chat, Tagboard avec AJAX!');

// Menu
define("_MI_ACHAT_HOME", "Accueil");
define("_MI_ACHAT_PURGE", "Purge");
define("_MI_ACHAT_PERM", "Permissions");
define("_MI_ACHAT_UTILITIES", "Utilitaires");

define("_MI_ACHAT_SMNAME1","Voir les logs");
define("_MI_ACHAT_SMNAME2","Voir les archives");

define("_MI_ACHAT_GOTO_INDEX","Aller au module");
define("_MI_ACHAT_HELP","Aide");

// Templates
define('_MI_ACHAT_TDESC0',"Le template principale qui g&egrave;re l'affichage du module en pleine page.");
define('_MI_ACHAT_TDESC1',"Le template qui g&egrave;re l'affichage de la boucle des messages.");
define('_MI_ACHAT_TDESC2',"Le template qui g&egrave;re l'affichage des logs lors de la purge avec log.");

// Blocks
define('_MI_ACHAT_BNAME1','aChat');
define('_MI_ACHAT_BDESC1','Bloc qui affiche aChat');
define('_MI_ACHAT_BNAME2','aChat statique');
define('_MI_ACHAT_BDESC2',"Bloc d'apercu des derniers messages, sans actualisation ni formulaire d'envoie");

// Config
define('_MI_ACHAT_NBRE_MSG_AFF','Nombre de messages &agrave; afficher');
define('_MI_ACHAT_NBRE_MSG_AFFDSC','Nombre de messages post&eacute;s &agrave; afficher sur les pages du module aChat (index.php)');

define('_MI_ACHAT_TMP_REFRESH','Temps de rafraichissement des messages');
define('_MI_ACHAT_TMP_REFRESHDSC','(en secondes)<br /> Vous pouvez mettre un nombre &agrave; virgule, par exemple 1.5, ATTENTION : pas plus de 3 d&eacute;cimales sinon ca bug.');

define('_MI_ACHAT_USER_SMILIES','Utiliser les smileys?');
define('_MI_ACHAT_USE_BBCODES','Utiliser les BBCodes?');

define('_MI_ACHAT_ALLOWED_COLORS','Couleurs disponibles pour les messages');
define('_MI_ACHAT_ALLOWED_COLORSDESC','Code couleur RVB hexad&eacute;cimal, s&eacute;par&eacute;s par |, sans le # devant.<br />Exemple : "000000|FFFFFF" permettra des messages en noir et en blanc.<br />Laissez vide pour utiliser les 8 couleurs par défaut.');

define('_MI_ACHAT_PURGE_FOLDER','R&eacute;pertoire contenant les fichiers logs cr&eacute;&eacute;s par la purge.');
define('_MI_ACHAT_PURGE_FOLDERDESC','Laissez vide pour utiliser le r&eacute;pertoire par d&eacute;faut (modules/aChat/logs)');

define('_MI_ACHAT_NICK4GUESTS','Autoriser les visiteurs anonymes &agrave; choisir un pseudo?');
define('_MI_ACHAT_NICK4GUESTSDESC',"Les pseudos des anonymes sont en gris pour les diff&eacute;rentier (coulour param&eacute;trable dans la feuille de style css (modules/aChat/templates/aChat.css)");
?>
