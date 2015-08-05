<?php
/**
 * 根控制器
 * @author ：sl
 * $time : 2015年8月5日 08:58:20
 */
namespace Sunl\Core;

class Controller {
    public function __construct() {
        echo '我是root';
    }
    
    public function __destruct(){
        echo '我是析构';
    }
}