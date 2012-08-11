<?php
/**
 * Name: admin.php
 * Description: Xoops FAQ module admin language defines
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package : XOOPS
 * @Module : Xoops FAQ
 * @subpackage : Module Language
 * @since 2.3.0
 * @author John Neill
 * @version $Id: admin.php 0000 10/04/2009 09:05:06 John Neill $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * Icons
 */
define('_XO_LA_EDIT','ویرایش این مورد' );
define('_XO_LA_DELETE','حذف این مورد' );
define('_XO_LA_CREATENEW','ساخت یک مورد جدید' );
define('_XO_LA_MODIFYITEM','ویرایش: %s' );

/**
 * Content
 */
define('_XO_LA_CONTENTS_HEADER','مدیریت پرسش های همگانی' );
define('_XO_LA_CONTENTS_SUBHEADER','' );
define('_XO_LA_CONTENTS_LIST_DSC','' );
define('_XO_LA_CONTENTS_ID','#' );
define('_XO_LA_CONTENTS_TITLE','عنوان مطلب' );
define('_XO_LA_CONTENTS_WEIGHT','وزن چینش' );
define('_XO_LA_CONTENTS_PUBLISH','منتشر شده' );
define('_XO_LA_CONTENTS_ACTIVE','فعال' );
define('_XO_LA_ACTIONS','عملکرد ها' );
define('_XO_LAE_CONTENTS_CATEGORY','شاخه مطلب:' );
define('_XO_LAE_CONTENTS_CATEGORY_DSC','لطفا شاخه ای را که میخواهید این مطلب درون آن قرار داشته باشد انتخاب کنید' );
define('_XO_LAE_CONTENTS_TITLE','عنوان مطلب:' );
define('_XO_LAE_CONTENTS_TITLE_DSC','عنوان این مورد را وارد کنید.' );
define('_XO_LAE_CONTENTS_CONTENT','بدنه مطلب:' );
define('_XO_LAE_CONTENTS_CONTENT_DSC','' );
define('_XO_LAE_CONTENTS_PUBLISH','زمان مطلب:' );
define('_XO_LAE_CONTENTS_PUBLISH_DSC','زمان انتشار مطلب را انتخاب کنید' );
define('_XO_LAE_CONTENTS_WEIGHT','وزن چینش مطلب:' );
define('_XO_LAE_CONTENTS_WEIGHT_DSC','وزن چینش این مطلب را وارد کنید. ' );
define('_XO_LAE_CONTENTS_ACTIVE','فعال بودن این مطلب:' );
define('_XO_LAE_CONTENTS_AVTIVE_DSC','مشخص کنید این مطلب نمایش داده شود یا خیر' );
define('_XO_LAE_DOHTML','نمایش Html' );
define('_XO_LAE_BREAKS','تبدیل خط شکسته به Xoopskreaks' );
define('_XO_LAE_DOIMAGE','نمایش تصاویر زوپس' );
define('_XO_LAE_DOXCODE','نمایش کد های زوپس' );
define('_XO_LAE_DOSMILEY','نمایش لبخند های زوپس' );

/**
 * Category
 */
define('_XO_LA_ADDCAT','اضافه کردن شاخه' );
define('_XO_LA_CATEGORY_HEADER','مدیریت شاخه های پرسش ها' );
define('_XO_LA_CATEGORY_SUBHEADER','' );
define('_XO_LA_CATEGORY_DELETE_DSC','شما میخواهید این مطلب را حذف کنید. با کلیک بر روی دکمه لفو این عمل را لفو کنید و یا میتوانید ادامه دهید.<br /><br />این عمل برگشت پذیر نیست.' );
define('_XO_LA_CATEGORY_EDIT_DSC','حالت ویرایش: شما در این قسمت میتوانید این عنوان را ویرایش کنید. با کلبک بر روی دکمه ارسال تغییرات خود را ذخیره کنید و یا با کلیک بر روی دکمه لغو این مطلب رو بدون تغییر حفظ کنید.' );
define('_XO_LA_CATEGORY_LIST_DSC','' );
define('_XO_LA_CATEGORY_ID','#' );
define('_XO_LA_CATEGORY_TITLE','عنوان' );
define('_XO_LA_CATEGORY_WEIGHT','وزن چینش' );
define('_XO_LA_ACTIONS','غملکرد ها' );
define('_XO_LAE_CATEGORY_TITLE','عنوان شاخه:' );
define('_XO_LAE_CATEGORY_TITLE_DSC','' );
define('_XO_LAE_CATEGORY_WEIGHT','وزن چینش شاخه:' );
define('_XO_LAE_CATEGORY_WEIGHT_DSC','' );

/**
 * Buttons
 */
define('_XO_LA_CREATENEW','حالا بساز' );
define('_XO_LA_NOLISTING','هیچ چیز یافت نشد' );

/**
 * Database and error
 */
define('_XO_LA_FAQ_SUBERROR','ما با یک خطا مواجه شده ایم<br />' );
define('_XO_LA_RUSURECAT','آیا شما میخواهید این شاخه و تمام پرسش های درون آن را حذف کنید؟' );
define('_XO_LA_DBSUCCESS','پایگاه داده ها با موفقیت به روز شد!' );
define('_XO_LA_ERRORNOCATEGORY','خطا: نام شاخه وارد نشده است , لطفا برگردید و نام شاخه را وارد کنید' );
define('_XO_LA_ERRORCOULDNOTADDCAT','خطا: ناتوان در اضافه نمودن این شاخه به پایگاه داده ها.' );
define('_XO_LA_ERRORCOULDNOTDELCAT','خطا: ناتوان در حذف شاخه مورد نظر.' );
define('_XO_LA_ERRORCOULDNOTEDITCAT','خطا: ناتوان در ویرایش مورد خواسته شده.' );
define('_XO_LA_ERRORCOULDNOTDELCONTENTS','خطا: ناتوان در حذف مطالب این پرسش.' );
define('_XO_LA_ERRORCOULDNOTUPCONTENTS','خطا: ناتوان در به روز رسانی مطالب این پرسش.' );
define('_XO_LA_ERRORCOULDNOTADDCONTENTS','خطا: ناتوان در اضافه کردن مطالب این پرسش .' );
define('_XO_LA_NOTHTINGTOSHOW','هیچ گزینه ای برای نمایش وجود ندارد' );
define('_XO_LA_ERRORNOCAT','خطا: هنوز هیچ شاخه ای ساخته نشده است. قبل از ساخت یک پرسش و پاسخ جدید شما باید ابتدا یک شاخه بسازید.' );

?>