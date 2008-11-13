<?
/*****************************************************************************************
 *  WebChat - multiple private/open room chat system for PostNuke                        *
 *****************************************************************************************
 *   David "Cyklone" Thompson   david@thompsonville.net                                  *
 *   portions credited to Daniel Toma [dt@dnt.ro] [http://www.webdev.ro]                 *
 *****************************************************************************************
 *  Read CHANGELOG for updates and bug fixes                                             *
 *****************************************************************************************
 * POST-NUKE Content Management System                                                   *
 * Copyright (C) 2001 by the Post-Nuke Development Team.                                 *
 * http://www.postnuke.com/                                                              *
 * --------------------------------------------------------------------------------------*
 * Based on:                                                                             *
 * PHP-NUKE Web Portal System - http://phpnuke.org/                                      *
 * Thatware - http://thatware.org/                                                       *
 *****************************************************************************************/

// Main
define("_WCAPPNAME" , "WebChat");
define("_WCTITLE" , "%s "._WCAPPNAME);
define("_WCCHATCHARSET" , "ISO-8859-2");
define("_WCNOACTIVE" , "Brak pokoi");
define("_WCBACKLIST" , "Cofnij do listy z pokojami");
define("_WCINVALIDROOM" , "Wybra�e� b��dny pok�j. Wybierz jeszcze raz");
define("_WCNONICK" , "A gdzie nick/pseudo?");
define("_WCPWREQROOM" , "Wymagane jest has�o");
define("_WCINVUSERPW" , "B��dne has�o lub nazwa u�ytkownika");
define("_WCROOMNAME" , "Pok�j");
define("_WCROOMTYPE" , "Typ");
define("_WCROOMDESC" , "Opis");
define("_WCROOMOCCUPANTS" , "Czatuj�cych");
define("_WCPASSWORD" , "Has�o");
define("_WCACTION" , "Akcja");
define("_WCNORMROOM" , "Pokoje og�lnodost�pne");
define("_WCPRIVROOM" , "Pokoje prywatne");
define("_WCENTERUNAME" , "Nazawa u�ytkownika");
define("_WCINVROOMPW" , "B��dne has�o dla %s");
define("_WCREGONLY" , "%s tylko dla zarejestrowanych u�ytkownik�w");
define("_WCALREADYINROOM" , "U�ytkownik z twoim nickiem %s  jest zalogowany w %s z tym samym adresem IP.<br>Tablica u�ytkownik�w czyszczona jest co %s sekund. Po tym czasie spr�buj zn�w.");
define("_WCUSERENTER" , "% wpad� na czata");
define("_WCPWREQ" , "Wymagane has�o");
define("_WCENTERPW" , "Podaj has�o");
define("_WCUSERS" , "os�b");
define("_WCJOINROOM" , "Do��cz do pokoju");
define("_WCCHATTIPS" , "Tips: Wstaw tekst mi�dzy gwiazdki <b>*</b> aby <b>wyt�u�ci�</b>, lub w podkre�leniach <b>_</b> dla <i>kursywy</i>");
define("_WCFILLFIELDS" , "Wype�nij obowi�zkowe pola");
define("_WCREQFIELDS" , "* = pola obowi�zkowe");
define("_WCPASSOPT" , "** = Wa�ne tylko dla pokoi prywatnych");
define("_WCCHATWELCOME" , "Witaj na czacie <br>Prowad� prosz� kulturalne pogaw�dki");
define("_WCQUIT","Dzi�ki za u�ywanie "._WCAPPNAME.", na Polonia-IT.org. Wpadnij tu kiedy�");
define("_WCQUITREASON0" , "%s, opu�ci�e� %s.");
define("_WCQUITREASON1" , "%s, Wywalono Ci� z %s bo nie jeste� tu zalogowany!");

// Admin 
define("_WCADMINMENU",    _WCAPPNAME." Administration");
define("_WCADMINGEN" , "General Chat Settings");
define("_WCADMINROOMS" , "Chat Rooms Management");
define("_WCADMINSMILES" , "Smiley Management");
define("_WCADMINSOUNDS" , "Sounds Management");
define("_WCADMINSPECIAL" , "Special Room Functions");
define("_WCADMINDBHOST" , "DB Host (readonly)");
define("_WCADMINDBUNAME" , "DB Username (readonly)");
define("_WCADMINDBPW" , "DB Password (readonly)");
define("_WCADMINDBNAME" , "DB Name (readonly)");
define("_WCADMINDBPREFIX" , "DB Prefix (readonly)");
define("_WCADMINSMILE" , "Smilies");
define("_WCADD","Add");
define("_WCMODIFY" , "Modify");
define("_WCDELETE" , "Delete");
define("_WCNOTEMPTY" , "Cannot delete room. Please evacuate users first");
define("_WCADMINROOMSDESC" , "Create, modify and delete chat rooms");
define("_WCADMINGENDESC" , "Configure general settings for WebChat behaviour");
define("_WCADMINSPECIALDESC" , "Globally message rooms or kick users (not implemented yet)");
define("_WCADMINSMILEDESC" , "Add, edit and delete smilies");
define("_WCADMINSOUNDDESC" , "Add, edit and delete sounds");
define("_WCADMINMSGREFRESH" , "Message refresh time (millisecs)");
define("_WCADMINUSRTIME" , "User/messages age (secs)");
define("_WCADMINSHOWSMILES" , "Show smiley shortcuts");
define("_WCADMINSMILESDIR" , "Smilies directory");
define("_WCADMINUSESOUNDS" , "Use sounds");
define("_WCADMINSHOWSOUNDS" , "Show sound shortcuts (not implemented yet)");
define("_WCADMINSNDSDIR" , "Sounds directory");
define("_WCADMINSHOWUSRS" , "Show list of user names");
define("_WCADMINKEEPONLINE" , "Keep session alive on site");
define("_WCADMINGENMSG1" , "WebChat window runs standalone and requires the db settings (these are pulled from your PN config)");
define("_WCADMINGENMSG2" , "General WebChat window behavior");
define("_WCADMINCURSMILEDIR" , "Current Smiley Directory");
define("_WCADMINCURSOUNDDIR" , "Current Sounds Directory");
define("_WCSMILEID" , "SID");
define("_WCSMILEIMAGE" , "Image");
define("_WCSMILECODE" , "Code");
define("_WCSMILEFILE" , "Filename");
define("_WCSMILEEMOTION" , "Emotion");
define("_WCSMILESHOW" , "Show shortcut");
define("_WCSOUNDCMD" , "Command");
define("_WCSOUNDFILE" , "Filename");
define("_WCSOUNDTEXT" , "Chat Say Text");
define("_WCSOUNDSHOW" , "Show shortcut");
define("_WCYES","Yes");
define("_WCNO","No");
define("_WCSAVESETTINGS" , "Save Settings");
define("_WCSETTINGSSAVED" , "Settings saved successfully");
define("_WCSETTINGSERR" , "Settings could not be saved!");
define("_WCONLINE" , "online");
define("_WCALLOWCREATE" , "Allow users to create rooms");
define("_WCONLYREGCANCREATE" , "Only registered users can create rooms");
define("_WCCREATEAROOM" , "Create your own chat room");
define("_WCORIGINAL" , "Original");

// help
define("_WCHELPTITLE",   _WCAPPNAME." Help");
define("_WCHELPSMILETBL" , "Installed Smilies<br><br>The [code] column shows what is typed in your text to achieve the smiley displayed in the [Image] column.");
define("_WCHELPSOUNDTBL" , "Installed Sounds<br><br>The [command] column shows what command is typed to hear the sound.  The [Chat say text] column is the text that is displayed.");
define("_WCHELPSOUNDTBLOPTS" , "<b>Options:</b><br><b><i><username></i></b>  if a username is specified the sound is directly to only them.<br>i.e. <b><i>/hey judy</i></b> will send the sound to Judy only.");
define("_WCHELPTEXT1" , "How to use smilies in your text");
define("_WCHELPTEXT2" , "How to invoke sounds in the chat");
define("_WCHELPTEXT3" , "What other commands are supported");
define("_WCHELPTOP" , "Back to top");
define("_WCHELPCLOSE" , "Close window");
define("_WCHELPNODATA" , "No %s installed at this time");
define("_WCHELPCMDTBL" , "Supported commands");
define("_WCHELPCMDDESC" , "Description");
define("_WCHELPCMDMSGHLP" , "Send a private message to <i>username</i>.  No one else will see this message.<br>A quick way to do this is by clicking on the username in the UserList");

define("_ALLOWS" , "Dzwi�ki?");
define("_WCNAME" , "Nick");
define("_WCTOYOU" , "Do Ciebie");
define("_WC_ADAPT" , "Adapted for");
define("_WC_BY" , "by");
define("_WC_CLOSEW" , "Zamknij okno");
define("_WC_FROM" , "od");
define("_WC_TO" , "do");
define("_WC_HASLEFT" , "polaz�/a sobie");
define("_WC_HASENTER" , "zawita�/a do nas");
define("_WC_NORECIPIENT" , " - Musisz podac odbiorce wiadomosci");
define("_WC_UNKNOWNRECIPIENT" , " - Nie znalaz�em takiego uzytkownika");
define("_WC_ERROR" , "B��d");

?>
