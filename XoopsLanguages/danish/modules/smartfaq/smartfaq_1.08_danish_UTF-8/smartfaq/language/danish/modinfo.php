<?php

/**
* $Id: modinfo.php,v 1.27 2005/08/15 16:52:05 fx2024 Exp $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define('_MI_SF_MD_NAME','SmartFAQ');

// A brief description of this module
define('_MI_SF_MD_DESC','Advanced Spørgsmål og Svar system til din XOOPS Side');

// Sub menus in main menu block
define('_MI_SF_SUB_SMNAME1','Send en FAQ');
define('_MI_SF_SUB_SMNAME2','Bed om en FAQ');
define('_MI_SF_SUB_SMNAME3','Åbne spørgsmål');
define('_MI_SF_SUB_SMNAME4','Redigér FAQ');

// Config options
define('_MI_SF_ALLOWSUBMIT','Bruger indlæg:');
define('_MI_SF_ALLOWSUBMITDSC','Tillad brugere at indsende FAQ på dit website?');

define('_MI_SF_ALLOWREQUEST','Bruger anmodninger:');
define('_MI_SF_ALLOWREQUESTDSC','Tillad brugere at anmode FAQ på dit website?');

define('_MI_SF_NEWANSWER','Tillad nyt svar indsendelser:');
define('_MI_SF_NEWANSWERDSC','Vælg \'Ja\' for at give brugerne mulighed for at fremsende nye svar til allerede offentliggjorte FAQ.');

define('_MI_SF_ANONPOST','Tillad anonyme poster');
define('_MI_SF_ANONPOSTDSC','Tillad anonyme brugere til at indsende eller bede om FAQ');

define('_MI_SF_DATEFORMAT','Dato format');
define('_MI_SF_DATEFORMATDSC','Brug den sidste del af language/danish/global.php for at vælge. Eksempel: "d-M-Y H:i" bliver til "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS','Vis sammenklappet barer');
define('_MI_SF_DISPLAY_COLLAPSDSC','Vælg \'Ja\' for at vise sammenklappet  barer i indeks og på kategoriens side.');

define('_MI_SF_DISPLAYTYPE','FAQ visnings type:');
define('_MI_SF_DISPLAYTYPEDSC','Hvis \'Resumé visning\' er valgt, kun de spørgsmål, Dato og Hits for hver FAQ vil blive vist i en udvalgt kategori. Hvis \'Fuld Visning\' er valgt, hvert FAQ vil vises fuldstændigt i den valgte kategori.');
define('_MI_SF_DISPLAYTYPE_SUMMARY','Resumé visning');
define('_MI_SF_DISPLAYTYPE_FULL','Fuld visning');

define('_MI_SF_DISPLAY_LAST_FAQ','Vis sidste FAQ kolonne?');
define('_MI_SF_DISPLAY_LAST_FAQDSC','Vælg \'Ja\' for at vise den sidste FAQ i hver kategori på indekssiden og kategoriens side.');

define('_MI_SF_DISPLAY_LAST_FAQS','Vis en liste over de sidste FAQ, som?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC','Vælg \'Ja\' for at vise en liste over de sidste FAQ på indeks side.');

define('_MI_SF_LAST_FAQ_SIZE','Seneste FAQ størrelse:');
define('_MI_SF_LAST_FAQ_SIZEDSC','Indstil den maksimale størrelse på det spørgsmål i den seneste FAQ kolonne.');

define('_MI_SF_QUESTION_SIZE','Spørgsmål størrelse:');
define('_MI_SF_QUESTION_SIZEDSC','Indstil den maksimale størrelse på spørgsmålet, som en titel i det enkelte FAQ visnings side.');

define('_MI_SF_DISPLAY_SUBCAT_INDEX','Vis under-kategorier på indeks-side');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC','Vælg \'Ja\' for at vise under-kategorier på indeks-siden');

define('_MI_SF_DISPLAY_TOPCAT_DSC','Vis beskrivelse på top kategorier?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC','Vælg \'Ja\' for at vise beskrivelsen på top kategorien på indeks-siden og kategori siden');

define('_MI_SF_DISPLAY_SBCAT_DSC','Vis beskrivelse på under-kategorier?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC','Vælg \'Ja\' for at vise beskrivelsen på under-kategorien på indeks-siden og kategori siden');

define('_MI_SF_ORDERBYDATE','Sortér FAQ efter dato:');
define('_MI_SF_ORDERBYDATEDSC','Hvis du sætter denne indstilling til \'Ja\', vil FAQ inden for en kategori blive sorteret i faldende orden efter dato, ellers vil de blive sorteret efter deres vægt.');

define('_MI_SF_DISPLAY_DATE_COL','Vis \'Offentliggjort den\' kolonne?');
define('_MI_SF_DISPLAY_DATE_COLDSC','Når \'Resumé\' er valgt i visningstye, skal du vælge \'Ja\' for at vise en \'Offentliggjort den \' dato i FAQ tabellen på indeks siden og på kategoriens side.');

define('_MI_SF_DISPLAY_HITS_COL','Vis \'Hits\' kolonne?');
define('_MI_SF_DISPLAY_HITS_COLDSC','Når \'Resumé\' er valgt i visningstype, skal du vælge \'Ja\' for at vise \'Hits\' kolonne i FAQ tabellen på indekssiden og på kategoriens side.');

define('_MI_SF_USEIMAGENAVPAGE','Brug billedet Side navigering:');
define('_MI_SF_USEIMAGENAVPAGEDSC','Hvis du sætter denne indstilling til "Ja", vil Side navigering blive vist med billede, ellers er den oprindelige side Naviagation vil blive anvendt.');

define('_MI_SF_ALLOWCOMMENTS','Kontrollér kommentarer til FAQ-niveau:');
define('_MI_SF_ALLOWCOMMENTSDSC','Hvis du sætter denne indstilling til "Ja", vil du kun se bemærkningerne på de FAQ, der har deres kommentar afkrydsningsfelt markeret. <br /><br />Vælg "Nej" for at have kommentarer forvaltet på globalt plan (se nedenfor under tag "Kommentar regler".');

define('_MI_SF_ALLOWADMINHITS','Admin tæller:');
define('_MI_SF_ALLOWADMINHITSDSC','Tillad admin hits for statistik?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ','Auto godkende indsendt FAQ:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC','Auto godkender indsendt FAQ uden administrators indblanding.');

define('_MI_SF_AUTOAPPROVE_REQUEST','Auto godkende indsendt FAQ:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC','Auto godkender indsendt FAQ uden administrators indblanding');

define('_MI_SF_AUTOAPPROVE_ANS','Auto godkende svar:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC','Auto godkender indsendt svar til åbent spørgsmål.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW','Auto godkende nye svar:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC','Auto godkender nye indsendt svar offentliggjort FAQ.');

define('_MI_SF_LASTFAQSPERCAT','Maksimal sidste FAQ pr kategori:');
define('_MI_SF_LASTFAQSPERCATDSC','Det maksimale antal FAQ, der skal vises i Info kolonne i en kategori.');

define('_MI_SF_CATPERPAGE','Maksimal Kategorier pr side (Brugers side):');
define('_MI_SF_CATPERPAGEDSC','Maksimalt antal top kategorier pr side, der skal vises på en gang i brugerens side.');

define('_MI_SF_PERPAGE','Maksimal FAQ pr side (Admin side):');
define('_MI_SF_PERPAGEDSC','Det maksimale antal FAQ pr side, der skal vises på en gang i FAQ Admin.');

define('_MI_SF_PERPAGEINDEX','Maksimal FAQ pr side (Brugers side):');
define('_MI_SF_PERPAGEINDEXDSC','Det maksimale antal FAQ, der skal vises pe side i brugerens side.');

define('_MI_SF_INDEXWELCOMEMSG','Velkomstbesked:');
define('_MI_SF_INDEXWELCOMEMSGDSC','Velkommen budskab, der skal vises i indekset side i modulet.');
define('_MI_SF_INDEXWELCOMEMSGDEF','På dette område af vores site, kan du finde svar på de oftest stillede spørgsmål, samt svar på <b> Hvordan gør jeg </ b> og <b> Vidste du </ b> spørgsmål. Du er velkommen til at sende en kommentar om ethvert FAQ'); 

define('_MI_SF_REQUESTINTROMSG','Bed om indlednings besked:');
define('_MI_SF_REQUESTINTROMSGDSC','Indledning budskab, der skal vises et ønske om en FAQ side i modulet.');
define('_MI_SF_REQUESTINTROMSGDEF','Kunne du ikke finde svaret på det spørgsmål, du ledte efter? Intet problem! Du skal blot udfylde nedenstående formular for at anmode om svaret for et nyt spørgsmål. Sidens administrator vil gennemgå din ansøgning og offentliggøre dette nye spørgsmål i den åbne spørgsmål sektion for nogen til at svare på det!'); 

define('_MI_SF_OPENINTROMSG','Åbne spørgsmål afsnittet indlednings besked:');
define('_MI_SF_OPENINTROMSGDSC','Indledning budskab, der skal vises i de åbne spørgsmål del af modulet.');
define('_MI_SF_OPENINTROMSGDEF','Her er en liste over de åbne spørgsmål, altså spørgsmål, der er blevet indsendt af brugerne af dette websted, men stadig mangler svar. Du kan klikke på et åbent spørgsmål, hvis du vil hjælpe os med et svar.'); 

define('_MI_SF_USEREALNAME','Brug det rigtige navn på brugerne');
define('_MI_SF_USEREALNAMEDSC','Ved visning af brugernavn, skal du bruge det rigtige navn på den pågældende bruger, hvis han har sat sit rigtige navn.');

define('_MI_SF_HELP_PATH_SELECT','Sti til SmartFAQ\'s hjælpe-filer');
define('_MI_SF_HELP_PATH_SELECT_DSC','Vælg fra, hvor du ønsker adgang til SmartFAQ\'s hjælpe-filer. Hvis du har hentet den \'SmartFAQ\'s\' Help Package \' og uploadet det i \'modules/smartfaq/doc/\', kan du vælge \'Inde i modulet\'. Alternativt kan du få adgang til modulets hjælpe-fil direkte fra docs.xoops.org. Ved at vælge dette i vælgeren. Du kan også vælge \'Egen Sti \' og angive din egen sti til hjælpe-filer i den næste konfigurationsmulighed \'Egen stien til SmartFAQ\'s  hjælpe filer \'');

define('_MI_SF_HELP_PATH_CUSTOM','Egen sti til SmartFAQ\'s hjælpe-filer');
define('_MI_SF_HELP_PATH_CUSTOM_DSC','Hvis du valgte \' Egen sti \' i det foregående valg \'Egen sti til SmartFAQ\'s hjælpe-filer\', bedes du angive webadressen på SmartFAQ\'s hjælpe-filer, i dette format: http://www.dinside.dk/doc");
define(\'_MI_SF_HELP_INSIDE\',"Inde i modulet');

define('_MI_SF_HELP_INSIDE','Inside the module');
define('_MI_SF_HELP_CUSTOM','Egen sti');

//define('_MI_SF_MODERATORSEDIT','Allow moderators to edit (Enhanced moderators)');
//define('_MI_SF_MODERATORSEDITDSC','This option will allow moderators to edit questions and Q&amp;A within categories for which they are moderators. Otherwise, moderators can only approve or reject questions and Q&amp;A.');

// Names of admin menu items
define('_MI_SF_ADMENU1','Indeks');
define('_MI_SF_ADMENU2','Kategorier');
define('_MI_SF_ADMENU3','FAQ');
define('_MI_SF_ADMENU4','Spørgsmål');
define('_MI_SF_ADMENU5','Rettigheder');
define('_MI_SF_ADMENU6','Blokke og grupper');
define('_MI_SF_ADMENU7','Gå til modul');

//Names of Blocks and Block information
define('_MI_SF_ARTSNEW','Nye FAQ liste');
define('_MI_SF_ARTSRANDOM_DIDUNO','Vidste du?');
define('_MI_SF_ARTSRANDOM_FAQ','Tilfældigt spørgsmål!');
define('_MI_SF_ARTSRANDOM_HOW','Hvordan gør jeg...');
define('_MI_SF_ARTSCONTEXT','Indholdsbestemt FAQ');
define('_MI_SF_RECENTFAQS','Nye FAQ (detaljeret)');
define('_MI_SF_RECENT_QUESTIONS','Nye åbne spørgsmål');
define('_MI_SF_MOST_VIEWED','Mest viste FAQ');


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY','Global FAQ');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC','Besked muligheder, der gælder for alle FAQ.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY','kategori FAQ');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC','Besked muligheder, der gælder for den nuværende kategori.');

define('_MI_SF_FAQ_NOTIFY','FAQ');
define('_MI_SF_FAQ_NOTIFY_DSC','Besked indstillinger, der gælder for denne FAQ');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY','Global åbnet spårgsmål');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC','Besked muligheder, der gælder for alle åbnes spørgsmål');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY','Kategori FAQ');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC','Besked muligheder, der gælder for den nuværende kategori.');

define('_MI_SF_QUESTION_NOTIFY','Åbne spørgsmål');
define('_MI_SF_QUESTION_NOTIFY_DSC','Besked muligheder, der gælder for det nuværende åbne spørgsmål.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY','Ny kategori');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP','Giv mig besked, når en ny kategori er oprettet.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC','Modtag besked, når en ny kategori er oprettet.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny kategori');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY','FAQ indsendt');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP','Giv mig besked, når et FAQ er indsendt og afventer godkendelse.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC','Modtag besked, når et FAQ er indsendt og afventer godkendelse.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Nyt FAQ indsendt');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY','Nyt FAQ offentliggjort');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP','Giv mig besked, når en eventuel ny FAQ er offentliggjort.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC','Modtag besked, når et nyt FAQ er offentliggjort.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ny FAQ offentliggjort');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY','Nyt svar foreslået');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','Giv mig besked, når en ny svar er foreslået for enhver FAQ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','Modtag besked, når et nyt svar er foreslået for enhver FAQ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Nyt svar foreslået');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY','Nyt svar offentliggjort');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','Giv mig besked, når et nyt svar er offentliggjort for enhver FAQ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','Modtag besked, når et nyt svar er offentliggjort for enhver FAQ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt svar offentliggjort');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY','FAQ Indsendt');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP','Giv mig besked, når en ny FAQ er indsendt i den aktuelle kategori.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC','Modtag besked, når en ny FAQ er indsendt i den aktuelle kategori.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: FAQ Indsendt i kategori'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY','Ny FAQ offentliggjort');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP','Giv mig besked, når en ny FAQ er offentliggjort i den aktuelle kategori.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC','Modtag besked, når en ny FAQ er offentliggjort i den aktuelle kategori.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ny FAQ offentliggjort i kategori'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY','Nyt svar foreslået');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','Giv mig besked, når et nyt svar er foreslået for en FAQ i denne kategori.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','Modtag besked, når et nyt svar er foreslået for en FAQ i denne kategori.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt svar foreslået');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY','Nyt svar offentliggjort');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','Giv mig besked, når et nyt svar er offentliggjort i en FAQ i denne kategori.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','Modtag besked, når et nyt svar er offentliggjort i en FAQ i denne kategori.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt svar offentliggjort');

define('_MI_SF_FAQ_REJECTED_NOTIFY','FAQ afvist');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP','Giv mig besked, hvis denne FAQ er afvist.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC','Modtag besked, hvis denne FAQ er afvist.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: FAQ afvist'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY','FAQ godkendt');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP','Giv mig besked, når denne FAQ er godkendt.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC','Modtag besked, når denne FAQ er godkendt.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: FAQ godkendt'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY','Svar godkendt');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP','Giv mig besked, når dette svar er godkendt.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC','Modtag besked, når dette svar er godkendt.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Svar godkendt'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY','Svar afvist');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP','Giv mig besked, hvis dette svar er afvist.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC','Modtag besked, hvis dette svar er afvist.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Svar afvist'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY','Spørgsmål indsendt');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP','Giv mig besked, når et spørgsmål er indsendt og afventer godkendelse.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC','Modtag besked, når et spørgsmål er indsendt og afventer godkendelse.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt spørgsmål indsendt');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY','Spørgsmål offentliggjort');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP','Giv mig besked, når et spørgsmål er offentliggjort i de åbne spørgsmål sektion.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC','Modtag besked, når et spørgsmål er offentliggjort i de åbne spørgsmål sektion.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Spørgsmål offentliggjort');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY','Svar foreslået');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','Giv mig besked, når et svar er foreslået for eventuelle åbne spørgsmål.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','Modtag besked, når et svar er foreslået for eventuelle åbne spørgsmål.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Svar foreslået');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY','Spørgsmål indsendt');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP','Giv mig besked, når et spørgsmål er indsendt i den aktuelle kategori.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC','Modtag besked, når et spørgsmål er indsendt i den aktuelle kategori.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt spørgsmål indsendt');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY','Spørgsmål offentliggjort');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP','Giv mig besked, når et spørgsmål er offentliggjort i den aktuelle kategori.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC','Modtag besked, når et spørgsmål er offentliggjort i den aktuelle kategori.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt spørgsmål offentliggjort');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY','Svar foreslået');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','Giv mig besked, når et nyt svar er foreslået for en åbnet spørgsmål i denne kategori.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','Modtag besked, når et nyt svar er foreslået for et åbnet spørgsmål i denne kategori.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt svar foreslået');

define('_MI_SF_QUESTION_REJECTED_NOTIFY','Spørgsmål afvist');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP','Giv mig besked, hvis dette spørgsmål er afvist.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC','Modtag besked, hvis dette spørgsmål er afvist.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Spørgsmål afvist');

define('_MI_SF_QUESTION_APPROVED_NOTIFY','Spørgsmål godkendt');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP','Giv mig besked, når dette spørgsmål er blevet godkendt.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC','Modtag besked, når dette spørgsmål er blevet godkendt.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Spørgsmål godkendt');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY','Svar godkendt');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP','Giv mig besked, når dette svar er godkendt.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC','Modtag besked, når dette svar er godkendt.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Svar godkendt');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY','Svar afvist');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP','Giv mig besked, hvis dette svar er afvist.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC','Modtag besked, hvis dette svar er afvist.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Svar afvist');

// About.php constants
define('_MI_SF_AUTHOR_INFO','Udviklere');
define('_MI_SF_DEVELOPER_LEAD','Lead Udvikler(er)');
define('_MI_SF_DEVELOPER_CONTRIBUTOR','Contributor(s)');
define('_MI_SF_DEVELOPER_WEBSITE','Hjemmeside');
define('_MI_SF_DEVELOPER_EMAIL','Email');
define('_MI_SF_DEVELOPER_CREDITS','Credits');
define('_MI_SF_DEMO_SITE','SmartFactory Demo Side');
define('_MI_SF_MODULE_INFO','Module udviklings information');
define('_MI_SF_MODULE_STATUS','Status');
define('_MI_SF_MODULE_RELEASE_DATE','Udgivelsesdato');
define('_MI_SF_MODULE_DEMO','Demo Side');
define('_MI_SF_MODULE_SUPPORT','Officiel support-side');
define('_MI_SF_MODULE_BUG','Rapporter en fejl for dette modul');
define('_MI_SF_MODULE_FEATURE','Foreslå en ny funktion til dette modul');
define('_MI_SF_MODULE_DISCLAIMER','Ansvarsfraskrivelse');
define('_MI_SF_AUTHOR_WORD','Forfatterens ord');
define('_MI_SF_VERSION_HISTORY','Versions historie');

// Beta
define('_MI_SF_WARNING_BETA','Dette modul kommer som det er uden nogen garantier overhovedet.  <br> Dette modul er BETA, hvilket betyder at det stadig er under aktiv udvikling. Denne version er beregnet til  <br> <b>testformål og kun testformål </b> og vi <b> anbefaler stærkt </b>, at du ikke brugee det på en levende <br> webside eller i et produktionsmiljø.');

// RC
define('_MI_SF_WARNING_RC','Dette modul kommer som det er uden nogen garantier overhovedet. Dette modul  <br> er en Release Candidate og bør ikke bruges på en produktion hjemmeside. Modulet er stadig under  <br> aktiv udvikling og dens anvendelse er under dit eget ansvar, hvilket betyder, udvikleren er ikke ansvarlig.');

// Final
define('_MI_SF_WARNING_FINAL','Dette modul kommer som det er uden nogen garantier overhovedet. Selv om dette modul er ikke beta, er det stadig under aktiv udvikling. Denne version kan bruges i en levende hjemmeside  <br> eller et produktions-miljø, men dets brug er under dit eget ansvar, hvilket betyder, udvikleren ikke kan drages til ansvar.');

?>
