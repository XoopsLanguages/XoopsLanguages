<?php
if(!function_exists("is_utf8")){
	//判斷字串是否為utf8
	function  is_utf8($str)  {
	    $i=0;
	    $len  =  strlen($str);

	    for($i=0;$i<$len;$i++)  {
	        $sbit  =  ord(substr($str,$i,1));
	        if($sbit  <  128)  {
	            //本字節為英文字符，不與理會
	        }elseif($sbit  >  191  &&  $sbit  <  224)  {
	            //第一字節為落於192~223的utf8的中文字(表示該中文為由2個字節所組成utf8中文字)，找下一個中文字
	            $i++;
	        }elseif($sbit  >  223  &&  $sbit  <  240)  {
	            //第一字節為落於223~239的utf8的中文字(表示該中文為由3個字節所組成的utf8中文字)，找下一個中文字
	            $i+=2;
	        }elseif($sbit  >  239  &&  $sbit  <  248)  {
	            //第一字節為落於240~247的utf8的中文字(表示該中文為由4個字節所組成的utf8中文字)，找下一個中文字
	            $i+=3;
	        }else{
	            //第一字節為非的utf8的中文字
	            return  0;
	        }
	    }
	    //檢查完整個字串都沒問體，代表這個字串是utf8中文字
	    return  1;
	}
}
$lan=(is_utf8(_PLEASEWAIT))?"utf8":"big5";
include(XOOPS_ROOT_PATH."/modules/tad_cbox/language/tchinese/{$lan}/{$file}");


?>