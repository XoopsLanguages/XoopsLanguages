<?php
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//  Italian translation by Daniele Lembo - samik.freesuperhost.com           //
//  ------------------------------------------------------------------------ //
define("_AM_CONFIG","Configurazione di xcGallery ");
define("_AM_GENERALCONF","Configurazione generale");
define("_AM_CATMNGR","Gestione categorie");
define("_AM_USERMNGR","Gestione utenti");
define("_AM_GROUPMNGR","Gestione gruppi");
define("_AM_BATCHADD","Batch e immagini");
define("_AM_ECARDMNGR","Gestione Ecard");
define("_AM_PICAPP","Immagini in attesa di approvazione");

define("_AM_PARAM_MISSING","E' stato chiamato lo script senza i parametri necessari.");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","Gestione utenti di xcGallery");
define("_AM_USERMGR_USHOW","Visualizza tutti gli utenti con album/immagini");
define("_AM_USERMGR_USHOWDEL","Visualizza gli album di tutti gli utenti eliminati");
define("_AM_USERMGR_ULIST","Lista utenti");
define("_AM_USERMGR_USER","Utente");
define("_AM_USERMGR_ALBUMS","Album");
define("_AM_USERMGR_PICS","Immagini");
define("_AM_USERMGR_QUOTA","Quota utenti");
define("_AM_USERMGR_ALB","Album");
define("_AM_USERMGR_DELUID","Elimina utente");
define("_AM_USERMGR_OPT","Operazioni");
define("_AM_USERMGR_NOTMOVE","** Non muovere **");
define("_AM_USERMGR_DEL","Elimina");
define("_AM_USERMGR_PROPS","Propriet&aacute;");
define("_AM_USERMGR_EDITP","Modifica immagini");

define("_AM_USERMGR_UONPAGE","%d utenti su %d pagine");
define("_AM_USERMGR_NOUSER","Nessun utente trovato!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Cerca nuove immagini");
define("_AM_SRCHNEW_SEL_DIR","Seleziona directory");
define("_AM_SRCHNEW_SEL_DIR_MSG","Questa funzione ti permette di aggiungere in batch le immagini che hai caricato sul server via FTP.<br /><br />Seleziona la directory in cui hai caricato le immagini");
define("_AM_SRCHNEW_NO_PIC_ADD","Non ci sono immagini da aggiungere");
define("_AM_SRCHNEW_NEED_ONE_ALB","Hai bisogno almeno di un album per usare questa funzione");
define("_AM_SRCHNEW_WARNING","Attenzione");
define("_AM_SRCHNEW_CHG_PERM","lo script non po&oacute; scrivere in questa directory, devi cambiare i permessi in 755 o 777 prima di riprovare ad aggiungere le immagini!");
define("_AM_SRCHNEW_TARGET_ALB","Inserite immagini di &quot;</b>%s<b>&quot; in </b>%s");
define("_AM_SRCHNEW_FOLDER","Cartella");
define("_AM_SRCHNEW_IMAGE","Immagine");
define("_AM_SRCHNEW_ALB","Album");
define("_AM_SRCHNEW_RESULT","Risultato");
define("_AM_SRCHNEW_DIR_RO","Non scrivibile. ");
define("_AM_SRCHNEW_CANT_READ","Non leggibile. ");
define("_AM_SRCHNEW_INSERT","Sto aggiungendo le nuove immagini alla galleria");
define("_AM_SRCHNEW_LIST_NEW","Lista delle nuove immagini");
define("_AM_SRCHNEW_INS_SEL","Inserisci le immagini selezionate");
define("_AM_SRCHNEW_NO_PIC","Nessuna nuova immagine trovata");
define("_AM_SRCHNEW_PATIENT","Per favore sii paziente, lo script ha bisogno di tempo per aggiungere le immagini");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : vuol dire che le immagini sono state aggiunte<li><b>DP</b> : vuol dire che l'immagine &eacute; un duplicato e si trova gi&aacute; nel database<li><b>PB</b> : vuol dire che l'immagine non pu&oacute; essere aggiunta, verifica la tua configurazione e i permessi della directory in cui sono posizionate le immagini<li>Se i 'segni' di OK, DP, PB  non appaiono clicca sull'immagine rotta per visualizzare il messaggio di errore PHP<li>Se il browser va in timeout, premi il pulsante ricarica</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Nome del gruppo");
define("_AM_GRPMGR_QUOTA","Quota disco");
define("_AM_GRPMGR_RATE","Pu&oacute; votare le immmagini");
define("_AM_GRPMGR_SENDCARD","Pu&oacute; inviare le eCard");
define("_AM_GRPMGR_COM","Pu&oacute; inviare commenti");
define("_AM_GRPMGR_UPLOAD","Pu&oacute; inviare immagini");
define("_AM_GRPMGR_PRIVATE","Pu&oacute; avere una galleria personale");
define("_AM_GRPMGR_APPLY","Applica modifiche");
define("_AM_GRPMGR_MANAGE","Gestisci i gruppi");
define("_AM_GRPMGR_PUB_APPR","Pub. Upl. approvazione (1)");
define("_AM_GRPMGR_PRIV_APPR","Priv. Upl. approvazione (2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> L'upload in un album pubblico necessita l'approvazione dell'amministratore");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> L'upload in un album che appartiene ad un utente necessita l'approvazione dell'amministratore");
define("_AM_GRPMGR_NOTES","Note");
define("_AM_GRPMGR_SYN","Sincronizza");
define("_AM_GRPMGR_SYN_NOTE","Clicca 'Sincronizza' per sincronizzare i gruppi di xcGallery con quelli di Xoops");
define("_AM_GRPMGR_EMPTY","La tabella dei gruppi di xcGallery &eacute; vuota!<br /><br />Creato il gruppo di default.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","I parametri richiesti per '%s' operazione non supportata!");
define("_AM_CAT_UNKOWN","La categoria selezionata non esiste nel database");
define("_AM_CAT_UGAL_CAT_RO","La categoria delle gallerie utenti non pu&oacute; essere eliminata!");
define("_AM_CAT_MNGCAT","Gestione categorie");
define("_AM_CAT_CONF_DEL","Sei sicuro che vuoi CANCELLARE questa categoria");
define("_AM_CAT_CAT","Categoria");
define("_AM_CAT_OP","Operazioni");
define("_AM_CAT_MOVE","Muovi in");
define("_AM_CAT_UPCR","Aggiorna/Crea categoria");
define("_AM_CAT_PARENT","Categoria padre");
define("_AM_CAT_TITLE","Titolo categoria");
define("_AM_CAT_DESC","Descrizione categoria");
define("_AM_CAT_NOCAT","* Nessuna categoria *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","xcGallery ecard manager");
define("_AM_CARDMGR_TIME","Data");
define("_AM_CARDMGR_SUNAME","Nome utente del mittente");
define("_AM_CARDMGR_SEMAIL","Email del mittente");
define("_AM_CARDMGR_SIP","Ip del mittente");
define("_AM_CARDMGR_PID","ID dell'immagine");
define("_AM_CARDMGR_STATUS","Scelto");
define("_AM_CARDMGR_DEL_SELECTED","Cancella l' ecard selezionata");
define("_AM_CARDMGR_DEL_ALL","Cancella tutte le ecard");
define("_AM_CARDMGR_DEL_PICKED","Cancella tutte le ecard scelte");
define("_AM_CARDMGR_DEL_UNPICKED","Cancella tutte le ecard non selezionate");
define("_AM_CARDMGR_CONPAGE","%d ecard su %d pagine");

?>
