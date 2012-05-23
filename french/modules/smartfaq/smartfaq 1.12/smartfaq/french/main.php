<?php

/**
* $Id: main.php 1304 2010-10-17 22:21:07Z kris_fr $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define('_MD_SF_ACTION', 'Action');
define('_MD_SF_ALL', 'Tous');
define('_MD_SF_ADMIN_PAGE', ' :: Section Administrative ::');
define('_MD_SF_ALLOWCOMMENTS', 'Permettre les commentaires?');
define('_MD_SF_ANSWERED', 'R&#233;pondu');
define('_MD_SF_ANSWERQUESTION', '[Proposez une r&#233;ponse!]');
define("_MD_SF_ANSWER_FAQ", "R&#233;ponse");
define("_MD_SF_ANSWER_FAQ_DSC", "R&#233;ponse d&#233;taill&#233;e &#224; la question ci-dessus.");
define('_MD_SF_APPROVE', 'Approuvez');
define('_MD_SF_ARTBODY', 'R&#233;ponse d&#233;taill&#233;e');
define('_MD_SF_ARTICLES', 'Q&#38;R.');
define('_MD_SF_BACK2CAT', 'Retournez &#224; la cat&#233;gorie');
define('_MD_SF_CATEGORY_SUMMARY', 'R&#233;sum&#233; de la cat&#233;gorie');
define('_MD_SF_CATEGORY_SUMMARY_INFO', 'Voici les informations en lien avec cette cat&#233;gorie.');
define('_MD_SF_CATEGORY_EDIT', 'Editez la cat&#233;gorie');
define('_MD_SF_CANCEL', 'Annuler');
define('_MD_SF_CLEAR', 'Effacer');
define('_MD_SF_COMMENTS', 'Commentaires');
define('_MD_SF_CONTEXTMODULELINK', 'Contextuellement reli&#233; &#224; ce module');
define("_MD_SF_CONTEXTMODULELINK_FAQ", "Contextuellement reli&#233; &#224; ce module");
define("_MD_SF_CONTEXTMODULELINK_FAQ_DSC", "s&#233;lectionnez le module auquel cette Q&#38;R sera li&#233;e. Si le bloc contextuel de Q&#38;R est visible sur ce module, la phrase &#39;Comment fais-je?&#39; de cette Q&#38;R sera affich&#233;e.");
define('_MD_SF_CONTEXTPAGE', 'Contextuellement reli&#233; &#224; cette URL');
define("_MD_SF_CONTEXTPAGEDEF", "Page contextuelle");
define("_MD_SF_CONTEXTPAGEDEF_DSC", "(Page pour laquelle cette Q&#38;R donne des explications)<strong>Exemple:</strong> modules/newbb");
define('_MD_SF_CREATE', 'Proposer la Q&#38;R');
define('_MD_SF_CATEGORY', 'Cat&#233;gorie');
define("_MD_SF_CATEGORY_FAQ", "Cat&#233;gorie");
define("_MD_SF_CATEGORY_FAQ_DSC", "S&#233;lectionnez une cat&#233;gorie pour cette Q&#38;R.");
define("_MD_SF_CATEGORY_QUESTION", "Cat&#233;gorie");
define("_MD_SF_CATEGORY_QUESTION_DSC", "S&#233;lectionnez une cat&#233;gorie<br />pour cette question.");
define('_MD_SF_DATE', 'Date');
define('_MD_SF_DATESUB', 'Publi&#233; le');
define('_MD_SF_DESCRIPTION', 'Description');
define('_MD_SF_DELETE', 'Effacer la Q&#38;R');
define('_MD_SF_DIDUNO', 'Le saviez-vous ?');
define("_MD_SF_DIDUNO_FAQ", "Le saviez-vous ?");
define("_MD_SF_DIDUNO_FAQ_DSC", "Sera utilis&#233; dans le bloc &#39;Le saviez-vous?&#39;");
define('_MD_SF_DOHTML', 'Permettre les balises HTML ');
define('_MD_SF_DOSMILEY', 'Permettre les emotic&#244;nes');
define('_MD_SF_DOXCODE', 'Permettre les codes XOOPS');
define('_MD_SF_EDIT', 'Editer la Q&#38;R');
define('_MD_SF_ERROR_ANSWER_NOT_SAVED', 'Une erreur est survenue.  La r&#233;ponse n&#39;a pas &#233;t&#233; sauvegard&#233;e dans la base de donn&#233;es.');
define('_MD_SF_ERROR_FAQ_NOT_SAVED', 'Une erreur est survenue.  La Q&#38;R n&#39;a pas &#233;t&#233; sauvegard&#233;e dans la base de donn&#233;es.');
define('_MD_SF_ERRORSAVINGDB', 'ERREUR.  La base de donn&#233;es n&#39;a PAS &#233;t&#233; mise &#224; jour.');
define("_MD_SF_EXACTURL", "URL exacte?");
define("_MD_SF_EXACTURL_DSC", "Si ce param&#232;tre est &#39;Oui&#39;, &#39;l&#39;URL Sp&#233;cifique&#39; ci-dessus devra correspondre exactement &#224; l&#39;URL courante pour que la Q&#38;R soit affich&#233;e. Si le Param&#232;tre est &#39;Non&#39;, la Q&#38;R sera affich&#233;e si cette &#39;URL Sp&#233;cifique&#39; correspond &#224; une partie de l'URL courante (modules/newbb/*.php)");
define('_MD_SF_FAQ_NEW_ANSWER_NEED_APPROBATION', 'Votre r&#233;ponse a &#233;t&#233; envoy&#233;e et sera v&#233;rifi&#233;e par un mod&#233;rateur.');
define('_MD_SF_FAQ_NEW_ANSWER_PUBLISHED', 'Votre r&#233;ponse a &#233;t&#233; envoy&#233;e et automatiquement publi&#233;e dans la section Q&#38;R, en remplacement de la r&#233;ponse originale.');
define('_MD_SF_FAQCOMEFROM', 'Cette Q&#38;R a &#233;t&#233; trouv&#233;e sur ');
define('_MD_SF_FINDFAQHERE', 'Trouvez cette Q&#38;R ici : ');
define('_MD_SF_GOODDAY', 'Bonjour ');
define('_MD_SF_HITS', 'Clics');
define('_MD_SF_HITSDETAIL', 'Cette Q&#38;R a &#233;t&#233; lue');
define('_MD_SF_HOME', 'Accueil');
define('_MD_SF_HOWDOI', 'Comment fais-je ...');
define("_MD_SF_HOWDOI_FAQ", "Comment fais-je ...");
define("_MD_SF_HOWDOI_FAQ_DSC", "Sera utilis&#233; dans le bloc contextuel de la Q&#38;R. Devrait &#234;tre une version courte de la question.");
define('_MD_SF_INDEX_CATEGORIES_SUMMARY', 'Liste des cat&#233;gories');
define('_MD_SF_INDEX_CATEGORIES_SUMMARY_INFO', 'Voici la liste des principales cat&#233;gories et de leurs sous-cat&#233;gories. Choisissez une cat&#233;gorie pour voir les Q&#38;R.');
define('_MD_SF_INDEX_CATEGORIES_QUESTIONS_SUMMARY_INFO', 'Voici la liste des cat&#233;gories principales et leurs sous-cat&#233;gories. Choisissez en une pour voir les questions ouvertes qu&#39;elle contient.');
define('_MD_SF_INDEX_FAQS', 'Derni&#232;res Q&#38;R publi&#233;es');
define('_MD_SF_INDEX_FAQS_INFO', 'Ici, la liste des derni&#232;res Q&#38;R publi&#233;es.');
define('_MD_SF_INDEX_QUESTIONS', 'Derni&#232;res questions publi&#233;es');
define('_MD_SF_INDEX_QUESTIONS_INFO', 'Voici la liste des derni&#232;res questions ouvertes publi&#233;es.');
define('_MD_SF_INTARTFOUND', 'Une FAQ int&#233;ressante trouv&#233;e sur %s');
define('_MD_SF_INTARTICLE', 'Jetez un oeil &#224; cette FAQ de %s');
define('_MD_SF_MAIL', 'Envoyer la Q&#38;R');
define('_MD_SF_MAINHEAD', 'Bienvenue dans la');
define('_MD_SF_MAININTRO', 'Dans cet espace du site, vous trouverez la r&#233;ponse aux questions fr&#233;quemment pos&#233;es. Chaque Q&#38;R est plac&#233;e dans une cat&#233;gorie pour faciliter la recherche. Ceci est la section &#224; partir de laquelle les Q&#38;R al&#233;atoires de la colonne de droite apparaissent. Si vous ne trouvez pas la question &#224; votre r&#233;ponse, n&#39;h&#233;sitez pas &#224; <a href=&#39;\".XOOPS_URL.\"/forms/askus/form.php&#39;>nous la poser!</a>');
define('_MD_SF_MAINNOSELECTCAT', 'Vous n&#39;avez pas s&#233;lectionn&#233; de cat&#233;gorie valide.');
define('_MD_SF_MAINNOFAQS', 'Il n&#39;y a pas de Q&#38;R dans cette cat&#233;gorie.');
define('_MD_SF_MODERATION_MAIN_HEAD', 'Section Mod&#233;ration de ');
define('_MD_SF_MODERATION_MAIN_INTRO', 'En tant que mod&#233;rateur, vous &#234;tes autoris&#233; &#224; approuver ou rejeter les demandes, Questions et Q&#38;R.');
define('_MD_SF_MODERATIONPAGE', 'Mod&#233;ration');
define('_MD_SF_MODERATION_PUBLISHED_NEW_ANSWER', 'Q&#38;R publi&#233;es avec de nouvelles r&#233;ponses propos&#233;es');
define('_MD_SF_NO', 'Non');
define("_AM_SF_NO_CAT_PERMISSIONS", "D&#233;sol&#233;, vous n&#39;avez pas les permissions suffisantes pour acc&#232;der &#224; cet espace.");
define("_AM_SF_NO_CAT_EXISTS", "D&#233;sol&#233;, il n&#39;y a encore aucune cat&#233;gorie d&#233;finie actuellement.<br />Appelez s&#39;il vous plait l&#39;administrateur du site pour lui en parler.");
define('_MD_SF_NO_OPEN_QUESTION', 'Actuellement, il n&#39;y a pas de Q&#38;R ouverte.');
define('_AM_SF_NO_TOP_PERMISSIONS', 'D&#233;sol&#233;, pas de Q&#38;R &#224; montrer.');
define('_MD_SF_NONE', 'Aucune');
define('_MD_SF_NOQUESTIONSYET', 'Il n&#39;y a pas de question &#224; montrer.');
define('_MD_SF_NOTIFY', 'Vous pr&#233;venir au moment de la publication?');
define('_MD_SF_NOFAQS_INFO', 'Il n&#39;y a pas de Q&#38;R &#224; montrer.');
define('_MD_SF_NOCATEGORYSELECTED', 'Vous n&#39;avez pas s&#233;lectionn&#233; de cat&#233;gorie valide.');
define('_MD_SF_NOFAQSELECTED', 'Vous n&#39;avez pas s&#233;lectionn&#233; de Q&#38;R valide.');
define('_MD_SF_OF', 'de');
define('_MD_SF_ON', 'le');
define('_MD_SF_OPEN_ANSWER_NEED_APPROBATION', 'Votre r&#233;ponse a &#233;t&#233; enregistr&#233;e. Un mod&#233;rateur va la v&#233;rifier et la publiera dans la section Q&#38;R.');
define('_MD_SF_OPEN_SECTION', 'Questions ouvertes');
define("_MD_SF_OPENED_INFO", "Il y a ici toutes les questions ouvertes de cette cat&#233;gorie. Si vous connaissez la r&#233;ponse &#224; une question, SVP, prenez la peine d&#39;y r&#233;pondre en cliquant sur le titre de la question.");
define('_MD_SF_OPENED_QUESTIONS', 'Questions ouvertes');
define('_MD_SF_OPTIONS', 'Options');
define("_MD_SF_ORIGINAL_ANSWER", "R&#233;ponse Originale");
define('_MD_SF_POSTED', 'Publi&#233;');
define('_MD_SF_POSTEDBY', 'Publi&#233; par');
define("_MD_SF_PREVIEW", "Pr&#233;visualiser");
define('_MD_SF_PRINT', 'Imprimer la Q&#38;R');
define('_MD_SF_PRINTERFRIENDLY', 'Imprimez cette Q&#38;R dans un format adapt&#233;');
define('_MD_SF_QNA_RECEIVED_NEED_APPROVAL', 'Votre Q&#38;R a &#233;t&#233; envoy&#233;e et sera publi&#233;e apr&#232;s approbation par un mod&#233;rateur.<br />Merci pour votre contribution!');
define('_MD_SF_QNA_RECEIVED_AND_PUBLISHED', 'Votre Q&#38;R a &#233;t&#233; envoy&#233;e et sera automatiquement publi&#233;e. Merci pour votre contribution!');
define('_MD_SF_QUESTION', 'Question');
define("_MD_SF_QUESTIONCOMEFROM", "Cette question a &#233;t&#233; trouv&#233;e sur");
define('_MD_SF_QUESTIONS', 'Questions');
define('_MD_SF_READS', 'Lectures');
define('_MD_SF_REQUEST', 'Demandez une nouvelle Q&#38;R');
define('_MD_SF_REQUEST_ERROR', 'Une erreur est survenue. Votre requ&#234;te n&#39;a pu &#234;tre envoy&#233;e');
define('_MD_SF_REQUEST_INTRO', 'Vous n&#39;avez pas trouv&#233; la r&#233;ponse &#224; votre question? Pas de probl&#232;me! Remplissez simplement ce formulaire afin d&#39;obtenir votre r&#233;ponse. L&#39;administrateur du site v&#233;rifiera votre demande et la publiera dans la section des questions ouvertes  afin que quelqu&#39;un puisse y r&#233;pondre.');
define('_MD_SF_REQUEST_RECEIVED_NEED_APPROVAL', 'Votre demande a &#233;t&#233; envoy&#233;e et re&#231;ue.');
define('_MD_SF_REQUEST_RECEIVED_AND_PUBLISHED', 'Votre demande a &#233;t&#233; automatiquement publi&#233;e dans la section des questions ouvertes. Merci pour votre contribution!');
define('_MD_SF_REQUESTED', 'Demand&#233;');
define("_MD_SF_REQUESTEDBY", "Demand&#233; par %s le %s");
define('_MD_SF_REQUESTEDANDANSWERED', 'Demand&#233; et r&#233;pondu par %s le %s');
define('_MD_SF_REQUESTEDBYANDANSWEREDBY', 'Demand&#233; par %s et r&#233;pondu par %s le %s');
define('_MD_SF_RETURN', 'Retour');
define('_MD_SF_RETURN2INDEX', 'Retour &#224; l&#39;index du module');
define('_MD_SF_SMARTFAQS', 'Q&#38;R');
define('_MD_SF_SPECIFIC_URL_SELECT', 'URL Sp&#233;cifique ...');
define('_MD_SF_SENDSTORY', 'Envoyez cette Q&#38;R &#224; un ami');
define('_MD_SF_SPECIFIC_URL', 'URL Sp&#233;cifique');
define("_MD_SF_SPECIFIC_URL_DSC", "Si vous avez param&#233;tr&#233; le &#39;lien contextuel vers ce module&#39; &#224; <i>\" . _MD_SF_SPECIFIC_URL_SELECT . \"</i>, merci de sp&#233;cifier l&#39;URL.<br /><strong>Exemple : </strong> modules/newbb");
define('_MD_SF_SUB_INTRO', "Remplissez ce formulaire pour envoyer votre Q&#38;R. L&#39;Administrateur du site la v&#233;rifiera et la publiera d&#232;s que possible. Merci &#224; l&#39;avance pour votre contribution.");
define('_MD_SF_SUB_SNEWNAME', 'Proposez une Q&#38;R');
define('_MD_SF_SUB_SMNAME', 'Proposez une Q&#38;R');
define('_MD_SF_SUBMIT_ERROR', 'Une erreur est survenue. Votre Q&#38;R n&#39;a pas &#233;t&#233; propos&#233;e.');
define('_MD_SF_SUBMITANSWER', 'Proposer la r&#233;ponse ');
define('_MD_SF_SUBMITANSWERTO', 'Proposez une r&#233;ponse &#224; %s');
define('_MD_SF_SUBMITANSWER_INTRO', "Remplissez ce formulaire pour proposer une r&#233;ponse &#224; cette question. L&#39;administrateur du site la v&#233;rifiera et la publiera d&#232;s que possible. Merci &#224; l&#39;avance pour votre contribution.");
define('_MD_SF_SUBMITANSWERBUTTON', 'Proposez une r&#233;ponse');
define('_MD_SF_SUBMITAPPROVED', 'La r&#233;ponse que vous avez propos&#233;e a &#233;t&#233; re&#231;ue. L&#39;option d&#39;approbation automatique &#233;tant activ&#233;e, la r&#233;ponse a &#233;t&#233; accept&#233;e et la Q&#38;R publi&#233;e.');
define("_MD_SF_SUBMIT_FROM_ADMIN", "Comme vous &#234;tes administrateur du module, la FAQ a &#233;t&#233; automatiquement publi&#233; avec toutes les permissions.");
define('_MD_SF_LAST_QUESTION', 'Derni&#232;re question publi&#233;e');
define('_MD_SF_LAST_SMARTFAQ', 'Derni&#232;res Q&#38;R publi&#233;es');
define('_MD_SF_SUBMITRECEIVED', 'Votre r&#233;ponse a &#233;t&#233; enregistr&#233;e. Nous allons la v&#233;rifier d&#232;s que possible.');
define('_MD_SF_SMARTFAQS_INFO', 'Ici, les Q&#38;R publi&#233;es dans cette cat&#233;gorie.');
define('_MD_SF_SUBMITART', 'Proposez une Q&#38;R');
define('_MD_SF_THE', 'le');
define('_MD_SF_TOTAL_SMARTFAQS', 'Nombre total de Q&#38;R');
define('_MD_SF_TOTAL_QUESTIONS', 'Nombre total de Questions');
define('_MD_SF_TIMES', 'fois');
define('_MD_SF_FAQ', 'Q&#38;R');
define('_MD_SF_UNKNOWNERROR', 'ERREUR.  Retour &#224; la page pr&#233;c&#233;dente !');
define('_MD_SF_WEIGHT', 'Poids');
define('_MD_SF_OPEN_WELCOME', 'Bienvenue dans la section des Questions ouvertes de %s');
define('_MD_SF_YES', 'Oui');

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @version         $Id: main.php 1304 2010-10-17 22:21:07Z kris_fr $
**/
?>