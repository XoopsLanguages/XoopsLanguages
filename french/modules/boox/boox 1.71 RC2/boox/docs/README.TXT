BOOX

Boox (Blocks Out Of Xoops) is a module which is to help you to manage content that XOOPS can't access but which is part of your site.

Typically, this content is created on the form of blocks which are not parts of a XOOPS module and that's also a content which is, in general, placed in the theme.
With the module, you can create as many "virtual blocks" as you want, they are saved in files (the module does not use database) and you just need to call them in your theme with the following line of code :


<{php}>include_once XOOPS_UPLOAD_PATH.'/xoops_spotlight.html';<{/php}>


So it's possible to create a content you can modify without putting your hands in the theme (except the first time to write the include commands)
The module is running with all the Editors you can use in XOOPS : Spaw, Fck editor, Htmlarea, Tinyeditor et Kiovi