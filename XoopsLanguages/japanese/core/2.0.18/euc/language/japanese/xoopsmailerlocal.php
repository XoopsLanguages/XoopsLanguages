<?php
class XoopsMailerLocal extends XoopsMailer {

	function XoopsMailerLocal(){
		$this->XoopsMailer();
		$this->charSet = 'iso-2022-jp';
		$this->encoding = '7bit';
	}

	function encodeFromName($text){
		return $this->EUCtoJIS($text);
	}

	function encodeSubject($text){
		return $this->EUCtoJIS($text);
	}

	function encodeBody(&$text){
		$text = $this->EUCtoJIS($text);
	}



	/*-------------------------------------
	 PHP FORM MAIL 1.01 by TOMO
	 URL : http://www.spencernetwork.org/
	 E-Mail : groove@spencernetwork.org
	--------------------------------------*/
	function EUCtoJIS($str_EUC){
		$str_JIS = '';
		$mode = 0;
		$b = unpack("C*", $str_EUC);
		$n = count($b);
		for ($i = 1; $i <= $n; $i++) {
			if ($b[$i] == 0x8E) {
				if ($mode != 2) {
					$mode = 2;
					$str_JIS .= pack("CCC", 0x1B, 0x28, 0x49);
				}
				$b[$i+1] -= 0x80;
				$str_JIS .= pack("C", $b[$i+1]);
				$i++;
			} elseif ($b[$i] > 0x8E) {
				if ($mode != 1){
					$mode = 1;
					$str_JIS .= pack("CCC", 0x1B, 0x24, 0x42);
				}
				$b[$i] -= 0x80; $b[$i+1] -= 0x80;
				$str_JIS .= pack("CC", $b[$i], $b[$i+1]);
				$i++;
			} else {
				if ($mode != 0) {
					$mode = 0;
					$str_JIS .= pack("CCC", 0x1B, 0x28, 0x42);
				}
				$str_JIS .= pack("C", $b[$i]);
			}
		}
		if ($mode != 0) $str_JIS .= pack("CCC", 0x1B, 0x28, 0x42);
		return $str_JIS;
	}
}
?>