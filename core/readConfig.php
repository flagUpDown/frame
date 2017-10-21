<?php
namespace core;
defined('HOME') OR exit('No direct script access allowed');

/*
 *读取配置文件中的信息
 *配置文件所在文件目录: HOME/config/
 */
class readConfig
{
	static public $config=array();

	static public function get($file)
	{
		if(isset(self::$config[$file]))
		{
			return self::$config[$file];
		}
		$path=HOME.'config/'.$file.'.php';
		if(is_file($path)){
			$config=include $path;
			self::$config[$file]=$config;
			return $config;
		}
		else
		{
			p("config file not find: ".$file);
		}
	}
}