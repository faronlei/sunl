<?php

return array(
    //uri
    'uri' => array(
        //缺省url地址
        'default_url' => array(
            'default_url' => 'index.php',
            'default_control' => 'index',
            'default_method' => 'index',
        ),
        //url_model  1、正常，2、pathinfo，3、rewrite
        'url_model' => 1,
        
    ),
    
    //database
    'db' => array(
        'host'     => '',
        'username' => '',
        'password' => '',
        'charset'  => '',
        'db_name'  => '',
    ),
);