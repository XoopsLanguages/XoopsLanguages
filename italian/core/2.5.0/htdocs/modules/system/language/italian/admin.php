<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: admin.php 5572 2010-10-21 09:10:49Z kris_fr $
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last Update: 10/02/2011

// Main
define("_AM_SYSTEM_CONFIG","Configuratore di Sistema");
define("_AM_SYSTEM_CPANEL","Pannello di controllo");
define("_AM_SYSTEM_UPDATE","Aggiorna");
define("_AM_SYSTEM_GOTOMODULE","Vai al modulo");
define("_AM_SYSTEM_HELP","Guida");
define("_AM_SYSTEM_HELP_VIEW","Mostra Aiuto");
define("_AM_SYSTEM_HELP_HIDE","Nascondi Aiuto");
define("_AM_SYSTEM_TIPS","Suggerimento");
define("_AM_SYSTEM_SECTION","Nome");
define("_AM_SYSTEM_DESC","Descrizione");
define("_AM_SYSTEM_GO","Accedi a");
define("_AM_SYSTEM_STATUS","Abilita/disabilita la sezione");
define("_AM_SYSTEM_LOADING","In caricamento..");
define("_AM_SYSTEM_ALL","Tutto");

define("_AM_SYSTEM_TIPS_MAIN","<ul><li>Abilita o disabilita sezioni del modulo di sistema, o permette di accedervi.</li></ul>");
define("_AM_SYSTEM_AVATAR_INFO","<ul><li><span class='bold red'>%s</span> avatar.</li></ul>");
define("_AM_SYSTEM_BANNER_INFO","<ul><li><span class='bold red'>%s</span> banner.</li></ul>");
define("_AM_SYSTEM_COMMENT_INFO","<ul><li><span class='bold red'>%s</span> commenti.</li></ul>");
define("_AM_SYSTEM_GROUP_INFO","<ul><li><span class='bold red'>%s</span> gruppi.</li></ul>");
define("_AM_SYSTEM_IMG_INFO","<ul><li><span class='bold red'>%s</span> immagini.</li></ul>");
define("_AM_SYSTEM_SMILIES_INFO","<ul><li><span class='bold red'>%s</span> smilies.</li></ul>");
define("_AM_SYSTEM_RANKS_INFO","<ul><li><span class='bold red'>%s</span> livelli utente.</li></ul>");
define("_AM_SYSTEM_USERS_INFO","<ul><li><span class='bold red'>%s</span> utente/i.</li></ul>");

// Admin Module Names and description
define("_AM_SYSTEM_ADGS","Gruppi");
define("_AM_SYSTEM_ADGS_DESC","Permette di aggiungere gruppi<br /> e gestirne i permessi");
define("_AM_SYSTEM_BANS","Banner");
define("_AM_SYSTEM_BANS_DESC","Strumento per la gestione <br /> dei propri banner");
define("_AM_SYSTEM_BLOCKS","Blocchi");
define("_AM_SYSTEM_BLOCKS_DESC","Permette di creare e posizionare <br /> blocchi di contenuti da mostrare <br /> ai vostri utenti");
define("_AM_SYSTEM_MODULES","Moduli");
define("_AM_SYSTEM_MODULES_DESC","Permette di installare o rimuovere <br /> i vostri moduli. Sapete gi&agrave; quali?");
define("_AM_SYSTEM_SMLS","Faccine");
define("_AM_SYSTEM_SMLS_DESC","Gestione delle faccine da utilizzare  nei vostri post, <br /> messaggi privati, commenti, ecc...");
define("_AM_SYSTEM_RANK","Livelli Utente");
define("_AM_SYSTEM_RANK_DESC","Permette di aggiungere o creare livelli <br /> che classificano i vostri utenti");
define("_AM_SYSTEM_USER","Utenti");
define("_AM_SYSTEM_USER_DESC","Permette di creare nuovi utenti, modificarli, <br /> cambiarne il gruppo e molto altro");
define("_AM_SYSTEM_PREF","Preferenze");
define("_AM_SYSTEM_PREF_DESC","XOOPS e ognuno dei vostri <br /> moduli hanno delle preferenze <br /> per gestirne le impostazioni");
define("_AM_SYSTEM_MLUS","Mail Utenti");
define("_AM_SYSTEM_MLUS_DESC","Se si desidera inviare una mail <br /> o un messaggio ai propri utenti, <br /> &egrave; possibile utilizzare questo strumento");
define("_AM_SYSTEM_IMAGES","Immagini");
define("_AM_SYSTEM_IMAGES_DESC","Permette di aggiungere immagini <br /> e di dividerle in categorie");
define("_AM_SYSTEM_AVATARS","Avatar");
define("_AM_SYSTEM_AVATARS_DESC","Gestisce gli avatar degli utenti, <br /> che a loro volta possono utlizzarli nei loro profili");
define("_AM_SYSTEM_TPLSETS","Templates");
define("_AM_SYSTEM_TPLSETS_DESC","Modifica i templates di sistema o dei moduli <br /> e permette l'override dei file html del tema");
define("_AM_SYSTEM_COMMENTS","Commenti");
define("_AM_SYSTEM_COMMENTS_DESC","Permette la gestione dei commenti inviati dagli utenti <br /> sul vostro sito, nelle newsm, nelle immagini, ecc..");
define("_AM_SYSTEM_FILEMANAGER","File Manager");
define("_AM_SYSTEM_FILEMANAGER_DESC","Permette di fare delle modifiche <br /> in qualsiasi file del vostro Xoops");
define("_AM_SYSTEM_MAINTENANCE","Manutenzione");
define("_AM_SYSTEM_MAINTENANCE_DESC","Strumento di manutenzione per le tabelle del databese, <br /> svuota la cartella delle caches e la tasbella delle sessioni");

// Messages
define("_AM_SYSTEM_DBUPDATED","Database aggiornato con successo!");
define("_AM_SYSTEM_DBERROR","Database non aggiornato a causa di un errore!");
define("_AM_SYSTEM_NOTACTIVE","Questa sezione non è abilitata!");

// Group permission phrases
define('_MD_AM_PERMADDNG', 'Impossibile aggiungere il permesso %s a %s per il gruppo %s');
define('_MD_AM_PERMADDOK', 'Il permesso %s a %s per il gruppo %s &egrave; stato aggiunto con successo');
define('_MD_AM_PERMRESETNG', 'Non &egrave; stato possibile azzerare i permessi per il modulo %s');
define('_MD_AM_PERMADDNGP', 'Tutti gli elementi genitore devono essere selezionati.');

?>