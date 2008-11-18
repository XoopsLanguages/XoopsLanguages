<?php
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
$content .=
"<u><b>XOOPS 소개</b></u>
<p>
<b>XOOPS</b> 는 객체지향(Object Oriented)적 디자인의 PHP 오픈소스 프로그램입니다.
현재 XOOPS는 다양한 운영환경을 지원하고 있으며..향후 지원폭을 계속 늘려갈 것입니다.
짧은 시간내에 간단히..그러나 정말로 멋진 커뮤니티사이트, 인트라넷용 포탈사이트, 기업 포탈사이트, 웹 블로그 등을 작성하시길 원하신다면 XOOPS가 최적의 선택이 될 것입니다.
</p>
<p>
XOOPS 의 라이센스는 <a href='http://www.gnu.org/copyleft/gpl.html' target='_blank'>GNU General Public License (GPL)</a> 입니다. 
따라서, 여러분은 GPL의 조건내에서라면 자유롭게 이용/수정/재배포하실 수 있습니다.
</p>
<u><b>요구사양</b></u>
<br />
<ul>
<li>웹서버 (<a href='http://www.apache.org/' rel='external' title='Apache'>Apache</a>, IIS, Roxen, etc)</li>
<li><a href='http://www.php.net/' rel='external' title='PHP'>PHP</a> 4.3.0 이상 (버전 5.2 이상 추천)</li>
<li><a href='http://www.mysql.com/' rel='external' title='MySQL'>MySQL</a> Database 3.23 이상(버전 4.1 이상 추천)</li>
</ul>
<br />
<u><b>설치전 준비사항</b></u>
<ul>
<li>웹서버, PHP, 데이타베이스서버를  올바르게 설치한다.</li>
<li>XOOPS 용의 데이타베이스를 하나 준비한다.</li>
<li>준비한 데이타베이스에 접근가능한 데이타베이스서버 사용자계정을 준비한다.</li>
<li>uploads/, cache/, templates_c/ 디렉토리와  mainfile.php 파일을 쓰기가능상태로 설정한다.</li>
<li>보안을 위해 <em>xoops_lib</em>디렉토리(XOOPS 라이브러리용 디렉토리)와  <em>xoops_data</em>디렉토리(XOOPS data용 디렉토리)를 웹에서 직접 액세스불가능한 <a href='http://phpsec.org/projects/guide/3.html' rel='external'>document root</a>의 외부에 두기를 권한다. 또한 해당 디렉토리명을 변경할 수도 있다.</li>
<li><em>xoops_data/</em> 디렉토리를 쓰기가능상태로 설정한다. 또한 <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em>, <em>xoops_data/caches/smarty_compile/</em> 디렉토리를 작성하여 쓰기가능상태로 설정한다.</li>
<li>protector 모듈(제작자:GIJOE)을 추가 설치할 계획이면, <em>/extras/mainfile.dist.php.protector</em>파일을 이용하면 편리하다.(즉, 기존의 <em>mainfile.dist.php</em>파일 대신 <em>/extras/mainfile.dist.php.protector</em>을 <em>htdocs/mainfile.dist.php</em>으로 이름바꾸기하여 사용하면 된다.)</li>
<li>웹브라우저를  cookie 가능,  JavaScript 가능으로 설정한다.</li>
</ul>
<u><b>설치</b></u>
<p>
이 설치마법사를 따라가 주시기 바랍니다.
</p>
";
?>