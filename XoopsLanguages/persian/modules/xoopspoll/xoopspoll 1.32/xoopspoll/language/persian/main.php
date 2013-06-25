<?php
/**
 * Main Definitions
 *
 * @package::    xoopspoll
 * @subpackage:: defines
 * @version::    $Id: main.php 11539 2013-05-13 20:56:06Z zyspec $
 */

/**
 * 	File Name pollresults.php
 */
define("_MD_XOOPSPOLL_TOTALVOTES","همه رای ها: %s");
define("_MD_XOOPSPOLL_TOTALVOTERS","همه رای دهنده ها: %s");

/**
 * File Name index.php
 */
define("_MD_XOOPSPOLL_POLLSLIST","فهرست نظر سنجی ها");
define("_MD_XOOPSPOLL_ALREADYVOTED","متاسفانه، شما یک بار رای داده اید.");
define("_MD_XOOPSPOLL_THANKSFORVOTE","با تشکر از رای شما");
define("_MD_XOOPSPOLL_SORRYEXPIRED","متاسفانه تاریخ شرکت در این نظر سنجی به اتمام رسیده است.");
define("_MD_XOOPSPOLL_YOURPOLLAT","%s، نظر سنجی شما در سایت %s"); // 1st %s is user name, 2nd %s is site name
define("_MD_XOOPSPOLL_PREV","قبلی");
define("_MD_XOOPSPOLL_NEXT","بعدی");
define("_MD_XOOPSPOLL_POLLQUESTION","سوال نظر سنجی");
define("_MD_XOOPSPOLL_VOTERS","همه رای دهنده ها");
define("_MD_XOOPSPOLL_VOTES","همه رای ها");
define("_MD_XOOPSPOLL_EXPIRATION","تاریخ به پایان رسیدن نظر سنجی");
define("_MD_XOOPSPOLL_EXPIRED","به اتمام رسیده است");
define('_MD_XOOPSPOLL_MUSTLOGIN',"باید برای رای دادن در این نظر سنجی وارد سایت شده باشید.");

/**
 * File Name xoopspollrenderer.php
 */
// %s represents date
define("_MD_XOOPSPOLL_ENDSAT","پایان رای گیری در تاریخ %s خواهد بود");
define("_MD_XOOPSPOLL_ENDEDAT","نظرسنجی در تاریخ %s به پایان رسیده است");
define("_MD_XOOPSPOLL_VOTE","رای دهید!");
define("_MD_XOOPSPOLL_RESULTS","نتایج");

// 1.32

/**
 * File name /admin/index.php
 */
define("_MD_XOOPSPOLL_DASHBOARD","آمار ماژول نظر سنجی");
define("_MD_XOOPSPOLL_TOTALPOLLS","همه نظر سنجی ها: <strong>%s</strong> ");
define("_MD_XOOPSPOLL_TOTALACTIVE","نظر سنجی های فعال: <strong>%s</strong> ");
define('_MD_XOOPSPOLL_TOTALWAITING',"نظر سنجی های شروع نشده: <strong>%s</strong> ");
define("_MD_XOOPSPOLL_TOTALEXPIRED","نظر سنجی های منقضی شده: <strong>%s</strong> ");

// 1.40
define('_MD_XOOPSPOLL_VOTE_NOW',"روی این دکمه کلیک کنید تا رای دهید!");
define('_MD_XOOPSPOLL_ERROR_INVALID_POLLID',"شماره شناسه نظر سنجی poll_id اشتباه است.");
define('_MD_XOOPSPOLL_CANNOTVOTE',"شما اجازه رای دادن در این نظر سنجی را ندارید.");
define('_MD_XOOPSPOLL_HIDE_NEVER',"هرگز نتایج را مخفی نکن");
define('_MD_XOOPSPOLL_HIDE_ALWAYS',"همیشه نتایج را مخفی کن");
define('_MD_XOOPSPOLL_HIDE_VOTED',"نتایج را فقط بعد از رای دادن نمایش بده");
define('_MD_XOOPSPOLL_HIDE_END',"نتایج را فقط وقتی نظر سنجی منقضی شد نمایش بده");
define('_MD_XOOPSPOLL_HIDE_ALWAYS_MSG',"نتایج این نظر  سنجی مخفی است و هرگز نمایش داده نخواهد شد.");
define('_MD_XOOPSPOLL_HIDE_VOTED_MSG',"نتایج این نظر سنجی فقط بعد از رای دادن شما قابل نمایش خواهد بود.");
define('_MD_XOOPSPOLL_HIDE_END_MSG',"نتایج این نظر سنجی فقط وقتی نظر سنجی به اتمام برسد یعنی منقضی شود قابل نمایش خواهد بود.");
define('_MD_XOOPSPOLL_YOURVOTEAT',"%s, رای شما در %s ثبت شد"); // 1st %s is user name, 2nd %s is site name
define('_MD_XOOPSPOLL_VOTE_ERROR',"اشکالی در ثبت رای شما رخ داد. لطفا دوباره رای دهید.");
define('_MD_XOOPSPOLL_MULTITEXT',"لطفا فقط حداکثر تا %d گزینه را انتخاب کنید");
define('_MD_XOOPSPOLL_OBSCURED',"مخفی");

//Mail Voter
define('_MD_XOOPSPOLL_ENDED_AT',"نظر سنجی در تاریخ %s به اتمام رسیده است.");
define('_MD_XOOPSPOLL_ENDS_ON',"نظر سنجی در تاریخ %s به اتمام میرسد یعنی منقضی میشود.");
define('_MD_XOOPSPOLL_SEE_AT',"شما میتوانید نتایج این نظر سنجی را در اینجا مشاهده کنید:");
define('_MD_XOOPSPOLL_SEE_AFTER',"شما میتوانید نتایج این نظر سنجی را پس از این تاریخ مشاهده کنید:");