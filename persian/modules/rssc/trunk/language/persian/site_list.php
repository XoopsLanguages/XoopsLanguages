<?php
// $Id: site_list.php,v 1.2 2008/01/10 15:04:27 ohwada Exp $

// 2008-01-10 K.OHWADA
// for tranaslator

// 2007-06-01 K.OHWADA
// move from class/rssc_site_list.php

// 2006-04-17 K.OHWADA
// suppress notice : Only variable references should be returned by reference

//=========================================================
// RSS Center Module
// 2006-01-01 K.OHWADA
//=========================================================

//---------------------------------------------------------
// for tranaslator
//
// this file is for Keyword Manage
// please describe the RSS search site list
//
// RSS search site is such as following
// in English:  http://blogsearch.google.com/
// in Japanese: http://sf.livedoor.com/
//
// I dont know same site in other language
// Probably, Google or Yahoo will start the service in other language.
// If you know, please teach me
//---------------------------------------------------------

// === class begin ===
if( !class_exists('rssc_site_list') ) 
{

//=========================================================
// class rssc_site_list
//=========================================================
class rssc_site_list
{

//---------------------------------------------------------
// constructor
//---------------------------------------------------------
function rssc_site_list()
{
	// dummy
}

function &getInstance()
{
	static $instance;
	if (!isset($instance)) 
	{
		$instance = new rssc_site_list();
	}
	return $instance;
}

//---------------------------------------------------------
// public
//---------------------------------------------------------
function get_site_list()
{
	$site = array();

	$site[1]['title']    = 'google';
	$site[1]['url']      = 'http://blogsearch.google.com/blogsearch?hl=en&lr=lang_en&ie=utf-8&num=10&output=atom&q=';
	$site[1]['rss']      = 'http://blogsearch.google.com/blogsearch_feeds?hl=en&lr=lang_en&ie=utf-8&num=10&output=atom&q=';
	$site[1]['mode']     =  RSSC_C_MODE_ATOM;
	$site[1]['code']     = 'UTF-8';
	$site[1]['encoding'] = 'UTF-8';

	return $site;
}

// --- class end ---
}

// === class end ===
}

?>