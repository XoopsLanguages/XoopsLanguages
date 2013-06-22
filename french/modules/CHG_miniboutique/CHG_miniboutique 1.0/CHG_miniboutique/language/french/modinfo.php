<?php
/*
* Module CHG_miniboutique 
* Version 1.00
* Ce module est un module de création de mini-boutique (2.5.5 avec admin GUI)
* Ce module est libre de droit
* Par montuy337513 (black_beard) pour chg-web
* Site support : http://www.chg-web.org
*/

define('_MI_MINIMAG_MOD_NAME', 'CHG_miniboutique');
define('_MI_MINIMAG_MOD_DESC', 'Ce module est une mini-boutique en ligne');
// Menu
define('_MI_MINIMAG_ACCUEIL','Accueil');
define('_MI_MINIMAG_ABOUT', '&Aacute; propos');
define('_MI_MINIMAG_USER', 'Utilisateurs');
define('_MI_MINIMAG_PREF', 'Préférences');
define('_MI_MINIMAG_CATEGORIE', 'Catégories');
define('_MI_MINIMAG_PRODUITS', 'Articles');
define('_MI_MINIMAG_COMMANDE', 'Bons de commande');
define('_MI_MINIMAG_PROFIL', 'Mes coordonnées');
define('_MI_MINIMAG_MESCOM', 'Mes commandes');
define('_MI_MINIMAG_TAUXTVA', 'TVA');
//Template
define('_MI_MINIMAG_INDEX_DESC','Template de la page index');
define('_MI_MINIMAG_PANIER_DESC','template de la barre de panier');
define('_MI_MINIMAG_USERTPL_DESC','Template de la page des données user');
define('_MI_MINIMAG_TPLPANIER_DESC', 'Template de la page de gestion du panier');
define('_MI_MINIMAG_VIEWCOM_DESC', 'Template de la page de visualisation des bons de commandes');
define('_MI_MINIMAG_ARTTPL_DESC','Template de la page du produit');
define('_MI_MINIMAG_FOOTERTPL_DESC','Template du pied de page');
// Préférences
define('_MI_MINIMAG_MAX_TAILLE_PHOTO','Taille maximale par photo');
define('_MI_MINIMAG_MAX_TAILLE_PHOTO_DESC', 'Indiquez le poids maximal autorisé en ko.');
define('_MI_MINIMAG_HTML','Description article HTML (O/N)');
define('_MI_MINIMAG_HTML_DESC','Autoriser le code HTML dans la description de l\'article.');
define('_MI_MINIMAG_USER1','Autoriser les utilisateur a s\'inscrire');
define('_MI_MINIMAG_USER_DESC', 'SI oui, les utilisateurs peuvent s\inscrire pour passer une commande. <br />Sinon seul un administrateur peut effectuer l\'inscription.');
define('_MI_MINIMAG_NUMPAGE', 'Nombre de ligne dans les tableaux');
define('_MI_MINIMAG_NUMPAGE_DESC', 'Indiquer le nombre d\'article a afficher par page dans les différentes listes');
define('_MI_MINIMAG_MAILFAIT','Prévenir si commande réalisé');
define('_MI_MINIMAG_MAILFAIT_DESC', 'Prévenir le client si la commande est passe en "réalisée".');
define('_MI_MINIMAG_TITLE','Titre de la page d\'accueil');
define('_MI_MINIMAG_TITLE_DESC','Indiquer le titre de la page d\'accueil du module');
define('_MI_MINIMAG_KEYWORDS','Mots-clés de la page d\'accueil');
define('_MI_MINIMAG_KEYWORDS_DESC','Indiquer les mots-clés de la page d\'accueil du module.<br />Les mots-clés doivent être séparés par une virgule');
define('_MI_MINIMAG_DESCRIPTION', 'meta-description de la page d\'accueil.');
define('_MI_MINIMAG_DESCRIPTION_DESC', 'Indiquer le contenu de la balise meta-description de la page d\'accueil du module');
define('_MI_MINIMAG_NB_ARTICLE','Nombre d\'article');
define('_MI_MINIMAG_NB_ARTICLE_DESC', 'Précise le nombre d\'articles présentés dans la liste des catégories');
define('_MI_MINIMAG_BIENVENU','Message de bienvenu');
define('_MI_MINIMAG_BIENVENU_DESC', 'Contenu du message de bienvenu en haut de la page d\'accueil.');
define('_MI_MINIMAG_MAIL_COM', 'Prévenir si nouvelle commande');
define('_MI_MINIMAG_MAIL_COM_DESC', 'Envoyer un mail aux administrateurs si une commande est passée');
define('_MI_MINIMAG_TVA','Activation T.V.A.');
define('_MI_MINIMAG_TVA_DESC', 'Active la fonction du calcul de la TVA, donc les prix des articles seront a considérés en H.T.');
define('_MI_MINIMAG_PRIXTTC','Affichage des prix en T.T.C.');
define('_MI_MINIMAG_PRIXTTC_DESC','Si la gestion de la T.V.A. est active, permet de choisir si les prix affichés sont en H.T. (non) ou en T.T.C. (oui).');
define('_MI_CHG_MINIMAG_MONNEY', 'Devise');
define('_MI_CHG_MINIMAG_MONNEY_DESC', 'Choix de la devise de la boutique');
define('_MI_MINIMAG_ADDCOMMENT', 'Commentaires autorisé à la réalisation');
define('_MI_MINIMAG_ADDCOMMENT_DESC', 'Permettre a la personne qui passe la commande client en "réalisé" d\'inserez un commentaire pour le client');
define('_MI_MINIMAG_COMMENT_IN_MAIL','Envoyer le commentaire par mail');
define('_MI_MINIMAG_COMMENT_IN_MAIL_DESC', 'Si la fonction précédente est activée, autorise ou non l\'insertion du commentaire dans le mail qui prévient le client que sa commande est prête');
?>