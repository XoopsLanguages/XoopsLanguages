<?php

/*
Module: Xcenter

Version: 2.01

Description: Multilingual Content Module with tags and lists with search functions

Author: Written by Simon Roberts aka. Wishcraft (simon@chronolabs.coop)

Owner: Chronolabs

License: See /docs - GPL 2.0
*/


	include_once('modinfo.php');

	// Options & Messages
	define('_XTR_AD_PAGE','Contenu de la page');
	define('_XTR_AD_CATEGORY','Catégorie');
	define('_XTR_AD_PARENT','Nœud parent');
	define('_XTR_AD_SUBMENUS','Sous-menu');
	define('_XTR_AD_HOMEPAGE','Page d\'accueil');
	define('_XTR_AD_ACTIONS','Actions');
	define('_XTR_AD_WEIGHT','Poids');
	define('_XTR_AD_RSSENABLED','RSS activé');
	define('_XTR_AD_TITLE','Description du bloc');
	define('_XTR_AD_CREATED','Créé');
	define('_XTR_AD_MADEBY','Dernière édition par');
	define('_XTR_NONE','(aucun)');
	define('_XTR_MSG_XCENTERSAVED','Contenu sauvegardé !');
	define('_XTR_NOPERMISSIONS','Pas d\'autorisations pour afficher la page ou son contenu');
	define('_XTR_NOTVISIBLE','Page non autorisée, cette page n\'est pas visible actuellement !');
	define('_XTR_PAGETITLESEP',' : ');
	define('_XTR_NOSTORY','Aucune histoire / contenu spécifié !');
	define('_XTR_CRUMBSEP','>');
	define('_XTR_WRITTENBY','Écrit par : ');
	define('_XTR_MSG_SECURITYTOKEN','La clé de sécurité doit être actualisée - Veuillez actualiser l\'écran !');
	define('_XTR_AD_CONFIRM_DELETE','Êtes-vous sûr de que vouloir supprimer la page <strong>%s</strong>');
	define('_XTR_AD_MSG_DELETE','Contenu supprimé avec succès !');
	define('_XTR_AD_CONFIRM_COPY','Êtes-vous sûr de vouloir copier la page <strong>%s</strong>');
	define('_XTR_AD_MSG_COPY','XCenter copié avec succès - %s parties copiées !');
	define('_XTR_NEEDCATEGORIES','Les catégories doivent être chargées !');
	define('_XTR_MSG_CATEGORYSAVED','Catégorie enregistrée avec succès');
	define('_XTR_MSG_CATEGORYNOTSAVED','La catégorie n\'a pas été enregistrée');
	define('_XTR_MSG_BLOCKSAVED','Bloc enregistré avec succès');
	define('_XTR_MSG_BLOCKNOTSAVED','Le bloc n\'a pas été enregistré');
	define('_XTR_XCENTEREXPIRED','XCenter a dépassé la date d\'expiration !');
	define('_XTR_TOBEPUBLISHED','XCenter doit atteindre la date de publication !');
	
	// PAssWord form
	define('_XTR_MF_ENTERPASSWORD','Entrez le mot de passe pour voir le contenu !');
	define('_XTR_MF_PASSWORD','Mot de passe du contenu');
	define('_XTR_MF_PASSWORD_DESC','');
	
	// PRINTING
	define('_XTR_PRINTERFRIENDLY','Version imprimable');
	define('_XTR_URLFORSTORY','Lien direct');
	define('_XTR_THISCOMESFROM','Cela vient de :');
	
	//PDF
	define('_XTR_PDF_AUTHOR','Auteur');
	define('_XTR_PDF_DATE','Publié');
	define('_XTR_POSTEDBY','Posté par');
	define('_XTR_POSTEDON','Posté le');
	define('_XTR_PAGE','%s générés, Page %s');
	
	// EDIT BLOCK FORM
	define('_XTR_AD_NEWBLOCK','Créer le nouveau bloc');
	define('_XTR_AD_EDITBLOCK','Modifier le bloc');
	define('_XTR_AD_OPENDESCRIPTION','Référence');
	define('_XTR_AD_OPENDESCRIPTION_DESC','Ce qui fait aussi référence au bloc');
	define('_XTR_AD_BLOCKHTML','Code du bloc');
	define('_XTR_AD_BLOCKHTML_DESC','HTML/XCODE/TEXT Codes à transmettre');
	
	// EDIT CATEGORY FORM
	define('_XTR_AD_NEWCATEGORY','Nouvelle catégorie');
	define('_XTR_AD_EDITCATEGORY','Modifier la catégorie');
	define('_XTR_AD_CAT_MENUTITLE','Titre du menu');
	define('_XTR_AD_CAT_RSSENABLED','RSS activé');
	define('_XTR_AD_CAT_OPTIONS','Options');
	define('_XTR_AD_CAT_LANGUAGE','Catégorie de langue');
	define('_XTR_AD_CAT_LANGUAGE_DESC','');
	define('_XTR_AD_CAT_CATEGORYPARENT','Nœud Parent de la catégorie');
	define('_XTR_AD_CAT_KEYWORDS','Mots clés meta');
	define('_XTR_AD_CAT_PAGEDESCRIPTION','Meta description de la page');
	define('_XTR_AD_CAT_RSSDESCRIPTION','Description des éléments RSS');
	define('_XTR_AD_CAT_TEXT','Légende de la catégorie');
	
	// EDIT XCENTER FORM
	define('_XTR_AD_EDITXCENTER','Modifier la Page de contenu multilingue');
	define('_XTR_AD_NEWXCENTER','Nouvelle Page de contenu multilingue');
	define('_XTR_AD_LANGUAGE','Langue de la page');
	define('_XTR_AD_MENUTITLE','Titre du menu');
	define('_XTR_AD_PAGETITLE','Titre de la page');
	define('_XTR_AD_INHERITBLOCK','Bloc hérité');
	define('_XTR_AD_KEYWORDS','Mots clés meta');
	define('_XTR_AD_PAGEDESCRIPTION','Meta Description de la Page');
	define('_XTR_AD_TEMPLATES','RSS &amp; modèle de contenu');
	define('_XTR_AD_RSS','Flux RSS de l\'élément');
	define('_XTR_AD_TEXT','Contenu de l\'élément');
	define('_XTR_AD_URL','Lien');
	define('_XTR_AD_PASSWORD','Mot de passe de la page');
	define('_XTR_AD_PASSWORD_CONFIRM','Confirmer :');
	define('_XTR_AD_OPTIONS','Options');
	define('_XTR_AD_URLADDRESS','Lien :');
	define('_XTR_AD_REDIRECTLINK','Lien de redirection pendant le chargement');		
	define('_XTR_AD_PUBLISH','Publié ou redirigé');
	define('_XTR_AD_EXPIRE','Expiré puis redirection');
	define('_XTR_AD_SET','Sauver la configuration maintenant ?');
	define('_XTR_AD_PUBlISHDATETIME','Publié par :');
	define('_XTR_AD_EXPIREDATETIME','Expire le :');
	define('_XTR_AD_REDIRECTPAGE','ou redirection vers la page :');
	define('_XTR_AD_VISIBLE','Visible');
	define('_XTR_AD_NOHTML','Aucun Html');
	define('_XTR_AD_NOSMILEY','Aucun émoticône');		
	define('_XTR_AD_NOBREAKS','Aucun saut de ligne');
	define('_XTR_AD_NOCOMMENTS','Aucun commentaire');		
	define('_XTR_AD_SUBMENU','Éléments du Sous-menu');
	define('_XTR_AD_TITLE_DESC','Apparaît dans les menus de la page !');
	define('_XTR_AD_PAGETITLE_DESC','Apparaît comme titre de la page !');
	define('_XTR_AD_PARENTPAGE_DESC','Page parent');
	define('_XTR_AD_CATEGORY_DESC','Catégorisation de la page');
	define('_XTR_AD_INHERITBLOCK_DESC','Bloc hérité pour la page');
	define('_XTR_AD_KEYWORDS_DESC','Ce sont les mots-clés de la page');
	define('_XTR_AD_PAGEDESCRIPTION_DESC','Description de la page dans les moteurs de recherche');
	define('_XTR_AD_TEMPLATE_DESC','Modèles prédéfinis');
	define('_XTR_AD_RSS_DESC','Document RSS à faire apparaître dans la catégorie flux rss !');
	define('_XTR_AD_TEXT_DESC','XCenter qui apparaît dans la page sous l\'ID');
	define('_XTR_AD_URL_DESC','Lien de redirection !');
	define('_XTR_AD_PASSWORD_DESC','Protection par mot de passe de la page');
	define('_XTR_AD_TAGS_DESC','Étiquettes  / phrases clé pour la page !');
	define('_XTR_AD_PUBLISH_DESC','La page apparaîtra et sera uniquement publiée après cette date !');
	define('_XTR_AD_EXPIRE_DESC','La page sera uniquement publiée jusqu\'à cette date et heure !');
	define('_XTR_AD_LANGUAGE_DESC','Sélectionnez la langue pour cette page !');
	define('_XTR_AD_CAT_PAGETITLE','Titre de la Page catégorie');
	define('_XTR_AD_PUBLISHED','Publié');
	
	define('_XTR_AD_ADDPAGE_TITLEA','Contenu de la page');
	define('_XTR_AD_ADDPAGE_TITLEB','Nouvelle Page');
	define('_XTR_AD_CATEGORY_TITLEA','Catégorie');
	define('_XTR_AD_CATEGORY_TITLEB','Nouvelle catégorie');
	define('_XTR_AD_BLOCK_TITLEA','Bloc');
	define('_XTR_AD_BLOCK_TITLEB','Nouveau bloc');
	define('_XTR_AM_MANAGE_TITLEA','Gestion du contenu');
	// Traduction par Cesag pour frxoops.org le 17 Juin 2012
?>