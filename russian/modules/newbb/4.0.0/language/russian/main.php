<?php
// $Id: main.php 2171 2008-09-23 13:43:42Z phppp $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Ошибка');
define('_MD_NOPOSTS','Нет сообщений');
define('_MD_GO','Перейти');
define('_MD_SELFORUM','Выберите форум');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Вложенный файл:');
define('_MD_ALLOWED_EXTENSIONS','Допустимые расширения');
define('_MD_MAX_FILESIZE','Максимальный размер файла');
define('_MD_ATTACHMENT','Прикреплённый файл');
define('_MD_FILESIZE','Размер');
define('_MD_HITS','Просмотры');
define('_MD_GROUPS','Группы:');
define('_MD_DEL_ONE','Удалить только это сообщение');
define('_MD_DEL_RELATED','Удалить все сообщения в теме');
define('_MD_MARK_ALL_FORUMS','Пометить все форумы');
define('_MD_MARK_ALL_TOPICS','Пометить все темы');
define('_MD_MARK_UNREAD','непрочитанными');
define('_MD_MARK_READ','прочитанными');
define('_MD_ALL_FORUM_MARKED','Все офрумы помечены');
define('_MD_ALL_TOPIC_MARKED','Все темы помечены');
define('_MD_BOARD_DISCLAIMER','Уведомление');


//index.php
define('_MD_ADMINCP','Админ');
define('_MD_FORUM','Форум');
define('_MD_WELCOME','Добро пожаловать в форум %s.');
define('_MD_TOPICS','Тем');
define('_MD_POSTS','Сообщений');
define("_MD_DIGESTS","Обзоров");
define('_MD_LASTPOST','Последнее сообщение');
define('_MD_MODERATOR','Модераторы');
define('_MD_NEWPOSTS','Новые сообщения');
define('_MD_NONEWPOSTS','Нет новых сообщений');
define('_MD_PRIVATEFORUM','Приватный форум');
define('_MD_BY','Отправитель:'); // Posted by
define('_MD_TOSTART','Для начала просмотра сообщений, выберите форум, который хотите посетить, из списка предложенного ниже.');
define('_MD_TOTALTOPICSC','Всего тем: ');
define('_MD_TOTALPOSTSC','Всего сообщений: ');
define('_MD_TOTALUSER','Всего пользователей: ');
define('_MD_TIMENOW','Текущее время %s');
define('_MD_LASTVISIT','Ваш последний визит был: %s');
define('_MD_USER_LASTVISIT','Ваш последний визит: %s');
define('_MD_USER_LASTPOST','Ваше последнее сообщение: %s');
define('_MD_USER_NOLASTPOST','Вы ещё не отправляли сообщений');
define('_MD_USER_TOPICS','Ваши Темы: ');
define('_MD_USER_POSTS','Сообщения: ');
define('_MD_USER_DIGESTS','Обзоры: ');

define('_MD_VIEW_NEWPOSTS','Показать новые сообщения');


define('_MD_ADVSEARCH','Расширенный поиск');
define('_MD_POSTEDON','Отправлено: ');
define('_MD_SUBJECT','Тема: ');
define('_MD_INACTIVEFORUM_NEWPOSTS','Неактивный форум с новыми ответами');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Неактивный форум без новых ответов');
//define('_MD_PRIVATEFORUM_NEWPOSTS','Приватный форум с новыми сообщениями');
//define('_MD_PRIVATEFORUM_NONEWPOSTS','Приватный форум без новых сообщений');
define('_MD_SUBFORUMS','Подфорумы');
define('_MD_MAINFORUMOPT','Основные опции');
define("_MD_PENDING_POSTS_FOR_AUTH","Сообщения, ожидающие одобрения:");

define('_MD_TODAYTOPICSC','Темы за сегодня: ');
define('_MD_TODAYPOSTSC','Сообщения за сегодня: ');
define('_MD_TOTALDIGESTSC','Все обзоры: ');



//page_header.php
define('_MD_MODERATEDBY','Модерируется');
define('_MD_SEARCH','Поиск');
//define('_MD_SEARCHRESULTS','Результаты поиска');
define('_MD_FORUMINDEX','%s содержание форума');
define('_MD_POSTNEW','Создать новое сообщение');
define('_MD_REGTOPOST','Зарегистрируйтесь для создания');

//search.php
define('_MD_SEARCHALLFORUMS','Поиск во всех форумах');
define('_MD_FORUMC','Форум:');
define('_MD_AUTHORC','Автор:');
define('_MD_SORTBY','Сортировать по:');
define('_MD_DATE','Дата');
define('_MD_TOPIC','Темы');
define('_MD_POST2','Сообщения');
define('_MD_USERNAME','Имя пользователя');
define('_MD_BODY','Текст');
define('_MD_SINCE','Время создания');

//viewforum.php
define('_MD_REPLIES','Ответы');
define('_MD_POSTER','Отправитель');
define('_MD_VIEWS','Просмотры');
define('_MD_MORETHAN','Новые сообщения [в популярном]');
define('_MD_MORETHAN2','Нет новых сообщений [в популярном]');
define('_MD_TOPICSHASATT','Тема имеет вложения');
define('_MD_TOPICHASPOLL','Тема имеет опрос');
define('_MD_TOPICLOCKED','Тема заблокирована');
define('_MD_LEGEND','Легенда');
define('_MD_NEXTPAGE','Следующая страница');
define('_MD_SORTEDBY','Сортировать по');
define('_MD_TOPICTITLE','названию темы');
define('_MD_NUMBERREPLIES','количеству ответов');
define('_MD_TOPICPOSTER','создателю темы');
define('_MD_TOPICTIME','Время создания');
define('_MD_LASTPOSTTIME','времени последнего сообщения');
define('_MD_ASCENDING','по возрастанию');
define('_MD_DESCENDING','по убыванию');
define('_MD_FROMLASTHOURS','За последние %s часов');
define('_MD_FROMLASTDAYS','За последние %s дней');
define('_MD_THELASTYEAR','За последний год');
define('_MD_BEGINNING','С самого начала');
define('_MD_SEARCHTHISFORUM','Искать в этом форуме');
define('_MD_TOPIC_SUBJECTC','Префикс темы:');


define('_MD_RATINGS','Рейтинг');
define("_MD_CAN_ACCESS","Вы <strong>можете</strong> обращатся к форуму.<br />");
define("_MD_CANNOT_ACCESS","Вы <strong>не можете</strong> обращатся к форуму.<br />");
define("_MD_CAN_POST","Вы <b>можете</b> начинать темы.<br />");
define("_MD_CANNOT_POST","Вы <b>не можете</b> начинать темы.<br />");
define("_MD_CAN_VIEW","Вы <b>можете</b> просматривать темы.<br />");
define("_MD_CANNOT_VIEW","Вы <b>не можете</b> просматривать темы.<br />");
define("_MD_CAN_REPLY","Вы <b>можете</b> отвечать в теме.<br />");
define("_MD_CANNOT_REPLY","Вы <b>не можете</b> отвечать в теме.<br />");
define("_MD_CAN_EDIT","Вы <b>можете</b> редактировать свои сообщения.<br />");
define("_MD_CANNOT_EDIT","Вы <b>не можете</b> редактировать свои сообщения.<br />");
define("_MD_CAN_DELETE","Вы <b>можете</b> удалять свои сообщения.<br />");
define("_MD_CANNOT_DELETE","Вы <b>не можете</b> удалять свои сообщения.<br />");
define("_MD_CAN_ADDPOLL","Вы <b>можете</b> создавать опросы.<br />");
define("_MD_CANNOT_ADDPOLL","Вы <b>не можете</b> создавать опросы.<br />");
define("_MD_CAN_VOTE","Вы <b>можете</b> голосовать.<br />");
define("_MD_CANNOT_VOTE","Вы <b>не можете</b> голосовать.<br />");
define("_MD_CAN_ATTACH","Вы <b>можете</b> прикреплять файлы к сообщениям.<br />");
define("_MD_CANNOT_ATTACH","Вы <b>не можете</b> прикреплять файлы к сообщениям.<br />");
define("_MD_CAN_NOAPPROVE","Вы <b>можете</b> писать без одобрения сообщений.<br />");
define("_MD_CANNOT_NOAPPROVE","Вы <b>не можете</b> писать без одобрения сообщений.<br />");
define("_MD_CAN_TYPE","You <strong>can</strong> use topic type.<br />");
define("_MD_CANNOT_TYPE","You <strong>cannot</strong> use topic type.<br />");
define("_MD_CAN_HTML","Вы <strong>можете</strong> использовать HTML теги.<br />");
define("_MD_CANNOT_HTML","Вы <strong>не можете</strong> использовать HTML теги.<br />");
define("_MD_CAN_UPLOAD","Вы <strong>можете</strong> прикреплять файлы.<br />");
define("_MD_CANNOT_UPLOAD","Вы <strong>не можете</strong> прикреплять файлы.<br />");
define("_MD_CAN_SIGNATURE","Вы <strong>можете</strong> использовать подпись.<br />");
define("_MD_CANNOT_SIGNATURE","Вы <strong>не можете</strong> использовать подпись.<br />");

define("_MD_IMTOPICS","Важные темы");
define("_MD_NOTIMTOPICS","Темы форума");
define('_MD_FORUMOPTION','Опции форума');

define('_MD_VAUP','Посмотреть все неотвеченные сообщения');
define('_MD_VANP','Посмотреть все новые сообщения');


define('_MD_UNREPLIED','неотвеченные темы');
define('_MD_UNREAD','непрочтённые темы');
define('_MD_ALL','все темы');
define('_MD_ALLPOSTS','все ответы');
define('_MD_VIEW','Просмотреть');

//viewtopic.php
define('_MD_AUTHOR','Автор');
define('_MD_LOCKTOPIC','Заблокировать эту тему');
define('_MD_UNLOCKTOPIC','Разблокировать эту тему');
define('_MD_UNSTICKYTOPIC','Снять с темы Важность');
define('_MD_STICKYTOPIC','Сделать эту тему Важной');
define('_MD_DIGESTTOPIC','Сделать из этой темы дайджест');
define('_MD_UNDIGESTTOPIC','Убрать дайджест из этой темы');
define('_MD_MERGETOPIC','Прикрепить эту тему');
define('_MD_MOVETOPIC','Перенести эту тему');
define('_MD_DELETETOPIC','Удалить эту тему');
define('_MD_TOP','Наверх');
define('_MD_BOTTOM','Вниз');
define('_MD_PREVTOPIC','Предыдущая тема');
define('_MD_NEXTTOPIC','Следующая тема');
define('_MD_GROUP','Группа:');
define('_MD_QUICKREPLY','Быстрый ответ');
define('_MD_POSTREPLY','Написать ответ');
define('_MD_PRINTTOPICS','Печать темы');
define('_MD_PRINT','Печать');
define('_MD_REPORT','Пожалиться админу на пост');
define('_MD_PM','PM');
define('_MD_EMAIL','Email');
define('_MD_WWW','WWW');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK','URL этого обсуждения');
define('_MD_ADDTOLIST','Добавить в список контактов');
define('_MD_TOPICOPT','Опции темы');
define('_MD_VIEWMODE','Режим просмотра');
define('_MD_NEWEST','Новые первыми');
define('_MD_OLDEST','Старые первыми');

define('_MD_FORUMSEARCH','Поиск в форуме');

define('_MD_RATED','Оценка:');
define('_MD_RATE','Оценить тему');
define('_MD_RATEDESC','Оценить эту тему');
define('_MD_RATING','Голосовать');
define('_MD_RATE1','Ужасно');
define('_MD_RATE2','Плохо');
define('_MD_RATE3','Средне');
define('_MD_RATE4','Хорошо');
define('_MD_RATE5','Отлично');

define('_MD_TOPICOPTION','Опции темы');
define('_MD_KARMA_REQUIREMENT','Ваш уровень: %s, не соответствует нужному: %s. <br /> Попробуйте позже.');
define('_MD_REPLY_REQUIREMENT','Чтобы прочитать это сообщение, сначала необходимо ответить.');
define('_MD_TOPICOPTIONADMIN','Админ1 опции темы');
define('_MD_POLLOPTIONADMIN','Админ опции голосования');

define('_MD_EDITPOLL','Редактировать опрос');
define('_MD_DELETEPOLL','Удалить опрос');
define('_MD_RESTARTPOLL','Начать опрос заново');
define('_MD_ADDPOLL','Добавить опрос');

define('_MD_QUICKREPLY_EMPTY','Введите быстрый ответ здесь');

define('_MD_LEVEL','Уровень :');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');

define('_MD_BROWSING','Просмотр этой темы:');
define('_MD_POSTTONEWS','Отослать этот постинг в новости');

define('_MD_EXCEEDTHREADVIEW','Количество ответов превозходит порог нитьевого режима<br />Изменение на плоский режим');


//forumform.inc
define('_MD_PRIVATE','Это <b>Приватный</b> форум.<br />Только пользователи со специальным доступом могут создавать новые темы и отвечать в этом форуме');
define('_MD_QUOTE','Цитата');
define('_MD_VIEW_REQUIRE','Посмотреть требования');
define('_MD_REQUIRE_KARMA','Уровень');
define('_MD_REQUIRE_REPLY','Ответ');
define('_MD_REQUIRE_NULL','Без требований');

define("_MD_SELECT_FORMTYPE","Выберите тип формы сообщений");

define("_MD_FORM_COMPACT","Простая");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK Editor");
define("_MD_FORM_KOIVI","Koivi Editor");
define("_MD_FORM_TINYMCE","TinyMCE Editor");

// ERROR messages
define('_MD_ERRORFORUM','ОШИБКА: Форум не выбран!');
define('_MD_ERRORPOST','ОШИБКА: Сообщение не выбрано!');
define('_MD_NORIGHTTOVIEW','У вас нет прав для просмотра этой темы.');
define('_MD_NORIGHTTOPOST','У вас нет прав для записи сообщения в этот форум.');
define('_MD_NORIGHTTOEDIT','У вас нет прав для редактирования этого форума.');
define('_MD_NORIGHTTOREPLY','У вас нет прав для ответа в этом форуме');
define('_MD_NORIGHTTOACCESS','У вас нет прав для доступа в этот форум.');
define('_MD_ERRORTOPIC','ОШИБКА: Тема не выбрана!');
define('_MD_ERRORCONNECT','ОШИБКА: Не могу подключиться к базе данных форумов.');
define('_MD_ERROREXIST','ОШИБКА: Выбранный Вами форум не существует. Пожалуйста вернитесь назад и попробуйте снова.');
define('_MD_ERROROCCURED','Произошла ошибка');
define('_MD_COULDNOTQUERY','Не могу выполнить запрос к базе данных форумов.');
define('_MD_FORUMNOEXIST','Ошибка - Форум/тема выбранные Вами не существует. Пожалуйста вернитесь назад и попробуйте снова.');
define('_MD_USERNOEXIST','Пользователь не существует.  Пожалуйста вернитесь назад и попробуйте снова.');
define('_MD_COULDNOTREMOVE','Ошибка - Не могу удалить сообщения из базы данных!');
define('_MD_COULDNOTREMOVETXT','Ошибка - Не могу удалить текст сообщения!');
define('_MD_TIMEISUP','Ваше время для редактирования этого сообщения истекло.');
define('_MD_TIMEISUPDEL','Ваше время для удаления этого сообщения истекло.');

//reply.php
define('_MD_ON',''); //Posted on
define('_MD_USERWROTE','%s пишет:'); // %s is username
define('_MD_RE','Re');

//post.php
define('_MD_EDITNOTALLOWED','Вам не разрешено редактировать это сообщение!');
define('_MD_EDITEDBY','Отредактировано пользователем');
define('_MD_ANONNOTALLOWED','Анонимным пользователям не разрешено создавать сообщения.<br>Пожалуйста зарегистрируйтесь.');
define('_MD_THANKSSUBMIT','Спасибо за сообщение!');
define('_MD_REPLYPOSTED','Был создан ответ на поднятую Вами тему.');
define('_MD_HELLO','Здравствуйте %s,');
define('_MD_URRECEIVING','Вы получили это письмо потому, что на сообщение созданное Вами на форуме сайта %s был получен ответ.'); // %s is your site name
define('_MD_CLICKBELOW','Для просмотра ветви сообщений перейдите по ссылке:');
define('_MD_WAITFORAPPROVAL','Внимание, ваше сообщение должно быть одобрено перед публикацией.');
define('_MD_POSTING_LIMITED','Прошло слишком мало времени с момента последнего сообщения. Попробуйте через %d секунд');

//forumform.inc
define('_MD_NAMEMAIL','Имя/email:');
define('_MD_LOGOUT','Выйти');
define('_MD_REGISTER','Зарегистрироваться');
define('_MD_SUBJECTC','Заголовок темы:');
define('_MD_MESSAGEICON','Иконка сообщения:');
define('_MD_MESSAGEC','Сообщение:');
define('_MD_ALLOWEDHTML','HTML разрешен:');
define('_MD_OPTIONS','Опции:');
define('_MD_POSTANONLY','Отправить анонимно');
define('_MD_DOSMILEY','Разрешить смайлы');
define('_MD_DOXCODE','Разрешить Xoops код');
define('_MD_DOBR','Использовать преобразования конца строки');
define('_MD_DOHTML','Разрешить HTML');
define('_MD_NEWPOSTNOTIFY','Оповестить меня о новом сообщении в этой теме');
define('_MD_ATTACHSIG','Добавить подпись');
define('_MD_POST','Опубликовать');
define('_MD_SUBMIT','Отправить');
define('_MD_CANCELPOST','Отменить отправку');
define('_MD_REMOVE','Удалить');
define('_MD_UPLOAD','Загрузка');

// forumuserpost.php
define('_MD_ADD','Добавить');
define('_MD_REPLY','Ответить');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Просмотр темы');
define('_MD_RETURNTOTHEFORUM','Вернуться в форум');
define('_MD_RETURNFORUMINDEX','Вернуться к списку форумов');
define('_MD_ERROR_BACK','Ошибка - пожалуйста, вернитесь и попробуйте ещё раз');
define('_MD_GOTONEWFORUM','Посмотреть обновлённую тему');

define('_MD_TOPICDELETE','Тема удалена.');
define('_MD_TOPICMERGE','Тема прикреплена.');
define('_MD_TOPICMOVE','Тема перемещена.');
define('_MD_TOPICLOCK','Тема закрыта.');
define('_MD_TOPICUNLOCK','Тема открыта.');
define('_MD_TOPICSTICKY','Важная тема!');
define('_MD_TOPICUNSTICKY','Тема откреплена.');
define('_MD_TOPICDIGEST','Тема сделана дайджестом.');
define('_MD_TOPICUNDIGEST','Тема больше не дайджест.');

define('_MD_DELETE','Удалить');
define('_MD_MOVE','Переместить');
define('_MD_MERGE','Прикрепить');
define('_MD_LOCK','Закрыть');
define('_MD_UNLOCK','Открыть');
define('_MD_STICKY','Прикрепить');
define('_MD_UNSTICKY','Открепить');
define('_MD_DIGEST','Создать дайджест');
define('_MD_UNDIGEST','Убрать дайджест');

define('_MD_DESC_DELETE','Нажав кнопку Удаления темы внизу этой формы, Вы удалите выбранную тему и все связанные с ней сообщения <b>навсегда</b>.');
define('_MD_DESC_MOVE','Нажав кнопку Переноса темы внизу этой формы, Вы перенесете выбранную тему и все связанные с ней сообщения в другой, выбранный Вами, форум.');
define('_MD_DESC_MERGE','Как только Вы нажимаете кнопку слияния внизу этой формы тема, Вы выбрали, и ее связанные отправления, будет слит с темой, которую Вы выбрали.<br /><strong>ID темы адресата должен быть меньшим чем поток один </strong>.');
define('_MD_DESC_LOCK','Нажав кнопку Закрытия темы внизу этой формы, Вы сделаете выбранную тему заблокированной для сообщений. Вы сможете открыть эту в любое время.');
define('_MD_DESC_UNLOCK','Нажав кнопку Открытия темы внизу этой формы, Вы разблокируете выбранную закрытую тему. Вы сможете закрыть эту тему в любое время.');
define('_MD_DESC_STICKY','Нажав кнопку Прикрепления этой темы внизу этой формы, Вы перенесете выбранную тему в списке над всеми остальными. Вы сможете Открепить тему в любое время.');
define('_MD_DESC_UNSTICKY','Нажав кнопку Открепления темы внизу этой формы, Вы сделаете выбранную Важную тему обычной. Вы сможете Прикрепить тему в любое время.');
define('_MD_DESC_DIGEST','Нажав кнопку Создать дайджест темы внизу этой формы, Вы сделаете выбранную тему дайджестом. Вы сможете Убрать дайджест с темы в любое время.');
define('_MD_DESC_UNDIGEST','Нажав кнопку Убрать дайджест темы внизу этой формы, Вы уберёте дайджест из данной темы. Вы сможете Создать дайджест из темы в любое время.');

define('_MD_MERGETOPICTO','Прикрепить тему к:');
define('_MD_MOVETOPICTO','Переместить тему в:');
define('_MD_NOFORUMINDB','Нет форумов в БД');

// delete.php
define('_MD_DELNOTALLOWED','Извините, Вам не разрешено удалять это сообщение.');
define('_MD_AREUSUREDEL','Вы действительно хотите удалить это сообщение и все ответы на него?');
define('_MD_POSTSDELETED','Выбранное сообщение и все ответы на него были удалены.');
define('_MD_POSTDELETED','Выбранное сообщение удалено.');

// definitions moved from global.
define('_MD_THREAD','Нитевидный');
define('_MD_FROM','Из:');
define('_MD_JOINED','Зарегистрирован');
define('_MD_ONLINE','В сети');
define('_MD_OFFLINE','Не в сети');
define('_MD_FLAT','Плоский');


// online.php
define('_MD_USERS_ONLINE','Активные пользователи:');
define('_MD_ANONYMOUS_USERS','анонимных пользователей');
define('_MD_REGISTERED_USERS','зарегистрированных пользователей: ');
define('_MD_BROWSING_FORUM','Пользователи просматривают форум');
define('_MD_TOTAL_ONLINE','Всего %d пользователей активно.');
define('_MD_ADMINISTRATOR','Администратор');

define('_MD_NO_SUCH_FILE','Файл не существует!');
define('_MD_ERROR_UPATEATTACHMENT','Ошибка при обновлении вложения');

// ratethread.php
define("_MD_CANTVOTEOWN","Вы не можете голосовать в своём опросе.<br />Все голоса записываются и просматриваются.");
define("_MD_VOTEONCE","Не голосуйте в одном и том же опросе дважды.");
define("_MD_VOTEAPPRE","Ваш голос принят.");
define("_MD_THANKYOU","Спасибо, что проголосовали на %s"); // %s is your site name
define("_MD_VOTES","Голоса");
define("_MD_NOVOTERATE","Вы не оценили эту тему");


// polls.php
define("_MD_POLL_DBUPDATED","БД успешно обновлена!");
define("_MD_POLL_POLLCONF","Настройка опроса");
define("_MD_POLL_POLLSLIST","Список опроса");
define("_MD_POLL_AUTHOR","Автор опроса");
define("_MD_POLL_DISPLAYBLOCK","Показывать в блоке?");
define("_MD_POLL_POLLQUESTION","Вопрос");
define("_MD_POLL_VOTERS","Всего проголосовало");
define("_MD_POLL_VOTES","Всего голосов");
define("_MD_POLL_EXPIRATION","Истекает");
define("_MD_POLL_EXPIRED","Истёк");
define("_MD_POLL_VIEWLOG","Посмотреть лог");
define("_MD_POLL_CREATNEWPOLL","Создать новый опрос");
define("_MD_POLL_POLLDESC","Описание опроса");
define("_MD_POLL_DISPLAYORDER","Порядок показа");
define("_MD_POLL_ALLOWMULTI","Разрешить множественный выбор?");
define("_MD_POLL_NOTIFY","Оповестить по истечении опроса?");
define("_MD_POLL_POLLOPTIONS","Ответы");
define("_MD_POLL_EDITPOLL","Редактировать опрос");
define("_MD_POLL_FORMAT","Формат: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME","Текущее время: %s");
define("_MD_POLL_EXPIREDAT","Истекает: %s");
define("_MD_POLL_RESTART","Начать опрос заново");
define("_MD_POLL_ADDMORE","Добавть больше ответов");
define("_MD_POLL_RUSUREDEL","Вы уверены, что хотите удалить этот опрос и все его комментарии?");
define("_MD_POLL_RESTARTPOLL","Начать опрос заново");
define("_MD_POLL_RESET","Обнулить логи опроса?");
define("_MD_POLL_ADDPOLL","Добавить опрос");
define("_MD_POLLMODULE_ERROR","Невозможно использовать модуль 'Опросы'");

//report.php
define("_MD_REPORTED","Спасибо за рапорт об этом сообщении. Администрация примет меры в случае необходимости.");
define("_MD_REPORT_ERROR","Ошибка при отправке рапорта.");
define("_MD_REPORT_TEXT","Сообщение:");

define("_MD_PDF","Конвертировать сообщение в PDF");
define("_MD_PDF_PAGE","Страница");

//print.php
define("_MD_COMEFROM","Этот пост расположен по адресу:");

//viewpost.php
define("_MD_VIEWALLPOSTS","Все ответы");
define("_MD_VIEWTOPIC","К теме ");
define("_MD_VIEWFORUM","К форуму ");

define("_MD_COMPACT","Компактно");

define("_MD_MENU_SELECT","Выбор");
define("_MD_MENU_HOVER","ПОВЕРХ");
define("_MD_MENU_CLICK","НАЖАТИЕ");

define("_MD_WELCOME_SUBJECT","%s присоединился к форуму");
define("_MD_WELCOME_MESSAGE","Привет, %s - новичок.");

define("_MD_VIEWNEWPOSTS","Просмотреть новые ответы");

define("_MD_INVALID_SUBMIT","Публикация сообщения невозможна. Вероятно, время Вашей сессии закончилось. Пожалуйста, сохраните свое сообщение у себя на компьютере, перезагрузите в браузере эту страницу и по-новому опубликуйте свое сообщение.");

define("_MD_ACCOUNT","Ваш акаунт");
define("_MD_NAME","Имя");
define("_MD_PASSWORD","Пароль");
define("_MD_LOGIN","Логин");

/*
define("_MD_TRANSFER","Трансфер");
define("_MD_TRANSFER_DESC","Перенести сообщение в другую программу");
define("_MD_TRANSFER_DONE","Трансфер успешно завершен: %s");
*/

define("_MD_APPROVE","Одобрить");
define("_MD_RESTORE","Восстановить");
define("_MD_SPLIT_ONE","Открепить пост в отдельную тему");
define("_MD_SPLIT_TREE","");
define("_MD_SPLIT_ALL","Открепить вместе с ответами ниже");


define("_MD_TYPE_ADMIN","Модерирование");
define("_MD_TYPE_VIEW","Просмотр");
define("_MD_TYPE_PENDING","Ожидают");
define("_MD_TYPE_DELETED","Удаленные");
define("_MD_TYPE_SUSPEND","Блокировка");

define("_MD_DBUPDATED","База данных успешно обновлена!");

define("_MD_SUSPEND_SUBJECT","Пользователь %s заблокирован на %d дней");
define("_MD_SUSPEND_TEXT","Пользователь %s заблокирован на %d-е суток за:<br />[quote]%s[/quote]<br /><br />Блокировка действует до %s");
define("_MD_SUSPEND_UID","ID пользователя");
define("_MD_SUSPEND_IP","IP segments (full or segments)");
define("_MD_SUSPEND_DURATION","Период блокировки (дней)");
define("_MD_SUSPEND_DESC","Причина блокировки");
define("_MD_SUSPEND_LIST","Список заблокированных");
define("_MD_SUSPEND_START","Начало");
define("_MD_SUSPEND_EXPIRE","Конец");
define("_MD_SUSPEND_SCOPE","Scope");
define("_MD_SUSPEND_MANAGEMENT","Управление блокировкой");
define("_MD_SUSPEND_NOACCESS","Ваш Логин и IP заблокированы!");

define("_MD_NEWBB_TYPE","Topic type");

//define("_MD_NEWBB_TAG","Tag");
/*
// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
define("_MD_TODAY","\T\o\d\a\y G:i:s");
define("_MD_YESTERDAY","\Y\e\s\\t\e\\r\d\a\y G:i:s");
define("_MD_MONTHDAY","n/j G:i:s");
define("_MD_YEARMONTHDAY","Y/n/j G:i");
*/
?>