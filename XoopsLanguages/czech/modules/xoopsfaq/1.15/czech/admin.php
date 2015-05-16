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
define( '_XO_LA_EDIT', 'Upravit položku' );
define( '_XO_LA_DELETE', 'Smazat položku' );
define( '_XO_LA_CREATENEW', 'Nová položka' );
define( '_XO_LA_MODIFYITEM', 'Upravit položku: %s' );

/**
 * Content
 */
define( '_XO_LA_CONTENTS_HEADER', 'Správce èastých dotazù' );
define( '_XO_LA_CONTENTS_SUBHEADER', '' );
define( '_XO_LA_CONTENTS_LIST_DSC', '' );
define( '_XO_LA_CONTENTS_ID', '#' );
define( '_XO_LA_CONTENTS_TITLE', 'Otázka' );
define( '_XO_LA_CONTENTS_WEIGHT', 'Váha' );
define( '_XO_LA_CONTENTS_PUBLISH', 'Published' );
define( '_XO_LA_CONTENTS_ACTIVE', 'Aktivní' );
define( '_XO_LA_ACTIONS', 'Akce' );
define( '_XO_LAE_CONTENTS_CATEGORY', 'Kategorie dotazu:' );
define( '_XO_LAE_CONTENTS_CATEGORY_DSC', 'Zvolte kategorii do které chcete tuto otázku umístit.' );
define( '_XO_LAE_CONTENTS_TITLE', 'Otázka:' );
define( '_XO_LAE_CONTENTS_TITLE_DSC', 'Sem napište otázku.' );
define( '_XO_LAE_CONTENTS_CONTENT', 'Odpovìï:' );
define( '_XO_LAE_CONTENTS_CONTENT_DSC', '' );
define( '_XO_LAE_CONTENTS_PUBLISH', 'Datum zveøejnìní:' );
define( '_XO_LAE_CONTENTS_PUBLISH_DSC', 'Zvolte datum, kdy dojde ke zveøejnìní této otázky.' );
define( '_XO_LAE_CONTENTS_WEIGHT', 'Váha:' );
define( '_XO_LAE_CONTENTS_WEIGHT_DSC', 'Tato hodnota urèuje poøadí otázky ve výpisech.' );
define( '_XO_LAE_CONTENTS_ACTIVE', 'Zobrazovat tuto otázku?' );
define( '_XO_LAE_CONTENTS_AVTIVE_DSC', 'Má se tato otázka zobrazovat ve výpisech?' );
define( '_XO_LAE_DOHTML', 'Povolit HTML tagy' );
define( '_XO_LAE_BREAKS', 'Automaticky zalamovat øádky.' );
define( '_XO_LAE_DOIMAGE', 'Povolit systémové obrázky' );
define( '_XO_LAE_DOXCODE', 'Povolit Xoops kódy' );
define( '_XO_LAE_DOSMILEY', 'Povolit obrázkové smajlíky' );

/**
 * Category
 */
define( '_XO_LA_ADDCAT', 'Pøidat kategorii' );
define( '_XO_LA_CATEGORY_HEADER', 'Správce kategorií' );
define( '_XO_LA_CATEGORY_SUBHEADER', '' );
define( '_XO_LA_CATEGORY_DELETE_DSC', 'POZOR! Chystáte se smazat kategroii z databáze.<br /><br />Tuto akci nelze vrátit zpìt!' );
define( '_XO_LA_CATEGORY_EDIT_DSC', 'Režim úprav: Nyní mùžete upravit tuto položku. Po kliknutí na tlaèítko "Odeslat" se zmìny uloží do databáze. Pokud kliknete na tlaèítko "Zrušit", tak se zmìny neuloží a budou ztraceny.' );
define( '_XO_LA_CATEGORY_LIST_DSC', '' );
define( '_XO_LA_CATEGORY_ID', '#' );
define( '_XO_LA_CATEGORY_TITLE', 'Nadpis' );
define( '_XO_LA_CATEGORY_WEIGHT', 'Váha' );
define( '_XO_LA_ACTIONS', 'Actions' );
define( '_XO_LAE_CATEGORY_TITLE', 'Název kategorie:' );
define( '_XO_LAE_CATEGORY_TITLE_DSC', '' );
define( '_XO_LAE_CATEGORY_WEIGHT', 'Váha kategorie:' );
define( '_XO_LAE_CATEGORY_WEIGHT_DSC', '' );

/**
 * Buttons
 */
define( '_XO_LA_CREATENEW', 'Vytvoøit novou' );
define( '_XO_LA_NOLISTING', 'Neexistují žádné položky' );

/**
 * Database and error
 */
define( '_XO_LA_FAQ_SUBERROR', 'Lituji, ale došlo k cybì.<br />' );
define( '_XO_LA_RUSURECAT', 'Myslíte to vážnì? Opravdu chcete smazat tuto kategorii a veškerý její obsah?' );
define( '_XO_LA_DBSUCCESS', 'Aktualizace databáze byla v poøádku dokonèena.' );
define( '_XO_LA_ERRORNOCATEGORY', 'CHYBA: Není zvolená žádná kategorie, vrate se prosím zpìt a nìjakou vyberte.' );
define( '_XO_LA_ERRORCOULDNOTADDCAT', 'CHYBA: Nemohu do databáze pøidat novou kategorii.' );
define( '_XO_LA_ERRORCOULDNOTDELCAT', 'CHYBA: Nemohu z databáze smazat vybranou kategorii.' );
define( '_XO_LA_ERRORCOULDNOTEDITCAT', 'CHYBA: Nemohu upravit tuto položku.' );
define( '_XO_LA_ERRORCOULDNOTDELCONTENTS', 'CHYBA: Nemohu smazat tuto položku.' );
define( '_XO_LA_ERRORCOULDNOTUPCONTENTS', 'CHYBA: Nemohu aktualizoavat tuto položku.' );
define( '_XO_LA_ERRORCOULDNOTADDCONTENTS', 'CHYBA:  Nemohu do databáze pøidat novou položku.' );
define( '_XO_LA_NOTHTINGTOSHOW', 'Není co zobrazit' );
define( '_XO_LA_ERRORNOCAT', 'CHYBA: Není vytvoøená ani jedna kategorie. Než zaènete vkládat položky, je nutné alespoò jednu kategorii vytvoøit.' );

?>