<?php
// $Id: preferences.php 3616 2009-09-10 20:39:31Z trabis $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%    Admin Module Name  AdminGroup   %%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);
define("_MD_AM_SITEPREF","Sajtinställningar");
define("_MD_AM_SITENAME","Sajtnamn");
define("_MD_AM_SLOGAN","Slogan för din sajt");
define("_MD_AM_ADMINML","Administratörs e-postadress");
define("_MD_AM_LANGUAGE","Standardspråk");
define("_MD_AM_STARTPAGE","Modul för startsidan");
define("_MD_AM_NONE","Ingen");
define("_MD_AM_SERVERTZ","Tidzon på server");
define("_MD_AM_DEFAULTTZ","Standardtidzon");
define("_MD_AM_DTHEME","Standardtema");
define("_MD_AM_THEMESET","Inställt tema");
define("_MD_AM_ANONNAME","Användarnamn för anonyma användare");
define("_MD_AM_MINPASS","Minsta tillåtna längd på lösenord");
define("_MD_AM_NEWUNOTIFY","Underrätta via e-post när en ny användare har registrerat sig?");
define("_MD_AM_SELFDELETE","Tillåt användare att radera sina egna konton?");
define("_MD_AM_LOADINGIMG","Visa laddningsbild?");
define("_MD_AM_USEGZIP","Använd gzip-kompression?");
define("_MD_AM_UNAMELVL","Välj nivå på användarnamnsfiltrering");
define("_MD_AM_STRICT","Strikt (bara bokstäver och siffror)");
define("_MD_AM_MEDIUM","Medel");
define("_MD_AM_LIGHT","Låg (rekommenderat för multi-byte-tecken)");
define("_MD_AM_USERCOOKIE","Namn på användar-cookies");
define("_MD_AM_USERCOOKIEDSC","Om namnet på cookien är inställt kommer 'Kom ihåg mig' att vara aktiverat vid inloggning. Om en användare har valt 'Kom ihåg mig' kommer han eller hon loggas in automatiskt. Cookien är giltig ett år.");
define("_MD_AM_USEMYSESS","Använd anpassad session");
define("_MD_AM_USEMYSESSDSC","Välj ja för att anpassa värden för sessionen.");
define("_MD_AM_SESSNAME","Sessionsnamn");
define("_MD_AM_SESSNAMEDSC","Namn på sessionen (endast giltig när 'Använd anpassad session' är aktiverad)");
define("_MD_AM_SESSEXPIRE","Giltighetstid för session");
define("_MD_AM_SESSEXPIREDSC","Maximal inaktiv tid för sessionen angivet i minuter (endast giltig när 'Använd anpassad session' är aktiverad och fungerar endast med PHP 4.2.0 eller senare)");
define("_MD_AM_BANNERS","Aktivera bannerannonser?");
define("_MD_AM_MYIP","Din IP-adress");
define("_MD_AM_MYIPDSC","Den här IP-adressen räknas inte som en visning för dina banners");
define("_MD_AM_ALWDHTML","Tillåt HTML i alla inlägg.");
define("_MD_AM_INVLDMINPASS","Ogiltigt värde för minsta tillåtna längd på lösenord.");
define("_MD_AM_INVLDUCOOK","Ogiltigt värde för användarcookie-namn.");
define("_MD_AM_INVLDSCOOK","Ogiltigt värde för sessionscookie-namn.");
define("_MD_AM_INVLDSEXP","Ogiltigt värde för sessionens giltighetstid.");
define("_MD_AM_ADMNOTSET","Administratörs e-post är inte angiven.");
define("_MD_AM_YES","Ja");
define("_MD_AM_NO","Nej");
define("_MD_AM_DONTCHNG","Ändra inte!");
define("_MD_AM_REMEMBER","Kom ihåg att chmod 666 den här filen så att systemet kan skriva till den.");
define("_MD_AM_IFUCANT","Om du inte kan ändra behörigheter kan du redigera resten av den här filen manuellt.");


define("_MD_AM_COMMODE","Standardvisningsläge för kommentarer");
define("_MD_AM_COMORDER","Standardsorteringsordning för kommentarer");
define("_MD_AM_ALLOWHTML","Tillåẗ HTML i användarkommentarer?");
define("_MD_AM_DEBUGMODE","Felsökningsläge");
define("_MD_AM_DEBUGMODEDSC","Flera felsökningsalternativ. En webbsajt i produktion bör ha det här avstängt.");
define("_MD_AM_AVATARALLOW","Tillåt uppladdning av egen avatar?");
define("_MD_AM_AVATARMP","Minsta antal inlägg som krävs");
define("_MD_AM_AVATARMPDSC","Fyll i det minsta antal inlägg som krävs för att ladda upp en egen avatar");
define("_MD_AM_AVATARW","Max bredd på avatar (pixel)");
define("_MD_AM_AVATARH","Max höjd på avatar (pixel)");
define("_MD_AM_AVATARMAX","Max storlek på avatarfilen (byte)");
define("_MD_AM_AVATARCONF","Inställningar för egen avatar");
define("_MD_AM_CHNGUTHEME","Ändra alla användares tema");
define("_MD_AM_NOTIFYTO","Välj grupp som underrättelse om ny användarregistrering skickas till");
define("_MD_AM_ALLOWTHEME","Tillåt användare att välja tema?");
define("_MD_AM_ALLOWIMAGE","Tillåt användare att visa bildfiler i inlägg?");

define("_MD_AM_USERACTV","Kräv användaraktivering (rekommenderat)");
define("_MD_AM_AUTOACTV","Aktivera automatiskt");
define("_MD_AM_ADMINACTV","Aktivering av administratörer");
define("_MD_AM_ACTVTYPE","Välj aktiveringstyp för nyregistrerade användare");
define("_MD_AM_ACTVGROUP","Välj grupp till vilken aktiveringsmeddelandet ska skickas");
define("_MD_AM_ACTVGROUPDSC","Giltie endast när 'Aktivering av administratörer' är valt");
define("_MD_AM_USESSL","Använd SSL för inloggning?");
define("_MD_AM_SSLPOST","SSL-posts variabelnamn");
define("_MD_AM_SSLPOSTDSC","Namnet på variabeln som används för att överföra sessionen via POST. Om du är osäker, ange ett namn som är svårt att gissa sig till.");
define("_MD_AM_DEBUGMODE0","Av");
define("_MD_AM_DEBUGMODE1","Aktivera felsökning (inline-läge)");
define("_MD_AM_DEBUGMODE2","Aktivera felsökning (popup-läge)");
define("_MD_AM_DEBUGMODE3","Felsökning av Smarty-mallar");
define("_MD_AM_MINUNAME","Kortaste tillåtna längd på användarnamn");
define("_MD_AM_MAXUNAME","Längsta tillåtna längd på användarnamn");
define("_MD_AM_GENERAL","Allmänna inställningar");
define("_MD_AM_USERSETTINGS","Användarinfoinställningar");
define("_MD_AM_ALLWCHGMAIL","Tillåt användare att ändra e-postadress?");
define("_MD_AM_ALLWCHGMAILDSC","");
define("_MD_AM_IPBAN","IP-avstängning");
define("_MD_AM_BADEMAILS","Fyll i e-postadresser som inte får användas i användarprofilen");
define("_MD_AM_BADEMAILSDSC","Separera med ett <strong>|</strong>, skiftlägesokänsligt, regex aktiverat.");
define("_MD_AM_BADUNAMES","Fyll i namn som inte får användas som användarnamn");
define("_MD_AM_BADUNAMESDSC","Separera med ett <strong>|</strong>, skiftlägesokänsligt, regex aktiverat.");
define("_MD_AM_DOBADIPS","Aktivera IP-avstängningar?");
define("_MD_AM_DOBADIPSDSC","Användare från angivna IP-adresser kommer inte kunna gå in på din sajt");
define("_MD_AM_BADIPS","Fyll i IP-adresser som ska stängas av från sajten.<br />Separera med ett <strong>|</strong>, skiftlägesokänsligt, regex aktiverat.");
define("_MD_AM_BADIPSDSC","^aaa.bbb.ccc stänger av användare vars IP-adress börjar med aaa.bbb.ccc<br />aaa.bbb.ccc$ stänger av användare vars IP-adress slutar med aaa.bbb.ccc<br />aaa.bbb.ccc stänger av användare vars IP-adress innehåller aaa.bbb.ccc");
define("_MD_AM_PREFMAIN","Huvudsida inställningar");
define("_MD_AM_METAKEY","Meta-nyckelord");
define("_MD_AM_METAKEYDSC","Meta-nyckelord-taggen är en uppsättning ord som representerar innehållet på din sajt. Fyll i nyckelorden separerade med komma eller mellanrum (t ex XOOPS, PHP, mySQL, portalsystem).");
define("_MD_AM_METARATING","Meta-rating");
define("_MD_AM_METARATINGDSC","Meta-rating-taggen definierar din sajts ålders- och innehållsrating");
define("_MD_AM_METAOGEN","Allmänt");
define("_MD_AM_METAO14YRS","14 år");
define("_MD_AM_METAOREST","Begränsad");
define("_MD_AM_METAOMAT","Vuxet");
define("_MD_AM_METAROBOTS","Meta-robotar");
define("_MD_AM_METAROBOTSDSC","Meta-robotar-taggen hjälper sökmotorer bestämma vilket innehåll som ska indexeras");
define("_MD_AM_INDEXFOLLOW","Index, följ");
define("_MD_AM_NOINDEXFOLLOW","Inget index, följ");
define("_MD_AM_INDEXNOFOLLOW","Index, följ ej");
define("_MD_AM_NOINDEXNOFOLLOW","Inget index, följ ej");
define("_MD_AM_METAAUTHOR","Meta-författare");
define("_MD_AM_METAAUTHORDSC","Meta-författare-taggen definierar namnet på den som skapat dokumentet som läses. Format som stöds inkluderar namn, e-postadress till webmaster, företagsnamn eller URL.");
define("_MD_AM_METACOPYR","Meta-copyright");
define("_MD_AM_METACOPYRDSC","Meta-copyright-taggen definierar den upphovsrättsliga information du vill ange för dina webbsajts dokument.");
define("_MD_AM_METADESC","Meta-beskrivning");
define("_MD_AM_METADESCDSC","Meta-beskrivning-taggen är en generell beskrivning av vad som finns på din webbsida");
define("_MD_AM_METAFOOTER","Meta-taggar och sidfot");
define("_MD_AM_FOOTER","Sidfot");
define("_MD_AM_FOOTERDSC","Skriv länkar med full sökväg som börjar med http:// eftersom länkarna inte kommer fungera från modulerna annars.");
define("_MD_AM_CENSOR","Ordcensureringsalternativ");
define("_MD_AM_DOCENSOR","Aktivera censurering av oönskade ord?");
define("_MD_AM_DOCENSORDSC","Ord kommer censureras om det här alternativet är aktiverat. Alternativet kan stängas av för bättre prestanda på sajten.");
define("_MD_AM_CENSORWRD","Ord som ska censureras");
define("_MD_AM_CENSORWRDDSC","Fyll i ord som ska censureras i inlägg från användare.<br />Separera varje ord med ett <strong>|</strong>, skiftlägesokänsligt.");
define("_MD_AM_CENSORRPLC","Oönskade ord ersätts med:");
define("_MD_AM_CENSORRPLCDSC","Censurerade ord ersätts med de tecken som anges i den här textrutan");

define("_MD_AM_SEARCH","Sökalternativ");
define("_MD_AM_DOSEARCH","Aktivera globala sökningar?");
define("_MD_AM_DOSEARCHDSC","Tillåt sökningar efter inlägg/saker inom din sajt.");
define("_MD_AM_MINSEARCH","Minsta längd på nyckelord");
define("_MD_AM_MINSEARCHDSC","Ange den minsta längden på det nyckelord som krävs för en sökning");
define("_MD_AM_MODCONFIG","Modulkonfigureringsalternativ");
define("_MD_AM_DSPDSCLMR","Visa användarvillkor?");
define("_MD_AM_DSPDSCLMRDSC","Välj ja för att visa användarvillkoren på registreringssidan");
define("_MD_AM_REGDSCLMR","Användarvillkor för registrering");
define("_MD_AM_REGDSCLMRDSC","Ange text som ska visas som användarvillkor vid registrering");
define("_MD_AM_ALLOWREG","Tillåt registrering av nya användare?");
define("_MD_AM_ALLOWREGDSC","Välj ja för att acceptera nya användarregistreringar");
define("_MD_AM_THEMEFILE","Kontrollera mallarna för att hitta förändringar?");
define("_MD_AM_THEMEFILEDSC","Om det här alternativet är aktiverat kommer ändrade mallar automatiskt kompileras om när de visas. Du bör stänga av det här alternativet på en sajt i produktion.");
define("_MD_AM_CLOSESITE","Stänga av sajten?");
define("_MD_AM_CLOSESITEDSC","Välj ja för att stänga av din sajt så att bara användare från valda grupper kan komma åt den. ");
define("_MD_AM_CLOSESITEOK","Välj de grupper som kan komma åt sajten när den är avstängd.");
define("_MD_AM_CLOSESITEOKDSC","Användare i webmaster-gruppen har alltid tillgång.");
define("_MD_AM_CLOSESITETXT","Anledning för att stänga sajten");
define("_MD_AM_CLOSESITETXTDSC","Den här texten visas när sajten är stängd.");
define("_MD_AM_SITECACHE","Sajt-cache");
define("_MD_AM_SITECACHEDSC","Cache:ar hela delar av sajten under en specificerad tid för att förbättra prestandan. Sajt-cachen, om den är satt, gäller framför modul- och blockcacher.");
define("_MD_AM_MODCACHE","Modul-cache");
define("_MD_AM_MODCACHEDSC","Cache:ar modulinnehåll under en specificerad tid för att förbättra prestandan. Modul-cachen, om den är satt, gäller framför specifika cacher i modulen.");
define("_MD_AM_NOMODULE","Det finns ingen modul som kan cache:as");
define("_MD_AM_DTPLSET","Standardmalluppsättning");
define("_MD_AM_SSLLINK","URL dit SSL-inloggningssidan finns");

// added for mailer
define("_MD_AM_MAILER","E-postinställningar");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","FRÅN adress");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","FRÅN namn");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","FRÅN användare");
define("_MD_AM_MAILFROMUIDDESC","Vilken användare ska stå som avsändare när systemet skickar ett privat meddelande?");
define("_MD_AM_MAILERMETHOD","Leveransmetod för e-post");
define("_MD_AM_MAILERMETHODDESC","Metod som används för att skicka e-post. Standard är \"mail\", använda bara andra sätt om det här ställer till problem.");
define("_MD_AM_SMTPHOST","SMTP-värdar");
define("_MD_AM_SMTPHOSTDESC","Lista på SMTP-servrar som ska anslutas till.");
define("_MD_AM_SMTPUSER","SMTPAuth-användarnamn");
define("_MD_AM_SMTPUSERDESC","Användarnamn för att ansluta till en SMTP-värd med SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth-lösenord");
define("_MD_AM_SMTPPASSDESC","Lösenord för att ansluta till en SMTP-värd med SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Sökväg till sendmail");
define("_MD_AM_SENDMAILPATHDESC","Sökväg till sendmail-programmet (eller motsvarande) på webbservern.");
define("_MD_AM_THEMEOK","Valbara teman");
define("_MD_AM_THEMEOKDSC","Välj teman som användare kan välja som sitt standardtema");

// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS-databas");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP-katalog");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory-katalog");
define("_MD_AM_AUTHENTICATION","Autenticeringsalternativ");
define("_MD_AM_AUTHMETHOD","Autenticeringsmetod");
define("_MD_AM_AUTHMETHODDESC","Den autenticeringsmetod du vill använda för att logga på användare.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Namn på e-postfält");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Namnet på e-postattributet i ditt LDAP-katalogträd.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Namn på 'Common Name'-fält");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Namnet på 'Common Name'-attributet i din LDAP-katalog.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Namn på efternamnsfält");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Namnet på efternamnsattributet i din LDAP-katalog.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Namn på förnamnsfält");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Namnet på förnamnsattributet i din LDAP-katalog.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Bas-DN");
define("_MD_AM_LDAP_BASE_DN_DESC","Bas-DN (Distinguished Name) i ditt LDAP-katalogträd.");
define("_MD_AM_LDAP_PORT","LDAP - Portnummer");
define("_MD_AM_LDAP_PORT_DESC","Portnumret genom vilket man kan ansluta till LDAP-katalogträdet.");
define("_MD_AM_LDAP_SERVER","LDAP - Servernamn");
define("_MD_AM_LDAP_SERVER_DESC","Namnet på LDAP-katalogservern.");

define("_MD_AM_LDAP_MANAGER_DN","DN på din LDAP-manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC","DN på den manager som för göra sökning (t ex manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Lösenord för LDAP-manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","Lösneord för den manager som får göra sökning");
define("_MD_AM_LDAP_VERSION","LDAP-versionsprotokoll");
define("_MD_AM_LDAP_VERSION_DESC","LDAP-versionsprotokollet: 2 eller 3");
define("_MD_AM_LDAP_USERS_BYPASS","Användare som tillåts gå runt LDAP autenticering");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Användare som autenticeras med den inbyggda XOOPS-metoden");

define("_MD_AM_LDAP_USETLS"," Använd TLS-anslutning");
define("_MD_AM_LDAP_USETLS_DESC","Använd en TLS-anslutning (Transport Layer Security). TLS använder port 389 som standard<BR>" .
                                  " och LDAP-versionen måste vara 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP-attribut som används för att söka användaren");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","När användarnamnsanvändning i DN-alternativ är satt till ja måste det överensstämma med användarnamnet i XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Användarnamnsanvändning i DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","XOOPS användarnamn används i LDAP DN (t ex uid=<användarnamn>,dc=xoops,dc=org)<br>Namnet läses direkt på LDAP-servern utan sökning");

define("_MD_AM_LDAP_FILTER_PERSON","Sökfilter för LDAP-fråga för att hitta användare");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Speciellt LDAP-filter för att hitta användare. @@loginname@@ ersätts av användarens användarnamn<br> MÅSTE VARA TOM OM DU INTE ÄR SÄKER PÅ VAD DU GÖR!" .
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) för AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) för LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","Domännamn");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domännamn (endast för ADS och NT Server)");

define("_MD_AM_LDAP_PROVIS","Automatisk kontohantering i XOOPS");
define("_MD_AM_LDAP_PROVIS_DESC","Skapa XOOPS användardatabas om den inte existerar");

define("_MD_AM_LDAP_PROVIS_GROUP","Standardgrupper");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","En ny användare läggs till i de här grupperna");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","XOOPS-Auth server fältmappning");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Beskriv mappningen mellan XOOPS databasfält och LDAP-autenticeringens systemfält." .
        "<br /><br />Format [XOOPS databasfält]=[Auth system LDAP attribut]" .
        "<br />t ex: email=mail" .
        "<br />Separera varje med ett |" .
        "<br /><br />!! För avancerade användare !!");

define("_MD_AM_LDAP_PROVIS_UPD","Underhåll av XOOPS kontohantering");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","XOOPS användarkonton är alltid synkroniserat med autenticeringsservern");


define("_MD_AM_CPANEL","Kontrollpanels-GUI");
define("_MD_AM_CPANELDSC","Gränssnitt för administratörer");

define("_MD_AM_WELCOMETYPE","Skicka välkomstmeddelande");
define("_MD_AM_WELCOMETYPE_DESC","Sätt att skicka välkomstmeddelande till en nyregistrerad användare.");
define("_MD_AM_WELCOMETYPE_EMAIL","E-post");
define("_MD_AM_WELCOMETYPE_PM","Privat meddelande");
define("_MD_AM_WELCOMETYPE_BOTH","E-post och privat meddelande");

define("_MD_AM_MODULEPREF","Modulinställningar");

?>