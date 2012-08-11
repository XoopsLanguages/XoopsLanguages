<?php
// $Id: images.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Управление на изображенията');

define('_MD_ADDIMGCAT','Добавя категория:');
define('_MD_EDITIMGCAT','Редактира категория:');
define('_MD_IMGCATNAME','Име на категория:');
define('_MD_IMGCATRGRP','Избор на групите които могат да ползват управлението на изображения:<br /><br /><span style="font-weight: normal;">These are groups allowed to use the image manager for selecting images but not uploading. Webmaster has automatic access.</span>');
define('_MD_IMGCATWGRP','Избор на групите които имат права за качване на изображения:<br /><br /><span style="font-weight: normal;">Typical usage is for moderator and admin groups.</span>');
define('_MD_IMGCATWEIGHT','Ред на показване на изображенията:');
define('_MD_IMGCATDISPLAY','Да показва ли категорията?');
define('_MD_IMGCATSTRTYPE','Изображенията са качени в:');
define('_MD_STRTYOPENG','Това не може да бъде сменено след това!');
define('_MD_INDB',' Записва в базата данни (като бинарни данни)');
define('_MD_ASFILE',' Записва като файлове (в директорията за качване)<br />');
define('_MD_RUDELIMGCAT','Сигурен ли сте, че искате да изтриете цялата категория с всички изображения?');
define('_MD_RUDELIMG','Сигурен ли сте, че искате да изтриете това изображение?');

define('_MD_FAILDEL','Грешка при изтриването на  %s от базата с данни');
define('_MD_FAILDELCAT','Грешка при изтриване на категорията %s от базата');
define('_MD_FAILUNLINK','Грешка при изтриване на изображението %s от сървера');
?>