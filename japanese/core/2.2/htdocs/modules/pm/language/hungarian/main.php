<?php
// $Id: main.php,v 1.1.2.6 2005/07/20 08:41:28 mithyt2 Exp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Az �zenetek t�r�lve");
define("_PM_PRIVATEMESSAGE","Priv�t �zenetek");
define("_PM_INBOX","Bej�v� �zenetek");
define("_PM_FROM","K�ld�");
define("_PM_YOUDONTHAVE","Nincsenek priv�t �zeneteid");
define("_PM_FROMC","Felad�: ");
define("_PM_SENTC","Elk�ldve: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","El�z� �zenet");
define("_PM_NEXT","K�vetkez� �zenet");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Sajn�lom! Nem vagy regisztr�lt felhaszn�l�!");
define("_PM_REGISTERNOW","Regisztr�lj most!");
define("_PM_GOBACK","Vissza");
define("_PM_USERNOEXIST","A kiv�lasztott felhaszn�l� nem tal�lhat� az adatb�zisban!");
define("_PM_PLZTRYAGAIN","K�rlek ellen�rizd a nevet �s pr�b�ldd �jra!");
define("_PM_MESSAGEPOSTED","�zenet elk�ldve");
define("_PM_CLICKHERE","Ide kattintva megtekintheted a priv�t �zeneteidet.");
define("_PM_ORCLOSEWINDOW","Vagy kattints ide az ablak bez�r�s�hoz.");
define("_PM_USERWROTE","%s �rta:");
define("_PM_TO","C�mzett: ");
define("_PM_SUBJECTC","T�ma: ");
define("_PM_MESSAGEC","�zenet: ");
define("_PM_CLEAR","T�r�l");
define("_PM_CANCELSEND","M�gsem k�ld");
define("_PM_SUBMIT","Elk�ld");
define("_PM_SAVEINOUTBOX", "M�solat ment�se a Kimen� �zenetek mapp�ba?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","T�ma");
define("_PM_DATE","D�tum");
define("_PM_NOTREAD","Olvasatlan");
define("_PM_SEND","K�ld�s");
define("_PM_DELETE","T�rl�s");
define("_PM_TOSAVE","Ment�s");
define("_PM_UNSAVE","Ment�s t�rl�se");
define("_PM_EMPTY","�res");
define("_PM_REPLY", "V�lasz");
define("_PM_PLZREG","K�rlek regisztr�lj, miel�tt priv�t �zeneteket k�lden�l!");
define("_PM_SAVED_PART","A Mentett �zenetek mapp�ban %d �zenetet t�rolhatsz �s jelenleg %d �zenetet t�rolsz");
define("_PM_SAVED_ALL","Az �zenetek �thelyezve a Mentett �zenetek mapp�ba");
define("_PM_UNSAVED","Az �zenetek elt�vol�tva a Mentett �zenetek mapp�b�l");
define("_PM_EMPTIED","A mappa ki�r�tve");
define("_PM_RUSUREEMPTY","Biztosan �r�teni akarod a mapp�t?");
define("_PM_RUSUREDELETE","Biztosan t�r�lni akarod ezeket az �zeneteket?");

define("_PM_ONLINE", "El�rhet�");

define("_PM_RECEIVE","FOGAD�S");
define("_PM_POST","K�LD�S");
define("_PM_READBOX","OLVAS�S");
define("_PM_RSAVEBOX","Elmentett �zenetek fogad�sa");
define("_PM_OUTBOX","Kimen� �zenetek");
define("_PM_SAVEBOX","Mentett �zenetek");
define("_PM_SENTBOX","Elk�ld�tt �zenetek");
define("_PM_PSAVEBOX","Elmentett �zenetek k�ld�se");
define("_PM_SAVE","MENT�S");
define("_PM_SAVED","Sikeres ment�s!");
define("_PM_TOC","Felad�: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","RENDEZ");
define("_PM_ORDER","SORREND");
define("_PM_UID","Partner UID-je");
define("_PM_TIME","K�ld�s d�tuma");
define("_PM_ASC","N�V");
define("_PM_DESC","CS�KK");
define("_PM_LIMIT","P� / oldal");
define("_PM_BACKTOBOX","Vissza a mapp�ba");
define("_PM_SORTSUBMIT","Elk�ld");
define("_PM_PREVIOUSP","El�z�");
define("_PM_NEXTP","K�vetkez�");

define("_PM_MAILNOTIFY","%s-�j P�-t kapt�l t�le: %s");
define("_PM_MAILMESSAGE","Hello!\nEgy �j P� �rkezett %s -t�l/t�l \n\nA P� t�m�ja:\n%s\n\nAz �zenetet itt tekintheted meg:\n%s\n\n-----------\nAz�rt kaptad ezt az �zenetet, mert be�ll�tottad, hogy fogadsz �rtes�t�seket �j P� �rkez�s�r�l.\n\nMegv�ltoztathatod a P� be�ll�t�saidn�l\n%s\n\nK�rlek ne v�laszolj erre a lev�lre\n\n---------\n�dv�zlettel:\n%s\n%s\n%s");

define("_PM_EMAIL", "E-mail");
define("_PM_EMAIL_DESC", "�dv�z�llek %s! Ez az �zenet a k�vetkez� oldalon tal�lhat� hozz�f�r�sedb�l lett �tk�ldve: ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM", "%s -t�l/t�l");
define("_PM_EMAIL_TO", "%s -nak/nek");
define("_PM_EMAIL_SUBJECT", "[message]%s");
define("_PM_EMAIL_MESSAGE", "Az �zenet");

define("_PM_ACTION_DONE", "A m�velet sikeresen v�grehajtva");
define("_PM_ACTION_ERROR", "A m�velet nem siker�lt");
?>