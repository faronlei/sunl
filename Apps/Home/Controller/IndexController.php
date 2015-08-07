<?php
namespace Apps\Home\Controller;
// use Sunl\Core\Controller;
class Home_Controller_IndexController extends Controller {
    
    public function __construct(){
        echo 'woshi index';
    }
    /**
     * 测试
     */
    public function index () {
        echo 'uri测试';
    }
}