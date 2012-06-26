<?php
######### (liaise) version 1.0  additions #########
// The name of this module
define("_MI_xforms_NAME","Liaise");

// A brief description of this module
define("_MI_xforms_DESC","Générateur de Formulaire de Contact");

// admin/menu.php
define("_MI_xforms_ADMENU1","Liste des Formulaires");
define("_MI_xforms_ADMENU2","Créer un nouveau Formulaire");

//	preferences
define("_MI_xforms_TEXT_WIDTH","Largeur des zones de texte par défaut.");
define("_MI_xforms_TEXT_MAX","Largeur maximum des zones de texte par défaut.");
define("_MI_xforms_TAREA_ROWS","Nombre de lignes par défaut des zones de texte.");
define("_MI_xforms_TAREA_COLS","Nombre de colonnes par défaut des zones de texte.");

######### (liaise) version 1.1  additions #########
//	preferences
define("_MI_xforms_MAIL_CHARSET","Texte encodé pour les e-mails envoyés");

//	template descriptions
define("_MI_xforms_TMPL_MAIN_DESC","Page d'accueil de Liaise");
define("_MI_xforms_TMPL_ERROR_DESC","Page à afficher lors d'erreurs");

######### (liaise) version 1.2 additions #########
//	template descriptions
define("_MI_xforms_TMPL_FORM_DESC","Template des formulaires");

//	preferences
define("_MI_xforms_MOREINFO","Envoyer des informations supplémentaires avec les informations soumises.");
define("_MI_xforms_MOREINFO_USER","Nom d'utilisateur et lien vers sa page d'information.");
define("_MI_xforms_MOREINFO_IP","Adresse IP du contact");
define("_MI_xforms_MOREINFO_AGENT","Fournisseur d'accès du contact (infos du navigateur)");
define("_MI_xforms_MOREINFO_FORM","URL du formulaire de contact");
define("_MI_xforms_MAIL_CHARSET_DESC","Leave blank for "._CHARSET);
define("_MI_xforms_PREFIX","Preffix du texte pour les champs requis");
define("_MI_xforms_SUFFIX","Suffix du texte pour les champs requis");
define("_MI_xforms_INTRO","Texte d'introduction pour la page d'accueil");
define("_MI_xforms_GLOBAL","Texte à afficher dans chaque formulaire");

// admin/menu.php
define("_MI_xforms_ADMENU3","Modifier les éléments du formulaire");
define("_MI_xforms_ADMENU5","À propos");

######### (liaise) version 1.21 additions #########
// preferences default values
define("_MI_xforms_INTRO_DEFAULT","Contactez nous librement au moyen du formulaire suivant:");
define("_MI_xforms_GLOBAL_DEFAULT","* Requis");

######### (liaise) version 1.23 additions #########
define("_MI_xforms_UPLOADDIR","Chemin physique de votre répertoire SANS le slash / de fin.");
define("_MI_xforms_UPLOADDIR_DESC","Tous les fichiers envoyés seront stockés ici quand un formulaire est envoyé par l'intermédiaire de message privé");

######### (xforms) version 1.0 additions ##########
define( "_MI_xforms_CAPTCHA", "Usiliser la sécurité anti-spam ?" );
define( "_MI_xforms_CAPTCHADSC", "Sélectionner Oui pour activer la sécurité au pied des formulaires formulaires.<br />Par défaut : Oui" );
define("_MI_xforms_ADMENU4","Importer les formulaires créés dans Liaise");

######### (xforms) version 1.0.0.1 additions ##########
define("_MI_xforms_NOFORM","Texte montré lorsqu'il n'y a aucun formulaire visible pour l'utilisateur actuel.");
define("_MI_xforms_NOFORM_DEFAULT","Désolé, il n'y a actuellement aucun formulaire (visible pour vous).");

define("_MI_xforms_ADMENU0","Accueil");
?>