<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-29 00:02:42 --- CRITICAL: View_Exception [ 0 ]: The requested view main/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-29 00:02:42 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('main/header')
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/header', NULL)
#2 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Leave.php(48): Kohana_View::factory('main/header')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Leave->action_createleavepackage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Leave))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-29 00:03:29 --- CRITICAL: View_Exception [ 0 ]: The requested view main/sidebar could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-29 00:03:29 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('main/sidebar')
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/sidebar', NULL)
#2 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Leave.php(50): Kohana_View::factory('main/sidebar')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Leave->action_createleavepackage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Leave))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\View.php:145
2016-02-29 04:57:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: gf ~ DOCROOT\Robi\views\hr\form\profession.php [ 92 ] in C:\wamp\www\windybdnew\Robi\views\hr\form\profession.php:92
2016-02-29 04:57:11 --- DEBUG: #0 C:\wamp\www\windybdnew\Robi\views\hr\form\profession.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\win...', 92, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#2 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#3 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\windybdnew\application\views\template.php(59): Kohana_View->__toString()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\win...')
#6 C:\wamp\www\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\win...', Array)
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#11 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in C:\wamp\www\windybdnew\Robi\views\hr\form\profession.php:92
2016-02-29 05:27:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 40 ] in file:line
2016-02-29 05:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-29 05:39:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ DOCROOT\Robi\views\hr\form\attendancerule.php [ 20 ] in file:line
2016-02-29 05:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-29 05:52:33 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 05:52:33 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Leave.php(24): Kohana_Validation->check()
#2 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Leave->action_createleavepackage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Leave))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 05:52:57 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 05:52:57 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Leave.php(24): Kohana_Validation->check()
#2 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Leave->action_createleavepackage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Leave))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 05:55:27 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 05:55:27 --- DEBUG: #0 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Leave.php(24): Kohana_Validation->check()
#2 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Leave->action_createleavepackage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Leave))
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php:396
2016-02-29 06:23:46 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('cnv', 'FisrName')
#2 [internal function]: Kohana_Valid::regex('FisrName', 'cnv', '%')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:25:15 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('cnv', 'FisrName')
#2 [internal function]: Kohana_Valid::regex('FisrName', 'cnv', '%s')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '%' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('%s', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '%s')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:28:25 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:28:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('^/*d/', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '^/*d/')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:29:09 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '*' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:29:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('*', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '*')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:30:09 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '/' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('/^a*', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '/^a*')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:30:46 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:30:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('\\^a*', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '\\^a*')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:31:27 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '/' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:31:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('/^a*', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '/^a*')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 06:32:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 11 ] in file:line
2016-02-29 06:32:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-29 06:34:04 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2016-02-29 06:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\win...', 39, Array)
#1 C:\wamp\www\windybdnew\system\classes\Kohana\Valid.php(39): preg_match('', 'cnv')
#2 [internal function]: Kohana_Valid::regex('cnv', '')
#3 C:\wamp\www\windybdnew\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(29): Kohana_Validation->check()
#5 C:\wamp\www\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempinformation()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#8 C:\wamp\www\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\windybdnew\index.php(125): Kohana_Request->execute()
#11 {main} in file:line
2016-02-29 22:28:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GF ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 145 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:28:17 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 145, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempprofession()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GF ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 145 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:29:51 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 145, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempprofession()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:30:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GF ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 145 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:30:01 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 145, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempprofession()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:32:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GF ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 145 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:32:15 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 145, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempprofession()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:33:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GF ~ DOCROOT\Robi\classes\Controller\hr\Employeeinfo.php [ 145 ] in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 22:33:02 --- DEBUG: #0 F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\xampp\\htdocs...', 145, Array)
#1 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempprofession()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#4 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\xampp\htdocs\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php:145
2016-02-29 23:13:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$attributes' (T_VARIABLE), expecting '(' ~ DOCROOT\Robi\views\hr\form\profession.php [ 93 ] in file:line
2016-02-29 23:13:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-29 23:13:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$attributes' (T_VARIABLE), expecting '(' ~ DOCROOT\Robi\views\hr\form\profession.php [ 93 ] in file:line
2016-02-29 23:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line