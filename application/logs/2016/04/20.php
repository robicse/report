<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-20 10:54:34 --- CRITICAL: Kohana_Exception [ 0 ]: The created_time property does not exist in the Model_Employee class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php:603
2016-04-20 10:54:34 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('created_time')
#1 F:\xampp\htdocs\report_xls\Robi\views\report\doctorreport.php(67): Kohana_ORM->__get('created_time')
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#3 F:\xampp\htdocs\report_xls\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 F:\xampp\htdocs\report_xls\application\views\template.php(51): Kohana_View->__toString()
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#7 F:\xampp\htdocs\report_xls\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#8 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#12 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#15 {main} in F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php:603
2016-04-20 11:03:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:03:57 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:04:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:04:48 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:00 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:18 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:05:21 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:06:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 4 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:06:17 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(61): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:07:14 --- CRITICAL: Kohana_Exception [ 0 ]: The employee_name property does not exist in the Model_Doctorreport class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php:603
2016-04-20 11:07:14 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('employee_name')
#1 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(30): Kohana_ORM->__get('employee_name')
#2 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#3 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#9 {main} in F:\xampp\htdocs\report_xls\modules\orm\classes\Kohana\ORM.php:603
2016-04-20 11:19:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:19:27 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:19:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:19:45 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:20:34 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:20:34 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:21:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:21:56 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:27:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\plugins\pdf\class.php [ 24 ] in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 11:27:41 --- DEBUG: #0 F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'F:\\xampp\\htdocs...', 24, Array)
#1 F:\xampp\htdocs\report_xls\Robi\classes\Controller\report.php(62): PDF->BasicTable(Array, Array)
#2 F:\xampp\htdocs\report_xls\system\classes\Kohana\Controller.php(84): Controller_Report->action_pdf()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\xampp\htdocs\report_xls\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\xampp\htdocs\report_xls\index.php(125): Kohana_Request->execute()
#8 {main} in F:\xampp\htdocs\report_xls\modules\plugins\pdf\class.php:24
2016-04-20 12:09:17 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant window - assumed 'window' ~ DOCROOT\Robi\classes\Controller\report.php [ 70 ] in F:\xampp\htdocs\report\Robi\classes\Controller\report.php:70
2016-04-20 12:09:17 --- DEBUG: #0 F:\xampp\htdocs\report\Robi\classes\Controller\report.php(70): Kohana_Core::error_handler(8, 'Use of undefine...', 'F:\\xampp\\htdocs...', 70, Array)
#1 F:\xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_xls()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 F:\xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\report\Robi\classes\Controller\report.php:70
2016-04-20 12:13:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ DOCROOT\Robi\classes\Controller\report.php [ 86 ] in file:line
2016-04-20 12:13:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 12:14:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ DOCROOT\Robi\classes\Controller\report.php [ 77 ] in file:line
2016-04-20 12:14:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 12:15:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ DOCROOT\Robi\classes\Controller\report.php [ 77 ] in file:line
2016-04-20 12:15:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 12:15:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ DOCROOT\Robi\classes\Controller\report.php [ 77 ] in file:line
2016-04-20 12:15:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 12:23:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ DOCROOT\Robi\classes\Controller\report.php [ 71 ] in file:line
2016-04-20 12:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line