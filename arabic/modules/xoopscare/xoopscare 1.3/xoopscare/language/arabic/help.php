<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">(XoopsCare) ׁÚַםֹ ׂזזָ׃</a> וז דזֿםב ױדד ָוֿÝ ד׃ַÚֿÊß Úבל ױםַהֹ דזÞÚß ָ״ׁםÞֹ ׃ובֹ ז<b>ÊבÞֶַםַ</b>.
ֽםֻ Þדהַ ָßב װםֱ ֳדßההַ בּÚבו ֳֽ׃ה דזֿםב¡ <b>Êֽדב זֽֿß ד׃ִזבםֹ ֵ׃ÊÚדַבו</b>

ָו׀ַ ַבדזֿםב םדßהß :
1/ ױםַהֹ ÞַÚֹֿ ַבָםַהַÊ
2/ ַבÞםַד ָÚדבםַÊß
3/ ÊהÝם׀ װÝַׁÊ php
4/ ÊהÙםÝ templates_c and cache
5/ ֽ׀Ý ַבÊÚבםÞַÊ ַבÊ״Ýבםֹ Spams
6/ ÊהÙםÝ ַבּב׃ַÊ (Sessions)

םדßהß Êֽֿםֿ דַ ֵ׀ַ ßהÊ Êׁםֿ ֳד בַ ַבÞםַד ָßב דה ו׀ו ַבֳÚדַב.

ַָבֵײַÝֹ ֵבל ֵדßַהםֹ Ê׃ּםב ßב ַבֳÚדַב ַבÊם םÞזד ָוַ ו׀ַ ַבדזֿםב ז(ֵ׀ַ ßַהÊ Úהֿß)¡ ֵ׃ÊÚדַב ַבßׁזהַÊ בױםַהֹ דזÞÚß.

ֵ׀ַ ßַה ֵָדßַהß ֳה Êהַֿם ַבדזֿםב Úָׁ ßׁזה¡ ֵ׀ה הַֿם ַבדבÝ <i>cron.php</i> ַבדזּזֿ Ýם דּבֿ ַבדזֿםב זדׁׁ בו ßבדֹ ַבדׁזׁ ַבÊם ßÊָÊוַ Ýם בזֹֽ ֵַֹֿׁ ַבדזֿםב.
	ֳßÊָו וß׀ַ : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>ֵ׀ַ ֵ׃ÊÚדבÊ ַבßׁזה זבד ÊßÊָ ßבדֹ ַבדׁזׁ¡ Ýבה םÞזד ַבדזֿםב ֳָם װםֱ</b>¡ ו׀ַ בֽדַםֹ דזÞÚß דה ֳװ־ַױ םדßהוד ֵ׃ÊÚדַב ַבßׁזה.

ֵ׀ַ בד םßה ֵָדßַהß ֵ׃ÊÚדַב ַבßׁזה ֵ׀ה װÛב ָבזß ַבדזֿםב Ýם דזÞÚß (Ýם ֳם דßַה Êׁםֿ)¡ ז׃םÞזד ַבדזֿםב ָװßב ÊבÞֶַם זÝם ַבזÞÊ ַבדהַ׃ָ ַָבֳÚדַב ַבÊם ּֿזבÊוַ.
׃Êזה: םדßהß ֵ׃ÊÚדַב ַבßַװ Ýם ו׀ַ ַבָבזß.

ֳזב װםֱ םָּ ַבÞםַד ָו¡ וז ַב׀וַָ ֵבל ֵַֹֿׁ ַבדזֿםב זזײÚ ַב־םַַׁÊ.
Ýם ַבֱּׂ ַבֳזב <b>ַב־םַַׁÊ ַבÚַדֹ</b>¡ ײÚ ßבדֹ דׁזׁ ַבßׁזה ֵ׀ַ ßהÊ Ê׃ÊÚדבו.
ֵ׀ַ ßהÊ Êׁםֿ ֵהװֱַ דבÝ ַב׃ּב¡ ֵ׀ה ֵדבֱ ־ַהֹ <i>דבÝ ַב׃ּב</i>.
םהױֽ בֳ׃ַָָ זÞֶַםֹ ֵÚ״ֱַ ַבדבÝ ױםÛֹ <u>.php</u>.

Ýם ֱּׂ <b>ױםַהֹ ÞַÚֹֿ ַבָםַהַÊ</b>¡ ֳßÊָ ַָבֳםַד ַבדֹֿ ַבׂדהםֹ בױםַהֹ ÞַÚֹֿ ַבָםַהַÊ.
ֵ׀ַ זײÚÊ 0 Ýבה םÊד ַבÞםַד ֳָם װםֱ.
׃םÊד Ýם ו׀ו ַבÚדבםֹ Ýֽױ זדÚַבֹּ ßב ַבַּֿזב ַבד׃ÊÚדבֹ דה ״ׁÝ דזÞÚß. 


Ýם ֱּׂ <b>ַבÚדבםַÊ</b>¡ ֳßÊָ ֳזבַ ַבדֹֿ ַבÝַױבֹ ָםה ַבÚדבםַÊ ֻד (ÝÞ״ ֵ׀ַ ַֽÊּÊוַ)¡ ֳßÊָ ָÚײ ÚדבםַÊ SQL בבÞםַד ָוַ Ýם ÞַÚֹֿ ַבָםַהַÊ.

םדßהß ַבÞםַד ָהÝ׃ ַבװםֱ דÚ װÝֹׁ Php <b>װÝֹׁ Php</b>

Ýם ֱּׂ <b>Cache ז Templates_c</b> םÚ״םß ֵדßַהםֹ ÊהÙםÝ ַבדּבֿםה Cache ז Templates_c.

Ýם ֱּׂ <b>ַבּב׃ַÊ (sessions)</b> ׃םÚ״םß ֵדßַהםֹ ÊהÙםÝ ּֿזב session Ýם ÞַÚֹֿ ַבָםַהַÊ Ýם דֹֿ ׂדהםֹ Êֽֿֿוַ.


זֳ־םַׁ¡  Ýם ַבֱּׂ <b>ַבÊÚבםÞַÊ ַבÊ״Ýבםֹ</b>¡  םדßהß ֽ׀Ý ßב ַבÊÚבםÞַÊ ַבÊ״Ýבםֹ.
ו׀ו זÙםÝֹ ÊÚדב דÚ <i>ÊÚֿםבַÊ ַבßבדַÊ ַבדדהזÚֹ</i> בׂזזָ׃.
ֳזבַ¡ דה <i>־םַַׁÊ ַבדּבֹ</i>¡ םָּ Úבםß ÊÝÚםב ־ַױםֹ ַבׁÞַָֹ Úבל ַבßבדַÊ¡ ֳֿ־ב ַבßבדַÊ ַבדדהזÚֹ זֳֿ־ב ַבßבדֹ ַבÊם ׃Ê׃Êָֿב ָוַ ַבßבדַÊ ַבדדהזÚֹ.
דזֿםב ׁÚַםֹ ׂזזָ׃ ׃םָֻֽ Ýם ַבÊÚבםÞַÊ ַבÊם ÊֽÊזם Úבל ßבדֹ ַבֵ׃Êַָֿב ז׃ם״ָÞ ÊÚֿםבַÊß Úבםוַ.
ֵײַÝֹ ֵבל ֳה ַבדזֿםב םדßהו ֵ׃Ê־ַּׁ ַבֳםָם דה ַבÊÚבםÞ זֵײַÝÊו ÊבÞֶַםַ Ýם Úהַזםה ַבֳםָם ַבד״ׁזֹֿ.
ֳ־םַׁ¡ םדßהß ÝÚב דַ Êװֱַ ַָבÊÚבםÞַÊ ַבÊ״Ýבםֹ¡ םדßהß ַבֵֽÊÝַÙ ָוַ¡ Úֿד הװׁוַ¡ֵ־Ýֱַוַ ֳז ֽ׀Ýוַ.


ֵ׀ַ ßהÊ Ê׃ÊÚדב ßׁזה Ýם דזÞÚß¡  ֵ׀ה Ýַבדֹֿ ַבׂדהםֹ בה םÊד ֵ׃ÊÚדַבוַ ז בßהוַ םָּ ֳה Êßזה ֳßָׁ דה 0.

Þַד ָÊÚׁםָ ַבדזֿםב koumed Úײז Ýם דזÞÚ ַבֿÚד ַבÚָׁם בװָßֹ ׂזזָ׃ <a href="http://www.arabxoops.com" target="_blank">http://www.arabxoops.com/</a>

<a href="http://www.instant-zero.com" target="_blank">Let us know if you like this module</a>

endhelp;
?>
