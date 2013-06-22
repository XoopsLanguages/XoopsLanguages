<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                Bluemoon.Multi-Survey                                      //
//                    Copyright (c) 2005 Yoshi.Sakai @ Bluemoon inc.         //
//                       <http://www.bluemooninc.biz/>                       //
// ------------------------------------------------------------------------- //
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
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();
?>
<h1>PopnupBlog(Redwood)との連動について</h1>

アンケートの回答をブログに記録するには２つの方法があります。

<h2>１：１つのブログにすべての回答を記録する</h2>

<li>予め、ブログを準備して投稿元メールアドレスにサーベイの一般設定に登録したアドレスを設定します。作成したブログのブログＩＤをメモします。
<li>サーベイの編集でGeneralを開きタイトルに b + ブログＩＤ + , を付与します。
<br>
　　例) b1,ブログＩＤ１へ投稿するタイトル
<br>
<li>EmailにPopnupBlogの受信用メールアドレスを設定します。
<li>From Optionに「サーベイのアドレス」を設定します。

<h2>２：ユーザ毎のブログに回答を記録する</h2>
<li>予め、ブログを準備して投稿元メールアドレスにユーザのメールアドレスを設定します。作成したブログのブログＩＤをメモします。
<li>サーベイの編集でQuestionsを開き、質問項目を追加します。任意のフィールドネームで質問テキスト[blogid]タイプ[numeric]必須項目[はい]で質問を作成します。
<li>EmailにPopnupBlogの受信用メールアドレスを設定します。
<li>From Optionに「登録ユーザのアドレス」を設定します。

<h2>３：注意事項</h2>
<li>PopnupBlogとMulti-Surveyのどちらでもメール処理を行うには２つのメールアドレスが必要になります。
<?php
	xoops_cp_footer();
?>
