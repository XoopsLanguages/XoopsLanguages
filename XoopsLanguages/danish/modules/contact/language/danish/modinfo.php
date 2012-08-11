<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// Module Info

// The name of this module
define("_MI_CONTACT_NAME","Kontakt os");
// A brief description of this module
define("_MI_CONTACT_DESC","Kontakt os");

define('_MI_CONTACT_SETTINGS','Indstillinger');
define('_MI_CONTACT_SETTINGS_DSC','Kontakt os indstillinger');
define('_MI_CONTACT_GEN','Generelt' );
define('_MI_CONTACT_GEN_DSC','Genelle indstillinger, introduktion emne og email indstillinger definitioner' );

// Config stuff
define("_MI_CONTACT_GETICQ","ICQ" );
define("_MI_CONTACT_GETICQDSC","Ja - spørg efter ICQ" );

define("_MI_CONTACT_ALLOWSENDCONFIRM","Tillad bekræfelses besked Allow Confirm Messages" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC","Ja - viser en boks for afsender, "
                                 ." hvor de kan bede om at få tilsendt en bekræftelses mail." );

define("_MI_CONTACT_GETURL","URL" );
define("_MI_CONTACT_GETURLDSC","Ja - spørg efter brugerens URL (hjemmeside)" );

define("_MI_CONTACT_GETCOMPANY","Firma navn" );
define("_MI_CONTACT_GETCOMPANYDSC","Ja - spørg efter brugerens firma navn" );

define("_MI_CONTACT_GETLOC","Sted" );
define("_MI_CONTACT_GETLOCDSC","Ja - spørg efter brugerens sted, ikke den fulde adresse" );

define("_MI_CONTACT_ADDRESS","Adresse" );
define("_MI_CONTACT_ADDRESSDSC","Ja - spørg efter brugrens adresse" );

define("_MI_CONTACT_INTROHEAD","Introduktions overskrift" );
define("_MI_CONTACT_INTROHEAD_DESC","Det er overskriften anvendes til den <b>Indledende tekst</b>");
define("_MI_CONTACT_INTRO_DEFAULT","Udfyld formularen og send, vil vi reagere så hurtigt som muligt!");

define("_MI_CONTACT_INTRO","Introduktions tekst" );
define("_MI_CONTACT_INTRO_DESC","Tekst der kan tilføjes i starten af <b>Kontakt os</b><br />"
                               ."Det kunne være velkomst tekst, adresse, telefonnummer osv" );
							   
define("_MI_CONTACT_SECURITY","Sikkerheds check" );
define("_MI_CONTACT_SECURITYDSC","Ja - Aktiver <b>Sikkerheds check</b> for at validerer at brugerne sender med korrekt mailadresse.<br />"
	                             ."Dette kan også begrænse <b>Kontakt os</b> SPAM!" );
								 
define("_MI_CONTACT_SITEKEY","Tilfældig nøgle" );
define("_MI_CONTACT_SITEKEYDSC","Opret en tilfældig nøgle med store og små bogstaver, samt tal, for at lave <b>Sikkerheds check</b><br />"
                                ."mere grynet og tilfældig!" );
								
define("_MI_CONTACT_HEAD","Kontakt overskrift" );
define("_MI_CONTACT_HEADDSC","Overskrift for kontakt formular");
define("_MI_CONTACT_HEADDEFAULT","Kontakt formular");

define("_MI_CONTACT_THANKYOU","Takke besked");
define("_MI_CONTACT_THANKYOUDSC","Besked til afsender med tak for at de kontaktede dig");
define("_MI_CONTACT_THANKYOUDEFAULT","Tak for din henvendelse. Vi vil vende tilbage til dig hurtigst muligt!");

define("_MI_CONTACT_TIMEOUT","Omdirigeringsside timeout");
define("_MI_CONTACT_TIMEOUTDSC","Dette er antallet af sekunder, hvor omdirigeringssiden vises efter afsendelse af en besked");																						   

define("_MI_CONTACT_SHOWDEPT","Vis \"Afdeling/emne\" Sektion");
define("_MI_CONTACT_SHOWDEPTDSC","Ja - Viser en dropdown boks med valgte afdelinger/emner<br />"
                                 ."Hvis ingen afdelinger vises, vil alle emails sendes til sidens email-adresse" );

define("_MI_CONTACT_DEPTTITLE","\"Afdeling/emne\" Titel");
define("_MI_CONTACT_DEPTTITLEDSC","Titlen der vises ud for \"Afdeling/emne\" sektionen af kontakt formularen");
define("_MI_CONTACT_DEPTTITLEDEFAULT","Afdeling");

define("_MI_CONTACT_DEPT","Afdelinger" );
define("_MI_CONTACT_DEPTDSC","Afdelinger giver dig mulighed for at definerer en afdeling/email kombination.  Brugerne vælger<br />"
                             ."fra en foruddefineret afdeling, som de vil have deres besked sendt til. Beskeden vil så blive sendt til den<br />"
							 ."email adresse du definerer.<br /><br />"
							 ."Definer hver afdeling/email som følgende:<br /><br />"
							 ."afd1,email1|afd2,email2|afd3,email3 osv. - hver afdeling og email skal adskilles af et komma ','<br />"
							 .", og hver email kombination skal adskilles af en pipe '|'" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN","Valider Email Domæne");
define("_MI_CONTACT_VALIDATEDOMAINDSC","Ja - Aktiver \"deep-check\" af domain.tld i email adresse udbyder.<br />"
                                       ."Nej - Laver et simpelt check på email adressen der er indtastet.");
									   
define("_MI_CONTACT_SHOWMOREINFO","Vis \"Mere information\" Sektion" );
define("_MI_CONTACT_SHOWMOREINFODSC","Ja - Vis en sektion med flere checkboks muligheder, som du definerer i din \"Mere information\"");									   							 

define("_MI_CONTACT_MOREINFOTITLE","\"Mere information\" Titel" );
define("_MI_CONTACT_MOREINFOTITLEDSC","Titlen der vises i \"Mere Information\" sektionen af kontakt formularen" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Forespørg om mere information");

define("_MI_CONTACT_MOREINFO","\"Mere information\" felter");
define("_MI_CONTACT_MOREINFODSC","\"Mere information\" felter gør det muligt at vise felter, som brugeren kan afmærke<br />"
                                 ."interesser eller behov for informations. Det er en måde at styre dine besøgende, <br />"
								 ."hvis det er hvad du ønsker."
								 ."Definer hvert felt med følgende:<br /><br />"
								 ."Felt1|Felt2|Felt3 osv. - hvert felt skal adskilles med en pipe '|'");
								

?>