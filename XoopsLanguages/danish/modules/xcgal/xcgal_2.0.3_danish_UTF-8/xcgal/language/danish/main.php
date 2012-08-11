<?php
// $Id: main.php,v 1.4 2005/09/22 08:08:02 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
//  ------------------------------------------------------------------------ //
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
// shortcuts for Byte, Kilo, Mega
define('_MD_BYTES','Bytes');
define('_MD_KB','KB');
define('_MD_MB','MB');

define('_MD_NPICS','%s billede(r)');
define('_MD_PICS','Billeder');
define('_MD_ALBUM','Album');
define('_MD_ERROR','TILBAGE');
define('_MD_KEYS','Nøgleord');
define('_MD_CONTINUE','FORTSÆT');

define('_MD_RANDOM','Tilfældige billeder');
define('_MD_LASTUP','Sidste Uploads');
define('_MD_LASTCOM','Sidste kommentar');
define('_MD_TOPN','Mest sete');
define('_MD_TOPRATED','Top bedømte');
define('_MD_LASTHITS','Sidst sete');
define('_MD_SEARCH','Søge resultater');
define('_MD_USEARCH','Billede indsendt af');
define('_MD_MOST_SENT','Mest sendte postkort');

define('_MD_ACCESS_DENIED','Du har ikke tilladelse til at se denne side');
define('_MD_PERM_DENIED','Du har ikke tilladelse til at udføre denne handling');
define('_MD_PARAM_MISSING','Script kaldt uden de nødvendige parametre');
define('_MD_NON_EXIST_AP','Det valgte album/billede findes ikke!');
define('_MD_QUOTA_EXCEEDED','Disk kvote overskredet<br /><br />Du har en kvote på [quota]K, dine billeder fylder lige nu [space]K, at tilføje dette billede vil få dig til at overskride din kvote');
define('_MD_GD_FILE_TYPE_ERR','Når der bliver brugt GD image library  er de eneste tilladte billede typer JPEG og PNG.');
define('_MD_INVALID_IMG','Det billede du har uploaded er korrumperet eller kan ikke håndteres af GD biblioteket ');
define('_MD_RESIZE_FAILED','Kan ikke skabe thumbnail eller reduceret billedstørrelse');
define('_MD_NO_IMG_TO_DISPLAY','Ingen billeder af vise');
define('_MD_NO_EXIST_CAT','Den valgte katagori findes ikke');
define('_MD_ORPHAN_CAT','Katagorien har en ikke eksisterende moder, kør kategori manageren for at løse dette problem');
define('_MD_DIRECTORY_RO','Folderen %s er ikke skrivbar, billeder kan ikke blive slettet');
define('_MD_PIC_IN_INVALID_ALBUM','Billedet er i et ikke eksisterende album (%s)!?');
define('_MD_GD_VERSION_ERR','Den PHP der kører på din server understøtter ikke GD version 2.x, skift venligts til GD version 1.x på indstillings siden');
define('_MD_NO_GD_FOUND','Den PHP der kører på din server understøtter ikke GD image library, tjek med din webhost om ImageMagick eller Netpbm er installeret');
define('_MD_IM_ERROR','Fejl under udførelsen af ImageMagic - Retur værdi:');
define('_MD_IM_ERROR_CMD','Cmd line:');
define('_MD_IM_ERROR_CONV','Konverterings programmet returnerede:');

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define('_MD_THM_ALB_LT','Gå til album liste');
define('_MD_THM_ALB_LL','Album liste');
define('_MD_THM_GAL_MYT','Gå til mit personlige galleri');
define('_MD_THM_GAL_MYL','Mit galleri');
define('_MD_THM_ADM_MT','Skift til admin indstilling');
define('_MD_THM_ADM_ML','Admin mode');
define('_MD_THM_USER_MT','Skift til bruger indstilling');
define('_MD_THM_USER_ML','Bruger indstilling');
define('_MD_THM_UPLT','Upload et billede til et album');
define('_MD_THM_UPLL','Upload billede');
define('_MD_THM_UPLLMORE','Upload flere billeder');
define('_MD_THM_LAST_UPL','Sidste upload');
define('_MD_THM_LAST_COM','Sidste kommentar');
define('_MD_THM_MOST_VIEW','Mest sete');
define('_MD_THM_TOP_RATE','Top bedømte');
define('_MD_THM_SEARCH','Søg');
define('_MD_THM_UPL_APPR','Upload godkendelse');

define('_MD_THM_ALBMGR_LNK','Opret / soter mine albums');
define('_MD_THM_MODIFY_LNK','Rediger mine albums');
define('_MD_THM_CAT','Kategori');
define('_MD_THM_ALB','Albums');
define('_MD_THM_PIC','Billeder');
define('_MD_THM_ALBONPAGE','%d albums på %d side(r)');
define('_MD_THM_DATE','DATO');
define('_MD_THM_NAME','FILNAVN');
define('_MD_THM_SORT_DA','soter efter dato stigende');
define('_MD_THM_SORT_DD','soter efter dato faldende');
define('_MD_THM_SORT_NA','soter efter navn stigende');
define('_MD_THM_SORT_ND','soter efter navn faldende');
define('_MD_THM_PICPAGE','%d billeder på %d side(r)');
define('_MD_THM_USERPAGE','%d brugere på %d side(r)');

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define('_MD_FUNC_FNAME','Filnavn : ');
define('_MD_FUNC_FSIZE','Filstørrelse : ');
define('_MD_FUNC_DIM','Dimensioner : ');
define('_MD_FUNC_DATE','Dato tilføjet : ');
define('_MD_FUNC_COM','%s kommentarer');
define('_MD_FUNC_VIEW','%s visninger');
define('_MD_FUNC_VOTE','%s stemmer');
define('_MD_FUNC_SEND','%s gange');
define('_MD_FUNC_DELUSER','Slettet bruger');
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define('_MD_ADMIN_LEAVE','Forlader galleri admin mode...');
define('_MD_ADMIN_ENTER','Gå ind i galleri admin mode...');

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define('_MD_ALBMGR_NEED_NAME','Albums skal have et navn!');
define('_MD_ALBMGR_CONF_MOD','Er du sikker på du vil lave disse modifikationer?');
define('_MD_ALBMGR_NO_CHANGE','Du lavede ikke nogen ændringer!');
define('_MD_ALBMGR_NEW_ALB','Nyt Album');
define('_MD_ALBMGR_CONF_DEL1','Du er sikker på du vil slette dette album?');
define('_MD_ALBMGR_CONF_DEL2','Alle billeder og kommentarer vil gå tabt!');
define('_MD_ALBMGR_SELECT_FIRST','Vælg først et album');
define('_MD_ALBMGR_ALB_MGR','Album Manager');
define('_MD_ALBMGR_MY_GAL','* Mit galleri *');
define('_MD_ALBMGR_NO_CAT','* Ingen kategori *');
define('_MD_ALBMGR_DEL','Slet');
define('_MD_ALBMGR_NEW','Ny');
define('_MD_ALBMGR_APPLY','Gem ændrigner');
define('_MD_ALBMGR_SELECT','Vælg kategori');

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define('_MD_DB_ALB_NEED_TITLE','Du skal angive en titel for albummet');
define('_MD_DB_NO_NEED','Ingen opdatering påkrævet.');
define('_MD_DB_ALB_UPDATED','Albummet var opdateret');
define('_MD_DB_UNKOWN','Valgte album findes ikke eller du har ikke tilladelse til at uploade i dette album');
define('_MD_DB_NO_PICUP','Ingen billeder blev uploaded!<br /><br />Hvis du er sikker på du har valgt et billede at uploade, så tjek at serveren tillader at filer uploades...');
define('_MD_DB_ERR_MKDIR','Mislykkedes i at oprette folder %s!');
define('_MD_DB_DEST_DIR_RO','Destinations folder %s er ikke skrivbar for scriptet!');
define('_MD_DB_ERR_FEXT','Kun følgende filtyper er tilladte : <br /><br />%s.');
define('_MD_DB_ERR_MOVE','Umuligt at flytte %s til %s!');
define('_MD_DB_ERR_PIC_SIZE','Størrelsen på det billede du har uploaded er for stort (maksimum størrelse er %s x %s) !');
define('_MD_DB_ERR_FSIZE','Størrelsen på den fil du har uploaded er for stor (maksimum størrelse er %s KB) !');
define('_MD_DB_ERR_IMG_INVALID','Filen du har uploaded er ikke et gyldigt billede !');
define('_MD_DB_IMG_ALLOWED','Du kan kun uploade %s billeder.');
define('_MD_DB_ERR_INSERT','Billedet %s kan ikke blive indsat i albummet');
define('_MD_DB_UPLOAD_SUCC','Dit billede var uploadet korrekt<br /><br />Det vil være synligt efter det er godkendt af en admin.');
define('_MD_DB_UPL_SUCC','Dit billede var korrekt tilføjet');
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define('_MD_DEL_CAPTION','Overskrift');
define('_MD_DEL_FS_PIC','fuld billede størrelse');
define('_MD_DEL_DEL_SUCCESS','Slettet');
define('_MD_DEL_NS_PIC','normal billed størrelse');
define('_MD_DEL_ERR_DEL','kan ikke slettes');
define('_MD_DEL_THUMB','thumbnail');
define('_MD_DEL_COMMENT','kommentar');
define('_MD_DEL_IMGALB','billede i album');
define('_MD_DEL_ALB_DEL_SUC','Album \'%s\' blev slettet');
define('_MD_DEL_ALBMGR','Album Manager');
define('_MD_DEL_INVALID','Invalid data modtaget i %s');
define('_MD_DEL_CREATE','Opretter album %s');
define('_MD_DEL_UPDATE','Opdaterer album %a med titel %s og index %s');
define('_MD_DEL_DELPIC','Slet billede');
define('_MD_DEL_DELALB','Slet album');

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define('_MD_DIS_CONF_DEL','Er du sikker på at du vil SLETTE dette billede? Kommentarer vil også blive slettet.');
define('_MD_DIS_DEL_PIC','SLET DETTE BILLEDE');
define('_MD_DIS_SIZE','%s x %s pixels');
define('_MD_DIS_VIEWS','%s gange');
define('_MD_DIS_SLIDE','Diasshow');
define('_MD_DIS_STOP_SLIDE','STOP Diasshow');
define('_MD_DIS_FULL','Klik for at se i fuld størrelse');
define('_MD_DIS_TITLE','Billede information');
define('_MD_DIS_FNAME','Filnavn');
define('_MD_DIS_ANAME','Album navn');
define('_MD_DIS_RATING','Bedømmelse (%s stemmer)');
define('_MD_DIS_FSIZE','Filstørrelse');
define('_MD_DIS_DIMEMS','Dimensioner');
define('_MD_DIS_DISPLAYED','Vist');
define('_MD_DIS_CAMERA','Kamera');
define('_MD_DIS_DATA_TAKEN','Dato taget');
define('_MD_DIS_APERTURE','Blænde');
define('_MD_DIS_EXPTIME','Eksponerings tid');
define('_MD_DIS_FLENGTH','brændvidde');
define('_MD_DIS_COMMENT','Kommentar');
define('_MD_DIS_BACK_TNPAGE','Retur til thumbnail siden');
define('_MD_DIS_SHOW_PIC_INFO','Vis/skjul billed information');
define('_MD_DIS_SEND_CARD','Send dette billede som et postkort');
define('_MD_DIS_CARD_DISABLE','postkort er deaktiveret');
define('_MD_DIS_CARD_DISABLEMSG','Du har ikke tilladelse til at sende postkort');
define('_MD_DIS_NEXT','Vis næste billede');
define('_MD_DIS_PREV','Vis forrige billede');
define('_MD_DIS_PICPOS','BILLEDE %s/%s');
define('_MD_DIS_RATE_THIS','Bedøm dette billede');
define('_MD_DIS_NO_VOTE','(Ingen stemmer endnu)');
define('_MD_DIS_RATINGCUR','(nuværende bedømmelse : %s / 5 med %s stemmer)');
define('_MD_DIS_RUBBISH','Bras');
define('_MD_DIS_POOR','Dårlig');
define('_MD_DIS_FAIR','Rimelig');
define('_MD_DIS_GOOD','God');
define('_MD_DIS_EXCELLENT','Fantastisk');
define('_MD_DIS_GREAT','Super');
define('_MD_DIS_UPLOADER','Indsendt af');
define('_MD_DIS_EXIF_ERR','PHP på din server understøtter ikke læsning af EXIF data i JPG filer, slå venligst denne funktion fra i den generelle konfikurations side.');
define('_MD_DIS_VIEW_MORE_BY','vis flere billeder indsendt af');
define('_MD_DIS_SUBIP','Indsender ip');
define('_MD_DIS_SENT','Sendt som et postkort');
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define('_MD_CARD_TITLE','Send et postkort');
define('_MD_CARD_INVALIDE_EMAIL','<b>Advarsel</b> : ugyldig email adresse!');
define('_MD_CARD_ECARD_TITLE','Et postkort fra %s til dig');
define('_MD_CARD_VIEW_ECARD','Hvis dette postkort ikke bliver vist korrekt, klik på dette link');
define('_MD_CARD_VIEW_MORE_PICS','Klik dette link for at se flere billeder!');
define('_MD_CARD_SEND_SUCCESS','Dit postkort er sendt');
define('_MD_CARD_SEND_FAILED','Beklager men serveren kan ikke sende dit postkort...');
define('_MD_CARD_FROM','Fra');
define('_MD_CARD_YOUR_NAME','Dit navn');
define('_MD_CARD_YOUR_EMAIL','Din email adresse');
define('_MD_CARD_TO','Til');
define('_MD_CARD_RCPT_NAME','Modtagers navn');
define('_MD_CARD_RCPT_EMAIL','modtagers email adresse');
define('_MD_CARD_GREETINGS','Hilsen');
define('_MD_CARD_MESSAGE','Besked');
define('_MD_CARD_PERHOUR','Du kan kun sende %s postkort pr time. Prøv venligst igen senere.');
define('_MD_CARD_NOTINDB','Kunne ikke indsætte postkortet i databasen!<br />Kontakt venligst en administrator.');


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define('_MD_EDITPICS_PIC_INFO','Billede&nbsp;info');
define('_MD_EDITPICS_TITLE','Titel');
define('_MD_EDITPICS_DESC','Beskrivelse');
define('_MD_EDITPICS_INFOSTR','%sx%s - %sKB - %s visninger - %s stemmer');
define('_MD_EDITPICS_APPROVE','Godkend billede');
define('_MD_EDITPICS_PP_APPROVE','Udsæt godkendelse');
define('_MD_EDITPICS_DEL_PIC','Slet billede');
define('_MD_EDITPICS_RVIEW','Nulstil visningstæller');
define('_MD_EDITPICS_RVOTES','Nulstil stemmer');
define('_MD_EDITPICS_DCOM','Slet kommentarer');
define('_MD_EDITPICS_UPL_APPROVAL','Godkend upload');
define('_MD_EDITPICS_EDIT','Rediger billede');
define('_MD_EDITPICS_NEXT','Vis næste billeder');
define('_MD_EDITPICS_PREV','Vis forrige billeder');
define('_MD_EDITPICS_NUMDIS','Billede nummer at vise');
define('_MD_EDITPICS_APPLY','Gem modifikationer');

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define('_MD_INDEX_CONF_DEL','Er du sikker på du vil SLETTE dette album ? Alle billeder og kommentarer vil også blive slettet');
define('_MD_INDEX_DEL','SLET');
define('_MD_INDEX_MOD','EGENSKABER');
define('_MD_INDEX_EDIT','REDIGER BILLEDER');
define('_MD_INDEX_STAT1','<b>[pictures]</b> billeder i<b>[albums]</b> album og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer vist <b>[views]</b> gange');
define('_MD_INDEX_STAT2','<b>[pictures]</b> billeder i <b>[albums]</b> albums vist <b>[views]</b> gange');
define('_MD_INDEX_USERS_GAL','%s\'s Galleri');
define('_MD_INDEX_STAT3','<b>[pictures]</b> billeder i <b>[albums]</b> album med <b>[comments]</b> kommentarer vist <b>[views]</b> gange');
define('_MD_INDEX_ULIST','Bruger liste');
define('_MD_INDEX_NO_UGAL','Der er ikke nogen bruger gallerier');
define('_MD_INDEX_NALBS','%s album');
define('_MD_INDEX_NPICS','%s billede(r)');
define('_MD_INDEX_LASTADD',', sidst tilføjet den %s');

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define('_MD_MODIFYALB_UPD_ALB_N','Opdater album %s');
define('_MD_MODIFYALB_GEN_SET','Generelle indstillinger');
define('_MD_MODIFYALB_ALB_TITLE','Album titel');
define('_MD_MODIFYALB_ALB_CAT','Album kategori');
define('_MD_MODIFYALB_ALB_DESC','Album beskrivelse');
define('_MD_MODIFYALB_ALB_THUMB','Album thumbnail');
define('_MD_MODIFYALB_ALB_PERM','Tilladelser for dette album');
define('_MD_MODIFYALB_CAN_VIEW','Album kan ses af');
define('_MD_MODIFYALB_CAN_UPLOAD','Besøgende kan uploade billeder');
define('_MD_MODIFYALB_CAN_COM','Besøgende kan skrive kommentarer');
define('_MD_MODIFYALB_CAN_RATE','Besøgende kan bedømme billeder');
define('_MD_MODIFYALB_USER_GAL','Bruger galleri');
define('_MD_MODIFYALB_NO_CAT','* Ingen kategori *');
define('_MD_MODIFYALB_ALB_EMPTY','Album er tomt');
define('_MD_MODIFYALB_LAST_UPL','Sidst uploadet');
define('_MD_MODIFYALB_PUB_ALB','Allesammen (public album)');
define('_MD_MODIFYALB_ME_ONLY','Kun mig');
define('_MD_MODIFYALB_OWNER_ONLY','Kun album ejer (%s)');
define('_MD_MODIFYALB_GROUP_ONLY','Medlemmer af \'%s\' gruppen');
define('_MD_MODIFYALB_ERR_NO_ALB','Ingen album du kan rette i databasen');
define('_MD_MODIFYALB_UPDATE','Opdatér album');

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define('_MD_RATE_ALREADY','Beklager men du har allerede bedømt dette billede');
define('_MD_RATE_OK','Din stemme blev modtaget');

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define('_MD_SEARCH_TITLE','Søg billede samlingen');

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define('_MD_UPL_TITLE','Upload billede');
define('_MD_UPL_MAX_FSIZE','Maksimum tilladte fil størrelse er % KB');
define('_MD_UPL_ALBUM','Album');
define('_MD_UPL_PICTURE','Billede');
define('_MD_UPL_PIC_TITLE','Billede titel');
define('_MD_UPL_DESCRIPTION','Billede beskrivelse');
define('_MD_UPL_KEYWORDS','Keywords (adskil med mellemrum)');
define('_MD_UPL_ERR_NO_ALB_UPLOAD','Beklager der er ikke nogen album hvor du har tilladelse til at uploade billeder');
define('_MD_UPL_YOURALB','Dit private album');
define('_MD_UPL_ALBPUB','Offentlige album');
define('_MD_UPL_OUSERALB','Andre bruger album');



?>
