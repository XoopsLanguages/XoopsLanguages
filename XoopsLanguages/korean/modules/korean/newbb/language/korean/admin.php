<?php
// $Id: admin.php,v 1.10 2004/12/26 19:11:59 onokazu Exp $
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

//%%%%%%	File Name  index.php   	%%%%%
define("_MD_A_FORUMCONF","토론방 설정");
define("_MD_A_ADDAFORUM","토론방 추가");
define("_MD_A_LINK2ADDFORUM","신규 토론방을 추가합니다.");
define("_MD_A_EDITAFORUM","토론방 편집");
define("_MD_A_LINK2EDITFORUM","토론방 정보를 편집합니다.");
define("_MD_A_SETPRIVFORUM","비공개토론방 설정");
define("_MD_A_LINK2SETPRIV","비공개토론방의 설정 및 변경작업을 합니다.");
define("_MD_A_SYNCFORUM","투고 수 재집계");
define("_MD_A_LINK2SYNC","토론방에서의 투고 수를 재집계합니다.");
define("_MD_A_ADDACAT","카테고리 추가");
define("_MD_A_LINK2ADDCAT","토론방 카테고리를 신규로 작성합니다.");
define("_MD_A_EDITCATTTL","카테고리 타이틀 편집");
define("_MD_A_LINK2EDITCAT","토론방 카테고리 타이틀을 편집합니다.");
define("_MD_A_RMVACAT","카테고리 제거");
define("_MD_A_LINK2RMVCAT","토론방 카테고리를 삭제합니다.");
define("_MD_A_REORDERCAT","카테고리 위치 변경");
define("_MD_A_LINK2ORDERCAT","토론방 카테고리의 표시순서를 변경합니다.");

//%%%%%%	File Name  admin_forums.php   	%%%%%
define("_MD_A_FORUMUPDATED","토론방을 갱신하였습니다. ");
define("_MD_A_HTSMHNBRBITHBTWNLBAMOTF","조정자 삭제에 실패하였습니다. 토론방에는 반드시 1인이상의 조정자가 필요합니다.");
define("_MD_A_FORUMREMOVED","토론방을 삭제하였습니다.");
define("_MD_A_FRFDAWAIP","토론방에 속한 모든 투고글들을 데이타베이스에서 삭제하였습니다.");
define("_MD_A_NOSUCHFORUM","해당하는 토론방이 존재하지 않습니다.");
define("_MD_A_EDITTHISFORUM","토론방 편집");
define("_MD_A_DTFTWARAPITF","토론방 삭제 (주의:토론방에 속한 모든 투고글들이 삭제처리됩니다!)");
define("_MD_A_FORUMNAME","토론방 이름:");
define("_MD_A_FORUMDESCRIPTION","토론방 설명:");
define("_MD_A_MODERATOR","조정자:");
define("_MD_A_REMOVE","삭제");
define("_MD_A_NOMODERATORASSIGNED","조정자가 지정되어 있지 않습니다.");
define("_MD_A_NONE","없음");
define("_MD_A_CATEGORY","카테고리:");
define("_MD_A_ANONYMOUSPOST","모든 방문자");
define("_MD_A_REGISTERUSERONLY","등록회원만");
define("_MD_A_MODERATORANDADMINONLY","관리자/조정자만");
define("_MD_A_TYPE","타입:");
define("_MD_A_PUBLIC","공개");
define("_MD_A_PRIVATE","비공개");
define("_MD_A_SELECTFORUMEDIT","편집할 토론방을 선택해 주세요");
define("_MD_A_NOFORUMINDATABASE","데이타베이스에 토론방이 존재하지 않습니다.");
define("_MD_A_DATABASEERROR","데이타베이스 에러");
define("_MD_A_EDIT","편집");
define("_MD_A_CATEGORYUPDATED","카테고리가 갱신되었습니다.");
define("_MD_A_EDITCATEGORY","편집할 카테고리:");
define("_MD_A_CATEGORYTITLE","카테고리 타이틀:");
define("_MD_A_SELECTACATEGORYEDIT","편집할 카테고리 선택");
define("_MD_A_CATEGORYCREATED","신규 카테고리가 작성되었습니다.");
define("_MD_A_NTWNRTFUTCYMDTVTEFS","주의: 카테고리에 속한 토론방은 삭제처리되지 않습니다. 토론방의 삭제는 개별적으로 직접하셔야 합니다.");
define("_MD_A_REMOVECATEGORY","카테고리 삭제");
define("_MD_A_CREATENEWCATEGORY","신규 카테고리 작성");
define("_MD_A_YDNFOATPOTFDYAA","입력폼에 필요한 데이타를 모두 입력해 주세요<br>최저 1인이상의 조정자를 지정하셔야만 합니다.");
define("_MD_A_FORUMCREATED","토론방을 신설하였습니다.");
define("_MD_A_VTFYJC","만든 토론방을 방문");
define("_MD_A_EYMAACBYAF","에러: 토론방을 추가하기 전에 먼저 카테고리를 추가하셔야만 합니다.");
define("_MD_A_CREATENEWFORUM","신규 토론방 작성");
define("_MD_A_ACCESSLEVEL","액세스 레벨:");
define("_MD_A_CATEGORYMOVEUP","카테고리를 위로 이동하였습니다.");
define("_MD_A_TCIATHU","선택하신 카테고리는 이미 최상위에 위치하고 있습니다.");
define("_MD_A_CATEGORYMOVEDOWN","카테고리를 아래로 이동하였습니다.");
define("_MD_A_TCIATLD","선택하신 카테고리는 이미 최하위에 위치하고 있습니다.");
define("_MD_A_SETCATEGORYORDER","카테고리 표시위치의 설정");
define("_MD_A_TODHITOTCWDOTIP","포럼 메인페이지에서의 카테고리의 표시위치를 정합니다. 카테고리의 위치를 위로 이동할 경우엔 위로 버튼을 클릭, 아래로 이동할 경우엔 아래로 버튼을 클릭해주세요 ");
define("_MD_A_ECWMTCPUODITO","한번 클릭하실때마다 한칸씩 이동하게 됩니다.");
define("_MD_A_CATEGORY1","카테고리");
define("_MD_A_MOVEUP","위로");
define("_MD_A_MOVEDOWN","아래로");


define("_MD_A_FORUMUPDATE","포럼의 설정을 갱신하였습니다.");
define("_MD_A_RETURNTOADMINPANEL","관리메뉴로");
define("_MD_A_RETURNTOFORUMINDEX","포럼 메인페이지로");
define("_MD_A_ALLOWHTML","HTML태그를 사용함:");
define("_MD_A_YES","예");
define("_MD_A_NO","아니요");
define("_MD_A_ALLOWSIGNATURES","서명을 추가함:");
define("_MD_A_HOTTOPICTHRESHOLD","인기토픽의 최저 투고 수:");
define("_MD_A_POSTPERPAGE","페이지 당 표시할 투고글 수:");
define("_MD_A_TITNOPPTTWBDPPOT","(1페이지당 표시할 투고글 수를 지정해 주세요)");
define("_MD_A_TOPICPERFORUM","토론방에서의 페이지당 토픽수:");
define("_MD_A_TITNOTPFTWBDPPOAF","(토픽 리스트에서 페이지당 표시할 토픽의 수를 지정해 주세요)");
define("_MD_A_SAVECHANGES","변경저장");
define("_MD_A_CLEAR","Clear");
define("_MD_A_CLICKBELOWSYNC","투고글 수의 재집계를 실시합니다. 투고글 수가 잘못되었다고 생각되어질 경우 사용하세요");
define("_MD_A_SYNCHING","재집계 실행중");
define("_MD_A_DONESYNC","재집계 완료");
define("_MD_A_CATEGORYDELETED","카테고리를 삭제하였습니다.");

//%%%%%%	File Name  admin_priv_forums.php   	%%%%%

define("_MD_A_SAFTE","편집할 토론방을 선택");
define("_MD_A_NFID","데이타베이스에 토론방이 존재하지 않습니다.");
define("_MD_A_EFPF","편집할 비공개토론방: <b>%s</b>");
define("_MD_A_UWA","접근을 허용할 회원:");
define("_MD_A_UWOA","접근을 불허할 회원:");
define("_MD_A_ADDUSERS","추가 -->");
define("_MD_A_CLEARALLUSERS","Clear");
define("_MD_A_REVOKEPOSTING","투고를 허가하지 않음");
define("_MD_A_GRANTPOSTING","투고를 허가함");
?>