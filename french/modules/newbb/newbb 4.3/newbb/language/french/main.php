<?php
// $Id: main.php 17 2007-11-18 14:22:36Z LupusC $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Erreur');
define('_MD_SELFORUM','Choisissez un forum');
define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Fichier joint');
define('_MD_ALLOWED_EXTENSIONS','Autoriser les extensions');
define('_MD_MAX_FILESIZE','Taille maximum des fichiers');
define('_MD_ATTACHMENT','Joindre un fichier');
define('_MD_FILESIZE','Taille');
define('_MD_HITS','Vues');
define('_MD_GROUPS','Groupes');
define('_MD_DEL_ONE','Supprimer uniquement ce message');
define('_MD_DEL_RELATED','Effacer ce message et tous les messages relatifs');
define('_MD_MARK_ALL_FORUMS','Marquer tous les forums comme');
define('_MD_MARK_ALL_TOPICS','Marquer tous les sujets comme');
define('_MD_MARK_UNREAD','non lus');
define('_MD_MARK_READ','lus');
define('_MD_ALL_FORUM_MARKED','Tous les forums sont marqués comme');
define('_MD_ALL_TOPIC_MARKED','Tous les sujets sont marqués comme');
define('_MD_BOARD_DISCLAIMER','Tableau d\'Avertissements');

//index.php
define('_MD_ADMINCP','Panneau de l\'Administrateur');
define('_MD_FORUM','Forum');
define('_MD_WELCOME','Bienvenue sur le forum du site %s');
define('_MD_TOPICS','Sujets');
define('_MD_POSTS','Messages');
define("_MD_DIGESTS", "Synthèses");
define('_MD_LASTPOST','Derniers messages');
define('_MD_MODERATOR','Modérateur');
define('_MD_NEWPOSTS','les nouveaux messages');
define('_MD_NONEWPOSTS','Pas de nouveau message');
define('_MD_PRIVATEFORUM','Forum inactif');
define('_MD_BY','par'); // Posted by
define('_MD_TOSTART','Pour commencer à lire les messages, choisissez le forum que vous voulez visiter dans la liste ci-dessous :');
define('_MD_TOTALTOPICSC','Total des sujets ');
define('_MD_TOTALPOSTSC','Total des messages ');
define('_MD_TOTALUSER','Total des utilisateurs ');
define('_MD_TIMENOW','Nous sommes le : %s');
define('_MD_USER_LASTVISIT', 'Votre dernière visite : %s');
define('_MD_USER_LASTPOST', 'Votre dernier message date de : %s');
define('_MD_USER_NOLASTPOST', 'Vous n\'avez pas encore rédigé de message');
define('_MD_USER_TOPICS', 'Vos rubriques : %s');
define('_MD_USER_POSTS', 'Messages : %s');
define('_MD_USER_DIGESTS', 'Synthèses : %s');
define('_MD_VIEW_NEWPOSTS', 'Voir les nouveaux messages');
define('_MD_ADVSEARCH','Recherche avancée');
define('_MD_POSTEDON','Date de publication : ');
define('_MD_SUBJECT','Sujet');
define('_MD_INACTIVEFORUM_NEWPOSTS','Forum inactif avec nouveaux messages');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Forum inactif sans nouveaux messages');
define('_MD_SUBFORUMS','Sous forum');
define('_MD_MAINFORUMOPT', 'Options Principales');
define("_MD_PENDING_POSTS_FOR_AUTH", "Messages en attente d'approbation :");
define('_MD_TODAYTOPICSC','Sujets aujourd\'hui : ');
define('_MD_TODAYPOSTSC','Messages aujourd\'hui : ');
define('_MD_TOTALDIGESTSC','Total des résumés : ');

//page_header.php
define('_MD_MODERATEDBY','Modéré par');
define('_MD_SEARCH','Recherche');
define('_MD_FORUMINDEX','Index du forum');
define('_MD_POSTNEW','Nouveau sujet');
define('_MD_REGTOPOST','S\'enregistrer pour participer');

//search.php
define('_MD_SEARCHALLFORUMS','Rechercher dans tous les forum');
define('_MD_FORUMC','Forum');
define('_MD_AUTHORC','Auteur :');
define('_MD_SORTBY','Classé par :');
define('_MD_DATE','Date');
define('_MD_TOPIC','Sujet');
define('_MD_POST2','Message');
define('_MD_USERNAME','Nom d\'utilisateur');
define('_MD_BODY','Corps');
define('_MD_SINCE','Depuis');

//viewforum.php
define('_MD_REPLIES','Réponses');
define('_MD_POSTER','Auteur');
define('_MD_VIEWS','Vues');
define('_MD_MORETHAN','Nouveaux messages [populaire]');
define('_MD_MORETHAN2','Pas de nouveaux messages [populaire]');
define('_MD_TOPICSHASATT','Sujet qui a des pièces jointes');
define('_MD_TOPICHASPOLL','Sujet à sondage');
define('_MD_TOPICLOCKED','Sujet verrouillé');
define('_MD_LEGEND','Légende');
define('_MD_NEXTPAGE','Page suivante');
define('_MD_SORTEDBY','Classé par');
define('_MD_TOPICTITLE','titre du sujet');
define('_MD_NUMBERREPLIES','nombre de réponses');
define('_MD_TOPICPOSTER','Créateur du sujet');
define('_MD_TOPICTIME','Date de publication');
define('_MD_LASTPOSTTIME','Date du dernier message');
define('_MD_ASCENDING','Ordre ascendant');
define('_MD_DESCENDING','Ordre descendant');
define('_MD_FROMLASTHOURS','Depuis %s heure(s)');
define('_MD_FROMLASTDAYS','Depuis %s jour(s)');
define('_MD_THELASTYEAR','Depuis l\'année dernière');
define('_MD_BEGINNING','Depuis le début');
define('_MD_SEARCHTHISFORUM', 'Rechercher dans ce forum');
define('_MD_TOPIC_SUBJECTC','Préfixe du sujet');
define('_MD_RATINGS','Cotes');
define("_MD_CAN_ACCESS", "Vous <strong>pouvez</strong> accéder à ce forum.<br />");
define("_MD_CANNOT_ACCESS", "Vous <strong>ne pouvez pas</strong> accéder à ce forum.<br />");
define("_MD_CAN_POST", "Vous <strong>pouvez</strong> débuter un nouveau sujet.<br />");
define("_MD_CANNOT_POST", "Vous <strong>ne pouvez pas</strong> débuter un nouveau sujet.<br />");
define("_MD_CAN_VIEW", "Vous <strong>pouvez</strong> consulter les sujets.<br />");
define("_MD_CANNOT_VIEW", "Vous <strong>ne pouvez pas</strong> consulter les sujets.<br />");
define("_MD_CAN_REPLY", "Vous <strong>pouvez</strong> répondre aux messages.<br />");
define("_MD_CANNOT_REPLY", "Vous <strong>ne pouvez pas</strong> répondre aux messages.<br />");
define("_MD_CAN_EDIT", "Vous <strong>pouvez</strong> modifier vos messages.<br />");
define("_MD_CANNOT_EDIT", "Vous <strong>ne pouvez pas</strong> modifier vos messages.<br />");
define("_MD_CAN_DELETE", "Vous <strong>pouvez</strong> supprimer vos messages.<br />");
define("_MD_CANNOT_DELETE", "Vous <strong>ne pouvez pas</strong> supprimer vos messages.<br />");
define("_MD_CAN_ADDPOLL", "Vous <strong>pouvez</strong> créer des sondages.<br />");
define("_MD_CANNOT_ADDPOLL", "Vous <strong>ne pouvez pas</strong> créer des sondages.<br />");
define("_MD_CAN_VOTE", "Vous <strong>pouvez</strong> participer aux sondages.<br />");
define("_MD_CANNOT_VOTE", "Vous <strong>ne pouvez pas</strong> participer aux sondages.<br />");
define("_MD_CAN_ATTACH", "Vous <strong>pouvez</strong> joindre des fichiers à vos messages.<br />");
define("_MD_CANNOT_ATTACH", "Vous <strong>ne pouvez pas</strong> joindre des fichiers à vos messages.<br />");
define("_MD_CAN_NOAPPROVE", "Vous <strong>pouvez</strong> publier vos messages sans approbation.<br />");
define("_MD_CANNOT_NOAPPROVE", "Vous <strong>ne pouvez pas</strong> publier vos messages sans approbation.<br />");
define("_MD_CAN_TYPE", "Vous <strong>pouvez</strong> utiliser ce type de sujet.<br />");
define("_MD_CANNOT_TYPE", "Vous <strong>ne pouvez pas</strong> utiliser ce type de sujet.<br />");
define("_MD_CAN_HTML", "Vous <strong>pouvez</strong> utiliser le HTML.<br />");
define("_MD_CANNOT_HTML", "Vous <strong>ne pouvez pas </strong> utiliser le HTML.<br />");
define("_MD_CAN_UPLOAD", "Vous <strong>pouvez</strong> télécharger.<br />");
define("_MD_CANNOT_UPLOAD", "Vous <strong>ne pouvez pas</strong> télécharger.<br />");
define("_MD_CAN_SIGNATURE", "Vous <strong>pouvez</strong> utiliser une signature dans vos messages.<br />");
define("_MD_CANNOT_SIGNATURE", "Vous <strong>ne pouvez pas</strong> utiliser une signature dans vos messages.<br />");
define("_MD_IMTOPICS", "Sujets importants");
define("_MD_NOTIMTOPICS", "Sujets du Forum");
define('_MD_FORUMOPTION', 'Options des forums');
define('_MD_VAUP','Voir tous les messages sans réponse');
define('_MD_VANP','Voir tous les nouveaux messages');
define('_MD_UNREPLIED','les messages sans réponse');
define('_MD_UNREAD','les sujets non lus');
define('_MD_ALL','tous les sujets');
define('_MD_ALLPOSTS','tous les messages');
define('_MD_VIEW','Voir');

//viewtopic.php
define('_MD_AUTHOR','Auteur');
define('_MD_LOCKTOPIC','Verrouiller cette rubrique');
define('_MD_UNLOCKTOPIC','Déverrouiller cette rubrique');
define('_MD_UNSTICKYTOPIC','Dégrafer ce sujet');
define('_MD_STICKYTOPIC','Agrafer ce sujet');
define('_MD_DIGESTTOPIC','Classer ce sujet');
define('_MD_UNDIGESTTOPIC','Ne plus classer ce sujet');
define('_MD_MERGETOPIC','Fusionner ce sujet');
define('_MD_MOVETOPIC','Déplacer ce sujet');
define('_MD_DELETETOPIC','Supprimer ce sujet');
define('_MD_TOP','Haut');
define('_MD_BOTTOM','Bas');
define('_MD_PREVTOPIC','Sujet précédent');
define('_MD_NEXTTOPIC','Sujet suivant');
define('_MD_GROUP','Groupe :');
define('_MD_QUICKREPLY','Réponse rapide');
define('_MD_POSTREPLY','Message rapide');
define('_MD_PRINTTOPICS','Imprimer la rubrique');
define('_MD_PRINT','Imprimer');
define('_MD_REPORT','Dénoncer');
define('_MD_PM','MP');
define('_MD_EMAIL','Envoyer un message électronique');
define('_MD_WWW','WWW');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK', 'URL de cette discussion');
define('_MD_ADDTOLIST','Ajoutez à votre liste de contact');
define('_MD_TOPICOPT', 'Options du sujet');
define('_MD_VIEWMODE', 'Mode de vues');
define('_MD_NEWEST', 'Les plus récent d\'abord');
define('_MD_OLDEST', 'Les plus ancien d\'abord');
define('_MD_FORUMSEARCH','Recherche du forum');
define('_MD_RATED','Note :');
define('_MD_RATE','Notes des discussions');
define('_MD_RATEDESC','Noter cette discussion');
define('_MD_RATING','Votez maintenant');
define('_MD_RATE1','Extra');
define('_MD_RATE2','Mauvais');
define('_MD_RATE3','Moyen');
define('_MD_RATE4','Bon');
define('_MD_RATE5','Excellent');
define('_MD_TOPICOPTION','Options des sujets');
define('_MD_KARMA_REQUIREMENT', 'Votre cote personnelle %s n\'atteint pas la cote nécessaire %s. <br /> Veuillez réessayer plus tard.');
define('_MD_REPLY_REQUIREMENT', 'Pour consulter ce message, vous devez au préalable vous identifier puis répondre');
define('_MD_TOPICOPTIONADMIN','Options administratives du sujet');
define('_MD_POLLOPTIONADMIN','Options administratives du sondage');
define('_MD_EDITPOLL','Editer ce sondage');
define('_MD_DELETEPOLL','Supprimer ce sondage');
define('_MD_RESTARTPOLL','Réinitialiser ce sondage');
define('_MD_ADDPOLL','Ajouter un sondage');
define('_MD_QUICKREPLY_EMPTY','Entrez un réponse rapide ici');
define('_MD_LEVEL','Niveau :');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');
define('_MD_BROWSING','Parcourir cette discussion :');
define('_MD_POSTTONEWS','Envoyer ce message comme un nouveau texte');
define('_MD_EXCEEDTHREADVIEW','Le nombre de messages dépasse le seuil pour cet affichage de discussion<br />Basculez en affichage plat');

//forumform.inc
define('_MD_QUOTE','Citation');
define('_MD_VIEW_REQUIRE','Exigences pour l\'affichage');
define('_MD_REQUIRE_KARMA','Cote');
define('_MD_REQUIRE_REPLY','Répondre');
define('_MD_REQUIRE_NULL','Aucune exigence');
define("_MD_SELECT_FORMTYPE", "Sélectionnez votre éditeur");
define("_MD_FORM_COMPACT", "Compact");
define("_MD_FORM_DHTML", "DHTML");

// ERROR messages
define('_MD_ERRORFORUM','ERREUR : pas de forum sélectionné !');
define('_MD_ERRORPOST','ERREUR : pas de message sélectionné !');
define('_MD_NORIGHTTOVIEW','Vous n\'avez pas les autorisations pour visualiser ce sujet');
define('_MD_NORIGHTTOPOST','Vous n\'avez pas les autorisations pour visualiser ce forum');
define('_MD_NORIGHTTOEDIT','Vous n\'avez pas les autorisations pour éditer ce forum');
define('_MD_NORIGHTTOREPLY','Vous n\'avez pas les autorisations pour participer à ce forum');
define('_MD_NORIGHTTOACCESS','Vous n\'avez pas les autorisations pour accéder à ce forum');
define('_MD_ERRORTOPIC','ERREUR : pas de sujet sélectionné !');
define('_MD_ERRORCONNECT','ERREUR : impossible de se connecter à la base de données du forum');
define('_MD_ERROREXIST','ERREUR : le forum que vous avez sélectionné, n\'existe pas. Revenez en arrière et tentez de nouveau');
define('_MD_ERROROCCURED','Une erreur s\'est produite');
define('_MD_COULDNOTQUERY','Impossible d\'interroger la base de données des forums.');
define('_MD_FORUMNOEXIST','Erreur: le forum ou le sujet sélectionné n\'existe pas. Revenez en arrière et tentez de nouveau.');
define('_MD_USERNOEXIST','Erreur : l\'utilisateur sélectionné n\'existe pas. Revenez en arrière et tentez de nouveau.');
define('_MD_COULDNOTREMOVE','Erreur - Impossible de supprimer les messages de la base de données !');
define('_MD_COULDNOTREMOVETXT','Erreur - Impossible de supprimer les textes envoyés !');
define('_MD_TIMEISUP','Vous avez atteins la date limite d\'édition des messages.');
define('_MD_TIMEISUPDEL','Vous avez atteins la date limite de suppression des messages.');

//reply.php
define('_MD_ON','sur'); //Posted on
define('_MD_USERWROTE','%s a écrit :'); // %s is username
define('_MD_RE','Re : ');

//post.php
define('_MD_EDITNOTALLOWED','Vous n\'êtes pas autorisé à modifier ce message.');
define('_MD_EDITEDBY','Modifié par : ');
define('_MD_ANONNOTALLOWED','Les utilisateurs non enregistrés ne sont pas autorisés à participer. <br />Enregsirez-vous pour participer au forum');
define('_MD_THANKSSUBMIT','Merci pour voter participation');
define('_MD_REPLYPOSTED','Une réponse à votre conversation a été postée.');
define('_MD_HELLO','Bonjour %s');
define('_MD_URRECEIVING','Vous recevez ce message car une réponse à votre message a été postée sur le forum %s.'); // %s is your site name
define('_MD_CLICKBELOW','Cliquez sur le lien ci-dessous pour voir la discussion :');
define('_MD_WAITFORAPPROVAL','Merci de votre participation. Voter message doit être au préalable approuvé avant sa publication.');
define('_MD_POSTING_LIMITED','Pourquoi ne pas faire une petite pause et revenir dans %d secondes.');

//forumform.inc
define('_MD_NAMEMAIL','Nom/Email');
define('_MD_LOGOUT','Se déconnecter');
define('_MD_REGISTER','S\'inscrire');
define('_MD_SUBJECTC','Objet :');
define('_MD_MESSAGEICON','Icône du message :');
define('_MD_MESSAGEC','Message:');
define('_MD_ALLOWEDHTML','HTML autorisé :');
define('_MD_OPTIONS','Options :');
define('_MD_POSTANONLY','Écrire anonymement');
define('_MD_DOSMILEY','Activer les émoticônes');
define('_MD_DOXCODE','Activer le code de Xoops');
define('_MD_DOBR','Activer le saut de ligne (désactivez-le si le HTML est activé)');
define('_MD_DOHTML','Activer les balises html');
define('_MD_NEWPOSTNOTIFY', 'Me prévenir des nouveaux messages dans cette discussion');
define('_MD_ATTACHSIG','Attacher une Signature');
define('_MD_POST','Message');
define('_MD_SUBMIT','Envoyer');
define('_MD_CANCELPOST','Annuler le message');
define('_MD_REMOVE','Retirer');
define('_MD_UPLOAD','Télédeverser');

// forumuserpost.php
define('_MD_ADD','Ajouter');
define('_MD_REPLY','repondre');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Voir le sujet');
define('_MD_RETURNTOTHEFORUM','Retourner au forum');
define('_MD_RETURNFORUMINDEX','Retourner à l\'accueil du forum');
define('_MD_ERROR_BACK','Erreur - Veuillez revenir en arrière et réessayer');
define('_MD_GOTONEWFORUM','Voir la rubrique mise à jour');
define('_MD_TOPICDELETE','Le sujet ta été supprimé');
define('_MD_TOPICMERGE','Le sujet a été fusionné');
define('_MD_TOPICMOVE','Le sujet a été déplacé');
define('_MD_TOPICLOCK','Le sujet a été verrouillé');
define('_MD_TOPICUNLOCK','Le sujet a été déverrouillé');
define('_MD_TOPICSTICKY','Le sujet a été agrafé');
define('_MD_TOPICUNSTICKY','Le sujet a été dégrafé');
define('_MD_TOPICDIGEST','Le sujet a été placé dans la synthèse.');
define('_MD_TOPICUNDIGEST','Le sujet a été déplacé de la synthèse.');
define('_MD_DELETE','Supprimer');
define('_MD_MOVE','Déplacer');
define('_MD_MERGE','Fusionner');
define('_MD_LOCK','Verrouiller');
define('_MD_UNLOCK','Déverrouiller');
define('_MD_STICKY','Agrafé');
define('_MD_UNSTICKY','Dégrafé');
define('_MD_DIGEST','la synthèse');
define('_MD_UNDIGEST','Déplacé de la synthèse');
define('_MD_DESC_DELETE','Lorsque vous aurez appuyé sur le bouton Supprimer en bas de ce formulaire, la rubrique que vous avez sélectionnée et tous ses messages connexes, seront <strong>définitivement</strong> supprimés.');
define('_MD_DESC_MOVE','Lorsque vous aurez appuyé sur le bouton Déplacer en bas de ce formulaire, le sujet que vous avez sélectionné, et tous ses messages connexes, seront déplacés sur le forum que vous avez sélectionné.');
define('_MD_DESC_MERGE','Lorsque vous aurez appuyé sur le bouton Fusionner en bas de ce formulaire, le sujet que vous avez sélectionné, et ses messages connexes, seront regroupés à la rubrique que vous avez sélectionnée.<br /><strong>l\'ID de rubrique de destination doit être plus petit que celui actuel</strong>.');
define('_MD_DESC_LOCK','Lorsque vous aurez appuyé sur le bouton de Verrouiller en bas de ce formulaire, le sujet que vous avez sélectionné sera verrouillé. Vous pourrez le déverrouiller plus tard si vous le souhaitez.');
define('_MD_DESC_UNLOCK','Lorsque vous aurez appuyé sur le bouton Déverrouiller en bas de ce formulaire, le sujet que vous avez sélectionné sera déverrouillé. Vous pourrez le verrouiller à nouveau plus tard si vous le souhaitez.');
define('_MD_DESC_STICKY','Lorsque vous aurez appuyé sur le bouton Agrafer en bas de ce formulaire, le sujet que vous avez sélectionné sera agrafé. Vous pourrez le dégrafer plus tard si vous le souhaitez.');
define('_MD_DESC_UNSTICKY','Lorsque vous aurez appuyé sur le bouton Dégrafer en bas de ce formulaire, le sujet que vous avez sélectionné sera dégrafé. Vous pourrez l\'agrafer à nouveau plus tard si vous le souhaitez.');
define('_MD_DESC_DIGEST','Lorsque vous aurez appuyé sur le bouton Classer en bas de ce formulaire, le sujet que vous avez sélectionné sera classé. Vous pourrez le déclasser à nouveau plus tard si vous le souhaitez.');
define('_MD_DESC_UNDIGEST','Lorsque vous aurez appuyé sur le bouton Déclasser en bas de ce formulaire, le sujet que vous avez sélectionné sera déclassé. Vous pourrez le classer à nouveau plus tard si vous le souhaitez.');
define('_MD_MERGETOPICTO','Fusionner le sujet à :');
define('_MD_MOVETOPICTO','Déplacer le sujet à :');
define('_MD_NOFORUMINDB','Pas de forum dans la base de données');

// delete.php
define('_MD_DELNOTALLOWED','Désolé, mais vous n\'êtes pas habilité à supprimer ce message');
define('_MD_AREUSUREDEL','Etes vous sûr de bien vouloir supprimer ce message et ses messages enfants');
define('_MD_POSTSDELETED','Le message sélectionné et ses messages enfants ont été supprimés');
define('_MD_POSTDELETED','Message sélectionné suupprimé');
define('_MD_POSTFIRSTWITHREPLYNODELETED','Le premier message ne peut être supprimé s\'il y a déjà eu des réponses <br />pour ce faire, supprimez le sujet entier.');

// definitions moved from global.
define('_MD_THREAD','Discussion');
define('_MD_FROM','De');
define('_MD_JOINED','Joint');
define('_MD_ONLINE','Connecté');
define('_MD_OFFLINE','Déconnecté');
define('_MD_FLAT', 'Plat');

// online.php
define('_MD_USERS_ONLINE', 'Utilisateurs en ligne');
define('_MD_ANONYMOUS_USERS', 'Utilisateurs non enregistré en ligne');
define('_MD_REGISTERED_USERS', 'Utilisateurs enregistrés en ligne');
define('_MD_BROWSING_FORUM','Utlisateurs parcourent ce forum ');
define('_MD_TOTAL_ONLINE','Total de %d utilisateurs en ligne.');
define('_MD_ADMINISTRATOR','Administrateur');
define('_MD_NO_SUCH_FILE','Le fichier n\'existe pas !');
//define('_MD_ERROR_UPATEATTACHMENT','Une Erreur s\'est produite lors de la mise à jour de la pièce jointe');

// ratethread.php
define("_MD_CANTVOTEOWN", "Vous ne peut pas voter pour le sujet que vous avez soumis.<br /> tous les votes sont enregistrés et examinés.");
define("_MD_VOTEONCE", "Veuillez ne pas voter pour le même sujet plus d'une fois.");
define("_MD_VOTEAPPRE", "Votre vote est apprécié.");
define("_MD_THANKYOU", "Nous vous remercions d'avoir pris le temps de voter ici pour %s"); // %s is your site name
define("_MD_VOTES", "Votez");
define("_MD_NOVOTERATE", "Vous n'avez pas voté pour cette rubrique");

// polls.php
define("_MD_POLL_DBUPDATED", "Base de données mise à jour avec succès !");
define("_MD_POLL_POLLCONF", "Configuration des sondages");
define("_MD_POLL_POLLSLIST", "Liste des sondages");
define("_MD_POLL_AUTHOR", "Auteur de ce sondage");
define("_MD_POLL_DISPLAYBLOCK", "L'afficher dans le bloc ?");
define("_MD_POLL_POLLQUESTION", "Question du sondage");
define("_MD_POLL_VOTERS", "Nombre total de votants");
define("_MD_POLL_VOTES", "Nombre total de votes");
define("_MD_POLL_EXPIRATION", "Expiration");
define("_MD_POLL_EXPIRED", "Expiré");
define("_MD_POLL_VIEWLOG", "Afficher le journal");
define("_MD_POLL_CREATNEWPOLL", "Créez un nouveau sondage");
define("_MD_POLL_POLLDESC", "Description du sondage");
define("_MD_POLL_DISPLAYORDER", "Ordre d'affichage");
define("_MD_POLL_ALLOWMULTI", "Autoriser les sélections multiples");
define("_MD_POLL_NOTIFY", "Prévenir l'auteur du sondage quand ce dernier aura expiré");
define("_MD_POLL_POLLOPTIONS", "Options");
define("_MD_POLL_EDITPOLL", "Modifier le sondage");
define("_MD_POLL_FORMAT", "Format: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME", "Heure actuelle : %s");
define("_MD_POLL_EXPIREDAT", "Expire à %s");
define("_MD_POLL_RESTART", "Réinitialiser le sondage");
define("_MD_POLL_ADDMORE", "Ajouter d'autres options");
define("_MD_POLL_RUSUREDEL", "Etes vous certain de vouloir supprimer ce sondage et ses messages");
define("_MD_POLL_RESTARTPOLL", "Redémarrez le sondage");
define("_MD_POLL_RESET", "Réinitialiser tous les journaux de ce sondage ?");
define("_MD_POLL_ADDPOLL", "Ajouter un sondage");
define("_MD_POLLMODULE_ERROR", "Le module xoopspoll n'est pas présent");

//report.php
define("_MD_REPORTED", "Merci pour ce rapport de message indésirable ! Un modérateur examinera votre dénonciation sous peu.");
define("_MD_REPORT_ERROR", "Une erreur est survenue lors de l'envoi du rapport.");
define("_MD_REPORT_TEXT", "Message du rapport :");
define("_MD_PDF", "Exporter le message en PDF");
define("_MD_PDF_PAGE", "Page %s");

//print.php
define("_MD_COMEFROM", "Ce message est de :");

//viewpost.php
define("_MD_VIEWALLPOSTS", "Tous les messages");
define("_MD_VIEWTOPIC", "Sujet");
define("_MD_VIEWFORUM", "Forum");
define("_MD_COMPACT", "Compact");
define("_MD_MENU_SELECT", "Sélection");
define("_MD_MENU_HOVER", "Survoler");
define("_MD_MENU_CLICK", "Cliquer");
define("_MD_WELCOME_SUBJECT", "%s a rejoint le forum");
define("_MD_WELCOME_MESSAGE", "Salut, %s vous a rejoint. Commençons...");
define("_MD_VIEWNEWPOSTS", "Voir les nouveaux messages");
define("_MD_INVALID_SUBMIT", "Envoi invalide. Vous avez dépassé les temps de la session. Veuillez le soumettre à nouveau ou faire une sauvegarde de votre message et connectez-vous à nouveau si nécessaire.");
define("_MD_ACCOUNT", "Compte");
define("_MD_NAME", "Nom");
define("_MD_PASSWORD", "Mot de passe");
define("_MD_LOGIN", "Connexion");
define("_MD_APPROVE", "Approuver");
define("_MD_RESTORE", "Restaurer");
define("_MD_SPLIT_ONE", "Séparer");
define("_MD_SPLIT_TREE", "Séparer tous les enfants");
define("_MD_SPLIT_ALL", "Tout séparer");
define("_MD_TYPE_ADMIN", "Mode Administrateur");
define("_MD_TYPE_VIEW", "Mode normal");
define("_MD_TYPE_PENDING", "En attente");
define("_MD_TYPE_DELETED", "Supprimé");
define("_MD_TYPE_SUSPEND", "Suspension");
define("_MD_DBUPDATED", "Base de données mise à jour avec succès !");
define("_MD_SUSPEND_SUBJECT", "L'utilisateur %s est suspendu pour %d jours");
define("_MD_SUSPEND_TEXT", "L'utilisateur %s est suspendu pour %d jours. Raison :<br />[quote]%s[/quote]<br /><br />Fin de la suspension : %s");
define("_MD_SUSPEND_UID", "ID de l'utilisateur");
define("_MD_SUSPEND_IP", "IP à suspendre (complète ou partielle)");
define("_MD_SUSPEND_DURATION", "Durée de la suspension (en jours)");
define("_MD_SUSPEND_DESC", "Raison de la suspension");
define("_MD_SUSPEND_LIST", "Liste des suspensions");
define("_MD_SUSPEND_START", "Début");
define("_MD_SUSPEND_EXPIRE", "Fin");
define("_MD_SUSPEND_SCOPE", "Champ d'application");
define("_MD_SUSPEND_MANAGEMENT", "Gestion de la modération");
define("_MD_SUSPEND_NOACCESS", "Vote ID ou votre IP a été suspendue");
define("_MD_NEWBB_TYPE", "Type de sujet");
define("_MD_NEWBB_SEENOTGUEST","<font color=\"red\"><b>Lien visibles uniquement pour les utilisateurs enregistrés</b></font>");
define("_MD_NEWBB_REPORTSUBJECT","Une contribution a été signalée");
define("_MD_NEWBB_GOTOLASTPOST","Aller au dernier message");
define("_MD_EDITEDMSG","Raison :");
define("_MD_DELEDEDMSG","Raison de la suppression<br /><small>(Si une raison est donnée, l'utilisateur recevra un message)</small>:");
define("_MD_DELEDEDMSG_SUBJECT","Suppression de votre article");
define("_MD_DELEDEDMSG_BODY","Salut %s,
votre message dans ce forum

%s
a été supprimé
Comme justification, j'ai pris les renseignements suivants :

%s

Meilleures salutations
%s
-------------------------
Veuillez ne pas répondre à ce message !
%s
%s");
define("_MD_FORUMHOME","Accueil");
define("_MD_NEWBB_SEEWAITREPORT","Il y a eu <font color=\"red\"> <b>%s</b> signalements parmis les contributions </font>");
define('NEWBB_PDF_SUBJECT','Titre : ');
define('NEWBB_PDF_TOPIC','Message : ');
define('NEWBB_PDF_AUTHOR','Auteur : ');
define('NEWBB_PDF_DATE','Date : ');
define('NEWBB_PDF_URL','Lien vers le message : ');
define('_NW_PAGE','Site : ');
define('_AM_NEWBB_NOTOPIC','Aucun message');
define('_MD_NORSS_DATA','Aucune donnée à afficher');
define('_MD_NEWBB_STATS','Statistiques');
define("_MD_POSTTIME","Posté le");

// 4.2
define("_MD_ADVERTISING_BLOCK","<br />Vous pouvez placer votre annonce ici !<br />Veuillez nous contacter, pour en savoir plus à ce sujet.");
define("_MD_ADVERTISING_USER","Publicité");
define('_MD_SHARE_FACEBOOK', "Facebook");
define('_MD_SHARE_TWITTER', "Twitter");
define('_MD_SHARE_GOOGLEPLUS', "Google Plus");
define('_MD_SHARE_LINKEDIN', "Linkedin");
define('_MD_SHARE_STUMBLEUPON', "StumbleUpon");
define('_MD_SHARE_FRIENDFEED', "FriendFeed");
define('_MD_SHARE_REDDIT', "Reddit");
define('_MD_SHARE_DELICIOUS', "Del.icio.us");
define('_MD_SHARE_DIGG', "Digg");
define('_MD_SHARE_TECHNORATI', "Technorati");
define('_MD_SHARE_MRWONG', "M. Wong");
//4.3
define("_MD_GO", "Ok");