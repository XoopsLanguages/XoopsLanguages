<?php
// include/cp_functions
//fonction admin_menu
	define("_AM_CATADS_CONFIG","Konfiguracja modułu ");
	define("_AM_CATADS_GENERALSET","Ustawienia");
	define("_AM_CATADS_OPTMANAGE","Lista pól");
	define("_AM_CATADS_CATMANAGE","Zarządzanie kategoriami");
	define("_AM_CATADS_ADSMANAGE","Zarządzanie ogłoszeniami");
	define("_AM_CATADS_GOINDEX","Idź do modułu");
//fonction ads_menu
	define("_AM_CATADS_ADSMANAGER","Zarządzanie ogłoszeniami");
	define("_AM_CATADS_ALL","Wszystkie ogłoszenia");
	define("_AM_CATADS_PUB","Opublikowane ogłoszenia");
	define("_AM_CATADS_WAIT","Oczekujące ogłoszenia");
	define("_AM_CATADS_EXP","Wygasłe ogłoszenia");
	// add v1.30
	define("_AM_CATADS_NEXT","Ogłoszenia oczekujące na akceptację");//<- translate

// index admin
// function show
	define("_AM_CATADS_STATUS","Status");//+ form
	define("_AM_CATADS_TITLE_ADS","Nazwa");//+ form
	define("_AM_CATADS_TITLE_CAT","Kategoria");//+ form
	define("_AM_CATADS_DESCR","Opis");//+ form
	define("_AM_CATADS_ACTION","Akcja");
	define("_AM_CATADS_EDIT","Edycja");
	define("_AM_CATADS_DEL","Usuń");
	define("_AM_CATADS_APPROVE","Opublikuj");
	//add v1.4
	define("_AM_CATADS_DISPLAY","Wyświetl");
	define("_AM_CATADS_SELECT_SORT","Porządek");
	define("_AM_CATADS_SORT_ASC","Rosnąco");
	define("_AM_CATADS_SORT_DESC","Malejąco");
// function edit
	define("_AM_CATADS_FORMEDIT","Advertisement");
	define("_AM_CATADS_CONTACT","Kontakt");
// formulaire
	define("_AM_CATADS_DATE_CREA","Data utworzenia ");
	define("_AM_CATADS_DATE_PUB","Data publikacji ");
	define("_AM_CATADS_DATE_EXP","Data wygaśnięcia ");
	define("_AM_CATADS_WAIT2","Oczekuje od ");
	define("_AM_CATADS_PUB2","Opublikowano ");
	define("_AM_CATADS_EXP2","Wygasło ");
	define("_AM_CATADS_TODAY","Dzisiaj");
	define("_AM_CATADS_PRICE","Cena");
	define("_AM_CATADS_PHONE","Telefon");
	define("_AM_CATADS_EMAIL","Email");
	define("_AM_CATADS_TOWN","Misto");
	define("_AM_CATADS_CODPOST","Kod pocztowy");
	define("_AM_CATADS_DELIMG"," Usuń ten obrazek");
	define("_AM_CATADS_PUBADS"," Publikuj");
	define("_AM_CATADS_NOERROR_UPDATE"," Ogłoszenie zostało zmodyfikowane");
	define("_AM_CATADS_ERROR_UPDATE"," Ogłoszenie nie zostało zmodyfikowane");
	// add v1.30
	define("_AM_CATADS_DELAY_PUB","Publikacja niedługo ");
	define("_AM_CATADS_TO","w ");
	// add v1.4
	define("_AM_CATADS_ADS_FROM","Ogłoszenia autora :");

//Gestion des annonces	
	define("_AM_CATADS_ADSAPPROVED","Ogłoszenie zostało opublikowane");
	define("_AM_CATADS_ADSDELETED","Ogłoszenie zostało usunięte");
	define("_AM_CATADS_CONF_DEL","Czy na pewno chcesz usunąć to ogłoszenie?");
	define("_AM_CATADS_CONF_DELEXP","Czy na pewno chcesz usunąć te ogłoszenia?");
	define("_AM_CATADS_ADSEXPDELETED","%s wygasłe ogłoszenie(a) zostało (zostały) usunięte");
	define("_AM_CATADS_DAYS"," dni");
//Effacement des annonces	
	define("_AM_CATADS_DELEXP","Usuń ogłoszenie");
	define("_AM_CATADS_DELEXP2","Expiration greater than ");
	
//Gestion des rubriques	
	define("_AM_CATADS_MODIFYCATEGORY","Zmień kategorię");
	define("_AM_CATADS_ADDCATEGORY","Dodaj kategorię");
	define("_AM_CATADS_CATEGORYWEIGHT","Waga kategorii");
	define("_AM_CATADS_CATEGORYNAME","Nazwa kategorii");
	define("_AM_CATADS_MOVETO","Przenieś do");
	define("_AM_CATADS_IN","W");
    define("_AM_CATADS_CATEGORYIMG","Obrazek");
    define("_AM_CATADS_CATEGORY","Kategoria");
	define("_AM_CATADS_PRICE_DISP","Wyświetl cenę w tej kategorii");
	define("_AM_CATADS_DB_UPDATED","Baza została uaktualniona pomyślnie!");
	define("_AM_CATADS_CANNOT_MOVE_HERE","Kategoria nie może być przeniesiona tutaj");
	define("_AM_CATADS_MUST_NUMBER","Waga musi być liczbą!");	
	define("_AM_CATADS_CONFDELCAT","UWAGA : Czy na pewno chcesz usunąć tę kategorię, wszystkie jej podkategorie oraz ogłoszenia?");
	define("_AM_CATADS_CAT_DEL","Kategoria została usunięta");	
	// add v1.4
	define("_AM_CATADS_NBMAX_PHOTO","# dozwolonych obrazków");

//Gestion des options de listes déroulantes	
	define("_AM_CATADS_CONFDELOPT","Czy na pewno chcesz usunąć tę opcję?<br />Dotychczas opublikowane ogłoszenia nie zostaną zmienione");
	define("_AM_CATADS_OPT_DEL","Wybrana opcja została usunięta");	
	define("_AM_CATADS_MODIFYOPTION","Edytuj opcję");
	define("_AM_CATADS_OPT1","Waluta");
	define("_AM_CATADS_OPT2","Opcja płatności");
	define("_AM_CATADS_OPT3","Rodzaj");
	define("_AM_CATADS_OPT_ADD","Dodaj opcję do listy");
	define("_AM_CATADS_OPT_EDIT","Edytuj opcję");
	define("_AM_CATADS_OPT_IN","W kategorii");
	define("_AM_CATADS_OPT_TITLE","Nazwa");
	define("_AM_CATADS_OPT_ORDER","Waga");
	define("_AM_CATADS_MUST_TEXT","Pole jest puste");	
	// add v1.30
	define("_AM_CATADS_OPT4","Czas trwania");

// upgrade
	// add v1.4
	define("_AM_CATADS_NOCHANGE","Nie uaktualniono");
	define("_AM_CATADS_WARNING_UPGRADE","<font color='#FF0000'><b>Uwaga : </b>Zrób kopię swoich tabel przed update'm</font>");
	define("_AM_CATADS_TABLE","Tabela : ");
	define("_AM_CATADS_FIELD","Pole : ");
	define("_AM_CATADS_ADDED","Dodano w v ");
	define("_AM_CATADS_DELETED","Usunięto w v ");
	define("_AM_CATADS_UPGRADE","Uaktualnij");
	define("_AM_CATADS_ERROR","Błąd : ");
	define("_AM_CATADS_NOERROR","Bezbłędnie : ");

?>
