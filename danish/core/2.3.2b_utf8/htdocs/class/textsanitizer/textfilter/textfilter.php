<?php
/**
 * TextSanitizer extension
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: textfilter.php 2007 2008-08-30 13:13:01Z phppp $
 * @package         class
 * @subpackage      textsanitizer
 */


/**
 * Filter out possible malicious text
 * kses project at SF could be a good solution to check
 *
 * @param string    $text     text to filter
 * @param bool      $force     flag indicating to force filtering
 * @return string   filtered text
 */
class MytsTextfilter extends MyTextSanitizerExtension
{
    function load(&$ts, $text, $force = false)
    {
        global $xoopsUser, $xoopsConfig, $xoopsUserIsAdmin;

        if (empty($force) && $xoopsUserIsAdmin) {
            return $text;
        }

        // Built-in fitlers for XSS scripts
        // To be improved
        $text = $ts->filterXss($text);

        if (xoops_load("purifier", "framework")) {
            $text = XoopsPurifier::purify($text);
            return $text;
        }

        $tags = array();
        $search = array();
        $replace = array();
        $config = parent::loadConfig(dirname(__FILE__));
        if (!empty($config["patterns"])) {
            foreach ($config["patterns"] as $pattern) {
                if (empty($pattern['search'])) continue;
                $search[] = $pattern['search'];
                $replace[] = $pattern['replace'];
            }
        }
        if (!empty($config["tags"])) {
            $tags = array_map("trim", $config["tags"]);
        }

        // Set embedded tags
        $tags[] = "SCRIPT";
        $tags[] = "VBSCRIPT";
        $tags[] = "JAVASCRIPT";
        foreach ($tags as $tag) {
            $search[] = "/<".$tag."[^>]*?>.*?<\/".$tag.">/si";
            $replace[] = " [!".strtoupper($tag)." FILTERED!] ";
        }
        // Set meta refresh tag
        $search[]= "/<META[^>\/]*HTTP-EQUIV=(['\"])?REFRESH(\\1)[^>\/]*?\/>/si";
        $replace[]="";

        // Sanitizing scripts in IMG tag
        //$search[]= "/(<IMG[\s]+[^>\/]*SOURCE=)(['\"])?(.*)(\\2)([^>\/]*?\/>)/si";
        //$replace[]="";

        // Set iframe tag
        $search[]= "/<IFRAME[^>\/]*SRC=(['\"])?([^>\/]*)(\\1)[^>\/]*?\/>/si";
        $replace[]=" [!IFRAME FILTERED! \\2] ";
        $search[]= "/<IFRAME[^>]*?>([^<]*)<\/IFRAME>/si";
        $replace[]=" [!IFRAME FILTERED! \\1] ";

        // action
        $text = preg_replace($search, $replace, $text);
        return $text;
    }
}
?>