<?php
// $Id: user.php,v 1.10 2004/02/06 19:27:06 onokazu Exp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Nejste registrovanými uživateli?  Zaregistrujte se <a href="register.php">zde</a>.');
define('_US_LOSTPASSWORD','Ztratili jste své heslo?');
define('_US_NOPROBLEM','Nevadí, jen zadejte svou emailovou adresu, kterou jste zadali při registraci.');
define('_US_YOUREMAIL','Váš e-mail: ');
define('_US_SENDPASSWORD','Poslat heslo');
define('_US_LOGGEDOUT','Jste odhlášeni');
define('_US_THANKYOUFORVISIT','Děkujeme za Vaši návštěvu!');
define('_US_INCORRECTLOGIN','Přihlášení se nezdařilo!');
define('_US_LOGGINGU','Uživatel %s.<br />Vítejte!');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Tento uživatel ještě nebyl aktivován nebo byl deaktivován.<br />Prosíme, spojte se s adminstrátorem tohoto serveru.');
define('_US_ACTKEYNOT','Špatný aktivační klíč!');
define('_US_ACONTACT','Vybraný uživatel již byl aktivován!');
define('_US_ACTLOGIN','Váš účet byl aktivován. Nyní se můžete přihlásit.');
define('_US_NOPERMISS','Nemáte oprávnění k provedení této akce!');
define('_US_SURETODEL','Opravdu chcete smazat Váš účet?');
define('_US_REMOVEINFO','Tímto budou z naší databáze odstraněny veškeré informace o Vás.');
define('_US_BEENDELED','Váš účet byl smazán.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registrace uživatele');
define('_US_NICKNAME','Uživatel');
define('_US_EMAIL','E-mail');
define('_US_ALLOWVIEWEMAIL','Ostatní uživatelé mohou vidět můj e-mail');
define('_US_WEBSITE','Server');
define('_US_TIMEZONE','Časová zóna');
define('_US_AVATAR','Ikona');
define('_US_VERIFYPASS','Ověření hesla');
define('_US_SUBMIT','Odeslat');
define('_US_USERNAME','Uživatel');
define('_US_FINISH','Dokončit');
define('_US_REGISTERNG','Nového uživatele nelze regiostrovat.');
define('_US_MAILOK','Chci dostávat občasné informace od<br />administrátorů a moderátorů?');
define('_US_DISCLAIMER','Prohlášení');
define('_US_IAGREE','Potvrzuji, jak je uvedeno výše');
define('_US_UNEEDAGREE','musíte souhlasit s prohlášením.');
define('_US_NOREGISTER','Omlouváme se, nyní je databáze uzamčena pro nové registrace');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivacni klic pro uzivatele %s');

define('_US_YOURREGISTERED','Nyní jste registrováni. Byl Vám odeslán e-mail, obsahující aktivační klíč. Postupujte prosím podle instrukcí v této zprávě.');
define('_US_YOURREGMAILNG','Nyní jste registrováni. Bohužel se nepodařilo odeslat aktivační e-mail na Vámi zadanou adresu z důvodu problémů na našem serveru. Omlouváme se za tuto komplikaci a prosíme Vás o upozornění našeho administrátora sereru na tuto situaci. Děkujeme za pochopení.');
define('_US_YOURREGISTERED2','Nyní jste registrováni. Vyčkejte prosím na aktivaci Vašeho účtu administrátorem. Budete o tom informováni e-mailem.');

// %s is your site name
define('_US_NEWUSERREGAT','Registrace uzivatele na %s');
// %s is a username
define('_US_HASJUSTREG','%s byl prave registrovan!');

define('_US_INVALIDMAIL','CHYBA: Neplatný e-mail');
define('_US_EMAILNOSPACES','CHYBA: E-mailová adresa nesmí obsahovat mezery.');
define('_US_INVALIDNICKNAME','CHYBA: Neplatné uživatelské jméno');
define('_US_NICKNAMETOOLONG','Jméno je příliš dlouhé. Nesmí být delší než %s znaků.');
define('_US_NICKNAMETOOSHORT','Jméno je příliš krátké. Musí být delší než %s znaků.');
define('_US_NAMERESERVED','CHYBA: Jméno je rezervováno.');
define('_US_NICKNAMENOSPACES','Ve jménu nesmí být žádné mezery.');
define('_US_NICKNAMETAKEN','CHYBA: Uživatelské jméno je již obsazeno.');
define('_US_EMAILTAKEN','CHYBA: E-mailová adresa je již registrována.');
define('_US_ENTERPWD','CHYBA: Musíte si určit heslo.');
define('_US_SORRYNOTFOUND','Omluváme se, odpovídající info o uživateli nebylo nalezeno.');




// %s is your site name
define('_US_NEWPWDREQ','Požadavek na nové heslo na %s');
define('_US_YOURACCOUNT','Váš účet na %s');

define('_US_MAILPWDNG','mail_password: nelze aktualizovat uživatelská data. Spojte se se správcem');

// %s is a username
define('_US_PWDMAILED','Heslo pro uživatele %s bylo odesláno.');
define('_US_CONFMAIL','Potvrzovací zpráva pro uživatele %s byla odeslána.');
define('_US_ACTVMAILNG','Selhalo upozornění pro %s');
define('_US_ACTVMAILOK','Upozornění pro uživatele %s bylo odesláno.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Nebyl vybrán žádný uživatel! Vraťte se zpět a zkuste to znovu.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Město');
define('_US_OCCUPATION','Zaměstnání');
define('_US_INTEREST','Zájmy');
define('_US_SIGNATURE','Podpis');
define('_US_EXTRAINFO','Doplnění');
define('_US_EDITPROFILE','Upravit profil');
define('_US_LOGOUT','Odhlásit');
define('_US_INBOX','Přijaté zprávy');
define('_US_MEMBERSINCE','Členem od');
define('_US_RANK','Zařazení');
define('_US_POSTS','Komentářů/Příspěvků');
define('_US_LASTLOGIN','Poslední přihlášení');
define('_US_ALLABOUT','Vše o uživateli <b>%s</b>');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Info');
define('_US_BASICINFO','Základní informace');
define('_US_MOREABOUT','Více o mě');
define('_US_SHOWALL','Zobrazit vše');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Skutečné jméno');
define('_US_SHOWSIG','Vždy připojit můj podpis');
define('_US_CDISPLAYMODE','Způsob zobrazení komentářů');
define('_US_CSORTORDER','Řazení komentářů');
define('_US_PASSWORD','Heslo');
define('_US_TYPEPASSTWICE','(zadejte heslo 2x pro změnu)');
define('_US_SAVECHANGES','Uložit změny');
define('_US_NOEDITRIGHT',"Nemáte oprávnění pro změnu těchto informací.");
define('_US_PASSNOTSAME','Zadaná hesla nejsou shodná.');
define('_US_PWDTOOSHORT','Heslo musí delší než <b>%s</b> znaků.');
define('_US_PROFUPDATED','Váš profil byl aktualizován!');
define('_US_USECOOKIE','Uložit Vaše uživatelské jméno do cookies ve vašem počítači na dobu jednoho roku.');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Smazat účet');
define('_US_MYAVATAR','Moje ikona');
define('_US_UPLOADMYAVATAR','Nahrát vlastní ikonu');
define('_US_MAXPIXEL','Max. pixelů');
define('_US_MAXIMGSZ','Max. velikost ikony (Bytů)');
define('_US_SELFILE','Vybrat soubor');
define('_US_OLDDELETED','Vaše stará ikona byla smazána!');
define('_US_CHOOSEAVT','Vyberte si ikonu se seznamu');

define('_US_PRESSLOGIN','Zvolte tlačítko níže pro přihlášení');

define('_US_ADMINNO','Ve skupině <b>webmasters</b> musí zůstat alespoň jeden uživatel');
define('_US_GROUPS','Uživatelovy skupiny');
?>