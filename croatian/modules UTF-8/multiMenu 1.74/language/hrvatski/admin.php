<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.4								//
//  ------------------------------------------------------------------------	//

define("_AD_MULTIMENU_ADMIN", 	"Administracija : ");
define("_AD_MULTIMENU_EDITIMENU", 	"Uredi");
define("_AD_MULTIMENU_NEWIMENU", 	"Novi Link");
define("_AD_MULTIMENU_NEW",		"Novi Link");
define("_AD_MULTIMENU_TITLE",		"Naslov");
define("_AD_MULTIMENU_STATUS",	"Status");
define("_AD_MULTIMENU_ONLINE",	"Online");
define("_AD_MULTIMENU_OFFLINE",	"Offline");
define("_AD_MULTIMENU_SUBMENU",	"Vrsta");
define("_AD_MULTIMENU_SUBMENUEXP",	"");
define("_AD_MULTIMENU_SUBYES",	"Da");
define("_AD_MULTIMENU_SUBNO",		"Ne");
define("_AD_MULTIMENU_MAINLINK",	"Glavni link");
define("_AD_MULTIMENU_SUBLINK",	"Dinamički podlink");
define("_AD_MULTIMENU_PERMSUBLINK",	"Stalni podlink");
define("_AD_MULTIMENU_NOTE",		"Zabilješka");
define("_AD_MULTIMENU_TARGET",	"Cilj");
define("_AD_MULTIMENU_GROUPS",	"Grupe");
define("_AD_MULTIMENU_LINK",		"Link <font color='red'>*</font>");
define("_AD_MULTIMENU_OPERATION",	"Funkcije");
define("_AD_MULTIMENU_UP",		"Gore");
define("_AD_MULTIMENU_DOWN",		"Dolje");
define("_AD_MULTIMENU_TARG_SELF",	"self");
define("_AD_MULTIMENU_TARG_BLANK",	"blank");
define("_AD_MULTIMENU_TARG_PARENT",	"parent");
define("_AD_MULTIMENU_TARG_TOP",	"top");
define("_AD_MULTIMENU_SUREDELETE",	"Jeste li sigurni da želite obrisati ovaj link?");
define("_AD_MULTIMENU_UPDATED",	"Baza podataka je uspješno obnovljena!");
define("_AD_MULTIMENU_NOTUPDATED",	"Baza podataka se ne može ažurirati!");
define("_AD_MULTIMENU_SUBMIT", 	"Podnesi");
define("_AD_MULTIMENU_IMAGE", 	"Slika <font color='red'>*</font>");

define("_AD_MULTIMENU_CATEGORY",	"Kategorija");
define("_AD_MULTIMENU_NOTES",		"<font color='red'>*</font> multiIzbornik podržava apsoludne i relativne URL adrese.<br /><br />
<b><u>Primjeri</u> :</b><br /><br />
<u>Apsolutne URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Relativne URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>Da bi dinamički linkovi radili,<br />potrebno je dodati ' / ' (završnu kosu crtu)<br />na kraj linka koji pokazuje na mapu!</td><tr></table><br />
<br />
Možete koristiti sljedeće oznake u svojim putevima do slika:<br />
- {theme} što ce prikazati kao trenutno korištenu temu.<br />
- {module} što ce prikazati kao trenutno korišten modul.");

define("_AD_MULTIMENU_PREFERENCES","Postavke");
define("_AD_MULTIMENU_HELP",		"Vodič");

define("_AD_MULTIMENU_FATHER_INDEX","Roditeljski popis");
define("_AD_MULTIMENU_CANTPARENT",	"Jedan unos ne može povezivati samog sebe ili svoj podlink!");
define("_AD_MULTIMENU_ID",		"Id");
define("_AD_MULTIMENU_PID",		"Pid");
define("_AD_MULTIMENU_BLOCK_LINK",	"Lista vidljivih blokova");

define("_AD_MULTIMENU_GUIDET_GENERAL",	"Opce");
define("_AD_MULTIMENU_GUIDET_PREF",		"Postavke");
define("_AD_MULTIMENU_GUIDET_INDEX",	"Popis");
define("_AD_MULTIMENU_GUIDET_BLOCKS",	"Blokovi");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Kako koristiti multiIzbornih ?</font>
</strong></p><br />
<br />
<strong><u>OPĆENITO</u>
</strong>
<br />multiIzbornik je više funkcionalni upravitelj izbornikom. Stvoren je da se linkovi i izbornici na lak nacin prikazuju na Xoops stranicama. Za webmastere, linkovi se mogu dodavati ili preko administracijskog dijela, ili direktno sa linka popisa stranica modula. Ova inacica 1.7 sad ukljucuje sucelje mape stranica, koja ce dozvoliti webmasterima da stvaraju svoju vlastitu navigaciju.
<br />
<br />
<strong><u>MOGUĆNOSTI</u>
</strong>
<br />Glavni cilj ovog modula je dozvoliti webmasterima koji nisu naviknuti na svoje web stranice ili upravljanje s modulima da lagano stvaraju svoje izbornike. Druge koristi ukljucuju mnoštvo mogucnosti koje dozvoljavaju webmasterima da preinace rad modula po svojoj volji. Ovo ukljucuje vrlo fleksibilan blok izbornika koji omogucuje mnogo vrsta prikaza, kao što cemo vidjeti kasnije u ovom kratkom vodicu.
<br />
<br /><strong><u>ZAHVALE</u></strong>
<br />S poštovanjem za dizajn i stvaranje ovog modula, zahvale idu nekolicini dobro poznatih xoopera: <br />Herv&eacute;, Marcan i Solo za njihovu pomoc i suradnju na ovom projektu.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Kako koristiti multiIzbornik ?</font></strong>
</p>
<br /><strong><u>ADMINISTRACIJA<br /></u></strong>
<br /><strong><u>Postavke (ili opce postavke modula)</u>
</strong>
<br /><br />Prije korištenja ovog multiIzbornik modula, predlažemo da pažljivo pogledate na administracijske postavke. Ovdje cete odrediti funkcionalne i osobne postavke vaših modula. Ove postavke imaju razlicit uticaj na stranice popisa (ali ne na postavke blokova).
<br />
<br />
<br /><strong><em>~Glavna stranica prikaza: <br /></em></strong>
Ovdje možete ukljuciti opciju mape stranica. Ako je deaktivirate, možete je i dalje koristiti kao lažni modul da bi prikazali blokove koje hocete, ili koristiti kao odatnu pocetnu stranicu. Imajte na umu da ce ovo deaktivirati samo glavni popis stranica, ne pod-popis mapu stranica.
<br />
<br />
<strong><em>~Uvod tekst: <br /></em></strong>
Unesite ovdje tekst koji želite da bi vidjeli gornju glavnu popisnu stranicu. Ovaj tekst prihvaca Xoops i HTML kodove.
<br />
<br />
<strong><em>~Prikaži reklamu:</em></strong>
Imate mogucnost prikazati reklamnu poruku ili ime modula iznad svih stranica modula. Ako želite promjeniti reklamnu poruku, promjenite '/module/multiMenu/images/logo.gif' datoteku.
<br />
<br />
<strong><em>~Prikaz stranice multiIzbornika (od 1 do 4):</em></strong>
Izaberite sadržaj multiIzbornika koji želite da se vidi na popisu stranica. 
<br />
<br />
<strong><em>~Naslov izbornika (od 1 do 4): <br /></em></strong>
Odredite popis i naslov izbornika pri administriranju multiIzbornika. Obratite pozornost da ovo nece utjecati na naslov bloka!
<br />
<br />
<strong><em>~Prikaz navigacijske trake:</em></strong>
 <br />Navigacijska traka sa aktiviranom popisnom stranicom bi prikazivala gore sve i jednu stranicu. Ako ne želite ovu opciju, možete je deaktivirati ovdje.
<br />
<br /><strong><em>~Zadana širina slike:</em>
</strong>
<br />Odredite standardnu maksimalnu velicinu slike koja ce se prikazivati na popisnim stranicama. To ce promjeniti velicinu samo slikama koje su vece od ove vrijednosti (nema efekta razvlacenja).
<br />
<br />
<br /><strong><em>~Prikaz ikona:</em></strong>
<br />Ukljucivanjem ove opcije ce biti prikazane ikone ispred sve i jednog linka. Ovje su zapravo 4 vrste linkova :<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Apsolutni glavni linkovi</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Apsolutni pod linkovi</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Relativni glavni linkovi</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Relativni pod linkovi</li>
</ul>
<br />
<br />
<strong><em>~Prikaz izbornika u temi:<br /></em></strong>
Ova opcija omogucava prikaz jednog od vašim multiIzbornika izravno u vašoj temi. Sve što trebate je unesti kod u vašu trenutnu temu *:
<p align='center'><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font></p>
<br />
<i>* Napomena: Samo 'glavni linkovi' ce biti prikazani u temi!</i>
");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Kako koristiti multiIzbornik ?</font></strong></p>
<br /><strong><u>ADMINISTRACIJA<br /></u></strong><br />
<strong><u>Administracija popis</u></strong>
<br />
<br />
Postoje dva razlicita dijela: Dinamicka traka navigacije modula i trenutno ureden multiIzbornik.
<br />
<br />
<strong>Traka navigacije modulima se sastoji od-</strong>
<ul><li> multiIzbornik glavnog popisa stranica</li>
<li>Postavke</li>
<li> Pomoc</li>
<li> Admin linkovi</li>
<li> multiIzbornik (poredani od 1 do 4)</li></ul><br />
Napomena: ovdje se koristi kod bojom koji identificira da li se trenutni multiIzbornik prikazuje ili ne na popisu stranica.<br />
<br />
Možete se kretati kroz cijeli modul i njegovim opcijama zahvaljujuci ovoj navigacijskoj traci. Imajte na umu da je sve i jedna stranica stvorena pomocu Edito, kao administrator modula, možete izravno pristupati i uredivati, brisati ili administrirati opcije.
<br />
<br />
<strong><u>multiMenu index page</u></strong><br />
<br />
Display each and every multiMenu links. <br />
On the main page, you can get some valuable informations regarding your custom links :<br />
<ul>
<li>Picture: display a reduced version of the used picture.</li>
<li>Title</li>
<li>Link</li>
<li>Status: Green for online, red for offline.</li>
<li>Type</li>
<li>Functions: main admin functions, edit, delete, move up and down.</li>
</ul>
Links are ranked in display order. This order can be changed clicking on the green arrows (up and down).
<br />
<br />
Click on 'New Link' to create a new entry. 
<br />
<br />
<strong><u>New link</u></strong><br />
<br />
multiMenu is designed to easily create menu links. You just have to fill in the form to create a new link.<br />
You can choose to display a picture with or without links, with different possible display options.<br />
<br />
<strong><em>~Title:</em></strong> is the link title. You can use html code (to color your links for instance) or smilies. It is better not use the BBCodes.<br />
<br />
<strong><em>~Link:</em></strong> is the url you want your link to point at. Leave it blank if you don't want a clickable link (for information purpose, for instance). The url can be  absolute or relative. If set relative, multiMenu would automatically add the current website path, so that, wherever your block appears on your site, the url would be a correct link. <br />
<br />
<strong><em>~Image:</em></strong> is the picture url of the current link. Same goes as for link regarding the relative or absolute url. If the picture is unavailable or fake, multiMenu would display a default picture (a red paw).<br />
In this version, you have the possibility to use two different tages <strong>{module}</strong> <strong>{theme}</strong>, respectively displaying the module or theme used on the current page. Those option would allow you to display specific logos regarding the module or theme the user is navigating the website.<br />
<br />
<strong><em>~Status:</em></strong> define wether you want that link to be dispalyed or not.<br />
<br />
<strong><em>~Type:</em></strong> set the link type you want to apply to the current link. There are 5 different link type :<br />
<ul>
<li><strong>Category:</strong> display as a category link type.</li>
<li><strong>Main link:</strong> standard main link type.</li>
<li><strong>Permanent sublink:</strong> sublink type which would display permanently.</li>
<li><strong>Dynamic sublink:</strong> sublink type which would display dynamically, regarding the parent mainlink. Note that to make the dynamic links to work, it is necessary to add '\ / ' (trailin slash) at the end of main links linking to a directory!
</li>
<li>Note: would display like a standard comment text.</li>
</ul><br />
<strong><em>~Target:</em></strong> 4 different classical target type.</li><br />
<br />
<strong><em>~Groups:</em></strong> selct which group can see or not the current link.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>How to use multiMenu ?</font></strong></p><br />
<br />
<strong><u>multiMenu's blocks</u></strong><br />
<br />
One of the most important features of multiMenu are his blocks. As stated above, you have for each menu a corresponding block (ranging from 1 to 4 + the admin one), plus 2 other custom menu blocks (A and B). For each and every available blocks, you can have a very wide range of applications, display and options.<br /><br />When editing a multiMenu block, use the &ldquo;Setting&rdquo; option, in 6 different catégories.<br />
<br />
<strong>1) Block Format</strong><br />
<br />
<strong><em>~Format:</em></strong><br />
You can display the multiMenu links under 11 different forms:<br />
- Standard Menu (Main Menu like)<br />
- Drop List<br />
- Select Box<br />
- Fixed Picture<br />
- Scrolling Picture (scrolling without pause)<br />
- Sliding Picture (scrolling with pause)<br />
- Unordered list (without numbers)<br />
- Ordered list (with numbers)<br />
- Unordered list<br />
- Scrolling List (scrolling without pause)<br />
- Sliding List (scrolling with pause at the end)<br />
<br />
<strong><em>~Number of columns:</em></strong><br />
Define the amount of columns you want your links to be displayed. This option is only available for Standard Menu and Fixed Picture option.<br />
<br />
<strong>2) Links</strong><br />
<br />
<strong><em>~Link type to display:</em></strong><br />
Define which kind of links your want to display amongs all links category. <br />
<strong><em>~Order by:</em></strong><br />
In which order do you want to display your links: by weight (defined by admin order) or by ordered or reversed alphabetical order.<br />
<br />
<strong>3) Title</strong><br />
<br />
<strong><em>~Display Title:</em></strong><br />
Do you want to display the links title. This option should be used only with links which have an illustration picture!<br />
<strong><em>~Max. Lenght:</em></strong><br />
How maximum long should be the title ? Define the maximum value here.<br />
<br />
<strong>4) Picture</strong><br />
<br />
<strong><em>~Display Picture:</em></strong><br />
Do you want to display the links title.<br />
<strong><em>~Max. Widht:</em></strong><br />
Set the maximum picture width to keep a uniform look of your illustrations and menus. If the picture is smaller, it won't be resized to prevent any pixelisation effect.<br />
<br />
<strong>5) Scroll Settings</strong><br />
<br />Those options are only valuable if you select the Sliding Picture format. 
<strong><em>~Block width and height:</em></strong><br />
Define the block general size. Check picture width option to tweak the perfect sttings.<br />
<strong><em>~Speed:</em><br /></strong>
Define the general scrolling speed of your pictures and links. <br />
<br />
<strong>6) Random Links</strong><br />
<br />
<strong><em>~Random links:</em></strong></strong><br />
multiMenu gives you the possibility to display a selection of random links. Define here wether you want it or not. Of course, this options should be used carefully if you are using several different link types (category, main links, sublinks and note) and work better with only one link type.<br />
<strong><em>~Number of random link to display:</em></strong><br />
This option define the number of random link to dispalay. Keep in mind that it would display X links after the first random picked links. 
<br /><br />Thanks for choosing multiMenu, as always, we are happy to receive any comments and feedback so that we may continually improve the quality and features of this module.<br /><br />- The authors");
?>
