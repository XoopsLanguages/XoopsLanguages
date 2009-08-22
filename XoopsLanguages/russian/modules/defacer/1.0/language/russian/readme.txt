Что такое Defacer (v1.0 beta) ?
======================

С помощью этого модуля Xoops, вы можете изменять темы, метаданные и права доступа к любой странице.




Требования
====================

Работает в Xoops 2.3.x, 2.2.x Xoops, Xoops 2.0.18 и выше, impresscms 1.X

Другие CMS не испытаны.

Протестировано с php5 и PHP4.




Как установить Defacer
====================

Скопируйте папку defacer в каталог /modules вашего сайта.
Затем войдите на свой сайт в качестве администратора, перейдите к System Admin> Modules и найдите значок defacer в списке не установленных модулей. Затем кликните на значок установки и следуйте инструкциям на экране.




ВНИМАНИЕ, если вы НЕ используете impressCms 1.1 нужно добавить строку в header.php и footer.php в корневом каталоге инсталляции

В yoursite/header.php вставить строку

@include_once XOOPS_ROOT_PATH . '/modules/defacer/include/beforeheader.php';

Сразу после

defined("XOOPS_ROOT_PATH") or die( 'XOOPS root path not defined' );

В yoursite/footer.php вставить строку

@include_once XOOPS_ROOT_PATH . '/modules/defacer/include/beforefooter.php';

Сразу после

defined("XOOPS_ROOT_PATH") or die( 'XOOPS root path not defined' );




Советы
=======
При создании страниц вы можете использовать символ '*' в поле url для того, чтобы он соответствовал любому url.

Вы должны использовать относительные пути
Если вы используете модуль News ваш путь будет выглядеть так: yoursite/module/news/ 
Необходимо добавить, например
index.php, а не modules/news/index.php

Модуль System относителен к корневой папке
Вы можете выбрать модуль system и ввести этотs url чтобы покрыть все страницы userinfo:
userinfo.php*



Ограничения
========

Блок для изменения темы отключается при использовании Defacer.Мне нужно над этим поработать.



Обратная связь
========

Пожалуйста, используйте http://www.xuups.com (Xoops утилиты для пользователей)