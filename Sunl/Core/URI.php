<?php

namespace Sunl\Core;

class URI {
    private $_host;
    
    private $_class;
    
    private $_method;
    
    private $_config;
    
    private $_request;
    
    private $_requestTime;
    
    public function __construct() {
        echo '<pre>';
//         var_dump($_SERVER);
        
        $this->_config = Sunl::load_config('uri');
        var_dump($this->_config);
        $this->_host = $_SERVER['HTTP_HOST'];
        $this->_request = $_SERVER['REQUEST_URI'];
        $this->_requestTime = $_SERVER['REQUEST_TIME'];
    }
    
    /**
     * 获取URI
     */
    private function fetchUri () {
        $_SERVER['REQUEST_URI'];
    }
    
    
    
    
    
}