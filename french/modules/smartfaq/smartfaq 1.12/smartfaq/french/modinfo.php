<?php

/**
* $Id: modinfo.php 1304 2010-10-17 22:21:07Z kris_fr $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define('_MI_SF_MD_NAME', 'SmartFAQ');

// A brief description of this module
define('_MI_SF_MD_DESC', 'Syst&#232;me de gestion de Q&#38;R avanc&#233;e pour votre site XOOPS');

// Sub menus in main menu block
define('_MI_SF_SUB_SMNAME1', 'Proposer une Q&#38;R');
define('_MI_SF_SUB_SMNAME2', 'Soumettre une Question');
define('_MI_SF_SUB_SMNAME3', 'Questions Ouvertes');
define('_MI_SF_SUB_SMNAME4', 'Mod&#233;ration');

// Config options
define('_MI_SF_ALLOWSUBMIT', 'Propositions des utilisateurs :');
define('_MI_SF_ALLOWSUBMITDSC', 'Permettre aux utilisateurs de proposer une Q&#38;R sur votre site ?');

define("_MI_SF_ALLOWREQUEST", "Demandes d&#39;utilisateurs :");
define('_MI_SF_ALLOWREQUESTDSC', 'Permettre aux utilisateurs de demander une Q&#38;R sur votre site ?');

define("_MI_SF_NEWANSWER", "Permettre l&#39;envoie de nouvelles r&#233;ponses :");
define("_MI_SF_NEWANSWERDSC", "Choisissez &#39;Oui&#39; pour permettre aux utilisateurs de proposer de nouvelles r&#233;ponses pour des FAQ d&#233;j&#224; publi&#233;es.");

define('_MI_SF_ANONPOST', 'Permettre aux anonymes de poster des messages');
define('_MI_SF_ANONPOSTDSC', 'Permettre aux utilisateurs anonymes de proposer ou demander une nouvelle Q&#38;R.');

define('_MI_SF_DATEFORMAT', 'Format de la date :');
define("_MI_SF_DATEFORMATDSC", "Pour choisir de montrer un style de pr&#233;sentation, par exemple: &#39;d-M-Y H:i&#39; se traduit par &#39;30-Mar-2004 22:35&#39;");

define('_MI_SF_DISPLAY_COLLAPS', 'Afficher les barres r&#233;tractables ?');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Choisissez &#39;Oui&#39; pour afficher les barres r&#233;tractables dans les page index et cat&#233;gories du module.");

define("_MI_SF_DISPLAYTYPE", "Montrer les types de Q&#38;R :");
define('_MI_SF_DISPLAYTYPEDSC', 'Si Vue r&#233;sum&#233;e est s&#233;lectionn&#233;e, seule la question, la date et les clics de chaque Q&#38;R seront montr&#233;s dans la cat&#233;gorie choisie. Si Vue compl&#232;te est s&#233;lectionn&#233;e, chaque Q&#38;R sera montr&#233;e enti&#232;rement dans la cat&#233;gorie choisie.');
define('_MI_SF_DISPLAYTYPE_SUMMARY', 'Vue r&#233;sum&#233;e');
define('_MI_SF_DISPLAYTYPE_FULL', 'Vue compl&#232;te');

define('_MI_SF_DISPLAY_LAST_FAQ', "Afficher la colonne &#39;Derni&#232;re Q&#38;R&#39;");
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Choisissez &#39;Oui&#39; pour afficher une colonne &#39;Derni&#232;re Q&#38;R&#39; pour chacune des cat&#233;gories sur la page d&#39;index et des cat&#233;gories.");

define('_MI_SF_DISPLAY_LAST_FAQS', 'Afficher les derni&#232;res Q&#38;As ?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "S&#233;lectionnez &#39;OUI&#39; pour afficher les derni&#232;res Q&#38;R.");
define('_MI_SF_LAST_FAQ_SIZE', "Taille des &#39;derni&#232;res Q&#38;R&#39; :");
define('_MI_SF_LAST_FAQ_SIZEDSC', "Param&#232;trer la taille maximum des questions dans la colonne des derni&#232;res Q&#38;R.");

define('_MI_SF_QUESTION_SIZE', "Taille de la question :");
define('_MI_SF_QUESTION_SIZEDSC', "Param&#232;trer la taille maximum de la question en tant que titre dans le page d&#39;affichage unique de la Q&#38;R.");
define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Affichez les sous-cat&#233;gories');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "S&#233;lectionnez 'Oui' pour afficher les sous cat&#233;gories sur la page d&#39;index.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', 'Afficher la description des cat&#233;gories ?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "S&#233;lectionnez &#39;Oui&#39; pour afficher la description des cat&#233;gories sur la page d&#39;index.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Afficher la description des sous-cat&#233;gories ?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Choisissez &#39;Oui&#39; pour afficher la description des sous-cat&#233;gories sur la page d&#39;index et des cat&#233;gories.");

define('_MI_SF_ORDERBYDATE', 'Trier les Q&#38;R par date :');
define('_MI_SF_ORDERBYDATEDSC', "Si vous choisissez &#39;Oui&#39;, Les Q&#38;R contenues dans la Cat&#233;gorie seront ordonn&#233;es par date descendante, sinon, elles seront ordonn&#233;es par leur poids.");

define('_MI_SF_DISPLAY_DATE_COL', "Afficher la colonne &#39;Publi&#233; le&#39; ?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Lorsque &#39;Vue sommaire&#39; est s&#233;lectionn&#233; comme type d'affichage, choisissez &#39;Oui&#39; pour afficher la colonne &#39;Publi&#233; le&#39; dans le tableau des Q&#38;R sur les pages index et cat&#233;gories.");

define('_MI_SF_DISPLAY_HITS_COL', "Afficher la colonne &#39;Clics&#39; ?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Lorsque &#39;Vue sommaire&#39; est s&#233;lectionn&#233; comme type d&#39;affichage, choisissez &#39;Oui&#39; pour afficher la colonne &#39;Clics&#39; dans le tableau des Q&#38;R sur les pages index et cat&#233;gories.");

define('_MI_SF_USEIMAGENAVPAGE', 'Utilisez les images sur la page de navigation :');
define("_MI_SF_USEIMAGENAVPAGEDSC", "Si vous choisissez &#39;Oui&#39;, la page de navigation sera montr&#233;e avec une image, sinon, la page de navigation originale sera utilis&#233;e.");

define('_MI_SF_ALLOWCOMMENTS', 'Contr&#244;le des commentaires au niveau des Q&#38;R :');
define("_MI_SF_ALLOWCOMMENTSDSC", "Si vous choisissez &#39;Oui&#39;, vous verrez les commentaires uniquement sur les Q&#38;R ayant la case commentaires coch&#233;e. <br/><br/>Choisissez &#39;Non&#39; pour g&#233;rer les commentaires &#224; un niveau global (voir ci-dessous la balise &#39;R&#232;gles des Commentaires&#39;.");

define("_MI_SF_ALLOWADMINHITS", "Compter les lectures de l&#39;administrateur :");
define("_MI_SF_ALLOWADMINHITSDSC", "Ajouter les lectures de l&#39;administrateur dans les statistiques ?");

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Les Q&#38;R propos&#233;es sont automatiquement approuv&#233;es :');
define("_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC", "Approbation automatique des Q&#38;R propos&#233;es sans intervention de l&#39;administrateur.");

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Les demandes de Q&#38;R sont automatiquement approuv&#233;es :');
define("_MI_SF_AUTOAPPROVE_REQUEST_DSC", "Approbation automatique des Q&#38;R demand&#233;es sans intervention de l&#39;administrateur.");

define('_MI_SF_AUTOAPPROVE_ANS', 'Les r&#233;ponses sont automatiquement approuv&#233;es :');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Approbation automatique des r&#233;ponses pour les Q&#38;R sans r&#233;ponse.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto Approbation de nouvelles r&#233;ponses : ');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Auto approuver les r&#233;ponses soumises pour les Q&#38;R publi&#233;es.');

define('_MI_SF_LASTFAQSPERCAT', 'Maximum des derni&#232;res Q&#38;R par cat&#233;gorie :');
define('_MI_SF_LASTFAQSPERCATDSC', 'Nombre Maximum de Q&#38;R &#224; montrer dans la colonne infos de la cat&#233;gorie.');

define('_MI_SF_CATPERPAGE', 'Maximum de Cat&#233;gories par page (c&#244;t&#233; utilisateur) : ');
define('_MI_SF_CATPERPAGEDSC', 'Nombre Maximum de cat&#233;gories &#224; montrer par page c&#244;t&#233; utilisateur.');

define('_MI_SF_PERPAGE', 'Maximum de Q&#38;R par page (C&#244;t&#233; Admin) : ');
define("_MI_SF_PERPAGEDSC", "Nombre maximum de Q&#38;R &#224; montrer par page dans l&#39;administration des Q&#38;R.");

define('_MI_SF_PERPAGEINDEX', 'Maximum de Q&#38;R par page (C&#244;t&#233; utilisateur) : ');
define('_MI_SF_PERPAGEINDEXDSC', 'Nombre maximum de Q&#38;R &#224; montrer par page pour les visiteurs.');

define('_MI_SF_INDEXWELCOMEMSG', 'Index message de bienvenue : ');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Message de bienvenue &#224; montrer dans la page index du module.');
define("_MI_SF_INDEXWELCOMEMSGDEF", "Dans cet espace de votre site, vous trouverez les r&#233;ponses aux questions fr&#233;quemment pos&#233;es, ainsi que les r&#233;ponses &#224; &#39;Comment fais-je&#39; et les questions &#39;Le saviez-vous&#39;. Merci de nous faire part de vos commentaires sur ces Q&#38;R.");

define("_MI_SF_REQUESTINTROMSG", "Message d&#39;introduction des demandes : ");
define("_MI_SF_REQUESTINTROMSGDSC", "Message d&#39;introduction &#224; montrer en cas de demande de Q&#38;R sur un module.");
define("_MI_SF_REQUESTINTROMSGDEF", "Vous n&#39;avez pas trouv&#233; la r&#233;ponse &#224; votre question ? Pas de probl&#232;me! Remplissez simplement le formulaire suivant afin de nous faire parvenir votre question. Un administrateur du site verra et publiera cette nouvelle question dans la section des Questions Ouvertes afin que quelqu&#39;un puisse y r&#233;pondre!");

define('_MI_SF_OPENINTROMSG', 'Message d&#39;introduction des Questions Ouvertes : ');
define('_MI_SF_OPENINTROMSGDSC', 'Message d&#39;introduction &#224; montrer dans la page des Questions Ouvertes.');
define('_MI_SF_OPENINTROMSGDEF', 'Voici la liste des Questions Ouvertes. Ces derni&#232;res sont des Questions pos&#233;es par les utilisateurs du site ne disposant pas de r&#233;ponse. Vous pouvez cliquer sur une Question Ouverte pour y r&#233;pondre et les aider.');

define("_MI_SF_USEREALNAME", "Utiliser le nom r&#233;el de l&#39;utilisateur");
define("_MI_SF_USEREALNAMEDSC", "Quand le nom de l&#39;utilisateur est montr&#233;, utilise le nom r&#233;el de cet utilisateur s&#39;il a &#233;t&#233; param&#233;tr&#233;.");

define('_MI_SF_HELP_PATH_SELECT', "M&#233;thode d&#39;acc&#232;s &#224; la doc SmartFaq");
define('_MI_SF_HELP_PATH_SELECT_DSC', "S&#233;lectionnez la m&#233;thode que vous pr&#233;f&#233;rez concernant l&#39;acc&#232;s &#224; la documentation SmartFAQ. Si vous d&#233;cidez de t&#233;l&#233;charger le package comprennant les fichiers d&#39;aide pour les d&#233;poser dans &#39;modules/smartfaq/doc/&#39;, vous pouvez s&#233;lectionnez \"A l&#39;int&#233;rieur du module\". Sinon, vous pouvez acc&#233;der directement &#224; la documentation depuis l&#39;url \"docs.xoops.org\" en choisissant cette option dans le menu. Il est aussi possible de s&#233;lectionner \"R&#233;pertoire personnel\" et sp&#233;cifier par vous m&#234;me l&#39;url dans le champ ci-dessous.");

define('_MI_SF_HELP_PATH_CUSTOM', "Url de la doc &#39;SmartFAQ&#39;");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Si vous s&#233;lectionnez \"R&#233;pertoire personnel\" dans l&#39;option ci-dessus, merci de pr&#233;ciser l&#39;url o&#249; se trouve les fichiers d&#39;aide en respectant le format suivant : <strong>http://www.yoursite.com/doc</strong>");

define('_MI_SF_HELP_INSIDE', "A l&#39;int&#233;rieur du module");
define('_MI_SF_HELP_CUSTOM', "R&#233;pertoire personnel");

define('_MI_SF_SUPPORTTAGS', 'Supporte le marquage (Tag)');
define('_MI_SF_SUPPORTTAGS_DESC', 'Supporte le module Tag (2.3 ou supérieur)<br/><a href="http://sourceforge.net/projects/xoops/files/XOOPS%20Module%20Repository/XOOPS%20tag%202.30%20RC/">Téléchargez le Module Tag</a>');
	
define('_MI_SF_HTACCESS', 'SEO .htaccess activé');
define('_MI_SF_HTACCESS_DESC', 'Cela permet de SEO');

define('_MI_SF_BASEURL', 'URL de base pour le SEO');
define('_MI_SF_BASEURL_DESC', 'URL de base pour le SEO');

define('_MI_SF_ENDOFURL', 'Fin de l\'URL');
define('_MI_SF_ENDOFURL_DESC', 'Extension de fichier pour les fichiers HTML');

//define('_MI_SF_MODERATORSEDIT', 'Permettre aux modérateurs de modifier');
//define('_MI_SF_MODERATORSEDITDSC', 'Cette option permettra aux modérateurs modifier les questions et Q&amp;R dans les catégories pour lesquelles ils sont modérateurs. Par ailleurs, les modérateurs peuvent seulement approuver ou rejeter les questions et Q&amp;R.(Q&amp;R = Questions et réponses)');

// Names of admin menu items
define('_MI_SF_ADMENU1', 'En attente');
define('_MI_SF_ADMENU2', 'Cat&#233;gories');
define('_MI_SF_ADMENU3', 'Q&#38;R');
define('_MI_SF_ADMENU4', 'Questions ouvertes');
define('_MI_SF_ADMENU5', 'Permissions');
define('_MI_SF_ADMENU6', 'Blocs et Groupes');
define('_MI_SF_ADMENU7', 'Acc&#233;der au Module');

//Names of Blocks and Block information
define('_MI_SF_ARTSNEW', 'Liste des Q&#38;R r&#233;centes');
define('_MI_SF_ARTSRANDOM_DIDUNO', 'Le saviez-vous ?');
define('_MI_SF_ARTSRANDOM_FAQ', 'Question al&#233;atoire!');
define('_MI_SF_ARTSRANDOM_HOW', 'Comment fais-je !');
define('_MI_SF_ARTSCONTEXT', 'Q&#38;R Contextuel');
define('_MI_SF_RECENTFAQS', 'Q&#38;R R&#233;cente (D&#233;taill&#233;e)');
define('_MI_SF_RECENT_QUESTIONS', 'Questions ouvertes r&#233;centes');
define("_MI_SF_MOST_VIEWED", "Questions populaires");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Q&#38;R Globale');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; toutes les Q&#38;R.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Cat&#233;gorie de Q&#38;R');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; cette cat&#233;gorie courante.');

define('_MI_SF_FAQ_NOTIFY', 'FAQs');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; la Q&#38;R en cours.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Globale : Questions ouvertes');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; toutes les questions ouvertes');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Cat&#233;gorie de la Q&#38;R');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; cette cat&#233;gorie.');

define('_MI_SF_QUESTION_NOTIFY', 'Question ouverte');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Options de notification appliqu&#233;es &#224; la Question Ouverte courante.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Nouvelle cat&#233;gorie');
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle cat&#233;gorie est cr&#233;&#233;e.");
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle cat&#233;gorie est cr&#233;&#233;e.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle Cat&#233;gorie');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'Q&#38;R propos&#233;es');
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle Q&#38;R est propos&#233;e et en attente d&#39;approbation.");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC", "Recevez une notification quand une Q&#38;R est propos&#233;e et en attente d&#39;approbation.");
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle Q&#38;R propos&#233;e');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Nouvelle Q&#38;R publi&#233;e');
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle Q&#38;R est publi&#233;e.");
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Recevez une notification quand une Q&#38;R est publi&#233;e.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle Q&#38;R publi&#233;e');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nouvelle r&#233;ponse propos&#233;e');
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle r&#233;ponse est propos&#233;e pour n&#39;importe quelle Q&#38;R.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC", "Recevez une notification quand une nouvelle r&#233;ponse est propos&#233;e pour n&#39;importe quelle Q&#38;R.");
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle r&#233;ponse propos&#233;e');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nouvelle r&#233;ponse publi&#233;e');
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle r&#233;ponse est publi&#233;e pour n&#39;importe quelle Q&#38;R.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC", "Recevez une notification quand une nouvelle r&#233;ponse est publi&#233;e pour n&#39;importe quelle Q&#38;R.");
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle r&#233;ponse publi&#233;e');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'Q&#38;R propos&#233;');
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle Q&#38;R est propos&#233;e dans cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle Q&#38;R est propos&#233;e dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle Q&#38;R propos&#233;e dans cette cat&#233;gorie');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Nouvelle Q&#38;R publi&#233;e');
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle Q&#38;R est publi&#233;e dans cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle Q&#38;R est publi&#233;e dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: nouvelle Q&#38;R publi&#233;e dans cette cat&#233;gorie');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nouvelle r&#233;ponse propos&#233;e');
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle r&#233;ponse est propos&#233;e pour une Q&#38;R dans cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle r&#233;ponse est propos&#233;e pour une Q&#38;R dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle r&#233;ponse propos&#233;e');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nouvelle r&#233;ponse publi&#233;e');
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle r&#233;ponse est publi&#233;e pour une Q&#38;R dans cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle r&#233;ponse est publi&#233;e pour une Q&#38;R dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle r&#233;ponse publi&#233;e');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Q&#38;R rejet&#233;e');
define("_MI_SF_FAQ_REJECTED_NOTIFY_CAP", "M&#39;avertir si cette Q&#38;R est rejet&#233;e.");
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Recevez une notification si cette Q&#38;R est rejet&#233;e.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Q&#38;R rejet&#233;e');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Q&#38;R approuv&#233;e');
define("_MI_SF_FAQ_APPROVED_NOTIFY_CAP", "M&#39;avertir quand un nouveau est approuv&#233;e.");
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Recevez une notification quand une nouvelle Q&#38;R est approuv&#233;e.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Q&#38;R approuv&#233;e');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'R&#233;ponse approuv&#233;e');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', "M&#39;avertir quand cette r&#233;ponse est approuv&#233;e.");
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Recevez une notification quand cette r&#233;ponse est approuv&#233;e.');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : R&#233;ponse approuv&#233;e');

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'R&#233;ponse rejet&#233;e');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', "M&#39;avertir quand cette r&#233;ponse est rejet&#233;e.");
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Recevez une notification si cette r&#233;ponse est rejet&#233;e.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : R&#233;ponse Rejet&#233;e');

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Question propos&#233;e');
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP", "M&#39;avertir lorsque n&#39;importe quelle question a &#233;t&#233; propos&#233;e et est en attente d&#39;approbation.");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC", "Recevez une notification lorsqu&#39;une question a &#233;t&#233; propos&#233;e et est en attente d&#39;approbation.");
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvelle proposition de question');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Question publi&#233;e');
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP","M&#39;avertir quand une nouvelle question est publi&#233;e dans la section des Questions ouvertes.");
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC','Recevez une notification quand une nouvelle question est publi&#233;e dans la section des Questions ouvertes.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle question publi&#233;e');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'R&#233;ponse propos&#233;e');
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle r&#233;ponse est pos&#233;e &#224; n&#39;importe quelle Question ouverte.");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC", "Recevez une notification quand une nouvelle r&#233;ponse est pos&#233;e &#224; n&#39;importe quelle Question ouverte.");
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle r&#233;ponse pos&#233;e');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Question propos&#233;e');
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle question est pos&#233;e dans cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Recevez une notification quand une question est propos&#233;e dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle question propos&#233;e');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Question publi&#233;e');
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP", "M&#39;avertir quand une nouvelle question est publi&#233;e dans la cat&#233;gorie en cours.");
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Recevez une notification quand une question est publi&#233;e dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle question publi&#233;e');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'R&#233;ponse propos&#233;e');
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "M&#39;avertir quand une r&#233;ponse est propos&#233;e &#224; une question ouverte de cette cat&#233;gorie.");
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Recevez une notification quand une r&#233;ponse est propos&#233;e pour une question ouverte dans cette cat&#233;gorie.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Nouvelle r&#233;ponse propos&#233;e');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Question rejet&#233;e');
define("_MI_SF_QUESTION_REJECTED_NOTIFY_CAP", "M&#39;avertir si ma question est rejet&#233;e.");
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Recevez une notification si la question est rejet&#233;e.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique: Question rejet&#233;e');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Question approuv&#233;e');
define("_MI_SF_QUESTION_APPROVED_NOTIFY_CAP", "M&#39;avertir si ma question est approuv&#233;e.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_DSC", "Recevez une notification si la question est approuv&#233;e.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} Notification automatique: Question approuv&#233;e");

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'R&#233;ponse approuv&#233;e');
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP", "M&#39;avertir si ma r&#233;ponse est approuv&#233;e.");
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Recevez une notification si la r&#233;ponse est approuv&#233;e.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : R&#233;ponse approuv&#233;e');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'R&#233;ponse rejet&#233;e');
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP", "M&#39;avertir si ma r&#233;ponse est rejet&#233;e.");
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Recevez une notification si la r&#233;ponse est rejet&#233;e.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : R&#233;ponse rejet&#233;e');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "D&#233;velopeurs");
define('_MI_SF_DEVELOPER_LEAD', "D&#233;veloppeur principal");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Contributeur(s)");
define('_MI_SF_DEVELOPER_WEBSITE', "Site web");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Cr&#233;dits");
define('_MI_SF_DEMO_SITE', "Site D&#233;mo SmartFactory");
define('_MI_SF_MODULE_INFO', 'Informations sur le D&#233;veloppement du Module');
define('_MI_SF_MODULE_STATUS', 'Statut');
define('_MI_SF_MODULE_RELEASE_DATE', "Date de sortie");
define('_MI_SF_MODULE_DEMO', 'Site de d&#233;monstration');
define('_MI_SF_MODULE_SUPPORT', 'Site officiel de support');
define('_MI_SF_MODULE_BUG', 'Rapportez une erreur pour ce module');
define('_MI_SF_MODULE_FEATURE', 'Proposez de nouvelles options pour ce module');
define('_MI_SF_MODULE_DISCLAIMER', 'Avertissement');
define("_MI_SF_AUTHOR_WORD", "Le mot de l&#39;auteur");
define('_MI_SF_VERSION_HISTORY', "Historique des versions");

// Beta
define('_MI_SF_WARNING_BETA', "Ce module est tel quel, sans aucune garantie.
Ce module est en version BETA, ce qui signifie qu'il est toujours en développement actif. Cette version est conçue à
<strong>seul fin d'essais</strong> et nous vous <strong>strongly</strong> recommendons de ne pas l'utiliser sur un site
en production.");

// RC
define('_MI_SF_WARNING_RC', "Ce module est tel quel, sans aucune garantie. Ce module
est en version RC et peut être utilisé sur un site en production. Le module est toujours en cours de
développement actif et son utilisation est sous votre propre responsabilité, ce qui signifie que l'auteur n'est pas responsable.");


// Final
define('_MI_SF_WARNING_FINAL', "Ce module est tel quel, sans aucune garantie. Bien que cette
module n'est pas une version bêta, il est toujours en développement actif. Cette version peut être utilisée dans un site Web en ligne
ou un environnement de production, mais son utilisation est sous votre propre responsabilité, ce qui signifie que l'auteur
n'est pas responsable.");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @version         $Id: modinfo.php 1304 2010-10-17 22:21:07Z kris_fr $
**/
// Corrections et modifications de traduction par Cesag le 23 Mai 2012.
?>