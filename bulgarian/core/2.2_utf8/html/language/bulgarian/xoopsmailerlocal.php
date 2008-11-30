<?php

class XoopsMailerLocal extends XoopsMailer {

	function XoopsMailerLocal(){
		$this->XoopsMailer();
		$this->charSet = 'utf-8';
	}
}
?>