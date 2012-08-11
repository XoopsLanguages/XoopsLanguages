<?php
/**
 * $Id: functions.php,v 1.11 2006/05/06 16:36:28 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */


if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

function wfdownloads_xoops_cp_header()
{
	xoops_cp_header();

	?>
	<script type='text/javascript' src='funcs.js'></script>
	<script type='text/javascript' src='cookies.js'></script>
	<?php

}

function wfdownloads_module_home($withLink=true)
{
	global $xoopsModuleConfig, $xoopsModule;
	
	$wfdownloads_moduleName = $xoopsModule->getVar('name');
	
	/*if(!$xoopsModuleConfig['show_mod_name_breadcrumb']){
		return	'';
	}*/
	if (!$withLink)	{
		return $wfdownloads_moduleName;
	} else {
		return '<a href="' . WFDOWNLOADS_URL . '">' . $wfdownloads_moduleName . '</a>';
	}
}

/**
 * Detemines if a table exists in the current db
 *
 * @param string $table the table name (without XOOPS prefix)
 * @return bool True if table exists, false if not
 *
 * @access public
 * @author xhelp development team
 */
function wfdownloads_TableExists($table)
{

    $bRetVal = false;
    //Verifies that a MySQL table exists
    $xoopsDB =& Database::getInstance();
    $realname = $xoopsDB->prefix($table);
    $ret = mysql_list_tables(XOOPS_DB_NAME, $xoopsDB->conn);
    while (list($m_table)=$xoopsDB->fetchRow($ret)) {

        if ($m_table ==  $realname) {
            $bRetVal = true;
            break;
        }
    }
    $xoopsDB->freeRecordSet($ret);
    return ($bRetVal);
}

/**
 * Gets a value from a key in the xhelp_meta table
 *
 * @param string $key
 * @return string $value
 *
 * @access public
 * @author xhelp development team
 */
function wfdownloads_GetMeta($key)
{
    $xoopsDB =& Database::getInstance();
    $sql = sprintf("SELECT metavalue FROM %s WHERE metakey=%s", $xoopsDB->prefix('wfdownloads_meta'), $xoopsDB->quoteString($key));
    $ret = $xoopsDB->query($sql);
    if (!$ret) {
        $value = false;
    } else {
        list($value) = $xoopsDB->fetchRow($ret);

    }
    return $value;
}

/**
 * Sets a value for a key in the xhelp_meta table
 *
 * @param string $key
 * @param string $value
 * @return bool TRUE if success, FALSE if failure
 *
 * @access public
 * @author xhelp development team
 */
function wfdownloads_SetMeta($key, $value)
{
    $xoopsDB =& Database::getInstance();
    if($ret = wfdownloads_GetMeta($key)){
        $sql = sprintf("UPDATE %s SET metavalue = %s WHERE metakey = %s", $xoopsDB->prefix('wfdownloads_meta'), $xoopsDB->quoteString($value), $xoopsDB->quoteString($key));
    } else {
        $sql = sprintf("INSERT INTO %s (metakey, metavalue) VALUES (%s, %s)", $xoopsDB->prefix('wfdownloads_meta'), $xoopsDB->quoteString($key), $xoopsDB->quoteString($value));
    }
    $ret = $xoopsDB->queryF($sql);
    if (!$ret) {
        return false;
    }
    return true;
}

function wfdownloads_highlighter ($matches) {
	//$color=getmoduleoption('highlightcolor');
	$smartConfig =& wfdownloads_getModuleConfig();
	$color = $smartConfig['highlight_color'];
	if(substr($color,0,1)!='#') {
		$color='#'.$color;
	}
	return '<span style="font-weight: bolder; background-color: '.$color.';">' . $matches[0] . '</span>';
}

/**
 * Copy a file, or a folder and its contents
 *
 * @author      Aidan Lister <aidan@php.net>
 * @version     1.0.0
 * @param       string   $source    The source
 * @param       string   $dest      The destination
 * @return      bool     Returns true on success, false on failure
 */
function wfdownloads_copyr($source, $dest)
{
    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        if (is_dir("$source/$entry") && ($dest !== "$source/$entry")) {
            copyr("$source/$entry", "$dest/$entry");
        } else {
            copy("$source/$entry", "$dest/$entry");
        }
    }

    // Clean up
    $dir->close();
    return true;
}

function &wfdownloads_getModuleInfo()
{
    static $wfdownloads_smartModule;
	if (!isset($wfdownloads_smartModule)) {
	    global $xoopsModule;
	    if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == 'wfdownloads') {
	        $wfdownloads_smartModule =& $xoopsModule;
	    }
	    else {
	        $hModule = &xoops_gethandler('module');
	        $wfdownloads_smartModule = $hModule->getByDirname('wfdownloads');
	    }
	}
	return $wfdownloads_smartModule;
}

function &wfdownloads_getModuleConfig()
{
    static $wfdownloads_smartConfig;
    if (!$wfdownloads_smartConfig) {
        global $xoopsModule;
	    if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == 'wfdownloads') {
	        global $xoopsModuleConfig;
	        $wfdownloads_smartConfig =& $xoopsModuleConfig;
	    }
	    else {
	        $wfdownloads_smartModule =& wfdownloads_getModuleInfo();
	        $hModConfig = &xoops_gethandler('config');
	        $wfdownloads_smartConfig = $hModConfig->getConfigsByCat(0, $smartModule->getVar('mid'));
	    }
    }
	return $wfdownloads_smartConfig;
}

function &wfdownloads_gethandler($name, $optional = false )
{
	static $handlers;
	$name = strtolower(trim($name));
	if (!isset($handlers[$name])) {
		if ( file_exists( $hnd_file = WFDOWNLOADS_ROOT_PATH.'class/'.$name.'.php' ) ) {
			require_once $hnd_file;
		}
		$class = "Wfdownloads" . ucfirst($name).'Handler';
		if (class_exists($class)) {
			$handlers[$name] = new $class($GLOBALS['xoopsDB']);
		}
	}
	if (!isset($handlers[$name]) && !$optional ) {
		trigger_error('Class <b>'.$class.'</b> does not exist<br />Handler Name: '.$name . ' | Module path : ' . WFDOWNLOADS_ROOT_PATH, E_USER_ERROR);
	}
	return isset($handlers[$name]) ? $handlers[$name] : false;
}


/**
* Checks if a user is admin of SmartSection
*
* wfdownloads_userIsAdmin()
*
* @return boolean : array with userids and uname
*/
function wfdownloads_userIsAdmin()
{
	global $xoopsUser;

	static $wfdownloads_isAdmin;

	if (isset($wfdownloads_isAdmin)) {
		return $wfdownloads_isAdmin;
	}

	if (!$xoopsUser) {
		$wfdownloads_isAdmin = false;
		return $wfdownloads_isAdmin;
	}

	$wfdownloads_isAdmin = false;

	$smartModule = wfdownloads_getModuleInfo();
	$module_id = $smartModule->getVar('mid');
	$wfdownloads_isAdmin = $xoopsUser->isAdmin($module_id);

	return $wfdownloads_isAdmin;
}

function wfdownloads_adminMenu ($currentoption = 0, $breadcrumb = '' ) {

	include_once XOOPS_ROOT_PATH . '/class/template.php';

	// global $xoopsDB, $xoopsModule, $xoopsConfig, $xoopsModuleConfig;
	global $xoopsModule, $xoopsConfig;

	if (file_exists( WFDOWNLOADS_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/modinfo.php')) {
		include_once  WFDOWNLOADS_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/modinfo.php';
	} else {
		include_once  WFDOWNLOADS_ROOT_PATH . 'language/english/modinfo.php';
	}
	if (file_exists( WFDOWNLOADS_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/admin.php')) {
		include_once  WFDOWNLOADS_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/admin.php';
	} else {
		include_once  WFDOWNLOADS_ROOT_PATH . 'language/english/admin.php';
	}
	include 'menu.php';

	$tpl =& new XoopsTpl();
	$tpl->assign( array(
	'headermenu'	=> $headermenu,
	'adminmenu'		=> $adminmenu,
	'current'		=> $currentoption,
	'breadcrumb'	=> $breadcrumb,
	'headermenucount' => count($headermenu)
	) );
	$tpl->display( 'db:wfdownloads_admin_menu.html' );
	echo "<br />\n";
}

function wfdownloads_collapsableBar($tablename = '', $iconname = '', $tabletitle = '', $tabledsc='')
{

	global $xoopsModule;
	echo "<h3 style=\"color: #2F5376; font-weight: bold; font-size: 14px; margin: 6px 0 0 0; \"><a href='javascript:;' onclick=\"toggle('" . $tablename . "'); toggleIcon('" . $iconname . "')\";>";
	echo "<img id='$iconname' src=" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/close12.gif alt='' /></a>&nbsp;" . $tabletitle . "</h3>";
	echo "<div id='$tablename'>";
	if ($tabledsc != '') {
		echo "<span style=\"color: #567; margin: 3px 0 12px 0; font-size: small; display: block; \">" . $tabledsc . "</span>";
	}
}

function wfdownloads_openclose_collapsable($name, $icon)
{
	$urls = wfdownloads_getCurrentUrls();
	$path = $urls['phpself'];

	$cookie_name = $path . '_wfdownloads_collaps_' . $name;
	$cookie_name = str_replace('.','_', $cookie_name);
	$cookie = wfdownloads_getCookieVar($cookie_name, '');

	if ($cookie == 'none') {
		echo '
		<script type="text/javascript"><!--
		toggle("' . $name . '"); toggleIcon("' . $icon . '");
			//-->
		</script>
		';
	}
}

function wfdownloads_close_collapsable($name, $icon)
{
	echo "</div>";
	wfdownloads_openclose_collapsable($name, $icon);
}

function wfdownloads_setCookieVar($name, $value, $time=0)
{
	if ($time == 0) {
		$time = time()+3600*24*365;
		//$time = '';
	}
	setcookie($name, $value, $time, '/');
}

function wfdownloads_getCookieVar($name, $default='')
{
	if ((isset($_COOKIE[$name])) && ($_COOKIE[$name] > '')) {
		return 	$_COOKIE[$name];
	} else {
		return	$default;
	}
}

function wfdownloads_getCurrentUrls(){
	$http = ((strpos(XOOPS_URL, "https://")) === false) ? ("http://") : ("https://");
	$phpself = $_SERVER['PHP_SELF'];
	$httphost = $_SERVER['HTTP_HOST'];
	$querystring = $_SERVER['QUERY_STRING'];

	If ( $querystring != '' ) {
		$querystring = '?' . $querystring;
	}

	$currenturl = $http . $httphost . $phpself . $querystring;

	$urls = array();
	$urls['http'] = $http;
	$urls['httphost'] = $httphost;
	$urls['phpself'] = $phpself;
	$urls['querystring'] = $querystring;
	$urls['full'] = $currenturl;

	return $urls;
}

function wfdownloads_getCurrentPage()
{
	$urls = wfdownloads_getCurrentUrls();
	return $urls['full'];
}

function wfdownloads_modFooter ()
{
	global $xoopsUser, $xoopsDB, $xoopsConfig;

	$hModule = &xoops_gethandler('module');

	$smartModule = wfdownloads_getModuleInfo();
	$module_id = $smartModule->getVar('mid');

	$module_name = $smartModule->getVar('dirname');
	$smartConfig = wfdownloads_getModuleConfig();

	$module_id = $smartModule->getVar('mid');

	$versioninfo = &$hModule->get($smartModule->getVar('mid'));
	$modfootertxt = "Module " . $versioninfo->getInfo('name') . " - Version " . $versioninfo->getInfo('version') . "";

	$modfooter = "<a href='" . $versioninfo->getInfo('support_site_url') . "' target='_blank'><img src='" . WFDOWNLOADS_URL . "images/spcssbutton.gif' title='" . $modfootertxt . "' alt='" . $modfootertxt . "'/></a>";

	return $modfooter;
}

/**
* Thanks to the NewBB2 Development Team
*/
function &wfdownloads_admin_getPathStatus($item, $getStatus=false)
{
	if ($item == 'root') {
		$path = '';
	} else {
		$path = $item;
	}

	$thePath = wfdownloads_getUploadDir(true, $path);

	if(empty($thePath)) return false;
	if(@is_writable($thePath)){
		$pathCheckResult = 1;
		$path_status = _AM_WFD_AVAILABLE;
	}elseif(!@is_dir($thePath)){
		$pathCheckResult = -1;
		$path_status = _AM_WFD_NOTAVAILABLE." <a href=index.php?op=createdir&amp;path=$item>"._AM_WFD_CREATETHEDIR.'</a>';
	}else{
		$pathCheckResult = -2;
		$path_status = _AM_WFD_NOTWRITABLE." <a href=index.php?op=setperm&amp;path=$item>"._AM_SCS_SETMPERM.'</a>';
	}
	if (!$getStatus) {
	 	return $path_status;
	} else {
		return $pathCheckResult;
	}
}

/**
* Thanks to the NewBB2 Development Team
*/
function wfdownloads_admin_mkdir($target)
{
	// http://www.php.net/manual/en/function.mkdir.php
	// saint at corenova.com
	// bart at cdasites dot com
	if (is_dir($target)||empty($target)) return true; // best case check first
	if (file_exists($target) && !is_dir($target)) return false;
	if (wfdownloads_admin_mkdir(substr($target,0,strrpos($target,'/'))))
	  if (!file_exists($target)) return mkdir($target); // crawl back up & create dir tree
	return true;
}

/**
* Thanks to the NewBB2 Development Team
*/
function wfdownloads_admin_chmod($target, $mode = 0777)
{
	return @chmod($target, $mode);
}


function wfdownloads_getUploadDir($local=true, $item=false)
{
	if ($item) {
		if ($item=='root') {
			$item = '';
		} else {
			$item = $item . '/';
		}
	} else {
		$item = '';
	}

	If ($local) {
		return XOOPS_ROOT_PATH . "/uploads/wfdownloads/$item";
	} else {
		return XOOPS_URL . "/uploads/wfdownloads/$item";
	}
}

function wfdownloads_getImageDir($item='', $local=true)
{
	if ($item) {
		$item = "images/$item";
	} else {
		$item = 'images';
	}

	return wfdownloads_getUploadDir($local, $item);
}


function wfdownloads_formatErrors($errors=array())
{
	$ret = '';
	foreach ($errors as $key=>$value)
	{
		$ret .= "<br /> - " . $value;
	}

	return $ret;
}


// TODO : The SEO feature is not fully implemented in the module...
function wfdownloads_seo_genUrl($op, $id, $title="")
{
    if (defined('SEO_ENABLED'))
    {
        if (SEO_ENABLED == 'rewrite')
        {
            // generate SEO url using htaccess
            return XOOPS_URL."/wfdownloads.${op}.${id}/".wfdownloads_seo_title($title);
        }
        else if (SEO_ENABLED == 'path-info')
        {
            // generate SEO url using path-info
            return XOOPS_URL."/modules/wfdownloads/seo.php/${op}.${id}/".wfdownloads_seo_title($title);
        }
        else
        {
            die('Unknown SEO method.');
        }
    }
    else
    {
       // generate classic url
        switch ($op) {
            case 'category':
               return XOOPS_URL."/modules/wfdownloads/${op}.php?categoryid=${id}";
            case 'item':
            case 'print':
               return XOOPS_URL."/modules/wfdownloads/${op}.php?itemid=${id}";
            default:
                die('Unknown SEO operation.');
        }
    }
}




/*
function urlExists($url)
{
    $file = '';
    $url = htmlentities($url);

    $url = ereg_replace("http://", "", $url);
	list($domain, $file) = explode("/", $url, 2);
    if ($file)
    {
		$fid = fsockopen($domain, 80, $errno ='', $errstr ='', 30);
        fputs($fid, "GET /$file HTTP/1.0\r\nHost: $domain\r\n\r\n");
        $gets = fgets($fid, 1024);
        fclose($fid);
        if (ereg("HTTP/1.1 200 OK", $gets)) return true;
        else return false;
    }
    else
    {
        return false;
    }
}
*/
/**
 * save_Permissions()
 *
 * @param $groups
 * @param $id
 * @param $perm_name
 * @return
 **/
function wfd_save_Permissions($groups, $id, $perm_name)
{
    $result = true;
    $hModule = & xoops_gethandler('module');
    $wfdModule = & $hModule -> getByDirname('wfdownloads');

    $module_id = $wfdModule -> getVar('mid');
    $gperm_handler = & xoops_gethandler('groupperm');

    /*
	* First, if the permissions are already there, delete them
	*/
    $gperm_handler -> deleteByModule($module_id, $perm_name, $id);
    /*
	*  Save the new permissions
	*/
    if (is_array($groups))
    {
        foreach ($groups as $group_id)
        {
            $gperm_handler -> addRight($perm_name, $id, $group_id, $module_id);
        }
    }
    return $result;
}

/**
 * toolbar()
 *
 * @return
 **/
function wfd_toolbar()
{
    global $xoopsModuleConfig, $xoopsUser, $xoopsModule;
    $submissions = 0;
    if (is_object($xoopsUser) && ($xoopsModuleConfig['submissions'] == 2 || $xoopsModuleConfig['submissions'] == 4))
    {
        $groups = $xoopsUser->getGroups();
        if (array_intersect($xoopsModuleConfig['submitarts'], $groups))
        {
            $submissions = 1;
        }
    }
	elseif (!is_object($xoopsUser) && ($xoopsModuleConfig['anonpost'] == 2 || $xoopsModuleConfig['anonpost'] == 4))
    {
    	$submissions = 1;
    }
	
    $toolbar = "[ ";
    if ($submissions == 1)
    {
        $toolbar .= "<a href='submit.php'>" . _MD_WFD_SUBMITDOWNLOAD . "</a> | ";
    }
    $toolbar .= "<a href='newlist.php'>" . _MD_WFD_LATESTLIST . "</a> | <a href='topten.php?list=hit'>" . _MD_WFD_POPULARITY . "</a> | <a href='topten.php?list=rate'>" . _MD_WFD_TOPRATED . "</a> ]";
    return $toolbar;
}

/**
 * wfd_serverstats()
 *
 * @return
 **/
function wfd_serverstats()
{
	global $xoopsModuleConfig;
	echo "
		<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_WFD_DOWN_IMAGEINFO . "</legend>\n
		<div style='padding: 8px;'>\n
		<div>" . _AM_WFD_DOWN_SPHPINI . "</div>\n
		";

    $safemode = (ini_get('safe_mode')) ? _AM_WFD_DOWN_ON . _AM_WFD_DOWN_SAFEMODEPROBLEMS : _AM_WFD_DOWN_OFF;
    $registerglobals = (!ini_get('register_globals')) ? "<span style=\"color: green;\">"._AM_WFD_DOWN_OFF."</span>" : "<span style=\"color: red;\">"._AM_WFD_DOWN_ON."</span>";
	$downloads = (ini_get('file_uploads')) ? "<span style=\"color: green;\">"._AM_WFD_DOWN_ON."</span>" : "<span style=\"color: red;\">"._AM_WFD_DOWN_OFF."</span>";

    $gdlib = (function_exists('gd_info')) ? "<span style=\"color: green;\">"._AM_WFD_DOWN_GDON."</span>" : "<span style=\"color: red;\">"._AM_WFD_DOWN_GDOFF."</span>";
	echo "<li>" . _AM_WFD_DOWN_GDLIBSTATUS . $gdlib;
    if (function_exists('gd_info'))
    {
        if (true == $gdlib = gd_info())
        {
            echo "<li>" . _AM_WFD_DOWN_GDLIBVERSION . "<b>" . $gdlib['GD Version'] . "</b>";
        }
    }
	echo "<br /><br />\n\n";
	echo "<li>" . _AM_WFD_DOWN_SAFEMODESTATUS . $safemode;
    echo "<li>" . _AM_WFD_DOWN_REGISTERGLOBALS . $registerglobals;
	echo "<li>" . _AM_WFD_DOWN_SERVERUPLOADSTATUS . $downloads;
    echo "<li>" . _AM_WFD_DOWN_MAXUPLOADSIZE . " <b><span style=\"color: blue;\">" . ini_get('upload_max_filesize') . "</span></b>\n";
    echo "<li>" . _AM_WFD_DOWN_MAXPOSTSIZE . " <b><span style=\"color: blue;\">" . ini_get('post_max_size') . "</span></b>\n";
    echo "<li>" . _AM_WFD_DOWN_SERVERPATH . " <b>" . XOOPS_ROOT_PATH . "</b>\n";
	if (empty($xoopsModuleConfig['uploaddir'])) {
    echo "<li>" . _AM_WFD_DOWN_UPLOADPATH . " <b><span style=\"color: red;\">" . _AM_WFD_DOWN_NOTSET . "</span></b>\n";
	} else {
    echo "<li>" . _AM_WFD_DOWN_UPLOADPATH . " <b>" . $xoopsModuleConfig['uploaddir'] . "</b>\n";
	}
	echo "<br /><br />\n\n";
	echo _AM_WFD_DOWN_UPLOADPATHDSC."\n";
	echo "</div>";
	echo "</fieldset><br />";
}

/**
 * displayicons()
 *
 * @param  $time
 * @param integer $status
 * @param integer $counter
 * @return
 */
function wfd_displayicons($time, $status = 0, $counter = 0)
{
    global $xoopsModuleConfig;

    $new = '';
    $pop = '';

    $newdate = (time() - (86400 * intval($xoopsModuleConfig['daysnew'])));
    $popdate = (time() - (86400 * intval($xoopsModuleConfig['daysupdated']))) ;

    if ($xoopsModuleConfig['displayicons'] != 3)
    {
        if ($newdate < $time)
        {
            if (intval($status) > 1)
            {
                if ($xoopsModuleConfig['displayicons'] == 1)
                    $new = "&nbsp;<img src=" . XOOPS_URL . "/modules/wfdownloads/images/icon/update.gif alt='' align ='absmiddle'/>";
                if ($xoopsModuleConfig['displayicons'] == 2)
                    $new = "<i>Updated!</i>";
            }
            else
            {
                if ($xoopsModuleConfig['displayicons'] == 1)
                    $new = "&nbsp;<img src=" . XOOPS_URL . "/modules/wfdownloads/images/icon/newred.gif alt='' align ='absmiddle'/>";
                if ($xoopsModuleConfig['displayicons'] == 2)
                    $new = "<i>New!</i>";
            }
        }
        if ($popdate < $time)
        {
            if ($counter >= $xoopsModuleConfig['popular'])
            {
                if ($xoopsModuleConfig['displayicons'] == 1)
                    $pop = "&nbsp;<img src =" . XOOPS_URL . "/modules/wfdownloads/images/icon/pop.gif alt='' align ='absmiddle'/>";
                if ($xoopsModuleConfig['displayicons'] == 2)
                    $pop = "<i>Popular</i>";
            }
        }
    }
    $icons = $new . " " . $pop;
    return $icons;
}

if (!function_exists('convertorderbyin'))
{
    // Reusable Link Sorting Functions
    /**
     * convertorderbyin()
     *
     * @param $orderby
     * @return
     **/
    function convertorderbyin($orderby)
    {
        switch (trim($orderby))
        {
            case "titleA":
                $orderby = "title ASC";
                break;
            case "dateA":
                $orderby = "published ASC";
                break;
            case "hitsA":
                $orderby = "hits ASC";
                break;
            case "ratingA":
                $orderby = "rating ASC";
                break;
            case "titleD":
                $orderby = "title DESC";
                break;
            case "hitsD":
                $orderby = "hits DESC";
                break;
            case "ratingD":
                $orderby = "rating DESC";
                break;
            case"dateD":
            default:
                $orderby = "published DESC";
                break;
        }
        return $orderby;
    }
}
if (!function_exists('convertorderbytrans'))
{
    function convertorderbytrans($orderby)
    {
        if ($orderby == "hits ASC") $orderbyTrans = _MD_WFD_POPULARITYLTOM;
        if ($orderby == "hits DESC") $orderbyTrans = _MD_WFD_POPULARITYMTOL;
        if ($orderby == "title ASC") $orderbyTrans = _MD_WFD_TITLEATOZ;
        if ($orderby == "title DESC") $orderbyTrans = _MD_WFD_TITLEZTOA;
        if ($orderby == "published ASC") $orderbyTrans = _MD_WFD_DATEOLD;
        if ($orderby == "published DESC") $orderbyTrans = _MD_WFD_DATENEW;
        if ($orderby == "rating ASC") $orderbyTrans = _MD_WFD_RATINGLTOH;
        if ($orderby == "rating DESC") $orderbyTrans = _MD_WFD_RATINGHTOL;
        return $orderbyTrans;
    }
}
if (!function_exists('convertorderbyout'))
{
    function convertorderbyout($orderby)
    {
        if ($orderby == "title ASC") $orderby = "titleA";
        if ($orderby == "published ASC") $orderby = "dateA";
        if ($orderby == "hits ASC") $orderby = "hitsA";
        if ($orderby == "rating ASC") $orderby = "ratingA";
        if ($orderby == "title DESC") $orderby = "titleD";
        if ($orderby == "published DESC") $orderby = "dateD";
        if ($orderby == "hits DESC") $orderby = "hitsD";
        if ($orderby == "rating DESC") $orderby = "ratingD";
        return $orderby;
    }
}

/**
 * PrettySize()
 *
 * @param $size
 * @return
 **/
function wfd_PrettySize($size)
{
		$kb = 1024;
		$mb = 1024 * $kb;
		$gb = 1024 * $mb;
		$tb = 1024 * $gb;

		if($size < $kb) {
			return $size." B";
		}
		else if($size < $mb) {
			return round($size/$kb,2)." KB";
		}
		else if($size < $gb) {
			return round($size/$mb,2)." MB";
		}
		else if($size < $tb) {
			return round($size/$gb,2)." GB";
		}
		else {
			return round($size/$tb,2)." TB";
		}
}

/**
 * updaterating()
 *
 * @param $sel_id
 * @return updates rating data in itemtable for a given item
 **/
function wfd_updaterating($sel_id)
{
    global $xoopsDB;
    $rating_handler = xoops_getmodulehandler('rating');
    $ratings = $rating_handler->getObjects(new Criteria("lid", intval($sel_id)));
    $votesDB = count($ratings);
    $totalrating = 0;
    foreach (array_keys($ratings) as $i)
    {
        $totalrating += $ratings[$i]->getVar('rating');
    }
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format($finalrating, 4);
    $download_handler = xoops_getmodulehandler('download');
    $download = $download_handler->get($sel_id);
    $download->setVar("rating", $finalrating);
    $download->setVar('votes', $votesDB);
    $download_handler->insert($download);
}


/**
 * totalcategory()
 *
 * @param integer $pid
 * @return
 **/
function wfd_totalcategory()
{
    global $xoopsModule, $xoopsUser;

    $groups = (is_object($xoopsUser)) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = & xoops_gethandler('groupperm');

    $allowed_cats = $gperm_handler->getItemIds("WFDownCatPerm", $groups, $xoopsModule->getVar('mid'));
    return count($allowed_cats);
}

/**
 * getTotalItems()
 *
 * @param integer $sel_id
 * @param integer $get_child
 * @return the total number of items in items table that are accociated with a given table $table id
 **/
function wfd_getTotalItems($sel_id = 0, $ids = array())
{
    $criteria = new CriteriaCompo(new Criteria("offline", 0));
    $criteria->add(new Criteria('published', 0, '>'));
    $criteria->add(new Criteria('published', time(), "<="));
    $expired_criteria = new CriteriaCompo(new Criteria('expired', 0));
    $expired_criteria->add(new Criteria("expired", time(), ">="), "OR");
    $criteria->add($expired_criteria);
    if ($sel_id > 0) {
    	$criteria->add(new Criteria("cid", $sel_id));
    }
    if (count($ids) > 0) {
    	$criteria->add(new Criteria("cid", "(".implode(',', $ids).")", "IN"));
    }
    $criteria->setGroupby("cid");

    $download_handler = xoops_getmodulehandler('download');
    $info['published'] = $download_handler->getMaxPublishdate($criteria);
    $info['count'] = $download_handler->getCount($criteria);
    return $info;
}

function wfd_imageheader()
{
    global $xoopsDB, $xoopsModule, $xoopsModuleConfig;

    $image = '';
    $result = $xoopsDB -> query("SELECT indeximage, indexheading FROM " . $xoopsDB -> prefix("wfdownloads_indexpage ") . " ");
    list($indeximage, $indexheading) = $xoopsDB -> fetchrow($result);
    if (!empty($indeximage))
    {
        $image = wfd_displayimage($indeximage, "'index.php'", $xoopsModuleConfig['mainimagedir'], $indexheading);
    }
    return $image;
}

function wfd_displayimage($image = '', $path = '', $imgsource = '', $alttext = '')
{
    global $xoopsConfig, $xoopsUser, $xoopsModule;

    $showimage = '';

    /**
     * Check to see if link is given
     */
    if ($path)
    {
        $showimage = "<a href=" . $path . ">";
    }

    /**
     * checks to see if the file is valid else displays default blank image
     */

    if (!is_dir(XOOPS_ROOT_PATH . "/" . $imgsource . "/" . $image) && file_exists(XOOPS_ROOT_PATH . "/" . $imgsource . "/" . $image))
    {
        $showimage .= "<img src='" . XOOPS_URL . "/" . $imgsource . "/" . $image . "' border='0' alt='" . $alttext . "' /></a>";
    }
    else
    {
        if ($xoopsUser && $xoopsUser -> isAdmin($xoopsModule -> mid()))
        {
            $showimage .= "<img src='" . XOOPS_URL . "/modules/wfdownloads/images/brokenimg.png' alt='" . _MD_WFD_ISADMINNOTICE . "' /></a>";
        }
        else
        {
            $showimage .= "<img src='" . XOOPS_URL . "/modules/wfdownloads/images/blank.png' alt=" . $alttext . " /></a>";
        }
    }
    clearstatcache();
    return $showimage;
}

/**
 * down_createthumb()
 *
 * @param $img_name
 * @param $img_path
 * @param $img_savepath
 * @param integer $img_w
 * @param integer $img_h
 * @param integer $quality
 * @param integer $update
 * @param integer $aspect
 * @return
 **/
function down_createthumb($img_name, $img_path, $img_savepath, $img_w = 100, $img_h = 100, $quality = 100, $update = 0, $aspect = 1)
{
    global $xoopsModuleConfig, $xoopsConfig;
    // paths
    if ($xoopsModuleConfig['usethumbs'] == 0)
    {
        $image_path = XOOPS_URL . "/{$img_path}/{$img_name}";
        return $image_path;
    }
    $image_path = XOOPS_ROOT_PATH . "/{$img_path}/{$img_name}";

    $savefile = $img_path . "/" . $img_savepath . "/" . $img_w . "x" . $img_h . "_" . $img_name;
    $savepath = XOOPS_ROOT_PATH . "/" . $savefile;
    // Return the image if no update and image exists
    if ($update == 0 && file_exists($savepath))
    {
        return XOOPS_URL . "/" . $savefile;
    }

    list($width, $height, $type, $attr) = getimagesize($image_path, $info);

    switch ($type)
    {
        case 1:
            # GIF image
            if (function_exists('imagecreatefromgif'))
            {
                $img = @imagecreatefromgif($image_path);
            }
            else
            {
                $img = @imageCreateFromPNG($image_path);
            }
            break;
        case 2:
            # JPEG image
            $img = @imageCreateFromJPEG($image_path);
            break;
        case 3:
            # PNG image
            $img = @imageCreateFromPNG($image_path);
            break;
        default:
            return $image_path;
            break;
    }

    if (!empty($img))
    {
        /**
         * Get image size and scale ratio
         */
        $scale = min($img_w / $width, $img_h / $height);
        /**
         * If the image is larger than the max shrink it
         */
        if ($scale < 1 && $aspect == 1)
        {
            $img_w = floor($scale * $width);
            $img_h = floor($scale * $height);
        }
        /**
         * Create a new temporary image
         */
        if (function_exists('imagecreatetruecolor'))
        {
            $tmp_img = imagecreatetruecolor($img_w, $img_h);
        }
        else
        {
            $tmp_img = imagecreate($img_w, $img_h);
        }
        /**
         * Copy and resize old image into new image
         */
        ImageCopyResampled($tmp_img, $img, 0, 0, 0, 0, $img_w, $img_h, $width, $height);
        imagedestroy($img);
        flush();
        $img = $tmp_img;
    }

    switch ($type)
    {
        case 1:
        default:
            # GIF image
            if (function_exists('imagegif'))
            {
                imagegif($img, $savepath);
            }
            else
            {
                imagePNG($img, $savepath);
            }
            break;
        case 2:
            # JPEG image
            imageJPEG($img, $savepath, $quality);
            break;
        case 3:
            # PNG image
            imagePNG($img, $savepath);
            break;
    }
    imagedestroy($img);
    flush();
    return XOOPS_URL . "/" . $savefile;
}

function wfd_letters()
{
    global $xoopsModule;

    $letterchoice = "<div>" . _MD_WFD_BROWSETOTOPIC . "</div>";
    $letterchoice .= "[  ";
    $alphabet = array ("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","آ","ا","ب","پ","ت","ث","ج","چ","ح","خ","د","ذ","ر","ز","ژ","س","ش","ص","ض","ط","ظ","ع","غ","ف","ق","ک","گ","ل","م","ن","و","ه","ی");
    $num = count($alphabet) - 1;
    $counter = 0;
    while (list(, $ltr) = each($alphabet))
    {
        $letterchoice .= "<a href='" . XOOPS_URL . "/modules/wfdownloads/viewcat.php?list=$ltr'>$ltr</a>";
        if ($counter == round($num / 2))
            $letterchoice .= " ]<br />[ ";
        elseif ($counter != $num)
            $letterchoice .= "&nbsp;|&nbsp;";
        $counter++;
    }
    $letterchoice .= " ]";
    return $letterchoice;
}

function wfd_isnewimage($published)
{
    global $xoopsDB;

    $oneday = (time() - (86400 * 1));
    $threedays = (time() - (86400 * 3));
    $week = (time() - (86400 * 7));

    if ($published > 0 && $published < $week)
    {
        $indicator['image'] = "images/icon/download4.gif";
        $indicator['alttext'] = _MD_WFD_NEWLAST;
    } elseif ($published >= $week && $published < $threedays)
    {
        $indicator['image'] = "images/icon/download3.gif";
        $indicator['alttext'] = _MD_WFD_NEWTHIS;
    } elseif ($published >= $threedays && $published < $oneday)
    {
        $indicator['image'] = "images/icon/download2.gif";
        $indicator['alttext'] = _MD_WFD_THREE;
    } elseif ($published >= $oneday)
    {
        $indicator['image'] = "images/icon/download1.gif";
        $indicator['alttext'] = _MD_WFD_TODAY;
    }
    else
    {
        $indicator['image'] = "images/icon/download.gif";
        $indicator['alttext'] = _MD_WFD_NO_FILES;
    }
    return $indicator;
}
// GetDownloadTime()
// This function is used to show some different download times
// BCMATH-Support in PHP needed!
// (c)02.04.04 by St@neCold, stonecold@csgui.de, http://www.csgui.de
function wfd_GetDownloadTime($size = 0, $gmodem = 1, $gisdn = 1, $gdsl = 1, $gslan = 0, $gflan = 0)
{
    $aflag = array();
    $amtime = array();
    $artime = array();
    $ahtime = array();
    $asout = array();
    $aflag = array($gmodem, $gisdn, $gdsl, $gslan, $gflan);
    $amtime = array($size / 6300 / 60, $size / 7200 / 60, $size / 86400 / 60, $size / 1125000 / 60, $size / 11250000 / 60);
    $amname = array('Modem(56k)','ISDN(64k)','DSL(768k)','LAN(10M)','LAN(100M');
    for($i = 0;$i < 5;$i++)
    {
        $artime[$i] = ($amtime[$i] % 60);
    }
    for($i = 0;$i < 5;$i++)
    {
        $ahtime[$i] = sprintf(' %2.0f', $amtime[$i] / 60);
    }
    if ($size <= 0) $dltime = 'N/A';
    else
    {
        for($i = 0;$i < 5;$i++)
        {
            if (!$aflag[$i]) $asout[$i] = '';
            else
            {
                if (($amtime[$i] * 60) < 1) $asout[$i] = sprintf(' : %4.2fs', $amtime[$i] * 60);
                else
                {
                    if ($amtime[$i] < 1) $asout[$i] = sprintf(' : %2.0fs', round($amtime[$i] * 60));
                    else
                    {
                        if ($ahtime[$i] == 0) $asout[$i] = sprintf(' : %5.1fmin', $amtime[$i]);
                        else $asout[$i] = sprintf(' : %2.0fh%2.0fmin', $ahtime[$i], $artime[$i]);
                    }
                }
                $asout[$i] = "<b>" . $amname[$i] . "</b>" . $asout[$i];
                if ($i < 4) $asout[$i] = $asout[$i] . ' | ';
            }
        }
        $dltime = '';
        for($i = 0;$i < 5;$i++)
        {
            $dltime = $dltime . $asout[$i];
        }
    }
    return $dltime;
}

function wfd_strrrchr($haystack, $needle)
{
    return substr($haystack, 0, strpos($haystack, $needle) + 1);
}

function wfd_retmime($filename, $usertype = 1)
{
    global $xoopsDB;

    $ext = ltrim(strrchr($filename, '.'), '.');
    $sql = "SELECT mime_types, mime_ext FROM " . $xoopsDB -> prefix('wfdownloads_mimetypes') . " WHERE mime_ext = '" . strtolower($ext) . "'";
    if ($usertype == 1)
    {
        $sql .= " AND mime_admin = 1";
    }
    else
    {
        $sql .= " AND mime_user = 1";
    }
    $result = $xoopsDB -> query($sql);
    list($mime_types , $mime_ext) = $xoopsDB -> fetchrow($result);
    $mimtypes = explode(' ', trim($mime_types));
    return $mimtypes;
}

function wfd_adminmenu($header = '', $menu = '', $extra = '', $scount = 4)
{
    global $xoopsConfig, $xoopsModule;

    if (isset($_SERVER['PHP_SELF'])) $thispage = basename($_SERVER['PHP_SELF']);
    $op = (isset($_GET['op'])) ? $op = "?op=" . $_GET['op'] : '';

	echo "
		<table width='100%' cellspacing='0' cellpadding='0' border='0' class='outer'>\n
		<tr>\n
		<td style='font-size: 10px; text-align: left; color: #2F5376; padding: 2px 6px; line-height: 18px;'>\n
		<a href='../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=" . $xoopsModule -> getVar('mid') . "'>" . _AM_WFD_PREFS . "</a> | \n
		<a href='../admin/index.php'>" . _AM_WFD_BINDEX . "</a> | \n
		<a href='../admin/permissions.php'>" . _AM_WFD_PERMISSIONS . "</a> | \n
		<a href='../index.php'>" . _AM_WFD_GOMODULE . "</a> | \n
		<a href='about.php'>" . _AM_WFD_ABOUT . "</a>\n
		</td>\n
		</tr>\n
		</table><br />\n
		";

    if (empty($menu))
    {
        /**
         * You can change this part to suit your own module. Defining this here will save you form having to do this each time.
         */
        $menu = array(
            // _AM_GENERALSET => "" . XOOPS_URL . "/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=" . $xoopsModule->getVar('mid') . "",
            _AM_WFD_INDEXPAGE => "indexpage.php",
            _AM_WFD_MCATEGORY => "category.php",
            _AM_WFD_MDOWNLOADS => "index.php?op=Download",
            _AM_WFD_MUPLOADS => "upload.php",
            _AM_WFD_MMIMETYPES => "mimetypes.php",
            _AM_WFS_MVOTEDATA => "votedata.php",
            _AM_WFD_MCOMMENTS => "../../system/admin.php?module=" . $xoopsModule -> mid() . "&amp;status=0&amp;limit=100&amp;fct=comments&amp;selsubmit=Go",
            );
    }

    if (!is_array($menu))
    {
	echo "
		<table width = '100%' cellpadding= '2' cellspacing= '1' class='outer'>\n
		<tr><td class ='even' align ='center'><b>" . _AM_WFD_NOMENUITEMS . "</b></td></tr></table><br />\n
		";
        return false;
    }

    $oddnum = array(1 => "1", 3 => "3", 5 => "5", 7 => "7", 9 => "9", 11 => "11", 13 => "13");
    // number of rows per menu
    $menurows = count($menu) / $scount;
    // total amount of rows to complete menu
    $menurow = ceil($menurows) * $scount;
    // actual number of menuitems per row
    $rowcount = $menurow / ceil($menurows);
    $count = 0;
    for ($i = count($menu); $i < $menurow; $i++)
    {
        $tempArray = array(1 => null);
        $menu = array_merge($menu, $tempArray);
        $count++;
    }

    /**
     * Sets up the width of each menu cell
     */
    $width = 100 / $scount;
    $width = ceil($width);

    $menucount = 0;
    $count = 0;
    /**
     * Menu table output
     */
    echo "<table width = '100%' cellpadding= '2' cellspacing= '1' class='outer'><tr>";
    /**
     * Check to see if $menu is and array
     */
    if (is_array($menu))
    {
        $classcounts = 0;
        $classcol[0] = "even";

        for ($i = 1; $i < $menurow; $i++)
        {
            $classcounts++;
            if ($classcounts >= $scount)
            {
                if ($classcol[$i-1] == 'odd')
                {
                    $classcol[$i] = ($classcol[$i-1] == 'odd' && in_array($classcounts, $oddnum)) ? "even" : "odd";
                }
                else
                {
                    $classcol[$i] = ($classcol[$i-1] == 'even' && in_array($classcounts, $oddnum)) ? "odd" : "even";
                }
                $classcounts = 0;
            }
            else
            {
                $classcol[$i] = ($classcol[$i-1] == 'even') ? "odd" : "even";
            }
        }
        unset($classcounts);

        foreach ($menu as $menutitle => $menulink)
        {
            if ($thispage . $op == $menulink)
            {
                $classcol[$count] = "outer";
            }
            echo "<td class='" . $classcol[$count] . "' align='center' valign='middle' width='$width%'>";
            if (is_string($menulink))
            {
                echo "<a href='" . $menulink . "'><small>" . $menutitle . "</small></a></td>";
            }
            else
            {
                echo "&nbsp;</td>";
            }
            $menucount++;
            $count++;
            /**
             * Break menu cells to start a new row if $count > $scount
             */
            if ($menucount >= $scount)
            {
                echo "</tr>";
                $menucount = 0;
            }
        }
        echo "</table><br />";
        unset($count);
        unset($menucount);
    }
    echo "<h3 style='color: #2F5376;'>" . $header . "</h3>";
    if ($extra)
    {
        echo "<div>$extra</div>";
    }
}

function wfd_getDirSelectOption($selected, $dirarray, $namearray)
{
    echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach($namearray as $namearray => $workd)
    {
        if ($workd === $selected)
        {
            $opt_selected = "selected";
        }
        else
        {
            $opt_selected = "";
        }
        echo "<option value='" . htmlspecialchars($namearray, ENT_QUOTES) . "' $opt_selected>" . $workd . "</option>";
    }
    echo "</select>";
}
/*
function filesarray($filearray)
{
    $files = array();
    $dir = opendir($filearray);

    while (($file = readdir($dir)) !== false)
    {
        if ((!preg_match("/^[.]{1,2}$/", $file) && preg_match("/[.htm|.html|.xhtml]$/i", $file) && !is_dir($file)))
        {
            if (strtolower($file) != 'cvs' && !is_dir($file))
            {
                $files[$file] = $file;
            }
        }
    }
    closedir($dir);
    asort($files);
    reset($files);
    return $files;
}
*/
function wfd_uploading($filename, $uploaddir = "uploads", $allowed_mimetypes = '', $redirecturl = "index.php", $num = 0, $redirect = 0, $usertype = 1, $onlyimages = false)
{
    global $_FILES, $xoopsConfig, $xoopsModuleConfig, $_POST, $xoopsModule;

    $down = array();

    if (empty($allowed_mimetypes))
    {
        $allowed_mimetypes = wfd_retmime($_FILES['userfile']['name'], $usertype);
    }
    $upload_dir = $uploaddir . "/";
	$file_name = $_FILES['userfile']['name'];

    $maxfilesize = $xoopsModuleConfig['maxfilesize'];
    $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
    $maxfileheight = $xoopsModuleConfig['maximgheight'];

    if ($onlyimages) {
        include_once XOOPS_ROOT_PATH . "/modules/wfdownloads/class/img_uploader.php";
        $uploader = new XoopsMediaImgUploader($upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);
    } else {
        include_once XOOPS_ROOT_PATH . "/modules/wfdownloads/class/uploader.php";
        $uploader = new XoopsMediaUploader($upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);
    }
    $uploader -> noAdminSizeCheck(1);

    if ($uploader -> fetchMedia($_POST['xoops_upload_file'][0]))
    {
        if (!$uploader -> upload())
        {
        	$errors = $uploader -> getErrors();
			unlink($upload_dir.$uploader->savedFileName);
            redirect_header($redirecturl, 2, $errors);
        }
        else
        {
            if ($redirect)
            {
                redirect_header($redirecturl, 1 , _AM_WFD_UPLOADFILE);
            }
            else
            {
				if (is_file($uploader->savedDestination))
                {
//	                $down['url'] = XOOPS_URL . "/" . $uploaddir . "/";
					$down['filename'] = strtolower($uploader->savedFileName);
					$down['filetype'] = $_FILES['userfile']['type'];
					$down['size'] = filesize($upload_dir . strtolower($uploader->savedFileName));
                }
                return $down;
            }
        }
    }
    else
    {
    	$errors = $uploader -> getErrors();
		unlink($upload_dir.$uploader->savedFileName);
        redirect_header($redirecturl, 1, $errors);
    }
}

function wfd_getforum($forumid)
{
    global $xoopsDB, $xoopsConfig;

    echo "<select name='forumid'>";
    echo "<option value='0'>----------------------</option>";
    $result = $xoopsDB -> query("SELECT forum_name, forum_id FROM " . $xoopsDB -> prefix("bb_forums") . " ORDER BY forum_id");
    while (list($forum_name, $forum_id) = $xoopsDB -> fetchRow($result))
    {
        if ($forum_id == $forumid)
        {
            $opt_selected = "selected='selected'";
        }
        else
        {
            $opt_selected = "";
        }
        echo "<option value='" . $forum_id . "' $opt_selected>" . $forum_name . "</option>";
    }
    echo "</select></div>";
    return $forumid;
}

function wfd_downlistheader($heading)
{
	echo "
		<fieldset><legend style='font-weight: bold; color: #900;'>" . $heading . "</legend><br />\n
		<table width='100%' cellspacing='1' cellpadding='2' border='0' class = 'outer'>\n
		<tr>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_ID . "</b></th>\n
		<th><b>" . _AM_WFD_MINDEX_TITLE . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_POSTER . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_SUBMITTED . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_ONLINESTATUS . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_PUBLISHED . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_ACTION . "</b></th>\n
		</tr>\n
		";
}

function wfd_downlistbody($published)
{
    global $myts, $imagearray;

    $lid = $published['lid'];
    $cid = $published['cid'];
    $title = "<a href='../singlefile.php?cid=" . $published['cid'] . "&amp;lid=" . $published['lid'] . "'>" . $myts -> htmlSpecialChars(trim($published['title'])) . "</a>";;
    $submitter = xoops_getLinkedUnameFromId(intval($published['submitter']));
    $publish = formatTimestamp($published['published'], 's');
    $status = ($published['published'] > 0) ? $imagearray['online'] : "<a href='newdownloads.php'>" . $imagearray['offline'] . "</a>";
    $offline = ($published['offline'] == 0) ? $imagearray['online'] : $imagearray['offline'];
    $modify = "<a href='index.php?op=Download&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>";
    $delete = "<a href='index.php?op=delDownload&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>";

	echo "
		<tr>\n
		<td class='head' align='center'>" . $lid . "</td>\n
		<td class='even'>" . $title . "</td>\n
		<td class='even' align='center'>" . $submitter . "</td>\n
		<td class='even' align='center'>" . $publish . "</td>\n
		<td class='even' align='center'>" . $offline . "</td>\n
		<td class='even' align='center'>" . $status . "</td>\n
		<td class='even' align='center' width = '10%' nowrap>$modify $delete</td>\n
		</tr>\n
		";
    unset($published);
}

function wfd_downlistfooter()
{
	echo "
		<tr>\n
		<td class='head' align='center' colspan= '7'>" . _AM_WFD_MINDEX_NODOWNLOADSFOUND . "</td>\n
		</tr>\n
		";
}

function wfd_downlistpagenav($pubrowamount, $start, $art = "art")
{
    global $xoopsModuleConfig;

    echo "</table>\n";
    // Display Page Nav if published is > total display pages amount.
    $page = ($pubrowamount > $xoopsModuleConfig['admin_perpage']) ? _AM_WFD_MINDEX_PAGE : '';
    $pagenav = new XoopsPageNav($pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art);
    echo '<div align="right" style="padding: 8px;">' . $page . '' . $pagenav -> renderNav() . '</div>';
    echo "</fieldset><br />";
}

function wfd_mirroronline($serverurl)
{
	$fp = @fsockopen ($serverurl, 80, $errno, $errstr, 5);
		if (!$fp)
		{
			$online = 0;
		}
		else
		{
			$online = 1;
			fclose($fp);
		}
		return $online;
}
?>
