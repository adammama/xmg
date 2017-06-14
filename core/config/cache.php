<?php
return array(
    'DRIVER'=>'file',
    'OPTION'=>[
        'PATH'=>XMG.'/runtime/cache/'
    ],

    'type'  =>  'File',
    // 缓存有效期为永久有效
    'expire'=>  0,
    //缓存前缀
    'prefix'=>  'think',
     // 指定缓存目录
    'path'  =>  APP_PATH.'runtime/cache/',
);
