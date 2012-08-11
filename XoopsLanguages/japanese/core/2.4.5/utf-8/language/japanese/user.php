<?php
// $Id: user.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','登録していないのですか？ <a href="register.php">今すぐ登録！</a>');
define('_US_LOSTPASSWORD','パスワードを忘れましたか？');
define('_US_NOPROBLEM','心配いりません。 登録時のメールアドレスを入れて下さい');
define('_US_YOUREMAIL','あなたの E-mail アドレス：');
define('_US_SENDPASSWORD','パスワード送信');
define('_US_LOGGEDOUT','あなたはログアウトしました');
define('_US_THANKYOUFORVISIT','ご利用いただき、ありがとうございました！');
define('_US_INCORRECTLOGIN','ログインできません！');
define('_US_LOGGINGU','ログインありがとうございます %s さん');
// 2001-11-17 ADD
define('_US_NOACTTPADM','選択されたユーザーはまだ存在しないか、承認が完了していません。<br />詳細をサイト管理者へお問い合せください。');
define('_US_ACTKEYNOT','承認キーに誤りがあります！');
define('_US_ACONTACT','選択されたアカウントはすでに承認が完了しています！');
define('_US_ACTLOGIN','あなたのアカウントを承認しました。登録したパスワードを用いてログインしてください。');
define('_US_NOPERMISS','ごめんなさい。ユーザー情報を変更することはできません。');
define('_US_SURETODEL','ユーザーアカウントを本当に削除してよろしいですか？');
define('_US_REMOVEINFO','アカウントを削除した場合、すべてのユーザー情報が失われます');
define('_US_BEENDELED','アカウントを削除しました。');
define('_US_ACTFAILD','実行に失敗しました！');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','ユーザー登録');
define('_US_NICKNAME','ユーザー名');
define('_US_EMAIL','E-mail アドレス');
define('_US_ALLOWVIEWEMAIL','メールアドレスを他のユーザーへ公開する');
define('_US_WEBSITE','Web サイト');
define('_US_TIMEZONE','タイムゾーン');
define('_US_AVATAR','アバター');
define('_US_VERIFYPASS','パスワード 確認');
define('_US_SUBMIT','送信');
define('_US_USERNAME','ユーザー名');
define('_US_FINISH','完了');
define('_US_REGISTERNG','新規ユーザーを登録できませんでした。');
define('_US_MAILOK','新着情報などを E-mail で受け取る');
define('_US_DISCLAIMER','サイト 利用規約');
define('_US_IAGREE','利用規約に同意');
define('_US_UNEEDAGREE','申し訳ございません。登録するためには免責事項にご同意いただく必要があります');
define('_US_NOREGISTER','申し訳ございません。現在ユーザの登録受付を行っておりません');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','%s さんの承認キー');
define('_US_YOURREGISTERED','登録が完了しました。記載されたメールを登録メールアドレス宛に承認キーを送信しました。メールの指示に従い、承認を完了してください');
define('_US_YOURREGMAILNG','登録が完了しました。しかし、サーバ内部エラーにより承認キーが記載されたメールを送信することができませんでした。大変申し訳ございませんが、サイト管理者までお問い合わせください');
define('_US_YOURREGISTERED2','登録が完了いたしました。サイト管理者がアカウントを承認するまでお待ちください。承認完了時には E-mail でご連絡いたします。');
// %s is your site name
define('_US_NEWUSERREGAT','%s - 新規登録ユーザー');
// %s is a username
define('_US_HASJUSTREG','%s さん が新たに登録しました！');
define('_US_INVALIDMAIL','エラー: 不正なメールアドレス');
define('_US_EMAILNOSPACES','エラー: メールアドレスに空白を含めないでください');
define('_US_INVALIDNICKNAME','不正なユーザーの名前');
define('_US_NICKNAMETOOLONG','ユーザーの名前が長すぎます。半角 %s 文字以内にしてください');
define('_US_NICKNAMETOOSHORT','ユーザーの名前が短すぎます。半角 %s 文字以上にしてください');
define('_US_NAMERESERVED','エラー: このユーザーの名前は使用できません');
define('_US_NICKNAMENOSPACES','ユーザーの名前に空白を含めないでください');
define('_US_NICKNAMETAKEN','エラー: このユーザーの名前はすでに使われています');
define('_US_EMAILTAKEN','エラー: このメールアドレスはすでに登録されています');
define('_US_ENTERPWD','エラー: パスワードを入力して下さい');
define('_US_SORRYNOTFOUND','ごめんなさい。ユーザー情報が見つかりませんでした');
// %s is your site name
define('_US_NEWPWDREQ','%s - 新たなパスワードリクエスト');
define('_US_YOURACCOUNT','ユーザーアカウント %s');
define('_US_MAILPWDNG','mail_password: ユーザー情報の更新に失敗しました。お手数かけますが、サイト管理者までお問合せください。');
// %s is a username
define('_US_PWDMAILED','パスワードを %s さんへ送信しました');
define('_US_CONFMAIL','パスワード取得用リンクが記載されたメールを %s さんへ送信しました。');
define('_US_ACTVMAILNG','メール送信に失敗しました %s さん宛');
define('_US_ACTVMAILOK','メールを送信しました %s さん宛');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','ユーザが選択されていません！ 戻って再度行って下さい');
define('_US_PM','PM');
define('_US_ICQ','ICQ #');
define('_US_AIM','AOL IM');
define('_US_YIM','Yahoo! IM');
define('_US_MSNM','MSN メッセンジャー');
define('_US_LOCATION','所在地');
define('_US_OCCUPATION','職業');
define('_US_INTEREST','趣味');
define('_US_SIGNATURE','署名');
define('_US_EXTRAINFO','その他 情報');
define('_US_EDITPROFILE','プロフィール編集');
define('_US_LOGOUT','ログアウト');
define('_US_INBOX','受信箱');
define('_US_MEMBERSINCE','登録日');
define('_US_RANK','ランク');
define('_US_POSTS','投稿数');
define('_US_LASTLOGIN','前回ログイン日');
define('_US_ALLABOUT','%s さんのユーザー情報');
define('_US_STATISTICS','ステータス');
define('_US_MYINFO','個人情報');
define('_US_BASICINFO','基本情報');
define('_US_MOREABOUT','詳細情報');
define('_US_SHOWALL','すべて表示');
//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','プロフィール');
define('_US_REALNAME','名前');
define('_US_SHOWSIG','投稿時に署名を必ず追加');
define('_US_CDISPLAYMODE','コメント表示モード');
define('_US_CSORTORDER','コメントの並び順');
define('_US_PASSWORD','パスワード');
define('_US_TYPEPASSTWICE','(変更する場合に入力してください)');
define('_US_SAVECHANGES','変更内容を保存');
define('_US_NOEDITRIGHT','ごめんなさい。このユーザ情報を変更する権限がありません');
define('_US_PASSNOTSAME','パスワードが正しくありません。同じパスワードを二度入力してください');
define('_US_PWDTOOSHORT','ごめんなさい。パスワードは半角 <strong>%s</strong> 文字以上でなければいけません');
define('_US_PROFUPDATED','あなたのプロフィールを更新しました！');
define('_US_USECOOKIE','ユーザー名を１年間 Cookie に保存');
define('_US_NO','いいえ');
define('_US_DELACCOUNT','アカウント 削除');
define('_US_MYAVATAR','アバター');
define('_US_UPLOADMYAVATAR','アバター アップロード');
define('_US_MAXPIXEL','最大ピクセル数');
define('_US_MAXIMGSZ','最大ファイルサイズ(バイト)');
define('_US_SELFILE','ファイルを選択');
define('_US_OLDDELETED','古いアバター画像は削除されます！');
define('_US_CHOOSEAVT','アバターを一覧から選んでください');
define('_US_PRESSLOGIN','Press the button below to login');
define('_US_ADMINNO','管理者グループのユーザは削除する事ができません');
define('_US_GROUPS','ユーザ グループ');
define('_US_REMEMBERME','Remember me');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Welcome to %s');

?>