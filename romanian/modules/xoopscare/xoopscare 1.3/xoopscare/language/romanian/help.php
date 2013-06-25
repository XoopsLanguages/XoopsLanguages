<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> este un modul al carui scop este sa ajute in mentinerea cu usurinta si <b>automatica</b> a sitelui tau.
Chiar daca s-a facut tot posibilul ca acest modul sa fie in cea mai buna versiune, <b>acest modul va fi folosit pe propriul risc !</b>

Cu acest modul se pot face urmatoarele :
1/ Administrarea bazei de date
2/ Rularea propriilor chetionari a bazei de date
3/ Executarea de cod Php
4/ Curatarea folderelor templates_c si cache
5/ Inlaturarea comentariilor ce contin spam
6/ Curatarea sesiunilor

Pentru fiecare din aceste actiuni, puteti definii daca doriti sau nu executarea sau momentul in care executarea va avea loc (executarea poate fi programata).

Aditional, puteti inregistra toate actiunile efectuate de catre modul si (daca acestea exista), folosi metode CRON pentru mentenanta site-ului.

Daca aveti posibilitatea sa chestionati modulul printr-o metoda CRON, atunci pur si simplu chestionati fisierul nummit <i>cron.php</i> prezent
at the module's root and pass it a password you have typed in the module's administration.
	Executati in modul urmator : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Daca folositi o metoda cron si nu introduceti parola, modulul nu va reactiona in nici un fel</b>, acest lucru se intampla doar pentru a va
proteja site-ul de persoane ce ar putea folosi scriptul.

Daca nu aveti posibilitatea de a folosi metoda CRON, atunci activati blocul modulului oriunde pe site (oriunde doriti),
 iar de fiecare data este necesar modulul in mod automat, va executa actiunile programare de dumneavoastra.
Sfat : Puteti selecta o durata de cache a blocului.

Primul lucru de facut este de a merge la pagina de administrare a modulului si setarea preferintelor.
In prima parte <b>Preferinte Generale</b>, setati parola pentru metoda CRON in cazul in care veti folosi metoda CRON.
Daca doriti crearea unui fiser log, atunci completati campul numit <i>Fisier Log</i>.
Nota, este recomandat, din motive de securitate, sa dati acestui fisier un nume cu extensie <u>.php</u> .

In partea numita <b>Mentenanta Baza de Date</b>, introduceti un interval in zile pentru mentenanta bazei de date.
Daca setati acest interval la 0 atunci nu va fi executat nimic.
Procesul acestei actiuni este de a verifica, repara, analiza si optimiza toate tabelele folosite de site-ul dumneavoastra Xoops.


In partea numita <b>Chestionari</b>, mai intai se introduce intervalul de timp iar apoi (doar daca este necesar), introduceti
unele chestionari de SQL pentru a rula in baza de date.
Nota, modulul nu aplica nimic chestionarilor dumneavoastra, acesta le executa pe fiecare in parte.

Puteti face acelasi lucru ca la punctul anterior dar pentru executarea de coduri Php in partea numita <b>cod Php</b>

Partea numita <b>Cache si Templates_c</b> va ofera posibilitatea de a curata folderele cache si templates_c
(foldere aflate in drectorul root al site-ului dumneavoastra)

Partea numita <b>Sesiuni</b> va ofera posibilitatea de a curata tabela de sesiuni din Mysql la un interval de timp prestabilit.


In final, cu partea numita <b>Comentarii Spam</b>, puteti inlatura comentariile ce contin spam.
Aceasta functie ruleaza cu sectiunea Xoops, <i>Optiuni Cenzura Cuvinte/Word Censoring Options</i>.
Mai intai din <i>Preferinte Site</i>, trebuie sa activati cenzura cuvintelor nedorite, introduceti cuvintele de cenzurat si
selectati un cuvant cu care acestea vor fi inlocuite.
Standard, cuvintele cenzurate sunt inlocuite cu #OOPS#.
Modulul XoopsCare va cauta comentarii ce contin acest cuvant in the titlurile si/sau continutul comentariilor
si va aplica preferintele setate cu privire la comentarii.
Aditional, modulul poate extrage IP'ul spammer-ului (din comentariu) si adaugarea acestuia la lista de IP'uri blocate.
In final, puteti selecta destinatia comentariilor detectate ca SPAM, le puteti pastra, anula statusul de comentariu publicat, ascunderea acestora si 
stergerea acestoradelete them.


Daca puteti folosi metoda CRON pentru curatarea site-ului, atunci intervalul de timp introdus pentru fiecare actiune in parte nu va fi folosit dar acesta trebuie sa fie mai mare de 0.

<a href="http://www.instant-zero.com" target="_blank">Spune-ti parerea despre acest modul</a>

endhelp;
?>
