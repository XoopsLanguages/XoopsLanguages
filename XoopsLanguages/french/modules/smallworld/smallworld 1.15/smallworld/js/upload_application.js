/*
 * jQuery File Upload Plugin JS Example 4.4.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://creativecommons.org/licenses/MIT/
 */

/*global xoops_smallworld */
xoops_smallworld(function () {
    // Initialize jQuery File Upload (Extended User Interface Version):
    xoops_smallworld('#file_upload').fileUploadUIX();
    
    // Load existing files:
    xoops_smallworld.getJSON(xoops_smallworld('#file_upload').fileUploadUIX('option', 'url'), function (files) {
        var fileUploadOptions = xoops_smallworld('#file_upload').fileUploadUIX('option');
        xoops_smallworld.each(files, function (index, file) {
            fileUploadOptions.buildDownloadRow(file, fileUploadOptions)
                .appendTo(fileUploadOptions.downloadTable).fadeIn();
        });
    });
});