<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fr
 * _CHARSET     iso-8859-1
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Maintenance");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Toute la maintenance");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Copie");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Vider les enregistrement dans la table des sessions");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Effacement des enregistrements dans la table des sessions : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Effacement des enregistrements dans la table des sessions : Erreur");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Effacer les fichiers du dossier de cache");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Effacement du cache : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Effacement du cache : Erreur");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Maintenance des tables");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Maintenance des tables : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Maintenance des tables : Erreur");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Optimiser, V�rifier, R�parer et analyser vos tables de donn�es");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Maintenance de la base de donn�es : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Maintenance de la base de donn�es : Erreur");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optimiser les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","V�rifier les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","R�parer les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analyser les table(s)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC",
"ANALYSER : Cette commande analyse et stocke la cl� de distribution de la table. Durant l'analyse, la table est verrouill�e en lecture.<br />
VERIFIER : Cette commande v�rifie l'int�grit� des tables (recherche des erreurs).<br />
OPTIMISER : Cette commande permet de r�cup�rer l'espace utilis� par les enregistrements supprim�s et de d�fragmenter l'inscription des donn�es.<br />
REPARER : Cette commande tente une r�paration des tables corrompues.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","R�sultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Aucun r�sultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","T�che d'effacement du cache");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","T�che d'effacement des donn�es de la table des sessions");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","T�che de la base de donn�es");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Aucun choix d'op�ration de maintenance");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tables");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optimiser");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","V�rifier"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","R�parer");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analyser");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Copie");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","S�lectionnez les tables ou les modules");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Ajouter la commande DROP TABLE IF EXISTS 'tables' dans la copie");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "OU");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "ET");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Vous devez s�lectionner les tables ou les modules");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Aucune table");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tables");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Structures");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Nombre d'enregistrements");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Fichier cr��");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "R�sultat");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "enregistrement(s)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>Vous pouvez faire une maintenance simple de votre installation XOOPS : effacer les fichiers temporaires du cache, vider les enregistrements de la table des sessions, et effectuer la maintenance de vos tables de donn�es</li>
</ul>");

/**
 * @translation     Communaut� Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 *
 * @version         $Id $
 Modification et mise � jour par Cesag le 14 Mai 2012.
**/

?>