<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fr
 * _CHARSET     iso-8859-1
 * @version     $Id$
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN", "Préférences");

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS", "<ul><li>Gérer l'ensemble des réglages de votre site.</li></ul>");

define("_MD_AM_SITEPREF", "Préférence de votre site");
define("_MD_AM_SITENAME", "Nom de votre site");
define("_MD_AM_SITENAMEDSC", " ");
define("_MD_AM_SLOGAN", "Slogan de votre site");
define("_MD_AM_SLOGANDSC", " ");
define("_MD_AM_ADMINML", "Email de l'administrateur");
define("_MD_AM_ADMINMLDSC", " ");
define("_MD_AM_LANGUAGE", "Langue par défaut");
define("_MD_AM_LANGUAGEDSC", " ");
define("_MD_AM_STARTPAGE", "Module à afficher en page d'accueil");
define("_MD_AM_STARTPAGEDSC", " ");
define("_MD_AM_NONE", "Aucun");
define("_MD_AM_SERVERTZ", "Fuseau horaire du serveur");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Fuseau horaire par défaut");
define("_MD_AM_DEFAULTTZDSC", " ");
define("_MD_AM_DTHEME", "Thème par défaut");
define("_MD_AM_DTHEMEDSC", " ");
define("_MD_AM_THEMESET", "Thème Set");
define("_MD_AM_CUSTOM_REDIRECT", "Utiliser la redirection \"jGrowl\" ");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "Remplacer toutes les anciennes redirection par une interface sous jQuery");
define("_MD_AM_ANONNAME", "Nom à afficher pour les utilisateurs anonymes");
define("_MD_AM_ANONNAMEDSC", " ");
define("_MD_AM_MINPASS", "Longueur minimale requise pour le mot de passe");
define("_MD_AM_MINPASSDSC", " ");
define("_MD_AM_NEWUNOTIFY", "Notifier par email l'enregistrement d'un nouvel utilisateur ?");
define("_MD_AM_NEWUNOTIFYDSC", " ");
define("_MD_AM_SELFDELETE", "Autoriser les utilisateurs à supprimer leur propre compte ?");
define("_MD_AM_SELFDELETEDSC", " ");
define("_MD_AM_USEGZIP", "Utiliser la compression \"gzip\" ?");
define("_MD_AM_USEGZIPDSC", " ");
define("_MD_AM_UNAMELVL", "Sélectionner un niveau de filtrage des caractères dans les noms d'utilisateur");
define("_MD_AM_UNAMELVLDSC", " ");
define("_MD_AM_STRICT", "Strict (Uniquement alphanumérique)");
define("_MD_AM_MEDIUM", "Moyen");
define("_MD_AM_LIGHT", "Léger (recommandé pour les caractères multi-bytes)");
define("_MD_AM_USERCOOKIE", "Nom du cookie \"utilisateur\" ");
define("_MD_AM_USERCOOKIEDSC", "Si le nom du cookie est défini, la case \"Se souvenir de moi\" sera disponible dans la boîte de connexion de l'utilisateur. Lorsqu'un utilisateur coche cette case, il sera connecté automatiquement. La durée de vie du cookie est d'un an, excepté bien entendu, s'il vide les cookies de son navigateur internet.");
define("_MD_AM_USEMYSESS", "Utiliser une session personnalisée");
define("_MD_AM_USEMYSESSDSC", "Sélectionnez \"OUI\" pour personnaliser les valeurs liées à la session.");
define("_MD_AM_SESSNAME", "Nom de la session");
define("_MD_AM_SESSNAMEDSC", "Le nom de la session (ceci est applicable uniquement lorsque la session personnalisée est activée)");
define("_MD_AM_SESSEXPIRE", "Expiration de la session");
define("_MD_AM_SESSEXPIREDSC", "Durée maximale d'une session en minutes (ceci est applicable uniquement lorsque la session personnalisée est activée.)");
define("_MD_AM_BANNERS", "Activer les bannières publicitaires ?");
define("_MD_AM_BANNERSDSC", " ");
define("_MD_AM_MYIP", "Votre adresse IP");
define("_MD_AM_MYIPDSC", "Cette adresse IP ne sera pas comptée pour l'affichage des bannières.");
define("_MD_AM_ALWDHTML", "Autoriser les balises HTML dans tous les messages.");
define("_MD_AM_INVLDMINPASS", "Valeur non valide pour la taille minimale du mot de passe.");
define("_MD_AM_INVLDUCOOK", "Valeur non valide pour le nom du cookie \"utilisateur\".");
define("_MD_AM_INVLDSCOOK", "Valeur non valide pour le nom du cookie de session.");
define("_MD_AM_INVLDSEXP", "Valeur non valide pour la durée d'expiration de la session.");
define("_MD_AM_ADMNOTSET", "L'email de l'administrateur n'a pas été saisi.");
define("_MD_AM_YES", "Oui");
define("_MD_AM_NO", "Non");
define("_MD_AM_DONTCHNG", "Ne pas modifier !");
define("_MD_AM_REMEMBER", "Pensez à faire un chmod 666 (permission serveur) sur ce fichier afin de permettre son écriture correcte par le système.");
define("_MD_AM_IFUCANT", "Si vous ne pouvez pas modifier les permissions, vous pouvez toujour éditer ce fichier manuellement.");

define("_MD_AM_COMMODE", "Mode d'affichage par défaut des commentaires");
define("_MD_AM_COMMODEDSC", " ");
define("_MD_AM_COMORDER", "Ordre d'affichage par défaut des commentaires");
define("_MD_AM_COMORDERDSC", " ");
define("_MD_AM_ALLOWHTML", "Autoriser les balises HTML dans les commentaires des utilisateurs ? (Pour des raisons de sécurité, cela n'est absolument pas recommandé)");
define("_MD_AM_DEBUGMODE", "Mode Debug");
define("_MD_AM_DEBUGMODEDSC", "Différentes options du mode debug. Un site en fonctionnement normal doit avoir cette option à \"Off\".");
define("_MD_AM_AVATARALLOW", "Autoriser le téléchargement d'avatar personnalisé par les utilisateurs ?");
define("_MD_AM_AVATARALWDSC", " ");
define("_MD_AM_AVATARMP", "Nombre de contributions minimales requises");
define("_MD_AM_AVATARMPDSC", "Saisissez ici le nombre de contributions requises pour être autorisé à télécharger un avatar personnalisé.");
define("_MD_AM_AVATARW", "Largeur maximale de l'avatar (en pixels)");
define("_MD_AM_AVATARWDSC", " ");
define("_MD_AM_AVATARH", "Hauteur maximale de l'avatar (en pixels)");
define("_MD_AM_AVATARHDSC", " ");
define("_MD_AM_AVATARMAX", "Taille maximale du fichier de l'avatar (en octets)");
define("_MD_AM_AVATARMAXDSC", " ");
define("_MD_AM_AVATARCONF", "Paramètres personnalisés de l'avatar");

define("_MD_AM_NOTIFYTO", "Sélectionner les groupes auxquels les notifications des nouvelles inscriptions d'utilisateurs seront adressées");
define("_MD_AM_NOTIFYTODSC", " ");
define("_MD_AM_ALLOWTHEME", "Autoriser les utilisateurs à choisir un thème ?");
define("_MD_AM_ALLOWIMAGE", "Autoriser les utilisateurs à afficher une image dans leurs messages ?");

define("_MD_AM_USERACTV", "Requiert l'activation par l'utilisateur(recommandé)");
define("_MD_AM_AUTOACTV", "Activation automatique");
define("_MD_AM_ADMINACTV", "Activation par un administrateur");
define("_MD_AM_ACTVTYPE", "Sélectionnez la méthode d'activation pour l'enregistrement des nouveaux utilisateurs");
define("_MD_AM_ACTVTYPEDSC", " ");
define("_MD_AM_ACTVGROUP", "Sélectionnez les groupes de permissions auxquels l'email d'activation sera adressé");
define("_MD_AM_ACTVGROUPDSC", "Valide uniquement quand l'activation par un administrateur a été sélectionnée");
define("_MD_AM_USESSL", "Utiliser une connexion SSL ?");
define("_MD_AM_USESSLDSC", " ");
define("_MD_AM_SSLPOST", "Nom de la variable de la méthode POST de SSL");
define("_MD_AM_SSLPOSTDSC", "Le nom de la variable utilisé pour transférer la valeur de la session via la méthode POST. Si vous n'êtes pas certains, définissez un nom difficile à deviner.");
define("_MD_AM_DEBUGMODE0", "Désactivé");
define("_MD_AM_DEBUGMODE1", "Activer le mode debug en ligne");
define("_MD_AM_DEBUGMODE2", "Activer le mode debug en popup");
define("_MD_AM_DEBUGMODE3", "Activer le mode Debug Smarty pour les templates");
define("_MD_AM_MINUNAME", "Longueur minimale de l'identifiant de l'utilisateur");
define("_MD_AM_MINUNAMEDSC", " ");
define("_MD_AM_MAXUNAME", "Longueur maximale de l'identifiant de l'utilisateur");
define("_MD_AM_MAXUNAMEDSC", " ");
define("_MD_AM_GENERAL", "Paramètres généraux");
define("_MD_AM_USERSETTINGS", "Paramètres des utilisateurs");
define("_MD_AM_ALLWCHGMAIL", "Autoriser les utilisateurs à modifier leur adresse email ?");
define("_MD_AM_ALLWCHGMAILDSC", " ");
define("_MD_AM_IPBAN", "Adresse(s) IP Bannie(s)");
define("_MD_AM_BADEMAILS", "Saisissez les emails qui ne pourront pas être utilisées dans les profils des utilisateurs");
define("_MD_AM_BADEMAILSDSC", "Séparez-les par un <strong>|</strong>, insensible à la casse, expressions régulières autorisées.");
define("_MD_AM_BADUNAMES", "Saisissez les identifiants d'utilisateurs interdits");
define("_MD_AM_BADUNAMESDSC", "Séparez-les par un <strong>|</strong>, insensible à la casse, expressions régulières autorisées.");
define("_MD_AM_DOBADIPS", "Activer le bannissement d'IP ?");
define("_MD_AM_DOBADIPSDSC", "Les utilisateurs ayant les adresses IP spécifiées ne pourront pas accéder à votre site");
define("_MD_AM_BADIPS", "Saisissez les adresses IP qui seront bannis de ce site.<br />Séparez-les avec un <strong>|</strong>, insensible à la casse, expressions régulières autorisées.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc interdira tous les visiteurs dont l'adresse IP commence par aaa.bbb.ccc<br />aaa.bbb.ccc$ interdira tous les visiteurs dont l'adresse IP se termine par aaa.bbb.ccc<br />aaa.bbb.ccc interdira tous les visiteurs dont l'adresse IP contient aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Préférences principales");
define("_MD_AM_METAKEY", "Balise \"META KEYWORDS\" ");
define("_MD_AM_METAKEYDSC", "La balise \"META KEYWORDS\" consiste en une série de mots-clefs qui sont représentatifs du contenu de votre site. Entrez chaque mot en les séparant par des virgules suivies d'un espace (Ex. : XOOPS, PHP, mySQL, portal system)");
define("_MD_AM_METARATING", "Balise \"META RATING\" ");
define("_MD_AM_METARATINGDSC", "La balise \"META RATING\" définie la catégorie de public à laquelle de votre site est destiné.<br /><strong>general</strong> : désigne un site tout public.<br /><strong>mature</strong> : réserve l'accès du site aux adultes.<br /><strong>restricted</strong> : indique un accès restreint.<br /><strong>14years</strong> : interdit l'accès avant 14 ans. ");
define("_MD_AM_METAOGEN", "Général (tout public)");
define("_MD_AM_METAO14YRS", "14 ans (interdit avant)");
define("_MD_AM_METAOREST", "Restreint");
define("_MD_AM_METAOMAT", "Mature (réservé aux adultes)");
define("_MD_AM_METAROBOTS", "Balise \"META ROBOTS\" ");
define("_MD_AM_METAROBOTSDSC", "La balise \"META ROBOTS\" précise aux robots des moteurs de recherche quelle doit être leur attitude lors de leurs analyses de votre site");
define("_MD_AM_INDEXFOLLOW", "Indexer, Suivre");
define("_MD_AM_NOINDEXFOLLOW", "Ne pas Indexer, Suivre");
define("_MD_AM_INDEXNOFOLLOW", "Indexer, Ne pas suivre");
define("_MD_AM_NOINDEXNOFOLLOW", "Ne pas indexer, Ne pas suivre");
define("_MD_AM_METAAUTHOR", "Balise \"META AUTHOR\" (Auteur)");
define("_MD_AM_METAAUTHORDSC", "La balise \"META AUTHOR\" permet d'identifier l'auteur du site et est peut-être plus destinée aux internautes qu'aux robots. Elle peut contenir un ou plusieurs auteurs. Le prénom doit figurer en lettres minuscules et le nom en majuscules. Dans le cas de plusieurs auteurs, il convient de les séparer par une virgule.");
define("_MD_AM_METACOPYR", "Balise \"META COPYRIGHT\" ");
define("_MD_AM_METACOPYRDSC", "La balise \"META COPYRIGHT\" permet de mentionner un copyright existant sur un site. Elle indique le nom du propriétaire du copyright ainsi que la date de dépôt. En cas d'inscriptions multiples, il convient de les séparer par une virgule.");
define("_MD_AM_METADESC", "Balise \"META DESCRIPTION\" ");
define("_MD_AM_METADESCDSC", "La balise \"META DESCRIPTION\" correspond à la description de votre page. Elle est utilisée comme telle par les moteurs de recherche lors de son indexation.<br />La plupart d'entre eux considèrent également comme des mots-clés les termes qui y sont employés.<br />Elle doit comporter un maximum de 200 caractères, espaces compris, sans passage à la ligne.<br />Placez-y un résumé de votre page aussi détaillé que possible. Une bonne solution consiste à reprendre les éléments du titre en les développant et en complétant si besoin est.<br />Vos principaux mots-clés doivent impérativement figurer ici. Veillez, cependant, à ce que la phrase ait un sens et ne se limite pas à une juxtaposition de termes.");
define("_MD_AM_METAFOOTER", "Balises 'META' et 'Pied de page' ");
define("_MD_AM_FOOTER", "Pied de page");
define("_MD_AM_FOOTERDSC", "Assurez-vous de bien saisir les liens en entier en commençant par http://, sans quoi les liens ne fonctionneront pas correctement dans les pages modules.");
define("_MD_AM_CENSOR", "Paramétrage des mots censurés");
define("_MD_AM_DOCENSOR", "Activer la censure des mots ?");
define("_MD_AM_DOCENSORDSC", "Les mots interdits seront censurés si cette option est activée. Cette option peut être désactiver pour améliorer la vitesse du site.");
define("_MD_AM_CENSORWRD", "Mots interdits à censurer");
define("_MD_AM_CENSORWRDDSC", "Entrez les mots de remplacement lors de censure dans les messages des utilisateurs.<br />Séparez chaque mot avec un <strong>|</strong>, insensible à la casse.");
define("_MD_AM_CENSORRPLC", "Les mots censurés seront remplacés par :");
define("_MD_AM_CENSORRPLCDSC", "Les mots censurés seront remplacés par les caractères saisis dans ce champ texte.");

define("_MD_AM_SEARCH", "Options de recherche");
define("_MD_AM_DOSEARCH", "Activer les recherches globales ?");
define("_MD_AM_DOSEARCHDSC", "Autoriser la recherche dans les contributions à l'intérieur de votre site.");
define("_MD_AM_MINSEARCH", "Longueur minimale du mot clef");
define("_MD_AM_MINSEARCHDSC", "Entrez la longueur minimale du mot-clef de recherche que les utilisateurs doivent saisir pour pouvoir effectuer une recherche.");
define("_MD_AM_MODCONFIG", "Options de configuration du module");
define("_MD_AM_DSPDSCLMR", "Afficher l'avertissement ?");
define("_MD_AM_DSPDSCLMRDSC", "Sélectionnez \"oui\"pour afficher l'avertissement sur la page d'inscription.");
define("_MD_AM_REGDSCLMR", "Avertissement d'inscription");
define("_MD_AM_REGDSCLMRDSC", "Entrez le texte à afficher comme avertissement lors de l'inscription.");
define("_MD_AM_ALLOWREG", "Autoriser l'inscription de nouveaux utilisateurs ?");
define("_MD_AM_ALLOWREGDSC", "Sélectionnez \"oui'\" pour accepter l'inscription de nouveaux utilisateurs.");
define("_MD_AM_THEMEFILE", "Contrôler les modifications de templates ?");
define("_MD_AM_THEMEFILEDSC", "Si cette option est activée, les templates modifiés seront automatiquement régénérés lors de leur affichage. Vous devez désactiver cette option sur un site en production.");
define("_MD_AM_CLOSESITE", "Mettre le site en maintenance ?");
define("_MD_AM_CLOSESITEDSC", "Sélectionnez \"oui\" pour mettre votre site en maintenance. Dès lors seuls les utilisateurs dans les groupes de permissions sélectionnées pourront accéder au site. ");
define("_MD_AM_CLOSESITEOK", "Sélectionnez les groupes qui peuvent accéder au site lorsqu'il est mis en maintenance.");
define("_MD_AM_CLOSESITEOKDSC", "Les utilisateurs dans le groupe \"Adminsitrateurs\" d'origine y auront toujours accès.");
define("_MD_AM_CLOSESITETXT", "Raison(s) de la mise en maintenance de ce site");
define("_MD_AM_CLOSESITETXTDSC", "Il s'agit du message afficher sur la page de votre site lorsque celui-ci est en maintenance (fermé).");
define("_MD_AM_SITECACHE", "Cache global du site");
define("_MD_AM_SITECACHEDSC", "Mettre en cache l'ensemble du site pour une durée de temps défini afin d'améliorer les performances. En définissant le cache global du site, vous écraserez les paramètres de cache individuels des modules, des blocs s'il y en existe.");
define("_MD_AM_MODCACHE", "Cache global des modules");
define("_MD_AM_MODCACHEDSC", "Mettre en cache l'ensemble du contenu des modules pour une durée de temps afin d'améliorer les performances. En définissant le cache pour l'ensemble des modules, les paramètres individuels de cache des modules seront écrasés s'il y en existe.");
define("_MD_AM_NOMODULE", "Il n'y a aucun module pouvant être mis en cache.");
define("_MD_AM_DTPLSET", "Jeu de template par défaut");
define("_MD_AM_DTPLSETDSC", " ");
define("_MD_AM_SSLLINK", "Adresse URL de la page de connexion en SSL");
define("_MD_AM_SSLLINKDSC", " ");

// added for mailer
define("_MD_AM_MAILER", "Paramètres Email");
define("_MD_AM_MAILER_MAIL", " ");
define("_MD_AM_MAILER_SENDMAIL", " ");
define("_MD_AM_MAILER_", " ");
define("_MD_AM_MAILFROM", "Adresse de l'expéditeur");
define("_MD_AM_MAILFROMDESC", " ");
define("_MD_AM_MAILFROMNAME", "Nom de l'expéditeur");
define("_MD_AM_MAILFROMNAMEDESC", " ");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Expéditeur");
define("_MD_AM_MAILFROMUIDDESC", "Lorsque le système envoie un message privé, quel est le nom qui doit apparaître comme expéditeur ?");
define("_MD_AM_MAILERMETHOD", "Méthode d'expédition des emails");
define("_MD_AM_MAILERMETHODDESC", "Méthode utilisée pour expédier les email. La méthode par défaut est  \"PHP mail()\", utilisez les autres uniquement si vous rencontrez des problèmes.");
define("_MD_AM_SMTPHOST", "Hôte(s) SMTP");
define("_MD_AM_SMTPHOSTDESC", "Liste des serveurs SMTP à utiliser.");
define("_MD_AM_SMTPUSER", "Nom d'utilisateur SMTPAuth");
define("_MD_AM_SMTPUSERDESC", "Nom d'utilisateur pour pouvoir se connecter au serveur SMTPAuth (serveur SMTP avec Authentification).");
define("_MD_AM_SMTPPASS", "Mot de passe SMTPAuth");
define("_MD_AM_SMTPPASSDESC", "Mot de passe pour pouvoir se connecter au serveur SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Chemin d'accès à \"sendmail\" ");
define("_MD_AM_SENDMAILPATHDESC", "Chemin d'accès au programme (ou autre équivalent) sur le serveur.");
define("_MD_AM_THEMEOK", "Thèmes disponibles pour les utilisateurs");
define("_MD_AM_THEMEOKDSC", "Choisissez les thèmes disponibles pour les utilisateurs. Cela permet à ces derniers de pouvoir choisir un autre thème par défaut.");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - API");
define("_MD_AM_SOAP_CLIENTDESC","Adresse du serveur SOAP");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","Si vous voulez que le nouvel utilisateur soit provisionné, dites \"oui\" ");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Classement d'affectation");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","Il s'agit du classement auquel un nouvel utilisateur au serveur SOAP sera affecté.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Si vous avez besoin d'un service SOAP WDSL - Activez cette option.");
define("_MD_AM_SOAP_USERNAME", "SOAP - Nom d'utilisateur");
define("_MD_AM_SOAP_USERNAMEDESC","Il s'agit de votre nom d'utilisateur sur le serveur SOAP.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - Mot de passe");
define("_MD_AM_SOAP_PASSWORDDESC","Si vous avez besoin d'un mot de passe pour le service SOAP, saisissez-le ici.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Actif");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Conserver le client SOAP actif.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Comptes spéciaux");
define("_MD_AM_SOAP_FILTERPERSONDESC","Comptes spéciaux qui utilisent l'authentifications XOOPS.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Nom d'hôte pour le serveur proxy");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","Serveur proxy des serveurs SOAP.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Port du serveur proxy");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","Numéro de port du serveur proxy pour les serveurs SOAP <br>ex. : 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Nom d'utilisateur pour le serveur proxy");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","Nom d'utilisateur pour le serveur proxy des serveurs SOAP");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Mot de passe serveur proxy");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","Mot de passe du serveur proxy des serveurs SOAP.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Garder la requête SOAP active durant <strong>xx</strong> secondes.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Timeout/réponse");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Garder la requête SOAP active durant <strong>xx</strong> secondes.");
define("_MD_AM_SOAP_FIELDMAPPING","Affectation des champs d'autorisation du serveur XOOPS");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Décrivez ici les relations entre les champs de la base de données XOOPS et les champ d'authentification du système SOAP." .
		"<br /><br />Format [Champ base Xoops]=[Attribut d'autorisation du système SOAP]" .
		"<br />par exemple : email=mail" .
		"<br />Séparez chaque élément avec un <strong>|</strong>" .
		"<br /><br />Ceci est pour les administrateurs avertis !");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "Base de données XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Annuaire LDP Standard");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy;");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Authentification SOAP XOOPS");
define("_MD_AM_AUTHENTICATION", "Options d'authentication");
define("_MD_AM_AUTHMETHOD", "Méthode d'authentication");
define("_MD_AM_AUTHMETHODDESC", "Quelle méthode d'authentification souhaitez-vous utiliser pour identifier vos utilisateurs ?");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Nom du champ \"Email\" ");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Nom de l'attribut Email dans l'arborescence de votre annuaire LDAP.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Nom du champ \"Nom commun\" ");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Nom de l'attribut \"Nom Commun\" dans l'arborescence de votre annuaire LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Nom champ \"Surnom\" ");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Nom de l'attribut \"Surnom\" dans l'arborescence de votre annuaire LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Nom champ \"Prénom\" ");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "Nom de l'attribut \"Prénom\" dans l'arborescence de votre annuaire LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "La base DN (Distinguished Name) de votre arborescence de votre annuaire LDAP.");
define("_MD_AM_LDAP_PORT", "LDAP - Numéro du port");
define("_MD_AM_LDAP_PORT_DESC", "Le numéro du port requis pour accéder à votre serveur LDAP.");
define("_MD_AM_LDAP_SERVER", "LDAP - Nom du serveur");
define("_MD_AM_LDAP_SERVER_DESC", "Le nom de votre serveur LDAP.");

define("_MD_AM_LDAP_MANAGER_DN", "DN du gestionnaire LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "Le DN de l'utilisateur autorisé à effectuer des recherches (ex : manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Mot de passe du gestionnaire LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Le mot de passe de l'utilisateur autorisé à effectuer des recherches");
define("_MD_AM_LDAP_VERSION", "Version Protocole LDAP");
define("_MD_AM_LDAP_VERSION_DESC", "La version du protocole LDAP : 2 ou 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Les utilisateurs sont autorisés à passer outre l'authentification LDAP");
define("_MD_AM_LDAP_USERS_BYPASS_DESC"," Utilisateurs à authentifier avec la méthode native de XOOPS");

define("_MD_AM_LDAP_USETLS", " Utiliser une connexion TLS");
define("_MD_AM_LDAP_USETLS_DESC", "Utiliser une connexion TLS (Transport Layer Security). TLS utilise le port 389 standard<br />" .
                                  " et la version LDAP doit être définie à 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "Attribut utilisé pour rechercher un utilisateur");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Lorsque le nom d'utilisateur utilisé dans l'option DN est défini à \"oui\", il doit correspondre au nom d'utilisateur dans XOOPS.");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Nom d'utilisateur dans DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Le nom d'utilisateur dans XOOPS est utilisé dans le DN LDAP (ex : uid=<loginname>,dc=xoops,dc=org)<br />L'entrée est directement lue dans l'annuaire LDAP sans recherche");

define("_MD_AM_LDAP_FILTER_PERSON", "Filtre de recherche de la requête LDAP pour trouver l'utilisateur");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Filtre spécial LDAP pour trouver l'utilisateur. @@loginname@@ est remplacé par le nom d'utilisateur<br /> Il doit rester vide si vous ne savez pas quoi faire !" .
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) pour AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) pour LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Le nom du domaine");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Nom du domaine Windows. Uniquement pour les serveurs ADS et NT");

define("_MD_AM_LDAP_PROVIS", "Provisionnement automatique des comptes XOOPS");
define("_MD_AM_LDAP_PROVIS_DESC", "Créé la base de données \"utilisateurs\" si elle n'existe pas");

define("_MD_AM_LDAP_PROVIS_GROUP", "Groupe d'affectation par défaut");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Le nouvel utilisateur est affecté par défaut à ces groupes de permissions");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Affectation des champs d'autorisation du serveur XOOPS");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Décrivez ici les relations entre les champs de la base de données XOOPS et les champ d'authentification du système LDAP." .
        "<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
        "<br />par exemple : email=mail" .
        "<br />Séparez chaque élément avec un <strong>|</strong>" .
	"<br><br>Nota : ceci est pour les administrateurs avertis et principalement dans le cas de site intranet");

define("_MD_AM_LDAP_PROVIS_UPD", "Maintenir le provisionnement des comptes XOOPS");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Les comptes \"utilisateurs\" XOOPS sont toujours synchronisés avec le serveur d'authentification");


define("_MD_AM_CPANEL", "Thème de l'interface d'administration du site");
define("_MD_AM_CPANELDSC", "Thème à utiliser uniquement pour l'interface d'administration du site");

define("_MD_AM_WELCOMETYPE", "Envoi d'un message de bienvenue");
define("_MD_AM_WELCOMETYPE_DESC", "Comment envoyer un message de bienvenue à la première connexion de l'utilisateur.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Message");
define("_MD_AM_WELCOMETYPE_BOTH", "Email et message");

define("_MD_AM_MODULEPREF", "Préférences du module");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS", "Paramètres du Système");

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag
 */
?>