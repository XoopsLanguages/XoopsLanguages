<?php
// $Id: english.php,v 1.1.1.1 2005/10/19 15:58:20 phppp Exp $
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
// Author: phppp (D.J., infomax@gmail.com)                                  //
// URL: http://xoopsforge.com, http://xoops.org.cn                          //
// Project: Article Project                                                 //
// ------------------------------------------------------------------------ //

// For end users
$valid_pfd_charset = 'ISO-8859-2';

$pdf_config['margin'] = array(
	'left'=>25,
	'top'=>25,
	'right'=>25
	);

$pdf_config['logo'] = array(
	'path'=>'images/xoopsbb_slogo.png',
	'left'=>150,
	'top'=>5,
	'width'=>0,
	'height'=>0
	);

$pdf_config['font']['slogan'] = array(
	'family'=>'Arial',
	'style'=>'bi',
	'size'=>8
	);

$pdf_config['font']['title'] = array(
	'family'=>'Arial',
	'style'=>'biu',
	'size'=>12
	);

$pdf_config['font']['subject'] = array(
	'family'=>'Arial',
	'style'=>'b',
	'size'=>11
	);

$pdf_config['font']['author'] = array(
	'family'=>'Arial',
	'style'=>'',
	'size'=>10
	);

$pdf_config['font']['subtitle'] = array(
	'family'=>'Arial',
	'style'=>'b',
	'size'=>11
	);

$pdf_config['font']['subsubtitle'] = array(
	'family'=>'Arial',
	'style'=>'b',
	'size'=>10
	);

$pdf_config['font']['content'] = array(
	'family'=>'Arial',
	'style'=>'',
	'size'=>10
	);

$pdf_config['font']['footer'] = array(
	'family'=>'Arial',
	'style'=>'',
	'size'=>8
	);

$pdf_config['action_on_error'] = 0; // 0 - continue; 1 - die
$pdf_config['creator'] = 'CBB BASED ON FPDF v1.53';
$pdf_config['url'] = XOOPS_URL;
$pdf_config['mail'] = 'mailto:'.$xoopsConfig['adminmail'];
$pdf_config['slogan']=xoops_substr($myts->htmlspecialchars( $xoopsConfig['sitename'] ),0,30);
$pdf_config['scale'] = '0.8';
$pdf_config['dateformat'] = _DATESTRING;
$pdf_config['footerpage'] = _MD_PDF_PAGE;

// For local support sites
define('NEWBB_PDF_FORUM','Forum');
define('NEWBB_PDF_TOPIC','Tema');
define('NEWBB_PDF_SUBJECT','Predmet');
define('NEWBB_PDF_AUTHOR', _POSTEDBY);
define('NEWBB_PDF_DATE', _MD_POSTEDON);
//define('NEWBB_PDF_PAGE','Page %s');

// Usually you do not need change the following class if you are not using: S/T Chinese, Korean, Japanese
// For more details, refer to: http://fpdf.org
class PDF_language extends FPDF
{
	function PDF_language($orientation='P',$unit='mm',$format='A4')
	{
	    //Call parent constructor
	    $this->FPDF($orientation,$unit,$format);
	}

	function Error($msg)
	{
		global $pdf_config;
		if($pdf_config['action_on_error']){
			//Fatal error
			die('<B>FPDF error: </B>'.$msg);
		}
	}

	function encoding(&$text, $in_charset)
	{
		$out_charset = $GLOBALS["valid_pfd_charset"];
	    if (empty($in_charset) || empty($out_charset) || !strcasecmp($out_charset, $in_charset)) return;

	    if(is_array($text) && count($text)>0){
		    foreach($text as $key=>$val){
		    	$this->_encoding($text[$key], $in_charset, $out_charset);
	    	}
    	}else{
		    $this->_encoding($text, $in_charset, $out_charset);
	    }
	}

	function _encoding(&$text, $in_charset, $out_charset)
	{
		// some conversion goes here
		// refer to schinese.php for example
		$text =& XoopsLocal::convert_encoding($text, $out_charset, $in_charset);
	}
}
?>