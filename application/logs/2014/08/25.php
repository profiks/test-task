<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-25 10:34:58 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:34:58 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:35:11 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:35:11 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:35:51 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:35:51 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:37:45 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:37:45 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:38:09 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:38:09 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:38:22 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 10:38:22 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 12:59:46 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 12:59:46 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(122): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:04:19 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:04:19 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:04:41 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:04:41 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:05:04 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:05:04 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:05:32 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:05:32 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:24:33 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:24:33 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:25:06 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam1e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 13:25:06 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:40:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:40:43 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:40:44 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\View.php:137
2014-08-25 15:40:44 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/default')
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/default', NULL)
#2 D:\OpenServer\domains\projectname\system\classes\HTTP\Exception.php(26): Kohana_View::factory('errors/default')
#3 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception->get_response()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\View.php:137
2014-08-25 15:41:28 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:41:28 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:41:44 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam2e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:41:44 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:41:53 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam2e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:41:53 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:43:25 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam2e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:43:25 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:43:46 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam2e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:43:46 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:43:51 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:43:51 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:44:47 --- CRITICAL: Database_Exception [ 0 ]: pg_connect() [function.pg-connect]: Unable to connect to PostgreSQL server: ВАЖНО:  база данных &quot;projectnam2e&quot; не существует ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 84 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:44:47 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:05 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:05 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:09 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:45:09 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:45:11 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:11 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:21 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:45:21 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:48:01 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:48:01 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:25 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:25 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:35 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:35 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:41 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:57:41 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:57:44 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:57:44 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:58:02 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:58:02 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:58:53 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sdsd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:58:53 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 15:59:03 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 15:59:03 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:00:50 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:00:50 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:00:55 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:00:55 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:01:41 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:01:41 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:01:52 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:01:52 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:02:07 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:02:07 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:02:10 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:02:10 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:02:13 --- CRITICAL: Database_Exception [ 0 ]: Unable to connect to PostgreSQL "default" ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 88 ] in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:02:13 --- DEBUG: #0 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php(157): Kohana_Database_PostgreSQL->connect()
#1 D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#2 D:\OpenServer\domains\projectname\application\classes\Model\clients.php(27): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#3 D:\OpenServer\domains\projectname\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\projectname\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\projectname\modules\database\classes\Kohana\Database\PostgreSQL.php:157
2014-08-25 16:11:16 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:11:16 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:11:28 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sdsd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:11:28 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:12:48 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:12:48 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:13:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:13:49 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:04 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:04 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:23 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:23 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:53 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:14:53 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:15:04 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:15:04 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:15:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sds was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:15:29 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:15:32 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document.window.hystory.back ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php:975
2014-08-25 16:15:32 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#2 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php:975
2014-08-25 16:16:33 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document.window.hystory.back ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php:975
2014-08-25 16:16:33 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#2 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php:975
2014-08-25 16:16:44 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL dfdf was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:16:44 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:16:50 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sdsd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:16:50 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:17:10 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sdsd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:17:10 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:17:16 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79
2014-08-25 16:17:16 --- DEBUG: #0 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\OpenServer\domains\projectname\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\OpenServer\domains\projectname\index.php(123): Kohana_Request->execute()
#4 {main} in D:\OpenServer\domains\projectname\system\classes\Kohana\Request\Client\Internal.php:79