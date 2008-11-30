<?php
// $Id: error.php,v 1.1.2.2 2005/07/28 07:47:29 mithyt2 Exp $
// Error messages
define("SYSTEM_ERROR1", "[b]Zašto sam preusmjeren ovamo?[/b]

{SITE_NAME} ima sigurnosni sistem, koji je pronašao da imate namješten vatrozid, koji sprijeèava vašu  registraciju. Upotrebljavamo 'Referrer-checking' poznat kao HTTP_REFERER, koji je upotrebljen radi sigurnosti korisnika.Postavke vašega vatrozida blokiraju tu informaciju, što vam sprijeèava registraciju. 

Možda ste se veæ u prošlosti uspješno registrirali sada imate probleme prilikom objave poruke. U tom sluèaju ste vjerojatno namjestili svoj vatrozid nakon registracije ili ste promijenili postavke postojeæe instalacije. 

[b]Želim saznati više...[/b]

Kada kliknete na tipku ili povezanost na mrežnoj stranici, vaš preglednik pošalje poslužitelju informacije o novoj stranici. Na takav naèin naš poslužitelj zna, da je bila zadnja stranica, koju ste posjetili dio naše stranice.To je važno, jer su neke stranice dostupne samo, kad ste prijavljeni. Drugim rijeèima, preglednik pošalje poruku 'Ovu stranicu mogu prikazati, jer je osoba registrirana i prijavljena'  Neki vatrozidi automatski blokiraju tu informaciju, da je vi ne bi širili opasnim stranicana. [i]Ništa nije pogrešno sa postavkama vašega vatrozida ili sa ovom stranicom. Jednostavno morate najprije postavku ukljuèiti, da bi mogli normalno pretraživati po stranici.[/i]

[b]Što mogu uèiniti ?[/b]

Najprije iskljuèite / onemoguèite programe, kao što su:

- WebWasher Standard Filter / URL Filter
- programi za blokiranje reklama
- programi za blokiranje nadležnih prozora 

[b]Naravno mora i vaš pretraživaè imati omoguæene takozvane kolaèiæe za stranicu {SITE_URL} [/b]Molimo pogledajte pomoè pri upotrebi kolaèiæa.

Slijedeæi jednostavni koraci su obavezno potrebni, da svojim korisnicima ponudite najbolju sigurnost.
Molimo provjerite postavke vatrozidai kolaèiæa te nakon toga ponovno kliknite na 'Registracija'.

[b]Ovdje je primjer koraka za Norton (NIS), Zone Alarm Pro i Windows XP vatrozid- [/b]

Postupak prikazuje kako dodati stranicu {SITE_URL} u povjerenja vrijedne stranice u vašem vatrozidu.

[b]Norton Internet Security 2002 (ili stariji) [/b]

1. Otvorite NIS ali NPF. 
2. Kliknite Options. 
3. Kliknite Internet Security ali Personal Firewall. (To nije uvijek potrebno.) Pojavi se Options prozor. 
4. Kliknite Advanced Options. 
5. Kliknite  Web oznaku. 
6. Kliknite Add Site. Pojavi se A new site/domain prozor. 
7. Unesite {SITE_URL}  i kliknite OK. Ime stranice se sada pojavi na lijevoj strani prozora Advanced Options. 
8. Kliknite na ime stranice. 
9. Kliknite oznaku Privacy. 
10. Oznaèite \"Use these rules for...\". 
11. Promijenite Referrer iz \"Block\" na \"Permit\" 
12. Kliknite Apply, zatim kliknite OK. 
13. Kliknite OK za zatvaranj Options prozora. 
----------------------------------------------------------
[b]Norton Internet Security 2003/2004 [/b]

1. Otvorite NIS ili NPF. 
2. Napravite jedno od slijedeæaga. 
* V NIS/NPF 2003, kliknite Options > Internet Security ili Personal Firewall (Taj korak nije uvijek potreban), i zatim kliknite Web Content oznaku . 
* V NIS/NPF 2004, dupli klik na Privacy Control, i zatim kliknite Advanced. 
3. Kliknite Add Site. Pojavi se prozor new site/domain. 
4. Unesi {SITE_URL}  i kliknite OK. Ime stranice se sada pojavi na lijevoj strani prozora Advanced Options.
5. Kliknite na ime stranice. 
6. Kliknite oznaku Global Settings. 
7. U sekciji \"Information about visited sites\" odznaèite \"Use default settings\" 
8. Kliknite Permit. 
9. Kliknite OK za zatvaranje prozora Options. 
---------------------------------------------------------- 
[b]Zone Alarm Pro: [/b]

1. Kliknite Privacy 
2. Kliknite Cookie Control 
3. Kliknite Custom 
4. Odznaèite \"remove private header information\" 
5- Možda morate oznaèiti još 'allow third party cookies'
---------------------------------------------------------- 
[b]Windows XP's SP2 vatrozid [/b]

1. Otvorite XP kontrolnu ploèu 
2. Dupli klik na Networking and Internet Connections 
3. Izberite Network Connections 
4. Desni klik na vezu Disable, zatim izaberite Properties 
5. Na oznaci Advanced odznaèite izbor Protect my computer ali network  
6. Kliknite OK ");

?>