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
<h1>mailto オプションの使い方</h1>

アンケート中に mailto を記述して、任意のアドレスにメールを送信できます。
これは、「サーベイを編集する」のGeneralで回答結果を送信するメールアドレスとは別に設定可能です。
このmailtoオプションを使用すれば、通常のお問い合わせフォームと同様の入力画面が作成可能です。

<h2>１：セクションテキストに mailto を記述する</h2>

<li>サーベイの編集にて、「新しいフィールド」をクリックします。
<li>任意のフィールドネームを入力します。
<li>タイプはセクションテキストを選択します。
<li>入力文字数・制限・必須項目は設定しません。
<li>テキストフィールドにmailtoスキームを記述します。<br>例<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="mailto:who@mail.com"&gt;メール送信&lt;/a&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;A HREF="mailto:who@mail.com?subject=表題&body=通知"&gt;メール送信&lt;/A&gt;<br>
<h2>２：入力項目に mailto を記述する</h2>
<li>サーベイの編集にて、「新しいフィールド」をクリックします。
<li>メールの表題は、フィールドネーム'mailsubject'をテキスト・ボックスとして追加します。
<li>メールの送信先は、フィールドネーム'mailto'をテキスト・ボックスとして追加します。
<li>メールの送信元は、フィールドネーム'mailfrom'をテキスト・ボックスとして追加します。
<li>メールの送信CCは、フィールドネーム'mailcc'をテキスト・ボックスとして追加します。
<li>メールの送信者名は、フィールドネーム'mailname'をテキスト・ボックスとして追加します。この値はbodyの最後に追加されます。
<li>メールの本文は、フィールドネーム'mailbody'をエッセイ・ボックスとして追加します。
<li>送信元アドレスの指定はフィールドネーム'mailfromset'をイエス・ノー項目として追加します。
イエスの場合は、'mailfrom'で入力されたメールアドレスが適用されます。
ノーの場合は、サーベイの一般設定に指定したメールアドレスかＸＯＯＰＳの管理者アドレスが適用されます。
いずれの場合も from / Reply-To はコントロールできますが、Return-Path:は、SMTPサーバに依存します。(-f アドレス）オプションを受け付けるMTAのみ有効となります。これはSendmailのオプション機能で、postfixでも利用可能です。

<h2>３：セクションテキストと入力項目の２つでmailtoを記述する</h2>

前述の説明ではそれぞれセクションテキストと入力項目別々に設定する方法を解説しましたが、２つを混ぜて使うことも可能です。
この場合、セクションテキストで指定した変数が先に代入され、後から入力項目の値で上書きされます。
<li>セクションテキストを作成してmailtoを記述し、メールアドレスとサブジェクトを設定します。
<li>入力項目にmailbodyを作成します。
<li>これで、メールアドレスとサブジェクトが固定でメッセージだけ任意入力のメールフォームとして利用可能になります。

<h2>４：入力デフォルト値の設定</h2>
モジュール管理のサーベイ管理タグより「サーベイの結果を見る」にて回答者リストボックスから回答結果を見る事ができますが、
ここで「この投稿を入力初期値にセットする」をクリックするとデフォルトの入力値に設定できます。
また、解除は「サーベイを編集する」からサーベイを選びGeneralタブ項目Default Responseを空欄にします。

<hr>
<h1>応用例</h1>

<h2>１：メーリングリストへの登録</h2>
以下の設定によりメーリングリストへの登録フォームとして利用可能です。
メール送信元はメッセージ欄が、'mailfrom'で入力されたメールアドレスとなります。（メッセージの内容は送信されません。）
<p>
<li>サーベイの編集'General'のEmail欄をメーリングリストの登録受付アドレスに指定します。また、From Option はアンケート中のemail欄とします。
<li>メールの送信元は、フィールドネーム'mailfrom'をテキスト・ボックスとして追加します。
<li>メーリングリストへの送信指定はフィールドネーム'to_mailinglist'をイエス・ノー項目として追加します。
イエスの場合は、'mailfrom'で入力されたメールアドレスを送信元として送信されます。
ノーの場合は、何も送信されません。

<?php
	xoops_cp_footer();
?>
