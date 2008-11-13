<?php
// include/cp_functions
//fonction admin_menu
	define("_AM_CATADS_CONFIG","Konfiguracja modu³u ");
	define("_AM_CATADS_GENERALSET","Ustawienia");
	define("_AM_CATADS_OPTMANAGE","Lista pól");
	define("_AM_CATADS_CATMANAGE","Zarz±dzanie kategoriami");
	define("_AM_CATADS_ADSMANAGE","Zarz±dzanie og³oszeniami");
	define("_AM_CATADS_GOINDEX","Id¼ do modu³u");
//fonction ads_menu
	define("_AM_CATADS_ADSMANAGER","Zarz±dzanie og³oszeniami");
	define("_AM_CATADS_ALL","Wszystkie og³oszenia");
	define("_AM_CATADS_PUB","Opublikowane og³oszenia");
	define("_AM_CATADS_WAIT","Oczekuj±ce og³oszenia");
	define("_AM_CATADS_EXP","Wygas³e og³oszenia");
	// add v1.30
	define("_AM_CATADS_NEXT","Og³oszenia oczekuj±ce na akceptacjê");//<- translate

// index admin
// function show
	define("_AM_CATADS_STATUS","Status");//+ form
	define("_AM_CATADS_TITLE_ADS","Nazwa");//+ form
	define("_AM_CATADS_TITLE_CAT","Kategoria");//+ form
	define("_AM_CATADS_DESCR","Opis");//+ form
	define("_AM_CATADS_ACTION","Akcja");
	define("_AM_CATADS_EDIT","Edycja");
	define("_AM_CATADS_DEL","Usuñ");
	define("_AM_CATADS_APPROVE","Opublikuj");
	//add v1.4
	define("_AM_CATADS_DISPLAY","Wy¶wietl");
	define("_AM_CATADS_SELECT_SORT","Porz±dek");
	define("_AM_CATADS_SORT_ASC","Rosn±co");
	define("_AM_CATADS_SORT_DESC","Malej±co");
// function edit
	define("_AM_CATADS_FORMEDIT","Advertisement");
	define("_AM_CATADS_CONTACT","Kontakt");
// formulaire
	define("_AM_CATADS_DATE_CREA","Data utworzenia ");
	define("_AM_CATADS_DATE_PUB","Data publikacji ");
	define("_AM_CATADS_DATE_EXP","Data wyga¶niêcia ");
	define("_AM_CATADS_WAIT2","Oczekuje od ");
	define("_AM_CATADS_PUB2","Opublikowano ");
	define("_AM_CATADS_EXP2","Wygas³o ");
	define("_AM_CATADS_TODAY","Dzisiaj");
	define("_AM_CATADS_PRICE","Cena");
	define("_AM_CATADS_PHONE","Telefon");
	define("_AM_CATADS_EMAIL","Email");
	define("_AM_CATADS_TOWN","Misto");
	define("_AM_CATADS_CODPOST","Kod pocztowy");
	define("_AM_CATADS_DELIMG"," Usuñ ten obrazek");
	define("_AM_CATADS_PUBADS"," Publikuj");
	define("_AM_CATADS_NOERROR_UPDATE"," Og³oszenie zosta³o zmodyfikowane");
	define("_AM_CATADS_ERROR_UPDATE"," Og³oszenie nie zosta³o zmodyfikowane");
	// add v1.30
	define("_AM_CATADS_DELAY_PUB","Publikacja nied³ugo ");
	define("_AM_CATADS_TO","w ");
	// add v1.4
	define("_AM_CATADS_ADS_FROM","Og³oszenia autora :");

//Gestion des annonces	
	define("_AM_CATADS_ADSAPPROVED","Og³oszenie zosta³o opublikowane");
	define("_AM_CATADS_ADSDELETED","Og³oszenie zosta³o usuniête");
	define("_AM_CATADS_CONF_DEL","Czy na pewno chcesz usun±æ to og³oszenie?");
	define("_AM_CATADS_CONF_DELEXP","Czy na pewno chcesz usun±æ te og³oszenia?");
	define("_AM_CATADS_ADSEXPDELETED","%s wygas³e og³oszenie(a) zosta³o (zosta³y) usuniête");
	define("_AM_CATADS_DAYS"," dni");
//Effacement des annonces	
	define("_AM_CATADS_DELEXP","Usuñ og³oszenie");
	define("_AM_CATADS_DELEXP2","Expiration greater than ");
	
//Gestion des rubriques	
	define("_AM_CATADS_MODIFYCATEGORY","Zmieñ kategoriê");
	define("_AM_CATADS_ADDCATEGORY","Dodaj kategoriê");
	define("_AM_CATADS_CATEGORYWEIGHT","Waga kategorii");
	define("_AM_CATADS_CATEGORYNAME","Nazwa kategorii");
	define("_AM_CATADS_MOVETO","Przenie¶ do");
	define("_AM_CATADS_IN","W");
    define("_AM_CATADS_CATEGORYIMG","Obrazek");
    define("_AM_CATADS_CATEGORY","Kategoria");
	define("_AM_CATADS_PRICE_DISP","Wy¶wietl cenê w tej kategorii");
	define("_AM_CATADS_DB_UPDATED","Baza zosta³a uaktualniona pomy¶lnie!");
	define("_AM_CATADS_CANNOT_MOVE_HERE","Kategoria nie mo¿e byæ przeniesiona tutaj");
	define("_AM_CATADS_MUST_NUMBER","Waga musi byæ liczb±!");	
	define("_AM_CATADS_CONFDELCAT","UWAGA : Czy na pewno chcesz usun±æ tê kategoriê, wszystkie jej podkategorie oraz og³oszenia?");
	define("_AM_CATADS_CAT_DEL","Kategoria zosta³a usuniêta");	
	// add v1.4
	define("_AM_CATADS_NBMAX_PHOTO","# dozwolonych obrazków");

//Gestion des options de listes déroulantes	
	define("_AM_CATADS_CONFDELOPT","Czy na pewno chcesz usun±æ tê opcjê?<br />Dotychczas opublikowane og³oszenia nie zostan± zmienione");
	define("_AM_CATADS_OPT_DEL","Wybrana opcja zosta³a usuniêta");	
	define("_AM_CATADS_MODIFYOPTION","Edytuj opcjê");
	define("_AM_CATADS_OPT1","Waluta");
	define("_AM_CATADS_OPT2","Opcja p³atno¶ci");
	define("_AM_CATADS_OPT3","Rodzaj");
	define("_AM_CATADS_OPT_ADD","Dodaj opcjê do listy");
	define("_AM_CATADS_OPT_EDIT","Edytuj opcjê");
	define("_AM_CATADS_OPT_IN","W kategorii");
	define("_AM_CATADS_OPT_TITLE","Nazwa");
	define("_AM_CATADS_OPT_ORDER","Waga");
	define("_AM_CATADS_MUST_TEXT","Pole jest puste");	
	// add v1.30
	define("_AM_CATADS_OPT4","Czas trwania");

// upgrade
	// add v1.4
	define("_AM_CATADS_NOCHANGE","Nie uaktualniono");
	define("_AM_CATADS_WARNING_UPGRADE","<font color='#FF0000'><b>Uwaga : </b>Zrób kopiê swoich tabel przed update'm</font>");
	define("_AM_CATADS_TABLE","Tabela : ");
	define("_AM_CATADS_FIELD","Pole : ");
	define("_AM_CATADS_ADDED","Dodano w v ");
	define("_AM_CATADS_DELETED","Usuniêto w v ");
	define("_AM_CATADS_UPGRADE","Uaktualnij");
	define("_AM_CATADS_ERROR","B³±d : ");
	define("_AM_CATADS_NOERROR","Bezb³êdnie : ");

?>
