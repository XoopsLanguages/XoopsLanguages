<?php

// This is a sample of using iconv() for converting UTF-8 <-> non-iso-encoding
// Replace "WINDOWS-1251" to your encoding
// Don't forget adding the encoding into _AM_ENCODINGS of language/(your language)/admin.php

if( ! class_exists( 'XhldRendererLocal' ) ) {
	class XhldRendererLocal extends XhldRenderer
	{
		function XhldRendererLocal( &$headline , $mydirname='xhld0' )
		{
			parent::XhldRenderer( $headline , $mydirname ) ;
		}

		function convertFromUtf8(&$value, $key)
		{
			if( ! is_string( $value ) ) return ;
			if( stristr( _CHARSET , 'iso-8859-1' ) ) {
				$value = utf8_decode( $value ) ;
			} else if( $this->_hl->getVar('headline_encoding') == 'iso-8859-1' && ! $this->_hl->getVar('headline_allowhtml') ) {
				$value = htmlentities( utf8_decode( $value ) ) ;
			} else {
				$value = iconv( "UTF-8" , "WINDOWS-1251" , $value ) ;
			}
		}

		function convertToUtf8(&$xmlfile)
		{
			$encoding = $this->_hl->getVar('headline_encoding') ;

			// auto detection
			if( empty( $encoding ) ) {
				$top_of_xml = substr( $xmlfile , 0 , 255 ) ;
				preg_match( "/^<\?xml .* encoding=['\"]?([0-9a-z_-]+)/i", $top_of_xml , $regs ) ;
				if( empty( $regs ) ) {
					$encoding = 'utf-8' ;
				} else {
					$encoding = strtolower( $regs[1] ) ;
				}
				$this->_hl->setVar( 'headline_encoding' , $encoding ) ;
				$headline_handler =& xoops_getmodulehandler('headline', $this->_mydirname);
				$headline_handler->insert($this->_hl);
			}

			switch( strtolower( $encoding ) ) {
				case 'iso-8859-1' :
					$xmlfile = utf8_encode( $xmlfile ) ;
					break ;
				case 'windows-1251' :
					$xmlfile = iconv( "WINDOWS-1251" , "UTF-8" , $xmlfile ) ;
					break ;
				case 'utf-8' :
				default :
					break ;
			}

			return $xmlfile;
		}
	}
}
?>
