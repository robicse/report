<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-24 01:37:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\windybdnew\system\classes\Kohana\Cookie.php:67
2016-02-24 01:37:11 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('__atuvc', NULL)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('__atuvc')
#2 C:\wamp\www\windybdnew\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\Cookie.php:67
2016-02-24 01:43:32 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php:114
2016-02-24 01:43:32 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#3 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php:114
2016-02-24 01:43:47 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-24 01:43:47 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\windybdnew\application\classes\Controller\Application.php(6): Kohana_Controller_Template->before()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-24 02:02:41 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:02:41 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:02:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:02:45 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:02:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:02:57 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:03:11 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:03:11 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:03:19 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:03:19 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:04:48 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:04:48 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:01 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:01 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:03 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:03 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:22 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:07:22 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 02:16:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template.php [ 44 ] in C:\wamp\www\windybdnew\application\views\template.php:44
2016-02-24 02:16:12 --- DEBUG: #0 C:\wamp\www\windybdnew\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 44, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\windybdnew\application\views\template.php:44
2016-02-24 02:27:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template.php [ 39 ] in C:\wamp\www\windybdnew\application\views\template.php:39
2016-02-24 02:27:59 --- DEBUG: #0 C:\wamp\www\windybdnew\application\views\template.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\windybdnew\application\views\template.php:39
2016-02-24 02:29:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\template.php [ 9 ] in C:\wamp\www\windybdnew\application\views\template.php:9
2016-02-24 02:29:04 --- DEBUG: #0 C:\wamp\www\windybdnew\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 9, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\windybdnew\application\views\template.php:9
2016-02-24 02:50:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: view ~ MODPATH\menu\classes\kohana\menu.php [ 21 ] in C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php:21
2016-02-24 02:50:46 --- DEBUG: #0 C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\win...', 21, Array)
#1 C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php(38): Kohana_Menu->__construct('menu/default')
#2 C:\wamp\www\windybdnew\application\classes\Controller\Application.php(9): Kohana_Menu::factory()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php:21
2016-02-24 02:51:01 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\menu\classes\kohana\menu.php [ 24 ] in file:line
2016-02-24 02:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 02:51:57 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\menu\classes\kohana\menu.php [ 24 ] in file:line
2016-02-24 02:51:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 02:52:25 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\menu\classes\kohana\menu.php [ 24 ] in file:line
2016-02-24 02:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 02:53:41 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\windybdnew\modules\database\classes\Kohana\Database\MySQL.php:171
2016-02-24 02:53:41 --- DEBUG: #0 C:\wamp\www\windybdnew\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\windybdnew\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\windybdnew\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\wamp\www\windybdnew\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\windybdnew\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\windybdnew\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\windybdnew\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php(24): Kohana_ORM::factory('menu_item')
#8 C:\wamp\www\windybdnew\modules\menu\classes\kohana\menu.php(38): Kohana_Menu->__construct('menu/example')
#9 C:\wamp\www\windybdnew\application\classes\Controller\Application.php(9): Kohana_Menu::factory('example')
#10 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\windybdnew\modules\database\classes\Kohana\Database\MySQL.php:171
2016-02-24 04:48:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH\views\template.php [ 24 ] in C:\wamp\www\windybdnew\application\views\template.php:24
2016-02-24 04:48:38 --- DEBUG: #0 C:\wamp\www\windybdnew\application\views\template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 24, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\windybdnew\application\views\template.php:24
2016-02-24 07:51:38 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 07:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 07:56:46 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 07:56:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 07:57:14 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 07:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 08:00:53 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 08:00:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 08:01:14 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 08:01:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 08:02:12 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 08:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 08:02:14 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 08:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 08:05:39 --- CRITICAL: ErrorException [ 1 ]: Method Menu::__toString() must not throw an exception ~ APPPATH\views\template.php [ 0 ] in file:line
2016-02-24 08:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 23:00:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Application' not found ~ APPPATH\classes\Controller\newcompany.php [ 3 ] in file:line
2016-02-24 23:00:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 23:14:24 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 6 ] in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 23:14:24 --- DEBUG: #0 C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php(6): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\windybdnew\application\classes\Controller\Welcome.php:6
2016-02-24 23:17:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\template.php [ 49 ] in file:line
2016-02-24 23:17:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-24 23:25:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: companyname ~ APPPATH\views\newcompany.php [ 6 ] in C:\wamp\www\windybdnew\application\views\newcompany.php:6
2016-02-24 23:25:13 --- DEBUG: #0 C:\wamp\www\windybdnew\application\views\newcompany.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 6, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\windybdnew\application\views\template.php(59): Kohana_View->__toString()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#6 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Newcompany))
#11 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\windybdnew\application\views\newcompany.php:6
2016-02-24 23:26:14 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\windybdnew\system\classes\Kohana\HTML.php:71
2016-02-24 23:26:14 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\win...', 71, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\windybdnew\system\classes\Kohana\Form.php(107): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\windybdnew\application\views\newcompany.php(6): Kohana_Form::input('companyname', Array)
#4 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#5 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#6 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\wamp\www\windybdnew\application\views\template.php(59): Kohana_View->__toString()
#8 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#9 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#10 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Newcompany))
#14 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\windybdnew\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\HTML.php:71