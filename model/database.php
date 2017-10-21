<?php
namespace model;
defined('HOME') OR exit('No direct script access allowed');

/*
 *连接数据库
 *1.使用单例模式
 */
class database
{
    private static $_instance = null;

    //防止外部调用构造方法
    private function __construct(){}

    //防止克隆
    private function __clone() {}

    public static function getInstance()
    {
        if (self::$_instance === null)
        {
            $database = \core\readConfig::get('database');
            try{
                self::$_instance = new \PDO($database['DSN'],$database['USERNAME'],$database['PASSWD']);
                self::$_instance->exec('SET character_set_connection='.$database['CHARSET'].', character_set_results='.$database['CHARSET'].', character_set_client=binary');
            }catch (\PDOException $e){
                p("database connect error!");
            }
        }
        return self::$_instance;
    }
}