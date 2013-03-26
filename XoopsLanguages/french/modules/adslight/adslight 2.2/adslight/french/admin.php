<?php
/*
-------------------------------------------------------------------------
                     ADSLIGHT 2 : Module for Xoops                           

        Redesigned and ameliorate By iluc user at www.frxoops.org
		Started with the Classifieds module and made MANY changes 
        Website : http://www.limonads.com
        Contact : adslight.translate@gmail.com
-------------------------------------------------------------------------
             Original credits below Version History                       
##########################################################################
#                    Classified Module for Xoops                         #
#  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com         #
#      Started with the MyAds module and made MANY changes               #
##########################################################################
 Original Author: Pascal Le Boustouller                                   
 Author Website : pascal.e-xoops@perso-search.com                         
 Licence Type   : GPL                                                     
------------------------------------------------------------------------- 
*/
define("_AM_ADSLIGHT_CONF","Configuration des annonces ");
define("_AM_ADSLIGHT_ADDON","Extensions (Plugins)");
define("_AM_ADSLIGHT_ANNDEL","Les annonces sélectionnées ont été supprimées");
define("_AM_ADSLIGHT_ADDCATPRINC","Ajouter une catégorie principale");
define("_AM_ADSLIGHT_CATNAME","Nom :");
define("_AM_ADSLIGHT_ADDSUBCAT","Ajouter une sous-catégorie");
define("_AM_ADSLIGHT_DELSUBCAT","Supprimer une sous-catégorie");
define("_AM_ADSLIGHT_MODIFSUBCAT","Modifier une sous-catégorie");
define("_AM_ADSLIGHT_ADD","Ajouter");
define("_AM_ADSLIGHT_CATDEL","La catégorie sélectionnée a été supprimée");
define("_AM_ADSLIGHT_OUI","Oui");
define("_AM_ADSLIGHT_NON","Non");
define("_AM_ADSLIGHT_SURDELCAT","ATTENTION : Êtes-vous sûr de vouloir supprimer cette catégorie ? Les sous-catégories et les annonces seront détruites elles aussi.");
define("_AM_ADSLIGHT_IN","Dans ");
define("_AM_ADSLIGHT_MODIF","Modifier");
define("_AM_ADSLIGHT_MODIFCAT","Modifier une catégorie");
define("_AM_ADSLIGHT_CAT","Catégorie :");
define("_AM_ADSLIGHT_SUBCAT","Sous-catégorie :");
define("_AM_ADSLIGHT_CONFMYA","Configuration des annonces ");
define("_AM_ADSLIGHT_CATADD","Catégorie ajoutée");
define("_AM_ADSLIGHT_SUBCATADD","Sous-catégorie ajoutée");
define("_AM_ADSLIGHT_ANNMOD","L'annonce a été modifiée");
define("_AM_ADSLIGHT_NOANNVAL","Il n'y a actuellement aucune annonce à approuver");
define("_AM_ADSLIGHT_NOMODACTIV","La modération n'est pas activée, pas d'annonces à approuver");
define("_AM_ADSLIGHT_MODANN","Modifier une annonce");
define("_AM_ADSLIGHT_ALLMODANN","(Toutes les annonces peuvent être modifiées par l'administrateur)");
// Message
define("_AM_ADSLIGHT_HELLO","Bonjour");
define("_AM_ADSLIGHT_ANNVALID","L'annonce a été approuvée");
define("_AM_ADSLIGHT_DEL","Supprimer");
define("_AM_ADSLIGHT_SAVMOD","Enregistrer les modifications");
define("_AM_ADSLIGHT_MODTYPE","Modifier le type d'annonces");
define("_AM_ADSLIGHT_ANNACCEPT","Votre annonce a été approuvée");
define("_AM_ADSLIGHT_CONSULTTO","S'il vous plaît, contactez :");
define("_AM_ADSLIGHT_THANK","Merci");
define("_AM_ADSLIGHT_TEAMOF","Équipe");
// End message
define("_AM_ADSLIGHT_RETURN","Retour");
define("_AM_ADSLIGHT_MODSUBCAT","Changer le nom de la sous-catégorie");
define("_AM_ADSLIGHT_MODCAT","Changer le nom de la catégorie principale");
define("_AM_ADSLIGHT_GO","Ok");
define("_AM_ADSLIGHT_SENDBY","Ajouté par :");
define("_AM_ADSLIGHT_EMAIL","Courriel :");
define("_AM_ADSLIGHT_TEL","Téléphone :");
define("_AM_ADSLIGHT_TOWN","Ville :");
define("_AM_ADSLIGHT_COUNTRY","Pays :");
define("_AM_ADSLIGHT_TITLE2","Titre :");
define("_AM_ADSLIGHT_TYPE","Type :");
define("_AM_ADSLIGHT_TYPE_USURE", "L'état d'usure :");
define("_AM_ADSLIGHT_PRICE2","Prix :");
define("_AM_ADSLIGHT_CAT2","Catégorie :");
define("_AM_ADSLIGHT_DESCRIPTION","Code « Google Adsence » ou code d'une bannière :<br />Format: width = 300 height = 250");
define("_AM_ADSLIGHT_THEREIS","Il y a");
define("_AM_ADSLIGHT_WAIT","Annonces en attente d'approbation");
define("_AM_ADSLIGHT_ADDTYPE","Ajouter un type d'annonce");
define("_AM_ADSLIGHT_ERRORTYPE","ERREUR : type");
define("_AM_ADSLIGHT_EXIST","Existe déjà !");
define("_AM_ADSLIGHT_ERRORCAT","ERREUR : Catégorie");
define("_AM_ADSLIGHT_ERRORSUBCAT","ERREUR : Sous-catégorie");
define("_AM_ADSLIGHT_TYPEMOD","Le type d'annonce a été modifié");
define("_AM_ADSLIGHT_TYPEDEL","Le type d'annonce a été supprimé");
define("_AM_ADSLIGHT_ADDTYPE2","Le type d'annonce a été ajouté");
define("_AM_ADSLIGHT_ACCESMYANN","Annonces");
define("_AM_ADSLIGHT_IMGCAT","Image :");
define("_AM_ADSLIGHT_REPIMGCAT","Répertoire d'images :");
define("_AM_ADSLIGHT_GESTCAT","Gestion des catégories");
//Condition of payment
define("_AM_ADSLIGHT_ADDPRICE","Ajouter une condition de paiement");
define("_AM_ADSLIGHT_MODPRICE","Modifier un type de prix");
define("_AM_ADSLIGHT_ADDPRICE2","Le type de prix a été ajouté");
define("_AM_ADSLIGHT_PRICEMOD","Le type de prix a été modifié");
define("_AM_ADSLIGHT_PRICEDEL","Le type de prix a été supprimé");
define("_AM_ADSLIGHT_ORDRE","Ordre :");
define("_AM_ADSLIGHT_ORDRECLASS","Catégorie de commande :");
define("_AM_ADSLIGHT_ORDREALPHA","Trier par ordre alphabétique");
define("_AM_ADSLIGHT_ORDREPERSO","Ordre personnalisé");
define("_AM_ADSLIGHT_BIGCAT","Catégorie principale");
define("_AM_ADSLIGHT_HELP1","<b>To add a category:</b> click on the image <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Add a category\"> alongside the category you want to add the category under.<p><b>To change or delete a category:</b> click on the name of the category");
define("_AM_ADSLIGHT_HELP2","<strong>Classification des Catégories : </strong>Les entiers entre crochets correspondent à l'ordre au sein de la catégorie supérieure ou de la catégorie principale. Des entiers négatifs  peuvent être utilisés : -1");
// fichier pref.php //
define("_AM_ADSLIGHT_CONFSAVE","Configuration enregistrée");
define("_AM_ADSLIGHT_ANNOCANPOST","Les utilisateurs anonymes peuvent envoyer des annonces :");
define("_AM_ADSLIGHT_PERPAGE","Annonces par page :");
define("_AM_ADSLIGHT_MONEY","Symbole de la devise :");
define("_AM_ADSLIGHT_NUMNEW","Nombre de nouvelles annonces :");
define("_AM_ADSLIGHT_MODERAT","Annonces modérées :");
define("_CAL_MAXIIMGS","Taille maximale de la photo :");
define("_AM_ADSLIGHT_TIMEANN","Durée de l'annonce :");
define("_AM_ADSLIGHT_INOCTET","En octets");
define("_AM_ADSLIGHT_INDAYS","En jours");
define("_AM_ADSLIGHT_TYPEBLOC","Type de bloc :");
define("_AM_ADSLIGHT_ANNRAND","Annonce aléatoire");
define("_AM_ADSLIGHT_LASTTEN","Les 10 dernières annonces");
define("_AM_ADSLIGHT_NEWTIME","Nouvelles annonces de :");
define("_AM_ADSLIGHT_DISPLPRICE","Affichage des prix :");
define("_AM_ADSLIGHT_DISPLPRICE2","Affichage des prix :");
define("_AM_ADSLIGHT_INTHISCAT","Dans cette catégorie");
define("_AM_ADSLIGHT_DISPLSUBCAT","Affichage des sous-catégories :");
define("_AM_ADSLIGHT_ONHOME","Sur la page d'accueil du module");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","Nombre de sous-catégories à afficher :");
define("_AM_ADSLIGHT_IF","Si ");
define("_AM_ADSLIGHT_ISAT","Est au");
define("_AM_ADSLIGHT_VIEWNEWCLASS","Afficher les nouvelles annonces :");
define("_AM_ADSLIGHT_PERMADDNG","Impossible d'ajouter %s permission à %s  pour le groupe %s");
define("_AM_ADSLIGHT_PERMADDOK","Ajout de %s permission pour %s  pour le groupe %s");
define("_AM_ADSLIGHT_PERMRESETNG","Impossible de réinitialiser les permissions du groupe pour le module %s");
define("_AM_ADSLIGHT_PERMADDNGP","Tous les articles parents doivent être sélectionnés. ");
define("_AM_ADSLIGHT_EXPIRE","Nombre de jours que l'annonce va durer.");
define("_AM_ADSLIGHT_DBUPDATED","La base de données a été mise à jour. ");
define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","Courriel");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Message privé (MP)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","Les deux, courriel ou MP");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Par téléphone uniquement");
define("_AM_ADSLIGHT_CONTACTBY","Contacter par :");
define("_AM_ADSLIGHT_PREMIUM","Annonce Premium :");
define("_AM_ADSLIGHT_OK","Accepter");
define("_AM_ADSLIGHT_CATSMOD","La catégorie a été mise à jour");
define("_AM_ADSLIGHT_ADDED_ON","Ajoutée le");
define("_AM_ADSLIGHT_NUMANN","Annonce N° :");
define("_AM_ADSLIGHT_ACTIVE","Actif");
define("_AM_ADSLIGHT_INACTIVE","Inactif");
define("_AM_ADSLIGHT_SOLD","Réservé");
define("_AM_ADSLIGHT_STATUS","Statut");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Mise à jour effectuée");
define("_AM_ADSLIGHT_UPDATEMODULE","<strong> Module de mise à jour </strong>");
define("_AM_ADSLIGHT_UPGRADEFAILED","Mise à jour échouée");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Mettre à jour");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Erreur d'accès");
define("_AM_ADSLIGHT_THANKS","Merci d'utiliser nos annonces classées");
define("_AM_ADSLIGHT_WEBMASTER","Webmestre");
define("_AM_ADSLIGHT_YOUR_AD","Votre annonce");
define("_AM_ADSLIGHT_AT","à");
define("_AM_ADSLIGHT_VEDIT_AD","Vous pouvez consulter ou modifier votre annonce ici");
define("_AM_ADSLIGHT_YOUR_AD_ON","Votre annonce sur");
define("_AM_ADSLIGHT_APPROVED","a été approuvée.");
define("_AM_ADSLIGHT_EXPIRED","A expiré et a été supprimée.");
define("_AM_ADSLIGHT_CHECKER","Dossier de vérification des permissions ");
define("_AM_ADSLIGHT_DIRPERMS","Passer le répertoire en permission d'écriture ! =&gt; ");
define("_AM_ADSLIGHT_PHOTO1","Nombre de photos :");
define("_AM_ADSLIGHT_SUBMITTER","Soumis par");
define("_AM_ADSLIGHT_NBR_PHOTO","Photo(s)");
define("_AM_ADSLIGHT_TITLE","Titre");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Date d'ajout");
define("_AM_ADSLIGHT_DESC","Description");
define("_AM_ADSLIGHT_FREECAT","Ce sera une catégorie libre");
define("_AM_ADSLIGHT_MODERATE_CAT","Modérer cette catégorie");
define("_AM_ADSLIGHT_VISIT_LINK","Vous pouvez consulter l'intégralité de l'annonce en cliquant sur le lien ci-dessous :");
define("_AM_ADSLIGHT_LISTING_NUMBER","Nombre de cotation ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW","Vous pouvez consulter la liste complète en cliquant sur le lien ci-dessous");
define("_AM_ADSLIGHT_NOREPLY","!!!  Ne répondez pas à ce courriel, vous ne recevrez pas de réponse.  !!!");
define("_AM_ADSLIGHT_ADDED_TO_CAT","Une nouvelle annonce a été ajoutée à la catégorie ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Vous avez souscrit un abonnement pour recevoir les notifications de ce genre.");
define("_AM_ADSLIGHT_ERROR_NOTIF","S'il s'agit d'une erreur ou si vous ne souhaitez pas recevoir de telles notifications, veuillez mettre à jour votre abonnement en cliquant sur le lien ci-dessous :");
define("_AM_ADSLIGHT_FOLLOW_LINK","Voici un lien vers la nouvelle annonce");
define("_AM_ADSLIGHT_CAPTCHA","Code de sécurité :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Modérer les sous-catégories de cette catégorie");
define("_AM_ADSLIGHT_DOCUMENTATION","Documentation");
define("_AM_ADSLIGHT_FEATURES","Fonctions");
define("_AM_ADSLIGHT_CLONE","Comment cloner");
define("_AM_ADSLIGHT_INCOMPLETE","Incomplet");
// Added by iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE","Ajouter un type d'usure");
define("_AM_ADSLIGHT_MODUSURE","Modifier un type d'usure");
define("_AM_ADSLIGHT_ADDUSURE2","Le type d'usure a été ajouté");
define("_AM_ADSLIGHT_USUREMOD","Le type d'usure a été modifié");
define("_AM_ADSLIGHT_USUREDEL","Le type d'usure a été supprimé");
//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Auteur");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Journal des changements");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Remerciements");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licence");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Informations sur le module");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Site de support");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Date de sortie");
define("_AM_ADSLIGHT_ABOUT_STATUS","Statut");
define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Personnes qui ont participé à l'amélioration du module");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Pseudo");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Site internet");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Version");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Présentation");
//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD","Can add" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC","Check the categories which allow you to access" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC","Select groups allowed to submit ads." ) ;
define("_AM_ADSLIGHT_GROUPPERM","Permissions de soumettre ");
define("_AM_ADSLIGHT_SUBMITFORM","Permissions de déposer une annonce");
define("_AM_ADSLIGHT_SUBMITFORM_DESC","Sélectionnez qui peut présenter des annonces");
define("_AM_ADSLIGHT_VIEWFORM","Permissions de voir les annonces");
define("_AM_ADSLIGHT_VIEWFORM_DESC","Sélectionnez les groupes qui peuvent voir les annonces");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC","Sélectionnez qui peut afficher des résumés");
define("_AM_ADSLIGHT_SUPPORT","Soutenez ce logiciel");
define("_AM_ADSLIGHT_OP","Lire mon avis");
define("_AM_ADSLIGHT_PREMIUM_DESC","Choisir les groupes qui peuvent sélectionner la durée de parution des annonces");
//Release Test
define("_AM_ADSLIGHT_RELEASEOK","Vous utilisez la dernière version du module.");
define("_AM_ADSLIGHT_RELEASEISNOTOK","Votre module n'est plus à jour, une nouvelle version est disponible.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD","Télécharger.");
//define("_AM_ADSLIGHT_NBR_PHOTO","Photo(s)");
//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<strong>Méta description :</strong><br />Pour un meilleur référencement, </strong>ajoutez ici une description précise de votre catégorie. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<strong>Méta mots-clés : </strong><br />Pour un meilleur référencement, </strong>ajoutez ici les mots-clés en rapport avec la catégorie. <br /><strong><font color=\"#ff3300\">Séparer les mots par des virgules</font></strong> (anglais, espagnol, français, ...).");
//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK","Le fichier xml pour la carte est inexistant, ou alors ne correspond pas à la carte sélectionnée dans les préférences.");
define("_AM_ADSLIGHT_XMLUPGRADE","Mettre à jour le fichier xml");
//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE","Liste des forums d'entraide");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS","Lien");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG","Langue");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC","Description");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE","Traduction");
////////////////////////////
//// Version 1.06 //////////
// ../admin/index.php
// Stat
define("_AM_ADSLIGHT_STAT_TITLE","Statistiques");
define("_AM_ADSLIGHT_STAT_NUM1","Annonces");
define("_AM_ADSLIGHT_STAT_NUM2","Catégories");
define("_AM_ADSLIGHT_STAT_NUM3","Utilisateurs");
define("_AM_ADSLIGHT_STAT_NUM4","Commentaires");
// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE","Options");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL"," Envoyer un courriel");
define("_AM_ADSLIGHT_USERMENU_COMMENT"," Commentaires");
define("_AM_ADSLIGHT_USERMENU_BAMMIER"," Bannières");
// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE","Catégories");
define("_AM_ADSLIGHT_CATMENU_CATEGORY"," Ajouter une catégorie");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT"," Gestion des catégories");
// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE","Annonces");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS"," Valider les annonces");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS"," Voir les annonces");
define("_AM_ADSLIGHT_ADS_MODIFADS"," Modifier une annonce");
// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE","Téléchargement");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS"," Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS"," Cartes");
// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE","Développement");
define("_AM_ADSLIGHT_DEVLLP_HACK"," Proposer un hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE"," Proposer une traduction");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION"," Proposer une correction");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH"," Proposer une carte (.swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM"," Forum");
// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE"," Faire un Don");
define("_AM_ADSLIGHT_DONATE","AdsLight est gratuit et le restera. <br />Vous pouvez, si vous le souhaitez,<br />faire un don afin de m'encourager à continuer.<br />");
////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE","Forum d'entraide AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL","http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=65");
define("_AM_ADSLIGHT_MENURSSFORUM_LINK1","http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=65");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM","Allez au Forum");
define("_AM_ADSLIGHT_MENURSSFORUM_LINK2","http://www.i-luc.fr/adslight/modules/profile/register.php");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT","Vous inscrire");
////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE","Actualités AdsLight");
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE","Annonces valides");
define("_AM_ADSLIGHT_NOANNVALADS","Il n'y a actuellement aucune annonce");
define("_AM_ADSLIGHT_USURE","État");
// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO",'<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/fr_FR/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
');
// AdsLight 2
// Block Admin New Annonces
define("_AM_ADSLIGHT_ADSMENU_NEW","Nouveau");
define("_AM_ADSLIGHT_ADSMENU_NEWTXT"," <b>AdsLight Version 2 :</b><br />
<br /><b>- Signets :</b> On peux maintenant activer les signets dans les annonces.<br />
<br /><b>- Modèles des annonces :</b> Le modèle des annonces a été amélioré.<br />
<br /><b>- Carte Google :</b> Ajout de la carte Google dans les annonces.<br />
<br /><b>- Flux RSS :</b> Le Flux RSS par catégories est disponible.<br />
<br /><b>- Menu :</b> Optimisation du menu. On peut le désactiver dans les préférences du modules.<br />
<br /><b>- Fichiers Langages :</b> Les fichiers de langues ont été optimisés pour gagner en temps d'affichage.<br />
<br /><b>- Référencement :</b> le module a été corrigé pour un meilleur référencement.<br />
<br /><b>- Hack Xpayment :</b> Le module peut être utilisé avec Xpayment. (Merci Simon Roberts)<br />
");
// Block Admin Plugin
define("_AM_ADSLIGHT_ADSMENU_PLUGIN","Liste des ajouts (Plugin)");
define("_AM_ADSLIGHT_SEND_PLUGIN","Envoyer un « Plugin »");
define("_AM_ADSLIGHT_SEND_TRANSLATION","Envoyer une traduction");