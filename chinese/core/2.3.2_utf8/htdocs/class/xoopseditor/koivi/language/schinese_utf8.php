<?php
/**
 * XOOPS editor
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		2.3.0
 * @version		$Id: schinese_utf8.php 1319 2008-02-12 10:56:44Z phppp $
 * @package		xoopseditor
 */
define("_XOOPS_EDITOR_KOIVI","可视化Koivi编辑器");

$GLOBALS["KOIVI_FONTLIST"] = array(
	'黑体'			=> '黑体',
	'宋体'			=> '宋体',
	'楷体'			=> '楷体',
	'Courier New'	=> 'Courier New, Courier, monospace', 
	'MS Serif'		=> 'MS Serif, New York, serif', 
	'Verdana'		=> 'Verdana, Geneva, Arial, Helvetica, sans-serif'
	);

define("_XK_LEFTTORIGHT","从左至右");
define("_XK_RIGHTTOLEFT","从右至左");

define("_MSC_SMILIES","脸谱");
define("_MSC_CLICKASMILIE","点击表情符插入到文本中.");
define("_MSC_CODE","代码");
define("_MSC_EMOTION","表情符");

define('_XK_FONT','Font');
define('_XK_FONT_SIZE','字体大小');
define('_XK_FONT_XSMALL','特小');
define('_XK_FONT_SMALL','小');
define('_XK_FONT_MEDIUM','中');
define('_XK_FONT_LARGE','大');
define('_XK_FONT_XLARGE','特大');
define('_XK_FONT_XXLARGE','超大');
define('_XK_FONT_FORMAT','格式');
define('_XK_FONT_NONE','无');
define('_XK_FONT_HEADING1','标题 1');
define('_XK_FONT_HEADING2','标题 2');
define('_XK_FONT_HEADING3','标题 3');
define('_XK_FONT_HEADING4','标题 4');
define('_XK_FONT_HEADING5','标题 5');
define('_XK_FONT_HEADING6','标题 6');
define('_XK_FONT_ADDRESS','地址');
define('_XK_FONT_PARAGRAPH','段落');
define('_XK_FONT_FORMATTED','格式化');

define('_XK_TOGLE_MODE','切换模式');
define('_XK_ENABLECSS_MODE','启用CSS从而查看真实效果');
define('_XK_TABLEBORDERS_TOGGLE','切换表格边框模式');
define('_XK_UNDO','取消');
define('_XK_REDO','重复');
define('_XK_FORECOLOR','颜色');
define('_XK_HILITECOLOR','高亮显示');
define('_XK_CUT','剪切');
define('_XK_COPY','拷贝');
define('_XK_PASTE','粘贴');
define('_XK_PASTESPECIAL','粘贴特殊格式...');
define('_XK_PASTEINSTRUCTIONS','使用Ctrl+v粘贴');
define('_XK_BOLD','加重');
define('_XK_ITALIC','斜体');
define('_XK_UNDERLINE','下划线');
define('_XK_STRIKETHROUGH','横穿线');
define('_XK_REMOVEFORMAT','清除格式');
define('_XK_JUSTIFYLEFT','左对齐');
define('_XK_JUSTIFYCENTER','居中');
define('_XK_JUSTIFYRIGHT','右对齐');
define('_XK_JUSTIFYFULL','两端对齐');
define('_XK_NEWPARAGRAPH','切换段落格式');
define('_XK_INSERTORDEREDLIST','有序列表');
define('_XK_INSERTUNORDEREDLIST','无序列表');
define('_XK_SPELLCHECK','拼写检查');
define('_XK_PRINT','打印');
define('_XK_INDENT','增加缩进');
define('_XK_OUTDENT','减少缩进');
define('_XK_SUPERSCRIPT','上角标');
define('_XK_SUBSCRIPT','下角标');
define('_XK_CODE','代码');
define('_XK_QUOTE','Quote');
define('_XK_CREATELINK','加入链接');
define('_XK_UNLINK','清除链接');
define('_XK_INSERTHORIZONTALRULE','插入横线');
define('_XK_INSERTANCHOR','插入&lt;a&gt;标记');
define('_XK_CREATEQUICKTABLE','快速插入表格');
define('_XK_INSERTIMAGE','插入图片');
define('_XK_INSERTIMAGEM','图片管理器');
define('_XK_FLOAT','切换工具栏格式');
define('_XK_SYMBOLS','符号');
define('_XK_INSERTDATE','插入时间日期');
define('_XK_CLASS','类');

//Image properties dialog
define('_XK_EDITIMAGE','编辑图片');
define('_XK_IMAGE','Image');
define('_XK_IMAGEWIDTH','宽度');
define('_XK_IMAGEHEIGHT','高度');
define('_XK_IMAGEPROPS','属性');
define('_XK_MARGINS','边隙');
define('_XK_ALT','Alt');
define('_XK_SRC','地址');
define('_XK_IMAGEALIGN','对齐方式');
define('_XK_HSPACE','垂直间距');
define('_XK_VSPACE','水平间距');
define('_XK_BWIDTH','宽度');

//table dialog
define('_XK_INSERTTABLE','插入表格');
define('_XK_EDITTABLE','编辑表格');
define('_XK_ROWS','行数');
define('_XK_COLS','列数');
define('_XK_WIDTH','宽度');
define('_XK_HEIGHT','高度');
define('_XK_UNITS','单位');
define('_XK_BORDER','边框');
define('_XK_HALIGNMENT','水平对齐方式');
define('_XK_VALIGNMENT','垂直对齐方式');
define('_XK_SPACING','单元间据(Spacing)');
define('_XK_PADDING','单元间隙(Padding)');
define('_XK_LEFT','Left');
define('_XK_RIGHT','Right');
define('_XK_CENTER','Center');
define('_XK_TOP','Top');
define('_XK_TEXTTOP','Text Top');
define('_XK_MIDDLE','Middle');
define('_XK_ABSMIDDLE','Absolute Middle');
define('_XK_BOTTOM','Bottom');
define('_XK_ABSBOTTOM','Absolute Bottom');
define('_XK_BASELINE','Baseline');
define('_XK_DEFAULT','Default');
define('_XK_BORDERCOLOR','边框颜色');
define('_XK_BCOLLPASE','编框重叠');


//table tools
define('_XK_INSERTCELL','插入单元');
define('_XK_INSERTCOL','插入列');
define('_XK_INSERTROW','插入行');
define('_XK_DELCELL','删除单元');
define('_XK_DELROW','删除行');
define('_XK_DELCOL','删除列');
define('_XK_TABLEPROPS','表格属性');
define('_XK_TABLETOOLS','表格工具');
define('_XK_MORECOLSPAN','增加列拆分');
define('_XK_LESSCOLSPAN','减少列拆分');
define('_XK_MOREROWSPAN','增加行拆分');
define('_XK_LESSROWSPAN','减少拆分');

//CELL TOOLS
define('_XK_IMGBACK','背景色');
define('_XK_CELLALIGN','单元排列方式');
define('_XK_CELLPROPS','单元属性');
define('_XK_CELLALIGNLEFTTOP','左顶');
define('_XK_CELLALIGNLEFTMIDDLE','左中');
define('_XK_CELLALIGNLEFTBOTTOM','左底');
define('_XK_CELLALIGNRIGHTTOP','右顶');
define('_XK_CELLALIGNRIGHTMIDDLE','右中');
define('_XK_CELLALIGNRIGHTBOTTOM','右底');
define('_XK_CELLALIGNCENTERTOP','中顶');
define('_XK_CELLALIGNCENTERMIDDLE','中中');
define('_XK_CELLALIGNCENTERBOTTOM','中底');
define('_XK_PREVIEW','预览');
define('_XK_OTHERS','其它');
define('_XK_CELLOVERFLOW','超界处理');
define('_XK_CELLWIDTH','宽');
define('_XK_CELLHEIGHT','高');
define('_XK_CELLPADDING','单元间隙');

//BORDERS
define('_XK_BORDERS','边框');
define('_XK_BORDERSWIDTH','边框宽度');
define('_XK_BORDERLEFT','左边框');
define('_XK_BORDERRIGHT','右边框');
define('_XK_BORDERTOP','顶边框');
define('_XK_BORDERBOTTOM','底边框');

//REMOVE FORMAT
define('_XK_REMOVE_DESC','清除格式工具');
define('_XK_REMOVE_LINEBREAKS','清除换行符');
define('_XK_REMOVE_SPANF','清除 <strong>&lt;span&gt;</strong>');
define('_XK_REMOVE_FONTF','清除 <strong>&lt;font&gt;</strong>');
define('_XK_REMOVE_WORDF','清除Word文档格式');
define('_XK_REMOVE_EMPTYF','清除空TAG');
define('_XK_REMOVE_ALLF','清除所有格式');
define('_XK_CLOSE_APASTE','粘贴后关闭窗口');
?>