<div id="help-template" class="outer">
<h1 class="head">Guida: Templates</h1>

<h4 class="odd">Descrizione</h4>
<p class="even">
XOOPS permette una separazione tra la presentazione visualizzata (la “<em>pelle</em>” o interfaccia utente) e il codice che lavora dietro le quinte. La prima &egrave; gestita da un complesso meccanismo basato su temi grafici. Un tema pu&ograve; includere, di base, i templates (modelli) HTML che definiscono l'iterfaccia visuale del sito, cos&igrave; come i fogli di stile e le immagini necessarie a completare l'effetto visivo. Il tema utilizzato pu&ograve; essere cambiato mmolto facilmente selezionandone uno a scleta in amministrazione (Impostazioni generali). XOOPS inoltre permette agli amministratori di lasciar decidere agli utenti quale tema utilizzare per il sito.
<br /><br />

In generale un <strong><em>tema</em></strong>definisce il layout visuale di un sito, mentre di norma non definisce la distribuzione specifica del contenuto in un blocco o in una pagina. Quest'aspetto viene gestito da un'altro elemento chiamato <em><strong>set di template</strong></em>. Un set di template &egrave; un insime di template HTML che definiscono la presentazione del contenuto all'interno di ogni blocco/pagina di un sito XOOPS. Utilizzando una metafora si pu&ograve; dire che un tema &egrave; la struttura che sostiene una casa, mentre i template sono gli arredamenti e le decorazioni interne. La prima sostiene i muri e definisce gli spazi e i secondi si occupano di <em>vestire</em> le pareti.
<br /><br />

Se il tema attivo &egrave; include un solo file HTML, file CSS e alcune immagini, XOOPS utilizza il set di template di default per blocchi e pagine. Altri temi, pi&ugrave; sofisticati, includono invece anche template propri inseriti in una cartella 'modules' all'interno di quella del tema, che andranno a 'sovrascrivere' i template di default.
<br /><br />

Come funziona un tema? Ovvero come normali pagine HTML possono includere contenuti dinamici? Il segreto &egrave; un motore di template che si chiama <strong><a rel="external" href="http://www.smarty.net/">Smarty</a></strong> che si basa sull'<em><strong>interpolazione di variabili</strong></em>. In parole semplici si pu&ograve; dire che XOOPS utilizza: file PHP per gestire la logica del sistema e dei moduli (accesso al database, allocazione di variabili, gestione dei permessi...), file HTML con variabili Smarty per l'interfaccia visiva e il motore Smarty per inserire valori e stringhe in posizioni specifiche dell'HTML che costruisce le pagine visualizzate dall'utente. Riassumendo, grazie al suo sitema per gestire i temi, XOOPS permette ai web designers di sviluppare layout d'effetto senza doversi preoccupare di conoscere elementi di programmazione. 

<h4 class="odd">Generazione/Clonazione di un set di template</h4>
<p class="even">
&Egrave; possibile generare una copia di un set template accedendo alla sezione 'Gestione Templates', selezionando il tema, impostando il modulo dei cui templates si desidera una copia e premendo 'Invia'. Quest'azione creer&agrave; in automatico nel tema selezionato una cartella 'modules' contenente i template del modulo selezionato o di tutti i moduli se si &egrave; deciso di clonare tutti i templates del sito (sconsigliato).
</p>

<h4 class="odd">Modificare un template</h4>
<p class="even">
Con XOOPS &egrave; possibile modificare il codice di un template direttamente tramite interfaccia web.
Per modificare un template accedere alla sezione 'Gestione Templates', selezionare nella colonna a sinistra il tema ove risiedono i templates precedentemente generati, aprire al cartella 'modules', fare click sul file desiderato e modificare il codice html/css del template secondo necessit&agrave;. Una volta terminate le modifiche premere il pulsante in alto per salvare. In caso di errore &egrave; possibile ripristinare il template originario aprendolo come in precedenza e premendo il pusante Ripristina in alto.
<br /><br />

Si ricorda che per poter visualizzare gli effetti delle modifiche ai file html (che siano di un tema o di un template)) &egrave; necessario attivare l'opzione 'Permettere/visualizzare le modifiche a temi e templates' nelle impostazioni generali, che abilita l'aggiornamento permanente, da parte del sistema, di tutti i file .html presenti nella cartella del vostro tema. Quest'opzione dovrebbe essere disabilitata su un sito in produzione.
</p>

</div>