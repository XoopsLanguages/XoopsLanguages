<?php
// $Id: admin.php,v 1.8 2004/12/26 19:12:13 onokazu Exp $
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

//%%%%%%	Admin Module Name  Polls 	%%%%%
define("_AM_DBUPDATED","데이타베이스를 성공적으로 갱신하였습니다!");
define("_AM_POLLCONF","투표 설정");
define("_AM_POLLSLIST","투표 리스트");
define("_AM_AUTHOR","투표 작성자");
define("_AM_DISPLAYBLOCK","블록에 표시");
define("_AM_POLLQUESTION","질문");
define("_AM_VOTERS","투표자 수");
define("_AM_VOTES","총 투표 수");
define("_AM_EXPIRATION","기한");
define("_AM_EXPIRED","종료");
define("_AM_VIEWLOG","로그 열람");
define("_AM_CREATNEWPOLL","신규 투표의 작성");
define("_AM_POLLDESC","설명");
define("_AM_DISPLAYORDER","표시순");
define("_AM_ALLOWMULTI","다중선택을 허가함");
define("_AM_NOTIFY","투표종료시에 작성자에게 통지메일을 보냄");
define("_AM_POLLOPTIONS","선택항목");
define("_AM_EDITPOLL","투표의 편집");
define("_AM_FORMAT","형식: yyyy-mm-dd hh:mm:ss");
define("_AM_CURRENTTIME","현재 시각: %s");
define("_AM_EXPIREDAT","%s 에 종료");
define("_AM_RESTART","이 투표를 재개함");
define("_AM_ADDMORE","선택항목을 추가");
define("_AM_RUSUREDEL","정말로 이 투표와 그에 속한 코멘트등을 모두 삭제하시겠습니까?");
define("_AM_RESTARTPOLL","투표를 재개함");
define("_AM_RESET","투표 로그데이타를 초기화함");
define("_AM_ADDPOLL","투표 추가");
?>