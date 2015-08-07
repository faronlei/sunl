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
    public static function AutoLoad( $class ) {
//         echo $className;
        if( isset(self::$interface[$class]) ) {
            require (self::$interface[$class]);
            return ;
        }
        $file_path = BASE_DIR . '/' . str_replace('\\', '/', $class) . '.php';
        self::$interface[$class] = $file_path;
//         if ( !trim($className) ) {  //空
//             echo '类名不能为空';
//         }else if(strpos($className, '_') > 0){                      //不为空
//             $classNameArr = '';
//             $classNameArr = explode('_', $className);
            
//             $class_path = APPS_DIR . DS . substr( implode(DS, $classNameArr) , 0 , strrpos(implode(DS, $classNameArr), DS) );
//             $file_name = $classNameArr[count($classNameArr) - 1] ;
//             self::$interface[$className] = $class_path . DS . $file_name . '.php';
//         }else{
// //             echo $className;die;
//             $class_path = BASE_DIR;
//             self::$interface[$className] = $class_path . DS . $className . '.php';
//         }
        if( !file_exists(self::$interface[$class]) ){
            require (self::$interface[$class]);
        }
//         return false;
    }
}