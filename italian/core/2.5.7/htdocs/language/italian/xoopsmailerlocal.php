<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    it
 * _CHARSET     UTF-8
 * @version     $Id$
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 19/05/2013

defined('XOOPS_ROOT_PATH') or die('Accesso non consentito');

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
        $this->multimailer->SetLanguage("it");
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
