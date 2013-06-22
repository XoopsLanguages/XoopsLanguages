<?php
//%%%%%%		Config files 		%%%%%
define("_AM_ONAIR_CONFIG","Konfigurer");
define("_AM_ONAIR_EDIT","Rediger");
define("_AM_ONAIR_EVENTDEL","Emne slettet");
define("_AM_ONAIR_EVENTMOD","Emne rettet");

//%%%%%%		Edit / Save / Delete 		%%%%%

define("_AM_ONAIR_DAY","Dag");
define("_AM_ONAIR_START","Start");
define("_AM_ONAIR_STOP","Stop");
define("_AM_ONAIR_STATION","Stationnavn");
define("_AM_ONAIR_ACTION","Handling");
define("_AM_ONAIR_NAME","Værtnavn");
define("_AM_ONAIR_IMAGE","Billede");
define("_AM_ONAIR_DESCRIPTION","Beskrivelse af program");
define("_AM_ONAIR_TITLE","Titel på program");
define("_AM_ONAIR_MESSAGE","Emne:");
define("_AM_ONAIR_IMAGE_SELECTFORMAT","Vælg billed format");
define("_AM_ONAIR_DEL","Slet");
define("_AM_ONAIR_SUBMIT","Send");
define("_AM_ONAIR_SUREDELETE","slet dette Emne?");
define("_AM_ONAIR_EDITENTRY","ret denne begivenhed");
define("_AM_ONAIR_EVENTAPPROVE","Emne er godkendt");
define("_AM_ONAIR_ENTRY","Lav nyt emne");
define("_AM_ONAIR_NODESCRIPTION","Ingen beskrivelse af dette program.");
define("_AM_ONAIR_PROGRAM_EDIT","Ret program");

//added 1.04
define("_AM_ONAIR_SONGSHOWALL","Vis alle sange");
define("_AM_ONAIR_SONGDEL","Sangen er slettet");
define("_AM_ONAIR_SONGMOD","Song er rettet");
define("_AM_ONAIR_SONG","Kunstner - Titel");
define("_AM_ONAIR_SONGID","Sang id: ");
define("_AM_ONAIR_SONGTITLE","Sangtitel");
define("_AM_ONAIR_SONGDATETIME","Dato/tid spillet");

//Added 1.05
define("_AM_ONAIR_UPLOADSONGS","Opload sang data");
define("_AM_ONAIR_UPLOADSONGSDESC","Vælg her formatet for din afspiller (eller afspiller plugin). (DireTTore or Playtime_Winamp_Plugin).<br /><br />Se indholdsformat hvis du skal oprette en customfil du skal oploade.<br><br>Sangene vil blive lagt individuelt in i en database med felterne dato, starttid, ugenummer, Artist - title, og år, og kan herefter bruges til at lave en chart / Hitliste af dine meste spillede sange.<br>");

//%%%%%%		Days 		%%%%%

define("_AM_ONAIR_SUNDAYNAME","Søndag");
define("_AM_ONAIR_MONDAYNAME","Mandag");
define("_AM_ONAIR_TUEDAYNAME","Tirsdag");
define("_AM_ONAIR_WEDDAYNAME","Onsdag");
define("_AM_ONAIR_THUDAYNAME","Torsdag");
define("_AM_ONAIR_FRIDAYNAME","Fredag");
define("_AM_ONAIR_SATDAYNAME","lørdag");
$oa_days = array( 
            0 => 'søndag', 1 => 'mandag', 
			2 => 'tirsdag', 3 => 'onsdag',
			4 => 'torsdag', 5 => 'fredag',
            6 => 'lørdag', 7 => 'søndag', 
            );

//%%%%%%		Images 		%%%%%

define("_AM_IMAGEUPLOAD_","opload nyt billede");
define("_AM_SELECT_IMAGE","Vælg billede");
define("_AM_ONAIR_ADDNEW","Tilføj nyt program");
define("_AM_ONAIR_UPLOADSUCCESS","<h4>Fil oploadet OK!</h4>");
define("AM_ONAIR_SAVEDAS","Gemt som: ");
define("_AM_ONAIR_FULLPATH","Fuld sti: ");
define("_AM_ONAIR_ADDIMAGE","Opload nyt billede");
define("_AM_ONAIR_GOING2UPLOADFORM","Henter Oploadform <br> Vent venligst....");

//%%%%%%		Plugins 		%%%%%

define("_AM_ONAIR_PLUGINSELECT","Vælg (Spiller nu sang) plugin der anvendes");
define("_AM_ONAIR_PLUGINNONE","-----");
define("_AM_ONAIR_PLUGINDIRETTORE","DireTTore (eller txt-file)");
define("_AM_ONAIR_PLUGINSP","StationPlaylist");
define("_AM_ONAIR_PLUGINWINAMP","Winamp (now playing 1.4)");

//%%%%%%		Stream 		%%%%%

define("_AM_ONAIR_STREAM","Url til stream fil (NULL er default)");

//%%%%%%		Various 		%%%%%

define("_AM_ONAIR_ERRORINSERT","Kunne ikke indsætte data");
define("_AM_ONAIR_DATE","Dato for udsendelse");
define("_AM_ONAIR_PLAYLIST","Tracklist (alternative info etc)");
define("_AM_ONAIR_PLAYLISTSHOWALL","Vis Playlister");
define("_AM_ONAIR_BACK2INDEX","Tilbage til hoved index");
define("_AM_ONAIR_MAKEPLAYLIST","Lav playliste");
define("_AM_ONAIR_PL","Udfra disse data");
define("_AM_ONAIR_ADDPLAYLIST","Lave NY playliste");
define("_AM_ONAIR_GOING2PLAYLISTFORM","Henter Playlistform....");

//%%%%%%		Messages 		%%%%%

define("_AM_ONAIR_NAMEMODULE","Onair");
define("_AM_ONAIR_NEWEVENT","Du har en ny event");
define("_AM_ONAIR_THANKS","Data er gemt!");
define("_AM_ONAIR_NOTEXISTEVENT","Du skal tilføje playliste udfra allerede eksisterende event!");
define("_AM_ONAIR_SHOWPLAYLISTS","Vis alle playlister");
define("_AM_ONAIR_HELP","Hjælp");

?>