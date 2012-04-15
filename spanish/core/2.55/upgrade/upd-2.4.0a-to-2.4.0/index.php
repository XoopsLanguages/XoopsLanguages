<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Upgrader from to 2.4.0 alpha to 2.4.0 final
 *
 * See the enclosed file license.txt for licensing information.
 * If you did not receive this file, get it at http://www.fsf.org/copyleft/gpl.html
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     upgrader
 * @since       2.4.0
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      trabis <lusopoemas@gmail.com>
 * @version     $Id: index.php 2087 2008-09-15 04:50:23Z phppp $
 */

class upgrade_240a extends xoopsUpgrade
{
    var $tasks = array('config', 'configoption');

    /**
     * Check if cpanel config already exists
     *
     */
    function check_config()
    {
        $sql = "SELECT COUNT(*) FROM `" . $GLOBALS['xoopsDB']->prefix('config') . "` WHERE `conf_name` IN ('systemkey', 'soap_xoops_username', 'soap_xoops_password', 'soap_soapclient', 'soap_wdsl', 'soap_keepclient', 'soap_filterperson', 'soap_proxyhost', 'soap_proxyport', 'soap_proxyusername', 'soap_proxypassword', 'soap_timeout', 'soap_responsetimeout', 'soap_fieldmapping', 'soap_provisionning', 'soap_provisionning_group')";
        if (!$result = $GLOBALS['xoopsDB']->queryF( $sql ) ) {
            return false;
        }
        list($count) = $GLOBALS['xoopsDB']->fetchRow($result);
        return ($count > 0) ? false : true;
    }

    function check_configoption()
    {
        $sql = "SELECT COUNT(*) FROM `" . $GLOBALS['xoopsDB']->prefix('configoption') . "` WHERE `confop_name` IN ('_MD_AM_AUTH_CONFOPTION_SOAP')";
        if (!$result = $GLOBALS['xoopsDB']->queryF( $sql ) ) {
            return false;
        }
        list($count) = $GLOBALS['xoopsDB']->fetchRow($result);
        return ($count == 1) ? false : true;
    }

    function apply_config()
    {
        $configs = array('systemkey', 'soap_xoops_username', 'soap_xoops_password', 'soap_soapclient', 'soap_wdsl', 'soap_keepclient', 'soap_filterperson', 'soap_proxyhost', 'soap_proxyport', 'soap_proxyusername', 'soap_proxypassword', 'soap_timeout', 'soap_responsetimeout', 'soap_fieldmapping', 'soap_provisionning', 'soap_provisionning_group');
        foreach ($configs as $config) {
            $config_installed = false;
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['xoopsDB']->prefix('config') .
                   " WHERE `conf_name` = '{$config}' AND `conf_modid` = 0";
            if ($result = $GLOBALS['xoopsDB']->queryF($sql)) {
                list($count) = $GLOBALS['xoopsDB']->fetchRow($result);
                if ($count == 1) {
                    $config_installed = true;
                }
            }
            if ($config_installed) {
                $sql = "DELETE FROM " . $GLOBALS['xoopsDB']->prefix('config') .
                       " WHERE `conf_name` = '{$config}' AND `conf_modid` = 0";
                if (!$GLOBALS['xoopsDB']->queryF($sql)) {
                    return false;
                }
            }
        }

        return true;
    }

    function apply_configoption()
    {
        $configoption_installed = false;
        $sql = "SELECT COUNT(*) FROM `" . $GLOBALS['xoopsDB']->prefix('configoption') . "`".
               " WHERE `confop_name` = '_MD_AM_AUTH_CONFOPTION_SOAP' AND `confop_value` = 'soap'";
        if ($result = $GLOBALS['xoopsDB']->queryF($sql)) {
            list($count) = $GLOBALS['xoopsDB']->fetchRow($result);
            if ($count == 1) {
                $configoption_installed = true;
            }
        }

        if ($configoption_installed) {
            $sql = "DELETE FROM " . $GLOBALS['xoopsDB']->prefix('configoption') .
                   " WHERE `confop_name` = '_MD_AM_AUTH_CONFOPTION_SOAP' AND `confop_value` = 'soap'";
            if (!$GLOBALS['xoopsDB']->queryF( $sql )) {
                return false;
            }
        }

        return true;
    }

    function upgrade_240a()
    {
        $this->xoopsUpgrade(basename(dirname(__FILE__)));
    }

}

$upg = new upgrade_240a();
return $upg;

?>