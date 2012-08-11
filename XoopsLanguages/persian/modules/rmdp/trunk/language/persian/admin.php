<?
//////////////////////////////////////////////////////////////////////////////
// $Id: admin.php,v 1.5 23/11/2005 13:47:52 BitC3R0 Exp $                   //
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

global $location;

define('_AM_RMDP_SEND','ارسال');
define('_AM_RMDP_CANCEL','انصراف');
define('_AM_RMDP_MODIFY','ویرایش');
define('_AM_RMDP_DELETE','حذف');
define('_AM_RMDP_NEWCATEGO','شاخه جدید');
define('_AM_RMDP_YES','بلی');
define('_AM_RMDP_NO','خیر');
define('_AM_RMDP_CATEGOFAIL','یک ایراد وجود دارد:<br />');

/**
 * Declaraciones para la barra de navegación
 */
define('_AM_RMDP_CATEGOS','شاخه ها');
define('_AM_RMDP_DOWNLOADS','دانلودها');
define('_AM_RMDP_DSPONSOR','اسپانسر');
define('_AM_RMDP_OS','سیستم عامل ها');
define('_AM_RMDP_OPTIONS','گزینه ها');
define('_AM_RMDP_SLICS','لیسانس');
define('_AM_RMDP_SNSENDED','دریافت');
define('_AM_RMDP_SMODIFIED','اصلاحات');
define('_AM_RMDP_GOPAGE','صفحه: ');
define('_AM_RMDP_HELP','راهنمایی');

// NUEVO EN VERSION 1.3
define('_AM_RMDP_ACTUAL','<span style="font-size: 10px;">Current: <strong>%s</strong></span>');
define('_AM_RMDP_ERRMOVEFILE','درهنگام آپلود فایل خطا روی داده است. لطفا دسترسی فولدر را 777 بگذارید "%s".');

if ($location=='indice'){

	define('_AM_RMDP_ACTUALSTATUS','کشور کنونی');
	define('_AM_RMDP_CATEGOS',':تعداد شاخه ها');
	define('_AM_RMDP_SEE','دیدن');
	define('_AM_RMDP_DOWNS',':تعداد دانلودها');
	define('_AM_RMDP_SPONSOR','اسپانسر دانلودها:');
	define('_AM_RMDP_CARS','مشخصات:');
	define('_AM_RMDP_LICS','تعداد لیسانس:');
	define('_AM_RMDP_OSNUM','تعداد پلت فرم ها:');
	define('_AM_RMDP_DSEND','دانلود های رسیده:');
	define('_AM_RMDP_NSHOTS','عکس نمایشی:');

} elseif ($location=='categorias'){
	define('_AM_RMDP_FNAME','نام:');
	define('_AM_RMDP_FACCESS','دسترسی:');
	define('_AM_RMDP_REGISTERED','فقط اعضا');
	define('_AM_RMDP_EVERYBODY','همه');
	define('_AM_RMDP_FPARENT','شاخه اصلی:');
	define('_AM_RMDP_FIMG','تصویر:');
	define('_AM_RMDP_FIMGURL','آدرس تصویر:<br /><span style="font-size: 10px;">اگر فایل تصویر مشخص شده باشد این نیازی ندارد.</span>');
	define('_AM_RMDP_SELECT','انتخاب ...');
	
	define('_AM_RMDP_ERRNAME','خطا:شما نام شاخه را مشخص نکرده اید.');
	define('_AM_RMDP_ERREXIST','خطا:شاخه ای با همین نام وجود دارد.');
	define('_AM_RMDP_ERRNOEXIST','خطا:شاخه انتخابی وجود ندارد.');
	define('_AM_RMDP_CATEGOOK','شاخه با موفقیت ساخته شد');
	define('_AM_RMDP_CATEGOMODOK','شاخه با موفقیت ویرایش شد');
	define('_AM_RMDP_CATEGOLIST',"لسیت شاخه ها");
	define('_AM_RMDP_LNAME','نام');
	define('_AM_RMDP_LACCESS','دسترسی ها');
	define('_AM_RMDP_MODCATEGO','ویرایش شاخه');
	define('_AM_RMDP_DELOK','شاخه با موفقیت حذف شده است');
	define('_AM_RMDP_CONFIRM','آیا مطمئن هستید که می خواهید این شاخه را حذف کنید؟');
	
	define('_AM_RMDP_DOWNSLIST','لیست دانلودها در "%s"');
	define('_AM_RMDP_SOFTCARS','مشخصات');
	define('_AM_RMDP_SOFTOS','سیستم عامل');
	define('_AM_RMDP_SOFTSHOTS','عکس نمایشی');
	define('_AM_RMDP_NEWDOWN','دانلود جدید');
	define('_AM_RMDP_SHOWNEWS','نمایش خبر در بالای ماژول دانلود:');
	
} elseif ($location=='descargas'){
	// SIN CAMBIO //
	define('_AM_RMDP_DOWNSLIST','لیست دانلودها');
	define('_AM_RMDP_SOFTCARS','مشخصات');
	define('_AM_RMDP_SOFTOS','سیستم عامل');
	define('_AM_RMDP_SOFTSHOTS','عکس نمایشی');
	define('_AM_RMDP_NEWDOWN','دانلود جدید');
	define('_AM_RMDP_MODDOWN','ویرایش دانلود');
	define('_AM_RMDP_FNAME','نام:');
	define('_AM_RMDP_SENDBY','فرستاده شده توسط:');
	define('_AM_RMDP_FVERSION','ورژن:');
	define('_AM_RMDP_FLICENSE','لیسانس:');
	define('_AM_RMDP_FFILE','فایل:');
	define('_AM_RMDP_RATING','ارزش:');
	define('_AM_RMDP_FIMG','تصویر:');
	define('_AM_RMDP_FCATEGO','شاخه:');
	define('_AM_RMDP_SELECT','انتخاب ...');
	define('_AM_RMDP_FLONG','توضیحات:');
	define('_AM_RMDP_FSIZE','سایز به کیلوبایت:');
	define('_AM_RMDP_FFAVS','اضافه کردن به علاقه مندی ها:');
	define('_AM_RMDP_FALLOWANONIM','اجازه به میهمانها جهت دانلود:');
	define('_AM_RMDP_FRESALTE','برجسته بودن:');
	define('_AM_RMDP_FURLTITLE','نام صفحه خانگی ثبت کننده:');
	define('_AM_RMDP_FURL','آدرس صفحه خانگی ثبت کننده:');
	
	// NEW IN VERSION 1.3 //
	define('_AM_RMDP_MIRRORS_TITLE','آدرس دیگر فایل (اختیاری )');
	define('_AM_RMDP_FFILEURL',' آدرس فایل (URL):');
	define('_AM_RMDP_FFILEURL_DESC',"اگرفایل مشخص شده است نیازی به این گزینه نیست");
	define('_AM_RMDP_FIMGURL','تصویر (URL):');
	define('_AM_RMDP_FIMGURL_DESC','اگرفایل مشخص شده است نیازی به این گزینه نیست');
	define('_AM_RMDP_FSIZE_DESC','اگر فایل روی هاست داخلی است سایز آن به طور اتوماتیک محاسبه می شود.');
	define('_AM_RMDP_ITEMMIR_TITLE','عنوان %s:');
	define('_AM_RMDP_ITEMMIR_URL','آدرس فایل %s:');
	define('_AM_RMDP_ERRSIZE','سایز این فایل از حد مجاز آن بیشتر است');
	define('_AM_RMDP_MAXSIZE','حداکثر سایز: <strong>%s</strong>');
	define('_AM_RMDP_OSS','سیستم عاملها:');
	
	// SIN CAMBIOS //
	define('_AM_RMDP_ERRNAME','نام دانلود اشتباه است.');
	define('_AM_RMDP_ERRNAMECAR','نام مشخصات اشتباه است.');
	define('_AM_RMDP_ERRVERSION','لطفا ورژن فایل را مشخص کنید.');
	define('_AM_RMDP_ERRVFILE','لطفا فایل را جهت دانلود مشخص کنید');
	define('_AM_RMDP_ERRCATEGO','لطفا شاخه این فایل را جهت دانلود مشخص کنید.');
	define('_AM_RMDP_ERRDESC','لطفا توضیح کوتاهی درباره این دانلود بنویسید.');
	define('_AM_RMDP_ERREXIST','یک فایل با همین نام وجود دارد.');
	define('_AM_RMDP_ERRCAREXIST','مشخصاتی با همین نام وجود دارد');
	define('_AM_RMDP_DOWNOK','دانلود با موفقیت ساخته شد.');
	define('_AM_RMDP_DOWNMODOK','دانلود با موفقیت ویرایش شد');
	define('_AM_RMDP_ERRNOEXIST','این فایل برای دانلود وجود ندارد.');
	define('_AM_RMDP_CONFIRM','آیا مطمئن هستید که می خواهید این دانلود را پاک کنید؟<br><br>Also will be deleted all screenshots.');
	define('_AM_RMDP_DELOK','حذف دانلود با موفقیت انجام شد.');
	define('_AM_RMDP_OSALL','سیستم عامل نامعلوم است');
	define('_AM_RMDP_OSASSIGN','تخصیص سیستم عامل'); 
	define('_AM_RMDP_LISTNAME','نام');
	define('_AM_RMDP_LISTACCESS','دسترسی');
	define('_AM_RMDP_REGISTERED','فقط اعضا');
	define('_AM_RMDP_EVERYBODY','همه');
	
	// Sección para las capturas de pantalla
	define('_AM_RMDP_SHOTLIST','تصویر نمایشی برای "%s"');
	define('_AM_RMDP_SHOTNEW','تصویر نمایشی جدید');
	define('_AM_RMDP_SHOTMOD','ویرایش تصویر نمایشی');
	define('_AM_RMDP_SHOTDOWN','دانلود:');
	define('_AM_RMDP_SHOTSMALL','تصویر کوچک:');
	define('_AM_RMDP_SHOTBIG','تصویر عادی:');
	define('_AM_RMDP_SHOT','تصویر:');
	define('_AM_RMDP_SHOTDESC','توضیحات:');
	define('_AM_RMDP_SHOTERRSB','خطا:لطفا تصویر عادی و کوچک را مشخص کنید');
	define('_AM_RMDP_SHOTNOEXIST','تصویر نمایشی وجود ندارد');
	define('_AM_RMDP_SHOTCONFIRM','آیا مطمئن هستید که می خواهید تصویر نمایشی را حذف کنید؟');
	define('_AM_RMDP_SHOTDEL','تصویر نمایشی با موفقیت حذف گردید');
	
	// Sección de Reviews
	define('_AM_RMDP_REVIEWTITLE','مرور ویرایشگر');
	define('_AM_RMDP_REVIEW','نقد کردن:');
	define('_AM_RMDP_REVIEWOK','نقد شما با موفقیت ارسال شد');	
	
} elseif ($location=='licencias'){
	define('_AM_RMDP_LICEXISTS','لیسانس های موجود');
	define('_AM_RMDP_NEWLIC','لیسانس جدید');
	define('_AM_RMDP_MODLIC','ویرایش لیسانس');
	define('_AM_RMDP_FNAME','نام:');
	define('_AM_RMDP_FURL','خواندن آدرس:');
	define('_AM_RMDP_ERRNAME','نام لیسانس وجود ندارد.');
	define('_AM_RMDP_ERREXIST','لیسانسی با همین نام وجود دارد.');
	define('_AM_RMDP_LICOK','لیسانس با موفقیت ساخته شد.');
	define('_AM_RMDP_LICMODOK','لیسانس با موفقیت ویرایش شد.');
	define('_AM_RMDP_ERRNOEXIST','لیسانس انتخاب شده وجود ندارد.');
	define('_AM_RMDP_DELOK','لیسانس با موفقیت حذف شد');
	define('_AM_RMDP_CONFIRM','آیا شما مطمئن هستید که می خواهید این لیسانس را پاک کنید؟');
} elseif ($location=='plataformas'){
	
	define('_AM_RMDP_OSEXISTS','سیستم عاملهای موجود');
	define('_AM_RMDP_NEWOS','سیستم عامل جدید');
	define('_AM_RMDP_FNAME','نام:');
	define('_AM_RMDP_FIMG','آدرس تصویر:');
	define('_AM_RMDP_ERRNAME','نام سیستم عامل وجود ندارد.');
	define('_AM_RMDP_ERREXIST','سیستم عاملی با همین نام وجود دارد.');
	define('_AM_RMDP_OSOK','سیستم عامل با موفقیت ساخته شد.');
	define('_AM_RMDP_CONFIRM','آیا مطمئن عهستید که می خواهید این سیستم عامل ');
	define('_AM_RMDP_DELOK','سیستم عامل با موفقیت حذف شد.');
	
} elseif ($location=='sponsor'){

	define('_AM_RMDP_SPONSORLIST','لیست اسپانسرها');
	define('_AM_RMDP_SNAME','نام');
	define('_AM_RMDP_SOPTIONS','گزینه ها');
	define('_AM_RMDP_NEWSPONSOR','دانلود اسپانسر جدید');
	define('_AM_RMDP_FDOWN','انتخاب دانلود:');
	define('_AM_RMDP_FTEXT','متن:');
	define('_AM_RMDP_ERRDOWN','خطا:دانلود وجود ندارد.');
	define('_AM_RMDP_ERRTEXT','خطا:متن دانلود اسپانسر وجود ندارد');
	define('_AM_RMDPO_SPONNOEXIST','این دانلود وجود ندارد.');
	define('_AM_RMDP_CONFIRM','آیا مطمون هستید که می خواهید این اسپانسر را حذف کنید؟');

} elseif ($location=='sended'){
	
	define('_RMDP_SENDED_TITLE','دانلودهای ارسال شده توسط اعضا');
	define('_RMDP_NAME','نام');
	define('_RMDP_SENDBY','ارسال شده توسط');
	define('_RMDP_DATE','تاریخ');
	define('_AM_RMDP_ERRNOEXIST','این دانلود وجود ندارد.');
	define('_AM_RMDP_FNAME','نام:');
	define('_AM_RMDP_SENDBY','ارسال شده توسط:');
	define('_AM_RMDP_FVERSION','ورژن:');
	define('_AM_RMDP_FLICENSE','لیسانس:');
	define('_AM_RMDP_FFILE','فایل:');
	define('_AM_RMDP_RATING','ارزش:');
	define('_AM_RMDP_FIMG','تصویر:');
	define('_AM_RMDP_FCATEGO','شاخه:');
	define('_AM_RMDP_SELECT','انتخاب...');
	define('_AM_RMDP_FLONG','توضیحاتن:');
	define('_AM_RMDP_FSIZE','سایز (به بایت):');
	define('_AM_RMDP_FFAVS','اضافه کردن به علاقه مندی ها:');
	define('_AM_RMDP_FALLOWANONIM','اجازه به میهمان ها جهت دانلود:');
	define('_AM_RMDP_FRESALTE','برجسته کردن:');
	define('_AM_RMDP_FURLTITLE','عنوان صفحه خانگی ثبت کننده:');
	define('_AM_RMDP_FURL','آدرس صفحه خانگی ثبت کننده:');
	define('_AM_RMDP_SAVE','ذخیره');
	define('_AM_RMDP_ACEPT','تایید دانلود');
	define('_AM_RMDP_ERRNAME','نام دانلود وجود ندارد');
	define('_AM_RMDP_ERREXIST','دانلودی با همین نامدر همین شاخه وجود دارد');
	define('_AM_RMDP_ERRVERSION','لطفا ورژن فایل را مشخص کنید.');
	define('_AM_RMDP_ERRVFILE','لطفا فایل دانلود را مشخص کنید');
	define('_AM_RMDP_ERRCATEGO','لطفا شاخه این دانلود را مشخص کنید');
	define('_AM_RMDP_SENDOK','دانلود با موفقیت تایید شد');
	define('_RMDP_MAIL_SUBJECT','دانلود شما مورد تایید قرار گرفت');
	define('_AM_RMDP_OSS','سیستم عاملها:');
	// Mensajes y redirecciones
	define('_AM_RMDP_DELCONFIRM','آیا مطمئن هستید که می خواهید این عنصر را پاک کنید؟');
	define('_AM_RMDP_DELOK','این عنصر با موفقیت حذف شد.');
	
	// Nuevo en la version 1.3 //
	define('_AM_RMDP_FFILEURL','آدرس فایل:');
	define('_AM_RMDP_FFILEURL_DESC','اگر فایل مشخص شده است نیازی به این قسمت نیست');
	define('_AM_RMDP_FIMGURL','آدرس تصویر:');
	define('_AM_RMDP_FIMGURL_DESC','اگر تصویر مشخص شده است نیازی به این قسمت نیست');
	define('_AM_RMDP_MAXSIZE','حداکثر سایز: <strong>%s</strong>');
	define('_AM_RMDP_ITEMMIR_TITLE','عنوان %s:');
	define('_AM_RMDP_ITEMMIR_URL','آدرس فایل %s:');
	define('_AM_RMDP_FSIZE_DESC','آگر فایل در هاست داخلی است سایز آن به طور خودکار محاسبه می شود..');
	define('_AM_RMDP_MIRRORS_TITLE','آدرسهای دیگر(اختیاری)');
}
?>

