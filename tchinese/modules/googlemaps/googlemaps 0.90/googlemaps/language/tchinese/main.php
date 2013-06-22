<?php

//%%%%%%		Module Name 'googlemaps'		%%%%%
// BIG-5 Traditional Chinese by Vincent (Lucky Lin) email : MeWorkAround@gmail.com
// Spe. 7. 2006 

define("_MD_MODIFY","修改");
define("_MD_NOPOINTS","目前資料庫裡 暫時無景點可以修改");
define("_MD_NOPOINTSUSR","目前資料庫裡 暫時無景點需要核准");
define("_MD_NOCATS","目前資料庫裡 暫時無分類目錄可以修改");
define("_MD_NOCATSADD","目前資料庫裡無分類目錄 請新增目錄");
define("_MD_DESCRIPTIONC","敘述: ");
define("_MD_POINTID","地圖折線: ");
define("_MD_PLID","地圖折線: ");
define("_MD_CATID","分類名稱: ");
define("_MD_INVALIDPOINT","無效景點 ");

define("_MD_THEREARE","目前資料庫裡總共有 <b>%s</b> 景點");

define("_MD_INSTRUCTIONS","<b>操作指示</b><br>
- 地圖可用滑鼠拖曳<br>
- 可以使用左方上下移動指標縮放地圖<br>
- 可以點按紅色圖釘瀏覽景點資訊<br>
- 雙擊地圖任一點可以直接放大該地點<br>
- 網管館請先登入方可增加建立景點");

define("_MD_INSTRUCTIONS2","<b>操作指示</b><br>
- 地圖可用滑鼠拖曳<br>
- 可以使用左方上下移動指標縮放地圖<br>
- 可以點按紅色圖釘瀏覽景點資訊<br>
- 雙擊地圖任一點可以直接放大該地點<br>
- 網管館請先登入方可增加建立景點");


define("_MD_CATHEADER","分類目錄");
define("_MD_POINTHEADER","景點");
define("_MD_CATEGORYC","分類目錄:");
define("_MD_ZOOMEDOUT","變距縮放瀏覽");




//%%%%%%	Module Name 'googlemaps' (Admin)	  %%%%%

define("_MD_PREFERENCES","喜好設定");
define("_MD_TITLE","景點管理");
define("_MD_STITLE","網管管理");
define("_MD_BACKHOME","返回地圖");
define("_MD_GMAPS_GOTOADMIN","網頁管理");
define("_MD_ADDNEWPOINT","增加新景點");
define("_MD_ADDNEWCAT","增加新分類目錄");
define("_MD_LOCATION","景點名稱: ");
define("_MD_CATORDER","改變分類目錄排序");
define("_MD_POINTORDER","改變景點排序");
define("_MD_CAT","分類目錄名稱: ");
define("_MD_CATDELETED","分類目錄已刪除");
define("_MD_POINTDELETED","景點已刪除");
define("_MD_LONGITUDE","景點東西經度 Longitude: ");
define("_MD_LATITUDE","景點南北緯度 Latitude: ");
define("_MD_CATLONGITUDE","分類目錄東西經度 Longitude: ");
define("_MD_CATLATITUDE","分類目錄南北緯度 Latitude: ");
define("_MD_ZOOM","縮放層級: ");
define("_MD_DIRECTIONS","來回方向指示: ");
define("_MD_TOHERE","到此處 ");
define("_MD_FROMHERE","從此處出發 ");
define("_MD_STARTADDRESS","輸入起點地址");
define("_MD_ENDADDRESS","抵達地點");
define("_MD_GETDIRECTIONS","送出");
define("_MD_TAB1","描述");
define("_MD_TAB2","方向");
define("_MD_REFRESH","重新整理");
define("_MD_ADD","增加");
define("_MD_PLADD","增加地圖折線");
define("_MD_PLID1","折線起點");
define("_MD_PLID2","折線止點");
define("_MD_ERRORPOINT","錯誤：請先增加輸入景點!");
define("_MD_ERRORTITLE","錯誤：請輸入標題!");
define("_MD_ERRORDESC","錯誤：您需要輸入說明!");
define("_MD_NEWPOINTADDED","新景點已增加至資料庫.");
define("_MD_NEWCATADDED","新分類目錄已增加至資料庫.");
define("_MD_NEWPLADDED","新地圖畫折線已增加至資料庫.");
define("_MD_MODCAT","修改分類目錄");
define("_MD_MODPOINT","修改景點");
define("_MD_ALREADY","您已經設置好位置");
define("_MD_MODPL","修改地圖畫折線");
define("_MD_DELETE","刪除！");
define("_MD_ERROR","請先連線以便增加景點！");
define("_MD_CANCEL","取消");
define("_MD_DELPOINT","刪除景點.");
define("_MD_DBUPDATED","資料庫已更新！");
define("_MD_MENU_TITLE","Google Maps 設定");
define("_MD_MENU_PADD","增加景點");
define("_MD_MENU_PMOD","修改或刪除景點");
define("_MD_MENU_PORDER","景點重新排序");
define("_MD_MENU_CADD","增加分類目錄");
define("_MD_MENU_CMOD","修改或刪除分類目錄");
define("_MD_MENU_CORDER","分類目錄重新排序");
define("_MD_MENU_PAPPROVE","核准會員提供之景點");
define("_MD_MENU_PLADD","增加地圖折線");
define("_MD_MENU_PLMOD","修改或刪除地圖折線");
define("_MD_MENU_BACKINDEX","返回一般使用者所觀看之地圖");
define("_MD_GMAPS_DASHBOARD","Dashboard");