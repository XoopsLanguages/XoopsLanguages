<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:            The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:                http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:                Smallworld
* @Author:                Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:            2011 Culex
* @Repository path:        $HeadURL$
* @Last committed:        $Revision$
* @Last changed by:        $Author$
* @Last changed date:    $Date$
* @ID:                    $Id$
**/

$modversion['name'] = _MI_SMALLWORLD_MODULE_NAME;
$modversion['version'] = 1.15;
$modversion['description'] = _MI_SMALLWORLD_MODULE_DESC;
$modversion['author'] = "Michael Albertsen";
$modversion['nickname'] = 'Culex';
$modversion['credits'] = "Mariane, Mrsculex, Mamba, Rune, Zth, Cesag";
$modversion['module_website_name'] = 'www.culex.dk';
$modversion['module_website_url'] = 'www.culex.dk';
$modversion['license'] = 'GNU GPL';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['status_version'] = 'RC';
$modversion['module_status'] = 'Release Candidate';
$modversion['release_date'] = '2011/12/24';
$modversion['help'] = 'page=help';
$modversion['min_php'] = '5.2';
$modversion['min_xoops'] = '2.5';
$modversion['min_admin'] = '1.1';
$modversion['min_db'] = array('mysql' => '5.0.5', 'mysqli' => '5.0.5');
$modversion['system_menu'] = 1;
$modversion['official'] = 0;
$modversion['image'] = "images/smallworld.png";
$modversion['dirname'] = "smallworld";

$modversion['icons16'] = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = '../../Frameworks/moduleclasses/icons/32';

// Admin
$modversion['hasAdmin'] = 1;

// Menu
$modversion['hasMain'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "smallworld_admin";
$modversion['tables'][1] = "smallworld_comments";
$modversion['tables'][2] = "smallworld_followers";
$modversion['tables'][3] = "smallworld_friends";
$modversion['tables'][4] = "smallworld_images";
$modversion['tables'][5] = "smallworld_messages";
$modversion['tables'][6] = "smallworld_user";
$modversion['tables'][7] = "smallworld_vote";
$modversion['tables'][8] = "smallworld_complaints";

// Templates
$i = 1;
$modversion['templates'][$i]['file'] = 'smallworld_index.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_userprofile_template.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_userprofile_regtemplate.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_userprofile_edittemplate.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_userprofile_imgupload.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_galleryshow.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_images_edittemplate.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_friends_template.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_permalink.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_admin.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'smallworld_share.html';
$modversion['templates'][$i]['description'] = '';

// Blocks
$i = 1;
$modversion['blocks'][$i]['file'] = "smallworld_block.php";
$modversion['blocks'][$i]['name'] = 'Block for empty module';
$modversion['blocks'][$i]['description'] = 'This is a Block for the empty module';
$modversion['blocks'][$i]['show_func'] = "smallworld_block";
$modversion['blocks'][$i]['template'] = 'smallworld_block.html';

//Module Configs
$i = 0;
$modversion['config'][$i]['name'] = 'geolocate';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_USEGOOGLE';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_USEGOOGLE_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'msgtoshow';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_MSGTOSHOW';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_MSGTOSHOW_DESC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 5;

$i++;
$modversion['config'][$i]['name'] = 'validationstrenght';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_VALIDATIONSTRENGHT';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_VALIDATIONSTRENGHT_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'takeoveruserlinks';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_TAKEOVERLINKS';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_TAKEOVERLINKS_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'usersownpostscount';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_USERSOWNMSGCOUNTS';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_USERSOWNMSGCOUNTS_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'smallworldbookmarkavatar';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_BOOKMARSAVATARS';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_BOOKMARKSAVATARS_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'smallworldusemailnotis';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_USEMAILNOTIFICATION';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_USEMAILNOTIFICATION_DESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'smallworldusethesefields';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_VIEWFIELDS';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_VIEWFIELDS_DESC';
$modversion['config'][$i]['formtype'] = 'select_multi';
$modversion['config'][$i]['valuetype'] = 'array';
$modversion['config'][$i]['options'] = array(   '_MI_SMALLWORLD_REALNAME' => 'realname',
                                                '_MI_SMALLWORLD_GENDER' => 'gender',
                                                '_MI_SMALLWORLD_INTERESTEDIN' => 'interestedin',
                                                '_MI_SMALLWORLD_RELATIONSHIPSTATUS' => 'relationshipstatus',
                                                '_MI_SMALLWORLD_PARTNER' => 'partner',
                                                '_MI_SMALLWORLD_LOOKINGFOR' => 'lookingfor',
                                                '_MI_SMALLWORLD_BIRTHDAY' => 'birthday',
                                                '_MI_SMALLWORLD_BIRTHPLACE' => 'birthplace',
                                                '_MI_SMALLWORLD_POLITICALVIEWS' => 'politicalview',
                                                '_MI_SMALLWORLD_RELIGIOUSVIEWS' => 'religiousview',
                                                '_MI_SMALLWORLD_EMAILS' => 'emails',
                                                '_MI_SMALLWORLD_SCREENNAMES' => 'screennames',
                                                '_MI_SMALLWORLD_MOBILE' => 'mobile',
                                                '_MI_SMALLWORLD_LANDPHONE' => 'landphone',
                                                '_MI_SMALLWORLD_STREETADRESS' => 'streetadress',
                                                '_MI_SMALLWORLD_PRESENTCITY' => 'presentcity',
                                                '_MI_SMALLWORLD_COUNTRY' => 'country',
                                                '_MI_SMALLWORLD_WEBSITE' => 'website',
                                                '_MI_SMALLWORLD_INTERESTS' => 'interests',
                                                '_MI_SMALLWORLD_FAVOURITEMUSIC' => 'favouritemusic',
                                                '_MI_SMALLWORLD_FAVOURITETVSHOWS' => 'favouritetvshows',
                                                '_MI_SMALLWORLD_FAVOURITEMOVIES' => 'favouritemovies',
                                                '_MI_SMALLWORLD_FAVOURITEBOOKS' => 'favouritebooks',
                                                '_MI_SMALLWORLD_ABOUTME' => 'aboutme',
                                                '_MI_SMALLWORLD_EDUCATION' => 'education',
                                                '_MI_SMALLWORLD_EMPLOYMENT' => 'employment',);
$modversion['config'][$i]['default'] = array(   'realname',
                                                'gender',
                                                'interestedin',
                                                'relationshipstatus',
                                                'partner',
                                                'lookingfor',
                                                'birthday',
                                                'birthplace',
                                                'politicalview',
                                                'religiousview',
                                                'emails',
                                                'screennames',
                                                'mobile',
                                                'landphone',
                                                'streetadress',
                                                'presentcity',
                                                'country',
                                                'website',
                                                'interests',
                                                'favouritemusic',
                                                'favouritetvshows',
                                                'favouritemovies',
                                                'favouritebooks',
                                                'aboutme',
                                                'education',
                                                'employment');
                                                
// Mandatory fields
$i++;
$modversion['config'][$i]['name'] = 'smallworldmandatoryfields';
$modversion['config'][$i]['title'] = '_MI_SMALLWORLD_VERIFYFIELDS';
$modversion['config'][$i]['description'] = '_MI_SMALLWORLD_VERIFYFIELDS_DESC';
$modversion['config'][$i]['formtype'] = 'select_multi';
$modversion['config'][$i]['valuetype'] = 'array';
$modversion['config'][$i]['options'] = array(   '_MI_SMALLWORLD_REALNAME' => 'realname',
                                                '_MI_SMALLWORLD_GENDER' => 'gender',
                                                '_MI_SMALLWORLD_INTERESTEDIN' => 'interestedin',
                                                '_MI_SMALLWORLD_RELATIONSHIPSTATUS' => 'relationshipstatus',
                                                '_MI_SMALLWORLD_PARTNER' => 'partner',
                                                '_MI_SMALLWORLD_LOOKINGFOR' => 'lookingfor',
                                                '_MI_SMALLWORLD_BIRTHDAY' => 'birthday',
                                                '_MI_SMALLWORLD_BIRTHPLACE' => 'birthplace',
                                                '_MI_SMALLWORLD_POLITICALVIEWS' => 'politicalview',
                                                '_MI_SMALLWORLD_RELIGIOUSVIEWS' => 'religiousview',
                                                '_MI_SMALLWORLD_EMAILS' => 'emails',
                                                '_MI_SMALLWORLD_SCREENNAMES' => 'screennames',
                                                '_MI_SMALLWORLD_MOBILE' => 'mobile',
                                                '_MI_SMALLWORLD_LANDPHONE' => 'landphone',
                                                '_MI_SMALLWORLD_STREETADRESS' => 'streetadress',
                                                '_MI_SMALLWORLD_PRESENTCITY' => 'presentcity',
                                                '_MI_SMALLWORLD_COUNTRY' => 'country',
                                                '_MI_SMALLWORLD_WEBSITE' => 'website',
                                                '_MI_SMALLWORLD_INTERESTS' => 'interests',
                                                '_MI_SMALLWORLD_FAVOURITEMUSIC' => 'favouritemusic',
                                                '_MI_SMALLWORLD_FAVOURITETVSHOWS' => 'favouritetvshows',
                                                '_MI_SMALLWORLD_FAVOURITEMOVIES' => 'favouritemovies',
                                                '_MI_SMALLWORLD_FAVOURITEBOOKS' => 'favouritebooks',
                                                '_MI_SMALLWORLD_ABOUTME' => 'aboutme',
                                                '_MI_SMALLWORLD_EDUCATION' => 'education',
                                                '_MI_SMALLWORLD_EMPLOYMENT' => 'employment',);
$modversion['config'][$i]['default'] = array(   'realname',
                                                'gender',
                                                'interestedin',
                                                'relationshipstatus',
                                                'lookingfor',
                                                'birthday',
                                                'birthplace',
                                                'emails',
                                                'screennames',
                                                'streetadress',
                                                'presentcity',
                                                'country');    


// Search
$modversion['hasSearch'] = 1;            
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "smallworld_search";                                

?>