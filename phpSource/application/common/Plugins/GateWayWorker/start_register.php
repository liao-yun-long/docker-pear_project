<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Workerman\Worker;
use GatewayWorker\Register;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';


// 自动加载类

// register 必须是text协议
$register = new Register('http://' . SERVER_ADDRESS . ':' . SERVER_PORT);

// 如果不是在根目录启动，则运行runAll方法
if (!defined('GLOBAL_START')) {
    Worker::runAll();
}

