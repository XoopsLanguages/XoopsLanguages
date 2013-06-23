<?php
/**
 * ****************************************************************************
 * Module gÃ©nÃ©rÃ© par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * xfaq - a simple module for Frequently Asked Questions
 * Copyright (c) Mojtaba Jamali (http://mydolphin.ir)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Mojtaba Jamali (http://mydolphin.ir)
 * @license         GPL
 * @package         xfaq
 * @author 			Mojtaba Jamali (http://mydolphin.ir)
 *
 * Version : 1.00:
 * ****************************************************************************
 */

//Menu
define("_AM_XFAQ_THEREARE_TOPIC","ØªØ¹Ø¯Ø§Ø¯ <span style=\"color: #ff0000; font-weight: bold\">%s</span> Ø´Ø§Ø®Ù‡ Ø¯Ø± Ø¨Ø§Ù†Ú© Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙˆØ¬ÙˆØ¯ Ø¯Ø§Ø±Ø¯.");
define("_AM_XFAQ_THEREARE_TOPIC_ONLINE","ØªØ¹Ø¯Ø§Ø¯ <span style='color: #ff0000; font-weight: bold'>%s</span> Ø´Ø§Ø®Ù‡ Ù�Ø¹Ø§Ù„  Ø¯Ø± Ø¨Ø§Ù†Ú© Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙˆØ¬ÙˆØ¯ Ø¯Ø§Ø±Ø¯.");
define("_AM_XFAQ_THEREARE_FAQ","ØªØ¹Ø¯Ø§Ø¯ <span style=\"color: #ff0000; font-weight: bold\">%s</span> Ù¾Ø±Ø³Ø´  Ø¯Ø± Ø¨Ø§Ù†Ú© Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙˆØ¬ÙˆØ¯ Ø¯Ø§Ø±Ø¯.");
define("_AM_XFAQ_THEREARE_FAQ_ONLINE","ØªØ¹Ø¯Ø§Ø¯ <span style='color: #ff0000; font-weight: bold'>%s</span> Ù¾Ø±Ø³Ø´ Ø¨Ø¯ÙˆÙ† Ù¾Ø§Ø³Ø®  Ø¯Ø± Ø¨Ø§Ù†Ú© Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙˆØ¬ÙˆØ¯ Ø¯Ø§Ø±Ø¯.");

//Index
define("_AM_XFAQ_MANAGER_TOPIC","Cat&eacute;gories");
define("_AM_XFAQ_MANAGER_FAQ","FAQ");
define("_AM_XFAQ_XFAQCONF","xFAQ Dashboard");

//General
define("_AM_XFAQ_FORMOK","Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø¨Ø§ Ù…ÙˆÙ�Ù‚ÙŠØª Ø°Ø®ÙŠØ±Ù‡ Ø´Ø¯.");
define("_AM_XFAQ_FORMDELOK","Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø¨Ø§ Ù…ÙˆÙ�Ù‚ÙŠØª Ø­Ø°Ù� Ø´Ø¯");
define("_AM_XFAQ_FORMSUREDEL","Ø¢ÙŠØ§ Ø§Ø² Ø­Ø°Ù� Ø§ÙŠÙ† Ø±Ú©ÙˆØ±Ø¯ Ø§Ø·Ù…ÙŠÙ†Ø§Ù† Ø¯Ø§Ø±ÙŠØ¯ØŸ : <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XFAQ_FORMSURERENEW","Etes-vous s&ucirc;r de vouloir renevouler : <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XFAQ_FORMUPLOAD","Ø¨Ø§Ø±Ú¯Ø²Ø§Ø±ÙŠ");
define("_AM_XFAQ_FORMIMAGE_PATH","Ù…Ø³ÙŠØ± ØªØµÙˆÙŠØ± %s");
define("_AM_XFAQ_FORMACTION","Ø¹Ù…Ù„");
define("_AM_XFAQ_OFF","ØºÙŠØ±Ù�Ø¹Ø§Ù„");
define("_AM_XFAQ_ON","Ù�Ø¹Ø§Ù„");
define("_AM_XFAQ_EDIT","ÙˆÙŠØ±Ø§ÙŠØ´");
define("_AM_XFAQ_DELETE","Ø­Ø°Ù�");
define("_AM_XFAQ_TOPIC_ADD","Ø§Ù�Ø²ÙˆØ¯Ù† Ø´Ø§Ø®Ù‡ Ø¬Ø¯ÙŠØ¯");
define("_AM_XFAQ_TOPIC_EDIT","ÙˆÙŠØ±Ø§ÙŠØ´ Ø´Ø§Ø®Ù‡");
define("_AM_XFAQ_TOPIC_ID","Ø´Ù†Ø§Ø³Ù‡");
define("_AM_XFAQ_TOPIC_PID","ÙˆØ§Ù„Ø¯");
define("_AM_XFAQ_TOPIC_TITLE","Ø¹Ù†ÙˆØ§Ù†");
define("_AM_XFAQ_TOPIC_DESC","Ø´Ø±Ø­");
define("_AM_XFAQ_TOPIC_IMG","ØªØµÙˆÙŠØ±");
define("_AM_XFAQ_TOPIC_WEIGHT","Ø§ÙˆÙ„ÙˆÙŠØª");
define("_AM_XFAQ_TOPIC_SUBMITTER","Ø§Ø±Ø³Ø§Ù„ Ú©Ù†Ù†Ø¯ÙŠ");
define("_AM_XFAQ_TOPIC_DATE_CREATED","ØªØ§Ø±ÙŠØ® Ø´Ø§Ø®Øª");
define("_AM_XFAQ_TOPIC_ONLINE","Ø¢Ù†Ù„Ø§ÙŠÙ†");
define("_AM_XFAQ_FAQ_NO_TOPIC","Ø´Ø§Ø®Ù‡â€ŒØ§ÙŠ Ø¨Ø±Ø§ÙŠ Ø´Ù…Ø§ Ø¬Ù‡Øª Ø§Ø±Ø³Ø§Ù„ ÙˆØ¬ÙˆØ¯ Ù†Ø¯Ø§Ø±Ø¯.");
define("_AM_XFAQ_LOGOSAMENAME","A file with this name already exists, please rename your file and try again");

define("_AM_XFAQ_FAQ_ADD","Ø§Ù�Ø²ÙˆØ¯Ù† Ù¾Ø±Ø³Ø´ Ø¬Ø¯ÙŠØ¯");
define("_AM_XFAQ_FAQ_EDIT","ÙˆÙŠØ±Ø§ÙŠØ´ Ù¾Ø±Ø³Ø´");
define("_AM_XFAQ_FAQ_DELETE","Ø­Ø°Ù� Ù¾Ø±Ø³Ø´");
define("_AM_XFAQ_FAQ_ID","Ø´Ù†Ø§Ø³Ù‡");
define("_AM_XFAQ_FAQ_QUESTION","Ø³ÙˆØ§Ù„");
define("_AM_XFAQ_FAQ_ANSWER","Ù¾Ø§Ø³Ø®");
define("_AM_XFAQ_FAQ_TOPIC","Ø´Ø§Ø®Ù‡");
define("_AM_XFAQ_FAQ_URL","Ø¬Ø§Ù†Ø´ÙŠÙ† Ø¢Ø¯Ø±Ø³");
define("_AM_XFAQ_FAQ_OPEN","Ø¨Ø§Ø²");
define("_AM_XFAQ_FAQ_ANSUSER","Ù¾Ø§Ø³Ø® Ø¯Ù‡Ù†Ø¯Ù‡");
define("_AM_XFAQ_FAQ_SUBMITTER","Ø§Ø±Ø³Ø§Ù„ Ú©Ù†Ù†Ø¯Ù‡");
define("_AM_XFAQ_FAQ_DATE_CREATED","ØªØ§Ø±ÙŠØ®");
define("_AM_XFAQ_FAQ_ONLINE","Ø¢Ù†Ù„Ø§ÙŠÙ†");
define("_AM_XFAQ_FAQ_USER_FAQ","Ù¾Ø±Ø³Ø´â€ŒÙ‡Ø§ÙŠ Ø´Ù…Ø§");
define("_AM_XFAQ_FAQ_USER_FAQ","Ø´Ù…Ø§ Ø¨Ù‡ Ø§ÙŠÙ† Ù‚Ø³Ù…Øª Ø¯Ø³ØªØ±Ø³ÙŠ Ù†Ø¯Ø§Ø±ÙŠØ¯.<br/>Ù„Ø·Ù�Ø§ Ø¹Ø¶Ùˆ Ø´ÙˆÙŠØ¯!");
define("_AM_XFAQ_FAQ_NO_ANSWER","ØªØ§ Ú©Ù†ÙˆÙ† Ø¬ÙˆØ§Ø¨ÙŠ Ø¨Ø±Ø§ÙŠ Ø§ÙŠÙ† Ø³ÙˆØ§Ù„ Ø§Ø±Ø³Ø§Ù„ Ù†Ø´Ø¯Ù‡ Ø§Ø³Øª!");
define("_AM_XFAQ_FAQ_DATE_ANSWER","Date answered");
define("_AM_XFAQ_FAQ_WEIGHT","Weight");
define("_AM_XFAQ_FAQ_METAKEY","Meta Keywords");
define("_AM_XFAQ_FAQ_METADESC","Meta Description");
define("_AM_XFAQ_FAQ_HOWDOI","How do I");
define("_AM_XFAQ_FAQ_DIDUNO","Did You Know?");

//Request.php
define("_AM_XFAQ_FAQ_REQUEST_FORM_HELP","Request Form Help");
define("_AM_XFAQ_FAQ_PRIVACY_FORM_HELP","Privacy Form Help");

//Blocks.php
define("_AM_XFAQ_TOPIC_BLOCK_DAY","topics d'aujourdh'ui");
define("_AM_XFAQ_TOPIC_BLOCK_RANDOM","topics aleatoires");
define("_AM_XFAQ_TOPIC_BLOCK_RECENT","topics recents");
define("_AM_XFAQ_FAQ_BLOCK_DAY","faqs d'aujourdh'ui");
define("_AM_XFAQ_FAQ_BLOCK_RANDOM","faqs aleatoires");
define("_AM_XFAQ_FAQ_BLOCK_RECENT","faqs recents");

//Permissions
define("_AM_XFAQ_PERMISSIONS_ACCESS","Ø¯Ø³ØªØ±Ø³ÙŠ Ø¨Ø±Ø§ÙŠ Ù†Ù…Ø§ÙŠØ´");
define("_AM_XFAQ_PERMISSIONS_SUBMIT","Ø¯Ø³ØªØ±Ø³ÙŠ Ø¨Ø±Ø§ÙŠ Ø§Ø±Ø³Ø§Ù„ Ø³ÙˆØ§Ù„");

//About.php
define("_AM_XFAQ_ABOUT_RELEASEDATE","Release Date");
define("_AM_XFAQ_ABOUT_AUTHOR","Author");
define("_AM_XFAQ_ABOUT_CREDITS","CrÃ©dits");
define("_AM_XFAQ_ABOUT_README","GÃ©nÃ©rale Information");
define("_AM_XFAQ_ABOUT_MANUAL","Aide");
define("_AM_XFAQ_ABOUT_LICENSE","Licence");
define("_AM_XFAQ_ABOUT_MODULE_STATUS","Status");
define("_AM_XFAQ_ABOUT_WEBSITE","Web Site");
define("_AM_XFAQ_ABOUT_AUTHOR_NAME","Author Name");
define("_AM_XFAQ_ABOUT_AUTHOR_WORD","Author Word");
define("_AM_XFAQ_ABOUT_CHANGELOG","Change Log");
define("_AM_XFAQ_ABOUT_MODULE_INFO","Module Info");
define("_AM_XFAQ_ABOUT_AUTHOR_INFO","Author Info");
define("_AM_XFAQ_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_XFAQ_ABOUT_DISCLAIMER_TEXT","GPL Licensed - No Warranty");

?>