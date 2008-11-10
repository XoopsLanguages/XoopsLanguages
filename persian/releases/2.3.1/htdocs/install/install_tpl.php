<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * Installer template file
 *
 * See the enclosed file license.txt for licensing information.
 * If you did not receive this file, get it at http://www.fsf.org/copyleft/gpl.html
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      Kris <kris@frxoops.org>
 * @version     $Id: install_tpl.php 1512 2008-04-27 10:43:45Z phppp $
 */
?>
 
<?php
    defined( 'XOOPS_INSTALL' ) or die();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>
        <?php echo XOOPS_INSTALL_WIZARD; ?>
        (<?php echo ($wizard->currentPage+1) . '/' . count($wizard->pages); ?>)
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo _INSTALL_CHARSET ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="language/persian/fa.css" />
    <script type="text/javascript" src="prototype.js"></script>
    <script type="text/javascript">
    function showHideHelp( butt ) {
        butt.className = ( butt.className == 'on' ) ? 'off': 'on';
        document.body.className = ( butt.className == 'on' ) ? 'show-help': '';
    }

    function xoopsExternalLinks() {
        if (!document.getElementsByTagName) return;
        var anchors = document.getElementsByTagName("a");
        for (var i=0; i<anchors.length; i++) {
            var anchor = anchors[i];
            if (anchor.getAttribute("href") ) {
                // Check rel value with extra rels, like "external noflow". No test for performance yet
                $pattern = new RegExp("external", "i");
                if ($pattern.test(anchor.getAttribute("rel"))) {
                    anchor.target = "_blank";
                }
            }
        }
    }
    window.onload = xoopsExternalLinks;
    </script>    
</head>
<body>
    <div id="xo-banner"><img src="img/logo.png" alt="XOOPS" /></div>
    <div id="xo-globalnav" class="x2-nl x2-navigation"></div>
    <div id="xo-content">
        <div class="tagsoup1">
        <div class="tagsoup2">
            <div id="wizard">
            <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
                <h1>
                    <span id="title"><?php echo XOOPS_INSTALL_WIZARD; ?> (<?php echo ($wizard->currentPage+1) . '/' . count($wizard->pages); ?>)</span>
                </h1>
                <ul id="pageslist" class="x2-navigation">
                <?php foreach ( $wizard->pages as $k => $page ) {
                    $class = '';
                    if ( $k == $wizard->currentPage )    $class = ' class="current"';
                    elseif ( $k > $wizard->currentPage )    $class = ' class="disabled"';
                    if ( empty( $class ) ) {
                        $li = '<a href="' . $wizard->pageURI($page) . '">' . $wizard->pagesNames[$k] . '</a>';
                    } else {
                        $li = $wizard->pagesNames[$k];
                    }
                    echo "<li$class>$li</li>\n";
                } ?>
                </ul>
                <div class="page" id="<?php echo $wizard->currentPageName; ?>">
                    <?php if ( $pageHasHelp ) { ?>
                        <img id="help_button" src="img/help.png" alt="help" title="<?php echo SHOW_HIDE_HELP; ?>" class="off" onclick="showHideHelp(this)" />
                    <?php } ?>
                    <h2><?php echo htmlspecialchars( $wizard->pagesTitles[ $wizard->currentPage ] ); ?></h2>
                    <?php echo $content; ?>        
                </div>
                <div id="buttons">
                    <?php if ( $wizard->currentPage != 0 ) { ?>
                    <button type="button" onclick="history.back()">
                        <?php echo BUTTON_PREVIOUS; ?>
                    </button>
                    <?php } ?>
                    <?php if ( @$pageHasForm ) { ?>
                    <button type="submit">
                    <?php } else { ?>
                    <button type="button" accesskey="n" onclick="location.href='<?php echo $wizard->pageURI('+1'); ?>'">
                    <?php } ?>
                        <?php echo BUTTON_NEXT; ?>
                    </button>        
                </div>        
            </form>        
            </div>
        </div>
        </div>
    </div>
</body>
</html>