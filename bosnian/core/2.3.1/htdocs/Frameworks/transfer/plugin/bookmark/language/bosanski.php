<?php
/**
 * Transfer handler for XOOPS
 *
 * This is intended to handle content intercommunication between modules as well as components
 * There might need to be a more explicit name for the handle since it is always confusing
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @since           1.00
 * @version         $Id$
 * @package         Frameworks
 * @subpackage      transfer
 */
 
define("_MD_TRANSFER_BOOKMARK","Bookmark");
define("_MD_TRANSFER_BOOKMARK_DESC","Dodaj ovaj link u bookmarks");

/* English */
define("_MD_TRANSFER_BOOKMARK_ITEMS","
    [<a title=\"Google\" href=\"javascript:void(google=window.open('http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk='+encodeURIComponent('%2\$s')+'&title='+encodeURIComponent('%1\$s'), 'google'));google.focus();\">Google</a>]
    [<a title=\"Delicious\" href=\"javascript:void(delicious=window.open('http://del.icio.us/post?url='+encodeURIComponent('%2\$s')+'&title='+encodeURIComponent('%1\$s'), 'delicious'));delicious.focus();\">Del.icio.us</a>]
    [<a title=\"Furl\" href=\"javascript:void(furl=window.open('http://www.furl.net/storeIt.jsp?t='+encodeURIComponent('%1\$s')+'&u='+encodeURIComponent('%2\$s'), 'furl'));furl.focus();\">Furl It</a>]
");
?>