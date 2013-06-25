<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
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

//italian translation by Bruschi for www.xoopsitalia.org

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> è un modulo il cui obiettivo è quello di aiutarvi a eseguire la manutenzione 
del vostro portale in modo semplice e <b>automatizzato</b>. 
Sebbene abbiamo sviluppato questo modulo nel migliore dei modi, <b>il suo utilizzo è a vostro rischio e pericolo!</b>. 

Con XoopsCare potrete:
1) Manutenere il vostro database (controllare, riparare, analizzare e otiimizzare le tabelle)
2) Eseguire le vostre query quando vorrete
3) Eseguire codice php quando vorrete
4) Pulire le cartelle /template_c e /cache
5) Rimuovere i commenti di spam
6) Pulire le sessioni

Per ogni azione sopracitata, potrete definire se vorrete farla oppure no e quando farla (sistema di pianificazione).

In più, potrete tenere un log di tutte le azioni fatte dal modulo e, se disponibile, usare un CRON per mantenere il tuo sito in ordine.

Se avete la possibilità di chiamare il modulo con CRON, allora semplicemente vi basterà eseguire il file 
<i>cron.php</i> presente nella root del modulo inviando la password che avete inserito nell'amministrazione
del modulo.
Vi basterà digitare il seguente URL: http://www.example.com/modules/xoopscare/cron.php?password=mypassword.
<b>Se usate cron e non immettete la password, il modulo non eseguirà nulla</b>; questo funzionamento protegge
il vostro sito da utenti non autorizzati che vogliono usarlo.

Se non avete la possibilità di schedulare un job con CRON, potrete piazzare il blocco di questo modulo ovunque nel vostro sito, 
e il modulo automaticamente e quando necessario, eseguirà tutte le operazioni da voi pianificate.

La prima cosa da fare è di andare nell'amministrazione del modulo e impostare le preferenze.
Nella prima parte <b>Preferenze Generali</b>, impostate la password CRON se usate CRON.
Se volete creare un file di log, valorizzate il form chiamato <i>File di Log</i>.
Nota: per ragioni di sicurezza, si raccomanda di dare al file di log l'estensione php (<u>filename.php</u>).

Nella sezione <b>Manutenzione del Database</b>, digitare un intervallo di tempo in giorni per il mantenimento del database.
Se viene immesso un valore nullo (0) allora non verrà eseguito nulla.
Questa operazione consiste nel controllare, riparare, analizzare e ottimizzare tutte le tabelle usate dal vostro portale Xoops.

Nella sezione <b>Query</b>, prima di tutto inserite un intervallo di tempo quindi (ma solo se ne hai bisogno), scrivete
delle query SQL da eseguire sul vostro database.
Nota: il modulo non modifica in nessun modo le vostre query, le legge e le esegue una alla volta.

Nella sezione <b>Codice Php</b> potete fare la stessa operazione descritta in quella precedente, ma questa volta per eseguire del codice PHP.

La sezione chiamata <b>Cache e Templates_c</b> vi dà la possibilità di ripulire le cartelle /cache e /templates_c 
(directory che si trovano nella root del vostro sito).

La sezione <b>Sessioni</b> vi darà la possibilità di cancellare la tabella delle sezioni dopo un intervallo di tempo dato.

Infine, usando la sezione chiamata <b>Commenti Spam</b>, potete rimuovere tutto i commenti contenenti spam del vostro sito.
Questa funzionalità del modulo si appoggia alla  <i>Impostazione di Censura delle parole</i> di Xoops.
Prima, dalle <i>Preferenze</i> del menu di amministrazione, voi dovete abilitare la censura delle parole indesiderate,
digitare i termini che volete filtrare e selezionare le parole sostitutive.
Di default, i termini censurati vengono sostituiti con #OOPS#.
XoopsCare cercherà nel contenuto e nei titoli dei commenti le parole indesiderate e applicherà le vostre impostazioni.
Inoltre, il modulo può estrarre gli IP degli spammer (a partire dai commenti) e, in modo automatizzato, aggiungere
questi IP nella lista dei bannati.
Infine, potete selezionare quello da fare con la lista dei commenti riconosciuti come SPAM, potete selezionarli, toglierli
dalla pubblicazione, nasconderli e cancellarli.

Se usate CRON per ripulire il sito, il ritardo temporale che avete inserito per ogni azione non è usato  ma questo intervallo 
deve essere maggiore di 0.

<a href="http://www.instant-zero.com" target="_blank">Facci sapere cosa ne pensi di XoopsCare</a>

endhelp;
?>
