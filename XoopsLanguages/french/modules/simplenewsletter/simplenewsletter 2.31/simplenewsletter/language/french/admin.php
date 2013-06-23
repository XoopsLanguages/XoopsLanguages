<?php
/**
 * ****************************************************************************
 * simplenewsletter - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard of http://www.herve-thouzard.com
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of http://www.herve-thouzard.com
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         simplenewsletter
 * @author 			Hervé Thouzard of http://www.herve-thouzard.com
 *
 * Version : $Id:
 * ****************************************************************************
 */

define("_AM_SIMPLENEWSLETTER_GO_TO_MODULE", "Aller au module");
define("_AM_SIMPLENEWSLETTER_PREFERENCES", "Préférences");
define("_AM_SIMPLENEWSLETTER_MAINTAIN", "Maintenance des tables et du cache");
define("_AM_SIMPLENEWSLETTER_ADMINISTRATION", "Administration");
define("_AM_SIMPLENEWSLETTER_SAVE_OK", "Données enregistrées avec succès");
define("_AM_SIMPLENEWSLETTER_SAVE_PB","Problème durant la sauvegarde des données");
define("_AM_SIMPLENEWSLETTER_NOT_FOUND", "Erreur, donnée introuvable");
define("_AM_SIMPLENEWSLETTER_ACTION","Action");
define("_AM_SIMPLENEWSLETTER_NEWS_CREATE","Création d'une newsletter");
define("_AM_SIMPLENEWSLETTER_NEWS_EDIT","Editer une newsletter");
define("_AM_SIMPLENEWSLETTER_NEWS_PREVIEW","Prévisualiser une newsletter avant de l'envoyer");
define("_AM_SIMPLENEWSLETTER_NEWS_BODY","Contenu de la newsletter");
define("_AM_SIMPLENEWSLETTER_SEND_HTML","Envoyer en html ?");
define("_AM_SIMPLENEWSLETTER_SEND_PAQUET","Envoyer par paquets de");
define("_AM_SIMPLENEWSLETTER_SEND","Envoyer");
define("_AM_SIMPLENEWSLETTER_SAVE","Enregistrer");
define("_AM_SIMPLENEWSLETTER_DELETE_MEMBER","Voulez-vous vraiment supprimer l'inscription de ce membre ?");
define("_AM_SIMPLENEWSLETTER_DELETE_NEWSLETTER","Voulez-vous vraiment supprimer cette newsletter ?");
define("_AM_SIMPLENEWSLETTER_MEMBERS_LIST","Liste des inscrits");
define("_AM_SIMPLENEWSLETTER_MESSAGES","Message de bienvenue et d'au revoir");
define("_AM_SIMPLENEWSLETTER_MESSAGE1","Message de bienvenue");
define("_AM_SIMPLENEWSLETTER_MESSAGE2","Message d'au revoir");
define("_AM_SIMPLENEWSLETTER_MESSAGE3","Texte à afficher sur la page d'accueil du module");
define("_AM_SIMPLENEWSLETTER_ERROR_1", "Erreur, aucun identifiant spécifié");
define("_AM_SIMPLENEWSLETTER_ERROR_2", "Vous avez déjà cliqué sur ce lien");
define("_AM_SIMPLENEWSLETTER_ERROR_3", "Erreur, impossible de créer le fichier CSV");
define("_AM_SIMPLENEWSLETTER_SENDING", "Envoi de la newsletter en cours");
define("_AM_SIMPLENEWSLETTER_STATUS", "Statut");
define("_AM_SIMPLENEWSLETTER_STATUS_SENT", "Envoyée");
define("_AM_SIMPLENEWSLETTER_STATUS_NOTSENT", "En cours d'envoi");
define("_AM_SIMPLENEWSLETTER_STOP", "Arrêter");
define("_AM_SIMPLENEWSLETTER_RELAUNCH", "Relancer");
define("_AM_SIMPLENEWSLETTER_SUBSCRIBE_ALL", "Inscrire tous les membres du site");
define("_AM_SIMPLENEWSLETTER_CONF_SUBSCRIBE_ALL", "Voulez-vous vraiment inscrire tous les membres de votre site ?");
define("_AM_SIMPLENEWSLETTER_UNSUBSCRIBE_ALL", "Désinscrire tous les membres");
define("_AM_SIMPLENEWSLETTER_CONF_UNSUBSCRIBE_ALL", "Voulez-vous vraiment désinscrire tous les members ?");
define("_AM_SIMPLENEWSLETTER_MODIFY", "Modifier");
define("_AM_SIMPLENEWSLETTER_ADD", "Ajouter");
define("_AM_SIMPLENEWSLETTER_VALIDATION_MESSAGE", "Message de validation envoyé aux anonymes");
define("_AM_SIMPLENEWSLETTER_VALIDATION_WHERE", "Vous le trouverez dans ");
define("_AM_SIMPLENEWSLETTER_PROCESS", "Processus ");
define("_AM_SIMPLENEWSLETTER_PROCESS_ERROR", "Il y a eu une erreur pendant ce processus");
define("_AM_SIMPLENEWSLETTER_PROCESS_END", "Fin du processus de mise à jour");
define("_AM_SIMPLENEWSLETTER_SUBSCRIPTION", "Inscription");
define("_AM_SIMPLENEWSLETTER_VERIFIED", "Vérifié");
define("_AM_SIMPLENEWSLETTER_EXPORT_MEMBERS", "Exporter les membres");
define("_AM_SIMPLENEWSLETTER_CSV_READY", "Votre fichier CSV est disponible au téléchargement, cliquez sur ce lien pour l'obtenir");
define("_AM_SIMPLENEWSLETTER_STATISTICS", "Statistiques");
define("_AM_SIMPLENEWSLETTER_STATISTICS1", "%u inscriptions vérifiées");
define("_AM_SIMPLENEWSLETTER_STATISTICS2", "%u inscriptions non vérifiées");
define("_AM_SIMPLENEWSLETTER_STATISTICS3", "Total %u inscriptions");
define("_AM_SIMPLENEWSLETTER_STATISTICS4", "%u membres du site");
define("_AM_SIMPLENEWSLETTER_STATISTICS5", "%u non membres du site");
define("_AM_SIMPLENEWSLETTER_SUBSCRIPTION_DATE", "Inscription");
define("_AM_SIMPLENEWSLETTER_SITE_MEMBER", "Membre du site");
define("_AM_SIMPLENEWSLETTER_VALIDATE_MEMBER","Voulez-vous vraiment valider cette inscription ?");
define("_AM_SIMPLENEWSLETTER_YOU_CAN_USE","Vous pouvez utiliser les variables ci-dessous :");
define("_AM_SIMPLENEWSLETTER_SENDED", "Envois");
define("_AM_SIMPLENEWSLETTER_CSV_PARAMETERS", "Paramètres de l'import CSV");
define("_AM_SIMPLENEWSLETTER_CSV_UPLOAD_FILE", "Téléchargez votre fichier CSV");
define("_AM_SIMPLENEWSLETTER_CSV_SELECT_FILE", "Ou choisissez-le dans la liste (il doit être dans le répertoire %s)");
define("_AM_SIMPLENEWSLETTER_CSV_SKIP_FIRST", "Sauter la première ligne du fichier ?");
define("_AM_SIMPLENEWSLETTER_CSV_NEXT_STEP", "Aller à la prochaine étape");
define("_AM_SIMPLENEWSLETTER_CSV_FIELDS_SEP", "Séparateur de champs");
define("_AM_SIMPLENEWSLETTER_CSV_STRINGS_SEP", "Séparateur de chaines");
define("_AM_SIMPLENEWSLETTER_CSV_EMPTY_CONTENT", "Vider le contenu actuel de la liste des inscrits");
define("_AM_SIMPLENEWSLETTER_FIELDS_MAPPING", "Correspondance des champs");
define("_AM_SIMPLENEWSLETTER_ERROR_4", "Erreur, aucun fichier sélectionné ou téléchargé");
define("_AM_SIMPLENEWSLETTER_ERROR_5", "Erreur, impossible d'ouvrir le fichier csv");
define("_AM_SIMPLENEWSLETTER_ERROR_6", "Erreur, impossible de créer le membre de la ligne ");
define("_AM_SIMPLENEWSLETTER_CSV_HELP", "<br />Sur la gauche vous avez la liste de nos champs dans la base de données avec une explication, sur la droite, vous devez choisir le champ correspondant dans votre fichier<br /><br />");
define("_AM_SIMPLENEWSLETTER_CSV_HELP1", "Si le téléchargement ne fonctionne pas, renommez votre fichier avec une extension .txt ou copiez le dans votre répertoire 'uploads' en FTP et utilisez la liste ci-dessous");

define("_AM_SIMPLENEWSLETTER_CSV_HELP2", "C'est la date d'inscription de l'utilisateur, c'est un <a target='_blank' href='http://fr.wikipedia.org/wiki/Timestamp_(informatique)'>timestamp</a>");
define("_AM_SIMPLENEWSLETTER_CSV_HELP3", "Le créer automatiquement avec la date du jour");
define("_AM_SIMPLENEWSLETTER_CSV_HELP4", "C'est le numéro d'utilisateur dans la base de données de Xoops<br />La valeur 0 indique un utilisateur non inscrit sur le site");
define("_AM_SIMPLENEWSLETTER_CSV_HELP5", "Le mettre à la valeur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP6", "C'est le prénom");
define("_AM_SIMPLENEWSLETTER_CSV_HELP7", "C'est le nom de famille");
define("_AM_SIMPLENEWSLETTER_CSV_HELP8", "Ce champ est utilisé pour indiquer si l'inscription est vérifiée (uniquement pour les utilisateurs anonymes)<br />0 = inscription non vérifiée, 1 = inscription vérifiée");
define("_AM_SIMPLENEWSLETTER_CSV_HELP9", "Adresse email de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP10", "Mot de passe utilisé pour gérer son compte. Uniquement utilisé avec les utilisateur anonymes");
define("_AM_SIMPLENEWSLETTER_CSV_HELP11", "Titre de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP12", "La rue de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP13", "La ville de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP14", "L'état de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP15", "Le code postal de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP16", "Le téléphone de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_HELP17", "Le fax de l'utilisateur");
define("_AM_SIMPLENEWSLETTER_CSV_STARTING", "Début de l'import, l'opération n'est pas terminée tant que le module ne vous l'indique pas");
define("_AM_SIMPLENEWSLETTER_CSV_END", "L'import est terminé, j'ai importé %u utilisateurs, n'oubliez pas de supprimer le fichier d'import : %s (<a href='%s'>cliquez sur ce lien pour le supprimer</a>)");
define("_AM_SIMPLENEWSLETTER_SEND_TEST", "L'envoyer, pour test, au groupe des webmasters");
?>