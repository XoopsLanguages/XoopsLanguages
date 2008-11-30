<?php
// $Id: error.php,v 1.1.2.1 2005/04/09 11:04:29 mithyt2 Exp $
// Error messages
define("XOOPS_REFERER_BLOCKED", "[b]Why am I being redirected here?[/b]

{SITE_NAME} site security has detected that your computer has a firewall setting that is preventing you from registering on the site. We use 'Referrer-checking' know as HTTP_REFERER which makes sure that all contents posted are from authorised users only. Your firewall settings are blocking this information, so this will prevent you from registering properly if you try and proceed. 

Maybe you have already registered successfully before and are now having problems posting to the forums, news, or other form submissions. If this is the case, you have possibly installed a firewall since registration, or changed the settings of an existing installation. 

[b]Tell me more...[/b]

When you click a Web page button or link on our site, your browser notes the current page that you are on and sends that information to the server before accessing a new page. This way, our website server knows the last Web page that you viewed was part of our site. This is important because certain pages are only accessible after you have logged. In other words, the browser sends a message back saying 'It's OK so serve a registered users page, because this person is registered and already logged in'  Some firewalls block this information by default so that you do not broadcast this information to potentially unsafe websites. [i]There is nothing wrong with either the XOOPS security or your firewall settings, they simply need to be enabled to talk to each other.[/i]

[b]What can I do?[/b]

First turn off /disable any other protection or monitoring programmes such as:

- WebWasher Standard Filter/URL Filter
- advert. blocking software
- Pop-up blockers 

These may require their own changes if they have local security settings. 

[b]Additionally, your browser must also be set up to accept cookies from {SITE_URL} [/b]Please see cookies help page (link to that page shown below)

The following simple steps are necessary for us to offer the best security for our site and registered users.
Please check your firewall and cookie settings, then follow the 'Register' link again.

[b]Here are example step by step procedures for Norton (NIS), Zone Alarm Pro and Windows XP - [/b]

The procedure here is to add {SITE_URL} to the Trusted Sites list of your firewall application.

[b]Norton Internet Security 2002 (or earlier) [/b]

1. Open NIS or NPF. 
2. Click Options. 
3. Click Internet Security or Personal Firewall. (This step is not always needed.) The Options window appears. 
4. Click Advanced Options. 
5. Click the Web tab. 
6. Click Add Site. A new site/domain box appears. 
7. Enter {SITE_URL}  and click OK. The site name now appears in the left frame of the Advanced Options window. 
8. Click the name of the new site. 
9. Click the Privacy tab. 
10. Check the \"Use these rules for...\" box. 
11. Change the Referrer from \"Block\" to \"Permit\" 
12. Click Apply, and then click OK. 
13. Click OK to close the Options window. 
----------------------------------------------------------
[b]Norton Internet Security 2003/2004 [/b]

1. Open NIS or NPF. 
2. Do one of the following. 
* In NIS/NPF 2003, click Options > Internet Security or Personal Firewall (This step is not always needed), and then click the Web Content tab. 
* In NIS/NPF 2004, double-click Privacy Control, and then click Advanced. 
3. Click Add Site. A new site/domain box appears. 
4. Enter {SITE_URL}  and click OK. The site name now appears in the left frame of the Advanced Options window.
5. Click the name of the new site. 
6. Click the Global Settings tab. 
7. In the \"Information about visited sites\" section, clear \"Use default settings\" 
8. Click Permit. 
9. Click OK to close the Options window. 
---------------------------------------------------------- 
[b]Zone Alarm Pro: [/b]

1. Click Privacy 
2. Click Cookie Control 
3. Click Custom 
4. Uncheck \"remove private header information\" 
5- You may have to also 'allow third party cookies'
---------------------------------------------------------- 
[b]Windows XP's Internal Firewall [/b]

1. Open XP's Control Panel 
2. Double-click Networking and Internet Connections 
3. Select Network Connections 
4. Right-click on the connection to disable, then select Properties 
5. On the Advanced tab, clear the Protect my computer or network checkbox 
6. Press OK ");

?>