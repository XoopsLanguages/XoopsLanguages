<?php
// commun	
	define("_MD_CATADS_FROMSITE","Ogłoszenia od");
	define("_MD_CATADS_MAIN","Strona główna ");//adslist, adsitem
    define("_MD_CATADS_PRICE","Cena ");
//commun formulaires
	define("_MD_CATADS_EDITADS","Edytuj to ogłoszenie");
	define("_MD_CATADS_CAT_NOEXIST","Ta kategoria nie istnieje");
	
// index.php
	define("_MD_CATADS_ADM_WAIT","Ogłoszenia oczekujące");
	define("_MD_CATADS_NO_WAIT","Nie ma żadnych ogłoszeń oczekujących");
	define("_MD_CATADS_NBWAIT","Jest %s ogłoszeń oczekujących");
	define("_MD_CATADS_SEEWAIT","Zobacz oczekujące ogłoszenia");
	define("_MD_CATADS_ACTUALY","Aktywowano %s ogłoszeń");
	define("_MD_CATADS_ANDWAIT","i %s ogłoszeń czeka na akceptację");
    define("_MD_CATADS_LASTADD","Ostatnio dodane");
	
// adslist.php
    define("_MD_CATADS_ADDANNONCE","Dodaj ogłoszenie do tej kategorii");
	define("_MD_CATADS_NOADSINCAT","Nie ma ogłoszeń w tej kategorii");
	define("_MD_CATADS_ADSPUB","Opublikowane");
	define("_MD_CATADS_ADSEXP","Wygasłe");
	define("_MD_CATADS_ADSWAIT","oczekujące");
	define("_MD_CATADS_ADSSUSP","Wstrzymane");
	// add v1.3
	define("_MD_CATADS_ADSPLAN","Do opublikowania");//<- translate
// adsuserlist.php
	define("_MD_CATADS_MYADS","Moje ogłoszenia");
	define("_MD_CATADS_ALLADS","Wszystkie ogłoszenia z ");

// catads_adssublist.html
    define("_MD_CATADS_TITLE","Nazwa ");
    define("_MD_CATADS_DATE","Data");
	define("_MD_CATADS_VIEW","Odsłon");
	define("_MD_CATADS_LOCAL2","Miejsce");

//functions.php
//functions: getAdsItem
	define("_MD_CATADS_IMGDISP","Dostępne zdjęcie");
//function: copyright
	define("_MD_CATADS_FOR","dla");

// adsitem.php
	define("_MD_CATADS_NO_EXIST","To ogłoszenie nie istnieje");
	define("_MD_CATADS_BYMAIL","Wyślij email do sprzedającego");
	define("_MD_CATADS_BYPM","Wyślij prywatną wiadomość do sprzedającego");
	define("_MD_CATADS_NBVIEW"," wyświetlono %s razy");
	define("_MD_CATADS_GO_CAT","Idź do kategorii");
	define("_MD_CATADS_PUBAGAIN_CONF","Chcesz to opublikować ponownie ?");
	define("_MD_CATADS_PUBAGAIN_OK","Twoje ogłosznie zostało przedłużone o %s dni");
	define("_MD_CATADS_UPDATE_ERROR","Błąd, nie uaktualniono bazy");
	define("_MD_CATADS_PUBSTOP_CONF","Chcesz przerwać publikację swojego ogłoszenia ?");
	define("_MD_CATADS_PUBGO_CONF","Chcesz wznowić publikację swojego ogłoszenia ?");
	define("_MD_CATADS_PUBSTOP_OK","Twoje ogłoszenie zostało wstrzymane");
	define("_MD_CATADS_PUBGO_OK","Twoje ogłoszenie zostało opublikowane ponownie");
	//add v1.4
	define("_MD_CATADS_SEE_OTHER_ADS","See %s ads of %s published ads.");
	define("_MD_CATADS_NO_OTHER_ADS","No other ad of %s published ads.");

// catads_adsitem.html
	define("_MD_CATADS_DATE_EXP","accessible until ");
    define("_MD_CATADS_PRICE2","Cena :");
	define("_MD_CATADS_CONTACT","Kontakt ");
	define("_MD_CATADS_PHONE","Telefon ");
	define("_MD_CATADS_VALIDADS","Opublikuj ogłoszenie");
	define("_MD_CATADS_DELETEADS","Usuń ogłoszenie");
	define("_MD_CATADS_NO_ADS","Nie ma dostępnych ogłoszeń<br />(Mogła wygasnąć lub zostać usunięta)");
	define("_MD_CATADS_PUB_AGAIN","Opublikuj ponownie ");
	define("_MD_CATADS_PUB_STOP","Wstrzymaj publikację ");
	define("_MD_CATADS_PUB_GO","Wznów publikację ");
	define("_MD_CATADS_PUB_SUSP","<b>Publikacja wstrzymana</b>");
	//2004/10/31
	define("_MD_CATADS_PRINT","Drukuj");
	//add v1.3
	define("_MD_CATADS_NO_ADS_E","(Ogłoszenie wygasło)");
	define("_MD_CATADS_NO_ADS_W","(Ogłoszenie czeka na akceptację)");
	define("_MD_CATADS_NO_ADS_P","(Ogłoszenia będą umieszczone w %s)");
	//add v1.4
	define("_MD_CATADS_DATE_PUB1","Opublikowano ");
	define("_MD_CATADS_PHOTO","Zdjęcie(a)");
	define("_MD_CATADS_ADSFROM","Autor: ");

// contact
	define("_MD_CATADS_FROMUSER","Wiadomość od");
	define("_MD_CATADS_YOURADS","odnośnie twojego ogłoszenia ");
	define("_MD_CATADS_CANJOINT","Możesz się ze mną skontaktować przez e-mail : ");
	define("_MD_CATADS_ORAT","lub telefonicznie : ");
	define("_MD_CATADS_CONTACTAFTERADS","Kontakt jako rezultat twojego ogłoszenia");
	define("_MD_CATADS_MSGSEND","Twoja wiadomość została wysłana...");

// fichier formcontact.inc.php //
	define("_MD_CATADS_CONTACTAUTOR","Kontakt z autorem ogłoszenia przez e-mail");
	define("_MD_CATADS_YOURNAME","Twoje imię");
	define("_MD_CATADS_YOUREMAIL","E-mail");
	define("_MD_CATADS_YOURPHONE","Numer tel.");
	define("_MD_CATADS_YOURMESSAGE","Treść");

// submit
	define("_MD_CATADS_ONLY_MEMBERS","Tylko zarejestrowani użytkownicy mogą dodawać ogoszenia");
	define("_MD_CATADS_FILEERROR","Nie udało się wczytać obrazu<br />Sprawdź czy zdjęcie nie jest cięższe niż %s bajtów");
	define("_MD_CATADS_ERROR_INSERT","Wystąpił błąd. Twoje ogłoszenie nie zostało dodane");
	define("_MD_CATADS_MODULE_NAME","Catads");
	define("_MD_CATADS_NEW_SUBMIT","Dodaj nowe ogłoszenie'");
	define("_MD_CATADS_AFTER_MODERATE","Ogłoszenie oczekuje na akceptację admina przed opublikowaniem");
	define("_MD_CATADS_NO_MODERATE","Twoje ogłoszenie zostało dodane ");

	define("_MD_CATADS_MSG_UPLOAD","Chesz dodać zdjęcie do ogłoszenia ?");
	define("_MD_CATADS_IMG_FIELD","Musisz wybrać plik");
	define("_MD_CATADS_IMG_NOPERM","Operacje niedozwolona");
	define("_MD_CATADS_IMG_TIME","Czas został przekroczony");
	define("_MD_CATADS_ADS_NOEXIST","To ogłoszenie nie istnieje'");
	define("_MD_CATADS_INVALIDMAIL","Proszę o wpisanie poprawnego adresu e-mail");
	define("_MD_CATADS_INVALIDPRICE","Cena musi być liczbą !");
// 2004/10/24
	define("_MD_CATADS_MAXLENGTH","Tytuł nie może prezkroczać %s znaków.");

	define("_MD_CATADS_PHONE_S","Telefon");
	define("_MD_CATADS_MAIL_S","E-mail");
	define("_MD_CATADS_CITY_S","Miasto");
	define("_MD_CATADS_CODPOST_S","Kod pocztowy");
	define("_MD_CATADS_PRICE_S","Cena");
	define("_MD_CATADS_PHONE_P","Telefon");
	define("_MD_CATADS_SELCAT1","Aby dodać ogłoszenie ");
	define("_MD_CATADS_IN"," w : ");
	define("_MD_CATADS_SELCAT2","wybierz kategorię");
	//add v1.4
	define("_MD_CATADS_MAILREQ","Aby się z tobą skontaktować, wpisz swój e-mail");
	define("_MD_CATADS_PHONEREQ","Aby się z tobą skontaktować, wpisz swój numer telefonu");
	
// formulaire annonce
	define("_MD_CATADS_MENUADD","Twoje ogłoszenie w kategorii : ");
	define("_MD_CATADS_TITLE_S","Tytuł ");
	define("_MD_CATADS_MSG_MOD","Ogłoszenia zostaną opublikowane po akceptacji admina");
	define("_MD_CATADS_TEXTE_S","Treść ");
	define("_MD_CATADS_ADDIMG","Dodaj zdjęcie");
	define("_MD_CATADS_ADVERT","Wyślij mi e-mail gdy ogłoszenie zsotanie zaakceptowane");
	define("_MD_CATADS_CONTACT_S","Kontakt ze mną");
	define("_MD_CATADS_CONTACT_MODE","Kontakt ze mną");// mod v1.4
	define("_MD_CATADS_CONTACT_MODE1"," PM");
	define("_MD_CATADS_CONTACT_MODE2"," E-mail");// mod v1.4
	define("_MD_CATADS_CONTACT_MODE3","Telefon");// mod v1.4
	define("_MD_CATADS_IMG_CONFIG","Max. rozmiar %s kb, max. szerokość %s pixeli, max. wysokość %s pixeli");
	// add v1.30
	define("_MD_CATADS_DATE_PUB","Data");
	define("_MD_CATADS_DURATION_PUB","Czas trwania");
	define("_MD_CATADS_DAYS","dni");
	define("_MD_CATADS_CONTACTME","Kontakt");
	//add v1.4
	define("_MD_CATADS_CONTACT_PREF1","preferowany");
	define("_MD_CATADS_CONTACT_PREF2","tylko");
	define("_MD_CATADS_BY","przez");

// Edition annonce
	// add v1.40
	define("_MD_CATADS_IMG","Zdjęcie");
	define("_MD_CATADS_DELIMG","Usuń to zdjęcie");
	define("_MD_CATADS_REPLACEIMG"," <b>lub</b> zamień z <br>");
	define("_MD_CATADS_CONF_DEL","Czy na perno chcesz usunąć to ogłoszenie ?");
	define("_MD_CATADS_ERROR_UPDATE","Wystąpił błąd podczas edycji ogłoszenia.");
	define("_MD_CATADS_NOERROR_UPDATE","Ogłoszenie zaktualizowano pomyślnie.");
	define("_MD_CATADS_ADSDELETED","Twoje ogłoszenie zostało usunięte");
	define("_MD_CATADS_ERRORDEL","Błąd: Twoje ogłoszenie nie zostało usunięte ");

// fichier display-image.php //
	define("_MD_CATADS_CLOSEF","Zamknij okno");
	

?>