<?php
/**
 * Name: admin.php
 * Description: Xoops FAQ module admin language defines
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package : XOOPS
 * @Module : Xoops FAQ
 * @subpackage : Module Language
 * @since 2.3.0
 * @author John Neill
 * @version $Id: admin.php 0000 10/04/2009 09:05:06 John Neill $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * Icons
 */
define( '_XO_LA_EDIT', 'Upravit polo�ku' );
define( '_XO_LA_DELETE', 'Smazat polo�ku' );
define( '_XO_LA_CREATENEW', 'Nov� polo�ka' );
define( '_XO_LA_MODIFYITEM', 'Upravit polo�ku: %s' );

/**
 * Content
 */
define( '_XO_LA_CONTENTS_HEADER', 'Spr�vce �ast�ch dotaz�' );
define( '_XO_LA_CONTENTS_SUBHEADER', '' );
define( '_XO_LA_CONTENTS_LIST_DSC', '' );
define( '_XO_LA_CONTENTS_ID', '#' );
define( '_XO_LA_CONTENTS_TITLE', 'Ot�zka' );
define( '_XO_LA_CONTENTS_WEIGHT', 'V�ha' );
define( '_XO_LA_CONTENTS_PUBLISH', 'Published' );
define( '_XO_LA_CONTENTS_ACTIVE', 'Aktivn�' );
define( '_XO_LA_ACTIONS', 'Akce' );
define( '_XO_LAE_CONTENTS_CATEGORY', 'Kategorie dotazu:' );
define( '_XO_LAE_CONTENTS_CATEGORY_DSC', 'Zvolte kategorii do kter� chcete tuto ot�zku um�stit.' );
define( '_XO_LAE_CONTENTS_TITLE', 'Ot�zka:' );
define( '_XO_LAE_CONTENTS_TITLE_DSC', 'Sem napi�te ot�zku.' );
define( '_XO_LAE_CONTENTS_CONTENT', 'Odpov��:' );
define( '_XO_LAE_CONTENTS_CONTENT_DSC', '' );
define( '_XO_LAE_CONTENTS_PUBLISH', 'Datum zve�ejn�n�:' );
define( '_XO_LAE_CONTENTS_PUBLISH_DSC', 'Zvolte datum, kdy dojde ke zve�ejn�n� t�to ot�zky.' );
define( '_XO_LAE_CONTENTS_WEIGHT', 'V�ha:' );
define( '_XO_LAE_CONTENTS_WEIGHT_DSC', 'Tato hodnota ur�uje po�ad� ot�zky ve v�pisech.' );
define( '_XO_LAE_CONTENTS_ACTIVE', 'Zobrazovat tuto ot�zku?' );
define( '_XO_LAE_CONTENTS_AVTIVE_DSC', 'M� se tato ot�zka zobrazovat ve v�pisech?' );
define( '_XO_LAE_DOHTML', 'Povolit HTML tagy' );
define( '_XO_LAE_BREAKS', 'Automaticky zalamovat ��dky.' );
define( '_XO_LAE_DOIMAGE', 'Povolit syst�mov� obr�zky' );
define( '_XO_LAE_DOXCODE', 'Povolit Xoops k�dy' );
define( '_XO_LAE_DOSMILEY', 'Povolit obr�zkov� smajl�ky' );

/**
 * Category
 */
define( '_XO_LA_ADDCAT', 'P�idat kategorii' );
define( '_XO_LA_CATEGORY_HEADER', 'Spr�vce kategori�' );
define( '_XO_LA_CATEGORY_SUBHEADER', '' );
define( '_XO_LA_CATEGORY_DELETE_DSC', 'POZOR! Chyst�te se smazat kategroii z datab�ze.<br /><br />Tuto akci nelze vr�tit zp�t!' );
define( '_XO_LA_CATEGORY_EDIT_DSC', 'Re�im �prav: Nyn� m��ete upravit tuto polo�ku. Po kliknut� na tla��tko "Odeslat" se zm�ny ulo�� do datab�ze. Pokud kliknete na tla��tko "Zru�it", tak se zm�ny neulo�� a budou ztraceny.' );
define( '_XO_LA_CATEGORY_LIST_DSC', '' );
define( '_XO_LA_CATEGORY_ID', '#' );
define( '_XO_LA_CATEGORY_TITLE', 'Nadpis' );
define( '_XO_LA_CATEGORY_WEIGHT', 'V�ha' );
define( '_XO_LA_ACTIONS', 'Actions' );
define( '_XO_LAE_CATEGORY_TITLE', 'N�zev kategorie:' );
define( '_XO_LAE_CATEGORY_TITLE_DSC', '' );
define( '_XO_LAE_CATEGORY_WEIGHT', 'V�ha kategorie:' );
define( '_XO_LAE_CATEGORY_WEIGHT_DSC', '' );

/**
 * Buttons
 */
define( '_XO_LA_CREATENEW', 'Vytvo�it novou' );
define( '_XO_LA_NOLISTING', 'Neexistuj� ��dn� polo�ky' );

/**
 * Database and error
 */
define( '_XO_LA_FAQ_SUBERROR', 'Lituji, ale do�lo k cyb�.<br />' );
define( '_XO_LA_RUSURECAT', 'Mysl�te to v�n�? Opravdu chcete smazat tuto kategorii a ve�ker� jej� obsah?' );
define( '_XO_LA_DBSUCCESS', 'Aktualizace datab�ze byla v po��dku dokon�ena.' );
define( '_XO_LA_ERRORNOCATEGORY', 'CHYBA: Nen� zvolen� ��dn� kategorie, vra�te se pros�m zp�t a n�jakou vyberte.' );
define( '_XO_LA_ERRORCOULDNOTADDCAT', 'CHYBA: Nemohu do datab�ze p�idat novou kategorii.' );
define( '_XO_LA_ERRORCOULDNOTDELCAT', 'CHYBA: Nemohu z datab�ze smazat vybranou kategorii.' );
define( '_XO_LA_ERRORCOULDNOTEDITCAT', 'CHYBA: Nemohu upravit tuto polo�ku.' );
define( '_XO_LA_ERRORCOULDNOTDELCONTENTS', 'CHYBA: Nemohu smazat tuto polo�ku.' );
define( '_XO_LA_ERRORCOULDNOTUPCONTENTS', 'CHYBA: Nemohu aktualizoavat tuto polo�ku.' );
define( '_XO_LA_ERRORCOULDNOTADDCONTENTS', 'CHYBA:  Nemohu do datab�ze p�idat novou polo�ku.' );
define( '_XO_LA_NOTHTINGTOSHOW', 'Nen� co zobrazit' );
define( '_XO_LA_ERRORNOCAT', 'CHYBA: Nen� vytvo�en� ani jedna kategorie. Ne� za�nete vkl�dat polo�ky, je nutn� alespo� jednu kategorii vytvo�it.' );

?>