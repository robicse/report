<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-18 15:51:09 --- CRITICAL: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH\views\report\doctorreport.php [ 495 ] in file:line
2016-04-18 15:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', 'F:\\xampp\\htdocs...', 495, Array)
#1 F:\xampp\htdocs\report\application\views\report\doctorreport.php(495): mysql_connect('localhost', 'root', '')
#2 F:\xampp\htdocs\report\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#3 F:\xampp\htdocs\report\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#4 F:\xampp\htdocs\report\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 F:\xampp\htdocs\report\application\views\template.php(51): Kohana_View->__toString()
#6 F:\xampp\htdocs\report\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#7 F:\xampp\htdocs\report\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#8 F:\xampp\htdocs\report\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#12 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#15 {main} in file:line
2016-04-18 16:02:39 --- CRITICAL: Database_Exception [ 1146 ]: Table 'employee.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in F:\xampp\htdocs\report\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-04-18 16:02:39 --- DEBUG: #0 F:\xampp\htdocs\report\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 F:\xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('menu_items')
#2 F:\xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 F:\xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 F:\xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 F:\xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 F:\xampp\htdocs\report\modules\menu\classes\kohana\menu.php(24): Kohana_ORM::factory('menu_item')
#7 F:\xampp\htdocs\report\modules\menu\classes\kohana\menu.php(38): Kohana_Menu->__construct('menu/example')
#8 F:\xampp\htdocs\report\application\classes\Controller\Application.php(9): Kohana_Menu::factory('example')
#9 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#12 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#15 {main} in F:\xampp\htdocs\report\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-04-18 16:15:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_doctorreport' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-04-18 16:15:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 16:39:27 --- CRITICAL: ErrorException [ 2 ]: mysql_num_rows() expects parameter 1 to be resource, object given ~ APPPATH\classes\Controller\report.php [ 34 ] in file:line
2016-04-18 16:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_num_rows(...', 'F:\\xampp\\htdocs...', 34, Array)
#1 F:\xampp\htdocs\report\application\classes\Controller\report.php(34): mysql_num_rows(Object(Database_MySQLi_Result))
#2 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 16:43:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\views\report\doctorreport.php [ 33 ] in file:line
2016-04-18 16:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 16:47:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$num_rows ~ APPPATH\classes\Controller\report.php [ 12 ] in F:\xampp\htdocs\report\application\classes\Controller\report.php:12
2016-04-18 16:47:00 --- DEBUG: #0 F:\xampp\htdocs\report\application\classes\Controller\report.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'F:\\xampp\\htdocs...', 12, Array)
#1 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\report\application\classes\Controller\report.php:12
2016-04-18 16:48:31 --- CRITICAL: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, object given ~ APPPATH\classes\Controller\report.php [ 35 ] in file:line
2016-04-18 16:48:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', 'F:\\xampp\\htdocs...', 35, Array)
#1 F:\xampp\htdocs\report\application\classes\Controller\report.php(35): mysqli_num_rows(Object(Database_MySQLi_Result))
#2 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 16:50:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: connection ~ APPPATH\classes\Controller\report.php [ 35 ] in F:\xampp\htdocs\report\application\classes\Controller\report.php:35
2016-04-18 16:50:13 --- DEBUG: #0 F:\xampp\htdocs\report\application\classes\Controller\report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 35, Array)
#1 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\report\application\classes\Controller\report.php:35
2016-04-18 17:00:38 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQLi\Result.php [ 33 ] in file:line
2016-04-18 17:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'F:\\xampp\\htdocs...', 33, Array)
#1 F:\xampp\htdocs\report\modules\database\classes\Kohana\Database\MySQLi\Result.php(33): mysqli_result->data_seek('id')
#2 F:\xampp\htdocs\report\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('id')
#3 F:\xampp\htdocs\report\modules\plugins\pdf\class.php(29): Kohana_Database_Result->offsetGet('id')
#4 F:\xampp\htdocs\report\application\classes\Controller\report.php(55): PDF->BasicTable(Array, Array)
#5 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#8 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 17:02:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ MODPATH\plugins\pdf\class.php [ 29 ] in file:line
2016-04-18 17:02:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 17:26:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\report.php [ 67 ] in file:line
2016-04-18 17:26:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 17:27:55 --- CRITICAL: ErrorException [ 1 ]: Class 'modules' not found ~ APPPATH\classes\Controller\report.php [ 66 ] in file:line
2016-04-18 17:27:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 17:37:11 --- CRITICAL: ErrorException [ 2 ]: fopen(../plugins/result.pdf): failed to open stream: No such file or directory ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(../plugin...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('../plugins/resu...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('../plugins/resu...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:37:35 --- CRITICAL: ErrorException [ 2 ]: fopen(..\plugins/result.pdf): failed to open stream: No such file or directory ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(..\\plugin...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('..\\plugins/resu...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('..\\plugins/resu...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:41:26 --- CRITICAL: ErrorException [ 2 ]: fopen(Robi/views/pdf/result.pdf): failed to open stream: Permission denied ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(Robi/view...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('Robi/views/pdf/...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('Robi/views/pdf/...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:41:52 --- CRITICAL: ErrorException [ 2 ]: fopen(Robi/views/pdf/result.pdf): failed to open stream: Permission denied ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:41:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(Robi/view...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('Robi/views/pdf/...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('Robi/views/pdf/...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:41:54 --- CRITICAL: ErrorException [ 2 ]: fopen(Robi/views/pdf/result.pdf): failed to open stream: Permission denied ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:41:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(Robi/view...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('Robi/views/pdf/...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('Robi/views/pdf/...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:42:32 --- CRITICAL: ErrorException [ 2 ]: fopen(Robi/views/pdf/result.pdf): failed to open stream: Permission denied ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(Robi/view...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('Robi/views/pdf/...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('Robi/views/pdf/...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 17:43:39 --- CRITICAL: ErrorException [ 2 ]: fopen(Robi/views/pdf/result.pdf): failed to open stream: Permission denied ~ MODPATH\plugins\pdf\fpdf.php [ 1044 ] in file:line
2016-04-18 17:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(Robi/view...', 'F:\\xampp\\htdocs...', 1044, Array)
#1 F:\xampp\htdocs\report\modules\plugins\pdf\fpdf.php(1044): fopen('Robi/views/pdf/...', 'wb')
#2 F:\xampp\htdocs\report\application\classes\Controller\report.php(60): FPDF->Output('Robi/views/pdf/...', 'F')
#3 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_doctorreport()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#9 {main} in file:line