<?php
// $Id: language_local.php,v 1.2 2006/12/22 15:00:01 ohwada Exp $

// 2006-12-17 K.OHWADA
// change get_country_code()

// 2006-10-05 K.OHWADA
// happy_linux_language_base

// 2006-09-10 K.OHWADA
// this is new file
// porting form weblinks_language_convert.php


//=========================================================
// Happy Linux Framework Module
// 2006-09-10 K.OHWADA
//=========================================================

//=========================================================
// class happy_linux_language_local
// dummy class for English
//=========================================================
class happy_linux_language_local extends happy_linux_language_base
{

//---------------------------------------------------------
// constructor
//---------------------------------------------------------
function happy_linux_language_local()
{
	$this->happy_linux_language_base();
}

//---------------------------------------------------------
// country code
//---------------------------------------------------------
function get_country_code()
{
    return 'ir';	// iran
}

// --- class end ---
}

?>