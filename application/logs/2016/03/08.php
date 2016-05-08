<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-08 00:13:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: companyList ~ DOCROOT\Robi\views\hr\form\addcompany.php [ 47 ] in F:\windybdnew\Robi\views\hr\form\addcompany.php:47
2016-03-08 00:13:33 --- DEBUG: #0 F:\windybdnew\Robi\views\hr\form\addcompany.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 47, Array)
#1 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\R...')
#2 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\R...', Array)
#3 F:\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\a...')
#6 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\a...', Array)
#7 F:\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#11 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\windybdnew\Robi\views\hr\form\addcompany.php:47
2016-03-08 00:14:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete companylist model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:95
2016-03-08 00:14:37 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(95): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletecompany()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:95
2016-03-08 00:16:59 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete companylist model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:96
2016-03-08 00:16:59 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(96): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletecompany()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:96
2016-03-08 00:17:12 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete companylist model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:96
2016-03-08 00:17:12 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(96): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletecompany()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:96
2016-03-08 00:20:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete companylist model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:90
2016-03-08 00:20:02 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(90): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletecompany()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:90
2016-03-08 00:23:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 00:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 00:28:29 --- CRITICAL: Kohana_Exception [ 0 ]: The departmentName property does not exist in the Model_Departmentlist class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:28:29 --- DEBUG: #0 F:\windybdnew\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('departmentName', 'test')
#1 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(124): Kohana_ORM->__set('departmentName', 'test')
#2 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_adddepartment()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#5 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:29:04 --- CRITICAL: Kohana_Exception [ 0 ]: The departmentName property does not exist in the Model_Departmentlist class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:29:04 --- DEBUG: #0 F:\windybdnew\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('departmentName', 'test')
#1 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(124): Kohana_ORM->__set('departmentName', 'test')
#2 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_adddepartment()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#5 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:29:14 --- CRITICAL: Kohana_Exception [ 0 ]: The departmentName property does not exist in the Model_Departmentlist class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:29:14 --- DEBUG: #0 F:\windybdnew\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('departmentName', 'fdgd')
#1 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(124): Kohana_ORM->__set('departmentName', 'fdgd')
#2 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_adddepartment()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#5 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 00:39:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: company ~ DOCROOT\Robi\views\hr\form\adddepartment.php [ 49 ] in F:\windybdnew\Robi\views\hr\form\adddepartment.php:49
2016-03-08 00:39:02 --- DEBUG: #0 F:\windybdnew\Robi\views\hr\form\adddepartment.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 49, Array)
#1 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\R...')
#2 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\R...', Array)
#3 F:\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\a...')
#6 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\a...', Array)
#7 F:\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#11 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\windybdnew\Robi\views\hr\form\adddepartment.php:49
2016-03-08 00:44:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companyName ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 26 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:26
2016-03-08 00:44:08 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\windybdnew\\R...', 26, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_addcompany()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:26
2016-03-08 00:45:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: formLink ~ DOCROOT\Robi\views\hr\form\adddepartment.php [ 3 ] in F:\windybdnew\Robi\views\hr\form\adddepartment.php:3
2016-03-08 00:45:05 --- DEBUG: #0 F:\windybdnew\Robi\views\hr\form\adddepartment.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 3, Array)
#1 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\R...')
#2 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\R...', Array)
#3 F:\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\a...')
#6 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\a...', Array)
#7 F:\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#11 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\windybdnew\Robi\views\hr\form\adddepartment.php:3
2016-03-08 01:07:11 --- CRITICAL: View_Exception [ 0 ]: The requested view hr_employeeinfo/employeeofficialprofile could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:07:11 --- DEBUG: #0 F:\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('hr_employeeinfo...')
#1 F:\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('hr_employeeinfo...', NULL)
#2 F:\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(138): Kohana_View::factory('hr_employeeinfo...')
#3 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempofficialprofile()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#6 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:08:05 --- CRITICAL: View_Exception [ 0 ]: The requested view hr_employeeinfo/employeeofficialprofile could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:08:05 --- DEBUG: #0 F:\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('hr_employeeinfo...')
#1 F:\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('hr_employeeinfo...', NULL)
#2 F:\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(138): Kohana_View::factory('hr_employeeinfo...')
#3 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempofficialprofile()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#6 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:09:08 --- CRITICAL: View_Exception [ 0 ]: The requested view hr_employeeinfo/employeeofficialprofile could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:09:08 --- DEBUG: #0 F:\windybdnew\system\classes\Kohana\View.php(145): Kohana_View->set_filename('hr_employeeinfo...')
#1 F:\windybdnew\system\classes\Kohana\View.php(30): Kohana_View->__construct('hr_employeeinfo...', NULL)
#2 F:\windybdnew\Robi\classes\Controller\hr\Employeeinfo.php(138): Kohana_View::factory('hr_employeeinfo...')
#3 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Employeeinfo->action_createempofficialprofile()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Employeeinfo))
#6 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\windybdnew\index.php(125): Kohana_Request->execute()
#9 {main} in F:\windybdnew\system\classes\Kohana\View.php:145
2016-03-08 01:19:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sectionlist' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 01:19:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 01:21:54 --- CRITICAL: Kohana_Exception [ 0 ]: The sectionName property does not exist in the Model_Sectionlist class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 01:21:54 --- DEBUG: #0 F:\windybdnew\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('sectionName', 'dgdf')
#1 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(231): Kohana_ORM->__set('sectionName', 'dgdf')
#2 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_addsection()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#5 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 01:35:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: formLink ~ DOCROOT\Robi\views\hr\form\addsection.php [ 3 ] in F:\windybdnew\Robi\views\hr\form\addsection.php:3
2016-03-08 01:35:05 --- DEBUG: #0 F:\windybdnew\Robi\views\hr\form\addsection.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 3, Array)
#1 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\R...')
#2 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\R...', Array)
#3 F:\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\a...')
#6 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\a...', Array)
#7 F:\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#11 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\windybdnew\Robi\views\hr\form\addsection.php:3
2016-03-08 03:21:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 03:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 03:24:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: desigId ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 495 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:495
2016-03-08 03:24:57 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(495): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 495, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletecategory()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:495
2016-03-08 03:28:49 --- CRITICAL: Kohana_Exception [ 0 ]: The categoryName property does not exist in the Model_Designationlist class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 03:28:49 --- DEBUG: #0 F:\windybdnew\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('categoryName', 'Permanent1')
#1 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(486): Kohana_ORM->__set('categoryName', 'Permanent1')
#2 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_editcategory()
#3 [internal function]: Kohana_Controller->execute()
#4 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#5 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 F:\windybdnew\index.php(125): Kohana_Request->execute()
#8 {main} in F:\windybdnew\modules\orm\classes\Kohana\ORM.php:702
2016-03-08 03:42:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: catId ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 603 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:603
2016-03-08 03:42:06 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(603): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 603, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_editbank()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:603
2016-03-08 03:50:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_bankbranch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 03:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 03:56:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bankId ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 734 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:734
2016-03-08 03:56:56 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(734): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 734, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletebranch()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:734
2016-03-08 03:57:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bankId ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 746 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:746
2016-03-08 03:57:11 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(746): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 746, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletebranch()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:746
2016-03-08 03:57:36 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete bankbranch model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:735
2016-03-08 03:57:36 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(735): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_deletebranch()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:735
2016-03-08 04:06:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_weekendlist' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 04:06:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 04:07:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_weekendlist' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-03-08 04:07:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-08 04:33:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: weekendDate ~ DOCROOT\Robi\classes\Controller\hr\Settings.php [ 779 ] in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:779
2016-03-08 04:33:59 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Settings.php(779): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\\windybdnew\\R...', 779, Array)
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Settings->action_addweekend()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Settings))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Settings.php:779
2016-03-08 05:00:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attendanceRuleName ~ DOCROOT\Robi\views\hr\form\attendancerule.php [ 9 ] in F:\windybdnew\Robi\views\hr\form\attendancerule.php:9
2016-03-08 05:00:43 --- DEBUG: #0 F:\windybdnew\Robi\views\hr\form\attendancerule.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\windybdnew\\R...', 9, Array)
#1 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\R...')
#2 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\R...', Array)
#3 F:\windybdnew\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\windybdnew\application\views\template.php(61): Kohana_View->__toString()
#5 F:\windybdnew\system\classes\Kohana\View.php(62): include('F:\\windybdnew\\a...')
#6 F:\windybdnew\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\\windybdnew\\a...', Array)
#7 F:\windybdnew\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\windybdnew\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Attendance))
#11 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\windybdnew\index.php(125): Kohana_Request->execute()
#14 {main} in F:\windybdnew\Robi\views\hr\form\attendancerule.php:9
2016-03-08 06:10:26 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete attendancerule model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in F:\windybdnew\Robi\classes\Controller\hr\Attendance.php:109
2016-03-08 06:10:26 --- DEBUG: #0 F:\windybdnew\Robi\classes\Controller\hr\Attendance.php(109): Kohana_ORM->delete()
#1 F:\windybdnew\system\classes\Kohana\Controller.php(84): Controller_Hr_Attendance->action_deleteattendancerule()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\windybdnew\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hr_Attendance))
#4 F:\windybdnew\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\windybdnew\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\windybdnew\index.php(125): Kohana_Request->execute()
#7 {main} in F:\windybdnew\Robi\classes\Controller\hr\Attendance.php:109
2016-03-08 06:25:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ DOCROOT\Robi\classes\Controller\hr\Attendance.php [ 189 ] in file:line
2016-03-08 06:25:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line