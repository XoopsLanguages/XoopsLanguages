<?php
// $Id: main.php,v 1.4 2005/09/22 08:08:02 mcleines Exp $
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
// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","Bytes");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s immagine/i");
define("_MD_PICS","Immagini");
define("_MD_ALBUM","Album");
define("_MD_ERROR","INDIETRO");
define("_MD_KEYS","Parole chiave");
define("_MD_CONTINUE","CONTINUA");

define("_MD_RANDOM","Immagini random");
define("_MD_LASTUP","Ultimi upload");
define("_MD_LASTCOM","Ultimi commenti");
define("_MD_TOPN","I pi&ugrave; visti");
define("_MD_TOPRATED","I pi&ugrave; votati");
define("_MD_LASTHITS","Ultimi visti");
define("_MD_SEARCH","Risultati ricerca");
define("_MD_USEARCH","Immagine inviata da ");
define("_MD_MOST_SENT","Le ecard pi&ugrave; inviate");

define("_MD_ACCESS_DENIED","Non hai i permessi per accedere a questa pagina.");
define("_MD_PERM_DENIED","Non hai i permessi per effettuare questa operazione.");
define("_MD_PARAM_MISSING","Script chiamato senta i necessari parametri.");
define("_MD_NON_EXIST_AP","L'album/immagine selezionato non esiste !");
define("_MD_QUOTA_EXCEEDED","Quota disco superata<br /><br />Hai uno spazio quota di [quota]K, le tue immagini usano al momento [space]K, l'aggiunta di questa immagine potrebbe superare la tua quota.");
define("_MD_GD_FILE_TYPE_ERR","Se si utilizzano le librerie GD si possono gestire solo immagini di tipo JPEG e PNG.");
define("_MD_INVALID_IMG","L'immagine che hai inviato è corrotta o non pu&oacute; essere gestita dalle librerie GD");
define("_MD_RESIZE_FAILED","Impossibile creare la thumbnail o l'immagine con dimensioni ridotte .");
define("_MD_NO_IMG_TO_DISPLAY","Nessuna immagine da visualizzare");
define("_MD_NO_EXIST_CAT","La categoria selezionata non esiste");
define("_MD_ORPHAN_CAT","Una categoria non ha il padre, usa il gestore delle categorie per correggere il problema.");
define("_MD_DIRECTORY_RO","La directory '%s' non è scrivibile, le immagini non possono essere eliminate");
define("_MD_PIC_IN_INVALID_ALBUM","L'immagine è in un album che non esiste (%s)!?");
define("_MD_GD_VERSION_ERR","PHP sul tuo server non supporta le librerie GD versione 2.x, cambia l'impostazione nella pagina di configurazione in GD versione 1.x");
define("_MD_NO_GD_FOUND","PHP sul tuo server non supporta le librerie GD, verifica con il gestore del server se ImageMagick o Netpbm sono istallati");
define("_MD_IM_ERROR","Errore nell'esecuzione di ImageMagick - Valore ritornato:");
define("_MD_IM_ERROR_CMD","Linea di comando :");
define("_MD_IM_ERROR_CONV","Il programma di conversione ha detto:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Vai alla lista degli album");
define("_MD_THM_ALB_LL","Lista album");
define("_MD_THM_GAL_MYT","Vai alla mia galleria personale");
define("_MD_THM_GAL_MYL","La mia galleria");
define("_MD_THM_ADM_MT","Passa alla modalit&aacute; amministratore");
define("_MD_THM_ADM_ML","Modalit&aacute; amministratore");
define("_MD_THM_USER_MT","Passa alla modalit&aacute; utente");
define("_MD_THM_USER_ML","Modalit&aacute; utente");
define("_MD_THM_UPLT","Upload un'immagine in un album");
define("_MD_THM_UPLL","Upload immagine");
define("_MD_THM_UPLLMORE","Upload pi&ugrave; immagini");
define("_MD_THM_LAST_UPL","Ultimi uoload");
define("_MD_THM_LAST_COM","Ultimi commenti");
define("_MD_THM_MOST_VIEW","I pi&ugrave; visti");
define("_MD_THM_TOP_RATE","I pi&ugrave; votati");
define("_MD_THM_SEARCH","Ricerca");
define("_MD_THM_UPL_APPR","Approvazione upload");

define("_MD_THM_ALBMGR_LNK","Crea / ordina i miei albums");
define("_MD_THM_MODIFY_LNK","Modifica i miei album");
define("_MD_THM_CAT","Categoria");
define("_MD_THM_ALB","Album");
define("_MD_THM_PIC","Immagini");
define("_MD_THM_ALBONPAGE","%d album su %d pagina/e");
define("_MD_THM_DATE","DATA");
define("_MD_THM_NAME","NOME FILE");
define("_MD_THM_SORT_DA","Ordina per data in ordine crescente");
define("_MD_THM_SORT_DD","Ordina per data in ordine decrescente");
define("_MD_THM_SORT_NA","Ordina per nome in ordine crescente");
define("_MD_THM_SORT_ND","Ordina per nome in ordine decrescente");
define("_MD_THM_PICPAGE","%d immagini su %d pagina/e");
define("_MD_THM_USERPAGE","%d utenti su %d pagina/e");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Nome file : ");
define("_MD_FUNC_FSIZE","Dimensione file : ");
define("_MD_FUNC_DIM","Dimensioni : ");
define("_MD_FUNC_DATE","Data inserimento : ");
define("_MD_FUNC_COM","%s commenti");
define("_MD_FUNC_VIEW","%s visite");
define("_MD_FUNC_VOTE","%s voti");
define("_MD_FUNC_SEND","%s volte");
define("_MD_FUNC_DELUSER","Utente eliminato");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Sto lasciando la modalit&aacute; amministrazione...");
define("_MD_ADMIN_ENTER","Sto entrando nella modalit&aacute; amministrazione...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","L'album deve avere un nome!");
define("_MD_ALBMGR_CONF_MOD","Sei sicuro di queste modifiche?");
define("_MD_ALBMGR_NO_CHANGE","Non hai fatto alcun cambiamento!");
define("_MD_ALBMGR_NEW_ALB","Album nuovo");
define("_MD_ALBMGR_CONF_DEL1","Sei sicuro di voler eliminare questo album?");
define("_MD_ALBMGR_CONF_DEL2","Tutte le immagini e i commenti in esso contenute saranno eliminate!");
define("_MD_ALBMGR_SELECT_FIRST","Seleziona l'album prima");
define("_MD_ALBMGR_ALB_MGR","Gestione album");
define("_MD_ALBMGR_MY_GAL","* La mia galleria *");
define("_MD_ALBMGR_NO_CAT","* Nessuna categoria *");
define("_MD_ALBMGR_DEL","Elimina");
define("_MD_ALBMGR_NEW","Nuovo");
define("_MD_ALBMGR_APPLY","Applica le modifiche");
define("_MD_ALBMGR_SELECT","Seleziona la categoria");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Devi indicare un titolo per questo album!");
define("_MD_DB_NO_NEED","Nessun aggiornamento necessario.");
define("_MD_DB_ALB_UPDATED","L'album è stato aggiornato");
define("_MD_DB_UNKOWN","L'album selezionato non esiste o non hai i permessi per fare upload in questo album");
define("_MD_DB_NO_PICUP","Nessuna immagine è stata caricata!<br /><br />Se hai selezionato un immagine da caricare, verifica che il server permetta l'upload dei file...");
define("_MD_DB_ERR_MKDIR","Errore nella creazione della directory %s !");
define("_MD_DB_DEST_DIR_RO","La directory di destinazione %s è protetta in scrittura!");
define("_MD_DB_ERR_FEXT","Sono accettati solo file con le seguenti estensioni : <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Impossibile spostare %s in %s!");
define("_MD_DB_ERR_PIC_SIZE","Le dimensioni dell'immagine che hai caricato sono troppo grandi (il massimo permesso è %s x %s");
define("_MD_DB_ERR_FSIZE","La dimensione del file che hai caricato è troppo grande (il massimo permesso è %s KB) !");
define("_MD_DB_ERR_IMG_INVALID","Il file che hai caricato non è un'immagine valida !");
define("_MD_DB_IMG_ALLOWED","Puoi solo caricare %s immagini.");
define("_MD_DB_ERR_INSERT","L'immagine '%s' non pu&oacute; essere inserita in questo album ");
define("_MD_DB_UPLOAD_SUCC","La tua immagine è stata caricata con successo<br /><br />Sar&aacute; visibile dopo l'approvazione dell'amministratore.");
define("_MD_DB_UPL_SUCC","La tua immagine è stata aggiunta");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Descrizione");
define("_MD_DEL_FS_PIC","dimensione immagine");
define("_MD_DEL_DEL_SUCCESS","cancellata con successo");
define("_MD_DEL_NS_PIC","dimensione immagine normale");
define("_MD_DEL_ERR_DEL","non pu&oacute; essere eliminata");
define("_MD_DEL_THUMB","thumbnail");
define("_MD_DEL_COMMENT","commento");
define("_MD_DEL_IMGALB","immagine nell'album");
define("_MD_DEL_ALB_DEL_SUC","Album '%s' cancellato");
define("_MD_DEL_ALBMGR","Gestione album");
define("_MD_DEL_INVALID","Dati ricevuti in '%s' non validi");
define("_MD_DEL_CREATE","Creazione album '%s'");
define("_MD_DEL_UPDATE","Aggiornamento album '%s' con titolo '%s' e indice '%s'");
define("_MD_DEL_DELPIC","Elimina immagine");
define("_MD_DEL_DELALB","Elimina album");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Sei sicuro che vuoi ELIMINARE questa immagine ? Anche i commenti saranno eliminati.");
define("_MD_DIS_DEL_PIC","ELIMINA QUESTA IMMAGINE");
define("_MD_DIS_SIZE","%s x %s pixel");
define("_MD_DIS_VIEWS","%s volte");
define("_MD_DIS_SLIDE","Slideshow");
define("_MD_DIS_STOP_SLIDE","FERMA SLIDESHOW");
define("_MD_DIS_FULL","Click per vedere l'immagine a dimensioni reali");
define("_MD_DIS_TITLE","Informazioni immagine");
define("_MD_DIS_FNAME","Nome file");
define("_MD_DIS_ANAME","Nome album");
define("_MD_DIS_RATING","Voto (%s voti)");
define("_MD_DIS_FSIZE","Dimensione file");
define("_MD_DIS_DIMEMS","Dimensioni");
define("_MD_DIS_DISPLAYED","Visualizzata");
define("_MD_DIS_CAMERA","Camera");
define("_MD_DIS_DATA_TAKEN","Data");
define("_MD_DIS_APERTURE","Apertura");
define("_MD_DIS_EXPTIME","Tempo di esposizione");
define("_MD_DIS_FLENGTH","Lunghezza focale");
define("_MD_DIS_COMMENT","Commento");
define("_MD_DIS_BACK_TNPAGE","Ritorna alla pagina delle thumbnail");
define("_MD_DIS_SHOW_PIC_INFO","Visualizza/nascondi le informazioni dell'immagine");
define("_MD_DIS_SEND_CARD","Invia questa immagine come e-card");
define("_MD_DIS_CARD_DISABLE","le e-cards sono disabilitate");
define("_MD_DIS_CARD_DISABLEMSG","Non hai i permessi per inviare le ecards");
define("_MD_DIS_NEXT","Vedi immagine successiva");
define("_MD_DIS_PREV","Vedi immagine precedente");
define("_MD_DIS_PICPOS","IMMAGINE %s/%s");
define("_MD_DIS_RATE_THIS","Vota questa immagine ");
define("_MD_DIS_NO_VOTE","(Ancora non votato)");
define("_MD_DIS_RATINGCUR","(votazione corrente : %s / 5 con %s voti)");
define("_MD_DIS_RUBBISH","Scadente");
define("_MD_DIS_POOR","Scarso");
define("_MD_DIS_FAIR","sufficiente");
define("_MD_DIS_GOOD","Buono");
define("_MD_DIS_EXCELLENT","Eccellente");
define("_MD_DIS_GREAT","Grandioso");
define("_MD_DIS_UPLOADER","Inviato da");
define("_MD_DIS_EXIF_ERR","PHP su questa macchina non supporta la lettura dei dati EXIF nei file JPEG, disabilita questa feature nella pagina delle impostazioni.");
define("_MD_DIS_VIEW_MORE_BY","vedi pi&ugrave; immagini inviate da");
define("_MD_DIS_SUBIP","Ip di chi ha inviato l'imamgine");
define("_MD_DIS_SENT","Invia come ecard");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Invia come e-card");
define("_MD_CARD_INVALIDE_EMAIL","<b>Attenzione</b> : indirizzo email non valido!");
define("_MD_CARD_ECARD_TITLE","Una e-card da %s per te");
define("_MD_CARD_VIEW_ECARD","Se la e-card non viene visualizzata correttamente, fai click qui");
define("_MD_CARD_VIEW_MORE_PICS","Click su questo link per visualizzare pi&ugrave; immagini!");
define("_MD_CARD_SEND_SUCCESS","La tua ecard è stata spedita");
define("_MD_CARD_SEND_FAILED","Spiacente ma il server non riesce a spedire la tua e-card...");
define("_MD_CARD_FROM","Da");
define("_MD_CARD_YOUR_NAME","Il tuo nome");
define("_MD_CARD_YOUR_EMAIL","Il tuo indirizzo email");
define("_MD_CARD_TO","A");
define("_MD_CARD_RCPT_NAME","Nome del destinatario");
define("_MD_CARD_RCPT_EMAIL","Email del destinatario");
define("_MD_CARD_GREETINGS","Saluti");
define("_MD_CARD_MESSAGE","Messaggio");
define("_MD_CARD_PERHOUR","Sei abilitato solo ad inviare %s ecard all'ora. Prova pi&ugrave; tardi.");
define("_MD_CARD_NOTINDB","Impossibile inserire i dati nel database!<br />Contatta il gestore del sito.");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Informazioni&nbsp;immagine");
define("_MD_EDITPICS_TITLE","Titolo");
define("_MD_EDITPICS_DESC","Descrizione");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s visualizzazioni - %s voti");
define("_MD_EDITPICS_APPROVE","Approva immagine");
define("_MD_EDITPICS_PP_APPROVE","Posponi approvazione");
define("_MD_EDITPICS_DEL_PIC","Elimina immagine");
define("_MD_EDITPICS_RVIEW","Azzera contatore visualizzazioni");
define("_MD_EDITPICS_RVOTES","Azzera voti");
define("_MD_EDITPICS_DCOM","Elimina commenti");
define("_MD_EDITPICS_UPL_APPROVAL","Upload approvate");
define("_MD_EDITPICS_EDIT","Modifica immagini");
define("_MD_EDITPICS_NEXT","Vedi immagine successiva");
define("_MD_EDITPICS_PREV","Vedi immagine precedente");
define("_MD_EDITPICS_NUMDIS","Numero di immagini da visualizzare");
define("_MD_EDITPICS_APPLY","Applica modifiche");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Sei sicuro di voler eliminare questo album? Tutte le immagini e i commenti saranno eliminati.");
define("_MD_INDEX_DEL","ELIMINA");
define("_MD_INDEX_MOD","PROPRIETA");
define("_MD_INDEX_EDIT","MODIFICA IMMAGINI");
define("_MD_INDEX_STAT1","<b>[pictures]</b> immagini in <b>[albums]</b> album e <b>[cat]</b> categorie con <b>[comments]</b> commenti visualizzati <b>[views]</b> volte");
define("_MD_INDEX_STAT2","<b>[pictures]</b> immagini in <b>[albums]</b> album visualizzati <b>[views]</b> volte");
define("_MD_INDEX_USERS_GAL","Galleria di %s");
define("_MD_INDEX_STAT3","<b>[pictures]</b> immagini in <b>[albums]</b> album con <b>[comments]</b> commenti visualizzati <b>[views]</b> volte");
define("_MD_INDEX_ULIST","Lista utenti");
define("_MD_INDEX_NO_UGAL","Non ci sono gallerie utenti");
define("_MD_INDEX_NALBS","%s album");
define("_MD_INDEX_NPICS","%s immagini");
define("_MD_INDEX_LASTADD",", ultima aggiunta su %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Aggiorna album %s");
define("_MD_MODIFYALB_GEN_SET","Impostazioni generali");
define("_MD_MODIFYALB_ALB_TITLE","Titolo album");
define("_MD_MODIFYALB_ALB_CAT","Categoria album");
define("_MD_MODIFYALB_ALB_DESC","Descrizione album");
define("_MD_MODIFYALB_ALB_THUMB","Album thumbnail");
define("_MD_MODIFYALB_ALB_PERM","Permessi di questo album");
define("_MD_MODIFYALB_CAN_VIEW","L'album pu&oacute; essere visto da");
define("_MD_MODIFYALB_CAN_UPLOAD","I visitatori possono inviare immagini");
define("_MD_MODIFYALB_CAN_COM","I visitatori possono inviare commenti");
define("_MD_MODIFYALB_CAN_RATE","I visitatori possono votare le immagini");
define("_MD_MODIFYALB_USER_GAL","Galleria utente");
define("_MD_MODIFYALB_NO_CAT","* Nessuna categoria *");
define("_MD_MODIFYALB_ALB_EMPTY","L'album è vuoto");
define("_MD_MODIFYALB_LAST_UPL","Ultimo invio");
define("_MD_MODIFYALB_PUB_ALB","Tutti (album pubblico)");
define("_MD_MODIFYALB_ME_ONLY","Solo me");
define("_MD_MODIFYALB_OWNER_ONLY","Proprietario dell'album (%s) solamente");
define("_MD_MODIFYALB_GROUP_ONLY","Membro del gruppo '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","Non puoi modificare alcun album nel database.");
define("_MD_MODIFYALB_UPDATE","Aggiorna album");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Spiacente, ma hai gi&aacute; votato questa immagine");
define("_MD_RATE_OK","Il tuo voto è stato accettato");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Cerca tra le immagini");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Upload immagine");
define("_MD_UPL_MAX_FSIZE","Dimensione massima del file consentita, %s KB");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Immagine");
define("_MD_UPL_PIC_TITLE","Titolo immagine");
define("_MD_UPL_DESCRIPTION","Descrizione immagine");
define("_MD_UPL_KEYWORDS","Parole chiave (separate da spazi)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Spiacente, non ci sono album su cui sei autorizzato a caricare immagini");
define("_MD_UPL_YOURALB","I tuoi album privati");
define("_MD_UPL_ALBPUB","Album pubblici");
define("_MD_UPL_OUSERALB","Album degli altri utenti");



?>
