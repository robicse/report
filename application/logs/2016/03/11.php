<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-11 12:03:03 --- CRITICAL: View_Exception [ 0 ]: The requested view accounts/report/banksheet could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-11 12:03:03 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('accounts/report...')
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('accounts/report...', NULL)
#2 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php(126): Kohana_View::factory('accounts/report...')
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Accounts_Salary->action_banksheet()
#4 [internal function]: Kohana_Controller->execute()
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-11 12:21:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: empId ~ DOCROOT\Robi\classes\Controller\accounts\Salary.php [ 195 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php:195
2016-03-11 12:21:46 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php(195): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 195, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Accounts_Salary->action_viewpayslip()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php:195
2016-03-11 21:41:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: empId ~ DOCROOT\Robi\classes\Controller\accounts\Salary.php [ 195 ] in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php:195
2016-03-11 21:41:57 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php(195): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\\Xampp\\htdocs...', 195, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Accounts_Salary->action_viewpayslip()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#4 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php:195
2016-03-11 22:33:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$monthlyInstallment' (T_VARIABLE) ~ DOCROOT\Robi\classes\Controller\accounts\Salary.php [ 367 ] in file:line
2016-03-11 22:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-11 22:34:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ DOCROOT\Robi\views\accounts\form\addloan.php [ 56 ] in file:line
2016-03-11 22:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-11 22:35:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ DOCROOT\Robi\views\accounts\form\addloan.php [ 56 ] in file:line
2016-03-11 22:35:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-11 22:36:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: remarks ~ DOCROOT\Robi\views\accounts\form\addloan.php [ 68 ] in G:\Xampp\htdocs\windybdnew\Robi\views\accounts\form\addloan.php:68
2016-03-11 22:36:22 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\Robi\views\accounts\form\addloan.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\\Xampp\\htdocs...', 68, Array)
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#2 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 G:\Xampp\htdocs\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#7 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#11 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in G:\Xampp\htdocs\windybdnew\Robi\views\accounts\form\addloan.php:68
2016-03-11 23:56:41 --- CRITICAL: View_Exception [ 0 ]: The requested view accounts/report/viewotsheet could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145
2016-03-11 23:56:41 --- DEBUG: #0 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('accounts/report...')
#1 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('accounts/report...', NULL)
#2 G:\Xampp\htdocs\windybdnew\Robi\classes\Controller\accounts\Salary.php(507): Kohana_View::factory('accounts/report...')
#3 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Accounts_Salary->action_viewotsheet()
#4 [internal function]: Kohana_Controller->execute()
#5 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accounts_Salary))
#6 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 G:\Xampp\htdocs\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 G:\Xampp\htdocs\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in G:\Xampp\htdocs\windybdnew\system\classes\Kohana\View.php:145