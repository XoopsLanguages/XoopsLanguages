<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // El nombre de este módulo
    define($constpref . '_NAME', 'Protector');

    // Una breve descripción de este módulo
    define($constpref . '_DESC', 'Este módulo protege su sitio XOOPS de varios ataques como la contaminación DoS, SQL Injection y Variables.');

    // Menu
    define($constpref . '_ADMININDEX', 'Protector Center');
    define($constpref . '_ADVISORY', 'Asesor de Seguridad');
    define($constpref . '_PREFIXMANAGER', 'Administrador de Prefijo');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Permisos');

    // Configuraciones
    define($constpref . '_GLOBAL_DISBL', 'Desabilitado Temporalmente');
    define($constpref . '_GLOBAL_DISBLDSC', 'Todas las protecciones están deshabilitadas temporalmente.<br>No te olvides de apagar esto después de solucionar el problema');

    define($constpref . '_DEFAULT_LANG', 'Idioma predeterminado');
    define($constpref . '_DEFAULT_LANGDSC', 'Especifique el idioma configurado para mostrar los mensajes antes de procesar common.php');

    define($constpref . '_RELIABLE_IPS', 'IPs Confiables');
    define($constpref . '_RELIABLE_IPSDSC', 'Ajuste las IPs confiables separadas por | . ^ coincide con la cabecera de la cadena, $ coincide con la cola de la cadena.');

    define($constpref . '_LOG_LEVEL', 'Nivel de acceso');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Tiempo de suspensión de la d IP baneada (seg)');

    define($constpref . '_LOGLEVEL0', 'ninguno');
    define($constpref . '_LOGLEVEL15', 'Silencioso');
    define($constpref . '_LOGLEVEL63', 'Silencioso');
    define($constpref . '_LOGLEVEL255', 'completo');

    define($constpref . '_HIJACK_TOPBIT', 'bits de IP protegidas para la sesión');
    define($constpref . '_HIJACK_TOPBITDSC', 'Anti-sesión Hi-Jacking:<br>Predeterminado 24/56 (máscara de red para IPV4 / IPV6). (Todos los bits están protegidos)<br>Cuando su IP no es estable, configure el rango de IP por número de bits.<br>(ej.) Si su IP puede moverse en el rango de 192.168.0.0-192.168.0.255, configure aquí 24 (bit)');
    define($constpref . '_HIJACK_DENYGP', 'Grupos de IP no admitidas que se mueve en una sesión');
    define($constpref . '_HIJACK_DENYGPDSC', 'Anti Sesión Hi-Jacking:<br>Seleccionar grupos que no están permitidos para mover su IP en una sesión.<br>(Recomiendo activar el Administrador.)');
    define($constpref . '_SAN_NULLBYTE', 'Desinfección de bites nulos');
    define($constpref . '_SAN_NULLBYTEDSC', 'El carácter de terminación "\\0" a menudo se usa en ataques maliciosos.<br>un byte nulo se cambiará a un espacio.<br>(Es muy recomendable activarlo)');
    define($constpref . '_DIE_NULLBYTE', 'Salir si se encuentran bytes nulos');
    define($constpref . '_DIE_NULLBYTEDSC', 'El carácter de terminación"\\0" a menudo se usa en ataques maliciosos.<br>(Es muy recomendable activarlo)');
    define($constpref . '_DIE_BADEXT', 'Salir si se cargan archivos incorrectos');
    define($constpref . '_DIE_BADEXTDSC', 'Si alguien intenta cargar archivos que tienen extensiones incorrectas como .php, este módulo se sale de XOOPS.<br>Si a menudo adjunta archivos php en B-Wiki o PukiWikiMod, desactívelos.');
    define($constpref . '_CONTAMI_ACTION', 'Acción si se encuentra una contaminación');
    define($constpref . '_CONTAMI_ACTIONDS', 'Seleccione la acción a seguir cuando alguien intente contaminar las variables globales del sistema en su XOOPS.<br>(La opción recomendada es una pantalla en blanco)');
    define($constpref . '_ISOCOM_ACTION', 'Acción a ejecutar si se encuentra un comentario aislado');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Inyección Anti SQL:<br>Seleccione la acción cuando se encuentre una "/*" aislada .<br>"Desinfección" significa agregar otra "*/" en la cola<br>(la opción recomendada es Desinfección)');
    define($constpref . '_UNION_ACTION', 'Acción si se encuentra una UNIÓN');
    define($constpref . 'Inyección Anti SQL: <br> Seleccione la acción cuando tenga algún sintaxis como UNION of SQL. <br> "Sanitizing" significa cambiar "unión" por "uni-on". <br> (la opción recomendada es Desinfección)');
    define($constpref . '_ID_INTVAL', 'Forzar intval a variables como id');
    define($constpref . '_ID_INTVALDSC', 'Todas las solicitudes nombradas "*id" se tratará como un número entero.<br>Esta opción lo protege de algún tipo de inyecciones de XSS y SQL..<br>Aunque recomiendo activar esta opción, puede causar problemas con algunos módulos.');
    define($constpref . '_FILE_DOTDOT', 'Protección contra el recorrido de directorios');
    define($constpref . '_FILE_DOTDOTDSC', 'Elimina ".." de todas las solicitudes que parezcan Recorrido de Directorio');

    define($constpref . '_BF_COUNT', 'Anti Brute Force');
    define($constpref . '_BF_COUNTDSC', 'Permite que los invitados intenten iniciar sesión en 10 minutos. Si alguien no puede ingresar en este tiempo, su IP será baneada.');

    define($constpref . '_BWLIMIT_COUNT', 'Limitación del ancho de banda');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Especifique el acceso máximo a mainfile.php durante el tiempo de observación. Este valor debe ser 0 para entornos normales que tengan suficiente ancho de banda de CPU. Se ignorará un número menor de 10.');

    define($constpref . '_DOS_SKIPMODS', 'Módulos sin inspector de DoS/Crawler ');
    define($constpref . '_DOS_SKIPMODSDSC', 'colocar los nombres de los módulos separados con |. Esta opción será útil con el módulo de chat, etc.');

    define($constpref . '_DOS_EXPIRE', 'Tiempo de observación para cargas altas  (seg)');
    define($constpref . '_DOS_EXPIREDSC', 'Este valor especifica el tiempo de visualización para la recarga de alta frecuencia (ataque F5) y los rastreadores de alta carga.');

    define($constpref . '_DOS_F5COUNT', 'Malos conteos para Ataque F5 ');
    define($constpref . '_DOS_F5COUNTDSC', 'Prevención de ataques DoS. <br> Este valor especifica los recuentos de recarga para ser considerado como un ataque malicioso.');
    define($constpref . '_DOS_F5ACTION', 'Acción contra el ataque F5');

    define($constpref . '_DOS_CRCOUNT', ' Conteos Malos para Crawlers');
    define($constpref . '_DOS_CRCOUNTDSC', 'Evitar que los rastreadores tengan carga alta. <br> Este valor especifica los recuentos de acceso para ser considerado como un rastreador de mala calidad.');
    define($constpref . '_DOS_CRACTION', 'Acción contra Crawlers de carga alta ');

    define($constpref . '_DOS_CRSAFE', 'Bienvenido usuario-agente');
    define($constpref . '_DOS_CRSAFEDSC', 'Un patrón perl regex para User-Agent. <br> Si coincide, el rastreador nunca se considera como un rastreador de carga alta. <br> ej.) / (bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Ninguno (solo registro)');
    define($constpref . '_OPT_SAN', 'Desinfección');
    define($constpref . '_OPT_EXIT', 'Pantalla en blanco');
    define($constpref . '_OPT_BIP', 'Banear la IP (Sin limite)');
    define($constpref . '_OPT_BIPTIME0', 'Banear la IP (moratoria)');

    define($constpref . '_DOSOPT_NONE', 'Ninguno (solo registro)');
    define($constpref . '_DOSOPT_SLEEP', 'Dormir');
    define($constpref . '_DOSOPT_EXIT', 'Pantalla en blanco');
    define($constpref . '_DOSOPT_BIP', 'Banear la IP (Sin limite)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Banear la IP (moratorio)');
    define($constpref . '_DOSOPT_HTA', 'NEGAR por .htaccess (Experimental)');

    define($constpref . '_BIP_EXCEPT', 'Grupos que nunca serán registrados como IP incorrecta');
    define($constpref . '_BIP_EXCEPTDSC', 'Un usuario que pertenezca al grupo especificado aquí nunca se le prohibirá. <br> (Recomiendo activar el Administrador.)');

    define($constpref . '_DISABLES', 'Deshabilitar características peligrosas en XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Habilitar captura de capa de DB Inyección anti-SQL');
    define($constpref . '_DBLAYERTRAPDSC', 'Casi todos los ataques de inyección de SQL se cancelarán con esta característica. Esta función requiere un soporte de databasefactory. Puede consultarlo en la página de asesoramiento de seguridad. Esta configuración debe estar activada. Nunca lo apagues casualmente.');
    define($constpref . '_DBTRAPWOSRV', 'Nunca revisar _SERVER por Inyección anti-SQL');
    define($constpref . '_DBTRAPWOSRVDSC', 'Algunos servidores siempre habilitan la captura de capa DB. Esto causa detecciones incorrectas como ataque de inyección SQL. Si tienes esos errores, activa esta opción. Debes saber que esta opción debilita la seguridad de la captura de la capa de DB contra la inyección de SQL.');

    define($constpref . '_BIGUMBRELLA', 'activar anti-XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Esto lo protege de casi ataques a través de vulnerabilidades XSS. Pero no es 100% seguro');

    define($constpref . '_SPAMURI4U', 'anti-SPAM: URLs para usuarios normales');
    define($constpref . '_SPAMURI4UDSC', 'Si este número de URLs se encuentra en datos POST de usuarios que no sean administradores, el POST se considera como SPAM. 0 significa deshabilitar esta característica.');
    define($constpref . '_SPAMURI4G', 'anti-SPAM: URLs para invitados');
    define($constpref . '_SPAMURI4GDSC', 'Si este número de URL se encuentra en los datos de POST de los invitados, el POST se considera como SPAM. 0 significa deshabilitar esta característica.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Administración');
    define($constpref . '_ADMINABOUT', 'A Cerca de');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Comprueba los datos de POST contra los spammers registrados en la base de datos www.stopforumspam.com. Requiere php CURL lib.');
}