<div id="help-template" class="outer">
    <h1 class="head">Ayuda: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Regresar a la administración de Protector"> Protector <img src="<{xoAdminIcons home.png}>" alt="Regresar a la administración de Protector"/></a></h1>
    <!-- -----Contenido de Ayuda ---------- -->
    <h4 class="odd">Descripción</h4>

    <p class="even">Protector es un módulo para defender su CMS de varios ataques maliciosos.</p>
    <h4 class="odd">Instalar/Desinstalar </h4>

    <p>Primero, defina XOOPS_TRUST_PATH dentro de mainfile.php si no lo ha hecho todavía</p>
    <br>

    <p>Copie html/modules/protector en el archivo en su XOOPS_ROOT_PATH/modules/</p>

    <p>Copie xoops_trust_path/modules/protector en el archivo en su XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Ponga el permiso de XOOPS_TRUST_PATH/modules/protector/configs como escribible</p>
    <h4 class="odd">= Cómo rescatar =</h4>

    <p class="even">Si ha sido excluido de Protector, simplemente elimine los archivos en XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Introducción para filtros-plugins en este archivo.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Todos los mensajes de IP registrados en RBL serán rechazados.
        <br>
        Este plugin puede ralentizar el rendimiento de los mensajes, especialmente los módulos de chat.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Todos los mensajes de IP registrados en http: BL serán rechazados.
        <br>
        Antes de usarlo, obtenga HTTPBL_KEY de http://www.projecthoneypot.org/ y configurelo en el archivo de filtro.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        un plugin anti-SPAM.
        <br>
        La publicación sin caracteres de múltiples bytes será rechazada.
        <br>
        Este plugin es solo para sitios de japonés, chinos, taiwaneses y coreanos.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Todos los datos enviados por los invitados serán purificados por HTMLPurifier.
        <br>
        Si permite que los invitados publiquen HTML, le recomiendo que lo habilite.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Este plugin evita que su sitio se registre en el usuarios robot.
        <br>
        El JavaScript requerido trabaja en el navegador de los visitantes.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Especifique un mensaje para los visitantes que intentaron contraseñas incorrectas más que las veces especificadas.
        <br>
        Todos los plugins nombrados*_message.php especifica el mensaje para accesos rechazados.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Cuando la limitación del ancho de banda funciona desafortunadamente, este complemento lo registra en error_log de Apache.
    </p>

    <p>Todos los plugins nombrados *_errorlog.php registra algunas informaciones en error_log de Apache.</p>
    <h4 class="odd">Tutorial</h4>

    <p class="even">Tutorial próximamente.</p>
    <!-- -----Contenido de Ayuda ---------- -->
</div>