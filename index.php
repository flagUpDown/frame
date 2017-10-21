<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
header("Content-type: text/html; charset=utf-8");

define('HOME',realpath("./").'/');
define('CORE', HOME.'core/');
define('CONTROL', HOME.'control/');

//是否开启debug模式
define('DEBUG', true);
if(DEBUG)
	ini_set("display_error", "on");
else 
	ini_set("display_error", "Off");

include CORE.'common/function.php';
include CORE.'C.php';

//载入自动加载函数
spl_autoload_register('core\C::load');

//载入核心类
core\C::init();