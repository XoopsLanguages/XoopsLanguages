<?php
// $Id: user.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Nemáte u nás účet? Nevadí, může si jej zaregistrovat <a href="register.php">na této stránce</a>.');
define('_US_LOSTPASSWORD','Zapomenuté heslo');
define('_US_NOPROBLEM','Není problém, jednoduše zadejte emailovou adresu, kterou máte v profilu.');
define('_US_YOUREMAIL','Váš email: ');
define('_US_SENDPASSWORD','Zaslat heslo');
define('_US_LOGGEDOUT','Nyní jste odhlášeni.');
define('_US_THANKYOUFORVISIT','Děkujeme za návštěvu a těšíme se na příště.');
define('_US_INCORRECTLOGIN','Chybné přihlášení!');
define('_US_LOGGINGU','Nyní jste přihlášeni k systému.</br>Vaše uživatelské jméno je %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM','Vybraný uživatel byl buť deaktivován, nebo nebyl ještě aktivován.<br />Pro bližší informace kontaktujte někoho z administrátorů.');
define('_US_ACTKEYNOT','CHYBA! Aktivační klíč je špatný.');
define('_US_ACONTACT','CHYBA! Vybraný účet již existuje.');
define('_US_ACTLOGIN','Váš účet je nyní aktivni. Můžete se přihlásit svým uživatelským jménem a heslem.');
define('_US_NOPERMISS','Lituji, ale nemáte oprávnění k provedení této operace.');
define('_US_SURETODEL','Myslíte to vážně? Opravdu chcete smazat svůj účet?');
define('_US_REMOVEINFO','Tento krok smaže z databáze veškeré informace o vašem účtu.');
define('_US_BEENDELED','Váš účet byl vymazán z datbáze.');
define('_US_ACTFAILD','CHYBA! Aktivace účtu selhala.');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registrace nového uživatele');
define('_US_NICKNAME','Uživatelské jméno');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Povolit ostatním vidět můje email?');
define('_US_WEBSITE','WWW stránky');
define('_US_TIMEZONE','Časové pásmo');
define('_US_AVATAR','Postavička');
define('_US_VERIFYPASS','Ověření hesla');
define('_US_SUBMIT','Odeslat');
define('_US_USERNAME','Uživatelské jméno');
define('_US_FINISH','Dokončit');
define('_US_REGISTERNG','CHYBA! Nelze zaregistrovat nového uživatele.');
define('_US_MAILOK','Chcete dostávat občasné emaily od <br />administrátorů a moderátorů?');
define('_US_DISCLAIMER','Právní doložka');
define('_US_IAGREE','Souhlasím s uvedeným'); // I agree to the above
define('_US_UNEEDAGREE','Lituji, ale pokud se chcete zaregistrovat, musíte souhlasit s pravidly.');
define('_US_NOREGISTER','Lituji, ale momentálně není možné registrovat nové uživatele.');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivační klíč pro uživatele %s');
define('_US_YOURREGISTERED','Nyní máte zaregistrovaný účet. <br><br>Na Vaši emailovou adresu byl odeslán email potvrzovací email.<br><br>Aktivaci účtu dokončíte podle instrukcí v emailu. ');
define('_US_YOURREGMAILNG','Nyní máte zaregistrovaný účet. However, we were unable to send the activation email to your email account due to an internal error that had occurred on our server. We are sorry for the inconvenience, please send the webmaster an email notifying him/her of the situation.');
define('_US_YOURREGISTERED2','Nyní máte zaregistrovaný účet. Please wait for your account to be activated by the adminstrators.  You will receive an email once you are activated.  This could take a while so please be patient.');
// %s is your site name
define('_US_NEWUSERREGAT','New user registration at %s');
// %s is a username
define('_US_HASJUSTREG','%s musí být vyplněno!');
define('_US_INVALIDMAIL','CHYBA: Chybný email');
define('_US_EMAILNOSPACES','CHYBA: Emailová adresa nesmí obsahovat mezery.');
define('_US_INVALIDNICKNAME','CHYBA: Chybné uživatelské jméno');
define('_US_NICKNAMETOOLONG','Uživatelské jméno je moc dlouhé. Musí být kratší než %s znaků.');
define('_US_NICKNAMETOOSHORT','Uživatelské jméno je moc krátké. Musí být delší než %s znaků.');
define('_US_NAMERESERVED','CHYBA: Toto jméno je rezervováno.'); // Name is reserved
define('_US_NICKNAMENOSPACES','Uživatelské jméno nesmí obsahovat mezery.');
define('_US_NICKNAMETAKEN','CHYBA: Uživatelské jméno již existuje.');
define('_US_EMAILTAKEN','CHYBA: Emailová adresa je již použitá.');
define('_US_ENTERPWD','CHYBA: Musíte zadat heslo.');
define('_US_SORRYNOTFOUND','Lituji, ale v databázi nejsou informace o tomto uživateli.'); // Sorry, no corresponding user info was found
// %s is your site name
define('_US_NEWPWDREQ','Nové heslo pro %s');
define('_US_YOURACCOUNT','Váš účet na %s');
define('_US_MAILPWDNG','mail_password: Nelze aktualizovat vstup uživatele. Obraťte se na administrátory.'); // could not update user entry. Contact the Administrator
// %s is a username
define('_US_PWDMAILED','Heslo pro %s bylo úspěšně odesláno.');
define('_US_CONFMAIL','Potvrzovací email pro %s byl úspěšně odeslán.');
define('_US_ACTVMAILNG','CHYBA! Během odesílání email pro %s došlo k chybě.');
define('_US_ACTVMAILOK','Upozorňující email pro %s byl úspěšně odeslán.');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Není vybrán žádný uživatel. Vraťte se zpět a zkuste to ještě jednou.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Bydliště');
define('_US_OCCUPATION','Zaměstnání');
define('_US_INTEREST','Zájmy');
define('_US_SIGNATURE','Podpis');
define('_US_EXTRAINFO','Rozšířené informace');
define('_US_EDITPROFILE','Upravit profil');
define('_US_LOGOUT','Odhlásit');
define('_US_INBOX','Příchozí');
define('_US_MEMBERSINCE','Datum registrace');
define('_US_RANK','Hodnost');
define('_US_POSTS','Komentáře/Příspěvky');
define('_US_LASTLOGIN','Poslední přihlášení');
define('_US_ALLABOUT','--|| %s ||--');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Informace o mne');
define('_US_BASICINFO','Základní informace');
define('_US_MOREABOUT','Více o mne');
define('_US_SHOWALL','Zobrazit vše');
//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Skutečné jméno');
define('_US_SHOWSIG','Vždy připojovat podpis');
define('_US_CDISPLAYMODE','Režim zobrazení komentářů');
define('_US_CSORTORDER','Komentáře řadit podle');
define('_US_PASSWORD','Heslo');
define('_US_TYPEPASSTWICE','(pokud chcete heslo změnit, napište jej dvakrát)');
define('_US_SAVECHANGES','Uložit změny');
define('_US_NOEDITRIGHT',"Lituji, ale nemáte právo měnit uživatelské informace.");
define('_US_PASSNOTSAME','Hesla si neodpovídají, musí být stejná.');
define('_US_PWDTOOSHORT','Lituji, ale heslo musí být delší než <strong>%s</strong> znaků.');
define('_US_PROFUPDATED','Váš profil byl v pořádku aktualizován.');
define('_US_USECOOKIE','Uložit mé uživatelské jméno do cookie podobu jednoho roku.');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Smazat účet');
define('_US_MYAVATAR','Moje postavička');
define('_US_UPLOADMYAVATAR','Nahrát Avatara');
define('_US_MAXPIXEL','Maximální pixelů');
define('_US_MAXIMGSZ','Maximální velikost (Bytů)');
define('_US_SELFILE','Vyberte soubor');
define('_US_OLDDELETED','Váš starý obrázek bude vymazán');
define('_US_CHOOSEAVT','Vyberte si avatara z nabídky.');
define('_US_PRESSLOGIN','Pro přihlášení stiskněte tlačítko níže.');
define('_US_ADMINNO','CHYBA! Uživatelé ze skupiny administrátorů nemohou být smazáni.');
define('_US_GROUPS','Uživatelské skupiny');
define('_US_REMEMBERME','Pamatovat si mne');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Vítejte na %s');

//XOOPS 2.5.4
define('_US_SKYPE','Skype');
define('_US_FACEBOOK','Facebook');
