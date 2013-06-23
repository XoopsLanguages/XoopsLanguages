<?php
/**
 * $Id :main.php v 1.00 21 June 2005 John N Exp $
 * Module :WF-links
 * Version :v1.0.3
 * Release Date :21 June 2005
 * Developer :John N
 * Team :WF-Projects
 * Licence :GNU
 */

define("_MD_WFL_NOLINK","Le lien n'existe pas!");
define("_MD_WFL_SUBCATLISTING","Liste des cat&eacute;gories");
define("_MD_WFL_ISADMINNOTICE","Administrateur : Il y a un probl&egrave;me avec cette image.");
define("_MD_WFL_THANKSFORINFO","Merci pour votre proposition. Vous serez averti une fois que votre requ&ecirc;te sera approuv&eacute;e par un administrateur.");
define("_MD_WFL_ISAPPROVED","Merci pour votre proposition. Votre requ&ecirc;te a &eacute;t&eacute; approuv&eacute;e et va maintenant appara&icirc;tre sur le site.");
define("_MD_WFL_THANKSFORHELP","Merci de nous aider &agrave; maintenir l'int&eacute;grit&eacute; de ce r&eacute;pertoire.");
define("_MD_WFL_FORSECURITY","Pour des raisons de s&eacute;curit&eacute;, votre pseudo et votre adresse IP seront temporairement enregistr&eacute;s.");
define("_MD_WFL_DESCRIPTION","Description");
define("_MD_WFL_SUBMITCATHEAD","Formulaire de soumission");
define("_MD_WFL_MAIN","Principal");
define("_MD_WFL_POPULAR","Populaire");
define("_MD_WFL_NEWTHISWEEK","Nouveau cette semaine");
define("_MD_WFL_UPTHISWEEK","Mis &agrave; jour cette semaine");
define("_MD_WFL_POPULARITYLTOM","Popularit&eacute; (Nb de clics croissant)");
define("_MD_WFL_POPULARITYMTOL","Popularit&eacute; (Nb de clics d&eacute;croissant)");
define("_MD_WFL_TITLEATOZ","Titre (A &agrave; Z)");
define("_MD_WFL_TITLEZTOA","Titre (Z &agrave; A)");
define("_MD_WFL_DATEOLD","Date (Liens anciens en premier)");
define("_MD_WFL_DATENEW","Date (Liens r&eacute;cents en premier)");
define("_MD_WFL_RATINGLTOH","Popularit&eacute; (Score croissant)");
define("_MD_WFL_RATINGHTOL","Popularit&eacute; (Score d&eacute;croissant)");
define("_MD_WFL_DESCRIPTIONC","Description :");
define("_MD_WFL_CATEGORYC","Cat&eacute;gories :");
define("_MD_WFL_VERSION","Version");
define("_MD_WFL_SUBMITDATE","Propos&eacute;");
define("_MD_WFL_LINKHITS","<b>Visit&eacute;s</b> :%s fois");
define("_MD_WFL_URLRATING","<b>ICRA</b> :%s");
define("_MD_WFL_PUBLISHERC","Auteur :");
define("_MD_WFL_RATINGC","Note :");
define("_MD_WFL_PAGERANK","PageRank�: ");
define("_MD_WFL_PAGERANKALT","Google PageRank�: ");
define("_MD_WFL_ONEVOTE","1 Vote");
define("_MD_WFL_NUMVOTES","%s votes");
define("_MD_WFL_RATETHISFILE","Noter ce lien");
define("_MD_WFL_MODIFY","");
define("_MD_WFL_REPORTBROKEN","Rapporter le lien bris&eacute;");
define("_MD_WFL_BROKENREPORT","Rapport de lien bris&eacute;");
define("_MD_WFL_SUBMITBROKEN","Proposez");
define("_MD_WFL_BEFORESUBMIT","Avant de rapporter un lien bris&eacute;, merci de v&eacute;rifier que la source actuelle du lien n'est vraiment plus disponible ou que le site n'est que temporairement indisponible.");
define("_MD_WFL_TELLAFRIEND","Recommander");
define("_MD_WFL_EDIT","Editer");
define("_MD_WFL_THEREARE","Il y a <b>%s</b> <i>cat&eacute;gories</i> et <b>%s</b> <i>liens</i> list&eacute;s");
define("_MD_WFL_THEREIS","Il y a <b>%s</b> <i>cat&eacute;gories</i> et <b>%s</b> <i>liens</i> list&eacute;s");
define("_MD_WFL_LATESTLIST","Derni&egrave;res listes");
define("_MD_WFL_FILETITLE","Titre du lien :");
define("_MD_WFL_DLURL","URL du lien :");
define("_MD_WFL_LINK_DIRCA"," Estimation du contenu :");
define("_MD_WFL_HOMEPAGEC","Page d'accueil :");
define("_MD_WFL_NOTSPECIFIED","Non sp&eacute;cifi&eacute;");
define("_MD_WFL_PUBLISHER","Auteur");
define("_MD_WFL_UPDATEDON","Mis � jour le");
define("_MD_WFL_PRICEFREE","Gratuit");
define("_MD_WFL_VIEWDETAILS","Voir tous les d&eacute;tails");
define("_MD_WFL_OPTIONS", 'Options :');
define("_MD_WFL_NOTIFYAPPROVE", 'Me notifier quand le lien sera approuv&eacute;');
define("_MD_WFL_VOTEAPPRE","Votre vote est pris en compte.");
define("_MD_WFL_THANKYOU","Merci d'avoir pris le temps de voter sur %s"); // %s is your site name
define("_MD_WFL_VOTEONCE","Merci de ne pas voter pour la m&ecirc;me ressource plus d'une fois.");
define("_MD_WFL_RATINGSCALE","L'&eacute;chelle va de  1 - 10, avec 1 &eacute;tant faible et 10 &eacute;tant excellents.");
define("_MD_WFL_BEOBJECTIVE","Veuillez &ecirc;tre objectif, si chacun reçoit un 1 ou des 10, les estimations ne sont pas tr&egrave;s utiles.");
define("_MD_WFL_DONOTVOTE","Ne votez pas pour votre ressource.");
define("_MD_WFL_RATEIT","Votez!");
define("_MD_WFL_INTFILEFOUND","Voici un bon lien &agrave; lier &agrave; %s"); // %s is your site name
define("_MD_WFL_RANK","Classement");
define("_MD_WFL_CATEGORY","Cat&eacute;gorie");
define("_MD_WFL_HITS","Vues");
define("_MD_WFL_RATING","Note");
define("_MD_WFL_VOTE","Vote");
define("_MD_WFL_SORTBY","Tri&eacute; par :");
define("_MD_WFL_TITLE","Titre");
define("_MD_WFL_DATE","Date");
define("_MD_WFL_POPULARITY","Popularit&eacute;");
define("_MD_WFL_TOPRATED","Notation");
define("_MD_WFL_CURSORTBY","Liens tri&egrave;s par :%s");
define("_MD_WFL_CANCEL","Annuler");
define("_MD_WFL_ALREADYREPORTED","Vous avez d&eacute;j&agrave; soumis un rapport de lien cass&eacute; pour cette ressource.");
define("_MD_WFL_MUSTREGFIRST","D&eacute;sol&eacute;e, vous n'avez pas la permission d'effectuer cette action.<br />Merci de vous enregistrer ou de vous connecter d'abord!");
define("_MD_WFL_NORATING","Aucune note choisie.");
define("_MD_WFL_VOTEFORTITLE","&eacute;valuez ce lien :");
define("_MD_WFL_CANTVOTEOWN","Vous ne pouvez pas voter sur la ressource que vous avez soumise.<br />Tous les votes sont enregistr&eacute;s et v&eacute;rifi&eacute;s.");
define("_MD_WFL_SUBMITLINK","Proposer un lien");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li>Tous les nouveaux liens sont sujets &agrave; la validation et peuvent prendre jusqu'&agrave; 24 heures avant qu'ils apparaissent dans notre liste.</li><li>Nous nous r&eacute;servons les droits de refuser n'importe quel lien soumis ou de changer le contenu sans approbation.</li></ul>");
define("_MD_WFL_MAINLISTING","Liste des cat&eacute;gories principales");
define("_MD_WFL_LASTWEEK","Semaine derni&egrave;re");
define("_MD_WFL_LAST30DAYS","30 derniers jours");
define("_MD_WFL_1WEEK","1 semaine");
define("_MD_WFL_2WEEKS","2 semaines");
define("_MD_WFL_30DAYS","30 jours");
define("_MD_WFL_SHOW","Voir");
define("_MD_WFL_DAYS","jours");
define("_MD_WFL_NEWLINKS","Nouveaux liens");
define("_MD_WFL_TOTALNEWLINKS","Nb de liens total");
define("_MD_WFL_DTOTALFORLAST","Nb total des derniers liens pour les");
define("_MD_WFL_AGREE","J'accepte");
define("_MD_WFL_DOYOUAGREE","Acceptez-vous les termes ci-dessus ?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Avertissement");
define("_MD_WFL_DUPLOADSCRSHOT","Envoyer la capture d'&eacute;cran :");
define("_MD_WFL_RESOURCEID","Id de la ressource :");
define("_MD_WFL_REPORTER","Rapporteur original :");
define("_MD_WFL_DATEREPORTED","Date du rapport :");
define("_MD_WFL_RESOURCEREPORTED","Ressource rapport&eacute;e comme bris&eacute;e");
define("_MD_WFL_RESOURCEREPORTED2","Ce lien a &eacute;t&eacute; d&eacute;j&agrave; &eacute;t&eacute; rapport&eacute; comme cass&eacute;, nous travaillons &agrave; le modifier");
define("_MD_WFL_BROWSETOTOPIC","<b>Class&eacute; par ordre alphab&eacute;tique</b>");
define("_MD_WFL_WEBMASTERACKNOW","Rapports de liens bris&eacute;s connus :");
define("_MD_WFL_WEBMASTERCONFIRM","Rapports de liens bris&eacute;s confirm&eacute;s :");
define("_MD_WFL_ERRORSENDEMAIL","Rapport de lien bris&eacute; confirm&eacute; mais erreur lors de l'envoi de l'email au webmaster.");

define("_MD_WFL_DELETE","Effacer");
define("_MD_WFL_DISPLAYING","Affich&eacute; par :");
define("_MD_WFL_LEGENDTEXTNEW","Nouveaut&eacute;s du jour");
define("_MD_WFL_LEGENDTEXTNEWTHREE","Nouveaut&eacute;s sur 3 jours");
define("_MD_WFL_LEGENDTEXTTHISWEEK","Nouveaut&eacute;s de la semaine");
define("_MD_WFL_LEGENDTEXTNEWLAST","Plus d'une semaine");
define("_MD_WFL_THISFILEDOESNOTEXIST","Erreur : ce lien n'existe pas!");
define("_MD_WFL_BROKENREPORTED","Lien bris&eacute; rapport&eacute;");

define("_MD_WFL_REV_SNEWMNAMEDESC"," 
Veuillez compl&eacute;ter le formulaire ci-dessous, et nous ajouterons votre opinion d&eacute;s que possible.<br /><br />
Merci de prendre le temps de soumettre votre avis. Nous voulons donner &agrave; nos utilisateurs la possibilit&eacute; de trouver plus rapidement des sites de qualit&eacute;.<br /><br />Toutes les opinions seront pass&eacute;es en revue par un de nos webmasters avant qu'elles soient affich&eacute;es sur le site.
");
define("_MD_WFL_ISNOTAPPROVED","Votre proposition doit d'abord &ecirc;tre approuv&eacute;e par un mod&eacute;rateur.");
define("_MD_WFL_HOMEPAGETITLEC","Titre de la page principale :");
define("_MD_WFL_SCREENSHOT","Capture d'&eacute;cran :");
define("_MD_WFL_SCREENSHOTCLICK","Afficher compl&egrave;tement l'image");
define("_MD_WFL_OTHERBYUID","Autres liens de :");
define("_MD_WFL_LINKTIMES","link Times :");
define("_MD_WFL_MAINTOTAL","Nb de liens total :");
define("_MD_WFL_LINKNOW","Visitez le lien");
define("_MD_WFL_PAGES","<b>Pages</b>");
define("_MD_WFL_RATEDRESOURCE","Ressource &eacute;valu&eacute;e");
define("_MD_WFL_SUBMITTER","Auteur");
define("_MD_WFL_ERROR","Erreur lors de la mise &agrave; jour de la base de donn&eacute;es : information non enregistr&eacute;e");
define("_MD_WFL_COPYRIGHT","copyright");
define("_MD_WFL_INFORUM","Discutez dans le forum");
// added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","Vous n'&ecirc;tes pas autoris&eacute; &agrave; envoyer un lien");
define("_MD_WFL_INFONOSAVEDB","Information non enregistr&eacute;e dans la base de donn&eacute;es <br /><br />");

define("_MD_WFL_NEWLAST","Nouveaut&eacute; avant la derni&egrave;re semaine");
define("_MD_WFL_NEWTHIS","Nouveaut&eacute; de la semaine");
define("_MD_WFL_THREE","Nouveaut&eacute; de ces 3 derniers jours");
define("_MD_WFL_TODAY","Nouveaut&eacute; du jour");
define("_MD_WFL_NO_FILES","Pas encore de lien");

define("_MD_WFL_NOPERMISSIONTOPOST","Vous n'avez pas la permission de poster dans cette cat&eacute;gorie.");
define("_MD_WFL_RESOURCES","Ressources");

define("_MD_WFL_PUBLISHDATE","Publi&eacute; le");
define("_MD_WFL_APPROVE","Approuv&eacute; le");
define("_MD_WFL_MODERATOR_OPTIONS","Options du mod&eacute;rateur"); 
define("_MD_WFL_COUNTRY","Pays: ");
define("_MD_WFL_COUNTRYB","<b>Pays</b>: ");
define("_MD_WFL_KEYWORDS","Mots cl�s: ");
define("_MD_WFL_KEYWORDS_NOTE","<i>Les mots cl�s doivent �tre s�par�s par une virgule (ex: Mot1, Mot2, Mot3).</i>");

// added by McDonald
define("_MD_WFL_NOLINKLOAD","Merci pour votre participation!");
define("_MD_WFL_LINKID","Num&eacute;ro d'enregistrement du lien");
define("_MD_WFL_COUNTRYSORT","Pays");
define("_MD_WFL_COUNTRYLTOH","Pays (A to Z)");
define("_MD_WFL_COUNTRYHTOL","Pays (Z to A)");
define("_MD_WFL_BACKBUTTON","Retour");
define("_MD_WFL_ADMINSECTION","Section d'administration");
define("_MD_WFL_ADDTO","Ajouter � : ");
define("_MD_WFL_INFORMATION","Information");
define("_MD_WFL_ADDRESS","D�tails du contact:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Maps");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_MD_WFL_LINK_MULTIMAP","Multimap");
define("_MD_WFL_LINK_CHECKMAP","Check map");
define("_MD_WFL_STREET1","Ligne adresse 1");
define("_MD_WFL_STREET2","Ligne adresse 2 (facultatif)");
define("_MD_WFL_TOWN","Ville");
define("_MD_WFL_STATE","D�partement");
define("_MD_WFL_ZIPCODE","Code postal");
define("_MD_WFL_TELEPHONE","T�l�phone");
define("_MD_WFL_TEL","T�l. ");
define("_MD_WFL_FAX","Fax ");
define("_MD_WFL_GETMAP","Obtenir la carte");

// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP ");
define("_MD_WFL_PRINT","Imprimer la fiche");
define("_MD_WFL_NOITEMSELECTED","Vous n'avez pas s�lectionner un lien valide !");
define("_MD_WFL_MOBILE","Mobile");

// Version 1.05 RC6
define("_MD_WFL_VAT","VAT");
define("_MD_WFL_VATWIKI", '<small>Informations sur <a href="http://en.wikipedia.org/wiki/Value_added_tax_identification_number" target="_blank">Wikipedia</a>');
define("_MD_WFL_EMAIL","Email");
define("_MD_WFL_LINK_CREATEADDRESS", '<b>Champ adresse</b>');

//Version 1.06 RC2
define('_MD_WFL_STOPIT','STOP IT YOU FOOL!!');

?>
