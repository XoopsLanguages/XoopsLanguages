<?php
// $Id: main.php,v 1.13 2004/12/26 19:11:59 onokazu Exp $
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

//%%%%%%		Module Name phpBB  		%%%%%
//functions.php
define("_MD_ERROR","에러");
define("_MD_NOPOSTS","투고글이 없습니다.");
define("_MD_GO","보내기");

//index.php
define("_MD_FORUM","포럼");
define("_MD_WELCOME","%s 포럼(토론방)에 오신걸 환영합니다.");
define("_MD_TOPICS","토픽");
define("_MD_POSTS","투고");
define("_MD_LASTPOST","최종투고");
define("_MD_MODERATOR","조정자");
define("_MD_NEWPOSTS","마지막 방문일이후 새 투고가 있었습니다.");
define("_MD_NONEWPOSTS","마지막 방문일이후 새 투고가 없었습니다.");
define("_MD_PRIVATEFORUM","비공개토론방");
define("_MD_BY","투고자"); // Posted by
define("_MD_TOSTART","관심이 있는 토론방에 참여하셔서 의견을 나누어보시기 바랍니다.");
define("_MD_TOTALTOPICSC","총 토픽수: ");
define("_MD_TOTALPOSTSC","총 투고글수: ");
define("_MD_TIMENOW","현재시각: %s");
define("_MD_LASTVISIT","최종방문일시: %s");
define("_MD_ADVSEARCH","조건검색");
define("_MD_POSTEDON","투고일시: ");
define("_MD_SUBJECT","주제");

//page_header.php
define("_MD_MODERATEDBY","조정자 ");
define("_MD_SEARCH","검색");
define("_MD_SEARCHRESULTS","검색결과");
define("_MD_FORUMINDEX","포럼 메인페이지");
define("_MD_POSTNEW","신규 토픽 작성페이지로");
define("_MD_REGTOPOST","투고하시려면 먼저 회원등록을");

//search.php
define("_MD_KEYWORDS","키워드:");
define("_MD_SEARCHANY","또는(OR)조건에서 검색(기본값)");
define("_MD_SEARCHALL","그리고(AND)조건에서 검색");
define("_MD_SEARCHALLFORUMS","모든 토론방을 검색");
define("_MD_FORUMC","토론방:");
define("_MD_SORTBY","정렬:");
define("_MD_DATE","일시");
define("_MD_TOPIC","토픽");
define("_MD_USERNAME","아이디");
define("_MD_SEARCHIN","조건검색:");
define("_MD_BODY","본문");
define("_MD_NOMATCH","검색조건에 맞는 데이타가 존재하지 않습니다.");
define("_MD_POSTTIME","투고 일시");

//viewforum.php
define("_MD_REPLIES","답신");
define("_MD_POSTER","투고자");
define("_MD_VIEWS","열람");
define("_MD_MORETHAN","인기 토픽!");
define("_MD_MORETHAN2","인기 토픽!");
define("_MD_TOPICSTICKY","스티키 토픽");
define("_MD_TOPICLOCKED","잠긴 토픽");
define("_MD_LEGEND","Legend");
define("_MD_NEXTPAGE","다음 페이지");
define("_MD_SORTEDBY","정렬:");
define("_MD_TOPICTITLE","토픽 타이틀");
define("_MD_NUMBERREPLIES","답글 수");
define("_MD_TOPICPOSTER","투고자");
define("_MD_LASTPOSTTIME","최종투고일시");
define("_MD_ASCENDING","오름차순");
define("_MD_DESCENDING","내림차순");
define("_MD_FROMLASTDAYS","과거 %s 일분");
define("_MD_THELASTYEAR","과거 1년분");
define("_MD_BEGINNING","모두");

//viewtopic.php
define("_MD_AUTHOR","투고자");
define("_MD_LOCKTOPIC","이 토픽을 잠금");
define("_MD_UNLOCKTOPIC","이 토픽의 잠금을 해제");
define("_MD_STICKYTOPIC","스티키토픽으로 정함");
define("_MD_UNSTICKYTOPIC","스티키토픽에서 해제");
define("_MD_MOVETOPIC","이 토픽을 이동");
define("_MD_DELETETOPIC","이 토픽을 삭제");
define("_MD_TOP","Top");
define("_MD_PARENT","부모 토픽");
define("_MD_PREVTOPIC","이전 토픽");
define("_MD_NEXTTOPIC","다음 토픽");

//forumform.inc
define("_MD_ABOUTPOST","투고에 관하여");
define("_MD_ANONCANPOST","이 토론방에서는 누구나 투고를 하실 수 있습니다.");
define("_MD_PRIVATE","비공개토론방에서는 접근이 허용된 회원만이 투고를 하실 수 있습니다.");
define("_MD_REGCANPOST","이 토론방에서는 등록회원만이 투고를 하실 수 있습니다.");
define("_MD_MODSCANPOST","이 토론방에서는 오직 관리자와 조정자만이 투고할 수 있습니다.");
define("_MD_PREVPAGE","이전 페이지");
define("_MD_QUOTE","인용");

// ERROR messages
define("_MD_ERRORFORUM","ERROR: 토론방이 선택되어져 있지 않습니다.");
define("_MD_ERRORPOST","ERROR: 투고글이 선택되어져 있지 않습니다.");
define("_MD_NORIGHTTOPOST","이 토론방에 투고할 수 있는 권한이 없습니다.");
define("_MD_NORIGHTTOACCESS","이 토론방에 대한 접근권한이 없습니다.");
define("_MD_ERRORTOPIC","ERROR: 토픽이 선택되어있지 않습니다.");
define("_MD_ERRORCONNECT","ERROR: 포럼 데이타베이스에의 액세스에 실패하였습니다.");
define("_MD_ERROREXIST","ERROR: 선택하신 토론방은 존재하지 않습니다. 다시 한번 시도해 주세요!");
define("_MD_ERROROCCURED","에러가 발생했습니다.");
define("_MD_COULDNOTQUERY","포럼 데이타베이스에의 질의에 실패하였습니다.");
define("_MD_FORUMNOEXIST","Error - 선택하신 토론방/토픽은 존재하지 않습니다. 다시 한번 시도해 주세요!");
define("_MD_USERNOEXIST","해당하는 회원이 존재하지 않습니다.");
define("_MD_COULDNOTREMOVE","Error - 데이타베이스에서 투고문을 삭제하는데 실패하였습니다.");
define("_MD_COULDNOTREMOVETXT","Error - 투고문을 삭제하는데 실패하였습니다.");

//reply.php
define("_MD_ON","투고일시"); //Posted on
define("_MD_USERWROTE","%s 님이 쓰시길:"); // %s is username

//post.php
define("_MD_EDITNOTALLOWED","투고문을 편집할 권한이 없습니다.");
define("_MD_EDITEDBY","편집로그:");
define("_MD_ANONNOTALLOWED","방문객에 의한 익명투고는 허용되어 있지 않습니다. <br />먼저 회원등록을 해주세요!");
define("_MD_THANKSSUBMIT","투고해주셔서 감사합니다!");
define("_MD_REPLYPOSTED","답글이 투고되었습니다.");
define("_MD_HELLO","안녕하세요 %s 님,");
define("_MD_URRECEIVING","%s 토론방에 투고하신 글에 대한 답글의 투고가 있었음을 알려드립니다."); // %s is your site name
define("_MD_CLICKBELOW","투고글을 보시려면 아래의 링크를 클릭해 주세요!");

//forumform.inc
define("_MD_YOURNAME","아이디:");
define("_MD_LOGOUT","로그아웃");
define("_MD_REGISTER","등록");
define("_MD_SUBJECTC","주제:");
define("_MD_MESSAGEICON","메세지 아이콘:");
define("_MD_MESSAGEC","메세지:");
define("_MD_ALLOWEDHTML","사용가능 HTML태그:");
define("_MD_OPTIONS","옵션:");
define("_MD_POSTANONLY","익명 투고");
define("_MD_DISABLESMILEY","얼굴아이콘을 무효화");
define("_MD_DISABLEHTML","HTML태그 무료화");
define("_MD_NEWPOSTNOTIFY","이 토픽에 대한 신규투고가 있는 경우 통지함");
define("_MD_ATTACHSIG","서명첨부");
define("_MD_POST","투고");
define("_MD_SUBMIT","보내기");
define("_MD_CANCELPOST","투고취소");

// forumuserpost.php
define("_MD_ADD","첨가");
define("_MD_REPLY","답글");

// topicmanager.php
define("_MD_YANTMOTFTYCPTF","이 기능은 관리자와 조정자만이 사용할 수 있습니다.");
define("_MD_TTHBRFTD","토픽을 데이타데이스에서 삭제처리 하였습니다.");
define("_MD_RETURNTOTHEFORUM","토론방으로 돌아감");
define("_MD_RTTFI","포럼 메인페이지로 돌아감");
define("_MD_EPGBATA","Error - 다시 한번 시도해 주세요.");
define("_MD_TTHBM","토픽이 이동되었습니다.");
define("_MD_VTUT","토픽을 열람");
define("_MD_TTHBL","토픽을 잠궜습니다.");
define("_MD_TTHBS","스티키 토픽으로 설정하였습니다.");
define("_MD_TTHBUS","스티키 토픽에서 해제하였습니다.");
define("_MD_VIEWTHETOPIC","토픽을 열람");
define("_MD_TTHBU","토픽의 잠금을 해제합니다.");
define("_MD_OYPTDBATBOTFTTY","삭제 버튼을 클릭하시면 선택하신 토픽과 그에 속한 모든 투고글들이 완전히 삭제됩니다.");
define("_MD_OYPTMBATBOTFTTY","이동 버튼을 클릭하시면 선택하신 토픽과 그에 속한 모든 투고글들이 대상 토론방으로 이동됩니다.");
define("_MD_OYPTLBATBOTFTTY","잠금 버튼을 클릭하시면 선택하신 토픽을 잠그실 수 있습니다신규 투고 불가). 잠금은 언제라도 해제하실 수 있습니다.");
define("_MD_OYPTUBATBOTFTTY","잠금해제 버튼을 클릭하시면 선택하신 토픽의 잠금을 해제합니다. ");
define("_MD_OYPTSBATBOTFTTY","스티키 버튼을 클릭하시면 선택하신 토픽을 스티키토픽으로 설정합니다.");
define("_MD_OYPTTBATBOTFTTY","스티키 해제 버튼을 클릭하시면 선택하신 스티키토픽을 해제합니다.");
define("_MD_MOVETOPICTO","이동할 토픽:");
define("_MD_NOFORUMINDB","DB에 토론방이 존재하지 않습니다.");
define("_MD_DATABASEERROR","데이타베이스 에러(Database Error)");
define("_MD_DELTOPIC","토픽을 삭제");

// delete.php
define("_MD_DELNOTALLOWED","이 투고글을 삭제할 권한을 갖고 있지 않습니다.");
define("_MD_AREUSUREDEL","이 투고글과 이에 속하는 모든 답글들을 정말로 삭제하실 건가요?");
define("_MD_POSTSDELETED","선택하신 투고글과 그에 속한 모든 답글들이 삭제되었습니다.");

// definitions moved from global.
define("_MD_THREAD","쓰레드");
define("_MD_FROM","주소");
define("_MD_JOINED","등록일");
define("_MD_ONLINE","온라인");
define("_MD_BOTTOM","아래로");
?>
