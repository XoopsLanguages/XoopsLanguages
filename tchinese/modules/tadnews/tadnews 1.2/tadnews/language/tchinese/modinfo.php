<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2007-11-04
// $Id$
// ------------------------------------------------------------------------- //

define("_MI_TADNEW_NAME","本站消息");
define("_MI_TADNEW_DESC","一個容易使用的新聞模組");
define("_MI_TADNEW_ADMENU1","文章管理介面");
define("_MI_TADNEW_ADMENU2","發佈文章");
define("_MI_TADNEW_ADMENU3","分類管理");
define("_MI_TADNEW_ADMENU4","資料轉移");
define("_MI_TADNEW_ADMENU5","電子報管理");
define("_MI_TADNEW_ADMENU6","模組升級");
define("_MI_TADNEW_ADMENU7","自訂頁面");
define("_MI_TADNEW_NEWSPAPER","電子報列表");
define("_MI_TADNEW_ARCHIVE","分月文章");

define("_MI_TADNEW_TEMPLATE_DESC1","模組首頁的樣板檔。");
define("_MI_TADNEW_TEMPLATE_DESC2","單一文章頁面的樣板檔。");
define("_MI_TADNEW_TEMPLATE_DESC3","RSS頁面的樣板檔。");
define("_MI_TADNEW_TEMPLATE_DESC4","發佈頁面的樣板檔。");
define("_MI_TADNEW_TEMPLATE_DESC5","分月文章的樣板檔。");
define("_MI_TADNEW_TEMPLATE_DESC6","自訂頁面的樣板檔。");

define("_MI_TADNEW_BNAME1","文章類別");
define("_MI_TADNEW_BDESC1","顯示所有文章的類別");
define("_MI_TADNEW_BNAME2","本站最新消息");
define("_MI_TADNEW_BDESC2","顯示文章內容");
define("_MI_TADNEW_BNAME3","最新回應");
define("_MI_TADNEW_BDESC3","列出最新的文章評論");
define("_MI_TADNEW_BNAME4","訂閱 / 取消電子報");
define("_MI_TADNEW_BDESC4","讓使者訂閱電子報的區塊");
define("_MI_TADNEW_BNAME5","電子報一覽");
define("_MI_TADNEW_BDESC5","秀出最新的電子報");
define("_MI_TADNEW_BNAME6","分類新聞區塊");
define("_MI_TADNEW_BDESC6","秀出指定分類最新的新聞");
define("_MI_TADNEW_BNAME7","自訂頁面");
define("_MI_TADNEW_BDESC7","秀出指定的自訂頁面分類所有文章標題");
define("_MI_TADNEW_BNAME8","焦點新聞");
define("_MI_TADNEW_BDESC8","可以自訂要播放哪些新聞");

define("_MI_TADNEW_TITLE1","<b>每頁要秀出幾篇文章？</b>");
define("_MI_TADNEW_DESC1","設定模組頁面出現的文章數");
define("_MI_TADNEW_TITLE2","<b>設定附檔下載方式</b>");
define("_MI_TADNEW_DESC2","方法一就是預設方式；方法二下載需要較多記憶體，不適用於太大的檔案（幾十MB那種），但中文一定正常。（預設）");
define("_MI_TADNEW_DL_METHOD1","方法一：以「編號_原始檔名.副檔名」為下載檔名");
define("_MI_TADNEW_DL_METHOD2","方法二：讓系統製作附檔");

define("_MI_TADNEW_TITLE3","<b>設定電子報選單的呈現方式</b>");
define("_MI_TADNEW_DESC3","CSS 較美觀；HTML 適用於較大量的電子報。");
define("_MI_TADNEW_NS_METHOD1","用CSS方式來呈現");
define("_MI_TADNEW_NS_METHOD2","用HTML方式來呈現");

define("_MI_TADNEW_SHOW_MODE","<b>設定模組首頁的呈現方式</b>");
define("_MI_TADNEW_SHOW_MODE_DESC","可自由選擇要秀出文章摘要（原有模式），或者只秀出文章標題（較快，較簡潔）");
define("_MI_TADNEW_SHOW_MODE_OPT1","秀出摘要或本文");
define("_MI_TADNEW_SHOW_MODE_OPT2","僅秀出標題列表（會自動將每頁秀出文章數 X 2）");
define("_MI_TADNEW_SHOW_MODE_OPT3","顯示各個分類的新聞標題");

define("_MI_TADNEW_CATE_SHOW_MODE","<b>設定秀出分類新聞的呈現方式</b>");
define("_MI_TADNEW_CATE_SHOW_MODE_DESC","點選分類後，新聞要呈現的模式，可自由選擇要秀出文章摘要（原有模式），或者只秀出文章標題（較快，較簡潔）");

define("_MI_TADNEW_PREFIX_TAG","<b>設定標題的前置字串</b>");
define("_MI_TADNEW_PREFIX_TAG_DESC","可用來替標題加上前置字串，以凸顯該文性質。（選項請用「;」隔開）");
define("_MI_TADNEW_PREFIX_TAG_VAL","<font color='red'>[緊急]</font>;<font color='blue'>[公告]</font>;<font color='#CC33CC'>[調查]</font>;<font color='#00CC33'>[好消息]</font>");

define("_MI_TADNEW_SHOW_BB","<b>是否顯示出「BB Code」的連結</b>");
define("_MI_TADNEW_SHOW_BB_DESC","一般為「否」。早期的 news 模組內容會用 BB Code 來設定文字外觀，例如顏色、大小等。若是您的新聞是早期從 news 轉移過來的，而且有用大量的 BB Code，那麼可選「是」。");

define("_MI_TADNEW_CATE_PIC_WIDTH","<b>分類圖片寬度</b>");
define("_MI_TADNEW_CATE_PIC_WIDTH_DESC","上傳分類圖檔時，將以此寬度為縮圖寬度依據。");

define("_MI_TADNEW_PIC_WIDTH","<b>新聞圖片附檔寬度</b>");
define("_MI_TADNEW_PIC_WIDTH_DESC","新聞圖片附檔寬度，以px為單位");

define("_MI_TADNEW_THUMB_WIDTH","<b>新聞圖片附檔縮圖寬度</b>");
define("_MI_TADNEW_THUMB_WIDTH_DESC","新聞圖片附檔縮圖寬度，以px為單位");
?>