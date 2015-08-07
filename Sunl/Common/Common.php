<?php
if ( !function_exists('load_config') ) {
    function load_config($config_name = NULL) {
        if ( is_null($config_name) ) {
            return $CONFIG;
        }else{
            return $CONFIG[$config_name];
        }
    }
}
