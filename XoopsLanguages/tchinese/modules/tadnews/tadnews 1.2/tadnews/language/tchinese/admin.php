<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2007-11-04
// $Id$
// ------------------------------------------------------------------------- //

define("_MA_TADNEW_SAVE_CATE","儲存");
define("_MA_TADNEW_FUNCTION","功能");
define("_MA_TADNEW_EDIT","編輯");
define("_MA_TADNEW_DEL","刪除");
define("_MA_TADNEW_MOVE","搬移文章");
define("_MA_TADNEW_MOVE_TO","搬移");
define("_MA_TADNEW_MOVE_TO_WHERE","要將「%s」的文章搬移到哪個分類下？");
define("_MA_TADNEW_ADD","新增文章");
define("_MA_TADNEW_STATUS","狀態");
define("_MA_TADNEW_OUT_DATE","過期");
define("_MA_TADNEW_ALL_OK","全部開放");

define("_MA_TADNEW_NO_DIRNAME","無目錄名稱");
define("_MA_TADNEW_MKDIR_ERROR","無法建立 %s 目錄，請手動建立，並開啟匿名寫入權限（777）");

//index.php
define("_MA_TADNEW_SAVE_NEWS_SN","文章編號");
define("_MA_TADNEW_NEWS_UID","發佈者");
define("_MA_TADNEW_LIST","已發佈的文章列表");

//post.php
define("_MA_TADNEW_ADD_NEWS","新增一篇文章");
define("_MA_TADNEW_NEWS_TITLE","文章標題");
define("_MA_TADNEW_PREFIX_TAG","前置字串");
define("_MA_TADNEW_ALWAYS_TOP","置頂");
define("_MA_TADNEW_NEWS_CONTENT","文章內容");
define("_MA_TADNEW_START_DATE","發佈時間");
define("_MA_TADNEW_END_DATE","結束時間");
define("_MA_TADNEW_NEWS_PASSWD","文章加密");
define("_MA_TADNEW_ADV_SETUP","進階設定");
define("_MA_TADNEW_SAVE_NEWS","儲存");
define("_MA_TADNEW_CAN_READ_NEWS_GROUP","可讀取群組");
define("_MA_TADNEW_DB_ADD_ERROR2","無法新增資料到tad_news中");
define("_MA_TADNEW_DB_SELECT_ERROR2","無法取得tad_news資料");
define("_MA_TADNEW_DB_UPDATE_ERROR2","無法更新tad_news中的資料");
define("_MA_TADNEW_DB_DELETE_ERROR2","無法刪除tad_news中的資料");
define("_MA_TADNEW_NEWS_CATE_TEXT","請選擇文章分類。<br>紅色是屬於「自訂頁面分類」");
define("_MA_TADNEW_NEWS_TITLE_TEXT","請輸入文章標題");
define("_MA_TADNEW_START_DATE_TEXT","設定文章發佈日期，<br>日期一到則立即發佈，<br>不設代表立即發佈。");
define("_MA_TADNEW_END_DATE_TEXT","設定文章下架日期，<br>不設代表永遠顯示");
define("_MA_TADNEW_NEWS_PASSWD_TEXT","有加密的文章<br>需輸入密碼才看得見");
define("_MA_TADNEW_CAN_READ_NEWS_GROUP_TEXT","不選，或者選「全部開放」代表所有人都可以讀取本文章<br>亦可按住 Ctrl 來挑選只開放給哪些群組觀看。");
define("_MA_TADNEW_NEWS_CATE","所屬分類");
define("_MA_TADNEW_NEWS_ENABLE","公開或草稿");
define("_MA_TADNEW_NEWS_ENABLE1_TEXT","選擇「公開」則會立即看見該文章");
define("_MA_TADNEW_NEWS_ENABLE0_TEXT","選擇「草稿」則不會在文章列表中看見該文章");
define("_MA_TADNEW_NEWS_ENABLE_OK","公開");
define("_MA_TADNEW_NEWS_UNABLE","草稿");
define("_MA_TADNEW_NEWS_FILES","上傳附檔：");
define("_MA_TADNEW_NEWS_FILES_LIST","附檔列表");
define("_MA_TADNEW_MON","月");
define("_MA_TADNEW_1","一");
define("_MA_TADNEW_2","二");
define("_MA_TADNEW_3","三");
define("_MA_TADNEW_4","四");
define("_MA_TADNEW_5","五");
define("_MA_TADNEW_6","六");
define("_MA_TADNEW_7","日");
define("_MA_TADNEW_WEEK","週");
define("_MA_TADNEW_TODAY","今日");
define("_MA_TADNEW_NO_ADMIN_POWER","您沒有權限管理這篇文章");

//cate.php
define("_MA_TADNEW_ADD_CATE","建立文章分類");
define("_MA_TADNEW_PARENT_CATE","放在此分類底下：");
define("_MA_TADNEW_CATE_TITLE","分類名稱");
define("_MA_TADNEW_CAN_READ_CATE_GROUP","可<font color='blue'>讀取</font>此分類文章的群組");
define("_MA_TADNEW_CAN_POST_CATE_GROUP","可在此類<font color='red'>發文章</font>的群組");
define("_MA_TADNEW_CAN_READ_CATE_GROUP_TXT","不選=全部可讀");
define("_MA_TADNEW_CAN_POST_CATE_GROUP_TXT","不選=只有管理員可發佈");
define("_MA_TADNEW_CATE_SN","分類編號");
define("_MA_TADNEW_DB_ADD_ERROR1","無法新增資料到tad_news_cate中");
define("_MA_TADNEW_DB_SELECT_ERROR1","無法取得tad_news_cate資料");
define("_MA_TADNEW_DB_UPDATE_ERROR1","無法更新tad_news_cate資料");
define("_MA_TADNEW_DB_DEL_ERROR1","無法刪除tad_news_cate資料");
define("_MA_TADNEW_CATE_SORT","排序");
define("_MA_TADNEW_CATE_COUNTER","文章數");
define("_MA_TADNEW_CATE_LIST","新聞分類列表");
define("_MA_TADNEW_PAGECATE_LIST","自訂頁面分類");
define("_MA_TADNEW_ONLY_ROOT","僅管理員");
define("_MA_TADNEW_CAN_READ_CATE_GROUP_S","可讀取群組");
define("_MA_TADNEW_CAN_POST_CATE_GROUP_S","可管理群組");
define("_MA_TADNEW_SHOW_FP","是否為新聞分類？");
define("_MA_TADNEW_YES","是（一般的用法）");
define("_MA_TADNEW_NO","否（自訂頁面的用法，搭配區塊使用）");
define("_MA_TADNEW_CATE_PIC","分類圖片");
define("_MA_TADNEW_CATE_ADV","分類進階設定");

//import.php
define("_MA_TADNEW_NO_NEWSMOD","本站沒有安裝 news 新聞模組，故無須進行資料轉移。");
define("_MA_TADNEW_HAVE_NEWSMOD","本站安裝的 news 新聞模組版本為 %s 版");
define("_MA_TADNEW_IMPORT_CATE","請選擇要匯入的文章類別");
define("_MA_TADNEW_STORY_OF_CATE","文章");
define("_MA_TADNEW_IMPORT","開始進行文章轉移");

//newspaper.php
define("_MA_TADNEW_NP","電子報");
define("_MA_TADNEW_NP_SELECT","新增一期電子報");
define("_MA_TADNEW_NP_MODIFY","修改電子報頁首頁尾設定");
define("_MA_TADNEW_NP_DEL","刪除");
define("_MA_TADNEW_NP_DEL_DESC","因有 %s 筆資料故無法刪除");
define("_MA_TADNEW_NP_OPTION","選擇一個電子報主題");
define("_MA_TADNEW_NP_CREATE","建立新的電子報主題");
define("_MA_TADNEW_NP_TITLE","電子報主題名稱");
define("_MA_TADNEW_NP_DATE","發佈日期");
define("_MA_TADNEW_NP_NUMBER","電子報期數");
define("_MA_TADNEW_NP_NUMBER_INPUT","第 %s 期");
define("_MA_TADNEW_NP_STEP1","【步驟一】選擇或新建一個電子報主題");
define("_MA_TADNEW_NP_STEP2","【步驟二】選擇要放到電子報中的文章");
define("_MA_TADNEW_NP_STEP3","【步驟三】編輯電子報");
define("_MA_TADNEW_NP_STEP4","【步驟四】寄發電子報");
define("_MA_TADNEW_NP_CONTENT_HEAD","<b>電子報標題內容</b>
<p>頁首會出現在電子報最上方，可放圖片或文字。</p>
<p>{N}→「期數」</p>
<p>{D}→「發報時間」</p>");
define("_MA_TADNEW_NP_CONTENT","電子報內容");
define("_MA_TADNEW_NP_CONTENT_FOOT","<b>電子報頁尾內容</b><p>若欲回覆系統預設的頁首、頁尾，清空之，按「下一步」即可。</p>");
define("_MA_TADNEW_NP_AVAILABLE_COUNTRIES","所有文章");
define("_MA_TADNEW_NP_SELECTED_COUNTRIES","要放到電子報的文章");
define("_MA_TADNEW_NP_SUBMIT","下一步");
define("_MA_TADNEW_NP_TITLE_L","《");
define("_MA_TADNEW_NP_TITLE_R","》");

define("_MA_TADNEW_NP_HEAD_CONTENT","<h1>%s電子報第 {N} 期</h1><h2>◎ 訂閱網址：%s ◎ 發報時間：{D}</h2>");

define("_MA_TADNEW_NP_FOOT_CONTENT","<div class=\"foot\"><h1>【關於本報】</h1>
<p>◎ 主編：%s</p>
<p>本電子報智慧財產權屬於「<a href='%s'>%s</a>」，採用<a href='http://creativecommons.org/licenses/by-sa/2.5/tw/deed.zh_TW' target='_blank'>創用 CC「姓名標示－禁止改作－非商業性」授權條款臺灣 2.5 版授權</a>散布。<a href='http://creativecommons.org/licenses/by-sa/2.5/tw/legalcode' target='_blank'>《授權條款全文》</a></p>
<p>若欲為上述授權範圍以外之利用，請與「%s」（<a href='mailto:%s'>%s</a>） 聯絡。</p>
<p>若欲訂閱或取消本電子報，請至以下網址：<a href='%s'>%s</a></p></div>");
define("_MA_TADNEW_NP_LIST","管理現有電子報");
define("_MA_TADNEW_NP_THEMES","選擇電子報佈景");
define("_MA_TADNEW_NP_ADD","將本文章加入電子報");
define("_MA_TADNEW_NP_REMOVE","從電子報中移除");

//update
define("_MA_TADNEW_AUTOUPDATE","模組升級");
define("_MA_TADNEW_AUTOUPDATE_VER","版本");
define("_MA_TADNEW_AUTOUPDATE_DESC","作用");
define("_MA_TADNEW_AUTOUPDATE_STATUS","更新狀況");
define("_MA_TADNEW_AUTOUPDATE_GO","立即更新");
define("_MA_TADNEW_AUTOUPDATE1","建立 tad_news_files 資料表");
define("_MA_TADNEW_AUTOUPDATE2","在 tad_news_cate 資料表加入 sort 欄位");
define("_MA_TADNEW_AUTOUPDATE3","建立 tad_news_paper_setup、tad_news_paper、tad_news_paper_email 等三個資料表");
define("_MA_TADNEW_AUTOUPDATE4","在 tad_news_files 資料表加入 counter 欄位");
define("_MA_TADNEW_AUTOUPDATE5","在 tad_news_cate 資料表加入 enable_post_group 欄位");
define("_MA_TADNEW_AUTOUPDATE6","在 tad_news_paper_setup 資料表加入 themes 欄位");
define("_MA_TADNEW_AUTOUPDATE7","在 tad_news 資料表加入 prefix_tag 以及 always_top 欄位");
define("_MA_TADNEW_AUTOUPDATE8","在 tad_news 資料表加入 cate_pic、not_news 及 setup 欄位");
define("_MA_TADNEW_EVN_CHK","主機環境測試");
define("_MA_TADNEW_ICONV_OK","有支援 iconv 函式庫！中文編碼轉換沒問題！");
define("_MA_TADNEW_ICONV_NOT_OK","沒有支援 iconv 函式庫！");
define("_MA_TADNEW_ICONV_NOT_WORK","有支援 iconv 函式庫！但 iconv() 函數無法正常運作！");
define("_MA_TADNEW_MBSTRING_OK","但有支援 mbstring 函式庫！所以中文編碼轉換沒問題！");
define("_MA_TADNEW_MBSTRING_NOT_OK","亦沒有支援 mbstring 函式庫！分月新聞、RSS、新聞區塊都將無法正常顯示！");

//page
define("_MA_TADNEW_CATE_SHOW_TITLE","顯示文章標題");
define("_MA_TADNEW_CATE_SHOW_3D","顯示圓角外框");
define("_MA_TADNEW_CATE_SHOW_TOOL","顯示上方工具列");
define("_MA_TADNEW_CATE_SHOW_COMM","使用評論功能");
define("_MA_TADNEW_CATE_YES","是");
define("_MA_TADNEW_CATE_NO","否");
?>