<?php
define("_ER_UP_MIMETYPELOAD", "Error loading mimetypes definition");
define("_ER_UP_FILENOTFOUND", "File not found");
define("_ER_UP_INVALIDFILESIZE", "Invalid File Size");
define("_ER_UP_FILENAMEEMPTY", "Filename Is Empty");
define("_ER_UP_NOFILEUPLOADED", "No file uploaded");
define("_ER_UP_ERROROCCURRED", "Error occurred: Error #%s");
define("_ER_UP_UPLOADDIRNOTSET", "Upload directory not set");
define("_ER_UP_FAILEDOPENDIR", "Failed opening directory: %s");
define("_ER_UP_FAILEDOPENDIRWRITE", "Failed opening directory with write permission: %s");
define("_ER_UP_FILESIZETOOLARGE", "File size too large: %u");
define("_ER_UP_FILEWIDTHTOOLARGE", "File width must be smaller than %u");
define("_ER_UP_FILEHEIGHTTOOLARGE", "File height must be smaller than %u");
define("_ER_UP_MIMETYPENOTALLOWED", "MIME type not allowed: %s");
define("_ER_UP_FAILEDUPLOADFILE", "Failed uploading file: %s");
define("_ER_UP_FAILEDFETCHIMAGESIZE", "Failed fetching image size of %s, skipping max dimension check..");
define("_ER_UP_UNKNOWNFILETYPEREJECTED", "Unknown filetype rejected");
define("_ER_UP_ERRORSRETURNED", "Errors Returned While Uploading");

define("_ER_OB_ISREQUIRED", "%s is required.");
define("_ER_OB_MUSTBESHORTER", "%s must be shorter than %u characters.");
define("_ER_OB_INVALIDEMAIL", "Invalid Email");

define("_ER_SEC_TOKENEXPIRED", "Valid token expired");
define("_ER_SEC_NOTOKENFOUND", "No valid security token found in session");

define('_ER_US_INVALIDMAIL','ERROR: Invalid email');
define('_ER_US_EMAILNOSPACES','ERROR: Email addresses do not contain spaces.');
define('_ER_US_INVALIDNICKNAME','ERROR: Invalid Username');
define('_ER_US_NICKNAMETOOLONG','Username is too long. It must be less than %s characters.');
define('_ER_US_NICKNAMETOOSHORT','Username is too short. It must be more than %s characters.');
define('_ER_US_NAMERESERVED','ERROR: Name is reserved.');
define('_ER_US_NICKNAMENOSPACES','There cannot be any spaces in the Username.');
define('_ER_US_NICKNAMETAKEN','ERROR: Username taken.');
define('_ER_US_EMAILTAKEN','ERROR: Email address already registered.');
define('_ER_US_ENTERPWD','ERROR: You must provide a password.');
define('_ER_US_SORRYNOTFOUND','Sorry, no corresponding user info was found.');
define('_ER_US_PASSNOTSAME','Both passwords are different. They must be identical.');
define('_ER_US_PWDTOOSHORT','Sorry, your password must be at least <b>%s</b> characters long.');

define("_ER_MAIL_PMMODULENOEXIST", "You need to install the PM module to be able to send PM's");
?>