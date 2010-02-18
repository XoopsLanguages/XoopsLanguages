<?php
/*
* NAME : SENDME MODULE FOR XOOPS
* AUTHOR : ONASRE <ÇæäÇÓÑ >
* EMAIL : abu-elmajid@hotmail.com
* WEBSITE : WWW.abdALBASIT.COM DEMO SITE : WILDHELP.COM SUPPORT SITE : ARABXOOPS.COM
* VERSION : V1  BY 12-JAN-2010
* License : FREE AS LONG AS U KEEP THIS TEXT , UNDER GNU LICENSE
* CREDITE : TOO MANY PEOPLE HELPED ME TO COME OUT WITH THIS MODULE ,
* MOST IMPORTANT ARE THE http://www.phpeasystep.com FOR THE TUTORIAL OF
* Creating a Simple PHP Forum . THAT WHT INSPIRED ME TO MAKE THIS MODULE , AND I USED THE SOURCE CODE
* WITH MY PROJECT .. AND MORE THX TO ..
* FRANKBLACK, MARIANE, Mowaffaq , FOU-LU , DYLIAN , RC-NET WEB SERVICES , ZELFAS , HASSAN EL-7WAJ ,..  GOOGLE :)
* AND MORE THX TO ARABXOOPS.COM COMMUNITY , TRABIS , GHIA AND ALL XOOPS.ORG COMMUNITY , FOR THEM I'M DOING THIS :)
* INFO : THIS MODULE WILL ALLOW YOUR GUESTS/MEMBERS TO SEND YOU EMAIL'S AND THE EMAILS
* WILL BE SAVED TO YOUR DATABASE .. SO SAY BY FOR LOST EMAIL .. NOT ANYMORE .
* IT ALSO ALLOWS YOU TO SEND OUT EMAIL TO ANYONE ..MUCH MORE ..
*/
// Add Message errors
define("_MI_SENDME_NOCOMMENT","Nisi napisao(la) poruku");
define("_MI_SENDME_LONGCOMMENT","Poruka je preduga&#269;ka");
define("_MI_SENDME_NOTITLE","Nisi napisao(la) naslov");
define("_MI_SENDME_NONAME","Nisi napisao(la) svoje ime");
define("_MI_SENDME_NOEMAIL","Nisi napisao(la) svoj Email");
define("_MI_SENDME_EMAIL_NOT_OK","Tvoj Email nije ispravan!");
define("_MI_SENDME_NOEMAIL_TO","Nisi napisao(la) od primaoca Email ");
define("_MI_SENDME_ERROR_CODE","Sigurnosni Code neispravan");
define("_MI_SENDME_MESSAGE_SENT","Poruka je poslata.Hvala!");
define("_MI_SENDME_MESSAGE_SENT1","Poruka je na Email korisnika poslata .");
define("_MI_SENDME_ERROR_MESSAGE","Trenutno se poruka nemo&#382;e poslati, molimo te probaj malo kasnije!");
define("_MI_SENDME_PASSWORD","Ukucaj svoju Lozinku i prati svoju poruku dali ima&scaron; na nju odgovor.");
define("_MI_SENDME_NOPASSWORD","Lozinka je potrebna ");
define("_MI_SENDME_NOTIK_ID","ID poruke je potreban");
define("_MI_SENDME_NOTIK_FOUND","Lozinka ili ID poruke nije ispravno upisano ili je poruka izbrisana");

//SEND PAGE
define("_MI_SENDME_INDEX_PAGE","Pi&scaron;ite nam");
define("_MI_SENDME_EMAIL_SEND_NOW","Po&scaron;alji");
define("_MI_SENDME_CODE","Upi Sigurnosni Code");
define("_MI_SENDME_YOUR_COMMENT","Poruka");
define("_MI_SENDME_YOUR_COMMENTRETURN_NO","ID poruke je ispod");
define("_MI_SENDME_YOUR_COMMENTRETURN_NO2","Poruka je poslata, vidi ispod ID od poruke sa njom mo&#382;e&scaron; pratiti dali tvoja poslata poruka ima odgovor. ");
define("_MI_SENDME_YOUR_RETURNS","Prati svoju poruku");
define("_MI_SENDME_RETURN_PASSWORD","Lozinka");
define("_MI_SENDME_RETURN_TIKET_NO","ID od poruke");
define("_MI_SENDME_RETURN_REDIERECT","Prebacujemo te za...");
define("_MI_SENDME_YOUR_COMMENT_COUNTS","Ukupno slova za poruku");
// DropDown
// The List
define("_MI_SENDME_PRORITY","Prioritet");
define("_MI_SENDME_PSTATS","Statstika");
define("_MI_SENDME_PH","Visoki");
define("_MI_SENDME_PM","Meduim");
define("_MI_SENDME_PK","OK");
define("_MI_SENDME_PL","Mali");


// DELETE THINGS
define("_MI_ERORR_DELETED","Poruka se nemo&#382;e poslati");
define("_MI_DELETED_OK","Poruka je izbrisana");
define("_MI_SENDME_DELETEALL","Izbri&scaron;i");
define("_MI_SENDME_DELETE_ALERT","Brisanjem poruke se bri&scaron;u i njeni odgovori.");

// ATTACHMENT THINGS
define("_MI_SENDME_ATTACHMENTS","Podatak");
define("_MI_SENDME_ATTACHMENTS1","Ovaj format podatka nije dozvoljen ");
define("_MI_SENDME_ATTACHMENTS2","Podatak je prevelik");
define("_MI_SENDME_ATTACHMENTS3","Poruke se nemo&#382;e sa podatkom poslati, treba li poruku bez podatka poslati?");
define("_MI_SENDME_ATTACHMENTS4","Uploadani podatak i  ");
define("_MI_SENDME_ATTACHMENTS_MAX_SIZE","Veli&#269;ina podatka");
define("_MI_SENDME_ATTACHMENTS_MAX_SIZEDSC","Max. veli&#269;ina podatka jee <br> 1048576 ==> 1M");
define("_MI_SENDME_ATTACHMENTS_STORE","Folder za podatke");
define("_MI_SENDME_ATTACHMENTS_STOREDSC","Chmod Folder sa 777 postavi i obavezno vezu foldera sa / crtom iza naziva foldera ");
define("_MI_SENDME_ATTACHMENTS_EXT","Dozvoljeni podaci su");
define("_MI_SENDME_ATTACHMENTS_EXTDSC","Odgovorno odredi koja vrsta podataka se smije zaka&#269;iti u poruci");
define("_MI_SENDME_ATTACHMENTS_NOT_FOUND","Podatak nije prona&#273;en. Provjeri dali folder za podatke postoji");
define("_MI_SENDME_OPENATTACHMENT_ALERT","Zaka&#269;eni podaci u poruci mogu imati Virus, stoga prije otvoranja podatka iz sigurnosnih razloga svaki podatak sa Antivirus programom skenuj!");
//ADMIN INDEX
define("_MI_SENDME_SUBJECT","Naslov");
define("_MI_SENDME_SENDER_NAME","Tvoje ime");
define("_MI_SENDME_EMAIL","Tvoj Email");
define("_MI_SENDME_EMAIL2","Poruka za");
define("_MI_SENDME_SENDTIME","Vrijeme");
define("_MI_SENDME_SENDERIPS","IP");
define("_MI_SENDME_ATTACHMENT","Podatak");
define("_MI_SENDME_NO_ATTACHMENT","Ni&scaron;ta");

define("_MI_SENDME_SELECTALL","Izaberi sve");
define("_MI_SENDME_DESELECTALL","Odustani");
define("_MI_SENDME_REPLYS","Odgovori");
define("_MI_SENDME_STATS","Statika");
define("_MI_SENDME_HOW_MANY_INBOX","Nova poruka .   ");
define("_MI_SENDME_MSG_INBOX_NO_READ","Nove poruke");
define("_MI_SENDME_MSG_INBOX_OLD","Stare poruke");
define("_MI_SENDME_MSG_TOTAL_INBOX","Ukupno poruka");
define("_MI_SENDME_MSG_REPLYS_NO","Ukupno odgovora");
define("_MI_SENDME_MSGNEXT","Slede&#263;a");
define("_MI_SENDME_MSGPRV","Prethodna");
define("_MI_SENDME_SAVEACOPY","Memori&scaron;i i kopiraj");
define("_MI_SENDME_YES","Da");

define("_MI_SENDME_MAINPAGE","Glavna stranica");
define("_MI_SENDME_ABOUT","Author");
define("_MI_SENDME_MOD_NAME","Naziv modula ");

//ADMIN READ & SEND MESSAGE
define("_MI_SENDME_BY_SUBJECT","Naslov : ");
define("_MI_SENDME_BY_THE_COMMENT","[ Porka]");
define("_MI_SENDME_BY","Poslao(la) : ");
define("_MI_SENDME_TO","Poruka za ");
define("_MI_SENDME_SENDER_ADMINNAME","Admin");
define("_MI_SENDME_SENDER_ADMINRE","Adminov odgovor ");
define("_MI_SENDME_ADMIN_MESSAGE_SENT","Poruka je poslata .. Preusmjeravamo te..");
define("_MI_SENDME_EMAIL_BY","Poslao(la) Email  : ");
define("_MI_SENDME_EMAIL_TO","Email za :");
define("_MI_SENDME_SENT_TIME","Vrijeme slanja  : ");
define("_MI_SENDME_SENT_IP","IP od po&scaron;aljioca : ");
define("_MI_SENDME_BY_ID","ID poruke : ");
define("_MI_SENDME_SENDER_REPLYED","Odgovori : ");
define("_MI_SENDME_SENDER_REPLYEDs","Lista odgovora");
define("_MI_SENDME_SENDER_THE_Q","Gost pita");
define("_MI_SENDME_SENDER_REPLYED_SENT","Odgovor je poslat");
define("_MI_SENDME_SENDER_REPLYED_SAVED","Odgovor je memorisan u bazi podataka i sada korisnik mo&#382;e pratiti svoju poruku.");
define("_MI_SENDME_ERROR_MAIL","Nemo&#382;emo poslati poruku na Email, ali ...");
define("_MI_SENDME_SENDER_REPLYED_VIEW_NOW","Vidi odgovor ");
define("_MD_SENDME_NOMESGID","Poruka nije prona&#273;ena");
define("_MI_SENDME_INBOX_VIEW","Pro&#269;itaj poruku ");
define("_MI_SENDME_SENDS4","Vidi poruku : [ ");
define("_MI_SENDME_SENDS_2","]Tvoja poruka .:  ");
define("_MI_SENDME_SENDS3","Poruka od : [ ");
define("_MI_SENDME_SENDS_3","Napisao(la) si  ... ");
define("_MI_SENDME_SENDS_5","Poslao(la) si  ...");
define("_MI_SENDME_BACKTO_ADMIN_SENT","Nazad u Ulazni box");

//ADMIN SAVE COPY MESSAGE
define("_MI_SENDME_MSGNOTALLOWED","Nije dozvoljeno");
define("_MI_SENDME_MSG_COMMENT_ADDED_TO_SENT_BOX","Poruka je kopirana");
define("_MI_SENDME_MSG_CANT_ADD_TO_SENT_BOX","Nemo&#382;e se poruka kopirati i memorisati");

//ADMIN MENU
define("_MI_SENDME_GENERALSET","Genralno pode&scaron;avanje");
define("_MI_SENDME_MSGINBOXSENTSAVED","Izlazni box");
define("_MI_SENDME_EMAILADMIN","Po&scaron;alji Email");
define("_MI_SENDME_MSGINBOXRETURN","Ulazni box");


//SETTING AND CONFIG
define("_MI_SENDME_WIDTH","Du&#382;inaporuke");
define("_MI_SENDME_WIDTHDSC","Max.du&#382;ina poruke ");
define("_MI_SENDME_COMMENT_HEIGH","Visina Box-a za poruku");
define("_MI_SENDME_COMMENT_HEIGHDSC","Visina forme za poruku u boxu");
define("_MI_SENDME_COMMENT_WIDTH","&Scaron;irina box poruke");
define("_MI_SENDME_COMMENT_WIDTHDSC","&Scaron;irina forme za poruku u boxu");
define("_MI_SENDME_PERPAGE","Poruka po stranici");
define("_MI_SENDME_PERPAGEDSC","Broj poruka u Admin stranici");
define("_MI_SENDME_CAPTCHA","Anti-Spam");
define("_MI_SENDME_CAPTCHADSC","Ne zaboravi aktivirati Anti-Spam u kontakt bloku");
define("_MI_SENDME_AD","Vrh");
define("_MI_SENDME_ADDESC","Poruka na vrhu obrasca forme");
define("_MI_SENDME_FOOTER","Dno");
define("_MI_SENDME_FOOTER_DESC","Pouka nadnu obrasca forme");
define("_MI_SENDME_EDITORS","Dhtml Editor");
define("_MI_SENDME_EDITORS_DESC","Uklju&#269;i Dhtml Editor u formi obrsca za slanje poruka");
define("_MI_SENDME_ALLOWED_type","Dozvoljeni tipovi podataka za upload u porukama");
define("_MI_SENDME_ALLOWED_typeDSC","Svaki tip razmakni sa escape , ovdje je lista dozvoljenih podataka za upload <br>image/jpeg <br> image/png <br>image/gif <br> application/zip <br> audio/mpeg <br>audio/x-wav <br>application/pdf <br>application/msword<br>text/plain");
define("_MI_SENDME_FROM_ADMIN_AREA","Naslov poruke");
define("_MI_SENDME_FROMDSC","Naslov poruke za slanje ili pitanje");
define("_MI_SENDME_AUTORESPOND","Aktivirati Automatski-Odgovor");
define("_MI_SENDME_AUTORESPOND_DSC"," ");
define("_MI_SENDME_AUTORESPOND_MSG","upi&scaron;i ovdje poruku , ako je uklju&#269;en Automatski-Odgovor .");
define("_MI_SENDME_AUTORESPOND_MSG_DSC","");
?>