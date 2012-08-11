<?php
// $Id: main.php,v 1.10 2004/12/26 19:11:57 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
//                XOOPS Korean (translated by wanikoo[ wani@wanisys.net ])	   //
//                       <http://www.wanisys.net/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

//%%%%%%		Module Name 'MyLinks'		%%%%%

define("_MD_THANKSFORINFO","링크정보를 투고해 주셔서 감사합니다. 내용을 확인한 후 정식으로 등록처리해 드리겠습니다.");
define("_MD_THANKSFORHELP","정보/도움을 주셔서 진심으로 감사드립니다. 내용을 확인한 후 반영하도록 하겠습니다.");
define("_MD_FORSECURITY","사이트/정보 보안을 위해 님의 IP와 아이디를 임시적으로 기록처리하는 점 양해 바랍니다.");

define("_MD_SEARCHFOR","검색");
define("_MD_ANY","또는");
define("_MD_SEARCH","검색");

define("_MD_MAIN","메인");
define("_MD_SUBMITLINK","링크 등록");
define("_MD_SUBMITLINKHEAD","링크정보를 등록");
define("_MD_POPULAR","인기");
define("_MD_TOPRATED","고평가");

define("_MD_NEWTHISWEEK","일주일이내에 등록되어졌음");
define("_MD_UPTHISWEEK","일주일이내에 업그레이드되어졌음");

define("_MD_POPULARITYLTOM","인기 (방문수 적은것부터)");
define("_MD_POPULARITYMTOL","인기 (방문수 많은것부터)");
define("_MD_TITLEATOZ","타이틀 (A to Z)");
define("_MD_TITLEZTOA","타이틀 (Z to A)");
define("_MD_DATEOLD","일시 (오래된 것부터)");
define("_MD_DATENEW","일시 (새것부터)");
define("_MD_RATINGLTOH","평가 (평가가 낮은 것부터)");
define("_MD_RATINGHTOL","평가 (평가가 높은 것부터)");

define("_MD_NOSHOTS","스크린샷은 없습니다.");
define("_MD_EDITTHISLINK","이 링크정보를 편집함");

define("_MD_DESCRIPTIONC","설명: ");
define("_MD_EMAILC","메일주소: ");
define("_MD_CATEGORYC","카테고리: ");
define("_MD_LASTUPDATEC","최종갱신일시: ");
define("_MD_HITSC","방문수: ");
define("_MD_RATINGC","평가: ");
define("_MD_ONEVOTE","1 표");
define("_MD_NUMVOTES","%s 표");
define("_MD_RATETHISSITE","이 사이트를 평가");
define("_MD_MODIFY","변경");
define("_MD_REPORTBROKEN","끊어진 링크 신고");
define("_MD_TELLAFRIEND","친구에게 추천");

define("_MD_THEREARE","이 사이트에는 총<b>%s</b> 건의 링크정보가 존재합니다.");
define("_MD_LATESTLIST","신규 링크 리스트");

define("_MD_REQUESTMOD","링크정보의 수정 요청");
define("_MD_LINKID","링크 ID: ");
define("_MD_SITETITLE","사이트 타이틀: ");
define("_MD_SITEURL","사이트 URL: ");
define("_MD_OPTIONS","옵션: ");
define("_MD_NOTIFYAPPROVE","이 링크정보가 승인된 경우 통지함");
define("_MD_SHOTIMAGE","스크린샷 이미지: ");
define("_MD_SENDREQUEST","보내기");

define("_MD_VOTEAPPRE","평가(Vote)가 이루어졌습니다.");
define("_MD_THANKURATE","귀중한 도움/정보 감사드립니다.(%s)");
define("_MD_VOTEFROMYOU","님의 평가는 타 회원들이 링크 사이트 방문여부를 결정할 때의 판단기준이 될 것입니다.");
define("_MD_VOTEONCE","링크정보에 대한 평가는 1인 1회로 제한되어 있습니다.");
define("_MD_RATINGSCALE","평가는 1-10의 범위에서 선택하시기 바랍니다. 높은 숫자일수록 높은 평가를 의미합니다.");
define("_MD_BEOBJECTIVE","공정한 평가를 부탁드립니다.");
define("_MD_DONOTVOTE","자기자신의 링크정보에 대해선 평가하실 수 없습니다.");
define("_MD_RATEIT","평가");

define("_MD_INTRESTLINK","유용한 링크사이트정보가 발견(%s)");  // %s is your site name
define("_MD_INTLINKFOUND","%s 에서 매우 유용한 링크사이트정보를 발견하였습니다.");  // %s is your site name

define("_MD_RECEIVED","링크 정보를 접수하였습니다. 감사합니다.");
define("_MD_WHENAPPROVED","이 링크정보가 정식으로 승인/등록될 경우 메일로 통지해 드립니다.");
define("_MD_SUBMITONCE","동일한 링크정보를 중복투고 하실 수 없습니다..");
define("_MD_ALLPENDING","모든 링크정보는 내용확인후 정식 승인/등록여부를 결정하게 됩니다.");
define("_MD_DONTABUSE","아이디와 IP정보를 기록하였습니다. 올바른 이용을 부탁드립니다.");
define("_MD_TAKESHOT","링크정보가 정식으로 승인/등록될 때까진 약간의 시일이 걸릴수도 있는 점 양해바랍니다.");

define("_MD_RANK","순위");
define("_MD_CATEGORY","카테고리");
define("_MD_HITS","방문수");
define("_MD_RATING","평가");
define("_MD_VOTE","투표수");
define("_MD_TOP10","%s Top 10"); // %s is a link category title

define("_MD_SEARCHRESULTS","검색결과: <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","정렬순:");
define("_MD_TITLE","타이틀");
define("_MD_DATE","일시");
define("_MD_POPULARITY","인기");
define("_MD_CURSORTEDBY","현재 정렬순: %s");
define("_MD_PREVIOUS","이전 페이지");
define("_MD_NEXT","다음 페이지");
define("_MD_NOMATCH","해당하는 링크정보가 존재하지 않습니다.");

define("_MD_SUBMIT","보내기");
define("_MD_CANCEL","취소");

define("_MD_ALREADYREPORTED","님으로부터의  끊어진 링크신고는 이미 접수되어진 상태입니다.");
define("_MD_MUSTREGFIRST","링크 정보를 투고하시려면 먼저 회원등록을 하셔야만 합니다.");
define("_MD_NORATING","평가정보가 선택되어있지 않습니다.");
define("_MD_CANTVOTEOWN","자기자신의 링크정보에 대해선 평가하실 수 없습니다.");
define("_MD_VOTEONCE2","링크정보에 대한 평가는 1인 1회로 한정됩니다.");

//%%%%%%	Module Name 'MyLinks' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","링크 정보 관리");
define("_MD_GENERALSET","일반설정");
define("_MD_ADDMODDELETE","카테고리/링크정보의 추가/수정/삭제");
define("_MD_LINKSWAITING","승인대기 링크정보");
define("_MD_BROKENREPORTS","끊어진 링크 신고");
define("_MD_MODREQUESTS","링크정보 수정 요청");
define("_MD_SUBMITTER","투고자: ");
define("_MD_VISIT","방문");
define("_MD_SHOTMUST","스크린샷 그림파일은 %s 디렉토리하의 파일을 사용해 주세요(ex. shot.gif). 그림파일이 존재하지 않을 시에는 그냥 공백으로 두세요.");
define("_MD_APPROVE","승인");
define("_MD_DELETE","삭제");
define("_MD_NOSUBMITTED","링크정보의 신규투고가 없습니다.");
define("_MD_ADDMAIN","메인 카테고리 작성");
define("_MD_TITLEC","타이틀: ");
define("_MD_IMGURL","카테고리 그림파일 URL (선택항목입니다. 그림높이는 50픽셀로 고정됩니다.): ");
define("_MD_ADD","추가");
define("_MD_ADDSUB","서브 카테고리 작성");
define("_MD_IN","부모 카테고리");
define("_MD_ADDNEWLINK","신규 링크정보");
define("_MD_MODCAT","카테고리 편집");
define("_MD_MODLINK","링크정보 편집");
define("_MD_TOTALVOTES","총 평가수 (총 평가수 : %s)");
define("_MD_USERTOTALVOTES","등록회원에 의한 평가 (총 평가수: %s)");
define("_MD_ANONTOTALVOTES","손님에 의한 평가 (총 평가수: %s)");
define("_MD_USER","아이디");
define("_MD_IP","IP주소");
define("_MD_USERAVG","평균 평가점");
define("_MD_TOTALRATE","총 평가점");
define("_MD_NOREGVOTES","등록회원의 평가가 없습니다.");
define("_MD_NOUNREGVOTES","손님에 의한 평가가 없습니다.");
define("_MD_VOTEDELETED","평가 정보를 삭제하였습니다.");
define("_MD_NOBROKEN","끊어진 링크에 대한 신고가 없습니다.");
define("_MD_IGNOREDESC","무시 (끊어진 링크 신고를 무시하고 이 <b>신고보고</b>만을 삭제합니다.)");
define("_MD_DELETEDESC","삭제 (끊어진 링크 신고와 관련 링크정보를 함께 삭제합니다.)");
define("_MD_REPORTER","보낸 사람:");
define("_MD_LINKSUBMITTER","링크정보 제공자:");
define("_MD_IGNORE","무시");
define("_MD_LINKDELETED","링크정보를 삭제하였습니다.");
define("_MD_BROKENDELETED","끊어진 링크 신고를 삭제하였습니다.");
define("_MD_USERMODREQ","링크정보 수정 요청");
define("_MD_ORIGINAL","수정전");
define("_MD_PROPOSED","수정후");
define("_MD_OWNER","링크정보 제공자: ");
define("_MD_NOMODREQ","링크정보 수정요청이 없습니다.");
define("_MD_DBUPDATED","데이타베이스를 성공적으로 갱신하였습니다!");
define("_MD_MODREQDELETED","링크정보 수정요청을 삭제하였습니다.");
define("_MD_IMGURLMAIN","카테고리 그림파일 URL (선택항목입니다. 그림의 높이는 50픽셀로 고정됨,메인 카테고리용): ");
define("_MD_PARENT","부모카테고리:");
define("_MD_SAVE","변경저장");
define("_MD_CATDELETED","카테고리를 삭제하였습니다.");
define("_MD_WARNING","WARNING: 정말로 이 카테고리와 그에 속한 링크정보 데이타를 모두 삭제하실 건가요?");
define("_MD_YES","예");
define("_MD_NO","아니요");
define("_MD_NEWCATADDED","카테고리를 추가하였습니다.");
define("_MD_ERROREXIST","ERROR: 투고하신 링크정보는 이미 등록되어져 있습니다.");
define("_MD_ERRORTITLE","ERROR: 타이틀을 입력해 주세요!");
define("_MD_ERRORDESC","ERROR: 설명을 입력해 주세요!");
define("_MD_NEWLINKADDED","신규 링크정보를 추가하였습니다.");
define("_MD_YOURLINK","Your Website Link at %s");
define("_MD_YOUCANBROWSE","다양한 링크사이트정보가 있습니다. 많은 이용바랍니다. (%s)");
define("_MD_HELLO","%s 님,어서오세요");
define("_MD_WEAPPROVED","님이 투고하신 링크정보는 정식으로 승인/등록처리 되었습니다.");
define("_MD_THANKSSUBMIT","투고해 주셔서 감사합니다!");
define("_MD_ISAPPROVED","님이 투고하신 링크정보는 정식으로 승인/등록처리 되었습니다.");
?>
