<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-10 00:07:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: departmentId ~ DOCROOT\Robi\views\hr\form\employeeofficialprofile.php [ 43 ] in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php:43
2016-03-10 00:07:13 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 43, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php:43
2016-03-10 00:07:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php on line 43 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:07:37 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'F:\\xampp\\htdocs...', 252, Array)
#1 F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php(43): Kohana_Form::select('departmentId', '', '', Array)
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#15 {main} in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:22:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php on line 43 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:22:26 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'F:\\xampp\\htdocs...', 252, Array)
#1 F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php(43): Kohana_Form::select('departmentId', '', '', Array)
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#15 {main} in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:22:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php on line 43 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:22:40 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'F:\\xampp\\htdocs...', 252, Array)
#1 F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php(43): Kohana_Form::select('departmentId', '', NULL, Array)
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#15 {main} in F:\xampp\htdocs\windybdnew\system\classes\Kohana\Form.php:252
2016-03-10 00:38:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: comNameId ~ DOCROOT\Robi\views\hr\form\employeeofficialprofile.php [ 2 ] in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php:2
2016-03-10 00:38:10 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 2, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\xampp\htdocs\windybdnew\Robi\views\hr\form\employeeofficialprofile.php:2
2016-03-10 01:19:34 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in file:line
2016-03-10 01:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 01:34:54 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 140 ] in file:line
2016-03-10 01:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 03:53:04 --- CRITICAL: View_Exception [ 0 ]: The requested view hr_report/employeewisepf could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-10 03:53:04 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('hr_report/emplo...')
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('hr_report/emplo...', NULL)
#2 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(328): Kohana_View::factory('hr_report/emplo...')
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_employeewisepf()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-10 04:24:00 --- CRITICAL: View_Exception [ 0 ]: The requested view hr/report/companywisepf could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-10 04:24:00 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('hr/report/compa...')
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('hr/report/compa...', NULL)
#2 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(402): Kohana_View::factory('hr/report/compa...')
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_companywisepf()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-10 04:29:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'hr' (T_STRING) ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 416 ] in file:line
2016-03-10 04:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 04:32:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ DOCROOT\Robi\views\hr\report\totalpf.php [ 20 ] in F:\xampp\htdocs\windybdnew\Robi\views\hr\report\totalpf.php:20
2016-03-10 04:32:59 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\views\hr\report\totalpf.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 20, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\xampp\htdocs\windybdnew\Robi\views\hr\report\totalpf.php:20
2016-03-10 04:55:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ DOCROOT\Robi\views\accounts\form\createsalary.php [ 11 ] in F:\xampp\htdocs\windybdnew\Robi\views\accounts\form\createsalary.php:11
2016-03-10 04:55:56 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\views\accounts\form\createsalary.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 11, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#2 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('F:\\xampp\\htdocs...')
#6 F:\xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#7 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#11 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\xampp\htdocs\windybdnew\Robi\views\accounts\form\createsalary.php:11
2016-03-10 05:59:03 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 141 ] in file:line
2016-03-10 05:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 05:59:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 141 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:141
2016-03-10 05:59:37 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(141): Kohana_Core::error_handler(8, 'Array to string...', 'F:\\xampp\\htdocs...', 141, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempofficialprofile()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:141
2016-03-10 07:20:49 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/1049): Unknown database 'newwindybd' ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-03-10 07:20:49 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('menu_items')
#3 C:\xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\windybdnew\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\windybdnew\modules\menu\classes\kohana\menu.php(24): Kohana_ORM::factory('menu_item')
#8 C:\xampp\htdocs\windybdnew\modules\menu\classes\kohana\menu.php(38): Kohana_Menu->__construct('menu/example')
#9 C:\xampp\htdocs\windybdnew\application\classes\Controller\Application.php(9): Kohana_Menu::factory('example')
#10 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\windybdnew\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-03-10 08:41:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Hr_Employeeinfo::action_getDepartments(), called in C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php on line 84 and defined ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 198 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 08:41:18 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(198): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 198, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 08:41:44 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Hr_Employeeinfo::action_getDepartments(), called in C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php on line 84 and defined ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 198 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 08:41:44 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(198): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 198, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 08:41:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Hr_Employeeinfo::action_getDepartments(), called in C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php on line 84 and defined ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 198 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 08:41:50 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(198): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 198, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:198
2016-03-10 21:16:02 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 205 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:16:02 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(205): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 205, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:16:07 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 205 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:16:07 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(205): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 205, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:30 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 205 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:30 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(205): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 205, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:37 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 205 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:37 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(205): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 205, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:55 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 205 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:17:55 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(205): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 205, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:205
2016-03-10 21:20:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 201 ] in file:line
2016-03-10 21:20:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 21:20:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 201 ] in file:line
2016-03-10 21:20:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 21:46:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 207 ] in file:line
2016-03-10 21:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 21:46:30 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 209 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:209
2016-03-10 21:46:30 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(209): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 209, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:209
2016-03-10 21:47:04 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 209 ] in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:209
2016-03-10 21:47:04 --- DEBUG: #0 C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(209): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 209, Array)
#1 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_getDepartments()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:209
2016-03-10 21:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$option' (T_VARIABLE), expecting function (T_FUNCTION) ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 218 ] in file:line
2016-03-10 21:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 21:54:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$option' (T_VARIABLE), expecting function (T_FUNCTION) ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 218 ] in file:line
2016-03-10 21:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-10 21:54:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$option' (T_VARIABLE), expecting function (T_FUNCTION) ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 218 ] in file:line
2016-03-10 21:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line