<?php
/**
 * ****************************************************************************
 * oledrion - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         oledrion
 * @author 			Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

define("_AM_OLEDRION_GO_TO_MODULE","Aller au module");
define("_AM_OLEDRION_PREFERENCES","Préférences");
define("_AM_OLEDRION_ADMINISTRATION","Administration");
define("_AM_OLEDRION_CATEGORIES","Catégories");
define("_AM_OLEDRION_CATEG_CONFIG","Configuration des blocs sur les pages des catégories");
define("_AM_OLEDRION_CHUNK","Bloc");
define("_AM_OLEDRION_POSITION","Position & visibilité");
define("_AM_OLEDRION_INVISIBLE","Invisible");
define("_AM_OLEDRION_OK","Ok");
define("_AM_OLEDRION_SAVE_OK","Données enregistrées avec succès");
define("_AM_OLEDRION_SAVE_PB","Problème durant la sauvegarde des données");
define("_AM_OLEDRION_ACTION","Action");
define("_AM_OLEDRION_ADD_ITEM","Ajouter un élément");
define("_AM_OLEDRION_CONF_DELITEM","Voulez vous vraiment supprimer cet élément ?");
define("_AM_OLEDRION_LIST","Liste");
define("_AM_OLEDRION_ID","Id");
define("_AM_OLEDRION_RATE","Taux");
define("_AM_OLEDRION_MAINTAIN","Maintenir les tables et le cache");

define("_AM_OLEDRION_ADD_VAT","Ajouter une TVA");
define("_AM_OLEDRION_EDIT_VAT","Editer une TVA");

define("_AM_OLEDRION_ADD_CATEG","Ajouter une catégorie");
define("_AM_OLEDRION_EDIT_CATEG","Editer une catégorie");

define("_AM_OLEDRION_ADD_VENDOR","Ajouter un vendeur");
define("_AM_OLEDRION_EDIT_VENDOR","Editer un vendeur");

define("_AM_OLEDRION_ADD_FILE","Ajouter un fichier");
define("_AM_OLEDRION_EDIT_FILE","Editer un fichier");

define("_AM_OLEDRION_ADD_MANUFACTURER","Ajouter un fabricant");
define("_AM_OLEDRION_EDIT_MANUFACTURER","Editer un fabricant");

define("_AM_OLEDRION_ADD_PRODUCT","Ajouter un produit (tous les champs ne sont pas obligatoires)");
define("_AM_OLEDRION_EDIT_PRODUCT","Editer un produit (tous les champs ne sont pas obligatoires)");

define("_AM_OLEDRION_ADD_DSICOUNT","Ajouter une promotion");
define("_AM_OLEDRION_EDIT_DISCOUNT","Editer une promotion");

define("_AM_OLEDRION_ADD_ATTRIBUTE","Ajouter un attribut");
define("_AM_OLEDRION_EDIT_ATTRIBUTE","Editer un attribut");

define("_AM_OLEDRION_ERROR_1","Erreur, pas d'identifiant spécifié");
define("_AM_OLEDRION_ERROR_2","Erreur, impossible de supprimer cette TVA, elle est utilisée par des produits");
define("_AM_OLEDRION_ERROR_3","Erreur pendant le téléchargement du fichier ");
define("_AM_OLEDRION_ERROR_4","Erreur, impossible de supprimer cette catégorie, elle est utilisée par des produits");
define("_AM_OLEDRION_ERROR_5","Erreur, impossible de supprimer ce fabricant car  il est utilisée par des produits");
define("_AM_OLEDRION_ERROR_6","Erreur, impossible de supprimer ce vendeur, il est utilisé par un ou plusieurs produits");
define("_AM_OLEDRION_ERROR_7","Erreur, impossible de créer le fichier d'export");
define("_AM_OLEDRION_ERROR_8","Erreur, veuillez créer au moins une catégorie avant de créer un produit");
define("_AM_OLEDRION_ERROR_9","Erreur, veuillez créer au moins une TVA avant de créer un produit");
define("_AM_OLEDRION_ERROR_10","Erreur, catégorie introuvable");
define("_AM_OLEDRION_ERROR_11","Erreur, format d'export inconnu");
define("_AM_OLEDRION_ERROR_12","Erreur, action inconnue");
define("_AM_OLEDRION_NOT_FOUND","Erreur, élément introuvable");
define("_AM_OLEDRION_CONF_DEL_CATEG","Voulez-vous vraiment supprimer cette catégorie et ses sous-catégories ?<br />%s");

define("_AM_OLEDRION_MODIFY","Modifier");
define("_AM_OLEDRION_ADD","Ajouter");

define("_AM_OLEDRION_PARENT_CATEG","Catégorie mère");
define("_AM_OLEDRION_CURRENT_PICTURE","Image courante");
define("_AM_OLEDRION_CURRENT_FILE","Fichier courant");
define("_AM_OLEDRION_PICTURE","Image");
define("_AM_OLEDRION_DESCRIPTION","Description");

define("_AM_OLEDRION_ALL","Tous");
define("_AM_OLEDRION_LIMIT_TO","Filtre");
define("_AM_OLEDRION_FILTER","Filtrer");
define("_AM_OLEDRION_INDEX_PAGE","Page d'index");
define("_AM_OLEDRION_RELATED_HELP","Attention, à ne saisir qu'après avoir saisi tous les produits");
define("_AM_OLEDRION_SUBDATE_HELP","Entrer la date au format AAAA-MM-JJ");
define("_AM_OLEDRION_IMAGE1_HELP","Image courante");
define("_AM_OLEDRION_IMAGE2_HELP","Image courante de la miniature");
define("_AM_OLEDRION_IMAGE1_CHANGE","Modifier l'image du produit");
define("_AM_OLEDRION_IMAGE2_CHANGE","Modifier l'image de la miniature");
define("_AM_OLEDRION_ATTACHED_HLP","");
define("_AM_OLEDRION_CATEG_HLP","Catégorie du produit");
define("_AM_OLEDRION_CATEG_TITLE","Titre de la catégorie");
define("_AM_OLEDRION_URL_HLP","Adresse internet du produit (optionnelle)");
define("_AM_OLEDRION_SELECT_HLP","Utilisez la touche Ctrl (ou la touche pomme sur Mac) pour choisir plusieurs éléments");
define("_AM_OLEDRION_STOCK_HLP","Envoi d'un email si le stock atteint le nombre de ...");
define("_AM_OLEDRION_DISCOUNT_HLP","Prix promotionel (temporaire HT)");
define("_AM_OLEDRION_DISCOUNT_DESCR","Description de la réduction (pour votre client)");
define("_AM_OLEDRION_DATE","Date");
define("_AM_OLEDRION_CLIENT","Client");
define("_AM_OLEDRION_TOTAL_SHIPP","Total / Frais de ports");
define('_AM_OLEDRION_NEWSLETTER_BETWEEN',"S&eacute;lectionner les produits publi&eacute;s entre le");
define('_AM_OLEDRION_EXPORT_AND',' et ');
define('_AM_OLEDRION_IN_CATEGORY','Dans les catégories suivantes');
define('_AM_OLEDRION_REMOVE_BR',"Convertir les balises html &lt;br /&gt; en un retour à la ligne ?");
define('_AM_OLEDRION_NEWSLETTER_HTML_TAGS',"Supprimer les balises html ?");
define('_AM_OLEDRION_NEWSLETTER_HEADER',"Entête");
define('_AM_OLEDRION_NEWSLETTER_FOOTER',"Pied de page");
define('_AM_OLEDRION_CSV_EXPORT',"Exporter les commandes dans le format suivant ");
define('_AM_OLEDRION_EXPORT_READY',"Votre fichier d'export est prêt pour téléchargement, cliquez sur ce lien pour l'obtenir");
define('_AM_OLEDRION_NEW_QUANTITY',"Nouvelle quantité");
define('_AM_OLEDRION_UPDATE_QUANTITIES',"Mettre à jour les quantités");
define('_AM_OLEDRION_NEWSLETTER_READY',"Votre newsletter est prête, cliquez sur ce lien pour la récupérer.");
define('_AM_OLEDRION_DUPLICATED',"Dupliqué");

// Added on 14/04/2007 17:11
define('_AM_OLEDRION_SORRY_NOREMOVE',"Désolé mais nous ne pouvons pas supprimer ce produit car il fait partie des commandes suivantes");
define('_AM_OLEDRION_SORRY_NOREMOVE2',"Désolé mais nous ne pouvons pas supprimer cet attribut car il fait partie des commandes suivantes");
define('_AM_OLEDRION_CONF_VALIDATE',"Confirmez vous la validation de cette commande ?");
define('_AM_OLEDRION_LAST_ORDERS',"Dernières commandes");
define('_AM_OLEDRION_LAST_VOTES',"Derniers votes");
define('_AM_OLEDRION_NOTE',"Note");

define('_AM_OLEDRION_RECOMMEND_IT',"Le recommander");
define('_AM_OLEDRION_DONOTRECOMMEND_IT',"Arrêter de le recommander");
define('_AM_OLEDRION_RECOMMENDED',"Recommandé");
define('_AM_OLEDRION_RECOMM_TEXT',"Texte à afficher sur la page<br />des produits recommandés");
define('_AM_OLEDRION_META_KEYWORDS',"Meta keywords");
define('_AM_OLEDRION_META_DESCRIPTION',"Meta description");
define('_AM_OLEDRION_META_PAGETITLE',"Titre de la page");

// Added in March & April 2008
define('_AM_OLEDRION_FILENAME',"Fichier");
define('_AM_OLEDRION_VISIBLE_FILENAME',"Nom de fichier visible de l'utilisateur");
define('_AM_OLEDRION_OFFLINEPAY_TEXT',"Texte à afficher à l'utilisateur lorsqu'il a décidé de ne pas payer en ligne ?");
define('_AM_OLEDRION_FOOTER',"Texte à afficher en pied de page de la catégorie");

define('_AM_OLEDRION_RESTRICT_TEXT',"Texte à afficher lorsque le passage des commandes est restreint aux utilisateurs enregistrés");
// Pour les réductions
define("_AM_OLEDRION_DISCOUNT_INFORMATION","Informations sur la réduction");
define("_AM_OLEDRION_DISCOUNT_TITLE","Titre de la réduction (utilisé en interne)");
define("_AM_OLEDRION_DISCOUNT_DESCRIPTION","Description de la réduction (pour les clients)");
define("_AM_OLEDRION_DISCOUNT_PERIOD","Pour la période");
define("_AM_OLEDRION_DISCOUNT_PERFROM","Du");
define("_AM_OLEDRION_DISCOUNT_PERTO","au");
define("_AM_OLEDRION_DISCOUNT_CATEGORY","Si la catégorie est");
define("_AM_OLEDRION_DISCOUNT_WHOWHAT","A qui ou selon quoi appliquer la réduction");
define("_AM_OLEDRION_DISCOUNT_XOOPS_GROUP","Si le Groupe Xoops est");
define("_AM_OLEDRION_DISCOUNT_MANUFACTURER","Fabricant");
define("_AM_OLEDRION_DISCOUNT_VENDOR","Vendeur");
define("_AM_OLEDRION_DISCOUNT_PRODUCT","Produit");
define("_AM_OLEDRION_DISCOUNT_REDUCTION_PRICE","Réduction sur le prix du produit ou le montant de la commande");
define("_AM_OLEDRION_DISCOUNT_REDUCTION_TYPE","Appliquer une réduction");
define("_AM_OLEDRION_DISCOUNT_QUANTITY_FROM","De");
define("_AM_OLEDRION_DISCOUNT_QUANTITY_TO","à");
define("_AM_OLEDRION_DISCOUNT_QUANTITY_INCLUDED","produits (inclus)");
define("_AM_OLEDRION_DISCOUNT_DEGRESSIV","Dégressive");
define("_AM_OLEDRION_DISCOUNT_AMOUNT_PERCENT","D'un montant ou pourcentage");
define("_AM_OLEDRION_DISCOUNT_PERCENT","Pourcent");
define("_AM_OLEDRION_DISCOUNT_ON","Sur");
define("_AM_OLEDRION_DISCOUNT_THE_PRODUCT","Le produit");
define("_AM_OLEDRION_DISCOUNT_THE_CART","Le panier");
define("_AM_OLEDRION_DISCOUNT_IN_WHICH_CASE","Dans quel cas ?");
define("_AM_OLEDRION_DISCOUNT_ALL_CASES","Dans tous les cas");
define("_AM_OLEDRION_DISCOUNT_FIRST_PURCHASE","Si c'est le premier achat du client sur le site");
define("_AM_OLEDRION_DISCOUNT_NEVER_BOUGHT","Si le produit n'a jamais été acheté");
define("_AM_OLEDRION_DISCOUNT_QUANTITY_IS","Si la quantité de produit est");
define("_AM_OLEDRION_DISCOUNT_SHIPPING_REDUCTIONS","Réductions sur les frais de port");
define("_AM_OLEDRION_DISCOUNT_SHIPPINGS_ARE","Les frais de port sont");
define("_AM_OLEDRION_DISCOUNT_FULL_PAY","A payer intégralement");
define("_AM_OLEDRION_DISCOUNT_SHIPPING_FREE","Totalement gratuits");
define("_AM_OLEDRION_DISCOUNT_ORDER_OVER","si le client commande plus de");
define("_AM_OLEDRION_DISCOUNT_REDUCED_FOR","Les frais de port sont réduits de");
define("_AM_OLEDRION_DISCOUNT_REDUCED_IF","si le montant de la commande est > à");

define("_AM_OLEDRION_DISCOUNT_HELP1","Il n'est pas nécessaire de spécifier<br />la catégorie et/ou le vendeur si<br />vous spécifiez un produit");
define("_AM_OLEDRION_DISCOUNT_HELP2","Si vous spécifiez un groupe Xoops alors la réduction ne s'appliquera que pour eux.");
define("_AM_OLEDRION_DISCOUNT_HELP3","Si vous spécifiez une catégorie alors la réduction ne s'appliquera qu'aux produits de cette catégorie.");
define("_AM_OLEDRION_DISCOUNT_HELP4","Si vous spécifiez un vendeur, seuls les produits de ce vendeur profiteront de cette réduction.");
define("_AM_OLEDRION_DISCOUNT_HELP5","Si vous spécifiez un vendeur ET une catégorie, seuls les produits de ce vendeur et de cette catégorie profiteront de cette réduction.");
define("_AM_OLEDRION_DISCOUNT_HELP6","Si vous spécifiez un produit, seul ce produit bénéficiera de la réduction.");
define("_AM_OLEDRION_INSTALLED_GATEWAYS","Passerelles de paiement installées");
define("_AM_OLEDRION_GATEWAYS_NAME","Nom");
define("_AM_OLEDRION_GATEWAYS_VERSION","Version");
define("_AM_OLEDRION_GATEWAYS_DESCRIPTION","Description");
define("_AM_OLEDRION_GATEWAYS_AUTHOR","Auteur");
define("_AM_OLEDRION_GATEWAYS_DATE","Date");
define("_AM_OLEDRION_GATEWAYS_USED","Utilisé");
define("_AM_OLEDRION_GATEWAYS_CREDITS","Crédits : ");
define("_AM_OLEDRION_GATEWAYS_PARAMETERS","Paramètres");
define("_AM_OLEDRION_GATEWAYS_UPDATE","Mettre à jour");
define("_AM_OLEDRION_GATEWAYS_ERROR1","Erreur, impossible de trouver le fichier de la classe de la passerelle de paiement");
define("_AM_OLEDRION_GATEWAYS_ERROR2","Erreur, impossible de trouver un fichier de traduction pour cette passerelle de paiement");
define("_AM_OLEDRION_GATEWAYS_ERROR3","Erreur, la classe Php de la passerelle de paiement est introuvable ou n'est pas nommée correctement");
define("_AM_OLEDRION_GATEWAYS_ERROR4","Erreur, la classe Php de la passerelle de paiement n'étend pas la classe abstraite");
define("_AM_OLEDRION_GATEWAYS_ERROR5","Erreur, passerelle de paiement inconnu");
define("_AM_OLEDRION_GATEWAYS_SEELOG","Voir le contenu du fichier log");

define("_AM_OLEDRION_DOWNLOAD_EXAMPLE","Par exemple :");
define("_AM_OLEDRION_ATTRIBUTES_LIST","Liste des attributs");
define("_AM_OLEDRION_TITLE","Titre");
define("_AM_OLEDRION_WEIGHT","Poids");
define("_AM_OLEDRION_TYPE","Type");
define("_AM_OLEDRION_TYPE_RADIO","Bouton radio");
define("_AM_OLEDRION_TYPE_CHECKBOX","Case à cocher");
define("_AM_OLEDRION_TYPE_LIST","Liste déroulante");
define("_AM_OLEDRION_ATTRIBUTE_NAME","Nom");
define("_AM_OLEDRION_ATTRIBUTE_REQUIRED","Requis");
define("_AM_OLEDRION_ATTRIBUTE_PRODUCT","Produit rattaché");
define("_AM_OLEDRION_ATTRIBUTE_OPTIONS","Options");
define("_AM_OLEDRION_ATTRIBUTE_ADD_OPTION","Ajouter une option");
define("_AM_OLEDRION_ATTRIBUTE_DEFAULT_VALUE","Valeur par défaut ?");
define("_AM_OLEDRION_ATTRIBUTE_TITLE","Titre");
define("_AM_OLEDRION_ATTRIBUTE_VALUE","Valeur");
define("_AM_OLEDRION_ATTRIBUTE_PRICE","Prix");
define("_AM_OLEDRION_ATTRIBUTE_STOCK","Stock");
define("_AM_OLEDRION_ATTRIBUTE_DEF_VALUE","ChangezMoi");
define("_AM_OLEDRION_ATTRIBUTE_DEF_AMOUNT", 1);
define("_AM_OLEDRION_ATTRIBUTE_MOVE_UP","Vers le haut");
define("_AM_OLEDRION_ATTRIBUTE_MOVE_DOWN","Vers le bas");
define("_AM_OLEDRION_ATTRIBUTE_DELIMITER","Délimiteur pour les boutons radios et cases à cocher");
define("_AM_OLEDRION_ATTRIBUTE_DELIMITER1","espace");
define("_AM_OLEDRION_ATTRIBUTE_DELIMITER2","retour à la ligne");
define("_AM_OLEDRION_ATTRIBUTE_VISIBLE_OPTIONS","Nombre d'options visibles");
define("_AM_OLEDRION_ATTRIBUTE_MULTI_OPTIONS","Retourne des valeurs multiples ?");
define("_AM_OLEDRION_ATTRIBUTE_PARAMETERS","Paramétrage de l'attribut");

define("_AM_OLEDRION_USER","Utilisateur");
define("_AM_OLEDRION_ANONYMOUS","Anonyme");

define('_AM_OLEDRION_CHECKOUT_TEXT1',"Texte à afficher sur le premier écran du passage de commande");
define('_AM_OLEDRION_CHECKOUT_TEXT2',"Texte à afficher sur le deuxième écran du passage de commande");

define('_AM_OLEDRION_SELECT_OTHER_P',"Choisir d'autres produits");
define('_AM_OLEDRION_REMOVE_SELECTED',"Supprimer les éléments sélectionnés");
define('_AM_OLEDRION_SEARCH',"Chercher");
define('_AM_OLEDRION_SELECT',"Sélectionner");
define('_AM_OLEDRION_CLOSE_WINDOW',"Fermer la fenêtre");
define('_AM_OLEDRION_REPLACE',"Remplacer");
define('_AM_OLEDRION_SELECT_PRODUCT',"Choisir un autre produit");
?>