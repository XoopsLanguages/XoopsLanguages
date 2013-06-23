<?php

  //Properties admin page
  define('_MI_DOWNLOADHOME','Directorio de Descarga');
  define('_MI_DOWNLOADHOMEDSC','Es el directorio donde los archivos activos serán almacenados para su descarga');
  define('_MI_XASSET_SHOW_MIN_LICENSE','Mostrar Licencia Reducida.');
  define('_MI_XASSET_SHOW_MIN_L_DESC','Mostrar la Columna de la Licencia Reducida en la página de Evaluación.');
  define('_MI_XASSET_SHOW_MAX_DOWNLOADS','Mostrar Máximas Descargas.');
  define('_MI_XASSET_SHOW_MAX_D_DESC','Mostrar Columna de Máximas Descargas en la página de evaluación.');
  define('_MI_XASSET_SHOW_MAX_DAYS','Mostrar Máximos Días.');
  define('_MI_XASSET_SHOW_MAX_DAYS_DESC','Mostrar Columna Máximos Días en la página de evaluación.');
  define('_MI_XASSET_SHOW_EXPIRES','Mostrar Fecha de Expiración.');
  define('_MI_XASSET_SHOW_EXPIRES_DESC','Mostrar Columna de la fecha de expiración en la página de evaluación.');
  define('_MI_XASSET_SHOW_SAMPLES','Mostrar Columna de Ejemplos');
  //admin menus
  define('_MI_XASSET_MENU_PREFERENCES', 'Preferencias');
  define('_MI_XASSET_MENU_CHECK_TABLES', 'Comprobar Tablas');
  define('_MI_XASSET_MENU_MANAGE_APPLICATIONS', 'Administrar Aplicaciones');
  define('_MI_XASSET_MENU_MANAGE_LICENSES', 'Administrar Licencias');
  define('_MI_XASSET_MENU_MANAGE_STATS','Administrar Estadísticas de Descargas');
  define('_MI_XASSET_MENU_MANAGE_PACKAGES', 'Administrar Paquetes');
  define('_MI_XASSET_MENU_MANAGE_LINKS', 'Administrar Enlaces');
  define('_MI_XASSET_MENU_MANAGE_REGIONS', 'Administrar Regiones');
  define('_MI_XASSET_MENU_MANAGE_COUNTRIES', 'Administrar Países');
  define('_MI_XASSET_MENU_MANAGE_ZONES', 'Administrar Zonas');
  define('_MI_XASSET_MENU_MANAGE_TAXES', 'Administrar Tarifas e impuestos');
  define('_MI_XASSET_MENU_MANAGE_CURRENCIES', 'Administrar Monedas');
  define('_MI_XASSET_MENU_MANAGE_GATEWAYS', 'Administrar Entradas');
  define('_MI_XASSET_MENU_MANAGE_GATE_LOGS', 'Mostrar Logs de las Entradas');
  define('_MI_XASSET_MENU_MANAGE_ORDERS','Mostrar Pedidos');
  define('_MI_XASSET_MENU_MANAGE_MEMBERSHIP','Administrar Miembros');
  //template names
  define('_MI_XASSET_VERSION_ADMIN_INDEX','Administrar Página de Inicio');
  define('_MI_XASSET_VERSION_ADMIN_APP_MAINTENANCE','Administrar Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_LICENCE_MAINTENANCE','Administrar Licencia');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_MAINTENANCE','Administrar Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LICENSE_BLOCK','Administrar añadir bloque de licencia');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_APPLICATION','Administrar Licencias de Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_CLIENTS','Administrar Licencias de Clientes');
  define('_MI_XASSET_VERSION_ADMIN_GROUPS_PACKAGES','Administrar Grupos y Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_GROUP','Administrar el bloque añadir grupo de paquete');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_BLOCK','Administrar el bloque añadir paquete');
  define('_MI_XASSET_VERSION_ADMIN_APPLICATION_LINKS','Administrar Enlaces de Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LINKS','Administrar añadir enlaces de Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_LINKS','Administrar Editar enlaces de Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_APPLICATION','Administrar Añadir/Editar bloque de Aplicación');
  define('_MI_XASSET_VERSION_ADMIN_USERS_INDEX','Administrar Índice de Usuarios');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_USER','Administrar Añadir/Editar bloque de Usuario');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_PACKAGE_GROUP','Administrar grupo de paquete');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_EDIT','Administrar Edición de Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_DOWNLOAD_STATS_INDEX','Administrar Página Principal de estadísticas para las descargas');
  define('_MI_XASSET_VERSION_INDEX_PAGE','Página Inicial');
  define('_MI_XASSET_VERSION_LICENSE_INDEX','Licencia para la Página Inicial');
  define('_MI_XASSET_VERSION_ERROR_PAGE','Página de Error');
  define('_MI_XASSET_VERSION_PACKAGE_INDEX','Página Inicial para el Paquete');
  define('_MI_XASSET_VERSION_EVALUATION_INDEX','Página Inicial para la Evaluación de las Aplicaciones');
  define('_MI_XASSET_VERSION_COUNTRY_ADD','Administrar bloque añadir país');
  define('_MI_XASSET_VERSION_COUNTRY_INDEX','Administrar Página Inicio por País');
  define('_MI_XASSET_VERSION_REGION_INDEX','Página de Inicio según Región');
  define('_MI_XASSET_VERSION_REGION_ADD','Añadir Página de Región');
  define('_MI_XASSET_VERSION_ZONE_ADD','Administrar bloque Añadir Zona');
  define('_MI_XASSET_VERSION_ZONE_INDEX','Administrar Página Inicio de la Zona');
  define('_MI_XASSET_VERSION_TAXRATES_INDEX','Administrar Página Inicio de Precios e impuestos');
  define('_MI_XASSET_VERSION_TAX_CLASS_ADD','Administrar bloque Añadir Tipo de Impuestos');
  define('_MI_XASSET_VERSION_TAX_RATE_ADD','Administrar bloque Imposición Fiscal');
  define('_MI_XASSET_VERSION_REGIONZONE_INDEX','Administrar bloque Zona Región');
  define('_MI_XASSET_VERSION_APPLICATION_PRODUCT_ADD','Añadir Aplicación al producto');
  define('_MI_XASSET_VERSION_CURRENCY_ADD','Administrar añadir Moneda');
  define('_MI_XASSET_VERSION_CURRENCY_INDEX','Administrar Página Inicio según Moneda');
  define('_MI_XASSET_VERSION_GATEWAY_INDEX','Administrar Página Inicio según método de pago');
  define('_MI_XASSET_VERSION_ORDER_STAGE1','Página de Pedidos - Paso 1');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS','Página de Pedidos - Detalles de Usuario');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS_ADD','Página de Pedidos - Bloque Añadir/Editar Detalles de Usuario');
  define('_MI_XASSET_VERSION_ORDER_INDEX','Página de Inicio de Pedidos');
  define('_MI_XASSET_VERSION_ORDER_CART','Página de Pedidos');
  define('_MI_XASSET_VERSION_CONFIG','Administrar Configuración de la Página de Inicio');
  define('_MI_XASSET_VERSION_ORDER_CHECKOUT','Página de comprobación del pedido');
  define('_MI_XASSET_VERSION_GATEWAY_LOGS','Página de Logs de las Entradas');
  define('_MI_XASSET_VERSION_GATEWAY_DET','Página de Logs detallados sobre las Entradas');
  define('_MI_XASSET_VERSION_PRODUCT','Página del Producto');
  define('_MI_XASSET_VERSION_DOWNLOADS','Página de Mis Descargas');
  define('_MI_XASSET_VERSION_ORDER_TRACKING','Administrar Página donde se muestra el orden');
  define('_MI_XASSET_VERSION_SUPPORT','Administrar Página de Soporte');
  define('_MI_XASSET_VERSION_ORDER_DETAILS','Administrar Página con los Detalles del Pedido');
  define('_MI_XASSET_VERSION_ADMIN_MEMBERSHIP','Administrar Página de los Miembros');
  //submenu nams
  define('_MI_XASSET_SUBMENU_MY_DOWNLOAD','Descargar');
  define('_MI_XASSET_SUBMENU_MY_LICENSED','Mis Licencias');
  define('_MI_XASSET_SUBMENU_EVALUATION','Infowinner');
  define('_MI_XASSET_SUBMENU_MY_CART','Mi Cesta');
  define('_MI_XASSET_SUBMENU_MY_DETAILS','Mis Detalles');
  define('_MI_XASSET_SUBMENU_MY_DOWNLOADS','Mis Descargas');
  //module xoops_version constants
  define('_MI_XASSET_MODULE_NAME','xasset - Distribución Segura de Software');
  define('_MI_XASSET_MODULE_DESCRIPTION','Administración y distribución de Activos');
  //email temapltes constats
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFY','Cliente : Producto Pedido');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYSBJ','Gracias por su pedido.');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYCAP','Ser notificado cuando compra un producto');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYDSC','Enviar notificación cuando un cliente compra un producto');

  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFY','Administración : Pedidos de Producto');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYSBJ','Un Cliente ha comprado un producto.');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYCAP','Ser notificado cuando un cliente compre un producto.');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYDSC','Enviar notificación a los administardores cada vez que un producto sea comprado');
  
  define('_MI_XASSET_APP_NEW_USER_NOTIFY','Cliente : Correo de bienvenida.');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYSBJ','Xasset, Registro e Información de Cuenta');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAP','Notificar al cliente del registro y la información de la cuenta.');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAPDSC','Enviar correo a los nuevos usuarios registrados.');

?>
