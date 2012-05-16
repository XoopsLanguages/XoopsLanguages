<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * _LANGCODE    fr
 * _CHARSET     iso-8859-1
 * @version     $Id$
 */

// Main
define("_AM_SYSTEM_CONFIG", "Configuration du syst�me" );
define("_AM_SYSTEM_CPANEL", "Panneau de configuration" );
define("_AM_SYSTEM_UPDATE", "Mise � jour" );
define("_AM_SYSTEM_GOTOMODULE", "Aller au module" );
define("_AM_SYSTEM_HELP", "Aide" );
define("_AM_SYSTEM_HELP_VIEW", "Afficher l'aide" );
define("_AM_SYSTEM_HELP_HIDE", "Cacher l'aide" );
define("_AM_SYSTEM_TIPS", "Astuces" );
define("_AM_SYSTEM_SECTION", "Section" );
define("_AM_SYSTEM_DESC", "Description" );
define("_AM_SYSTEM_GO", "Aller � cette section" );
define("_AM_SYSTEM_STATUS", "Activer ou d�sactiver la section" );
define("_AM_SYSTEM_LOADING", "Chargement");
define("_AM_SYSTEM_ALL", "Tout");

define("_AM_SYSTEM_TIPS_MAIN","<ul><li>L'activation ou la d�sactivation de certaines fonctionnalit�s du syst�me sont param�trables � partir de cette page.</li></ul>");
define("_AM_SYSTEM_AVATAR_INFO", "Il y a <span class='bold'>%s</span> avatar(s)." );
define("_AM_SYSTEM_BANNER_INFO", "<ul><li><span class='bold red'>%s</span> banni�re(s).</li></ul>" );
define("_AM_SYSTEM_COMMENT_INFO", "<ul><li><span class='bold red'>%s</span> commentaire(s).</li></ul>" );
define("_AM_SYSTEM_GROUP_INFO", "<ul><li><span class='bold red'>%s</span> groupe(s).</li></ul>" );
define("_AM_SYSTEM_IMG_INFO", "<ul><li><span class='bold red'>%s</span> image(s).</li></ul>" );
define("_AM_SYSTEM_SMILIES_INFO", "<ul><li><span class='bold red'>%s</span> �motic�ne(s).</li></ul>" );
define("_AM_SYSTEM_RANKS_INFO", "<ul><li><span class='bold red'>%s</span> classement(s).</li></ul>" );
define("_AM_SYSTEM_USERS_INFO", "<ul><li><span class='bold red'>%s</span> utilisateur(s).</li></ul>" );

// Admin Module Names and description
define( "_AM_SYSTEM_ADGS", "Groupes");
define( "_AM_SYSTEM_ADGS_DESC", "Vous pouvez ajouter des groupes <br />et g�rer les permissions pour <br />chaque groupe.");
define( "_AM_SYSTEM_BANS", "Banni�res");
define( "_AM_SYSTEM_BANS_DESC", "Vous pouvez g�rer vos banni�res d'ici");
define( "_AM_SYSTEM_BLOCKS", "Blocs" );
define( "_AM_SYSTEM_BLOCKS_DESC", "C'est � l'aide des blocs que vous pouvez<br /> ajouter plusieurs �l�ments pour vos utilisateurs" );
define( "_AM_SYSTEM_MODULES", "Modules" );
define( "_AM_SYSTEM_MODULES_DESC", "Cette section vous permet d'installer<br /> de d�sinstaller vos modules.<br /> Savez-vous ce qu'est un module ?" );
define( "_AM_SYSTEM_SMLS", "�motic�nes");
define( "_AM_SYSTEM_SMLS_DESC", "C'est ici que vous pouvez g�rer les �motic�nes<br /> que les utilisateurs peuvent ins�rer dans<br /> les messages de votre site (priv�s, forums, commentaires, ...)");
define( "_AM_SYSTEM_RANK", "Classements");
define( "_AM_SYSTEM_RANK_DESC", "Vous pouvez ajouter ou modifier<br /> le classement pour vos utilisateurs");
define( "_AM_SYSTEM_USER", "Utilisateur");
define( "_AM_SYSTEM_USER_DESC", "Dans cette section vous pouvez ajouter<br /> un nouvel utilisateur, ou �diter les informations<br /> d'un utilisateur existant, modifier les groupes et autres options.");
define( "_AM_SYSTEM_PREF", "Pr�f�rences");
define( "_AM_SYSTEM_PREF_DESC", "G�rer les pr�f�rences principales<br /> de votre site sous XOOPS dans cette section.");
define( "_AM_SYSTEM_MLUS", "Emails");
define( "_AM_SYSTEM_MLUS_DESC", "Si vous avez besoin d'envoyer un email<br /> ou un message priv� � vos utilisateurs,<br /> cela se passe dans cette section.");
define( "_AM_SYSTEM_IMAGES", "Images");
define( "_AM_SYSTEM_IMAGES_DESC", "C'est dans cette section que vous pouvez<br /> g�rer les images, leurs cat�gories et les droits d'acc�s");
define( "_AM_SYSTEM_AVATARS", "Avatars" );
define( "_AM_SYSTEM_AVATARS_DESC", "Cette section vous permet de g�rer<br /> les avatars disponibles pour les profils de vos utilisateurs" );
define( "_AM_SYSTEM_TPLSETS", "Templates");
define( "_AM_SYSTEM_TPLSETS_DESC", "Si vous avez besoin d'effectuer quelques changements<br /> aux templates de votre noyau XOOPS ou de vos modules,<br /> cette section permet de cr�er une surcharge du th�me");
define( "_AM_SYSTEM_COMMENTS", "Commentaires");
define( "_AM_SYSTEM_COMMENTS_DESC", "Vos utilisateurs peuvent ajouter des commentaires<br /> sur votre site, pour les articles, les photos etc.<br /> G�rez-les depuis cette section");
define( "_AM_SYSTEM_FILEMANAGER", "Fichiers");
define( "_AM_SYSTEM_FILEMANAGER_DESC", "Gr�ce � ceci vous pouvez modifier<br /> n'importe quel fichier de votre site.");
define( "_AM_SYSTEM_MAINTENANCE", "Maintenance");
define( "_AM_SYSTEM_MAINTENANCE_DESC", "Outils de maintenance pour votre base de donn�es,<br /> le cache et la table des sessions");

// Messages
define("_AM_SYSTEM_DBUPDATED", "La base de donn�es a �t� correctement mise � jour !");
define("_AM_SYSTEM_DBERROR", "La base de donne�s n'a pas �t� mise � jour suite � des erreurs !");
define("_AM_SYSTEM_NOTACTIVE", "Cette section n'est pas activ�e !");

// Group permission phrases
define("_MD_AM_PERMADDNG", "Il est impossible d'ajouter les permissions \"%s\" � \"%s\" pour le groupe \"%s\"");
define("_MD_AM_PERMADDOK", "La permission \"%\" a �t� ajout�e � \"%s\" pour le groupe \"%s\"");
define("_MD_AM_PERMRESETNG", "Il est impossible de red�finir les permisions pour le groupe \"%s\"");
define("_MD_AM_PERMADDNGP", "Tous les �l�ments parents doivent �tre s�lectionn�s.");

define("_AM_SYSTEM_UNINSTALL","D�sinstaller");

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag
 */
?>