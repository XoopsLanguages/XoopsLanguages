<?php
//////////////////////////////////////////////////////////////////////////////
// $Id: modinfo.php,v 1.5 23/11/2005 13:48:15 BitC3R0 Exp $                 //
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
define("_MI_RMDP_NAME","RMSOFT دانلود پلاس");
define("_MI_RMDP_DESC","ماژول دانلود برای مدیران حرفه ای");

/**
 * Menus del administrador
 */
define('_MI_RMDP_AM1','شاخه های موجود');
define('_MI_RMDP_AM2','شاخه جدید');
define('_MI_RMDP_AM3','دانلودهای موجود');
define('_MI_RMDP_AM4','دانلود جدید');
define('_MI_RMDP_AM5','دانلودهای اسپانسر');
define('_MI_RMDP_AM8','سیستم عاملها');
define('_MI_RMDP_AM9','لیسانسها');
define('_MI_RMDP_AM10','دانلودهای رسیده');
define('_MI_RMDP_AM11','به روز شده');

/**
 * SubMenu
 */
define('_MI_SEND_DOWNLOAD','ارسال دانلود');
define('_MI_SENDED_DOWNS','دانلودهای من');

/**
 * Opciones de Configuraci&oacute;n
 */
define('_MI_RMDP_MODTITLE','عنوان ماژول:');
define('_MI_RMDP_CATGOIMGW','عرض تصویر شاخه:');
define('_MI_RMDP_SHOWCATIMG','نمایش تصویر شاخه:');
define('_MI_RMDP_DOWNIMGW','عرض تصویر دانلود:');
define('_MI_RMDP_SHOTIMGW','عرض تصویر نمایشی دانلود:');
define('_MI_RMDP_SHOTIMGBIGW','عرض تصاویر عادی دانلود:');
define('_MI_RMDP_SHOTIMGBIGD','فقط موقعی مفید است که لینک مستقیم به تصاویر غیر فعال باشد.');
define('_MI_RMDP_SHOTLINK','لینک مستقیم به تصاویر:');
define('_MI_RMDP_CATEGODAYSNEW','روزهایی که باعث می گردد این شاخه به عنوان جدید تلقی گردد:');
define('_MI_RMDP_CARACTDAYSNEW','روزهایی که باعث می گردد این عنوان جدید تلقی گردد:');
define('_MI_RMDP_SHOTDAYSNEW','روزهایی که باعث می گردد این تصویر نمایشی جدید تلقی گردد:');
define('_MI_RMDP_SENDDOWN','فعال کردن دانلود ارسال شده:');
define('_MI_RMDP_SENDANONIMO','میهمانها می توانند دانلود ارسال کنند:');
define('_MI_RMDP_CATWITHNEWS','تعداد شاخه ها با خبر در صفحه اصلی ماژول:');
define('_MI_RMDP_SPONSORNUM','تعداد دانلودهای اسپانسر برای نمایش:');
define('_MI_RMDP_FAVORITESNUM','تعداد دانلود برای علاقه مندیها:');
define('_MI_RMDP_POPULARNUM','تعداد دانلودهای محبوب:');
define('_MI_RMDP_LENDESC','طول توضیحات دانلودهای اسپانسر:');
define('_MI_RMDP_SHOTLIMIT','تعداد تصاویر نمایشی برای دانلودها:');
define('_MI_RMDP_SUBCATLIMIT','تعداد نمایش شاخه های اصلی:');
define('_MI_RMDP_RESALTEBG','پس زمینه دانلودهای برجسته (HEX):');
define('_MI_RMDP_LIMITRESULT','نتایج برای هر صفحه:');
define('_MI_RMDP_UPDATEDAYS','روزهایی که باعث می شود یک عنصر  به عنوان به روز شده تلقی گردد:');
define('_MI_RMDP_DOWNNEW','روزهایی که باعث می شود یک دانلود جدید تلقی گردد:');
define('_MI_RMDP_DATEFORMAT','نحوه نمایش تاریخ:');
define('_MI_RMDP_POPULARNEEDS','تعداد دانلودهایی که باعث می شود یک عنصر به عنوان محبوب ترین  تلقی گردد:');
define('_MI_RMDP_USERVOTE','اجازه به میهمانها برای رأی دادن');
define('_MI_RMDP_OPENWINDOW','نحوه دانلودها:');
define('_MI_RMDP_OPENSAME','در همان پنجره باز شود');
define('_MI_RMDP_OPENNEW','در یک پنجره جدید باز شود');
define('_MI_RMDP_SHOTCOLS','تعداد ستون برای تصاویر:');
define('_MI_RMDP_TOPPOP','تعداد دانلودهای محبوب');
define('_MI_RMDP_TOPFAV','تعداد دانلودهای مورد علاقه');
define('_MI_RMDP_TOPRATE','تعداد دانلودهای با ارزش');
define('_MI_RMDP_SENDMAIL','اطلاع رسانی توسط ایمیل وقتی یک دانلود جدید ارسال می شود');
define('_MI_RMDP_BODYMAIL','متن ایمیل برای دانلودهای مورد تأیید:');
define('_MI_RMDP_BORKENINFO','متن اطلاع رسانی برای گزارشات خرابی لینک دانلود');

// Bloques
define('_MI_RMDP_RECENT_TITLE','دانلودهای جدید');
define('_MI_RMDP_POPULARTITLE','بهترین دانلودها');
define('_MI_RMDP_UPDATETITLE','دانلودهای به روز شده');
define('_MI_RMDP_RATEDTITLE','با ارزش');
define('_MI_RMDP_LASTDOWN','دانلود جدید');

////////////////////////////////////////////
// NUEVOS O MODIFICADOS EN LA VERSIÓN 1.3 //
////////////////////////////////////////////
define('_MI_RMDP_BANNERS','فعال کردن بنر در این ماژول:');
define('_MI_RMDP_BANNERS_CODE','کدهای بنر:');
define('_MI_RMDP_CONFIGCAT_IMGS','ترکیب تصاویر');
define('_MI_RMDP_CONFIGCAT_DOWNS','ترکیب دانلودها');
define('_MI_RMDP_SENDFILES','اجازۀ آپلود:');
define('_MI_RMDP_SENDFILE_DESC','<span style="font-size: 10px;">با فعال کردن این گزینه کاربران میتوانند مستقیما روی سرور فایل آپلود کنند</span>');
define('_MI_RMDP_SENDIMG','اجازه آپلود تصویر:');
define('_MI_RMDP_SENDIMG_DESC','با فعال کردن این گزینه کاربران می توانند مستقیما روی سرور عکس آپلود کنند');
define('_MI_RMDP_SHOTLINK_DESC','<span style="font-size: 10px;">با فعال کردن این گزینه کاربران می توانند فایل عکس خود را برای نمایش در صفحه ماژول  مستقیما ارسال کنند.</span>');
define('_MI_RMDP_SOFTDIR','Uploads directory:');
define('_MI_RMDP_SOFTDIR_DESC','<span style="font-size: 10px;">مسیری که فایلهای ارسالی کاربران در آنجا قرار می گیرد.<br />تگ های مفید:<br />{XOOPS_PATH} = Xoops path<br />{RMDP_PATH} = RMSOFT Downloads Plus Path</span>');
define('_MI_RMDP_MIRRORSNUM','حداکثر تعداد "آدرسهای دیگر" برای دانلود:');
define('_MI_RMDP_MIRRORSNUM_DESC','<span style="font-size: 10px;">تعداد سایتهای دیگر برای دانلود(mirrors).</span>');
define('_MI_RMDP_FILESIZE','حداکثر سایز فایل:');
define('_MI_RMDP_SIZEUNIT','واحد سایز فایل:');
define('_AM_RMDP_EDITOR','نوع ویرایشگر برای توضیحات:');
define("_MI_RMDP_FORM_COMPACT","Compact");
define("_MI_RMDP_FORM_DHTML","DHTML");
define("_MI_RMDP_FORM_SPAW","spaw Editor");
define("_MI_RMDP_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_RMDP_FORM_FCK","FCK Editor");
define("_MI_RMDP_FORM_KOIVI","Koivi Editor");
define("_MI_RMDP_FILETYPES","پسوند مجاز فایل:");
define("_MI_RMDP_FILETYPES_DESC","با '|' موارد را جدا کنید (.zip|.tar|etc)");
define('_MI_RMDP_RETARDO','تأخیر برای شروع دانلود:');
define('_MI_RMDP_RETARDO_DESC','به ثانیه.');
define('_MI_RMDP_BODYMAIL_DESC','<span style="font-size: 10px;">تگ های مفید:<br />{USER} = نام نمایشی کاربر.<br />{DOWN} = نام دانلود.<br />{LINK} = لینک دانلود.<br />{URL} = آدرس زوپس.</span>');
?>

