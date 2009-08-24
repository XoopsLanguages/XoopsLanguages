<?php
/**
 * Localize the mail functions
 *
 * The English localization is solely for demonstration
 */
// Не делайте ни каких изменений в имени класса
class XoopsMailerLocal extends XoopsMailer {

	function XoopsMailerLocal(){
		$this->XoopsMailer();
		// It is supposed no need to change the charset
		$this->charSet = _CHARSET;
		// You MUST specify the language code value so that the file exists: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["your-language-code"].php
	    $this->multimailer->SetLanguage("ru");
	}
}
?>