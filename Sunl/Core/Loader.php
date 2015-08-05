<?php
/**
 * 加载类
 * @author 雷
 *
 */
namespace Sunl\Core;

// use 
class Loader {
    
    private static $interface = array();
    
    /**
     * 自动加载类
     * @param unknown $className
     */
    public static function AutoLoad( $className ) {
        
        if(self::$interface[$className]) {
            require (self::$interface[$className]);
        }
        
        if ( !trim($className) ) {  //空
            
        }else{                      //不为空
            if(strpos($className, '_') > 0)
            $classNameArr = implode('_', $className);
            var_dump($className);
        }
    }
}