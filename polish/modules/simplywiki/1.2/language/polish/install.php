<?php
/**
 * Language definitions used during installation of SimplyWiki
 * 
 * @package SimplyWiki
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @version $Id$  
 */
 /** include the modinfo constants, so we don't have to define them again (specifically, _MI_SWIKI_HOME) */
 include_once 'modinfo.php';
 
 define('_MI_SWIKI_PROFILE1','Otwarty');
 define('_MI_SWIKI_PROFILE2','Publiczny');
 define('_MI_SWIKI_PROFILE3','Prywatny');
 define('_MI_SWIKI_HOME_TITLE','Stona domowa SimplyWiki');

 define('_MI_SWIKI_HOME_TEXT',
     "<p><table border=\'0\'>
     <tbody><tr><td>
     <p>Witamy<br />To jest domyślna strona domowa. Śmiało możesz ją modyfikować.
     Aby utworzyć nową stronę, wpisz gdziekolwiek jej nazwę otoczoną podwójnym nawiasem kwadratowym ( [[ ). 
     Gdy zapiszaesz stronę nawias zamieni się w odnośnik (link) do nowej strony.</p>
     <p>Sprawdź <a href=\'manual.html\' target=_blank>the manual</a> aby więcej dowiedzieć się na temat edycji.</p></td>
     <td><img src=\'images/wiwilogo.gif\' /></td></tr></tbody></table></p>
     <p><table cellspacing=\'5\' cellpadding=\'5\' width=\'100%\' border=\'0\'>
          <tbody><tr><td bgcolor=\'#e4e4e4\'>Indeks stron</td>
          <td bgcolor=\'#e4e4e4\'>Strony według daty aktualizacji</td></tr>
          <tr><td bgcolor=\'#f6f6f6\'>&lt;[PageIndex]&gt;</td>
          <td bgcolor=\'#f6f6f6\'>&lt;[RecentChanges]&gt;</td></tr></tbody></table>
     </p>");
?>