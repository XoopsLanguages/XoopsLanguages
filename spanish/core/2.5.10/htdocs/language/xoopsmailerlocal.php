<?php
/*
 El usuario no puede cambiar o alterar cualquier parte de este comentario o créditos
 de apoyar a los desarrolladores de este código fuente o cualquier soporte código fuente
 el cual se considera con derechos de autor (c) material de los autores de comentarios o de crédito originales.

 Este programa se distribuye con la esperanza de que sea útil,
 pero SIN NINGUNA GARANTÍA; ni siquiera la garantía implícita de
 COMERCIALIZACIÓN o IDONEIDAD PARA UN PROPÓSITO PARTICULAR.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2018 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');
/**
 * Localizar las funciones de correo
 *
 * La localización de Inglés es exclusivamente para demostración
 */
// No cambie el nombre de la clase
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        // Se supone que no necesita cambiar el juego de caracteres
        $this->charSet = strtolower(_CHARSET);
        // Debe especificar el valor del código de idioma para que el archivo exista: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["código-de-idioma"].php
        $this->multimailer->setLanguage('es');
    }

    /**
     *Se anima a los idiomas multibyte a hacer su propio método para codificar FromName
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Activar la siguiente línea si es necesario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * Se anima a los lenguajes multibyte a hacer su propio método para codificar el Sujeto
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Activar la siguiente línea si es necesario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}