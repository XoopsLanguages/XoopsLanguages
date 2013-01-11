<?php
// $Id: welcome.php 8066 2011-11-06 05:09:33Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8I
// Translator: XOOPS Translation Team

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> merupakan
    Object-Oriented Web Publishing System Sumber Terbuka yang ditulis dalam PHP. Ia merupakan alat ideal untuk membangunkan
  laman web komuniti dinamik, portal syarikat, portal korporat, blog dan sebagainya dari yang kecil sehinggalah yang berskala besar.
</p>
<p>
    XOOPS dikeluarkan di bawah terma
    <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
    dan percuma untuk digunakan dan diubahsuai.
Ia adalah percuma untuk diagihkan semula selagi anda mematuhi terma pengedaran GPL.
</p>
<h3>Keperluan</h3>
<ul>
    <li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 5.2 atau lebih tinggi </li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 5.1 atau lebih tinggi </li>
</ul>
<h3>Sebelum anda install</h3>
<ol>
    <li>Setup WWW server, PHP and server pangkalan data dengan betul.</li>
    <li>Sedia pangkalan data laman web XOOPS anda.</li>
    <li>Sedia nama pengguna pangkalan data dan berikan ia akses kepada pangkalan data.</li>
    <li>Jadikan fail dan direktori writable: %s</li>
    <li>Untuk pertimbangan keselamatan, anda dinasihatkan untuk memindahkan dua direktori berikut keluar dari <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a> dan ubah nama folder tersebut: %s</li>
    <li>Cipta (sekiranya belum wujud) dan jadikan direktori writable: %s</li>
    <li>Pastikan cookie dan JavaScript dalam browser anda berfungsi.</li>
</ol>
';
?>