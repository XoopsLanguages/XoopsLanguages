<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fr
 * _CHARSET     UTF-8 sans bom
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER","Maintenance");
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
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Optimiser, Vérifier, Réparer et analyser vos tables de données");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Maintenance de la base de données : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Maintenance de la base de données : Erreur");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optimiser les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Vérifier les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Réparer les table(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analyser les table(s)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC",
"ANALYSER : Cette commande analyse et stocke la clé de distribution de la table. Durant l'analyse, la table est verrouillée en lecture.<br />
VERIFIER : Cette commande vérifie l'intégrité des tables (recherche des erreurs).<br />
OPTIMISER : Cette commande permet de récupérer l'espace utilisé par les enregistrements supprimés et de défragmenter l'inscription des données.<br />
REPARER : Cette commande tente une réparation des tables corrompues.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Résultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Aucun résultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Tâche d'effacement du cache");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Tâche d'effacement des données de la table des sessions");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Tâche de la base de données");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Aucun choix d'opération de maintenance");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tables");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optimiser");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Vérifier"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Réparer");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analyser");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Copie");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Sélectionnez les tables ou les modules");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Ajouter la commande DROP TABLE IF EXISTS 'tables' dans la copie");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR","OU");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND","ET");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES","Vous devez sélectionner les tables ou les modules");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES","Aucune table");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES","Tables");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES","Structures");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS","Nombre d'enregistrements");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED","Fichier créé");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT","Résultat");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS","enregistrement(s)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>Vous pouvez faire une maintenance simple de votre installation XOOPS : effacer les fichiers temporaires du cache, vider les enregistrements de la table des sessions, et effectuer la maintenance de vos tables de données</li>
</ul>");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @version         $Id $
 Modification et mise à jour par Cesag le 14 Mai 2012.
**/

?>
