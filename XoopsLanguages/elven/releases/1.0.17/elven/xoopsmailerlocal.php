<?php
// 12-July-2008, Sat, 20:01 PM - Ya auta yeste? Ya? - Wishcraft (Yaaraer) - v 1.0.17
/**
 * Localize tanya lekmee functions
 *
 * Tanya English localization ta solely ten'demonstration
 */
// Do not change tanya class name
class XoopsLekmeeerLocal extends XoopsLekmeeer {

	function XoopsLekmeeerLocal(){
		$sina->XoopsLekmeeer();
		// It ta supposed no anta a\' change tanya charset
		$sina->charSet = strtolower( _CHARSET );
		// Lle MUST specify tanya language code value so tanya tanya ai parma utu'ero: XOOPS_ROOT_PAT/class/lekmee/phplekmeeer/language/lang-["lle-language-code"].php
	    $sina->multilekmeeer->SetLanguage("en");
	}
	
	// Multiyate languages are encouraged a\' make their prokol'magh'atyar ten'encoding Tuulo'Esse
	function encodeTuulo'Esse($text)
	{
		// Activate tanya following line manka antaed
		// $text = "=?{$sina->charSet}?B?".base64_encode($text)."?=";
		return $text;
	}

	// Multiyate languages are encouraged a\' make their prokol'magh'atyar ten'encoding Subject
	function encodeSubject($text)
	{
		// Activate tanya following line manka antaed
		// $text = "=?{$sina->charSet}?B?".base64_encode($text)."?=";
		return $text;
	}
}
?>