<div id="help-template" class="outer">
    <h1 class="head">Help: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Torna all'Amministrazione di Protector"> Protector <img src="<{xoAdminIcons home.png}>" alt="Torna all'Amministrazione di Protector"/></a></h1>
    <!-- -----Help Content ---------- -->
    <h4 class="odd">Descrizione</h4>
    <p class="even">Protector &egrave; un modulo per difendere il tuo CMS XOOPS da vari attacchi dannosi.</p>
    <h4 class="odd">Installa/Disinstalla</h4>
    <p>In primo luogo, definire XOOPS_TRUST_PATH in mainfile.php se non lo hai mai fatto ancora, normalmente dovrebbe essere gi&agrave; definito.</p>
    <br>
    <p>Copia l'archivio html/modules/protector nella cartella XOOPS_ROOT_PATH/modules/</p>
    <p>Copia l'archivio xoops_trust_path/modules/protector nella cartella XOOPS_TRUST_PATH/modules/</p>
    <br>
    <p>Dai i permessi di scrittura alla cartella XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Come salvare =</h4>
    <p class="even">Se sei stato bannato da Protector, basta cancellare i file sotto XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Introduzione per filtro-plugins in questo archivio.</h4>
    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Tutti i post dall'IP registrato in RBL saranno respinti.
        <br>
        Questo plugin pu&ograve;rallentare le prestazioni del Post, soprattutto con moduli per chattare.
    </p>
    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Tutti i post dall'IP registrato http:BL saranno respinti.
        <br>
        Prima di utilizzarlo, ottenere HTTPBL_KEY da http://www.projecthoneypot.org/ e impostare nel file del filtro.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>
    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        un plugin anti-SPAM.
        <br>
        Post senza caratteri multi-byte verranno rifiutati.
        <br>
        Questo plugin &egrave; solo per i siti giapponesi, tchinese, schinese e coreano.
    </p>
    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Tutti i dati dei post inviati da ospiti verranno purificati facendo HTMLPurifier.
        <br>
        Se si consente agli ospiti di inviare in HTML, vi raccomando vivamente di abilitare la.
    </p>
    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Questo plugin evita che il vostro sito registra un utente da dei robot.
        <br>
        Javascript lavorando dirottano sul browser.
    </p>
    <p>- bruteforce_overrun_message.php
        <br>
        Specifica un messaggio per i visitatori che hanno provato le password sbagliate oltre i tempi indicati.
        <br>
        Tutti i plugin di nome *_message.php specificano il messaggio di accessi rifiutati.
    </p>
    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Quando il limitatoree della larghezza di banda purtroppo non funziona, questo plugin registra in Apache's error_log.
    </p>
    <p>Tutti i plugin di nome *_errorlog.php accededono ad alcune informazioni in Apaches error_log.</p>
    <h4 class="odd">Tutorial</h4>
    <p class="even">Tutorial in arrivo.</p>
    <!-- -----Help Content ---------- -->
</div>
