<?php
// General usage
define('_AM_SH_CONFIG','Shoutbox Admin');
define('_AM_SH_POSTER','gebruiker');
define('_AM_SH_MESSAGE','Bericht');
define('_AM_SH_INVALID_ID','ID bevat geen shout');

// index.php
define('_AM_SH_CHOOSE','Wat dient er te gebeuren?');
define('_AM_SH_EDIT_DB','Shouts in database bewerken');
define('_AM_SH_EDIT_FILE','Shouts in bestand bewerken');
define('_AM_SH_EDIT_INUSE','In gebruik');
define('_AM_SH_STATUSOF','Status van shoutbox');

// shoutboxEdit.php
define('_AM_SH_EDIT_TITLE','Shout bewerken [geplaatst op %s]');
define('_AM_SH_EDIT_FROM','Van'); // Ex: "From: 127.0.0.1"

// shoutboxList.php
define('_AM_SH_LIST_TIME','Tijd');
define('_AM_SH_LIST_ACTION','Actie');
define('_AM_SH_LIST_NOSHOUTS','Geen Shouts');

// shoutboxRemove.php
define('_AM_SH_REMOVE_TITLE','Shout verwijderen [geplaatst op %s]');
define('_AM_SH_REMOVE_SUCCES','Shout verwijderd!');
define('_AM_SH_REMOVE_FAILURE','ERROR - kon query niet uitvoeren...');
define('_AM_SH_REMOVE_FROM','Van');

// shoutboxStatus.php
define('_AM_SH_STATUS_TITLE','Shoutbox Status');
define('_AM_SH_STATUS_STORAGETYPE','Opslagtype');
define('_AM_SH_STATUS_INDB','Shouts in database');
define('_AM_SH_STATUS_INFILE','Shouts in bestand');
define('_AM_SH_STATUS_SIZEDB','Tabelgrootte shoutbox');
define('_AM_SH_STATUS_SIZEFILE','Bestandsgrootte shoutbox');

// shoutboxFile.php
define('_AM_SH_FILE_TITLE','shout.cvs bewerken');
define('_AM_SH_FILE_SOURCE','Bron van shout.cvs');
define('_AM_SH_FILE_SOURCED','Regels van shout.cvs bewerken/verwijderen. Laat de structuur van het bestand intact. (wijzig regel voor regel).');
define('_AM_SH_FILE_HASH','Update forceren');
define('_AM_SH_FILE_HASHD','Hashcontrole overslaan zodat bestand bijgewerkt kan worden.'); // Hash fail: file has been updated (read: shout added) during editing
define('_AM_SH_FILE_HASH_FAILED','Hashcontrole mislukt!');
define('_AM_SH_FILE_UPDATED','Bestand bijgewerkt');
define('_AM_SH_FILE_FAILED','Kon bestand niet openen!');

//5.01
define('_AM_SHOUTBOX_CURRENT_SELECTION','Huidige selectie');