<?php
namespace Sunl\Core;

// use Sunl\Core\Loader;
use Sunl\Core\URI;
// use Sunl\Core\Error;
// use Sunl\Core\Exception;

define('DS', DIRECTORY_SEPARATOR);
//框架文件路径
define('SUNL_DIR', BASE_DIR . DS . 'Sunl');
//常量定义
define('CORE_DIR',SUNL_DIR . DS .'Core');
//
define('APPS_DIR',BASE_DIR . DS .'Apps');

//引入框架基础文件
require (CORE_DIR . DS . 'Loader.php');
require (CORE_DIR . DS . 'URI.php');
// require (CORE_DIR . DS . 'Error.php');
// require (CORE_DIR . DS . 'Exception.php');
//自动加载

class Sunl {
    
    private $_Uri;
    
    public function __construct() {
        $this->_init();
        
        $this->_Uri = new URI();
    }
    
    private function _init() {
        //错误异常收集
        
    }
    
    public function run() {
        
    }
    
}

$app = new Sunl();
$app->run();
spl_autoload_register('\Sunl\Core\Loader::AutoLoad');

new aaa();