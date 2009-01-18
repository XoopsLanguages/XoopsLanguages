<?php
// $Id: xoops_version.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$modversion['name'] = _MI_CONTACT_NAME;
$modversion['version'] = 1.6;
$modversion['description'] = _MI_CONTACT_DESC;
$modversion['credits'] = "Original version by Skalpa\nAAINC (XOOPS@IBDeeming! User) for mod on From Email Name\n";
$modversion['author'] = "Modified by CreepingDeath - XOOPS@IBDeeming!\nFrench Translation : Satanas - www.tech-at.be";
$modversion['help'] = "top.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/contact_slogo.png";
$modversion['dirname'] = "contact";

//Admin things
$modversion['hasAdmin'] = 1;

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'contact_contactusform.html';
$modversion['templates'][1]['description'] = 'Contact Us Form';

// Config categories
$modversion['configcat'][1]['nameid'] = 'settings';
$modversion['configcat'][1]['name'] = '_MI_CONTACT_SETTINGS';
$modversion['configcat'][1]['description'] = '_MI_CONTACT_SETTINGS_DSC';

$modversion['configcat'][2]['nameid'] = 'general';
$modversion['configcat'][2]['name'] = '_MI_CONTACT_GEN';
$modversion['configcat'][2]['description'] = '_MI_CONTACT_GEN_DSC';

// CONFIG stuff
// contact_allowsendconfirm
$modversion['config'][1]['name'] = 'contact_allowsendconfirm';
$modversion['config'][1]['title'] = '_MI_CONTACT_ALLOWSENDCONFIRM';
$modversion['config'][1]['description'] = '_MI_CONTACT_ALLOWSENDCONFIRMDSC';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 0;
$modversion['config'][1]['category'] = 'settings';

// contact_icq
$modversion['config'][2]['name'] = 'contact_icq';
$modversion['config'][2]['title'] = '_MI_CONTACT_GETICQ';
$modversion['config'][2]['description'] = '_MI_CONTACT_GETICQDSC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 0;
$modversion['config'][2]['category'] = 'settings';

// contact_url
$modversion['config'][3]['name'] = 'contact_url';
$modversion['config'][3]['title'] = '_MI_CONTACT_GETURL';
$modversion['config'][3]['description'] = '_MI_CONTACT_GETURLDSC';
$modversion['config'][3]['formtype'] = 'yesno';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 0;
$modversion['config'][3]['category'] = 'settings';

// contact_company
$modversion['config'][4]['name'] = 'contact_company';
$modversion['config'][4]['title'] = '_MI_CONTACT_GETCOMPANY';
$modversion['config'][4]['description'] = '_MI_CONTACT_GETCOMPANYDSC';
$modversion['config'][4]['formtype'] = 'yesno';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 0;
$modversion['config'][4]['category'] = 'settings';

// contact_loc
$modversion['config'][5]['name'] = 'contact_loc';
$modversion['config'][5]['title'] = '_MI_CONTACT_GETLOC';
$modversion['config'][5]['description'] = '_MI_CONTACT_GETLOCDSC';
$modversion['config'][5]['formtype'] = 'yesno';
$modversion['config'][5]['valuetype'] = 'int';
$modversion['config'][5]['default'] = 0;
$modversion['config'][5]['category'] = 'settings';

// contact_intro_head
$modversion['config'][6]['name'] = 'contact_intro_head';
$modversion['config'][6]['title'] = '_MI_CONTACT_INTROHEAD';
$modversion['config'][6]['description'] = '_MI_CONTACT_INTROHEAD_DESC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = "Introduction";
$modversion['config'][6]['category'] = 'general';

// contact_intro
$modversion['config'][7]['name'] = 'contact_intro';
$modversion['config'][7]['title'] = '_MI_CONTACT_INTRO';
$modversion['config'][7]['description'] = '_MI_CONTACT_INTRO_DESC';
$modversion['config'][7]['formtype'] = 'textarea';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = _MI_CONTACT_INTRO_DEFAULT;
$modversion['config'][7]['category'] = 'general';

// contact_loc
$modversion['config'][8]['name'] = 'contact_address';
$modversion['config'][8]['title'] = '_MI_CONTACT_ADDRESS';
$modversion['config'][8]['description'] = '_MI_CONTACT_ADDRESSDSC';
$modversion['config'][8]['formtype'] = 'yesno';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 0;
$modversion['config'][8]['category'] = 'settings';

// contact_security
$modversion['config'][9]['name'] = 'contact_security';
$modversion['config'][9]['title'] = '_MI_CONTACT_SECURITY';
$modversion['config'][9]['description'] = '_MI_CONTACT_SECURITYDSC';
$modversion['config'][9]['formtype'] = 'yesno';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 0;
$modversion['config'][9]['category'] = 'settings';

// contact_sitekey
$modversion['config'][10]['name'] = 'contact_sitekey';
$modversion['config'][10]['title'] = '_MI_CONTACT_SITEKEY';
$modversion['config'][10]['description'] = '_MI_CONTACT_SITEKEYDSC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'text';
$modversion['config'][10]['default'] = 'A0jyUi345Vyt7';
$modversion['config'][10]['category'] = 'settings';

// contact_head
$modversion['config'][11]['name'] = 'contact_head';
$modversion['config'][11]['title'] = '_MI_CONTACT_HEAD';
$modversion['config'][11]['description'] = '_MI_CONTACT_HEADDSC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'text';
$modversion['config'][11]['default'] = _MI_CONTACT_HEADDEFAULT;
$modversion['config'][11]['category'] = 'general';

// contact_thankyou
$modversion['config'][12]['name'] = 'contact_thankyou';
$modversion['config'][12]['title'] = '_MI_CONTACT_THANKYOU';
$modversion['config'][12]['description'] = '_MI_CONTACT_THANKYOUDSC';
$modversion['config'][12]['formtype'] = 'textbox';
$modversion['config'][12]['valuetype'] = 'text';
$modversion['config'][12]['default'] = _MI_CONTACT_THANKYOUDEFAULT;
$modversion['config'][12]['category'] = 'general';

// contact_redirecttimeout
$modversion['config'][13]['name'] = 'contact_redirecttimeout';
$modversion['config'][13]['title'] = '_MI_CONTACT_TIMEOUT';
$modversion['config'][13]['description'] = '_MI_CONTACT_TIMEOUTDSC';
$modversion['config'][13]['formtype'] = 'textbox';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = "10";
$modversion['config'][13]['category'] = 'settings';

// contact_showdept
$modversion['config'][14]['name'] = 'contact_showdept';
$modversion['config'][14]['title'] = '_MI_CONTACT_SHOWDEPT';
$modversion['config'][14]['description'] = '_MI_CONTACT_SHOWDEPTDSC';
$modversion['config'][14]['formtype'] = 'yesno';
$modversion['config'][14]['valuetype'] = 'int';
$modversion['config'][14]['default'] = '0';
$modversion['config'][14]['category'] = 'general';

// contact_depttitle
$modversion['config'][15]['name'] = 'contact_depttitle';
$modversion['config'][15]['title'] = '_MI_CONTACT_DEPTTITLE';
$modversion['config'][15]['description'] = '_MI_CONTACT_DEPTTITLEDSC';
$modversion['config'][15]['formtype'] = 'textbox';
$modversion['config'][15]['valuetype'] = 'text';
$modversion['config'][15]['default'] = _MI_CONTACT_DEPTTITLEDEFAULT;
$modversion['config'][15]['category'] = 'general';

// contact_dept
$modversion['config'][16]['name'] = 'contact_dept';
$modversion['config'][16]['title'] = '_MI_CONTACT_DEPT';
$modversion['config'][16]['description'] = '_MI_CONTACT_DEPTDSC';
$modversion['config'][16]['formtype'] = 'textarea';
$modversion['config'][16]['valuetype'] = 'array';
$modversion['config'][16]['default'] = '';
$modversion['config'][16]['category'] = 'general';

// contact_validatedomain
$modversion['config'][17]['name'] = 'contact_validatedomain';
$modversion['config'][17]['title'] = '_MI_CONTACT_VALIDATEDOMAIN';
$modversion['config'][17]['description'] = '_MI_CONTACT_VALIDATEDOMAINDSC';
$modversion['config'][17]['formtype'] = 'yesno';
$modversion['config'][17]['valuetype'] = 'int';
$modversion['config'][17]['default'] = '0';
$modversion['config'][17]['category'] = 'settings';

// contact_showmoreinfo
$modversion['config'][18]['name'] = 'contact_showmoreinfo';
$modversion['config'][18]['title'] = '_MI_CONTACT_SHOWMOREINFO';
$modversion['config'][18]['description'] = '_MI_CONTACT_SHOWMOREINFODSC';
$modversion['config'][18]['formtype'] = 'yesno';
$modversion['config'][18]['valuetype'] = 'int';
$modversion['config'][18]['default'] = '0';
$modversion['config'][18]['category'] = 'general';

// contact_moreinfotitle
$modversion['config'][19]['name'] = 'contact_moreinfotitle';
$modversion['config'][19]['title'] = '_MI_CONTACT_MOREINFOTITLE';
$modversion['config'][19]['description'] = '_MI_CONTACT_MOREINFOTITLEDSC';
$modversion['config'][19]['formtype'] = 'textbox';
$modversion['config'][19]['valuetype'] = 'text';
$modversion['config'][19]['default'] = _MI_CONTACT_MOREINFOTITLEDEFAULT;
$modversion['config'][19]['category'] = 'general';

// contact_moreinfo
$modversion['config'][20]['name'] = 'contact_moreinfo';
$modversion['config'][20]['title'] = '_MI_CONTACT_MOREINFO';
$modversion['config'][20]['description'] = '_MI_CONTACT_MOREINFODSC';
$modversion['config'][20]['formtype'] = 'textarea';
$modversion['config'][20]['valuetype'] = 'array';
$modversion['config'][20]['default'] = '';
$modversion['config'][20]['category'] = 'general';

?>