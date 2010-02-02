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
 * JSCal2 class For XOOPS
 * http://www.dynarch.com/projects/calendar/
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since           2.4.0
 * @package         class
 * @subpackage      CALENDAR
 * @author          Laurent JEN (aka DuGris) <dugris@afux.org>
 * @version         $Id: JSCal2.php 3619 2009-09-10 22:52:44Z trabis $
 */

class XoopsCalendarJSCal2 extends XoopsCalendarMethod
{
    function __construct($handler = null)
    {
        parent::__construct($handler);
    }

    function XoopsCalendarJSCal2($handler = null)
    {
        $this->__construct($handler);
    }

    function render($formHandler)
    {
        $ele_name = $formHandler->getName();
        $ele_value = $formHandler->getValue();
        $ele_size = $formHandler->getSize();

        static $isJsLoaded = false;
        static $button;
        $button = isset($button) ? $button + 1 : 0;

        $script = "\n";
        if(!$isJsLoaded ) {
            $isJsLoaded = true;

            parent::loadLanguage();
            parent::loadConfig("JSCal2");
            $this->checkConfig();

            $script .= "<script src='" . $this->handler->url . "JSCal2/JSCal2/src/js/jscal2.js'></script>\n";
            $script .= "<script src='" . $this->handler->url . "JSCal2/JSCal2/src/js/lang/" . _LANGCODE . ".js'></script>\n";
            $script .= "<link rel='stylesheet' type='text/css' href='" . $this->handler->url . "JSCal2/JSCal2/src/css/jscal2.css' />\n";
            $script .= "<link rel='stylesheet' type='text/css' href='" . $this->handler->url . "JSCal2/JSCal2/src/css/border-radius.css' />\n";
            $script .= "<link rel='stylesheet' type='text/css' href='" . $this->handler->url . "JSCal2/JSCal2/src/css/" . $this->config["style"] . "/" . $this->config["style"] . ".css' />\n";
            $script .= "<script type='text/javascript'>//<![CDATA[\n";
            $script .= "    function updateFields( cal, hiddenfield ) {\n";
            $script .= "        var date = cal.selection.get();\n";
            $script .= "        if (date) {\n";
            $script .= "            date = Calendar.intToDate(date);\n";
            $script .= "            document.getElementById(hiddenfield).value = Calendar.printDate(date, '%Y-%m-%d');\n";
            $script .= "        }\n";
            $script .= "    }\n\n";

            $script .= "    function date2english( input_date, hide_date ) {\n";
            $script .= "        var date_tmp = Calendar.parseDate( input_date, false );\n";
            $script .= "        var field = document.getElementById(hide_date);\n";
            $script .= "        field.value = Calendar.printDate(date_tmp, '%Y/%m/%d');\n";
            $script .= "        return true;\n";
            $script .= "    }\n";

            $script .= "//]]></script>\n";
        }

        $input  = "<input type='text' name='xoops_date[{$ele_name}]' id='xoops_date[{$ele_name}]' size='{$ele_size}' maxlength='{$ele_size}' value='" . date(_SHORTDATESTRING, $ele_value) . "'" . $formHandler->getExtra() . " onChange='date2english(this.value, \"{$ele_name}\");' />\n";
        if (file_exists($ele_img = $this->handler->path . "images/" . $this->handler->config["image"])) {
            $ele_img = $this->handler->url . "images/" . $this->handler->config["image"];
            $input .= "<img src='{$ele_img}' id='calendar{$button}' style='cursor:pointer;vertical-align:bottom' title='' />\n";
        } else {
            $input .= "<input type='button' value=' ... ' id='calendar{$button}' />\n";
        }
        $input .= "<input type='hidden' name='{$ele_name}' id='{$ele_name}' value='" . date("Y-m-d", $ele_value) . "' />\n";


        $js = "<script type='text/javascript'>//<![CDATA[\n";
        $js .= "    var cal$button = Calendar.setup({\n";
        $js .= "        onSelect: function(cal) { updateFields(cal, '{$ele_name}') ; this.hide(); }\n";
        $js .= "    });\n";
        $js .= "    cal$button.manageFields('calendar{$button}', 'xoops_date[{$ele_name}]', '" . _JSCAL2_DATE_FORMAT . "');\n";
        $js .= "</script>\n";
        return $script . $input . $js;
    }

    function checkConfig()
    {
        $this->config["style"] = isset($this->config["style"]) ? $this->config["style"] : "win2k";
    }
}
?>