<?php
// $Id: modinfo.php 825 2011-12-09 00:06:11Z i.bitcero $
// --------------------------------------------------------------
// Red México Common Utilities
// A framework for Red México Modules
// Author: Eduardo Cortés <i.bitcero@gmail.com>
// Email: i.bitcero@gmail.com
// License: GPL 2.0
// Translated to Danish by culex (culex@culex.dk) <http://www.xoopsnordic.org>
// --------------------------------------------------------------

if (!function_exists("__"))
    include_once XOOPS_ROOT_PATH.'/modules/rmcommon/loader.php';

//  Konfigurationer
define ('_MI_RMC_LANG', __ ('Sprog som skal anvendes', 'rmcommon'));
define ('_MI_RMC_IMAGESTORE', __ ('Arranger billeder efter dato', 'rmcommon'));
define ('_MI_RMC_EDITOR',__('Vælg standard editor', 'rmcommon'));
define ('_MI_RMC_EDITOR_VISUAL',__('Visual Editor', 'rmcommon'));
define ('_MI_RMC_EDITOR_HTML',__('HTML Editor', 'rmcommon'));
define ('_MI_RMC_EDITOR_XOOPS',__('XoopsCode Editor', 'rmcommon'));
define ('_MI_RMC_EDITOR_SIMPLE',__('Simple Editor', 'rmcommon'));
define ('_MI_RMC_IMGCATSNUMBER',__('Grænse for antal af billeder i kategorilisten.', 'rmcommon'));
define ('_MI_RMC_IMGSNUMBER',__('Image Manager - antal af billeder pr side', 'rmcommon'));
define ('_MI_RMC_SECREY',__('Hemmelig kode', 'rmcommon'));
define ('_MI_RMC_SECREYD',__('Giv en hemmelig kode, der bruges til at kryptere oplysninger.', 'rmcommon'));
define ('_MI_RMC_ADMTHEME', __ ('Om temaet', 'rmcommon'));

define ('_MI_RMC_DOHTML',__('Tillad HTML i tekst', 'rmcommon'));
define ('_MI_RMC_DOSMILE',__('Tillad smiles i tekst', 'rmcommon'));
define ('_MI_RMC_DOXCODE',__('Tillad XoopsCode', 'rmcommon'));
define ('_MI_RMC_DOIMAGE',__('Tillad billeder i tekst', 'rmcommon'));
define ('_MI_RMC_DOBR',__('Auto tilføje linjeskift i tekst', 'rmcommon'));

define ('_MI_RMC_MODSNUMBER',__('Modulnummer på dashboard', 'rmcommon'));

//  Kommentarer
define ('_MI_RMC_ENABLECOMS',__('Aktiver kommentarer', 'rmcommon'));
define ('_MI_RMC_ANONCOMS',__('Tillad anonyme brugere at skrive kommentarer', 'rmcommon'));
define ('_MI_RMC_APPROVEREG',__('automatisk godkende kommentarer af registrerede brugere', 'rmcommon'));
define ('_MI_RMC_APPROVEANON',__('automatisk godkende kommentarer fra anonyme brugere', 'rmcommon'));
define ('_MI_RMC_ALLOWEDIT',__('Tillad brugere at redigere deres kommentarer', 'rmcommon'));
define ('_MI_RMC_EDITLIMIT',__('Frist for at redigere en kommentar (i timer ).','rmcommon'));

//  RSS
define ('_MI_RMC_RSSIMAGE', __ ('Billede til RSS-feeds', 'rmcommon'));

//  Mailer Indstillinger
define ('_MI_RMC_MAILERMETH', __ ('Mailer-metoden', 'rmcommon'));
define ('_MI_RMC_MAILERMETHD', __ ('Common Utilities vil anvende denne metode til at sende e-mails .'));
define ('_MI_RMC_PHPMAIL', __ ('PHP Mail ()','rmcommon'));
define ('_MI_RMC_SMTP', __ ('SMTP', 'rmcommon'));
define ('_MI_RMC_SENDMAIL', __ ('Sendmail', 'rmcommon'));
define ('_MI_RMC_SMTPSERVER',__('SMTP-server der skal bruges', 'rmcommon'));
define ('_MI_RMC_SMTPSERVERD', __ ('Angiv den server hvor igennem e-mails vil blive sendt.', 'rmcommon'));
define ('_MI_RMC_ENCRYPT', __ ('SMTP-kryptering', 'rmcommon'));
define ('_MI_RMC_ENCRYPTD', __ ('For at SSL eller TLS-kryptering skal virke skal din PHP-installation skal have passende OpenSSL transporter wrappers. ','rmcommon '));
define ('_MI_RMC_CRYPTNONE', __ ('Ingen', 'rmcommon'));
define ('_MI_RMC_CRYPTSSL', __ ('SSL', 'rmcommon'));
define ('_MI_RMC_CRYPTTLS', __ ('TLS', 'rmcommon'));
define ('_MI_RMC_SMTPPORT', __ ('SMTP server port', 'rmcommon'));
define ('_MI_RMC_SMTPPORTD', __ ('Bemærk at du skal angive en passende port baseret på dit krypteringstype valg.', 'rmcommon'));
define ('_MI_RMC_SMTPUSER', __ ('SMTP-brugernavn', 'rmcommon'));
define ('_MI_RMC_SMTPPASS', __ ('SMTP-password', 'rmcommon'));
define ('_MI_RMC_SENDMAILPATH', __ ('Sendmail path', 'rmcommon'));
define ('_MI_RMC_SENDMAILPATHD', __ ('Input kommandoen for sendmail, herunder det korrekte kommandolinje-flag. Standardværdien der bruges, er "/ usr / sbin / sendmail-BS", hvis intet er angivet.', 'rmcommon')) ;

//  RSS
define ('_MI_RMC_RSSENABLE', __ ('Aktiver RSS-center', 'rmcommon'));
define ('_MI_RMC_BLOCKSENABLE', __ ('Aktiver interne blokmanager', 'rmcommon'));

//  Admin Menu
define ('_MI_RMC_MENUDASH',__('Dashboard', 'rmcommon'));
define ('_MI_RMC_MENUPLUGS',__('Plugins', 'rmcommon'));
define ('_MI_RMC_MENUIMG',__('Billeder', 'rmcommon'));
define ('_MI_RMC_OPTICATS',__('Kategorier', 'rmcommon'));
define ('_MI_RMC_OPTINEWCAT',__('ny kategori', 'rmcommon'));
define ('_MI_RMC_OPTINEWIMG',__('Nyt billede', 'rmcommon'));
define ('_MI_RMC_OPTINEWIMGS',__('Lav billeder', 'rmcommon'));
