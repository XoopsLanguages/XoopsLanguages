<?php
// $Id: captcha.php 1525 2008-04-30 13:11:48Z phppp $
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 13/09/2008 %%%%%%%%%
define("_CAPTCHA_CAPTION", "Mã xác nhận");//Confirmation Code
define("_CAPTCHA_INVALID_CODE", "Mã xác nhận không hợp lệ!");//Invalid confirmation code!
define("_CAPTCHA_TOOMANYATTEMPTS", "Quá nhiều lần nhập!");//Too many attempts!
define("_CAPTCHA_MAXATTEMPTS", "Số lần được nhập nhiều nhất: %d");//Maximum attempts you can try: %d

// For image mode
define("_CAPTCHA_RULE_IMAGE", "Hãy điền vào mã số trong ảnh");//Input letters in the image
define("_CAPTCHA_RULE_CASESENSITIVE", "Mã số rất nhạy cảm với kiểu chữ");//The code is case-sensitive
define("_CAPTCHA_RULE_CASEINSENSITIVE", "Mã số không nhạy cảm với kiểu chữ");//The code is case-insensitive
define("_CAPTCHA_REFRESH", "Ảnh không rỏ, Kích chuột vào mã-ảnh để có mã mới");//Click to refresh the image if it is not clear enough.

// For text mode
define("_CAPTCHA_RULE_TEXT", "Nhập vào kết quả từ biểu ngữ");//Input the result from the expression
?>