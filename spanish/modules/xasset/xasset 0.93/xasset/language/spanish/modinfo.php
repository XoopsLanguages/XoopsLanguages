<?php

  //Properties admin page
  define('_MI_DOWNLOADHOME','Directorio de Descarga');
  define('_MI_DOWNLOADHOMEDSC','Es el directorio donde los archivos activos ser�n almacenados para su descarga');
  define('_MI_XASSET_SHOW_MIN_LICENSE','Mostrar Licencia Reducida.');
  define('_MI_XASSET_SHOW_MIN_L_DESC','Mostrar la Columna de la Licencia Reducida en la p�gina de Evaluaci�n.');
  define('_MI_XASSET_SHOW_MAX_DOWNLOADS','Mostrar M�ximas Descargas.');
  define('_MI_XASSET_SHOW_MAX_D_DESC','Mostrar Columna de M�ximas Descargas en la p�gina de evaluaci�n.');
  define('_MI_XASSET_SHOW_MAX_DAYS','Mostrar M�ximos D�as.');
  define('_MI_XASSET_SHOW_MAX_DAYS_DESC','Mostrar Columna M�ximos D�as en la p�gina de evaluaci�n.');
  define('_MI_XASSET_SHOW_EXPIRES','Mostrar Fecha de Expiraci�n.');
  define('_MI_XASSET_SHOW_EXPIRES_DESC','Mostrar Columna de la fecha de expiraci�n en la p�gina de evaluaci�n.');
  define('_MI_XASSET_SHOW_SAMPLES','Mostrar Columna de Ejemplos');
  //admin menus
  define('_MI_XASSET_MENU_PREFERENCES', 'Preferencias');
  define('_MI_XASSET_MENU_CHECK_TABLES', 'Comprobar Tablas');
  define('_MI_XASSET_MENU_MANAGE_APPLICATIONS', 'Administrar Aplicaciones');
  define('_MI_XASSET_MENU_MANAGE_LICENSES', 'Administrar Licencias');
  define('_MI_XASSET_MENU_MANAGE_STATS','Administrar Estad�sticas de Descargas');
  define('_MI_XASSET_MENU_MANAGE_PACKAGES', 'Administrar Paquetes');
  define('_MI_XASSET_MENU_MANAGE_LINKS', 'Administrar Enlaces');
  define('_MI_XASSET_MENU_MANAGE_REGIONS', 'Administrar Regiones');
  define('_MI_XASSET_MENU_MANAGE_COUNTRIES', 'Administrar Pa�ses');
  define('_MI_XASSET_MENU_MANAGE_ZONES', 'Administrar Zonas');
  define('_MI_XASSET_MENU_MANAGE_TAXES', 'Administrar Tarifas e impuestos');
  define('_MI_XASSET_MENU_MANAGE_CURRENCIES', 'Administrar Monedas');
  define('_MI_XASSET_MENU_MANAGE_GATEWAYS', 'Administrar Entradas');
  define('_MI_XASSET_MENU_MANAGE_GATE_LOGS', 'Mostrar Logs de las Entradas');
  define('_MI_XASSET_MENU_MANAGE_ORDERS','Mostrar Pedidos');
  define('_MI_XASSET_MENU_MANAGE_MEMBERSHIP','Administrar Miembros');
  //template names
  define('_MI_XASSET_VERSION_ADMIN_INDEX','Administrar P�gina de Inicio');
  define('_MI_XASSET_VERSION_ADMIN_APP_MAINTENANCE','Administrar Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_LICENCE_MAINTENANCE','Administrar Licencia');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_MAINTENANCE','Administrar Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LICENSE_BLOCK','Administrar a�adir bloque de licencia');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_APPLICATION','Administrar Licencias de Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_CLIENTS','Administrar Licencias de Clientes');
  define('_MI_XASSET_VERSION_ADMIN_GROUPS_PACKAGES','Administrar Grupos y Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_GROUP','Administrar el bloque a�adir grupo de paquete');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_BLOCK','Administrar el bloque a�adir paquete');
  define('_MI_XASSET_VERSION_ADMIN_APPLICATION_LINKS','Administrar Enlaces de Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LINKS','Administrar a�adir enlaces de Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_LINKS','Administrar Editar enlaces de Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_APPLICATION','Administrar A�adir/Editar bloque de Aplicaci�n');
  define('_MI_XASSET_VERSION_ADMIN_USERS_INDEX','Administrar �ndice de Usuarios');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_USER','Administrar A�adir/Editar bloque de Usuario');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_PACKAGE_GROUP','Administrar grupo de paquete');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_EDIT','Administrar Edici�n de Paquetes');
  define('_MI_XASSET_VERSION_ADMIN_DOWNLOAD_STATS_INDEX','Administrar P�gina Principal de estad�sticas para las descargas');
  define('_MI_XASSET_VERSION_INDEX_PAGE','P�gina Inicial');
  define('_MI_XASSET_VERSION_LICENSE_INDEX','Licencia para la P�gina Inicial');
  define('_MI_XASSET_VERSION_ERROR_PAGE','P�gina de Error');
  define('_MI_XASSET_VERSION_PACKAGE_INDEX','P�gina Inicial para el Paquete');
  define('_MI_XASSET_VERSION_EVALUATION_INDEX','P�gina Inicial para la Evaluaci�n de las Aplicaciones');
  define('_MI_XASSET_VERSION_COUNTRY_ADD','Administrar bloque a�adir pa�s');
  define('_MI_XASSET_VERSION_COUNTRY_INDEX','Administrar P�gina Inicio por Pa�s');
  define('_MI_XASSET_VERSION_REGION_INDEX','P�gina de Inicio seg�n Regi�n');
  define('_MI_XASSET_VERSION_REGION_ADD','A�adir P�gina de Regi�n');
  define('_MI_XASSET_VERSION_ZONE_ADD','Administrar bloque A�adir Zona');
  define('_MI_XASSET_VERSION_ZONE_INDEX','Administrar P�gina Inicio de la Zona');
  define('_MI_XASSET_VERSION_TAXRATES_INDEX','Administrar P�gina Inicio de Precios e impuestos');
  define('_MI_XASSET_VERSION_TAX_CLASS_ADD','Administrar bloque A�adir Tipo de Impuestos');
  define('_MI_XASSET_VERSION_TAX_RATE_ADD','Administrar bloque Imposici�n Fiscal');
  define('_MI_XASSET_VERSION_REGIONZONE_INDEX','Administrar bloque Zona Regi�n');
  define('_MI_XASSET_VERSION_APPLICATION_PRODUCT_ADD','A�adir Aplicaci�n al producto');
  define('_MI_XASSET_VERSION_CURRENCY_ADD','Administrar a�adir Moneda');
  define('_MI_XASSET_VERSION_CURRENCY_INDEX','Administrar P�gina Inicio seg�n Moneda');
  define('_MI_XASSET_VERSION_GATEWAY_INDEX','Administrar P�gina Inicio seg�n m�todo de pago');
  define('_MI_XASSET_VERSION_ORDER_STAGE1','P�gina de Pedidos - Paso 1');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS','P�gina de Pedidos - Detalles de Usuario');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS_ADD','P�gina de Pedidos - Bloque A�adir/Editar Detalles de Usuario');
  define('_MI_XASSET_VERSION_ORDER_INDEX','P�gina de Inicio de Pedidos');
  define('_MI_XASSET_VERSION_ORDER_CART','P�gina de Pedidos');
  define('_MI_XASSET_VERSION_CONFIG','Administrar Configuraci�n de la P�gina de Inicio');
  define('_MI_XASSET_VERSION_ORDER_CHECKOUT','P�gina de comprobaci�n del pedido');
  define('_MI_XASSET_VERSION_GATEWAY_LOGS','P�gina de Logs de las Entradas');
  define('_MI_XASSET_VERSION_GATEWAY_DET','P�gina de Logs detallados sobre las Entradas');
  define('_MI_XASSET_VERSION_PRODUCT','P�gina del Producto');
  define('_MI_XASSET_VERSION_DOWNLOADS','P�gina de Mis Descargas');
  define('_MI_XASSET_VERSION_ORDER_TRACKING','Administrar P�gina donde se muestra el orden');
  define('_MI_XASSET_VERSION_SUPPORT','Administrar P�gina de Soporte');
  define('_MI_XASSET_VERSION_ORDER_DETAILS','Administrar P�gina con los Detalles del Pedido');
  define('_MI_XASSET_VERSION_ADMIN_MEMBERSHIP','Administrar P�gina de los Miembros');
  //submenu nams
  define('_MI_XASSET_SUBMENU_MY_DOWNLOAD','Descargar');
  define('_MI_XASSET_SUBMENU_MY_LICENSED','Mis Licencias');
  define('_MI_XASSET_SUBMENU_EVALUATION','Infowinner');
  define('_MI_XASSET_SUBMENU_MY_CART','Mi Cesta');
  define('_MI_XASSET_SUBMENU_MY_DETAILS','Mis Detalles');
  define('_MI_XASSET_SUBMENU_MY_DOWNLOADS','Mis Descargas');
  //module xoops_version constants
  define('_MI_XASSET_MODULE_NAME','xasset - Distribuci�n Segura de Software');
  define('_MI_XASSET_MODULE_DESCRIPTION','Administraci�n y distribuci�n de Activos');
  //email temapltes constats
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFY','Cliente : Producto Pedido');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYSBJ','Gracias por su pedido.');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYCAP','Ser notificado cuando compra un producto');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYDSC','Enviar notificaci�n cuando un cliente compra un producto');

  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFY','Administraci�n : Pedidos de Producto');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYSBJ','Un Cliente ha comprado un producto.');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYCAP','Ser notificado cuando un cliente compre un producto.');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYDSC','Enviar notificaci�n a los administardores cada vez que un producto sea comprado');
  
  define('_MI_XASSET_APP_NEW_USER_NOTIFY','Cliente : Correo de bienvenida.');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYSBJ','Xasset, Registro e Informaci�n de Cuenta');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAP','Notificar al cliente del registro y la informaci�n de la cuenta.');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAPDSC','Enviar correo a los nuevos usuarios registrados.');

?>
