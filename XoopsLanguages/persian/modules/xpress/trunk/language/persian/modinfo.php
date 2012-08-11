<?php
if( ! defined( 'XPRESS_MODINFO_LANG_INCLUDED' ) ) {
	define('XPRESS_MODINFO_LANG_INCLUDED' , 1 ) ;

	// The name of this module
	define("_MI_XPRESS_NAME","XPress");

	// A brief description of this module
	define("_MI_XPRESS_DESC","وردپرس برای زوپس");

	define("_MI_XPRESS_ADMENU_INDEX","صفحه اصلی");
	define("_MI_XPRESS_ADMENU_PERMISSION","دسترسی ها");
	define("_MI_XPRESS_ADMENU_BLOCK","بلاک ها");
	define("_MI_XPRESS_ADMENU_OPTION","تنظیمات وردپرس");
	define("_MI_XPRESS_ADMENU_GENERAL","تنظیمات عمومی");	
	define("_MI_XPRESS_UPDATE","به روز رسانی ماژول");
	define("_MI_XPRESS_GO_MODULE","برو به ماژول");
	define("_MI_XPRESS_INFO","اطلاعات ماژول");
	define("_MI_XPRESS_ADMENU_DISPLAY","نمایش تنظیمات");
		
	// Sub menu titles
	define("_MI_XPRESS_MENU_SUBMIT","ارسال پست");
	define("_MI_XPRESS_MENU_EDIT","مدیریت");

	// Configs
	define("_MI_XPRESS_ENABLE_MU","فعال کردن حالت چندکاربره");
	define("_MI_XPRESS_ENABLE_MU_DESC","پشتیبانی از حالت چندکاربره");

	define("_MI_XPRESS_NUM_POSTS","تعداد پست های نمایش داده شده در نوار کناری");
	define("_MI_XPRESS_NUM_POSTS_DESC","");


	define("_MI_XPRESS_NUM_COMMENTS","تعداد نظر های نمایش داده شده در نوار کناری");
	define("_MI_XPRESS_NUM_COMMENTS_DESC","");

	define("_MI_XPRESS_NUM_AUTHORS","تعداد نویسندگان نمایش داده شده در نوار کناری");
	define("_MI_XPRESS_NUM_AUTHORS_DESC","");

	define("_MI_XPRESS_LENG_COMMENT","طول نظر ها برای نمایش در نوار کناری");
	define("_MI_XPRESS_LENG_COMMENT_DESC","");

	define("_MI_XPRESS_STYLE","استایل نمایش داده شده");
	define("_MI_XPRESS_STYLE_DESC","استایل زوپس , استایل وردپرس, یا انتخاب به وسیله کاربر");

	define("_MI_XPRESS_THEMESET","تنظیمات قالب ماژول");
	define("_MI_XPRESS_THEMESET_DESC","Module-wide, select '"._NONE."' will use site-wide theme");

	define("_MI_XPRESS_RSSCHARSET","RSS charset");
	define("_MI_XPRESS_RSSCHARSET_DESC","Charset for creating RSS/ATOM feeds");

	define("_MI_XPRESS_SHOWEXCERPT","Show excerpt");
	define("_MI_XPRESS_SHOWEXCERPT_DESC","Display excerpt instead of full article on index page");

	define("_MI_XPRESS_LENG_EXCERPT","Excerpt number");
	define("_MI_XPRESS_LENG_EXCERPT_DESC","Excerpt number on index page");

	define("_MI_XPRESS_EXCERPT_MORE","[more...] is displayed in the excerpt. ");
	define("_MI_XPRESS_EXCERPT_MORE_DESC","[More...] is displayed by the excerpt display. ");

	define("_MI_XPRESS_USE_MOD_DATE","modified_date is used by the whatsnew module.");
	define("_MI_XPRESS_USE_MOD_DATE_DESC","When [yes] post_date is used when modified_date is used, [No] is selected. ");

	define("_MI_XPRESS_AUTHOR_COUNT","Count of post author's view");
	define("_MI_XPRESS_AUTHOR_COUNT_DESC","The post author's inspection number count");

	define("_MI_XPRESS_USE_WP_LEVEL","Use WordPress users role");
	define("_MI_XPRESS_USE_WP_LEVEL_DESC","YES: WordPress User Role No: XOOPS Groupe Level");

	// snoopy
	define("_MI_XPRESS_CHECK_BLOCK","block is check");
	define("_MI_XPRESS_CHECK_BLOCKL_DESC","The state of Fetch of the block arranged outside the module is output to page source as a comment.");

	define("_MI_XPRESS_FETCH_REDIR","The maximum value of redirecting fetch");
	define("_MI_XPRESS_FETCH_REDIR_DESC","We will recommend here to be adjusted to 0 when operation is steady to avoid redirecting not intended to some degree. ");

	define("_MI_XPRESS_FETCH_MAX","maximum value of retrying fetch");
	define("_MI_XPRESS_FETCH_MAX_DESC","The maximum value of Fetch retrying of block arranged outside module");

	define("_MI_XPRESS_BL_CACHE_DIR","Cache directory of block");
	define("_MI_XPRESS_BL_CACHE_DIR_DESC","The cash directory of the block is set. It is the last '/' unnecessary.");

	define("_MI_XPRESS_BL_CACHE_TIME","Cache time of block");
	define("_MI_XPRESS_BL_CACHE_TIME_DESC","The cash time of the block (minute) is set.");

	//PROXY
	define("_MI_XPRESS_PROXY_HOST","Proxy nhost name");
	define("_MI_XPRESS_PROXY_HOST_DESC","The host name with Proxy is specified with FQDN when the site is Proxy passing. Please make it to an empty column when you do not use Proxy. ");

	define("_MI_XPRESS_PROXY_PORT","Proxy port");
	define("_MI_XPRESS_PROXY_PORT_DESC","The port number of Proxy is set when the site is Proxy passing.");

	define("_MI_XPRESS_PROXY_USER","Proxy user name");
	define("_MI_XPRESS_PROXY_USER_DESC","The user name of Proxy is set when the site is Proxy passing.");

	define("_MI_XPRESS_PROXY_PASS","Proxy password");
	define("_MI_XPRESS_PROXY_PASS_DESC","The password of Proxy is set when the site is Proxy passing.");

	define("_MI_XPRESS_F_NO_DOMEIN","The domain name is not used to acquire the block URL");
	define("_MI_XPRESS_F_NO_DOMEIN_DESC","When name resolution doesn't occur for in, DNS is made [YES]");

	define("_MI_XPRESS_BL_FETCH_IP","IP address is used for the block acquisition");
	define("_MI_XPRESS_BL_FETCH_IP_DESC","'localhost' is used for [No]. (It is an effective option only at [YES] though the domain name is not used to acquire the block URL. )");

	define("_MI_XPRESS_NAVI_RL","The Navi link is displayed oppositely. ");
	define("_MI_XPRESS_NAVI_RL_DESC","The link to an old post is displayed right when setting it to 'No', and the link to a new post is displayed left. The display reverses when setting it to 'yes'. ");

	define("_MI_XPRESS_NAVI_TITLE","Post link display the title");
	define("_MI_XPRESS_NAVI_TITLE_DESC","Post link display the title. 'No' is selected, 'Prev Post' or 'Next Post' is displayed.");

	define("_MI_USE_WP_THEMES","USE WordpPress Themes");
	define("_MI_USE_WP_THEMES_DESC","The theme of WordpPress is used as a template of the display at the XOOPS mode. ");

	define("_MI_USE_WP_THEMES_SIDEBAR","Behavior of sidebar when theme of WordpPress is used");
	define("_MI_USE_WP_THEMES_SIDEBAR_DESC","When the theme of WordpPress is used as a template of the display, the sidebar of the theme is displayed. ");

	define("_MI_XPRESS_CUSTOM_TEMP","تمپلیت سفارشی تگ");
	define("_MI_XPRESS_CUSTOM_TEMP_DESC","قالب XPressME در مسیر module/templates/wordpress/themes/directory به صورت سفارشی ساخته شده است برای تگ های تمپلیت اسمارتی و نام شاخه در باکس مقابل وارد شود. (این شاخه فقط برای بیان مثال ساخته شده است. )");

	define("_MI_XPRESS_SQL_DEBUG","Display SQL Query(For debug)");
	define("_MI_XPRESS_SQL_DEBUG_DESC","Display XPressME SQL Query Strings(For debug)");

	define("_MI_XPRESS_CURL_PATH","cURL Path");
	define("_MI_XPRESS_CURL_PATH_DESC","Passing to the cURL library to which snoopy refers when SSL is used is specified.");

	// Block Name
	define("_MI_XPRESS_BLOCK_CALENDAR","تقویم");
	define("_MI_XPRESS_BLOCK_SIDEBAR","Sidebar ناوبری");
	define("_MI_XPRESS_BLOCK_AUTHORS","لیست نویسندگان");
	define("_MI_XPRESS_BLOCK_POSTS","جدید ترین عنوان پست ها");
	define("_MI_XPRESS_BLOCK_CONTENT","جدید پست های نظر دار");
	define("_MI_XPRESS_BLOCK_COMMENTS","جدید ترین نظر ها");
	define("_MI_XPRESS_BLOCK_SEARCH","جستجو");
	define("_MI_XPRESS_BLOCK_CATEGORY","شاخه");
	define("_MI_XPRESS_BLOCK_ARCHIVE","آرشیو");
	define("_MI_XPRESS_BLOCK_LINKS","لینک");
	define("_MI_XPRESS_BLOCK_PAGE","صفحه");
	define("_MI_XPRESS_BLOCK_META","متا");	
	define("_MI_XPRESS_BLOCK_POPULAR","لیست پست های محبوب");	
	define("_MI_XPRESS_BLOCK_TAG","توده تگ");
	
	// add config option

	define("_MI_XPRESS_USE_D3FORUM","d3forum use");
	define("_MI_XPRESS_USE_D3FORUM_DESC","d3forum is used for the comment system. ");
	define("_MI_XPRESS_D3FORUM_DIR","d3forum DIR name");
	define("_MI_XPRESS_D3FORUM_DIR_DESC","Directory name that installs d3forum(since modules directory) *When you use d3forum for the comment system");
	define("_MI_XPRESS_D3FORUM_ID","Forum ID of d3forum");
	define("_MI_XPRESS_D3FORUM_ID_DESC","Forum ID of d3forum used to comment. *When you use d3forum for the comment system");
	define("_MI_XPRESS_D3F_VIEW","View of comment-integration");
	define("_MI_XPRESS_D3F_VIEW_DESC","View of comment-integration");
	define("_MI_XPRESS_D3F_NUM","Max posts displayed in comment-integration");
	define("_MI_XPRESS_D3F_NUM_DESC","Max posts displayed in comment-integration");
	define("_MI_XPRESS_D3F_ORDER","Order of comment-integration");
	define("_MI_XPRESS_D3F_ORDER_DESC","Order of comment-integration");


	// add enhanced menu
	define("_MI_XPRESS_ADMENU_ENHANCED","منو تقویت");

	define("_MI_XPRESS_UPLOAD_ROOT","upload-root is wordpress path");
	define("_MI_XPRESS_UPLOAD_ROOT_DESC",'"YES" is use WordPres-install-path. "NO" is use XOOPS-upload-path.');


// Notify Categories
define('_MI_XPRESS_NOTCAT_GLOBAL','ALL');
define('_MI_XPRESS_NOTCAT_GLOBALDSC','Notification option in the entire blog');
define('_MI_XPRESS_NOTCAT_CAT','Category under selection');
define('_MI_XPRESS_NOTCAT_CATDSC','Notification option to category under selection');
define('_MI_XPRESS_NOTCAT_AUTHOR','Author who is selecting it'); 
define('_MI_XPRESS_NOTCAT_AUTHORDSC','Notification option to author who is selecting it');
define('_MI_XPRESS_NOTCAT_POST','Article on display'); 
define('_MI_XPRESS_NOTCAT_POSTDSC','Notification option to article on display');

// Each Notifications
define('_MI_XPRESS_NOTIFY_GLOBAL_WAITING','Approval waiting');
define('_MI_XPRESS_NOTIFY_GLOBAL_WAITINGCAP','It notifies when the contribution and the edit that requires approving are done. Manager exclusive use');
define('_MI_XPRESS_NOTIFY_GLOBAL_WAITINGSBJ','[{X_SITENAME}] {X_MODULE}: Approval waiting');

define('_MI_XPRESS_NOTIFY_GLOBAL_NEWPOST','Contribution of article');
define('_MI_XPRESS_NOTIFY_GLOBAL_NEWPOSTCAP','It notifies when the article is contributed in either of the entire this blog. ');
define('_MI_XPRESS_NOTIFY_GLOBAL_NEWPOSTSBJ','[{XPRESS_BLOG_NAME}]Article: "{XPRESS_POST_TITLE}"');

define('_MI_XPRESS_NOTIFY_GLOBAL_NEWCOMMENT','Comment contribution');
define('_MI_XPRESS_NOTIFY_GLOBAL_NEWCOMMENTCAP','It notifies when the comment is contributed in either of the entire this blog. ');
define('_MI_XPRESS_NOTIFY_GLOBAL_NEWCOMMENTSBJ','[{XPRESS_BLOG_NAME}]Comment: "{XPRESS_POST_TITLE}"');

define('_MI_XPRESS_NOTIFY_CAT_NEWPOST','Article contribution to selection category');
define('_MI_XPRESS_NOTIFY_CAT_NEWPOSTCAP','It notifies when there is an article contribution in this category.');
define('_MI_XPRESS_NOTIFY_CAT_NEWPOSTSBJ','[{XPRESS_BLOG_NAME}]Article: "{XPRESS_POST_TITLE}" (Condition:Category="{XPRESS_CAT_TITLE}")');

define('_MI_XPRESS_NOTIFY_CAT_NEWCOMMENT','Comment contribution to selection category');
define('_MI_XPRESS_NOTIFY_CAT_NEWCOMMENTCAP','It notifies when there is a comment contribution in this category. ');
define('_MI_XPRESS_NOTIFY_CAT_NEWCOMMENTSBJ','[{XPRESS_BLOG_NAME}]Comment: (Article"{XPRESS_POST_TITLE}") (Condition:Category="{XPRESS_CAT_TITLE}")');

define('_MI_XPRESS_NOTIFY_AUT_NEWPOST','Article contribution by selection contributor');
define('_MI_XPRESS_NOTIFY_AUT_NEWPOSTCAP','It notifies when there is an article contribution from this contributor. ');
define('_MI_XPRESS_NOTIFY_AUT_NEWPOSTSBJ','[{XPRESS_BLOG_NAME}]Article: "{XPRESS_POST_TITLE}" (Condition:Author="{XPRESS_AUTH_NAME}")');

define('_MI_XPRESS_NOTIFY_AUT_NEWCOMMENT','Comment contribution to selection contributor article');
define('_MI_XPRESS_NOTIFY_AUT_NEWCOMMENTCAP','It notifies when the comment contribution is in the article by this contributor. ');
define('_MI_XPRESS_NOTIFY_AUT_NEWCOMMENTSBJ','[{XPRESS_BLOG_NAME}]Comment: (Article"{XPRESS_POST_TITLE}") (Condition:Author="{XPRESS_AUTH_NAME}")');

define('_MI_XPRESS_NOTIFY_POST_EDITPOST','Article change');
define('_MI_XPRESS_NOTIFY_POST_EDITPOSTCAP','It notifies when there is a change in the article on the display. ');
define('_MI_XPRESS_NOTIFY_POST_EDITPOSTSBJ','[{XPRESS_BLOG_NAME}]Article: "{XPRESS_POST_TITLE}"Change (Condition:Article specification)');

define('_MI_XPRESS_NOTIFY_POST_NEWCOMMENT','Comment contribution to article');
define('_MI_XPRESS_NOTIFY_POST_NEWCOMMENTCAP','It notifies when the comment is contributed in the article on the display. ');
define('_MI_XPRESS_NOTIFY_POST_NEWCOMMENTSBJ','[{XPRESS_BLOG_NAME}]Comment: (Article"{XPRESS_POST_TITLE}") (Condition:Article specification)');


}
?>