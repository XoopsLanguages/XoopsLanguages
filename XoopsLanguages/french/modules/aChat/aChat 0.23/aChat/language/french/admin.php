<?php
// $Id: admin.php, see below 
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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
// v 0.2 2006/08/25 20:11:53
// ======================================================================== //
//
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//

// Menu
define("_AM_ACHAT_MODULEADMIN", "Administration :");

define("_AM_ACHAT_CREDIT", "aChat 0.2 est une cr&eacute;ation de Niluge_KiWi<br />(c) Juillet-Août 2006");
										
// Home
define("_AM_ACHAT_WELCOME", "Bienvenue sur l'administration du module aChat");
define("_AM_ACHAT_NBRE_MSG", "Nombres de messages dans la base de donn&eacute;es");
define("_AM_ACHAT_MESSAGES", "messages");
define("_AM_ACHAT_EMPTY_FIELD", "Veuillez remplir le(s) champ(s) requis.");

// Permissions
define("_AM_ACHAT_PERM_CANPOST", "Peut envoyer des messages");

// Purge
define("_AM_ACHAT_PURGEPERNBRE", "Purge par nombre de messages");
define("_AM_ACHAT_PURGE_HOWMANY", "Purger combien de messages?");
define("_AM_ACHAT_PURGE_CREATELOG", "Cr&eacute;er un fichier log contenant les messages purg&eacute;s?");
define("_AM_ACHAT_PURGE_VALIDATE", "Etes-vous sur de vouloir purger&nbsp;");
define("_AM_ACHAT_PURGE_SUPPR_NOLOG", "sans cr&eacute;er de logs&nbsp;");
define("_AM_ACHAT_PURGE_ERROR_WRITEFILE", "Une erreur est survenue lors de la cration du fichier log, v&eacute;rifiez que le répertoire choisi dans les param&egrave;tres du module existe bien et que les droits en &eacute;criture sont ok.");
define("_AM_ACHAT_PURGE_LOG_WRITTEN", "Fichier log cr&eacute;&eacute;");
define("_AM_ACHAT_PURGE_CANCELED", "Purge annul&eacute;e.");
define("_AM_ACHAT_PURGE_OK", "Purge effectu&eacute;e");
define("_AM_ACHAT_PURGE_NBREMSGDEL", "Nombre de messages supprim&eacute;s: ");
define("_AM_ACHAT_PURGE_ERROR", "Une erreur est survenue lors de la purge des messages.");
define("_AM_ACHAT_PURGEPERDATE", "Purge par date");
define("_AM_ACHAT_PURGE_KEEP_HMDAYS", "Garder les messages des x derniers jours");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY", "les messages envoy&eacute;s avant les ");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY2", " derniers jours");
define("_AM_ACHAT_PURGE_NOMSG", "Pas de message &agrave; supprimer.");

// Delete Messages
define("_AM_ACHAT_DELETEMSG","Supprimer un message");
define("_AM_ACHAT_DELETEMSG_MID","Mid du message à supprimer<br />(dernier num&eacute;ro affich&eacute; lors du survol du pseudo du posteur du message,<br /> visible uniquement par les admin)");
define("_AM_ACHAT_DELETEMSG_OK","Message num&eacute;ro %u supprim&eacute;.");
define("_AM_ACHAT_DELETEMSG_ERROR","Une erreur est survenue lors de la suppression du message numéro %u.");

// Utilities ( Clone ) ( from myHome module )
define("_AM_ACHAT_CLONE", "Clonage du module");

define("_AM_ACHAT_CLONENAME", "Nom du clone<br /><i>
                                         <ul>
                                             <li>Pas plus de 16 caract&egrave;res</li>
                                             <li>Pas de caractères sp&eacute;ciaux</li>
                                             <li>Pas de nom de module d&eacute;j&agrave; existant</li>
                                             <li>Lettre capitale et espacements accéptés</li>
                                         </ul></i>
                                         Exemple : 'Mon Module 01'. ");

define("_AM_ACHAT_SUBMIT", "Cloner");
define("_AM_ACHAT_CLEAR", "Effacer");
define("_AM_ACHAT_CANCEL", "Annuler");

define("_AM_ACHAT_CLONED", "Module clon&eacute; avec succès");
define("_AM_ACHAT_MODULEXISTS", "Ce module existe d&eacute;j&agrave;");
define("_AM_ACHAT_NOTCLONED", "Les param&egrave;tres du clonage sont incorrectes");
define("_AM_ACHAT_CLONE_TROUBLE", "Les param&egrave;tres de votre h&eacute;bergement ne permettent pas le clonage.
					 Veuillez r&eacute;essayer dans un environnement qui autorise le changement de permissions en &eacute;criture.
                                         (Exemple : en local)");
?>