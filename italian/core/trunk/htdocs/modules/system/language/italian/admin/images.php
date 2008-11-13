<?php
// $Id: images.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Gestione immagini');

define('_MD_ADDIMGCAT','Aggiungi una categoria di immagini:');
define('_MD_EDITIMGCAT','Modifica categoria di immagini:');
define('_MD_IMGCATNAME','Nome della categoria:');
define('_MD_IMGCATRGRP','Seleziona il gruppo che può usare questa categoria:<br /><br /><span style="font-weight: normal;">Questo gruppo è abilitato ad usare questa categoria di immagini ma non a caricare nuove immagini. Il webmaster ha automaticamente accesso.</span>');
define('_MD_IMGCATWGRP','Seleziona il gruppo abilitato a caricare nuove immagini:<br /><br /><span style="font-weight: normal;">Un utilizzo tipico prevede i gruppi Webmaster e Moeratori.</span>');
define('_MD_IMGCATWEIGHT','Ordine di visualizzaizone in gestione immagini:');
define('_MD_IMGCATDISPLAY','Visualizza questa categoria?');
define('_MD_IMGCATSTRTYPE','L\'immagine è stata caricata in:');
define('_MD_STRTYOPENG','Questo non può essere modificato successivamente	!');
define('_MD_INDB',' Salva nel database (come "blob" binario)');
define('_MD_ASFILE',' Salva come file (nella cartella uploads)<br />');
define('_MD_RUDELIMGCAT','Sei sicuro di voler cancellare questa categoria e tutte le sue immagini?');
define('_MD_RUDELIMG','Sei sicuro di voler cancellare questa immagine?');

define('_MD_FAILDEL', 'Errore durante l\'eliminazione dell\'immagine %s dal database');
define('_MD_FAILDELCAT', 'Errore durante l\eliminazione della categoria %s dal database');
define('_MD_FAILUNLINK', 'Errore durante l\'eliminazione dell\'immagine %s dalla cartella sul server');
?>