<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-02 14:08:38 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:11:18 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:11:27 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:11:27 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:11:27 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:11:27 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:11:27 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:11:28 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:11:28 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:11:28 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:11:28 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:17:53 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:17:53 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:17:53 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:17:53 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:17:53 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:17:54 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:17:54 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:17:54 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:17:54 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:18:19 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:18:19 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:18:19 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:18:19 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:18:21 --> Severity: error --> Exception: User profile request failed! Google returned an error: exception 'Exception' with message 'The Authorization Service has return: invalid_request' in C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\thirdparty\OAuth\OAuth2Client.php:85
Stack trace:
#0 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Model_OAuth2.php(120): OAuth2Client->authenticate('')
#1 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(173): Hybrid_Provider_Model_OAuth2->loginFinish()
#2 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(55): Hybrid_Endpoint->processAuthDone()
#3 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(72): Hybrid_Endpoint->__construct(NULL)
#4 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\index.php(15): Hybrid_Endpoint::process()
#5 C:\xampp\htdocs\codeigniter_demo\application\controllers\hauth.php(110): require_once('C:\\xampp\\htdocs...')
#6 [internal function]: HAuth->endpoint()
#7 C:\xampp\htdocs\codeigniter_demo\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#8 C:\xampp\htdocs\codeigniter_demo\index.php(293): require_once('C:\\xampp\\htdocs...')
#9 {main} C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Auth.php 169
DEBUG - 2016-07-02 14:19:13 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:19:17 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:19:17 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:19:17 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:19:17 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:19:17 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:19:17 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:19:18 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:19:18 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:19:18 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:25:00 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:25:03 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:25:03 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:25:03 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:25:03 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:25:03 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:25:04 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:25:04 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:25:04 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:25:04 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:26:56 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:26:56 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:26:56 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:26:56 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:27:46 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:27:46 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:27:46 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:27:46 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:27:46 --> Severity: error --> Exception: No provider ID specified. C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Adapter.php 70
DEBUG - 2016-07-02 14:28:04 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:28:05 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:28:05 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:28:05 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:28:06 --> Severity: error --> Exception: User profile request failed! Google returned an error: exception 'Exception' with message 'The Authorization Service has return: invalid_request' in C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\thirdparty\OAuth\OAuth2Client.php:85
Stack trace:
#0 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Model_OAuth2.php(120): OAuth2Client->authenticate('')
#1 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(173): Hybrid_Provider_Model_OAuth2->loginFinish()
#2 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(55): Hybrid_Endpoint->processAuthDone()
#3 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(72): Hybrid_Endpoint->__construct(NULL)
#4 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\index.php(15): Hybrid_Endpoint::process()
#5 C:\xampp\htdocs\codeigniter_demo\application\controllers\hauth.php(110): require_once('C:\\xampp\\htdocs...')
#6 [internal function]: HAuth->endpoint()
#7 C:\xampp\htdocs\codeigniter_demo\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#8 C:\xampp\htdocs\codeigniter_demo\index.php(293): require_once('C:\\xampp\\htdocs...')
#9 {main} C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Auth.php 169
DEBUG - 2016-07-02 14:28:45 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:28:45 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:28:45 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:28:45 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:28:54 --> Severity: error --> Exception: User profile request failed! Google returned an error: exception 'Exception' with message 'The Authorization Service has return: invalid_request' in C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\thirdparty\OAuth\OAuth2Client.php:85
Stack trace:
#0 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Model_OAuth2.php(120): OAuth2Client->authenticate('')
#1 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(173): Hybrid_Provider_Model_OAuth2->loginFinish()
#2 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(55): Hybrid_Endpoint->processAuthDone()
#3 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(72): Hybrid_Endpoint->__construct(NULL)
#4 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\index.php(15): Hybrid_Endpoint::process()
#5 C:\xampp\htdocs\codeigniter_demo\application\controllers\hauth.php(110): require_once('C:\\xampp\\htdocs...')
#6 [internal function]: HAuth->endpoint()
#7 C:\xampp\htdocs\codeigniter_demo\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#8 C:\xampp\htdocs\codeigniter_demo\index.php(293): require_once('C:\\xampp\\htdocs...')
#9 {main} C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Auth.php 169
DEBUG - 2016-07-02 14:30:43 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:30:46 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:30:46 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:30:46 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:30:46 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:33:37 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:37:53 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:37:56 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:37:56 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:37:57 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:37:57 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:37:57 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:37:57 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:37:57 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:37:57 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:37:57 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:39:39 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:39:39 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:39:39 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:39:39 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:39:41 --> Severity: error --> Exception: User profile request failed! Google returned an error: exception 'Exception' with message 'The Authorization Service has return: invalid_request' in C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\thirdparty\OAuth\OAuth2Client.php:85
Stack trace:
#0 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Model_OAuth2.php(120): OAuth2Client->authenticate('')
#1 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(173): Hybrid_Provider_Model_OAuth2->loginFinish()
#2 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(55): Hybrid_Endpoint->processAuthDone()
#3 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(72): Hybrid_Endpoint->__construct(NULL)
#4 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\index.php(15): Hybrid_Endpoint::process()
#5 C:\xampp\htdocs\codeigniter_demo\application\controllers\hauth.php(110): require_once('C:\\xampp\\htdocs...')
#6 [internal function]: HAuth->endpoint()
#7 C:\xampp\htdocs\codeigniter_demo\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#8 C:\xampp\htdocs\codeigniter_demo\index.php(293): require_once('C:\\xampp\\htdocs...')
#9 {main} C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Auth.php 169
DEBUG - 2016-07-02 14:41:22 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:22 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:41:22 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:41:22 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
ERROR - 2016-07-02 14:41:29 --> Severity: error --> Exception: User profile request failed! Google returned an error: exception 'Exception' with message 'The Authorization Service has return: invalid_request' in C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\thirdparty\OAuth\OAuth2Client.php:85
Stack trace:
#0 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Provider_Model_OAuth2.php(120): OAuth2Client->authenticate('')
#1 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(173): Hybrid_Provider_Model_OAuth2->loginFinish()
#2 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(55): Hybrid_Endpoint->processAuthDone()
#3 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Endpoint.php(72): Hybrid_Endpoint->__construct(NULL)
#4 C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\index.php(15): Hybrid_Endpoint::process()
#5 C:\xampp\htdocs\codeigniter_demo\application\controllers\hauth.php(110): require_once('C:\\xampp\\htdocs...')
#6 [internal function]: HAuth->endpoint()
#7 C:\xampp\htdocs\codeigniter_demo\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#8 C:\xampp\htdocs\codeigniter_demo\index.php(293): require_once('C:\\xampp\\htdocs...')
#9 {main} C:\xampp\htdocs\codeigniter_demo\application\third_party\hybridauth\Hybrid\Auth.php 169
DEBUG - 2016-07-02 14:41:34 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:37 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:41:37 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:41:37 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:41:37 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:41:44 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:46 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:41:46 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:41:46 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:41:46 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:46:07 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:46:09 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:46:09 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:46:09 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:46:09 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:46:10 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:46:10 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:46:10 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:46:10 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:46:10 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:48:37 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:48:42 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:48:42 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:48:42 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:48:42 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:48:42 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:48:43 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:48:43 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:48:43 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:48:43 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:50:05 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:50:07 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:50:07 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:50:07 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:50:07 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:50:35 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:50:35 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:50:35 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:50:35 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:50:35 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:50:36 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:50:36 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:50:36 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:50:36 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:53:18 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:53:22 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:53:22 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:53:22 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:53:22 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:54:00 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:54:03 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:54:03 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:54:03 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:54:03 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 14:56:37 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:57:58 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:57:58 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 14:57:58 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 14:57:58 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 14:57:58 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 14:57:58 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 14:57:59 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 14:57:59 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 14:57:59 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:03:06 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:03:06 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:03:06 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:03:06 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:03:06 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:03:07 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:03:07 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:03:07 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:03:07 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:04:58 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:17:04 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:17:04 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:17:04 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:17:04 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:24:23 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:24:26 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:24:26 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:24:26 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:24:26 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:24:26 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:24:27 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:24:27 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:24:27 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:24:27 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:26:28 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:30 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:26:30 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:26:30 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:26:30 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:26:52 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:54 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:26:54 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:26:54 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:26:54 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:29:57 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:29:57 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:29:57 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:29:57 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:36:08 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:36:08 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:36:08 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:36:08 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:36:17 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:36:38 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:36:38 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:36:38 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:36:38 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:36:49 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:37:01 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:37:01 --> controllers.HAuth.login(Facebook) called
DEBUG - 2016-07-02 15:37:01 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:37:01 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:37:01 --> controllers.HAuth.login: service Facebook enabled, trying to authenticate.
DEBUG - 2016-07-02 15:37:02 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:37:02 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:37:02 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:37:02 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:37:33 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:37:33 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:37:33 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:37:33 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:37:35 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:37:35 --> controllers.HAuth.login(Facebook) called
DEBUG - 2016-07-02 15:37:35 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:37:36 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:37:36 --> controllers.HAuth.login: service Facebook enabled, trying to authenticate.
DEBUG - 2016-07-02 15:37:36 --> controller.HAuth.login: user authenticated.
DEBUG - 2016-07-02 15:38:13 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:38:13 --> controllers.HAuth.login(Twitter) called
DEBUG - 2016-07-02 15:38:13 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:38:13 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:38:13 --> controllers.HAuth.login: service Twitter enabled, trying to authenticate.
DEBUG - 2016-07-02 15:38:14 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:38:14 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:38:14 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:38:14 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:38:18 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:38:18 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:38:18 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:38:18 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:38:19 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:38:19 --> controllers.HAuth.login(Twitter) called
DEBUG - 2016-07-02 15:38:19 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:38:19 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:38:19 --> controllers.HAuth.login: service Twitter enabled, trying to authenticate.
DEBUG - 2016-07-02 15:38:19 --> controller.HAuth.login: user authenticated.
DEBUG - 2016-07-02 15:55:21 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:55:23 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:55:31 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:55:52 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.login(Google) called
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:55:52 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.login: service Google enabled, trying to authenticate.
DEBUG - 2016-07-02 15:55:52 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.endpoint called.
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.
DEBUG - 2016-07-02 15:55:52 --> controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.
DEBUG - 2016-07-02 15:55:57 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:56:01 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:59:18 --> HybridAuthLib Class Initalized
DEBUG - 2016-07-02 15:59:18 --> controllers.HAuth.login(Twitter) called
DEBUG - 2016-07-02 15:59:18 --> controllers.HAuth.login: loading HybridAuthLib
DEBUG - 2016-07-02 15:59:18 --> HybridAuthLib class already loaded. Second attempt ignored.
DEBUG - 2016-07-02 15:59:18 --> controllers.HAuth.login: service Twitter enabled, trying to authenticate.
DEBUG - 2016-07-02 15:59:18 --> controller.HAuth.login: user authenticated.
