<?php
// $Id: admin.php,v 1.8 2003/09/18 00:09:51 okazu Exp $
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

//%%%%%%	File Name  admin.php 	%%%%%
define('_MD_AM_DBUPDATED','데이타베이스를 성공적으로 갱신하였습니다!');
define('_MD_AM_DBERROR','에러가 발생하여 데이타베이스의 갱신에 실패하였습니다!');

define('_MD_AM_CONFIG','시스템 설정');

// Admin Module Names
define('_MD_AM_ADGS','그룹관리');
define('_MD_AM_BANS','배너관리');
define('_MD_AM_BKAD','블록관리');
define('_MD_AM_MDAD','모듈관리');
define('_MD_AM_SMLS','얼굴아이콘관리');
define('_MD_AM_RANK','등록회원등급관리');
define('_MD_AM_USER','등록회원관리');
define('_MD_AM_FINDUSER','등록회원검색');
define('_MD_AM_PREF','일반설정');
define('_MD_AM_VRSN','버전');
define('_MD_AM_MLUS','메일보내기');
define('_MD_AM_IMAGES','이미지관리');
define('_MD_AM_AVATARS','아바타관리');
define('_MD_AM_TPLSETS','템플렛관리');
define('_MD_AM_COMMENTS','코멘트관리');

// Group permission phrases
define('_MD_AM_PERMADDNG','그룹퍼미션추가에 실패하였습니다.(퍼미션명: %s 해당아이템: %s 해당그룹: %s');
define('_MD_AM_PERMADDOK','그룹퍼미션을 추가하였습니다.(퍼미션명: %s 해당아이템: %s 해당그룹: %s');
define('_MD_AM_PERMRESETNG','%s 모듈의 그룹퍼미션 설정초기화에 실패하였습니다.');
define('_MD_AM_PERMADDNGP','이 아이템의 상위(부모)아이템 모두에게 퍼미션을 주어야만 합니다.');

?>