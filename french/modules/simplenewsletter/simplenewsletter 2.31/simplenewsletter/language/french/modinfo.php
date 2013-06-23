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
define("_MI_SIMPLENEWSLETTER_NAME", "SimpleNewsletter");
define("_MI_SIMPLENEWSLETTER_DESC", "Un module simple de Newsletter");

define("_MI_SIMPLENEWSLETTER_BNAME1", "Les dernières newsletters");
define("_MI_SIMPLENEWSLETTER_BNAME2", "Les derniers inscrits");
define("_MI_SIMPLENEWSLETTER_BNAME3", "Inscription/Désinscription");
define("_MI_SIMPLENEWSLETTER_BNAME4", "CRON");

define("_MI_SIMPLENEWSLETTER_SMNAME1", "Index");
define("_MI_SIMPLENEWSLETTER_SMNAME2", "Souscription");
define("_MI_SIMPLENEWSLETTER_SMNAME3", "RSS");
define("_MI_SIMPLENEWSLETTER_SMNAME4", "Mot de passe perdu");

define("_MI_SIMPLENEWSLETTER_FORM_OPTIONS","Editeur de texte à utiliser");
define("_MI_SIMPLENEWSLETTER_FORM_COMPACT","Compact");
define("_MI_SIMPLENEWSLETTER_FORM_DHTML","DHTML");
define("_MI_SIMPLENEWSLETTER_FORM_SPAW","Spaw Editor");
define("_MI_SIMPLENEWSLETTER_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_SIMPLENEWSLETTER_FORM_FCK","FCK Editor");
define("_MI_SIMPLENEWSLETTER_FORM_KOIVI","Koivi Editor");
define("_MI_SIMPLENEWSLETTER_FORM_TINYEDITOR","TinyEditor");

define("_MI_SIMPLENEWSLETTER_PERPAGE", "Nombre d'éléments par page");
define("_MI_SIMPLENEWSLETTER_SENDER_EMAIL", "Adresse email de l'expéditeur");
define("_MI_SIMPLENEWSLETTER_SENDER_NAME", "Nom de l'expéditeur");
define("_MI_SIMPLENEWSLETTER_URL_REWRITE", "Voulez-vous utiliser l'url rewriting ?");
define("_MI_SIMPLENEWSLETTER_CHAR_CUT", "Nombre de caractères de chaque newsletter à afficher dans la page d'index du module");
define("_MI_SIMPLENEWSLETTER_WELCOME_EMAIL", "Envoyer un email de bienvenue aux inscrits ?");
define("_MI_SIMPLENEWSLETTER_BYEBYE_EMAIL", "Envoyer un email d'au revoir aux désinscrits ?");
define("_MI_SIMPLENEWSLETTER_PACKET_SIZE", "Envoyer les emails par paquets de ...");

define("_MI_SIMPLENEWSLETTER_ADMENU0", "Créer une newsletter");
define("_MI_SIMPLENEWSLETTER_ADMENU1", "Anciennes newsletters");
define("_MI_SIMPLENEWSLETTER_ADMENU2", "Inscrits");
define("_MI_SIMPLENEWSLETTER_ADMENU3", "Messages");
define("_MI_SIMPLENEWSLETTER_ADMENU4", "Textes");
define("_MI_SIMPLENEWSLETTER_ADMENU5", "Import CSV");
define("_MI_SIMPLENEWSLETTER_ADMENU6", "Blocs");

define("_MI_SIMPLENEWSLETTER_CRON_PASSWORD", "Mot de passe pour le CRON");
define("_MI_SIMPLENEWSLETTER_CRON_PASSWORD_DSC", "Si vous utilisez un système de CRON, vous <b>devez</b> définir un mot de passe et appeler le script sous la forme suivante : ");
define("_MI_SIMPLENEWSLETTER_USE_TAGS", "Voulez-vous utiliser le système de tags ?");
define("_MI_SIMPLENEWSLETTER_OPEN_SUBSCRIPTION", "Voulez-vous ouvrir les inscriptions aux personnes qui ne sont pas membres du site ?");
define("_MI_SIMPLENEWSLETTER_AUTO_APPROVE", "Approuver automatiquement les inscriptions des non membres ?");
define("_MI_SIMPLENEWSLETTER_USE_CAPTCHA", "Voulez-vous utiliser un CAPTCHA sur le formulaire d'inscription ?");
define("_MI_SIMPLENEWSLETTER_VALIDATE_BCC", "Envoyer une copie cachée des emails de validation à cette adresse ?");
define("_MI_SIMPLENEWSLETTER_VALIDATE_BCC_DSC", "Ne renseignez pas cette zone pour ne pas recevoir de copie des mails de validation");

define("_MI_SIMPLENEWSLETTER_MIME_TYPE", "Types mime autorisés");
define("_MI_SIMPLENEWSLETTER_MAX_UPLOAD", "Taille maximale des fichiers uploadés");
define("_MI_SIMPLENEWSLETTER_PATH_ATTACHMENTS", "Chemin où sauvegarder les fichiers attachés (sans slash final)");
define("_MI_SIMPLENEWSLETTER_URL_ATTACHMENTS", "URL où sauvegarder les fichiers attachés");
define("_MI_SIMPLENEWSLETTER_CSV_SEP", "Séparateur de champs pour le fichier CSV d'export");

define("_MI_SIMPLENEWSLETTER_NEW_FIELDS", "Voulez-vous utiliser les champs supplémentaires ?");
define("_MI_SIMPLENEWSLETTER_NEWS_FIELDS_DSC", "Titre, adresse, ville, état, code postal, téléphone, fax");
define("_MI_SIMPLENEWSLETTER_PASSWORD_MIN_LENGTH", "Longueur minimale des mots de passse ?");
?>