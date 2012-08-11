<?php
// $Id: main.php,v 1.11 2004/12/26 19:11:56 onokazu Exp $
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

//%%%%%%		Module Name 'MyDownloads'		%%%%%

define("_MD_THANKSFORINFO","다운로드 정보를 투고해 주셔서 감사합니다. 내용을 확인한 후 정식으로 등록처리해 드리겠습니다.");
define("_MD_THANKSFORHELP","정보/도움을 주셔서 진심으로 감사드립니다. 내용을 확인한 후 반영하도록 하겠습니다.");
define("_MD_FORSECURITY","사이트/정보 보안을 위해 님의 IP와 아이디를 임시적으로 기록처리하는 점 양해 바랍니다.");
define("_MD_NOPERMISETOLINK","이 다운로드정보는 님이 현재 접속중인 이 사이트의 콘텐츠가 아닙니다.<br /><br />사이트 관리자에게 타 사이트의 콘텐츠를 무단직접링크하지 말도록 요청해 주시기 바랍니다.   <br /><b>무단직접링크!!</b> <br /><br /><b>무단직접링크란:</b>타 사이트의 콘텐츠를 마치 자기사이트의 콘텐츠인 것처럼 무단으로 링크처리하는 것을 의미합니다. <br /><br />님의 <b>IP주소</b>는 기록처리되었습니다.");
define("_MD_ALL","모두");
define("_MD_DESCRIPTION","설명");
define("_MD_SEARCH","검색");
define("_MD_SUBMITCATHEAD","다운로드 정보를 등록");

define("_MD_MAIN","메인");
define("_MD_POPULAR","다운수");
define("_MD_NEWTHISWEEK","일주일이내에 등록되어졌음");
define("_MD_UPTHISWEEK","일주일이내에 업그레이드되어졌음");

define("_MD_POPULARITYLTOM","다운수 (적은 것부터)");
define("_MD_POPULARITYMTOL","다운수 (많은 것부터)");
define("_MD_TITLEATOZ","제목 (A to Z)");
define("_MD_TITLEZTOA","제목 (Z to A)");
define("_MD_DATEOLD","일시 (오래된 것부터)");
define("_MD_DATENEW","일시 (새 것부터)");
define("_MD_RATINGLTOH","평가 (평가가 낮은 것부터)");
define("_MD_RATINGHTOL","평가 (평가가 높은 것부터)");

define("_MD_NOSHOTS","스크린샷은 없습니다");
define("_MD_EDITTHISDL","이 다운로드 정보를 편집함");

define("_MD_DESCRIPTIONC","설명: ");
define("_MD_EMAILC","메일주소: ");
define("_MD_CATEGORYC","카테고리: ");
define("_MD_LASTUPDATEC","최종 갱신일시: ");
define("_MD_DLNOW","바로 다운로드!");
define("_MD_VERSION","버전");
define("_MD_SUBMITDATE","등록일");
define("_MD_DLTIMES","%s 번 다운로드");
define("_MD_FILESIZE","파일크기");
define("_MD_SUPPORTEDPLAT","사용가능 플랫폼");
define("_MD_HOMEPAGE","홈페이지");
define("_MD_HITSC","다운로드수: ");
define("_MD_RATINGC","평가: ");
define("_MD_ONEVOTE","1 표");
define("_MD_NUMVOTES","%s 표");
define("_MD_RATETHISFILE","이 다운로드정보를 평가");
define("_MD_MODIFY","변경");
define("_MD_REPORTBROKEN","파손파일/끊어진 링크 신고");
define("_MD_TELLAFRIEND","친구에게 추천");
define("_MD_EDIT","편집");

define("_MD_THEREARE","이 사이트에는 총<b>%s</b> 건의 다운로드정보가 존재합니다.");
define("_MD_LATESTLIST","신규 다운로드");

define("_MD_REQUESTMOD","다운로드정보의 수정 요청");
define("_MD_FILEID","파일 ID: ");
define("_MD_FILETITLE","다운로드 제목: ");
define("_MD_DLURL","다운로드 URL: ");
define("_MD_HOMEPAGEC","홈페이지: ");
define("_MD_VERSIONC","버전: ");
define("_MD_FILESIZEC","파일사이즈: ");
define("_MD_NUMBYTES","%s 바이트");
define("_MD_PLATFORMC","사용가능 플랫폼: ");
define("_MD_SHOTIMAGE","스크린샷 이미지: ");
define("_MD_SENDREQUEST","보내기");
define("_MD_OPTIONS",'옵션: ');
define("_MD_NOTIFYAPPROVE",'이 다운로드정보가 승인된 경우 통지함');

define("_MD_VOTEAPPRE","평가(Vote)가 이루어졌습니다.");
define("_MD_THANKYOU","귀중한 도움/정보 감사드립니다.(%s)  "); // %s is your site name
define("_MD_VOTEONCE","다운로드정보에 대한 평가는 1인 1회로 제한되어 있습니다.");
define("_MD_RATINGSCALE","평가는 1-10 의 범위에서 선택하시기 바랍니다. 높은 숫자일수도 높은 평가를 의미합니다.");
define("_MD_BEOBJECTIVE","공정한 평가를 부탁드립니다.");
define("_MD_DONOTVOTE","자기자신의 다운로드정보에 대해선 평가하실 수 없습니다.");
define("_MD_RATEIT","평가");

define("_MD_INTFILEFOUND","유용한 다운로드 정보가 발견되었습니다.( %s)"); // %s is your site name

define("_MD_RECEIVED","다운로드 정보를 접수하였습니다. 감사합니다.");
define("_MD_WHENAPPROVED","이 다운로드 정보가 정식으로 승인/등록될 경우 메일로 통보해 드립니다.");
define("_MD_SUBMITONCE","동일한 다운로드 정보를 중복 투고하실 수 없습니다.");
define("_MD_ALLPENDING","모든 다운로드 정보는 내용확인후 정식 승인/등록여부를 결정하게 됩니다.");
define("_MD_DONTABUSE","아이디와 IP주소를 기록하였습니다. 올바른 이용을 부탁드립니다.");
define("_MD_TAKEDAYS","다운로드 정보가 정식으로 승인/등록될 때까진 약간의 시일이 걸릴수 있는 점 양해바랍니다.");

define("_MD_RANK","순위");
define("_MD_CATEGORY","카테고리");
define("_MD_HITS","다운로드 수");
define("_MD_RATING","평가");
define("_MD_VOTE","평가수");

define("_MD_SORTBY","정렬순:");
define("_MD_TITLE","제목");
define("_MD_DATE","일시");
define("_MD_POPULARITY","다운로드수");
define("_MD_CURSORTBY","현재 정렬순: %s");
define("_MD_PREVIOUS","이전 페이지");
define("_MD_NEXT","다음 페이지");
define("_MD_NOMATCH","해당하는 다운로드 정보가 존재하지 않습니다.");

define("_MD_TOP10","%s 베스트10"); // %s is a downloads category name

define("_MD_SUBMIT","보내기");
define("_MD_CANCEL","취소");

define("_MD_BYTES","바이트");
define("_MD_ALREADYREPORTED","정보/도움을 주셔서 감사드립니다. 확인후 반영하도록 하겠습니다.");
define("_MD_MUSTREGFIRST","다운로드 정보를 투고하시려면 먼저 회원등록을 하셔야만 합니다.");
define("_MD_NORATING","평가정보가 선택되어있지 않습니다.");
define("_MD_CANTVOTEOWN","자기자신의 다운로드 정보에 대해선 평가하실 수 없습니다.");

//%%%%%%	Module Name 'MyDownloads' (Admin)	  %%%%%

define("_MD_DLCONF","다운로드 정보 관리");
define("_MD_GENERALSET","일반설정");
define("_MD_ADDMODDELETE","카테고리/다운로드정보의 추가/수정/삭제");
define("_MD_DLSWAITING","승인대기 다운로드정보");
define("_MD_BROKENREPORTS","파손된 파일/끊어진 링크 신고");
define("_MD_MODREQUESTS","다운로드 정보 수정 요청");
define("_MD_SUBMITTER","투고자: ");
define("_MD_DOWNLOAD","다운로드");
define("_MD_APPROVE","승인");
define("_MD_DELETE","삭제");
define("_MD_NOSUBMITTED","다운로드정보의 신규투고가 없습니다.");
define("_MD_ADDMAIN","메인 카테고리 작성");
define("_MD_TITLEC","제목: ");
define("_MD_IMGURL","카테고리 그림파일 URL (선택항목입니다. 그림높이는 50픽셀로 고정됩니다.): ");
define("_MD_ADD","추가");
define("_MD_ADDSUB","서브 카테고리 작성");
define("_MD_IN","부모 카테고리");
define("_MD_ADDNEWFILE","신규 다운로드 정보");
define("_MD_MODCAT","카테고리 편집");
define("_MD_MODDL","다운로드 정보 편집");
define("_MD_USER","아이디");
define("_MD_IP","IP주소");
define("_MD_USERAVG","평균 평가점");
define("_MD_TOTALRATE","총 평가점");
define("_MD_NOREGVOTES","등록회원의 평가가 없습니다.");
define("_MD_NOUNREGVOTES","손님에 의한 평가가 없습니다.");
define("_MD_VOTEDELETED","평가 정보를 삭제하였습니다.");
define("_MD_NOBROKEN","파손파일/끊어진 링크에 대한 신고가 없습니다.");
define("_MD_IGNOREDESC","무시 (파손파일/끊어진 링크 신고를 무시하고 이 <b>신고보고</b>만을 삭제합니다.)");
define("_MD_DELETEDESC","삭제 (파손파일/끊어진 링크 신고와 관련 다운로드 정보를 함께 삭제합니다.)");
define("_MD_REPORTER","보낸 사람:");
define("_MD_FILESUBMITTER","다운로드정보 제공자:");
define("_MD_IGNORE","무시");
define("_MD_FILEDELETED","다운로드 정보를 삭제하였습니다.");
define("_MD_BROKENDELETED","파손파일/끊어진 링크 신고를 삭제하였습니다.");
define("_MD_USERMODREQ","다운로드정보 수정 요청");
define("_MD_ORIGINAL","수정전");
define("_MD_PROPOSED","수정후");
define("_MD_OWNER","다운로드 정보 제공자: ");
define("_MD_NOMODREQ","다운로드정보 수정요청이 없습니다.");
define("_MD_DBUPDATED","데이타베이스를 성공적으로 갱신하였습니다!");
define("_MD_MODREQDELETED","다운로드정보 수정요청을 삭제하였습니다.");
define("_MD_IMGURLMAIN","카테고리 그림파일 URL (선택항목입니다. 그림의 높이는 50 픽셀로 고정됨,메인 카테고리용): ");
define("_MD_PARENT","부모카테고리:");
define("_MD_SAVE","변경저장");
define("_MD_CATDELETED","카테고리를 삭제하였습니다.");
define("_MD_WARNING","WARNING: 정말로 이 카테고리와 그에 속한 다운로드정보 데이타를 모두 삭제하실 건가요?");
define("_MD_YES","예");
define("_MD_NO","아니요");
define("_MD_NEWCATADDED","카테고리를 추가하였습니다.");
define("_MD_ERROREXIST","ERROR: 투고하신 다운로드정보는 이미 등록되어져 있습니다.");
define("_MD_ERRORTITLE","ERROR: 제목을 입력해 주세요!");
define("_MD_ERRORDESC","ERROR: 설명을 입력해 주세요!");
define("_MD_NEWDLADDED","신규 다운로드정보를 추가하였습니다.");
define("_MD_HELLO","%s 님, 어서오세요");
define("_MD_WEAPPROVED","님이 투고하신 다운로드정보는 정식으로 승인/등록처리 되었습니다.");
define("_MD_THANKSSUBMIT","투고해 주셔서 감사합니다.");

define("_MD_MUSTBEVALID","스크린샷 그림파일은 %s 디렉토리하의 파일을 사용해 주세요(ex. shot.gif). 그림파일이 존재하지 않을 시에는 그냥 공백으로 두세요.");

define("_MD_REGUSERVOTES","등록회원의 평가 (총 평가수: %s)");
define("_MD_ANONUSERVOTES","손님의 평가 (총 평가수: %s)");

define("_MD_YOURFILEAT","Your file submitted at %s"); // this is an approved mail subject. %s is your site name

define("_MD_VISITAT","다양한 다운로드정보 있습니다. 많은 이용바랍니다.(%s)");

define("_MD_DLRATINGS","종합평가 (평가수: %s)");
define("_MD_ISAPPROVED","님의 다운로드정보가 정식으로 승인/등록되었습니다.");
?>
