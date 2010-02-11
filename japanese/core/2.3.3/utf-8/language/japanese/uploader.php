<?php
// $Id: uploader.php 2008-07-29 06:22+09:00  2 8 6 $
define("_ER_UP_MIMETYPELOAD", "mimetypesの定義がエラーです");
define("_ER_UP_FILENOTFOUND", "ファイルが見つかりません");
define("_ER_UP_INVALIDFILESIZE", "無効のファイルサイズです");
define("_ER_UP_FILENAMEEMPTY", "ファイル名が空です。");
define("_ER_UP_NOFILEUPLOADED", "アップロードできませんでした");
define("_ER_UP_ERROROCCURRED", "エラー発生 エラー #%s");
define("_ER_UP_UPLOADDIRNOTSET", "アップロード先のディレクトリが設置されていません");
define("_ER_UP_FAILEDOPENDIR", "ディレクトリが開けませんでした: %s");
define("_ER_UP_FAILEDOPENDIRWRITE", "書き込み権限がないため%sのディレクトリに書き込み出来ませんでした。");
define("_ER_UP_FILESIZETOOLARGE", "ファイルサイズがオーバーです (最大 %u bytes): %u bytes");
define("_ER_UP_FILEWIDTHTOOLARGE", "ファイル幅がオーバーです(最大 %u px): %u px");
define("_ER_UP_FILEHEIGHTTOOLARGE", "ファイル高さがオーバーです (最大 %u px): %u px");
define("_ER_UP_MIMETYPENOTALLOWED", "MIME タイプが許可されていません: %s");
define("_ER_UP_FAILEDUPLOADFILE", "ファイルがアップロード出来ませんでした: %s");
define("_ER_UP_FAILEDFETCHIMAGESIZE", "%sのイメージサイズを確認できませんでした。 最大寸法のチェックをスキップします");
define("_ER_UP_UNKNOWNFILETYPEREJECTED", "登録されていない filetype は拒絶します");
define("_ER_UP_ERRORSRETURNED", "アップロード中にエラーになりました");
define("_ER_UP_INVALIDIMAGEFILE", "無効のイメージファイルです");
define("_ER_UP_SUSPICIOUSREFUSED", "疑わしげなイメージアップロードは拒否しました。");
define("_ER_UP_INVALIDFILENAME", "無効のファイル名です");
define("_ER_UP_FAILEDSAVEFILE", " %sのファイルが保存できませんでした");
?>