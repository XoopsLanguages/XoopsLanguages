<?php
/*
* Module CHG_miniboutique 
* Version 1.00
* Ce module est un module de création de mini-boutique (2.5.5 avec admin GUI)
* Ce module est libre de droit
* Par montuy337513 (black_beard) pour chg-web
* Site support : http://www.chg-web.org
*/
if (!defined('XOOPS_ROOT_PATH')) {
    die("XOOPS root path not defined");
}
// Traduction tri affichage annonce
define ('CHG_TRI_TOUT','Afficher toute les annonces');
define ('CHG_TRI_AMODERE','Afficher les annonces a mod&eacute;rer');
define ('CHG_TRI_ACTIF','Afficher les annonces actives');
define ('CHG_TRI_INACTIF','Afficher les annonces inactives');
define ('CHG_TRI_PERIME','Afficher les annonces p&eacute;rim&eacute;es');
define ('CHG_TRI_VALIDE','Afficher les annonces en ligne');

// Traduction titre mail
define('CHG_MAIL_SUJET', 'Au sujet de votre commande : ');

// Divers
define('CHG_CREER', 'Cr&eacute;er');
define('CHG_CAT', 'Catégorie');
define('CHG_CATS', 'Catégories');
define('CHG_JOUR', 'jour(s)');
define('CHG_RETOUR', 'Retour');
define('CHG_ABSENT', 'Absent');
define('CHG_PRESENT', 'Présent');
define('CHG_VERSION_OBSOLETE', 'version pas à jour');
define('CHG_ACTIVER', 'Activer');
define('CHG_DESACTIVER', 'Désactiver');
define('CHG_MODIFIER', 'Modifier');
define('CHG_SUPPRIMER', 'Supprimer');
define('CHG_AJOUTER', 'Ajouter ');
define('CHG_FORFAIT', 'un forfait');
define('CHG_CATEGORIE', 'une catégorie');
define('CHG_AITEM','un article');
define('CHG_CREE_LE', 'Créé(e) le %s');
define('CHG_MODIF_LE', 'Modifié(e) le %s');
define('CHG_TITRE', 'Titre');
define('CHG_TITRE_PRODUIT', 'Titre du produit');
define('CHG_TITRE_DESCRIPTION_COURTE','Description courte du produit');
define('CHG_PHOTO', 'Photo(s)');
define('CHG_ITEM',' article');
define('CHG_ADMIN_ADD_ITEM', 'Ajouter / Modifier un article');
define('CHG_ITEMS', 'Articles');
define('CHG_DESCRIPT','Description');
define('CHG_REFERENCE','Référence');
define('CHG_PRIX', 'Prix');
define('CHG_NOM', 'Nom');
define('CHG_PRENOM', 'Prénom');
define('CHG_ADRESSE', 'Adresse');
define('CHG_COMP', 'Complément d\'adresse');
define('CHG_CP', 'Code Postal');
define('CHG_VILLE', 'Ville');
define('CHG_ADD_USER', 'Ajouter / Modifier un utilisateur');
define('CHG_AUSER', 'un utilisateur');
define('CHG_QUAND', 'Date de commande');
define('CHG_NB_ARTICLE', 'Détails de la commande');
define('CHG_NUM_BON','Numéro du bon');
define('CHG_NB_ART','Nombre d\'article(s)');
define('CHG_TOTAL','Montant de la commande');
define('CHG_VOIR','Voir');
define('CHG_REALISER', 'Réaliser');
define('CHG_IMPRIMER', 'Imprimer en PDF');
define('CHG_BON_COM', 'Bon de commande : ');
define('CHG_FAIT', 'Fait');
define('CHG_FAIRE', 'A faire');
define('CHG_REF', 'Référence');
define('CHG_DESIGNATION', 'Désignation');
define('CHG_NB', 'Quantité');
define('CHG_TOT', 'Total');
define('CHG_VCOM', 'Votre commande %s est prête');
define('_CHG_UID_USER', 'pseudo de l\'utilisateur');
define('CHG_COMMANDE', 'Commander');
define('CHG_TTC', 'T.T.C.');
define('CHG_HT','H.T.');
define('CHG_PHRASE_TTC','Les prix indiqués sont T.T.C.');
define('CHG_PHRASE_HT', 'Les prix indiqués sont H.T.');
define('CHG_PHRASE_NOTVA', 'La T.V.A. ne s\'applique pas');
define('CHG_DONTTVA','Dont T.V.A. %s &#37;');
define('CHG_TVA','T.V.A. %s &#37;');
define('CHG_AUCUN_COMMENTAIRE', 'Aucun commentaire ');
define('CHG_COMMENTAIRE','Commentaire');
define('CHG_ADD_COM', 'Réalise + commentaire');
//Les messages
define('CHG_MESSAGE_ERREUR', 'Erreur : ');
define('CHG_CAT_INCONNU', 'La catégorie %s n\'existe pas, merci de corriger');
define('CHG_MIN_MAX_CARC', 'Le champs %s doit comporter au moins %s et au maximum %s caractère(s), merci de corriger');
define('CHG_MAX_INT', 'Le champs %s doit avoir une valeur inférieur à %d, merci de corriger');
define('CHG_MIN_CARC', 'Le champs $s doit avoir au moins %s caractère(s), merci de corriger');
define('CHG_OUINON', '%s : répondez par oui ou par non');
define('CHG_MANQUE_CHAMPS', 'Tous les champs avec * sont requis, merci de compléter le formulaire');
define('CHG_ERR_INC', 'Une erreur est survenue, merci de contacter l\'administrateur');
define('CHG_OP_OK', 'Op&eacute;ration effectu&eacute;e avec succès');
define('CHG_UPLOAD_ERROR', 'Une erreur lors du téléchargement de l\'image, merci de ré-essayer');
define('CHG_NO_DONNEE', 'Pas de donnée a afficher');
define('CHG_NO_INSCRIPTION', 'Vous devez contacter un administrateur pour réaliser votre inscription, merci');
define('CHG_ETRE_CONNECT', 'Vous devez vous connecter ou créer un compte pour continuer');
define('CHG_BONJOUR', 'Bonjour %s');
define('CHG_NO_ITEM', 'L\'article demandé n\'existe plus');
define('CHG_FAIRE_INSCRIPTION', 'Merci de compléter vos coordonnées pour continuer');
define('CHG_USER_VIDE', 'Merci de cliquer sur "Modifier" pour compléter vos coordonnées');
define('CHG_ERR_COM_INC','Bon de commande inconnu');
define('CHG_ANNONCE_EXPMAIL_ERROR', 'Impossible d\'envoyer le mail');
define('CHG_COM_UPDATE','Commentaire mis à jour');
?>