<?php
/*
* Module CHG_miniboutique 
* Version 1.00
* Ce module est un module de création de mini-boutique (2.5.5 avec admin GUI)
* Ce module est libre de droit
* Par montuy337513 (black_beard) pour chg-web
* Site support : http://www.chg-web.org
*/
define('_AM_CHG_ADMIN_ACTION', 'Actions');
define('_AM_CHG_TITRE_PAGE_CAT','Gestion des catégories');
define('_AM_CHG_TITRE_PAGE_ITEM','Gestion des articles');
define('_AM_CHG_TITRE_PAGE_USER','Gestion des adresses des users');
define('_AM_CHG_LOGO', 'Image de la catégorie');
define('_AM_CHG_ADMIN_NOM_CAT', 'Nom de la catégorie');
define('_AM_CHG_ADMIN_CAT_PARENT', 'Nom de la catégorie parent');
define('_AM_CHG_ADMIN_ADD_CATEGORIE', 'Ajout / Modification d\'une catégorie');
define('_AM_CHG_CAT_PARENT', 'Catégorie parente');
define('_AM_CHG_META_KEYWORD', 'Meta-Keywords pour la catégorie');
define('_AM_CHG_META_DESC', 'Meta-Description pour la catégorie');
define('_AM_CHG_IMGCAT', 'Image de la cat&eacute;gorie');
define('_AM_CHG_LOCIMG', 'nom de l\'image + extension plac&eacute; dans %s');
define('_AM_CHG_UPLOAD_WARNING','<strong>Attention, n\'oubliez pas d\'appliquer les permissions d\'&eacute;criture au r&eacute;pertoire suivant : %s </strong>');
define('_AM_CHG_TELECHARGE_IMG_CAT', 'T&eacute;l&eacute;charger l\'image de la cat&eacute;gorie');
define('_AM_CHG_CONFIRM_SUP_CAT', 'ATTENTION : Cette op&eacute;ration supprimera la catégorie et toute ces sous-catégories %s');
define('_AM_CHG_UPLOAD_ERROR', 'Le téléchargement a échoué');
define('_AM_CHG_DATE_CREATION', 'Date de création');
define('_AM_CHG_DATE_MODIF', 'Dernière modification le');
define('_AM_GEST_FRAMEWORKS', 'Options requises pour un fonctionnement optimal');
define('_AM_CHG_TCPDF', 'Frameworks TCPDF_for_xoops version 1.05 minimum : %s');
define('_AM_CHG_WIDEIMAGE', 'Frameworks WideImage_for_xoops version 1.00 minimum : %s');
define('_AM_CHG_CHG_MENTIONS', 'Module CHG_mentions version 1.00 minimum : %s');
define('_AM_CHG_GD2', 'Librairie PHP GD2 : %s');
define('_AM_CHG_POIDS', 'Poids');
define('_AM_CHG_ACTIF', 'Activer(oui) / Désactiver(non)');
define('_AM_CHG_TITRE_PAGE_ANN','Gestion des articles');
define('_AM_CHG_TRI_TOUT', 'Tout afficher');
define('_AM_CHG_TRI_ACTIF', 'Le produits actives');
define('_AM_CHG_TRI_INACTIF', 'Les produits inactifs');
define('_AM_CHG_CHOIX_AFF_DATE_ASC','Par date du plus ancien au plus récent');
define('_AM_CHG_CHOIX_AFF_DATE_DESC','Par date du plus récent au plus ancien');
define('_AM_CHG_CONFIRM_SUP_ITEM','ATTENTION : Cette opération est irréversible, voulez-vous effacer %s');
define('_AM_CHG_ADMIN_ADD_ITEM','Ajout / Modification d\'un article');
define('_AM_CHG_TELECHARGE_IMG_ITEM', 'T&eacute;l&eacute;charger l\'image de l\'article');
define('_AM_CHG_TITRE_PAGE_COMMANDE','Gestion des commandes');
define('_AM_CHG_STAT', 'Statistiques du module');
define('_AM_CHG_NB_USER', 'Nombre d\'utilisateurs ayant commandé : %s');
define('_AM_CHG_NB_AFAIRE', 'Commandes en attente : %s');
define('_AM_CHG_NB_DEJAFAIT', 'Commandes réalisées : %s');
define('_AM_CHG_NB_TOTAL', 'Commandes totales : %s');
define('_AM_CHG_INFO_UPLOAD', 'Informations pour télécharger les pré-requis');
define('_AM_UPLOAD_CHG_MENTIONS', 'Téléchargement du module CHG_mentions : <a href="http://www.chg-web.org/telechargement/singlefile.php?lid=5" title="Télécharger un module pour vos mentions légales">Module CHG_mentions</a>');
define('_AM_UPLOAD_WIDEIMAGE', 'Téléchargement du Frameworks WideImage_for_xoops : <a href="http://www.chg-web.org/telechargement/singlefile.php?cid=8&lid=16" title="Télécharger le Frameworks WideImage">Frameworks WideImage_for_xoops</a>');
define('_AM_UPLOAD_TCPDF','Téléchargement du Frameworks TCPDF_for_xoops : <a href="http://www.chg-web.org/telechargement/singlefile.php?cid=3&lid=5" title="Télécharger le Frameworks tcpdf">Frameworks Tcpdf_for_xoops</a>');
define('_AM_CHG_PHOTO', 'Photo de l\'article');
define('_AM_CHG_TITRE_PAGE_TVA', 'Gestion du taux de T.V.A.');
define('_AM_CHG_NOTVA', 'Système de gestion de T.V.A. désactiver, si vous êtes assujeti à la T.V.A., merci de l\'activer dans les préférences du module');
define('_AM_CHG_TAUX_TVA', 'taux de T.V.A. : %s &#37;');
define('_AM_CHG_NOUVEAUTAUX', 'Indiquer le nouveau taux de T.V.A. (exemple pour 19.6%, écrire 19.6)');
define('_AM_CHG_PRIX', 'Prix (%s)');
define('_AM_DEVISE_CHOISI', 'Devise du module : %s');
define('_AM_CHG_ADMIN_ADD_COM', 'Ajout d\'un commentaire concernant la commande du client');
define('_AM_CHG_CHANGE_PRIX', 'Changement rapide des prix');
?>