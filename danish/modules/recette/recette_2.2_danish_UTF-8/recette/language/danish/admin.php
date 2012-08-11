<?php
// $Id: admin.php,v 1.8 2003/04/01 09:07:28 mvandam Exp $
// Support Francophone de Xoops (www.frxoops.org)
//%%%%%%        Admin Module Name  Articles         %%%%%
define('_AM_GEST_LNKCAT_TXTREDERR','Der er et problem !');
define('_AM_GEST_LNKCAT_TXTRED','Opdatering foretaget');
define('_AM_GEST_LNKCAT_SUBMIT','Opdater alt.');
define('_AM_GEST_LNKCAT','Link ikoner med nyheder');
define('_AM_ICON_TITLE','Vedligehold billeder');
define('_AM_ICON_CAT','Kategori');
define('_AM_ICON_DESCR','Beskrivelse');
define('_AM_ICON_IMG','Billed');
define('_AM_ADD_OK','Tilføj billed');
define('_AM_ADD_KO','Tilføj ikke billed');
define('_AM_DEL_OK','Ikon slettet'); 
define('_AM_DEL_KO','Ikon blev ikke slettet');

define('_AM_FUSION_TITLE','Tilføj ingrediens');
define('_AM_FUSION_SELECT','Vælg ingrediens');
define('_AM_FUSION_KEEP','Behold ingrediens');
define('_AM_FUSION_CHANGED','Skift ingrediens');
define('_AM_FUSION_SUBMIT','skift');
define('_AM_FUSION_PB','Resumé indeholder fejl. Kontroller at du har bekræftet handlingen på forrige side.');
define('_AM_FUSION_OK','Resumé opdateret.');
define('_AM_FUSION_ALERTE','Jeg accepterer at ændringerne ikke kan rettes tilbage til den originale form.<br />Dette vil erstatte den første ingrediens med den anden!');

define('_AM_DBUPDATED','Databasen er opdateret!');
define('_AM_CONFIG','Opskrift konfiguration');
define('_AM_AUTOARTICLES','Automatiske opskrifter');
define('_AM_STORYID','Opskrift-ID');
define('_AM_TITLE','Opskrift titel');
define('_AM_TOPIC','Opskrift kategori');
define('_AM_POSTER','Forfatter');
define('_AM_PROGRAMMED','Tidskontroleret udgivelse');
define('_AM_ACTION','Handling');
define('_AM_EDIT','Rediger');
define('_AM_DELETE','Slet');
define('_AM_LAST10ARTS','Sidste 10 opskrifter');
define('_AM_PUBLISHED','Offentliggjort den'); // Published Date
define('_AM_GO','Godkend!');
define('_AM_EDITARTICLE','Rediger opskrift');
define('_AM_POSTNEWARTICLE','Udgiv ny opskrift');
define('_AM_ARTPUBLISHED','Din opskrift er udgivet.');
define('_AM_HELLO','Hej %s,');
define('_AM_YOURARTPUB','Opskriften du har opretter er udgivet.');
define('_AM_TITLEC','Opskrit navn');
define('_AM_URLC','URL:');
define('_AM_PUBLISHEDC','Udgivet:');
define('_AM_RUSUREDEL','Er du sikker på at du vil slette denne opskrift og alle tilknyttede kommentar');
define('_AM_YES','Ja');
define('_AM_NO','Nej');
define('_AM_INTROTEXT','Introduction');
define('_AM_EXTEXT','Opskriften:');
define('_AM_ALLOWEDHTML','Tillad HTML');
define('_AM_DISAMILEY','Deaktiver smilies');
define('_AM_DISHTML','Deaktiver HTML');
define('_AM_APPROVE','Udgiv nu.');
define('_AM_MOVETOTOP','Flyt opskrift til toppen.');
define('_AM_CHANGEDATETIME','Ret dato/tid for udgivelsen');
define('_AM_NOWSETTIME','Udgivelsen er sat til: %s'); // %s is datetime of publish
define('_AM_CURRENTTIME','Aktuel tid: %s');  // %s is the current datetime
define('_AM_SETDATETIME','<strong>Angiv dato/tid for udgivelsen:</strong>');
define('_AM_MONTHC','Måned:');
define('_AM_DAYC','Dag:');
define('_AM_YEARC','År:');
define('_AM_TIMEC','Time:');
define('_AM_PREVIEW','Vis');
define('_AM_SAVE','Gem');
define('_AM_PUBINHOME','Vis på hovedsiden?');
define('_AM_ADD','Tilføj');

//%%%%%%        Admin Module Name  Topics         %%%%%

define('_AM_ADDMTOPIC','Tilføj en opskrift til hovedkategorien');
define('_AM_TOPICNAME','Opskrift navn');
define('_AM_MAX40CHAR','(max. 40 karakterer)');
define('_AM_TOPICIMG','Billed til opskrift-kategori');
define('_AM_IMGNAEXLOC','Filnavn på billed (incl. extension) findes på %s');
define('_AM_FEXAMPLE','z.B: games.gif');
define('_AM_ADDSUBTOPIC','Opret en underkategori');
define('_AM_IN','i');
define('_AM_MODIFYTOPIC','Ret opskrift-kategori');
define('_AM_MODIFY','Reg');
define('_AM_PARENTTOPIC','Parent recipe category (dansk mangler)');
define('_AM_SAVECHANGE','Gem ændringer');
define('_AM_DEL','Slet ');
define('_AM_CANCEL','Fortryd');
define('_AM_WAYSYWTDTTAL','ADVARSEL: Er du sikker på at du vil slette denne opskrift-kategori og alle opskrifter i den?');


// Added in Beta6
define('_AM_TOPICSMNGR','Kategori');
define('_AM_PEARTICLES','Ret opskrift');
define('_AM_NEWSUB','Nye registreringer');
define('_AM_POSTED','Udgivet');
define('_AM_GENERALCONF','Modul konfiguration');
define('_AM_CATEGPERMS','Rettigheder til kategori');

// Added in RC2
define('_AM_TOPICDISPLAY','Vil kategori billed');
define('_AM_TOPICALIGN','Position');
define('_AM_RIGHT','højre');
define('_AM_LEFT','venstre');

define('_AM_EXPARTS','Udløbet opskrifter');
define('_AM_EXPIRED','Udløbet');
define('_AM_CHANGEEXPDATETIME','Ret dato/tid for udløb');
define('_AM_SETEXPDATETIME','Angiv dato/tid for udløb');
define('_AM_NOWSETEXPTIME','I øjeblikket sat til : %s');

// Added in RC3
define('_AM_ERRORTOPICNAME','Du skal angive et kategori navn!');
define('_AM_EMPTYNODELETE','Intet at slette!');

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM','Rettigheder');
define('_AM_SELFILE','Vælg fil');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE','Fejl ved vedhæftning af fil');
define('_AM_UPLOAD_ERROR','Fejl ved upload af fil');
define('_AM_UPLOAD_ATTACHFILE','Vedhæftede fil(er)');
define('_AM_APPROVEFORM','Rettigheder til at udgive');
define('_AM_SUBMITFORM','Rettigheder til at indsende');
define('_AM_VIEWFORM','Rettigheder til at vise');
define('_AM_APPROVEFORM_DESC','Hvem må udgivne opskrifter ?');
define('_AM_SUBMITFORM_DESC','Hvem må indsende opskrifter ?');
define('_AM_VIEWFORM_DESC','Hvem må se opskrift-kategorier');
define('_AM_DELETE_SELFILES','Slet valgte fil(er)');
define('_AM_TOPIC_PICTURE','Upload billed');
define('_AM_UPLOAD_WARNING','<strong>HUSK at lave CHMOD 766 på  "%s" !</strong>');
define('_AM_ADD_TOPIC','Tilføj opskrifts-kategori');

define('_AM_RECETTE_UPGRADE','Opdater');
define('_AM_RECETTE_UPGRADECOMPLETE','Opdatering foretaget');
define('_AM_RECETTE_UPGRADEFAILED','Fejl ved opdatering');
define('_AM_UPDATEMODULE','Opdater modul template og blocks');

?>