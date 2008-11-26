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
 * Build your custom configuration:
 * 1 Copy the file to config.custom.php
 * 2 Change the values according to your needs
 *
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: config.php 2135 2008-09-21 22:16:44Z phppp $
 * @package         class
 * @subpackage      textsanitizer
 */

return $config = array(
        "extensions" => array(
                        "iframe"    => 0,
                        "image"     => 1,
                        "flash"     => 1,
                        "youtube"   => 1,
                        "mp3"       => 0,
                        "wmp"       => 0,
                        // If other module is used, please modify the following detection and 'link' in /wiki/config.php
                        "wiki"      => is_dir( XOOPS_ROOT_PATH . '/modules/mediawiki/' ),
                        "mms"       => 0,
                        "rtsp"      => 0,
                        ),

        "truncate_length"   => 60,

        // Stop request processing if malicious words found
        "censor_stop"       => false,

        // Filters XSS scripts on display of text
        // There is considerable trade-off between security and performance
        // True is recommended for existent websites, false for new sites
        "fitlerxss_on_display"  => false,
    );
?>