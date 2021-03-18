<?php
use think\facade\Env;
/* 定义Session会话字段名 */
$session_name = 's' . substr(md5(__DIR__), -8);
$session_path = env('runtime_path') . 'sess' . DIRECTORY_SEPARATOR;
file_exists($session_path) || mkdir($session_path, 0755, true);

/* 定义Session会话参数 */
return [
    'id' => '',
    'prefix' => 'ta',
    'type' => Env::get('cache.type', 'redis') == 'redis' ? 'redis' : '',
    'expire' => 3600 * 24,
    'auto_start' => true,
    'path' => $session_path,
    'name' => $session_name,
    'var_session_id' => $session_name,

//    'use_trans_sid'  => 0,
//    'httponly'       => true,
//    'secure'         => true,


    // redis主机
    'host' => Env::get('redis.host', '127.0.0.1'),
    // redis端口
    'port' => Env::get('redis.port', 6379),
    // 密码
    'password' => Env::get('redis.password', ''),
];
