<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-25 11:49:48 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel' not found ~ DOCROOT\Robi\classes\Controller\report.php [ 78 ] in file:line
2016-04-25 11:49:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 11:52:19 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel' not found ~ DOCROOT\Robi\classes\Controller\report.php [ 78 ] in file:line
2016-04-25 11:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 11:55:23 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel_Style_Alignment' not found ~ DOCROOT\phpexcel\config\phpexcel.php [ 12 ] in file:line
2016-04-25 11:55:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:03:32 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 111 ] in file:line
2016-04-25 12:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:35:11 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 111 ] in file:line
2016-04-25 12:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:35:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 111 ] in file:line
2016-04-25 12:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:35:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 111 ] in file:line
2016-04-25 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:35:23 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 111 ] in file:line
2016-04-25 12:35:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:55:49 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 12:55:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:55:54 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 12:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:55:57 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 12:55:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:56:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Employee as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 12:56:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 12:57:46 --- CRITICAL: ErrorException [ 4096 ]: Object of class PHPExcel could not be converted to string ~ DOCROOT\Robi\classes\Controller\report.php [ 81 ] in G:\Xampp\htdocs\report\Robi\classes\Controller\report.php:81
2016-04-25 12:57:46 --- DEBUG: #0 G:\Xampp\htdocs\report\Robi\classes\Controller\report.php(81): Kohana_Core::error_handler(4096, 'Object of class...', 'G:\\Xampp\\htdocs...', 81, Array)
#1 G:\Xampp\htdocs\report\system\classes\Kohana\Controller.php(84): Controller_Report->action_xls1()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\Xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 G:\Xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\Xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 G:\Xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#7 {main} in G:\Xampp\htdocs\report\Robi\classes\Controller\report.php:81
2016-04-25 12:59:21 --- CRITICAL: Kohana_Exception [ 0 ]: The created_time property does not exist in the Model_Employee class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in G:\Xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php:603
2016-04-25 12:59:21 --- DEBUG: #0 G:\Xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('created_time')
#1 G:\Xampp\htdocs\report\Robi\views\report\doctorreport.php(75): Kohana_ORM->__get('created_time')
#2 G:\Xampp\htdocs\report\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#3 G:\Xampp\htdocs\report\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#4 G:\Xampp\htdocs\report\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 G:\Xampp\htdocs\report\application\views\template.php(51): Kohana_View->__toString()
#6 G:\Xampp\htdocs\report\system\classes\Kohana\View.php(62): include('G:\\Xampp\\htdocs...')
#7 G:\Xampp\htdocs\report\system\classes\Kohana\View.php(359): Kohana_View::capture('G:\\Xampp\\htdocs...', Array)
#8 G:\Xampp\htdocs\report\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 G:\Xampp\htdocs\report\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 G:\Xampp\htdocs\report\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#12 G:\Xampp\htdocs\report\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 G:\Xampp\htdocs\report\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 G:\Xampp\htdocs\report\index.php(125): Kohana_Request->execute()
#15 {main} in G:\Xampp\htdocs\report\modules\orm\classes\Kohana\ORM.php:603
2016-04-25 13:01:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Doctorreport as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 13:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 13:02:00 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Doctorreport as array ~ DOCROOT\Robi\classes\Controller\report.php [ 112 ] in file:line
2016-04-25 13:02:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line