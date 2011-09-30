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
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Mailer Local Language
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: xoopsmailerlocal.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
 
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');

/**
 * Localize the mail functions
 *
 * The English localization is solely for demonstration
 */
// Do not change the class name
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Constructer
     *
     * @return XoopsMailerLocal
     */
    function XoopsMailerLocal()
    {
        $this->XoopsMailer();
        // It is supposed no need to change the charset
        $this->charSet = strtolower(_CHARSET);
        // You MUST specify the language code value so that the file exists: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["your-language-code"].php
        $this->multimailer->SetLanguage("nl");
    }
    
    // Multibyte languages are encouraged to make their proper method for encoding FromName
    function encodeFromName($text)
    {
        // Activate the following line if needed
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
    
    // Multibyte languages are encouraged to make their proper method for encoding Subject
    function encodeSubject($text)
    {
        // Activate the following line if needed
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
?>
