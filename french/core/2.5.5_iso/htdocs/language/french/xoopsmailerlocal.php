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
 * @license         http://www.gnu.org/licenses/licenses.html
 * @package         kernel
 * @subpackage      Xoops Mailer Local Language
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

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
                // Il n'est pas nécessaire de changer le charset
                $this->charSet = strtolower( _CHARSET );
                // vous DEVEZ spécifier la valeur du code langage et que le fichier existe  : XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["your-language-code"].php
                $this->multimailer->SetLanguage("fr");
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

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 *
 * @version         $Id $
**/
?>