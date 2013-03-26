<?php
/*
-------------------------------------------------------------------------
                     ADSLIGHT 2: Module for Xoops                           

        Redesigned and ameliorate By iluc user at www.frxoops.org
		Started with the Classifieds module and made MANY changes 
        Website: http://www.limonads.com
        Contact: adslight.translate@gmail.com
-------------------------------------------------------------------------
             Original credits below Version History                       
##########################################################################
#                    Classified Module for Xoops                         #
#  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com         #
#      Started with the MyAds module and made MANY changes               #
##########################################################################
 Original Author: Pascal Le Boustouller                                   
 Author Website: pascal.e-xoops@perso-search.com                         
 Licence Type  : GPL                                                     
------------------------------------------------------------------------- 
*/
define("_ADSLIGHT_ADDON","Ajout");
define("_ADSLIGHT_ANNONCES","Petites annonces");
define("_ADSLIGHT_LOGOLINK","AdsLight, module Xoops de petites annonces");
define("_ADSLIGHT_MAIN","Accueil");
define("_ADSLIGHT_ADDFROM","Annonces gratuites de ");
define("_ADSLIGHT_NEWTOD","De nouvelles annonces ont été ajoutées dans cette catégorie aujourd'hui");
define("_ADSLIGHT_NEWTRED","De nouvelles annonces ont été ajoutées dans cette catégorie au cours des 3 derniers jours");
define("_ADSLIGHT_NEWWEEK","De nouvelles annonces ont été ajoutées dans cette catégorie au cours de la semaine dernière");
define("_ADSLIGHT_INTRO","<strong>Vous pouvez ajouter votre(vos) petite(s) annonce(s) gratuitement.<br /> Il suffit de cliquer sur la catégorie dans laquelle vous désirez l'ajouter, <br /> Vous verrez un lien (Ajouter une petite annonce dans cette catégorie) .</strong>");
define("_ADSLIGHT_PRICE","Prix");
define("_ADSLIGHT_DATE","Date");
define("_ADSLIGHT_TITLE","Titre");
define("_ADSLIGHT_CAT","Catégorie");
define("_ADSLIGHT_THE","Les");
define("_ADSLIGHT_LASTADD","Dernières petites annonces");
define("_ADSLIGHT_PREV","Annonces Précédentes");
define("_ADSLIGHT_NEXT","Annonces suivantes");
define("_ADSLIGHT_THEREIS","Il y a");
define("_ADSLIGHT_INTHISCAT","Annonces classées dans cette catégorie");
define("_ADSLIGHT_AVAILAB","Sous-catégories disponibles :");
define("_ADSLIGHT_ADMINCADRE","Administration");
define("_ADSLIGHT_WAIT","Petites annonces en attente d'être approuvées");
define("_ADSLIGHT_NO_CLA","Il n&acute;y a pas d&acute;annonce en attente d&acute;&ecirc;tre approuvée");
define("_ADSLIGHT_SEEIT","Afficher les annonces en attente");
define("_ADSLIGHT_LOCAL","Ville :");
define("_ADSLIGHT_LOCAL2","Localisation");
define("_ADSLIGHT_ANNFROM","Annonces de");
define("_ADSLIGHT_ADDED","Ajouté");
define("_ADSLIGHT_GORUB","Aller à");
define("_ADSLIGHT_DATE2","Ajoutée le");
define("_ADSLIGHT_SUPPRANN","Supprimez votre annonce");
define("_ADSLIGHT_MODIFANN","Modifiez votre annonce");
define("_ADSLIGHT_PHOTO","Photo");
define("_ADSLIGHT_VIEW","Vues");
define("_ADSLIGHT_CONTACT","Contact");
define("_ADSLIGHT_BYMAIL2","Courriel");
define("_ADSLIGHT_STOP2","Le délai pour l'inscription de votre petite annonce :");
define("_ADSLIGHT_STOP3","A pris fin, il a été supprimé");
define("_ADSLIGHT_VU2","Ce");
define("_ADSLIGHT_OTHER","Si vous souhaitez passer une autre annonce");
define("_ADSLIGHT_THANK","Merci pour d'utiliser notre service d'annonces classées.");
define("_ADSLIGHT_TEAM","Équipe");
define("_ADSLIGHT_ACTUALY","Il y a");
define("_ADSLIGHT_ADVERTISEMENTS","Petites annonces actives");
	//define("_ADSLIGHT_DISPO","Expire le");
define("_ADSLIGHT_MODADMIN","Modifier cette petite annonce (administrateur)");
define("_ADSLIGHT_AND","Et");
define("_ADSLIGHT_WAIT3","Petite(s) annonces(s) en attente d'approbation");
define("_ADSLIGHT_CREATBY","A été écrite par");
define("_ADSLIGHT_FOR","Pour");
define("_ADSLIGHT_OF","De");
define("_ADSLIGHT_VIEW2","Vues");
define("_ADSLIGHT_VIEWANN2","Consultez votre petite annonce");
define("_ADSLIGHT_ACCESADMIN","Annonce côté administration");
define("_ADSLIGHT_NOANNINCAT","Il n'y a pas d'annonce dans cette catégorie");
define("_ADSLIGHT_INCAT","dans");
define("_ADSLIGHT_CAT2","Catégories"); 
// addlisting.php //
define("_ADSLIGHT_DESC","Description");
define("_ADSLIGHT_ADDANNONCE2","Ajouter une petite annonce dans cette catégorie");
define("_ADSLIGHT_ADDANNONCE3","Ajouter une annonce");
define("_ADSLIGHT_ANNMODERATE","Votre annonce sera en attente d'approbation et une fois approuvée, durera");
define("_ADSLIGHT_NOBIZ","Publicité non autorisée");
define("_ADSLIGHT_REDIRECT_BIZ","Voir notre tarif commercial");
define("_ADSLIGHT_ANNNOMODERATE","Votre annonce commencera immédiatement et durera");
define("_ADSLIGHT_FORMEMBERS2","La publication des annonces est réservée aux membres <br />Inscrivez-vous ou connectez-vous si vous êtes déjà membre.");
define("_ADSLIGHT_OR","Ou");
define("_ADSLIGHT_DAY","Jours");
define("_ADSLIGHT_CAT3","Catégorie :");
define("_ADSLIGHT_TITLE2","Titre :");
define("_ADSLIGHT_TYPE","Type d'annonce :");
define('_ADSLIGHT_TYPE_USURE', "L'état d'usure :");
define("_ADSLIGHT_NOTYPE","Type n°");
define("_ADSLIGHT_CLASSIFIED_AD","Petites annonces :");
define("_ADSLIGHT_CHARMAX","(255 caractères max)");
define("_ADSLIGHT_IMG","Ajouter une image :");
define("_ADSLIGHT_IMG2","Ajouter une seconde image :");
define("_ADSLIGHT_IMG3","Ajouter une troisième image :");
define("_ADSLIGHT_PRICE2","Prix :");
define("_ADSLIGHT_EMAIL","E-mail:");
define("_ADSLIGHT_TEL","Téléphone :");
define("_ADSLIGHT_TOWN","Ville :");
define("_ADSLIGHT_COUNTRY","Pays :");
define("_ADSLIGHT_VALIDATE","Valider");
define("_ADSLIGHT_SELECTYPE","Sélection de type d'annonces classées :");
define("_ADSLIGHT_SELECTCAT","Sélectionnez une catégorie");
define("_ADSLIGHT_SELECTYPOTHER","Autre type");
define("_ADSLIGHT_SELECTCATOTHER","Autres catégories");
define("_ADSLIGHT_RETURN","Retour");
define("_ADSLIGHT_FILES","Les fichiers avec l'extension");
define("_ADSLIGHT_FILESTOP","Ne peuvent pas être transférées. Envoi arrêté");
define("_ADSLIGHT_YIMG","Votre image");
define("_ADSLIGHT_TOBIG","est trop grand.<p> Utilisez la fonction <strong>Page précédente</strong> pour revenir au formulaire d'ajout de fichier");
define("_ADSLIGHT_ADSADDED","Votre annonce a été ajoutée.");
define("_ADSLIGHT_PRINT","Imprimer cette annonce");
define("_ADSLIGHT_FRIENDSEND","Envoyer cette annonce à un ami");
define("_ADSLIGHT_IMGPISP","Photo disponible");
define("_ADSLIGHT_VALIDERORMSG","Il y a des erreurs qui empêchent que cette annonce soit enregistrée !");
define("_ADSLIGHT_VALIDTITLE","Le titre est nécessaire.");
define("_ADSLIGHT_VALIDTYPE","Le type est requis.");
define("_ADSLIGHT_VALIDCAT","La catégorie est obligatoire.");
define("_ADSLIGHT_VALIDANN","La description de l'entreprise est nécessaire.");
define("_ADSLIGHT_VALIDTOWN","La ville est nécessaire.");
define("_ADSLIGHT_VALIDEMAIL","Le courriel est obligatoire.");
define("_ADSLIGHT_VALIDSUBMITTER","Le nom est obligatoire.");
define("_ADSLIGHT_VALIDMSG","Veuillez corriger ces erreurs pour enregistrer votre annonce.");
// display-image.php //
define("_ADSLIGHT_CLOSEF","Fermez cette fenêtre");	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN","Cette annonce est dans la section des petites annonces sur le site");
define("_ADSLIGHT_SENDTO","<strong>Envoyer cette annonce à un ami</strong><br /><br />Vous pouvez envoyer l'annonce N°");
define("_ADSLIGHT_FRIEND","à un ami :");
define("_ADSLIGHT_NAME","Votre nom :");
define("_ADSLIGHT_MAIL","Votre courriel :");
define("_ADSLIGHT_NAMEFR","Nom de l'ami :");
define("_ADSLIGHT_MAILFR","Courriel de l'ami :");
define("_ADSLIGHT_SENDFR","Envoyer");
define("_ADSLIGHT_ANNSEND","Les petites annonces sélectionnées ont été envoyées");
define("_ADSLIGHT_SUBJET","Une petite annonce intéressante sur");
define("_ADSLIGHT_HELLO","Bonjour");
define("_ADSLIGHT_MESSAGE","estime que cette annonce pourrait vous intéresser et vous a envoyé ce message.");
define("_ADSLIGHT_INTERESS","D'autres Petites annonces peuvent être vues sur");
define("_ADSLIGHT_TEL2","Téléphone :");
define("_ADSLIGHT_BYMAIL","Courriel :");
define("_ADSLIGHT_DISPO","Expire le");
define("_ADSLIGHT_NOMAIL","Nous ne donnons pas aux utilisateurs les adresses électroniques des annonceurs.<br /> Pour les contacter par courriel, utilisez le formulaire de contact sur notre site.<br /> Vous pouvez consulter l'annonce à l'adresse internet suivante : ");
// modify.php //
define("_ADSLIGHT_OUI","Oui");
define("_ADSLIGHT_NON","Non");
define("_ADSLIGHT_SURDELANN","ATTENTION :<br /><br /> Êtes-vous sûr de vouloir supprimer cette annonce ?");
define("_RETURNANN","Retour à la liste d'annonces classées");
define("_ADSLIGHT_ANNDEL","La(es) petite(s) annonce(s) sélectionnée(s) a(ont) été supprimée(s)");
define("_ADSLIGHT_ANNMOD2","La(es) petite(s) annonce(s) sélectionnée(s) a(ont) été modifiée(s)");
define("_ADSLIGHT_NOMODIMG","Votre annonce comporte une photo <br /> (les photos ne peuvent pas être modifiées)");
define("_ADSLIGHT_DU","Ajoutée le");   
define("_ADSLIGHT_MODIFBEFORE","Les modifications apportées à cette petite annonce doivent être approuvées par l'administrateur, et elle sera mise en file d'attente pour approbation");
define("_ADSLIGHT_SENDBY","Ajoutée par :");
define("_ADSLIGHT_NUMANNN","Petite annonce n°:");
define("_ADSLIGHT_NEWPICT","Nouvelle image :");
define("_ADSLIGHT_ACTUALPICT","Actualiser l'image :");
define("_ADSLIGHT_DELPICT","Supprimer cette image"); 
// contact.php //
define("_ADSLIGHT_CONTACTAUTOR","Contacter l'auteur de cette petite annonce");
define("_ADSLIGHT_TEXTAUTO","Le message envoie automatiquement les trois premiers champs, votre nom, votre courriel et votre numéro de téléphone, vous n'avez pas besoin de les entrer de nouveau dans votre message.");
define("_ADSLIGHT_YOURNAME","Votre nom :");
define("_ADSLIGHT_YOUREMAIL","Votre courriel :");
define("_ADSLIGHT_YOURPHONE","Votre téléphone :");
define("_ADSLIGHT_YOURMESSAGE","Votre message :");
define("_ADSLIGHT_VALIDMESS","Il est nécessaire d'écrire un message.");
define("_ADSLIGHT_MESSEND","Votre message a été envoyé ...");
define("_ADSLIGHT_CLASSIFIED","Petites annonces");
define("_ADSLIGHT_FROM","Présenté par");
//contact form ip
define("_ADSLIGHT_YOUR_IP","Votre adresse IP est");
define("_ADSLIGHT_IP_LOGGED","et a été enregistrée ! Des mesures seront prises contre tout abus de ce système. ");
// message //
define("_ADSLIGHT_CONTACTAFTERANN","Répondre à vos Petites annonces");
define("_ADSLIGHT_MESSFROM","Message de");
define("_ADSLIGHT_FROMANNOF","Des petites annonces sur les");
define("_ADSLIGHT_REMINDANN","Vous avez une réponse à votre petite annonce sur");
define("_ADSLIGHT_STARTMESS","Vous trouverez ci-dessous la réponse à votre annonce.");
define("_ADSLIGHT_ENDMESS","Ne répondez pas à ce courriel, il n'atteindra pas l'expéditeur. Si vous souhaitez répondre à l'expéditeur, utilisez les coordonnées ci-dessus !");
define("_ADSLIGHT_CANJOINT","Vous pouvez répondre à");
define("_ADSLIGHT_TO","Pour le contacter :");
define("_ADSLIGHT_ORAT","Ou au");
define("_ADSLIGHT_NOMAIL2","Nous ne fournissons pas aux utilisateurs les adresses électroniques des annonceurs. Pour les contacter par courriel, veuillez utiliser le formulaire de contact sur notre site. Vous pouvez répondre à l'annonce à l'adresse suivante :");
define("_ADSLIGHT_MESSAGE_END","Fin du message.");
define("_ADSLIGHT_SECURE_SEND","Ce message a été envoyé par un formulaire de contact avec système sécurisé, l'expéditeur ne connaîtra pas votre adresse électronique.");
// message end //
define("_ADSLIGHT_HOW_LONG","Durée de parution");
define("_ADSLIGHT_WILL_LAST","Cette annonce va durer.");	
//for search on index page
define("_ADSLIGHT_SEARCHRESULTS","Petites annonces, résultats de la recherche");
define("_ADSLIGHT_SEARCH_LISTINGS","Recherche dans les annonces :");
define("_ADSLIGHT_ALL_WORDS","Tous les mots");
define("_ADSLIGHT_ANY_WORDS","Un des mots");
define("_ADSLIGHT_EXACT_MATCH","Expression exacte");
define("_ADSLIGHT_ONLYPIX","Afficher uniquement <br /> les annonces avec photo");
define("_ADSLIGHT_SEARCH","Recherche");
define("_ADSLIGHT_REQUIRED","* Requis");
define("_ADSLIGHT_MY_ADS","Toutes les Annonces de");
define("_ADSLIGHT_VIEW_MY_ADS","Les annonces de");
define("_ADSLIGHT_COMMENTS_HEAD","<h3>Commentaires à propos de ce vendeur :</h3>");
define("_ADSLIGHT_PREMIUM_DAY","<strong> Jours, si vous ne changez pas l'affichage du formulaire ci-dessous. </strong>");
define("_ADSLIGHT_PREMIUM_LONG_HEAD","<strong> Le lancement de votre annonce sera immédiat </strong>");
define("_ADSLIGHT_PREMIUM_MEMBER","<strong> Puisque vous êtes un membre utilisant l'offre PREMIUM, vous pouvez choisir la durée de votre annonce. <br /> <br /> Elle durera </strong>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD","<strong> Votre annonce sera en attente d'approbation </strong>");
// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED","Le mieux noté");
define("_ADSLIGHT_RATINGC","Note :");
define("_ADSLIGHT_ONEVOTE","1 vote");
define("_ADSLIGHT_NUMVOTES"," %s votes");
define("_ADSLIGHT_RATETHIS","Evaluer cet utilisateur");
define("_ADSLIGHT_VOTEAPPRE","Votre vote est apprécié.");
define("_ADSLIGHT_THANKURATE","Merci d'avoir pris le temps d'évaluer cet utilisateur à %s.");
define("_ADSLIGHT_VOTEFROMYOU","Les contributions d'utilisateurs tels que vous, aideront d'autres visiteurs à mieux choisir leur annonce .");
define("_ADSLIGHT_VOTEONCE","S'il vous plaît ne votez pas pour la même ressource plus d'une fois.");
define("_ADSLIGHT_RATINGSCALE","L'échelle est de 1 à 10, avec 1 étant le plus faible et 10 étant excellent.");
define("_ADSLIGHT_BEOBJECTIVE","S'il vous plaît soyez objectif, si tout le monde reçoit un 1 ou un 10, les notations ne seront pas très utiles.");
define("_ADSLIGHT_DONOTVOTE","Ne votez pas pour votre propre annonce.");
define("_ADSLIGHT_RATEIT","Votez !");
define("_ADSLIGHT_RATING","Evaluation");
define("_ADSLIGHT_VOTE","Vote");
define("_ADSLIGHT_NORATING","Pas de note sélectionnée.");
define("_ADSLIGHT_CANTVOTEOWN","Vous ne pouvez pas voter sur les annonces que vous avez soumises. <br /> Tous les votes sont identifiés et examinés.");
define("_ADSLIGHT_VOTEONCE2","Ne votez pour l'annonce sélectionnée qu'une seule fois. <br /> Tous les votes sont identifiés et examinés.");
define("_ADSLIGHT_TOTALVOTES","Évaluation des Petites Annonces (total des votes : %s)");
define("_ADSLIGHT_USERTOTALVOTES","Votes d'utilisateurs enregistrés (total des votes : %s)");
define("_ADSLIGHT_ANONTOTALVOTES","Votes d'utilisateurs anonymes (total des votes : %s)");
define("_ADSLIGHT_USERAVG","Notation moyenne des utilisateurs");
define("_ADSLIGHT_TOTALRATE","Total des votes");
define("_ADSLIGHT_NOREGVOTES","Pas de vote d'utilisateurs enregistrés");
define("_ADSLIGHT_NOUNREGVOTES","Pas de vote d'utilisateurs non enregistrés");
define("_ADSLIGHT_VOTEDELETED","Données du vote supprimées.");
define("_ADSLIGHT_USER_RATING","Évaluation utilisateur : ");
define("_ADSLIGHT_RATETHISUSER","Évaluer cet utilisateur");
define("_ADSLIGHT_THANKURATEUSER","Nous vous remercions d'avoir pris le temps d'évaluer cet utilisateur ici sur %s.");
define("_ADSLIGHT_RATETHISITEM","Evaluez cette annonce");
define("_ADSLIGHT_THANKURATEITEM","Merci de prendre le temps d'évaluer cette annonce ici, sur  %s.");
define("_ADSLIGHT_MY_PRICE","Prix");
define("_ADSLIGHT_MY_DATE","Date");
define("_ADSLIGHT_MY_TITLE","Titre");
define("_ADSLIGHT_MY_LOCAL2","Localisation");
define("_ADSLIGHT_MY_VIEW","Vues");
define("_ADSLIGHT_SORTBY","Trié par :");
define("_ADSLIGHT_CURSORTEDBY","Annonces actuellement triés par : %s");
define("_ADSLIGHT_POPULARITYLTOM","Popularité (les moins vues au plus vues)");
define("_ADSLIGHT_POPULARITYMTOL","Popularité (les plus vues aux moins vues)");
define("_ADSLIGHT_TITLEATOZ","Titre (A à Z)");
define("_ADSLIGHT_TITLEZTOA","Titre (Z à A)");
define("_ADSLIGHT_DATEOLD","Date (Du plus ancien au plus récent)");
define("_ADSLIGHT_DATENEW","Date (Du plus récent au plus ancien)");
define("_ADSLIGHT_RATINGLTOH","Evaluation (Score du plus bas au plus élevé)");
define("_ADSLIGHT_RATINGHTOL","Evaluation (Score du plus élevé au plus bas)");
define("_ADSLIGHT_PRICELTOH","Prix (moins élevé au plus élevé)");
define("_ADSLIGHT_PRICEHTOL","Prix (plus élevé au plus bas)");
define("_ADSLIGHT_POPULARITY","Popularité");
define("_ADSLIGHT_ACTUALPICT2","Actualiser la seconde image :");
define("_ADSLIGHT_ACTUALPICT3","Actualiser la troisième image :");
define("_ADSLIGHT_NEWPICT2","Nouvelle seconde image :");
define("_ADSLIGHT_NEWPICT3","Nouvelle troisième image  :");
define("_ADSLIGHT_SELECT_CONTACTBY","Choisissez une option");
define("_ADSLIGHT_CONTACTBY","Contactez-moi par :");
define("_ADSLIGHT_CONTACT_BY_EMAIL","Courriel");
define("_ADSLIGHT_CONTACT_BY_PM","Message privé (MP)");
define("_ADSLIGHT_CONTACT_BY_BOTH","Les deux, courriel ou MP");
define("_ADSLIGHT_CONTACT_BY_PHONE","Par téléphone uniquement");
define("_ADSLIGHT_ORBY","Ou par");
define("_ADSLIGHT_PREMYOUHAVE","Vous avez %s photo(s) dans votre annonce.");
define("_ADSLIGHT_YOUHAVE","Vous avez %s photo(s) dans votre annonce.");
define("_ADSLIGHT_YOUCANHAVE","En tant que membre Premium, vous pouvez avoir jusqu'à %s photo(s).");
define("_ADSLIGHT_BMCANHAVE","En tant que membre de base, vous pouvez avoir uniquement %s photos.");
define("_ADSLIGHT_UPGRADE_NOW","Mise à niveau vers membre Premium");
define("_ADSLIGHT_DELETE","Supprimer");
define("_ADSLIGHT_EDITDESC","Modifier la description");
define("_ADSLIGHT_TOKENEXPIRED","[Securité] Vous avez dépassé le temps alloué pour saisir votre annonce. <br /> ré-essayez à nouveau");
define("_ADSLIGHT_DESC_EDITED","La description de votre image a été modifiée avec succès");
define("_ADSLIGHT_DELETED","Image supprimée avec succès");
define("_ADSLIGHT_SUBMIT_PIC_TITLE","Soumettre une photo pour votre annonce");
define("_ADSLIGHT_SELECT_PHOTO","Sélectionner la photo");
define("_ADSLIGHT_CAPTION","Légende");
define("_ADSLIGHT_UPLOADPICTURE","Télécharger");
define("_ADSLIGHT_YOUCANUPLOAD","Vous ne pouvez transférer que des fichiers jpg, d'un poids maximum de %s Ko");
define("_ADSLIGHT_ALBUMTITLE"," Annonce de %s ");
define("_ADSLIGHT_WELCOME","Bienvenue dans l'album photo de votre annonce");
define("_ADSLIGHT_NOTHINGYET","Il n'y a pas de photo dans cet album");
define("_ADSLIGHT_NOCACHACA","Désolé, vous n'avez pas accès à ce service");
define("_ADSLIGHT_ADD_PHOTOS","Ajouter une photo");
define("_ADSLIGHT_SHOWCASE","Galerie");
define("_ADSLIGHT_EDIT_CAPTION","Modifier la légende");
define("_ADSLIGHT_EDIT","Modifier");
define("_ADSLIGHT_SUBMITTER","Nom :");
define("_ADSLIGHT_ADD_LISTING","Ajouter une annonce");
define("_ADSLIGHT_SUBMIT","Valider");
define("_ADSLIGHT_PRICETYPE","Type de prix :");
define("_ADSLIGHT_ADD_PHOTO_NOW","Ajouter une photo maintenant ?");
define("_ADSLIGHT_ACTIVE","Actif");
define("_ADSLIGHT_INACTIVE","Inactif");
define("_ADSLIGHT_SOLD","Réservé");
define("_ADSLIGHT_STATUS","Statut");
define("_ADSLIGHT_REPLIES","Réponses");
define("_ADSLIGHT_EXPIRES_ON","Expire le :");
define("_ADSLIGHT_ADDED_ON","Ajoutée le");
define("_ADSLIGHT_REPLY_MESSAGE","Message");
define("_ADSLIGHT_REPLIED_ON","Envoyé le :");
define("_ADSLIGHT_VIEWNOW"," Vues");
define("_ADSLIGHT_REPLY_TITLE","Messages reçus pour l'annonce :");
define("_ADSLIGHT_ALL_USER_LISTINGS","Toutes les annonces de ");
define("_ADSLIGHT_REPLY","Répondre -");
define("_ADSLIGHT_PAGES","Page -");
define("_ADSLIGHT_REALNAME","Nom");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS","Voir vos annonces");
define("_ADSLIGHT_REPLIED_BY","Message de :");
define("_ADSLIGHT_DELETE_REPLY","Supprimer cette réponse");
define("_ADSLIGHT_NO_REPLIES","Il n'y a pas de réponse");
define("_ADSLIGHT_THANKS","Merci d'utiliser notre service de petites annonces");
define("_ADSLIGHT_WEBMASTER","Webmestre");
define("_ADSLIGHT_YOUR_AD","Votre annonce");
define("_ADSLIGHT_AT","à");
define("_ADSLIGHT_VEDIT_AD","Voir ou modifier votre annonce ici");
define("_ADSLIGHT_ALMOST","Votre annonce est sur le point d'expirer");
define("_ADSLIGHT_EXPIRED","Votre annonce a expiré et a été supprimée.");
define("_ADSLIGHT_YOUR_AD_ON","Votre annonce sur");
define("_ADSLIGHT_VU","Votre annonce a été vue");
define("_ADSLIGHT_TIMES","fois.");
define("_ADSLIGHT_STOP","Votre annonce a expiré");
define("_ADSLIGHT_SOON","votre annonce va bientôt expirer.");
define("_ADSLIGHT_MUSTLOGIN","Vous devez être connecté pour<br />répondre à cette annonce.");
define("_ADSLIGHT_VIEW_AD","Voir votre annonce sur");
define("_ADSLIGHT_MORE_PHOTOS","Voir plus de photos");
define("_ADSLIGHT_CANCEL","Annuler");
//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT","Une nouvelle annonce a été ajoutée à la catégorie ");
define("_ADSLIGHT_RECIEVING_NOTIF","Vous avez demandé à recevoir des notifications de ce genre.");
define("_ADSLIGHT_ERROR_NOTIF","S'il s'agit d'une erreur ou si vous souhaitez ne plus recevoir ces notifications, veuillez mettre à jour votre abonnement en visitant le lien ci-dessous :");
define("_ADSLIGHT_FOLLOW_LINK","Voici un lien vers la nouvelle annonce");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW","Vous pouvez voir l'annonce complète sur le lien ci-dessous");
define("_ADSLIGHT_LISTING_NUMBER","Annonce N° : ");
define("_ADSLIGHT_NOREPLY","!!!  Ne répondez pas à ce courriel, vous ne recevrez pas de réponse.  !!!");
define("_ADSLIGHT_CAPTCHA","Code de sécurité :");
define("_ADSLIGHT_NEW_WAITING_SUBJECT","Nouvelle annonce ! En attente d'approbation.");
define("_ADSLIGHT_NEW_WAITING","Il y a une nouvelle annonce en attente d'être modérée.");
define("_ADSLIGHT_PLEASE_CHECK","Veuillez cliquer sur l'URL ci-dessous pour vérifier cette annonce.");
define("_ADSLIGHT_ADMIN","Administrateur");
define("_ADSLIGHT_NEWAD","La nouvelle annonce est ci-dessous.");
define("_ADSLIGHT_NEED_TO_LOGIN","Vous aurez besoin d'être connecté.");
////AJOUTE PAR ILUC////
define("_ADSLIGHT_PROFILE","Profile de : ");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","Vos annonces");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2","Soumettre");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","Recherche");
//viewads.php
define("_ADSLIGHT_ALERTEABUS","Signaler un abus");
define("_ADSLIGHT_CONTACT_SUBMITTER","Contacter");
define("_ADSLIGHT_SENDFRIENDS","Envoyer cette annonce");
//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO","<strong>Signaler cette annonce :</strong><br /><br />Annonce n° ");
define("_ADSLIGHT_REPORTANNSEND","Merci pour votre aide !<br />La petite annonce viens d'être signalée à un administrateur.");
define("_ADSLIGHT_REPORTSUBJET","[Alerte] Une annonce indésirable sur ");
define("_ADSLIGHT_REPORTMESSAGE","Estime que cette annonce est illégale et a tenu à vous le signaler.");
//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL","Pour ajouter une annonce<br />Merci de ");
define("_ADSLIGHT_ADD_LISTING_SUB","vous inscrire");
define("_ADSLIGHT_ADD_LISTING_BULLOK","Vous pouvez ajouter une ou des<br />annonces : ");
define("_ADSLIGHT_ADD_LISTING_SUBOK","Cliquez ici");
//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1","Modifier / supprimer vos annonces, ou les signaler aussi comme étant [réservées] ...");
define("_ADSLIGHT_ADD_TITLEMENU2","Ajouter une annonce, vous pouvez sinon naviguer dans les catégories.");
define("_ADSLIGHT_ADD_TITLEMENU4","Tous les conseils pratiques pour bien rédiger vos annonces.");
define("_ADSLIGHT_ADD_TITLEMENU5","Effectuer une recherche ciblée, ou une recherche dans votre région.");
define("_ADSLIGHT_ADD_TITLEMENU6","Lire et envoyer des messages privés.");
define("_ADSLIGHT_ADD_TITLEMENU7","Vous avez un ou des nouveaux messages.");
define("_ADSLIGHT_ADD_TITLEMENU8","Vous devez être connecté pour lire vos messages.");
define("_ADSLIGHT_ADD_TITLEMENU9","Vous devez être connecté pour voir votre profil.");
define("_ADSLIGHT_ADD_TITLEMENU10","Voir ou modifier ici votre profil.");
//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS","Vous pouvez ajouter une ou des<br />annonces dans cette catégorie<br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK","Pour pouvoir ajouter une ou des<br />annonces dans cette catégorie<br />Merci de ");
// Reserved
//define("_ADSLIGHT_RESERVED","Cette petite annonce est : <br /><font color=\"red\"><strong>[Réservée]</strong></font>");
// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE","Tous les bons conseils<br />pour bien rédiger vos annonces");
define("_ADSLIGHT_TIPSWRITE_TITLE","Les conseils pour bien rédiger votre annonce");
define("_ADSLIGHT_TIPSWRITE_TEXT","<strong>1. Une ou des photos</strong><br /><br />Le premier contact qu&rsquo;auront les visiteurs avec votre annonce, va être une ou des photos de l'objet que vous allez vendre.<br />Il est vivement conseillé de mettre une ou des photos de votre objet.<br />Une petite annonce avec photo est 7 fois plus consultée qu&rsquo;une annonce sans photo ! <br />Elle donne aussi une première idée de l&rsquo;état de votre objet.<br /><br /><br />- Un objet propre est toujours plus attrayante.<br />- Soignez la qualité de la photo. (Pas trop sombre)<br />- Cadrez l'objet de sorte qu&rsquo;il soit visible. <br />- évitez les photos &lsquo;floues&rsquo;<br /><br /><strong>2. Claire et détaillée</strong><br /><br />Après avoir soigneusement préparé les photos de l'objet que vous allez vendre. <br />Il vous faut maintenant rédiger l&rsquo;annonce.<br /><br />- évitez le langage &laquo; SMS &raquo;, il est impératif que l&rsquo;annonce soit facilement lisible.<br />Sans cela, vous perdez des chances de vendre votre pièce détachée.<br /><br />- Le titre en majuscules ainsi que toute l&rsquo;annonce écrite en majuscules, <br />est vivement déconseiller.<br /><br />- Les superlatifs sont à éviter.<br /><br />- écrivez tous les détails et faites en sorte que les visiteurs puissent au mieux identifier votre Objet.<br />Sans cela ils vous contacteront par mail ou téléphone pour vous demander. (Perte de temps pour vous et l&rsquo;acheteur) <br /><br />- évitez d&rsquo;écrire un roman, cela doit rester une annonce.<br /><br />- Le visiteur doit pouvoir obtenir un maximum d&rsquo;infos lors de la lecture de votre annonce, et cela rapidement. <br /><br />Plus une annonce est claire et précise, plus elle a de chance d'aboutir à une transaction.<br /><br /><strong>Et n'oubliez pas, une bonne affaire, <br />c'est lorsque l&rsquo;acheteur et le vendeur y trouvent leur bonheur!</strong>");
//version 1.053
// maps.php
define("_ADSLIGHT_MAPS_TITLE","Recherche par régions");
define("_ADSLIGHT_MAPS_TEXT","Sélectionnez une région sur la carte<br />pour voir les annonces d'une région.");
//viewads.php
define("_ADSLIGHT_NOCLAS","Il n'y a actuellement aucune annonce<br />dans cette catégorie ...");
//version 1.063
// viawcats.php
define("_ADSLIGHT_ADD_LISTING_NOTADDSINTHISCAT","Il n'y a pas d'annonces dans cette catégorie.<br />");
define("_ADSLIGHT_ADD_LISTING_NOTADDSSUBMIT","Ajouter une annonce");
//version 1.064
define("_ADSLIGHT_CATPLUS","<br />&#187;&nbsp;Plus ...");
/* AdsLight 2 */
define("_ADSLIGHT_RESERVED","Cette petite annonce est : <br /><font color=\"red\"><strong>[Réservée]</strong></font>");
define("_ADSLIGHT_RESERVEDMEMBER","<strong>Statut : </strong> <font color=\"red\"><strong>[Réservée]</strong></font>");
// Xpayment //
define("_MN_ADSLIGHT_PURCHASE","Achat immédiat");
define("_MN_ADSLIGHT_YOURNAME","Etablir la facture à :");
define("_MN_ADSLIGHT_YOUREMAIL","Courriel de facturation :");