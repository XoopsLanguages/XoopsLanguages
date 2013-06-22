<?php
// $Id$

include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();
?>
<h1>バージョンアップについて</h1>
この作業を行うにはバックアップ・リストアツールが必要です。 <p>
<li><a href=http://www.bluemooninc.biz/~xoops2/modules/mydownloads/singlefile.php?cid=3&lid=36">BackPack</a> は Bluemooninc.biz　で入手できます。<p>
<li><a href=http://www.phpmyadmin.net/home_page/index.php">phpMyAdmin</a> は The phpMyAdmin Project　で入手できます。<p>
<hr>

<h2>V0.3からV0.4へのアップデート</h2>

<h3>1. bmsurvey_surveyテーブルをバックアップ</h3>
<p>現在使用している bmsurvey_surveyテーブルをバックアップしてください。 ('xoops_'はXOOPS接頭語です。) 

<h3>2. バックアップファイルの編集</h3>
<p><li>Text Editorでバックアップファイルを開いてください。
<p><li>bmsurvey_surveyテーブルの定義に対して'changed'の１つ下の行に以下の定義を加えてください。
<p>&nbsp;&nbsp; response_id	INT UNSIGNED NOT NULL,
<p><li>それを保存してください。 

<h3>3. リストア</h3>
<p>編集されたバックアップファイルをリストアしてください。
<p>phpMyAdminを使用してリストする場合は、目的のテーブルをドロップしてリストアください。
<hr>

<h2>V0.2XからV0.3へのアップデート</h2>

<h3>1. BMEF テーブルをバックアップ</h3>
<p>現在使用している xoops_bmef_*テーブルの全てをバックアップしてください。 ('xoops_'はXOOPS接頭語です。) 

<h3>2. バックアップファイルの編集</h3>
<p><li>Text Editorでバックアップファイルを開いてください。
<p><li>bmef_respondentテーブルのすべての構造を置き換えてください。 
<p>&nbsp;&nbsp; bmsurvey/sql/mysql.sqlの上のbmsurvey_respondentテーブルからすべての構造をコピーしてください、そして、それを置き換えてください。
<p><li>bmef_surveyテーブルを探し、'mail'の１つ下の行に以下の定義を加えてください。
<p>&nbsp;&nbsp; from_option TINYINT( 3 ) UNSIGNED DEFAULT'0'NOT NULL
<p><li>すべてのテーブル名称を'bmef_'から'bmsurvey_'へ置き換えてください。
<p><li>それを保存してください。 

<h3>3. リストア</h3>
<p>編集されたバックアップファイルをリストアしてください。
<p>phpMyAdminを使用してリストする場合は、bmsurveyの全てのテーブルをドロップしてリストアください。
<hr>

<?php
	xoops_cp_footer();
?>
