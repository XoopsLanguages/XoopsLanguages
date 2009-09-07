<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-15 andrey3761

$content .=
"<h3>Ваш сайт</h3>
<p>Нажмите <a href='../index.php'>ЗДЕСЬ</a> чтобы увидеть домашнюю страницу Вашего сайта.</p>
<h3>Поддержка</h3>
<p>Посетить <a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a> и <a href='http://xoops2.ru/' rel='external'>Российская поддержка XOOPS</a>, а также <a href='http://xoops.radio-hobby.org/' rel='external'>сайт перевода данной версии XOOPS.Radio-Hobby.org</a></p>
";

$content .=
"<h3>Конфигурация безопасности</h3>
<p>Инсталятор попытается выполнить настройки безопасности. Пожалуйста проверьте чтобы удостовериться:
<div class='confirmMsg'>
Файл <em>mainfile.php</em> только для чтения.<br />
Удалена папка <em>{$installer_modified}</em> (или <em>install</em>, если она не была автоматически переименованна)  с вашего сервера.
</div>
</p>
";

?>