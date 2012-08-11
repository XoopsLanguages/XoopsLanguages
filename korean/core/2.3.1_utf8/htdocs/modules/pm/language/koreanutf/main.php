<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//               XOOPS Korean - PHP Content Management System                        //
//                        (translated by wanikoo[ wani@wanisys.net ])                     //
//                                   <http://www.wanisys.net/>                                        //
//  ------------------------------------------------------------------------ //

//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","PM쪽지가 삭제되었습니다.");
define("_PM_PRIVATEMESSAGE","PM 쪽지");
define("_PM_INBOX","수신함");
define("_PM_FROM","보낸 사람");
define("_PM_YOUDONTHAVE","PM쪽지가 없습니다.");
define("_PM_FROMC","보낸 사람: ");
define("_PM_SENTC","발송일시: "); // The date of message sent
define("_PM_PROFILE","프로필");

// %s is a username
define("_PM_PREVIOUS","이전 PM쪽지");
define("_PM_NEXT","다음 PM쪽지");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","PM쪽지를 이용하시려면 먼저 회원등록을 하셔야 합니다.");
define("_PM_REGISTERNOW","지금 등록");
define("_PM_GOBACK","되돌아감");
define("_PM_USERNOEXIST","선택하신 회원은 존재하지 않습니다.");
define("_PM_PLZTRYAGAIN","아이디를 재확인하신 후 다시 시도해 주시기 바랍니다.");
define("_PM_MESSAGEPOSTED","PM쪽지를 보냈습니다.");
define("_PM_CLICKHERE","PM쪽지 수신함으로 이동");
define("_PM_ORCLOSEWINDOW","이 윈도우를 닫음");
define("_PM_USERWROTE","%s 님이 쓰시길:");
define("_PM_TO","받는 사람: ");
define("_PM_SUBJECTC","제목: ");
define("_PM_MESSAGEC","메세지: ");
define("_PM_CLEAR","리셋");
define("_PM_CANCELSEND","취소");
define("_PM_SUBMIT","보내기");
define("_PM_SAVEINOUTBOX","송신함에 복사본 저장?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","제목");
define("_PM_DATE","발송일시");
define("_PM_NOTREAD","미독");
define("_PM_SEND","발송");
define("_PM_DELETE","삭제");
define("_PM_TOSAVE","저장");
define("_PM_UNSAVE","저장취소");
define("_PM_EMPTY","비우기");
define("_PM_REPLY","답장");
define("_PM_PLZREG","PM쪽지를 사용하시려면 먼저 회원등록을 하셔야 합니다.");
define("_PM_SAVED_PART","저장함 최대용량( %d ) 현재 사용량( %d )");
define("_PM_SAVED_ALL","PM쪽지가 저장함으로 이동되어졌습니다.");
define("_PM_UNSAVED","PM쪽지가 저장함에서 제거되어졌습니다.");
define("_PM_EMPTIED","이 PM쪽지함이 비워졌습니다.");
define("_PM_RUSUREEMPTY","이 PM쪽지함을 정말로 비우시겠습니까?");
define("_PM_RUSUREDELETE","이 PM쪽지(들)을 정말로 삭제하시겠습니까?");

define("_PM_ONLINE","온라인");

define("_PM_RECEIVE","수신섹션");
define("_PM_POST","송신섹션");
define("_PM_READBOX","읽은수신함");
define("_PM_RSAVEBOX","저장수신함");
define("_PM_OUTBOX","송신함");
define("_PM_SAVEBOX","저장함");
define("_PM_SENTBOX","보낸송신함");
define("_PM_PSAVEBOX","저장송신함");
define("_PM_SAVE","저장");
define("_PM_SAVED","성공적으로 저장되었습니다.");
define("_PM_TOC","From: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","정렬");
define("_PM_ORDER","순서");
define("_PM_UID","파트너의 UID");
define("_PM_TIME","발송일시");
define("_PM_ASC","오름차순");
define("_PM_DESC","내림차순");
define("_PM_LIMIT","페이지당 PM쪽지수");
define("_PM_BACKTOBOX","이전 PM쪽지함으로 돌아가기");
define("_PM_SORTSUBMIT","보내기");
define("_PM_PREVIOUSP","이전");
define("_PM_NEXTP","다음");

define("_PM_MAILNOTIFY","%s님,%s님으로부터 새PM쪽지가 도착하였습니다.");
define("_PM_MAILMESSAGE","안녕하세요!\n%s님으로 부터 새PM쪽지가 도착하였습니다.\n\nPM쪽지 제목은\n%s\n\n해당 PM쪽지는 아래의 URL에서 확인하시기 바랍니다.\n%s\n\n-----------\n님은 PM쪽지 설정에서 메일로 통보를 선택하신 상태입니다.\n\nPM쪽지 설정의 변경은 다음 URL에서\n%s\n\n이 메일에 대한 답장은 보내실 필요없습니다.\n\n---------\n그럼 이만\n%s\n%s\n%s");

define("_PM_EMAIL","메일");
define("_PM_EMAIL_DESC","%s 님, 이 메세지는 님의 계정에 도착한 PM쪽지를 재전송할 것입니다. From:".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","From %s");
define("_PM_EMAIL_TO","To %s");
define("_PM_EMAIL_SUBJECT","[message]%s");
define("_PM_EMAIL_MESSAGE","PM쪽지 내용");

define("_PM_ACTION_DONE","성공적으로 수행되어졌습니다.");
define("_PM_ACTION_ERROR","작업수행에 실패하였습니다.");
?>