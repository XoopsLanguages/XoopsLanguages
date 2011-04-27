<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    it
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 5608 2010-10-23 17:36:57Z trabis $
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 10/02/2011

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN","Gestione Blocchi");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Gestione");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK","Nuovo blocco");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Modifica blocco");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Clonazione blocco");

// Forms
define("_AM_SYSTEM_BLOCKS_SAVE","Salva");
define("_AM_SYSTEM_BLOCKS_CUSTOM","Personalizzato");
define("_AM_SYSTEM_BLOCKS_TYPES","Tutti");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Modulo/Tipo");
define("_AM_SYSTEM_BLOCKS_GROUP","Gruppo/i");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Attivi in");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Visualizza blocco ");
define("_AM_SYSTEM_BLOCKS_HIDE","Nascondi blocco ");
define("_AM_SYSTEM_BLOCKS_CLONE","Clona");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Sinistra");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Centro (sinistra)");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Centro");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Centro (destra)");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Destra");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Centro basso (sinistra)");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Centro basso");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Centro basso (destra)");
define("_AM_SYSTEM_BLOCKS_ADD","Nuovo blocco");
define("_AM_SYSTEM_BLOCKS_MANAGE","Amministra blocchi");
define("_AM_SYSTEM_BLOCKS_NAME","Descrizione");
define("_AM_SYSTEM_BLOCKS_TYPE","Posizione");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Laterale - Sinistra");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Laterale - Destra");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Centrale - Sinistra");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Centrale - Destra");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Centrale");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Centrale basso - Sinistra");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Centrale basso - Destra");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Centrale basso");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Ordinamento");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Visibile");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Attivo in");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Home Page");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","Tutte le pagine");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Non assegnato");
define("_AM_SYSTEM_BLOCKS_TITLE","Titolo");
define("_AM_SYSTEM_BLOCKS_CONTENT","Contenuto");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Codici utili:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s visualizzer&agrave;: %s");
define("_AM_SYSTEM_BLOCKS_CTYPE","Tipo di contenuto");
define("_AM_SYSTEM_BLOCKS_HTML","Codice HTML");
define("_AM_SYSTEM_BLOCKS_PHP","Script PHP");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Formattazione automatica (Hml+BBcode). Faccine abilitate");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Formattazione automatica (Hml+BBcode). Faccine NON abilitate");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Cache lifetime");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Blocco personalizzato HTML");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Blocco personalizzato PHP");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Blocco personalizzato (Formattazione automatica + Faccine)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Blocco personalizzato (Formattazione automatica)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Modifica Template");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Opzioni");
define("_AM_SYSTEM_BLOCKS_DRAG","Premere e trascinare per spostare il blocco");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Confermare l\'eliminazione del blocco <div class="bold">%s?</div>');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","I blocchi di sistema non possono essere eliminati!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Non &egrave; possibile eliminare questo blocco direttamente.<br />Se si desidera rimuoverlo disattivare il modulo cui appartiene.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>Permette di modificare facilmente ordinamento o posizione tramite drag\'n drop (fare click su quest\'immagine <img class="tooltip" style="width:16px; height:16px;" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> e trascinare)</li>
<li>Aggiunge/gestisce i blocchi personalizzati</li>
<li>Imposta la visibilit&agrave; dei blocchi (premere <img class="tooltip" style="width:15px; height:15px;" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> o <img class="tooltip" style="width:15px; height:15px;" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" />)</li>
</ul>');

?>