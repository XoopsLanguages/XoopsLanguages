<?php
// $Id: modinfo.php 12344 2014-03-03 01:32:43Z beckmi $
// Module Info

// The name of this module
define("_MI_RSSFIT_NAME","XML (Flux RSS)");

// A brief description of this module
define("_MI_RSSFIT_DESC","G&eacute;n&eacute;rateur XML de flux de news RSS avec plugins ");

// admin/menu.php
define("_MI_RSSFIT_ADMENU1","Editer l'intro");
define("_MI_RSSFIT_ADMENU2","Plug-ins");
define("_MI_RSSFIT_ADMENU3","Infos du Flux");
define("_MI_RSSFIT_ADMENU4","Sous-Flux");
define("_MI_RSSFIT_ADMENU5","Texte d'ent&ecirc;te");

//	Module Configs
define("_MI_OVERALL_ENTRIES","Nombre total d'entr&eacute;es");
define("_MI_OVERALL_ENTRIES_DESC","Nombre total d'entr&eacute;es montr&eacute;es dans le flux RSS");
define("_MI_PLUGIN_ENTRIES","Nombre d'entr&eacute;es par d&eacute;faut pour les plug-ins");
define("_MI_PLUGIN_ENTRIES_DESC","Nombre d'entr&eacute;es par d&eacute;faut &agrave; afficher pour chaque plug-in quand ceux-ci sont install&eacute;s");
define("_MI_ENTRIES_SORT","Entr&eacute;es class&eacute;es par");
define("_MI_ENTRIES_SORT_DESC","Classement de sortie des entr&eacute;es dans le flux RSS");
define("_MI_ENTRIES_SORT_DATE","Date");
define("_MI_ENTRIES_SORT_CAT","Cat&eacute;gorie");
define("_MI_CACHE","Temps de cache (en minutes)");
define("_MI_CACHE_DESC","Cette options sera &eacute;galement utilis&eacute;e par le canal Time-to-Live (TTL) &eacute;l&eacute;ment de la sortie RSS.");
define("_MI_MAXCHAR","Maximum de caract&egrave;res dans les descriptions");
define("_MI_MAXCHAR_DESC","0 = montrer le contenu entier");
define("_MI_STRIPHTML","Enl&egrave;ver les tags HTML");
define("_MI_STRIPHTML_DESC","Enl&egrave;ver les tags HTML dans les descriptions, Xoopscodes et Emoticones compris.");
define("_MI_ENCODE_UTF8","Encoder les contenus en UTF-8");
define("_MI_ENCODE_UTF8_DESC","Info : Ne fonctionne probablement pas et est recommand&eacute; de mettre sur non.");

// template explanations
define("_MI_TMPL_INTRO","Introduction pour la page d'accueil du module");
define("_MI_TMPL_RSS","Donn&eacute;es du flux RSS");

######### version 1.1 additions #########
define("_MI_OUTOUT_MIME","Type MIME de la sortie RSS");
define("_MI_OUTOUT_MIME_XML","XML (text/xml)");
define("_MI_OUTOUT_MIME_HTML","HTML (text/html)");
define("_MI_OUTOUT_MIME_PHP","HTML avec php-debug");
