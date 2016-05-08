<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-12 00:08:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ DOCROOT\Robi\views\hr\form\employeeofficialprofile.php [ 46 ] in file:line
2016-03-12 00:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-12 09:32:31 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in G:\Xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-03-12 09:32:31 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 G:\Xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 G:\Xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('menu_items')
#3 G:\Xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 G:\Xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 G:\Xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 G:\Xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 G:\Xampp\htdocs\windybdnew\modules\menu\classes\kohana\menu.php(24): Kohana_ORM::factory('menu_item')
#8 G:\Xampp\htdocs\windybdnew\modules\menu\classes\kohana\menu.php(38): Kohana_Menu->__construct('menu/example')
#9 G:\Xampp\htdocs\windybdnew\application\classes\Controller\Application.php(9): Kohana_Menu::factory('example')
#10 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#11 [internal function]: Kohana_Controller->execute()
#12 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#16 {main} in G:\Xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-03-12 10:18:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ DOCROOT\Robi\views\hr\form\employeepf.php [ 11 ] in file:line
2016-03-12 10:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-12 10:19:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: providentFund ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 258 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:258
2016-03-12 10:19:39 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(258): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\\Xampp\\htdocs...', 258, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeepfinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:258
2016-03-12 10:20:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: providentFund ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 258 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:258
2016-03-12 10:20:52 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(258): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\\Xampp\\htdocs...', 258, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeepfinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:258
2016-03-12 10:22:05 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::error(), called in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php on line 265 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 460 ] in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Validation.php:460
2016-03-12 10:22:05 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Validation.php(460): Kohana_Core::error_handler(2, 'Missing argumen...', 'G:\\Xampp\\htdocs...', 460, Array)
#1 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(265): Kohana_Validation->error('hr/form/employe...')
#2 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeepfinfo()
#3 [internal function]: Kohana_Controller->execute()
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Validation.php:460
2016-03-12 20:00:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ DOCROOT\Robi\views\hr\form\employeedocument.php [ 10 ] in G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php:10
2016-03-12 20:00:54 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\\Xampp\\htdocs...', 10, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#2 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 G:\Xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#7 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php:10
2016-03-12 20:04:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 397 ] in file:line
2016-03-12 20:04:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-12 20:04:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: documentTitle ~ DOCROOT\Robi\views\hr\form\employeedocument.php [ 31 ] in G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php:31
2016-03-12 20:04:37 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\\Xampp\\htdocs...', 31, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#2 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 G:\Xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#7 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in G:\Xampp\htdocs\windybdnew\Robi\views\hr\form\employeedocument.php:31
2016-03-12 22:19:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 144 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:144
2016-03-12 22:19:36 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 144, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeeofficialprofileinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:144
2016-03-12 22:20:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 144 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:144
2016-03-12 22:20:31 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 144, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeeofficialprofileinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:144
2016-03-12 22:31:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:31:40 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(140): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 140, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companydetail()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:34:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:34:24 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(140): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 140, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companydetail()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:34:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 210 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:210
2016-03-12 22:34:48 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(210): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 210, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createemployeeofficialprofileinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:210
2016-03-12 22:35:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:35:17 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(140): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 140, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companydetail()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:56:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:56:59 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(140): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 140, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companydetail()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:57:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyId ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140
2016-03-12 22:57:01 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(140): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 140, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companydetail()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:140