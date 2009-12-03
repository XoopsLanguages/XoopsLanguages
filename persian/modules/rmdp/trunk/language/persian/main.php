<?php
//////////////////////////////////////////////////////////////////////////////
// $Id: main.php,v 1.5 23/11/2005 13:48:12 BitC3R0 Exp $                    //
// ------------------------------------------------------------------------ //
// RM+Soft Downloads Plus 1.5                                               //
// Copyright © 2005. Red Mexico Soft                                        //
// <www.redmexico.com.mx>                                                   //
// Modulo XOOPS que permite el control y distribución avanzado de           //
// descargas.                                                               //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
//                                                                          //
// This program is distributed in the hope that it will be useful, but      //
// WITHOUT ANY WARRANTY; without even the implied warranty of               //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU         //
// General Public License for more details.                                 //
//                                                                          //
// You should have received a copy of the GNU General Public License        //
// along with this program; if not, write to the                            //
// Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,      //
// MA 02111-1307 USA                                                        //
// ------------------------------------------------------------------------ //
// Questions, Bugs or any comment plese write me                            //
// Preguntas, errores o cualquier comentario escribeme                      //
// <adminone@redmexico.com.mx>                                              //
// ------------------------------------------------------------------------ //
// Visita http://www.xoops-mexico.net para obtener los últimos módulos      //
// de Red México Soft.                                                      //
//                                                                          //
// For more modules from Red México Soft visit http://www.xoops-mexico.net  //
// Translate by hamid. http://irmob.com. http://farsixoops.com.             //
//////////////////////////////////////////////////////////////////////////////
global $rmdp_location;

define('_RMDP_DOWNLOAD_NOW','دانلود کن');
define('_RMDP_DOWNLOAD_TODAY',"دانلودهای امروز");
define('_RMDP_THENEW_INCAT','جدیدترین در: %s');
define('_RMDP_SEALL_INCAT','دیدن همه');
define('_RMDP_MORE_DOWNLOADS','بیشترین دانلودها');
define('_RMDP_POPULAR','محبوب');
define('_RMDP_BEST_RATED','با ارزشترین');
define('_RMDP_FORUMS','فروم');
define('_RMDP_OUR_FAVORITES','مورد علاقه ما');
define('_RMDP_POPULAR_SOFT','نرم افزار محبوب');
define('_RMDP_FAVORITE_TEXT','');
define('_RMDP_SPONSOR_NEWS','Sponsor News');
define('_RMDP_TOTAL_RESULTS','%s - %s of %s');
define('_RMDP_RESULT_PAGES','صفحه: ');
define('_RMDP_VOTES','(%s رأی)');
define('_RMDP_NEW_DOWN','جدید');
define('_RMDP_UPDATE_DOWN','به روز شده');
define('_RMDP_ERR_ACCESS','متأسفانه شما به این شاخه دسترسی ندارید');
define('_RMDP_CANCEL_BUTTON','لغو');
define('_RMDP_SEND_BUTTON','ارسال');

/**
 * Cadenas para la barra de busqueda
 */
define('_RMDP_ALL_WEB','جستجو در همه %s');
define('_RMDP_SEARCH_BUTTON','جستجو');
define('_RMDP_VIEW_FAV','علاقه مندیها');
define('_RMDP_VIEW_POP','محبوب ترین');
define('_RMDP_VIEW_RATED','با ارزشترین');
define('_RMDP_SUBMIT_DOWN','ارسال دانلود');

/**
* Cadenas para los resultados
**/
define('_RMDP_SUBCATEGOS_IN','شاخه اصلی در "%s"');
define('_RMDP_DOWNS_INCATEGO','دانلودهای در %s');
define('_RMDP_RESORT_BY','مرتب کردن با:');
define('_RMDP_ORDER_NAME','نام');
define('_RMDP_ORDER_DATE','تاریخ');
define('_RMDP_ORDER_RATING','ارزش');
define('_RMDP_ORDER_OURRATING','ارزش گذاری ما');
define('_RMDP_ORDER_DOWNLOADS','دانلودها');
define('_RMDP_ORDER_SUBMITTER','منتشر کننده');
define('_RMDP_OS','سیستم عامل:');
define('_RMDP_VERSION','ورژن:');
define('_RMDP_FILE_SIZE','سایز:');
define('_RMDP_LICENCE','لیسانس:');
define('_RMDP_SPONSORED','برجسته کردن');
define('_RMDP_VIEW_SHOT','تصویر نمایشی');

define('_RMDP_DOWNS_INCATS','آخرین دانلودهای رسیده در %s');
define('_RMDP_DOWNS_INCATS_DESC','آخرین دانلودهای شاخه %s از %s');
define('_RMDP_DOWNS_LASTDESC','آخرین دانلودهای این سایت');
	
if($rmdp_location=='downloads'){

	include 'rmdp_lang_downloads.php';

} elseif ($rmdp_location=='votos'){

	define('_RMDP_NO_ACCESS','برای رأی دادن باید ثبت نام کنید');
	define('_RMDP_IS_PUBLISHER',"متأسفانه شما نمی توانید برای دانلود خود رأی بدهید");
	define('_RMDP_VOTE_ONEDAY','شما فقط می توانید روزی یک رأی برای هر دانلود بدهید.');
	define('_RMDP_VOTE_THX','با تشکر ار رأی شما. لطفا نظرات خود را نیز برای این دانلود بنویسید.');
	define('_RMDP_VOTE_ERR','یک خطا روی داده است. لطفا دوباره سعی کنید.');
	define('_RMDP_NOVOTE_TWICE'," شما نمیتوانید دو بار برای یک دانلود رأی بدهید.");

} elseif ($rmdp_location=='shots'){

	define('_RMDP_LOCATION_SHOT','تصویر نمایشی');
	define('_RMDP_DOWN_SHOTS',"%s' تصاویر نمایشی");
	define('_RMDP_ERR_NOTFOUND','این تصویر نمایشی پیدا نشد');
	define('_RMDP_BACK','برای بازگشت کلیک کنید');

} elseif ($rmdp_location=='popular'){
	define('_RMDP_POPULAR_TITLE','دانلودهای محبوب');
	define('_RMDP_TOP_POP','ما <strong>%s</strong> بهترین دانلودهای');
} elseif ($rmdp_location=='علاقه مندیها'){
	define('_RMDP_TOP_FAVS','بهترین برنامه های ما');
	define('_RMDP_FAVORITE_TITLE','مورد علاقه ما');
}  elseif ($rmdp_location=='mejorval'){

	define('_RMDP_RATED_TITLE','با ارزشترین دانلودها');
	define('_RMDP_TOP_RATE','<strong>%s</strong> دانلودهای ممتاز');
	
} elseif ($rmdp_location=='submit'){
	
	include 'rmdp_lang_submit.php';

} elseif ($rmdp_location=='mysends'){
	
	include 'rmdp_lang_mysends.php';
	
} elseif ($rmdp_location=='search'){

	define('_RMDP_SEARCH_RESULTS','نتایج برای "%s"');
	define('_RMDP_NOSEARCH_KEY','شما کلمه جستجو را وارد نکرده اید');

}	elseif ($rmdp_location=='broken'){
	
	define('_RMDP_ERR_NOTFOUND','این دانلود پیدا نشد');
	define('_RMDP_NO_USER','قبل از گزارش خرابی لینک باید ثبت نام کنید');
	define('_RMDP_BROKEN_BODY',"سلام %s:\n\nA برای دانلود شما گزارش خرابی لینک ارسال شده.لطفا هر چه سریعتر نسبت به اصلاح آن اقدام نمایید. Go to:\n\n%s\n\nCheck all your downloads in ".XOOPS_URL."/modules/rmdp/mysend.php \n\nUser Comment:\n\n \"%s\" \n\n");
	define('_RMDP_BROKEN_BODYADMIN'," %s  شما می توانید تاریخ را داینجا چک کنیدگزارش خرابی لینک داده است.:\n\n%s\n\n یا می توانید دانلود را در اینجا ببینید:\n\n%s. \n\nتوضیحات کاربر: \n\n\"%s\"");
	define('_RMDP_BROKEN_SEND','با تشکر.گزارش شما با موفقیت ارسال شد.');
	define('_RMDP_BROKEN_SUBJECT','گزارش خرابی لینک دانلود');
	define('_RMDP_BROKEN_NOREPORT','لطفا توضیحات خود را برای این گزارش بنویسید. مجددأ سعی نمایید.');

}
?>

