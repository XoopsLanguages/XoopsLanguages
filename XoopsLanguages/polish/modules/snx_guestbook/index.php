<?php
//***************************************************************************//
// SnX-Guestbook:                                                              //
// v0.1.1  28/09/2004 FOR XOOPS v2                                           //
// by NGUYEN DINH Quoc-Huy (alias SnAKes) (support@qmel.com)                 //
// http://www.qmel.com                                                       //
/******************************************************************************
 ** Copyright (C) 2004 NGUYEN DINH Quoc-Huy (SnAKes)
 ** 
 ** This library is free software; you can redistribute it and/or
 ** modify it under the terms of the GNU Lesser General Public
 ** License as published by the Free Software Foundation; either
 ** version 2.1 of the License, or (at your option) any later version.
 ** 
 ** This library is distributed in the hope that it will be useful,
 ** but WITHOUT ANY WARRANTY; without even the implied warranty of
 ** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 ** Lesser General Public License for more details.
 ** 
 ** You should have received a copy of the GNU Lesser General Public
 ** License along with this library; if not, write to the Free Software
 ** Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **
 ****************************************************************************** 
 ** Copyright (C) 2004 NGUYEN DINH Quoc-Huy (SnAKes)
 ** Cette bibliothčque est libre, vous pouvez la redistribuer et/ou la modifier
 ** selon les termes de la Licence Publique Générale GNU Limitée publiée par la 
 ** Free Software Foundation (version 2 ou bien toute autre version ultérieure 
 ** choisie par vous).
 **
 ** Cette bibliothčque est distribuée car potentiellement utile, mais SANS
 ** AUCUNE GARANTIE, ni explicite ni implicite, y compris les garanties de 
 ** commercialisation ou d'adaptation dans un but spécifique. Reportez-vous 
 ** ŕ la Licence Publique Générale GNU Limitée pour plus de détails.
 **
 ** Vous devez avoir reçu une copie de la Licence Publique Générale GNU Limitée
 ** en męme temps que cette bibliothčque; si ce n'est pas le cas, écrivez ŕ la 
 ** Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,
 ** MA 02111-1307, États-Unis.
 **
 ******************************************************************************/
include_once("../../mainfile.php");
include_once("header.php");

function my_countries($code) {
	if(!$code)	return '<select name="country">
<option value="af">Afghanistan
<option value="al">Albania
<option value="dz">Algeria
<option value="as">American Samoa
<option value="ad">Andorra
<option value="ao">Angola
<option value="ai">Anguilla
<option value="aq">Antarctica
<option value="ag">Antigua and Barbuda
<option value="ar">Argentina
<option value="am">Armenia
<option value="aw">Aruba
<option value="au">Australia
<option value="at">Austria
<option value="az">Azerbaijan
<option value="bs">Bahamas
<option value="bh">Bahrain

<option value="bd">Bangladesh
<option value="bb">Barbados
<option value="by">Belarus
<option value="be">Belgium
<option value="bz">Belize
<option value="bj">Benin
<option value="bm">Bermuda
<option value="bt">Bhutan
<option value="bo">Bolivia
<option value="ba">Bosnia and Herzegovina
<option value="bw">Botswana
<option value="bv">Bouvet Island
<option value="br">Brazil
<option value="io">British Indian Ocean Territory
<option value="vg">British Virgin Islands
<option value="bn">Brunei
<option value="bg">Bulgaria

<option value="bf">Burkina Faso
<option value="bi">Burundi
<option value="kh">Cambodia
<option value="cm">Cameroon
<option value="ca">Canada
<option value="cv">Cape Verde
<option value="ky">Cayman Islands
<option value="cf">Central African Republic
<option value="td">Chad
<option value="cl">Chile
<option value="cn">China
<option value="cx">Christmas Island
<option value="cc">Cocos Islands
<option value="co">Colombia
<option value="km">Comoros
<option value="cg">Congo
<option value="ck">Cook Islands
<option value="cr">Costa Rica

<option value="hr">Croatia
<option value="cu">Cuba
<option value="cy">Cyprus
<option value="cz">Czech Republic
<option value="dk">Denmark
<option value="dj">Djibouti
<option value="dm">Dominica
<option value="do">Dominican Republic
<option value="tp">East Timor
<option value="ec">Ecuador
<option value="eg">Egypt
<option value="sv">El Salvador
<option value="gq">Equatorial Guinea
<option value="er">Eritrea
<option value="ee">Estonia
<option value="et">Ethiopia
<option value="fk">Falkland Islands

<option value="fo">Faroe Islands
<option value="fj">Fiji
<option value="fi">Finland
<option selected value="fr">France
<option value="gf">French Guiana
<option value="pf">French Polynesia
<option value="tf">French Southern Territories
<option value="ga">Gabon
<option value="gm">Gambia
<option value="ge">Georgia
<option value="de">Germany
<option value="gh">Ghana
<option value="gi">Gibraltar
<option value="gr">Greece
<option value="gl">Greenland
<option value="gd">Grenada
<option value="gp">Guadeloupe

<option value="gu">Guam
<option value="gt">Guatemala
<option value="gn">Guinea
<option value="gw">Guinea-Bissau
<option value="gy">Guyana
<option value="ht">Haiti
<option value="hm">Heard and McDonald Islands
<option value="hn">Honduras
<option value="hk">Hong Kong
<option value="hu">Hungary
<option value="is">Iceland
<option value="in">India
<option value="id">Indonesia
<option value="ir">Iran
<option value="iq">Iraq
<option value="ie">Ireland
<option value="il">Israel

<option value="it">Italy
<option value="ci">Ivory Coast
<option value="jm">Jamaica
<option value="jp">Japan
<option value="jo">Jordan
<option value="kz">Kazakhstan
<option value="ke">Kenya
<option value="ki">Kiribati
<option value="kp">North Korea
<option value="kr">South Korea
<option value="kw">Kuwait
<option value="kg">Kyrgyzstan
<option value="la">Laos
<option value="lv">Latvia
<option value="lb">Lebanon
<option value="ls">Lesotho
<option value="lr">Liberia

<option value="ly">Libya
<option value="li">Liechtenstein
<option value="lt">Lithuania
<option value="lu">Luxembourg
<option value="mo">Macau
<option value="mk">Macedonia
<option value="mg">Madagascar
<option value="mw">Malawi
<option value="my">Malaysia
<option value="mv">Maldives
<option value="ml">Mali
<option value="mt">Malta
<option value="mh">Marshall Islands
<option value="mq">Martinique
<option value="mr">Mauritania
<option value="mu">Mauritius
<option value="yt">Mayotte

<option value="mx">Mexico
<option value="fm">Micronesia
<option value="md">Moldova
<option value="mc">Monaco
<option value="mn">Mongolia
<option value="ms">Montserrat
<option value="ma">Morocco
<option value="mz">Mozambique
<option value="mm">Myanmar
<option value="na">Namibia
<option value="nr">Nauru
<option value="np">Nepal
<option value="nl">Netherlands
<option value="an">Netherlands Antilles
<option value="nc">New Caledonia
<option value="nz">New Zealand
<option value="ni">Nicaragua

<option value="ne">Niger
<option value="ng">Nigeria
<option value="nu">Niue
<option value="nf">Norfolk Island
<option value="mp">Northern Mariana Islands
<option value="no">Norway
<option value="om">Oman
<option value="pk">Pakistan
<option value="pw">Palau
<option value="pa">Panama
<option value="pg">Papua New Guinea
<option value="py">Paraguay
<option value="pe">Peru
<option value="ph">Philippines
<option value="pn">Pitcairn Island
<option value="pl">Polska
<option value="pt">Portugal

<option value="pr">Puerto Rico
<option value="qa">Qatar
<option value="re">Reunion
<option value="ro">Romania
<option value="ru">Russia
<option value="rw">Rwanda
<option value="gs">S. Georgia and S. Sandwich Isls.
<option value="kn">Saint Kitts & Nevis
<option value="lc">Saint Lucia
<option value="vc">Saint Vincent and The Grenadines
<option value="ws">Samoa
<option value="sm">San Marino
<option value="st">Sao Tome and Principe
<option value="sa">Saudi Arabia
<option value="sn">Senegal
<option value="sc">Seychelles

<option value="sl">Sierra Leone
<option value="sg">Singapore
<option value="sk">Slovakia
<option value="si">Slovenia
<option value="sp">Solomon Islands
<option value="so">Somalia
<option value="za">South Africa
<option value="es">Spain
<option value="lk">Sri Lanka
<option value="sh">St. Helena
<option value="pm">St. Pierre and Miquelon
<option value="sd">Sudan
<option value="sr">Suriname
<option value="sj">Svalbard and Jan Mayen Islands
<option value="sz">Swaziland
<option value="se">Sweden
<option value="ch">Switzerland

<option value="sy">Syria
<option value="tw">Taiwan
<option value="tj">Tajikistan
<option value="tz">Tanzania
<option value="th">Thailand
<option value="tg">Togo
<option value="tk">Tokelau
<option value="to">Tonga
<option value="tt">Trinidad and Tobago
<option value="tn">Tunisia
<option value="tr">Turkey
<option value="tm">Turkmenistan
<option value="tc">Turks and Caicos Islands
<option value="tv">Tuvalu
<option value="um">U.S. Minor Outlying Islands
<option value="ug">Uganda
<option value="ua">Ukraine

<option value="ae">United Arab Emirates
<option value="uk">United Kingdom
<option value="us">United States
<option value="uy">Uruguay
<option value="uz">Uzbekistan
<option value="vu">Vanuatu
<option value="va">Vatican City
<option value="ve">Venezuela
<option value="vn">Vietnam
<option value="vi">Virgin Islands
<option value="wf">Wallis and Futuna Islands
<option value="eh">Western Sahara
<option value="ye">Yemen
<option value="yu">Serbia and Montenegro
<option value="zr">Zaire
<option value="zm">Zambia
<option value="zw">Zimbabwe
	</select>';
	else {
$countries["af"]="Afghanistan";
$countries["al"]="Albania";
$countries["dz"]="Algeria";
$countries["as"]="American Samoa";
$countries["ad"]="Andorra";
$countries["ao"]="Angola";
$countries["ai"]="Anguilla";
$countries["aq"]="Antarctica";
$countries["ag"]="Antigua and Barbuda";
$countries["ar"]="Argentina";
$countries["am"]="Armenia";
$countries["aw"]="Aruba";
$countries["au"]="Australia";
$countries["at"]="Austria";
$countries["az"]="Azerbaijan";
$countries["bs"]="Bahamas";
$countries["bh"]="Bahrain";

$countries["bd"]="Bangladesh";
$countries["bb"]="Barbados";
$countries["by"]="Belarus";
$countries["be"]="Belgium";
$countries["bz"]="Belize";
$countries["bj"]="Benin";
$countries["bm"]="Bermuda";
$countries["bt"]="Bhutan";
$countries["bo"]="Bolivia";
$countries["ba"]="Bosnia and Herzegovina";
$countries["bw"]="Botswana";
$countries["bv"]="Bouvet Island";
$countries["br"]="Brazil";
$countries["io"]="British Indian Ocean Territory";
$countries["vg"]="British Virgin Islands";
$countries["bn"]="Brunei";
$countries["bg"]="Bulgaria";

$countries["bf"]="Burkina Faso";
$countries["bi"]="Burundi";
$countries["kh"]="Cambodia";
$countries["cm"]="Cameroon";
$countries["ca"]="Canada";
$countries["cv"]="Cape Verde";
$countries["ky"]="Cayman Islands";
$countries["cf"]="Central African Republic";
$countries["td"]="Chad";
$countries["cl"]="Chile";
$countries["cn"]="China";
$countries["cx"]="Christmas Island";
$countries["cc"]="Cocos Islands";
$countries["co"]="Colombia";
$countries["km"]="Comoros";
$countries["cg"]="Congo";
$countries["ck"]="Cook Islands";
$countries["cr"]="Costa Rica";

$countries["hr"]="Croatia";
$countries["cu"]="Cuba";
$countries["cy"]="Cyprus";
$countries["cz"]="Czech Republic";
$countries["dk"]="Denmark";
$countries["dj"]="Djibouti";
$countries["dm"]="Dominica";
$countries["do"]="Dominican Republic";
$countries["tp"]="East Timor";
$countries["ec"]="Ecuador";
$countries["eg"]="Egypt";
$countries["sv"]="El Salvador";
$countries["gq"]="Equatorial Guinea";
$countries["er"]="Eritrea";
$countries["ee"]="Estonia";
$countries["et"]="Ethiopia";
$countries["fk"]="Falkland Islands";

$countries["fo"]="Faroe Islands";
$countries["fj"]="Fiji";
$countries["fi"]="Finland";
$countries["fr"]="France";
$countries["gf"]="French Guiana";
$countries["pf"]="French Polynesia";
$countries["tf"]="French Southern Territories";
$countries["ga"]="Gabon";
$countries["gm"]="Gambia";
$countries["ge"]="Georgia";
$countries["de"]="Germany";
$countries["gh"]="Ghana";
$countries["gi"]="Gibraltar";
$countries["gr"]="Greece";
$countries["gl"]="Greenland";
$countries["gd"]="Grenada";
$countries["gp"]="Guadeloupe";

$countries["gu"]="Guam";
$countries["gt"]="Guatemala";
$countries["gn"]="Guinea";
$countries["gw"]="Guinea-Bissau";
$countries["gy"]="Guyana";
$countries["ht"]="Haiti";
$countries["hm"]="Heard and McDonald Islands";
$countries["hn"]="Honduras";
$countries["hk"]="Hong Kong";
$countries["hu"]="Hungary";
$countries["is"]="Iceland";
$countries["in"]="India";
$countries["id"]="Indonesia";
$countries["ir"]="Iran";
$countries["iq"]="Iraq";
$countries["ie"]="Ireland";
$countries["il"]="Israel";

$countries["it"]="Italy";
$countries["ci"]="Ivory Coast";
$countries["jm"]="Jamaica";
$countries["jp"]="Japan";
$countries["jo"]="Jordan";
$countries["kz"]="Kazakhstan";
$countries["ke"]="Kenya";
$countries["ki"]="Kiribati";
$countries["kp"]="North Korea";
$countries["kr"]="South Korea";
$countries["kw"]="Kuwait";
$countries["kg"]="Kyrgyzstan";
$countries["la"]="Laos";
$countries["lv"]="Latvia";
$countries["lb"]="Lebanon";
$countries["ls"]="Lesotho";
$countries["lr"]="Liberia";

$countries["ly"]="Libya";
$countries["li"]="Liechtenstein";
$countries["lt"]="Lithuania";
$countries["lu"]="Luxembourg";
$countries["mo"]="Macau";
$countries["mk"]="Macedonia";
$countries["mg"]="Madagascar";
$countries["mw"]="Malawi";
$countries["my"]="Malaysia";
$countries["mv"]="Maldives";
$countries["ml"]="Mali";
$countries["mt"]="Malta";
$countries["mh"]="Marshall Islands";
$countries["mq"]="Martinique";
$countries["mr"]="Mauritania";
$countries["mu"]="Mauritius";
$countries["yt"]="Mayotte";

$countries["mx"]="Mexico";
$countries["fm"]="Micronesia";
$countries["md"]="Moldova";
$countries["mc"]="Monaco";
$countries["mn"]="Mongolia";
$countries["ms"]="Montserrat";
$countries["ma"]="Morocco";
$countries["mz"]="Mozambique";
$countries["mm"]="Myanmar";
$countries["na"]="Namibia";
$countries["nr"]="Nauru";
$countries["np"]="Nepal";
$countries["nl"]="Netherlands";
$countries["an"]="Netherlands Antilles";
$countries["nc"]="New Caledonia";
$countries["nz"]="New Zealand";
$countries["ni"]="Nicaragua";

$countries["ne"]="Niger";
$countries["ng"]="Nigeria";
$countries["nu"]="Niue";
$countries["nf"]="Norfolk Island";
$countries["mp"]="Northern Mariana Islands";
$countries["no"]="Norway";
$countries["om"]="Oman";
$countries["pk"]="Pakistan";
$countries["pw"]="Palau";
$countries["pa"]="Panama";
$countries["pg"]="Papua New Guinea";
$countries["py"]="Paraguay";
$countries["pe"]="Peru";
$countries["ph"]="Philippines";
$countries["pn"]="Pitcairn Island";
$countries["pl"]="Poland";
$countries["pt"]="Portugal";

$countries["pr"]="Puerto Rico";
$countries["qa"]="Qatar";
$countries["re"]="Reunion";
$countries["ro"]="Romania";
$countries["ru"]="Russia";
$countries["rw"]="Rwanda";
$countries["gs"]="S. Georgia and S. Sandwich Isls.";
$countries["kn"]="Saint Kitts & Nevis";
$countries["lc"]="Saint Lucia";
$countries["vc"]="Saint Vincent and The Grenadines";
$countries["ws"]="Samoa";
$countries["sm"]="San Marino";
$countries["st"]="Sao Tome and Principe";
$countries["sa"]="Saudi Arabia";
$countries["sn"]="Senegal";
$countries["sc"]="Seychelles";

$countries["sl"]="Sierra Leone";
$countries["sg"]="Singapore";
$countries["sk"]="Slovakia";
$countries["si"]="Slovenia";
$countries["sp"]="Solomon Islands";
$countries["so"]="Somalia";
$countries["za"]="South Africa";
$countries["es"]="Spain";
$countries["lk"]="Sri Lanka";
$countries["sh"]="St. Helena";
$countries["pm"]="St. Pierre and Miquelon";
$countries["sd"]="Sudan";
$countries["sr"]="Suriname";
$countries["sj"]="Svalbard and Jan Mayen Islands";
$countries["sz"]="Swaziland";
$countries["se"]="Sweden";
$countries["ch"]="Switzerland";

$countries["sy"]="Syria";
$countries["tw"]="Taiwan";
$countries["tj"]="Tajikistan";
$countries["tz"]="Tanzania";
$countries["th"]="Thailand";
$countries["tg"]="Togo";
$countries["tk"]="Tokelau";
$countries["to"]="Tonga";
$countries["tt"]="Trinidad and Tobago";
$countries["tn"]="Tunisia";
$countries["tr"]="Turkey";
$countries["tm"]="Turkmenistan";
$countries["tc"]="Turks and Caicos Islands";
$countries["tv"]="Tuvalu";
$countries["um"]="U.S. Minor Outlying Islands";
$countries["ug"]="Uganda";
$countries["ua"]="Ukraine";

$countries["ae"]="United Arab Emirates";
$countries["uk"]="United Kingdom";
$countries["us"]="United States";
$countries["uy"]="Uruguay";
$countries["uz"]="Uzbekistan";
$countries["vu"]="Vanuatu";
$countries["va"]="Vatican City";
$countries["ve"]="Venezuela";
$countries["vn"]="Vietnam";
$countries["vi"]="Virgin Islands";
$countries["wf"]="Wallis and Futuna Islands";
$countries["eh"]="Western Sahara";
$countries["ye"]="Yemen";
$countries["yu"]="Serbia and Montenegro";
$countries["zr"]="Zaire";
$countries["zm"]="Zambia";
$countries["zw"]="Zimbabwe";
if(array_key_exists($code,$countries)) return $countries[$code];	
else return $code;
	}
}

function showSignForm() {
    global $HTTP_SERVER_VARS;
	echo '
	<script language="javascript">
		function checkForm() {
			if(document.snx_guestbook.fullname.value!=\'\' && document.snx_guestbook.title.value!=\'\' && document.snx_guestbook.comment.value!=\'\') {
				return true;
			}
			window.alert(\''._SnX_GB_FILL_FORM_FIELDS.'\');
			return false;
		}
	</script>
	<table border=0 width="95%"><tr><td><form name="snx_guestbook" action="index.php" method=post onSubmit="return checkForm();">
	<input type="hidden" name="site" value="aevm">
	<input type="hidden" name="op" value="signNow">
	<input type="hidden" name="icon" value="conique.gif">
	<tr><td valign=top  height=250>
	<center>
	<h2>'._SnX_GB_MY_GB.'</h2><br><br>
	<table border=0>
	<tr><td align=right>'._SnX_GB_NAME.'<font color=#ff0000>*</font>:</td><td><input name="fullname" size=30></td></tr>
	<tr><td align=right>'._SnX_GB_CITY.':</td><td><input name="city" size=30></td></tr>
	<tr><td align=right>'._SnX_GB_COUNTRY.':</td><td>'.my_countries().'</td></tr>
	<tr><td align=right>email:</td><td><input name="email" size=30></td></tr>
	<tr><td align=right>Strona WWW:</td><td><input name="url" size=30 value="http://"></td></tr>
	<tr><td align=right>'._SnX_GB_TITLE.'<font color=#ff0000>*</font>:</td><td><input name="title" size=30></td></tr>
	<tr><td align=right>Wiadomość<font color=#ff0000>*</font> (no HTML):</td><td><textarea name="comment" rows=5 cols=50></textarea></td></tr>
	<tr><td>&nbsp;</td><td>'.stripslashes(_SnX_GB_FILL_FORM_FIELDS).'</td></tr>
	<tr><td>&nbsp;</td><td><input type=submit value="'._SnX_GB_SIGN_NOW.'" name="submit"></td></tr>
	</table>
	</center>
	</form>
	</td></tr></table>';
}

function view($from) {
	global $xoopsDB;
	if(!$from) $from=0;	
	$nbEntries=$xoopsDB->getRowsNum($xoopsDB->query("select id from ".$xoopsDB->prefix("snx_guestbook").";"));
	
	$sql="select id,date,country,city,name,title,comment,homepage,email,icon,ip from ".$xoopsDB->prefix("snx_guestbook")." order by date desc LIMIT $from,5;";
	$result=$xoopsDB->query($sql);
	echo "<style type=\"text/css\" title=\"currentStyle\">@import \"style.php\";</style>";
	echo "<div id=\"SnX-Guestbook\">\n";
	echo "\t<h3 class=\"SnX_GB_title\"><span>"._SnX_GB_MY_GB."</span></h3>\n";
	echo "\t<p class=\"GB_sign\"><span><a href=\"index.php?op=showSignForm\"><img src=\"images/sign.jpg\" name=\""._SnX_GB_SIGN."\" alt=\""._SnX_GB_SIGN."\" align=middle> "._SnX_GB_SIGN."</a></span></p>\n";
	echo "\t<p class=\"GB_view\"><span><a href=\"index.php?op=view\">"._SnX_GB_VIEW."<img src=\"images/view.jpg\" name=\""._SnX_GB_VIEW."\" alt=\""._SnX_GB_VIEW."\" align=middle></a></span></p>\n";
	$count=0;
	while(list($id,$date,$country,$city,$name,$title,$comment,$homepage,$email,$icon,$ip)=$xoopsDB->fetchRow($result)) {
		if($count++) echo "\t<p class=\"GB_separator\"><span>---------------</span></p>\n";
		echo "\t<p class=\"GB_title\"><span>".(($id<10)?"0".$id:$id).")&nbsp;$title</span></p>\n";
		echo "\t<p class=\"GB_name\"><span>".(($name!="")?"$name":_SnX_GB_ANONYMOUS)."</span></p>\n";
		if($city!="") {
			echo "\t<p class=\"GB_city_separator\"><span>&nbsp;-&nbsp;</span></p>\n";
			echo "\t<p class=\"GB_city\"><span>$city</span></p>\n";
		}
		if($country!="") {
			echo "\t<p class=\"GB_country_delimiter_left\"><span>&nbsp;(</span></p>\n";
			echo "\t<p class=\"GB_country\"><span>".my_countries($country)."</span></p>\n";
			echo "\t<p class=\"GB_country_delimiter_right\"><span>)&nbsp;</span></p>\n";
		}
		echo "\t<p class=\"GB_date\"><span>$date</span></p>\n";
		if($email!="") {
			echo "\t<p class=\"GB_email_title\"><span>Email:&nbsp;</span></p>\n";
			echo "\t<p class=\"GB_email\"><span>";
			preg_match("/(.*?)\@(.*)\.(.*)/",$email,$match);
			echo "<script language=\"javascript\">";
			echo "var id='".$match[1]."';";
			echo "var host1='".$match[2]."';";
			echo "var host2='".$match[3]."';";
			echo "document.write('<a href=\"mailto:'+id+'@'+host1+'.'+host2+'\">'+id+'@'+host1+'.'+host2+'</a>');";
			echo "</script>";
			echo "</span></p>\n";
		}
		if($homepage!="" && $homepage!="http://") {
			echo "\t<p class=\"GB_homepage_title\"><span>URL:&nbsp;</span></p>\n";
			echo "\t<p class=\"GB_homepage\"><span><a href=\"$homepage\">$homepage</a></span></p>\n";
		}
		echo "\t<p class=\"GB_message\"><span>".ereg_replace("\n","<br>\n",$comment)."</span></p>\n";
		echo "\t<p class=\"GB_ip\"><span>$ip</span></p>\n";
	}
	if($nbEntries>5) {
		include_once(XOOPS_ROOT_PATH.'/class/pagenav.php');
		$pagenav=new XoopsPageNav($nbEntries, 5, $from, 'from');
		echo "\t<p class=\"GB_nav\"><span>".$pagenav->renderNav()."</span></p>\n";
	}
	echo "\t<p class=\"GB_sign\"><span><a href=\"index.php?op=showSignForm\"><img src=\"images/sign.jpg\" name=\""._SnX_GB_SIGN."\" alt=\""._SnX_GB_SIGN."\" align=middle> "._SnX_GB_SIGN."</a></span></p>\n";
	echo "\t<p class=\"GB_view\"><span><a href=\"index.php?op=view\">"._SnX_GB_VIEW."<img src=\"images/view.jpg\" name=\""._SnX_GB_VIEW."\" alt=\""._SnX_GB_VIEW."\" align=middle></a></span></p>\n";
	echo "</div>\n";
}

function signNow($myPost) {
	global $xoopsDB, $HTTP_SERVER_VARS;
	echo $myPost["fullname"];
	$sql="insert into ".$xoopsDB->prefix("snx_guestbook")." values('','".$myPost["site"]."','".$myPost["icon"]."','".$myPost["fullname"]."','".$myPost["email"]."','".$myPost["url"]."','".$myPost["title"]."','".strip_tags($myPost["comment"])."',NOW(),'".$HTTP_SERVER_VARS["REMOTE_ADDR"]."','".$myPost["country"]."','".$myPost["city"]."');";
	$result=$xoopsDB->query($sql);
	if(!$result) {
		MSWeatherError(_MSW_INSERTERROR);
	} else {
		header("Location: ".XOOPS_URL."/modules/snx_guestbook/?op=view");
	}
}

/**********************************************************
*  MAIN SECTION
* *********************************************************/

if ( $xoopsConfig['startpage'] == $xoopsModule->dirname() ) {
	$xoopsOption['show_rblock'] =1;
	include(XOOPS_ROOT_PATH."/header.php");
	if ( empty($HTTP_GET_VARS['start']) ) {
		make_cblock();
		echo "<br />";
	}
} else {
	$xoopsOption['show_rblock'] =0;
	include(XOOPS_ROOT_PATH."/header.php");
}

global $HTTP_POST_VARS,$HTTP_GET_VARS;

if (isset($HTTP_GET_VARS['op'])) $op=$HTTP_GET_VARS['op'];
	elseif (isset($HTTP_POST_VARS['op'])) $op=$HTTP_POST_VARS['op'];
		else $op="";
if (isset($HTTP_GET_VARS['from'])) $from=$HTTP_GET_VARS['from'];
	elseif (isset($HTTP_POST_VARS['from'])) $from=$HTTP_POST_VARS['from'];
		else $from=0;

switch ( $op ) {
   case "showSignForm":
		showSignForm();
   break;
   
   case "signNow":
   		signNow($HTTP_POST_VARS);
   break;
   
   case "view":
		view($from);
   break;

   default:
		view($from);
}

echo "<br><br><center><b>SnX-Guestbook</b><br>\n";
$myConfig["advert"]="mini";
if($myConfig["advert"]=="full") {
   		echo "<a href=\"http://www.qmel.com/\">"._SnX_GB_QMEL_FULL."</a><br>\n";
		echo "<a href=\"http://www.ntica.com/\">"._SnX_GB_NTICA_FULL."</a><center>\n";
} elseif($myConfig["advert"]=="mini") {
   		echo "<a href=\"http://www.qmel.com/\">"._SnX_GB_QMEL_MINI."</a> & <a href=\"http://www.ntica.com/\">"._SnX_GB_NTICA_MINI."</a><center>\n";
}

include_once (XOOPS_ROOT_PATH."/footer.php");
?>
