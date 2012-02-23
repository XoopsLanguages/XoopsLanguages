<?php
// $Id: user.php 4897 2010-06-19 02:55:48Z phppp $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2010-10-09 andrey3761
//%%%%%%		Файл user.php 		%%%%%
define('_US_NOTREGISTERED','Вы не зарегистрированы?  Нажмите <a href=register.php>здесь</a>.');
define('_US_LOSTPASSWORD','Забыли свой пароль?');
define('_US_NOPROBLEM','Нет проблем. Просто введите E-mail Вашей учетной записи.');
define('_US_YOUREMAIL','Ваш E-mail адрес: ');
define('_US_SENDPASSWORD','Выслать пароль');
define('_US_LOGGEDOUT','Теперь Вы завершили сеанс');
define('_US_THANKYOUFORVISIT','Спасибо за визит на наш сайт!');
define('_US_INCORRECTLOGIN','Неверный вход!');
define('_US_LOGGINGU','Спасибо за визит на наш сайт, %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM','Выбранный пользователь был дезактивирован или еще не был активирован.<br />Пожалуйста свяжитесь с администратором для уточнения.');
define('_US_ACTKEYNOT','Код активации не верный!');
define('_US_ACONTACT','Выбранная учетная запись уже активирована!');
define('_US_ACTLOGIN','Ваша учетная запись была активирована. Пожалуйста используйте имя и пароль введенные при регистрации.');
define('_US_NOPERMISS','Извините, Вы не имеете прав для выполнения этой операции!');
define('_US_SURETODEL','Вы уверены, что хотите удалить свою учетную запись?');
define('_US_REMOVEINFO','Это приведет к удалению всей информации о Вас из нашей базы данных.');
define('_US_BEENDELED','Ваша учетная запись была удалена.');
define('_US_ACTFAILD','Активация потерпела неудачу!');
//%%%%%%		Файл register.php 		%%%%%
define('_US_USERREG','Регистрация пользователя');
define('_US_NICKNAME','Имя пользователя');
define('_US_EMAIL','E-mail');
define('_US_ALLOWVIEWEMAIL','Разрешить другим пользователям видеть E-mail адрес');
define('_US_WEBSITE','Адрес сайта');
define('_US_TIMEZONE','Временная зона');
define('_US_AVATAR','Аватар');
define('_US_VERIFYPASS','Проверка пароля');
define('_US_SUBMIT','Отправить');
define('_US_USERNAME','Имя пользователя');
define('_US_FINISH','Завершить');
define('_US_REGISTERNG','Не могу зарегистрировать нового пользователя.');
define('_US_MAILOK','Принимать рассылаемые иногда предупреждения<br /> от администраторов и модераторов сайта?');
define('_US_DISCLAIMER','Условия');
define('_US_IAGREE','Я согласен со сказанным выше');
define('_US_UNEEDAGREE', 'Извините, для регистрации Вы должны согласиться с нашими условиями.');
define('_US_NOREGISTER','Извините, на данный момент сайт не принимает новых регистраций.');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Код активации пользователя для %s');
define('_US_YOURREGISTERED','Теперь Вы зарегистрированы. На введенный Вами при регистрации E-mail адрес выслано сообщение содержащее ключ активации пользователя. Пожалуйста следуйте инструкциям, указанным в e-mail сообщении для активации учетной записи. ');
define('_US_YOURREGMAILNG','Теперь Вы зарегистрированы. Однако, мы не смогли выслать ключ активации на Ваш e-mail адрес по причине внутренней ошибки на нашем сервере. Мы приносим свои извинения за причиненные неудобства, пожалуйста свяжитесь с администратором сайта по E-mail для решения возникшей проблемы.');
define('_US_YOURREGISTERED2','Теперь Вы зарегистрированы. Пожалуйста подождите пока ваша учетная запись не будет активирована администратором. Вы получите E-mail сообщение когда это произойдет. Это может занять некоторое время, поэтому будьте терпеливы.');
// %s is your site name
define('_US_NEWUSERREGAT','Новая регистрация пользователя на сайте %s');
// %s имя пользователя
define('_US_HASJUSTREG','%s был только-что зарегистрирован!');
define('_US_INVALIDMAIL','ОШИБКА: Неверный E-mail');
define('_US_EMAILNOSPACES','ОШИБКА: E-mail адрес не должен содержать пробелов.');
define('_US_INVALIDNICKNAME','ОШИБКА: Неверное имя пользователя');
define('_US_NICKNAMETOOLONG','Имя пользователя слишком длинное. Оно должно быть менее %s символов.');
define('_US_NICKNAMETOOSHORT','Имя пользователя слишком короткое. Оно должно быть более %s символов.');
define('_US_NAMERESERVED','ОШИБКА: Имя зарезервировано.');
define('_US_NICKNAMENOSPACES','Нельзя использовать пробелы в имени пользователя.');
define('_US_NICKNAMETAKEN','ОШИБКА: Это имя пользователя уже занято.');
define('_US_EMAILTAKEN','ОШИБКА: Такой E-mail адрес уже зарегистрирован.');
define('_US_ENTERPWD','ОШИБКА: Вы должны ввести пароль.');
define('_US_SORRYNOTFOUND','Извините, информация о введенном пользователе не найдена.');
// %s is your site name
define('_US_NEWPWDREQ','Запрос нового пароля на сайт %s');
define('_US_YOURACCOUNT', 'Ваша учетная запись на сайте %s');
define('_US_MAILPWDNG','mail_password: не могу обновить запись пользователя. Свяжитесь с администратором');
// %s is a username
define('_US_PWDMAILED','Пароль для %s отправлен по E-mail.');
define('_US_CONFMAIL','E-mail подтверждение для %s отправлено.');
define('_US_ACTVMAILNG', 'Ошибка отправки E-mail сообщения для %s');
define('_US_ACTVMAILOK', 'E-mail сообщение для %s отправлено.');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Не выбран пользователь! Пожалуйста вернитесь назад и попробуйте снова.');
define('_US_PM','Личные сообщения');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_SKYPE', 'Скайп');
define('_US_FACEBOOK', 'Фейсбук');
define('_US_LOCATION','Местожительство');
define('_US_OCCUPATION','Род занятий');
define('_US_INTEREST','Интересы');
define('_US_SIGNATURE','Подпись');
define('_US_EXTRAINFO','Дополнительная информация');
define('_US_EDITPROFILE','Редактировать учетную запись');
define('_US_LOGOUT','Выход');
define('_US_INBOX','Сообщения');
define('_US_MEMBERSINCE','Дата регистрации');
define('_US_RANK','Ранг');
define('_US_POSTS','Сообщений/Комментариев');
define('_US_LASTLOGIN','Последний вход');
define('_US_ALLABOUT','Все о %s');
define('_US_STATISTICS','Статистика');
define('_US_MYINFO','Моя информация');
define('_US_BASICINFO','Основная информация');
define('_US_MOREABOUT','Еще больше обо мне');
define('_US_SHOWALL','Показать все');
//%%%%%%		Файл edituser.php 		%%%%%
define('_US_PROFILE','Учетная запись');
define('_US_REALNAME','Настоящее имя');
define('_US_SHOWSIG','Всегда добавлять мою подпись');
define('_US_CDISPLAYMODE','Режим отображения комментариев');
define('_US_CSORTORDER','Порядок сортировки комментариев');
define('_US_PASSWORD','Пароль');
define('_US_TYPEPASSTWICE','(введите новый пароль дважды для его смены)');
define('_US_SAVECHANGES','Сохранить изменения');
define('_US_NOEDITRIGHT',"Извините, Вы не имеете прав для редактирования этой информации пользователя.");
define('_US_PASSNOTSAME','Введенные пароли различаются. Они должны быть идентичными.');
define('_US_PWDTOOSHORT','Извините, Ваш пароль должен содержать не менее <b>%s</b> символов.');
define('_US_PROFUPDATED','Ваша учетная запись обновлена!');
define('_US_USECOOKIE','Сохранить мое имя в "Cookie" на 1 год');
define('_US_NO','Нет');
define('_US_DELACCOUNT','Удалить учетную запись');
define('_US_MYAVATAR', 'Мой аватар');
define('_US_UPLOADMYAVATAR', 'Загрузка аватара');
define('_US_MAXPIXEL','Максимум точек');
define('_US_MAXIMGSZ','Максимальный размер рисунка (байт)');
define('_US_SELFILE','Выбор файла');
define('_US_OLDDELETED','Ваш старый аватар будет удален!');
define('_US_CHOOSEAVT', 'Выберите аватар из доступного списка');
define('_US_PRESSLOGIN', 'Нажмите кнопку для входа в систему');
define('_US_ADMINNO', 'Удаление пользователя из данной группы запрещено.');
define('_US_GROUPS', 'Пользователь(ли) группы');
define('_US_REMEMBERME', 'Запомнить меня');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Добро пожаловать %s');

?>